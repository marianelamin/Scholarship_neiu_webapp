<?php
include_once("server.php");
//echo "these are all the inputs coming in: " . file_get_contents("php://input");
include_once("variables.inc.php");

// make sure this thing works if the form is left blank.
$gpa = (isset($_POST['gpa'])) ? intval($_POST['gpa']) : 0;
$major = (isset($_POST['major'])) ? htmlentities($_POST['major']) : 0;
$studentype = (isset($_POST['hmyears'])) ? htmlentities($_POST['hmyears']) : 0;
$gender = (isset($_POST['gender'])) ? htmlentities($_POST['gender']) : 0;
$ethnic = (isset($_POST['ethnic'])) ? htmlentities($_POST['ethnic']) : 0;


// TO-DO:
// depending on which variables are set then I will do a different search on the Database.
//
//
//
 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Scholarships - NEIU El Centro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body class="mx-sm-2 mb-sm-2 mx-md-4 mx-lg-5" data-offset="20" data-spy="scroll" data-target="#minavega">

	<!-- HEADER -->
	<header>
		<div class="container-fluid top-banner">
			<div class="row align-items-center"><span class="col-sm-3"><img class="img-fluid my-3" src="images/neiu_wordmark_color.png" alt="NEIU-logo" /> </span>
				<h1 class="col-sm-9 main-title h3">Scholarships - NEIU El-Centro</h1>
			</div>
		</div>
		<div class="container-fluid ">
			<div class="row align-items-center nsf-bg"><span class="col-6 col-sm img-banner"><img alt="STEM_2 students" class="img-fluid" src="images/STEM_2.jpg" /></span> <span class="col-6 col-sm img-banner"> <img alt="STEM_3 students" class="img-fluid" src="images/STEM_3.jpg" /></span> <span class="col-6 col-sm img-banner"> <img alt="STEM_5 students" class="img-fluid" src="images/STEM_5.jpg" /></span> <!-- <span class="col-6 col-sm img-banner"> <img class="img-fluid" src="images/STEM_4.jpg" alt="STEM_4 students"/></span> --> <span class="col-6 offset-sm-0 col-sm-2 img-banner"> <img alt="NSF Logo" class="img-fluid offset-2 col-8 offset-sm-0 col-sm-12" src="images/nsf-logo.png" /></span>

				<div class="small text-center pb-2">
					<span class="col-6 offset-sm-0 col-sm-2 img-banner">Little title</span></div>
				</div>
			</div>
		</header>

		<!-- NAVEGATION BAR -->

		<nav class="navbar navbar-expand-lg sticky-top  navbar-light bg-light" id="minavega"><a class="navbar-brand" href="#"> Scholarship Search Page </a><button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"></button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav nav-pills">
					<li class="nav-item"><a class="nav-link" href="#index">Home <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#second">second</a></li>
					<li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">More</a>
						<div aria-labelledby="navbarDropdown" class="dropdown-menu"><a class="dropdown-item" href="#contact">Contact</a> <a class="dropdown-item" href="#other">Other</a>
						</li>
					</ul>
				</div>
			</nav>



			<!-- START OF THE BODY CONTENT -->
            <main>
                    <div class="container-fluid">
                        <div class="row">
                            <h1 class="col-12">Scholarships - NEIU El Centro</h1>

                        </div>
                    </div>
                    <div class="divider-sec" id="index"></div>



                    <div class="container-fluid px-3" hidden="">
                        <div class="row">
                            <div class="col content-justified">
                                <p class="font-italic disclaimer-txt">This material is based upon work supported by the National Science Foundation under Grant No. 1759566. Any opinions, findings, and conclusions or recommendations expressed in this material are those of the author(s) and do not necessarily reflect the views of the National Science Foundation.</p>
                            </div>
                        </div>
                    </div>

                    

                    <div class="container-fluid px-3">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center pb-3">Search Criteria</h2>
                                <div class="container-fluid">
                                    <div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg align-self-start">
                                                <label for="gpa_id" class="col">Grade Point Average: <br><span>(GPA 4point scale)</span><br>
                                        <span style="color:orange;"> <?= $gpa ?></span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg align-self-start">
                                                <label for="subj_id" class="col">Major: <br>
                                                    <span style="color:orange;">
                                                        <?= ($major===0)?"none":$currMajors[$major] ?></span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg align-self-start">
                                                <label for="hmyears_id" class="col ">Year in school: <br>
                                                <span style="color:orange;"> <?= ($studentype===0)?"none":$currStudent[$studentype] ?></span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg align-self-start">
                                                <label class="">Gender:</label>
                                                <span style="color:orange;"> <?=($gender===0)?"none":$currGender[$gender] ?></span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg align-self-start">
                                                <label class="">Ethnicity: </label>
                                                <span style="color:orange;"><?= ($ethnic===0)?"none":$currEthnic[$ethnic] ?> </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <a href="search.htm" target="_blank"><button class="col-5 search-bttn">NEW SEARCH</button></a>

                                                        <!-- MAKE SURE I DO VALIDATION -->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="divider-sec"></div>
                <div class="container-fluid">
                    <div class="row justify-content-end">
                    <h2 class="col-12 text-center pb-3">Results</h2>
                        <span class="col-2">Order by:</span>
                        <span class="col-2" onclick="sortResults(2)">Name <i class="fas fa-sort"></i>  |  </span>
                        <span class="col-2" onclick="sortResults(5)">Deadline <i class="fas fa-sort"></i>  |  </span>
                        <span class="col-2" onclick="sortResults(5)">Amount <i class="fas fa-sort"></i></span>
                    </div>
                    <div class="row justify-content-around" id="results">
                        <?php
                            $query = "SELECT schol_name, schol_from, schol_deadline, schol_howto, schol_amt, schol_active FROM scholarship";
                           

                            $result = mysqli_query($db, $query);
                            if (mysqli_num_rows($result) > 0) {
                                
                                while($row = mysqli_fetch_assoc($result)) {

                                   echo '<div class="container">
                                           <div class="row sch-object" title="RESULTS">
                                             <div class="col-8">
                                               <div class="sch-object-title">'.$row['schol_name'].'</div>  
                                               <div>'.$row['schol_from'].'</div>
                                             </div>
                                             <div class="col-3">
                                               <div class="sch-object-due">'.$row['schol_deadline'].'</div>  
                                               <div class="sch-object-amt">$'.$row['schol_amt'].'</div>
                                             </div>
                                             <div class="col-12 sch-object-more">'.$row['schol_howto'].'</div>
                                          </div>
                                        </div>
                                        ';
                                }
                           } else {
                               echo '<div class="container">
                                           <div class="row sch-object" title="RESULTS">No Results</div></div>';
                           }
                        ?>
                    </div>
                </div>


                <div class="divider-sec" hidden></div>
                <div class="container-fluid px-3" hidden="">
                    <div class="row align-items-strech">
                        <div class="col content-center">

                            <h2>General Information</h2>

                            <p>One paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
                            </p>

                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.
                            </p>

                            <p>If you have questions, please contact <a href="mailto:   xx@neiu.edu">xxxxxxx@neiu.edu</a>.</p>
                        </div>
                    </div>
                </div>

                <div class="divider-sec"></div>



            </main>

		<footer class="p-4">
			<div class="container-fluid">
				<div class="row align-items-center">
					<h3>Hosted by <img alt="Northeastern Illinois University" class="img-fluid img-neiu-footer" src="images/neiu_wordmark_color.png" /> with the support of:</h3>
				</div>

				<div class="row align-items-center">
					<div class="col-5 col-sm-3 col-md-2 col-lg-2">
						<div class="small text-center pb-2">small text</div>
					</div>
					<span class="col col-sm col-md"></span>
					<div class="col-12 col-sm-5 col-md-4 col-lg-5 text-center py-2">
						<span class="text-center"> <a href="https://www.neiu.edu/academics/el-centro/" target="_blank">Northeastern Illinois University El Centro</a></span>
						<span class="text-center"><address>3390 North Avondale<br />Chicago, IL 60618</address></span>
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

<script>
function sortResults(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("results");
  console.log(table);
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByClassName("container");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 0; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName('div')[n];
      y = rows[i + 1].getElementsByTagName('div')[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</script>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
	</html>
