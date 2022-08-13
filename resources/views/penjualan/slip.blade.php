@extends('layouts.app') 
@section('title','Slip Penjualan')
@section('home-href')
{{ url("penjualan") }}
@endsection @section('home', 'Penjualan') @section('breadcrumb','Slip Penjualan')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Slip Penjualan</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id">ID Penjualan</label>
                            <input
                                type="text"
                                class="form-control"
                                id="id"
                                value="{{ $data->id }}"
                                readonly
                            />
                        </div>
                        <div class="form-group">
                            <label for="id">Nama Barang</label>
                            <input
                                type="text"
                                class="form-control"
                                id="id"
                                value="{{ $data->nama }}"
                                readonly
                            />
                        </div>
                        <div class="form-group">
                            <label for="id">Jumlah Penjualan</label>
                            <input
                                type="text"
                                class="form-control"
                                id="id"
                                value="{{ $data->jumlah }}"
                                readonly
                            />
                        </div>
                        <div class="form-group">
                            <label for="id">Harga Satuan</label>
                            <input
                                type="text"
                                class="form-control"
                                id="id"
                                value="Rp. {{ str_replace(',', '.', number_format($data->harga)) }},00"
                                readonly
                            />
                        </div>
                        <div class="form-group">
                            <label for="id">Harga Total</label>
                            <input
                                type="text"
                                class="form-control"
                                id="id"
                                value="Rp. {{ str_replace(',', '.', number_format($data->total)) }},00"
                                readonly
                            />
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</section>
@endsection @section('extra_javascript')
<script>
    $(document).ready(function (){
        $('#penjualan').addClass('active');
    });
</script>
@endsection
