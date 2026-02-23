@extends('layouts.app')

@section('content')

<h1>{{ __('messages.welcome') }}</h1>

<div class="slideshow-container">

<div class="slide fade">
<img src="/images/gallery1.jpg">
</div>

<div class="slide fade">
<img src="/images/gallery2.jpg">
</div>

<div class="slide fade">
<img src="/images/gallery3.jpg">
</div>

<!-- Navigation arrows -->
<a class="prev" onclick="changeSlide(-1)">❮</a>
<a class="next" onclick="changeSlide(1)">❯</a>

</div>

@endsection