@extends('layout.html')

@section('content')
<div class="min-vh-100 section-warm-bg-color">
    <div class="container">
        <h2 class="text-capitalize hard-color py-3">Kelola Akun mahasiswa</h2>
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
                        <th scope="col">Username</th>
                        <th scope="col">nim</th>
                        <th scope="col">nama</th>
                        <th scope="col">alamat</th>
                        <th scope="col">email</th>
                        <th scope="col">jenis kelamin</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">prodi</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>iqbal410</td>
                        <td>4342201050</td>
                        <td>iqbal</td>
                        <td>Kepulauan riau</td>
                        <td>iqbal@gmail.com</td>
                        <td>pria</td>
                        <td>TI</td>
                        <td>TI</td>
                        <td>
                            <button class="btn bg-soft text-capitalize" data-bs-toggle="modal" data-bs-target="#editModal">
                                edit <i class="fa-regular fa-pen-to-square text-light"></i>
                            </button>
                            <button class="btn bg-soft text-capitalize" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                hapus <i class="fa-solid fa-trash text-light"></i>
                            </button>
                        </td>
                    </tr>
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
                <h5 class="modal-title">Buat Akun Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" class="row">
                        <div class="mb-3 col-6">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"  name="username" placeholder="masukkan username" required>
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
                            <label for="" class="form-label">NIM</label>
                            <input class="form-control @error('nim') is-invalid @enderror" name="nim" placeholder="nim mahasiswa" required>
                            @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama mahasiswa" required>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat Mahasiswa" required>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Mahasiswa" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis kelamin</label>
                            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="pria">pria</option>
                                <option value="wanita">wanita</option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jurusan</label>
                            <select class="form-select @error('jurusan') is-invalid @enderror" name="jurusan" required>
                                <option value="">Pilih Jurusan</option>
                                <option value="Teknik informatika">Teknik Informatika</option>
                                <option value="Teknik elektro">Teknik Elektro</option>
                                <option value="Teknik mesin">Teknik Mesin</option>
                                <option value="Manajemen bisnis">Manajemen Bisnis</option>
                            </select>
                            @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Prodi</label>
                            <input class="form-control @error('prodi') is-invalid @enderror" name="prodi" placeholder="Prodi Mahasiswa" required>
                            @error('prodi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">Simpan</button>
            </div>
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
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="masukkan username" required>
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">NIM</label>
                        <input class="form-control @error('nim') is-invalid @enderror" name="nim" placeholder="nim mahasiswa" required>
                        @error('nim')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama mahasiswa" required>
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <input class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat Mahasiswa" required>
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Mahasiswa" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis kelamin</label>
                        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="pria">pria</option>
                            <option value="wanita">wanita</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jurusan</label>
                        <select class="form-select @error('jurusan') is-invalid @enderror" name="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik informatika">Teknik Informatika</option>
                            <option value="Teknik elektro">Teknik Elektro</option>
                            <option value="Teknik mesin">Teknik Mesin</option>
                            <option value="Manajemen bisnis">Manajemen Bisnis</option>
                        </select>
                        @error('jurusan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Prodi</label>
                        <input class="form-control @error('prodi') is-invalid @enderror" name="prodi" placeholder="Prodi Mahasiswa" required>
                        @error('prodi')
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
