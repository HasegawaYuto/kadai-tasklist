@extends('layouts.app')

@section('content')

<h1>新規タスク登録</h1>
<div class="row">
<div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-offset-2 col-md-6 col-lg-offset-3 col-lg-6">
{!! Form::model($task,['route' => 'tasklists.store']) !!}
    <div class="form-group">
        {!! Form::label('content','タスク：') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','ステータス：') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('登録') !!}
{!! Form::close() !!}
</div>
</div>
@endsection