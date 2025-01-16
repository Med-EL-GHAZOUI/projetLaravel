<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>EduSimsim</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">EduSimsim</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Se connecter</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Créer un compte</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <div class="text-center text-xxl-start">
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Bienvenue sur la plateforme</span></h1>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('login') }}">Se connecter</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('register') }}">Créer un compte</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile bg-gradient-primary-to-secondary">
                                <img class="profile-img" src="{{ asset('image/img1.png') }}" alt="EduSimsim Profile" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Us</span></h2>
                            <p class="lead fw-light mb-4">My name is EduSimsim and I help you gather your study material.</p>
                            <p class="text-muted">Mon objectif est de rendre l'apprentissage amusant, interactif et efficace. Que ce soit pour réviser des leçons, approfondir des concepts ou explorer de nouvelles idées, je suis là pour fournir des explications claires, des exercices et des astuces adaptées à vos besoins. Ensemble, nous pouvons relever tous les défis d'apprentissage !</p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a href="https://www.linkedin.com/in/mohamedel-ghazoui"><i class="bi bi-linkedin"></i></a>
                                <a href="https://github.com/Med-EL-GHAZOUI"><i class="bi bi-github"></i></a>
                                <a href="https://wa.me/qr/ESMVDSH5UVTEK1"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; EduSimsim 2025</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>