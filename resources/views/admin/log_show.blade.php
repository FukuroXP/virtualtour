@extends('layouts.admin.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Log Book</h5>
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Tamu</th>
                                <th>Ruangan</th>
                                <th>Keperluan</th>
                                <th>Tanggal</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logs as $log)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $log->guest_name }}</td>
                                    <td>{{ $log->name }}</td>
                                    <td>{{ Str::limit($log->necessity, 20) }}</td>
                                    <td>{{ date('d F Y', strtotime($log->date)) }}</td>
                                    <td>{{ date('H:i', strtotime($log->hours_admission)) }}</td>
                                    <td>{{ date('H:i', strtotime($log->hours_over)) }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('log.destroy', [$log->id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
                                                <button type="button" onclick="location.href='{{ route('log.view', [$log->idL]) }}'" class="btn btn-outline-success"><i class="fas fa-external-link"></i></button>
                                                <button type="button" onclick="confirm()" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </form>
                                    </td>
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
