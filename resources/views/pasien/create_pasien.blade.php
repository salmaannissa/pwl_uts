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
            {!!(isset($ps))? method_field('PUT') : '' !!}

            <div class="form-group">
              <label>Kode Pasien</label>
              <input class="form-control @error('') is-invalid @enderror" value="{{ isset($ps)? $ps->kode_pasien : old('kode_pasien') }}" name="kode_pasien" type="text" />
              @error('kode_pasien')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Nama Pasien</label>
              <input class="form-control @error('nama_pasien') is-invalid @enderror" value="{{ isset($ps)? $ps->nama_pasien :old('nama_pasien') }}" name="nama_pasien" type="text"/>
              @error('nama_pasien')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>JK</label>
              <input class="form-control @error('jk') is-invalid @enderror" value="{{ isset($ps)? $ps->jk :old('jk') }}" name="jk" type="text"/>
              @error('jk')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Poli</label>
              <input class="form-control @error('poli') is-invalid @enderror" value="{{ isset($ps)? $ps->poli :old('poli') }}" name="poli" type="text"/>
              @error('poli')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Kode Dokter</label>
              <input class="form-control @error('kode_dokter') is-invalid @enderror" value="{{ isset($ps)? $ps->kode_dokter :old('kode_dokter') }}" name="kode_dokter" type="text"/>
              @error('kode_dokter')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Keluhan</label>
              <input class="form-control @error('keluhan') is-invalid @enderror" value="{{ isset($ps)? $ps->keluhan :old('keluhan') }}" name="keluhan" type="text"/>
              @error('keluhan')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Diagnosa</label>
              <input class="form-control @error('diagnosa') is-invalid @enderror" value="{{ isset($ps)? $ps->diagnosa :old('diagnosa') }}" name="diagnosa" type="text"/>
              @error('diagnosa')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Nama Wali</label>
              <input class="form-control @error('nama_wali') is-invalid @enderror" value="{{ isset($ps)? $ps->nama_wali :old('nama_wali') }}" name="nama_wali" type="text"/>
              @error('nama_wali')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
                <label>No. HP Wali</label>
                <input class="form-control @error('hp_wali') is-invalid @enderror" value="{{ isset($ps)? $ps->hp_wali :old('hp_wali') }}" name="hp_wali" type="text"/>
                @error('hp_wali')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" value="{{ isset($ps)? $ps->alamat :old('alamat') }}" name="alamat" type="text"/>
                @error('alamat')
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