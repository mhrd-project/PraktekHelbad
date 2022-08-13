@extends('layouts.app')
@section('title','Dashboard')
@section('home-href')
{{ url("dashboard") }}
@endsection 
@section('home', 'Dashboard')
@section('breadcrumb','Dashboard')
@section('content')
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $data->barang }}</h3>
            <p>Data Barang</p>
          </div>
          <div class="icon">
            <i class="fas fa-fw fa-folder"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $data->stok }}</h3>
            <p>Stok Barang</p>
          </div>
          <div class="icon">
            <i class="fas fa-fw fa-folder-open"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $data->pembelian }}</h3>
            <p>Data Pembelian</p>
          </div>
          <div class="icon">
            <i class="fas fa-fw fa-poll-h"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $data->penjualan }}</h3>
            <p>Data Penjualan</p>
          </div>
          <div class="icon">
            <i class="fas fa-fw fa-poll-h"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection
@section('extra_javascript')
<script>
  $(document).ready(function (){
      $('#dashboard').addClass('active');
  });
</script>
@endsection