<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{

    public function index(Request $request)
    {
        $per_page = $request->per_page ?? 4;
        $all = $per_page < 0 || $request->all;

        if ($all) {
            $genres = Genre::get();
        } else {
            $genres = Genre::paginate($per_page);
        }


        return $genres;
    }
}
