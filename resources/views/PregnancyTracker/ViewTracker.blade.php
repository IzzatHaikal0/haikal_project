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

            .tracker-container {
                max-width: 600px;
                margin:  auto;
                background: #fff;
                padding: 20px;
                height: auto;
                width: 900px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .tracker-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }

            .tracker-header h2 {
                font-size: 24px;
                font-weight: bold;
            }

            h4 {
                font-size: 18px;
                font-weight: bold;
                
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
                .tracker-container {
                    padding: 15px;
                }

                .tracker-header {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .tracker-header h2 {
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
                border-radius: 5px !important;
                cursor: pointer;
                font-size: 14px;
            }

            .cancel {
                background-color: red;
                color: #000;
            }

            .save {
                background-color: green;
                color: white;
            }

</style>   

<body>
    <div class="tracker-container">
        <div class="tracker-header">
            <h2>View Tracker</h2>
            <img src="{{ asset('images/mother.png') }}" alt="Profile Picture" class="profile-pic">
        </div>
        <div class="section">
        <h4>Pregnancy Information</h4>
        <form class="profile-form">
            <div class="input-group">
                <label>Last Menstrual Period (LMP)</label>
                <input type="date">
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label>Number of Pregnancy</label>
                    <input type="text" placeholder="e.g. 1">
                </div>
                <div class="input-group">
                    <label>Number of Birth</label>
                    <input type="text" placeholder="e.g. 1">
                </div>
            </div>
    </div>
            <div class="input-group">
                <label>Complication (If Any)</label>
                <input type="text" placeholder="Stomach ache in the middle of the night along with severe headache">
            </div>

            <div class="button-group">
                <button class="cancel">Cancel</button>
                <button class="save">Save</button>
            </div>
    </div>
        </form>
    </div>
</body>