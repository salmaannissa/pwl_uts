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
            {!!(isset($dk))? method_field('PUT') : '' !!}
            @error('kode_dokter')
              <small class="text-danger">{{ $message }}</small>
            @enderror
            <div class="form-group">
              <label>Kode Dokter</label>
              <input class="form-control @error('') is-invalid @enderror" value="{{ isset($dk)? $dk->kode_dokter : old('kode_dokter') }}" name="kode_dokter" type="text" />
              @error('kode_dokter')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Nama Dokter</label>
              <input class="form-control @error('nama_dokter') is-invalid @enderror" value="{{ isset($dk)? $dk->nama_dokter :old('nama_dokter') }}" name="nama_dokter" type="text"/>
              @error('nama_dokter')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Spesialis</label>
              <input class="form-control @error('spesialis') is-invalid @enderror" value="{{ isset($dk)? $dk->spesialis :old('spesialis') }}" name="spesialis" type="text"/>
              @error('spesialis')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
                <label>HP</label>
                <input class="form-control @error('hp') is-invalid @enderror" value="{{ isset($dk)? $dk->hp :old('hp') }}" name="hp" type="text"/>
                @error('hp')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" value="{{ isset($dk)? $dk->alamat :old('alamat') }}" name="alamat" type="text"/>
                @error('alamat')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
            </div>
            <div class="form-group">
              <label>JK</label>
              <input class="form-control @error('jk') is-invalid @enderror" value="{{ isset($dk)? $dk->jk :old('jk') }}" name="jk" type="text"/>
              @error('jk')
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