@extends('layouts.main')
@section('page_title', 'Hello Page')

@section('content')

<h1 class="page-title">Edit a Article</h1>
<table border = "1">
         <tr>
            <td>ID</td>
            <td>Task</td>
            <td>Userid</td>
            <td>Status</td>
            <td>Type</td>
            <td>Approver</td>
            
         </tr>
         <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->task_id }}</td>
            <td>{{ $article->user_id }}</td>
            <td>{{ $article->status }}</td>
            <td>{{ $article->type_id }}</td>
            <td>{{ $article->approver_id }}</td>
            </tr>
      </table>

{!! Form::model($article, ['method' => 'POST',
'action' => ['LeavehistoryController@edit', $article->id]]) !!}
<!-- @include('users.form', ['submitButtonText' => 'Edit Article']) -->

<div class="form-group">
{!! Form::label('p_taskid', 'TaskId: ') !!}
{!! Form::text('p_taskid', $article->task_id, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_status', 'Status: ') !!}
{!! Form::text('p_status', $article->status, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_typeid', 'Type:') !!}
{!! Form::text('p_typeid',$article->type_id,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_userid', 'UserId: ') !!}
{!! Form::text('p_userid', $article->user_id, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Add Article',
['class' => 'btn btn-primary form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('published_at', 'Publish on: ') !!}
{!! Form::input('date', 'published_at',
\Carbon\Carbon::now()->format('Y-m-d'),
['class'=>'form-control']) !!}
</div>

{!! Form::close() !!}
@include('errors.list')

@stop