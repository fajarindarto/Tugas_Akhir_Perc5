<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakats = Masyarakat::all();

        return view('masyarakat', ['masyarakats' => $masyarakats, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masyakarats = Masyarakat::all();
        return view('masyarakat', ['masyarakats' => $masyakarats, 'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masyarakat = new Masyarakat();
        $masyarakat->noDaftar = $request->input('noDaftar');
        $masyarakat->namaDepan = $request->input('namaDepan');
        $masyarakat->namaBelakang = $request->input('namaBelakang');
        $masyarakat->noKK = $request->input('noKK');
        $masyarakat->noNIK = $request->input('noNIK');
        $masyarakat->umur = $request->input('umur');
        $masyarakat->alamat = $request->input('alamat');
        $masyarakat->noTelp = $request->input('noTelp');
        $masyarakat->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masyarakat = Masyarakat::find($id);
        $masyarakats = Masyarakat::all();
        return view('masyarakat', ['masyarakats' => $masyarakats, 'masyarakat' => $masyarakat, 'layout' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masyarakat = Masyarakat::find($id);
        $masyarakats = Masyarakat::all();
        return view('masyarakat', ['masyarakats' => $masyarakats, 'masyarakat' => $masyarakat, 'layout' => 'edit']);
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
        $masyarakat = Masyarakat::find($id);
        $masyarakat->noDaftar = $request->input('noDaftar');
        $masyarakat->namaDepan = $request->input('namaDepan');
        $masyarakat->namaBelakang = $request->input('namaBelakang');
        $masyarakat->noKK = $request->input('noKK');
        $masyarakat->noNIK = $request->input('noNIK');
        $masyarakat->umur = $request->input('umur');
        $masyarakat->alamat = $request->input('alamat');
        $masyarakat->noTelp = $request->input('noTelp');
        $masyarakat->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $masyarakat = Masyarakat::find($id);
        $masyarakat->delete();
        return redirect('/');
    }
}
