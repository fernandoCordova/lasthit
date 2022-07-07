<?php
include_once('../layout/header.php');
echo "Hola mundo";
?>
<link rel="stylesheet" href="http://localhost/lasthit/css/inicio/inicio.css">
<!-- Header-->
<header class="py-5" data-aos="fade-up">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder mb-2">LastHit</h1>
                    <p class="lead fw-normal mb-4 descripcion-titulo-principal">LastHit es una plataforma que ayuda a los jugadores del juego League Of Legends a mejorar y revisar diferentes aspectos como estadisticas, graficos y clasificaciones.</p>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://i.ibb.co/BwHDw8V/imagen-inicio-min.jpg" alt="imagen-inicio" /></div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5" id="features" data-aos="fade-up">
    <div class="container px-5 my-5">
        <hr class="separador-contenido-inicio ">
        <div class="row gx-5 mt-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">Beneficios de usar LastHit</h2>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-gradient text-white rounded-3 mb-3"><i class="bi bi-arrow-down-up"></i></div>
                        <h2 class="h5">Actualización constante</h2>
                        <p class="mb-0 descripcion-beneficios">Estamos constantemente actualizando la plataforma con la última información del juego.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-gradient text-white rounded-3 mb-3"><i class="bi bi-globe"></i></div>
                        <h2 class="h5">Informacion directa de la Api</h2>
                        <p class="mb-0 descripcion-beneficios">Traemos la información directamente de la fuente.</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h5">Simple y eficiente</h2>
                        <p class="mb-0 descripcion-beneficios">LastHit es simple y eficiente de usar para conocer diferentes aspectos del juego.</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-gradient text-white rounded-3 mb-3"><i class="bi bi-shield-lock"></i></div>
                        <h2 class="h5">Confiable</h2>
                        <p class="mb-0 descripcion-beneficios">LastHit guarda tus datos y los utiliza de forma confidencial para personalizar tu experiencia con la plataforma.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog preview section-->
<section class="py-5" data-aos="fade-up">
    <div class="container px-5 my-1">
        <hr class="separador-contenido-inicio">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Equipo de trabajo</h2>
                    <p class="lead fw-normal mb-5">El mejor equipo de trabajo de la galaxia</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-6 mb-5">
                <div class="card shadow border-0">
                    <img class="imagen-equipo" src="https://i.ibb.co/6bN2W95/integrante2.webp" alt="imagen-integrante1" />
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3 texto-equipo-trabajo">Jefe de proyecto</h5>
                        <p class="card-text mb-0 texto-equipo-trabajo">Se dedica a gestionar los aspectos de documentacion, tiempos, riesgos, costos y cualquier otra cosa que implique el proyecto.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="small">
                                    <div class="fw-bold texto-equipo-trabajo">El otro loquito que hace cosas igual</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="card shadow border-0">
                    <img class="imagen-equipo" src="https://i.ibb.co/dD70dG8/integrante1.jpg" alt="imagen-integrante2" />
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3 texto-equipo-trabajo">Desarrollador</h5>
                        <p class="card-text mb-0 texto-equipo-trabajo">Se dedica a crear los diagramas, programar la plataforma y ver todo lo relacionado a la ejecucion del proyecto.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="small">
                                    <div class="fw-bold texto-equipo-trabajo">Alvaro Lamas chacon dispara por este cañon</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="http://localhost/lasthit/js/inicio/inicio.js"></script>
<?php
include_once('../layout/footer.php');
?>