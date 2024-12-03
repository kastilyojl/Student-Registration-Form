<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <link rel="stylesheet" href="../../Style/registrationForm.css">

    <style>
        .footer .note{
            font-size: 14px;
            font-style: italic;
            color: #808080;
        }
    </style>
    
</head>
<body>

    <div class="form">
        <div class="header">
            <h3>Student Profile</h3>
        </div>
        <form action="../../Database/create.php" method="post">
            <div class="row">
                <label class="required">Name</label>
                <div class="align-input">
                    <input type="text" name="lname" placeholder="Last Name">
                    <input type="text" name="fname" placeholder="First Name">
                    <input type="text" name="mname" placeholder="Middle Name" >
                </div>
            </div>
            <div>
                <label class="required">Address</label>
                <input type="text" name="address" placeholder="Enter Home Address">
            </div>
            <div class="row column">
                <div>
                    <label class="required">Place of Birth</label>
                    <input type="text" name="placebirth" placeholder="Enter Place of Birth">
                </div>
                <div>
                    <label class="required">Date of Birth</label>
                    <input type="date" name="" id="">
                </div>
            </div>
            <div class="row column">
                <div>
                    <label>Cellphone Number</label>
                    <input type="text" name="cellphone" placeholder="09123456789">
                </div>
                <div class="gender-side">
                    <label class="required">Gender</label> <br>
                    <div class="align-input">
                    <label class="radio-button">Male</label><input type="radio" name="gender" id="male" value="Male">
                    <label class="radio-button">Female</label><input type="radio" name="gender" id="female" value="Female">
                    </div>
                </div>
            </div>
            <div class="row column">
                <div>
                    <label>Religion</label>
                    <input type="text" name="religion" placeholder="Religion">
                </div>
                <div>
                    <label class="required">Civil Status</label>
                    <select name="civilstatus">
                        <option hidden>Select Civil Status</option>
                        <option value="signle">Single</option>
                        <option value="married">Married</option>
                        <option value="others">Others</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="footer">
            <div class="note">Note: Fill out required (*) field to proceed.</div>
            <div>
                <a href="../Senior High School/academicInformation.php">
                    <button onclick="progressBar(1)" class="next-button">Next</button>
                </a>
            </div>
        </div>
    </div>

    <script src="../../Javascript/registrationForm.js"></script>
    
</body>
</html>