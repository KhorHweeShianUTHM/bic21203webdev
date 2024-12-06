<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            max-width: 400px;
            width: 100%;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-container input, .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form-container input:focus, .form-container select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-container button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .form-container small {
            color: #777;
            display: block;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Register Page</h1>
        <form action="insert.php" method="post">
            <label for="matric">Matric:</label>
            <input type="text" name="matric" id="matric" placeholder="Enter your matric number" required>
            
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            
            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="">Please select</option>
                <option value="lecturer">Lecturer</option>
                <option value="student">Student</option>
            </select>
            
            <button type="submit" name="submit">Register</button>
        </form>
        <small>Already have account? <a href="login_form.php">Sign up</a></small>
    </div>
</body>

</html>