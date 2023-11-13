@extends('template')
@section('page_title')
Edit Surat - Sipsu
@endsection
@section('content')
<h2>Edit Surat</h2>
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body" style="padding:1.875rem 1.875rem 0 1.875rem">
        <h4 class="card-title">Horizontal Two column</h4>
        <form action="{{ route('updatesurat', $surat->id) }}" method="POST" enctype="multipart/form-data" class="form-sample">
            @csrf
            @method('PUT')
          <p class="card-description"> Personal info </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">No. Surat</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="no" value="{{$surat->no}}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pengirim</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pengirim" value="{{$surat->pengirim}}"/>
                    </div>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Perihal</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="perihal" value="{{$surat->perihal}}"/>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ditujukan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="ditujukan" value="{{$surat->ditujukan}}"/>
                    </div>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="tgl_surat" value="{{$surat->tgl_surat}}"/>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">File upload</label>
                    <input type="file" name="file" id="file" >
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Surat</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="jenis">
                        <option selected disabled>- Choose jenis surat -</option>
                        @foreach ($jenissurat as $j)
                                <option value="{{$j->id}}" {{ $surat->jenis_id == $j->id ? 'selected' : '' }}>{{$j->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status Disposisi</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="status">
                        @if ($surat->status == "Sudah Disposisi")
                            <option value="Sudah Disposisi" selected>Sudah Disposisi</option>
                            <option value="Belum Disposisi">Belum Disposisi</option>
                        @else
                            <option value="Sudah Disposisi" >Sudah Disposisi</option>
                            <option value="Belum Disposisi" selected>Belum Disposisi</option>
                        @endif
                      </select>
                    </div>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="deskripsi">{{$surat->deskripsi}}</textarea>
                    </div>
                  </div>
            </div>
          </div>
          <input type="submit" value="Save" class="btn buttonCustom btn-primary mr-2">
          <a href="{{ route('suratMasuk') }}" class="btn buttonCustom btn-danger mr-2">Cancel</a>
        </form>
      </div>
      {{-- <div class="btn-container form">
        <button type="submit" class="btn buttonCustom btn-primary mr-2"><i class="icon-trash"></i> Simpan</button>
        <button type="submit" class="btn buttonCustom btn-danger mr-2"><i class="icon-trash"></i> Reset</button>
    </div> --}}
    </div>
  </div>
@endsection
