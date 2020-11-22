<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Repositories\StudentRepository;

class StudentController extends Controller
{
    protected $student;

    public function __construct(StudentRepository $student)
    {
        $this->student = $student;
    }

    public function index($params)
    {
        // return Student::all();
        return $this->student->findBy('full_name', $params);
    }
}
