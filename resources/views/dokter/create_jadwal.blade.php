@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Dokter </h3>
            <br>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ $url_form }}">
            @csrf
            {!!(isset($jdw))? method_field('PUT') : '' !!}
            @error('kode_jadwal')
              <small class="text-danger">{{ $message }}</small>
            @enderror
            <div class="form-group">
              <label>Kode Jadwal</label>
              <input class="form-control @error('') is-invalid @enderror" value="{{ isset($jdw)? $jdw->kode_jadwal : old('kode_jadwal') }}" name="kode_jadwal" type="text" />
              @error('kode_jadwal')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
              <div class="form-group">
                <label>Hari</label>
              <input class="form-control @error('hari') is-invalid @enderror" value="{{ isset($jdw)? $jdw->hari :old('hari') }}" name="hari" type="text"/>
              @error('hari')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Jam</label>
              <input class="form-control @error('jam') is-invalid @enderror" value="{{ isset($jdw)? $jdw->jam :old('jam') }}" name="jam" type="text"/>
              @error('jam')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
                <label>Kode Dokter</label>
                <input class="form-control @error('kode_dokter') is-invalid @enderror" value="{{ isset($jdw)? $jdw->kode_dokter :old('kode_dokter') }}" name="kode_dokter" type="text"/>
                @error('kode_dokter')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
            </div>
            <div class="form-group">
              <button class="btn btn-sm btn-primary">Simpan</button>
            </div>
          </form>
        </div>
    </div>
</section>
@endsection