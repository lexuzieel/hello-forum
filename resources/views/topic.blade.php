@extends('layout.forum.master')

@section('section.before')

@if(Auth::check())
<div class="level">
    <div class="level-left">
        <div class="level-item">
            <p class="title">{{ $topic->section->name }}</p>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <a class="button is-primary" href="#reply"><li class="fa fa-pencil"></li>&nbsp;@lang('navigation.button.add-post')</a>
        </div>
        {{--
        <div class="level-item">
            <a class="button"><li class="fa fa-lock"></li>&nbsp;Закрыть тему</a>
        </div>
        --}}
        <div class="level-item">
            <a class="button is-danger" @click="onTopicDelete({{ $topic->id }})"><li class="fa fa-close"></li>&nbsp;@lang('navigation.button.remove-topic')</a>
        </div>
    </div>
</div>
@endif

<div class="level is-hidden-touch">
    <div class="level-left">
        <div class="level-item">
            <p class="subtitle">{{ $topic->name }}</p>
        </div>
    </div>
</div>
<!--
@include('layout.pagination')
-->
@endsection

@section('section')

@if(count($posts) > 0)
<div class="post-container">

    @foreach($posts as $post)
        <div class="post columns is-gapless">
            @if(Auth::check())
            <button class="remove button is-danger is-small" @click="onPostDelete({{ $post->id }})">
                @lang('navigation.button.delete')
            </button>
            @endif
            <div class="author column is-3 has-text-centered">
                <p class="name title is-4">{{ $post->user->full_name }}</p>
                <p class="role subtitle is-6">{{ $post->user->login }}</p>
                <p class="role subtitle is-6">@lang('user.role.' . $post->user->role->title)</p>
            </div>
            <div class="body column" style="position: relative">
                <div class="content">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    @endforeach

</div>
@else
    <div class="hero is-medium">
        <div class="hero-body has-text-centered">
            <h1 class="title">@lang('message.topic.empty')</h1>
        </div>
    </div>
@endif

@endsection

@section('section.after')
<!--
    @include('layout.pagination', ['class' => 'is-centered'])
-->
@endsection

@section('bottom')

@if(! Auth::check())
    <div id="reply" class="post-form hero is-medium is-info has-text-centered">
        <div class="hero-body">
            <p>@lang('message.sign-in-needed')</p>
            <br>
            <button class="button is-inverted is-info" @click="loginModal.show = true">@lang('navigation.button.sign-in')</button>
        </div>
    </div>
@else
    @if(Auth::user()->blocked)
    <div id="reply" class="post-form hero is-medium is-dark has-text-centered">
        <div class="hero-body">
            <p>@lang('message.post.blocked')</p>
        </div>
    </div>
    @else
    <div id="reply" class="post-form hero is-light has-text-centered">
        <div class="hero-body container">

            <div class="post columns is-gapless">
                <div class="author column is-3 has-text-centered">
                    <p class="name title is-4">{{ Auth::user()->full_name }}</p>
                    <p class="role subtitle is-6">{{ Auth::user()->login }}</p>
                    <p class="role subtitle is-6">@lang('user.role.' . Auth::user()->role->title)</p>
                </div>
                <div class="column">
                    <div class="field">
                        <p class="control">
                            <textarea class="textarea" placeholder="@lang('message.post.placeholder')" v-model="postContent"></textarea>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="level">
                <div class="level-item">
                    <button class="button is-primary" @click="onPostAdd({{ $topic->id }})">@lang('navigation.button.send')</button>
                </div>
            </div>

        </div>
    </div>
    @endif
@endif

@endsection