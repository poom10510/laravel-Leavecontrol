@extends('layouts.main')
@section('page_title', 'Hello Page')

@section('content')

<h1 class="page-title">Edit a Article</h1>
<table border = "1">
         <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Userid</td>
         </tr>
         <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->username }}</td>
            <td>{{ $article->password }}</td>
            <td>{{ $article->user_id }}</td>
         </tr>
      </table>
{!! Form::model($article, ['method' => 'POST',
'action' => ['LoginController@edit', $article->id]]) !!}
<!-- @include('users.form', ['submitButtonText' => 'Edit Article']) -->

<div class="form-group">
{!! Form::label('p_username', 'Username: ') !!}
{!! Form::hidden('p_username', $article->username, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_password', 'Password: ') !!}
{!! Form::input('password','p_password', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_conpassword', 'Confirm Password: ') !!}
{!! Form::input('password','p_conpassword', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_userid', 'User:') !!}
{!! Form::hidden('p_userid',$article->user_id,['class'=>'form-control']) !!}
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