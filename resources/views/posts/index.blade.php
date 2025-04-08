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

        <div class="container mt-5 d-flex justify-content-center align-items-center">
            <div class="profile-card d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/hellokitty.jpg') }}" alt="User Profile">
                <button class="mind-button btn " onclick="location.href='posts/create';">
                    What's on your mind, Disney Princess?
                </button>

            </div>
        </div>

        @foreach ($posts as $post)
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
                                    <li><a class="dropdown-item" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('posts.show', $post->id) }}">Show
                                            Post</a></li>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger">Delete</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <p class="mt-3"><strong>{{ $post->title }}</strong></p>
                    </div>
                </div>
            </div>
        @endforeach

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
