<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users = User::all();

         return view('users.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //query cat
        $users = User::all();
        // dd($cats);

        return view('users.create')->with(compact(['users']));
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
        $user =  new User();
        $user->name      = $request->get('name');
        $user->ic        = $request->get('ic');
        $user->email     = $request->get('email');
        $user->password  = $request->get('password');
        $user->level     = $request->get('level');
        $user->address   = $request->get('address');
        $user->phone_num = $request->get('phone_num');
        $user->save();


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
        $user =  User::all(); //select all

        $user = $user->find($request->user);
        //dd($package->packagePrice);


        //calculate room price

        return redirect()->route('user:index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = $user->update($request->only('name', 'ic', 'email', 'password', 'level', 'address', 'phone_num'));

        return redirect()->route('user:index')->with(['alert-type' => 'alert-success', 'alert' => "Your blog updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user:index')->with(['alert-type' => 'alert-danger', 'alert' => "Your blog deleted"]);
    }
}
