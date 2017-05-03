@extends('layout.forum.master')

@section('section.before')
    <div class="level">
        <div class="level-left"></div>
        <div class="level-right">
            <div class="level-item">
                <div class="field has-addons has-addons-right">
                    <p class="control">
                        <input class="input" type="text" placeholder="Название раздела">
                    </p>
                    <p class="control">
                        <a class="button is-primary">
                            &nbsp;Создать раздел
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section')

<div class="index columns is-multiline">
    <div class="column is-half">
        <button class="remove button is-danger is-small">Удалить</button>
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
        <button class="remove button is-danger is-small">Удалить</button>
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
        <button class="remove button is-danger is-small">Удалить</button>
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

@endsection