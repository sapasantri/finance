<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function findBy($column, $data)
    {
        return $this->student->where($column, $data)->get();
    }

}
