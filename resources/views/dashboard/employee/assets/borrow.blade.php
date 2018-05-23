<head>
    <title>Request Item</title>
</head>
<body>
{{ Form::open(['url'=>'employee/borrow', 'role' =>'form'])  }}
@csrf
<div class="box-body">
    <div class="row">
        <h3 class="box-title">Request Asset</h3>
        <div class="col-md-4">
            <label>Category:</label><br />
            <select name="category" id="category" class="demoInputBox">
                <option value="">Select Category</option>
                @foreach($assets as $asset)
                    {{ $asset->county_code }}
                    <option value="{{$asset->name}}">{{$asset->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('itemName','Item Name')  }}
                {{ Form::text('itemName',old('itemName'), ['class'=>'form-control']) }}
                @if($errors->has('itemName'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('itemName') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label>Urgency:</label><br />
                <select name="urgency" class="dropdown">
                    <option value="">Select Urgency Level</option>
                    <option value="very usrgent">Very Urgent</option>
                    <option value="Urgent">Urgent</option>
                    <option value="Not Urgent">Not Urgent</option>
                </select>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">
            Request Asset
        </button>
    </div>
</div>

{{ Form::close() }}
</body>
