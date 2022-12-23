<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function showCategoryPage() {
        $categories = Category::all();
        return view('category')->with('categories', json_decode(json_encode($categories), true));
    }

    function createNewCategory(Request $categoryDetails) {

        $categoryName = $categoryDetails->catName;
        $categoryDescription = $categoryDetails->catDesc;

        $category = Category::create([
            'categoryName' => $categoryName,
            'categoryDescription' => $categoryDescription
        ]);

        return Redirect::back()->with('message','Operation Successful !');
    }

    function updateCatgeoryDetailsByCategoryId(Request $category_details) {
        Category::where('id',$category_details->cat_id)
                        ->update([
                        'categoryName'=>$category_details->cat_name,
                        'categoryDescription'=>$category_details->cat_desc
                    ]);
        return redirect()->back()->with('success', 'your message,here');   
    }

    function deleteSelectedCategoryById($cat_id) {
        if (Session()->has('member')) {
            Category::where('id', $cat_id)->delete();

            return redirect('/app/category');
        } else {
            return redirect('siginin');
        }
    }
}
