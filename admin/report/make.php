<?php

error_reporting(0);
require_once("../../include/initialize.php");
if (!isset($_SESSION['ADMIN_USERID'])){
  redirect(web_root."admin/index.php");
 }
    

  ?>
  
    
                                                    
                                                    <form method="post" name="bwdatesreport" action="controller.php?action=make">
                                                       
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">From Date:</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                     <input type="date" class="form-control" id="fromdate" name="fromdate" value="" required='true'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">To Date:</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                     <input type="date" class="form-control" id="todate" name="todate" value="" required='true'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                 
           

      
    <?php

?>
  <?php include_once('includes/footer.php');?>
  
  
</body>

</html><?php   ?>