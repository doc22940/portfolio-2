<?php
include_once 'template/template.php';
            $servername = "sql302.epizy.com";
            $username = "epiz_24755839";
            $password = "Crazyfrog909";
            $dbname = "epiz_24755839_portfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from projects where project_id=".$_GET['project_id'];
$result = mysqli_query($conn, $sql);
if(isset($_GET['project_id'])){
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $project_title=$row["project_title"];
        $project_desc=$row["project_desc"];
        $project_tag=$row["project_tag"];
        $project_mini_desc=$row["project_mini_desc"];
    }
} else {
    echo "0 results";
}
}
else{
    header('Location:404/index.php');
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
    <?php
    echo $head;
    ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151981087-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151981087-2');
</script>

</head>


<body>
    <?php 
     echo $nav;
    ?>
    <section id="hero">
        <div class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-xl-center" id="jumbo-hero"><span class="badge badge-primary" id="badge-hero">
            <?php echo $project_tag; ?>
            </span>
            <h2><?php echo $project_title; ?><br></h2>
            <p><?php echo $project_mini_desc; ?><br></p>
        </div>
    </section>
    <section id="content">
        <?php echo $project_desc; ?>
    </section>
    <?php 
        echo $footer;
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
    <?php
CloseCon($conn);
?>
</body>

</html>