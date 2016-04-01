@extends('layouts.master')

@section('content')
<div class="container wrapper">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Test Project</h1>
            <div class="my-clock"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-right">
            <button class="btn btn-success" id="start">Start Clock</button>
        </div>
        <div class="col-md-4 text-center">
            <button class="btn btn-danger" id="stop">Stop Clock</button>
        </div>
        <div class="col-md-4 text-left">
            <button class="btn btn-info" id="reset">Reset Clock</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 sub-contents">
            <h4 class="text-center">Hello</h4>    
        </div>
        <div class="col-md-4 sub-contents">
            <h4 class="text-center">Hello</h4>
        </div>
        <div class="col-md-4 sub-contents">
            <h4 class="text-center">Hello</h4>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>
    var clock;
    $(document).ready(function() {
        var time = 300;
        clock = $('.my-clock').FlipClock(300, {
            autoStart: false,
            countdown: true,

        });

        $('#start').click(function(e) {
            clock.start();
        });

        $('#stop').click(function(e) {
            clock.stop();
        });

        $('#reset').click(function(e) {
            clock.setTime(time);
        });
    });
</script>
@endsection