<?php

namespace App\Http\Controllers;

use App\Traits\Traits\UploadFile;
use Illuminate\Http\Request;
use App\Models\Teacher;

class Dashboard extends Controller
{
    use UploadFile; 
    private $columns = ['fullName', 'phone', 'facebook', 'twitter', 'instagram', 'image'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index'); 
    }

    /**
     * Display a listing of teachers.
     */
    public function indexTeachers()
    {
        $teachers = Teacher::get(); 
        return view('dashboard.teachers', compact('teachers')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add teacher";

        return view('dashboard.addTeacher', compact('title')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fullName' => 'required|string|max:100',
            'phone' => 'required|string|max:50',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = $this->upload($request->image, 'assets/img');
        $data['image'] = $fileName;

        Teacher::create($data); 
        return redirect('dashboard/teachers')->with('success', 'Teacher added successfully');   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Show Teacher";
        $teacher = Teacher::findOrFail($id); 

        return view('dashboard.showTeacher', compact('teacher', 'title'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit teacher";
        $teacher = Teacher::findOrFail($id); 

        return view('dashboard.editTeacher', compact('teacher', 'title')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $data = $request->validate([
            'fullName' => 'required|string|max:100',
            'phone' => 'required|string|max:50',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        
        if ($request->hasFile('image')) {
            
            if ($teacher->image && file_exists('assets/img/' . $teacher->image)) {
                unlink('assets/img/' . $teacher->image);
            }
        
            $fileName = $this->upload($request->image, 'assets/img');
            $data['image'] = $fileName;
        } else {
            
            $data['image'] = $teacher->image;
        }

        $teacher->update($data); 

        return redirect()->route('dashboard.teachers')->with('success', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Teacher::findOrFail($id)->delete(); 
        return redirect('dashboard/teachers')->with('success', 'Teacher deleted successfully'); 
    }

    /**
     * Display a listing of soft deleted teachers.
     */
    public function trash()
    {
        $trashed = Teacher::onlyTrashed()->get();
        return view('dashboard.trashTeacher', compact('trashed'));
    }

    /**
     * Restore the specified soft deleted resource.
     */
    public function restore(string $id)
    {
        Teacher::withTrashed()->findOrFail($id)->restore(); 

        return redirect('dashboard/teachers')->with('success', 'Teacher restored successfully'); 
    }

    /**
     * Remove the specified resource permanently from storage.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Teacher::where('id', $id)->forceDelete(); 

        return redirect('dashboard/trashTeacher')->with('success', 'Teacher permanently deleted');
    }
}