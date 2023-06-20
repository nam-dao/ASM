<?php

namespace App\Http\Controllers;
use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $management = Management::all();
        return view('management.index', ['management' => $management]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $managementt = new Management();

        $managementt->name = $request->name;
        $managementt->address = $request->address;
        $managementt->phone = $request->phone;

        $managementt->save();

        return redirect('/managements');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $management = Management::find($id);
        return view('management.show', ['management' => $management]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $managementt = Management::find($id);
        return view('management.edit', ['managementt' => $managementt,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $managementt = Management::find($id);

        $managementt->name = $request->name;
        $managementt->address = $request->address;
        $managementt->phone = $request->phone;

        $managementt->save();

        return redirect('/managements');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $managementt = Management::find($id);
        $managementt->delete();
        return redirect('/managements');
    }
}
