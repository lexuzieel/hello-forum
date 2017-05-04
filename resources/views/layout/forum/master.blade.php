@extends('layout.master')

@section('content')

    @include('layout.header')

    <a id="content"></a>

    @yield('top')
    
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                    @isset($breadcrumbs)
                        @include('layout.forum.breadcrumbs', ['links' => $breadcrumbs])
                    @endisset
                    </div>
                </div>
                <div class="level-right is-hidden-tablet-only">
                
                    @if(Auth::check())
                    <div class="level-item">
                        Вы вошли как {{ Auth::user()->login }} ({{ mb_strtolower(Auth::user()->role->name) }})
                        &nbsp;
                    </div>
                    
                    <div class="level-item">
                        <a class="button is-small" href="/logout">
                            Выйти&nbsp;
                            <span class="icon is-small">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                    @else
                        <div class="level-item">
                            <button class="button is-primary" @click="loginModal.show = true">Авторизоваться</button>
                        </div>
                    @endif

                </div>
            </div>
            <div class="level">
                <div class="level-left">

                    <div class="level-item is-hidden-desktop is-hidden-touch-only is-hidden-mobile">
                        <button class="button is-primary" @click="loginModal.show = true">Авторизоваться</button>
                    </div>
                    <!--
                    <div class="level-item is-hidden-desktop is-hidden-touch-only is-hidden-mobile">
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
                    -->
                </div>
                <!--
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
                -->
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