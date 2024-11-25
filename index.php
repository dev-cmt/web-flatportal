<html lang="en">
<head>
    <title>Flat Buy/Sales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php
    if (isset($_GET['message'])) {
        if ($_GET['message'] === 'success') {
            echo '<div class="alert alert-success">Form submitted successfully!</div>';
        } elseif ($_GET['message'] === 'error') {
            echo '<div class="alert alert-danger">There was an error saving your data. Please try again.</div>';
        }
    }
    ?>
    <h1 class="text-center">Personal Information</h1>

    <div class="container">
        <form action="store.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter Your Name...">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control" placeholder="Enter Your Age...">
            </div>
            <div class="mb-3">
                <label class="form-label">Date Of Birth</label>
                <input type="date" name="dob" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Color</label>
                <input type="color" name="color" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" placeholder="Enter Your Phone Number...">
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>


</body>
</html>
