<?php

include_once("../header.php");

?>


<!--PAGE CONTENT -->


<div class=" moon-logo container  ">

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="../images/university-avatar-education-icon-vector-1979314(1).jpg" alt="">

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pt-5" style="margin-left: -5rem;">
            <p class=" logo-text text-uppercase text-primary ">Moon Academy</p>
        </div>
    </div>

</div>
-->

<div class="row">
    <div class="col-lg-3 col-md-6 col-lg-12">

        <button class="course-dash btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="border: none; float:right;"> <i class="fa fa-bookmark"></i> &nbsp; Course dashboard</button>
    </div>
</div>

<div class="row pt-5 ">
    <?php
    include "../Includes/connect.php";

    $cid = $_GET['id'];

    $result = mysqli_query($conn, "SELECT lesson.id, lesson.course_id,lesson.topic, lesson.title, lesson.description, lesson.notes,  lesson.classroom, lesson.url,
                             courses.id, courses.course_name
                              from lesson
                               inner join courses on courses.id =lesson.course_id  where lesson.course_id =  $cid ");



    while ($row =  mysqli_fetch_array($result)) {


    ?>

        <div class="course_name bg-light" style="width:100%; border-left:2px solid #4f7bda; border-bottom:4px solid #4f7bda; padding:1rem; ">
            <h4><?php echo $row['course_name']; ?> </h4>
        </div>

        <div class="col-lg-3 col-md-6 col-lg-12 pt-5 bg-light" style="margin-top:2rem; " id="<?php echo $row['id']; ?>">


            <div class="title">
                <h4><?php echo $row['topic']; ?></h4u>
                    <h5 class="pt-5"><?php echo $row['title']; ?></h5>
                    <p class="pt-1 chapter_description" id="description">
                        <?php echo $row['description']; ?>
                    </p>
                    <div class="more pt-2">
                        <ul>

                            <li>
                                <i class="fa fa-book"></i> &nbsp; Notes <br>
                                <span class="pt-3"> <a href="../Includes/download.php?file=<?php echo $row['notes']; ?>"> <i class="fa fa-download text-primary">&nbsp; <?php echo $row['notes']; ?></i> </a></span>
                            </li>

                            <li class="pt-3"><i class="fa fa-file"></i> &nbsp; assignment</li>
                            <li class="pt-3">
                                <i class="fa fa-video"></i> &nbsp; Classroom <br>
                                <div class="pt-1">
                                    <p><?php echo $row['classroom']; ?></p>
                                    <span> <a href="<?php echo $row['url']; ?>">join meeting</a></span>

                                </div>
                            </li>

                        </ul>
                    </div>
            </div>


        </div>
    <?php } ?>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--end  page-content" -->



</div>

</div>

</div>


<!-- Modal -->
<div class="pop-conainer">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bars" style="font-size: 1.2rem;"></i> &nbsp; Course Activities</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="radio" name="" id="" value="">&nbsp;&nbsp;<label for=""><a href=""><i class="fa fa-th"></i> </a>Attendance </label><br>
                        <input type="radio" name="" id="" value="">&nbsp;<label for=""><a href=""><img src="https://canvas.rutgers.edu/wp-content/uploads/2019/01/BigBlueButton.png" alt="image" height="30" width="30"></a>BigBlueButton</label><br>
                        <input type="radio" name="" id="" value="">&nbsp;&nbsp;<label for=""><a href=""> <i class="fa fa-file"></i></a> Assignment</label><br>
                        <input type="radio" name="" id="" value="">&nbsp;&nbsp;<label for=""><a href=""><i class="fa fa-comment"></i> </a>Forum</label><br>
                        <input type="radio" name="" id="" value="">&nbsp;&nbsp;<label for=""><a href=""><i class="fa fa-book"></i></a> Quizzes</label><br>
                        <input type="radio" name="" id="" value="">&nbsp;&nbsp;<label for=""><a href=""><i class="fa fa-comment"> </i> </a>Chats</label><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- dashboard navbar jquery -->
<script src="../js/main.js"></script>
</body>

</html>