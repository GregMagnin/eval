<?php
if (isset($_POST['name']) && !empty($_POST['name'])
&& isset($_POST['password']) && !empty($_POST['password']))
{
    $name = ($_POST['name']);
    $password = ($_POST['password']);

    $check = $connection->prepare('SELECT name, password FROM user WHERE name = ?');
    $check->execute(array($name));
    $data =  $check->fetch();
    $row = $check->rowCount();


    if ($row == 0)
    {
        if(strlen($name) <= 100) 
        {
          if(filter_var($name))
            {
              if(strlen($password) <= 20)
              {

                $password = password_hash($password, PASSWORD_DEFAULT);
                $db_insert = $connection-> prepare('INSERT INTO user (name, password) VALUES(:name,:password)');
                $db_insert->execute(array(
                  ':name' => $name,
                  ':password' => $password,
                ));
                require views('logIn');
              }
            }
        } 
    } 

} else require views('signUp');
