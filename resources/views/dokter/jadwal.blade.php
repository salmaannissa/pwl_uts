@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <b> Jadwal Praktek Dokter Rumah Sakit Bhakti Wijaya </b> </h3>
            <br>
        </div>
        <div class="card-body">
            <a href="{{url('/jadwal/create')}}" class="btn btn-sm btn-success my-2">
                Tambah Data
            </a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Jadwal</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Kode Dokter</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($jdw->count() > 0)
                        @foreach($jdw as $i => $m)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$m->kode_jadwal}}</td>
                                <td>{{$m->hari}}</td>
                                <td>{{$m->jam}}</td>
                                <td>{{$m->kode_dokter}}</td>
                                <td>
                                    <a href="{{url('/jadwal/'. $m->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                                    <form method="POST" action="{{url('/jadwal/'.$m->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="pagination justify-content-end mt-2">  {{ $jdw->withQueryString()->links() }}</div>
        </div>
    </div>
</section>
@endsection