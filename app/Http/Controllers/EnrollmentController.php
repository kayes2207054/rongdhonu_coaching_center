<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with('course')->latest()->get();
        return view('admin.enrollments.index', compact('enrollments'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'status' => 'required|in:Pending,Approved,Rejected',
        ]);

        $enrollment->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Enrollment status updated successfully.');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->back()->with('success', 'Enrollment deleted successfully.');
    }

    public function storePublic(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
        ]);

        Enrollment::create($request->all());

        return redirect()->back()->with('success', 'Your enrollment application has been submitted successfully! We will contact you soon.');
    }
}
