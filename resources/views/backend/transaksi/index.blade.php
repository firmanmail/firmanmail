@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-md-12">
                <div class="px-3 py-3">
                        <h5 class="text">Transaksi</h5>
                        <a href="{{route('backend.transaksi.create')}}" class="btn btn-outline-info">Tambah Transaksi</a>
                        <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nomor Nota</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis</th>
                      <th>Total Bayar</th>
                      <th>Tanggal</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksis as $transaksi)
                    <tr>
                      <td>{{$transaksi->nomor}}</td>
                      <td>{{$transaksi->nama}}</td>
                      <td>{{$transaksi->jenis}}</td>
                      <td>{{$transaksi->total}}</td>
                      <td>{{$transaksi->tgl}}</td>
                      <th>
                        <button class="btn btn-outline-primary btn-sm" type="submit">Detail</button>
                         <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>
@endsection