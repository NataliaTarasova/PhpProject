
<div class="container" style= 'width: 300px'>
  <form action="login.php" method="POST" novalidate>
    <label for="validationUsername" class="form-label">Name</label>
      <div>
      <input type="text" name="name" class="form-control" id="inputName" required>
      </div></br>
      <label for="inputPassword">Password</label>
      <div >
        <input type="password" name="pass" class="form-control" id="inputPassword" required>
      </div>
    </div></br>
    <div class="container" style= 'width: 100px'>
    <input class="btn btn-primary" type="submit" value="Submit"> </br>
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
    
    echo $name . " " . $pass;

    if($name =='' || $pass =='')
    {
        echo "<h3/><span style='color:red;'> Fill All Required Fields!</ span><h3/>";
        
        return false;
    }

    $linePassword=md5($pass);

    $file=fopen($users,'a+');

    while($line=fgets($file, 128))
    {
        $readname = substr($line,0,strpos($line,':'));
    
        $password = substr($line, strpos($line,':') );
    
        if($readname === $name) 
          {
           return true;
          }
       
       else return false;
            fclose($file);
        return true;
    } 
}

$result = register($name, $pass);

if ($result) {
    echo "Ready!";
}


?>

