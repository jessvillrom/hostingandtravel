<?php
// require_once ('cabecera.php') ;
//   require_once ('siderbar.php');
?>
<!-- Slider -->
<section class="section-slide bg0 p-t-104 p-b-116">
    <div class="wrap-slick1">
        <div class="slick1">

            <div class="item-slick1" style="background-image: url(<?= base_url ?>views/images/slide-003.jpg); ">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-102 cl2 respon2" style="color:rgb(25,25,25)">
                                Fauna & Flora- Técnico en Operación Turística
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1 " style="color:rgb(25,25,25)">
                                Delfines Rosados

                            </h2>
                        </div>

                        <!-- <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Conoce más
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(<?= base_url ?>views/images/delfin.jpg); ">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-102 cl2 respon2" style="color:rgb(255,255,255)">
                                Fauna & Flora- Técnico en Operación Turística
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1 " style="color:rgb(255,255,255)">
                                Nada con los delfines Rosados

                            </h2>
                        </div>

                        <!-- <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Conoce más
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- agenda tu cita -->
<div class="sec-banner bg0 p-t-10 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md  m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <form action="<?= base_url ?>">

                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Agenda tu Guianza
                        </h4>

                        <div class="form-row">
                            <div class="col">
                                <label for="fechaEn">Fecha del Tour </label>


                                <input type="date" class="form-control" min="<?= date('Y-m-d'); ?>" required>
                            </div>

                            <div class="col">
                                <label for="fechaSal">Hora para el tour</label>
                                <input type="time" class="form-control" min="<?= date('g:i a'); ?>" required>
                            </div>
                            <div class="col">
                                <label for="fechaSal">Cantidad de Personas </label>

                                <input type="number" class="form-control" placeholder="1" min="1" required>
                            </div>
                            <div class="col">
                                <label for="fechaSal">¿Cual será tu próximo destino? </label>

                                <select class="form-control" id="inlineFormCustomSelect">
                                    <option selected>Selecciona una Ruta</option>
                                    <option value="1">Ruta 1- Pinturas Rupestres de Nuevo Tolima </option>
                                    <option value="2">Ruta 2- Pinturas Rupestres Raudal del Guayabero</option>
                                    <option value="3">Ruta 3 - Pinturas Rupestres de Cerro Azul</option>
                                </select>


                            </div>



                        </div>
                        <br>
                        <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Buscar
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- Servicios -->

<div class="sec-banner bg0 p-t-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/mono1.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Cebus-yuracus
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Guaviare Diferente a Todo
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Avistamiento de Animales
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/mono2.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Monos Ardilla [Saimiri Sciureus]
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Mono Titi
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Avistamiento de Animales
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/mono3.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Monos Aulladores Rojos [Alouatta Seniculus]
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Guaviare Diferente a Todo
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Avistamiento de Animales
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/flora1.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Aechmea stenosepala - Vulnerable

                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Guaviare Diferente a Todo
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Flora
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/mono4.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Mono Lanudo [Lagothrix]
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                También llamados churucos
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Avistamiento de Animales
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/flora2.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Zamia Lindosensis - Endémica
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Guaviare Diferente a Todo
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Flora
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/ave.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Gallito de Roca [Rupicola peruvianus]

                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Guaviare Diferente a Todo
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Avistamiento de Aves
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/ave2.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Promover el Turismo
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Guaviare un Lugar Mágico
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Avistamiento de Animales
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="<?= base_url ?>views/images/mono5.jpg" alt="IMG-BANNER">

                    <a href="index.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Monos Titi De Manos Amarillas
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Guaviare Diferente a Todo
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Avistamiento de Animales
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>













<?php
// include_once ('footers.php') 
?>