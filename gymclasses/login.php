<?php
   include("config.php");
   session_start();



    if(!function_exists('password_verify')){
      function password_verify($password, $hash){
        return (crypt($password, $hash) == $hash);
      }
    }

  //funcao para redirecionar para a pagina correcta
  function redirect($statute){
    echo $statute;
    if($statute==1){
      header("location: admin.php");
    }else{
      header("location: client.php");
    }
  }



   
   if(isset($_POST["loginPerson"])){

      $userEmail=$_POST['loginEmail'];
      $userPassword=$_POST['loginPassword'];

      $sql = "SELECT * FROM persons WHERE email = '$userEmail'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
		  echo $count;
      if($count == 1) {
         //session_register("myusername");

         //$_SESSION['login_email'] = $userEmail;
         //$_SESSION['login_statute'] = $row['statute'];  //Variavel de sessao para dizer se é admin ou client

          $hash=$row['password'];
          $statute=$row['statute'];
         
         //redirect($_SESSION['login_statute']);
         //header("location: welcome.php");
      }else {
         $error = "O seu email ou password estao erradas!";
         echo $error;
      }

      if(!isset($_SESSION["timeout"])){
        if(password_verify($userPassword, $hash)==true){ 
            $_SESSION['timeout'] = time() + 60; //inicia a secao e da-lhe 60 segundos de tempo
            $_SESSION['email'] = $userEmail;
            $_SESSION['statute'] = $statute;
            redirect($statute);      //dependendo do estatuto redirecionar para a pagina do admin ou employed
           
           //echo "Utilizador Logado!";
        }else{
           echo "Password Errada<br/>"; 
        }    
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
    insert_db_person($db);
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


    function confirm_pass_v2(){
            $pass = $_POST["password"];
            $reppass = $_POST["repPassword"];
            $empty="";
            
            if($pass != $reppass){
                echo "<br/>Passwords diferentes!!<br/>";
                return $empty;
            
            }
            else{
                //echo "<br/>Password bem introduzidas!<br/>";
            
                $testNumber=0;
                $testCharacter=0;
                $testLetter=0;
                for ($i=0; $i<strlen($pass); $i++){
                    $character = "-+=_,!@$#*%<>[]{}";
                    $numbers = "1234567890";
                    $letters = "ABCDEFGHIJLMNOPQRSTUVWXYZ";
                    for($i=0;$i<strlen($pass);$i++){
                        for($x=0;$x<strlen($character);$x++){
                            if($pass[$i]==$character[$x]){  //caracteres especiais
                                $testCharacter++;
                            }
                        }
                        for($x=0;$x<strlen($numbers);$x++){
                            if($pass[$i]==$numbers[$x]){    //numeros
                                $testNumber++;
                            }
                        }
                        for($x=0;$x<strlen($letters);$x++){
                            if($pass[$i]==$letters[$x]){    //letras maiusculas
                                $testLetter++;
                            }
                        }
                    }
                }
                if($testCharacter!=0 && $testNumber!=0 && $testLetter!=0){
                    //echo "Password correta!";
                     return crypt($pass);
                }
                else{
                    echo "A password tem de conter um caracter especial, um numero e uma letras maiuscula!</br>";
                    return $empty;
                }
            }
        }


    //FUNÇÃO PARA FAZER SHA256 A PASSWORD
    define("MAX_LENGTH", 1000);
    function generateHashWithSalt($password) {
      $intermediateSalt = md5(uniqid(rand(), true));
      $salt = substr($intermediateSalt, 0, MAX_LENGTH);
      return hash("sha256", $password . $salt);
    }


  function insert_db_person($db){
    //$token= md5($_POST["email"].$_POST["name"]);
    //Inserir na base de dados 
    $sql="INSERT INTO persons (name, surname, year, city, postCode, country, mobilePhone, email, password) VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["year"]."','".$_POST["city"]."','".$_POST["postCode"]."','".$_POST["country"]."','".$_POST["mobilePhone"]."','".$_POST["email"]."','".confirm_pass_v2()."');";
    //echo $sql;


    if(confirm_pass_v2()!=""){
      mysqli_query ($db, $sql);
    }

    mysqli_close($db);
  }
?>