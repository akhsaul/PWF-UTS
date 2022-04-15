<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:50',
            'product_type' => 'required|in:snack,drink,fruit,drug,groceries,make-up,cigarette',
            'product_price' => 'required|numeric',
            'expired_at' => 'required|date'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        } else {
            $payload = $validator->validated();
            Product::create([
                'product_name' => $payload['product_name'],
                'product_type' => $payload['product_type'],
                'product_price' => $payload['product_price'],
                'expired_at' => $payload['expired_at']
            ]);
            return response()->json([
                'msg' => 'Data Produk berhasil di simpan'
            ], 201);
        }
    }

    function showAll()
    {
        $products = Product::all();
        return response()->json([
            'msg' => 'Data produk keseluruhan',
            'data' => $products
        ], 200);
    }

    function showById($id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            return response()->json([
                'msg' => 'Data produk dengan ID: ' . $id,
                'data' => $product
            ], 200);
        } else {
            return response()->json([
                'msg' => 'Data produk dengan ID: ' . $id . ' tidak di temukan'
            ], 404);
        }
    }

    function showByName($product_name)
    {
        $product = Product::where('product_name', 'LIKE', '%' . $product_name . '%')->get();
        if ($product->count() > 0) {
            return response()->json([
                'msg' => 'Data produk dengan nama yang mirip: ' . $product_name,
                'data' => $product
            ], 200);
        } else {
            return response()->json([
                'msg' => 'Data produk dengan nama yang mirip: ' . $product_name . ' tidak di temukan',
            ], 404);
        }
    }

    function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->get();
        if ($product) {
            $validator = Validator::make($request->all(), [
                'product_name' => 'required|max:50',
                'product_type' => 'required|in:snack,drink,fruit,drug,groceries,make-up,cigarette',
                'product_price' => 'required|numeric',
                'expired_at' => 'required|date'
            ]);
            if ($validator->fails()) {
                return response()->json($validator->messages(), 422);
            } else {
                $payload = $validator->validated();
                Product::where('id', $id)->update([
                    'product_name' => $payload['product_name'],
                    'product_type' => $payload['product_type'],
                    'product_price' => $payload['product_price'],
                    'expired_at' => $payload['expired_at']
                ]);
                return response()->json([
                    'msg' => 'Data produk berhasil di ubah'
                ], 201);
            }
        } else {
            return response()->json([
                'msg' => 'Data produk dengan ID: ' . $id . ' tidak di temukan'
            ], 404);
        }
    }

    function delete($id)
    {
        $product = Product::where('id', $id)->get();
        if ($product) {
            Product::where('id', $id)->delete();
            return response()->json([
                'msg' => 'Data produk dengan ID: ' . $id . ' berhasil di hapus'
            ], 200);
        } else {
            return response()->json([
                'msg' => 'Data produk dengan ID: ' . $id . ' tidak di temukan'
            ], 404);
        }
    }
}
