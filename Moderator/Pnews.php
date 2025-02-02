<?php

include_once("../mheader.php");

?>
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

<div class=" row pt-5">
    <?php
    include "../Includes/connect.php";
    $query = mysqli_query($conn, "SELECT news.id, news.title, news.message, news.posted, news.user_id,
                                    users_table.id as nid, users_table.name
                                     from users_table
                                     inner join news on  news.user_id = users_table.id
                                     ");

    while ($row = mysqli_fetch_array($query)) {
    ?>

        <div class="col-md-12 col-lg-12 bg-white ">
            <div>

                <p class="posted-by">
                    <span class="topic"><?php echo $row['title']; ?></span><br>
                    Posted By: <span><?php echo $row['name'] ?></span> on <span><?php echo $row['posted'] ?></span>
                </p>
            </div>
            <p>
                <?php echo $row['message'] ?>
            </p>
            <div class="news-btn">
                <div class="like-btn">
                    <i></i>
                    <a href="#">
                        <button class="btn btn-primary">like</button>
                    </a>
                </div>
                <div class="comment-btn">

                    <i></i>
                    <a href="#">
                        <button class="btn btn-primary">comment</button>
                    </a>

                </div>
            </div>
        </div>





    <?php } ?>
</div>
</div>


</main>

<!--end  page-content" -->



</div>

</div>




</div>

<!-- <div class="pop-container">
        <div class="pop-content">
            <div class="close-popup" id="close">
                <i class="fas fa-times"></i>
            </div>
            <div class="form-group">
              

            </div>
        </div>
    </div> -->

<!-- Modal -->
<div class="pop-conainer">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../Includes/news.php" method="post">
                    <div class="modal-body">
                        <div class="col-lg-12">
                            <input type="text" name="title" class="form-control" placeholder="title">
                        </div><br>
                        <div class="col-lg-12">
                            <textarea name="message" cols="20" rows="5" type="text" class="form-control" placeholder="message"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Post</button>
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