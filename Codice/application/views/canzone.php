
<body>
    <br>
    <h1> Dettagli Canzone </h1>
    
    <br><br>
    <form action="<?php echo URL; ?>login/canzone" method="post">
        <label for="posizione">Posizione:</label><br>
        <input type="number" id="posizione" name="posizione"><br>
        <label for="testo">Testo:</label><br>
        <input type="text" id="testo" name="testo"><br><br>
        <input type="hidden" name="canzone_id" value="<?php echo $canzone_id; ?>">
        <input type="submit" value="Aggiungi annotazione">
    </form>
    <?php
        Get::CanzoneTable();
    ?>