<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', compact('computers'));
    }

    public function create()
    {
        return view('computers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
        ]);
        Computer::create($request->all());
        return redirect()->route('computers.index');
    }

    public function show(Computer $computer)
    {
        $computer->load('apprentice');
        return view('computers.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('computers.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        $request->validate([
            'number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
        ]);
        $computer->update($request->all());
        return redirect()->route('computers.index');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computers.index');
    }
}
