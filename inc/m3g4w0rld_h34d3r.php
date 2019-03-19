<div id="navbar" class="navbar navbar-default  skin-1        ace-save-state">
  <div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
      <span class="sr-only">Toggle sidebar</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
      <a href="#" class="navbar-brand">
        <small>
          <i class="fa fa-list-alt"></i>
          Inventory
        </small>
      </a>
    </div>

    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav">
      <?php if ($m364_p051t10n === "4dm1n15tr4t0r") { ?>
        <li class="green dropdown-modal">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <i class="fa fa-bell fa-2x icon-animated-bell"></i>
            <span class="badge badge-success"><?php echo $num_approv; ?></span>
          </a>

          <ul class="dropdown-menu-right dropdown-navbar navbar-green dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									<?php echo $num_approv; ?> Need Approval(s)
								</li>

								<li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">

                    <?php
                    $m3g4w0rld_u553r5_c0unt = 0;
                    $xcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $result = $xcon->prepare("SELECT * FROM u553r5 WHERE u553r5_active = 0");
                    $result->execute();
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                               $m3g4w0rld_u553r5_c0unt++;
                               $m3g4w0rld_u553r5_4pprov_id = $row['u553r5_id'];
                               $m3g4w0rld_u553r5_4pprov_fname = $row['u553r5_fname'];
                               $m3g4w0rld_u553r5_4pprov_lname = $row['u553r5_lname'];
                               $m3g4w0rld_u553r5_4pprov_mname = $row['u553r5_mname'];
                               $m3g4w0rld_u553r5_4pprov_active = $row['u553r5_active'];
                               $m3g4w0rld_u553r5_4pprov_date = $row['u553r5_date'];
                    ?>

										<li>
											<a href="../components/m3g4w0rld_u553r5_466r0v41.php">
												<div class="clearfix">
													<span class="pull-left">
														<!-- <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i> -->
                            <i class="ace-icon fa fa-bell icon-animated-bell"></i> &nbsp;&nbsp;
														<?php echo $m3g4w0rld_u553r5_4pprov_fname . " "
                                     . $m3g4w0rld_u553r5_4pprov_mname . " "
                                     . $m3g4w0rld_u553r5_4pprov_lname; ?>
													</span>
													<!-- <span class="pull-right badge badge-info">+12</span> -->
												</div>
											</a>
										</li>

                    <?php } ?>

									</ul>
								</div>
              </li>

								<li class="dropdown-footer">
									<a href="../components/m3g4w0rld_u553r5_466r0v41.php">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
        </li>

        <?php } ?>

        <li class="light-blue dropdown-modal right-side">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">
            <i class="fa fa-user fa-2x"></i>&nbsp;
            <span class="user-info"><small>Welcome,</small><?php echo $m364_fname; ?></span>
            <i class="ace-icon fa fa-caret-down"></i>
          </a>

          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

            <li>
              <a href="../components/m3g4w0rld_6r0f113.php">
                <i class="ace-icon fa fa-user"></i>
                Profile
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="../inc/m3g4w0rld_1060ut.php">
                <i class="ace-icon fa fa-power-off"></i>
                Logout
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </div>



  </div>
  <!-- /.navbar-container -->
</div>
