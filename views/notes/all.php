<?php 
$pageTitle = 'All notes';

?>

<h1 class="container text-center"><?= $pageTitle ?></h1>

<?php
use models\Note;

// Assurez-vous d'inclure le fichier d'autoloading ici si nécessaire

$note = new Note();
    $data = $note->findAll();

    if (empty($data)) {
        echo "<p>Aucune note n'a été trouvée.</p>";
    } else {
        echo "<div class='container'style='display:flex; flex-wrap: wrap;'>";
        foreach ($data as $row) {
            // Remplacez column_name par le nom de vos colonnes
            echo "<div class='card m-2' style='width: 18rem;'>
                    <img src='https://placehold.co/600x400' class='card-img-top' alt='image'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$row['title']}</h5>
                        <p class='card-text'>{$row['content']}</p>
                        
                    </div>
                </div>";
        }
        echo "</div>";

    }

    ?>


