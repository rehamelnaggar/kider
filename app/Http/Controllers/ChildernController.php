<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;


class ChildernController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $childern= Child::get ();
        return view ('dashboard.childern', compact('childern'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title ="Add child";
        return view('dashboard.addChild', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        
            'childName' => 'required|string|max:100',
            'birthDate' => 'required|date|date_format:Y-m-d|before_or_equal:today',
         ]);

         Child::create($data);
        return redirect('dashboard/childern');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Show Child";
        $child = Child::findOrFail($id);
    
    return view('dashboard.showChild', compact('child', 'title'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Child:: where('id', $id)->delete();
        return redirect('dashboard/childern');
    }
}
