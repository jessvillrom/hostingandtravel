    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">

                <h2 class="ltext-105 cl2 txt-center">
                    Mapa 1
                </h2>
                <br>
                <img src="<?= base_url ?>views/images/map1.png" class="d-block w-100" alt="...">

            </div>
            <div class="flex-w flex-tr">

                <h2 class="ltext-105 cl2 txt-center">
                    Mapa 2
                </h2>
                <br>
                <img src="<?= base_url ?>views/images/map2.png" class="d-block w-100" alt="...">

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
                                        <option value="1"> Mapa 1</option>
                                        <option value="2"> Mapa 2</option>
                                      
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