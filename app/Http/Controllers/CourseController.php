<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\TrainingCenter;
use App\Models\Teacher;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with(['area', 'trainingCenter', 'teachers'])->get();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $areas = Area::all();
        $trainingCenters = TrainingCenter::all();
        $teachers = Teacher::all();
        return view('courses.create', compact('areas', 'trainingCenters', 'teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course = Course::create($request->except('teachers'));

        if ($request->has('teachers')) {
            $course->teachers()->attach($request->teachers);
        }

        return redirect()->route('courses.index');
    }

    public function show(Course $course)
    {
        $course->load(['area', 'trainingCenter', 'teachers', 'apprentices']);
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $areas = Area::all();
        $trainingCenters = TrainingCenter::all();
        $teachers = Teacher::all();
        $course->load('teachers');
        return view('courses.edit', compact('course', 'areas', 'trainingCenters', 'teachers'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course->update($request->except('teachers'));
        $course->teachers()->sync($request->teachers ?? []);

        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
