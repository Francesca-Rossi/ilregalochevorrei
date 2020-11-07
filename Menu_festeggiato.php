<?php session_start() ?>
<header>
<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <a class="navbar-brand" href="Profile.php"><svg class="bi bi-person-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
</svg> 
    <?php echo $_SESSION['Festeggiato']->get_nome();?></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link" href="Dashboard_festeggiato.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Aggiungi_regalo.php">Nuovo Regalo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="I_miei_regali.php">I miei regali</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="Lista_partecipazioni.php">Lista Partecipazioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Cambiaarea.php">Cambia Area</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="esci.php">Esci
          <svg class="bi bi-box-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 010-.708L14.293 8l-2.647-2.646a.5.5 0 01.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h9a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 01.5 12V4A1.5 1.5 0 012 2.5h7A1.5 1.5 0 0110.5 4v1.5a.5.5 0 01-1 0V4a.5.5 0 00-.5-.5H2a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h7a.5.5 0 00.5-.5v-1.5a.5.5 0 011 0V12A1.5 1.5 0 019 13.5H2z" clip-rule="evenodd"/>
          </svg>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  </header>
  <? include "footer.html"?>