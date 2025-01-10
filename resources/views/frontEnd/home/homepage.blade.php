@extends('frontEnd.layouts.master')

@section('title')
    Homepage
@endsection

@section('contents')
    @include('frontEnd.home.banner')

    @include('frontEnd.home.service')

    @include('frontEnd.home.about')

    @include('frontEnd.home.category')

    @include('frontEnd.home.course')

    @include('frontEnd.home.counter')

    @include('frontEnd.home.feedback')

    @include('frontEnd.home.team')

    @include('frontEnd.home.blog')

    @include('frontEnd.home.calltoaction')
@endsection


<!-- Call To Action End -->