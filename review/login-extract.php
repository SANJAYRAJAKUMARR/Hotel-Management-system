<!DOCTYPE html>
<html>
<head>
<title>ABC HOTEL</title>
<link rel="shortcut icon" href="image1.png" type="image/png">
<?php



if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$username, $password, $gender, $email, $phoneCode, $phone);
                if ($stmt->execute()) {
                    //echo nl2br("New Register \n  WELCOME");
                   
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                //echo nl2br("OLD REGISTER \n WELCOME");
             
            }
            $stmt->close();
            $conn->close();


        }
    }
    else {
        //echo "All field are required.";
        die();
    }
}
else {
    //echo "Submit button is not set";
}
?>


<style>
div.red-border{
font-size:40px;
}
span{
color:#04AA6D;
font-size:45px;
}
.active {
  background-color: #04AA6D;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: red;
}
marquee{
      font-size: 30px;
      font-weight: 800;
      color: #8ebf42;
      font-family: sans-serif;
      }
</style>
</head>
<body>
<marquee>House of Exclusive Indian Foods!</marquee>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="news.html">News</a></li>
  <li><a href="contact-us.php">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>

<img src="veg&nonveg.jpg" width="500" style='float: right; margin: 30px; border: 2px solid black; box-shadow: 0 0 5px;'>
<div class="red-border">
<br><br>ABC Restaurant is serving all kinds of foods<br>
including both <span>veg & non-veg</span><br>
</div>
</body>
</html>




