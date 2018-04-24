<div class="form-group">
{!! Form::label('p_name', 'Name: ') !!}
{!! Form::text('p_name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_address', 'Address:') !!}
{!! Form::textarea('p_address',null,['class'=>'form-control']) !!}
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