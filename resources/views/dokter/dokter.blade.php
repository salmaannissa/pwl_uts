@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <b> Data Dokter Rumah Sakit Bhakti Wijaya </b> </h3>
            <br>
        </div>
        <div class="card-body">
            <a href="{{url('/dokter/create')}}" class="btn btn-sm btn-success my-2">
                Tambah Data
            </a>
            <form action="" method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            {{-- @if ($dk->count())
                <h1>Hasil Pencarian untuk "{{ $query }}"</h1>
                <ul>
                @foreach ($dk as $post)
                    <li>
                        <a href="{{ route('dokter', $post->id) }}">
                            {{ $post->kode_dokter }}
                            {{ $post->nama_dokter }}
                            {{ $post->spesialis }}
                            {{ $post->hp }}
                            {{ $post->alamat }}
                            {{ $post->jk }}
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

                                    <form method="POST" action="{{url('/dokter/'.$m->id)}}"onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">
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
            <div class="pagination justify-content-end mt-2">  {{ $dk->withQueryString()->links() }}</div>
        </div>
    </div>
    
</section>
@endsection