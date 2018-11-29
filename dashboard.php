<?php

require_once './biblioteca.php';
startSession();
?>

<div class="admin">
<link rel="stylesheet" href="./static/css/dashboard.css">
  <header class="admin-header">
    <a href="#" class="logo">
      <h1>Pet Clean</h1>
    </a>
    <div class="toolbar">
    Bem-vindo <?php echo $_SESSION['nome']; ?>
    </div>
  </header>
  <nav class="admin-nav">
    <ul class="menu">
      <li>
        <a class="menu-link" href="#">Dashboard</a>
      </li>
      <li>
        <a class="menu-link" href="./clientes.php">Clientes</a>
      </li>
      <li>
        <a class="menu-link" href="#">Vendedores</a>
      </li>
      <li>
        <a class="menu-link" href="#">Produtos</a>
      </li>
      <li>
      </li>
      <?php 
                    
                    if(isset($_SESSION[SESSION_LOGIN])) {
                ?>
                    <li class="scroll"><form action="logoff.php" method="POST"></li>
                        <button type="submit" class="btn-logoff">Logoff</button>
                    </form>
                    
                <?php } ?>
    </ul>
  </nav> 
  </main>
  <footer class="admin-footer">
    <span>
      Leônidas Augusto Amaro - Projeto Integrador 2
    </span>
  </footer>
</div>