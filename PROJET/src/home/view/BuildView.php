<?php

function BuildView($article_list): string
{
  $article = "";
  foreach ($article_list as $product) {
    
    $article = $article . BuildArticle($product['nom'], $product['prix']);
    
  }

  return <<<HTML
<article>
    <header> 
        <hgroup>
        <h1>produits:</h1>
        </hgroup>
          $article
HTML;
}

function BuildArticle($article_name, $article_price): string
{
  return <<<HTML
  <div class="container">
            <div class="d-flex flex-nowrap">
               <div class="card" style="width: 18rem;">
                   <img class="card-img-top" src="https://la-florentine.com/media/laflorentine04fr/common/NotFound-mm.png" 
                   alt="image of products_name[0]"
                   width = "200"
                   height= "200">
               <div class="card-body">
               <h5 class="card-title">$article_name</h5>
               <p class="card-text">$article_price €</p>
               <a href="#" class="btn btn-primary">ajouter au panier</a>
               </div>
               </div>
             </div>
    </div>
    <br>
  HTML;
}

function debug($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

?>