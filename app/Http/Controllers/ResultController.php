<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::latest()->get();
        return view('admin.results.index', compact('results'));
    }

    public function create()
    {
        return view('admin.results.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'exam_name' => 'required|string|max:255',
            'student_id' => 'nullable|string|max:255',
            'marks' => 'nullable|numeric',
            'file_path' => 'nullable|file|mimes:pdf,jpg,png|max:5120',
        ]);

        $data = $request->except('file_path');
        
        if ($request->hasFile('file_path')) {
            $data['file_path'] = $request->file('file_path')->store('results', 'public');
        }

        Result::create($data);
        return redirect()->route('results.index')->with('success', 'Result added successfully.');
    }

    public function show(Result $result)
    {
        return view('admin.results.show', compact('result'));
    }

    public function edit(Result $result)
    {
        return view('admin.results.edit', compact('result'));
    }

    public function update(Request $request, Result $result)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'exam_name' => 'required|string|max:255',
            'student_id' => 'nullable|string|max:255',
            'marks' => 'nullable|numeric',
            'file_path' => 'nullable|file|mimes:pdf,jpg,png|max:5120',
        ]);

        $data = $request->except('file_path');

        if ($request->hasFile('file_path')) {
            if ($result->file_path) {
                Storage::disk('public')->delete($result->file_path);
            }
            $data['file_path'] = $request->file('file_path')->store('results', 'public');
        }

        $result->update($data);
        return redirect()->route('results.index')->with('success', 'Result updated successfully.');
    }

    public function destroy(Result $result)
    {
        if ($result->file_path) {
            Storage::disk('public')->delete($result->file_path);
        }
        $result->delete();
        return redirect()->route('results.index')->with('success', 'Result deleted successfully.');
    }
}
