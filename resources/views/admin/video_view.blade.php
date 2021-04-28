@extends('layouts.admin.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
            @foreach($videos as $video)
                    <div class="card">
                        <div class="card-header">
                            {{ $video->name }}
                        </div>
                        <div class="card-body">
                            <video style="width: 100%; height: auto;" controls preload="auto">
                                <source src="{{ asset('video/'.$video->video) }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="card-footer text-end">
                            <a href="/room/video" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
