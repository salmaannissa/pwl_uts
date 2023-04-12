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
            <form action="" method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            {{-- @if ($ps->count())
                <h1>Hasil Pencarian untuk "{{ $query }}"</h1>
                <ul>
                @foreach ($ps as $post)
                    <li>
                        <a href="{{ route('pasien', $post->id) }}">
                            {{ $post->kode_pasien }}
                            {{ $post->nama_pasien }}
                            {{ $post->jk }}
                            {{ $post->poli }}
                            {{ $post->kode_dokter }}
                            {{ $post->keluhan }}
                            {{ $post->diagnosa }}
                            {{ $post->nama_wali }}
                            {{ $post->hp_wali }}
                            {{ $post->alamat }}
                        </a>
                    </li>
                @endforeach
                </ul>
            @else
                <p>Tidak ada hasil pencarian untuk "{{ $query }}".</p>
            @endif --}}
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

                                    <form method="POST" action="{{url('/pasien/'.$m->id)}}"onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">
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