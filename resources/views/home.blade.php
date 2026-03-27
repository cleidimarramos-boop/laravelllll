<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Place - Home</title>
    <style>
        body {
            background: linear-gradient(to bottom, #ffcccc, #ffffff);
            font-family: Arial, sans-serif;
            color: #ca1e1e;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        h3 {
            font-size: 1.5em;
            margin-bottom: 30px;
        }
        .pizza-icon {
            font-size: 5em;
            margin-bottom: 20px;
        }
        .nav {
            margin-bottom: 40px;
        }
        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #9f8d93;
            font-weight: bold;
        }
        .nav a:hover {
            color: #ff6b9d;
        }
        .btn {
            background: #d6336c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
        }
        .btn:hover {
            background: #ff6b9d;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="/">Home</a>
        <a href="/sobre">Sobre</a>
        <a href="/cardapio">Cardápio</a>
        <a href="/promocao">Promoção</a>
    </div>
    <div class="pizza-icon"></div>
    <h1>Bem-vindo à Pizza Place!</h1>
    <h3>As melhores pizzas da cidade</h3>
    <p>Feitas com ingredientes frescos e muito amor.</p>
    <button class="btn" onclick="window.location.href='/cardapio'">Ver Cardápio</button>
</body>
</html>