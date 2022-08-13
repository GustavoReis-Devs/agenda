<?php
  include_once("templetes/header.php");
?> 

  <div class="container">
   <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Minha Agenda</h1>
    <?php if($contacts > 0): ?>
      <table class="table" id="contacts-table">
        <thead>
          <tr scope="col">#</tr>
          <tr scope="col">Nome</tr>
          <tr scope="col">Telefone</tr>
          <tr scope="col"></tr>
        </thead>
        <tbody>
          <?php foreach($contacts as $contact): ?>
            <tr>
              <td scope="row"><?= $contact["id"] ?></td>
              <td scope="row"><?= $contact["name"] ?></td>
              <td scope="row"><?= $contact["telefone"] ?></td>
              <td class="actions">
                <a href="#"><i class="fas fa-eye check-ion"></i></a>
                <a href="#"><i class="far fa-edit edit-ion"></i></a>
                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>

<?php
  include_once("templetes/footer.php");
?> 

<!--O codigo abaixo é colocado nas primeiras linhas do arquivo header.php, não foi colocado agora porque o replit dá erro com o servidor. Como o objetivo é deixar o código escrito no replit e utilizar o recurso do servidor do mesmo fiz essa adequação abaixo nesse arquivo-->
<!--<?php
      //include_once("config/url.php");
      //include_once("config/connection.php");
    ?>
      //limpa a mensagem
      if(isset($_SESSION['msg'])) (
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
      )

-->