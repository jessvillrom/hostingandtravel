<?php
// require_once ('cabecera.php') ;
//   require_once ('siderbar.php');
?>
<!-- Slider -->
<section class="section-slide bg0 p-t-104 p-b-116">
    <div class="wrap-slick1">
        <div class="slick1">

            <div class="item-slick1" style="background-image: url(<?= base_url ?>views/images/tranqui.jpg); ">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-102 cl2 respon2" style="color:rgb(255,255,255)">
                                Caño de colores en el Guaviare
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1 " style="color:rgb(255,255,255)">
                                Trankilandia

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

            <div class="item-slick1" style="background-image: url(<?= base_url ?>views/images/toros.jpg); ">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-102 cl2 respon2" style="color:rgb(255,255,255)">
                                Caño de colores en el Guaviare
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1 " style="color:rgb(255,255,255)">
                                Rincón de los Toros
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

            <div class="item-slick1" style="background-image: url(<?= base_url ?>views/images/lajas.jpg); ">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-102 cl2 respon2" style="color:rgb(25,25,25)">
                                Caño de colores en el Guaviare
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1 " style="color:rgb(25,25,25)">
                               Caño Lajas
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
                                    <option selected disabled>Selecciona una Ruta</option>
                                    <option value="1"> Rincón de los Toros</option>
                                    <option value="2"> Trankilandia</option>
                                    <option value="3">Caño Lajas</option>
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














<?php
// include_once ('footers.php') 
?>