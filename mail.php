<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Envoi d'un message par formulaire</title>
    <div class="title">
            <i class="fas fa-chevron-right"></i>
            <h2> <a href="index.html">RETOUR A L'ACCUEIL</a></h2>  
    </div>
</head>

<body>
    
    <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From:anabela-alves@sapo.pt' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = 'Message transmis depuis la page Contact de anabeleAlves.com
        Nom : ' . $_POST['name'] . '
        Nom : ' . $_POST['surname'] . '
        Email : ' . $_POST['email'] . '
        Message : ' . $_POST['message'];

        $retour = mail('anabela-alves@sapo.pt', 'Envoi depuis la page Contact', $message, 'from:anabela-alves@sapo.pt' . "\r\n" . 'Reply-to:' . $_POST['email']);
        if ($retour){echo '<p>Votre message a bien été envoyé.</p>';}
            
    }
    
    ?>
</body>
</html>
