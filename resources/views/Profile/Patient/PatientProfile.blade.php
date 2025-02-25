@extends('sidebar.patient')

@section('content')
    <style>
                    * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, sans-serif;
            }

            body {
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .profile-container {
                background: #fff;
                padding: 20px;
                height: auto;
                width: 900px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .profile-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }

            .profile-header h2 {
                font-size: 20px;
            }

            .profile-pic {
                width: 50px;
                height: 50px;
                border-radius: 50%;
            }

            .profile-form .input-group {
                margin-bottom: 15px;
            }

            /* Media Query for Small Screens */
            @media (max-width: 600px) {
                .profile-container {
                    padding: 15px;
                }

                .profile-header {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .profile-header h2 {
                    font-size: 16px;
                    margin-bottom: 10px;
                }

                .profile-pic {
                    width: 40px;
                    height: 40px;
                }

                .input-row {
                    flex-direction: column;
                }

                .input-row .input-group {
                    min-width: 100%;
                }
            }

            .input-group label {
                display: block;
                font-size: 14px;
                margin-bottom: 5px;
            }

            .input-group input, 
            .input-group select {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .input-row {
                display: flex;
                gap: 10px;
            }

            .verified {
                color: green;
                font-weight: bold;
                margin-left: 5px;
            }

            .button-group {
                display: flex;
                justify-content: space-between;
                margin-top: 10px;
            }

            button {
                border: none;
                padding: 8px 15px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .cancel {
                background-color: #ccc;
                color: #000;
            }

            .save {
                background-color: orange;
                color: white;
            }

    </style>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <h2>Edit Profile</h2>
            <img src="profile.jpg" alt="Profile Picture" class="profile-pic">
        </div>
        <form class="profile-form">
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" value="Patient's Name">
            </div>
            <div class="input-group">
                <label>IC/Passport Number</label>
                <input type="text" value="999999-99-9999">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" value="Mother@gmail.com">
                <span class="verified">✔</span>
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label>Phone Number</label>
                    <input type="text" value="019-9999999">
                </div>
                <div class="input-group">
                    <label>Date of Birth</label>
                    <input type="text" value="1999-09-09">
                </div>
            </div>
            <div class="input-group">
                <label>Address</label>
                <input type="text" value="Taman Makmur Beruas Jaya">
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label>State</label>
                    <select>
                    <option selected disabled>Select State</option><option>Johor</option><option>Kedah</option><option>Kelantan</option><option>Melaka</option><option>Negeri Sembilan</option><option>Pahang</option><option>Perak</option><option>Perlis</option><option>Pulau Pinang</option><option>Sabah</option><option>Sarawak</option><option>Selangor</option><option>Terengganu</option><option>Wilayah Persekutuan (Kuala Lumpur, Labuan, Putrajaya)</option> 
                    </select>
                </div>
                <div class="input-group">
                    <label>City</label>
                    <input type="text" value="State">
                </div>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" value="sbdfbnd65sfdvb s">
                <span class="verified">✔</span>
            </div>
            <div class="button-group">
                <button class="cancel">Cancel</button>
                <button class="save">Save</button>
            </div>
        </form>
    </div>
</body>

@endsection