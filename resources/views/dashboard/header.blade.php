<!DOCTYPE html>
<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/backend') . '/' }}"
    data-base-url="{{ url('/') }}" data-framework="laravel" data-template="vertical-menu-laravel-template-free"
    style="{{ App::isLocale('ar') ? 'direction:rtl !important;' : '' }}">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    @include('dashboard.style')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Toastr -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    {{-- datatable --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
