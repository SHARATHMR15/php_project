<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Registration Form</title>
    <link rel="stylesheet" href="style.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>

<div class="container">
    <h2>Online Registration Form</h2>

    <form action="process.php" method="POST" id="regForm">
        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone Number</label>
        <input type="text" name="phone" required>

        <label>Gender</label>
        <select name="gender" required>
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <label>Course</label>
        <input type="text" name="course" required>

        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>
