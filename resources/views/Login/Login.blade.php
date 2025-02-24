<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
     
            * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
          }

          body, html {
              font-family: Arial, sans-serif;
              height: 100vh;
              width: 100vw;
              display: flex;
              justify-content: center;
              align-items: center;
              background: linear-gradient(to bottom, #e3c3ff,rgba(138, 181, 255, 0));
          }

          /* Full-Screen Container */
          .container {
              display: flex;
              flex-direction: row;
              width: 80%; /* Adjusted for better responsiveness */
              max-width: 900px; /* Prevents it from being too wide */
              min-height: 400px;
              background: white;
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
              border-radius: 5px;
              overflow: hidden;
              padding: 0;
              margin: 0;
          }

          /* Left Section (Login Form) */
          .login-box {
              width: 50%;
              padding: 40px;
              display: flex;
              flex-direction: column;
              justify-content: center;
              background: white;
          }

          .login-container {
              width: 100%;
              padding: 20px;
              display: flex;
              flex-direction: column;
              justify-content: center;
              border: none;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              border-radius: 5px;
          }

          .logo {
              position: absolute;
              top: 20px;
              left: 20px;
              display: flex;
              align-items: center;
              gap: 10px;
              font-size: 22px;
              font-weight: bold;
          }

          /* Ensure logo resizes well on smaller screens */
          @media (max-width: 768px) {
              .logo {
                  font-size: 18px; /* Reduce size on smaller screens */
                  top: 10px;
                  left: 10px;
              }
          }

          h1  {
              font-size: 24px;
              font-weight: bold;
              text-decoration: none;
              color: #333;
          }

          h2 {
              margin-bottom: 20px;
              font-size: 22px;
              color: #222;
              font-weight: bold;
              text-align: center;
          }

          /* Form Styles */
          form {
              display: flex;
              flex-direction: column;
          }

          label {
              font-size: 14px;
              margin: 5px 0;
              color: #444;
          }

          input, select {
              width: 100%;
              padding: 12px;
              margin-bottom: 15px;
              border: 1px solid #ccc;
              border-radius: 5px;
              font-size: 14px;
          }

          select {
              appearance: none;
              background-color: #fff;
              cursor: pointer;
          }

          /* Button */
          .btn {
              padding: 12px;
              background: pink;
              border: none;
              border-radius: 5px;
              cursor: pointer;
              color: white;
              font-size: 16px;
              transition: 0.3s;
          }

          .btn:hover {
              background: rgb(253, 175, 209);
          }

          /* Forgot Password & Sign Up */
          .forgot-password {
              font-size: 12px;
              margin-top: 10px;
              color: blue;
              text-decoration: none;
              text-align: center;
          }

          .signup-text {
              margin-top: 20px;
              font-size: 14px;
              text-align: center;
          }

          .signup-text a {
              color: blue;
              text-decoration: none;
              font-weight: bold;
          }

          /* Right Section (Gradient Background) */
          .background {
              width: 50%;
              background: linear-gradient(to bottom, #e3c3ff, #8ab5ff);
              border-radius: 5px;
          }

          @media screen and (max-width: 768px) {
              .background {
                  display: none;
              }
          }

          /* ---------- Responsive Design ---------- */
          @media (max-width: 768px) {
              .container {
                  flex-direction: column;
                  width: 90%;
                  max-width: 400px;
              }

              .login-box, .background {
                  width: 100%;
              }

              .background {
                  height: 200px; /* Adjust gradient section height for mobile */
              }

              h2 {
                  font-size: 18px;
              }

              .btn {
                  font-size: 14px;
              }
          }


  </style>
</head>
<body>
    <div class="logo">
        <!--<span class="logo-icon"></span>-->
        <h1>TheBukuPink</h1>
    </div>

    <div class="container">
        <div class="login-box">

            <h2>Sign In to TheBukuPink</h2>
            <div class="login-container">

            <!--fix this part(suppose to be POST not GET)-->
            <form action="{{ url('/sidebar') }}" method="GET">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="examplemom@gmail.com" required>

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="●●●●●●●●●●●"required>

                <label for="user-type">User Type</label>
                <select id="user-type" required>
                  
                    <option value="" disabled selected>Select User Type</option>
                    <option value="mother">Mother</option>
                    <option value="doctor">Doctor</option>
                    <option value="staff">Staff</option>
                </select>

                <button type="submit" class="btn">Sign In</button>

                <a href="#" class="forgot-password">Forgot Password?</a>
            </form>
            <p class="signup-text">Don't have an account? <a href="#">Sign Up</a></p>
          </div>
        </div>
        <div class="background"></div>
    </div>
</body>
</html>