<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand order-0" href="#">Halodek</a>
        <button class="navbar-toggler order-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-capitalize">
                <li class="nav-item ms-0 ms-lg-4">
                    <a class="nav-link rounded-3 ps-2" href="/">beranda</a>
                </li>
                <li class="nav-item ms-0 ms-lg-4">
                    <a class="nav-link rounded-3 ps-2" href="/layanan">layanan</a>
                </li>
                <li class="nav-item ms-0 ms-lg-4">
                    <a class="nav-link rounded-3 ps-2" href="/riwayat-konsultasi">riwayat</a>
                </li>
                <li class="nav-item ms-0 ms-lg-4">
                    <a class="nav-link rounded-3 ps-2" href="/hasil-konsultasi">hasil konsultasi</a>
                </li>
                @auth
                <li class="nav-item dropdown d-block d-lg-none">
                    <a class="nav-link rounded-3 ps-2 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        profil
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end animate slideIn">
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <i class="fa-regular fa-user"></i>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="dropdown-item" href="#">
                                <i class="fa-solid fa-key"></i> Ubah Kata Sandi
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="dropdown-item" href="/logout">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar
                            </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item ms-0 ms-lg-4">
                    <a href="/login" class="btn">Masuk <i class="fa-solid fa-right-to-bracket"></i></a>
                </li>
                @endauth
            </ul>
        </div>
        @auth
        <div class="dropdown ms-4 d-none d-lg-block">
            <img src="https://learning-if.polibatam.ac.id/theme/image.php/moove/core/1675225508/u/f2" alt="" class="rounded-circle object-fit-cover" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></span>
            <ul class="dropdown-menu dropdown-menu-end animate slideIn">
                <li class="nav-item">
                    <a class="dropdown-item">
                        <i class="fa-regular fa-user"></i>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="dropdown-item" href="#">
                        <i class="fa-solid fa-key"></i> Ubah Kata Sandi
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="dropdown-item" href="/logout">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar
                    </a>
                </li>
            </ul>
        </div>
        @endauth
    </div>
</nav>
