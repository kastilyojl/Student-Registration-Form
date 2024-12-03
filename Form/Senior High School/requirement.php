<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Style/registrationForm.css">

    <style> 
        .requirements {
            padding: 20px;
        }

        p {
            height: 30px;
        }
    </style>

</head>
    <body>

        <div class="form">
            <div class="header">
                <h3>Requirements</h3>
            </div>
            <form action="">
                <div class="row column">
                    <div>
                        <label>Form 138 (JHS/SHS Card)</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                    <div>
                        <label>Transcript of Record (TCR) or F137</label>
                        <input type="file" name="image" accept="image/*" disabled>
                    </div>
                </div>
                <div class="row column">
                    <div>
                        <label>ESC Certificate (if applicable)</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                    <div>
                        <label>Certificate of Good Moral</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                </div>
                <div class="row column">
                    <div>
                        <label>G10 Certificate of Recognition</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                    <div>
                        <label>Honorable Dismissal</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                </div>
                <div class="row column">
                    <div>
                        <label>Birth Certificate</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                    <div>
                        <label>2x2 Picture</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                </div>
                
            </form>
            <div class="footer">
                <a href="../General Form/educationBackground.php">
                    <button class="back-button">Back</button>
                </a>
                <form action="../../Database/create.php" method="post">
                    <a href="#">
                        <button class="next-button" id="submit-button" name="create">Submit</button>
                    </a>
                </form>
            </div>
        </div>

        <script src="../../Javascript/registrationForm.js"></script>        
        
    </body>
</html>