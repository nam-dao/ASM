<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managers = Manager::all();
        return view('manager.index',['managers' => $managers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manager = new Manager();
        $manager->name = $request->name;
        $manager->address = $request->address;
        $manager->phone = $request->phone;
        $photo = $request->file('photo')->store('public'); 
        $manager->photo = substr($photo,strlen('public/'));
        $manager->save();

        return redirect('/managers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manager= Manager::find ($id);
        return view('manager.show', [
            'manager' => $manager
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manager = Manager::find($id);
       return view('manager.edit', [
        'manager' => $manager,
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $manager = Manager::find($id);
        $manager->name = $request->name;
        $manager->address = $request->address;
        $manager->phone = $request->phone;
        $manager->save();

        return redirect('/managers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manager = Manager::find($id);
      $manager->delete();
      return redirect('/managers');
    }
}
