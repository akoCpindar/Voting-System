<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Voted</b></h4>
        </div>
        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id Number</th>
                                            <th>Student Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Birthdate</th>
                                            <th>Status</th>
                                            <th>Course & Year</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Date & Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$stu=new Student();
										foreach($stu->get_studentname_voted() as $val){
									?>
                                        <tr class="gradeA">
                                            <td><?php echo $val['stu_idnumber']; ?></td>
                                            <td><?php echo $val['stu_fname'] . ", " . $val['stu_mname'] . ", ". $val['stu_lname']; ?></td>
                                            <td class="center"><?php echo $val['stu_email']; ?></td>
                                            <td class="center"><?php echo $val['stu_gender']; ?></td>
                                            <td class="center"><?php echo $val['stu_dob']; ?></td>
                                            <td class="center"><?php echo $val['stu_status']; ?></td>
                                            <td><?php echo $course->get_course_name($val['cor_id']); ?></td>
                                            <td class="center"><?php echo $val['stu_address']; ?></td>
                                            <td class="center"><?php echo $val['stu_mobile']; ?></td>
                                            <td class="center"><?php echo $val['stu_time_added']."-".$val['stu_date_added']; ?></td>
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