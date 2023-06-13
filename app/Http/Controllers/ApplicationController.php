<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('applications.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applications.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_names' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'image' => ['required', 'image', 'max:255', 'mimes:png,jpg,jpeg'],
            'app_type' => ['required', 'max:255'],
            'amount' => ['required', 'max:255'],
            'comments' => ['required'],
        ]);


        $image = $request->image->store('images');
        // create the post
        $apply = Application::create([
            'full_names' => $request->full_names,
            'email' => $request->email,
            'image' => $image,
            'app_type' => $request->app_type,
            'amount' => $request->amount,
            'comments' => $request->comments,
        ]);

        // flash post
        session()->flash('success', 'Application Successfully.');

        // redirect user
        return redirect(route('applications.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $apply = Application::findOrFail($id);
        $apply->status = $request->input('status');
        $apply->save();

        return redirect()->back()->with('status', 'Application responded');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
