@extends('layouts.master', ['currentPage' => 'category-form'])
@section('page-title', 'Create new Category')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Category</h5>
                <form class="card-text" action="/admin/category/{{$obj -> id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control col-6" type="text" name="name" value="{{$obj -> name}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control col-6" type="text" name="description" value="{{$obj -> description}}">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <label class="btn btn-outline-info">
                            Choose File <input type="file" name="images" hidden onchange="readURL(this)">
                        </label>
                        <div class="card"
                             id="preview-img"
                             style="background-image: url({{$obj -> images}}); background-size: cover; width: 200px; height: 200px;">
                        </div>
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
