<footer class="container-fluid text-center">
  <p>Choco-Lad AB</p>  
  <form class="form-inline" action="<?= $root .'/escape.php' ?>">Bättre sida än denna:
    <input type="url" name="escape_url" class="form-control" size="50" placeholder="Webbadress">
    <button type="button" name="escape_url" class="btn btn-success" href="<?php echo $root .'/escape.php' ?>">Skicka mig hit istället!</button>
  </form>
</footer>