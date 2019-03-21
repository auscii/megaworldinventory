<?php
include("../../inc/m3g4w0rld_c0mm0n.php");
include("m3g4w0rld_1nv3nt0ry_v4l.php");
//$row='';
if(isset($sdate) && $sdate!= NULL){
	$date=date_create($sdate);
	$date = date_format($date,'Y-m-d');
	echo $sdate;
	//echo "SELECT * FROM u53r_1065 WHERE date(u53r_date) = $date";
	$sql="SELECT * FROM u53r_1065 WHERE date(u53r_date) = '$date'";
	$result = $xcon->prepare($sql);
	$row = $xcon->query($sql)->fetchColumn(); 
}else if(isset($stime) && $stime!= NULL){
	$time = date_create($stime);
	$hr = date_format($time,'H');
	$min = date_format($time,'i');
	echo $hr.":".$min;
	$sql="SELECT * FROM u53r_1065 WHERE hour(u53r_date) = '$hr' AND minute(u53r_date) = '$min'";
	$result = $xcon->prepare($sql);
	$row = $xcon->query($sql)->fetchColumn(); 
}else{
	$no=true;
}
if(isset($row)&& $row==''){
	echo "<div>No Result</div>";
}
if(isset($no) || $row!=''){
?>
<table id="dynamic-table" class="table table-striped table-bordered table-hover text-top-5x">
												<thead>
													<tr>
														<th class="text-center">ID</th>
														<th class="text-center">User</th>
														<th class="text-center">Action</th>
														<th class="text-center">Date Established</th>
														<th class="text-center">Time Established</th>
													</tr>
												</thead>
												<tbody>
													<?php
												  $m3g4w0rld_4ct1v1ty_c0unt = 0;
                                                $xcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                
											    $result->execute();
											        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
												          $m3g4w0rld_4ct1v1ty_c0unt++;
											            $m3g4w0rld_u53r_id = $row['u53r_id'];
											            $m3g4w0rld_u53r_user = $row['u53r_user'];
											            $m3g4w0rld_u53r_action = $row['u53r_action'];
											            $m3g4w0rld_u53r_date = $row['u53r_date'];
																	$m3g4w0rld_u53r_new_date = date('F d, Y',strtotime($m3g4w0rld_u53r_date));
																	$m3g4w0rld_u53r_new_time = date('g:i A',strtotime($m3g4w0rld_u53r_date));

											    ?>
													<tr>
														<td class="text-center"><?php echo $m3g4w0rld_u53r_id; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_u53r_user; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_u53r_action; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_u53r_new_date; ?></td>
														<td class="text-center"><?php echo $m3g4w0rld_u53r_new_time; ?></td>
													</tr>
												</tbody>
											<?php } ?>
											</table>
										<?php }//end Else?>