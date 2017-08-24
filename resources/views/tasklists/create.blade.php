@extends('layouts.app')

@section('content')

<h1>新規タスク登録</h1>

{!! Form::model($task,['route' => 'tasklists.store']) !!}
{!! Form::label('content','タスク：') !!}
{!! Form::text('content') !!}
{!! Form::submit('登録') !!}
{!! Form::close() !!}
@endsection