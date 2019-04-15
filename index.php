<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url("jap2.jpg");
            background-repeat: no-repeat;
            
            
        }
        
        fieldset {
            display: block;
            margin: 8%;
            margin-left: auto;
            margin-right: auto;
            width: 280px;
            height: 300px;
            border: 2px solid white;
            border-radius: 3px;
            background-color: white;
        }
        
        input {
            margin:3px;
        }
    </style>
</head>
<body>
    <main>
        <fieldset>
            <h1>Welcome</h1>
            <h3>Please Login</h3>
            <label>User:</label><br>
            <input type="text" name="user"><br>
            <label>Password:</label><br>
            <input type="password" name="pass"><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
    </main> 
</body>
</html>
