<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <title>Student | Payments</title>
</head>

<body>
  <div class="container h-100">
    <div class="row">
      <div class="col-12">
        <div class="card shadow rounded-0 border-0 my-4 p-2">
          <div class="d-flex">
            <div class="dropdown">
              <div class="btn text-primary border-0 rounded-0 font-weight-bold">
                Dashboard
              </div>
              <div class="dropdown-content shadow rounded-0 border-0" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="../index.php">Student Details</a>
                <a class="dropdown-item" href="test-marks.php">Test Marks</a>
                <a class="dropdown-item font-weight-bold" href="#">Payments</a>
              </div>
            </div>
            <a class="btn text-primary border-0 rounded-0" href="../registrations.php">Registration</a>
            <a class="btn text-primary border-0 rounded-0" href="../sms-services.php">SMS Service</a>
            <a class="btn text-danger border-0 rounded-0 ml-auto" href="../login.php">Sign Out</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form class="form-inline">
          <h5 class="mr-2 font-weight-bold mb-0">Payments</h5>
          <select class="custom-select my-1 ml-auto rounded-0 w-25" id="inlineFormCustomSelectPref">
            <option selected>Subject</option>
            <option value="1">Science</option>
            <option value="2">Mathematics</option>
            <option value="3">English</option>
          </select>
          <select class="custom-select my-1 mx-2 rounded-0 w-25" id="inlineFormCustomSelectPref">
            <option selected>Year</option>
            <option value="1">2021</option>
            <option value="2">2020</option>
            <option value="3">2019</option>
          </select>

          <input type="text" class="form-control my-1 rounded-0 w-25" id="inlineFormInputName2" placeholder="Search">

          <button type="submit" class="btn btn-dark rounded-0 border-0 my-1 ml-2">Submit</button>
        </form>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Contact No</th>
              <th scope="col">Month</th>
              <th scope="col">Payment Status</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Name 01</td>
              <td>0123456789</td>
              <td>
                <select class="custom-select rounded-0" id="inlineFormCustomSelectPref">
                  <option selected>Month</option>
                  <option value="1">June</option>
                  <option value="2" selected>July</option>
                  <option value="3">August</option>
                </select>
              </td>
              <td><span class="text-success font-weight-bold">Paid</span></td>
              <td><span class="text-success font-weight-bold">SMS Sent</span></td>
            </tr>
            <tr>
              <td>Name 02</td>
              <td>0123456789</td>
              <td>
                <select class="custom-select rounded-0" id="inlineFormCustomSelectPref">
                  <option value="1">June</option>
                  <option value="2" selected>July</option>
                  <option value="3">August</option>
                </select>
              </td>
              <td><span class="text-success font-weight-bold">Paid</span></td>
              <td><span class="text-success font-weight-bold">SMS Sent</span></td>
            </tr>
            <tr>
              <td>Name 03</td>
              <td>0123456789</td>
              <td>
                <select class="custom-select rounded-0" id="inlineFormCustomSelectPref">
                  <option value="1">June</option>
                  <option value="2">July</option>
                  <option value="3" selected>August</option>
                </select>
              </td>
              <td><button class="btn btn-primary btn-sm rounded-0 px-4">Pay</button></td>
              <td><button class="btn btn-dark btn-sm rounded-0">Send SMS</button></td>
            </tr>
            <tr>
              <td>Name 04</td>
              <td>0123456789</td>
              <td>
                <select class="custom-select rounded-0" id="inlineFormCustomSelectPref">
                  <option value="1">June</option>
                  <option value="2">July</option>
                  <option value="3" selected>August</option>
                </select>
              </td>
              <td><button class="btn btn-primary btn-sm rounded-0 px-4">Pay</button></td>
              <td><button class="btn btn-dark btn-sm rounded-0">Send SMS</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>