<?php


require './database/db.php';
require_once './models/logInModel.php';

if (!empty($_POST['name']) && isset($_POST['password']))
{

  $name = $_POST['name'];
  $password = $_POST['password'];
 
  $data = getUsers($name);
  $row = getUsersByRowCount($name);

  if ($row > 0)
  {
    if(filter_var($name))
    {
        if (password_verify($password, $data[0]['password']))
        { 
        $_SESSION = $data[0];

        require views('home');
        exit;
        }
    }
  }
}

require views ('logIn');