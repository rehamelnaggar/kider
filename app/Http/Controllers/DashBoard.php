<?php

namespace App\Http\Controllers;
use App\Traits\Traits\UploadFile;
use Illuminate\Http\Request;
use App\Models\Teacher;

class DashBoard extends Controller
{
    use UploadFile;
    private $columns = ['fullName', 'phone', 'facebook', 'twitter', 'instagram','image'];
    //public function dashHome(){
        //$title = "Dashboard - NiceAdmin Bootstrap Template";
        //return view('dashHome', compact('title'));
       //}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index'); 
    }

    public function indexTeacher()
    {
        $teachers= Teacher::get ();
        return view ('dashboard.teachers', compact('teachers'));
    
    }

    //public function addTeacher()
    //{
       // return view('dashboard.addTeacher'); 
    //}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title ="Add teacher";
        return view('dashboard.addTeacher', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //$messages = $this->erMsg();

         $data = $request->validate([
        
            'fullName' => 'required|string|max:100',
            'phone' => 'required|string|max:50',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);

        $fileName= $this->upload($request->image, 'assets/img');
         $data['image'] = $fileName;

   

       Teacher::create($data);
        return redirect('dashboard/teachers');

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
        $title ="edit teacher";
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
       

// Handle image upload
if (isset($request->image) && $request->hasFile('image')) {
    // Delete the old image if it exists
    if (isset($teacher->image) && $teacher->image) {
        $oldImagePath =('assets/img/' . $teacher->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }
    // Store the new image
$fileName= $this->upload($request->image, 'assets/img');
        $data['image'] = $fileName;
} else {
    // Keep the old image if no new image is uploaded
    $data['image'] = $teacher->image;
}

       //Teacher:: where('id', $id)->update($data);
       $teacher->update($data);
       return redirect()->route('dashboard.teachers')->with('success', 'Teacher updated successfully');
      // return redirect('dashboard/teachers');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(Request $request)
    {
        $id = $request->id;
        Teacher:: where('id', $id)->delete();
        return redirect('dashboard/teachers');
    }
/**
     * soft delete for teacher.
     */
    public function trash()
    {
        $trashed = Teacher::onlyTrashed()->get();
    return view('dashboard.trashTeacher', compact('trashed'));
    }


    public function restore(string $id)
   {
    Teacher:: where('id', $id)->restore();
    return redirect('dashboard/teachers');
   }



   public function forceDelete(Request $request)
   {
       $id = $request->id;
       Teacher:: where('id', $id)->forcedelete();
       return redirect('dashboard/trashTeacher');
   }

 //     $teacher= new Teacher();
    //    $teacher->fullName =$request->input('fullName');
    //     $teacher->phone = $request->input('phone');
    //     $teacher->facebook = $request->input('facebook');
    //     $teacher->twitter = $request->input('twitter');
    //     $teacher->instagram = $request->input('instagram');
    //     $teacher->twitter = $request->input('twitter');
    //     $teacher->image = $request->input('image');
        
        
    //     $teacher->save();
        //return 'Inserted';
       // Teacher::create($request->only($this->columns));
//return redirect()->route('dashboard.teachers')->with('success', 'Teacher added successfully');
}
