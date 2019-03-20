<?php
include("../inc/m3g4w0rld_c0mm0n.php");
include("val/m3g4w0rld_m41n_v4l.php");
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
		<link rel="stylesheet" href="../assets/css/style.css" />
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
				<ul class="nav nav-list">
					<?php if ($adm1n === $m364_p051t10n) { ?>
				  <li class="">
				    <a href="m3g4w0rld_m41n.php">
				      <i class="menu-icon fa fa-tachometer"></i>
				      <span class="menu-text"> Home </span>
				    </a>
				    <b class="arrow"></b>
				  </li>



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

				 <?php } ?>

				  <li class="active">
				    <a href="m3g4w0rld_1nv3nt0ry.php">
				      <i class="menu-icon fa fa-list"></i>
				      <span class="menu-text"> Employees Inventory </span>
				    </a>
				    <b class="arrow"></b>
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
                <a href="m3g4w0rld_6r0f113.php">Profile</a>
              </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="space-6"></div>

									<div class="col-xs-12 col-sm-3 center">
										<div>
											<span class="profile-picture">
													<i class="fa fa-user fa-5x"></i>
											</span>

											<div class="space-4"></div>

											<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
												<div class="inline position-relative">
													<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
														<i class="ace-icon fa fa-circle light-green"></i>
														&nbsp;
														<span class="white"><?php echo $m364_fname . " " . $m364_mname . " " . $m364_lname; ?></span>
													</a>
												</div>
											</div>
										</div>

										<div class="space-6"></div>
									</div>

								</div><!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->

							<div class="profile-user-info profile-user-info-striped">

								<div class="profile-info-row">
									<div class="profile-info-name"> Username </div>
										<div class="profile-info-value">
											<span class="editable" id="username"><?php echo $m364_uname; ?></span>
										</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> First Name </div>
										<div class="profile-info-value">
											<span class="editable" id="username"><?php echo $m364_fname; ?></span>
										</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Middle Name </div>
									<div class="profile-info-value">
										<span class="editable" id="username"><?php echo $m364_mname; ?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Last Name </div>
									<div class="profile-info-value">
										<span class="editable" id="age"><?php echo $m364_lname; ?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Email Address </div>
									<div class="profile-info-value">
										<span class="editable" id="age"><?php echo $m364_3m41l; ?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Contact No. </div>
									<div class="profile-info-value">
										<span class="editable" id="age"><?php echo $m364_c0nt4ct; ?></span>
									</div>
								</div>

							</div>

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
