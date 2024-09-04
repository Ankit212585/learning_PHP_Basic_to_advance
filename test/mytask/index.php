<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .ourform {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #333;
        }

        p {
            font-size: 1rem;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
            color: #333;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus {
            border-color: #4facfe;
            outline: none;
            box-shadow: 0 0 8px rgba(79, 172, 254, 0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4facfe;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #00c6ff;
        }
    </style>
</head>

<body>

    <div class="ourform">
        <h1>Travel Form</h1>
        <form method="get" action="./mydata.php">
            <p>Origin</p>
            <input type="text" name="origin" placeholder="Enter your origin" />
            <p>Destination</p>
            <input type="text" name="Destination" placeholder="Enter your destination" />
            <p>Depart Date</p>
            <input type="date" name="Depart_Date" />
            <p>Return Date</p>
            <input type="date" name="Return_Date" />
            <p>No. of Passengers</p>
            <input type="number" name="Passengers" placeholder="Number of Passengers" />
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter your email" />
            <button type="submit">Search</button>
        </form>
    </div>

</body>

</html>