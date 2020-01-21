@extends('adminlte::page')

@section('content_top_nav_right')

    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-home"></i>Home
        </a>
    </li>

@endsection

@section('css')

    <style>

        #admin-panel-logo {
            background-image: url(https://www.femto15.com/wp-content/themes/femto/images/logo-purple.svg);
            width: 50px;
            height: 60px;
            background-size: 110px 50px;
            background-repeat: no-repeat;
            background-position: -81px -1px;
        }

    </style>

@endsection
