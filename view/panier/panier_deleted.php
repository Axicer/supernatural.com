<p class="un_produit"><b>Le produit a été retiré de votre panier.</b></p>

<?php
if (Util::getFromGETorPOST('retour') == "oui") {
    $product = Query::getSpecificProduct(Util::getFromGETorPOST('id'));
    require(File::build_path(array('view', 'produits', 'produits_show.php')));
} else {
    $products = Query::getAllProducts(50);
    require(File::build_path(array('view', 'produits', 'produits_list.php')));
}
?>