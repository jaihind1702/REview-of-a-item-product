<?php
$connection = mysqli_connect("localhost", "root", "","assignment")or die("can't connect");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$result = mysqli_query($connection,"SELECT Name, Email, Comment FROM review_list");
?>



<html>
<head>
    <title> Review </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

    <body>

    <div class="box">
            <form action="page.php" method="post"  >
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name">
            <p>Email</p>
            <input type="Email" name="email" placeholder="Enter Email">
            <p>Comments:</p>
            <textarea cols="25" name="comment" placeholder="Enter ....." rows="5"></textarea><br><br>
            <input class="submit" name="submit" type="submit" value="Submit">
            </form>
             <br><br><br>
            <div class="msg" >
              <table>
                <?php
                  if (mysqli_num_rows($result) > 0) {
                  ?>
                  <table>
                    <?php
                    while($row = mysqli_fetch_array($result)) {
                      ?>
                  <tr>
                  <div class="panel with panel-primary class" style="width:500px;">
                  <div class="panel-heading">By <b> <a> <?php echo $row["Name"];?> </b> </a> <br>Email :- <i><a><?php echo $row["Email"];?></i></a></div>
                  <div class="panel-body"  ><h5> <?php echo $row["Comment"];?></h5></div>
                  </div>
                    </tr>
                    <?php
                  }
                  ?>
                </table>
            </div>
    </div>
</body>
</html><?php
}?>
