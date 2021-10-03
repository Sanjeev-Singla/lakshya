<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'minlength' => 3]) !!}
</div>

<!-- Descritpion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritpion', 'Descritpion:') !!}
    {!! Form::textarea('descritpion', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency', 'Currency:') !!}
    {!! Form::select('currency', ['USD' => 'USD'], null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Available Units Field -->
<div class="form-group col-sm-6">
    {!! Form::label('available_units', 'Available Units:') !!}
    {!! Form::number('available_units', null, ['class' => 'form-control']) !!}
</div>

{{-- Is Active --}}
<div class="form-group col-sm-6">
    {!! Form::label('is_active', 'Active:') !!}
    {!! Form::checkbox('is_active',1,null,['class'=>'form-check']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
</div>
