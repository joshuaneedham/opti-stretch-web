@extends('layouts.master')

@section('title')@parent:: Purchase Our Book @stop

@section('content')
	<div class="container content-wrap">
		@include('partials.frontleft')
		<div class="col-md-9 body-content fp-main">
			<h1>Opti-Stretch - Choose your platform below.</h1>
			@include('partials.pitch')
			<div class="center">
              @if (Auth::user())
				<button id="customCheckoutButton" class="btn btn-primary btn-lg">Purchase our Book for $28.95</button>
              @else
                    <a class="btn btn-primary btn-lg" href="http://optistretch.com/users/login">Create Free Account to Purchase</a>
              @endif
			</div>
		</div>
	</div>

@stop

@section('footerscripts')
	@parent
	<script src="/assets/js/fp.js"></script>
    <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
    @if (Auth::user())
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script type="text/javascript">
    	var handler = StripeCheckout.configure({
    		key: 'pk_test_3cRjNKBeZABCZ2MryozRXBcl'
    		,image: '/icon/Optistretch-Stripe.png'
    		@if (Auth::user())
    		,email: '{{ Auth::user()->email }}'
    		@endif
    		,token: function(token) {
    			alert('token: ' + token);
    			console.log(token);
    		}
    	});
		$('#customCheckoutButton').on('click', function(e){
			handler.open({
				name: 'Opti-Stretch Book & Video'
				,description: 'Online Book & Video Access'
				,amount: 2895
			});
			e.preventDefault();
		});
		$(window).on('popstate', function(){
			handler.close;
		});
    </script>
    @endif
@stop
