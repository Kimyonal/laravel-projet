<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<center>
<h1><b>Créer un compte</b></h1>

<form method="POST" action="/register">
    @csrf
<table border=2>
    <tbody>
    <form>    
    <tr>
        <td bgcolor="aliceblue" align="center"><font face="Arial Black" color="black">Nom:</font></td>
        <td><input id="name" type="text" placeholder="Entrez votre nom" size=40</td>
        </tr>
    <tr>
            <td bgcolor="aliceblue" align="center"><font face="Arial Black" color="black">Email:</font></td>
            <td><input id="email" type="text" size=40 placeholder="Entrez votre adresse email"</td>
            </tr> 
        <tr>
            <td bgcolor="aliceblue" align="center"><font face="Arial Black" color="black">Crée un mot de passe:</font></td>
            <td><input id="password" type="password" size=40 placeholder="Crée un mot de passe"</td>
        </tr>
        </form>
    </tbody>
    </table>
    <button type="submit">S'inscrire</button>
</form>
<br>
<td><a href="/login">Déjà un compte ? Login</a></td>
</center>
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
                color: white;
                text-align: center; }
            @keyframes gradientAnimation {
                0% {background-position: 0% 50%;}
                50% {background-position: 100% 50%;}
                100% {background-position: 0% 50%;}}
            h1 {text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);}
        </style>
</html>