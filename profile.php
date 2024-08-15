<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "learn_tube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user email is set in session
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT first_name, last_name, email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($firstName, $lastName, $fldEmail);

    if ($stmt->fetch()) {
        // Assign the fetched values to variables
        $fldName = $firstName . ' ' . $lastName;
    } else {
        echo "No user found";
        // Redirect to the sign-up page or show a login link
        header("Location: signup.html");
        exit();
    }

    $stmt->close();
} else {
    echo "User is not logged in.";
    // Redirect to the sign-up page or show a login link
    header("Location: signup.html");
    exit();
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | Decode Your Destination</title>
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
    <link rel="stylesheet" href="css/profile.css"> <!-- Replace with your profile page CSS file -->
</head>
<body>
    <nav>
        <div class="container nav-container">
            <a href="index1.html"><h3>Decode Your Destination</h3></a>
            <ul class="nav-menu"> 
                <li><a href="index1.html">Home</a></li>
               <!--<li><a href="profile.html">Profile</a></li>--> 
                <li><a href="logout.html">Logout</a></li> <!-- Optional: Add a logout link -->
            </ul>
        </div>
    </nav>
    <section class="profile-section">
        <div class="container">
            <h1>Welcome to Your Profile</h1>
            <div class="page-context-header">
                <div class="page-header-image">
                
                    <img src="https://elearning.ju.edu.jo/moodle10/theme/image.php/moove/core/1720081743/u/f1" class="userpicture defaultuserpic" width="100" height="100" alt="Picture of ساما علي محمد العابد 0215341" title="Picture of ساما علي محمد العابد 0215341">
                </a>
            </div>
                    <div class="page-header-headings">
                        <h1>  
                        <?php echo $fldName; ?> 
                            <p style="font-size:small; text-align: center;"> <?php echo $email; ?> </p> 
                        </h1>
                        

                        <a href="editpro.html" class="btn btn-primary" style=" background-color: lightgray;">Edit</a>
                        
                    </div>
              

            <h1>Courses</h1>
            <div class="courses-container container">
                <article class="course" style="background-color: var(--color-bg1);">
                    <div class="course-image">
                        <img src="images/python.jpeg" alt="Course" height="200" width="480">
                    </div>
                    <div class="course-info">
                        <h4>Python for Data Science and Machine Learning Bootcamp</h4>
                        <p>A complete python course by Udemy</p>
                        <a href="https://www.udemy.com/course/python-for-data-science-and-machine-learning-bootcamp/?couponCode=2021PM25" class="btn btn-primary">Go to Course</a>
                    </div>
                </article>
    
                <article class="course">
                    <div class="course-image">
                        <img src="images/html.jpg" alt="Course" height="200" width="480">
                    </div>
                    <div class="course-info">
                        <h4>HTML, CSS, and Javascript for Web Developers</h4>
                        <p>Best beginner friendly course for the web</p>
                        <a href="https://www.coursera.org/learn/html-css-javascript-for-web-developers" class="btn btn-primary">Go to Course</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-1">
                <a href="index1.html" class="footer-logo"><h4>ATEESH</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, hic.</p>
            </div>
    
            <div class="footer-2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index1.html">Home</a></li>
                    <li><a href="about1.html">About</a></li>
                    <li><a href="courses1.html">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
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
    <button class="logout-button" onclick="location.href='logout.html';">Logout</button>

    <script src="main.js"></script>
</body>
</html>
