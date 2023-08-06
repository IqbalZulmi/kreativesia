@extends('layout.html')

@section('content')
<div class="min-vh-100">
    <div class="container">
        <h2 class="text-capitalize my-3">laporan konsultasi</h2>
        <div class="d-flex flex-wrap">
            <button class="btn bg-hard text-white ms-auto mb-2" data-bs-toggle="modal" data-bs-target="#BuatLaporanModal">
                <i class="fa-solid fa-circle-plus"></i> Buat Laporan
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover border table-bordered text-center align-middle">
                <thead class="text-capitalize">
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">jenis konsultasi</th>
                        <th scope="col">keluhan</th>
                        <th scope="col">Tingkat keluhan</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">status</th>
                        <th scope="col">deskripsi laporan</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>online</td>
                        <td>stress</td>
                        <td><span class="badge text-bg-danger">urgent</span></td>
                        <td>20-10-2022</td>
                        <td>diterima</td>
                        <td>-</td>
                        <td>
                            <button class="btn bg-soft text-capitalize">edit deskripsi laporan <i class="fa-regular fa-pen-to-square text-light"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="BuatLaporanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atur ulang jadwal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label">Id janji temu</label>
                        <input class="form-control" type="number" name="id_janji_temu" min="0" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi laporan</label>
                        <textarea class="form-control" name="deskripsi_laporan" rows="4" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $('.table').DataTable();
    </script>
@endpush
