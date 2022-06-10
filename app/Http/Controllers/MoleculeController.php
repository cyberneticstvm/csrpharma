<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Molecule;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class MoleculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(){
        $this->middleware('permission:molecule-list|molecule-create|molecule-edit|molecule-delete', ['only' => ['index','store','show']]);
        $this->middleware('permission:molecule-create', ['only' => ['create','store']]);
        $this->middleware('permission:molecule-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:molecule-delete', ['only' => ['destroy']]);
   }

    public function index()
    {
        $molecules = Molecule::get();
        return view('molecule.index', compact('molecules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('molecule.create');
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
            'molecule_name' => 'required|unique:molecules,molecule_name',
        ]);
        $input = $request->all();
        $input['created_by'] = $request->user()->id;
        $molecule = Molecule::create($input);
        return redirect()->route('molecule.index')->with('success','Molecule created successfully');
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
        $molecule = Molecule::find($id);
        return view('molecule.edit', compact('molecule'));
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
            'molecule_name' => 'required|unique:molecules,molecule_name,'.$id,
        ]);
        $input = $request->all();
        $molecule = Molecule::find($id);
        $input['created_by'] = $molecule->getOriginal('created_by');
        $molecule->update($input);
        return redirect()->route('molecule.index')->with('success','Molecule updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Molecule::find($id)->delete();
        return redirect()->route('molecule.index')->with('success','Molecule deleted successfully');
    }
}
