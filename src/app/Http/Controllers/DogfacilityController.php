<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DogfacilityRequest;
use App\Dogfacility;
use App\Category;
use Illuminate\Support\Facades\Auth;

class DogfacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Dogfacilities = Dogfacility::all();

        return view('dogfacilities.index', ['dogfacilities' => $dogfacility]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dogfacilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DogfacilityRequest $request)
    {
        $dogfacility = new Dogfacility;

        $dogfacility->title = $request->title;
        $dogfacility->category_id = $request->category_id;
        $dogfacility->openinghours = $request->openinghours;
        $dogfacility->summary = $request->summary;
        $dogfacility->url = $request->url;
        $dogfacility->user_id = Auth::id();

        $dogfacility->save();

        return redirect()->route('dogfacilities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
