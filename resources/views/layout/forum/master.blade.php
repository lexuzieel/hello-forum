@extends('layout.master')

@section('content')

    @include('layout.header')
            
    @yield('top')
    
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        @include('layout.forum.breadcrumbs', ['links' => ['Разделы' => '/', 'Название раздела' => '/section', 'Название темы' => '/section/topic']])
                    </div>
                </div>
                <div class="level-right is-hidden-tablet-only">

                    <div class="level-item">
                        <!--
                        <button class="button is-primary" @click="showModal.login = true">Авторизоваться</button>
                        -->
                        Вы вошли как username (администратор)
                        &nbsp;
                    </div>
                    <div class="level-item">
                        <button class="button is-small">
                            Выйти&nbsp;
                            <span class="icon is-small">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </button>
                    </div>

                </div>
            </div>
            <div class="level">
                <div class="level-left">
                    <div class="level-item is-hidden-desktop is-hidden-touch-only is-hidden-mobile">
                        <!--
                        <button class="button is-primary" @click="showModal.login = true">Авторизоваться</button>
                        -->
                        Вы вошли как username (администратор)
                        &nbsp;
                    </div>
                    <div class="level-item is-hidden-desktop is-hidden-touch-only is-hidden-mobile">
                        <button class="button is-small">
                            Выйти&nbsp;
                            <span class="icon is-small">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </button>
                    </div>

                </div>
                <div class="level-right">
                    <div class="level-item">
                        <div class="field">
                            <p class="control">
                                <span class="select is-small is-dark">
                                    <select id="user-role">
                                        <option disabled selected value="">Выберите роль</option>
                                        <option value="administrator">Администратор</option>
                                        <option value="user">Пользователь</option>
                                        <option value="blocked">Заблокирован</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="level-item">
                        <button class="button is-small is-dark" @click="onUserUpdate">
                            Подтвердить
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            
            @yield('section.before')
            
            <section class="section">
            
                @yield('section')

            </section>
            
            @yield('section.after')
            
        </div>
    </section>
            
    @yield('bottom')

    @include('layout.footer')

@endsection