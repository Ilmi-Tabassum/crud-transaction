<!DOCTYPE html>
<html>
<head>
    <title>State Selection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<form>
    <div class="container">
        <br>
        <br>
        <div>
            <div>


            <div class="form-group">
                <label for="title">Select State:</label>
                <select name="state" id="state" class="form-control" style="width:350px">
                    @foreach($states as $item)
                        <option value="{{$item->id}}"> {{$item->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
</form>
