<?php 
    include_once 'header.php';
?>

<!---------- login form ---------->
<section class="login-form">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3">
                            <img id="logo" src="images/logo.png">
                        </div>
                        <h3 class="mb-5 text-center heading">Aston Events</h3>
                        <div class="text-center">
                            <div class="text-danger"><?php include_once 'includes/loginerrors.inc.php' ?></div>
                        </div>
                        <h6 class="msg-info">Please login to your account</h6>
                        <form action="includes/login.inc.php" method="post">
                        <div class="form-group">
                            <label class="form-control-label text-muted">Username/Aston Email</label>
                            <input type="text" id="username" name="username" placeholder="Username/Aston Email" class="form-control">
                        </div>
                            <div class="form-group">
                                <label class="form-control-label text-muted">Password</label>
                                <input type="password" id="psw" name="psw" placeholder="Password" class="form-control">
                            </div>
                            <div class="row justify-content-center my-3 px-3">
                                <button type="submit" name="submit" button class="btn-block btn-color">Login to Aston Events</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <a href="register.php" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2">Register now!</button></a>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">Login or register for an account!</h3> <small class="text-white">Want to get involved in events? Complete the form to login or register for an account with us! Information about upcoming events are on the schedule page to get you started!</small>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    include_once 'footer.php';
?>