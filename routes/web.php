<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route:: get('/', function(){
  return view('admin.dashboard');

});
Route:: get('/customer/create', function(){
  return view('admin.customer.create');

});
Route:: get('/customers', function(){
  return view('admin.customer.all');

});
