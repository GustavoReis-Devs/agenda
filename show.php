<?php
  include_once("templetes/header.php");
?> 

  <div class="container" id="view-contact-container">
    <h1 id="main-title"><?= $contact["name"] ?></h1>
    <p class="bold">Telefone:</p>    
    <p><?= $contact["phone"] ?></p>
    <p class="bold">Observações:</p>    
    <p><?= $contact["observations"] ?></p>

<?php
  include_once("templetes/footer.php");
?> 