@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <b> Data Pasien Rumah Sakit Bhakti Wijaya </b> </h3>
            <br>
        </div>
        <div class="card-body">
            <a href="{{url('/pasien/create')}}" class="btn btn-sm btn-success my-2">
                Tambah Data
            </a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pasien</th>
                        <th>Nama Pasien</th>
                        <th>JK</th>
                        <th>Poli</th>
                        <th>Kode Dokter</th>
                        <th>Keluhan</th>
                        <th>Diagnosa</th>
                        <th>Nama Wali</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($ps->count() > 0)
                        @foreach($ps as $i => $m)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$m->kode_pasien}}</td>
                                <td>{{$m->nama_pasien}}</td>
                                <td>{{$m->jk}}</td>
                                <td>{{$m->poli}}</td>
                                <td>{{$m->kode_dokter}}</td>
                                <td>{{$m->keluhan}}</td>
                                <td>{{$m->diagnosa}}</td>
                                <td>{{$m->nama_wali}}</td>
                                <td>{{$m->hp_wali}}</td>
                                <td>{{$m->alamat}}</td>
                                
                                <td>
                                    <a href="{{url('/pasien/'. $m->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                                    <form method="POST" action="{{url('/pasien/'.$m->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12" class="text-center">Data tidak ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="pagination justify-content-end mt-2">  {{ $ps->withQueryString()->links() }}</div>
        </div>
    </div>
</section>
@endsection