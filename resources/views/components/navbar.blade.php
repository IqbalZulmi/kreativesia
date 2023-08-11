<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand order-0" href="#">
            <img src="" alt="" height="50"> halodek
        </a>
        <button class="navbar-toggler order-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-capitalize">
                <li class="nav-item ms-0 ms-lg-4">
                    <a class="nav-link rounded-3 ps-2" href="/">beranda</a>
                </li>
                @auth
                    @if (Auth::user()->role == 'psikolog')
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/pasien">pasien</a>
                        </li>
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/laporan-konsultasi">laporan konsultasi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="status" class="nav-link rounded-3 @if (Auth::user()->psikolog->status == 'online') text-success @elseif (Auth::user()->psikolog->status == 'sibuk') text-warning @else text-danger @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end animate slideIn">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa-solid fa-circle text-success"></i> online
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa-solid fa-circle text-warning"></i> sibuk
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa-solid fa-circle text-danger"></i> offline
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @elseif (Auth::user()->role == 'perguruan tinggi')
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/hasil-laporan-psikolog">hasil laporan</a>
                        </li>
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/kelola-fakultas">fakultas</a>
                        </li>
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/kelola-mahasiswa">mahasiswa</a>
                        </li>
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/kelola-psikolog">psikolog</a>
                        </li>
                    @elseif (Auth::user()->role == 'superadmin')
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/kelola-perguruan-tinggi">perguruan tinggi</a>
                        </li>
                    @else
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/layanan">layanan</a>
                        </li>
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/riwayat-konsultasi">riwayat</a>
                        </li>
                        <li class="nav-item ms-0 ms-lg-4">
                            <a class="nav-link rounded-3 ps-2" href="/hasil-konsultasi">hasil konsultasi</a>
                        </li>
                    @endif
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
                        <a class="nav-link rounded-3 ps-2" href="/layanan">layanan</a>
                    </li>
                    <li class="nav-item ms-0 ms-lg-4">
                        <a class="nav-link rounded-3 ps-2" href="/riwayat-konsultasi">riwayat</a>
                    </li>
                    <li class="nav-item ms-0 ms-lg-4">
                        <a class="nav-link rounded-3 ps-2" href="/hasil-konsultasi">hasil konsultasi</a>
                    </li>
                    <li class="nav-item ms-0 ms-lg-4">
                        <a href="/login" class="btn">Masuk <i class="fa-solid fa-right-to-bracket"></i></a>
                    </li>
                @endauth
            </ul>
        </div>
        @auth
        <div class="dropdown ms-4 d-none d-lg-block order-lg-2">
            <img src="https://learning-if.polibatam.ac.id/theme/image.php/moove/core/1675225508/u/f2" alt="" class="rounded-circle object-fit-cover" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></span>
            <ul class="dropdown-menu dropdown-menu-end animate slideIn">
                <li class="nav-item">
                    <a class="dropdown-item">
                        <i class="fa-regular fa-user"></i> {{ Auth::user()->username }}
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
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar
                    </a>
                </li>
            </ul>
        </div>
        @endauth
    </div>
</nav>
