<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Islam Kinasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #85C7B3 0%, #68A895 100%);
            color: white;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.6);
        }
        .navbar-brand img {
            height: 50px; /* Adjust logo height */
        }
        .nav-link {
            color: white !important;
        }
        .welcome-section {
            padding: 50px 20px;
            text-align: center;
           
            border-radius: 10px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?php echo e(asset('path/to/logo.png')); ?>" alt="School Logo"> TK Islam Kinasih
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('teachers.index')); ?>">Teacher's Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('events.index')); ?>">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('activities.index')); ?>">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container welcome-section">
    <h1>Welcome to TK Islam Kinasih</h1>
    <p>Your journey to learning begins here!</p>
    <button class="btn btn-success">Daftar</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\cobalah\tk-islam-kinasih\resources\views/home.blade.php ENDPATH**/ ?>