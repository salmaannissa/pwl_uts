<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Http\Controllers\Controller;
use App\Models\JadwalModel;
use Illuminate\Http\Request;

class JadwalController extends Controller
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
            $jdw = JadwalModel::where('kode_dokter', 'LIKE', '%'.$query.'%')
            ->orWhere('kode_jadwal', 'LIKE', '%'.$query.'%')
            ->orWhere('hari', 'LIKE', '%'.$query.'%')
            ->orWhere('jam', 'LIKE', '%'.$query.'%')
            ->paginate(5);
        } else {
            $jdw = JadwalModel::paginate(5);
        }
        return view('dokter.jadwal')
            ->with('jdw', $jdw);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create_jadwal')
            ->with('url_form', url('/jadwal'));
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
            'kode_jadwal'=>'required|string|max:10|unique:jadwal,kode_jadwal',
            'hari'=>'required|string|max:10',
            'jam'=>'required|string|max:20',
            'kode_dokter'=>'required|string|max:10'
        ]);

        $data = JadwalModel::create($request->except(['_token']));
        return redirect('jadwal')
            ->with('success', 'Data Pasien Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalModel $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = JadwalModel::find($id);
        return view('dokter.create_jadwal')
            ->with('jdw', $jadwal)
            ->with('url_form', url('/jadwal/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_jadwal'=>'required|string|max:10|unique:jadwal,kode_jadwal,'.$id,
            'hari'=>'required|string|max:10',
            'jam'=>'required|string|max:20',
            'kode_dokter'=>'required|string|max:10'
        ]);

        $data = JadwalModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('jadwal')
            ->with('success', 'Data Pasien Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JadwalModel::where('id', '=', $id)->delete();
        return redirect('jadwal')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}