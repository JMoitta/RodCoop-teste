<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cooperator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CooperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperators = Cooperator::all();
        return \view("admin.cooperators.index", \compact('cooperators') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cooperator = new Cooperator();
        return \view('admin.cooperators.create', \compact('cooperator'));
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
        Cooperator::create($data);
        return redirect()->route('cooperators.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Cooperator  $cooperator
     * @return \Illuminate\Http\Response
     */
    public function show(Cooperator $cooperator)
    {
        return \view('admin.cooperators.show', \compact('cooperator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cooperator  $cooperator
     * @return \Illuminate\Http\Response
     */
    public function edit(Cooperator $cooperator)
    {
        return \view('admin.cooperators.edit', \compact('cooperator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cooperator  $cooperator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperator $cooperator)
    {
        $data = $this->_validate($request);
        $cooperator->fill($data);
        $cooperator->save();
        return redirect()->route('cooperators.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cooperator  $cooperator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cooperator $cooperator)
    {
        $cooperator->delete();
        return redirect()->route('cooperators.index');
    }

    protected function _validate(Request $request)
    {
        $cooperators = $request->route('cooperators');
        $cooperatorsId = $cooperators instanceof Cooperator ? "," . $cooperators->id : null;
        $rules = [
            'name' => "required|unique:cooperators,name$cooperators|max:255",
        ];
        return $this->validate($request, $rules);
    }
}
