﻿<!DOCTYPE html>



<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Prune</title>
    <link rel="stylesheet" type="text/css" href="Prune.css" media="all" />
</head>


<body>

<?php
function read_bits($ip,$port,$debut,$nbits)
{
require_once dirname(__FILE__) . '\ModbusMaster.php';
$modbus = new ModbusMaster($ip, "TCP", $port);
$recData = $modbus->readCoils(1, $debut, $nbits);
return $recData;
}
$a=5;
echo $a;
$message = read_bits('192.168.001.100',0,1,10);
echo $message;
echo $a;
?>

    <!--En-t�te du site-->
    <header>
        <div id="titre"> <img src="prune_logo.png" />  Prune </div>
    </header>

    <!--Menu du site-->
    <nav>
        <table width=100% height=100%>
            <tr>
                <td class="menu"><a href="Accueil.html" class="menu">Accueil</a></td>
                <td class="menu"><a href="Services.html" class="menu">Nos services</a></td>
                <td class="menu"><a href="Equipe.html" class="menu">L'équipe</a></td>
                <td class="menu"><a href="Contact.html" class="menu">Contact</a></td>
            </tr>
        </table>
    </nav>

    <!--Contenu de la page-->
    <article>

        <aside>
            <h3><strong>Agenda:</strong></h3>
            <ul>
                <li><strong>11/10/18: Montrer mon travail à l'�quipe</li>
                <li><strong>24/12/18: Fêter (un bon anniversaire à) Noël</li>
                <li><strong>01/01/45: Avoir 1 million sur mon compte en banque</li>
            </ul>
        </aside>

        <h1> Bienvenue sur le site officiel de <div id="prune">Prune</div> </h1>
        <p> Je suis  très heureux que vous vous retrouviez sur cette page. En effet, j'en suis assez fier puisque je ne pensais pas tellement arriver au cours d'AWAIE avec quelque chose qui ressemble à quelque chose. D'autant plus que j'ai codé �a sur bloc notes. En effet, j'avais lanc� le téléchargement de Visual Studio avant de commencer cette page mais malheureusement, apr�s avoir s�lectionner plusieurs packages pour anticiper mon utilisation du logiciel, ce dernier s'est mis à les télécharger pour les installer. Il fallait donc que je patiente longtemps. J'espère même que demain matin cela sera terminé. N'hésitez pas à me donnner vos retours sur la page pour qu'elle puisse s'améliorer.</p>

		<?php
		echo read_bits("192.168.001.100",502,0,10);
		?>
		
    </article>

    <!--Pied de page-->
    <footer></footer>

</body>


</html>