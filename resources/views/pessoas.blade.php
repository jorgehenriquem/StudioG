
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Filme</th>
                                    <th>Ano de Lançamento</th>
                                    <th>Pontuação</th> 
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($PessoasJson as $pessoa)
                                <tr>

                                    <td>{{ $pessoa->name_personagem }}</td>
                                    <td>{{ $pessoa->idade }}</td>
                                    <td>{{ $pessoa->filmes['titulo']}}</td>
                                    <td> {{ $pessoa->filmes['ano_lancamento']}}</td>
                                    <td> {{ $pessoa->filmes['pontuacao'] }}</td>

                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

    </body>
</html>
