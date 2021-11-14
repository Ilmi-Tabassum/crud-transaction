<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-default">
        <br>
        <br>
        <br>
        <div class="panel-heading">Select District:</div>
        <div class="panel-body">
            <div class="form-group">
                <select onchange="changediv(this.options[this.selectedIndex].value)"  name="divission" class="form-control dive" style="width:350px" >
                    <option value="" selected disabled>Select</option>
                    @foreach($divission as $item)
                        <option value="{{$item->id}}"> {{$item->title}}</option>
                    @endforeach
                </select>

            </div>


        </div>
            <br>
            <br>
            <br>
            <div class="form-group">
                <label for="title">Select Thana:</label>

                    <select onchange="changeThana(this.options[this.selectedIndex].value)"  name="thana" class="form-control thana" id="th" style="width:350px" >
                        <option value="" selected disabled>Select</option>
{{--                        @foreach($thana as $item)--}}
{{--                            <option value="{{$item->id}}"> {{$item->title}}</option>--}}
{{--                        @endforeach--}}


                </select>


            </div>

            <br>
            <br>
            <br>
        <div class="form-group">
            <label for="title">Select Upazila:</label>

            <select  onchange="changeName(this.options[this.selectedIndex].value)" name="upazila" class="form-control upazila" id="upo" style="width:350px" >
                <option value="" selected disabled>Select</option>

            </select>
            </div>
        <br>
        <br>
        <br>
        <div class="form-group">
            <label for="title">Select Name:</label>

            <select  name="name" class="form-control name" id="names" style="width:350px" >
                <option value="" selected disabled>Select</option>

            </select>
        </div>
    </div>
</div>

<style>


    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
</style>

<div class="container">
    <div class="vertical-center">

{{--        <button onclick="bgChange()">Change color</button>--}}
<script>
    function changediv(id){
        $.ajax({
            url: "{{URL::TO('thana')}}"+"/"+id,
            type: "get",
            data: {},
            success: function(results){
               // alert(result);
                //console.log(result);
                results.forEach(function(result) {
                    document.getElementById("th").innerHTML += "<option value="+result.id+">" + result.title + "</option>"
/*
                    $(".thana").html( <option value=result.id> result.title</option>);
*/
                    console.log(result.title);
                });
              // $(".thana").html(result);
            }
        });
    }
///////////////
    function changeThana(id){
        $.ajax({
            url: "{{URL::TO('upazila')}}"+"/"+id,
            type: "get",
            data: {},
            success: function(result1s){
                // alert(result);
                //console.log(result);
                result1s.forEach(function(resulting) {
                    //alert(1);
                    document.getElementById("upo").innerHTML +="<option value="+resulting.id+">"  + resulting.upazila_name + "</option>"
                    /*
                                        $(".thana").html( <option value=result.id> result.title</option>);
                    */
                    console.log(resulting.upazila_name);
                });
                // $(".thana").html(result);
            }
        });
    }
    function changeName(id){
        $.ajax({
            url: "{{URL::TO('name')}}"+"/"+id,
            type: "get",
            data: {},
            success: function(result12s){
                // alert(result);
                //console.log(result);
                result12s.forEach(function(resultings) {
                    //alert(1);
                    document.getElementById("names").innerHTML += "<option value="+resultings.id+">"  + resultings.employee + "</option>"
                    /*
                                        $(".thana").html( <option value=result.id> result.title</option>);
                    */
                    console.log(resultings.employee);
                });
                // $(".thana").html(result);
            }
        });
    }

    function random(number) {
        return Math.floor(Math.random()*number);
    }

    function bgChange() {
        const rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
        document.body.style.backgroundColor = rndCol;


        $(function () {
            var divission = $('select[name="divission"]'),
                thana = $('select[name="thana"]');

          divission.change(function () {
                var id = $(this).val();


            })
        })
    }



</script>
    </div>
</div>

</body>
</html>
