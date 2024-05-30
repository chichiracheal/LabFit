<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>+labfit - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/fa/css/all.css" rel="stylesheet">
        <style  type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', 'sans-serif';
            
        }
        .nav-link{
            color: #fff;
        }
        .nav-link:hover{
            background: white;
            color: #ff5d22;
            font: size 16px;
        }
       .card{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
       }
       .card-body{
        font: 3em sans-serif;
        height: 200px;
        color:#999;
       }
       .card-body2{
        font: 3em sans-serif;
        height: 100px;
        color:#999;
       }
      

       .container .content{
        position: relative;
        margin-top: 10vh;
        min-height: 90vh;
       }
       .container .content .cards{
        padding: 20px 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;

       }
       .container .content .cards .card{
        width: 230px;
        height: 150px;
        background: #1192d7;
        margin: 20px 10px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
        display: flex;
        align-items: center;
        justify-content: space-around;

       }
       .container .content .cards .card img{
        width: 50px;
        height: 40px;
        background: #fff;
        color: #2e4493;
       
       }

       .container .content .content-2{
        min-height: 60vh;
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        flex-wrap: wrap;
       }

       .container .content .content-2 .recent-payments{
        min-height: 50vh;
       margin: 0 25px 25px 25px;
        flex: 5;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
        display: flex;
        flex-direction: column;
        background: white;
       }
       .container .content .content-2 .new-patients{
        min-height: 50vh;
        background: white;
        flex: 2;
        margin: 0 25px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
        display: flex;
        flex-direction: column;
       }
       .container .content .content-2 .new-patients table td:nth-child(1) img{
        height: 40px;
        width: 40px;
       }

       <style>
        table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

      </style>

    </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-primary" 
        style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);">
            
            <a class="navbar-brand ps-3" href="index.php"  style=" background: #fff;color:#1192d7;"
            >+LabFit</a>
            
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <h2  style="color:#fff;">Admin Panel</h2>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
                
            </form>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                     data-bs-toggle="dropdown" aria-expanded="false"  style=" background: #1192d7;color:#fff;"><i class="fas fa-user fa-fw" ></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="admin_logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav" 
                style=" background: #03045e;color:#000;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Admin</div>
                            <a class="nav-link" href="admin_dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-envelope"></i></div>
                                &nbsp;Manage Appointments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admin_apptlist.php">All Appointments</a>
                                    
                                </nav>
                            </div>
                             

                            <a class="nav-link" href="dept.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-hospital"></i></div>
                                Departments
                            </a>

                            <a class="nav-link" href="paid_trans.php">
                                <div class="sb-nav-link-icon"> <i class="fa-solid fa-money-check-dollar"></i></div>
                                Payments
                            </a>
                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-envelope"></i></div>
                                &nbsp;Messages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admin_messages.php">All Messages</a>
                                    
                                </nav>
                            </div>
                             
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-microscope"></i></div>
                                &nbsp;Tests
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="breakout.php">All Tests</a>
                                    
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Users</div>
                           
                            <a class="nav-link" href="patients.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Registered Patients
                            </a>
                            <a class="nav-link" href="patients.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Admin Users
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">