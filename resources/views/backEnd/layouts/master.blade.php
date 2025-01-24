<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('backEnd.layouts.header-scripts')

<body>
<!-- Left Panel -->
@include('backEnd.layouts.sidebar')

<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    @include('backEnd.layouts.header')

    <div class="breadcrumbs">
        <div class="col-sm-8">
            <div class="page-header float-left">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        @yield('nav-title')
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="col-sm-12">
            @yield('inner-content')
        </div>
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@include('backEnd.layouts.footer-scripts')
</body>
</html>