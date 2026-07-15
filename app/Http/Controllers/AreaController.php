<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Area::create($request->all());
        return redirect()->route('areas.index');
    }

    public function show(Area $area)
    {
        $area->load(['teachers', 'courses']);
        return view('areas.show', compact('area'));
    }

    public function edit(Area $area)
    {
        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $area->update($request->all());
        return redirect()->route('areas.index');
    }

    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('areas.index');
    }
}
