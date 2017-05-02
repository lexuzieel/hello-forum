@extends('layout.master')

@section('app')

    @include('layout.header')
    {{--
    <section class="section">
        <div class="has-text-centered">
            <i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i>
            <span class="sr-only">Загрузка...</span>
        </div>
    </section>
    --}}
    <section class="section">
        <div class="container">
            <div class="breadcrumbs title is-5">
                <span>Разделы</span>
            </div>
            <hr>
            <section class="section">
                <div class="columns is-multiline">
                    <div class="column is-half">
                        <a class="section box" href="/section">
                            <p class="title">Название раздела</p>
                            <p class="subtitle">
                                <span class="is-pulled-left">Автор</span>
                                <span class="is-pulled-right">Дата создания</span>
                                <span class="is-clearfix"></span>
                            </p>
                        </a>
                    </div>
                    <div class="column is-half">
                        <a class="section box" href="/section">
                            <p class="title">Название раздела</p>
                            <p class="subtitle">
                                <span class="is-pulled-left">Автор</span>
                                <span class="is-pulled-right">Дата создания</span>
                                <span class="is-clearfix"></span>
                            </p>
                        </a>
                    </div>
                    <div class="column is-half">
                        <a class="section box" href="/section">
                            <p class="title">Название раздела</p>
                            <p class="subtitle">
                                <span class="is-pulled-left">Автор</span>
                                <span class="is-pulled-right">Дата создания</span>
                                <span class="is-clearfix"></span>
                            </p>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </section>

    @include('layout.footer')

@endsection