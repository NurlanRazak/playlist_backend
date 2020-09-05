<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PerformerResource;
use App\Models\Performer;

class PerformerController extends Controller
{

    public function index(Request $request)
    {
        $query = Performer::orderBy('updated_at', 'desc');

        $per_page = $request->per_page ?? 4;
        $per_page = $per_page > 0 ? $per_page : $query->count();

        $performers = $query->paginate($per_page)->appends($request->except('_method'));

        return $performers->setCollection($performers->getCollection()->transform(function($performer) {
            return new PerformerResource($performer);
        }));
    }
}
