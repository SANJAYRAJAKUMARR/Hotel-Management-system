<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Contact US Form with Database and Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
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
body {
  background-image: url('contact.jpg');
  background-repeat: no-repeat;
 background-attachment: fixed;
  background-size: cover;
}
</style>
<body>

<ul>
  <li><a href="login-extract.php">Home</a></li>
  <li><a href="news.html">News</a></li>
  <li><a href="contact-us.php">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>ENTER UR QUERIES</h2>
            </div>
           
            <form action="store-contact-us.php" method="post">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required="">
                </div>                        


                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <input type="text" name="message" class="form-control" required="">
                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </form>
        </div>
    </div>        
</div>

</body>
</html>