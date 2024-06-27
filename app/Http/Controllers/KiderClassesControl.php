<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KiderClass;
use App\Traits\Traits\UploadFile;
use App\Models\Teacher;

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
        $title ="Add kider class";
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
        $data['active'] = isset($request->active);
    
        KiderClass::create($data);
        return redirect('dashboard/KiderClasses');
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
        $title ="edit  kider class";
        $kiderClass = KiderClass::findOrFail($id);
    return view('dashboard.editKiderClass', compact('kiderClass', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kiderClass = KiderClass::findOrFail($id);
        $data = $request->validate([
            'className' => 'required|string|max:100',
            'price' => 'required|numeric|max:5000.99',
            'age' => 'nullable|string|max:255',
            'time' => 'nullable|string|max:20',
            'capacity' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'teacher_id' => 'required|exists:teachers,id',
         ]);
       

// Handle image upload
if (isset($request->image) && $request->hasFile('image')) {
    // Delete the old image if it exists
    if (isset($kiderClass->image) && $kiderClass->image) {
        $oldImagePath =('assets/img/' . $kiderClass->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }
    // Store the new image
$fileName= $this->upload($request->image, 'assets/img');
        $data['image'] = $fileName;
} else {
    // Keep the old image if no new image is uploaded
    $data['image'] = $kiderClass->image;
}

       //kider class:: where('id', $id)->update($data);
       $kiderClass->update($data);
       return redirect()->route('dashboard.KiderClasses')->with('success', 'kider class updated successfully');
      // return redirect('dashboard/kider class');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}