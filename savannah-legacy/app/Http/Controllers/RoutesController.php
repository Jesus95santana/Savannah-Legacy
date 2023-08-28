<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about-the-academy');
    }
    public function transportation() {
        return view('transportation');
    }
    public function faculty() {
        return view('faculty-and-staff');
    }
    public function admissions() {
        return view('admissions');
    }
    public function accreditation() {
        return view('accreditation');
    }
    public function error() {
        return view('welcome');
    }

}
