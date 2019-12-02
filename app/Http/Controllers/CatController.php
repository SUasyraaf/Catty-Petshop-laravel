<?php

namespace App\Http\Controllers;


use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
         $users = Cat::all();

         return view('cats.index')->with(compact('cats'));
=======
        $cats = Cat::all();

        return view('cats.index')->with(compact('cats'));
>>>>>>> d99c9104b50f67a77e85e8508249723db52c5a87
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

        return view('cats.create')->with(compact(['cats']));
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
        $cat =  new Cat();
        $cat->name    = $request->get('name');
        $cat->breed   = $request->get('breed');
        $cat->age     = $request->get('age');
        $cat->save();


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
        $cat =  Cat::all(); //select all

        $cat = $cat->find($request->cat);
        //dd($package->packagePrice);


        //calculate room price

        return redirect()->route('cat:index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        return view('cats.show')->with(compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        return view('cats.edit')->with(compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        $cat = $cat->update($request->only('name', 'ic', 'email', 'password', 'level', 'address', 'phone_num'));

        return redirect()->route('cat:index')->with(['alert-type' => 'alert-success', 'alert' => "Your blog updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cat $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat $cat)
    {
        $cat->delete();
        return redirect()->route('cat:index')->with(['alert-type' => 'alert-danger', 'alert' => "Your blog deleted"]);
    }
}
