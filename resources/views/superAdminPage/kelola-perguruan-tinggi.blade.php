@extends('layout.html')

@section('content')
<div class="min-vh-100 section-warm-bg-color">
    <div class="container">
        <h2 class="text-capitalize hard-color py-3">Kelola Akun Perguruan Tinggi</h2>
        <div class="d-flex flex-wrap">
            <button class="btn bg-hard text-white ms-auto mb-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
                <i class="fa-solid fa-circle-plus"></i> Buat akun
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover border table-bordered align-middle">
                <thead class="text-capitalize">
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">Kode Perguruan Tinggi</th>
                        <th scope="col">nama perguruan tinggi</th>
                        <th scope="col">alamat perguruan tinggi</th>
                        <th scope="col">Kode pos perguruan tinggi</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($perguruanTinggi as $index => $data )
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $data->kode_pt }}</td>
                        <td>{{ $data->nama_pt }}</td>
                        <td>{{ $data->alamat_pt }}</td>
                        <td>{{ $data->kode_pos_pt }}</td>
                        <td>
                            <button class="btn bg-soft text-capitalize" data-bs-toggle="modal" data-bs-target="#editModal">
                                edit <i class="fa-regular fa-pen-to-square text-light"></i>
                            </button>
                            <button class="btn bg-soft text-capitalize" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                hapus <i class="fa-solid fa-trash text-light"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td rowspan="100%">Tidak ada yang ditampilkan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat Akun Perguruan Tinggi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('tambahPerguruanTinggi') }}" method="POST">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            @csrf
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"  name="username" placeholder="masukkan username" required autofocus>
                                @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="masukkan password" required>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kode Perguruan Tinggi</label>
                                <input type="text" class="form-control @error('kode_pt') is-invalid @enderror" name="kode_pt" placeholder="Kode Perguruan Tinggi" required>
                                @error('kode_pt')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Perguruan Tinggi</label>
                                <input type="text" class="form-control @error('nama_pt') is-invalid @enderror" name="nama_pt" placeholder="Nama Perguruan Tinggi" required>
                                @error('nama_pt')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat Perguruan Tinggi</label>
                                <input type="text" class="form-control @error('alamat_pt') is-invalid @enderror" name="alamat_pt" placeholder="Alamat perguruan tinggi" required>
                                @error('alamat_pt')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kode Pos Perguruan Tinggi</label>
                                <input type="text" class="form-control @error('kode_pos_pt') is-invalid @enderror" name="kode_pos_pt" placeholder="Kode Pos Perguruan Tinggi" required>
                                @error('kode_pos_pt')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror"  name="username" placeholder="masukkan username" required>
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor STR</label>
                        <input class="form-control @error('kode_pt') is-invalid @enderror" name="kode_pt" placeholder="Nomor STR Psikolog" required>
                        @error('kode_pt')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input class="form-control @error('nama_pt') is-invalid @enderror" name="nama" placeholder="Nama psikolog" required>
                        @error('nama_pt')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alumni</label>
                        <input class="form-control @error('alamat_pt') is-invalid @enderror" name="alumni" placeholder="Asal Universitas Psikolog" required>
                        @error('alamat_pt')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">kode_pos_pt</label>
                        <input class="form-control @error('kode_pos_pt') is-invalid @enderror" name="kode_pos_pt" placeholder="kode_pos_pt psikolog" required>
                        @error('kode_pos_pt')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor Telepon</label>
                        <input class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" placeholder="Nomor telepon Mahasiswa" required>
                        @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-capitalize">apakah anda yakin ingin menghapus akun dengan username <span class="fw-bold">iqbal</span>?</p>
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
                dom: '<"row"<"col-sm-6 d-flex justify-content-center justify-content-sm-start mb-2 mb-sm-0"l><"col-sm-6 d-flex justify-content-center justify-content-sm-end"f>>rtp',
            });
        });
    </script>
@endpush
