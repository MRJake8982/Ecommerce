<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pageController extends Controller
{
 public function inicio(){
 	
 	return view('welcome');

 }
 public function login()
 {
 	 return view('loggin');
 }
 public function registro(){
 	 return view('register');
 }
 public function admin()
 {
 	$articulo = App\Articulo::all();
 	return view('admin',compact('articulo'));

 }
  public function detalle($id)
 {
 	$articulo = App\Articulo::findOrFail($id);
 	return view('articulos.detalle',compact('articulo'));

 }

}
