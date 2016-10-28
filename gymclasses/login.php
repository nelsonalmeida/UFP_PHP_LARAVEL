<?php
   include("config.php");
   session_start();
   
   if(isset($_POST["loginPerson"])){

      $userEmail=$_POST['loginEmail'];
      $userPassword=$_POST['loginPassword'];

      $sql = "SELECT * FROM persons WHERE email = '$userEmail' and password = '$userPassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         //session_register("myusername");

         $_SESSION['login_email'] = $userEmail;
         $_SESSION['login_statute'] = $row['statute'];  //Variavel de sessao para dizer se é admin ou client
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>



<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Bem Vindo</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Entrar</a></li>
        <li class="tab"><a href="#signup">Registar</a></li>
        
      </ul>
      
      <div class="tab-content">

        <div id="login">   
          <h1>Bem Vindo ao GymClasses</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="text" name="loginEmail" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="loginPassword" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block" name="loginPerson"/>Log In</button>
          
          </form>

        </div>


        <div id="signup">   
          <h1>Registe-se no GymClasses</h1>
          
          <form action="login.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Primeiro Nome<span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Ultimo Nome<span class="req">*</span>
              </label>
              <input type="text" name="surname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Ano de Nascimento <span class="req">*</span>
            </label>
            <input type="text" name="year" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Cidade Atual <span class="req">*</span>
            </label>
            <input type="text" name="city" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Codigo Postal <span class="req">*</span>
            </label>
            <input type="text" name="postCode" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Pais <span class="req">*</span>
            </label>
            <input type="text" name="country" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Telemovel <span class="req">*</span>
            </label>
            <input type="text" name="mobilePhone" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Repetir Password<span class="req">*</span>
            </label>
            <input type="password" name="repPassword" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="submitPerson" class="button button-block"/>Enviar</button>
          
          </form>

        </div>

      </div>
      
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

  </body>
</html>


<?php
  if(isset($_POST["submitPerson"])){
    insert_db_person();
  }



   //PASSWORD => Verificar no lado do php se ambas são idênticas,verificar se existe um caracter maiúsculo, um numero e um caracter especial.      //CORRETO
    function confirm_pass(){
        $pass = $_POST["password"];
        $reppass = $_POST["repPassword"];
        $empty="";
        
        if($pass != $reppass){
            echo "<br/>Passwords diferentes!!<br/>";
            return $empty;
        
        }
        else{
            return $pass;
        }
    }
  function insert_db_person(){
    //$token= token();


    //Inserir na base de dados 
    $sql="INSERT INTO persons (id,name, surname, year, city, postCode, country, mobilePhone, email, password) VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["year"]."','".$_POST["city"]."','".$_POST["postCode"]."','".$_POST["country"]."','".$_POST["mobilePhone"]."','".$_POST["email"]."','".confirm_pass()."');";
    //echo $sql;


    if(confirm_pass()!=""){
      mysqli_query ($db, $sql);
    }

    mysqli_close($db);
  }
?>