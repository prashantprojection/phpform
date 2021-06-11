<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Checkout example for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="form-validation.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <!-- PHP Code -->
        <?php  
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
$name = $email = $mobileno = $gender = $website = $agree = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (emptyempty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["firstname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (emptyempty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (emptyempty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["contact"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }  
      
    //Empty Field Validation  
    if (emptyempty ($_POST["gender"])) {  
            $genderErr = "Gender is required";  
    } else {  
            $gender = input_data($_POST["gender"]);  
    }  
  
    //Checkbox Validation  
    if (!isset($_POST['agree'])){  
            $agreeErr = "Accept terms of services before submit.";  
    } else {  
            $agree = input_data($_POST["agree"]);  
    }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?> 
<!-- End Of PHP -->
        <div class="container">
            <div class="py-5 text-center">
                <h2>Student Registration Form</h2>
                <p class="lead">Below is an example form built entirely with Bootstrap by Prashant Yadav. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3"> <span class="text-muted">Profile Picture</span> </h4>
                    <ul class="list-group mb-3">
</ul>
                    <form class="card p-2">
                        <div class="custom-file"> 
                            <input type="file" class="custom-file-input" id="custom-file1"> 
                            <label class="custom-file-label" for="custom-file1">Choose file</label>                             
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
</div>
                        </div>
                    </form>
                    <div class="form-group" style="margin-top: 29px;"> 
                        <label for="formInput217">Father&apos;s Occupation</label>
                        <input type="text" class="form-control" id="fname" required placeholder="Father's Occupation"> 
                    </div>
                    <div class="form-group" style="margin-top: 17px;"> 
                        <label for="formInput217">Mother&apos;s Occupation</label>
                        <input type="text" class="form-control" id="mname" required placeholder="Mother's Occupation"> 
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Personal Details</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
</div>
                            </div>
                            <div class="col-md-6 mb-3 mw-100">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
</div>
                            </div>
                        </div>
                        <div class="mb-3"></div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="address">Fathers&apos;s Name</label>
                                <input type="text" class="form-control" id="fname" required placeholder="Father's Name">
                                <div class="invalid-feedback">
                                    Please enter your Father's Name.
</div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Mother&apos;s Name</label>
                                <input type="text" class="form-control" id="mname" required placeholder="Mother's Name">
                                <div class="invalid-feedback">
                                    Please enter your Mother's Name.
</div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Phone Number</label>
                                <input type="text" class="form-control validate" id="contact" required placeholder="Phone Number">
                                <div class="invalid-feedback">
                                    Please enter a valid Mobile Number.
</div>
                            </div>
                            <label for="email">Email 
                                <span class="text-muted">(Optional)</span>
                            </label>
                            <input type="email" class="form-control validate" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address.
</div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="Gender">Gender</label>
                                    
                                    <div data-toggle="buttons" class="btn-group"> 
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked="">&nbsp;Male
                                        </label>                                         
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="options" id="option2" autocomplete="off">&nbsp;Female&nbsp;&nbsp;
                                        </label>                                         
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="options" id="option3" autocomplete="off">&nbsp;Other
                                        </label>                                         
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="DOB">Date of Birth</label>
                                    <input name="date" type="date" class="form-control datepicker" id="dob" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Pick your DOB.
</div>
                                </div>
                            </div>
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your address.
</div>
                        </div>
                        <div class="mb-3">
                            <label for="address2">Address 2 
                                <span class="text-muted">(Optional)</span>
                            </label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option name="country">India</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State</label>
                                <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option name="state">Uttar Pradesh</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input name="zipcode" type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
</div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="mb-3">
                            <label for="address2">Blood Group&nbsp;
                                <span class="text-muted">(Optional)</span>
                            </label>
                            <div class="dropdown"> 
                                <select class="custom-select w-auto"> 
                                    <option selected>Open this select menu</option>                                     
                                    <option name="bloodgroup" value="A">A</option>                                     
                                    <option name="bloodgroup" value="B">B</option>                                     
                                    <option name="bloodgroup" value="AB">AB</option> 
                                    <option name="bloodgroup" value="O">O</option>                                    
                                </select>
                                <select class="custom-select w-auto" style="margin-left: 16px;"> 
                                    <option selected>Open this select menu</option>                                     
                                    <option name="bloodtype" value="+">Positive(+)</option>                                     
                                    <option name="bloodtype" value="-">Negative(-)</option>                                     
                                </select>                                                             
                            </div>
                        </div>
                        
                        <hr class="mb-4">
                        <h4 class="mb-3">Department</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="bca" name="department" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="bca">BCA</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="cse" name="department" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="cse">CSE</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="eee" name="department" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="eee">EEE</label>
                            </div>
                        </div>
                        <h4 class="mb-3">Course</h4>
                        <div class="custom-control custom-checkbox">
                            <input name="course" type="checkbox" class="custom-control-input" id="c">
                            <label class="custom-control-label" for="c">C</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="course" type="checkbox" class="custom-control-input" id="c++">
                            <label class="custom-control-label" for="c++">C++</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="course" type="checkbox" class="custom-control-input" id="java">
                            <label class="custom-control-label" for="java">Java</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="course" type="checkbox" class="custom-control-input" id="ai">
                            <label class="custom-control-label" for="ai">Artificial Intelligence</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="course" type="checkbox" class="custom-control-input" id="ml">
                            <label class="custom-control-label" for="ml">Machine Leaning</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name="course" type="checkbox" class="custom-control-input" id="robot">
                            <label class="custom-control-label" for="robot">Robotics</label>
                        </div>
                        <div class="row">
</div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" data-toggle="tooltip" title="Submit Your Provided Information by Pressing the Button.">Continue to Submit</button>
                    </form>
                </div>
            </div>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2021 Prashant Yadav</p>
            </footer>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script>
    $(function() {
    $('[data-toggle="tooltip"]').tooltip();
})
</script>
    </body>
</html>
