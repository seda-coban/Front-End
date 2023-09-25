<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function getAllProduct()
    {
        $response = Http::get('http://127.0.0.1:8000/api/products');
        return view('allproduct',['data' => $response->collect()]);
    }

    public function getProductByID($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/products/'.$id);
        return view('singleproduct',['data' => $response->collect()]);
    }

    public function AddProduct()
    {
        $response = Http::post('http://127.0.0.1:8000/api/products', [
            'name' => 'Cherry',
            'description' => 'juicy',
            'price' => '9.99',
        ]);
        dd($response->json());
    }

    public function updateProduct($id)
    {
        $response = Http::put('http://127.0.0.1:8000/api/products/'.$id, [
            'name' => 'Cherry',
            'description' => 'juicy',
            'price' => '69.99',
        ]);
        dd($response->json());
    }

    public function deleteProduct($id)
    {
        $response = Http::delete('http://127.0.0.1:8000/api/products/'.$id,);
        dd($response);
    }
}
