<?php
    require("server.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<title>Scholarships - NEIU El Centro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body class="mx-sm-2 mb-sm-2 mx-md-4 mx-lg-5" data-offset="20" data-spy="scroll" data-target="#minavega">

	<!-- HEADER -->
	<header>
		<div class="container-fluid top-banner">
			<div class="row align-items-center"><span class="col-sm-3"><img class="img-fluid my-3" src="images/neiu_wordmark_color.png" alt="NEIU-logo"> </span>
				<h1 class="col-sm-9 main-title h3">Scholarships - NEIU El Centro</h1>
			</div>
		</div>
		<!-- <div class="container-fluid ">
			<div class="row align-items-center nsf-bg"><span class="col-6 col-sm img-banner"><img alt="STEM_2 students" class="img-fluid" src="images/STEM_2.jpg"></span> <span class="col-6 col-sm img-banner"> <img alt="STEM_3 students" class="img-fluid" src="images/STEM_3.jpg"></span> <span class="col-6 col-sm img-banner"> <img alt="STEM_5 students" class="img-fluid" src="images/STEM_5.jpg"></span> <!-- <span class="col-6 col-sm img-banner"> <img class="img-fluid" src="images/STEM_4.jpg" alt="STEM_4 students"/></span><span class="col-6 offset-sm-0 col-sm-2 img-banner"> <img alt="NSF Logo" class="img-fluid offset-2 col-8 offset-sm-0 col-sm-12" src="images/nsf-logo.png"></span>

				<div class="small text-center pb-2">
					<span class="col-6 offset-sm-0 col-sm-2 img-banner">texto peque;o</span></div>
				</div>
			</div>
		</header> -->

		<!-- NAVEGATION BAR -->

		<nav class="navbar navbar-expand-lg sticky-top  navbar-light bg-light" id="minavega"><a class="navbar-brand" href="#"> Scholarship Search Page </a><button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"></button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav nav-pills">
					<li class="nav-item"><a class="nav-link" href="#index">Home <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#second">second</a></li>
					<li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">More</a>
						<div aria-labelledby="navbarDropdown" class="dropdown-menu"><a class="dropdown-item" href="#contact">Contact</a> <a class="dropdown-item" href="#other">Other</a>
						</div></li>
					</ul>
				</div>
			</nav>



			<!-- START OF THE BODY CONTENT -->
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
		<footer class="p-4">
			<div class="container-fluid">
				<div class="row align-items-center">
					<h3>Hosted by <img alt="Northeastern Illinois University" class="img-fluid img-neiu-footer" src="images/neiu_wordmark_color.png"> with the support of:</h3>
				</div>

				<div class="row align-items-center">
					<div class="col-5 col-sm-3 col-md-2 col-lg-2">
						<div class="small text-center pb-2">small text</div>
					</div>
					<span class="col col-sm col-md"></span>
					<div class="col-12 col-sm-5 col-md-4 col-lg-5 text-center py-2">
						<span class="text-center"> <a href="https://www.neiu.edu/academics/el-centro/" target="_blank">Northeastern Illinois University El Centro</a></span>
						<span class="text-center"><address>3390 North Avondale<br>Chicago, IL 60618</address></span>
						<span class="text-center"><a href="mailto:STEMed@neiu.edu" style="opacity:0.6;">STEMed@neiu.edu</a></span>
					</div>
				</div>
			</div>
		</footer>

		<div class="container-fluid px-3">
			<div class="row align-items-strech copyrights">
				<div class="col-6 text-center"><span>Designed and developed by Marianela Crissman</span></div>

				<div class="col-6 text-center"><span>Copyrights 2018</span></div>
			</div>
		</div>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/funct.js"> </script>

</body></html>
