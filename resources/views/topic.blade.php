@extends('layout.forum.master')

@section('section.before')

<div class="level">
    <div class="level-left">
        <div class="level-item">
            <p class="title">{{ $topic->section->name }}</p>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <a class="button is-primary" href="#reply"><li class="fa fa-pencil"></li>&nbsp;Написать сообщение</a>
        </div>
        {{--
        <div class="level-item">
            <a class="button"><li class="fa fa-lock"></li>&nbsp;Закрыть тему</a>
        </div>
        --}}
        <div class="level-item">
            <a class="button is-danger"><li class="fa fa-close"></li>&nbsp;Удалить тему</a>
        </div>
    </div>
</div>

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

<div class="post-container">

@foreach($posts as $post)
    <div class="post columns is-gapless">
        <button class="remove button is-danger is-small">Удалить</button>
        <div class="author column is-3 has-text-centered">
            <p class="name title is-4">{{ $post->user->full_name }}</p>
            <p class="role subtitle is-6">{{ $post->user->login }}</p>
            <p class="role subtitle is-6">{{ $post->user->role->name }}</p>
        </div>
        <div class="body column" style="position: relative">
            <div class="content">
                {!! $post->content !!}
            </div>
        </div>
    </div>
@endforeach

</div>

<!--
<div class="hero is-large"></div>
    <div class="hero-body has-text-centered">
        <h1 class="title">В данной теме нет сообщений</h1>
    </div>
</div>
-->

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
            <p>Вы должны авторизоваться для того, чтобы оставить сообщение.</p>
            <br>
            <button class="button is-inverted is-info" @click="loginModal.show = true">Авторизоваться</button>
        </div>
    </div>
@else
    @if(Auth::user()->blocked)
    <div id="reply" class="post-form hero is-medium is-dark has-text-centered">
        <div class="hero-body">
            <p>Вы заблокированы.</p>
        </div>
    </div>
    @else
    <div id="reply" class="post-form hero is-light has-text-centered">
        <div class="hero-body container">

            <div class="post columns is-gapless">
                <div class="author column is-3 has-text-centered">
                    <p class="name title is-4">{{ Auth::user()->full_name }}</p>
                    <p class="role subtitle is-6">{{ Auth::user()->login }}</p>
                    <p class="role subtitle is-6">{{ Auth::user()->role->name }}</p>
                </div>
                <div class="column">
                    <div class="field">
                        <p class="control">
                            <textarea class="textarea" placeholder="Содержимое сообщения"></textarea>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="level">
                <div class="level-item">
                    <button class="button is-primary">Отправить</button>
                </div>
            </div>

        </div>
    </div>
    @endif
@endif

@endsection