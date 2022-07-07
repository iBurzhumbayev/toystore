<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Store</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <div class="container">
        <aside class="menu">
            <img src="icons/Avatar.png" alt="" class="menu__avatar">
            <div class="title title_avatar">¡Hola, Yuxin!</div>
            <div class="title title_menu">#TIENDA</div>
            <div class="menu__wrapper">
                <div class="menu__item">Juguetes</div>
                <div class="menu__circle">
                    <img src="icons/menu/juguetes.svg" alt="" class="menu__icon">
                </div>
            </div>
            <div class="menu__wrapper">
                <div class="menu__item">Salud</div>
                <div class="menu__circle">
                    <img src="icons/menu/salud.svg" alt="" class="menu__icon">
                </div>
            </div>
            <div class="menu__wrapper">
                <div class="menu__item">Comida</div>
                <div class="menu__circle">
                    <img src="icons/menu/comida.svg" alt="" class="menu__icon">
                </div>
            </div>
            <div class="title title_menu">#PERSONAL</div>
            <div class="menu__wrapper">
                <div class="menu__item">Mi Carrito</div>
                <div class="menu__circle">
                    <img src="icons/menu/carrito.svg" alt="" class="menu__icon">
                </div>
            </div>
            <div class="menu__wrapper">
                <div class="menu__item">Cupones</div>
                <div class="menu__circle">
                    <img src="icons/menu/cupones.svg" alt="" class="menu__icon">
                </div>
            </div>
            <div class="menu__card">
                <img src="icons/menu/party.png" alt="" class="menu__party">
                <div class="title title_party">Únete al club</div>
                <div class="descr descr_menu">y obtén cupones de manera diaria.</div>
                <button class="button button_menu">Actualizar Plan</button>
            </div>
        </aside>
        <section class="main">
            <div class="main__search">
                <input class="main__input" required placeholder="Buscar..." type="text"> 
                <img src="icons/main/search.png" alt="" class="main__icon">
                <img src="icons/main/bell.png" alt="" class="main__bell">
            </div>
            <div class="title title_main">Juguetes</div>
            <div class="main__wrapper">
                <div class="main__button">
                    <button class="button button_main">Pequeños</button>
                    <button class="button button_main">Grandes</button>
                    <button class="button button_main">Cognitivos</button>
                </div>
                <button class="button button_vermas"><span>ver mÁs</span> ></button>
            </div>
            <div class="main__cards">
                <div class="main__card">
                    <img src="img/main/pato.png" alt="" class="main__img">
                    <div class="title title_card">El Batipato de Batman</div>
                    <div class="main__inner">
                        <img src="icons/main/Stars.png" alt="" class="main__star">
                        <div class="descr descr_main">(67)</div>
                    </div>
                    <div class="main__flex">
                        <div class="main__price">$14.81</div>
                        <button class="button button_card"><img src="icons/main/iconbutton.png" alt=""> <span>Añadir al Carrito</span></button>
                    </div>
                </div>
                <div class="main__card">
                    <img src="img/main/movil.png" alt="" class="main__img">
                    <div class="title title_card">Batimovil lego de Batman</div>
                    <div class="main__inner">
                        <img src="icons/main/Stars.png" alt="" class="main__star">
                        <div class="descr descr_main">(26)</div>
                    </div>
                    <div class="main__flex">
                        <div class="main__price">$12.33</div>
                        <button class="button button_card"><img src="icons/main/iconbutton.png" alt=""> <span>Añadir al Carrito</span></button>
                    </div>
                </div>
                <div class="main__card">
                    <img src="img/main/minion.png" alt="" class="main__img">
                    <div class="title title_card">Minion criminal de 15cm</div>
                    <div class="main__inner">
                        <img src="icons/main/Stars.png" alt="" class="main__star">
                        <div class="descr descr_main">(11)</div>
                    </div>
                    <div class="main__flex">
                        <div class="main__price">$10.21</div>
                        <button class="button button_card"><img src="icons/main/iconbutton.png" alt=""> <span>Añadir al Carrito</span></button>
                    </div>
                </div>
                <div class="main__card">
                    <img src="img/main/peluche.png" alt="" class="main__img">
                    <div class="title title_card">Oso de Peluche marrón</div>
                    <div class="main__inner">
                        <img src="icons/main/Stars.png" alt="" class="main__star">
                        <div class="descr descr_main">(31)</div>
                    </div>
                    <div class="main__flex">
                        <div class="main__price">$8.23</div>
                        <button class="button button_card"><img src="icons/main/iconbutton.png" alt=""> <span>Añadir al Carrito</span></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="information">
            <div class="title title_information">Información del Juguete</div>
            <div class="information__card">
                <img src="img/information/pato.png" alt="" class="main__img">
                <div class="title title_infcard">El Batipato de Batman</div>
                <div class="descr descr_inf">Patito de hule que usa batman para acompañar sus seciones de baño.</div>
                <div class="information__inner">
                    <img src="icons/main/Stars.png" alt="" class="main__star">
                    <div class="descr descr_information">(67)<span>Ver todas las opiniones</span></div>
                </div>
                <div class="information__price">$14.81</div>
                <button class="button button_card button_information"><img src="icons/main/iconbutton.png" alt=""> <span>Añadir al Carrito</span></button>
                <div class="title title_infcard title_mt">Algunas opiniones sobre este juguete</div>
                <div class="information__wrapper">
                    <img src="icons/information/arlene.png" alt="" class="information__avatar">
                    <div class="information__flex">
                        <div class="title title_size">Arlene McCoy</div>
                        <div class="descr descr_color">Amet minim mollit non.</div>
                    </div>
                </div>
                <div class="information__wrapper">
                    <img src="icons/information/devon.png" alt="" class="information__avatar">
                    <div class="information__flex">
                        <div class="title title_size">Arlene McCoy</div>
                        <div class="descr descr_color">Amet minim mollit non.</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
