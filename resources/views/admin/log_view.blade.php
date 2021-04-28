@extends('layouts.admin.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
            @foreach($logs as $log)
                    <div class="card">
                        <div class="card-header">
                            Log
                        </div>
                        <div class="card-body">
                            <table class="product-page-width" style="font-size: 18px;">
                                <tbody style="vertical-align: top">
                                <tr>
                                    <td>Nama Tamu</td>
                                    <td> &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $log->guest_name }}</td>
                                </tr>
                                <tr>
                                    <td>Ruang</td>
                                    <td> &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $log->name }}</td>
                                </tr>
                                <tr>
                                    <td>Keperluam</td>
                                    <td> &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $log->necessity }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td> &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ date('d F Y', strtotime($log->date)) }}</td>
                                </tr>
                                <tr>
                                    <td>Mulail</td>
                                    <td> &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ date('H:i', strtotime($log->hours_admission)) }}</td>
                                </tr>
                                <tr>
                                    <td>Selesai</td>
                                    <td> &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ date('H:i', strtotime($log->hours_over)) }}</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer text-end">
                            <a href="/log" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
