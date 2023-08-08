@extends('layout.html')

@section('content')
    <div class="min-vh-100 section-warm-bg-color">
        <div class="container">
            <h2 class="text-capitalize hard-color py-3">Data Riwayat Konsultasi</h2>
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
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>online</td>
                            <td>stress</td>
                            <td>Dr.Gacoan</td>
                            <td>20-10-2022</td>
                            <td>atur ulang jadwal</td>
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
        $('.table').DataTable({
            info: false,
            dom: '<"row"<"col-sm-6 d-flex justify-content-center justify-content-sm-start mb-2 mb-sm-0"l><"col-sm-6 d-flex justify-content-center justify-content-sm-end"f>>rtp',
        });
    </script>
@endpush
