@extends('layouts/app');

@section('content')

    <form action="{{ route('articles.store') }}" method="post">
        {{ csrf_field() }}
        <label>title</label>
        <input type="text" name="title" style="width: 100%" value="{{ old('title') }}">
        <label>content</label>
        <textarea name="content" rows="10" style="width: 100%">{{ old('content') }}</textarea>
        <button type="submit">ok</button>
    </form>

    @endsection