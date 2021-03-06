<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Energy Generation est une organisation panafricaine qui encourage les jeunes Africains à relever les défis les plus pressants de leur génération (énergie, agriculture, santé, etc.) à travers l'entrepreneuriat et la technologie.">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class=" fixed-top bg-white">
        <nav class="navbar navbar-expand-lg py-4 navbar-light">
            <div class="container">
                <a href="./index.php" class="d-flex align-items-baseline mb-3 mb-md-0 m me-md-auto text-dark text-decoration-none navbar-brand">
                    <img src="./image/EG_logo.webp" class="logo-eg navbar-brand" alt="logo energy generation">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex justify-content-end">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item ms-3"><a href="./index.php" class="nav-link active" aria-current="page">Accueil</a></li>
                            <li class="nav-item ms-3"><a href="./php/programmes.php" class="nav-link">Nos programmes</a></li>
                            <li class="nav-item ms-3"><a href="./php/energy-space.php" class="nav-link">Energy Space</a></li>
                            <li class="nav-item ms-3"><a href="./php/blog.php" class="nav-link">Blog</a></li>
                            <li class="nav-item ms-3"><a href="./php/devenir_mentor.php" class="nav-link">Devenir Mentor</a></li>
                            <li class="nav-item ms-3"><a href="#" class="nav-link"><img src="./image/achat.webp" width="30" height="30" alt=""></a></li>
                        </ul>

                        <div id="google_translate_element"></div>

                        <script>
                        function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
                        }
                        </script>

                        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!--
            ==================
            Section carousel
            ==================
        -->

        <div>
            <div id="carouselExampleIndicators" class="carousel slide mt-5 pt-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./image/Accueil_images/mecano-1.webp" class="mt-5 w-img-carousel w-100" alt="mécanicien homme">
                </div>
                  <div class="carousel-item">
                    <img src="./image/Accueil_images/informaticienne-1.webp" class="mt-5 w-img-carousel w-100" alt=" femme informaticienne">
                </div>
                  <div class="carousel-item">
                    <img src="./image/Accueil_images/femme-ordi-1.webp" class="mt-5 w-img-carousel w-100" alt="femme au bureau devant son ordinateur">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

        <!-- =============================================
               ICI DEMARRE LA SECTION 2 DE LA PAGE
      ============================================= -->

        <div class="background_pg_accueil container">

            <div class=" py-5 text-center">
                <img src="./image/Accueil_images/EG_logo.webp " class="d-block logo_pg_accueil mx-auto mb-5" alt="logo de Energy generation">
                <div class="row mt-5 m-5">
                    <div class="col">
                        <p class="text-align-justify fs-5">Energy Generation est une organisation panafricaine qui encourage les jeunes Africains àrelever les défis les plus pressants de leur génération (énergie, agriculture, santé, etc.) à travers l'entrepreneuriat et la technologie.</p>
                        <p class="text-align-justify mt-4 fs-5">Energy Generation vise à soutenir et à promouvoir les innovations technologiques et entrepreneuriales afin d'identifier, de développer et de diffuser largement les solutions pratiques « made in Africa ».</p>
                        <p class="text-align-justify mt-4 fs-5">Mais avant tout, Energy Generation est une plate-forme centrée sur l'humain qui offre aux individus des possibilités de libérer et d’exprimer toute leur créativité.</p>
                    </div>
                    <div class="col mx-5 d-lg-flex justify-content-between">
                        <div class="row me-3">
                            <img src="./image/Accueil_images/btp-fousseni-group-togo.webp" class="border border-danger p-0 border-5 images_pg_accueil" alt="chantier de btp">
                            <h4 class="color-red mt-4">VISION</h4>
                            <p class="fs-6">Permettre l'émergence d'une nouvelle génération africaine en mesure de relever le défi de la dignité humaine sur le continent africain et au-delà.</p>
                        </div>
                        <div class="row ms-2">
                            <img class="border images_pg_accueil  border-danger p-0 border-5" src="./image/Accueil_images/images-btp.webp" alt="chantier btp">
                            <h4 class="color-red mt-4">MISSION</h4>
                            <p class="fs-6">Révolutionner l'accès à l'éducation, à l'accompagnement et au financement, en construisant un écosystème entrepreneurial solide où les jeunes africains peuvent prospérer et développer des entreprises hors du commun.</p>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn rounded-0 px-5 btn-primary">A propos</button>
            </div>
        </div>

        <!-- =============================
                        NOS PROGRAMMES
        ============================= -->

        <div class="background-red text-white d-flex justify-content-center">
            <h1>NOS PROGRAMMES</h1>
        </div>

        <div class="bg-programme-attachement"></div>

        <div class="background-red height-vh"></div>
        <div class="bg-programme_pg_accueil pb-5">
            <div class="text-center pt-5">
                <div class=" text-light container pt-5 description-programme_pg_accueil" >
                    <p class="mb-4 fs-5">Au sein de nos Business Schools, théorie et pratique se rencontrent pour transformer des idées novatrices en entreprises viables. </p>
                    <p class="mb-4 fs-5">En tant qu'étudiant porteur de projet, vous suivrez une formation diplômante en entrepreneuriat et aurez l’occasion de bénéficier de l’expérience pratique des professionnels issus d'entreprises leader mondiales de leur secteur.</p>
                    <p class="mb-5 fs-5">Au sein de nos écoles, les porteurs de projet bénéficient des installations du laboratoire pour développer leur prototype, ainsi que d’un accompagnement personnalisé pour structurer leur projet entrepreneurial.</p>
                </div>
            </div>

            <!-- =============================
            BOUTON PRE SESENTANT LES PROGRAMMES
            ============================= -->

            <div class="justify-content-between d-flex container py-5">

                <div class="mx-auto">
                    <div>
                        <button class="btn1_pg_accueil text-white rounded-0 btn mx-3 mb-3 px-4">La Business & Energy <br> School</button>
                        <button class="btn2_pg_accueil text-white rounded-0 btn mx-3 mb-3 px-4">La Business & <br> Healthcare School </button>
                        <button class="btn3_pg_accueil text-white rounded-0 btn mx-3 mb-3 px-4"> La Business & Agri <br> School</button>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="background-red text-white text-center py-2">
                <h3>LA FORMATION ENTREPRENEURIAT <br> SOLAIRE</h3>
                <img src="./image/Accueil_images/eg-image-solaire-1.webp" class="w-100" alt="groupe de personne energie solaire" >
            </div>

            <div class="background-red height-vh"></div>
        </div>

        <div class="container">
            <div class=" bg-formation-solaire_pg_accueil text-center pb-5">
                <div class="pt-5">
                    <p class="fs-5">Parce que le solaire représente une véritable opportunité de création d'emplois pour les jeunes tout en participant au développement socio-économique des zones rurales africaines notamment, Energy Generation a créé un programme de dix mois pour former puis accompagner des entrepreneurs du solaire.</p>
                    <p class="fs-5 mt-5">Quel que soit votre niveau d'études actuel, la Formation Entrepreneuriat Solaire vous propose un programme sur mesure pour vous garantir une formation répondant parfaitement à vos besoins et à vos projets d'avenir.</p>
                </div>
                <div class="py-5">
                    <button class="btn btn-danger rounded-0">La Formation solaire</button>
                </div>
            </div>
        </div>

        <div class="px-3 py-2 bg-primary text-white text-center">
            <h2 class="h2_pg_accueil">ENERGY SPACE</h2>
            <h5 class="h5_pg_accueil">INCUBATEUR & SEED FUND</h5>
        </div>

        <!-- ==========================
                        Energy-space
        ==========================  -->

        <div >
            <img src="./image/Accueil_images/energy_space-1.webp" class="w-100" alt="image energy" >
        </div>
        <div class="background-red height-vh bg-primary"></div>

        <div class=" bg-formation-solaire_pg_accueil text-center">
            <div class="pt-5 container">
                <p class="fs-5">L’Energy Generation Incubator et le Co-working Space accueillent <br>des start-ups prometteuses dans le domaine de l'énergie, mais pas seulement.</p>
                <p class="fs-5 mt-4">Les services d'incubation incluent un coaching personnalisé, avec formation et mentorat, ainsi <br> qu’un soutien dans les activités quotidiennes et les défis rencontrés.</p>
                <p class="fs-5 mt-4">fin de soutenir le développement d'un écosystème entrepreneurial international,<br> l'incubateur accueillera des projets issus de l’Academy, mais aussi plusieurs projets de milieux et <br>de pays africains différents.</p>
            </div>

            <div class="my-5">
                <button class="btn btn-primary rounded-0" >Energy Space</button>
            </div>

            <div class="bg-titre-energy-space background-red py-3">
                <h2 class="text-white">ILS CROIENT EN NOUS</h2>
            </div>

            <div class="bg-scientifique"></div>

        </div>

        <!-- ==========================
            SECTION FOOTER
        ==========================  -->
        <div class="background-red espace-rouge"></div>
        <!--
            ===================
            Division Partenaire
            ===================
        -->

        <div class="container text-center text-align-justify py-5">
            <div class="row">
                <div class="col">
                    <a href="https://www.se.com/fr/fr/about-us/sustainability/foundation/" target="_blank">
                        <img src="./image/se_fondation_logo_horizontal_rgb.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://tg.ambafrance.org/Lancement-des-projets-de-la-societe-civile-laureats-du-fonds-PISCCA-2021" target="_blank">
                        <img src="./image/ambassade-de-france.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.initiative-france.fr/" target="_blank">
                        <img src="./image/logo-initiative-france.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://gruene-buergerenergie.org/fr/sengager/challenge-call/" target="_blank">
                        <img src="./image/logo-giz.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.edf.fr/" target="_blank">
                        <img src="./image/logo-edf.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://fondation.edf.com/" target="_blank">
                        <img src="./image/logo-edf-renouvelables.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.hautsdefrance.fr/la-region-relance-lappel-a-projets-acteurs-de-lenergie-pour-lafrique/" target="_blank">
                        <img src="./image/Logo_Hauts-de-France_2016.webp" alt="logo partenaire">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                   <a href="https://www.francophonie.org/" target="_blank">
                       <img src="./image/logo-francophonie.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.ifdd.francophonie.org/" target="_blank">
                        <img src="./image/logo-ifdd.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://d-lab.mit.edu/" target="_blank">
                        <img src="./image/logo-mitd-lab.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.africinnov.com/fr" target="_blank">
                        <img src="./image/logo-afric-innov.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.victronenergy.com/" target="_blank">
                        <img src="./image/logo-victron-energy.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://education.github.com/schools" target="_blank">
                        <img src="./image/logo-github.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="http://numerique.gouv.tg/" target="_blank">
                         <img src="./image/bloc_blason_republique_togolaise.webp" alt="logo partenaire">
                        </a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="http://www.collegedeparis.fr/" target="_blank">
                        <img src="./image/college-de-paris-logo.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="http://www.saber-abrec.org/" target="_blank">
                        <img src="./image/logo-saber.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.linkedin.com/company/eres-togo-sasu/" target="_blank">
                        <img src="./image/logo-eres-togo.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="https://vilcap.com/" target="_blank">
                        <img src="./image/logo-village-capital.webp" alt="logo partenaire">
                    </a>
                </div>
                <div class="col">
                    <a href="http://crclome.com/" target="_blank">
                        <img src="./image/logo_boad.webp" alt="logo partenaire">
                    </a>
                </div>
            </div>
        </div>
        <!--
            ============================
            Section Ils parlent de nous
            ============================
        -->
        <section>
            <div class="text-center fs-1 bg-black text-white py-2">
                <h2>Ils parlent de nous</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./image/forbes-afrique.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                  <div class="carousel-item">
                    <img src="./image/jeune-afrique.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                  <div class="carousel-item">
                    <img src="./image/le-point-afrique.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                  <div class="carousel-item">
                    <img src="./image/forbes-afrique-30.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                  <div class="carousel-item">
                    <img src="./image/tv5-monde.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                  <div class="carousel-item">
                    <img src="./image/togo-first.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                  <div class="carousel-item">
                    <img src="./image/madame-figaro.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                  <div class="carousel-item">
                    <img src="./image/la-tribune-afrique.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                  <div class="carousel-item">
                    <img src="./image/le-monde-afrique.webp" class="d-block w-100 image-parle-de-nous" alt="..">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>

    </main>    

    <footer>
        <div class="bg-footer pb-3">
            <div class="container">
                <div class="row">
                     <!--
                        ====================
                        formulaire du footer
                        ====================
                        -->
                    <div class="text-black col-lg-5">
                        <div class="text-center fs-3 mt-3">
                            <h3>Newsletter</h3>
                            <p class="fs-5 text-secondary">Get our latest info, podcasts, advices..</p>
                        </div>
                        <form action="./php/footer-form.php" method="post">
                            <div class="mb-3">
                                <label for="nom" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="name-footer" id="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email-footer" id="email" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="checkbox-prefere-french" id="prefere-french" value="french">
                                <label class="form-check-label" for="prefere-french">Je préfère recevoir les informations en français</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="checkbox-prefere-english" id="prefere-english" value="english">
                                <label class="form-check-label" for="prefere-english">I wish to receive the content in English</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                    <div class="col m-auto d-flex justify-content-evenly pt-3">
                        <a href="http://twitter.com/EnergyGenAfrica" target="_blank">
                            <img src="./image/twitter.webp" alt="lien vers twitter" class="img-sociaux">
                        </a>
                        <a href="https://www.linkedin.com/company/7936789/admin/" target="_blank">
                            <img src="./image/linkedin.webp" alt="lien vers linkedin" class="img-sociaux">
                        </a>
                        <a href="https://www.youtube.com/channel/UCXXWkX6rXa54FkD0oM3NkUQ/" target="_blank">
                            <img src="./image/youtube.webp" alt="lien vers notre chaine youtube" class="img-sociaux">
                        </a>
                        <a href="https://web.facebook.com/EnergyGeneration/" target="_blank">
                            <img src="./image/facebook.webp" alt="lien vers notre page facebook" class="img-sociaux">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p class="my-3">&copy; 2022 - Energy Generation - All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>