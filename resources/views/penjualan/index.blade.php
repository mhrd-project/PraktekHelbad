@extends('layouts.app')
@section('title','Penjualan')
@section('home-href')
{{ url("dashboard") }}
@endsection 
@section('home', 'Dashboard')
@section('breadcrumb','Penjualan')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                <a href="{{ url('penjualan/tambah') }}" class="btn btn-sm btn-primary"><b>+</b> Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  @if (session()->has('warning'))
                      <div class="alert alert-danger">
                          {{ session('warning') }}
                      </div>
                  @elseif (session()->has('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID.</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $item)
                      <tr class="text-center">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->barang->nama }}</td>
                        <td class="text-right">Rp. {{ str_replace(',', '.', number_format($item->barang->harga)) }},00</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>
                          <div class="btn-group">
                            <a href="{{ url('/Penjualan/'.$item->id) }}" class="btn btn-sm btn-success">Detail</a>
                          </div>
                          
                        </td>
                      </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  <!-- /.container-fluid -->
  </div>
</section>
@endsection
@section('extra_javascript')
<script>
  $(document).ready(function (){
      $('#penjualan').addClass('active');
  });
</script>
@endsection