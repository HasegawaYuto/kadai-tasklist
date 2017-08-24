@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasklists.edit','タスクを変更',['id'=>$task->id]) !!}

@endsection