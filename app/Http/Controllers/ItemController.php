<?php

namespace App\Http\Controllers;

use App\Models\Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagetitle = "list barang index";
        $listbarangs = Stuff::all();
        $listbarang = DB::table('stuffs')
                    ->select('*','stuffs.id as id' )
                    ->leftJoin('units','stuff_id','=','units.id')
                    ->get();
        return view('barang.index',[
            'page_title'=>$pagetitle,
            'listbarang'=>$listbarang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pagetitle = 'tambah barang';
        $dataunit = DB::table('units')
                        ->select('*')
                        ->get();
        return  view('barang.create',[
            'page_title'=>$pagetitle,
            'units'=>$dataunit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
        ];
        $validator = Validator::make($request->all(), [
            'kodebarang'=>'required',
            'namabarang'=>'required',
            'hargabarang'=>'required',
            'deskripsibarang'=>'required'
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::table('stuffs')->insert([
            'kode_barang' => $request->kodebarang,
            'nama_barang' => $request->namabarang,
            'harga_barang' => $request->hargabarang,
            'deskripsi_barang' => $request->deskripsibarang,
            'stuff_id' => $request->unit
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pagetitle = 'liat barang';
        $liatbarang = DB::table('stuffs')
                        ->select('*')
                        ->leftJoin('units','stuff_id','=','units.id')
                        ->where('stuffs.id', '=', $id)
                        ->first();
        return view('barang.show',[
            'pagetitle'=>$pagetitle,
            'databarang'=>$liatbarang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('stuffs')->where('id', $id)->delete();
        return redirect()->route('barang.index');
    }
}
