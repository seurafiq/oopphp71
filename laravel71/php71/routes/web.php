<?php

Route::get('/',[
    'uses' => 'NewShopController@index',
    'as'  => '/'
]);

Route::get('/category-product',[
    'uses' => 'NewShopController@categoryProduct',
    'as'  => 'category-product'
]);

Route::get('contact-mail',[
    'uses' => 'NewShopController@contactAndMail',
    'as' => 'contact-mail'
]);

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




Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
