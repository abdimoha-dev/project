<head>
    <title>Assign inventory</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
{{ Form::open(['url'=>'admin/assign/{userId}', 'role' =>'form'])  }}
@csrf
<div class="box-body">
    <div class="row">
        <h3 class="box-title">Assignment Details</h3>

        <div class="col-md-4">
            <label>Category:</label><br />
            <select name="category" class="demoInputBox">
                <option value="">Select Category</option>
                @foreach($assets as $asset)
                    {{--{{ $asset->county_code }}--}}
                    <option value="{{$asset->categoryId}}">{{$asset->categoryId}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label>Item:</label><br />
            <select name="itemName" class="dropdown-menu">
                <option value="">Select Item</option>
                @foreach($assets as $asset)
                    {{ $asset->name }}
                    <option value="{{$asset->name}}">{{$asset->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('brand','Brand')  }}
                {{ Form::text('brand',old('brand'), ['class'=>'form-control']) }}
                @if($errors->has('brand'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('brand') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('duration','Duration')  }}
                {{ Form::text('duration',old('duration'), ['class'=>'form-control']) }}
                @if($errors->has('duration'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('duration') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('serialNumber','Serial Number')  }}
                {{ Form::text('serialNumber',old('serialNumber'), ['class'=>'form-control']) }}
                @if($errors->has('serialNumber'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('serialNumber') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('quantity','Quantity')  }}
                {{ Form::text('quantity',old('quantity'), ['class'=>'form-control']) }}
                @if($errors->has('quantity'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('quantity') }}
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

{{ Form::close() }}
</body>
