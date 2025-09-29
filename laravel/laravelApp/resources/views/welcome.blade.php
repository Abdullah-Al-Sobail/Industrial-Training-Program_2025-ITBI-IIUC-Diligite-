@extends('layouts.navbar')

<h1>Hello i am welcome file</h1>
<a href="{{route('test',20)}}">Home</a>


@php
    $var = '<h2>Hello H2</h2>';
    $num =10;
    $collection = [];
@endphp
{!! $var !!}

@if ($num>5)
    number is greater than 5
@endif

@auth
    logged in
@endauth

@guest
    This is guest
@endguest

@forelse ($collection as $item)

@empty
This is empty
@endforelse

