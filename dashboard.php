<div class="admin">
<link rel="stylesheet" href="./static/css/dashboard.css">
  <header class="admin__header">
    <a href="#" class="logo">
      <h1>Pet Clean</h1>
    </a>
    <div class="toolbar">
      <button class="btn btn--primary">Add New Plumbus</button>
      <?php 
                    
                    if(isset($_SESSION[SESSION_LOGIN])) {
                ?>
                    <li class="scroll"><form action="logoff.php" method="POST"></li>
                        <button type="submit" class="btn-logoff">Logoff</button>
                    </form>
                    
                <?php } ?>
    </div>
  </header>
  <nav class="admin__nav">
    <ul class="menu">
      <li class="menu__item">
        <a class="menu__link" href="#">Dashboard</a>
      </li>
      <li class="menu__item">
        <a class="menu__link" href="#">Clientes</a>
      </li>
      <li class="menu__item">
        <a class="menu__link" href="#">Vendedores</a>
      </li>
      <li class="menu__item">
        <a class="menu__link" href="#">Produtos</a>
      </li>
      <li class="menu__item">
        <a class="menu__link" href="./logoff.php">Sair</a>
      </li>
    </ul>
  </nav> 
  </main>
  <footer class="admin__footer">
    <span>
      Leônidas Augusto Amaro - Projeto Integrador 2
    </span>
  </footer>
</div>