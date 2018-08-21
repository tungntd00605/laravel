@extends('layouts.master', ['currentPage' => 'product-form'])
@section('page-title', 'Product List')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title float-left">
                List Product
                <small class="text-muted">Show all Product</small>
            </h3>
            <a href="/admin/product/create" class="btn float-right"><i class="fas fa-plus-circle"></i> Create New</a>
            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
            @if(count($list_obj)>0)
                <div class="row m-1">
                    <form action="/admin/product" method="GET" class="form-inline" name="category-form">
                        <div class="form-group">
                            <label>Choose a category: </label>
                            <select name="categoryId" class="form-control m-3">
                                <option value="0">All</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id==$choosedCategoryId?'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Apply">
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr class="row">
                        <th class="col-md-1">ID</th>
                        <th class="col-md-2">Thumbnail</th>
                        <th class="col-md-2">Name</th>
                        <th class="col-md-1">Price</th>
                        <th class="col-md-3">Description</th>
                        <th class="col-md-3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list_obj as $item)
                        <tr class="row" id="row-item-{{$item->id}}">
                            <td class="col-md-1">{{$item->id}}</td>
                            <td class="col-md-2">
                                <div class="card"
                                     style="background-image: url('{{$item->images}}'); background-size: cover; width: 60px; height: 60px;">
                                </div>
                            </td>
                            <td class="col-md-2">{{$item->name}}</td>
                            <th class="col-md-1">{{$item->price}}</th>
                            <td class="col-md-3">{{$item->description}}</td>
                            <td class="col-md-3">
                                <a href="/admin/product/{{$item -> id}}/edit" class="btn btn-link btn-edit">Edit</a>&nbsp;&nbsp;
                                <a href="#" id="{{$item-> id}}" class="btn btn-link btn-delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-info" role="alert">
                    Have no product, click <a href="/admin/product/create">here</a> to create new.
                </div>
            @endif
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.btn-delete').click(function (event) {
                if (confirm('Are you sure want to delete this product?')) {
                    $.ajax({
                        method: 'DELETE',
                        url: '/admin/product/' + event.target.id,
                        data: {
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                        },
                        success: function () {
                            alert('Delete success!');
                            $('#row-item-' + event.target.id).remove();
                        },
                        error: function () {
                            alert('Action fails! Please try again later!');
                        }
                    })
                }
            })
        });
    </script>
    <script src="{{asset('js/myscript.js')}}"></script>
@endsection