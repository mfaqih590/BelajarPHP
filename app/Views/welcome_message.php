<?php
  echo view ('/layout/v_header.php');
  echo view ('/layout/v_navbar.php');
  echo view ('/layout/v_sidebar.php');
  echo view ('/layout/v_footer.php');
  echo view ('/layout/v_js.php');
  echo view ('/layout/content.php');
?>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url() ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>



