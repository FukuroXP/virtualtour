@extends('layouts.admin.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Room</h5>
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Video</th>
                                <th>Nama Room</th>
                                <th>File Video</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $video->nameV }}</td>
                                    <td>{{ $video->nameR }}</td>
                                    <td>{{ $video->video }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('room.video.destroy2', [$video->idV]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
                                                <button type="button" onclick="location.href='{{ route('room.video.view', [$video->idV]) }}'" class="btn btn-outline-success"><i class="fas fa-external-link"></i></button>
                                                <button type="button" onclick="location.href='{{ route('room.video.edit', [$video->idV]) }}'" class="btn btn-outline-primary"><i class="fas fa-edit"></i></button>
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
