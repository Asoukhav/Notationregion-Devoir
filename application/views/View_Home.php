<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Devoir region</title>
    <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
</head>
<body>
    <form method="post" action="">
    <label> Votre Nom </label><br><br><input type= "text" name="NomUser"/><br><br>
    <input type="submit" name="btnConnexion" value="Connexion" onclick="AfficherRegion(this.value)"/>



    <div id="divRegion"></div><br>
    <div id="divVille"><div>
</body>
</html>