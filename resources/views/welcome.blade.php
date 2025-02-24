<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheBukuPink - Your Pregnancy Journey</title>
    <!-- bootstrap href linkkk-->
    <!--<link href="../css/styles.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                    display: flex;
                    flex-direction: column;
                    align-items: center; /* Center items */
                    text-align: center;
                    padding: 15px;
                }

                /* Hide the top navigation bar on small screens */
                header nav {
                    display: none;
                }

                /* Ensure the sidebar toggle button remains accessible */
                .toggle-btn {
                    display: block; /* Show sidebar toggle button */
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
                top: 50%; /* Center vertically */
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(0, 0, 0, 0.5); /* Dark semi-transparent background */
                color: white; /* Make text stand out */
                padding: 20px 40px;
                border-radius: 12px;
                width: 80%; /* Adjust width for better layout */
                max-width: 600px; /* Prevent it from being too wide */
                
            }

            .hero h1 {
                font-size: 2rem;
                font-weight: bold;
            }

            .hero p {
                font-size: 1.2rem;
                margin-top: 10px;
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
                background: #ffe5e5; /* Soft pink */
                border-radius: 12px;
                padding: 15px;
                text-align: center;
                transition: transform 0.2s, box-shadow 0.3s;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .feature-item img {
                border-radius: 8px;
                max-width: 100%;
            }

            .feature-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
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

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: -250px;
            background: #d48ba2;
            color: white;
            padding: 15px;
            transition: left 0.3s ease;
            z-index: 1050; /* Ensures sidebar stays on top */
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background: #fddcdf;
        }
        /* Toggle button */
        .toggle-btn {
            position: fixed;
            top: 15px;
            left: 15px;
            background: #d48ba2;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 1100; /* Button stays on top */
            border-radius: 5px;
        }
        .toggle-btn:hover {
            background: #fddcdf;
        }
        /* Sidebar active state */
        .sidebar.active {
            left: 0;
        }

        .overview-item {
            text-align: center;
        }

       .overview-item svg {
            margin-bottom: 10px; /* Space between icon and title */
            color: #ff6f61; /* Adjust color if needed */
            width: 50px; /* Adjust size */
            height: 50px;
        }

    </style>
</head>
<body>
<button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <nav class="sidebar" id="sidebar">
        <br><br>
        <h2>Sidebar Menu</h2>
        <a href="{{ url('/login') }}">login</a><br>
        <a href="#"><i class="fas fa-cog"></i> 🏠 Home</a><br>
        <a href="#"><i class="fas fa-phone"></i> 📂 About</a><br>
        <a href="#"><i class="fas fa-phone"></i> ⚙️ Contact</a><br>
        <a href="#"><i class="fas fa-phone"></i> 📞 Features</a><br>
    </nav>
<header>
        <a href="#" class="logo">TheBukuPink</a>
       
        <nav>
            <ul>
            <li><a href="{{ url('/login') }}" class="cta">Register</a></li>

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
            <img src="{{ asset('images/calendar.png') }}" alt="Pregnancy Tracker Icon" width="70" height="70">
            <h2>Pregnancy Tracker</h2>
            <p>Monitor baby growth & health easily.</p>
        </div>
        <div class="overview-item">
        <img src="{{ asset('images/checkup.png') }}" alt="Pregnancy Tracker Icon" width="70" height="70">
            <h2>Book Appointments</h2>
            <p>Schedule doctor visits with ease.</p>
        </div>
        <div class="overview-item">
        <img src="{{ asset('images/food.png') }}" alt="Pregnancy Tracker Icon" width="70" height="70">
            <h2>Nutritional Plans</h2>
            <p>Personalized diet recommendations.</p>
        </div>
    </section>

    <section class="detailed-features">
        <div class="feature-item">
            <img src="{{ asset('images/lp1.jpg') }}" alt="Pregnancy Tracker">
            <h3>Pregnancy Tracker</h3>
            <p>Track milestones, symptoms, and fetal development with ease.</p>
        </div>
        <div class="feature-item">
            <img src="{{ asset('images/lp2.jpg') }}" alt="Doctor Appointment">
            <h3>Book Appointments</h3>
            <p>Easy online doctor scheduling with automated reminders.</p>
        </div>
        <div class="feature-item">
            <img src="{{ asset('images/lp3.jpg') }}" alt="Nutritional Plans">
            <h3>Nutritional Plans</h3>
            <p>Get expert diet advice tailored for your pregnancy stage.</p>
        </div>
    </section>

    <section class="who-can-use">
        <h2>Who Can Use This?</h2>
        <div class="user-group">
            <img src="{{ asset('images/mother.png') }}" alt="Expecting Moms" width="70" height="70" >
            <h3>Expecting Moms</h3>
            <p>Stay organized and track your progress.</p>
        </div>
        <div class="user-group">
            <img src="{{ asset('images/doctor.png') }}" alt="Doctors" width="70" height="70" >
            <h3>Doctors</h3>
            <p>Manage appointments and track patient progress.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 TheBukuPink. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>
</body>
</html>
