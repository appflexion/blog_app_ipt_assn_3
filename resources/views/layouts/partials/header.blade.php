<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="{{route('homepage')}}">Home</a>
         
                <a class="nav-link ml-auto" href="{{ route('posts.create') }}">Create New Post</a>
                <form method="POST" action="{{route('logout')}}">
                    {{csrf_field()}}
                    <button type="submit" class="nav-link ml-auto" href="{{ route('posts.create') }}">Logout</button>
                </form>
        </nav>
    </div>
</div>