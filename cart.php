<?php 
require 'inc/head.php'; 
require 'inc/data/products.php'; 
if (!isset($_SESSION) || !isset($_SESSION['name'])) {
    header('Location: /login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">        
        <?php  
        if(isset($_SESSION) && isset($_SESSION['cookID'])) {
            foreach ($_SESSION['cookID'] as $id => $amount) {
                echo $catalog[$id]['name'] . ' ' . $amount . '<br/>';
            }
        } else {
            echo "Your cart is empty";
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
