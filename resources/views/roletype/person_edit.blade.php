@extends('layouts.main')
@section('page_title', 'Hello Page')

@section('content')

<h1 class="page-title">Edit a Article</h1>
<table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->name }}</td>
         </tr>
      </table>
{!! Form::model($article, ['method' => 'POST',
'action' => ['RoletypeController@edit', $article->id]]) !!}
<!-- @include('users.form', ['submitButtonText' => 'Edit Article']) -->

<div class="form-group">
{!! Form::label('p_name', 'Name: ') !!}
{!! Form::text('p_name', $article->name, ['class'=>'form-control']) !!}
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