@extends('layouts.app')
@section('head')
<title>Professores</title>
<link rel="stylesheet" href="{{asset('assets/css/myStyle.css')}}" />
@endsection
@section('content')
    <div class="content">
        <h1>Restrições por professores:</h1>
        <nav id="menu">
            <ul>
                <li>
                    <span style="color: blue" class="opener">Restriçao por professores</span>
                    <ul>
                        <li><a href="#restricao1">Agrupamento de aulas para docentes</a></li>
                        <li><a href="#restricao2">Restrição de Horários Iniciais</a></li>
                        <li><a href="#restricao3">Ministrar Disciplina em Dia Único</a></li>

                    </ul>
                </li>
            </ul>
        </nav>
        <div class="restricao">
            <h3 id="restricao1">Agrupamento de aulas</h3>
            <p>
                Os docentes, principalmente os que moram em uma cidade diferente do campus, solicitam que as suas aulas sejam concentradas em no máximo 3 dias na semana;
            </p>
            <p>
                Para fazer isso vamos começar com os seguintes passos:
            </p>
            <ol>
                <li>SELECIONAR O TIPO DE RELAÇÃO: ESPECIFICANDO NA CAIXA ABAIXO DO TIPO DE RELAÇÃO O NÚMERO LIMITE DE DIAS.</li>
                <img src="{{ asset('images/PR1.png') }}" alt="Descrição da imagem">
                <li>SELECIONAR O TIPO DE APLICAÇÃO: </li>
                <img src="{{asset('images/PA1.png')}}">
                <li>UTILIZAR O FILTRO PARA INDICAR OS PROFESSORES , TURMAS, E DISCIPLINAS A SEREM AFETADAS, ALÉM DE INDICAR OS DIAS E PERÍODOS DE APLICAÇÃO.</li>
                <img src="{{asset('images/PF1.png')}}">
                <li>POR ÚLTIMO E NÃO MENOS IMPORTANTE, DEVE SE SELECIONAR O GRAU DE IMPORT NCIA DESSA RESTRIÇÃO QUE O SOFTWARE DEVE LEVAR EM CONSIDERAÇÃO NA HORA DE GERAR O HORÁRIO, OUTRA COISA IMPORTANTE É CITAR UMA OBSERVAÇÃO PARA A RESTRIÇÃO, CONFERINDO UMA IDENTIFICAÇÃO RÁPIDA DO CARTÃO DE RESTRIÇÃO.</li>
                <img src='{{asset('images/PI1.png')}}'>
            </ol>
        </div>
        <hr>
        <div class="restricao">
            <h3 id="restricao2">Restrição de Horários Iniciais</h3>
            <p>
                Alguns professores  pedem para que suas aulas não sejam nos primeiros horários, principalmente docentes que possuem filhos ou aqueles que fazem o uso de medicações que podem retardar a cognição durante um certo período;
            </p>
            <p>
                Para resolver esse tipo de situação devemos restringir a colocação dos cartões das aulas desses professores, usando a relação “cartão não pode iniciar nas posições selecionadas”.
            </p>
            <ol>
                <li>SELECIONAR O TIPO DE RELAÇÃO:</li>
                <img src="{{asset('images/PR2.png')}}">
                <li>SELECIONAR O TIPO DE  APLICAÇÃO:</li>
                <img src="{{asset('images/PA2.png')}}">
                <li>UTILIZAR O FILTRO PARA INDICAR OS PROFESSORES, TURMAS, E DISCIPLINAS A SEREM AFETADAS, ALÉM DE INDICAR OS DIAS E PERÍODOS DE APLICAÇÃO - Selecione de maneira específica os professores afetados e os primeiros horários dos dias:</li>
                <img src="{{asset('images/PF2.png')}}">
                <li>SELECIONAR O GRAU DE IMPORT NCIA DESSA RESTRIÇÃO E ESCREVER UMA OBSERVAÇÃO PARA FACILITAR A IDENTIFICAÇÃO.</li>
                <img src="{{asset('images/PI2.png')}}">
            </ol>
        </div>
        <hr>
        <div class="restricao">
            <h3 id=restricao3>Ministrar Disciplina em Dia Único</h3>
            <p>Os docentes pedem para ministrar a mesma disciplina em apenas um dia da semana<p>
            <p>Limitar por meio de relações de cartões o número máximo de dias na semana que o professor pode ministrar essa aula em específico - utilizando o tipo de relação “Máximo de dias por semana”.
                deve se seguir as seguintes orientações:
            </p>
            <ol>
                <li>SELECIONAR O TIPO DE RELAÇÃO,LIMITANDO O MÁXIMO DE DIAS NA SEMANA QUE A DISCIPLINA PODE SER MINISTRADA  NA CAIXA LOGO ABAIXO DO TIPO DE RELAÇÃO:</li>
                <img src="{{asset('images/PR3.png')}}">
                <li>SELECIONAR O TIPO DE APLICAÇÃO - deve-se aplicar primeiramente à todas as turmas selecionadas e posteriormente no filtro especificar a disciplina:</li>
                <img src="{{asset('images/PA3.png')}}">
                <li>UTILIZAR O FILTRO - aplicar globalmente aos professores, especificar as turmas que recebem a disciplina que precisa ser condensada e selecionar a disciplina, marcar os horários onde a disciplina pode ser alocada.                </li>
                <img src="{{asset('images/PF3.png')}}">
                <li>POR FINAL - Selecionar o grau de importância da relação e adicionar uma observação.</li>
                <img src="{{asset('images/PI3.png')}}">
            </ol>
        </div>
    </div>
@endsection