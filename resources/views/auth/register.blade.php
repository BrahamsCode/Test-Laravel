<!doctype html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- MDBootstrap CSS and Bootstrap CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    </head>

    <body>
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="text-center">
                                            <img src="{{asset('assets/itamiDev.png')}}" style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">Registrarse</h4>
                                        </div>

                                        <form action="{{ route('register') }}" method="post">
                                            @csrf  <!-- CSRF debe estar dentro del formulario -->
                                        
                                            <p>Iniciar Sesión</p>
                                            
                                            <div class="form-outline mb-4">
                                                <input type="text" name="name" id="form2Example11" class="form-control" placeholder="Ingrese su usuario" />
                                                <label class="form-label" for="form2Example11">Nombre</label>
                                            </div>
                                        
                                            <div class="form-outline mb-4">
                                                <input type="email" name="email" id="form2Example11" class="form-control" placeholder="Ingrese su Correo" />
                                                <label class="form-label" for="form2Example11">Correo</label>
                                            </div>
                                        
                                            <div class="form-outline mb-4">
                                                <input type="password" name="password" id="form2Example22" class="form-control" />
                                                <label class="form-label" for="form2Example22">Contraseña</label>
                                            </div>
                                        
                                            <div class="form-outline mb-4">
                                                <input type="password" name="password_confirmation" id="form2Example22" class="form-control" />
                                                <label class="form-label" for="form2Example22">Confirmar Contraseña</label>
                                            </div>
                                        
                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
                                            </div>
                                        
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Volver para iniciar sesion</p>
                                                <a href="{{ route('login') }}" class="btn btn-outline-danger">Iniciar Sesion</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background: linear-gradient(45deg, #ff6f61, #ff9068);">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">Itami Company</h4>
                                        <p class="small mb-0">En Itami, somos más que una empresa. Nos dedicamos a la venta y distribución de productos en un mercado comercial diverso, ofreciendo una amplia gama de artículos para satisfacer las necesidades de nuestros clientes. Nuestro compromiso es brindar calidad, confianza y un servicio excepcional en cada transacción, siempre enfocados en la excelencia y en crear una experiencia de compra única para cada cliente.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MDBootstrap and Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>