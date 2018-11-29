<div class="admin">
<link rel="stylesheet" href="./static/css/dashboard.css">
  <header class="admin-header">
    <a href="#" class="logo">
      <h1>Pet Clean</h1>
    </a>
    <div class="toolbar">
      <?php 
                    
                    if(isset($_SESSION[SESSION_LOGIN])) {
                ?>
                    <li class="scroll"><form action="logoff.php" method="POST"></li>
                        <button type="submit" class="btn-logoff">Logoff</button>
                    </form>
                    
                <?php } ?>
    </div>
  </header>
  <nav class="admin-nav">
    <ul class="menu">
      <li>
        <a class="menu-link" href="#">Dashboard</a>
      </li>
      <li>
        <a class="menu-link" href="#">Clientes</a>
      </li>
      <li>
        <a class="menu-link" href="#">Vendedores</a>
      </li>
      <li>
        <a class="menu-link" href="#">Produtos</a>
      </li>
      <li>
        <a class="menu-link" href="./logoff.php">Sair</a>
      </li>
    </ul>
  </nav> 
  </main>
  <footer class="admin-footer">
    <span>
      Leônidas Augusto Amaro - Projeto Integrador 2
    </span>
  </footer>
</div>