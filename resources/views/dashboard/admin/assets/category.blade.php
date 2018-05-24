@extends('layouts.app')
@section('content')
{{ Form::open(['url'=>'admin/categories', 'role' =>'form'])  }}
@csrf
<div class="box-body">
    <div class="row">
        <h3 class="box-title">Add Categories</h3>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('name','Name')  }}
                {{ Form::text('name',old('name'), ['class'=>'form-control']) }}
                @if($errors->has('name'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('name') }}
                    </p>
                @endif
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">
            Add Item
        </button>
    </div>
</div>

{{ Form::close() }} @endsection

