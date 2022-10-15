<?php 
$title = "Ajout magasin";
require 'docshead.php'; ?>

<body>
    <div class="tout">
        <div class="container-fluid">
<!-- Topbar -->
           <?php require 'topbar.php'; ?>
<!-- Body -->
           <div class="row">
<!-- Sidebar -->
                <div class="side min-vh-100">
                    <?php require 'sidebar.php'; ?>
               </div>
<!-- Content -->
                <div class="col">
                   <div class="row">
                           <?php require 'formulaire-user.php' ;?>
                   </div>
                </div>
            </div>
        </div>
    </div>
</body>