<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boutique</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container navbar-nav">
            <a class="navbar-brand" href="#">Admin</a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= RACINE_WEB; ?>admin/categories.php">
                            Gestion catégories
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        
    
    
    
    
    
    
    
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
        <div class="container navbar-nav">
            <a class="navbar-brand" href="<?= RACINE_WEB; ?>index.php">Boutique</a>
            <ul class="navbar-nav">
                <?php
                if (isUserConnected()):
                ?>
                  <li class="nav-item">
                    <a class="nav-link">
                    <?= getUserFullName();?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=RACINE_WEB; ?>deconnexion.php">
                    Deconnexion
                    </a>
                </li>
                <?php
                else :
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=RACINE_WEB; ?>inscription.php">
                    Inscription
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=RACINE_WEB; ?>connexion.php">
                    Connexion
                    </a>
                </li>
                <?php
                endif;
                ?>
            </ul>
        </div>
        
    </nav>
    <div class="container">
        <?php
        displayFlashMessage();
        ?>