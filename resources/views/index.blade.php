<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>

<h2>Mini Réseau Social</h2>

<a href="/logout">Logout</a>

<hr>

<h3>Créer un post</h3>

<form method="POST" action="/posts">
    @csrf

    <textarea name="content" placeholder="Votre post..." required></textarea>

    <br><br>

    <button type="submit">Publier</button>

</form>

<hr>

<h3>Liste des posts</h3>

@foreach($posts as $post)

<div style="border:1px solid black;padding:10px;margin:10px">

    <p>
        <strong>{{ $post->user->name }}</strong>
    </p>

    <p>{{ $post->content }}</p>

    <p>Likes : {{ $post->likes->count() }}</p>

    <!-- Like -->
    <form method="POST" action="/like/{{ $post->id }}">
        @csrf
        <button type="submit">Like</button>
    </form>

    <br>

    <!-- Modifier -->
    @if(session('user_id') == $post->user_id)

    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')

        <input type="text" name="content" value="{{ $post->content }}">

        <button type="submit">Modifier</button>

    </form>

    <br>

    <!-- Supprimer -->
    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('DELETE')

        <button type="submit">Supprimer</button>

    </form>

    @endif

</div>

@endforeach

</body>
<style>
            body {
                margin: 0;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #3a3d5c, #5a79ba, #8da3cc, #3a3d5c);
                background-size: 200% 200%;
                animation: gradientAnimation 6s infinite;
                color: white;
                text-align: center; }
            @keyframes gradientAnimation {
                0% {background-position: 0% 50%;}
                50% {background-position: 100% 50%;}
                100% {background-position: 0% 50%;}}
            h1 {text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);}
        </style>
</html>