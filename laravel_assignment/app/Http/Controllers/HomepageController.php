<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        if(Input::get('categoryId') == 0){
            $list_obj = Product::all();
        } else {
            $list_obj = Product::where('categoryId', Input::get('categoryId'))->get();
        }
        return view('client.product')
            ->with('list_obj', $list_obj)
            ->with('categories', $categories)
            ->with('choosedCategoryId', Input::get('categoryId'));;
    }
}
