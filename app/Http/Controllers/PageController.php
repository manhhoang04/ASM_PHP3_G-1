<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all(); 
        $books = Book::take(4)->get();
        return view('pages.index', compact('categories', 'books'));
    }
    public function show()
    {
        $categories = Category::all(); 
        $books = Book::all(); 
        return view('pages.list', compact('categories', 'books'));
    }
    
}

