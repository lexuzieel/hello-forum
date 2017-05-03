<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function show($id) {
        $section = Section::find($id);
        if(! isset($section)) abort();
        
        $breadcrumbs = [
            'Разделы' => '/'
        ];
        return view('index')->with('breadcrumbs', $breadcrumbs)
                            ->with('sections', Section::get()->all());
    }
}
