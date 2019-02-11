<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request){
        $category = new Category();
        $category->category_name         = $request->category_name;
        $category->category_description  = $request->category_description;
        $category->publication_status    = $request->publication_status;
        $category->save();
        return 'seccess';

    }

    public function manageCategory(){
        return view('admin.category.manage-category');
    }
}
