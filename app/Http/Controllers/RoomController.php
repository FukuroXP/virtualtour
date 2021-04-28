<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
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
        $rooms = DB::table('rooms')
            ->select('rooms.*')
            ->get();

        return view('admin.room_show', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'descriptions' => 'required',
            'user_id' => 'required'
        ]);

        $room = new Room;
        $room->name = $request->name;
        $room->user_id = $request->user_id;
        $room->descriptions = $request->descriptions;

//        dd($room);
        $room->save();

        return redirect('/room')->with('success',"$room->name Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function view(Room $room, $id)
    {
        $rooms = DB::table('rooms')
            ->select('rooms.*')
            ->where('rooms.id', '=', $id)
            ->get();

        $videos = DB::table('videos')
            ->join('rooms', 'rooms.id', '=', 'videos.room_id')
            ->select('rooms.*', 'videos.*')
            ->where('rooms.id', '=', $id)
            ->get();

        return view('admin.room_view', compact('rooms', 'videos'));
    }

    public function edit(Room $room, $id)
    {
        $rooms = DB::table('rooms')
            ->select('rooms.*')
            ->where('rooms.id', '=', $id)
            ->get();

        return view('admin.room_edit', compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room, $id)
    {
        $request->validate([
            'name' => 'required',
            'descriptions' => 'required',
        ]);

        $room = Room::where('id',$id)->first();
        $room->name = $request->name;
        $room->user_id = $request->user_id;
        $room->descriptions = $request->descriptions;

//        dd($room);
        $room->save();

        return redirect('/room')->with('success',"$room->name Telah Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room, $id)
    {
        $rooms = Room::where('id',$id)->first();

        $name = $rooms->name;

        if ($rooms != null) {
            $rooms->delete();
            return redirect('/room')->with('success',"$name telah dihapus");
        }

        return redirect('/room')->with('fail',"$name tidak terhapus");
    }
}
