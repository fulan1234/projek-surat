@extends('template')
@section('page_title')
Surat Masuk - Sipsu
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body" style="padding-top: 10px;">
          <div class="row">
            <div class="col-md-12">
              <div class="d-sm-flex align-items-baseline report-summary-header">
                <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
              </div>
            </div>
          </div>
          <div class="row report-inner-cards-wrapper">
            <div class=" col-md -6 col-xl report-inner-card">
              <div class="inner-card-text">
                <span class="report-title">Surat Masuk</span>
                <h4> 30 Surat</h4>
                <span class="report-count"> 2 Baru</span>
              </div>
              <div class="inner-card-icon bg-success">
                <i class="icon-envelope-letter"></i>
              </div>
            </div>
            <div class="col-md-6 col-xl report-inner-card">
              <div class="inner-card-text">
                <span class="report-title">Surat Keluar</span>
                <h4> 15 Surat</h4>
                <span class="report-count"> 3 Baru</span>
              </div>
              <div class="inner-card-icon bg-danger">
                <i class="icon-action-redo"></i>
              </div>
            </div>
            <div class="col-md-6 col-xl report-inner-card">
              <div class="inner-card-text">
                <span class="report-title">Disposisi Surat</span>
                <h4>20 Surat</h4>
                <span class="report-count"> 1 Baru</span>
              </div>
              <div class="inner-card-icon bg-warning">
                <i class=" icon-book-open"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 grid-margin stretch-card" style="padding:0px;">
    <div class="card">
      <div class="card-body" style="padding:0px;">
        <div class="tabs">
            <div class="btn-container dashboard">
                <button class="buttonDashboard live" data-id="surat-masuk">Surat Masuk</button>
                <button class="buttonDashboard" data-id="surat-keluar">Surat Keluar</button>
            </div>
    
            <div class="tabs-content">
            <h4 class="card-title"><i class="icon-screen-desktop"></i>  Data Surat Terbaru</h4>
            </p>
            <table class="table table-hover content live" id="surat-masuk" style="width:100%;">
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
                  <td>212</td>
                  <td>2018-02-14</td>
                  <td>Ujikom</td>
                  <td>Sekolah</td>
                  <td>Siswa</td>
                  <td>Surat Keterangan</td>
                  <td><label class="badge badge-danger">Rahasia</label></td>
                  <td>Si Fulan</td>
                  <td>3 Hari yang lalu</td>
                </tr>
                <tr>
                  <td>1111</td>
                  <td>2019-03-16</td>
                  <td>Test</td>
                  <td>Mudryk</td>
                  <td>Nyunyez</td>
                  <td>Perjalanan Dinas</td>
                  <td><label class="badge badge-warning">Penting</label></td>
                  <td>Si Fulano</td>
                  <td>4 Hari yang lalu</td>
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
  </div>
@endsection