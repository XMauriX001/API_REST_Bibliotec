<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;


class PrestamoController extends Controller
{
    /*
    Función para hacer un prestamo de un libro
    */
    public function index(Request $request)
    {
        // Hacer el prestamo con el id del libro
        $book = Book::find($request->input('book_id'));
        $book->disponible = false;
        $book->save();
        return response()->json(['message' => 'Prestamo realizado correctamente'], 200);
    }
}
