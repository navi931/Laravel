<?php

namespace App\Http\Controllers;
use \App\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{

      public function index()
      {
        $maximo_datos = 10;
        $table = Category::paginate($maximo_datos);
        return view('categories.index')->with('categories',$table);
      }

      public function detail($id)
      {
        $table = Category::find($id);
        return view('categories.detail')->with('category',$table);
      }

      public function create()
      {
        return view('categories.create');
      }
      public function store()
      {
        $name = $_POST['name'];
        $passengers = $_POST['passengers'];
        $cost = $_POST['cost'];

        $data = array('name'=>$name,'passengers'=>$passengers,'cost'=>$cost);
        Category::insert($data);
        return redirect()->action('CategoriesController@index');
      }

      public function modify($id)
      {
        $table = Category::find($id);
        return view('categories.modify')->with('category',$table);
      }

      public function delete($id)
      {
        Category::where('id',$id)->delete();
        return redirect()->action('CategoriesController@index');
      }

      public function update($id)
      {
        $name = $_POST['name'];
        $passengers = $_POST['passengers'];
        $cost = $_POST['cost'];
        $data = array('name'=>$name,'passengers'=>$passengers,'cost'=>$cost);
        Category::where('id',$id)->update($data);
        return redirect()->action('PrincipalController@index');
      }




}
