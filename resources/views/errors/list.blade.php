
@if($errors->any())
<ul class="alert alert-danger">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

@if(!empty($texterror))
<ul class="alert alert-danger">
@foreach($texterror as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif