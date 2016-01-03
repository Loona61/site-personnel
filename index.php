<!DOCTYPE HTML>
<?php
// Couleur de fond des champs si erreur saisie utilisateur
$color_form_warn="rgba(153, 0, 0, 0.5)";
// Ne rien modifier ci-dessous si vous n’êtes pas certain de ce que vous faites !
if(isset($_POST['submit'])){
	$erreur="";
	// Nettoyage des entrées
	while(list($var,$val)=each($_POST)){
	if(!is_array($val)){
		$$var=strip_tags($val);
	}else{
		while(list($arvar,$arval)=each($val)){
				$$var[$arvar]=strip_tags($arval);
			}
		}
	}
	// Formatage des entrées
	$f_1=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_1)));
	$f_2=strip_tags(trim($f_2));
	// Verification des champs
	if(strlen($f_1)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Name &raquo; est vide ou incomplet.</span>";
		$errf_1=1;
	}
	if(strlen($f_2)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Mail &raquo; est vide ou incomplet.</span>";
		$errf_2=1;
	}else{
		if(!ereg('^[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+'.
		'@'.
		'[-!#$%&\'*+\/0-9=?A-Z^_`a-z{|}~]+\.'.
		'[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+$',
		$f_2)){
			$erreur.="<li><span class='txterror'>La syntaxe de votre adresse e-mail n'est pas correcte.</span>";
			$errf_2=1;
		}
	}
	if(strlen($f_3)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Message &raquo; est vide ou incomplet.</span>";
		$errf_3=1;
	}
	if($erreur==""){
		// Création du message
		$titre="Message du Portfolio";
		$tete="from:$f_2\n";
		$corps.="Name : ".$f_1."\n";
		$corps.="Mail : ".$f_2."\n";
		$corps.="Message : ".$f_3."\n";
		if(mail("aur6l@free.fr", $titre, stripslashes($corps), $tete)){
			$ok_mail="true";
		}else{
			$erreur.="<li><span class='txterror'>Une erreur est survenue lors de l'envoi du message, veuillez refaire une tentative.</span>";
		}
	}
}
?>
<html>

<head>
    <title>Portfolio d'Aurelien CHEVALLIER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link href='css/normalize.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/totoro.css" />
    <script src="js/snap.svg-min.js"></script>
    <!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>

<body>
    <div class="background"></div>
    <div id="overlay"></div>
    <div id="page">
        <div id="entete">
            <nav id="navigation">
                <input type="checkbox" id="toggle-nav" title="menu">
                <label for="toggle-nav" onclick></label>
                <ul id="menu">
                    <div id="code">&lt/</div>
                    <li><a href="">HOME</a></li>
                    <li><a href="#about">A PROPOS</a></li>
                    <li><a href="#portfolio">PORTFOLIO</a></li>
                    <li><a href="#competences">COMPETENCES</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <div id="code">&gt</div>
                </ul>
            </nav>

            <div id="titre">
                <h1 class="plus"><a href="">Aurelien CHEVALLIER</a></h1>
                00110000111001001111001 011100011100
                <br /><p style="color:crimson; font-size:20px;">Developpeur Informatique</p>
            </div>
            
            <div class="totoro-wrapper">
                <div class="totoro"></div>
            </div>

        </div>
        
        <div class="bloc_page" id="about">
            <h1>A propos de moi</h1>
            <br /> 
            <p>Comme vous l'aurez surement vu je m'appelle <mark>Aurélien CHEVALLIER</mark>, j'ai 28ans, et pratiquement devenu un BOT a force de baigner dans l'informatique.<br />
            Ayant eu un ordinateur depuis que je suis jeune, avec une mere informaticienne, j'ai toujours été passionné par ce milieu, jusqu'a vouloir en faire mon metier.<br /><br /> 
            Je me suis tourné vers l'administration réseau pendant mes études, aimant le coté construction et faire quelques choses de ces mains et aussi car c'est ce que je savais faire de mieux.
                Apres avoir travaillé dans ce milieu en tant que <mark>Responsable informatique</mark> pour un Hopital local, je ne me voyais pas faire de la veille technologique toute ma vie et j'ai commencé m'amuser à <mark>automatiser mes taches</mark> mais aussi celle des employés en écrivant quelques programmes sous <mark>WINDEV</mark> et en <mark>développant des sites internets</mark>.<br /> <br /> 
                J'aime le coté création, et le renouveau qu'apporte chaque projet en developpement. J'ai donc décidé de faire une <mark>formation</mark> pour changer de voie et m'orienter vers le developpement. Apres 6 mois de formation pour retrouver mes bases d'écoles et apprendre de nouveaux langages, j'ai vraiment envie de continuer dans ce domaine qui m'attire.<br /> <br /> 
                Passionné par les <mark>jeux vidéo et les nouvelles technologies</mark>, j'aimerais integré un éditeur de jeux video pour inclure dans mon métier une de mes passions, et car je connais tres bien ce milieu, je serais donc encore plus pointilleux dans ce domaine.
            Mais le develloppement sous toutes ces formes m'attire et j'aimerais vraiment rejoindre une équipe pour faire de ce rêve une réalité.<br /> <br /> 
                N'ayant <mark>pas de point d'attache, je suis pret a me deplacer tres loin pour reussir mes projets, et suis ouvert à toutes proposition</mark>.</p>
            
            Vous pouvez retrouver mon <mark>CV</mark> au format PDF: <a style="color:red;" href="cv/CV_CHEVALLIER.pdf">ICI</a> 
        </div>

        <div class="bloc_page portfolio" id="portfolio">
            <h1>Mon Portfolio</h1>
                <section id="grid" class="grid clearfix">
                    <a href="http://amenagementdeltaservice.fr/" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                            <img src="images/deltaservice.jpg" />
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,160 0,218 0,0 180,0 z" />
                            </svg>
                            <figcaption>
                                <h2>Delta Service</h2>
                                <p>Modification d'un template wordpress existant pour coller aux besoins de l'entreprise.</p>
                                <button>Voir</button>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="http://aurelienchevallier.com/projet_musique/" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                            <img src="images/projet_musique.jpg" />
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,160 0,218 0,0 180,0 z" />
                            </svg>
                            <figcaption>
                                <h2>Site de Musique</h2>
                                <p>Repro d'un template de musique en HTML + JS(player).</p>
                                <button>Voir</button>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="http://aurelienchevallier.com/jeu_js/" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                            <img src="images/jeu_js.jpg" />
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,160 0,218 0,0 180,0 z" />
                            </svg>
                            <figcaption>
                                <h2>Jeu de Plateau</h2>
                                <p>Creation d'un jeu de plateau en JS.</p>
                                <button>Voir</button>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="http://www.lesbonsavis-suresnes.fr/" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                            <img src="images/lebonavis.jpg" />
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,160 0,218 0,0 180,0 z" />
                            </svg>
                            <figcaption>
                                <h2>Le Bon Avis</h2>
                                <p>Utilisation de requete SQL specifique a Wordpress (appel de catégorie etc..).</p>
                                <button>View</button>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="http://ch-sees.fr/" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                            <img src="images/ch-sees.jpg" />
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,160 0,218 0,0 180,0 z" />
                            </svg>
                            <figcaption>
                                <h2>Hopital de Sees</h2>
                                <p>Creation d'un template sous Wordpress.</p>
                                <button>Voir</button>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                            <img src="images/6.png" />
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,160 0,218 0,0 180,0 z" />
                            </svg>
                            <figcaption>
                                <h2>Windev</h2>
                                <p>Programme de sauvegarde de données, tri et gestion des redondances.</p>
                                <button>Voir</button>
                            </figcaption>
                        </figure>
                    </a>
                </section>
        </div>

        <div class="bloc_page" id="competences">
                <h1>Mes Compétences</h1>
                <div class="chart" data-percent="95">HTML5</div>
                <div class="chart" data-percent="95">CSS3</div>
                <div class="chart" data-percent="75">PHP</div>
                <div class="chart" data-percent="75">SQL</div>
                <div class="chart" data-percent="75">Javascript</div>
                <div class="chart" data-percent="70">Bootstrap</div>
                <div class="chart" data-percent="60">Ruby</div>
                <div class="chart" data-percent="35">C++</div>
                <div class="chart" data-percent="30">C#</div>
                <div class="chart" data-percent="20">Java</div>
                <div class="chart" data-percent="30">VBA</div>
        </div>
        
        <? if($ok_mail=="true"){ ?>
            <div class="bloc_page" id="contact">
                <span class='txtform'>Le message ci-dessous a bien été transmis, et nous vous en remercions.</span>
                <br />
                <?echo nl2br(stripslashes($corps));?>
                <br />
                <span class='txtform'>J'y répondrais dans les meilleurs délais.<br>A bientôt.</span>
            </div>
        <? }else{ ?>
            <div class="bloc_page" id="contact">
                <h1>Contact</h1>
                <form action='index.php#contact' method='post' name='Contact' class="contact">
                    <? if($erreur){ ?><tr><td colspan='2' bgcolor='red'><span class='txterror'><font color='white'><b>&nbsp;ERREUR, votre message n'a pas été transmis</b></font></span></td></tr><tr><td colspan='2'><ul><?echo$erreur?></ul></td></tr><?}?>
                    <div class="textContact">
                        <label class="label" for="Name">Nom <span>(requis)</span></label>
                        <input class="cellules" type="text" name="f_1" style=' <?if($errf_1==1){print("; background-color: ".$color_form_warn);}?>;' value='<?echo stripslashes($f_1);?>'>
                    </div>
                    <div class="textContact">
                        <label class="label">E-mail <span>(requis)</span></label>
                        <input class="cellules" type="email" name="f_2" style=' <?if($errf_2==1){print("; background-color: ".$color_form_warn);}?>;' value='<?echo stripslashes($f_2);?>'>
                    </div>
                    <div class="textContact">
                        <label class="label">Message <span>(requis)</span></label>
                        <textarea rows="8" name="f_3"  style=' <?if($errf_3==1){print("; background-color: ".$color_form_warn);}?>;'><?echo$f_3?></textarea>
                    </div>
                    <input type="submit" value="Envoyer »" class="submit"  name='submit'>
                </form>
            </div>
        <? } ?>

        <nav id="social">
            <ul>
                <li><a href="https://twitter.com/DevAurelien"><span class="fa fa-twitter fa-lg"></span></a></li>
                <li><a href="https://github.com/Loona61"><span class="fa fa-github fa-lg"></span></a></li>
            </ul>
        </nav>

        <a href="#entete" class="cd-top">Top</a>
        
        <footer>
            <p> DESIGN BY CHEVALLIER Aurelien </p>
        </footer>
    </div>
    <script type="text/javascript" src="js/fonction.js"></script>
</body>

</html>