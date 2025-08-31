<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all notices and order them by date in descending order
        $notices = Notice::orderBy('notice_date', 'desc')->get();

        // Return the view with the list of notices
        return view('notices.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new notice
        return view('notices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'notice_date' => 'required|date',
            'description' => 'required',
        ]);

        // Create a new notice with the validated data
        Notice::create($validatedData);

        // Redirect back to the index page with a success message
        return redirect()->route('notices.index')->with('success', 'Notice created successfully!');
    }
}
