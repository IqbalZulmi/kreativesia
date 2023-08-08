@extends('layout.html')

@section('content')
<div class="min-vh-100 section-warm-bg-color">
    <div class="container">
        <h2 class="text-capitalize py-3 hard-color">Hasil konsultasi</h2>
        <div class="table-responsive">
            <table class="table table-striped table-hover border table-bordered align-middle">
                <thead class="text-capitalize">
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama psikolog</th>
                        <th scope="col">jenis konsultasi</th>
                        <th scope="col">keluhan</th>
                        <th scope="col">Tingkat keluhan</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">catatan mahasiswa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>DR.Gacoan</td>
                        <td>online</td>
                        <td>stress</td>
                        <td><span class="badge text-bg-danger">urgent</span></td>
                        <td>20-10-2022</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure at error sed deleniti. Ipsa sapiente, architecto similique voluptates labore numquam deleniti dicta porro quibusdam iste accusamus nobis, dignissimos eos quam!</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('.table').DataTable({
                info: false,
                dom: '<"row"<"col-sm-6 d-flex justify-content-center justify-content-sm-start mb-2 mb-sm-0"l><"col-sm-6 d-flex justify-content-center justify-content-sm-end"f>>rtp',
            });
        });
    </script>
@endpush
