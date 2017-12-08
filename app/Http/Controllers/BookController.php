<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
//use App\Shelf;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $books = Book::all()->toArray();
        
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'book_name' =>  'required',
            'author' =>  'required',
            'shelf' =>  'required',
        ]);
        if ($request->get('shelf')== "Art")
        {
            $shelf_id = 1;
        }
        if ($request->get('shelf')== "Science")
        {
            $shelf_id = 2;
        }
        if ($request->get('shelf')== "Sport")
        {
            $shelf_id = 3;
        }
        if ($request->get('shelf')== "Literature")
        {
            $shelf_id = 4;
        }
        //echo ($shelf_id);
        // $shelf_id = Shelf::where('shelf_name', $request->get('shelf'))->pluck('id')->first();
        // error_log($shelf_id);
        Book::create([
            'book_name' => $request->get('book_name'),
            'author' => $request->get('author'),
            'shelf_id' => $shelf_id,
        ]);
         // Session::flash('flash_message', 'Book added successfully!.');
        return redirect('books')->with('status', ' Book has been added');
    }
  
        public function show($id)
        {
            
        }

        public function edit($id)
        {
            
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Assignment does not required
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bookid)
    {
        $book = Book::where('id', $bookid)->first();
        if ($book != null) {
            $book->delete();
            return redirect('books')->with('success', 'Book has been deleted');
        } else {
            echo ("Failed");
        }
    }
}
