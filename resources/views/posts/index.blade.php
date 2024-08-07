<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        .blog {
            padding: 5px;
            border-buttom: 1px solid lightgrey;
        }
        .small{
            color : grey;
        }
    </script>

</head>
<body>
    <div class="container">
        <h2>
            Blog Codepolitan
            <a href="{{url('posts/create')}}" class="btn btn-success">+ Buat Postingan</a>
        </h2>

        <!-- Pedefinisian php di laravel blade -->
        @foreach($posts as $post) 
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated at {{ date("d M Y H:i", strtotime($post->created_at))}}</small></p>
                    <a href="{{ url("posts/$post->id")}}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ url("posts/$post->id/edit")}}" class="btn btn-warning">Edit</a>
                </div>
            </div>

        @endforeach

        
    </div>
</body>
</html>