@extends('layout.html')

@section('content')
<div class="min-vh-100">
        <div class="d-flex justify-content-center align-items-center header finisher-header">
            <img src="{{ $dataProfile->foto ? asset('storage/'.$dataProfile->foto) : 'https://learning-if.polibatam.ac.id/theme/image.php/moove/core/1675225508/u/f2' }}" alt="" class="border rounded-circle object-fit-cover my-3" height="170" width="170">
        </div>
    <div class="container">
        <form action="{{ route('updateProfileMahasiswa',['id_user' => $dataProfile->id_user]) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('put')
            <div class="row border my-2">
                <div class="col-12 text-center mt-3">
                    <h2>Profile</h2>
                </div>
                <div class="col-12 d-flex justify-content-end mb-3">
                    <button type="button" class="btn bg-soft" onclick="enableinput()" id="editButton">
                        <i class="fa-solid fa-gear"></i> Edit
                    </button>
                </div>
                <input type="hidden" name="old_email" value="{{ $dataProfile->email }}">
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" placeholder="nim mahasiswa" value="{{ old('nim',$dataProfile->nim) }}" readonly disabled>
                    @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">Perguruan Tinggi</label>
                    <input type="text" class="form-control @error('kode_pt') is-invalid @enderror" name="kode_pt" value="{{ old('kode_pt',$dataProfile->perguruanTinggi->nama_pt) }}" readonly disabled>
                    @error('kode_pt')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control buka @error('nama_mahasiswa') is-invalid @enderror" name="nama_mahasiswa" placeholder="Nama mahasiswa" value="{{ old('nama_mahasiswa',$dataProfile->nama_mahasiswa) }}" required readonly disabled>
                    @error('nama_mahasiswa')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control buka @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat Mahasiswa" value="{{ old('alamat',$dataProfile->alamat) }}" required readonly disabled>
                    @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control buka @error('email') is-invalid @enderror" name="email" placeholder="Email Mahasiswa" value="{{ old('email',$dataProfile->email) }}" required readonly disabled>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">Jenis kelamin</label>
                    <select class="form-select buka @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" required readonly disabled>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="pria" @if ($dataProfile->jenis_kelamin == 'pria') selected @endif>pria</option>
                        <option value="wanita" @if ($dataProfile->jenis_kelamin == 'wanita') selected @endif>wanita</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">fakultas</label>
                    <select class="form-select buka @error('fakultas') is-invalid @enderror" name="fakultas" required readonly disabled>
                        <option value="">Pilih fakultas</option>
                        @foreach ($dataFakultas as $index => $data1)
                            <option value="{{ $data1->id_fakultas }}" @if ($data1->id_fakultas == $dataProfile->id_fakultas) selected @endif>{{ $data1->fakultas }}</option>
                        @endforeach
                    </select>
                    @error('fakultas')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">Foto Mahasiswa</label>
                    <input type="file" name="foto" class="form-control buka @error('foto') is-invalid @enderror" readonly disabled>
                    @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 d-flex justify-content-center mb-3">
                    <button type="submit" class="btn bg-soft">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
