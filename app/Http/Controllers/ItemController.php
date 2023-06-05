<?php

namespace App\Http\Controllers;

use App\Models\stuff;
use App\Models\unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagetitle = "list barang";
        $listbarang = Stuff::all();
        // $listbarangs = DB::table('stuffs')
        //             ->select('*','stuffs.id as id' )
        //             ->leftJoin('units','stuff_id','=','units.id')
        //             ->get();
        return view('barang.index',[
            'pagetitle'=>$pagetitle,
            'listbarang'=>$listbarang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pagetitle = 'tambah barang';
        // $dataunit = DB::table('units')
        //                 ->select('*')
        //                 ->get();
        $dataunit = unit::all();
        return  view('barang.create',[
            'pagetitle'=>$pagetitle,
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
            'numeric' => 'Isi : attribute dengan angka',
            'regex' => 'Isi : attribute dengan huruf besar saja'
        ];
        $validator = Validator::make($request->all(), [
            'kodebarang'=>'required|regex:/^[A-Z]+$/',
            'namabarang'=>'required',
            'hargabarang'=>'required|numeric',
            'deskripsibarang'=>'required'
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $tambahbarang = New stuff();
        $tambahbarang->kode_barang = $request->kodebarang;
        $tambahbarang->nama_barang = $request->namabarang;
        $tambahbarang->harga_barang = $request->hargabarang;
        $tambahbarang->deskripsi_barang = $request->deskripsibarang;
        $tambahbarang->unit_id = $request->unit;
        $tambahbarang->save();
        // DB::table('stuffs')->insert([
        //     'kode_barang' => $request->kodebarang,
        //     'nama_barang' => $request->namabarang,
        //     'harga_barang' => $request->hargabarang,
        //     'deskripsi_barang' => $request->deskripsibarang,
        //     'unit_id' => $request->unit
        // ]);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pagetitle = 'liat barang';
        // $liatbarang = DB::table('stuffs')
        //                 ->select('*')
        //                 ->leftJoin('units','stuff_id','=','units.id')
        //                 ->where('stuffs.id', '=', $id)
        //                 ->first();
        $liatbarang = Stuff::find($id);
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
        $pagetitle = 'edit barang';
        $liatbarang = Stuff::find($id);
        $dataunit = unit::all();
        return view('barang.edit',[
            'pagetitle' => $pagetitle,
            'barang' => $liatbarang,
            'units' => $dataunit
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
            'numeric' => 'Isi : attribute dengan angka',
            'regex' => 'Isi : attribute dengan huruf besar saja'
        ];
        $validator = Validator::make($request->all(), [
            'kodebarang'=>'required|regex:/^[A-Z]+$/',
            'namabarang'=>'required',
            'hargabarang'=>'required|numeric',
            'deskripsibarang'=>'required'
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $tambahbarang = stuff::find($id);
        $tambahbarang->kode_barang = $request->kodebarang;
        $tambahbarang->nama_barang = $request->namabarang;
        $tambahbarang->harga_barang = $request->hargabarang;
        $tambahbarang->deskripsi_barang = $request->deskripsibarang;
        $tambahbarang->unit_id = $request->unit;
        $tambahbarang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        stuff::find($id)->delete();
        return redirect()->route('barang.index');
    }
}
