<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();

        return view('categories.index',
        compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
    Category::create([
        'name' => $request->name,
        'description' => $request->description
    ]);

    return redirect()->route('categories.index');
        

    }

    public function show(string $category){
        $item = Category::findOrFail($category);

        return view('categories.show', [
            'category' => $item,
        ]);
    }

    public function edit(string $category){
        $item = Category::findOrFail($category);

        return view('categories.edit', [
            'category' => $item,
        ]);
    }

    public function update(Request $request, string $category){
        $item = Category::findorFail($category);

        $item->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy(string $category){

        $item = Category::findorFail($category);
        $item->delete();

        return redirect()->route('categories.index');
    }
}


