<!DOCTYPE html>
<html>
  <head>
    <title>Insert Info and Display Info</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
      .main-block .left-part .btn{
      outline: 0;
      text-decoration: none;
      padding: 15px 30px;
      background-color: #26a9e0;
      text-transform: uppercase;
      letter-spacing: 1px;
      border-radius: 6px;
      font-family: Roboto, Arial, sans-serif;
      font-weight: 500;
      color: #fff;
      transition: all .2s linear;
      line-height: 60px;
      width: 100%;
      }
      .main-block .left-part .btn:hover{
        background-color: #546de5;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        
        <h1>Welcome To Tejgaon College</h1>
        <a href="show.php" class="btn">Show Information</a>
      </div>
      <form action="insert.php" method="POST">
        <div class="title"> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Enter Your Name">
          <input type="text" name="email" placeholder="Enter Your Email Address">
          <input type="text" name="mobile" placeholder="Enter Your Mobile Number">
          <input type="password" name="password" placeholder="Enter Password">
          <input type="text" name="department" placeholder="Enter Your Department Name">
        </div>
        <button type="submit" style="cursor: pointer;" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>