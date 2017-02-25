<?php
$admin = new Admin();
?>

<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Admin List</b></h4>
        </div>
        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Admin Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Birthdate</th>
                                            <th>Date & Time</th>
											<td  headers="LINK$01">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$adm=new Admin();
										foreach($adm->get_adminname() as $val){
									?>
                                        <tr class="gradeA">
                                            <td><?php echo $val['adm_fname'] . ", " . $val['adm_mname'] . ", ". $val['adm_lname']; ?></td>
                                            <td class="center"><?php echo $val['adm_email']; ?></td>
                                            <td class="center"><?php echo $val['adm_gender']; ?></td>
                                            <td class="center"><?php echo $val['adm_dob']; ?></td>
                                            <td class="center"><?php echo $val['adm_time_added']."-".$val['adm_date_added']; ?></td>
											<td><a href="index.php?mod=edtadm&id=<?php echo $val['adm_id'];?>">Edit</a> | <a href="process/process.admin.php?action=deladm&id=<?php echo $val['adm_id'];?>">Delete</a></td>
										</tr>
									<?php
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
        <div class="panel-footer text-center">
             Copyright 2016 Online Voting System - All Rights Reserved.
        </div>
    </div>
</div>