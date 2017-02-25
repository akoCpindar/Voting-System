<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Course List</b></h4>
        </div>
        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Course</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$cors=new Course();
										foreach($cors->get_coursename() as $val){
									?>
                                        <tr class="gradeA">
                                            <td><?php echo $val['cor_name']; ?></td>
											<td><a href="index.php?mod=editcor&id=<?php echo $val['cor_id'];?>">Edit</a> | <a href="process/process.course.php?action=coursedel&id=<?php echo $val['cor_id'];?>">Delete</a></td>
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