
@extends('layouts.main')
@section('page_title', 'Hello Page')

@section('content')
<h1 class="page-title">Write a New Article</h1>
{!! Form::open(['url' => '/userslogin/inserting']) !!}
@include('login.form', ['submitButtonText' => 'Add Article'])
{!! Form::close() !!}
@include('errors.list')

@stop
