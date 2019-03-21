<?php
include("../inc/m3g4w0rld_c0mm0n.php");
include("val/m3g4w0rld_1nv3nt0ry_v4l.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Megaworld Inventory</title>
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
		<!-- <link rel="stylesheet" href="../assets/css/style.css" /> -->
		<script src="../assets/js/ace-extra.min.js"></script>
	</head>

	<body class="no-skin">

  <?php include("../inc/m3g4w0rld_h34d3r.php"); ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar      skin-3           responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<?php //include("../inc/m3g4w0rld_51d3b4r.php"); ?>

				<?php
				// $url_link = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
				// $file_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
				?>
				<ul class="nav nav-list">
				  <?php //if($full_path === $current_path_index) { echo "active"; }?>
				  <li class="">
				    <a href="m3g4w0rld_m41n.php">
				      <i class="menu-icon fa fa-tachometer"></i>
				      <span class="menu-text"> Home </span>
				    </a>
				    <b class="arrow"></b>
				  </li>

					<?php if ($adm1n === $m364_p051t10n) { ?>

				  <li class="">
				    <a href="#" class="dropdown-toggle">
				      <i class="menu-icon fa fa-users"></i>
				      <span class="menu-text"> Users </span>
				      <b class="arrow fa fa-angle-down"></b>
				    </a>
				    <b class="arrow"></b>

				    <ul class="submenu">
				      <li class="">
				        <a href="m3g4w0rld_u553r5.php">
				          <i class="menu-icon fa fa-user"></i>
				          Users Masterfile
				        </a>
				        <b class="arrow"></b>
				      </li>

				      <li class="">
				        <a href="m3g4w0rld_u553r5_466r0v41.php">
				          <i class="menu-icon fa fa-user"></i>
				          Users Approval
				        </a>
				        <b class="arrow"></b>
				      </li>
				    </ul>
				  </li>

					<?php } ?>


				  <li class="">
				    <a href="m3g4w0rld_1nv3nt0ry.php">
				      <i class="menu-icon fa fa-list"></i>
				      <span class="menu-text"> Employees Inventory </span>
				    </a>
				    <b class="arrow"></b>
				  </li>

					<li class="active">
				    <a href="#" class="dropdown-toggle">
				      <i class="menu-icon fa fa-file-o"></i>
				      <span class="menu-text">
				        Audit Trail
				      </span>
				      <b class="arrow fa fa-angle-down"></b>
				    </a>

				    <b class="arrow"></b>

						<ul class="submenu">
				      <li class="active">
				        <a href="m3g4w0rld_u553r5_1065.php">
				          <i class="menu-icon fa fa-caret-right"></i>
				          User Logs
				        </a>
				        <b class="arrow"></b>
				      </li>
							
				      <li class="">
				        <a href="m3g4w0rld_4ct1v1ty_1065.php">
				          <i class="menu-icon fa fa-caret-right"></i>
				          Activity Logs
				        </a>
				        <b class="arrow"></b>
				      </li>
				    </ul>

				  </li>

				</ul><!-- /.nav-list -->


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								Megaworld Inventory
							</li>
							<li class="">
                Audit Trail
              </li>
							<li class="active">
                <a href="m3g4w0rld_u553r5_1065.php">User Logs</a>
              </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<h3 class="header smaller lighter blue">User Logs</h3>
								<!--Van was here-->
								<form name='pr_form' id='pr_form' action='val/m3g4w0rld_u553r5_v4l_pr1nt.php' method='GET' target='_blank'>
								<input type='hidden' name='sdate' id='pr_sdate'>
								<input type='hidden' name='stime' id='pr_stime'>
								<input type='hidden' name='pr' id='pr' value=1>
								<button id='pr_btn' class='btn btn-primary' disabled> Print <span  class='glyphicon glyphicon-print'></span></button>
								</form>

								<label class='pull-right'><input type='radio' class="custom-control-input" name='sort' id='time' >Time</label>
								<label class='pull-right'><input type='radio' class="custom-control-input" name='sort' id='date' checked >Date</label><span class='pull-right'>
								
								<input type='date' id='sdate' name='date'>
								<input type='time' id='stime' name='time'>
								<button id='search' class>Search</button></span>
								<div id='table'></div>
								<!--Van was here-->
											
									</div>
								</div>
							</div>

									</div>

								</div><!-- /.row -->


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Megaworld Inventory</span>
							&copy; 2018 - 2019 All rights reserved
						</span>

						&nbsp; &nbsp;
						<!-- <span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span> -->
					</div>
				</div>
			</div>


			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->


		<div id="addModal" class="modal fade" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="smaller lighter blue no-margin" id="m3g4w0rld_empl0y335_m0d4l_label"></h3>
					</div>

					<form method="POST" id="userForm">

						<input type="hidden" name="m3g4w0rld_5t4tu5" id="m3g4w0rld_5t4tu5" />
						<input type="hidden" name="empl0y335_key" id="empl0y335_key" />

							<div class="modal-body" style="margin: auto; text-align: center;">

								<div class="form-group has-info" id="emp_InputField_1">
									<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">First Name</label>
										<div class="col-xs-12 col-sm-5">
											<span class="block input-icon input-icon-right">
												<input type="text" id="empl0y335_fname" name="empl0y335_fname" placeholder="Enter First Name" style="width: 350px;" />
											</span>
										</div>
									<a class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_1" style="border-radius: 15px; height: 40px;">
										<i class="ace-icon fa fa-times" style="margin: auto;"></i>
									</a>
									<div class="help-block col-xs-12 col-sm-reset inline"> </div>
								</div> <br />

								<!-- <div class="input-group">
									<span class="input-group-addon">
										<i class="ace-icon fa fa-check"></i>
									</span>
									<input type="text" class="form-control search-query" placeholder="Type your query">
									<span class="input-group-btn">
										<button type="button" class="btn btn-purple btn-sm">
											<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
											Search
										</button>
									</span>
								</div> -->

								<div class="form-group has-info" id="emp_InputField_2">
									<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Middle Name</label>
											<div class="col-xs-12 col-sm-5">
												<span class="block input-icon input-icon-right">
														<input type="text" id="empl0y335_mname" name="empl0y335_mname" placeholder="Enter Middle Name" style="width: 350px;" />
												</span>
											</div>
										<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_2" style="border-radius: 15px; height: 40px;">
											<i class="ace-icon fa fa-times" style="margin: auto;"></i>
										</button>
									<div class="help-block col-xs-12 col-sm-reset inline"> </div>
								</div> <br />

								<div class="form-group has-info" id="emp_InputField_3">
									<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Last Name</label>
									<div class="col-xs-12 col-sm-5">
										<span class="block input-icon input-icon-right">
											<input type="text" id="empl0y335_lname" name="empl0y335_lname" placeholder="Enter your Last Name" style="width: 350px;" />
										</span>
									</div>
										<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_3" style="border-radius: 15px; height: 40px;">
											<i class="ace-icon fa fa-times" style="margin: auto;"></i>
										</button>
									<div class="help-block col-xs-12 col-sm-reset inline"> </div>
								</div> <br />

									<div class="form-group has-info" id="emp_InputField_4">
										<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Age</label>
										<div class="col-xs-12 col-sm-5">
											<span class="block input-icon input-icon-right">
												<input type="number" id="empl0y335_age" name="empl0y335_age" placeholder="Enter Age" style="width: 350px;" />
											</span>
										</div>
										<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_4" style="border-radius: 15px; height: 40px;">
											<i class="ace-icon fa fa-times" style="margin: auto;"></i>
										</button>
										<div class="help-block col-xs-12 col-sm-reset inline"> </div>
									</div> <br />

									<div class="form-group has-info" id="emp_InputField_5">
										<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Birthdate</label>
										<div class="col-xs-12 col-sm-5">
											<span class="block input-icon input-icon-right">
												<input type="date" id="empl0y335_bdate" name="empl0y335_bdate" placeholder="Enter Birthdate" style="width: 350px;"  />
											</span>
										</div>
											<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_5" style="border-radius: 15px; height: 40px;">
												<i class="ace-icon fa fa-times" style="margin: auto;"></i>
											</button>
										<div class="help-block col-xs-12 col-sm-reset inline"> </div>
									</div> <br />

									<div class="form-group has-info" id="emp_InputField_6">
										<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Email Address</label>
										<div class="col-xs-12 col-sm-5">
											<span class="block input-icon input-icon-right">
												<input type="email" id="empl0y335_email" name="empl0y335_email" placeholder="Enter Email Address" style="width: 350px;" />
											</span>
										</div>
											<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_6" style="border-radius: 15px; height: 40px;">
												<i class="ace-icon fa fa-times" style="margin: auto;"></i>
											</button>
										<div class="help-block col-xs-12 col-sm-reset inline"> </div>
									</div> <br />

									<div class="form-group has-info" id="emp_InputField_7">
										<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Contact Number</label>
										<div class="col-xs-12 col-sm-5">
											<span class="block input-icon input-icon-right">
												<input type="number" id="empl0y335_contact" name="empl0y335_contact" placeholder="Enter Contact Number" style="width: 350px;" />
											</span>
										</div>
											<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_7" style="border-radius: 15px; height: 40px;">
												<i class="ace-icon fa fa-times" style="margin: auto;"></i>
											</button>
										<div class="help-block col-xs-12 col-sm-reset inline"> </div>
									</div> <br />

									<div class="form-group has-info" id="emp_InputField_8">
										<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Address</label>
										<div class="col-xs-12 col-sm-5">
											<span class="block input-icon input-icon-right">
												<input type="text" id="empl0y335_address" name="empl0y335_address" placeholder="Enter Address" style="width: 350px;" />
											</span>
										</div>
											<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_8" style="border-radius: 15px; height: 40px;">
												<i class="ace-icon fa fa-times" style="margin: auto;"></i>
											</button>
										<div class="help-block col-xs-12 col-sm-reset inline"> </div>
									</div> <br />

									<div class="form-group has-info" id="emp_InputField_9">
										<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Country</label>
										<div class="col-xs-12 col-sm-5">
											<span class="block input-icon input-icon-right">
												<input type="text" id="empl0y335_country" name="empl0y335_country" placeholder="Enter Country" style="width: 350px;" />
											</span>
										</div>
											<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_9" style="border-radius: 15px; height: 40px;">
												<i class="ace-icon fa fa-times" style="margin: auto;"></i>
											</button>
										<div class="help-block col-xs-12 col-sm-reset inline"> </div>
									</div> <br />

								</div>

								<div class="modal-footer" style="margin: auto; text-align: center;">
									<button type="submit" name="invensubm1t_01010101" class="btn btn-sm btn-success">
										<i class="ace-icon fa fa-check"></i>
										Submit
									</button> &nbsp; &nbsp;
									<button class="btn btn-sm btn-primary" data-dismiss="modal">
										<i class="ace-icon fa fa-times"></i>
										Cancel
									</button>
								</div>

							</form>

						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>



				<div id="deleteModal" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="smaller lighter blue no-margin" id="m3g4w0rld_empl0y335_m0d4l_d3l3t3"></h3>
							</div>

							<form method="POST">

								<input type="hidden" name="m3g4w0rld_5t4tu5_d3l3t3" id="m3g4w0rld_5t4tu5_d3l3t3" />
								<input type="hidden" name="empl0y335_key_d3l3t3" id="empl0y335_key_d3l3t3" />

									<div class="modal-body" style="margin: auto; text-align: center;">
											<h1 class="form-label"><i class="fa fa-exclamation-circle red"></i> Are you sure you want to delete?</h1> <br />

												<button type="submit" class="btn btn-sm btn-danger" style="margin: auto; text-align: center;">
													<i class="ace-icon fa fa-check"></i>
													Yes
												</button> &nbsp; &nbsp;
												<button class="btn btn-sm btn-primary" data-dismiss="modal" style="margin: auto; text-align: center;">
													<i class="ace-icon fa fa-times"></i>
													No
												</button>

									</div>

								</form>

							</div>
						</div>
					</div>



				<script src="../assets/js/jquery-2.1.4.min.js"></script>
				<script type="text/javascript">
					if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
				</script>
				<script src="../assets/js/bootstrap.min.js"></script>
				<script src="../assets/js/jquery-ui.custom.min.js"></script>
				<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
				<script src="../assets/js/jquery.easypiechart.min.js"></script>
				<script src="../assets/js/jquery.sparkline.index.min.js"></script>
				<script src="../assets/js/jquery.flot.min.js"></script>
				<script src="../assets/js/jquery.flot.pie.min.js"></script>
				<script src="../assets/js/jquery.flot.resize.min.js"></script>
				<script src="../assets/js/ace-elements.min.js"></script>
				<script src="../assets/js/ace.min.js"></script>

				<script src="../assets/js/dataTables.buttons.min.js"></script>
				<script src="../assets/js/buttons.flash.min.js"></script>
				<script src="../assets/js/buttons.html5.min.js"></script>
				<script src="../assets/js/buttons.print.min.js"></script>
				<script src="../assets/js/buttons.colVis.min.js"></script>
				<script src="../assets/js/dataTables.select.min.js"></script>

				<script>
					$(document).ready(function(){
						
						if($('#date').prop('checked')==true){
								$('#sdate').show();
								$('#stime').hide();
							}else if($('#time').prop('checked')==true){
								$('#sdate').hide();
								$('#stime').show();
							}else{
								$('#datesearch').html("No Picker");
							}

						$(':radio').on('click',function(){
							$('#pr_btn').attr('disabled',true);
							$('#table').html('');
							if($('#date').prop('checked')==true){
								$('#sdate').show();
								$('#stime').hide();
								$('#stime').val('');
							}else if($('#time').prop('checked')==true){
								$('#sdate').hide();
								$('#sdate').val('');
								$('#stime').show();
							}else{
								$('#datesearch').html("No Picker");
							}
						});
						
						$('#sdate').on('change', function(){
							$('#pr_btn').attr('disabled',true);
						});
						$('#stime').on('change', function(){
							$('#pr_btn').attr('disabled',true);
						});

						$('#search').on('click',function(){
						var $sdate=  $('#sdate').val();
						var $stime=  $('#stime').val();
						if($sdate!=''||$stime!=''){
							$('#pr_sdate').val($sdate);
							$('#pr_stime').val($stime);
							$('#pr_btn').attr('disabled',false);
							$.ajax({
								url: 'val/m3g4w0rld_l04d_u53r5_t4bl3.php',
								type: 'GET',
								data: {sdate:$sdate,stime:$stime},
								beforeSend: function(){
									$('#table').html('Load....');
								},
								success: function(s){
									$('#table').html(s);
								},
								error: function(e){
									$('#table').html(e);
								}
								});
						}
						
						});
					});
						
				</script>
	</body>
</html>
