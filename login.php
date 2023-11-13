<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #3CEF8D ; /* Warna hijau */
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 100px;
            text-align: center;
        }

        .container h2 {
            color: #333;
        }

        .input-group {
            margin: 10px 0;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .input-group input[type="submit"] {
            background-color: #3CEF8D ;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign in</h2>
        <form action="proses_login.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
