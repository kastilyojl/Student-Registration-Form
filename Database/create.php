<?php

    require('./connection.php');
    if(isset($_POST['created'])) {
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $address = $_POST['address'];
        $birthplace = $_POST['placebirth'];
        $cellphone = $_POST['cellphone'];
        $gender = $_POST['gender'];
        $religion = $_POST['religion'];
        $civil = $_POST['civilstatus'];
    
    $queryCreate = "INSERT INTO d_studinfo(reg_no, stud_no, lastname, firstname, middlename, home_address, p_num, gender, religion, civil_status) 
    VALUES ('','','$lname', '$fname', '$mname', '$address', '$cellphone', '$gender', '$religion', '$civil')";	
    $sqlCreate = mysqli_query($connection, $queryCreate);

    echo '<script>alert("Sucessfully created!")</script>';
    }

?>