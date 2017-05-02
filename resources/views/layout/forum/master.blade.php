@extends('layout.master')

@section('app')

    @include('layout.header')
            
    @yield('top')
    
    <section class="section">
        <div class="container">
            @include('layout.forum.breadcrumbs', ['links' => ['Bread' => '/', 'Crumb' => '', 's']])
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