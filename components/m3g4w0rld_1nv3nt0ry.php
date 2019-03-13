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


				  <li class="active">
				    <a href="m3g4w0rld_1nv3nt0ry.php">
				      <i class="menu-icon fa fa-list"></i>
				      <span class="menu-text"> Employees Inventory </span>
				    </a>
				    <b class="arrow"></b>
				  </li>

				  <li class="">
				    <a href="#" class="dropdown-toggle">
				      <i class="menu-icon fa fa-file-o"></i>
				      <span class="menu-text">
				        Other Pages
				        <span class="badge badge-primary">2</span>
				      </span>
				      <b class="arrow fa fa-angle-down"></b>
				    </a>

				    <b class="arrow"></b>

				    <ul class="submenu">
				      <li class="">
				        <a href="#">
				          <i class="menu-icon fa fa-caret-right"></i>
				          FAQ
				        </a>
				        <b class="arrow"></b>
				      </li>

				      <li class="">
				        <a href="#">
				          <i class="menu-icon fa fa-caret-right"></i>
				          Error 404
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
							<li class="active">
                <a href="m3g4w0rld_1nv3nt0ry.php">Employees Inventory</a>
              </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<h3 class="header smaller lighter blue">Employees Inventory</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>

								<div class="col-xs-4" style="margin-left: -1%;">
									<button href="#addModal" onclick="addEmployee();" role="button" data-toggle="modal" class="btn btn-white btn-primary btn-bold">
										<i class="ace-icon fa fa-plus-circle bigger-120 blue"></i>
										Add New Employee
									</button>
								</div>

								<div class="col-xs-4 pull-right">
									<form method="POST">
											<div class="input-group">
												<input type="text" class="form-control" name="emp_search" id="emp_search" placeholder="Search">
														<div class="input-group-btn">
																	<button type="submit" name="emp_key_btn_search" id="emp_key_btn_search" class="btn btn-primary no-border btn-sm">
																		<i class="ace-icon fa fa-search icon-on-right bigger-20"></i>
																	</button>
														</div>
											 </div>
									</form>
								</div>

											<table id="dynamic-table" class="table table-striped table-bordered table-hover text-top-5x">
												<thead>
													<tr>
														<th class="center">#</th>
														<th class="text-center">Fullname</th>
														<th class="text-center">Email Address</th>
														<th class="text-center">Birthdate</th>
														<th class="text-center">Age</th>
														<th class="text-center">Contact Number</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>

												<tbody>
													<?php
											    $m3g4w0rld_empl0y335_c0unt = 0;
											    $xcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											    $result = $xcon->prepare("SELECT * FROM 3mpl0y335 WHERE empl0y335_creator_no = $m364_1d");
											    $result->execute();
											        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
											               $m3g4w0rld_empl0y335_c0unt++;
											               $m3g4w0rld_empl0y335_fname = $row['empl0y335_fname'];
											               $m3g4w0rld_empl0y335_mname = $row['empl0y335_mname'];
											               $m3g4w0rld_empl0y335_lname = $row['empl0y335_lname'];
											               $m3g4w0rld_empl0y335_age = $row['empl0y335_age'];
											               $m3g4w0rld_empl0y335_bdate = $row['empl0y335_bdate'];
											               $m3g4w0rld_empl0y335_email = $row['empl0y335_email'];
											               $m3g4w0rld_empl0y335_contact = $row['empl0y335_contact'];
											               $m3g4w0rld_empl0y335_address = $row['empl0y335_address'];
											               $m3g4w0rld_empl0y335_country = $row['empl0y335_country'];
											               $m3g4w0rld_empl0y335_status = $row['empl0y335_status'];
											               $m3g4w0rld_empl0y335_date = $row['empl0y335_date'];
											    ?>
													<tr>
													  <td class="text-center"><?php echo $m3g4w0rld_empl0y335_c0unt; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_empl0y335_fname. " " . $m3g4w0rld_empl0y335_mname . " " . $m3g4w0rld_empl0y335_lname; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_empl0y335_email; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_empl0y335_bdate; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_empl0y335_age; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_empl0y335_contact; ?></td>
														<td class="text-center">
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="green" title="Edit"
															     href="#addModal" role="button" data-toggle="modal"
															   	 onclick="editEmployee('<?php echo $row['empl0y335_id'] ; ?>',
																												 '<?php echo $row['empl0y335_fname'] ?>',
																												 '<?php echo $row['empl0y335_mname'] ?>',
																												 '<?php echo $row['empl0y335_lname'] ?>',
																												 '<?php echo $row['empl0y335_age'] ?>',
																												 '<?php echo $row['empl0y335_bdate'] ?>',
																												 '<?php echo $row['empl0y335_email'] ?>',
																												 '<?php echo $row['empl0y335_contact'] ?>',
																												 '<?php echo $row['empl0y335_address'] ?>',
																												 '<?php echo $row['empl0y335_country'] ?>');"
																>
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
																<a class="red" title="Delete"
																	 href="#deleteModal" role="button" data-toggle="modal"
															   	 onclick="deleteEmployee('<?php echo $row['empl0y335_id'] ?>');"
																	 >
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>
														</td>
													</tr>
												</tbody>
											<?php } ?>
											</table>
									</div>
								</div>
							</div>



										<div class="space-6"></div>
									</div>

								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>



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
												<input type="text" id="empl0y335_fname" name="empl0y335_fname" placeholder="Enter First Name" style="width: 350px;" required />
											</span>
										</div>
									<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_1" style="border-radius: 15px; height: 40px;">
										<i class="ace-icon fa fa-times" style="margin: auto;"></i>
									</button>
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
														<input type="text" id="empl0y335_mname" name="empl0y335_mname" placeholder="Enter Middle Name" style="width: 350px;" required />
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
											<input type="text" id="empl0y335_lname" name="empl0y335_lname" placeholder="Enter your Last Name" style="width: 350px;" required />
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
												<input type="number" id="empl0y335_age" name="empl0y335_age" placeholder="Enter Age" style="width: 350px;" required />
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
												<input type="date" id="empl0y335_bdate" name="empl0y335_bdate" placeholder="Enter Birthdate" style="width: 350px;" required  />
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
												<input type="email" id="empl0y335_email" name="empl0y335_email" placeholder="Enter Email Address" style="width: 350px;" required />
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
												<input type="number" id="empl0y335_contact" name="empl0y335_contact" placeholder="Enter Contact Number" style="width: 350px;" required />
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
												<input type="text" id="empl0y335_address" name="empl0y335_address" placeholder="Enter Address" style="width: 350px;" required />
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
												<input type="text" id="empl0y335_country" name="empl0y335_country" placeholder="Enter Country" style="width: 350px;" required />
											</span>
										</div>
											<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_9" style="border-radius: 15px; height: 40px;">
												<i class="ace-icon fa fa-times" style="margin: auto;"></i>
											</button>
										<div class="help-block col-xs-12 col-sm-reset inline"> </div>
									</div> <br />

									<!-- <div class="form-group has-info" id="emp_InputField_9">
										<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Country</label>
										<div class="col-xs-12 col-sm-5">
											<span class="block input-icon input-icon-right">
												<input type="text" id="empl0y335_country" name="empl0y335_country" placeholder="Enter Country" style="width: 350px;" required />
											</span>
												<button class="btn btn-lg btn-danger pull-right" id="removeButtonInputeField_9" style="border-radius: 15px; height: 40px;">
													<i class="ace-icon fa fa-times" style="margin: auto;"></i>
												</button>
										</div>
										<div class="help-block col-xs-12 col-sm-reset inline"> </div>
									</div> <br /> -->




								</div>

								<div class="modal-footer" style="margin: auto; text-align: center;">
									<button type="submit" class="btn btn-sm btn-success">
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

				  $("#removeButtonInputeField_1").click(function(){
				    $("#emp_InputField_1").remove();
				  });

					$("#removeButtonInputeField_2").click(function(){
				    $("#emp_InputField_2").remove();
				  });

					$("#removeButtonInputeField_3").click(function(){
				    $("#emp_InputField_3").remove();
				  });

					$("#removeButtonInputeField_4").click(function(){
				    $("#emp_InputField_4").remove();
				  });

					$("#removeButtonInputeField_5").click(function(){
				    $("#emp_InputField_5").remove();
				  });

					$("#removeButtonInputeField_6").click(function(){
				    $("#emp_InputField_6").remove();
				  });

					$("#removeButtonInputeField_7").click(function(){
				    $("#emp_InputField_7").remove();
				  });

					$("#removeButtonInputeField_8").click(function(){
				    $("#emp_InputField_8").remove();
				  });

					$("#removeButtonInputeField_9").click(function(){
				    $("#emp_InputField_9").remove();
				  });

				});

				function addEmployee()
				{
							$("#m3g4w0rld_empl0y335_m0d4l_label").html("Add New Employee") ;
							$("#m3g4w0rld_5t4tu5").val("addemployee") ;
							$("#empl0y335_fname").val("") ;
							$("#empl0y335_mname").val("") ;
							$("#empl0y335_lname").val("") ;
							$("#empl0y335_age").val("") ;
							$("#empl0y335_bdate").val("") ;
							$("#empl0y335_email").val("") ;
							$("#empl0y335_contact").val("") ;
							$("#empl0y335_address").val("") ;
							$("#empl0y335_country").val("") ;
				}

				function editEmployee(key,fname,mname,lname,age,bdate,email,contact,address,country)
		    {
							$("#m3g4w0rld_empl0y335_m0d4l_label").html("Edit Employee") ;
		          $("#m3g4w0rld_5t4tu5").val("editemployee") ;
							$("#empl0y335_key").val(key) ;
							$("#empl0y335_fname").val(fname) ;
							$("#empl0y335_mname").val(mname) ;
							$("#empl0y335_lname").val(lname) ;
							$("#empl0y335_age").val(age) ;
							$("#empl0y335_bdate").val(bdate) ;
							$("#empl0y335_email").val(email) ;
							$("#empl0y335_contact").val(contact) ;
							$("#empl0y335_address").val(address) ;
							$("#empl0y335_country").val(country) ;
							$('#empl0y335_fname').prop('required',false);
							$('#empl0y335_mname').prop('required',false);
							$('#empl0y335_lname').prop('required',false);
							$('#empl0y335_age').prop('required',false);
							$('#empl0y335_bdate').prop('required',false);
							$('#empl0y335_email').prop('required',false);
							$('#empl0y335_contact').prop('required',false);
							$('#empl0y335_address').prop('required',false);
							$('#empl0y335_country').prop('required',false);
		    }

		    function deleteEmployee(key)
		    {
		          $("#m3g4w0rld_empl0y335_m0d4l_d3l3t3").html("Delete Employee") ;
		          $("#m3g4w0rld_5t4tu5_d3l3t3").val("deletemployee") ;
		          $("#empl0y335_key_d3l3t3").val(key) ;
		    }
				</script>

		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});

			  $.resize.throttleWindow = false;

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);


			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });

				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});




				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
		</script>
	</body>
</html>
