<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdministrativeRegion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministrativeRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrativeRegions = AdministrativeRegion::all();
        return \view("admin.administrativeRegion.index", \compact('administrativeRegions') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administrativeRegion = new AdministrativeRegion();
        return view('admin.administrativeRegion.create', compact('administrativeRegion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->_validate($request);
        AdministrativeRegion::create($data);
        
        return redirect()->route('administrative-regions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  AdministrativeRegion  $administrativeRegion
     * @return \Illuminate\Http\Response
     */
    public function show(AdministrativeRegion $administrativeRegion)
    {
        return view('admin.administrativeRegion.show', compact('administrativeRegion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  AdministrativeRegion  $administrativeRegion
     * @return \Illuminate\Http\Response
     */
    public function edit(AdministrativeRegion $administrativeRegion)
    {
        return view('admin.administrativeRegion.edit', compact('administrativeRegion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  AdministrativeRegion  $administrativeRegion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdministrativeRegion $administrativeRegion)
    {
        $data = $this->_validate($request);
        $administrativeRegion->fill($data);
        $administrativeRegion->save();

        return redirect()->route('administrative-regions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  AdministrativeRegion  $administrativeRegion
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdministrativeRegion $administrativeRegion)
    {
        $administrativeRegion->delete();
        return redirect()->route('administrative-regions.index');
    }

    protected function _validate(Request $request)
    {
        $administrativeRegion = $request->route('administrativeRegion');
        $administrativeRegionId = $administrativeRegion instanceof AdministrativeRegion ? "," . $administrativeRegion->id : null;
        $rules = [
            'description' => "required|unique:administrative_regions,description$administrativeRegionId|max:255",
        ];
        return $this->validate($request, $rules);
    }
}
