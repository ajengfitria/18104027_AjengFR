<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() {
    	$data['student'] = Student::all();
    	return view('student', $data);
    }

    public function create() {
    	$data['gender'] = ['L','P'];
    	$data['departement'] = ['S1 RPL', 'S1 Informatika', 'S1 Sistem Informasi'];

    	return view('student_create', $data);
    }

    public function store(Request $request) {
    	$request->validate([
    		'nim' => 'required|size:8,unique:students',
    		'name' => 'required|min:3|max50',
    		'gender' => 'required|in:P,L',
    		'departement' => 'required',
    		'address' => '',]);

    	$student = new Student();
    	$student->nim = $request->nim;
    	$student->nama = $request->nama;
    	$student->gender = $request->gender;
    	$student->departement = $request->departement;
    	$student->address = $request->address;
    	$student->save();

    	return redirect(route('student.index'))->with('pesan','Data Berhasil ditambahkan');
    }
}
