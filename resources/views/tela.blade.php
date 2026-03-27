<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Tela Laravel</title>
    <link rel="stylesheet" href="/css/tela.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Tela Simples em Laravel</h1>
            <p>Uma página estática desenvolvida com HTML e CSS dentro do projeto Laravel.</p>
        </header>

        <section class="card">
            <h2>Bem-vindo(a)!</h2>
            <p>Esta tela foi criada diretamente como uma view Blade e estilizada com um arquivo CSS externo no diretório <code>public/css</code>.</p>

            <div class="features">
                <div class="feature-item">
                    <h3>HTML simples</h3>
                    <p>Conteúdo estruturado usando tags HTML básicas e sem dependências externas.</p>
                </div>
                <div class="feature-item">
                    <h3>CSS personalizado</h3>
                    <p>Design limpo e responsivo com cores suaves, sombras e botões acessíveis.</p>
                </div>
                <div class="feature-item">
                    <h3>Rota Laravel</h3>
                    <p>Esta tela é exibida pela rota <code>/tela</code> definida em <code>routes/web.php</code>.</p>
                </div>
            </div>

            <div class="button-row">
                <a href="/">Voltar para Home</a>
            </div>
        </section>
    </div>
</body>
</html>
