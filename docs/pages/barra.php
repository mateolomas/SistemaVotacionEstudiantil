<nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo"><a class="nav-link" href="#"><img id="ilogo" src="../media/yachay_verde.png"></a></li>
      <li class="nav-item"><a class="nav-link" href="dashboard.php">     <i class="fas fa-home icons"></i>   <span class="link-text">Dashboard</span>    </a></li>
      <li class="nav-item"><a class="nav-link" href="candidatos.php">   <i class="fas fa-user-friends icons"></i> <span class="link-text">Candidatos</span>   </a></li>
      <li class="nav-item"><a class="nav-link" href="votarya.php">       <i class="fas fa-vote-yea icons"></i> <span class="link-text">Vota ya!</span>     </a></li>
      <li class="nav-item"><a class="nav-link" href="estadisticas.php"> <i class="fas fa-poll icons"></i>     <span class="link-text">Estadisticas</span> </a></li>
      <li class="nav-item"><a class="nav-link" href="certificado.php">  <i class="far fa-id-card icons"></i>  <span class="link-text">Certificado</span>  </a></li>
      <?php 
      session_start();
        echo "<li class='nav-item'><a class='nav-link' href='usuario.html'>  <i class='fas fa-user-circle'></i>  <span class='link-text' id='usuario_actual'>".$_SESSION['name']." ".$_SESSION['apel']."</span>  </a></li>";
      ?>
      
      <a href="../../../logout.php">Logout</a>

    </ul>
</nav>