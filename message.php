<?php 
/*
echo "coucou";

try {
    $db = new PDO ('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
} 

catch (PDOException $e){
    die($e->getMessage());
}

$result = $db->query('SELECT * FROM messages');

$donnees = $result->fetchAll(PDO::FETCH_ASSOC);

var_dump($donnees);
*/

class Message 
{
    protected $db;

    public function __construct() 
    {
        try 
        {
            $this->db = new PDO ('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } 
        
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function getMessage() 
    {
        $result = $this->db->query('SELECT * FROM messages');

        $donnees = $result->fetchAll(PDO::FETCH_ASSOC);

        var_dump($donnees);
    }
}


?>