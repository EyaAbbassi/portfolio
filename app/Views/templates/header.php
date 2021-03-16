<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo (base_url('/assets/css/styles.css'))?>">
    <title>Main Page</title>

  </head>
  <body>
    <?php $uri = service('uri'); ?>
    
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light"
      <div class="container">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if (session()->get('isLoggedIn')): ?>
        <ul class="navbar-nav mr-auto">

          <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
            <a class="nav-link"  href="<?php echo base_url('dashboard')?>">Dashboard</a>
          </li>
      
           <li class="nav-item <?= ($uri->getSegment(1) == 'about' ? 'active' : null) ?>">
            <a class="nav-link" href="<?php echo base_url('/About/display')?>">About</a>
          </li>

          <li class="nav-item <?= ($uri->getSegment(1) == 'certification' ? 'active' : null) ?>">
            <a class="nav-link" href="<?php echo base_url('/Certification/display')?>">Certifications</a>
         </li>


           <li class="nav-item <?= ($uri->getSegment(1) == 'competences' ? 'active' : null) ?>">
            <a class="nav-link" href="<?php echo base_url('/Competence/display')?>">Competences</a>
          </li>
           
            <li class="nav-item <?= ($uri->getSegment(1) == 'formations' ? 'active' : null) ?>">
            <a class="nav-link" href="<?php echo base_url('/Formation/display')?>">Formations</a>
            </li>

            <li class="nav-item <?= ($uri->getSegment(1) == 'projets' ? 'active' : null) ?>">
            <a class="nav-link" href="<?php echo base_url('/Projet/display')?>">Projets</a>    
          </li>

            <li class="nav-item <?= ($uri->getSegment(1) == 'interet' ? 'active' : null) ?>">
            <a class="nav-link" href="<?php echo base_url('/Interet/display')?>">Interets</a>
           </li>

            <li class="nav-item <?= ($uri->getSegment(1) == 'message' ? 'active' : null) ?>">
            <a class="nav-link" href="<?php echo base_url('/Message/display')?>">Messages</a>
           </li>

        </ul>
        
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("Dashboard/logout")?>">Logout</a>
          </li>
        </ul>
      <?php else: ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
            <a class="nav-link" href="<?php echo base_url('Admin')?>">Login</a>
          </li>
         
        </ul>
        <?php endif; ?>
      </div>
      </div>
    </nav>
