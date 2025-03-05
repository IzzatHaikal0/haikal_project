<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    @vite(['resources/css/app.css'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheBukuPink - Your Pregnancy Journey</title>
    <!-- bootstrap href linkkk-->
    <link rel="stylesheet" href="{{ asset('css/LandingPage/styles.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <!--<style>
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
                background: rgb(0, 0, 0);
                filter: blur(3px); /* Add blur effect */
            }

            .hero-content {
                position: absolute;
                top: 50%; /* Center vertically */
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(0, 0, 0, 0); /* Dark semi-transparent background */
                color: black; /* Make text stand out */
                padding: 20px 40px;
                border-radius: 12px;
                width: 80%; /* Adjust width for better layout */
                max-width: 600px; /* Prevent it from being too wide */
                

                
                
            }

            .hero h1 {
                font-size: 40px;
                font-weight: semi bold;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                
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

        .testimonial-section {
            padding: 50px 20px;
        }

        .label {
            display: inline-block;
            background: #EAEAEA;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 10px;
            color: #555;
  
            
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
            color: #222;
            text-align: center;
            
        }

        .section-description {
            font-size: 14px;
            color: #666;
            margin: 10px auto 30px;
            max-width: 600px;
        }


        .testimonials {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .testimonial {
            background: #f7f7f7;
            padding: 20px;
            max-width: 400px;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.05);
        }

        .testimonial-text {
            font-size: 14px;
            color: #333;
            margin-bottom: 10px;
            text-align: justify;
        }

        .testimonial-author {
            font-size: 12px;
            font-weight: bold;
            color: #777;
        }

    </style>-->
</head>

<body>
<button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <nav class="sidebar" id="sidebar">
        <br><br>
        <h2>Sidebar Menu</h2>
        <a href="{{ url('/login') }}">🔒 LOGIN</a><br>
        <!--DONT FORGET TO CHANGE URL-->
        <a href="{{ url('/test') }}"><i class="fas fa-cog"></i> 🏠 HOME</a><br>
        <a href="#"><i class="fas fa-phone"></i> 📂 ABOUT</a><br>
        <a href="#"><i class="fas fa-phone"></i> ⚙️ CONTACT</a><br>
        <a href="#"><i class="fas fa-phone"></i> 📞 FEATURES</a><br>
    </nav>
<header>
        <a href="#" class="logo">TheBukuPink</a>
       
        <nav>
            <ul>
            <li><a href="{{ url('/login') }}" class="cta">Login</a></li>

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
<div data-aos="fade-up">
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
</div>
<div data-aos="fade-up">
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
        <div class="feature-item">
            <img src="{{ asset('images/lp3.jpg') }}" alt="Nutritional Plans">
            <h3>Community</h3>
            <p>Discuss and share your journey with fellow users. </p>
        </div>
    </section>
</div>
<div data-aos="fade-up">
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
</div>
<div data-aos="fade-up"> 
    <section class="testimonial-section">
        
        <h2 class="section-title">MOMS SHARE THEIR PREGNANCY JOURNEYS</h2>
        <p class="section-description">
            TheBukuPink’s insights transformed my pregnancy journey, providing invaluable guidance and support. 
            Highly recommend for all expectant mothers!
        </p>
    <div class="testimonials">
        <div class="testimonial">
            <p class="testimonial-text">
                TheBukuPink is a lifesaver for expecting parents! Their comprehensive articles and supportive community have guided us through every stage of pregnancy. 
                I feel more prepared and confident knowing I have such a reliable resource at my fingertips.
            </p>
            <p class="testimonial-author">- Wan Izzat</p>
        </div>

        <div class="testimonial">
            <p class="testimonial-text">
                TheBukuPink has been an incredible resource throughout my pregnancy journey. Their expert advice and user-friendly site make it easy to find trustworthy information. 
                I truly appreciate the depth of knowledge shared on this platform!
            </p>
            <p class="testimonial-author">- Izzat Haikal</p>
        </div>
    </div>
</section>
</div>
    <footer>
        <p>&copy; 2025 TheBukuPink. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>

<script>
    AOS.init();
</script>

</body>
</html>
