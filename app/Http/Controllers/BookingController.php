<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Cat;
use App\Package;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bookings = Booking::all();

         return view('bookings.index')->with(compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //query cat
        $cats = Cat::all();
        // dd($cats);

        //query packages
        $packages = Package::all();
        // dd($packages);

        //query room
        $rooms = Room::all();
        // dd($rooms);

        return view('bookings.create')->with(compact(['cats','packages', 'rooms']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Method 1
        $booking =  new Booking();
        $booking->day_in = $request->get('day_in');
        $booking->day_out = $request->get('day_out');
        $booking->payment = $request->get('payment');
        $booking->save();


        //Calculate price
        //calculate day
        // $fdate=$request->checkin;
        // $tdate=$request->checkout;

        // $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $fdate);
        // dd($to);
        // $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $tdate);
        // $diff_in_days = $to->diffInDays($from);
        // dd($diff_in_days);

        //calculate package price
        // dd($request->package);
        $package =  Package::all(); //select all

        $package = $package->find($request->package);
        //dd($package->packagePrice);


        //calculate room price

        return redirect()->route('booking:index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show')->with(compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit')->with(compact('booking'));
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
        $booking = $booking->update($request->only('day_in', 'day_out', 'payment'));

        return redirect()->route('booking:index')->with(['alert-type' => 'alert-success', 'alert' => "Your blog updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking:index')->with(['alert-type' => 'alert-danger', 'alert' => "Your blog deleted"]);
    }
}
