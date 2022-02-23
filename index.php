<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login page</title>


  <style type="text/css">
    html{
      background-color: #33cccc;
    }
    #loginprompt{
      text-align: center;
      margin-top: 35%;
      border: 1px solid black;
      background-color: #ffff99;
      height: 200px;
      width: 100%;
    }
  </style>

</head>
<body>

  

  <div id="loginprompt" >
    <h1>Login to access page</h1>
    <form action="loginaction.php" name="loginpage" method="post">
      <p>Username:<input type="text" name="user" id="user" placeholder="Enter Username"></p>

      <p>Password: <input type="password" name="pass" id="pass" placeholder="Enter Password"></p>

      <input type="submit" name="submit" value="Login">
      

    </form>
  </div>

</body>
</html>