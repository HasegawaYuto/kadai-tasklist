@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスクの編集ページ</h1>
<div class="row">
<div class="col-xs-6">
    {!! Form::model($task, ['route' => ['tasklists.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status', 'ステータス:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('変更') !!}

    {!! Form::close() !!}
</div>
/div>
@endsection