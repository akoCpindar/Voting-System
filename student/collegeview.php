<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>College List</b></h4>
        </div>
        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>College Name</th>
                                            <th>College Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$colle=new College();
										foreach($colle->get_collegename() as $val){
									?>
                                        <tr class="gradeA">
                                            <td><?php echo $val['col_fname']; ?></td>
                                            <td><?php echo $val['col_description']; ?></td>
											<td><a href="index.php?mod=editclg&id=<?php echo $val['col_id'];?>">Edit</a> | <a href="process/process.college.php?action=collegedel&id=<?php echo $val['col_id'];?>">Delete</a></td>
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