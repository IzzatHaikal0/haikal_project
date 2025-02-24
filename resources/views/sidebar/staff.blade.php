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
            <a href="#"><i class="fas fa-phone"></i> Dashboard</a><br>
            <a href="#"><i class="fas fa-cog"></i> Profile</a><br>
            <a href="#"><i class="fas fa-phone"></i> Appointment</a><br>
            <a href="#"><i class="fas fa-phone"></i> Patient</a><br>
            <a href="#"><i class="fas fa-phone"></i> Community</a><br>
            
        </nav>


        <header>
        <a href="#" class="logo">TheBukuPink</a>
       
        <nav>
         <h2>welcome,STAFF</h2>
        </nav>
        
    </header>
</body>

<!--FIX SIDEBAR WONT OPEN-->