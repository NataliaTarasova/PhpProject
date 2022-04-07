<?php

include ('header.php');

?>

<div class="container" style= 'width: 300px'>
  <form action="form.php" method="POST" novalidate>
  <label for="validationUsername" class="form-label">Name</label>
      <div>
      <input type="text" name="name" class="form-control" id="inputName" required>
      </div></br>
      <label for="inputPassword">Password</label>
      <div>
        <input type="password" name="pass" class="form-control" id="inputPassword" required>
      </div></br>
    <div class="container" style= 'width: 100px'>
    <input class="btn btn-primary" type="submit" value="Submit">
    </div>
  </form>
  </div>
  <?php

  $name = $_POST['name'];
  $pass = $_POST['pass'];

  function register($name, $pass)
  {
      $users = 'users.txt';
      $name=trim(htmlspecialchars($name));
      $pass=trim(htmlspecialchars($pass));
      
      if($name =='' || $pass =='')
      {
          echo "</br><h6><span style=color:red;> Fill All Required Fields!</span></h6>";  
          return false;
      }

      if(strlen($name) < 3 || strlen($name) > 30 || strlen($pass) < 3 || strlen($pass) > 30)
      {
          echo "<h3><span>The number of characters must be from 3 to 30!</span></h3>";
          return false;
      }

      $file=fopen($users,'a+');
          while($line=fgets($file, 128))
          {
          $readname=substr($line,0,strpos($line,':'));
          if($readname == $name)
              {
              echo "<h5/><span style='color:green;'> Ready!</span><h5/>";
              return false;
              }
                $line=$name.':'.md5($pass)."\r\n";
                fputs($file,$line);
                fclose($file);
                return true;
          }
   }

  register($name, $pass);
  ?>

  <?php

  if (register($_POST['name'],$_POST['pass']))
  {
  echo "<h5/><span style='color:green;'>New User Added!</span><h5/>";
  }

  ?>
</div>

<div class="container" style= 'width: 300px; text-align: center'><h4><a class="nav-link active" aria-current="page" href="/login.php/">Authorization</a></h4></div>

<?php

include ('footer.php');

?>