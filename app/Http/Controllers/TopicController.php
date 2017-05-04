<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function show($id) {
        $topic = Topic::find($id);
        if(! isset($topic)) return redirect(route('topic.index'));

        $breadcrumbs = [
            'Разделы' => route('section.index'),
            str_limit($topic->section->name, 20) => route('section.show', ['id' => $topic->section->id]),
            str_limit($topic->name, 20)
        ];
        return view('topic')->with('breadcrumbs', $breadcrumbs)
                            ->with('topic', $topic)
                            ->with('posts', $topic->posts()->get()->all());
    }
}
