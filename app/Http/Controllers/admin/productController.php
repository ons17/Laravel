<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Retrieve search query from the request
        $query = $request->input('query');

        // Retrieve products with pagination and apply search filter
        $products = Product::query()
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('name', 'like', '%' . $query . '%');
            })
            ->paginate(10);

        // Check if products are found or not
        if ($products->isEmpty()) {
            // No products found, set a message
            $message = 'No products found for your search .';
        } else {
            // Products found, no message needed
            $message = null;
        }

        // Return the view with products data
        return view('admin.product.index', compact('products', 'message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('admin.product.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "bail|required|string|min:2",
            'price' => "bail|required",
            'qte' => "bail|required",
        ]);

        $p = new Product();
        $p->id = (string) Str::uuid(); // Explicitly cast UUID to string
        $p->name = $request->name;
        $p->price = $request->price;
        $p->qte = $request->qte;
        $p->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found');
        }

        return view('admin.product.show', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'qte' => 'required',
        ]);

        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found');
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'qte' => $request->qte,
        ]);

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found');
        }

        return view('admin.product.confirm-delete', compact('product'));
    }

    // Controller method to handle deletion confirmation
    public function confirmDelete($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found');
        }

        $product->delete();
        return redirect()->route("product.index")->with('success', 'Product deleted successfully');
    }

    /**
     * Process the deletion confirmation.
     */
    public function processDeleteConfirmation(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $enteredProductId = $request->input('product_id');

        if ($enteredProductId == $id) {
            // Proceed with deletion
            $product = Product::find($id);
            $product->delete();
            return redirect()->route("product.index")->with('success', 'Product deleted successfully');
        } else {
            // Entered ID does not match, display error message
            return redirect()->back()->with('error', 'Entered product ID does not match');
        }
    }


}