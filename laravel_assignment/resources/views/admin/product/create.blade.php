@extends('layouts.master', ['currentPage' => 'product-form'])
@section('page-title', 'Create new Product')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Product</h5>
                <form class="card-text" action="/admin/product" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control col-6" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control col-6" type="text" name="description">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control col-3" type="text" name="price">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="categoryId" class="form-control col-5">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <label class="btn btn-outline-info">
                            Choose File <input type="file" name="images" hidden onchange="readURL(this)">
                        </label>
                        <div class="card" hidden="true"
                             id="preview-img"
                             style="background-size: cover; width: 200px; height: 200px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" rows="4" cols="40"></textarea>
                    </div>
                    <div class="form-group">
                        <label>note</label>
                        <input class="form-control col-4" type="text" name="note">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <input class="btn btn-secondary" type="reset" value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('input[type="reset"]').click(function () {
                $('#preview-img').attr('hidden', true);
                $('#preview-img').css('background-image', '');
            })
        })
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview-img').css('background-image', 'url(' + e.target.result + ')');
                }
                $('#preview-img').removeAttr('hidden');

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
