<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $videos = DB::table('videos')
            ->join('rooms', 'rooms.id', '=', 'videos.room_id')
            ->select('rooms.*', 'videos.*', 'rooms.name AS nameR', 'rooms.id AS idR', 'videos.name AS nameV', 'videos.id AS idV')
            ->get();

        return view('admin.video_show', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = time() . '.' . request()->video->getClientOriginalName();
        $request->video->move(public_path('video'), $video);


        $room = new Video;
        $room->room_id = $request->room_id;
        $room->name = $request->name;
        $room->video = $video;

//        dd($room);
        $room->save();

        return redirect('/room/view/'.$request->room_id)->with('success',"$room->name Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function view(Video $video, $id)
    {
        $videos = DB::table('videos')
            ->select('videos.*')
            ->where('videos.id', '=', $id)
            ->get();

        return view('admin.video_view', compact( 'videos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video, $id)
    {
        $videos = DB::table('videos')
            ->join('rooms', 'rooms.id', '=', 'videos.room_id')
            ->select('rooms.*', 'videos.*', 'rooms.name AS nameR', 'rooms.id AS idR', 'videos.name AS nameV', 'videos.id AS idV')
            ->where('videos.id', '=', $id)
            ->get();

        return view('admin.video_edit', compact('videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video, $id)
    {
        $videos = Video::where('id',$id)->first();

        if ($request->video != null){
            File::delete(public_path('video/'.$videos->video));
            $video = time() . '.' . request()->video->getClientOriginalName();
            $request->video->move(public_path('video'), $video);
            $videos->video = $video;
        }

        $videos->name = $request->name;

//        dd($room);
        $videos->save();

        return redirect('/room/video')->with('success',"$video->name Berhasil Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy1(Video $video, $id)
    {
        $videos = Video::where('id',$id)->first();

        $name = $videos->name;
        $room_id = $videos->room_id;

        if ($videos != null) {
            File::delete(public_path('video/'.$videos->video));
            $videos->delete();
            return redirect('/room/view/'.$room_id)->with('success',"$name telah dihapus");
        }

        return redirect('/room/view/'.$room_id)->with('fail',"$name tidak terhapus");
    }

    public function destroy2(Video $video, $id)
    {
        $videos = Video::where('id',$id)->first();

        $name = $videos->name;

        if ($videos != null) {
            File::delete(public_path('video/'.$videos->video));
            $videos->delete();
            return redirect('/room/video')->with('success',"$name telah dihapus");
        }

        return redirect('/room/video')->with('fail',"$name tidak terhapus");
    }
}
