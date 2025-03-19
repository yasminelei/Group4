<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
    <link rel="stylesheet" type="text/css" href="welcomestyle.css">
    <style>
        /* Scrollable container */
        .container {
            width: 100%;
            height: 100vh;
            overflow-y: auto;
            scroll-behavior: smooth;
        }


        /* Sections */
        .section {
            width: 100%;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: url('images/mainbackground.png') no repeat center fixed;
        }


        /* Styling Form */
        form {
            width: 80%;
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }


        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: darkred;
        }


        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }


        input, textarea {
            width: 95%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1.5px solid #5c0000;
    
        }


        .btn-container {
            text-align: center;
            margin-top: 20px;
        }


        button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }


        .btn-save {
            background-color: darkred;
            color: white;
        }


        .btn-exit {
            background-color: gray;
            color: white;
        }
    </style>
</head>
<body>


    <div class="top-right">
        <a href="records.php" class="button">RECORDS</a>
    </div>


    <div class="container">


        <!-- Patient Information Section -->
        <section class="section" id="section1">
            <form action="process.php" method="POST">
                <h2>Patient Information</h2>

                <label>Name</label>
                <input type="text" name="name" required>
                <label>Age</label>
                <input type="number" name="age" required>
                <label>Course</label>
                <input type="text" name="course" required>
                <label>Year</label>
                <input type="text" name="year" required>
                <label>Blood Pressure</label>
                <input type="text" name="bp" required>
                <label>Temperature</label>
                <input type="text" name="temp" required>
                <label>Heart Rate</label>
                <input type="text" name="heart_rate" required>
                <label>Oxygen Saturation</label>
                <input type="text" name="oxygen" required>
                <label>Respiratory Rate</label>
                <input type="text" name="resp_rate" required>
            </form>
        </section>


        <!-- Complaints and Nursing Interventions Section -->
        <section class="section" id="section2">
            <form action="process.php" method="POST">
                <h2>Complaints & Nursing Interventions</h2>
                <label>Complaints</label>
                <textarea name="complaints" rows="4"></textarea>
                <label>Nursing Interventions</label>
                <textarea name="interventions" rows="4"></textarea>
                <div class="btn-container">
                    <button type="submit" class="btn-save">SAVE</button>
                </div>
            </form>
        </section>


    </div>


    <div class="bottom-left">
        <a href="index.php" class="button">EXIT</a>
    </div>


</body>
</html>



