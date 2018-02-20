<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        
    </head>
    <body>
        <h1 style="text-align: center"> Parabéns, você está na página 2 </h1>

        {{ $variavel1 }}

        <br>

        {{ $variavel2 }}

        <h1 style="text-align: center"> Treino Lista </h1>

        @foreach($vetor as $v)
        	<li> {{ $v }} </li>
        @endforeach	
    </body>
</html>
