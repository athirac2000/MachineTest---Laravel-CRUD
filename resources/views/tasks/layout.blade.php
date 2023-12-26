<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-iwkgJkPppftYeC/lhJ9ZRzWsRlMQ5BwCgjd3npkj7FFJKuzqk6WoN43qgC1cWyhN1OFplUJTwv5A5oUZ/7Y0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background: linear-gradient(to right, #f5f4f5, #dddcde);
            color: #ffffff; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 8px;
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .table {
            background-color: #ffffff;
        }
        .thead-light th {
            background-color: #f0f0f0;
        }
        .table th, .table td {
            border: 1px solid #dee2e6;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body style="background-color: #f0f0f0;">
<header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
    <div class="container">
    
        @yield('content')
        
    </div>
    <footer class="mt-5" style="position: absolute; bottom: 0; width: 100%; background-color: #f8f9fa; padding: 10px;">
        <div class="text-center">
            <p>&copy; 2023 My Task Manager. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            });
        }
    </script>
    <script>
        function confirmUpdate() {
            Swal.fire({
                title: 'Task Updated!',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000, 
                onClose: () => {
                    document.getElementById('updateForm').submit();
                    
                }
            });
        }
    </script>
</body>
</html>
