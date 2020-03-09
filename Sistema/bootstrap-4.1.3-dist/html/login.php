<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="rodape.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Ilha Solitária</title>
 <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
   
    <style type="text/css">
        /*
        * Specific styles of signin component
        */
        /*
        * General styles
        */
        body, html {
        height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
        }
        #container{
        width:100px;
        height:100px;
        position:absolute;
        top:50%;
        left:50%;
        margin-top:-50px;
        margin-left:-50px;
        }
        .card-card-container {
        margin-top: 200px;
        }
        .card-container.card {
        max-width: 350px;
        padding: 40px 40px;
        }
        .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
        }
        /*
        * Card component
        */
        .card {
        background-color: #F7F7F7;
        /* just in case there no content*/
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        /* shadows and rounded borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        }
        /*
        * Form styles
        */
        .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
        }
        .reauth-email {
        display: block;
        color: #404040;
        line-height: 2;
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        }
        .form-signin #inputEmail,
        .form-signin #inputPassword {
        direction: ltr;
        height: 44px;
        font-size: 16px;
        }
        .form-signin input[type=email],
        .form-signin input[type=password],
        .form-signin input[type=text],
        .form-signin button {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        z-index: 1;
        position: relative;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        }
        .form-signin .form-control:focus {
        border-color: rgb(104, 145, 162);
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
        }
        .btn.btn-signin {
        background-color: #4d90fe; */
        background-color: rgb(104, 145, 162);
        background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
        padding: 0px;
        font-weight: 700;
        font-size: 14px;
        height: 36px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        -o-transition: all 0.218s;
        -moz-transition: all 0.218s;
        -webkit-transition: all 0.218s;
        transition: all 0.218s;
        }
        .btn.btn-signin:hover,
        .btn.btn-signin:active,
        .btn.btn-signin:focus {
        background-color: rgb(12, 97, 33);
        }
        .forgot-password {
        color: rgb(104, 145, 162);
        }
        .forgot-password:hover,
        .forgot-password:active,
        .forgot-password:focus{
        color: rgb(12, 97, 33);
        }
        </style>
    
    </head>
    <body>

        <div class="container">
            <div class="card card-container">
                <img id="profile-img-card" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="">         
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" method="post" action="../src/conferirdados.php">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" name="usu_email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
                    <input type="password" name="usu_senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Lembre de mim
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
                    </form><!-- /form -->
                    <a href="recuperar.php" class="forgot-password">
                        Esqueceu a senha?
                    </a>
                    </div><!-- /card-container -->
                    </div><!-- /container -->
                  
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                
                  <script type="text/javascript">
                    $( document ).ready(function() {
                    // DOM ready
                    // Test data
                    /*
                    * To test the script you should discomment the function
                    * testLocalStorageData and refresh the page. The function
                    * will load some test data and the loadProfile
                    * will do the changes in the UI
                    */
                    // testLocalStorageData();
                    // Load profile if it exits
                    loadProfile();
                    });
                    /**
                    * Function that gets the data of the profile in case
                    * thar it has already saved in localstorage. Only the
                    * UI will be update in case that all data is available
                    *
                    * A not existing key in localstorage return null
                    *
                    */
                    function getLocalProfile(callback){
                    var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
                    var profileName        = localStorage.getItem("PROFILE_NAME");
                    var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");
                    if(profileName !== null
                    && profileReAuthEmail !== null
                    && profileImgSrc !== null) {
                    callback(profileImgSrc, profileName, profileReAuthEmail);
                    }
                    }
                    /**
                    * Main function that load the profile if exists
                    * in localstorage
                    */
                    function loadProfile() {
                    if(!supportsHTML5Storage()) { return false; }
                    // we have to provide to the callback the basic
                    // information to set the profile
                    getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
                    //changes in the UI
                    $("#profile-img").attr("src",profileImgSrc);
                    $("#profile-name").html(profileName);
                    $("#reauth-email").html(profileReAuthEmail);
                    $("#inputEmail").hide();
                    $("#remember").hide();
                    });
                    }
                    /**
                    * function that checks if the browser supports HTML5
                    * local storage
                    *
                    * @returns {boolean}
                    */
                    function supportsHTML5Storage() {
                    try {
                    return 'localStorage' in window && window['localStorage'] !== null;
                    } catch (e) {
                    return false;
                    }
                    }
                    /**
                    * Test data. This data will be safe by the web app
                    * in the first successful login of a auth user.
                    * To Test the scripts, delete the localstorage data
                    * and comment this call.
                    *
                    * @returns {boolean}
                    */
                    function testLocalStorageData() {
                    if(!supportsHTML5Storage()) { return false; }
                    localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
                    localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
                    localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
                    }
                    </script>

                            <!--Start of Tawk.to Script-->
                            <script type="text/javascript">
                            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                            (function(){
                            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                            s1.async=true;
                            s1.src='https://embed.tawk.to/5b1c91fe10b99c7b36d4c843/default';
                            s1.charset='UTF-8';
                            s1.setAttribute('crossorigin','*');
                            s0.parentNode.insertBefore(s1,s0);
                            })();
                            </script>
                            <!--End of Tawk.to Script-->

                </body>
            </html>