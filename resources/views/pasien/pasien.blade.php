@extends('layouts.master')
@section('title','Posyandu Lansia')
@section('content')
<div class="section-body">
        <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="{{ route('pasien.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah</a>
            <input class="form-control mt-2" id="myInput" type="text" placeholder="Cari Nama" style="width:25%">
            <hr>
            @if (session('message'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  {{session('message')}}
                </div>
              </div>
            @endif
            <table style="text-align:center" class="table table-striped table-bordered table-sm">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Gol. Darah</th>
                    <th>Riwayat Penyakit</th>
                    <th>Action</th>
                </tr>

                <tbody id="myTable">
                    @foreach($data_pasien as $no => $data)
                    <tr>
                        <td>{{ $data_pasien->firstItem()+$no }}</td>
                        <td>{{ $data->nama_pasien }}</td>
                        <td>{{ $data->no_ktp }}</td>
                        <td>{{ $data->tgl_lahir }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->gol_darah }}</td>
                        <td>{{ $data->riwayat_penyakit }}</td>
                        <td>
                            <a href="#" class="btn btn-info">Detail</a>
                            <a href="{{ route('pasien.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                            <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                <form action="{{ route('pasien.delete', $data->id) }}" id="delete{{ $data->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                    
            </table>
            {{ $data_pasien->links() }}
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script src="{{ asset('assets/node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
@endpush

@push('after-scripts')
<script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
        swal({
        title: 'Yakin hapus data?',
        text: 'Data yang dihapus, akan dihapus secara permanen!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
        })
    .then((willDelete) => {
        if (willDelete) {
    swal('Data anda telah dihapus!', {
    icon: 'success',
    });
        $(`#delete${id}`).submit();
        } else {
        }
    });
});
</script>
@endpush
