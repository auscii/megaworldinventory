<?php
include("../inc/m3g4w0rld_c0mm0n.php");
include("val/m3g4w0rld_u553r5_v4l.php");
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

				  <li class="active">
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

				      <li class="active">
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

				  <li class="">
				    <a href="#" class="dropdown-toggle">
				      <i class="menu-icon fa fa-file-o"></i>
				      <span class="menu-text">
				        Audit Trail
				      </span>
				      <b class="arrow fa fa-angle-down"></b>
				    </a>

				    <b class="arrow"></b>

						<ul class="submenu">
				      <li class="">
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
							<li class="active">
                <a href="#">Home</a>
              </li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<h3 class="header smaller lighter blue">Users Approval</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>

											<table id="dynamic-table" class="table table-striped table-bordered table-hover text-top-1x">
												<thead>
													<tr>
														<th class="text-center">ID #</th>
														<th class="text-center">Fullname</th>
														<th class="text-center">Email Address</th>
														<th class="text-center">Contact number</th>
														<th class="text-center">Date Registered</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>

												<tbody>
													<?php
											    $m3g4w0rld_u553r5_c0unt = 0;
											    $xcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											    $result = $xcon->prepare("SELECT * FROM u553r5");
											    $result->execute();
											        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
											               $m3g4w0rld_u553r5_c0unt++;
											               $m3g4w0rld_u553r5_id = $row['u553r5_id'];
											               $m3g4w0rld_u553r5_fname = $row['u553r5_fname'];
											               $m3g4w0rld_u553r5_lname = $row['u553r5_lname'];
											               $m3g4w0rld_u553r5_mname = $row['u553r5_mname'];
											               $m3g4w0rld_u553r5_email = $row['u553r5_email'];
											               $m3g4w0rld_u553r5_contact = $row['u553r5_contact'];
											               $m3g4w0rld_u553r5_active = $row['u553r5_active'];
											               $m3g4w0rld_u553r5_date = $row['u553r5_date'];
																		 $m3g4w0rld_u553r5_full_name = $m3g4w0rld_u553r5_fname . " " .
																		 															 $m3g4w0rld_u553r5_mname . " " .
																																	 $m3g4w0rld_u553r5_lname;
											    ?>
													<tr>
														<td class="center"><label class="pos-rel"><?php echo $m3g4w0rld_u553r5_id; ?></label></td>
														<td class="text-center"><?php echo $m3g4w0rld_u553r5_fname. " " . $m3g4w0rld_u553r5_mname . " " . $m3g4w0rld_u553r5_lname; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_u553r5_email; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_u553r5_contact; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_u553r5_date; ?></td>
														<td class="text-center">
																<?php
																if ($m3g4w0rld_u553r5_active === "1") {
																	  echo '<button type="button" class="btn btn-success" disabled><i class="fa fa-check"></i> APPROVED</button>';
																}
															  else if ($m3g4w0rld_u553r5_active === "0") {
																?>
																			    <button type="button" class="btn btn-danger"
																			 						onclick="approveName('<?php echo $m3g4w0rld_u553r5_id; ?>',
																																	     '<?php echo $m3g4w0rld_u553r5_full_name; ?>');"
																									href="#approvalModal" role="button" data-toggle="modal">
																				  <i class="fa fa-exclamation-circle"></i> INACTIVE
																					</button>
																<!--
																<form method="POST">
																			<input type="hidden" name="m364_4ppr0v4l_st4tus" id="m364_4ppr0v4l_st4tus" />
																			<input type="hidden" name="m364_4ppr0v4l_k3y" id="m364_4ppr0v4l_k3y" />
																			<input type="hidden" name="m364_4ppr0v4l_4n5" id="m364_4ppr0v4l_4n5" />

																			<button type="submit" class="label label-success label-white middle"
																				onclick="userApproval('<?php echo $m3g4w0rld_u553r5_id; ?>', 1);">
																				<i class="ace-icon fa fa-check-circle bigger-120"></i>
																				Yes
																			</button> &nbsp;
																			<button type="submit" class="label label-danger label-white middle"
																				onclick="userApproval('<?php echo $m3g4w0rld_u553r5_id; ?>', 0);">
																				<i class="ace-icon fa fa-times-circle bigger-120"></i>
																				No
																			</button>
																</form>
															-->
																<?php } ?>
														</td>
													</tr>
												<?php } ?>

												</tbody>
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

<div id="approvalModal" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin" id="#"></h3>
			</div>

			 <form method="POST">
						<input type="hidden" name="m364_4ppr0v4l_st4tus" id="m364_4ppr0v4l_st4tus" />
						<input type="hidden" name="m364_4ppr0v4l_k3y" id="m364_4ppr0v4l_k3y" />
						<input type="hidden" name="m364_4ppr0v4l_4n5" id="m364_4ppr0v4l_4n5" />

						 <div class="modal-body" style="margin: auto; text-align: center;">
							 <h1 class="form-label"><i class="fa fa-exclamation-circle red"></i>
								 Are you sure you want to Approve
								 <!-- <span class="approvers_name"></span> -->
							 </h1> <br />

							 <button type="submit" class="btn btn-sm btn-danger"
							   			 style="margin: auto; text-align: center;"
											 onclick="userApproval(1);">
											 <!-- onclick="userApproval('<?php //echo $m3g4w0rld_u553r5_id; ?>', 1);"> -->
								 <i class="ace-icon fa fa-check"></i>
								 Yes
							 </button> &nbsp; &nbsp;
							 <button class="btn btn-sm btn-primary" data-dismiss="modal"
							 				 style="margin: auto; text-align: center;"
			 								 onclick="userApproval(0);">
			 								 <!-- onclick="userApproval('<?php //echo $m3g4w0rld_u553r5_id; ?>', 0);"> -->
								 <i class="ace-icon fa fa-times"></i>
								 No
							 </button>
					<!--
								<button type="submit" class="label label-success label-white middle"
									onclick="userApproval('<?php echo $m3g4w0rld_u553r5_id; ?>', 1);">
									<i class="ace-icon fa fa-check-circle bigger-120"></i>
									Yes
								</button> &nbsp;
								<button type="submit" class="label label-danger label-white middle"
									onclick="userApproval('<?php echo $m3g4w0rld_u553r5_id; ?>', 0);">
									<i class="ace-icon fa fa-times-circle bigger-120"></i>
									No
								</button>
					 -->

					   </div>
			</form>

			</div>
		</div>
	</div>

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Megaworld Inventory</span>
							&copy; 2018 - 2019 All rights reserved
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<script>
			function approveName(megaid,meganame){
			  // $(".approvers_name").val(meganame) ;
				$("#m364_4ppr0v4l_k3y").val(megaid) ;
			}

			function userApproval(app) {
				$("#m364_4ppr0v4l_st4tus").val("updateuserapproval") ;
				// $("#m364_4ppr0v4l_k3y").val(id) ;
				$("#m364_4ppr0v4l_4n5").val(app) ;
			}
		</script>

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
