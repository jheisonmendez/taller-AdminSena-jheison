<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
    public function index()
    {
        $trainingCenters = TrainingCenter::all();
        return view('training-centers.index', compact('trainingCenters'));
    }

    public function create()
    {
        return view('training-centers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
        TrainingCenter::create($request->all());
        return redirect()->route('training-centers.index');
    }

    public function show(TrainingCenter $trainingCenter)
    {
        $trainingCenter->load(['teachers', 'courses']);
        return view('training-centers.show', compact('trainingCenter'));
    }

    public function edit(TrainingCenter $trainingCenter)
    {
        return view('training-centers.edit', compact('trainingCenter'));
    }

    public function update(Request $request, TrainingCenter $trainingCenter)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
        $trainingCenter->update($request->all());
        return redirect()->route('training-centers.index');
    }

    public function destroy(TrainingCenter $trainingCenter)
    {
        $trainingCenter->delete();
        return redirect()->route('training-centers.index');
    }
}
