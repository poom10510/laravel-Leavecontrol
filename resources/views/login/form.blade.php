<div class="form-group">
{!! Form::label('p_username', 'Username: ') !!}
{!! Form::text('p_username', null, ['class'=>'form-control']) !!}
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
{!! Form::text('p_userid',null,['class'=>'form-control']) !!}
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