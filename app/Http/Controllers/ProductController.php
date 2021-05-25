<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
// use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index_cli(Request $request)

    {

        $produits = Product::all()->where('id_category', "1");
        return view('products_category', ['produits' => $produits]);
    }
    public function index_cli1(Request $request)

    {
        $produits = Product::all()->where('id_category', "2");
        return view('products_category', ['produits' => $produits]);
    }
    public function index_cli2(Request $request)

    {
        $produits = Product::all()->where('id_category', "3");
        return view('products_category', ['produits' => $produits]);
    }
    public function index_cli3(Request $request)

    {
        $produits = Product::all()->where('id_category', "4");
        return view('products_category', ['produits' => $produits]);
    }
    public function index_cli4(Request $request)

    {
        $produits = Product::all()->where('id_category', "5");
        return view('products_category', ['produits' => $produits]);
    }
    public function index_cli5(Request $request)

    {
        $produits = Product::all()->where('id_category', "6");
        return view('products_category', ['produits' => $produits]);
    }


    public function create(Product $product)
    {
        return view('products.create', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'file_path' => 'required' // Only allow .jpg, .bmp and .png file types.
        ]);



        // ensure the request has a file before we attempt anything else.

        $request->file_path->store('product', 'public');
        $product = new Product();
        $product->title = $request->get('title');
        $product->price = $request->get('price');
        $product->id_category = $request->get('category');
        $product->description = $request->get('description');
        // $path = Storage::putFile('public', $request->file_path);
        // $url = Storage::url($path);
        $product->file_path =  $request->file_path->hashName();

        $product->save(); // Finally, save the record 


        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',

        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'products deleted successfully');
    }
}
