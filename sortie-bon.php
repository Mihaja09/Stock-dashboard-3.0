<?php 
$title = "Bon de sortie";
require 'docshead.php'; ?>

<body>
    <div class="tout">
        <div class="container-fluid">
<!-- Topbar -->
           <?php require 'topbar.php'; ?>
<!-- Body -->
           <div class="row row-cols-2">
<!-- Sidebar -->
                <div class="side min-vh-100">
                    <?php require 'sidebar.php'; ?>
               </div>
<!-- Content -->
                <div class="col-sm">
                    <?php require 'tableau-sortie-bon.php' ; ?>
                </div>
            </div>
        </div>
    </div>
</body>