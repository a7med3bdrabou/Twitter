<?php include "./backend/shared/header.php"; ?>
<?php  include_once "./backend/initialize.php" ; ?>
    <section class="main-page">
        <div class="left">
            <div class="left-content">
                <div>
                    <i class='fa fa-search'></i>
                    <h3 class="left-content-heading">
                        Find Your Interests.
                    </h3>
                </div>
                <div>
                    <i class='fa fa-users'></i>
                    <h3 class="left-content-heading">
                        Explore what people about.
                    </h3>
                </div>
                <div>
                    <i class='fa fa-comments'></i>
                    <h3 class="left-content-heading">
                        Join the peoples.
                    </h3>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="middle-content">
                <i class="fab fa-twitter"></i>
                <h1>See what's happening in the world right now</h1>
                <p>join Twitter now</p>
                <a href="signup.php" class="sign-up">Sign Up</a>
                <a href="login.php" class="login">Login</a>
            </div>
        </div>
        <footer class="main-page-footer">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Terms Of Services</a></li>
                <li><a href="#">Privacy Police</a></li>
                <li><a href="#">Cookie Police</a></li>
                <li><a href="#">Ads Info</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Status</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Brand Resources</a></li>
                <li><a href="#">Twitter For Resources</a></li>
                <li><a href="#">Advertising</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Developer</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">&copy <?php echo date("Y") ;  ?> Twitter.Inc</a></li>
            </ul>
        </footer>
    </section>
</body>
</html>