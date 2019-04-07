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


<?php  include("includes/header.inc.php"); ?>

<!-- ############################  START OF THE BODY CONTENT ############################ -->
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
<!-- ############################  END OF THE BODY CONTENT ############################ -->
<?php include("includes/footer.inc.php"); ?>


