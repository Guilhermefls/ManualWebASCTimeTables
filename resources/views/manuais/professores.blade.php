@extends('layouts.app')
@section('content')
    <h1>Restrições por professores:</h1>
    <ul>
        <li>
            <span class="opener">Restrições</span>
            <ul>
                <li><a href="#restricaon1">Restrição n°1</a><li>
            </ul>
        </li>
    </ul>
    <h3 id="restricaon1">Restrição de Professores n°1</h3>
        <p>
            Os docentes, principalmente os que moram em uma cidade diferente do campus, solicitam que as suas aulas sejam concentradas em no máximo 3 dias na semana;
        </p>
        <p>
            para fazer isso vamos começar com os seguintes passos:
        </p>
        <ol>
            <li>SELECIONAR O TIPO DE RELAÇÃO: ESPECIFICANDO NA CAIXA ABAIXO DO TIPO DE RELAÇÃO O NÚMERO LIMITE DE DIAS.</li>
            <img src="../../../public/images/pr1.png">
            <li>SELECIONAR O TIPO DE APLICAÇÃO: </li>
            <li>UTILIZAR O FILTRO PARA INDICAR OS PROFESSORES , TURMAS, E DISCIPLINAS A SEREM AFETADAS, ALÉM DE INDICAR OS DIAS E PERÍODOS DE APLICAÇÃO.</li>
            <li>POR ÚLTIMO E NÃO MENOS IMPORTANTE, DEVE SE SELECIONAR O GRAU DE IMPORT NCIA DESSA RESTRIÇÃO QUE O SOFTWARE DEVE LEVAR EM CONSIDERAÇÃO NA HORA DE GERAR O HORÁRIO, OUTRA COISA IMPORTANTE É CITAR UMA OBSERVAÇÃO PARA A RESTRIÇÃO, CONFERINDO UMA IDENTIFICAÇÃO RÁPIDA DO CARTÃO DE RESTRIÇÃO.</li>
        </ol>
    <h3>Restrição de Professores n°2</h3>
        <p>
            Alguns professores  pedem para que suas aulas não sejam nos primeiros horários, principalmente docentes que possuem filhos ou aqueles que fazem o uso de medicações que podem retardar a cognição durante um certo período;
        </p>
        <p>
            Para resolver esse tipo de situação devemos restringir a colocação dos cartões das aulas desses professores, usando a relação “cartão não pode iniciar nas posições selecionadas”.
        </p>
        <ol>
            <li>SELECIONAR O TIPO DE RELAÇÃO:</li>
            <li>SELECIONAR O TIPO DE  APLICAÇÃO:</li>
            <li>UTILIZAR O FILTRO PARA INDICAR OS PROFESSORES, TURMAS, E DISCIPLINAS A SEREM AFETADAS, ALÉM DE INDICAR OS DIAS E PERÍODOS DE APLICAÇÃO - Selecione de maneira específica os professores afetados e os primeiros horários dos dias:</li>
            <li>SELECIONAR O GRAU DE IMPORT NCIA DESSA RESTRIÇÃO E ESCREVER UMA OBSERVAÇÃO PARA FACILITAR A IDENTIFICAÇÃO.</li>
        </ol>
@endsection