
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Connexion</h5>
            <form class="form-signin">
              <div class="form-label-group">
                  <h3>Utilisateur :</h3>
                <input type="text" id="user" class="form-control">
                <label for="user"></label>
              </div>

              <div class="form-label-group">
                  <h3>Mot de passe :</h3>
                <input type="password" id="inputPassword" class="form-control" required>
                <label for="inputPassword"></label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Souvenir de moi!</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Valider</button>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="Create">Nouveau compte ?</button>
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

class Login {
  
    private $username;
    private $password;
    private $CXN; // object base de donnees
   
    function __construct($username, $password)
    {
        //set data
        $this->setData($username, $password);
        // cnnectons
        $this->connectToDb();
        //get data       
       
    }
   
    private function setData($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }
   
    private function connectToDb()
    {
        //on a creer un objet de la classe database _A creer 
       
        include 'models/Database.php';
        $vars='../include/vars.php';
        $this->CXN=new Database($vars);
    }
   
    function getData()
    {
        $query =("SELECT * FROM users  WHERE username = '$this->username' AND password = '$this->password' ");
        $sql   =mysql_query($query);
        if (mysql_num_rows($sql)>0)
        {
            return TRUE;
        }
        else
        {
            throw new Exception('username or password wrong');
        }
    }
   
    function close()
    {
        $this->CXN->close();
    }
}

?>