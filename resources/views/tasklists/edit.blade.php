@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスクの編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasklists.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        {!! Form::submit('変更') !!}

    {!! Form::close() !!}

@endsection