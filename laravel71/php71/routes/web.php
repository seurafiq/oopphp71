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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
