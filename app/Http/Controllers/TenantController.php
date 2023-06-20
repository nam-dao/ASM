<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::all();

        return view('tenant.index',
    ['tenants' => $tenants,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tenant = new Tenant();
        $recordCount = Tenant::Count();
        if($recordCount > 5){
            return view('welcome');
        }
        else{
            $tenant->name = $request->name;
            $tenant->des = $request->des;
            $tenant->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tenant= Tenant::find ($id);
        return view('tenant.show', [
            'tenant' => $tenant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tenant = Tenant::find($id);
        return view('tenant/edit', [
         'tenant' => $tenant,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tenant = Tenant::find($id);
        $tenant->name = $request->name;
        $tenant->address = $request->address;
        $tenant->phone = $request->phone;
        $tenant->save();
        return redirect('/tenant');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tenant = Tenant::find($id);
        $tenant->delete();
        return redirect('/tenant');
    }
}