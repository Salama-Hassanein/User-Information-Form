<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Registration Form</h1>
        <form action="welcome.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName"
                        placeholder="Enter first name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name"
                        required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter address" rows="3"
                    required></textarea>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <select class="form-control" id="country" name="country" required>
                    <option value="">Select Country</option>
                    <option value="EGYPT">EGYPT</option>
                    <option value="RUSSIA">RUSSIA</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="UK">UK</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                    <label class="form-check-label" for="other">
                        Other
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="skills">Skills:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="skills[]" id="php" value="php">
                    <label class="form-check-label" for="php">
                        PHP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="skills[]" id="python" value="python">
                    <label class="form-check-label" for="python">
                        Python
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="skills[]" id="javascript" value="javascript">
                    <label class="form-check-label" for="javascript">
                        JavaScript
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="skills[]" id="css" value="css">
                    <label class="form-check-label" for="css">
                        CSS
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter password" required>
                </div>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <select class="form-control" id="department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="Sales">Sales</option>
                    <option value="Marketing">Marketing</option>
                    <option value="IT">IT</option>
                    <option value="HR">HR</option>
                </select>
            </div>
            <div class="form-group">
                <label for="human">Are you human?</label>
                <input type="text" class="form-control" id="human" name="human" placeholder="Enter code here" required>
                <small class="form-text text-muted">Please enter the code shown above to prove that you're a
                    human.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>

</body>

</html>