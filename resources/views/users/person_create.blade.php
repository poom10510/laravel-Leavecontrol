
@extends('layouts.main')
@section('page_title', 'Hello Page')

@section('content')
<h1 class="page-title">Write a New Article</h1>
{!! Form::open(['url' => '/userinfos/inserting']) !!}
@include('users.form', ['submitButtonText' => 'Add Article'])
{!! Form::close() !!}
@include('errors.list')

@stop
