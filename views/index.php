<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "cart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Enlighten - Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="body_bg">
            <div id="pre_header" class="container">
                <div class="row margin-top-10 visible-lg">
                    <div class="col-md-6">
                        <p>
                            <strong>Phone:</strong>&nbsp;1-800-123-4567</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>
                            <strong>Email:</strong>info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="header" class="container">
                        <div class="row">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html" title="">
                                    <img src="assets/img/TESTGALAXY.png" alt="Logo" />
                                </a>
                            </div>
                            <!-- End Logo -->
                            <ul class="social-icons pull-right hidden-xs">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="GooglePlus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Top Menu -->
                    <div id="hornav" class="container no-padding">
                        <div class="row">
                            <div class="col-md-12 no-padding">
                                <div class="pull-right visible-lg">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
                                            <a href="index.html" class="fa-home">Home</a>
                                        </li>
                                        <li>
                                            <span class="fa-gears">Features</span>
                                            <ul>
                                                <li class="parent">
                                                    <span>Typography</span>
                                                    <ul>
                                                        <li>
                                                            <a href="features-typo-basic.html">Basic Typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="features-typo-blockquotes.html">Blockquotes</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="parent">
                                                    <span>Components</span>
                                                    <ul>
                                                        <li>
                                                            <a href="features-labels.html">Labels</a>
                                                        </li>
                                                        <li>
                                                            <a href="features-progress-bars.html">Progress Bars</a>
                                                        </li>
                                                        <li>
                                                            <a href="features-panels.html">Panels</a>
                                                        </li>
                                                        <li>
                                                            <a href="features-pagination.html">Pagination</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="parent">
                                                    <span>Icons</span>
                                                    <ul>
                                                        <li>
                                                            <a href="features-icons.html">Icons General</a>
                                                        </li>
                                                        <li>
                                                            <a href="features-icons-social.html">Social Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="features-icons-font-awesome.html">Font Awesome</a>
                                                        </li>
                                                        <li>
                                                            <a href="features-icons-glyphicons.html">Glyphicons</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="features-testimonials.html">Testimonials</a>
                                                </li>
                                                <li>
                                                    <a href="features-accordions-tabs.html">Accordions & Tabs</a>
                                                </li>
                                                <li>
                                                    <a href="features-buttons.html">Buttons</a>
                                                </li>
                                                <li>
                                                    <a href="features-carousels.html">Carousels</a>
                                                </li>
                                                <li>
                                                    <a href="features-grid.html">Grid System</a>
                                                </li>
                                                <li>
                                                    <a href="features-animate-on-scroll.html">Animate On Scroll</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="fa-copy">Pages</span>
                                            <ul>
                                                <li>
                                                    <a href="pages-about-us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="pages-services.html">Services</a>
                                                </li>
                                                <li>
                                                    <a href="pages-faq.html">F.A.Q.</a>
                                                </li>
                                                <li>
                                                    <a href="pages-about-me.html">About Me</a>
                                                </li>
                                                <li>
                                                    <a href="pages-full-width.html">Full Width</a>
                                                </li>
                                                <li>
                                                    <a href="pages-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="pages-right-sidebar.html">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="pages-login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="pages-sign-up.html">Sign-Up</a>
                                                </li>
                                                <li>
                                                    <a href="pages-404.html">404 Error Page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="fa-th">Portfolio</span>
                                            <ul>
                                                <li>
                                                    <a href="portfolio-2-column.html">2 Column</a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-3-column.html">3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-4-column.html">4 Column</a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-6-column.html">6 Column</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="fa-font">Blog</span>
                                            <ul>
                                                <li>
                                                    <a href="blog-list.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="blog-single.html">Blog Single Item</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="fa-comment">Contact</a>
                                        </li>
        <li>
       <a id="cart-popover" class="btn"  data-placement="bottom" title="Shopping Cart">
         <span class="glyphicon glyphicon-shopping-cart"></span>
         <span class="badge"></span>
         <span class="total_price">$ 0.00</span>
        </a>
       </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="popover_content_wrapper" style="display: none">
    <span id="cart_details"></span>
    <div align="right">

     <a href="#"  class="btn btn-primary" id="check_out_cart">
     <span class="glyphicon glyphicon-shopping-cart"></span> Check out
     </a>
     <a href="?clear=true" name="clear" onclick="form.submit();" class="btn btn-default" id="clear_cart">
     <span class="glyphicon glyphicon-trash"></span> Clear
     </a>
     
    </div>
   </div>

   <div id="display_item">


   </div>
                    <!-- End Top Menu -->
                    <!-- === END HEADER === -->
                    <!-- === BEGIN CONTENT === -->
                    <script>
        $('#cart-popover').popover({
        html : true,
        container: 'body',
        content:function(){
        return $('#popover_content_wrapper').html();
        }
});
    $(document).ready(function(){
        load_product();
        load_cart_data();
        function load_product()
        {
            $.ajax({
                url:"fetch_item.php",
                method:"POST",
                success:function(data)
                {
                    $('#display_item').html(data);
                    
                }
            });
        }
    function load_cart_data()
        {
            $.ajax({
                url:"fetch_cart.php",
                method:"POST",
                dataType:"json",
                success:function(data)
                {
                   $('#cart_details').html(data.cart_details);
                    $('.total_price').text(data.total_price);
                    $('.badge').text(data.total_item);
                   
                }
            });
             
        }

        
        $(document).on('click', '.add_to_cart', function(){
        var product_id = $(this).attr("id");
        var product_name = $('#name'+product_id+'').val();
        var product_price = $('#price'+product_id+'').val();
        var product_quantity = $('#quantity'+product_id).val();
        var action = "add";
  if(product_quantity > 0)
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
    success:function(data)
    {
     load_cart_data();
     alert("Item has been Added into Cart");
    }
   });
  }
  else
  {
   alert("please Enter Number of Quantity");
  }
 });
        $(document).on('click','.delete',function(){
            var product_id = $(this).attr("id");
            var action = 'remove';
            if(confirm("Are you sure you want to reemove this product?")){
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:{product_id:product_id, action:action},
                    success:function()
                    {
                        load_cart_data();
                        $('#cart-popover').popover('hide');
                        alert("Item has been removed!");
                    }
                    
                });
            }
            else{
                return false;
            }
        });
        $(document).on('click', '#clear_cart', function(){
            var action = 'empty';
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{action:action},
                success:function()
                {
                    load_cart_data();
                    $('#cart-popover').popover('hide');
                    alert("your cart has been cleared!");
                }
                
            });
        });
    });
    
    </script>
            <!-- End Footer Menu -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->

<?php
$user_id = 1;
$trv = 1;
$etat = 0;

$date_creation = date("Y/m/d");
   $sql = "SELECT * FROM panier WHERE id_user = 1";
     $result =mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
       
        echo "hiiii";
             while($row = mysqli_fetch_assoc($result)) {
              if($row["etat"] == 0)
              {

                  $trv =0;
                  $id_panier = $row["id_panier"];
              }
        }
}
if($trv == 1)
{
$sql = "INSERT INTO panier (id_user, date_creation, etat)
VALUES ('".$user_id."', '".$date_creation."', '".$etat."')";

if (mysqli_query($conn, $sql)) {
    $id_panier = mysqli_insert_id($conn);
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
///
if(isset($_POST['add_to_cart']))
{
$product=$_POST['hidden-id'];
$qte=$_POST['quantity'];
include "../entities/panierproduit.php";
include "../core/panierproduitC.php";
    $exist=0;
    $sql = "SELECT id_pp,id_produit, quantite FROM panierproduit";
      $result = mysqli_query($conn, $sql);

  
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
              if($row["id_produit"] == $product)
              {
                  $exist =1;
                  $nQte= $row["quantite"]+1;
                  $id_pp= $row["id_pp"];
   
    $panierproduit=new panierproduit( $id_pp,$product,$nQte,$id_panier);
    $panierproduitC=new panierproduitC();
    $panierproduitC->modifierpanierproduit($panierproduit,$product);


              }
        }
      
if($exist == 0){
   $id_pp= NULL;


$panierproduit=new panierproduit($id_pp,$product,$qte,$id_panier);

$panierproduitC=new panierproduitC();
$panierproduitC->ajouterpanierproduit($panierproduit);

}
}

if(isset($_GET['clear'])){
include "../core/panierproduitC.php";
$panierproduitC=new panierproduitC();
$panierproduitC->clearpanierproduit();
}

if(isset($_POST['delete'])){
    include "../core/panierproduitC.php";
    $id_tdelete = $_POST["hidden-id"];
    $panierproduitC=new panierproduitC();
    $panierproduitC->supprimerpanierproduit($id_tdelete);
     

}
?>