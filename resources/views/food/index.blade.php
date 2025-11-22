<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Comidas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .header h1 {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .header p {
            color: #64748b;
            margin-top: 8px;
            font-size: 1.1rem;
        }

        .add-btn {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 10px 30px rgba(79, 70, 229, 0.4);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .add-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(79, 70, 229, 0.6);
        }

        .add-btn::before {
            content: '+';
            font-size: 1.5rem;
            font-weight: bold;
        }

        .stats {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #10b981, #059669);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stats-label {
            color: #64748b;
            font-size: 1.1rem;
            margin-top: 5px;
        }

        .table-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table thead {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        }

        .table th {
            padding: 20px;
            text-align: left;
            font-weight: 600;
            color: #475569;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table td {
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: rgba(79, 70, 229, 0.05);
            transform: scale(1.01);
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .food-id {
            font-weight: 600;
            color: #94a3b8;
        }

        .food-name {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .food-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        .food-name a {
            color: #1e293b;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .food-name a:hover {
            color: #4f46e5;
        }

        .calories-badge {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
        }

        .actions {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
            cursor: pointer;
        }

        .btn-edit {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.4);
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.6);
        }

        .btn-delete {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            box-shadow: 0 5px 15px rgba(239, 68, 68, 0.4);
        }

        .btn-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.6);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-icon {
            font-size: 4rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .empty-title {
            font-size: 1.5rem;
            color: #475569;
            margin-bottom: 10px;
        }

        .empty-description {
            color: #94a3b8;
            margin-bottom: 30px;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
            }

            .header h1 {
                font-size: 2rem;
            }

            .table-container {
                overflow-x: auto;
            }

            .table {
                min-width: 600px;
            }

            .actions {
                flex-direction: column;
                gap: 5px;
            }

            .btn {
                font-size: 0.8rem;
                padding: 8px 16px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .header {
                padding: 20px;
            }

            .header h1 {
                font-size: 1.8rem;
            }
        }

        /* Animações */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .container > * {
            animation: fadeIn 0.6s ease forwards;
        }

        .container > *:nth-child(2) {
            animation-delay: 0.1s;
        }

        .container > *:nth-child(3) {
            animation-delay: 0.2s;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div>
                <h1>Gerenciar Cardápio</h1>
                <p>Gerencie os itens do seu cardápio digital</p>
            </div>
            <a href="food.create" class="add-btn">Adicionar Comida</a>
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="stats-number">{{ count($allFood) }}</div>
            <div class="stats-label">Total de Itens no Cardápio</div>
        </div>

        <!-- Table -->
        <div class="table-container">
            @if(count($allFood) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Prato</th>
                        <th>Calorias</th>
                        <th style="text-align: right;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allFood as $food)
                    <tr>
                        <td>
                            <span class="food-id">#{{ $food->id }}</span>
                        </td>
                        <td>
                            <div class="food-name">
                                <div class="food-avatar">🍽️</div>
                                <a href="/food/{{ $food->id }}">{{ $food->name }}</a>
                            </div>
                        </td>
                        <td>
                            <span class="calories-badge">{{ $food->calories }} cal</span>
                        </td>
                        <td>
                            <div class="actions">
                                <a href="/food/{{ $food->id }}/edit" class="btn btn-edit">
                                    ✏️ Editar
                                </a>
                                <form action="/food/{{ $food->id }}" method="POST" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-delete" 
                                            onclick="return confirm('Tem certeza que deseja deletar este item?')">
                                        🗑️ Deletar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="empty-state">
                <div class="empty-icon">🍽️</div>
                <h3 class="empty-title">Nenhuma comida cadastrada</h3>
                <p class="empty-description">Comece adicionando o primeiro item ao seu cardápio.</p>
                <a href="/food/create" class="add-btn">Adicionar Primeira Comida</a>
            </div>
            @endif
        </div>
    </div>
</body>
</html>