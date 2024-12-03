<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHS Academc Information</title>

    <link rel="stylesheet" href="../../Style/registrationForm.css">

    <style>
        #inputBox, #inputBoxESC, #inputBoxScholar{
            display: none;
        }
    </style>
   
</head>
<body>

    <div class="form">
        <div class="header">
            <h3>Academic Information</h3>
        </div>
        <form action="">
            <div class="row">
                <label class="required">Type of Student</label><br>
                <input type="radio" name="type" onclick="hideShowInputBox('hide')"><label>Old Student</label>
                <input type="radio" name="type" onclick="hideShowInputBox('show')"><label>New Student</label>
                <input id="inputBox" type="text" placeholder="Enter Previous School">
            </div>
            <div class="row">
                <label class="required">Campus</label><br>
                <input type="radio" name="campus"><label>Banlic</label>
                <input type="radio" name="campus"><label>Uno</label>
                <input type="radio" name="campus" disabled><label>Marinig</label>
                <input type="radio" name="campus" disabled><label>San Jose</label>
                <input type="radio" name="campus" disabled><label>San Mateo</label>
            </div>
            <div class="row column">
                <div>
                    <label class="required">Track/Strand</label>
                    <select name="strand">
                        <option hidden>Select Track/Strand</option>
                        <option value="stem">STEM</option>
                        <option value="stem">AMB</option>
                        <option value="stem">HUMSS</option>
                        <option value="stem">ICT</option>
                        <option value="stem">GAS</option>
                    </select>
                </div>
                <div>
                    <label>LRN</label>
                    <input type="text" name="lrn" placeholder="Enter LRN">
                </div>
            </div>
            <div class="row column">
                <div>
                    <label>Others</label><br>
                    <input type="radio" name="voucher"><label>SHS Voucer Receipient</label><br>
                    <input type="radio" name="voucher"><label>Non-Voucer Receipient / Paying</label>
                </div>
                <div class="other">
                    <br>
                    <input type="radio" onclick="hideShowInputBox('showESC')"><label>ESC Certificate</label><br>
                    <input type="text" id="inputBoxESC" placeholder="Enter ESC Certificate #">
                    <input type="radio" onclick="hideShowInputBox('showScholar')"><label>Scholar</label>
                    <input type="text" id="inputBoxScholar" placeholder="Enter Scholar Name">
                </div>
            </div>
            
        </form>
        <div class="footer">
            <a href="../General Form/studentProfile.php">
                <button class="back-button">Back</button>
            </a>
            <a href="../General Form/parentProfile.php">
                <button class="next-button" onclick="progressBar(2)">Next</button>
            </a>
        </div>
    </div>

    <script src="../../Javascript/registrationForm.js"></script>

</body>
</html>