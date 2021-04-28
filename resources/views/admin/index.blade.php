@extends('layouts.admin.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Room</h5>
                        <h2>{{ $rooms }}</h2>
                        <p>Total</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Video</h5>
                        <h2>{{ $videos }}</h2>
                        <p>Dari keseluruhan room</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Log Book</h5>
                        <h2>{{ $logs }}</h2>
                        <p>Total</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Log Terbaru</h5>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Tamu</th>
                                <th scope="col">Ruangan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Mulai</th>
                                <th scope="col">Selesai</th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach($recentLogs as $log)
                              <tr>
                                  <th>{{ $loop->iteration }}</th>
                                  <td>{{ $log->guest_name }}</td>
                                  <td>{{ $log->name }}</td>
                                  <td>{{ date('d F Y', strtotime($log->date)) }}</td>
                                  <td>{{ date('H:i', strtotime($log->hours_admission)) }}</td>
                                  <td>{{ date('H:i', strtotime($log->hours_over)) }}</td>
                              </tr>
                          @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
