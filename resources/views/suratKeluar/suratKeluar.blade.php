@extends('template')
@section('page_title')
Surat Keluar - Sipsu
@endsection
@section('content')
<h2>Surat Keluar</h2>
<div class="btn-container">
    <button type="submit" class="btn buttonCustom btn-success mr-2"><i class="icon-plus"></i> Tambah</button>
    <button type="submit" class="btn buttonCustom btn-danger mr-2"><i class="icon-trash"></i> Hapus</button>
</div>
<div class="col-lg-12 grid-margin stretch-card mt-3" style="padding:0px;">
    <div class="card">
      <div class="card-body" style="padding:10px 0;"> 
            <div class="tabs-content">
            <h4 class="card-title"><i class="icon-screen-desktop"></i>  Data Surat Terbaru</h4>
            </p>
            <table class="table table-hover content live" id="surat-masuk" style="width:100%;">
              <thead>
                <tr>
                  <th style="width: 10%;">No</th>
                  <th style="width: 10%;">No. Surat</th>
                  <th style="width: 10%;">Tanggal Surat</th>
                  <th style="width: 10%;">Perihal</th>
                  <th style="width: 10%;">Pengirim</th>
                  <th style="width: 10%;">Kepada</th>
                  <th style="width: 10%;">Jenis Surat</th>
                  <th style="width: 10%;">Sifat Surat</th>
                  <th style="width: 10%;">Petugas</th>
                  <th style="width: 10%;">Deskripsi</th>
                  <th style="width: 10%;">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>212</td>
                  <td>2018-02-14</td>
                  <td>Ujikom</td>
                  <td>Surat Dinas</td>
                  <td>Sekolah</td>
                  <td>Surat permintaan</td>
                  <td><label class="badge badge-warning" style="padding: 10px 12px;">Penting</label></td>
                  <td>si Fulan</td>
                  <td>Sudah Dioposisi</td>
                  <td>
                    <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-primary mr-2"><i class="icon-plus"></i> Disposisi</button>
                    <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-warning mr-2"><i class="icon-trash"></i> Edit</button>
                  </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>212</td>
                    <td>2018-02-14</td>
                    <td>Ujikom</td>
                    <td>Surat Dinas</td>
                    <td>Sekolah</td>
                    <td>Surat permintaan</td>
                    <td><label class="badge badge-danger" style="padding: 10px 12px;">Rahasia</label></td>
                    <td>Si Anu</td>
                    <td>Belum Dioposisi</td>
                    <td>
                      <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-primary mr-2"><i class="icon-plus"></i> Disposisi</button>
                      <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-warning mr-2"><i class="icon-trash"></i> Edit</button>
                    </td>
                </tr>
              </tbody>
            </table>
            </div>
      </div>
    </div>
  </div>
@endsection