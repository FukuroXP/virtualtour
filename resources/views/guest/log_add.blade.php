@extends('layouts.guest.main')
@php($side = '')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Isi Data</h5>
                        <form action="/log_store" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="room_id" class="form-control" value="{{ $room_id }}">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="guest_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Masuk</label>
                                <div class="col-sm-10">
                                    <input type="time" name="hours_admission" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Keluar</label>
                                <div class="col-sm-10">
                                    <input type="time" name="hours_over" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Keperluan</label>
                                <div class="col-sm-10">
                                    <textarea rows="4" name="necessity" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="mt-5 col-sm-12 text-end">
                                <a href="{{ URL::previous() }}" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <input type="reset" class="btn btn-secondary" value="Bersihkan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
