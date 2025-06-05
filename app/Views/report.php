<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Contract List</title>
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
            max-width: 1400px; /* Set to match the navbar width */
            padding: 20px;
            margin-top: 40px;
            background-color: #fff; /* Optional: for better contrast */
            border-radius: 8px; /* Optional: for rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #dadce0;
            
        }
        th, td {
            
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f1f1f1;
            
        }
        .btn-primary {
            border: 2px  #2d3a88;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            color: whitesmoke;
            background-color: #2d3a88;
            text-transform: uppercase;
            font-size: 12px;
        }
        .btn-primary:hover {
            background-color: #17298f;
        }
        .btn-danger {
            font-size: 12px;
            text-transform: uppercase;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            color: whitesmoke;
            background-color: red;
        }
        .btn-danger:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="contract" class="new">New</a>
        <a href="report" class="report">Report</a>
    </div>
    <div class="container">
        <h1>Contract List</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Date of Birth</th>
                    <th>NOC</th>
                    <th>Appointment Letter</th>
                    <th>Company</th>
                    <th></th>
                    <th></th>
                    <th>Created on</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($table as $row): ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['fathername']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td>
                        <?php if ($row['noc']): ?>
                            <a href="<?= site_url('public/contract/download/'.$row['id'].'/noc'); ?>" class="btn btn-primary">Download NOC</a>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ($row['appointment_letter']): ?>
                            <a href="<?= site_url('public/contract/download/'.$row['id'].'/appointment_letter'); ?>" class="btn btn-primary">Download Appointment Letter</a>
                        <?php endif; ?>
                    </td>
                    <td><?php echo $row['company']; ?></td>
                    <td><a href="<?= site_url('public/contract/edit/'.$row['id']); ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to update?');">Edit</a></td>
                    <td><a href="<?= site_url('public/contract/delete/'.$row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contract?');">Delete</a></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>


