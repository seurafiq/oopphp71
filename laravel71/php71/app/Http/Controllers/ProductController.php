<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();

        return view('admin.product.add-product',[
            'categories'  => $categories,
            'brands'   => $brands
        ]);

    }
    public function saveProduct(Request $request){
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-images';
        $productImage->move($directory,$imageName);
        return 'success';


    }
}
