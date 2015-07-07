@extends('main_layout')

@section('title', 'Error')

@section('content')
<section id="error" class="container text-center">
    <h1>503, Page not found</h1>
    <p>The Page you are looking for doesn't exist or an other error occurred.</p>
    <a class="btn btn-primary" href="index.html">GO BACK TO THE HOMEPAGE</a>
</section><!--/#error-->
@stop