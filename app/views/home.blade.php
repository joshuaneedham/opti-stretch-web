@extends('layouts.master')

@section('title')@parent:: Home @stop

@section('content')
	<div class="container content-wrap">
		<div class="row">
		<div class="col-md-3 fp-left">
			<div id="fp-purchase-book-wrap" class="fp-left-item">
				<a href="#" id="fp-purchase-book-top">Purchase Our Book</a>
				<a href="#" id="fp-purchase-book-bottom">Purchase Our Book</a>
			</div>
			<div id="fp-common-back-pain-wrap" class="fp-left-item">
				<div id="fp-common-back-pain-img">
					<span id="span1" class="ttip" title="Trapezius Muscle Area"></span>
					<span id="span2" class="ttip" title="Rhomboid Muscle Area"></span>
					<span id="span3" class="ttip" title="Low Back Near midline - Erector Spine Muscle"></span>
					<span id="span4" class="ttip" title="Belt Line"></span>
					<span id="span5" class="ttip" title="Sacroiliac Joint Area - The most common area for Recurrent Low Back Pain"></span>
					<span id="span6" class="ttip" title="Major Hip Flexor Area"></span>
					<div class="fp-common-instruct">
						Hover your mouse, or tap the locations on the picture above
						for the most common location of back pain occurrences.
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 body-content fp-main">
			<h1 class="center">OPTI-STRETCH</h1>
			<h2 class="center">Versus Recurrent Back Pain</h2>
			<p class="highlight center">Have you ever injured a muscle and it never felt the same again?</p>
			<p class="highlight center">Does the muscle reinjure easily?</p>
			<p>Luckily low back pain, upper back pain, shoulder pain and neck pain are most commonly caused by muscle strain. OPTI-STRETCH will provide new and unique knowledge into the science of stretching for rehabilitation. OPTI-STRETCH can now effectively rehabilitate a “bad back” due solely to muscle strain, coined by Dr. Neil, M.D. a Recurrent Back Strain Syndrome.</p>

			<p>Now using the OPTI-STRETCH book which includes a narrated DVD by Dr. Neil showing the correct way to perform every stretch you can learn:</p>

			<ul>
				<li>How to make your muscles less susceptible to muscle strains</li>
				<li>How to detect chronically injured muscles</li>
				<li>That symmetrical muscle movement reduces the chances of muscle strains</li>
				<li>How to safely increase your range of motion for a more active lifestyle</li>
				<li>Neutral stretches that will tone all the major muscles groups of the back and neck</li>
				<li>That muscles have to have proper tone in order for them to be strengthened and conditioned without straining the muscles</li>
				<li>Therapeutic stretching to heal and lengthen chronically injured muscles that have been injured by muscle strains</li>
			</ul>
			<div class="center"><img id="dandb"
				src="//www.dandb.com/businessdirectory/badgecontrol.jsp?bid=37359989&amp;html=1"
			 	style="padding: 0; outline: 0; border: 0 none; clear: both;
			 	vertical-align: baseline; display: block;" alt="D&amp;B Credibility Basic"></div>
		</div>
		<div class="col-md-2 col-md-offset-1">
			Right Sidebar
		</div>
		</div>
	</div>
@stop

@section('footerscripts')
	@parent
	<script src="/assets/js/fp.js"></script>
	<script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop
