<?php

namespace App\Http\Controllers;

use App\Models\LogBook;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = DB::table('rooms')
            ->select('rooms.*')
            ->get();

        $Rrooms = DB::table('rooms')
            ->select('rooms.*')
            ->orderByRaw('rooms.created_at DESC')
            ->limit(4)
            ->get();

        return view('guest.index', compact('rooms', 'Rrooms'));
    }

    public function autocomplete(Request $request)
    {
        if($request->has('q')){
            $search = $request->q;
            $room = Room::select("id", "name")
                ->where('name', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($room);
    }

    public function search(Request $request)
    {
        $key = $request->key;

//        dd($key);
        $rooms = DB::table('rooms')
            ->select('rooms.*')
            ->where('rooms.name','like', '%'.$key.'%')
            ->get();

        $Rrooms = DB::table('rooms')
            ->select('rooms.*')
            ->orderByRaw('rooms.created_at DESC')
            ->limit(4)
            ->get();

        return view('guest.index', compact('rooms', 'key', 'Rrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function log($room_id)
    {
        $Rrooms = DB::table('rooms')
            ->select('rooms.*')
            ->orderByRaw('rooms.created_at DESC')
            ->limit(4)
            ->get();

        return view('guest.log_add', compact('room_id', 'Rrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function log_store(Request $request)
    {

        $request->validate([
            'room_id' => 'required',
            'guest_name' => 'required',
            'date' => 'required',
            'hours_admission' => 'required',
            'hours_over' => 'required',
            'necessity' => 'required',
        ]);

        $log = new LogBook;
        $log->room_id = $request->room_id;
        $log->guest_name = $request->guest_name;
        $log->date = $request->date;
        $log->hours_admission = $request->hours_admission;
        $log->hours_over = $request->hours_over;
        $log->necessity = $request->necessity;

//        dd($room);
        $log->save();

        return redirect('/home/room/'.$log->room_id)->with('success',"Log Telah Tesimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
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

        $Rrooms = DB::table('rooms')
            ->select('rooms.*')
            ->orderByRaw('rooms.created_at DESC')
            ->limit(4)
            ->get();

        return view('guest.room_view', compact('rooms', 'videos', 'Rrooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
