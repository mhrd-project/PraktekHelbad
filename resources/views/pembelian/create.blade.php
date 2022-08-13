@extends('layouts.app') @section('title','Tambah Pembelian')
@section('home-href')
{{ url("pembelian") }}
@endsection @section('home','Pembelian') @section('breadcrumb','Tambah Pembelian')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Pembelian</h3>
                    </div>

                    <form method="post" action="{{ url('/pembelian') }}">
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
                                    value=1
                                    autocomplete="off"
                                    min=1
                                    required
                                />
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection @section('extra_javascript')
<script>
    $(document).ready(function () {
        $('#pembelian').addClass('active');
    });
</script>
@endsection