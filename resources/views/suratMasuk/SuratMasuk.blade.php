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
                        </td>
                        <td>{{$s->status}}</td>
                        <td>
                            <form action="{{route('hapussurat', $s->id)}}" method="POST" onsubmit="return confirm('Anda yakin menghapus ini?');">
                                @csrf
                                <div>
                                    <a href="#popup-suratMasuk" class="btn buttonCustom daftar-surat-masuk btn-primary mr-2" onclick="showPopup('popup-suratMasuk','{{$s->no}}', '{{$s->perihal}}', '{{$s->tgl_surat}}', '{{$s->jenis_surat->name}}', '{{$s->deskripsi}}', '{{$s->pengirim}}', '{{$s->ditujukan}}', '{{$s->berkas}}', '{{$s->status}}' )"><i class="icon-plus"></i></a>
                                    <a href="{{route('editsurat', $s->id)}}" class="btn buttonCustom daftar-surat-masuk btn-warning mr-2"><i class=" icon-magic-wand"></i></a>
                                    @method('DELETE')
                                    <button type="submit" class="btn buttonCustom daftar-surat-masuk btn-danger mr-2"><i class="icon-trash"></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
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
                    <p id="no"></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Pengirim</strong></label>
                      <div class="">
                        <p id="pengirim"></p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Perihal</strong></label>
                      <div class="">
                        <p id="perihal"></p>
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Ditujukan</strong></label>
                      <div class="">
                        <p id="ditujukan"></p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Tanggal Surat</strong></label>
                      <div class="">
                        <p id="tanggal"></p>
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>File upload</strong></label>
                      <div class="">
                        <p id="berkas"></p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Jenis Surat</strong></label>
                      <div class="">
                        <p id="jenis"></p>
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Status Disposisi</strong></label>
                      <div class="">
                        <p id="status"></p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class=""><strong>Deskripsi</strong></label>
                      <div class="">
                          <p id="desc"></p>
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
    </div>
  </div>

    <script>
        function showPopup(popupId, no, perihal, tanggal, jenis, desc, pengirim, ditujukan, berkas, status) {
            // Mendapatkan elemen popup
            var popup = document.getElementById(popupId);

            // Menetapkan nilai ke dalam elemen popup
            document.getElementById('no').innerText = no;
            document.getElementById('perihal').innerText = perihal;
            document.getElementById('tanggal').innerText = tanggal;
            document.getElementById('jenis').innerText = jenis;
            document.getElementById('desc').innerText = desc;
            document.getElementById('pengirim').innerText = pengirim;
            document.getElementById('ditujukan').innerText = ditujukan;
            document.getElementById('berkas').innerText = berkas;
            document.getElementById('status').innerText = status;
        }
    </script>

@endsection
