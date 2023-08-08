@extends('layout.html')

@push('css')
    <link rel="stylesheet" href="{{ asset('web-assets/css/pasien.css') }}">
@endpush

@section('content')
    <div class="min-vh-100">
        <div class="container">
            <h2 class="text-uppercase mx-auto heading">pasien <span class="ms-1">saya</span></h2>
            <div class="row border-dark border-bottom mb-3">
                <div class="col-12">
                    <p class="fs-5 hard-color"><i class="fa-regular fa-circle text-warning bg-warning rounded-circle"></i> Menunggu: </p>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card mb-3 h-100">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="{{ asset('web-assets/image/consult.png') }}" class="img-fluid rounded-start object-fit-cover" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <p class="card-title blockquote fw-semibold">Alfa</p>
                                    <p class="text-body-secondary blockquote-footer fst-italic">4342201055</p>
                                    <p class="card-text">
                                        <span class="fw-medium text-capitalize">keluhan</span> : stress
                                    </p>
                                    <p class="card-text">
                                        <span class="fw-medium text-capitalize">jenis kelamin</span> : laki-laki
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn bg-hard text-light me-2" data-bs-toggle="modal" data-bs-target="#DetailModal">
                                            <i class="fa-solid fa-circle-info"></i> Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-dark border-bottom mb-3">
                <div class="col-12">
                    <p class="fs-5 hard-color"><i class="fa-regular fa-circle text-success bg-success rounded-circle"></i> diterima: </p>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card mb-3 h-100">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="{{ asset('web-assets/image/consult.png') }}" class="img-fluid rounded-start object-fit-cover" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <p class="card-title blockquote fw-semibold">Alfa</p>
                                    <p class="text-body-secondary blockquote-footer fst-italic">4342201055</p>
                                    <p class="card-text">
                                        <span class="fw-medium text-capitalize">keluhan</span> : stress
                                    </p>
                                    <p class="card-text">
                                        <span class="fw-medium text-capitalize">jenis kelamin</span> : laki-laki
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn bg-hard text-light me-2" data-bs-toggle="modal" data-bs-target="#DetailModal">
                                            <i class="fa-solid fa-circle-info"></i> Detail
                                        </button>
                                        <button type="button" class="btn bg-hard text-light me-2" data-bs-toggle="modal" data-bs-target="#DetailModal">
                                            <i class="fa-solid fa-circle-check"></i> Selesai
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="fs-5 hard-color"><i class="fa-regular fa-circle text-primary bg-primary rounded-circle"></i> selesai: </p>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card mb-3 h-100">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="{{ asset('web-assets/image/consult.png') }}" class="img-fluid rounded-start object-fit-cover" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <p class="card-title blockquote fw-semibold">Alfa</p>
                                    <p class="text-body-secondary blockquote-footer fst-italic">4342201055</p>
                                    <p class="card-text">
                                        <span class="fw-medium text-capitalize">keluhan</span> : stress
                                    </p>
                                    <p class="card-text">
                                        <span class="fw-medium text-capitalize">jenis kelamin</span> : laki-laki
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn bg-hard text-light me-2" data-bs-toggle="modal" data-bs-target="#DetailModal">
                                            <i class="fa-solid fa-circle-info"></i> Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="DetailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alfa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('web-assets/image/consult.png') }}" alt="" class="rounded-circle object-fit-cover img-fluid">
                            </div>
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover border table-bordered align-middle">
                                        <tr>
                                            <th class="text-capitalize">Id janji temu</th>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize">nim</th>
                                            <td>4342201055</td>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize">nama</th>
                                            <td>alfa</td>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize">jenis kelamin</th>
                                            <td>laki-laki</td>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize">jenis konsultasi</th>
                                            <td>online</td>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize">tanggal konsultasi</th>
                                            <td>20/10/2022</td>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize">jam konsultasi</th>
                                            <td>14:00 wib</td>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize">keluhan umum</th>
                                            <td>stress</td>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize">detail masalah</th>
                                            <td>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit repellendus nulla porro fugit, quisquam vero dignissimos corrupti, officia ratione laudantium quaerat, voluptatum voluptatem? A molestiae nemo, recusandae aliquam quidem excepturi.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#AturUlangJadwalModal">Atur ulang jadwal</button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TerimaModal">Terima</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="TerimaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terima pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="4" placeholder="Berikan link meet jika jenis pengajuan online" required></textarea>
                            <p class="text-small text-danger">*Abaikan jika jenis pengajuan offline</p>
                            @error('keterangan')
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
    <div class="modal fade" id="AturUlangJadwalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Atur ulang jadwal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" class="row">
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" required>
                                @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label">Jam</label>
                                <input type="time" name="jam" class="form-control @error('tanggal') is-invalid @enderror" required>
                                @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="4" placeholder="Berikan keterangan mengapa anda mengatur ulang jadwal" required></textarea>
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
@endsection
