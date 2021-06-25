<?php 
        $navTitle = "Liste des produits";
        include("views/nav.php");

?>
    <!--Content-->

    <nav class="panel">
        <div class="panel-heading">
            <label for="productList">Entrez un nom de produit:</label>
            <input list="dl" id="text" name="text" placeholder="nom d'un produit" required/>
            <datalist id="dl">
                <?php foreach ($products as $prod) : ?>
                    <option id="<?= $prod['id']?>" value="<?= $prod['name'] ?>"></option>
                <?php endforeach ?>
            </datalist>
            <button type="submit" id="btn" class="button is-primary is-small">Choose</button> 
        </div>
        <div class="panel-block">
            <p id="msg"></p>
            <p id="display"></p>   
        </div>
    </nav>
  
    <!--Tests JS-->
    <script src="../assets/js/ajax.js"></script>
</body>
</html>