
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body><div class="back">
    <form class="form" action="validation.php" method="post">
    <div class="col-md-6">
        <label>First Name</label>
        <input  type="text" name="fname">
    </div>
    <div class="col-md-6">
        <label>Last Name</label>
        <input type="text" name="lname">
    </div>
  
        <div >
            <label class="gender">Gender</label>
            <input class="ff" class="form-check-input" type="radio" name="gender" >
            <label class="form-check-label">Male</label>
            <input class="ff" class="form-check-input" type="radio" name="gender" >
            <label class="form-check-label">female</label>
        </div>

        <select class="form-select" aria-label="Default select example">
           <label>City</label>
    
            <option selected>City</option>
            <option value="1">Cairo</option>
            <option value="2">Giza</option>
            <option value="3">Other</option>
         </select>
     <div class="col-md-6">
         <label>Address</label>
        <input type="text" name="add">
        </div>
     <div class="col-md-6">
        <label>Birthdate</label>
        <input type="date" name="birth"> 
        </div>
    <div class="col-md-6">
         <label>Email Address</label>
        <input type="email" name="email">
    </div>
     <div class="col-md-6">
        <label>Phone Number</label>
        <input type="tel" name="number">
        </div>
     <div class="col-md-6">
         <label>Password</label>
        <input type="password" name="pass">
        </div>
     <div class="col-md-6">
         <label>Confirm Password</label>
        <input type="password" name="cpass">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Agreed to terms and conditions
            </label>
        </div>
        <input class="sub" type="submit" placeholder="submit">
    </form>
    </div>
</body>
</html>