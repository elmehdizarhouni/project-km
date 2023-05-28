<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $employees = Employe::all();

        return view('employes.index', compact('employes'));
    }

    public function create()
    {
        return view('employes.create');
    }

    public function store(Request $request)
    {
        $employee = new employes;

        $employee->nom = $request->nom;
        $employee->prenom = $request->prenom;
        $employee->email = $request->email;
        $employee->telephone = $request->telephone;

        $employee->save();

        return redirect()->route('employees.index');
    }

    public function show(employes $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(employes $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employe $employee)
    {
        $employee->nom = $request->nom;
        $employee->prenom = $request->prenom;
        $employee->email = $request->email;
        $employee->telephone = $request->telephone;

        $employee->save();

        return redirect()->route('employes.index');
    }

    public function destroy(Employe $employee)
    {
        $employee->delete();

        return redirect()->route('employes.index');
    }
}
