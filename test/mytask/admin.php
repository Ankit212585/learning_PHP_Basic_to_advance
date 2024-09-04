<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: View Submissions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Form Submissions</h1>
        <table>
            <thead>
                <tr>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Depart Date</th>
                    <th>Return Date</th>
                    <th>Passengers</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Read the stored data from the file
                $file = 'submissions.txt';
                if (file_exists($file)) {
                    $data = file($file);

                    // Display each line as a table row
                    foreach ($data as $line) {
                        echo "<tr>";
                        $fields = explode(',', $line);
                        foreach ($fields as $field) {
                            echo "<td>" . htmlspecialchars(trim($field)) . "</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No submissions found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>