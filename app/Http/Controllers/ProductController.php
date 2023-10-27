<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\ProductSize;

class ProductController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $subCategories=SubCategory::all();
        $products=Product::paginate(50);
        $data = compact('categories','subCategories','products');
        return view('admin.products')->with($data);
    }
    public function getSubCategory(Request $request)
    {
        $subCategories=SubCategory::where('category_id',$request->category_id)->get();
        return response()->json($subCategories);
    }
    public function create(Request $request)
    {
        $product=new Product();
        if($request->hasFile('image')){
            $image=$request->file('image');
            //save with product sku as image name
            $image->move('product_images',$request->product_sku.'.'.$image->getClientOriginalExtension());
            $product->image = $request->product_sku.'.'.$image->getClientOriginalExtension();
        }
        $product->feature = $request->product_feature;
        $product->sku=$request->product_sku;
        $product->description=$request->product_desc;
        $product->material=$request->product_material;
        $product->category_id=$request->product_category;
        $product->sub_category_id=$request->product_sub_category;
        $product->save();
        $sizes=$request->size;
        $size_skus=$request->size_sku;
        for($i=0;$i<count($sizes);$i++){
            $productSize=new ProductSize();
            $productSize->product_id=$product->id;
            $productSize->size=$sizes[$i];
            $productSize->sku=$size_skus[$i];
            $productSize->save();
        }
        return redirect()->back()->with('success','Product Added Successfully');
    }
    public function delete($id)
    {
        $product=Product::find($id);
        //delete file from folder
        $image_path = public_path().'/product_images/'.$product->image;
        $product->delete();
        $productSizes=ProductSize::where('product_id',$id)->get();
        foreach($productSizes as $productSize){
            $productSize->delete();
        }
        return redirect()->back()->with('success','Product Deleted Successfully');
    }
    public function update(Request $request,$id)
    {
        $product=Product::find($id);
        if($request->hasFile('image')){
            $image=$request->file('image');
            //save with product sku as image name
            $image->move('product_images',$request->product_sku.'.'.$image->getClientOriginalExtension());
            $product->image=$request->product_sku.'.'.$image->getClientOriginalExtension();
        }
        $product->sku=$request->product_sku;
        $product->feature=$request->product_feature;
        $product->description=$request->product_desc;
        $product->material=$request->product_material;
        $product->category_id=$request->product_category;
        $product->sub_category_id=$request->product_sub_category;
        $product->save();
        //delete all previous sizes
        $productSizes=ProductSize::where('product_id',$id)->get();
        foreach($productSizes as $productSize){
            $productSize->delete();
        }
        $sizes=$request->size;
        $size_skus=$request->size_sku;
        for($i=0;$i<count($sizes);$i++){
            $productSize=new ProductSize();
            $productSize->product_id=$product->id;
            $productSize->size=$sizes[$i];
            $productSize->sku=$size_skus[$i];
            $productSize->save();
        }
        return redirect()->back()->with('success','Product Updated Successfully');       
    }
}
