@extends('template')
@section('page_title')
Surat Masuk - Sipsu
@endsection
@section('content')
<h2>Surat Masuk</h2>
<div class="btn-container">
    <a href="{{route('tambahSurat')}}">
        <button type="submit" class="btn buttonCustom btn-success mr-2"><i class="icon-plus"></i> Tambah</button>
    </a>
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
                  <th>No</th>
                  <th>No. Surat</th>
                  <th>Tanggal Surat</th>
                  <th>Perihal</th>
                  <th>Jenis Surat</th>
                  <th>Ditujukan</th>
                  <th>Deskripsi</th>
                  <th>Username</th>
                  <th>Berkas</th>
                  <th>Sifat</th>
                  <th>Status</th>
                  <th>Action</th>
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
                  <td>si Fulan</td>
                  <td>1234565.pdf</td>
                  <td><label class="badge badge-warning" style="padding: 3px 5px;">Penting</label></td>
                  <td>Sudah Dioposisi</td>
                  <td>
                    <div class="buttonCustom surat">
                        <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-primary mb-2" style="display: block;"><i class="icon-plus"></i> Disposisi</button>
                        <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-warning mr-2"><i class="icon-trash"></i> Edit</button>
                    </div>
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
                    <td>si Fulan</td>
                    <td>1234565.pdf</td>
                    <td><label class="badge badge-warning" style="padding: 3px 5px;">Penting</label></td>
                    <td>Sudah Dioposisi</td>
                    <td>
                        <div class="buttonCustom surat">
                            <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-primary mb-2" style="display: block;"><i class="icon-plus"></i> Disposisi</button>
                            <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-warning mr-2"><i class="icon-trash"></i> Edit</button>
                        </div>
                    </td>
                </tr>
              </tbody>
            </table>
    
            <table class="table table-hover content" id="surat-keluar" style="width:100%;">
                <thead>
                  <tr>
                    <th style="width: 20%;">No. Surat</th>
                    <th style="width: 20%;">Tanggal Surat</th>
                    <th style="width: 20%;">Perihal</th>
                    <th style="width: 20%;">Pengirim</th>
                    <th style="width: 20%;">Kepada</th>
                    <th style="width: 20%;">Jenis Surat</th>
                    <th style="width: 20%;">Sifat</th>
                    <th style="width: 20%;">Petugas</th>
                    <th style="width: 20%;">Waktu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>311</td>
                    <td>2023-05-14</td>
                    <td>UN</td>
                    <td>SDN 01 Pagi</td>
                    <td>Siswa</td>
                    <td>Surat Peringatan</td>
                    <td><label class="badge badge-danger">Rahasia</label></td>
                    <td>Si Anu</td>
                    <td>1 Hari yang lalu</td>
                  </tr>
                  <tr>
                    <td>2312</td>
                    <td>2021-08-15</td>
                    <td>Testing Web</td>
                    <td>Plesbol</td>
                    <td>ETI</td>
                    <td>Negosiasi Akun</td>
                    <td><label class="badge badge-warning">Penting</label></td>
                    <td>Si Manusia</td>
                    <td>3 Jam yang lalu</td>
                  </tr>
                </tbody>
            </table>
            </div>
      </div>
    </div>
  </div>
@endsection