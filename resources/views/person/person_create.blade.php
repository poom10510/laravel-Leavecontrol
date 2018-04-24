
<h1 class="page-title">Write a New Article</h1>
{!! Form::open(['url' => 'insertv']) !!}
@include('person.form', ['submitButtonText' => 'Add Article'])
{!! Form::close() !!}

