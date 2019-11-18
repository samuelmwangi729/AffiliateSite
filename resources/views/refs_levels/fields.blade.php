<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Reward Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reward', 'Reward:') !!}
    {!! Form::text('reward', null, ['class' => 'form-control']) !!}
</div>

<!-- Congraturatorymessage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CongraturatoryMessage', 'Congraturatorymessage:') !!}
    {!! Form::text('CongraturatoryMessage', null, ['class' => 'form-control']) !!}
</div>

<!-- Targetrefferals Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TargetRefferals', 'Targetrefferals:') !!}
    {!! Form::text('TargetRefferals', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Per Referal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target_per_referal', 'Target Per Referal:') !!}
    {!! Form::text('target_per_referal', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('refsLevels.index') !!}" class="btn btn-default">Cancel</a>
</div>
