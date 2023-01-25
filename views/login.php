<?php require_once('cabecera.php');

?>



<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= base_url ?>views/images/slide-001.jpg');">
    <h2 class="ltext-105 cl2 txt-center">
        Iniciar Sesión
    </h2>

</section>

<!-- Content page     -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">

        <?php
        if (!isset($_SESSION['identity'])) :
        ?>
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <!-- <form action="index.php?controller=User&action=guardar" method="POST"> -->
                    <form action="<?= base_url ?>user/loginx" method="POST">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Iniciar Sesion
                        </h4>



                        <div class="bor8 m-b-20 how-pos4-parent">
                            <!-- <label for="email">Email</label> -->
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Email" required>
                            <img class="how-pos4 pointer-none" src="<?= base_url ?>views/images/icons/icon-email.png" alt="ICON">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <!-- <label for="email">Email</label> -->
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="Contraseña" required>
                            <img class="how-pos4 pointer-none" src="<?= base_url ?>views/images/icons/icon-pass.ico" alt="ICON" height="20" style="opacity:0.25;">
                        </div>
                        <br>
                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Iniciar Sesión
                        </button>
                        <br>
                        <a class="flex-c-m stext-101 cl0 size-121 bg5 bor1 hov-btn3 p-lr-15 trans-04 pointer " href="<?= base_url ?>/user/registrar">Registrarse </a>

                    </form>
                </div>
                <!-- Quitar -->
                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <img class="size-120 " src="<?= base_url ?>views/images/banner-003.jpg" alt="imagenbonita">

                </div>
            </div>

        <?php else : ?>

            <div class="p-3 mb-2 bg-success text-white">
                <h2 class="ltext-105  txt-center">

                    <?php
                     echo $_SESSION['identity']->rol; 
                    echo ucfirst($_SESSION['identity']->nombre);
                    echo " "; 
                    echo ucfirst($_SESSION['identity']->apellido);
                    ?>
                </h2>
                <h2 class="ltext-105  txt-center">
                    Ha Iniciado Sesión Correctamente
                </h2>
            </div>


        <?php endif; ?>






    </div>
</section>




<?php include_once('footers.php') ?>