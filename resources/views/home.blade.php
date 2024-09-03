<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buses Project</title>
    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <style>
        /* General Body Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

/* Container Styles */
.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    padding: 20px;
    overflow: hidden;
}

/* Navigation Styles */
nav {
    background-color: #007BFF; /* Improved color */
    padding: 10px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

nav ul {
    padding: 0;
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
}

nav ul li {
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: white;
    padding: 10px 20px;
    display: inline-block;
    font-size: 16px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

nav ul li a:hover {
    background-color: #0056b3; /* Darker shade for hover effect */
    color: #e2e6ea;
    border-radius: 6px;
}

/* Page Content Styles */
main {
    background: white;
    padding: 20px;
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Headings and Text */
h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
}

    </style>
</head>

<body>
    <!-- Main Container -->
    <div class="container">
        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                <li><a href="{{ url('/resume') }}">Resume</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
        <!-- Page Content -->
        <main>
            <!-- Your page content goes here -->
        </main>
    </div>
</body>

</html>
