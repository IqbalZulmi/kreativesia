@extends('layout.html')

@section('content')
<div class="min-vh-100">
    <div class="d-flex justify-content-center align-items-center header finisher-header" data-aos="fade-up" data-aos-duration="500">
        <img src="{{ $dataProfile->foto ? asset('storage/'.$dataProfile->foto) : 'https://learning-if.polibatam.ac.id/theme/image.php/moove/core/1675225508/u/f2' }}" alt="" class="border rounded-circle object-fit-cover my-3" height="170" width="170">
    </div>
    <div class="container">
        <form action="{{ route('updateProfilePerguruan',['id_user' => $dataProfile->id_user]) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('put')
            <div class="row border my-2">
                <div class="col-12 text-center mt-3" data-aos="fade-down" data-aos-duration="500">
                    <h2 class="hard-color">Profile</h2>
                </div>
                <div class="col-12 d-flex justify-content-end mb-3" data-aos="fade-left" data-aos-duration="500">
                    <button type="button" class="btn bg-soft" onclick="enableinput()" id="editButton">
                        <i class="fa-solid fa-gear"></i> Edit
                    </button>
                </div>
                <input type="hidden" name="old_kode_pt" value="{{ $dataProfile->kode_pt }}">
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="500">
                    <label for="" class="form-label">Kode Perguruan Tinggi</label>
                    <input type="text" name="kode_pt" class="form-control buka @error('kode_pt') is-invalid @enderror" value="{{ old('kode_pt',$dataProfile->kode_pt) }}" readonly disabled required>
                    @error('kode_pt')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="500">
                    <label for="" class="form-label">Nama Perguruan Tinggi</label>
                    <input type="text" name="nama_pt" class="form-control buka @error('nama_pt') is-invalid @enderror" value="{{ old('nama_pt',$dataProfile->nama_pt) }}" readonly disabled required>
                    @error('nama_pt')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="500">
                    <label for="" class="form-label">Alamat Perguruan Tinggi</label>
                    <input type="text" name="alamat_pt" class="form-control buka @error('alamat_pt') is-invalid @enderror" value="{{ old('alamat_pt',$dataProfile->alamat_pt) }}" readonly disabled required>
                    @error('alamat_pt')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="500">
                    <label for="" class="form-label">Kode Pos Perguruan Tinggi</label>
                    <input type="text" name="kode_pos_pt" class="form-control buka @error('kode_pos_pt') is-invalid @enderror" value="{{ old('kode_pos_pt',$dataProfile->kode_pos_pt) }}" readonly disabled required>
                    @error('kode_pos_pt')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="500">
                    <label for="" class="form-label">Foto Perguruan Tinggi</label>
                    <input type="file" name="foto" class="form-control buka @error('foto') is-invalid @enderror" readonly disabled>
                    @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 d-flex justify-content-center mb-3" data-aos="fade-up" data-aos-duration="500">
                    <button type="submit" class="btn bg-soft">Simpan Perubahan</button>
                </div>
            </div>
        </form>
        <form action="{{ route('updateKataSandiPerguruan',['id_user' => $dataProfile->id_user]) }}" method="POST">
            @csrf @method('put')
            <div class="border row my-3">
                <div class="col-12 text-center mt-3" data-aos="fade-down" data-aos-duration="500">
                    <h2 class="hard-color">Ubah Kata Sandi</h2>
                </div>
                <div class="col-12 mb-3" data-aos="fade-up" data-aos-duration="500">
                    <label for="" class="form-label">Kata Sandi Lama</label>
                    <input type="password" name="password_lama" class="form-control buka @error('password_lama') is-invalid @enderror" value="{{ old('password_lama') }}" placeholder="Masukkan password lama" required>
                    @error('password_lama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="500">
                    <label for="" class="form-label">Kata Sandi Baru</label>
                    <input type="password" name="password_baru" class="form-control @error('password_baru') is-invalid @enderror" value="{{ old('password_baru') }}" placeholder="Masukkan password baru" required>
                    @error('password_baru')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="500">
                    <label for="" class="form-label">Ulangi Kata Sandi Baru</label>
                    <input type="password" name="konf_password" class="form-control @error('konf_password') is-invalid @enderror" value="{{ old('konf_password') }}" placeholder="Ulangi password baru" required>
                    @error('konf_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 d-flex justify-content-center mb-3" data-aos="fade-up" data-aos-duration="500">
                    <button type="submit" class="btn bg-soft">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
