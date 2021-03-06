<?php

namespace App\Http\Controllers\main;
use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = Vehicle::get();
        return view('main/dashboard',compact('vehicle'));
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
        $this->validate($request, [
          'name' => 'required',
          'price' => 'required',
          'stock' => 'required',
      ]);
        $vehicle = Vehicle::create([
            'name'  => $request->name,
            'price' => $request->price,
            'stock' => $request->stock
        ])->id;
        $data = Vehicle::where('id','=' ,$vehicle)->first();
        return redirect()->back();
        // return response ()->json($data);
        
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
    public function update(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'price' => 'required',
          'stock' => 'required',
      ]);
        $vehicle = Vehicle::find($request->id);
        $vehicle->name = $request->name;
        $vehicle->price = $request->price;
        $vehicle->stock = $request->stock;
        $vehicle->save();

        $data = Vehicle::where('id','=' ,$request->id)->first();
        return redirect()->back();
        // return response ()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Vehicle::find($id)->delete();
         return redirect()->back();
        // return response()->json();
    }
}
