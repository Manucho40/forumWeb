 <a href="article.php?id=<?= $article["id"]; ?>">
                    <article>
                        
                    <h1 ><?= $article["libelle"]; ?></h1>
                    
                    
                    <h1 ><?= $article["titre"]; ?></h1>
                    <p  style="color: white;"><?= $article["accroche"]; ?>...</p>
                    <p  class="date" style="color: white;">Posté le <time datetime="<?= $article["publication"]; ?> "><?= formatage_date($article["publication"]); ?></time></p>
                    
                </article>
                    
                </a> 