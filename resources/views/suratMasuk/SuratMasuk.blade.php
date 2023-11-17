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
    {{-- <button type="submit" class="btn buttonCustom btn-danger mr-2"><i class="icon-trash"></i> Hapus</button> --}}
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
                  <th>Jenis Surat</th>
                  <th>Ditujukan</th>
                  <th>Deskripsi</th>
                  <th>Berkas</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($suratm as $s)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$s->no}}</td>
                        <td>{{$s->tgl_surat}}</td>
                        <td>{{$s->jenis_surat->name}}</td>
                        <td>{{$s->ditujukan}}</td>
                        <td>{{$s->deskripsi}}</td>
                        <td>
                            <a style="color: black;" href="{{ route('downloadsuratmasuk', $s->berkas) }}">{{$s->berkas}}</a>
                            {{-- <a style="color: black;" href="{{ route('downloadsuratmasuk', $s->berkas) }}">{{$s->berkas}}</a> --}}
                        </td>
                        <td>{{$s->status}}</td>
                        {{-- <td>
                            <div class="buttonCustom surat">
                                <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-primary mb-2" style="display: block;"><i class="icon-plus"></i> Disposisi</button>
                                <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-warning mr-2"><i class="icon-trash"></i> Edit</button>
                            </div>
                        </td> --}}
                        <td>
                            <form action="{{route('hapussurat', $s->id)}}" method="POST" onsubmit="return confirm('Anda yakin menghapus ini?');">
                                @csrf
                                <div>
                                    <a href="#popup-suratMasuk" class="btn buttonCustom daftar-surat-masuk btn-primary mr-2"><i class="icon-plus"></i></a>
                                    <a href="{{route('editsurat', $s->id)}}" class="btn buttonCustom daftar-surat-masuk btn-warning mr-2"><i class=" icon-magic-wand"></i></a>
                                    @method('DELETE')
                                    <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-danger mr-2"><i class="icon-trash"></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    {{-- <tr>
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
                    </tr> --}}
                @endforeach
              </tbody>
            </table>

            <table class="table table-hover content" id="surat-keluar" style="width:100%;">
                <thead>
                  <tr>
                    <th>No. Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Perihal</th>
                    <th>Pengirim</th>
                    <th>Kepada</th>
                    <th>Jenis Surat</th>
                    <th>Sifat</th>
                    <th>Petugas</th>
                    <th>Waktu</th>
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

  <div class="popupCustom" id="popup-suratMasuk">
    <div class="card popup-content grid-margin">
      <div class="card-body" style="padding: 0px;">
        <div class="popup-header">
          <h4 class="card-title popup">Buat Disposisi Surat</h4>
        </div>
        <div class="popup-form">
          <form action="#" method="POST" enctype="multipart/form-data" class="form-sample">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="" style="display: block;"><strong>No. Surat</strong></label>
                  <div class="">
                    <p>112</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Pengirim</strong></label>
                      <div class="">
                        <p>Hivi</p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Perihal</strong></label>
                      <div class="">
                        <p>Surat Dinasti</p>
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Ditujukan</strong></label>
                      <div class="">
                        <p>Yang Mulia COCO</p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Tanggal Surat</strong></label>
                      <div class="">
                        <p>04/08/2007</p>
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>File upload</strong></label>
                      <div class="">
                        <p>surat_tugas.pdf</p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Jenis Surat</strong></label>
                      <div class="">
                        <p>Perang</p>
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Status Disposisi</strong></label>
                      <div class="">
                        <p>Sudah Disposisi</p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Deskripsi</strong></label>
                      <div class="">
                          <p>Kita dr. tangguh</p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="button-popup">
              <input type="submit" value="Save" class="btn buttonCustom btn-primary mr-2">
              <a href="#" class="btn buttonCustom btn-danger mr-2">Cancel</a>
            </div>
          </form>
        </div>
      </div>
      {{-- <div class="btn-container form">
        <button type="submit" class="btn buttonCustom btn-primary mr-2"><i class="icon-trash"></i> Simpan</button>
        <button type="submit" class="btn buttonCustom btn-danger mr-2"><i class="icon-trash"></i> Reset</button>
    </div> --}}
    </div>
  </div>

    {{-- <div class="popup-container active">
      <h4>20% OFF Offer</h4>
      <label for="email">Your Email</label>
      <input
        type="email"
        name="email"
        class="input"
        placeholder="Enter Your Email"
      />
      <button class="popup-btn">Join</button>
      <div class="close-icon">
        <i class="fas fa-times fa-2x"></i>
      </div>
    </div> --}}
@endsection