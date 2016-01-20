@extends('layouts.master')

@section('title')@parent:: Classes @stop

@section('content')
  <div class="container content-wrap">
    <div class="row">
      @include('partials.frontleft')
    <div class="col-md-9 body-content fp-main">
      <h1 class="center">OPTI-STRETCH Classroom Instruction</h1>
      <h2 class="center">Locations and Times</h2>
          {{-- <p><strong>Cottonwood Medical Clinic</strong><br>
          6671 S Redwood Rd Ste 110<br>
          West Jordan, UT 84084<br>
          <a href="tel://(801) 281-5775">(801) 281-5775</a></p> --}}
          <p>Private Consultation & Classes</p>
          <p><strong>Granite Peaks Learning Center</strong><br>
          501 East 3900 South<br>
          SLC, UT 84107<br>
          <a href="tel://(385) 646-5439">(385) 646-5439</a></p>
          <p>Tues. January 12th, 19th and 26th</p>
          <p>Time:  7:00pm – 8:30pm</p>
          <p>Cost:  $55 includes OPTI-STRETCH Book/DVD</p>
          <p>Bring exercise mat</p><strong></strong>
          <p><strong>Woods Cross High School</strong><br>
          600 West 2200 South<br>
          Woods Cross, UT  84087<br>
          <a href="tel://(801) 402-4500">(801) 402-4500</a></p>
          <p>Wed. 20th, 27th and Feb. 3rd</p>
          <p>Time:  7:00pm – 8:30pm</p>
          <p>Cost:  $55 includes OPTI-STRETCH Book/DVD</p>
          <p>Bring exercise mat</p>
          {{-- <p>Boy Scouts of America Physical Fitness Merit Badge Class</p>
          <p>Wed.  Sept. 16th, 23rd, 30th </p>
          <p>7pm-8pm</p> --}}
    </div>
  </div>
</div>
@stop

@section('footerscripts')
  @parent
  <script src="/assets/js/fp.js"></script>
  <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop
