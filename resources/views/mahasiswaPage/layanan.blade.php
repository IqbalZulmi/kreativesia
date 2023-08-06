@extends('layout.html')

@push('css')
    <link rel="stylesheet" href="{{ asset('web-assets/css/layanan.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endpush

@section('content')
    <section class="min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-1 order-lg-0">
                    <div class="section-header">
                        <h1 class="text-uppercase h1">
                            <p>apa</p>
                            <p>yang sedang</p>
                            <p>kamu rasakan?</p>
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
                    <p class="mt-3">Stres tidak selalu buruk, namun stres jangka panjang bisa ganggu kesehatanmu.</p>
                    <p>
                        Berbagai situasi atau peristiwa kehidupan dapat menimbulkan stres. Ketika kita
                        mendapati pengalaman baru, atau ketika suatu keadaan berada di luar kendali kita,
                        kita dapat merasa lebih stres daripada biasanya.
                    </p>
                    <p>
                        Stres tidak dapat dihilangkan, tapi kita mengatasi stres dengan cara yang berbeda-
                        beda. Jika kamu kesulitan mengatasi stres, dapatkan bantuan profesional untuk
                        mencari cara mengelola stres dengan lebih baik.
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
                                        <a href="" class="btn bg-hard text-light">Chat <i class="fa-solid fa-comment"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <a href="" class="btn bg-hard text-light">Chat <i class="fa-solid fa-comment"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <a href="" class="btn bg-hard text-light">Chat <i class="fa-solid fa-comment"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
