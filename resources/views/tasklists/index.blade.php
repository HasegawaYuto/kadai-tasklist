@extends('layouts.app')

@section('content')
<h1>タスク一覧</h1>
@if(count($tasks)>0)
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th><th>タスク</th><th>ステータス</th>
        </tr>
        </thead>
        @foreach($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasklists.show',$task->id,['id'=>$task->id]) !!}</td>
                <td>{{ $task -> content }}</td>
                <td>{{ $task -> status }}</td>
                <td>{!! Form::model($task,['route'=>['tasklists.destroy',$task->id],'method'=>'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
            </tr>
        @endforeach
    </table>
@else
    <div>
        <p>No Task</p>
    </div>    
@endif
    {!! link_to_route('tasklists.create','新規タスク', null, ['class' => 'btn btn-primary']) !!}
@endsection