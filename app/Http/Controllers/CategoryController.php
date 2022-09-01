<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Category;
use DB;
class CategoryController extends Controller
{
    public function category_page(){

        return view('category');
    }

    public function add_page(request $request){

        $request->validate([
            'category_name' => 'required|max:255',
        ],
        [
            'category_name.required' => 'please input category name',
            'category_name.max' => 'please input lass than 255 chars category name',
        ]);
        /* Elo quent warant */
        $category = new Category;
        $category->category_name=$request-> category_name;
        $category->save();

        /*cuery builder*/ 
        // $data = array();
        // $data['category_name']=$request-> category_name;
        // DB::table('categories')->insert($data);

        return redirect()->back()->with('success','Category Inserted');
    }
}
