@extends('layout.forum.master')

@section('section')

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

<nav class="pagination is-centered">
    <a class="pagination-previous">Назад</a>
    <a class="pagination-next">Далее</a>
    <ul class="pagination-list">
        <li><a class="pagination-link">1</a></li>
        <li><span class="pagination-ellipsis">&hellip;</span></li>
        <li><a class="pagination-link">45</a></li>
        <li><a class="pagination-link is-current">46</a></li>
        <li><a class="pagination-link">47</a></li>
        <li><span class="pagination-ellipsis">&hellip;</span></li>
        <li><a class="pagination-link">86</a></li>
    </ul>
</nav>

@endsection