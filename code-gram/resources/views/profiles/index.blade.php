@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://duckduckgo.com/i/4bf02e97.png" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153 </strong> posts </div>
                <div class="pr-5"><strong>23k </strong> followers </div>
                <div class="pr-5"><strong>212 </strong> following </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://cdn-media-2.freecodecamp.org/w1280/5f9c9881740569d1a4ca1a71.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://cdn-media-2.freecodecamp.org/w1280/5f9c9881740569d1a4ca1a71.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://cdn-media-2.freecodecamp.org/w1280/5f9c9881740569d1a4ca1a71.jpg" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
