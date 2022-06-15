<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $products;

    function __construct(){
        $this->middleware('permission:stock-list|stock-create|stock-edit|stock-delete', ['only' => ['index','store','show']]);
        $this->middleware('permission:stock-create', ['only' => ['create','store']]);
        $this->middleware('permission:stock-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:stock-delete', ['only' => ['destroy']]);

        $this->products = Product::orderBy('product_name', 'ASC')->get();
   }

    public function index()
    {
        $stocks = Stock::get();
        return view('stock.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = $this->products;
        return view('stock.create', compact('products'));
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
            'entry_date' => 'required',
            'reference_id' => 'required',
        ]);
        $input = $request->all();
        $input['created_by'] = $request->user()->id;
        $input['entry_date'] = (!empty($request->entry_date)) ? Carbon::createFromFormat('d/M/Y', $request['entry_date'])->format('Y-m-d') : date('Y-m-d');
        $input['mrp_total'] = 0.00;
        $input['selling_price_total'] = 0.00;
        DB::beginTransaction();
        try{
            $stock = Stock::create($input);
            if($input['product']):
                for($i=0; $i<count($input['product']); $i++):
                    if($input['product'][$i] > 0):
                        $exp_date = '01/'.$input['expiry_date'][$i];
                        $expdate = (!empty($input['expiry_date'][$i])) ? Carbon::createFromFormat('d/m/Y', $exp_date)->format('Y-m-d') : date('Y-m-d');
                        DB::table('stock_details')->insert([
                            'stock_id' => $stock->id,
                            'product_id' => $input['product'][$i],
                            'batch_no' => $input['batch_no'][$i],
                            'expiry_date' => $expdate,
                            'qty' => $input['qty'][$i],
                            'mrp' => $input['mrp'][$i],
                            'selling_price' => $input['srp'][$i],
                        ]);
                    endif;
                endfor;
            endif;
            $mrp_tot = DB::table('stock_details')->where('stock_id', $stock->id)->sum(DB::raw('mrp*qty'));
            $srp_tot = DB::table('stock_details')->where('stock_id', $stock->id)->sum(DB::raw('selling_price*qty'));
            Stock::where('id', $stock->id)->update(['mrp_total' => $mrp_tot, 'selling_price_total' => $srp_tot]);
        }catch(Exception $e){
            DB::rollBack();
            throw $e;
        }
        DB::commit();
        return redirect()->route('stock.index')->with('success','Stock recorded successfully');
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
        $stock = Stock::find($id);
        $stock_details = DB::table('stock_details')->where('stock_id', $stock->id)->get();
        $products = $this->products;
        return view('stock.edit', compact('products', 'stock', 'stock_details'));
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
            'entry_date' => 'required',
            'reference_id' => 'required',
        ]);
        $input = $request->all();
        $stock = Stock::find($id);
        $input['created_by'] = $stock->getOriginal('created_by');
        $input['entry_date'] = (!empty($request->entry_date)) ? Carbon::createFromFormat('d/M/Y', $request['entry_date'])->format('Y-m-d') : date('Y-m-d');
        $input['mrp_total'] = 0.00;
        $input['selling_price_total'] = 0.00;
        DB::beginTransaction();
        try{
            $stock->update($input);
            DB::table("stock_details")->where('stock_id', $id)->delete();
            if($input['product']):
                for($i=0; $i<count($input['product']); $i++):
                    if($input['product'][$i] > 0):
                        $exp_date = '01/'.$input['expiry_date'][$i];
                        $expdate = (!empty($input['expiry_date'][$i])) ? Carbon::createFromFormat('d/m/Y', $exp_date)->format('Y-m-d') : date('Y-m-d');
                        DB::table('stock_details')->insert([
                            'stock_id' => $stock->id,
                            'product_id' => $input['product'][$i],
                            'batch_no' => $input['batch_no'][$i],
                            'expiry_date' => $expdate,
                            'qty' => $input['qty'][$i],
                            'mrp' => $input['mrp'][$i],
                            'selling_price' => $input['srp'][$i],
                        ]);
                    endif;
                endfor;
            endif;
            $mrp_tot = DB::table('stock_details')->where('stock_id', $stock->id)->sum(DB::raw('mrp*qty'));
            $srp_tot = DB::table('stock_details')->where('stock_id', $stock->id)->sum(DB::raw('selling_price*qty'));
            Stock::where('id', $stock->id)->update(['mrp_total' => $mrp_tot, 'selling_price_total' => $srp_tot]);
        }catch(Exception $e){
            DB::rollBack();
            throw $e;
        }
        DB::commit();
        return redirect()->route('stock.index')->with('success','Stock updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stock::find($id)->delete();
        return redirect()->route('stock.index')
                        ->with('success','Stock record deleted successfully');
    }
}
