<?php
session_start();
require_once "admin_guard.php";
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$patient=new Test;
$pat=$patient->get_all_patients();
$t=$patient->get_all_tests();
$d=$patient->get_all_depts();
$pay=$patient->get_all_payments();
?>
           
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Admin Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light  mb-4">
                                    <div class="card-body text-primary"><i class="fa-solid fa-hospital-user"></i>
                                    <br>Patients
                                    <h2 class="text-dark">
                                        <?php echo !empty($pat) ? count($pat) : "0";  ?></h2>
                                </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-info stretched-link" href="patients.php">View Details</a>
                                        <div class="small text-light"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light  mb-4">
                                    <div class="card-body text-warning"><i class="fa-solid fa-flask-vial"></i><br>Tests
                                    <h2 class="text-dark">
                                        <?php echo !empty($t) ? count($t) : "0";  ?></h2>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-primary stretched-link" href="breakout.php">View Details</a>
                                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light  mb-4">
                                    <div class="card-body text-danger"><i class="fa-solid fa-house-medical"></i>
                                    Departments
                                    <h2 class="text-dark">
                                        <?php echo !empty($d) ? count($d) : "0";  ?></h2>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-info stretched-link" href="dept.php">View Details</a>
                                        <div class="small text-light"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light  mb-4">
                                    <div class="card-body text-success"><i class="fa-solid fa-receipt"></i><br>Payments
                                    <h2 class="text-dark">
                                        <?php echo !empty($pay) ? count($pay) : "0";  ?></h2>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-primary stretched-link" href="paid_trans.php">View Details</a>
                                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                        
                    </div>
                </main>
  <?php

require_once "partials/admin_footer.php";

?>