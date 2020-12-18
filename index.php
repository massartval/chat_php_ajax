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

//&require('handler.php');
//require('message.php');

//$message = new Message();
//$message->getMessage();

?>

<body>
    <header class="mt-5 container">
        <div class="d-flex flex-row bd-highlight">
            <h1>Welcome to the Christmas chat !</h1>
            <div class="mx-5">
                <button type="button" id="login" data-toggle="modal" data-target="#modalLogin" class="bouton"> Login</button>
            </div>
            <div>
                <button type="button" id="register" data-toggle="modal" data-target="#modalRegister" class="bouton"> Register </button>
            </div>
            
        </div>
    </header>
    <section class="chat container">
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
                <button type="submit" name="submit" class="send">🎄 Send ! 🎄</button>
            </form>
        </div>
    </section>
    <section class="modal1">
        <!-- The Modal -->
        <div class="modal" id="modalRegister">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Register</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="registerIdentifiant">Name</label>
                                <input type="name" class="form-control" id="registerIdentifiant" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="registerEmail">Email address</label>
                                <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="registerPassword">Password</label>
                                <input type="password" class="form-control" id="registerPassword"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="registerConfirmPassword">Confirm password</label>
                                <input type="password" class="form-control" id="registerConfirmPassword"
                                    placeholder="Confirm password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="RegisterTOS">
                                <label class="form-check-label" for="RegisterTOS">Terms of Service</label>
                            </div>
                            <button type="submit" class="bouton mt-3" onclick="register()">Register</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- The Modal -->
        <div class="modal" id="modalLogin">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="loginIdentifiant">Identifiant</label>
                                <input type="name" class="form-control" id="loginIdentifiant" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                <button type="submit" class="bouton1">Forgot password</button>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="loginStayConnected">
                                <label class="form-check-label" for="loginStayConnected">Stay connected</label>
                            </div>
                            <button type="submit" class="bouton mt-3" onclick="login()">Login</button>
                            <button type="submit" class="bouton mt-3">Create an account</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/flocons.js"></script>
</body>

</html>