@extends('frontEnd.layouts.master')

@section('title')
    ContactPage
@endsection

@section('pageheaderTitle')
Contact 
@endsection


@section('contents')
    @include('frontEnd.layouts.pageheader')
    <!-- Contact Start -->
    @include('frontEnd.contacts.contact_one')
    <!-- Contact End -->
    <!-- Info Start -->
    @include('frontEnd.contacts.contact_info')
    <!-- Info End -->
    <!--Google Map Start-->
    @include('frontEnd.contacts.map')
    <section class="copyright text-center">
        <div class="container wow fadeInUp" data-wow-delay="400ms">
            <p class="copyright__text">Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> | Eduact HTML
                Template. All Rights Reserved</p>
        </div><!-- /.container -->
    </section><!-- /.copyright -->
@endsection
