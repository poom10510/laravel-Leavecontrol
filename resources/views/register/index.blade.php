@extends('layouts.main')
@section('page_title', 'Hello Page')

@section('content')
<h1 class="page-title">Write a New User</h1>
{!! Form::open(['url' => '/register/inserting']) !!}
@include('register.form', ['submitButtonText' => 'Add Article'])
{!! Form::close() !!}
@include('errors.list')

@stop