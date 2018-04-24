<div class="form-group">
{!! Form::label('p_taskid', 'TaskId: ') !!}
{!! Form::text('p_taskid', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_status', 'Status: ') !!}
{!! Form::text('p_status', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_typeid', 'Type:') !!}
{!! Form::text('p_typeid',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('p_userid', 'UserId: ') !!}
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