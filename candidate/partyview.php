<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Party List</b></h4>
        </div>
        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Party Name</th>
                                            <th>Party Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$party=new Party();
										foreach($party->get_partyname() as $val){
									?>
                                        <tr class="gradeA">
                                            <td><?php echo $val['par_name']; ?></td>
                                            <td><?php echo $val['par_description']; ?></td>
											<td><a href="index.php?mod=editpar&id=<?php echo $val['par_id']; ?>"> Edit </a> | <a href="process/process.party.php?action=partydel&id=<?php echo $val['par_id']; ?> class="delbutton" title="Click To Delete">Delete</a></td>
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