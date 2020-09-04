<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Year;

class YearController extends Controller
{

    public function index(Request $request)
    {
        $per_page = $request->per_page ?? 4;
        $years = Year::paginate($per_page);

        return $years;
    }
}
