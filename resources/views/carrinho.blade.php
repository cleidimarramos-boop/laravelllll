<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Place - Carrinho</title>
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
        .wrapper {
            max-width: 940px;
            margin: 0 auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }
        .header h1 {
            margin: 0;
            font-size: 2.2rem;
        }
        .order-card {
            background: white;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
        }
        .alert {
            margin-bottom: 18px;
            padding: 14px 18px;
            border-radius: 12px;
            border: 1px solid #d1d5db;
            background: #ecfeff;
            color: #0f766e;
        }
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }
        .cart-table th,
        .cart-table td {
            padding: 14px 12px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }
        .cart-table th {
            color: #334155;
        }
        .cart-table td:last-child {
            text-align: right;
        }
        .cart-table .price {
            color: #b91c1c;
            font-weight: bold;
        }
        .remove-button {
            padding: 8px 14px;
            background: #ef4444;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .remove-button:hover {
            background: #dc2626;
        }
        .order-form {
            display: grid;
            gap: 16px;
        }
        .order-form label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
        }
        .order-form input,
        .order-form textarea {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            border: 1px solid #cbd5e1;
        }
        .order-form button {
            width: fit-content;
            padding: 12px 24px;
            border: none;
            border-radius: 12px;
            background: #dc2626;
            color: white;
            cursor: pointer;
            font-weight: 700;
        }
        .order-form button:hover {
            background: #b91c1c;
        }
        .summary {
            font-weight: 700;
            color: #0f172a;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="/">Home</a>
        <a href="/sobre">Sobre</a>
        <a href="/cardapio">Cardápio</a>
        <a href="/promocao">Promoção</a>
        <a href="/pedido">Pedido</a>
    </div>
    <div class="wrapper">
        <div class="header">
            <div>
                <h1>Seu Carrinho</h1>
                <p>Confira seus itens antes de finalizar o pedido.</p>
            </div>
            <div class="summary">
                Total: R$ {{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 2, ',', '.') }}</div>
        </div>

        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert" style="background: #fee2e2; color: #991b1b; border-color: #fca5a5;">{{ session('error') }}</div>
        @endif

        <div class="order-card">
            @if(empty($cart))
                <p>Seu carrinho está vazio. <a href="/cardapio">Adicione pizzas agora</a>.</p>
            @else
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td class="price">R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</td>
                                <td>
                                    <form action="/carrinho/remover" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                                        <button type="submit" class="remove-button">Remover</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <form action="/pedido/finalizar" method="POST" class="order-form">
                    @csrf
                    <div>
                        <label for="cliente">Nome do cliente</label>
                        <input type="text" id="cliente" name="cliente" required>
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" required>
                    </div>
                    <div>
                        <label for="endereco">Endereço</label>
                        <textarea id="endereco" name="endereco" rows="3" required></textarea>
                    </div>
                    <button type="submit">Finalizar Pedido</button>
                </form>
            @endif
        </div>
    </div>
</body>
</html>