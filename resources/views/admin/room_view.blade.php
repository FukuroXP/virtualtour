@extends('layouts.admin.main')
@section('content')
    <style>
        .percent {
            position:absolute;
            display:inline-block;
            left:50%;
            font-family: Montserrat, sans-serif;
            color: #040608;
        }
    </style>

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
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                Tambah Video
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Upload Video</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form id="video" action="/video_store" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                                @csrf
                                                <input name="room_id" type="hidden" class="form-control" value="{{ $room->id }}">
                                                <label class="form-label">Judul Video</label>
                                                <input type="text" name="name" class="form-control mb-2" required>
                                                <label class="form-label">Video</label>
                                                <input name="video" type="file" class="form-control form-control-lg mb-2" required>
                                                <div class="progress">
                                                    <div class="bar progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="percent">0%</div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        @foreach($videos as $video)
                                <form method="POST" action="{{ route('room.video.destroy1', [$video->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="">
                                        <div class=""><h4>{{ $video->name }}</h4></div>
                                        <div class="btn-group-sm">
                                            <button type="button" onclick="location.href='{{ route('room.video.edit', [$video->id]) }}'" class="btn btn-outline-primary"><i class="fas fa-edit"></i></button>
                                            <button type="button" onclick="confirm()" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </div>
                                    <video style="width: 100%; height: auto;" controls preload="auto">
                                        <source src="{{ asset('video/'.$video->video) }}" type="video/mp4">
                                    </video>
                                    <hr>
                                </form>
                            @endforeach

                        </div>
                    </div>
                @endforeach
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
                            text: "Video telah diupload",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                @foreach($rooms as $room)
                                    window.location.href = SITEURL + "/" + "room/view/{{ $room->id }}";
                                @endforeach
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
