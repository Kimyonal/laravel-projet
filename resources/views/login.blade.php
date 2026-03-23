<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<center>
<body>
<tbody>
<h1><b>Connexion</b></h1>

<form method="POST" action="/login">
    @csrf
<table>
        <tr>
            <td width="168"><input id="username" type="text" placeholder="Nom d'utilisateur, email ou numero de telephone" size=45 required></td>
        </tr>
        <tr>
            <td><input id="password" type="password" placeholder="Mot de passe" size=45 required></td>
        </tr>
        <td>
    <center>
    <button type="submit">Login</button>
    </center>
    </td>
<tr><tr><tr></tr>
        <tr>
        <td>
<center>
<a href="/register">Créer un compte</a>
</center>
        </td>
        </tr>
</form>
</tbody>
</body>
</center>
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