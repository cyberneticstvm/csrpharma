<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Molecule;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(){
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','store','show']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
   }

    public function index()
    {
        $products = DB::table('products as p')->leftJoin('subcategories as s', 'p.subcategory_id', '=', 's.id')->leftJoin('molecules as m', 'm.id', '=', 'p.molecule_id')->select('p.id', 'p.product_name', 'p.hsn', 'p.sku', 's.subcategory_name', 'm.molecule_name')->orderBy('p.product_name', 'ASC')->get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('category_name', 'id')->all();
        $subcategories = Subcategory::pluck('subcategory_name', 'id')->all();
        $molecules = Molecule::pluck('molecule_name', 'id')->all();
        $manufacturers = Manufacturer::pluck('manufacturer_name', 'id')->all();
        return view('product.create', compact('categories', 'subcategories', 'molecules', 'manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'product_name' => 'required',
            'molecule_id' => 'required',
            'manufacturer_id' => 'required',
            'cgst' => 'required',
            'sgst' => 'required'
        ]);
        $input = $request->all();
        $input['created_by'] = $request->user()->id;
        $sku = DB::table('products')->selectRaw("CONCAT_WS('-', 'P', LPAD(IFNULL(max(id)+1, 1), 6, '0')) AS id")->first();
        $input['sku'] = $sku->id;
        $product = Product::create($input);
        return redirect()->route('product.index')->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('category_name', 'id')->all();
        $subcategories = Subcategory::pluck('subcategory_name', 'id')->all();
        $molecules = Molecule::pluck('molecule_name', 'id')->all();
        $manufacturers = Manufacturer::pluck('manufacturer_name', 'id')->all();
        return view('product.edit', compact('categories', 'subcategories', 'molecules', 'manufacturers', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'product_name' => 'required',
            'molecule_id' => 'required',
            'manufacturer_id' => 'required',
            'cgst' => 'required',
            'sgst' => 'required'
        ]);
        $input = $request->all();
        $product = Product::find($id);
        $input['created_by'] = $product->getOriginal('created_by');
        $input['sku'] = $product->getOriginal('sku');
        $product->update($input);
        return redirect()->route('product.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index')->with('success','Product deleted successfully');
    }
}
