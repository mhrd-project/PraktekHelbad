@extends('layouts.app')
@section('title','Pembelian')
@section('home-href')
{{ url("dashboard") }}
@endsection 
@section('home', 'Dashboard')
@section('breadcrumb','Pembelian')
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
      $('#pembelian').addClass('active');
  });
</script>
@endsection