<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Amazone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css?skjncjjd">
</head>
<body>
    <main class="container-fluid p-0">
        <?php
            include('header.html');
        ?>
        <!------------ Breadcrumb ------------>
        <div class="pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a class="breadcrumb-color" href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-color" href="liste.php">Tablettes graphiques</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wacom Intuos Pro Pen</li>
                </ol>
            </nav>
        </div>

            <!------------ PICTURE AND INFO PRODUCT ------------>
            <section class="py-2 w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 h-100 rounded" src="../assets/images/prod1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 h-100 rounded" src="../assets/images/prod1.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 h-100 rounded" src="../assets/images/prod1.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <figcaption class="figure-caption">Intuos Pro Pen & Touch. Wacom</figcaption>
                    </div>
                    <div class="col-sm-6 pl-2 bloc-product">
                        <div class="row">
                            <div class="col-md-9">
                                <h1 class="product-name">Tablette Graphique - Intuos Pro Pen & Touch</h1>
                                <i class="fa fa-star yellow" aria-hidden="true"></i>
                                <i class="fa fa-star yellow" aria-hidden="true"></i>
                                <i class="fa fa-star yellow" aria-hidden="true"></i>
                                <i class="fa fa-star yellow" aria-hidden="true"></i>
                                <i class="fa fa-star grey" aria-hidden="true"></i>

                            </div>
                            <div class="col-md-3 d-flex ">
                                <i class="fa fa-heart like" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p class="maker pb-2">Wacon</p>
                        <h2 class="pb-3">185 €</h2>
                        <div class="py-1 row no-gutters">
                            <p class="category"> Couleur</p>
                            <div class="ml-3" role="group">
                                <button type="button" class="btn-color bg-black"></button>
                                <button type="button" class="btn-color bg-grey"></button>
                            </div>
                        </div>
                        <div class="py-1">
                            <p class="category">Taille</p>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Small
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <a class="dropdown-item" href="#">Large</a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary my-5">Ajouter au panier</button>
                    </div>
                </div>
            </section>
            <!------------ MORE INFO PRODUCT ------------>
        <div class="center py-3">
            <section>
                <div id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header row" role="tab" id="headingOne">
                            <h5 class="mb-0 col-6">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Infos de livraison
                                </a>
                            </h5>
                            <div class="col-6 d-flex justify-content-end">
                                <i class="fa fa-plus plus" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <span class="stock">En stock</span><br>
                                <div class="pt-2">
                                    <p>Livré avant Noël. Choisissez votre option de livraison au cours de votre commande.
                                        Voulez-vous le faire livrer le lundi 11 déc.? Commandez-le dans les 23 h et 12 mins et choisissez la Livraison en soirée au cours de votre commande. En savoir plus.
                                        Expédié et vendu par Amazon. Emballage cadeau disponible.</p>
                                    <p>Note: Cet article est éligible à la livraison en points de collecte.
                                        <a tabindex="0" class="detail popover-dismiss" role="button" data-toggle="popover" data-trigger="focus" title="Click and Collect avec les points de collecte Amazon"
                                           data-content="
                                                        Choisissez parmi 17 000 points de collecte en France
                                                        Les membres du programme Amazon Prime bénéficient de livraison gratuites illimitées
                                                        Comment commander vers un point de collecte ?
                                                        Trouvez votre point de collecte et ajoutez-le à votre carnet d’adresses
                                                        Sélectionnez cette adresse lors de votre commande">
                                            Détails
                                        </a>
                                    </p>
                                    <p class="available"><a href="#">7 neufs</a> à partir de <strong>EUR 185,90</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center row" role="tab" id="headingTwo">
                            <h5 class="mb-0 col-6">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Descriptif du produit
                                </a>
                            </h5>
                            <div class="col-6 d-flex justify-content-end">
                                <i class="fa fa-plus plus" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th scope="row">Marque</th>
                                        <td>Wacom</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Numéro du modèle de l'article</th>
                                        <td>PTH-451-FRNL</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Séries</th>
                                        <td>Intuos Pro S, FR & NL</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Couleur</th>
                                        <td colspan="2">Noir</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Garantie constructeur</th>
                                        <td colspan="2">Garantie Fabricant : 1 an(s)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Plate-forme du matériel informatique</th>
                                        <td colspan="2">PC / Mac</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Description du clavier</th>
                                        <td colspan="2">Français</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type d'alimentation</th>
                                        <td colspan="2">USB</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type de connectivité</th>
                                        <td colspan="2">Sans-fil</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Interface du matériel informatique</th>
                                        <td colspan="2">USB 2.0</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type de connecteur</th>
                                        <td colspan="2">USB</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Item dimensions du clavier</th>
                                        <td colspan="2"> L x W x H	20.8 x 32 x 32 centimètres</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Poids du produit</th>
                                        <td colspan="2"> 660 grammes</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header row" role="tab" id="headingThree">
                            <h5 class="mb-0 col-6">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Politique de retour
                                </a>
                            </h5>
                            <div class="col-6 d-flex justify-content-end">
                                <i class="fa fa-plus plus" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Politique de retour Amazon.fr: Si vous n’êtes pas satisfait d'un produit que vous avez commandé auprès
                                d'Amazon.fr ou si celui-ci est défectueux ou endommagé, vous pouvez nous le retourner sous 30 jours suivant l
                                a date de livraison, et nous vous rembourserons ou remplacerons l'intégralité de l'article. Pour plus d’informations,
                                veuillez consulter notre page en savoir plus sur les Retours et remboursements. Si un défaut apparaissait
                                sur votre produit… En savoir plus
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!------------ SLIDER MORE PRODUCTS ------------>
            <section class="p-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item2 active">
                            <div class="row w-100 justify-content-center">
                                <img class="d-block rounded w-25 h-100 mx-3" src="../assets/images/more-products1.jpg" alt="First slide">
                                <img class="d-block rounded w-25 h-100 mx-3" src="../assets/images/more-products2.jpg" alt="First slide">
                                <img class="d-block rounded w-25 h-100 mx-3" src="../assets/images/more-products3.jpg" alt="First slide">
                            </div>
                        </div>
                        <div class="carousel-item carousel-item2">
                            <div class="row w-100 justify-content-center">
                                <img class="d-block rounded w-25 h-100 mx-3" src="../assets/images/more-products4.jpg" alt="First slide">
                                <img class="d-block rounded w-25 h-100 mx-3" src="../assets/images/more-products5.jpg" alt="First slide">
                                <img class="d-block rounded w-25 h-100 mx-3" src="../assets/images/more-products6.jpg" alt="First slide">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="arrow-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="arrow-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
        </div>
        <?php
        include('footer.html');
        ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script>
        $('.carousel').carousel({
            interval: false
        })

        $('.popover-dismiss').popover({
            trigger: 'focus'
        })
    </script>
</body>
</html>
