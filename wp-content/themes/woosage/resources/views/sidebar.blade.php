{{--
  Template Name: Sidebar
--}}
@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-sidebar')
    @endwhile
@endsection