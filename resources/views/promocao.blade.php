<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Place - Promoção</title>
    <style>
        body {
            background: rgb(255, 255, 255);
            font-family: Arial, sans-serif;
            color: rgb(237, 11, 11);
            text-align: center;
            padding: 50px;
        }
        .nav {
            margin-bottom: 40px;
        }
        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: rgb(237, 11, 11);
            font-weight: bold;
        }
        .nav a:hover {
            color: #ff6b9d;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        h3 {
            font-size: 1.5em;
            margin-bottom: 30px;
        }
        .promo {
            margin-bottom: 30px;
            border: 2px solid #d6336c;
            padding: 20px;
            border-radius: 10px;
            background: #ffe6e6;
        }
        .promo h4 {
            font-size: 1.3em;
            margin-bottom: 10px;
        }
        .promo p {
            margin-bottom: 10px;
        }
        .discount {
            font-weight: bold;
            color: #d6336c;
            font-size: 1.2em;
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
    <h1>Promoções da Pizza Place</h1>
    <h3>Ofertas imperdíveis!</h3>
    
    <div class="promo">
        <h4>Segunda-feira: Pizza Família</h4>
        <p> 2 Pizza grande + 1 refrigerantes por apenas R$ 50,00</p>
        <div class="discount">Economize R$ 15,00!</div>
    </div>
    
    <div class="promo">
        <h4>Terça-feira: Desconto para Estudantes</h4>
        <p>Apresente carteirinha e ganhe 20% de desconto em qualquer pizza.</p>
        <div class="discount">Até R$ 10,00 de desconto!</div>
    </div>
    
    <div class="promo">
        <h4>Quarta-feira: Combo Duplo</h4>
        <p>Duas pizzas médias por R$ 60,00</p>
        <div class="discount">Melhor preço!</div>
    </div>
    
    <div class="promo">
        <h4>Sexta-feira: Happy Hour</h4>
        <p>De 17h às 19h, todas as pizzas com 15% de desconto.</p>
        <div class="discount">Aproveite!</div>
    </div>
</body>
</html>