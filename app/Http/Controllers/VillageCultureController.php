<?php

namespace App\Http\Controllers;

use App\Models\VillageCulture;
use Illuminate\Http\Request;

class VillageCultureController extends Controller
{
    public function show(Request $request, $id, $slug)
    {

        $item = VillageCulture::findOrFail($id);

        return view('pages.story.index', ['item' => $item]);
    }
}
