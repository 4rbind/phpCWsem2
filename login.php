<?php
include_once("navbar.php");
?>
<main>
    <h1 class="page-title">Account Login</h1>

    <div class="signup-form">
        <form action="includes/login.inc.php" method="post" class="myForm">
            <?php
            if (isset($_GET["signup"])) {
                echo "<div class='success'>";
                echo "<p>User registered successfully.</p>";
                echo "</div>";
            }
            ?>
            <div class="errors">
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyInputs"){
                echo "<p>Some fields are missing.</p>";
            }
            if($_GET["error"]=="userdoesnotexist"){
                echo "<p>User does not exist.</p>";
            }
            if($_GET["error"]=="incorrectpassword"){
                echo "<p>Incorrect Password</p>";
            }
            if($_GET["error"]=="queryError"){
                echo "<p>Query Error</p>";
            }
            if($_GET["error"]=="inactiveaccount"){
                echo "<p>Account is deactivated.</p>";
            }
        }

        if(isset($_GET["user"])){
            echo "<p>User is not authorized.</p>";
        }
    ?>
    <script>
        $('.msg').delay(3000).fadeOut();
    </script>
    </div>
            <div class="form-element">
                <label for="username" class="form-label">Username</label><br />
                <input type="text" id="username" name="username1" />
            </div>

            <div class="form-element">
                <label for="password" class="form-label">Password</label><br />
                <input type="password" id="password" name="password1" />
            </div>

            <div class="">
                <button type="submit" class="btn-submit" name="submit"><b>Login</b></button>
            </div>
        </form>


    </div>

</main>
<?php
include_once("footer.php");
?>