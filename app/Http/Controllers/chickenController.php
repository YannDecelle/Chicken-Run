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
            "chicken" => chickenModel::all()
        ]);
    }

    public function edit($id)
    {
        $chicken = chickenModel::findOrFail($id);

        return Inertia::render('EditChicken', [
            'chicken' => $chicken]);
    }

    public function create()
    {
        $chicken = chickenModel::all();
        return Inertia::render('CreateChicken', ['chicken' => $chicken]);
    }

    public function update($id, Request $request)
    {
        $chicken = chickenModel::findOrFail($id);

        $this->validate($request, [
            'name',
            'birthday', 
            'weight', 
            'steps', 
            'isRunning'
        ]);

        $chicken->update($request->only('name','birthday', 'weight'));

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

    public function destroy($id, Request $request)
    {
        $chicken = chickenModel::findOrFail($id);

        $chicken ->destroy();

        return redirect()->route('chicken.index');

    }

    public function toggle($id, Request $request)
    {
        $chicken = chickenModel::findOrFail($id);

        $chicken ->destroy();

        return redirect()->route('chicken.index');

    }
}
