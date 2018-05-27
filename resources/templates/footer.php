<footer class="container-fluid text-center">
  <p>Choco-Lad AB (<?= date('Y');?>)</p>  
  <form class="form-inline" action="<?= $HostAddress .'/escape.php' ?>" method="get">Bättre sida än denna:
    <input type="url" name="escape_url" class="form-control" size="50" placeholder="Webbadress">
    <input type="submit" name="submit" class="btn btn-success" value="Skicka mig hit istället!">
  </form>
</footer>