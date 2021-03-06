@extends('templates.default')

@section('header')
    <title>{{ $settings['blog_name'] }} - Home</title>
@stop


@section('title')
    {{ $settings['blog_name'] }}<small class="on-right">{{ $settings['tagline'] }}</small>
@stop


@section('content')
    @foreach($featured as $post)
        <div class="tile-group no-margin no-padding clearfix" style="width: 100%;">
        <div class="tile quadro quadro-vertical">
            <div class="tile-content image">
                <img src="/images/featured/{{ $post->image }}" style="height: 512px;">
            </div>

            <div class="brand bg-dark opacity">
            <span class="text">
                {{ $post->post->title }}
            </span>
            </div>
            <div class="brand">
                <div class="badge bg-red">12</div>
            </div>
        </div>
    @endforeach

    <div class="tile triple double-vertical">
        <div class="tile-content image">
            <img src="http://lorempixel.com/output/city-q-c-380-250-9.jpg">
        </div>

        <div class="brand bg-dark opacity">
        <span class="text">
            This is a sample post, aren't I an amazing designer.
        </span>
        </div>
        <div class="brand">
            <div class="badge bg-blue">1</div>
        </div>
    </div>

    <div class="tile bg-darkCyan">
        <div class="tile-content icon">
            <span class="icon-facebook"></span>
        </div>
    </div>
    <div class="tile bg-lightBlue">
        <div class="tile-content icon">
            <span class="icon-twitter"></span>
        </div>
    </div>

    <div class="tile double">
        <div class="tile-content image">
            <img src="http://lorempixel.com/output/technics-q-c-250-120-3.jpg">
        </div>

        <div class="brand bg-dark opacity">
        <span class="text">
            Hello World
        </span>
        </div>

        <div class="brand">
            <div class="badge bg-yellow">5</div>
        </div>
    </div>

    <div class="tile double double-vertical">
        <div class="tile-content image">
            <img src="http://lorempixel.com/output/transport-q-c-250-250-7.jpg">
        </div>

        <div class="brand bg-dark opacity">
        <span class="text">
            My name is Katie
        </span>
        </div>

        <div class="brand">
            <div class="badge bg-blue">2</div>
        </div>
    </div>

    <div class="tile triple double-vertical">
        <div class="tile-content image">
            <img src="http://lorempixel.com/output/city-q-c-380-250-2.jpg">
        </div>

        <div class="brand bg-dark opacity">
        <span class="text">
            This is a sample post, aren't I an amazing designer.
        </span>
        </div>
        <div class="brand">
            <div class="badge bg-orange">9</div>
        </div>
    </div>
        </div>
    <div class="clearfix"></div>
@stop