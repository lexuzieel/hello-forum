<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function index() {
        $breadcrumbs = [
            'Разделы' => route('section.index')
        ];
        return view('index')->with('breadcrumbs', $breadcrumbs)
                            ->with('sections', Section::latest()->get()->all());
    }

    public function show($id) {
        $section = Section::find($id);
        if(! isset($section)) return redirect(route('section.index'));

        $breadcrumbs = [
            'Разделы' => route('section.index'),
            str_limit($section->name, 20) => route('section.index')
        ];
        return view('section')->with('breadcrumbs', $breadcrumbs)
                            ->with('section', $section)
                            ->with('topics', $section->topics()->latest()->get()->all());
    }

    public function add(Request $request) {
        if(! Auth::check()) abort(401);

        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        $section = new Section;
        $section->name = $request->input('name');
        $section->user()->associate(Auth::user());
        $section->save();
    }

    public function remove(Request $request) {
        if(! Auth::check()) abort(401);

        $this->validate($request, [
            'id' => 'required'
        ]);

        $section = Section::find($request->input('id'));
        if(! isset($section)) abort(400);
        $section->delete();
    }
}
