<?php
include("server.php");
echo "these are all the inputs coming in: " . file_get_contents("php://input");
/*
names of the variables passed in the form are:
1.  GPA:
        name is "gpa" type is "number" and value is "a decimal number between 1 and 4, 2 decimals of precision"

2.   What major:
        name is "major"
                    value is "ALLM" for All Majors
                    value is "ACAD" for Academic Development
                    value is "ACTG" for Accounting
                    value is "ABF" for Acct,Business Law and Finance
                    value is "AFAM" for African &amp; African Amer Studies
                    value is "ANTH" for Anthropology
                    value is "ARAB" for Arabic
                    value is "ARAM" for Aramaic
                    value is "ART" for Art
                    value is "ARTH" for Art History
                    value is "BLBC" for Bilingual/Bicultural Education
                    value is "BIO" for Biology
                    value is "BIOS" for Biology Education
                    value is "BLAW" for Business Law
                    value is "CHEM" for Chemistry
                    value is "CAST" for Child Advocacy Studies
                    value is "CHIN" for Chinese
                    value is "COBM" for Coll of Business &amp; Management
                    value is "CMTC" for Comm, Media &amp; Theatre-Comm
                    value is "CMTE" for Comm, Media &amp; Theatre-Educ
                    value is "CMTM" for Comm, Media &amp; Theatre-Media
                    value is "CMTT" for Comm, Media &amp; Theatre-Theatre
                    value is "CS" for Computer Science
                    value is "COUN" for Counselor Education
                    value is "DANC" for Dance
                    value is "ECED" for Early Childhood Education
                    value is "ESCI" for Earth Science
                    value is "ECON" for Economics
                    value is "EDFN" for Educational Foundations
                    value is "ELED" for Elementary Education
                    value is "ENGL" for English
                    value is "ELP" for English Language Program
                    value is "ESL" for English Second Language
                    value is "ENVI" for Environmental Science
                    value is "EXSC" for Exercise Science
                    value is "FINA" for Finance
                    value is "FREN" for French
                    value is "GES" for Geography and Envir Studies
                    value is "GIFT" for Gifted Education
                    value is "GS" for Global Studies
                    value is "HLED" for Health Education
                    value is "HIST" for History
                    value is "ZHON" for Honors Program
                    value is "ZAHS" for Honors: Art History
                    value is "ZACT" for Honors:Accounting
                    value is "ZBIO" for Honors:Biology
                    value is "ZENG" for Honors:English
                    value is "ZHIS" for Honors:History
                    value is "ZMGT" for Honors:Management
                    value is "ZMKG" for Honors:Marketing
                    value is "ZMAT" for Honors:Mathematics
                    value is "ZMDI" for Honors:Media
                    value is "ZPHI" for Honors:Philosophy
                    value is "ZSWK" for Honors:Social Work
                    value is "ZSPE" for Honors:Special Education
                    value is "HRD" for Human Resource Development
                    value is "ICSE" for Inner City Studies
                    value is "ITAL" for Italian
                    value is "JPN" for Japanese
                    value is "JUST" for Justice Studies
                    value is "KOR" for Korean
                    value is "LLAS" for Latino and Latin Amer Studies
                    value is "LEAD" for Leadership
                    value is "LING" for Linguistics
                    value is "LTCY" for Literacy Education
                    value is "MNGT" for Management
                    value is "MKTG" for Marketing
                    value is "MATH" for Mathematics
                    value is "MLED" for Middle Schl Educ &amp; Tchng
                    value is "MILS" for Military Science
                    value is "MUS" for Music
                    value is "NEIU" for NEIU-Interdisciplinary
                    value is "NDP" for Nontraditional Degree Programs
                    value is "PHIL" for Philosophy
                    value is "PEMA" for Phys Education Activity
                    value is "PEMT" for Phys Education Theory
                    value is "PHYS" for Physics
                    value is "POL" for Polish
                    value is "PSCI" for Political Science
                    value is "PSYC" for Psychology
                    value is "READ" for Reading
                    value is "SCED" for Secondary Education
                    value is "SWK" for Social Work
                    value is "SOC" for Sociology
                    value is "SPAN" for Spanish
                    value is "SPED" for Special Education
                    value is "TESL" for Tchng Engl Second Lang
                    value is "WGS" for Women's and Gender Studies
                    value is "WLC" for World Languages &amp; Cultures

3.  type of student:
        name="hmyears"
                    value is "na" (2 letters) for Any
                    value is "u1" (2 letters) for freshman
                    value is "u2" (2 letters) for sophmore
                    value is "u3" (2 letters) for junior
                    value is "u4" (2 letters) for senior
                    value is "g1" (2 letters) for Graduate Student (Ms)
                    value is "g2" (2 letters) for Graduate Student (PhD)

4.  Gender:
        name is "gender" type is "radio" and value is "m" (1 letter) for Male
        name is "gender" type is "radio" and value is "f" (1 letter) for Female
        name is "gender" type is "radio" and value is "o" (1 letter) for I prefer not say

5.  Enthnic group (optional)
        name is "ethnic" type is "checkbox" and value is "afri" (4 letters) for African American
        name is "ethnic" type is "checkbox" and value is "hisp" (4 letters) for Hispanic
        name is "ethnic" type is "checkbox" and value is "asia" (4 letters) for Asian/Pacific Islander
        name is "ethnic" type is "checkbox" and value is "nati" (4 letters) for Native American
        name is "ethnic" type is "checkbox" and value is "alas" (4 letters) for Alaska Native
        name is "ethnic" type is "checkbox" and value is "cauc" (4 letters) for Caucasian
        name is "ethnic" type is "checkbox" and value is "othe" (4 letters) for Other Ethnic/Racial Heritage
</div>

*/

// make sure this thing works if the form is left blank.
$gpa = (isset($_POST['gpa'])) ? htmlentities($_POST['gpa']) : 0;
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

                    <div class="divider-sec" id="second" hidden=""></div>

                    <div class="container-fluid px-3 sch-form">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center pb-3">Search Title</h2>
                                    <pre>
                                        <?php
                                        echo "This is the post content:\n";
                                        var_dump($_POST);
                                        ?>
                                    </pre>
                                <div class="container-fluid">
                                    <div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg align-self-start">
                                                <label for="gpa_id" class="col">Grade Point Average: <br><span>(GPA 4point scale)</span><br>
                                                <?php
                                                    echo $gpa;
                                                ?>
                                                <span>valuefrom post = 3.5</span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg align-self-start">
                                                <label for="subj_id" class="col">Major: <br>
                                                    <span>
                                                        <?php
                                                          echo $major;
                                                        ?>
                                                        major selected for search</span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg align-self-start">
                                                <label for="hmyears_id" class="col ">Year in school: <br>
                                                <?php
                                                          echo $studentype;
                                                        ?>
                                                <span>year in school selected from POST</span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg align-self-start">
                                                <label class="">Gender:</label>
                                                <?php
                                                          echo $gender;
                                                        ?>
                                                <span>female selected from the POST</span>

                                            </div>
                                            <div class="col-12 col-md-6 col-lg align-self-start">
                                                <label class="">Ethnicity: </label>
                                                <?php
                                                          echo $ethnic;
                                                        ?>
                                                <span>Ethnicity selected from the POST </span>






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
                <div class="container-fluid" id="results">
                    <div class="row justify-content-around">
                        <h2 class="col-12 text-center pb-3">Results</h2>
                        <?php
                            $query = "SELECT schol_name, schol_from, schol_deadline, schol_howto, schol_amt, schol_active FROM scholarship";
                            //mysqli_query($db, $query);

                            $result = mysqli_query($db, $query);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                //echo mysqli_num_rows($result);
                                while($row = mysqli_fetch_assoc($result)) {
                                   //echo "<br>school name: " . $row["schol_name"]. " - School from: " . $row["schol_from"]. "<br>";
                                   echo '<div class="col-6 sch-object" title="Click for more information">
                                           <div class="col-auto">'.$row[schol_name].'</div>
                                           <div class="col-auto">'.$row[schol_from].'</div>
                                           <div class="col-auto">'.$row[schol_deadline].'</div>
                                           <div class="col-auto">'.$row[schol_howto].'</div>
                                           <div class="col-auto">$'.$row[schol_amt].'</div>                                    
                                           <div class="col-auto"><a href="show-details.htm?sch-number">more</a></div>
                                        </div>';
                                }
                           } else {
                               echo '<div class="col-6 sch-object" title="Click for more information">0 results</div>';
                           }
                        ?>
                        <div class="col-6 sch-object" title="Click for more information">
                                <div class="col-auto">New York Senate Graduate Fellowships</div>
                                <div class="col-auto">April 29, 2019</div>
                                <div class="col-auto">$33,000</div>
                                <div class="col-auto"><a href="show-details.htm?sch-number">more</a></div>
                             </div>

                        <div class=" col-6 sch-object">
                            <div class="col-auto">Name-(text)</div>
                            <div class="col">DueDate-(date)</div>
                            <div class="col">Amount-(finance number)</div>
                            <div class="col"><a href="show-details.htm?sch-number">more-(link)</a></div>
                        </div>
                        <!--
                        <div class=" col-6 sch-object">
                            <div class="col-auto">Name-(text)</div>
                            <div class="col">DueDate-(date)</div>
                            <div class="col">Amount-(finance number)</div>
                            <div class="col"><a href="show-details.htm?sch-number">more-(link)</a></div>
                        </div> -->
                    </div>
                </div>


                <div class="divider-sec"></div>
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



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
	</html>
