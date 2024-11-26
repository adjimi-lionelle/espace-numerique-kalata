<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guichet Numérique</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Starter</h1>
                <nav>
                    <a href="#" class="text-white me-3">Retour sur Kalata</a>
                </nav>
            </div>
        </div>
    </header>
<br>
    <!-- Section principale -->
    <div class="container mt-5">
        <div class="row g-3">
            <!-- Mes essentiels -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="card-header card-mes-essentiels">Mes essentiels</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-folder-open"></i> <a href="#">Messagerie Zimbra</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Emplois du temps</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Partage de fichiers</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Pédagogie -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="card-header card-pedagogie">Pédagogie</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-folder-open"></i> <a href="#">Certifications en langues</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Rédiger mon mémoire</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Évaluation des enseignements</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Orientation -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="card-header card-orientation">Orientation / insertion pro</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-folder-open"></i> <a href="#">RDV avec un conseiller</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Stages, jobs, emplois</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Évaluation des stages</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Guide des ressources emploi</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Vie étudiante -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="card-header card-vie-etudiante">Vie étudiante</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-folder-open"></i> <a href="#">Carte multiservices</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mon profil -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="card-header card-mon-profil">Mon profil</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-folder-open"></i> <a href="#">Mon compte</a></li>
                            <li><i class="fas fa-file"></i> <a href="#">Mon certificat de scolarité</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Mes relevés de notes</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Mon blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Scolarité -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="card-header card-scolarite">Mon dossier</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-folder-open"></i> <a href="#">Inscriptions Administratives</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Inscriptions pédagogiques</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Mon contrat pédagogique</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Mes notes</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bibliothèque -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="card-header card-bibliotheque">Bibliothèque</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-folder-open"></i> <a href="#">Vos bibliothèques en ligne</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Contacter la bibliothèque</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Imprimer</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Déposer ma thèse</a></li>
                            <li><i class="fas fa-folder-open"></i> <a href="#">Déposer mon mémoire</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-3 mt-4">
        <div class="container d-flex justify-content-between align-items-center">
            <span>2024 © KALATA NUMERIQUE</span>
            <span>Design & Develop by Themis Technologies</span>
        </div>
    </footer>

    <!-- Bootstrap JS & Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
