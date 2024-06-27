<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KiderClass;
use App\Traits\Traits\UploadFile;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;

class KiderClassesControl extends Controller
{
    use UploadFile;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kiderClasses = KiderClass::with('teacher')->get();
        return view('dashboard.KiderClasses', compact('kiderClasses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add kider class";
        $teachers = Teacher::all();
        return view('dashboard.addKiderClass', compact('title', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'className' => 'required|string|max:100',
            'price' => 'required|numeric|max:5000.99',
            'age' => 'nullable|string|max:255',
            'time' => 'required|string|max:20',
            'capacity' => 'nullable|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'teacherName' => 'required|exists:teachers,fullName',
        ]);
        
        $fileName = $this->upload($request->image, 'assets/img');
        $data['image'] = $fileName;
        $data['active'] = $request->has('active');
        
        KiderClass::create($data);
        
        return redirect('dashboard/KiderClasses')->with('success', 'Kider class added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Show kider class";
        $kiderClass = KiderClass::findOrFail($id);
        
        return view('dashboard.showKiderClass', compact('kiderClass', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit kider class";
        $kiderClass = KiderClass::findOrFail($id);
        $teachers = Teacher::all();
        
        return view('dashboard.editKiderClass', compact('kiderClass', 'teachers', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kiderClass = KiderClass::findOrFail($id);
    
        $data = $request->validate([
            'className' => 'required|string|max:100',
            'price' => 'required|numeric|max:5000.99',
            'age' => 'nullable|string|max:255',
            'time' => 'required|string|max:20',
            'capacity' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'teacher_id' => 'required|exists:teachers,id',
        ]);
    
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($kiderClass->image) {
                Storage::delete('public/' . $kiderClass->image);
            }
            // Upload new image
            $imagePath = $request->file('image')->store('public/assets/img');
            $data['image'] = basename($imagePath);
        } else {
            // Keep the existing image if no new image is uploaded
            $data['image'] = $kiderClass->image;
        }
    
        // Update the KiderClass instance
        $kiderClass->update($data);
    
        return redirect()->route('dashboard.KiderClasses')->with('success', 'Kider class updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Implementation for deleting a resource goes here if needed
    }
}