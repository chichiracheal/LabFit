<?php
session_start();
require_once "admin_guard.php";

require_once "partials/admin_header.php";
require_once "classes/Admin.php";
$fetch = new Admin;
$fetchs = $fetch->fetch_messages();
?>
           
           <main>
                    <div class="container-fluid px-4">
              
                        <div class="card my-4">
                           
                           
                               <h3>Messages</h3>
                           
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              Contact Messages
                            </div>
                            <div class="row ">
                              <div class="col-md-12">
                               <table class="table table-sm table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($fetchs as $f) {
    ?>
    <tr>
      <th scope="row"><?php echo $f['msg_id'] ?></th>
      <td><?php echo $f['msg_fullname'] ?></td>
      <td><?php echo $f['msg_email'] ?></td>
      <td><?php echo $f['msg_content'] ?></td>
          </tr>
    <?php
    }
    ?>
     
   
  </tbody>
</table>
  </div>                    
  </div>                   
  </div>    
                    </div>
                </main>
  <?php

require_once "partials/admin_footer.php";

?>