z<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">EduSimsim</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </nav>
        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Etudiant</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                    <center><h2 class="fw-bolder">Login</h2></center>  
                                        <div class="login container grid" id="loginAccessRegister">
                                            <div class="login__register">
                                                <div class="login__area">
                                                    <form action="{{ route('register.student') }}" method="POST" class="login__form">
                                                        @csrf <!-- CSRF token for security -->
                                                        <div class="login__content grid">
                                                            <div class="login__group grid">
                                                                <div class="login__box"> 
                                                                    <label for="names" class="login__label"> Nom complet : </label> <br> 
                                                                    <input type="text" id="names" name="name" required placeholder=" " class="login__input">
                                                                    <i class="ri-id-card-fill login__icon"></i>
                                                                </div>
                                                            </div>
                                                            <div class="login__box">
                                                                <label for="emailCreate" class="login__label">Email : </label> <br>
                                                                <input type="email" id="emailCreate" name="email" required placeholder=" " class="login__input">
                                                                <i class="ri-mail-fill login__icon"></i>
                                                            </div>
                                                            <div class="login__box">
                                                                <label for="passwordCreate" class="login__label">Mot de passe : </label> <br>
                                                                <input type="password" id="passwordCreate" name="password" required placeholder=" " class="login__input">
                                                                <i class="ri-eye-off-fill login__icon login__password" id="loginPasswordCreate"></i>
                                                            </div> 
                                                        </div>
                                                        <br>
                                                        <a href="devoiretu"><button type="submit" class="btn btn-primary">Create account</button></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="{{ asset('image/img5.png')}}" alt="..." />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
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
        <script src="js/scripts.js"></script>
</body>

</html>