@extends('layouts.guest.main')
@php($side = 'sidebar-hidden')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            @foreach($rooms as $room)
                <div class="col-md-6 col-xl-3">
                   <a href="/home/log/{{ $room->id }}">
                       <div class="card stat-widget">
                           <div class="card-body">
                               <h5 class="card-title">{{ $room->name }}</h5>
                               <hr>
                               <p class="text-dark">{{ Str::limit($room->descriptions, 50) }}</p>
                           </div>
                       </div>
                   </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
