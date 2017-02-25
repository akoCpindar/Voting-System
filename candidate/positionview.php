<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Position List</b></h4>
        </div>
        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Positions</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$position=new Position();
										foreach($position->get_positioname() as $val){
									?>
                                        <tr class="gradeA">
                                            <td><?php echo $val['pos_name']; ?></td>
											<td><a href="index.php?mod=edtpos&id=<?php echo $val['pos_id']; ?>"> Edit </a> | <a href="process/process.position.php?action=positiondel&id=<?php echo $val['pos_id']; ?>" class="delbutton" title="Click To Delete">Delete</a></td>
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