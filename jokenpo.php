<?php
$jogador1 = readline("Faça sua jogada :");
//$jogador2 = readline("Faça sua jogada: ");
$jogadas = ["Pedra" , "Papel"  ,"Tesoura"];
$jogador2 = $jogadas[array_rand($jogadas)];
echo "$jogador2 \n";

if($jogador1 === "Pedra"){
    if($jogador2 === "Pedra"){
        echo "Empate\n";
    }
    else if($jogador2 === "Papel"){
        echo"jogador 2 Ganhou!\n";
    }
    else if($jogador2 === "Tesoura"){
        echo "jogador 1 Ganhou\n";
    }
}

else if($jogador1 === "Tesoura"){
    if($jogador2 === "Tesoura"){
        echo "Empate\n";
    }
    else if($jogador2 === "Papel"){
        echo"jogador 2 Ganhou!\n";
    }
    else if($jogador2 === "Papel"){
        echo "jogador 1 Ganhou\n";
    }
}


else if($jogador1 === "Papel"){
    if($jogador2 === "Pedra"){
        echo "jogador 1 Ganhou\n";
    }
    else if($jogador2 === "Tesoura"){
        echo"jogador 2 Ganhou!\n";
    }
    else if($jogador2 === "Papel"){
        echo "Empate\n";
    }
}
?>