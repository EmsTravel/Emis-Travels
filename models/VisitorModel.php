<?php

class VisitorModel extends ModelManager
{
    public function register()
    {
        $req = "INSERT INTO Visitors (email,address,name,country,phone,city)
        VALUES (?,?,?,?,?,?,?)";

        $parameters = [
        $_POST['email'] ,
        $_POST['address'] ,
        $_POST['name'],
        $_POST['country'],
        $_POST['phone'] ,
        $_POST['city']

    ];
        $this -> query($req,$parameters);
    }

}