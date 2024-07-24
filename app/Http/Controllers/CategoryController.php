<?php

// app/Http/Controllers/CategoryController.php

// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); 
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id); 
        $books = $category->books;
        return view('categories.show', compact('categories', 'category', 'books'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('books.index')->with('success', 'Category created successfully.');
    }
    public function create()
{    
    return view('categories.create');
}
}

