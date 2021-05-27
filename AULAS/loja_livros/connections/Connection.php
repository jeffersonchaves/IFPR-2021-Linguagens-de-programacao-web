<?php

class Connection
{
    public function getConnection()
    {
        $user = "root";
        $pass = "root";
        $databse = "ifpr_loja_livros";

        $connection = new PDO("mysql:host=localhost;dbname={$databse}", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    }
}
