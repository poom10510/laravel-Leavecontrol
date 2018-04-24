<div class="form-group">
{!! Form::label('p_responsibility', 'Responsibility: ') !!}
{!! Form::text('p_responsibility', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_substituteid', 'Substituteid: ') !!}
{!! Form::text('p_substituteid', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_period', 'Period: ') !!}
{!! Form::input('date', 'p_period',
\Carbon\Carbon::now()->format('Y-m-d'),
['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_userid', 'Userid: ') !!}
{!! Form::text('p_userid', null, ['class'=>'form-control']) !!}
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