<?php

namespace App\Http\Controllers;

use App\Topic;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    public function show($id) {
        $topic = Topic::find($id);
        if(! isset($topic)) return redirect(route('section.index'));

        $breadcrumbs = [
            __('navigation.breadcrumbs.index') => route('section.index'),
            str_limit($topic->section->name, 20) => route('section.show', ['id' => $topic->section->id]),
            str_limit($topic->name, 20)
        ];
        return view('topic')->with('breadcrumbs', $breadcrumbs)
                            ->with('topic', $topic)
                            ->with('posts', $topic->posts()->get()->all());
    }

    public function add(Request $request, Section $section) {
        if(! Auth::check()) abort(401);

        $this->validate($request, [
            'name' => 'required'
        ]);

        $topic = new Topic(['name' => $request->input('name')]);
        $topic->section()->associate($section);
        $topic->user()->associate(Auth::user());
        $topic->save();
        return $topic;
    }

    public function delete(Request $request) {
        if(! Auth::check()) abort(401);

        $this->validate($request, [
            'id' => 'required'
        ]);

        $topic = Topic::find($request->input('id'));
        if(! isset($topic)) abort(400);
        $topic->delete();
    }
}
