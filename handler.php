<?php 

try 
{
    $db = new PDO ('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
} 

catch (PDOException $e)
{
    die($e->getMessage());
}


// Set default task
$task = "list";

// Set non-default task from GET
if(array_key_exists("task", $_GET)) {
    //               key    array
    $task = $_GET['task'];
}

// Set behavior according to task
if ($task == "write") {
    postMessage($db);
} else {
    getMessages($db);
}

function getMessages($db="null") {
// With PHP you have to fetch global variables before you can use them inside of a function (=/= JS)
// global $db;
// Request for 20 last messages
$results = $db->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 20");
// Process the data
$data = $results->fetchAll();
// Display data (JSON)
echo json_encode($data);
}

function postMessage($db="null") {
// Process POST param
if (!array_key_exists('author', $_POST) || !array_key_exists('content', $_POST)) 
{
    echo json_encode(["status" => "error", "message" => "One field at least is missing"]);
}
$author = $_POST['author'];
$content = $_POST['content'];
// Create request to insert data
    // Prepare request
$query = $db->prepare('INSERT INTO messages SET author = :author, content = :content, created_at = NOW()');
// $query = $db->prepare("INSERT INTO `messages` (`author`, `content`, `created_at`) VALUES ('author', 'content', 'NOW()')");
    // Set values
$query->execute(["author" => $author, "content" => $content]);
// Give success or failure status
echo json_encode(["status" => "success"]);
}



/*
$url = $_SERVER['REQUEST_URI'];
if(isset($url)){
    switch($url) {
        case '/home' : 
            echo "homepage";
        break;
        case '/?task=write' : 
            echo "task";
        break;
    }
}
*/

?>