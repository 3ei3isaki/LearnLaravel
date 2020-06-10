@extends('master')

@section('title', 'Tin tức mới')

@section('main')
     <h1>Đây là main</h1>
     @include('components.news.item')
@endsection