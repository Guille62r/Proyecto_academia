<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/cursos.css" />
</head>

<body>
    <header>
        <!-- place navbar here -->
        <?php include 'alumno.html' ?>
    </header>
    <main>
        <div class="container"
            id="contenedor">
            <center>
                <h1>CURSOS A TU DISPOSICION</h1>
            </center>
            <!-- Button trigger modal -->
            <button type="button" id="introduccion" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -3%;" width="30" height="30" fill="currentColor" class="bi bi-record2-fill" viewBox="0 0 16 16">
                    <path d="M10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0" />
                    <path d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10m0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                </svg>Cursos
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Pautas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe width="450" height="315" src="https://www.youtube.com/embed/AEiRa5xZaZw?si=QPG1w8BCdnxMH9e0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <p>Estas van a ser las pautas del curso</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h3>BACKEND</h3>
            <table>
                <tr>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO JAVA AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/W86KTBSiX2o?si=qBfEV8-6N7EIfKI6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar java de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>

                    </td>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO PYTHON AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/uD7Y_tyBNEQ?si=S3OVSu8ehEep91fc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar Python de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO ASP.NET CORE AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/mENHDQ8SLsI?si=uPixIbrTvAEQrBdy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar asp.net core de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO C# AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/L-f8u0hwi4Y?si=-hJu-HnyjVCCmd9u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar C# de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO NODE.JS AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/APbb-z8A3Zc?si=80oSq-t4zgYWn9Pi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar node.js de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO PHP AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/nPCJAx5c1uE?si=p2T6TQn8xNI7n0ao" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar php de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <br><br>
            <h3>FRONTEND</h3>
            <table>
                <tr>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO JAVASCRIPT AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/Z34BF9PCfYg?si=pYjDThtbIfHLT4W7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar javascript de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>

                    </td>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO HTML AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/cqMfPS8jPys?si=iRkbJfXyWGorwNuM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar html de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO CSS AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/24gNhTcy6pw?si=P-MAcmuM7yz_8s2h" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar css de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO ANGULAR AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/fXpMiweCC_o?si=sHcfrxeCVvlqt2UR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar angular de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO REACT AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/nAe_a1mdNDY?si=KzbcLg3F-gJ9Cnxd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar react de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card text-start">
                            <div class="card-body">
                                <h5 class="card-title">CURSO VUE AVANZADO</h5>
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/PL-aTHv2L3E?si=JmkMWCSnGblSn29_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p class="card-text">Este curso estara muy orientado a aplicar vue de forma muy interna</p>
                                <p class="card-text">Quieres unirte a este curso dale al boton de abajo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                    </svg></p>
                                <button type="button" style="float: right;" class="btn btn-danger">UNETE</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>