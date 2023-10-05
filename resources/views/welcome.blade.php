<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Centre de Référence en Géomatique et Environnement</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
<header class="d-flex ">
    <div class="container col-6">
    <h1>SEREIN-GE</h1>
  </div>
    <div class="container col-6">
        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#propos">À Propos</a>
            <a href="#service">Services</a>
            <a href="#footer">Contact</a>
        </nav>
        </div>
    </header>
    <section class="row" id="accueil">
        <div class="col-4">
                <img src="{{ asset('images/image3.jpg')}}" alt="Description de l'image" class="img-fluid">
          </div>
        <div class="col-6 page">
            <h3>SEREIN-GE est une société de géomètre expert et d’ingénierie intervenant dans les domaines de la topographie, du foncier et de la l’aménagement, de la géomatique</h3>

        </div>
          
    </section>
    <section class=" d-flex pt-3" id="Propos">
         <div class=" container col-6 page">
            <p class="page">SEREIN-GE est une société constituée d’un bureau de géomètre expert et d’ingénierie intervenant dans les domaines de la topographie, du foncier et de la l’aménagement, de la géomatique et de l’informatique. Dans le cadre de ses activités en topographie, nous commercialisons aussi du matériel topographique ainsi que d’autre matériels d’acquisition de données en tant que représentant exclusif d’une société international de vente d’appareils.</p>

        </div>
        <div class="col-4 container">
                <img src="{{ asset('images/image2.jpg')}}" alt="Description de l'image" class="img-fluid">
          </div>
       
    </section>
    <section class="container " id="service">
        <h1>Centre de Référence en Géomatique et Environnement</h1>
        <div class="row d-flex">
            <div class="col">
                <img src="{{ asset('images/image1.jpg')}}" alt="Description de l'image" class="img-fluid">
            </div>
            <div class="col presentation">
                <p>Centre de référence en Géomatique et Environnement, spécialisé dans les domaines suivants :</p>
                <ul>
                    <li>Géomètre expert agréé</li>
                    <li>Génie informatique</li>
                    <li>Expertise immobilière et foncière</li>
                    <li>Formation en géomatique, topographie, environnement</li>
                </ul>
            </div>
        </div>
    </section>
    @include('sereinge.formulaire') 
    <footer class="bg-dark text-center py-2" id="footer">
        <div class="contact-info">
            <h2>Coordonnées</h2>
            <p>Téléphone: +226 25364294</p>
            <p>Secteur: Services et conseil informatiques</p>
            <p>Taille de l'entreprise: 11-50 employés</p>
            <p>Siège social: Ouagadougou, Ouagadougou</p>
            <p>Fondée en: 2009</p>
            <h2>Spécialisations</h2>
            <p>Foncier, Topographie, Expertise immobilière, Aménagement Urbain, Géomatique, Informatique, Génie Civil, SIG et BIM</p>
        </div>
    </footer>

    <!-- Liens Bootstrap JavaScript (inclus après le corps de votre page) -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  