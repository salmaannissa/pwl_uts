<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Controllers\Controller;
use App\Models\PasienModel;
use Illuminate\Http\Request;

class PasienController extends Controller
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
            $ps = PasienModel::where('kode_pasien', 'LIKE', '%'.$query.'%')
            ->orWhere('nama_pasien', 'LIKE', '%'.$query.'%')
            ->orWhere('jk', 'LIKE', '%'.$query.'%')
            ->orWhere('poli', 'LIKE', '%'.$query.'%')
            ->orWhere('kode_dokter', 'LIKE', '%'.$query.'%')
            ->orWhere('keluhan', 'LIKE', '%'.$query.'%')
            ->orWhere('diagnosa', 'LIKE', '%'.$query.'%')
            ->orWhere('nama_wali', 'LIKE', '%'.$query.'%')
            ->orWhere('hp_wali', 'LIKE', '%'.$query.'%')
            ->orWhere('alamat', 'LIKE', '%'.$query.'%')
            ->paginate(5);
        } else {
            $ps = PasienModel::paginate(5);
        }
        return view('pasien.pasien')
            ->with('ps', $ps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create_pasien')
            ->with('url_form', url('/pasien'));
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
            'kode_pasien'=>'required|string|max:10|unique:pasien,kode_pasien',
            'nama_pasien'=>'required|string|max:50',
            'jk'=>'required|in:L,P',
            'poli'=>'required|string|max:50',
            'kode_dokter'=>'required|string|max:10',
            'keluhan'=>'required|string|max:255',
            'diagnosa'=>'required|string|max:255',
            'nama_wali'=>'required|string|max:50',
            'hp_wali'=>'required|digits_between:6,15',
            'alamat'=>'required|string|max:255'
        ]);

        $data = PasienModel::create($request->except(['_token']));
        return redirect('pasien')
            ->with('success', 'Data Pasien Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(PasienModel $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = PasienModel::find($id);
        return view('pasien.create_pasien')
            ->with('ps', $pasien)
            ->with('url_form', url('/pasien/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_pasien'=>'required|string|max:10|unique:pasien,kode_pasien,'.$id,
            'nama_pasien'=>'required|string|max:50',
            'jk'=>'required|in:L,P',
            'poli'=>'required|string|max:50',
            'kode_dokter'=>'required|string|max:10',
            'keluhan'=>'required|string|max:255',
            'diagnosa'=>'required|string|max:255',
            'nama_wali'=>'required|string|max:50',
            'hp_wali'=>'required|digits_between:6,15',
            'alamat'=>'required|string|max:255'
        ]);

        $data = PasienModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('pasien')
            ->with('success', 'Data Pasien Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PasienModel::where('id', '=', $id)->delete();
        return redirect('pasien')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
