<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Contract</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f6f7fb;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .navbar {
            width: 100%;
            background-color: #2d3a88;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 16px;
        }
        .navbar a.new {
            margin-left: 3cm;
        }
        .navbar a.report {
            margin-left: 3cm;
        }
        .navbar a:hover {
            background-color: #1c2c8b;
        }
        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #202124;
        }
        .con {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 100%;
        }
        .input {
            margin-bottom: 25px;
        }
        .input-group {
            display: flex;
            justify-content: space-between;
        }
        .input-group .input {
            flex: 1;
            margin-right: 10px;
        }
        .input-group .input:last-child {
            margin-right: 0;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #202124;
            font-size: 14px;
            font-weight: 500;
        }
        .required::after {
            content: ' *';
            color: red;
            margin-left: 5px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: block;
            border: 1px solid #dadce0;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input:focus, select:focus {
            border-color: #4285f4;
            outline: none;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        .btn-group {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .btn {
            width: 100%;
            background-color: #2d3a88;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        .btn:hover {
            background-color:   #17298f;
        }
        .reset-btn {
            background-color: white;
            color: #2d3a88;
            border: 2px solid  #2d3a88;
        }
        .reset-btn:hover {
            background-color:  #dcdde1;
        }
        .hidden {
            display: none;
        }
        .no-border {
            border: none;
        }
    </style>
    <script>
        function validateForm() {
            var dob = new Date(document.getElementById('dob').value);
            var today = new Date();
            var age = today.getFullYear() - dob.getFullYear();
            var monthDifference = today.getMonth() - dob.getMonth();
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            if (age < 18) {
                alert("Date of Birth indicates age less than 18.");
                return false;
            }
            return true;
        }

        function resetForm() {
            if (confirm("Are you sure you want to reset the form?")) {
                document.getElementById("contractForm").reset();
            }
        }
    </script>
</head>
<body>
    <div class="navbar">
        <a href="contract" class="new">New</a>
        <a href="report" class="report">Report</a>
    </div>
    <div class="container">
        <h1>New Contract</h1>
        <div class="con">
            <form id="contractForm" method="post" enctype="multipart/form-data" action="<?= site_url('public/contract'); ?>" onsubmit="return validateForm()">
                <div class="input-group">
                    <div class="input">
                        <label for="firstname" class="required">First Name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="" pattern="[A-Za-z]+" required>
                    </div>
                    <div class="input">
                        <label for="lastname" class="required">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="" pattern="[A-Za-z]+" >
                    </div>
                </div>
                <div class="input">
                    <label for="fathername" class="required">Father Name</label>
                    <input type="text" id="fathername" name="fathername" placeholder=""  required>
                </div>
                <div class="input">
                    <label for="email" class="required">Email</label>
                    <input type="email" id="email" name="email" placeholder="" required>
                </div>
                <div class="input">
                    <label for="dob" class="required">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="input">
                    <label for="phone" class="required">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="" pattern="\d{10}" maxlength="10" required>
                </div>
                <div class="input">
                    <label for="company">Company</label>
                    <input type="text" id="company" name="company" placeholder="">
                </div>
                <div class="input-group">
                    <div class="input">
                        <label for="validfrom" class="required">Valid From</label>
                        <input type="date" id="validfrom" name="validfrom" required>
                    </div>
                    <div class="input">
                        <label for="validto">Valid To</label>
                        <input type="date" id="validto" name="validto">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input no-border">
                        <label for="noc">NOC PDF</label>
                        <input type="file" id="noc" name="noc" accept="application/jpg">
                    </div>
                    <div class="input no-border">
                        <label for="appointment_letter">Appointment Letter PDF</label>
                        <input  type="file" id="appointment_letter" name="appointment_letter" accept="application/jpg">
                    </div>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn">Submit</button>
                    <button type="button" class="btn reset-btn" onclick="resetForm()">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>