<?php
    require("server.php");
?>
<?php  include("includes/header.inc.php"); ?>

<!-- ############################  START OF THE BODY CONTENT ############################ -->
<main>
        <div class="box" id="source-box">
            <div class="box-header">
                <h3 class="box-title">...editing Scholarship's table</h3>
                <div class="box-tools">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                        create /read /update /delete
                    </button>

                                <button class="button"><i class="far fa-edit"></i></button>
                                    <button class="button"><i class="far fa-trash-alt"></i></button>

                    <!--                 <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                        </div> -->
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Deadline</th>
            <th>GPA</th>
            <th>Major</th>
            <th>Amount</th>
            <th>How to apply</th>
        </tr>
        <?php
            $query = "SELECT schol_name, schol_from, schol_deadline, schol_howto, schol_amt, schol_active, schol_id FROM scholarship";
            //mysqli_query($db, $query);

            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                //echo mysqli_num_rows($result);
                while($row = mysqli_fetch_assoc($result)) {
                echo '
                <tr>
                    <td><span id="taskNo_span">'.$row[schol_id].'</span></td>
                    <td><span id="taskName_span">'.$row[schol_name].'</span></td>
                    <td><span class="badge bg-red" id="progess_span">'.$row[schol_deadline].'</span></td>
                    <td><span id="taskNo_span">3.0</span></td>
                    <td><span class="badge bg-red" id="">Computer Science</span></td>
                    <td><span class="badge bg-red" id="">'.$row[schol_amt].'</span></td>
                    <td><span class="badge bg-red"><a href="">'.$row[schol_howto].'</a></span></td>
                </tr>
                ';
                // echo '<div class="col-6 sch-object" title="Click for more information">
                //         <div class="col-auto">'.$row[schol_name].'</div>
                //         <div class="col-auto">'.$row[schol_from].'</div>
                //         <div class="col-auto">'.$row[schol_deadline].'</div>
                //         <div class="col-auto">'.$row[schol_howto].'</div>
                //         <div class="col-auto">$'.$row[schol_amt].'</div>
                //         <div class="col-auto"><a href="show-details.htm?sch-number">more</a></div>
                //      </div>';
                }
        } else {
            echo '<div class="col-6 sch-object" title="Click for more information">0 results</div>';
        }
        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <div class="example-modal">
            <div class="modal" id="myModal" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Info Modal</h4>
                        </div>
                        <div class="modal-body">
                            <!-- start form box -->
                            <div class="box ">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Horizontal Form</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal" id="form-box">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="
        taskNo" class="col-sm-2 control-label">TaskNo</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="taskNo" placeholder="Task Number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="
        taskName" class="col-sm-2 control-label">TaskName</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="taskName" placeholder="Task Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="progess" class="col-sm-2 control-label">progess</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="progess" placeholder="progess">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" class="btn btn-default">Cancel</button>
                                        <button type="button" onclick="addrow()" class="btn btn-info pull-right">Insert Task</button>
                                        <button type="button" onclick="updateRow()" class="btn btn-success pull-right">Update Task</button>
                                        <button type="button" onclick="deleterow()" class="btn btn-danger pull-right">delete Task</button>
                                        <button type="button" onclick="cleartaskform()" class="btn btn-warning pull-right">Clear Task Form</button>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>
                            </div>
                            <!-- end form box -->
                            <div class="box" id="destination-box">
                                <div class="box-header">
                                    <h3 class="box-title">Responsive Hover Table</h3>
                                </div>
                                <div class="box-body no-padding"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                            <button type="button" onclick="cloneTableDestToSource()" class="btn btn-success">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>




</main>
<!-- ############################  END OF THE BODY CONTENT ############################ -->
<?php include("includes/footer.inc.php"); ?>
