@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3> Products </h3>
        </div>
        <div class="col-md-6">
            <a data-toggle="modal" data-target="#addModal" href="" class="btn btn-primary float-right">Add Product</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>SKU</th>
                        <th>Description</th>
                        <th>Feature</th>
                        <th>Material</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('product_images/'.$product->image) }}" width="100px" height="100px"></td>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->feature }}</td>
                        <td>{{ $product->material }}</td>
                        <td>{{ $product->category->category_name }}</td>
                        <td>{{ $product->subCategory->sub_category_name }}</td>
                        <td>
                        <a data-toggle="modal" data-target="#editModal" href="" class="btn btn-primary editProduct"
                            data-product_id = "{{ $product->id }}"
                            data-product_sku = "{{ $product->sku }}"
                            data-product_desc = "{{ $product->description }}"
                            data-product_material = "{{ $product->material }}"
                            data-product_category = "{{ $product->category_id }}"
                            data-product_sub_category = "{{ $product->sub_category_id }}"
                            data-product_sizes = "{{ $product->sizes }}">Edit</a>
                            <a href="{{route('delete-product',$product->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
            {{ $products->links() }}
            </div>
            
        </div>
    </div>
    <!-- ADD Modal -->
    <div class="modal fade bd-example-modal-xl" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{route('add-product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="image">Product Image</label>
                                <input type="file" class="form-control" placeholder="Product Image" id="image"
                                    name="image" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_sku">Product SKU</label>
                                <input type="text" class="form-control" placeholder="Product SKU" id="product_sku"
                                    name="product_sku" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_feature">Product Feature</label>
                                <input type="text" class="form-control" placeholder="Product Feature" id="product_feature"
                                    name="product_feature" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_desc">Product Description</label>
                                <input type="text" class="form-control" placeholder="Product Description"
                                    id="product_desc" name="product_desc" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_material">Product Material</label>
                                <input type="text" class="form-control" placeholder="Product Material"
                                    id="product_material" name="product_material" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_category">Product Category</label>
                                <select class="form-control" id="product_category" name="product_category" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="product_sub_category">Product Sub Category</label>
                                <select class="form-control" id="product_sub_category" name="product_sub_category"
                                    required>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                Available Sizes:
                            </div>
                            <div class="col-md-5">
                                <label for="size">Product Size</label>
                                <input type="text" class="form-control" placeholder="Product Size" id="size"
                                    name="size[]" required>
                            </div>
                            <div class="col-md-5">
                                <label for="size_sku">SKU</label>
                                <input type="text" class="form-control" placeholder="SKU" id="size_sku"
                                    name="size_sku[]" required>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary mt-4" type="button" id="addSize">Add</button>
                            </div>
                            <div id="sizes-section"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Add Product</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- modal end -->   
    </div>
    <!-- EDIT Modal -->
    <div class="modal fade bd-example-modal-xl" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{route('add-product')}}" method="POST" enctype="multipart/form-data" id="editForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="image">Product Image</label>
                                <input type="file" class="form-control" placeholder="Product Image" id="image"
                                    name="image">
                            </div>
                            <div class="col-md-6">
                                <label for="product_sku">Product SKU</label>
                                <input type="text" class="form-control" placeholder="Product SKU" id="product_sku"
                                    name="product_sku" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_feature">Product Feature</label>
                                <input type="text" class="form-control" placeholder="Product Feature" id="product_feature"
                                    name="product_feature" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_desc">Product Description</label>
                                <input type="text" class="form-control" placeholder="Product Description"
                                    id="product_desc" name="product_desc" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_material">Product Material</label>
                                <input type="text" class="form-control" placeholder="Product Material"
                                    id="product_material" name="product_material" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_category">Product Category</label>
                                <select class="form-control" id="update-product_category" name="product_category" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="product_sub_category">Product Sub Category</label>
                                <select class="form-control" id="update-product_sub_category" name="product_sub_category"
                                    required>
                                </select>
                            </div>
                            <div class="col-md-10 mt-3">
                                Available Sizes:
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary mt-4" type="button" id="addSizeUpdate">Add</button>
                            </div>
                            <div id="update-sizes-section"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- modal end -->   
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#product_category').on('change', function() {
        var category_id = this.value;
        $("#product_sub_category").html('');
        $.ajax({
            url: "{{ route('getSubCategory') }}",
            type: "POST",
            data: {
                category_id: category_id,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(result) {
                $('#product_sub_category').html(
                    '<option value="">Select Sub Category</option>');
                for (var i = 0; i < result.length; i++) {
                    $("#product_sub_category").append('<option value="' + result[i].id +
                        '">' + result[i]
                        .sub_category_name + '</option>');
                }
            }
        });
    });
    $('#update-product_category').on('change', function() {
        var category_id = this.value;
        $("#update-product_sub_category").html('');
        $.ajax({
            url: "{{ route('getSubCategory') }}",
            type: "POST",
            data: {
                category_id: category_id,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(result) {
                $('#update-product_sub_category').html(
                    '<option value="">Select Sub Category</option>');
                for (var i = 0; i < result.length; i++) {
                    $("#update-product_sub_category").append('<option value="' + result[i].id +
                        '">' + result[i]
                        .sub_category_name + '</option>');
                }
            }
        });
    });
    //if user click on add button add size and size sku in sizes section
    var sizes = 1;
    $("#addSize").click(function() {
        sizes++;
        $("#sizes-section").append('<div class="row container-fluid"><div class="col-md-5" id="size' + sizes +
            '"><label for="size">Product Size</label><input type="text" class="form-control" placeholder="Product Size" id="size" name="size[]" required></div><div class="col-md-5" id="size_sku' +
            sizes +
            '"><label for="size_sku">SKU</label><input type="text" class="form-control" placeholder="SKU" id="size_sku" name="size_sku[]" required></div><div class="col-md-2" id="removeSize' +
            sizes +
            '"><button class="btn btn-danger mt-4" type="button" id="removeSize" data-size="' +
            sizes +
            '">Remove</button></div></div>');
    });
    //if user click on remove button remove size and size sku from sizes section
    $(document).on('click', '#removeSize', function() {
        var id = $(this).data('size');
        $("#size" + id).remove();
        $("#size_sku" + id).remove();
        $("#removeSize" + id).remove();
    });
    //if user click on edit button get product details and show in edit modal
    $(document).on('click', '.editProduct', function() {
        var product_id = $(this).data('product_id');
        var product_sku = $(this).data('product_sku');
        var product_desc = $(this).data('product_desc');
        var product_material = $(this).data('product_material');
        var product_category = $(this).data('product_category');
        var product_sub_category = $(this).data('product_sub_category');
        //get sub category
        $.ajax({
            url: "{{ route('getSubCategory') }}",
            type: "POST",
            data: {
                category_id: product_category,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(result) {
                $('#update-product_sub_category').html(
                    '<option value="">Select Sub Category</option>');
                for (var i = 0; i < result.length; i++) {
                    $("#update-product_sub_category").append('<option value="' + result[i].id +
                        '">' + result[i]
                        .sub_category_name + '</option>');
                }
                $("#update-product_sub_category").val(product_sub_category);
            }
        });
        var product_sizes = $(this).data('product_sizes');
        $("#editForm #product_id").val(product_id);
        $("#editForm #product_sku").val(product_sku);
        $("#editForm #product_desc").val(product_desc);
        $("#editForm #product_material").val(product_material);
        $("#editForm #update-product_category").val(product_category);
        $("#update-sizes-section").html('');
        for (var i = 0; i < product_sizes.length; i++) {
            $("#update-sizes-section").append('<div class="row container-fluid"><div class="col-md-5" id="size' + i +
                '"><label for="size">Product Size</label><input type="text" class="form-control" placeholder="Product Size" id="size" name="size[]" value="' +
                product_sizes[i].size + '" required></div><div class="col-md-5" id="size_sku' + i +
                '"><label for="size_sku">SKU</label><input type="text" class="form-control" placeholder="SKU" id="size_sku" name="size_sku[]" value="' +
                product_sizes[i].sku + '" required></div><div class="col-md-2" id="removeSize' + i +
                '"><button class="btn btn-danger mt-4" type="button" id="removeSize" data-size="' + i +
                '">Remove</button></div></div>');
        }
        //edit product form action
        $("#editForm").attr('action', '{{ url('update-product') }}/' + product_id);
    });
    //if user click on add button add size and size sku in sizes section
    $(document).on('click','#addSizeUpdate',function(){
        sizes++;
        $("#update-sizes-section").append('<div class="row container-fluid"><div class="col-md-5" id="size' + sizes +
            '"><label for="size">Product Size</label><input type="text" class="form-control" placeholder="Product Size" id="size" name="size[]" required></div><div class="col-md-5" id="size_sku' +
            sizes +
            '"><label for="size_sku">SKU</label><input type="text" class="form-control" placeholder="SKU" id="size_sku" name="size_sku[]" required></div><div class="col-md-2" id="removeSize' +
            sizes +
            '"><button class="btn btn-danger mt-4" type="button" id="removeSize" data-size="' +
            sizes +
            '">Remove</button></div></div>');
    });
});
</script>
@endsection