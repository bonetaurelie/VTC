<?php
if(isset($_GET['champ'])){?>
    <div class="corps message col-lg-9 col-md-9 col-sm-9 col-xs-11">
        <?php echo "Les champs avec une astérisque doivent être renseignés";?>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['adresse'])){?>
    <div class="corps message col-lg-9 col-md-9 col-sm-9 col-xs-11">
        <?php echo "L'adresse n'est pas valide";?>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['entete'])){?>
    <div class="corps message col-lg-9 col-md-9 col-sm-9 col-xs-11">
        <?php echo 'En-têtes interdites dans les champs du formulaire';?>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['mail'])){?>
    <div class="corps message col-lg-9 col-md-9 col-sm-9 col-xs-11">
        <?php
        echo("<script>alert('E-mail envoyé avec succès, nous vous répondrons dans les plus brefs délais')</script>");
        echo("<script>window.location = 'http://http://markowski-chausseur-paris.com';</script>");

        ?>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['erreur'])){?>
    <div class="corps message col-lg-9 col-md-9 col-sm-9 col-xs-11">
        <?php  echo 'Erreur d\'envoi de l\'e-mail';?>
    </div>
    <?php
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>ALBIN VTC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="boutique chaussures paris, magasin chaussures de qualité, chaussures de qualité, chaussures en cuir, chaussures cousu Goodyear, bon rapport qualité prix, chaussures de luxe, chaussures luxe hommes, souliers, souliers hommes, bottes et bottines hommes, chaussures derby hommes, mocassin hommes, chaussures richelieu homme, chaussures daim hommes">
    <meta name="description" content="ALBIN VTC se situe dans le vaucluse à Valreas et propose ses services aussi dans la Drôme">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <div class="container corps">
        
        <!--HEADER-->
        <div itemscope itemtype="http://schema.org/WPHeader" class="row">
            <img itemprop="description" src="img/logo_large.png" alt="Albin VTC" title="Albin VTC" class="Albin VTC">
        </div>

        <!--SECTION1-->
        <section>
            <h1 itemprop="name">ALBIN VTC</h1>
            <div itemscope itemtype="http://schema.org/Thing" class="blockSection row align-items-center">
                <img itemprop="image" src="img/MarkowskiBoutique.jpg" alt="photo de la boutique" title="boutique" class="boutique col-md-6">
                <div class="presentation col-md-6">
                    <h4 class="text-center">Nous avons su évoluer<br>
                    Et ne pas rester sur les acquis vieillissants Markowski</h4>
                    <p itemprop="description" class="section1 text-center">
                        Nous avons créé Prince-Jorge en 2012/2013<br>
                        En toute confidentialité au côté de Markowski<br><br>

                        Nous avons laissé le temps à notre clientèle<br>
                        D’apprécier ce nouveau concept/positionnement<br>
                        Et surtout de créer une nouvelle dynamique<br>
                        En améliorant considérablement la chaussure Markowski en soulier Prince-Jorge …<br><br>

                        ...c'est une forme de renaissance et surtout et toujours dans la qualité.<br><br>

                        Nous avons commencé l'aventure Prince-Jorge en proposant 3 modèles en mai 2013<br>
                        Aujourd’hui une large collection de souliers avec différents types de montage<br>
                        Et deux formes majeures vous sont proposées !<br><br>

                        Et d'autres projets de souliers Prince-Jorge sont à venir<br>
                        Pour tout les amoureux de beaux souliers à prix abordable et juste<br>
                        À suivre...
                    </p>
                    <a itemprop="url" href="http://www.prince-jorge.com" target="_blank" class="btn btn-secondary redirection" role="button">vers Prince-Jorge  <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>


        <!--SECTION2-->
        <section>
            <div class="blockSection2 row align-items-center">
                <!--<div itemscope itemtype="http://schema.org/ContactPage" class="col-md-6">
                    <h2 itemprop="name">Nous contacter</h2>
                    <form class="form-horizontal" action="send.php" method="post">
                        <div class="form-group row">
                            <label for="nom" class="col-sm-2 col-md-3 col-form-label">Nom*</label>
                            <div class="col-sm-10 col-md-8 ">
                                <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-md-3 col-form-label">Email*</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephone" class="col-sm-2 col-md-3 col-form-label">Téléphone</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="Téléphone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="objet" class="col-sm-2 col-md-3 col-form-label">Objet*</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" name="objet" class="form-control" id="objet" placeholder="Objet">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-md-3 col-form-label">Message*</label>
                            <div class="col-sm-10 col-md-8">
                                <textarea name="message" class="form-control" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-3 col-md-6 col-sm-4 col-5">
                                <input type="submit" class="form-control center-block envoyer" name="envoyer" value="Envoyer" />
                            </div>
                        </div>
                    </form>

                </div>-->
                <img itemprop="logo" src="img/logo.png" alt="logo Prince-Jorge" title="logo Prince-Jorge" class="logo">
            </div>
        </section>
    </div>     



    <!--FOOTER-->
    <footer>
        <div itemscope itemtype="http://schema.org/WPFooter" class="container-fluid footer">
            <div><p itemprop="copyrightHolder" class="copyright">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> Markowski 2017</p></div>
            <div><a itemprop="url" class="mentions" href="mentions.php" target="_blank">Mentions légales</a></div>
            <div><p itemprop="description" class="reseaux">Suivez-nous sur <a href="https://www.facebook.com/princejorgeparis/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> et <a href="https://www.instagram.com/princejorgeparis/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></p></div>
        </div>
    </footer>







<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>