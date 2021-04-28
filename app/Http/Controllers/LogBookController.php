<?php

namespace App\Http\Controllers;

use App\Models\LogBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = LogBook::join('rooms', 'rooms.id', '=', 'log_books.room_id')
            ->select('rooms.*', 'log_books.*', 'log_books.id AS idL', 'rooms.id AS idR')
            ->get();

        return view('admin.log_show', compact('logs'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LogBook  $logBook
     * @return \Illuminate\Http\Response
     */
    public function view(LogBook $logBook, $id)
    {
        $logs = LogBook::join('rooms', 'rooms.id', '=', 'log_books.room_id')
            ->select('rooms.*', 'log_books.*', 'log_books.id AS idL', 'rooms.id AS idR')
            ->where('log_books.id', '=', $id)
            ->get();

        return view('admin.log_view', compact('logs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LogBook  $logBook
     * @return \Illuminate\Http\Response
     */
    public function edit(LogBook $logBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LogBook  $logBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogBook $logBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LogBook  $logBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogBook $logBook, $id)
    {
        $logs = LogBook::where('id',$id)->first();

        $name = $logs->guest_name;

        if ($logs != null) {
            $logs->delete();
            return redirect('/log')->with('success',"log atas nama $name telah dihapus");
        }

        return redirect('/log')->with('fail',"log atas nama $name tidak terhapus");
    }
}
