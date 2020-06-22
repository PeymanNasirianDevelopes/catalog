<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        //
    }


    public function create(Category $category)
    {

        return view('pages.categories')->with(compact("category"));
    }


    public function store(Request $request)
    {
        $data=ValidationController::categories();

        $photo= $request->file('icon');

        $data['icon']=do_upload($photo);
        Category::create($data);
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }


    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}
