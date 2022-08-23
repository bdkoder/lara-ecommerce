<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function createCategory(){
        return view('admin.category.createCategory');
    }
    public function storeCategory(Request $request){
        // return $request->all();

        // Eloquent

        // $category = new Category();
        // $category->category_name = $request->categoryName;
        // $category->category_desc = $request->categoryDesc;
        // $category->public_status = $request->publicStatus;
        // $category->save();
        // return 'Saved successfully';

        // Category::create($request->all()); // need modern fillable
        // return 'Saved successfully';

        // query builder

        DB::table('categories')->insert([
            'category_name' => $request->categoryName,
            'category_desc' => $request->categoryDesc,
            'public_status' => $request->publicStatus,
        ]);
        // return 'Saved successfully';
        // return redirect('/category/add');
        // return redirect()->back();
        // return redirect()->with('message', 'Saved successfully');

        return redirect('/category/add')->with('message', 'Saved successfully');

    }

    public function manageCategory(){
        $categories = Category::all(); // Eluquent
        return view('admin.category.manageCategory', ['categories' => $categories]);
    }

}
