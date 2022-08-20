<?php
session_start();
error_reporting(0);
require_once("../../include/initialize.php");
if (!isset($_SESSION['ADMIN_USERID'])){
  redirect(web_root."admin/index.php");
 }




  ?>

<div class="row">
       	 <div class="col-lg-12">
            <h1 class="page-header">List of Jobs   </h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=make" Method="POST">  	
			     <div class="table-responsive">					
				<table id="dash-table" class="table table-striped table-bordered table-hover"  style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
                        
                        <th>CATEGORY</th>
                        <th>OCCUPATION TITLE</th>
                        <th >SALARIES</th>
                        <th>PREFERED SEX</th>
					 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
                      $fdate=$_POST['fromdate'];
                      $tdate=$_POST['todate'];
					  $cnt=1;
				  		$mydb->setQuery("SELECT * from tbljob where date(DATEPOSTED) between '$fdate' and '$tdate'");
				  		$cur = $mydb->loadResultList(); 
						foreach ($cur as $result) {
				  		echo '<tr>';
				  		echo '<td width="5%" align="center"></td>';
				  		echo '<td>
				  		     <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CATEGORYID. '"/>
				  				' . $result->CATEGORIES.'</a></td>';
						    
				  			echo '<td>' . $result->CATEGORY .'</td>';
				  			echo '<td>' . $result->OCCUPATIONTITLE  .'</td>';
				  			echo '<td>' . $result->SALARIES .'</td>';
                            echo '<td>' . $result->PREFEREDSEX .'</td>';
							
				  		
				  		// echo '<td></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
						<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
					<?php
					if($_SESSION['ADMIN_ROLE']=='Administrator'){
					echo '<button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>'
					; }?>
				</div>
			
			
				</form>
	
 <div class="table-responsive">	 




       
           