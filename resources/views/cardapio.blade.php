<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Place - Cardápio</title>
    <style>
        body {
            background: #fff5f7;
            font-family: Arial, sans-serif;
            color: #1f1f1f;
            padding: 30px;
        }
        .nav {
            margin-bottom: 30px;
            text-align: center;
        }
        .nav a {
            margin: 0 12px;
            text-decoration: none;
            color: #b91c1c;
            font-weight: bold;
        }
        .nav a:hover {
            color: #e11d48;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
        .top-bar h1 {
            margin: 0;
            font-size: 2.4rem;
        }
        .top-bar .cart-link {
            padding: 12px 20px;
            background: #dc2626;
            color: white;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 600;
        }
        .top-bar .cart-link:hover {
            background: #b91c1c;
        }
        .status {
            margin-bottom: 18px;
            padding: 14px 18px;
            border-radius: 10px;
            background: #ecfdf5;
            color: #166534;
            border: 1px solid #a7f3d0;
        }
        .menu-grid {
            display: grid;
            gap: 18px;
        }
        .menu-item {
            background: white;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 12px 24px rgba(15, 23, 42, 0.08);
        }
        .menu-item h4 {
            margin: 0 0 10px;
            font-size: 1.4rem;
            color: #991b1b;
        }
        .menu-item p {
            margin: 0 0 12px;
            color: #475569;
        }
        .price {
            font-weight: bold;
            color: #dc2626;
        }
        .menu-item form {
            margin-top: 14px;
        }
        .menu-item input[type="number"] {
            width: 80px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            margin-right: 10px;
        }
        .menu-item button {
            padding: 10px 16px;
            border: none;
            border-radius: 10px;
            background: #dc2626;
            color: white;
            cursor: pointer;
            font-weight: 600;
        }
        .menu-item button:hover {
            background: #b91c1c;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="/">Home</a>
        <a href="/sobre">Sobre</a>
        <a href="/cardapio">Cardápio</a>
        <a href="/promocao">Promoção</a>
        <a class="cart-link" href="/carrinho">Ver Carrinho</a>
    </div>

    <div class="top-bar">
        <div>
            <h1>Cardápio da Pizza Place</h1>
            <p>Escolha seus sabores e adicione ao carrinho para finalizar o pedido.</p>
        </div>
        <a class="cart-link" href="/carrinho">Ir para Carrinho</a>
    </div>

    @if(session('success'))
        <div class="status">{{ session('success') }}</div>
    @endif

    <div class="menu-grid">
        @foreach($items as $item)
            <div class="menu-item">
                <h4>{{ $item['name'] }}</h4>
                <p>{{ $item['description'] }}</p>
                <div class="price">R$ {{ number_format($item['price'], 2, ',', '.') }}</div>
                <form action="/carrinho/adicionar" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item['id'] }}">
                    <input type="hidden" name="name" value="{{ $item['name'] }}">
                    <input type="hidden" name="price" value="{{ $item['price'] }}">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>