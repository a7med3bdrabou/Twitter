<?php $pageTitle =  "Login  | Twitter" ;  ?>
<?php include "./backend/shared/header.php"; ?>
<?php include "./backend/shared/footer.php"; ?>

<section class="sign-container">
    <nav class="nav-header-sign__up">
        <ul>
            <li>
                
                <a href="#">
                <i class="fab fa-twitter"></i>
                Home
                </a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Language: English</a>
            </li>
        </ul>
    </nav>
    <div class="form-container">
        <h2>Login To Twitter</h2>
        <div class="mb-3">
            <label for="userName" class="form-label">username or Email</label>
            <input type="text" class="form-control" name="userName" id="userName" placeholder="UsrName or Email">
        </div>


        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="l_password" id="l_password" placeholder="Password">
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
            <label class="form-check-label" for="flexCheckIndeterminate">
                Remember Me
            </label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">login</button>
        <footer class="form-footer">
            <p>New to Twitter ?</p>
            <a href="signup.php">Signup to Twitter</a>
    </footer>
  
    </div>
    

</section>