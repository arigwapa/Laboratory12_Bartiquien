<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BlogApp | Bartiquien</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <div class="container mt-3 d-flex justify-content-center align-items-center">
            <div class="profile-body d-flex justify-content-start align-items-center">
                <div class="mx-4 d-block justify-content-start align-items-center w-100">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/hellokitty.jpg') }}" alt="User Profile">
                        <div class="col mt-2">
                            <h5>Disney Princess</h5>
                            <h6>Friends <i class="bi bi-people-fill"></i></h6>
                        </div>
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="{{ url('/posts/edit') }}">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3">Title</p>
                    <p class="mt-3">Content</p>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
