<?php

namespace App\Http\Controllers;

use App\Models\unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        return  view('satuan.create',[
            'pagetitle'=>$pagetitle,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Attribute harus diisi'
        ];
        $validator = Validator::make($request->all(), [
            'kodesatuan'=>'required',
            'namasatuan'=>'required',
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $tambahsatuan = New unit();
        $tambahsatuan->kode_satuan = $request->kodesatuan;
        $tambahsatuan->nama_satuan = $request->namasatuan;
        $tambahsatuan->save();
        return redirect()->route('barang.create');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
