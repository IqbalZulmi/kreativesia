@extends('layout.html')

@section('content')
<div class="min-vh-100 section-warm-bg-color">
    <div class="container">
        <h2 class="text-capitalize hard-color py-3">laporan konsultasi</h2>
        <div class="d-flex flex-wrap">
            <button class="btn bg-hard text-white ms-auto mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#BuatLaporanModal">
                <i class="fa-solid fa-circle-plus"></i> Buat Laporan
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover border table-bordered align-middle">
                <thead class="text-capitalize">
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nim</th>
                        <th scope="col">jenis konsultasi</th>
                        <th scope="col">keluhan</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">Tingkat keluhan</th>
                        <th scope="col">laporan perguruan tinggi</th>
                        <th scope="col">catatan mahasiswa</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>4342201050</td>
                        <td>online</td>
                        <td>stress</td>
                        <td>20-10-2022</td>
                        <td><span class="badge text-bg-danger">urgent</span></td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure at error sed deleniti. Ipsa sapiente, architecto similique voluptates labore numquam deleniti dicta porro quibusdam iste accusamus nobis, dignissimos eos quam!</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eligendi sed laudantium ab earum aliquid animi perspiciatis suscipit odit tempora sapiente repudiandae natus, excepturi beatae. Laboriosam commodi doloribus ab impedit!</td>
                        <td>
                            <button class="btn bg-soft text-capitalize" data-bs-toggle="modal" data-bs-target="#EditModal">edit <i class="fa-regular fa-pen-to-square text-light"></i></button>
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
                <h5 class="modal-title">Buat Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label">Id janji temu</label>
                        <select name="id_janji_temu" class="form-control @error('id_janji_temu') is-invalid @enderror" required>
                            <option value="">Pilih id</option>
                        </select>
                        @error('id_janji_temu')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tingkat Keluhan</label>
                        <select name="tingkat_keluhan" class="form-control @error('tingkat_keluhan') is-invalid @enderror" required>
                            <option value="">Pilih Tingkat Keluhan</option>
                            <option value="berat">Berat</option>
                            <option value="sedang">Sedang</option>
                            <option value="ringan">Ringan</option>
                        </select>
                        @error('tingkat_keluhan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Catatan Mahasiswa</label>
                        <textarea name="catatan_mahasiswa" class="form-control @error('catatan_mahasiswa') is-invalid @enderror" rows="4" placeholder="Catatan anda untuk mahasiswa" required></textarea>
                        @error('catatan-mahasiswa')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">laporan perguruan tinggi</label>
                        <textarea name="laporan_perguruan_tinggi" class="form-control @error('laporan_perguruan_tinggi') is-invalid @enderror" rows="4" placeholder="Laporan untuk perguruan tinggi" required></textarea>
                    </div>
                    @error('laporan_perguruan_tinggi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">edit Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label">Tingkat Keluhan</label>
                        <select name="tingkat_keluhan" class="form-control @error('tingkat_keluhan') is-invalid @enderror" required>
                            <option value="">Pilih Tingkat Keluhan</option>
                            <option value="berat">Berat</option>
                            <option value="sedang">Sedang</option>
                            <option value="ringan">Ringan</option>
                        </select>
                        @error('tingkat_keluhan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Catatan Mahasiswa</label>
                        <textarea name="catatan_mahasiswa" class="form-control @error('catatan_mahasiswa') is-invalid @enderror" rows="4" placeholder="Catatan anda untuk mahasiswa" required></textarea>
                        @error('catatan-mahasiswa')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">laporan perguruan tinggi</label>
                        <textarea name="laporan_perguruan_tinggi" class="form-control @error('laporan_perguruan_tinggi') is-invalid @enderror" rows="4" placeholder="Laporan untuk perguruan tinggi" required></textarea>
                    </div>
                    @error('laporan_perguruan_tinggi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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
        $(document).ready(function () {
            $('.table').DataTable({
                info: false,
                dom: '<"d-flex flex-wrap mb-2"B><"row"<"col-sm-6 d-flex justify-content-center justify-content-sm-start mb-2 mb-sm-0"l><"col-sm-6 d-flex justify-content-center justify-content-sm-end"f>>rtp',
                buttons: [
                    {
                        extend: 'copy',
                        text: '<i class="fa-solid fa-copy"></i> Copy',
                        titleAttr: 'Copy'
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fa-solid fa-file-excel"></i> Excel',
                        titleAttr: 'Excel',
                        filename: 'Laporan_Konsultasi',
                        title: 'Laporan Konsultasi Mahasiswa'
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fa-solid fa-file-pdf"></i> PDF',
                        titleAttr: 'PDF',
                        filename: 'Laporan_Konsultasi',
                        title: 'Laporan Konsultasi Mahasiswa'
                    }
                ]
            });
        });
    </script>
@endpush
