<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Checker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Student Result Checker</h2>
        <form id="resultForm" action="get_student_info.php" method="POST">
            <label for="roll">Enter Roll:</label>
            <input type="text" id="roll" name="roll" required>
            <label for="registration">Enter Registration Number:</label>
            <input type="text" id="registration" name="registration" required>
            <button type="submit">Check your Info</button>
        </form>
        
    </div>


</body>
</html>
