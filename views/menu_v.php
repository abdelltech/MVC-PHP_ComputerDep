<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area"> 
      <li class="name"> 
        <h1><a href="">Department Computer Management</a></h1> 
      </li> 
      <li class="toggle-topbar menu-icon">
        <a href="#"><span>Menu</span></a>
      </li> 
    </ul> 
    <section class="top-bar-section"> 
      <ul class="left">
              <?php if(isset($_SESSION['login'])): ?>
         <li  class="divider"></li>
        <li class="has-dropdown"><a href="#">Classroom</a>
            <ul class="dropdown"> 
            <li><a href="<?= BASE_URL; ?>index.php/Classroom/createClassroom"> Add classroom </a></li> 
            <li><a href="<?= BASE_URL; ?>index.php/Classroom/readClassrooms">Classrooms List</a></li> 
          </ul> 
        </li> 
         <li  class="divider"></li>
        <li class="has-dropdown"><a href="#">Computer</a> 
          <ul class="dropdown"> 
            <li><a href="<?= BASE_URL; ?>index.php/Computer/createComputer"> Add computer </a></li> 
            <li><a href="<?= BASE_URL; ?>index.php/Computer/readComputers">Computers List</a></li> 
          </ul> 
        </li> 
            <?php endif; ?>
      </ul> 
      <ul class="right"> 
         <?php if(isset($_SESSION['login'])): ?>
        <li><a>Welcome <b> <?= $_SESSION['login'];  ?></b> !</a></li>
        <li  class="divider"></li>
        <li><a href="<?php echo BASE_URL?>index.php/Session/deconnexionSession">Sign out</a></li>
      <?php endif; ?>
      <?php if(!isset($_SESSION['login'])): ?>
        <li><a href="<?php echo BASE_URL?>index.php/Session/connexionSession">Sign in</a></li> 
      <?php endif; ?>
      </ul> 
    </section> 
</nav>