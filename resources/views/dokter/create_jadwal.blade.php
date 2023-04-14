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
              <input class="form-control @error('') is-invalid @enderror" name="kode_jadwal" type="text" value="{{ isset($jdw)? $jdw->kode_jadwal : old('kode_jadwal') }}"/>
              @error('kode_jadwal')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Hari</label>
              <select class="form-control @error('hari') is-invalid @enderror" name="hari" type="text">
                <option value=""> --Pilih Hari -- </option>
                <option value="Senin" {{ old('hari', $jdw->hari) == 'Senin' ? 'selected' : '' }}> Senin </option>
                <option value="Selasa" {{ old('hari', $jdw->hari) == 'Selasa' ? 'selected' : '' }}> Selasa </option>
                <option value="Rabu" {{ old('hari', $jdw->hari) == 'Rabu' ? 'selected' : '' }}> Rabu </option>
                <option value="Kamis" {{ old('hari', $jdw->hari) == 'Kamis' ? 'selected' : '' }}> Kamis </option>
                <option value="Jumat" {{ old('hari', $jdw->hari) == 'Jumat' ? 'selected' : '' }}> Jumat </option>
                <option value="Sabtu" {{ old('hari', $jdw->hari) == 'Sabtu' ? 'selected' : '' }}> Sabtu </option>
                <option value="Minggu" {{ old('hari', $jdw->hari) == 'Minggu' ? 'selected' : '' }}> Minggu </option>
              </select>
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