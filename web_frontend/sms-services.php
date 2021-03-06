<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>Student | Send SMS</title>
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
                        <div class="dropdown-content shadow rounded-0 border-0" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="index.php">Student Details</a>
                            <a class="dropdown-item" href="dashboard/test-marks.php">Test Marks</a>
                            <a class="dropdown-item" href="dashboard/payments.php">Payments</a>
                        </div>
                    </div>
                    <a class="btn text-primary border-0 rounded-0" href="registrations.php">Registration</a>
                    <a class="btn text-primary border-0 rounded-0 font-weight-bold" href="#">SMS Service</a>
                    <a class="btn text-danger border-0 rounded-0 ml-auto" href="login.php">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow rounded-0 border-0 p-4">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSubject">Subject</label>
                            <select id="inputSubject" class="form-control rounded-0">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputYear">Year</label>
                            <select id="inputYear" class="form-control rounded-0">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea id="w3review" name="w3review" rows="4" cols="50" class="rounded-0 w-100"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-0 mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<style>
    .form-group textarea {
        display: block;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>
</html>

