<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class Frontpages extends Controller
{
   public function home2(){

      //$teachers = Teacher::all();
      $teachers = Teacher::take(3)->get();
    return view('home2', compact('teachers'));
   }

   public function about(){
      $title ="About us";
      //$teachers = Teacher::all();
      $teachers = Teacher::take(3)->get();
    return view('about', compact('title','teachers'));
   }

   public function classes(){
      $title ="Classes";
    return view('classes', compact('title'));
   }

   public function contact(){
      $title ="Contact Us";
    return view('contact', compact('title'));
   }

   public function facilities(){
      $title ="Facilities";
    return view('facilities', compact('title'));
   }

   public function team(){
      $title ="Teachers";
      //$teachers = Teacher::all();
      $teachers = Teacher::take(3)->get();
    return view('team', compact('title','teachers'));
   }

   public function call(){
      $title ="Become A Teachers";
    return view('call', compact('title'));
   }

   public function appointment(){
      $title ="Appointment";
    return view('appointment', compact('title'));
   }

   public function testimonial(){
      $title ="Testimonial";
    return view('testimonial', compact('title'));
   }
   
   public function error(){
      $title ="404 Error";
    return view('error', compact('title'));
   }
}