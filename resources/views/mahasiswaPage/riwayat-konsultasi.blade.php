@extends('layout.html')

@section('content')
    <div class="min-vh-100">
        <div class="container">
            <h2 class="text-capitalize my-3">Data Riwayat Konsultasi</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover border table-bordered text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">jenis konsultasi</th>
                            <th scope="col">keluhan</th>
                            <th scope="col">nama psikolog</th>
                            <th scope="col">tanggal</th>
                            <th scope="col">status</th>
                            <th scope="col">aksi</th>
                            <th scope="col">keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>online</td>
                            <td>stress</td>
                            <td>Dr.Gacoan</td>
                            <td>20-10-2022</td>
                            <td>diterima</td>
                            <td>
                                <button class="btn bg-soft text-capitalize">chat <i class="fa-solid fa-comment text-light"></i></button>
                            </td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>online</td>
                            <td>stress</td>
                            <td>Dr.Gacoan</td>
                            <td>20-10-2022</td>
                            <td>atur ulang jadwal</td>
                            <td>
                                <button class="btn bg-soft text-capitalize">edit <i class="fa-regular fa-pen-to-square text-light"></i></button>
                            </td>
                            <td>ketersediaan saya pada tanggal 21</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('.table').DataTable();
    </script>
@endpush
