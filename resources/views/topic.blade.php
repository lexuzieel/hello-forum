@extends('layout.master')

@section('app')

    @include('layout.header')
    
    <section class="section">
        <section class="container">
            <div class="breadcrumbs title is-5">
                <a href="/">Разделы</a>
                <li class="fa fa-angle-right fa-fw"></li>
                <a href="/section">Название раздела</a>
                <li class="fa fa-angle-right fa-fw"></li>
                <span>Название темы</span>
            </div>
            <hr>
            <section class="section">
            
                <div class="post columns is-gapless">
                    <div class="author column is-2">
                        Name
                    </div>
                    <div class="body content column">
I like Overwatch. I like crawling through the filth that is SoloQ and reaching a high rank, it's rewarding in its own right.<br /><br />But what the !@#$ IS GENJI STILL DOING IN THIS GAME?<br />I've hit Masters, and it's getting worse every game. My roster is shrinking with each win because Genji is becoming more and more prominent in every match I play.<br /><br />At this point, the ONLY viable supports I can play is Lucio or Ana. ANY other support is dead. Even then, if my team even bats an eyelid from the backline, their Genji has just dashed through, screamed his weeaboo garbage and killed the backline. I am running out of options man. I enjoy support, but Genji is destroying the game - it's SO unenjoyable. <br /><br />KoTH is my most despised gamemode because you could effectively rename it to "Nanoboost The Genji". First team that does that wins. Sure, the other team will do it - but their behind a few points and it'll go back and forth now.<br /><br />Even a Zenyatta ult doesn't work anymore. He wont ult until Zen is dead. But it's not like he needs his team to do it - he'll do it himself THEN press his "I Win The Game" button.<br /><br />Here's an idea for Sombra:<br />All robotic characters within 10 metres take 200 damage per second.<br />She has no other abilities.<br /><br />I would play her with a burning passion until every Genji player has sliced their throat in frustration, just like every Support player has to deal with.
                    </div>
                </div>

            </section>
            
        </div>
    </section>

    @include('layout.footer')

@endsection