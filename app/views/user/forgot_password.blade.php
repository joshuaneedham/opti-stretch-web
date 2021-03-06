@extends('layouts.master')

@section('title')@parent:: Knowledge Base @stop

@section('content')
    <div class="container content-wrap">
        <div class="row">
            @include('partials.frontleft')
            <div class="col-md-9 body-content fp-main">
                <h1>Forgot Your Password?</h1>
                <p>Provide your email address below and we'll help you reset it.</p>
                <form method="POST" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
                    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

                    <div class="form-group">
                        <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
                        <div class="input-append input-group">
                            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                            <span class="input-group-btn">
                                <input class="btn btn-default" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
                            </span>
                        </div>
                    </div>

                    @if (Session::get('error'))
                        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                    @endif

                    @if (Session::get('notice'))
                        <div class="alert">{{{ Session::get('notice') }}}</div>
                    @endif
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
