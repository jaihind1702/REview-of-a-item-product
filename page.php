<?php
$connection = mysqli_connect("localhost", "root", "","assignment")or die("can't connect");
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

if($name !=''||$email !='' || $comment !=''){
//Insert Query of SQL
$query = mysqli_query($connection,"insert into review_list(Name,Email,Comment) values ('$name', '$email','$comment')");
echo "<script>window.open('index.php','_self') </script>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}

mysqli_close($connection);
?>
