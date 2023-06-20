<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::all();

        return view('area.index',
    ['areas' => $areas,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $area = new Area();
        $recordCount = Area::Count();
        if($recordCount > 5){
            return view('welcome');
        }
        else{
            $area->name = $request->name;
            $area->des = $request->des;
            $area->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $area= Area::find ($id);
        return view('area.show', [
            'area' => $area
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $area = Area::find($id);
       return view('area/edit', [
        'area' => $area,
       ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $area = Area::find($id);
        $area->name = $request->name;
        $area->des = $request->des;
        $area->save();
        return redirect('/areas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $area = Area::find($id);
      $area->delete();
      return redirect('/areas');
    }
}
