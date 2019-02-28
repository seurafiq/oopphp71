<?php

Route::get('/',[
    'uses' => 'NewShopController@index',
    'as'  => '/'
]);

Route::get('/category-product/{id}',[
    'uses' => 'NewShopController@categoryProduct',
    'as'  => 'category-product'
]);
//Route::get('/home',[
//    'uses' => 'NewShopController@home',
//    'as'  => '/'
//]);

Route::get('product-details/{id}/{name}',[
    'uses' => 'NewShopController@productDetails',
    'as' => 'product-details'
]);


/*cart starts here*/
Route::post('/cart/add',[
    'uses' => 'CartController@addToCart',
    'as' => 'add-to-cart'
]);
Route::get('/cart/show',[
    'uses' => 'CartController@showCart',
    'as' => 'show-cart'

]);

Route::get('/cart/delete/{id}',[
    'uses' => 'CartController@deleteCart',
    'as' => 'delete-cart-item'

]);

Route::post('/cart/update',[
    'uses' => 'CartController@updateCart',
    'as' => 'update-cart'

]);
Route::post('/checkout',[
    'uses' => 'CheckoutController@index',
    'as' => 'checkout'

]);


/*cart ends here*/










/*category manage starts here*/
Route::get('/category/add',[
    'uses' => 'CategoryController@index',
    'as' => 'add-category'
]);
Route::get('/category/manage',[
    'uses' => 'CategoryController@manageCategoryInfo',
    'as' => 'manage-category'
]);

Route::post('/category/save',[
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses' => 'CategoryController@unPublishedCategoryInfo',
    'as' => 'unpublished-category'
]);
Route::get('/category/published/{id}',[
    'uses' => 'CategoryController@publishedCategoryInfo',
    'as' => 'published-category'
]);
Route::get('/category/edit/{id}',[
    'uses' => 'CategoryController@editCategoryInfo',
    'as' => 'edit-category'
]);
Route::post('/category/update/',[
    'uses' => 'CategoryController@updateCategoryInfo',
    'as' => 'update-category'
]);
Route::get('/category/delete/{id}',[
    'uses' => 'CategoryController@deleteCategoryInfo',
    'as' => 'delete-category'
]);
/*category manage ends here*/



/*Brand manage starts here*/
Route::get('/brand/add/',[
    'uses' => 'BrandController@index',
    'as' => 'add-brand'
]);
Route::get('/brand/manage/',[
    'uses' => 'BrandController@manageBrandInfo',
    'as' => 'manage-brand'
]);
Route::post('/brand/save/',[
    'uses' => 'BrandController@saveBrandInfo',
    'as' => 'new-brand'
]);
Route::get('/brand/unpublished/{id}',[
    'uses' => 'BrandController@unPublishedBrandInfo',
    'as' => 'unpublished-brand'
]);
Route::get('/brand/published/{id}',[
    'uses' => 'BrandController@publishedBrandInfo',
    'as' => 'published-brand'
]);
Route::get('/brand/edit/{id}',[
    'uses' => 'BrandController@editBrandInfo',
    'as' => 'edit-brand'
]);
Route::post('/brand/update/',[
    'uses' => 'BrandController@updateBrandInfo',
    'as' => 'update-brand'
]);

Route::get('/brand/delete/{id}',[
    'uses' => 'BrandController@deleteBrandInfo',
    'as' => 'delete-brand'
]);
/*Brand manage ends here*/



/*Product Info starts here*/
Route::get('/product/add/',[
    'uses' => 'ProductController@index',
    'as' => 'add-product'
]);
Route::get('/product/manage/',[
    'uses' => 'ProductController@manageProduct',
    'as' => 'manage-product'
]);
Route::post('/product/save/',[
    'uses' => 'ProductController@saveProduct',
    'as' => 'new-product'
]);
Route::get('/product/edit/{id}',[
    'uses' => 'ProductController@editProduct',
    'as' => 'edit-product'
]);
Route::post('/product/update/',[
    'uses' => 'ProductController@updateProduct',
    'as' => 'update-product'
]);
/*Product Info ends here*/




Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
