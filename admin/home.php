<?php
              require_once("../include/database.php");
              $conn = mysqli_connect(server,user,pass,database_name);

              ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              
              $dash_jobregistration_query = "SELECT * FROM tbljobregistration";
              $dash_jobregistration_query_run=mysqli_query($conn,$dash_jobregistration_query);

            if($jobregistration_total=mysqli_num_rows($dash_jobregistration_query_run))
            {
              echo '<h3>'.$jobregistration_total.'</h3>';
            }
            else {
              echo '<h3>no data found</h3>';
            }
             ?>
              

              <p>Applicant</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <?php
              
              $dash_job_query = "SELECT * FROM tbljob";
              $dash_job_query_run=mysqli_query($conn,$dash_job_query);

            if($job_total=mysqli_num_rows($dash_job_query_run))
            {
              echo '<h3>'.$job_total.'</h3>';
            }
            else {
              echo '<h3>no data found</h3>';
            }
             ?> 
              <p>Vacancy</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php
              
              $dash_applicants_query = "SELECT * FROM tblapplicants";
              $dash_applicants_query_run=mysqli_query($conn,$dash_applicants_query);

            if($applicants_total=mysqli_num_rows($dash_applicants_query_run))
            {
              echo '<h3>'.$applicants_total.'</h3>';
            }
            else {
              echo '<h3>no data found</h3>';
            }
             ?> 
            

              <p>JOBSEEKs</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <?php
              
              $dash_company_query = "SELECT * FROM tblcompany";
              $dash_company_query_run=mysqli_query($conn,$dash_company_query);

            if($company_total=mysqli_num_rows($dash_company_query_run))
            {
              echo '<h3>'.$company_total.'</h3>';
            }
            else {
              echo '<h3>no data found</h3>';
            }
             ?> 
              <p>Company</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>
