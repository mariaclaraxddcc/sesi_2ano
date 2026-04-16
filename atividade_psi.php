<?php

$op = "x";
$nome = "x";


    
while ($op != 6) {
print ("menu \n");
print ("1 - login \n");
print ("2 - Objetivos da PSI \n");
print ("3 - Responsabilidade\n");
print ("4 - Boas práticas de segurança \n");
print ("5 - Consequências do descumprimento \n");
print ("6 - Sair \n");

$op = readline("Digite sua escolha: ");

switch ($op) {
case 1:
    $nome = readline("Digite seu nome: ");
    $op = readline("Digite o seu CPF: ");
    echo "Bem vindo, $nome!";
    break;

case 2 :
    $op = readline ("");
    echo "como objetivo: mitigar riscos, prevenir crimes cibernéticos, estabelecer normas 
    de comportamento e garantir conformidade legal, como com a LGPD.";
    break;

case 3 :
    $op = readline ("");
    echo "é o princípio de que a proteção dos ativos de informação é um dever 
    compartilhado por todos na organização, não se limitando apenas à equipe de TI";
    break;

case 4 :
    $num1 = readline ("");
    echo "As boas práticas funcionam como o manual de conduta para a equipe, alinhando tecnologia,
    pessoas e processos para evitar ameaças internas e externas.";
    break;

case 5 :
    $num1 = readline ("");
  
    echo "O descumprimento da PSI refere-se à violação das regras e diretrizes estabelecidas
    para proteger os ativos de informação de uma organização, podendo ser intencional ou acidental.
    As consequências visam garantir a responsabilização legal, 
    a integridade dos dados e o cumprimento de normas como a LGPD. ";
        
case 6: 
    echo "sair";    
}

} 
?>