@extends('layouts.app')

@section('content')
<h1>タスク一覧</h1>
@if(count($tasks)>0)
    <table>
        <tr><th>ID</th><th>タスク</th></tr>
        @foreach($tasks as $task)
            <tr>
                <th>{!! link_to_route('tasklists.show',$task->id,['id'=>$task->id]) !!}</th>
                <th>{{ $task -> content }}</th>
                <th>{!! Form::model($task,['route'=>['tasklists.destroy',$task->id],'method'=>'delete']) !!}
                    {!! Form::submit('削除') !!}
                    {!! Form::close() !!}</th>
            </tr>
        @endforeach
    </table>
@else
    <div>
        <p>No Task</p>
    </div>    
@endif
    {!! link_to_route('tasklists.create','新規タスク') !!}
@endsection