<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$items = [
    ['id' => 1, 'name' => 'Pizza Marguerita', 'description' => 'Molho de tomate, queijo mozzarella, manjericão fresco.', 'price' => 65.00],
    ['id' => 2, 'name' => 'Pizza Pepperoni', 'description' => 'Molho de tomate, queijo mozzarella, pepperoni.', 'price' => 55.00],
    ['id' => 3, 'name' => 'Pizza Quatro Queijos', 'description' => 'Mozzarella, gorgonzola, parmesão, provolone.', 'price' => 75.00],
    ['id' => 4, 'name' => 'Pizza Vegetariana', 'description' => 'Molho de tomate, queijo, cogumelos, pimentão, cebola, azeitonas.', 'price' => 59.00],
];

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/cardapio', function () use ($items) {
    return view('cardapio', compact('items'));
});

Route::post('/carrinho/adicionar', function (Request $request) {
    $data = $request->validate([
        'id' => 'required|integer',
        'name' => 'required|string|max:100',
        'price' => 'required|numeric',
        'quantity' => 'required|integer|min:1',
    ]);

    $cart = session('cart', []);
    $key = $data['id'];

    if (isset($cart[$key])) {
        $cart[$key]['quantity'] += $data['quantity'];
    } else {
        $cart[$key] = [
            'id' => $data['id'],
            'name' => $data['name'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
        ];
    }

    session(['cart' => $cart]);
    return back()->with('success', 'Item adicionado ao carrinho.');
});

Route::get('/carrinho', function () {
    $cart = session('cart', []);
    return view('carrinho', compact('cart'));
});

Route::post('/carrinho/remover', function (Request $request) {
    $id = $request->input('id');
    $cart = session('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session(['cart' => $cart]);
    }

    return back()->with('success', 'Item removido do carrinho.');
});

Route::post('/pedido/finalizar', function (Request $request) {
    $cart = session('cart', []);

    if (empty($cart)) {
        return back()->with('error', 'Adicione ao menos um item ao carrinho antes de finalizar o pedido.');
    }

    $data = $request->validate([
        'cliente' => 'required|string|max:80',
        'telefone' => 'required|string|max:20',
        'endereco' => 'required|string|max:200',
    ]);

    $total = array_reduce($cart, function ($sum, $item) {
        return $sum + ($item['price'] * $item['quantity']);
    }, 0);

    $order = [
        'cliente' => $data['cliente'],
        'telefone' => $data['telefone'],
        'endereco' => $data['endereco'],
        'items' => array_values($cart),
        'total' => $total,
        'status' => 'Pedido em andamento',
        'created_at' => date('d/m/Y H:i:s'),
    ];

    session(['order' => $order, 'cart' => []]);
    return redirect('/pedido')->with('success', 'Pedido finalizado com sucesso. Acompanhe o andamento!');
});

Route::get('/pedido', function () {
    $order = session('order');
    return view('pedido', compact('order'));
});

Route::get('/pedido/andamento', function () {
    $order = session('order');
    return view('pedido', compact('order'));
});

Route::get('/promocao', function () {
    return view('promocao');
});

Route::get('/pagina1', function () {
    return view('pagina1');
});

Route::get('/tela', function () {
    return view('tela');
});

Route::get('/doceria', function () {
    return view('doceria');
});
