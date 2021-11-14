<h1>Update Member</h1>
<form action = "/update" method="POST">
    @csrf
    <input type="hidden" name = "id" value="{{$data->id}}">
    <input type="text" name ="name" value="{{$data->name}}" placeholder="Enter name"><br> <br>
   <input type ="email" name="email"value="{{$data->email}}"  placeholder="Enter email"><br> <br>

    <input type ="text" name="designation"value="{{$data->designation}}"  placeholder="Enter designation"><br> <br>
     <button type = "submit">Update </button>






</form>
