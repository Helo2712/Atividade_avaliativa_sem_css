<?php

if (isset($_GET['turma'])) {
    $turma = $_GET['turma'];
    
  
    $turmas = array(
        "INFD3" => array(
            "16117" => "Amanda Oliveira Santos",
            "16557" => "Bruno Penteado Carrara",
            "16563" => "Cibele Souza de Almeida",
            "16119" => "Danilo Rafhael",
            "16121" => "Érika Cavalcanti"
        ),
        "CTI2" => array(
            "17427" => "Diogo Vinicius Oliveira",
            "17428" => "Douglas José Figueiredo",
            "17429" => "Emily Da Silva Farias"
        ),
        "INFN3" => array(
            "16227" => "Andre Ricardo Martins",
            "16573" => "Andre Schinor Mena Peres",
            "16228" => "Beatriz Santos de Mello",
            "16229" => "Caio Ramos Ballarin",
            "16231" => "Carlos Eduardo Lima"
        )
    );
    
    
    if (array_key_exists($turma, $turmas)) {
        
        echo "<h1>Alunos da turma $turma:</h1>";
        echo "<ul>";
        foreach ($turmas[$turma] as $matricula => $nome) {
            echo "<li>Matrícula: $matricula - Nome: $nome</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Turma não encontrada.</p>";
    }
} else {
    echo "<p>Por favor, forneça uma turma.</p>";
}
?>