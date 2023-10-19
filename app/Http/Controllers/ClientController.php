<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class ClientController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $data = compact('categories', 'subcategories');
        return view('client_layouts.welcome')->with($data);
    }
    public function category(Request $request,$id)
    {
        $categories = Category::all();
        $category_by_id = Category::find($id);
        $subcategories = SubCategory::where('category_id', $id)->get();
        $data = compact('categories', 'subcategories','category_by_id');
        return view('client_layouts.category')->with($data);
    }
    public function products(Request $request,$id)
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $subcategories_by_id = SubCategory::find($id);
        $products = Product::where('sub_category_id', $id)->paginate(16);
        $data = compact('products', 'categories', 'subcategories','subcategories_by_id');
        return view('client_layouts.products')->with($data);
    }
}
