<?php 
/*
    Template Name: Наша команда
*/
?>
<?php 
    get_header();
?>


<div class="specialists" id="specialists">
            <div class="container">
                <div class="title"><?php the_field("our_team");?></div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="specialists__img">
                         <!-- <img class="specialists__img" src="<?php// echo bloginfo("template_url"); ?>/assets/img/team.jpg" alt="наша команда"> -->
                        <?php 
                            $image = get_field('team_img');
                            $size = 'full'; // (thumbnail, medium, large, full или ваш размер)

                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                            ?>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>




<?php 
    get_footer();
?>