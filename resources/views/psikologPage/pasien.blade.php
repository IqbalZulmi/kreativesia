@extends('layout.html')

@push('css')
    <link rel="stylesheet" href="{{ asset('web-assets/css/pasien.css') }}">
@endpush

@section('content')
    <div class="min-vh-100">
        <div class="container">
            <div class="row border-bottom border-dark border-2">
                <div class="col-12">
                    <div class="text-bg-primary rounded-3 text-center my-3">
                        <h2 class="text-uppercase">pasien saya</h2>
                    </div>
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
                                        <a href="#" class="btn bg-hard text-light">
                                            Chat  <i class="fa-solid fa-comment"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-bottom border-dark border-2">
                <div class="col-12">
                    <div class="text-bg-danger rounded-3 text-center my-3">
                        <h2 class="text-uppercase">Urgent</h2>
                    </div>
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
                                        <button type="button" class="btn bg-hard text-light" data-bs-toggle="modal" data-bs-target="#DetailModal">
                                            <i class="fa-solid fa-circle-info"></i> Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-bottom border-dark border-2">
                <div class="col-12">
                    <div class="text-bg-warning rounded-3 text-center my-3">
                        <h2 class="text-uppercase">Sedang</h2>
                    </div>
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
                                        <button type="button" class="btn bg-hard text-light" data-bs-toggle="modal" data-bs-target="#DetailModal">
                                            <i class="fa-solid fa-circle-info"></i> Detail
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
                    <div class="text-bg-success rounded-3 text-center my-3">
                        <h2 class="text-uppercase">ringan</h2>
                    </div>
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
                                        <button type="button" class="btn bg-hard text-light" data-bs-toggle="modal" data-bs-target="#DetailModal">
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
                                            <th class="text-capitalize">Tingkat masalah</th>
                                            <td><span class="badge text-bg-danger">urgent</span></td>
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
                    <button type="button" class="btn btn-success">Terima</button>
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
                    <form action="">
                        <label for="" class="form-label">Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="4" required></textarea>
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
