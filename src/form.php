    <div id="id01" class="modal">
        <span onclick="Nav('destroy')" class="close" title="Close Modal">&times;</span>

            <!-- Login -->
            <div class="login" id="login">
                <form class="modal-content animate" action="index.php" method="POST">
                    <div class="imgcontainer">
                        <img src="img/avatar.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container1">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" class="formConnexion" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" class="formConnexion" required>
                    </div>

                    <div class="container1" style="background-color:#f1f1f1">
                        <button type="submit" name="loginBDD" class="btnLogin">Login</button>
                        <button type="button" onclick="Nav('destroy')" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>

            <!-- SignUp -->
            <div class="signup" id="signup">
                <form class="modal-content animate" method="POST">
                    <div class="imgcontainer">
                        <img src="img/avatar.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container1">
                        <label for="unamesignup"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="unamesignup" class="formConnexion" required>

                        <label for="pswsignup"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pswsignup" class="formConnexion" required>
                    </div>

                    <div class="container1" style="background-color:#f1f1f1">
                        <button type="submit" name="signupBDD" class="btnLogin">Sign Up</button>
                        <button type="button" onclick="Nav('destroy')" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>

            <?php if(isset($_SESSION["connexion"])) { ?>
            <!-- New Advert -->
            <div class="advert" id="advert">
                <form class="modal-content animate" action="index.php?article=showAll&page=1" method="POST">   
                    <div class="container1">
                        <h1 style="text-align: center;">New advert</h1>
                        <label for="titleAdvert"><b>Titre</b></label>
                        <input type="text" placeholder="Title" name="titleAdvert" class="formConnexion" required>

                        <label for="contentAdvert"><b>Content</b></label>
                        <input type="text" placeholder="Once upon a time..." name="contentAdvert" class="formConnexion" required>
                    </div>

                    <div class="container1" style="background-color:#f1f1f1">
                        <button type="button" onclick="Nav('destroy')" class="cancelbtn">Cancel</button>
                        <button type="submit" name="advertPost" class="btnLogin">Post</button>
                    </div>
                </form>
            </div>

            <!-- Logout -->
            <div class="logout" id="logout">
                <form class="modal-content animate" action="index.php" method="POST">   
                    <div class="container1">
                        <h1 style="text-align: center;">Logout</h1>
                        <label for="logout"><b>Are you sure about this?</b></label>
                    </div>

                    <div class="container1" style="background-color:#f1f1f1">
                        <button type="button" onclick="Nav('destroy')" class="cancelbtn">Cancel</button>
                        <button type="submit" name="logoutBDD" class="btnLogin">Logout</button>
                    </div>
                </form>
            </div>
        <?php } ?>
        </form>
    </div>

