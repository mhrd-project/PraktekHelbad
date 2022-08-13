@extends('layouts.app') @section('title','Tambah Penjualan')
@section('home-href')
{{ url("penjualan") }}
@endsection @section('home', 'Penjualan') @section('breadcrumb','Tambah Penjualan')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Penjualan</h3>
                    </div>
                    <form method="post" action="{{ url('/penjualan') }}">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Barang <span class="text-danger">*</span></label>
                                <select name="id_barang" id="nama" class="form-control">
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stok">Jumlah Barang <span class="text-danger">*</span></label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="stok"
                                    name="stok"
                                    placeholder="Jumlah Barang"
                                    step="any"
                                    autocomplete="off"
                                    value=1
                                    min=1
                                    required
                                />
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
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
