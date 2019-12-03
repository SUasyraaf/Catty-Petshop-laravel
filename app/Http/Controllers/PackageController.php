<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();

        return view('packages.index')->with(compact('packages'));
    }

    public function indexcust()
    {
        $packages = Package::all();

        return view('packages.indexcust')->with(compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.create');
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
        $package =  new Package();
        $package->packageType = $request->get('packageType');
        $package->packagePrice = $request->get('packagePrice');
        $package->save();

        return redirect()->route('package:index');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('packages.show')->with(compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('packages.edit')->with(compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $package = $package->update($request->only('packageType', 'packagePrice'));

        return redirect()->route('package:index')->with(['alert-type' => 'alert-success', 'alert' => "Your blog updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('package:index')->with(['alert-type' => 'alert-danger', 'alert' => "Your blog deleted"]);
    }
}
