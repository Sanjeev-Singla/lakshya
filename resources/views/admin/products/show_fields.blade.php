<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $product->title }}</p>
</div>

<!-- Descritpion Field -->
<div class="form-group">
    {!! Form::label('descritpion', 'Descritpion:') !!}
    <p>{{ $product->descritpion }}</p>
</div>

<!-- Currency Field -->
<div class="form-group">
    {!! Form::label('currency', 'Currency:') !!}
    <p>{{ $product->currency }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Available Units Field -->
<div class="form-group">
    {!! Form::label('available_units', 'Available Units:') !!}
    <p>{{ $product->available_units }}</p>
</div>

<!-- Is Active Field -->
<div class="form-group">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{{ $product->is_active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $product->updated_at }}</p>
</div>

