<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decode Your Destination | Contact</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="icon" type="image/png" href="images/LearnTupe (5).png">
    <link rel="icon" type="image/png" sizes="64x64" href="images/LearnTupe (5).png">
    <link rel="stylesheet" href="css/contact.css">
    <style>
        .contact-containerc {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 2rem;
    gap: 2rem; /* Space between image and form */
}
.constact-asidec {
    flex: 1;
   
}
.aside-image {
    max-width: 300px; /* Control max width of the image */
    height: auto;
    flex: 1;
    order: 2; /* Position image on the right */
}
form input {
    display: block;
    width: 100%;
    margin: 0.5rem 0;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.form-name input {
    display: inline-block;
    width: calc(50% - 0.5rem);
    margin-right: 0.5rem;
    padding-left: 5px;
}
.btn {
    display: inline-block;
    background-color: var(--color-primary);
    color: #fff;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
}
.btn:hover {
    background-color: darken(var(--color-primary), 10%);
}
a {
    color: var(--color-primary);
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <nav>
        <div class="container nav-container">
            <a href="index.html"><h3>Decode Your Destination</h3></a>
            <ul class="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="interests.html">Road Maps</a></li>
                <li><a href="courses.html">Courses</a></li>
                <!-- <li><a href="contact.php">Contact</a></li> -->
                <li><a href="Jobs.html">Jobs & Interns</a></li>
                <li><a href="Communties.html">Communities</a></li>
            </ul>
            <button id="open-menu-btn"><span class="material-symbols-outlined">
                menu
                </span></i></button>
            <button id="close-menu-btn"><span class="material-symbols-outlined">
                close
                </span></i></button>
        </div>
    </nav>
    <section>
        <div class="contact-containerc">
            <div class="constact-asidec">
                <h1 style="text-align: center;" >Sign Up</h1> 
                 
 
                <form action="signup.php" method="post">
                    <div class="form-name">
                        <input type="text" placeholder="First Name" name="first-name" required>
                        <input type="text" placeholder="Last Name" name="last-name" required>
                    </div>
                    <input type="email" placeholder="Email Address" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="password" placeholder="Confirm Password" name="confirm-password" required>
                    <center><button type="submit" class="btn" style="align-items: center;">Sign Up</button></center>
                    <center><a href="login.php">Already have an account?</a></center>
                </form> 

            

            </div>
          
        </div>
    </section>
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-1">
                <a href="index.html" class="footer-logo"><h4>ATEESH</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, hic.</p>
            </div>
            <div class="footer-2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-3">
                <h4>Primacy</h4>
                <ul class="primacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and conditions </a></li>
                    <li><a href="#">Refund Policy </a></li>
                </ul>
            </div>
            <div class="footer-4">
                <h4>Contact Us</h4>
                <div>
                    <p>+91 8004640159</p>
                    <p>DecodeYourDestination@gmail.com</p>
                </div>
                <ul class="footer-social">
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-square-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="footer-copyright">
                <small>Copyright &copy; ATEESH </small>
            </div>
        </div>
    </footer>
    <script src="main.js"></script>
</body>
</html>
