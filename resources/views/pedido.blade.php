<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Place - Pedido</title>
    <style>
        body {
            background: #f8fafc;
            font-family: Arial, sans-serif;
            color: #0f172a;
            padding: 30px;
        }
        .nav {
            margin-bottom: 24px;
            text-align: center;
        }
        .nav a {
            margin: 0 12px;
            text-decoration: none;
            color: #b91c1c;
            font-weight: bold;
        }
        .nav a:hover {
            color: #ef4444;
        }
        .main {
            max-width: 860px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
        }
        h1 {
            margin-top: 0;
            font-size: 2.2rem;
        }
        p {
            color: #334155;
            line-height: 1.75;
        }
        .status-box {
            margin: 20px 0;
            padding: 18px;
            border-radius: 16px;
            background: #fef3c7;
            border: 1px solid #f59e0b;
            color: #92400e;
        }
        .order-info {
            margin-top: 20px;
        }
        .order-info strong {
            display: inline-block;
            width: 120px;
            color: #1f2937;
        }
        .items {
            margin-top: 20px;
            border-top: 1px solid #e2e8f0;
            padding-top: 18px;
        }
        .item-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        .item-row:last-child {
            border-bottom: none;
        }
        .item-row span {
            color: #475569;
        }
        .total {
            margin-top: 16px;
            font-size: 1.1rem;
            font-weight: 700;
            color: #111827;
            text-align: right;
        }
        .actions {
            margin-top: 28px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .actions a {
            padding: 12px 18px;
            border-radius: 12px;
            text-decoration: none;
            color: white;
            background: #dc2626;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="/">Home</a>
        <a href="/sobre">Sobre</a>
        <a href="/cardapio">Cardápio</a>
        <a href="/promocao">Promoção</a>
        <a href="/carrinho">Carrinho</a>
    </div>

    <div class="main">
        @if(!$order)
            <h1>Nenhum pedido em andamento</h1>
            <p>Você ainda não finalizou um pedido. Volte para o <a href="/cardapio">cardápio</a> e adicione pizzas ao carrinho.</p>
        @else
            <h1>Pedido em andamento</h1>
            <div class="status-box">
                <strong>Status:</strong> {{ $order['status'] }}<br>
                <strong>Hora:</strong> {{ $order['created_at'] }}
            </div>
            <div class="order-info">
                <p><strong>Cliente:</strong> {{ $order['cliente'] }}</p>
                <p><strong>Telefone:</strong> {{ $order['telefone'] }}</p>
                <p><strong>Endereço:</strong> {{ $order['endereco'] }}</p>
            </div>
            <div class="items">
                @foreach($order['items'] as $item)
                    <div class="item-row">
                        <span>{{ $item['quantity'] }}x {{ $item['name'] }}</span>
                        <span>R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</span>
                    </div>
                @endforeach
            </div>
            <div class="total">Total do pedido: R$ {{ number_format($order['total'], 2, ',', '.') }}</div>
            <div class="actions">
                <a href="/cardapio">Adicionar mais pizzas</a>
                <a href="/carrinho">Ver carrinho</a>
            </div>
        @endif
    </div>
</body>
</html>