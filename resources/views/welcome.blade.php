<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBukuPink - Your Pregnancy Journey</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
                /* General Styles */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #fff;
                color: #333;
                padding-top: 80px; /* Adjust based on header height */
            }

            /* Header */
            header {
                position: fixed; /* Keeps the header fixed on scroll */
                top: 0;
                left: 0;
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 15px 5%;
                background-color: #fff;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                z-index: 1000; /* Ensures header is above other elements */
            }

            /* Logo */
            .logo {
                font-size: 24px;
                font-weight: bold;
                text-decoration: none;
                color: #333;
            }

            /* Navigation Menu */
            nav ul {
                list-style: none;
                display: flex;
                gap: 25px; /* Increased gap for better spacing */
                margin: 0;
                padding: 0;
            }

            nav ul li {
                display: inline-block;
            }

            nav ul li a {
                text-decoration: none;
                color: #333;
                font-weight: bold;
                padding: 12px 18px; /* More spacing for clickable area */
                border-radius: 5px;
                transition: all 0.3s ease-in-out;
            }

            /* Hover Effect */
            nav ul li a:hover {
                background-color: #fddcdf;
            }

            /* Register Button */
            .cta {
                background-color: #d48ba2;
                color: white;
                padding: 12px 20px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                white-space: nowrap;
                transition: background 0.3s ease-in-out;
            }

            /* Register Button Hover */
            .cta:hover {
                background-color: #b8748c;
            }

            /* Mobile Responsiveness */
            @media screen and (max-width: 768px) {
                header {
                    flex-direction: column;
                    text-align: center;
                    padding: 15px;
                }

                nav ul {
                    flex-direction: column;
                    gap: 10px;
                }

                nav ul li {
                    display: block;
                }

                .cta {
                    display: inline-block;
                    margin-top: 10px;
                }
            }

            /* Hero Section */
            .hero {
                position: relative;
                text-align: center;
            }

            .hero img {
                width: 100%;
                height: auto;
            }

            .hero-content {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 10px;
            }

            /* Features Section */
            .overview {
                display: flex;
                justify-content: space-around;
                padding: 40px;
            }

            .overview-item {
                text-align: center;
                width: 30%;
            }

            /* Detailed Features */
            .detailed-features {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                padding: 40px;
                gap: 20px;
            }

            .feature-item {
                background: #fddcdf;
                padding: 20px;
                text-align: center;
                border-radius: 10px;
            }

            .feature-item img {
                width: 100%;
                border-radius: 10px;
            }

            /* Who Can Use Section */
            .who-can-use {
                text-align: center;
                padding: 40px;
            }

            .user-group {
                display: inline-block;
                width: 45%;
                padding: 20px;
            }

            /* Footer */
            footer {
                text-align: center;
                padding: 20px;
                background-color: #333;
                color: white;
            }

    </style>
</head>
<body>
<header>
        <a href="#" class="logo">MyBukuPink</a>
       
        <nav>
            <ul>
                <li><a href="#register" class="cta">Register</a></li>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#features">Features</a></li>
                
            </ul>
        </nav>
        
    </header>
    
    <section class="hero">
    <img src="{{ asset('images/header.jpg') }}" alt="Mother and baby" class="hero-image">
        <div class="hero-content">
            <h1>Your Pregnancy Journey</h1>
            <p>Track your pregnancy, book doctor appointments, and get expert guidance, all in one place.</p>
        </div>
    </section>

    <section class="overview">
        <div class="overview-item">
            <h2>Pregnancy Tracker</h2>
            <p>Monitor baby growth & health easily.</p>
        </div>
        <div class="overview-item">
            <h2>Book Appointments</h2>
            <p>Schedule doctor visits with ease.</p>
        </div>
        <div class="overview-item">
            <h2>Nutritional Plans</h2>
            <p>Personalized diet recommendations.</p>
        </div>
    </section>

    <section class="detailed-features">
        <div class="feature-item">
            <img src="{{ asset('images/lp1.webp') }}" alt="Pregnancy Tracker">
            <h3>Pregnancy Tracker</h3>
            <p>Track milestones, symptoms, and fetal development with ease.</p>
        </div>
        <div class="feature-item">
            <img src="{{ asset('images/lp2.jpg') }}" alt="Doctor Appointment">
            <h3>Book Appointments</h3>
            <p>Easy online doctor scheduling with automated reminders.</p>
        </div>
        <div class="feature-item">
            <img src="{{ asset('images/lp3.jpeg') }}" alt="Nutritional Plans">
            <h3>Nutritional Plans</h3>
            <p>Get expert diet advice tailored for your pregnancy stage.</p>
        </div>
    </section>

    <section class="who-can-use">
        <h2>Who Can Use This?</h2>
        <div class="user-group">
            <img src="expecting-mom.jpg" alt="Expecting Moms">
            <h3>Expecting Moms</h3>
            <p>Stay organized and track your progress.</p>
        </div>
        <div class="user-group">
            <img src="doctor.jpg" alt="Doctors">
            <h3>Doctors</h3>
            <p>Manage appointments and track patient progress.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 MyBukuPink. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
