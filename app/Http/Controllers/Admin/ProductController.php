<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Product;
use App\Category;
use App\Store;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
         abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $products = Product::all();
         return view('admin.products.index', compact('products'));
    }

    public function create()
    {
         abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
         $stores = Store::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
         return view('admin.products.create', compact('categories', 'stores'));
    }

    public function store(StoreProductRequest $request)
    {
         Product::create($request->all());
         return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $stores = Store::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.products.edit', compact('product', 'categories', 'stores'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $product->delete();
        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
         abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         Product::whereIn('id', request('ids'))->delete();
         return response(null, Response::HTTP_NO_CONTENT);
    }
}
