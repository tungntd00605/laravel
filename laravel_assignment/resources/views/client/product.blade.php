@extends('layouts.master', ['currentPage' => 'home-page'])
@section('page-title', 'Home Page')
@section('content')
    <div class="row m-1">
        <form action="/" method="GET" class="form-inline" name="category-form">
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
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($list_obj as $obj)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{$obj->images}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">{{$obj->name}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">{{$obj->price}} Đồng</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection