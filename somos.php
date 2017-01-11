<?php session_start();?>
<?php $page = "index"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Somos Olva compr@s</title>
    <?php include("include/favicon.php")?>
    <!-- Google Fonts -->
    <?php include("include/google_fonts.php")?>
    
    <?php include("include/css.php")?>
    
  </head>
  <body>
   
   
<!--Start of Zopim Live Chat Script-->
	<?php include("include/chat.php")?>
<!--End of Zopim Live Chat Script-->
   
   
<!-- End header area -->
    
    <div class="site-branding-area">
        <?php include("include/header.php")?>
    </div> <!-- End site branding area -->
    
     <div class="mainmenu-area">
        <?php include("include/main_menu.php")?>
    </div> <!-- End mainmenu area -->
    
    
  <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Somos OlvaCompras</h2>
                    </div>
                </div>
          </div>
        </div>
    </div>
    <div class="single-product-area">
      <div class="container">
            <div class="row">
              <div class="col-md-4">
                    <div class="single-sidebar">
                        <img src="img/ss.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="sidebar-title">Bienvenido a Olvacompras</h2>
                        <p>Somos Olvacompras, unidad de negocio de Olva Courier, empresa peruana con más de 25 años de experiencia en el servicio de envíos rápidos nacionales e internacionales, así como poseedores de la red de oficinas más grande del país, con más de 283 oficinas.</p><br>
<p>En Olvacompras nos especializamos en brindar servicios complementarios para las compras a distancia y compras por internet, permitiéndole escoger los productos de su preferencia en cualquier portal web de USA, Perú o nuestro propio catálogo de productos, facilitándole que realice las compras que requiera desde la comodidad de su hogar u oficina.</p><br>
<p>Por este motivo ponemos a su disposición cuatro tipos de servicios que le permitan comprar productos de la forma que más se acomode a sus necesidades.</p><br>
                        <p><a class="add_to_cart_button" href="compra-usa.php">Compra en USA</a>
                        <a class="add_to_cart_button" href="compra-china.php">Compra en CHINA</a>
                        <a class="add_to_cart_button" href="compra-lima.php">Compra en LIMA</a>
                        <a class="add_to_cart_button" href="compramos-por-ti.php">Compramos por ti</a></p>
              	</div>
           </div>
       </div>
    </div>
    
    <!-- End promo area -->
 
    <div class="footer-top-area">
    	<?php include("include/footer_top_area.php")?>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area" style="padding-top: 15px;">
        <?php include("include/derechos_reservados.php")?>
    </div> <!-- End footer bottom area -->
   
    <?php include("include/scripts.php")?>
  </body>

<!-- Mirrored from www.freshdesignweb.com/demo/template/ustora/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Oct 2015 23:05:41 GMT -->
</html>