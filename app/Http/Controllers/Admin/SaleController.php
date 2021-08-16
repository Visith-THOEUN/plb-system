<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Sale;
use App\Product;
use App\Store;
use App\SaleProduct;

use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{

    public function index()
    {
         abort_if(Gate::denies('sale_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $sales = Sale::all();
         return view('admin.sales.index', compact('sales'));
    }

    public function create()
    {
        abort_if(Gate::denies('sale_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $products = Product::all();
        $stores = Store::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.sales.create', compact('products', 'stores'));
    }

    public function store(Request $request)
    {
        DB::transaction(function() use($request){
             $sale = Sale::create($request->all());
             for($i = 0; $i < count($request->products); $i++){
                  $product_id = $request->products[$i];
                  $quantity = $request->quantities[$i];
                  $rate = $request->rates[$i];
                  $amount = $request->price[$i];
                  SaleProduct::create([
                       'sale_id'        => $sale->id,
                       'product_id'     => $product_id,
                       'qty'            => $quantity,
                       'rate'           => $rate,
                       'amount'         => $amount,
                  ]);
                  $product = Product::find($product_id);
                  $product->quantity = $product->quantity - $quantity;
                  $product->save();
             }
        }, 3);
        return redirect()->route('admin.sales.index');
    }

    public function show(Sale $sale)
    {
        abort_if(Gate::denies('sale_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $products = $sale->products;
        $store = $sale->store;
        return view('admin.sales.show', compact('sale', 'products', 'store'));
    }

    public function edit(Sale $sale)
    {
         abort_if(Gate::denies('sale_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $products = Product::all();
         $stores = Store::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
         return view('admin.sales.edit', compact('products', 'stores', 'sale'));
    }

    public function update(Request $request, Sale $sale)
    {
        DB::transaction(function() use ($request, $sale){
             $sale->update($request->all());
             SaleProduct::where('sale_id', $sale->id)->forceDelete();
             for($i = 0; $i < count($request->products); $i++){
                  $product_id = $request->products[$i];
                  $quantity = $request->quantities[$i];
                  $rate = $request->rates[$i];
                  $amount = $request->price[$i];
                  SaleProduct::create([
                       'sale_id'        => $sale->id,
                       'product_id'     => $product_id,
                       'qty'            => $quantity,
                       'rate'           => $rate,
                       'amount'         => $amount,
                  ]);
                  $product = Product::find($product_id);
                  $product->quantity = $product->quantity - $quantity;
                  $product->save();
             }
        }, 3);
        return redirect()->route('admin.sales.index');
    }

    public function destroy(Sale $sale)
    {
        abort_if(Gate::denies('sale_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sale->delete();
        return back();
    }
}
