<?php

namespace App\Http\Controllers\Visits\Ajax;

use App\Http\Controllers\Controller;
use App\Visit;
use Illuminate\Http\Request;

class VisitAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $visit = new Visit();
        $visit->name = $request->name;
        $visit->description = $request->description;
        $visit->time_in = $request->time_in;
        $visit->save();

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $visit], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visit = Visit::findOrFail($id);

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $visit], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visit = Visit::findOrFail($id);

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $visit], 200);
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
        $visit = Visit::findOrFail($id);
        $visit->name = $request->name;
        $visit->npm = $request->npm;
        $visit->description = $request->description;
        $visit->time_in = $request->time_in;
        $visit->save();

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $visit], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visit::findOrFail($id)->delete();

        return response()->json(['status' => 200, 'message' => 'Success'], 200);
    }
}
