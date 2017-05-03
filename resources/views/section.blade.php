@extends('layout.forum.master')

@section('section.before')
<section class="section">
    <h1 class="title">Новая тема</h1>
    <div class="field has-addons">
        <p class="control is-expanded">
            <input class="input" type="text" placeholder="Название темы">
        </p>
        <p class="control">
            <a class="button is-primary">
                &nbsp;Создать тему
            </a>
        </p>
    </div>
</section>
@endsection

@section('section')
<h1 class="title">Последние темы</h1>

<a class="topic columns is-gapless is-mobile" href="/section/topic">
    <div class="name column has-text-left">
        Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name Name
    </div>
    <div class="views column has-text-left is-narrow is-hidden-touch">
        <li class="fa fa-comments"></li>&nbsp;420
    </div>
    <div class="author column has-text-centered is-narrow is-hidden-touch">
        Author
    </div>
    <div class="date column has-text-right is-one-quarter">
        Date
    </div>
</a>

<a class="topic columns is-gapless is-mobile" href="/section/topic">
    <div class="name column has-text-left">
        Name
    </div>
    <div class="views column has-text-left is-narrow is-hidden-touch">
        <li class="fa fa-comments-o"></li>&nbsp;0
    </div>
    <div class="author column has-text-centered is-narrow is-hidden-touch">
        Author
    </div>
    <div class="date column has-text-right is-one-quarter">
        Date
    </div>
</a>

<a class="topic columns is-gapless is-mobile" href="/section/topic">
    <div class="name column has-text-left">
        Name
    </div>
    <div class="views column has-text-left is-narrow is-hidden-touch">
        <li class="fa fa-comments-o"></li>&nbsp;0
    </div>
    <div class="author column has-text-centered is-narrow is-hidden-touch">
        Author
    </div>
    <div class="date column has-text-right is-one-quarter">
        Date
    </div>
</a>

@include('layout.pagination', ['class' => 'is-centered'])

@endsection