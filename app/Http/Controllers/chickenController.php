<?php

namespace App\Http\Controllers;

use App\Models\chickenModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class chickenController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard', [
            "chickens" => chickenModel::all()
        ]);
    }

    public function edit($id)
    {
        $chickens = chickenModel::findOrFail($id);

        return Inertia::render('EditChicken', [
            'chickens' => $chickens]);
    }

    public function create()
    {
        $chickens = chickenModel::all();
        return Inertia::render('CreateChicken', ['chickens' => $chickens]);
    }

    public function update($id, Request $request)
    {
        $chickens = chickenModel::findOrFail($id);

        $this->validate($request, [
            'name',
            'birthday', 
            'weight', 
            'steps', 
            'isRunning'
        ]);

        $chickens->update($request->only('name','birthday', 'weight', 'steps', 'isRunning'));

        return redirect()->route('chicken.index');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name',
            'birthday', 
            'weight', 
            'steps', 
            'isRunning'
        ]);

        chickenModel::create($request->only('name','birthday', 'weight', 'steps', 'isRunning'));

        return redirect()->route('chicken.index');
    }

    public function destroy($id)
    {
        $chickens = chickenModel::findOrFail($id);

        $chickens ->delete();

        return redirect()->route('chicken.index');
    }
}
