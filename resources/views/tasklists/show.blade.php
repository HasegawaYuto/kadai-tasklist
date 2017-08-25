@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <p>タスク：{{ $task->content }}</p>
    <p>ステータス：{{ $task->status }}</p>
    
    {!! link_to_route('tasklists.edit','タスクを変更',['id'=>$task->id]) !!}

@endsection