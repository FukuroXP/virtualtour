@extends('layouts.admin.main')
@section('content')
    <style>
        .percent {
            position:absolute;
            display:inline-block;
            left:60%;
            font-family: Montserrat, sans-serif;
            color: #040608;
        }
    </style>


    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Video</h5>
                        @foreach($videos as $video)
                            <form id="video" action="/video_update/{{ $video->idV }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" class="form-control" value="{{ $video->room_id }}">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Video</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" value="{{ $video->nameV }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Room</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" value="{{ $video->nameR }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Video</label>
                                    <div class="col-sm-10">
                                        <video style="width: 100%; height: auto;" controls preload="auto">
                                            <source src="{{ asset('video/'.$video->video) }}" type="video/mp4">
                                        </video>
                                        <input name="video" type="file" class="form-control form-control-lg mb-2">
                                        <div class="progress">
                                            <div class="bar progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="percent">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 col-sm-12 text-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/room/video" class="btn btn-warning">Batal</a>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script type="text/javascript">
        var SITEURL = "{{URL('/')}}";
        $(function () {
            $(document).ready(function () {
                var bar = $('.bar');
                var percent = $('.percent');
                $('#video').ajaxForm({
                    beforeSend: function () {
                        var percentVal = '0%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    complete: function (xhr) {
                        Swal.fire({
                            title: 'Berhasil',
                            text: "Video telah diubah",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                    window.location.href = SITEURL + "/" + "room/video";
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
