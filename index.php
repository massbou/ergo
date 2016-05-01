<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>BOUNEFFA 11310939 - ABEBE 1311388 </title>
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="./css/responsive.css" />
        <link rel="shortcut icon" href="./pics/Favicon.png">
    </head>
    <body>
        <?php include('./includes/header.php'); ?>

        <div id="bienvenu" class="bienvenu">
            <div class="wrap-bienvenu">
                <div class="logo">
                    <?php include('./includes/Ucbl.php'); ?>
                </div>
                <div class="contenu">
                    <h1> UNIVERSITE CLAUDE BERNARD LYON1 </h1>
                    <p> L'université Claude-Bernard Lyon 1 (ou parfois UCBL) est une université française spécialisée dans les domaines des sciences et technologies,
                        de la santé et des sciences du sport. Elle a été créée officiellement en 1971 par le regroupement de la faculté des sciences de Lyon, fondée en 1808 et de la faculté de médecine,
                        fondée en 1874. Elle doit son nom au physiologiste Claude Bernard. Depuis 2007, elle fait partie de l'université de Lyon.
                    </p>
                </div>
                <div class="links">
                    <a href="#sec-edt" class="descend"></a>
                </div>
            </div>

        </div>

        <div id="sec-edt" class="sec-edt">
            <h1> EMPLOI DU TEMPS </h1>
            <p>
                L’emploi du temps vous permet de voir les enseignements auxquels vous êtes inscrit tout au long de la semaine.
                L’emploi du temps peut changer à tout moment si votre enseignant qui est chargé décide de faire quelques modifications.
                Veillez bien à le consulter avant de partir en cours. Et si vous demandez une assiduité à un cours, cet emploi du temps pourra vous servir comme
                preuve de justification auprès de votre employeur par exemple.
            </p>
            <div class="links">
                <a href="#sec-notes" class="descend"></a>
                <a href="#bienvenu" class="monte"></a>
            </div>
            <a class="btn-edt" href="http://adelb.univ-lyon1.fr/" target="_blank">Voir l'Emploi du temps</a>
        </div>

        <div id="sec-notes" class="sec-notes">
            <h1> NOTES </h1>
            <p>
                Les enseignants chargés de votre cours publierons les résultats que vous avez obtenus sur cette page. Votre note ne sera visible que pour vous et les enseignants
                ayant le droit.
                Mais vous aurez quelques statistiques, c’est-à-dire votre classement par rapport à votre groupe de td et par rapport à l’ensemble des
                étudiants inscrits à l’UE (unité d’enseignement).
                Les informations indiquées ici ne sont pas officielles, elles n'ont pas de valeur légale et sont soumises à validation par les jurys d'UE.
            </p>
            <div class="links">
                <a href="#sec-plan" class="descend"></a>
                <a href="#sec-edt" class="monte"></a>
            </div>
            <a class="btn-notes" href="https://tomusss.univ-lyon1.fr" target="_blank">voir ses notes</a>
        </div>

        <div id="sec-plan" class="sec-plan">
            <h1> PLAN </h1>
            <p>
                Vous retrouverez le plan de l’université du domaine de la doua, la partie Ouest et Est sur ce site.
                Si vous ne reconnaissiez pas le bâtiment, vous avez la possibilité de cliquer sur les bâtiments pour avoir plus de renseignements sur
                l’adresse et les amphithéâtres qu’ils contiennent. Les enseignements se feront dans les bâtiments en orange.
            </p>
            <a class="btn-plan" href="http://oscar.univ-lyon1.fr/appli-externe/plan/plans/plan_campus_ouest.html" target="_blank">se repérer</a>
            <div class="links">
                <a href="#sec-notes" class="monte"></a>
            </div>
        </div>

        <script  language="JavaScript" type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script  language="JavaScript" type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script language="JavaScript" type="text/javascript" src="./js/fonction.js"></script>
    </body>
</html>
