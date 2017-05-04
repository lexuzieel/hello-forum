@extends('layout.forum.master')

@section('section.before')
    <div class="level">
        <div class="level-left"></div>
        <div class="level-right">
            <div class="level-item">
                <div class="field has-addons has-addons-right">
                    <p class="control">
                        <input class="input" type="text" placeholder="Название раздела" v-model="sectionName">
                    </p>
                    <p class="control">
                        <a class="button is-primary" @click="onSectionAdd">
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
@foreach($sections as $section)
    <div class="column is-half">
        <button class="remove button is-danger is-small" @click="onSectionDelete" id="{{ $section->id }}">Удалить</button>
        <a class="section box" href="{{ route('section.show', ['id' => $section->id]) }}#content">
            <p class="title">{{ $section->name }}</p>
            <p class="subtitle">
                <span class="is-pulled-left">{{ $section->user->login }}</span>
                <span class="is-pulled-right">{{ $section->created_at->diffForHumans() }}</span>
                <span class="is-clearfix"></span>
            </p>
        </a>
    </div>
@endforeach
</div>

@endsection