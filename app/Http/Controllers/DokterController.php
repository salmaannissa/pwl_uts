<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Http\Controllers\Controller;
use App\Models\DokterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Illuminate\Support\Facades\Request::get('query') !== null){
            $query = \Illuminate\Support\Facades\Request::get('query');
            $dk = DokterModel::where('kode_dokter', 'LIKE', '%'.$query.'%')
            ->orWhere('nama_dokter', 'LIKE', '%'.$query.'%')
            ->orWhere('spesialis', 'LIKE', '%'.$query.'%')
            ->orWhere('hp', 'LIKE', '%'.$query.'%')
            ->orWhere('alamat', 'LIKE', '%'.$query.'%')
            ->orWhere('jk', 'LIKE', '%'.$query.'%')
            ->paginate(5);
        } else {
            $dk = DokterModel::paginate(5);
        }
        
        return view('dokter.dokter')
            ->with('dk', $dk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create_dokter')
            ->with('url_form', url('/dokter'));
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
            'kode_dokter'=>'required|string|max:10|unique:dokter,kode_dokter',
            'nama_dokter'=>'required|string|max:50',
            'spesialis'=>'required|string|max:50',
            'hp'=>'required|digits_between:6,15',
            'alamat'=>'required|string|max:255',
            'jk'=>'required|in:L,P',
        ]);

        $data = DokterModel::create($request->except(['_token']));
        return redirect('dokter')
            ->with('success', 'Data Dokter Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(DokterModel $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($dk)
    {
        $dokter = DokterModel::find($dk);
        return view('dokter.create_dokter')
            ->with('dk', $dokter)
            ->with('url_form', url('/dokter/'.$dk));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_dokter'=>'required|string|max:10|unique:dokter,kode_dokter,'.$id,
            'nama_dokter'=>'required|string|max:50',
            'spesialis'=>'required|string|max:50',
            'hp'=>'required|digits_between:6,15',
            'alamat'=>'required|string|max:255',
            'jk'=>'required|in:L,P',
        ]);

        $data = DokterModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('dokter')
            ->with('success', 'Data Dokter Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DokterModel::where('id', '=', $id)->delete();
        return redirect('dokter')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
