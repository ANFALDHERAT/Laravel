<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    // Accessing books of an author
// AuthorController.php
public function show($id)
{
    $author = Author::find($id);
    $books = $author->books;

    return view('authors.show', compact('author', 'books'));
}

}
