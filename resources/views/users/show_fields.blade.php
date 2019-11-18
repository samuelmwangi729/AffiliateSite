<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Refered By Field -->
<div class="form-group">
    {!! Form::label('refered_by', 'Refered By:') !!}
    <p>{!! $user->refered_by !!}</p>
</div>

<!-- No Of Refs Field -->
<div class="form-group">
    {!! Form::label('no_of_refs', 'No Of Refs:') !!}
    <p>{!! $user->no_of_refs !!}</p>
</div>

<!-- Ref Level Id Field -->
<div class="form-group">
    {!! Form::label('ref_level_id', 'Ref Level Id:') !!}
    <p>{!! $user->ref_level_id !!}</p>
</div>