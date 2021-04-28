@extends('layouts.guest.main')
@php($side = '')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
            @foreach($rooms as $room)
                    <div class="card">
                        <div class="card-header">
                            {{ $room->name }}
                        </div>
                        <div class="card-body">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Deskripsi Room
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">{{ $room->descriptions }}</div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            @foreach($videos as $video)
                                <div class=""><h4>{{ $video->name }}</h4></div>
                                <video style="width: 100%; height: auto;" controls preload="auto">
                                    <source src="{{ asset('video/'.$video->video) }}" type="video/mp4">
                                </video>
                                <hr>
                            @endforeach

                        </div>
                        <div class="card-footer text-end">
                            <a href="/home" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
