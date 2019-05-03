<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Booking;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Booking";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Booking create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required',
            'package'  => 'required',
            'date'     => 'required',
            'time'     => 'required',
            'address'  => 'required',
            'username' => '',
            'userid'   => ''

        ]);

        $booking = new Booking;

        $booking->model_name = $request->modelname;
        $booking->user_id = $request->modelid;
        $booking->client_name = $request->name;
        $booking->client_email = $request->email;
        $booking->client_phone = $request->phone;
        $booking->package = $request->package;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->address = $request->address;
        $booking->save();

        return back()->with('success',"Booked Successfully, will reach you out soon!");



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return "Booking Show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return "Booking Edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
