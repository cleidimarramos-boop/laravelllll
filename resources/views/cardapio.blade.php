<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Place - Cardápio</title>
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
        .menu-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            background: #f9f9f9;
        }
        .menu-item h4 {
            font-size: 1.3em;
            margin-bottom: 10px;
        }
        .menu-item p {
            margin-bottom: 10px;
        }
        .price {
            font-weight: bold;
            color: #d6336c;
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
    <h1>Cardápio da Pizza Place</h1>
    <h3>Nossos deliciosos sabores</h3>
    
    <div class="menu-item">
        <h4>Pizza Marguerita</h4>
        <p>Molho de tomate, queijo mozzarella, manjericão fresco.</p>
        <div class="price">R$ 65,00</div>
    </div>
    
    <div class="menu-item">
        <h4>Pizza Pepperoni</h4>
        <p>Molho de tomate, queijo mozzarella, pepperoni.</p>
        <div class="price">R$ 55,00</div>
    </div>
    
    <div class="menu-item">
        <h4>Pizza Quatro Queijos</h4>
        <p>Mozzarella, gorgonzola, parmesão, provolone.</p>
        <div class="price">R$ 75,00</div>
    </div>
    
    <div class="menu-item">
        <h4>Pizza Vegetariana</h4>
        <p>Molho de tomate, queijo, cogumelos, pimentão, cebola, azeitonas.</p>
        <div class="price">R$ 59,00</div>
    </div>
</body>
</html>