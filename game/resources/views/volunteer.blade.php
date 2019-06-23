<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<h1>Volunteer</h1>
<div class="container">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="volemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        </div>
        <div class="form-group">
            <label for="volname"> Name</label>
            <input type="text"  name="volname" class="form-control" id="volname" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="volid"> ID</label>
            <input type="text" name="volid" class="form-control" id="volid" placeholder="Enter  ID">
        </div>

        <div class="form-group">
            <label for="mobilenumber">Mobile Number</label>
            <input type="text" name="mobilenumber" class="form-control" id="mobilenumber" placeholder="Enter Mobile">
        </div>

        <div class="form-group">
            <label for="volrole">Role</label>
            <input type="text" name="volrole" class="form-control" id="volrole" placeholder="Enter Role">
        </div>
        <div class="form-group">
            <label for="playeraddress">Address</label>
            <input type="text" name="voladdress" class="form-control" id="voladdress" placeholder="Enter Address">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>