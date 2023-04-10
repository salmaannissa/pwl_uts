@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Dokter Rumah Sakit Bhakti Wijaya </h3>
            <br>
        </div>
        <div class="card-body">
            <a href="{{url('/dokter/create')}}" class="btn btn-sm btn-success my-2">
                Tambah Data
            </a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Dokter</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($dk->count() > 0)
                        @foreach($dk as $i => $m)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$m->kode_dokter}}</td>
                                <td>{{$m->nama_dokter}}</td>
                                <td>{{$m->spesialis}}</td>
                                <td>{{$m->hp}}</td>
                                <td>{{$m->alamat}}</td>
                                <td>{{$m->jk}}</td>
                                <td>
                                    <a href="{{url('/dokter/'. $m->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                                    <form method="POST" action="{{url('/dokter/'.$m->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="text-center">Data tidak ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection