<?php 
/*
    Template Name: Наша История
*/
?>
<?php 
    get_header();
?>  
<div class="aboutus" id="aboutus">
            <div class="container">
                <h1 class="title">Наша история</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                          <?php the_field('ourStory_title')?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('OurStory_description')?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="history__img">    
                            <!-- <img class="aboutus__img" src="./img/about_1.jpg" alt="мир детства"> -->
                            <?php 
                                $image = get_field('OurStory_img');
                                $size = 'full'; // (thumbnail, medium, large, full или ваш размер)

                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size );
                                }
                                ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        
                    <div class="history__img">    
                        <!-- <img class="aboutus__img" src="./img/about_2.jpg" alt="мир детства"> -->
                        <?php 
                            $image = get_field('OurStory2_img');
                            $size = 'full'; // (thumbnail, medium, large, full или ваш размер)

                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                            ?>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('ourstory2_title') ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('ourstory2_description') ?>  
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('ourstory3_title') ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('ourstory3_description') ?>  
                        
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="history__img">    
                        <!-- <img class="aboutus__img" src="./img/about_3.jpg" alt="мир детства"> -->
                        <?php 
                            $image = get_field('OurStory3_img');
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