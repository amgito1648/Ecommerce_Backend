<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Página principal después de login
    public function index(Request $request)
    {
        $categories = Category::all(); // Trae todas las categorías

        // Query de productos
        $products = Product::query();

        // Filtro por categoría si se pasa por GET
        if ($request->has('category') && $request->category != '') {
            $products->where('category_id', $request->category);
        }

        $products = $products->get(); // Ejecuta la consulta

        return view('home', compact('products', 'categories'));
    }

    // Vista welcome (puede ser antes del login)
    public function welcome()
    {
        return view('welcome');
    }
}