<?php

Route::get('/{author?}', [
  'uses' => 'QuoteController@getIndex',
  'as' => 'index'
]);

Route::post('/new', [
  'uses' => 'QuoteController@postQuote',
  'as' => 'create'
]);

Route::get('/delete/{quote_id}', [
  'uses' => 'QuoteController@getDeleteQuote',
  'as' => 'delete'
]);

Route::get('/gotemail/{author_name}', [
  'uses' => 'QuoteController@getMailCallback',
  'as' => 'mail_callback'
]);

Route::get('/admin/login', [
  'uses' => 'AdminController@getLogin',
  'as' => 'admin.login'
]);
