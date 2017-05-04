@extends('layout.forum.master')

@section('section.before')
<section class="section">
    <h1 class="title">Новая тема</h1>
    <div class="field has-addons">
        <p class="control is-expanded">
            <input class="input" type="text" placeholder="Название темы"  v-model="topicName">
        </p>
        <p class="control">
            <a class="button is-primary" @click="onTopicAdd({{ $section->id}} )">
                &nbsp;Создать тему
            </a>
        </p>
    </div>
</section>
@endsection

@section('section')
<h1 class="title">Последние темы</h1>

@foreach($topics as $topic)
    <a class="topic columns is-gapless is-mobile" href="/section/topic/{{ $topic->id }}#content">
        <div class="name column has-text-left">
            {{ $topic->name }}
        </div>
        <div class="views column has-text-left is-narrow is-hidden-touch">
            <li class="fa fa-comments-o"></li>&nbsp;{{ $topic->posts()->count() }}
        </div>
        <div class="author column has-text-centered is-narrow is-hidden-touch">
            {{ $topic->user->name }}
        </div>
        <div class="date column has-text-right is-one-quarter">
            {{ $topic->created_at->diffForHumans() }}
        </div>
    </a>
@endforeach
<!--
@include('layout.pagination', ['class' => 'is-centered'])
-->

@endsection