<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class categoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $shows = Category::all();
        return view('dash.category.add',['shows' => $shows]);
       
    }
    public function insert(Request $request){

         $validatedData = $request->validate([
        'category_name' => 'required|unique:categories|max:255',
        'description' => 'required|max:255',
    ]);
       
        $category_name = $request->category_name;
        $description = $request->description;
        $category_url = str_replace(" ", "-", $category_name);
        
        $data = [
            'category_name' => $category_name,
            'description' => $description,
            'category_url' => $category_url
        ];
        
        $insert = Category::create($data);
        Session::put('messege', 'Category Added Successfully!!');
        return Redirect::to("/dashboard/add-category");
    }

    public function read(){
        
    }
}
