<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Response</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, coral, #ff704d);
            font-family: "Segoe UI", Arial, sans-serif;
            color: #fff;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 80px auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .highlight {
            font-size: 26px;
            color: yellow;
            margin: 15px 0;
        }

        hr {
            border: none;
            height: 2px;
            background: #fff;
            width: 80%;
            margin: 25px auto;
        }

        .footer {
            margin-top: 30px;
            font-size: 28px;
            font-weight: bold;
            color: #ffe066;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome!!!</h1>
        <div class="highlight">
            <?php echo $_POST["name"]; ?>
        </div>

        <h1>Thank you for your feedback as:-</h1>
        <div class="highlight">
            <?php echo $_POST["feedback"]; ?>
        </div>

        <hr>

        <h1 class="footer">THANK YOU!!!</h1>
    </div>
</body>
</html>
