@extends('layouts.master')

@section('title')@parent:: Knowledge Base @stop

@section('content')
    <div class="container content-wrap">
        <div class="row">
            @include('partials.frontleft')
            <div class="col-md-9 body-content fp-main">
                <h1>Reset Your Password</h1>
                <form method="POST" action="{{{ URL::to('/users/reset_password') }}}" accept-charset="UTF-8">
                    <input type="hidden" name="token" value="{{{ $token }}}">
                    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

                    <div class="form-group">
                        <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                    </div>

                    @if (Session::get('error'))
                        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                    @endif

                    @if (Session::get('notice'))
                        <div class="alert">{{{ Session::get('notice') }}}</div>
                    @endif

                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('footerscripts')
        @parent
        <script src="/assets/js/fp.js"></script>
        <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop 
