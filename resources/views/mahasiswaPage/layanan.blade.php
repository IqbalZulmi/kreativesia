@extends('layout.html')

@push('css')
    <link rel="stylesheet" href="{{ asset('web-assets/css/layanan.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endpush

@section('content')
    <section class="min-vh-100 section-warm-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-1 order-lg-0">
                    <div class="section-header">
                        <h1 class="text-uppercase h1">
                            <p class="hard-color">apa</p>
                            <p class="hard-color">yang sedang</p>
                            <p class="hard-color">kamu rasakan?</p>
                        </h1>
                    </div>
                    <div class="section-content d-flex">
                        <div class="card d-flex justify-content-center align-items-center p-3 text-capitalize">
                            <img src="{{ asset('web-assets/image/consult.png') }}" class="card-img-top rounded-circle border border-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">stres</p>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center p-3 text-capitalize">
                            <img src="{{ asset('web-assets/image/consult.png') }}" class="card-img-top rounded-circle border border-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">stres</p>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center p-3 text-capitalize">
                            <img src="{{ asset('web-assets/image/consult.png') }}" class="card-img-top rounded-circle border border-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">stres</p>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center p-3 text-capitalize">
                            <img src="{{ asset('web-assets/image/consult.png') }}" class="card-img-top rounded-circle border border-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">stres</p>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center p-3 text-capitalize">
                            <img src="{{ asset('web-assets/image/consult.png') }}" class="card-img-top rounded-circle border border-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">stres</p>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">
                        Stres adalah respons tubuh terhadap tekanan atau ancaman. Ini muncul saat kita merasa cemas atau tertekan oleh tuntutan, baik itu dari pekerjaan, studi, atau kehidupan pribadi.
                    </p>
                    <p>
                        Ciri-ciri awal stres termasuk sakit kepala, sulit tidur, mudah marah, dan perubahan nafsu makan. Anda mungkin juga merasa lelah secara fisik dan mental, serta mengalami kesulitan dalam berkonsentrasi.
                    </p>
                    <p>
                        Untuk mengatasi stres secara mandiri, coba gunakan teknik relaksasi seperti meditasi atau yoga, luangkan waktu untuk hobi atau kegiatan yang Anda nikmati, dan pastikan mendapatkan tidur yang cukup. Selain itu, makan makanan sehat dan olahraga secara teratur juga penting.
                    </p>
                    <a href="#psikolog" class="btn btn-lg bg-soft text-capitalize mb-3">Carikan Ahli</a>
                </div>
                <div class="col-lg-5 d-flex justify-content-center align-items-center order-0 order-lg-1">
                    <img src="{{ asset('web-assets/image/consult.png') }}" alt="" class="img-fluid object-fit-cover">
                </div>
            </div>
        </div>
    </section>
    <section id="psikolog" class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <h1 class="mx-auto text-uppercase heading">Para <span class="ms-1">Ahli</span></h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-gap-3 mb-3">
                <div class="col">
                    <div class="card mb-3 h-100">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="{{ asset('web-assets/image/consult.png') }}" class="img-fluid rounded-start object-fit-cover" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <p class="card-title blockquote fw-semibold">Dr. Gacoan</p>
                                    <p class="text-body-secondary blockquote-footer fst-italic">1211100118190556</p>
                                    <p class="card-text"><i class="fa-solid fa-graduation-cap hard-color"></i> : Universitas solo</p>
                                    <p class="card-text"><i class="fa-solid fa-envelope hard-color"></i> : pasargede@gmail.com</p>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn bg-hard text-light" data-bs-toggle="modal" data-bs-target="#buatJanjiModal"><i class="fa-solid fa-calendar-check"></i> Buat Janji</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="buatJanjiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="row">
                        <div class="mb-3">
                            <label for="" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="434220" required readonly>
                            @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">No STR</label>
                            <input type="text" name="no_str" class="form-control @error('no_str') is-invalid @enderror" value="1155" required readonly>
                            @error('no_str')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">keluhan umum</label>
                            <select name="keluhan" class="form-select @error('keluhan') is-invalid @enderror" required>
                                <option value="">Pilih Keluhan</option>
                                <option value="Depresi">Depresi</option>
                                <option value="Stress">Stress</option>
                                <option value="Toxic Relation">Toxic Relation</option>
                                <option value="Gangguan Makan">Gangguan Makan</option>
                                <option value="Gangguan Tidur">Gangguan Tidur</option>
                                <option value="PTSD">PTSD</option>
                                <option value="ADHD">ADHD</option>
                                <option value="Kecemasan">Kecemasan</option>
                            </select>
                            @error('keluhan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Detail Masalah</label>
                            <textarea name="detail" class="form-control @error('detail') is-invalid @enderror" rows="4" placeholder="Ceritakan detail masalah anda" required></textarea>
                            @error('detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" required>
                            @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="" class="form-label">Jam</label>
                            <input type="time" name="jam" class="form-control @error('jam') is-invalid @enderror" required>
                            @error('jam')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Konsultasi</label>
                            <select name="jenis_konsultasi" class="form-select @error('jenis_konsultasi') is-invalid @enderror" required>
                                <option value="">Pilih Jenis Konsultasi</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                            @error('jenis_konsultasi')
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
@endsection

@push('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.section-content').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-circle-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-circle-chevron-right"></i></button>',
            mobileFirst: true,

        });
    </script>
@endpush
