<?php
include 'dbconnect.php';

// $student_name = $_REQUEST['student_name'];
// if(isset($_POST['register']))
// {
$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$nic = $_POST['nic'];
$year = $_POST['year'];

    $sql = "INSERT INTO student (name, address, contact, nic, year) VALUES ('$name', '$address', '$contact', '$nic','$year')";
// }
if(mysqli_query($mysqli, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>Student | Registrations</title>
</head>

<body>
    <div class="container h-100">
        <div class="row">
            <div class="col-12">
                <div class="card shadow rounded-0 border-0 my-4 p-2">
                    <div class="d-flex">
                        <div class="dropdown">
                            <div class="btn text-primary border-0 rounded-0">
                                Dashboard
                            </div>
                            <div class="dropdown-content shadow rounded-0 border-0"
                                aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="index.php">Student Details</a>
                                <a class="dropdown-item" href="dashboard/test-marks.php">Test Marks</a>
                                <a class="dropdown-item" href="dashboard/payments.php">Payments</a>
                            </div>
                        </div>
                        <a class="btn text-primary border-0 rounded-0 font-weight-bold" href="#">Registration</a>
                        <a class="btn text-primary border-0 rounded-0" href="sms-services.php">SMS Service</a>
                        <a class="btn text-danger border-0 rounded-0 ml-auto" href="login.php">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow rounded-0 border-0 p-4">
                    <form action="registrations.php" method="post">
                        <h5 class="mr-2 font-weight-bold mb-0 mb-4">Registration</h5>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Student Name</label>
                                <input type="text" class="form-control rounded-0" name="name" id="name"
                                    placeholder="Student Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">NIC</label>
                                <input type="text" class="form-control rounded-0" name="nic" id="inputPassword4" placeholder="NIC">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Year</label>
                                <input type="text" class="form-control rounded-0" name="year" id="inputPassword4" placeholder="Year">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control rounded-0" name="address" id="inputAddress"
                                placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputContactNumber">Contact Number</label>
                            <input type="text" class="form-control" name="contact" id="inputContactNumber">
                        </div>
                        <div class="form-group">
                            <label for="inputParentname">Parent Name</label>
                            <input type="text" class="form-control rounded-0" id="inputParentname">
                        </div>
                        <div class="form-group">
                            <label for="inputParentContact">Parent's Contact Number</label>
                            <input type="text" class="form-control rounded-0" id="inputParentContact">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputSubj1">Subject 1</label>
                                <input type="text" class="form-control rounded-0" id="inputSubj1">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputSubj2">Subject 2</label>
                                <input type="text" class="form-control rounded-0" id="inputSubj2">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputSubj3">Subject 3</label>
                                <input type="text" class="form-control rounded-0" id="inputSubj3">
                            </div>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary rounded-0">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>