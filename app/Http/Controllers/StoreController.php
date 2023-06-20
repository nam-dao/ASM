<?php

namespace App\Http\Controllers;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::all();

        return view('store.index', ['stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $store = new Store();
            $store->name = $request->name;
            $store->area_id = $request->area_id;
            $store->management_id = $request->management_id;
            $store->tenant_id = $request->tenant_id;
            $store->des = $request->des;

            $store->save();

            return redirect('/stores');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $store = Store::find($id);
        return view('store.show', [
        'store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $store = Store::find($id);
        return view('store.edit', [ 'store' => $store,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $store = Store::find($id);
        
        $store->name = $request->name;
        $store->area_id = $request->area_id;
        $store->management_id = $request->management_id;
        $store->tenant_id = $request->tenant_id;
        $store->des = $request->des;

        $store->save();

        return redirect('/stores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect('/stores');
    }
}
