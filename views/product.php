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
    <script>
        // Au click du bouton l'id du produit est affiché en dessous
            var btn = document.getElementById("btn")

            const text = document.getElementById('text')
            const dl = document.getElementById('dl')
            const msg = document.getElementById('msg')
           
            btn.addEventListener('click', () => {
                const index = [... dl.options].map(o => o.value).indexOf(text.value)
                    if (index === - 1) {
                        msg.innerHTML = "Aucun id à afficher."
                    } else {
                        msg.innerHTML = "Id = " + dl.options[index].id
                    }
            }, false)
        //end récup prodId

        //Affichage des tests correspondants
      


        //end affiche    
    </script>
</body>
</html>