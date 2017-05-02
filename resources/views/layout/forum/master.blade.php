@extends('layout.master')

@section('app')

    @include('layout.header')
    
    <section class="section">
        <section class="container">
            @include('layout.forum.breadcrumbs', ['links' => ['Bread' => '/', 'Crumb']])
            <hr>
            <section class="section">
            
                @yield('section')

            </section>
            
        </div>
    </section>

    @include('layout.footer')

@endsection