<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #333;
            color: white;
        }

        header a {
            color: white;
            text-decoration: none;
            margin-right: 1rem;
        }

        i{
        	color:#000;
        }

        main {
            flex: 1;
            padding: 1rem;
        }

        footer {
            padding: 1rem;
            background-color: #333;
            color: white;
            text-align: center;
        }
        th, td{
            padding: .5rem;
        }
        .pagination {
            padding: 1rem;
            display: flex;
            gap:1rem;
            list-style: none;
        }
        .pagination li a{
            color:#000;
            font-weight:bold;
            text-decoration: none;
        }
        .pagination span{
            display: none;
        }
    </style>
</head>
<body>

    <header>
        <a href="/"> 
            <svg fill="#fff" width="30" height="30" viewBox="0 0 472 472"><path d="M236 0C106 0 0 106 0 236s106 236 236 236 236-106 236-236S366 0 236 0zm-189 236c0-102 81-185 181-189-67 36-113 106-113 188 0 83 48 155 118 190-105-2-186-86-186-189z"/>
            </svg>
        </a>
        <nav>
            <a href="{{ url('/produtos') }}">Produtos</a>
            <a href="{{ url('/produtos/create') }}">Cadastrar</a>
        </nav>
    </header>

    <main>
        <h2 style="margin-bottom: 1rem;">@yield('title')</h2>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }}</p>
    </footer>

</body>
</html>