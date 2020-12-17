<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php 

require('handler.php');
//require('message.php');

//$message = new Message();
//$message->getMessage();

?>

<body>
    <header>
        <h1>What a Chat Bro !</h1>
    </header>
    <section class="chat">
        <div class="messages">
            <!-- 
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Lion C</span> :
                <span class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum?</span>
            </div>
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Lion C</span> :
                <span class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum?</span>
            </div>
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Lion C</span> :
                <span class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum?</span>
            </div>
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Lion C</span> :
                <span class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum?</span>
            </div>
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Lion C</span> :
                <span class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum?</span>
            </div>
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Lion C</span> :
                <span class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum?</span>
            </div>
            -->
        </div>
        <div class="user-inputs">
            <form action="/handler.php?task=write" method="POST">
                <input type="text" name="author" id="author" placeholder="Nickname ?"></input>
                <input type="text" name="content" id="content" placeholder="type in your message right her bro !">
                </input>
                <button type="submit" name="submit">♥ Send !</button>
            </form>
        </div>
    </section>
    <script src="assets/js/app.js"></script>
</body>

</html>