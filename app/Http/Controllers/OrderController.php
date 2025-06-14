<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1'
        ]);
        $products = $request->input('products');
        $productIds = collect($products)->pluck('product_id');
        $productModels = Product::whereIn('id', $productIds)->get()->keyBy('id');


        $totalPrice = 0;
        $attachData = [];

        foreach ($products as $item) {
            $product = $productModels[$item['product_id']];


            if ($product->quantity < $item['quantity']) {
                return response()->json([
                    'message' => "Not enough stock for {$product->name}"
                ], 400);
            }

            $lineTotal = $product->price * $item['quantity'];
            $totalPrice += $lineTotal;

            $attachData[$product->id] = [
                'quantity' => $item['quantity']
            ];

            $product->decrement('quantity', $item['quantity']);
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $totalPrice
        ]);

        $order->products()->attach($attachData);

        return response()->json([
            'message' => 'Order placed successfully.',
            'order' => $order->load('products')
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'message' => 'Order show successfully.',
            'order' => Auth::user()->orders()->findOrFail($id)->load('products')
        ]);
    }
}
