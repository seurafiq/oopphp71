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
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
]);

Route::post('/category/save',[
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
]);
/*category manage ends here*/




Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
