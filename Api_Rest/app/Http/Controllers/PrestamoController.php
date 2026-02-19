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
        //Efectuar el prestamo con el id del libro y añadirlo a loans
        $book = Book::find($request->input('book_id'));
        $book->loans()->create([
            'nombre_solicitante' => $request->input('nombre_solicitante'),
            'due_date' => $request->input('due_date'),
            'return_date' => $request->input('return_date'),
        ]);
        return response()->json(['message' => 'Prestamo realizado correctamente'], 200);
    }
}
