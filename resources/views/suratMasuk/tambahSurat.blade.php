@extends('template')
@section('page_title')
Tambah Surat - Sipsu
@endsection
@section('content')
<h2>Tambah Surat</h2>
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body" style="padding:1.875rem 1.875rem 0 1.875rem">
        <h4 class="card-title">Horizontal Two column</h4>
        <form class="form-sample">
          <p class="card-description"> Personal info </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">No. Surat</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pengirim</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" value="Si Fulan" disabled/>
                    </div>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Perihal</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ditujukan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" />
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">File upload</label>
                    <div class="col-sm-9">
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Surat</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Surat Perintah</option>
                        <option>SURAT Dinas</option>
                        <option>Surat Pemberitahuan</option>
                        <option>Surat Tugas</option>
                      </select>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status Disposisi</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Sudah Disposisi</option>
                        <option>Belum Disposisi</option>
                      </select>
                    </div>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Sifat Surat</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Tugas</option>
                        <option>Penting</option>
                        <option>Rahasia</option>
                      </select>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                  </div>
            </div>
          </div>
        </form>
      </div>
      <div class="btn-container form">
        <button type="submit" class="btn buttonCustom btn-primary mr-2"><i class="icon-trash"></i> Simpan</button>
        <button type="submit" class="btn buttonCustom btn-danger mr-2"><i class="icon-trash"></i> Reset</button>
    </div>
    </div>
  </div>
@endsection