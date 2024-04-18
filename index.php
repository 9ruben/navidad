<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAMACIÓN WEB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css?q=1">
    <script src="js/app.js?q=1d" defer></script>    
</head>
<body>

    <!--Inicio Header-->    
    <header class="header">

        <!--Inicio Barra de Menu-->
        <a href="#" class="logo"><i class="fas fa-gifts"></i>UTEA</a>

        <nav class="navbar">
            <a href="#home">inicio</a>
            <a href="#category">nosotros</a>
            <a href="#shop">tienda</a>
            <a href="#gallery">galería</a>
            <a href="#contact">contacto</a>            
            <a href="#blog">blog</a>
        </nav>

        <div class="icons">            
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        <!--Fin Barra de Menu-->

        <!--Inicio Barra de Busqueda-->
        <form action="" class="search-form">
            <input type="search" name="" placeholder="Buscar" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
        <!--Fin Barra de Busqueda-->

    </header>
    <!--Fin Header-->        
  
    <!--Inicio de Home-->
    <section class="home" id="home">

        <div class="slide bannerone active">
            <div class="content">
                <span>Conversión de temperatura: Celsius a Fahrenheit</span>
                <h3>Convierta grados Celsius a Fahrenheit y viceversa usando la calculadora de temperatura de Farnell.</h3>
                <p>Nuestra tabla de conversión también muestra la fórmula para que pueda realizar las conversiones de temperatura de forma manual.</p>
                <br>
                <form action="index.php" method="post">
        <input type="number" name="temp" class='form' placeholder="Introduce la temperatura">
        <select name="unidad" class='form'>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <input type="submit" class="btn" value="Convertir" style="border-radius: 10%;padding: 7px;cursor: pointer;">
    </form>
                <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp = $_POST["temp"];
            $unidad = $_POST["unidad"];

            if ($unidad == "celsius") {
                $converted = ($temp * 9) / 5 + 32;
            } else {
                $converted = ($temp - 32) * 5 / 9;
            }

            echo "La temperatura en " . $unidad . " es de: " . $converted;
        }
    ?>
            </div>
        </div>
        <div class="slide bannertwo">
            <div class="content">
                <span>Feliz Navidad</span>
                <h3>50% de Descuento</h3>
                <a href="#" class="btn">Comprar ahora</a>
            </div>
        </div>
        <div class="slide bannerthree">
            <div class="content">
                <span>ho-ho-ho</span>
                <h3>Felices Vacaciones</h3>
                <a href="#" class="btn">Comprar ahora</a>
            </div>
        </div>        

        <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
        <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

    </section> 
    <!--Fin de Home-->

    <!--Inicio Categorías-->
    <section class="category" id="category">

        <div class="box-container">
            <a href="#" class="box">
                <img src="img/category.jpg" alt="">
                <h3>Categoría</h3>                
            </a>
        </div>
        <div class="box-container">
            <a href="#" class="box">
                <img src="img/category.jpg" alt="">
                <h3>Categoría</h3>                
            </a>
        </div>
        <div class="box-container">
            <a href="#" class="box">
                <img src="img/category.jpg" alt="">
                <h3>Categoría</h3>                
            </a>
        </div>
        <div class="box-container">
            <a href="#" class="box">
                <img src="img/category.jpg" alt="">
                <h3>Categoría</h3>                
            </a>
        </div>        
        <div class="box-container">
            <a href="#" class="box">
                <img src="img/category.jpg" alt="">
                <h3>Categoría</h3>                
            </a>
        </div>
        <div class="box-container">
            <a href="#" class="box">
                <img src="img/category.jpg" alt="">
                <h3>Categoría</h3>                
            </a>
        </div>

    </section>
    <!--Fin Categorías-->

    <!--Inicio Nosotros-->
    <section class="about" id="about">

        <div class="image">
            <img src="img/about.jpg" alt="">
        </div>

        <div class="content">
            <div class="box">
                <h3>Rebajas de Navidad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, tenetur architecto unde dicta cum reprehenderit nulla omnis libero facilis possimus!</p>
                <a href="#" class="btn">Saber mas</a>
            </div>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-tree"></i>
                    <p>Árboles de Navidad</p>
                </div>
                <div class="icons">
                    <i class="fas fa-cookie"></i>
                    <p>Galletas de Navidad</p>
                </div>
                <div class="icons">
                    <i class="fas fa-gifts"></i>
                    <p>Regalos de Navidad</p>
                </div>
            </div>
        </div>

    </section>
    <!--Fin Nosotros-->

    <!--Inicio Tienda-->
    <section id="shop" class="shop">

        <h1 class="heading">Nuestra Tienda</h1>
        <div class="box-container">
           
            <div class="box">
               <div class="image">
                <img src="img/ProductOne.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>                
                </div>
                <div class="content">
                    <h3>Producto</h3>
                    <div class="price"> $50.00 <span> $100.00 </span> </div>
                    <a href="#" class="btn">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                 <img src="img/ProductOne.jpg" alt="">
                     <div class="icons">
                         <a href="#" class="fas fa-share"></a>
                         <a href="#" class="fas fa-heart"></a>
                         <a href="#" class="fas fa-shopping-cart"></a>
                     </div>                
                 </div>
                 <div class="content">
                     <h3>Producto</h3>
                     <div class="price"> $50.00 <span> $100.00 </span> </div>
                     <a href="#" class="btn">Agregar al carrito</a>
                 </div>
             </div>
             <div class="box">
                <div class="image">
                 <img src="img/ProductOne.jpg" alt="">
                     <div class="icons">
                         <a href="#" class="fas fa-share"></a>
                         <a href="#" class="fas fa-heart"></a>
                         <a href="#" class="fas fa-shopping-cart"></a>
                     </div>                
                 </div>
                 <div class="content">
                     <h3>Producto</h3>
                     <div class="price"> $50.00 <span> $100.00 </span> </div>
                     <a href="#" class="btn">Agregar al carrito</a>
                 </div>
             </div>
             <div class="box">
               <div class="image">
                <img src="img/ProductOne.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>                
                </div>
                <div class="content">
                    <h3>Producto</h3>
                    <div class="price"> $50.00 <span> $100.00 </span> </div>
                    <a href="#" class="btn">Agregar al carrito</a>
                </div>
            </div>       
        </div>

    </section>
    <!--Fin Tienda-->

    <!--Inicio Banners-->
    <section class="banner">

        <div class="content">
            <span>Ofertas Especiales</span>
            <h3>50% de Descuento</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, cum?</p>
            <a href="" class="btn">¡Compra Ahora!</a>
        </div>

    </section>
    <!--Fin Banners-->

    <!--Inicio de Galería-->
    <section class="gallery" id="gallery">

        <h1 class="heading">Nuestra Galería</h1>
        <div class="box-container">

            <div class="box">
                <img src="img/Gallery.jpg" alt="">
                <div class="content">
                    <h3>Feliz Navidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quos</p>
                    <a href="#" class="btn">Saber más</a>
                </div>
            </div>
            <div class="box">
                <img src="img/Gallery.jpg" alt="">
                <div class="content">
                    <h3>Feliz Navidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quos</p>
                    <a href="#" class="btn">Saber más</a>
                </div>
            </div>
            <div class="box">
                <img src="img/Gallery.jpg" alt="">
                <div class="content">
                    <h3>Feliz Navidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quos</p>
                    <a href="#" class="btn">Saber más</a>
                </div>
            </div>
            <div class="box">
                <img src="img/Gallery.jpg" alt="">
                <div class="content">
                    <h3>Feliz Navidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quos</p>
                    <a href="#" class="btn">Saber más</a>
                </div>
            </div>
            <div class="box">
                <img src="img/Gallery.jpg" alt="">
                <div class="content">
                    <h3>Feliz Navidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quos</p>
                    <a href="#" class="btn">Saber más</a>
                </div>
            </div>
            <div class="box">
                <img src="img/Gallery.jpg" alt="">
                <div class="content">
                    <h3>Feliz Navidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quos</p>
                    <a href="#" class="btn">Saber más</a>
                </div>
            </div>
            <div class="box">
                <img src="img/Gallery.jpg" alt="">
                <div class="content">
                    <h3>Feliz Navidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quos</p>
                    <a href="#" class="btn">Saber más</a>
                </div>
            </div>
            <div class="box">
                <img src="img/Gallery.jpg" alt="">
                <div class="content">
                    <h3>Feliz Navidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quos</p>
                    <a href="#" class="btn">Saber más</a>
                </div>
            </div>

        </div>

    </section>
    <!--Fin de Galería-->

    <!--Inicio Contato-->
        <section id="contact" class="contact">

            <form action="">
                <h3>Contacto</h3>
                <input type="text" placeholder="Nombres" class="box">
                <input type="text" placeholder="Apellidos" class="box">
                <input type="email" placeholder="Email" class="box">
                <input type="number" placeholder="Teléfono" class="box">
                <textarea name="" placeholder="Déjanos tu mensaje" class="box" id="" cols="30" rows="10"></textarea>
                <button class="btn">Enviar mensaje</button>
            </form>           

        </section>
    <!--Fin Contacto-->

    <!--Inicio Blog-->
        <section class="blog" id="blog">

            <h1 class="heading">Nuestro Blog</h1>
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="img/blogs.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="date">
                            <h3>9</h3>
                            <span>Diciembre</span>
                        </div>
                        <a href="#" class="user"><i class="fas fa-user"></i> Tienda </a>
                        <a href="#" class="title"> Título Lorem Ipsum</a>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, dicta.</p>
                        <a href="#" class="btn">Leer mas</a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/blogs.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="date">
                            <h3>9</h3>
                            <span>Diciembre</span>
                        </div>
                        <a href="#" class="user"><i class="fas fa-user"></i> Tienda </a>
                        <a href="#" class="title"> Título Lorem Ipsum</a>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, dicta.</p>
                        <a href="#" class="btn">Leer mas</a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/blogs.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="date">
                            <h3>9</h3>
                            <span>Diciembre</span>
                        </div>
                        <a href="#" class="user"><i class="fas fa-user"></i> Tienda </a>
                        <a href="#" class="title"> Título Lorem Ipsum</a>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, dicta.</p>
                        <a href="#" class="btn">Leer mas</a>
                    </div>
                </div>

            </div>

        </section>
    <!--Fin Blog-->

    <!--Inicio de Servicios-->
    <section class="services">

        <div class="box">
            <img src="img/delivery.png" alt="">
            <h3>Envio Gratis</h3>
            <p>Lorem, ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="box">
            <img src="img/secure.png" alt="">
            <h3>Pagos Seguros</h3>
            <p>Lorem, ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="box">
            <img src="img/support.png" alt="">
            <h3>Soporte 24/7</h3>
            <p>Lorem, ipsum dolor sit amet consectetur.</p>
        </div>

    </section>
    <!--Fin de Servicios-->

    <!--Inicio Footer-->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Enlaces rápidos</h3>
                <a class="link" href="#home"><i class="fas fa-angle-right"></i> inicio</a>
                <a class="link" href="#category"><i class="fas fa-angle-right"></i> nosotros</a>
                <a class="link" href="#shop"><i class="fas fa-angle-right"></i> tienda</a>
                <a class="link" href="#gallery"><i class="fas fa-angle-right"></i> galería</a>
                <a class="link" href="#contact"><i class="fas fa-angle-right"></i> contacto</a>            
                <a class="link" href="#blog"><i class="fas fa-angle-right"></i> blog</a>
            </div>

            <div class="box">
                <h3>Enlaces adicionales</h3>
                <a class="link" href="#"><i class="fas fa-angle-right"></i> Mis Favoritos</a>
                <a class="link" href="#"><i class="fas fa-angle-right"></i> Mi Orden</a>
                <a class="link" href="#"><i class="fas fa-angle-right"></i> Mi Lista Blanca</a>
                <a class="link" href="#"><i class="fas fa-angle-right"></i> Políticas de privacidad</a>
                <a class="link" href="#"><i class="fas fa-angle-right"></i> Terminos de Uso</a>
            </div>

            <div class="box">
                <h3>Información de Contacto</h3>
                <a class="link" href="#"> <i class="fas fa-phone"></i>+51 925 259 588</a>
                <a class="link" href="#"> <i class="fas fa-envelope"></i> 202012674G@utea.edu.pe</a>
                <a class="link" href="#"> <i class="fas fa-map"></i> Cusco </a>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-telegram"></a>
                </div>
            </div>   

        </div>

    </section>

     <div class="creditos">
            <p><span>Ruben Solano</span></p>
            <p> suscríbete a mi pagina web</p>
        </div>
</body>
</html>