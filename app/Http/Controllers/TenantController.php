<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use \App\Models\Area;
use App\Models\Store;
use App\Models\Manager;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::all();

        return view(
            'tenant.index',
            [
                'tenants' => $tenants,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::all();
        $stores = Store::all();
        $managers = Manager::all();
        return view('tenant.create',
        [
            'areas' => $areas,
            'stores'=> $stores,
            'managers' => $managers,
        ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tenant = new Tenant();
        $tenant->name = $request->name;
        $tenant->address = $request->address;
        $tenant->phone = $request->phone;
        $tenant->area_id = $request->area;
        $tenant->store_id = $request->store;
        $tenant->manager_id = $request->manager;
        $tenant->save();
        return redirect('/tenants');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tenant = Tenant::find($id);
        $area = Area::find($id);
        $store = Store::find($id);
        $manager = Manager::find($id);
        return view('tenant.show', [
            'tenant' => $tenant,
            'area' => $area,
            'store' => $store,
            'manager' => $manager,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tenant = Tenant::find($id);
        $areas = Area::all();
        $stores = Store::all();
        $managers = Manager::all();
        return view('tenant.edit', [
            'tenant' => $tenant,
            'areas' => $areas,
            'stores'=> $stores,
            'managers' => $managers,
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
        $tenant->area_id = $request->area;
        $tenant->store_id = $request->store;
        $tenant->manager_id = $request->manager;
        $tenant->save();
        return redirect('/tenants');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tenant = Tenant::find($id);
        $tenant->delete();
        return redirect('/tenants');
    }
}