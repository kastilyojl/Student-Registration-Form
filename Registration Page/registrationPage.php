<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="../Style/registrationPage.css">

</head>
<body>

    <div class="container">
        <div class="header">
            <div>
                <img id="logo" src="../Images/WITI-icon.png" alt="">
                <h3>WITI</h3>
            </div>
            <div>
                <h4 class="need-help">Need Help</h4>
                <span class="help-icon">?</span>
            </div>
        </div>
        <div class="form">
            <div class="left-side">
                <div class="title">
                    <h3>Registration Form</h3>
                    <p>Fill out the form for registration</p>
                </div>
                <div class="list-container">
                    <div class="list" id="student-profile">Student Profile</div>
                    <div class="list" id="academic-info">Academic Information</div>
                    <div class="list" id="parent-info">Parents Profile</div>
                    <div class="list" id="edu-bg">Education Background</div>
                    <div class="list" id="requirements">Requirements</div>
                </div>
            </div>
            <div class="right-side">
                <iframe src="../Form/General Form/studentProfile.php" frameborder="0" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>

    <script src="./Registration-page.js"></script>

</body>
</html>