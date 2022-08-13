@extends('layouts.app')
@section('title','Barang')
@section('home-href')
{{ url("dashboard") }}
@endsection 
@section('home','Dashboard')
@section('breadcrumb','Barang')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                <a href="{{ url('barang/tambah') }}" class="btn btn-sm btn-primary"><b>+</b> Tambah</a>
              </div>
              
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
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($data as $item)
                    <tr class="text-center">
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->nama }}</td>
                      <td class="text-right">Rp. {{ str_replace(',', '.', number_format($item->harga)) }},00</td>
                      <td>{{ $item->stok }}</td>
                      <td>
                        <div class="btn-group">
                          <a href="{{ url('/barang/edit/'.$item->id) }}" class="btn btn-sm btn-success">Edit</a>
                          <form method="POST" action="{{ url('/barang/'.$item->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-sm btn-danger delete" value="Hapus">
                          </form>
                        </div>      
                      </td>
                    </tr>
                    @endforeach
                  </tfoot>
                </table>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>

@endsection
@section('extra_javascript')
<script>
  $(document).ready(function () {
    $('#barang').addClass('active');
  });

  $('.delete').click(function(e) {
    e.preventDefault()
    let vm = $(e.target).closest('form')
    swal({
      title: "Hapus Barang?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya",
      cancelButtonText: "Batal",
    }).then(result => {
      if (result.value) {
        vm.submit();
      } else if (result.dismiss === swal.DismissReason.cancel) {
        swal("Batal", "Batal menghapus barang", "error");
      }
      swall.closeModal();
    });
  });
</script>
@endsection