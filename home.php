<?php 
session_start(); 
if (!isset($_SESSION['email'])) { 
    header("Location: Login.htm"); 
    exit(); 
} else echo "session creer";
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque ESST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=HK+Grotesk:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/stylelibrary.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">
            <img src="../img/ESST-logo-white-300x233.png" alt="ESST Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home" class="active">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#head">Chef de département</a></li>
                <li><a href="#library">Bibliothèque</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="../html/Login.htm">Connexion</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="home-content">
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="hero-content">
                <h1>Bienvenue à la bibliothèque de l'ESST</h1>
                <p><b>Explorez notre collection de livres et ressources numériques.</b></p>
                <a href="#library" class="btn">Découvrir</a>
            </div>
            <!-- Rectangle overlay text -->
            <div class="hero-footer-text">
                <p>Premier Etablissement universitaire privé en Sciences et Technologies en Algérie<br>
                   Agréée par le Ministère de l'Enseignement supérieur et de la Recherche scientifique</p>
            </div>
        </section>

        <!-- Library Section -->
        <section id="library" class="section-container">
            <h2 style="text-align: center;">Nos Livres</h2>
            <table class="book-table">
                <thead>
                    <tr>
                        <th>Année</th>
                        <th>Filière</th>
                        <th>Spécialité</th>
                        <th>Module</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Édition</th>
                        <th>Nbr d'exemplaire</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>L2</td>
                        <td>ST/SM</td>
                        <td>Électronique/Chimie</td>
                        <td>Vibrations et Ondes Mécaniques</td>
                        <td>Travaux pratiques de vibrations et ondes examens de TP corrigés</td>
                        <td>Ahmed Bourdache</td>
                        <td>2021</td>
                        <td>2</td>
                    </tr>
                    <!-- Additional rows can be added here -->
                </tbody>
            </table>
        </section>

        <!-- Head of Department Section -->
        <section id="head" class="section-container" style="text-align: center;">
            <h2>Chef de Département</h2>
            <p>Le département est dirigé par le professeur Mr. Selmoune Nazih, expert en sciences et technologies.<br>
               Email : <a href="mailto:nazih.selmoune@esst-sup.com">nazih.selmoune@esst-sup.com</a></p>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section-container"style="text-align: center;" >
            <h2>Contactez-nous</h2>
            <p>Pour plus d'informations, veuillez nous contacter à <a href="mailto:contact@esst-sup.com">contact@esst-sup.com</a></p>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="../img/ESST-logo-white-300x233.png" alt="ESST Logo">
            </div>
            <div class="footer-contact">
                <p>Contactez-nous</p>
                <p>43 Chemin Sidi M’Barek, Oued Romane - 16104 El Achour – ALGER</p>
                <p>+213 (0) 771 94 00 45 | +213 (0) 23 30 08 01</p>
                <p><a href="mailto:contact@esst-sup.com">contact@esst-sup.com</a></p>
            </div>
            <div class="social-icons">
                <p>Suivez-nous</p>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.facebook.com/ESSTSUP/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>
