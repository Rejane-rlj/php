<?php
$jogador1 ="Pedra";
$jogador2 ="Papel";

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