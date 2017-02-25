<?php
$position = new Position();
$party = new Party();
$college = new College();
$course = new Course();
$year = new Year();
?>

<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Candidate List</b></h4>
        </div>
        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Position</th>
											<th>Party</th>
                                            <th>Id Number</th>
                                            <th>Candidate Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Birthdate</th>
                                            <th>College</th>
                                            <th>Course & Year</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Date & Time</th>
                                            <td  headers="LINK$01">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$candi=new Candidate();
										foreach($candi->get_candidatename() as $val){
									?>
                                        <tr class="gradeA">
											<td><?php echo $position->get_position_name($val['pos_id']); ?></td>
											<td><?php echo $party->get_party_name($val['par_id']); ?></td>
                                            <td><?php echo $val['can_idnumber']; ?></td>
                                            <td><?php echo $val['can_fname'] . ", " . $val['can_mname'] . ", ". $val['can_lname']; ?></td>
                                            <td class="center"><?php echo $val['can_email']; ?></td>
                                            <td class="center"><?php echo $val['can_gender']; ?></td>
                                            <td class="center"><?php echo $val['can_dob']; ?></td>
                                            <td><?php echo $college->get_college_name($val['col_id']); ?></td>
                                            <td><?php echo $course->get_course_name($val['cor_id']); ?></td>
                                            <td class="center"><?php echo $val['can_address']; ?></td>
                                            <td class="center"><?php echo $val['can_mobile']; ?></td>
                                            <td class="center"><?php echo $val['can_time_added']."-".$val['can_date_added']; ?></td>
											<td><a href="index.php?mod=edtcan&id=<?php echo $val['can_id'];?>">Edit</a> | <a href="process/process.candidate.php?action=delcan&id=<?php echo $val['can_id'];?>">Delete</a></td>
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