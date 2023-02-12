<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentsss</title>
</head>

<body>
    <div class="form-group">
        {!! Form::label('text', 'Doc No', ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-10">
        <select name="docNo" id="docNo" class="form-control" style="width:250px">
        
        @foreach ($soplists as $soplist)
        <option value="{{ $soplist->id }}">{{ $soplist->doc_no }}</option>
        @endforeach
        </select>
        </div>
        </div>
        
        
        
        <input type="hidden" name="carType" value="Internal Audit" class="form-control">
        
        <div class="form-group">
        {!! Form::label('text', "Rev No", ['class' => 'col-lg-5 control-label']) !!}
        <div class="col-lg-5">
        <input type="text" class="form-control" id="rev" />
        
        </div>
        </div>
        
        
        <div class="form-group">
        {!! Form::label('text', "Title", ['class' => 'col-lg-5 control-label']) !!}
        <div class="col-lg-10">
        <input type="text" class="form-control" id="title" />
        
        </div>
</body>

</html>