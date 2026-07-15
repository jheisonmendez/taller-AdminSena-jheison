<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

class ApprenticeController extends Controller
{
    public function index()
    {
        $apprentices = Apprentice::with(['course', 'computer'])->get();
        return view('apprentices.index', compact('apprentices'));
    }

    public function create()
    {
        $courses = Course::all();
        $computers = Computer::all();
        return view('apprentices.create', compact('courses', 'computers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
        ]);
        Apprentice::create($request->all());
        return redirect()->route('apprentices.index');
    }

    public function show(Apprentice $apprentice)
    {
        $apprentice->load(['course', 'computer']);
        return view('apprentices.show', compact('apprentice'));
    }

    public function edit(Apprentice $apprentice)
    {
        $courses = Course::all();
        $computers = Computer::all();
        return view('apprentices.edit', compact('apprentice', 'courses', 'computers'));
    }

    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
        ]);
        $apprentice->update($request->all());
        return redirect()->route('apprentices.index');
    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return redirect()->route('apprentices.index');
    }
}
