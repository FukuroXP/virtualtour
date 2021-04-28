@extends('layouts.admin.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Room</h5>
                        @foreach($rooms as $room)
                            <form action="/room_update/{{ $room->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" class="form-control" value="{{ $room->user_id }}">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Room</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" value="{{ $room->name }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Room</label>
                                    <div class="col-sm-10">
                                        <textarea rows="8" name="descriptions" class="form-control">{{ $room->descriptions }}</textarea>
                                    </div>
                                </div>
                                <div class="mt-5 col-sm-12 text-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/room" class="btn btn-warning">Batal</a>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
