<?php

/* Template Name: Nieuws */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>News Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Details</a>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Onderwerpen</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Internationaal</a></li>
                        <li class="list-group-item"><a href="#">Politiek</a></li>
                        <li class="list-group-item"><a href="#">Sport</a></li>
                        <li class="list-group-item"><a href="#">Media</a></li>
                        <li class="list-group-item"><a href="#">Regionaal</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h3>Breaking News</h3></div>
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                            ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light text-center py-3">
        &copy; 2023 News Detail. All rights reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
