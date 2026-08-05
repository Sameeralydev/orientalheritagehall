<!doctype html>
<html lang="en-GB">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpeg" href="{{ asset('orientalheritagehall.jpeg') }}">
    <link rel="apple-touch-icon" href="{{ asset('orientalheritagehall.jpeg') }}">
    <title>{{ $metaTitle ?? config('venue.name').' | London wedding & events venue' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'A distinguished London setting for weddings, corporate occasions and unforgettable private celebrations.' }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="{{ $metaTitle ?? config('venue.name') }}"><meta property="og:description" content="{{ $metaDescription ?? 'Celebrations shaped by heritage.' }}"><meta property="og:image" content="{{ asset(config('venue.logo')) }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="site-body">
<a class="skip-link" href="#main">Skip to content</a>
@include('components.header')
<main id="main">@yield('content')</main>
@include('components.footer')
<div class="mobile-actions"><a href="tel:{{ config('venue.phone') }}">Call</a><a href="{{ config('venue.whatsapp') ?: '#enquire' }}">WhatsApp</a><a href="#location">Directions</a><a href="{{ route('page','contact') }}">Enquire</a></div>
<div class="cookie-banner" data-cookie-banner><div><strong>Your privacy matters.</strong><p>We use essential cookies to keep this site working. Optional analytics will only be enabled with your consent.</p></div><div class="cookie-actions"><button data-cookie="essential">Essential only</button><button class="button button-small" data-cookie="all">Allow optional</button></div></div>
</body></html>
