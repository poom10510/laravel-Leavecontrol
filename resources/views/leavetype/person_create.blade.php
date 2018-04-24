
@extends('layouts.main')
@section('page_title', 'Hello Page')

@section('content')
<h1 class="page-title">Write a New leavetype</h1>
{!! Form::open(['url' => '/leavetype/inserting']) !!}
@include('leavetype.form', ['submitButtonText' => 'Add Article'])
{!! Form::close() !!}
@include('errors.list')

@stop
