@extends('layouts.app');

@section('content')
    <form action="{{ route('articles.update',$article->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        {{--//这是跨站方法伪造，HTML 表单没有支持 PUT、PATCH 或 DELETE 动作。所以在从 HTML 表单中调用被定义的 PUT、PATCH 或 DELETE 路由时，你将需要在表单中增加隐藏的 _method 字段来伪造该方法--}}
        <label>title</label>
        <input type="text" name="title" style="width:100%;" value="{{ $article->title }}">
        <label>内容</label>
        <textarea name="content" rows="10" style="width:100%;">{{ $article->content }}</textarea>

        <button type="submit">完成</button>

    </form>
    @endsection
