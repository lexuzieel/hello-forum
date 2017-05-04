@extends('layout.forum.master')

@section('section.before')
    @if(Auth::check())
    <section class="section">
        <h1 class="title">@lang('message.topic.title.new')</h1>
        <div class="field has-addons">
            <p class="control is-expanded">
                <input class="input" type="text" placeholder="@lang('message.topic.placeholder')"  v-model="topicName">
            </p>
            <p class="control">
                <a class="button is-primary" @click="onTopicAdd({{ $section->id}} )">
                    &nbsp;@lang('navigation.button.add-topic')
                </a>
            </p>
        </div>
    </section>
    @endif
@endsection

@section('section')

@if(count($topics))
    <h1 class="title">@lang('message.topic.title.latest')</h1>

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
@else
    <div class="hero is-medium">
        <div class="hero-body has-text-centered">
            <h1 class="title">@lang('message.section.empty')</h1>
        </div>
    </div>
@endif
<!--
@include('layout.pagination', ['class' => 'is-centered'])
-->

@endsection