<?php
include_once 'SQLPass/sqlpass.php';
include_once 'template/template.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $project_title=$_POST['title'];
    $project_desc=$_POST['content'];
    $project_tag=$_POST['tag'];
    $project_mini_desc=$_POST['miniDesc'];
    $check_value = isset($_POST['visibility']) ? 1 : 0;
    
    $sql="INSERT INTO projects(project_title, project_desc, project_tag, project_mini_desc, visibility) VALUES ('".$project_title."','".$project_desc."','".$project_tag."','".$project_mini_desc."','".$check_value."')";
    
    if (mysqli_query($conn, $sql)) {
    $msg= "New record created successfully";
    } else {
    $msg= "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

mysqli_close($conn);
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
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

</head>

<body>
    <?php
    echo $nav;
    ?>
    <div class="contact-clean">
        <form method="post" action="">
            <h2 class="text-center">Add project</h2>
            <div class="form-group"><input class="form-control" type="text" name="title" placeholder="Project title"></div>
            <div class="form-group"><input class="form-control" type="text" name="tag" placeholder="Project tag"><small class="form-text text-danger"></small></div>
            <div class="form-group"><input class="form-control" type="text" name="miniDesc" placeholder="Project mini description"><small class="form-text text-danger"></small></div>
            <textarea name="content" id="editor">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="visibility"><label class="form-check-label" for="formCheck-1">Visibility</label></div>
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit" name="submit">Add product</button></div>
        </form>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>