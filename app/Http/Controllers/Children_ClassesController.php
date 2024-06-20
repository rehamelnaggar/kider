<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Child_Class;
use App\Models\KiderClass;
use Illuminate\Http\Request;

class Children_ClassesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add child to class";
        $children = Child::all();
        $classes = KiderClass::all(); // Replace with the correct model name if different
        // dd($classes);
        return view('dashboard.addChildToClass', compact('title', 'children', 'classes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'child_id' => 'required|exists:children,id',
            'class_id' => 'required|exists:kider_classes,id',
        ]);
        
        Child_Class::create($data);
        //return redirect('dashboard/KiderClasses');
        return 'add';
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
