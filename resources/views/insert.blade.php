<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('employee')}}" method="POST">
            @csrf 
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter Name">
                </div>
                <br>
                <div class="form-group">
                    <label>Address</label>
                    <input name="address" type="text" class="form-control" placeholder="Enter Address">
                </div>
                <br>
                <div class="form-group">
                <label for="gender">Choose a Gender:</label>

                        <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select> 
                </div>
                <br>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
</body>
</html>