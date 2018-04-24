@extends('layouts.main')
@section('page_title', 'Hello Page')

@section('content')

<h1 class="page-title">Edit a Article</h1>
<table border = "1">
         <tr>
            <td>ID</td>
            <td>Userid</td>
            <td>Responsibility</td>
            <td>Period</td>
            <td>Substituteid</td>
         </tr>
         <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->user_id }}</td>
            <td>{{ $article->responsibility }}</td>
            <td>{{ $article->period }}</td>
            <td>{{ $article->substitute_id }}</td>
         </tr>
      </table>
{!! Form::model($article, ['method' => 'POST',
'action' => ['TaskController@edit', $article->id]]) !!}
<!-- @include('users.form', ['submitButtonText' => 'Edit Article']) -->

<div class="form-group">
{!! Form::label('p_responsibility', 'Responsibility: ') !!}
{!! Form::text('p_responsibility', $article->responsibility, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_substituteid', 'Substituteid: ') !!}
{!! Form::text('p_substituteid', $article->substitute_id, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_period', 'Period: ') !!}
{!! Form::input('date', 'p_period',
\Carbon\Carbon::now()->format('Y-m-d'),
['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_userid', 'Userid: ') !!}
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