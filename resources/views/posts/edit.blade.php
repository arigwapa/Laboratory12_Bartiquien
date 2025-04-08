<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Post Card</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')

            <div class="create-post-card">
                <h5 class="text-center mb-3">Edit post</h5>

                <div class="profile d-flex align-items-center mb-3 ">
                    <img src="{{ asset('images/hellokitty.jpg') }}" alt="User Profile">

                    <div>
                        <div class="fw-bold">Disney Princess</div>
                        <small class="text-muted"><i class="bi bi-people-fill"></i> Friends</small>
                    </div>
                </div>

                <input type="text" name="title" class="post-input" placeholder="Title" value="{{ $post->title }}"
                    required>
                <textarea name="body" class="post-input" rows="3" placeholder="What's on your mind?">{{ $post->body }}</textarea>

                <div class="d-flex justify-content-between align-items-center mt-3 p-2 border rounded">
                    <div class="add-to-post-icons">
                        <i class="bi bi-card-image"></i>
                        <i class="bi bi-person-plus-fill"></i>
                        <i class="bi bi-emoji-smile"></i>
                        <i class="bi bi-geo-alt-fill"></i>
                        <i class="bi bi-file-earmark-play"></i>
                    </div>
                </div>

                <button class="btn btn-primary post-btn mt-3">Save Changes</button>

        </form>

        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    </body>

</html>
