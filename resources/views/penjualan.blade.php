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
    <!-- Small boxes (Stat box) -->
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection
@section('extra_javascript')
<script>
  $(document).ready(function (){
      $('#penjualan').addClass('active');
  });
</script>
@endsection