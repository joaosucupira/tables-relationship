<?php

use Illuminate\Support\Facades\Route;

/*
TABELAS :
- PRODUCTS
- ORDER_PRODUCTS
- ORDERS
- CLIENT

CRUD :
- PRODUCTS, CLIENTS

CREATE ORDERS :
- CLIENT [INT], NOTES [STR], PRODUCTS [INT]
|
*/

Route::get('/', function () {
    return view('welcome');
});
