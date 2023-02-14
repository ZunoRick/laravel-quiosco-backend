<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCollection;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // return new ProductoCollection(Producto::where('disponible', 1)
        //     ->orderBy('id', 'DESC')
        //     ->paginate(20));
        return new ProductoCollection(Producto::where('disponible', 1)
        ->orderBy('id', 'ASC')
        ->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Producto $producto)
    {
        //
    }

    public function update(Request $request, Producto $producto)
    {
        //
    }

    public function destroy(Producto $producto)
    {
        //
    }
}
