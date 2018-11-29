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
      <?php 
                    
                    if(isset($_SESSION[SESSION_LOGIN])) {
                ?>
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