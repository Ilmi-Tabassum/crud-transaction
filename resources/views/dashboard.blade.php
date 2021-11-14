<html>
<head>
    <title>Employee Chart</title>
</head>
<body>
<div class="py-12">
    <div class="container">
        <h1>Add Emoloyee</h1>
        <form action="{{route('add')}}" method = "POST">
            @csrf
            <label for="Name">Enter Name:</label>
            <input type="text" name="name" placeholder="Enter name"><br> <br>
            <label for="Email">Enter Email:</label>
            <input type="text" name="email" placeholder="Enter email"><br> <br>
            <label for="Employee">Enter Employee:</label>
            <input type="text" name="emp" placeholder="Enter employee"><br> <br>

            <label for="Designation">Choose a Designation:</label>
            <select name="designation" id="Designation">
                <optgroup label="Sales">
                    <option value="Manager">Manager</option>
                    <option value="Director">Director</option>
                </optgroup>
                <optgroup label="Hr">
                    <option value="HR">HR</option>
                    <option value="Intern">Intern</option>
                </optgroup>
                <optgroup label="Engineer">
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Junior Software Engineer">Junior Software Engineer</option>
                    <option value="Intern">Intern</option>
                </optgroup>
            </select>

            <div class="container">
                <div class ="row">
                    <div class = "row-md-3">
                        <h3>Districts</h3>
                        <hr>
                    </div>
                </div>




            </div>

            <button type="submit">Add Member</button>




        </form>

        <div class = "row">
            <h1>Emoloyee List</h1>
            <table class="table">
                <table border="1">
                    <thead>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>Email</th>
                        <th>Employee</th>
                        <th>Designation</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $table_option = "";
                    foreach ($test as $key => $value) {
                        $table_option .= "<tr>";
                        $table_option .= "<td>$value->id</td>";
                        $table_option .= "<td>$value->name</td>";
                        $table_option .= "<td>$value->email</td>";
                        $table_option .= "<td>$value->emp</td>";
                        $table_option .= "<td>$value->designation</td>";

                        $table_option .= "<td><a href='". route('edit', $value->id) ."'>Edit</a>
                     <a href='". route('delete', $value->id) ."'>Delete</a></td>";



                        $table_option .= "</tr>";
                    }

                    echo $table_option;

                    ?>


                    </tbody>
                </table>

        </div>
    </div>
</div>

    </div>
</div>

</div>
</div>
</body>

</html>
