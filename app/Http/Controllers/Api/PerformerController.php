<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Performer;

class PerformerController extends Controller
{

    public function index(Request $request)
    {
        $per_page = $request->per_page ?? 4;
        $performers = Performer::paginate($per_page);

        return $performers;
    }
}
