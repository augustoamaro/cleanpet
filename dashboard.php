<?php

require_once './biblioteca.php';
startSession();
?>

<div class="admin">
<link rel="stylesheet" href="./static/css/dashboard.css">
<link rel="stylesheet" href="./static/css/buttons.css">
  <header class="admin-header">
    <a href="#" class="logo">
      <h1>Pet Clean</h1>
    </a>
    <div class="toolbar">
    Bem-vindo <?php echo $_SESSION['nome']; ?>

    <form action="logoff.php" method="POST"></li>
                        <button type="submit" class="btn-logoff">Sair</button>
                    </form>
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
    </ul>
  </nav> 
  </main>
  <footer class="admin-footer">
    <span>
      Leônidas Augusto Amaro - Projeto Integrador 2
    </span>
  </footer>
</div>