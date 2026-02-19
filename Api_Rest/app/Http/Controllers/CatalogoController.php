<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;


class CatalogoController extends Controller
{
    /*
        Funcion que devuelve los datos de la base de datos
    */

    public function index(Request $request)
    {
        // Obtener los datos de la base de datos
        $books = Book::query()
            //Filtro por titulo
            ->when($request->has('title'), function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->input('title') . '%');
            })
            // Filtro por isbn
            ->when($request->has('isbn'), function ($query) use ($request) {
                $query->where('isbn', 'like', '%' . $request->input('isbn') . '%');
            })
            // Filtro por disponible
            ->when($request->has('is_available'), function ($query) use ($request) {
                $query->where('is_available', $request->input('is_available'));
            })
            ->get();
        return BookResource::collection($books);
    }
}
