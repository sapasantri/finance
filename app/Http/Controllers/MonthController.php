<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function index()
    {
        // return \Indonesia::findProvince(11, ['cities']);
        return \Indonesia::findVillage('3506100004', ['district.city.province']);
    }
}
