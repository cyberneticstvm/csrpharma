<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use DB;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(){
         $this->middleware('permission:manufacturer-list|manufacturer-create|manufacturer-edit|manufacturer-delete', ['only' => ['index','store','show']]);
         $this->middleware('permission:manufacturer-create', ['only' => ['create','store']]);
         $this->middleware('permission:manufacturer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:manufacturer-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $manufacturers = Manufacturer::get();
        return view('manufacturer.index', compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturer.create');
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
            'manufacturer_name' => 'required|unique:manufacturers,manufacturer_name',
            'manufacturer_code' => 'required|unique:manufacturers,manufacturer_code',
        ]);
        $input = $request->all();
        $input['created_by'] = $request->user()->id;
        $manufacturer = Manufacturer::create($input);
        return redirect()->route('manufacturer.index')->with('success','Manufacturer created successfully');
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
        $manufacturer = Manufacturer::find($id);
        return view('manufacturer.edit', compact('manufacturer'));
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
            'manufacturer_name' => 'required|unique:manufacturers,manufacturer_name,'.$id,
            'manufacturer_code' => 'required|unique:manufacturers,manufacturer_code,'.$id
        ]);
        $input = $request->all();
        $manufacturer = Manufacturer::find($id);
        $input['created_by'] = $manufacturer->getOriginal('created_by');
        $manufacturer->update($input);
        return redirect()->route('manufacturer.index')->with('success','Manufacturer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manufacturer::find($id)->delete();
        return redirect()->route('manufacturer.index')->with('success','Manufacturer deleted successfully');
    }
}
