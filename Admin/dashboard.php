<?php
include_once 'SQLPass/sqlpass.php';
include_once 'template/template.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <?php
    echo $nav;
    ?>
    <section id="dashboard" style="padding: 10px 80px ;"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Project ID</th>
                <th>Project Title</th>
                <th>Project Visibility</th>
                <th>Project tag</th>
                <th>Edit Project</th>
                <th>Delete Project</th>
            </tr>
        </thead>
        <tbody>
            
            <?php

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT * from projects";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $project_id=$row["project_id"];
                    $project_title=$row["project_title"];
                    $project_desc=$row["project_desc"];
                    $project_tag=$row["project_tag"];
                    $project_mini_desc=$row["project_mini_desc"];
                    $visibility=$row["visibility"];
                    
                    echo <<<PRJ
                    <tr>
                    <td>$project_id</td>
                    <td>$project_title</td>
                    <td>$visibility</td>
                    <td>$project_tag</td>
                    <td><button class="btn btn-primary" type="button" onclick="location.href='editProduct.php?project_id=$project_id'">Edit Project</button></td>
                    <td><button class="btn btn-danger" type="button" onclick="location.href='deleteProduct.php?project_id=$project_id'">Delete Project</button></td>
                    </tr>
                    PRJ;
                    
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);

            ?>
            
        </tbody>
    </table></section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>