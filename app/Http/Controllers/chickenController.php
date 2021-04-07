<?php

namespace App\Http\Controllers;

use App\Models\chickenModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class chickenController extends Controller
{
// Fonction de génération de la page d'acceuil chicken grâce à la route correspondante dans routes>web.php
    public function index()
    {
        return Inertia::render('Dashboard', [
            "chickens" => chickenModel::all()
        ]);
    }
// Fonction de génération de la page pour voir un poulet unique.
    public function view($id)
    {
        $chickens = chickenModel::findOrFail($id);

        return Inertia::render('ChickenView', [
            'chickens' => $chickens]);
    }
// Fonction de génération de la page chicken/{id}/edit grâce à la route correspondante dans routes>web.php
    public function edit($id)
    {
        $chickens = chickenModel::findOrFail($id);

        return Inertia::render('EditChicken', [
            'chickens' => $chickens]);
    }
// Fonction de génération de la page chicken/add grâce à la route correspondante dans routes>web.php
    public function create()
    {
        return Inertia::render('CreateChicken');
    }
// Fonction d'update de la base de donnée
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
// Fonction d'ajout à la base de donnée
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
// Fonction de supression de la base de donnée
    public function destroy($id, Request $request)
    {
        $chickens = chickenModel::findOrFail($id);

        $chickens ->delete();

        return redirect()->route('chicken.index');
    }
}
