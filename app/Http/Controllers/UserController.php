<?php

namespace App\Http\Controllers;

use App\Book;
use App\Models\Like;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getIndex()
    {
        $books = Book::orderBy('created_at', 'desc')->get();
        return view('users.index', ['books' => $books]);
    }


public function getAdminIndex()
{
    $books = Book::orderBy('title', 'asc')->get();;
    return view ('admin.index', ['books' => $books]);
}

public function getBook($id)
{
    $book = Book::where('id', '=', $id)
    ->with('likes')->first();
    $book= Book::where('id', '=', $id)
    ->with('author')->first();
    return view ('users.readmore', ['book' => $book]);
}

public function getLikeBook($id)
{
    $book = Book::where('id', '=', $id)->first();
    $like = new Like();
    $book->likes()->save($like);
    return redirect()->back();
}

public function getAdminCreate()
{
    $genres = Genre::all();
    $author = Author::all();
    return view('admin.create', ['genres' => $genres, 'author'=>$author] );
    
}

public function getAdminEdit($id)
{
    $book = Book::find($id);
    $genres = Genre::all();
    $author = Author::find($id);

    return view ('admin.edit', 
    ['book' => $book,'bookId' => $id, 'genres' => $genres, 'author'=>$author]);
}

public function bookAdminCreate( Request $request)
{
    $this->validate($request, [
        'title'=> 'Required|min:5',
        'first_name' => 'Required|min:2',
        'last_name'=> 'Required',
        'gender' => 'Required'
    ]);

    $book = new Book([
        'title'=>$request->input('title'),
    ]);
    $author = new Author ([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name')
    ]);
    $genre = new Genre([
        'name' => $request->select('genre')
    ]);
    
    $book->save();
    $author->save();
    $genre->save();
    return redirect()
    ->route('admin.index')
    ->with('info', 'book created, Title is: ' . $request
    ->input('title'));
} 

public function bookAdminUpdate(Request $request)
{
    $this->validate($request, [
        'title'=> 'Required|min:5',
        'first_name'=> 'Required',
        'last_name'=> 'Required', 
        'gender' => 'Required' 
    ]);

    $book = Book::find($request->input('id'));
    $book->title = $request->input('title');
    $book->author->first_name = $request->input('first_name');
    $book->author->last_name = $request->input('last_name');
    $book->author->gender = $request->input('gender');
    $book->save();
    // $book->genres()->detach();
    // $book->genres()->attach($request->input('genres') === null ? [] : $request -> input('genres'));

    
    return redirect()->route('admin.index')
    ->with('info', 'book edited, new title is: ' . $request
    ->input('title'));
}

public function getAdminDelete($id)
{
    $book = Book::find($id);
    $book->likes()->delete();
    $book->delete();
    $book->genres()->delete();
    $book->author()->delete();
    return redirect()
    ->route('admin.index')
    ->with('info', 'book deleted');
}

}
