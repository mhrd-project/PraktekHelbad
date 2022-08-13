@extends('layouts.app') @section('title','Tambah Barang')
@section('home-href')
{{ url("barang") }}
@endsection @section('home','Barang') @section('breadcrumb','Tambah Barang')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Barang</h3>
                    </div>
                    <form method="post" action="{{ url('/barang') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Barang <span class="text-danger">*</span></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nama"
                                    placeholder="Nama Barang"
                                    autocomplete="off"
                                    name="nama"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="stok">Stok Barang <span class="text-danger">*</span></label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="stok"
                                    name="stok"
                                    placeholder="Stok Barang"
                                    step="any"
                                    autocomplete="off"
                                    value=1
                                    stok=1
                                    required
                                />
                            </div>
                        
                            <div class="form-group">
                                <label for="harga">Harga <span class="text-danger">*</span></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="harga"
                                    name="harga"
                                    data-type="currency"
                                    placeholder="Harga"
                                    autocomplete="off"
                                />
                            </div>
                        </div>
                
                        <div class="card-footer">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <a href="{{ url('barang') }}" class="btn btn-danger">
                                    Batal
                                </a>
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
        $('#barang').addClass('active');
    });
    
    $("input[data-type='currency']").on({
        keyup: function () {
            formatCurrency($(this));
        },
        blur: function () {
            formatCurrency($(this), "blur");
        },
    });

    function formatNumber(n) {
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function formatCurrency(input, blur) {
        var input_val = input.val();
        if (input_val === "") {
            return;
        }
        var original_len = input_val.length;
        var caret_pos = input.prop("selectionStart");

        if (input_val.indexOf(",") >= 0) {
            var decimal_pos = input_val.indexOf(",");
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);
            left_side = formatNumber(left_side);
            right_side = formatNumber(right_side);
            
            if (blur === "blur") {
                right_side += "00";
            }
            right_side = right_side.substring(0, 2);
            input_val = left_side + "," + right_side;
        } else {
            input_val = formatNumber(input_val);
            input_val = input_val;
            if (blur === "blur") {
                input_val += ",00";
            }
        }

        input.val(input_val);
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }
</script>
@endsection