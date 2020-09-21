<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Humescores
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="front-info-container">
      <div class="front-info-container-img"></div>
      <div class="front-info-container-text"><?php the_field('home-text1')?></div>
      
      </div>

      <section class="offer-section">
<div class="offer-section-title-container">
    <div class="icon-left"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-left.svg" alt="" /></div>
    <h1>Stary Browar Rzeszowski</h1>
    <div class="icon-right"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-right.svg" alt="" /></div>
</div>

<?php echo do_shortcode('[slide-anything id="1984"]'); ?>
      </section>
<section style="position:relative;">
     <div class="facebook">
       <div class="hand-icon">
          <img src="<?php bloginfo('template_directory')?>/assets/img/facebook.svg" alt="" />
       </div>
       <div class="facebook-text"><?php the_field("home-text2")?></div>
       <div class="hand-button"><img src="<?php bloginfo('template_directory')?>/assets/img/hand.svg" alt="" /></div>
      </div>

</section>
 
  <section class="offer-2">
      
 <div class="dish-offer-outer-container"> 
     <div class="dish-offer">
<div class="img-absolute">
    <div class="img-text pizza">
        <div class="img-text-box">

                            <h2 class="img-title">
                                Flagowe dania  
                            </h2>
                            <div class="img-sub">
                                Poznaj je wszystkie
                            </div>
                        
        </div>
        <div class="see-product">
            <a href=""></a>
        </div>
<img src="<?php bloginfo('template_directory')?>/assets/img/pizza.jpg" alt="" />

    </div>
</div>

     </div>
 </div>
 <div class="dish-offer-outer-container"> 
     <div class="dish-offer">
<div class="img-absolute">
    <div class="img-text bear">
        <div class="img-text-box">

                            <h2 class="img-title">
                                Flagowe dania  
                            </h2>
                            <div class="img-sub">
                                Poznaj je wszystkie
                            </div>
                        
        </div>
        <div class="see-product">
            <a href=""></a>
        </div>
<img src="<?php bloginfo('template_directory')?>/assets/img/pizza.jpg" alt="" />

    </div>
</div>

     </div>
 </div>
         
 




    
  </section>  

	<section class="dash-section">
        <div class="dash-inner-container inner-container">
  <div class="elem elem-small elem1">
            <div class="elem-img">
               <img src="<?php bloginfo('template_directory')?>/assets/img/1.svg" alt="" /> 
            </div>
            <div class="elem-text">
                <h1>Hello</h1>
            </div>
            <div class="elem-btn">
                <a href="">zobacz</a>
            </div>
        </div>

        <div class="elem elem-small elem2">
            <div class="elem-img">
               <img src="<?php bloginfo('template_directory')?>/assets/img/2.svg" alt="" /> 
            </div>
            <div class="elem-text">
                <h1>Hello</h1>
            </div>
            <div class="elem-btn">
                <a href="">zobacz</a>
            </div>
        </div>
<div class="elem elem-small elem3">
            <div class="elem-img">
               <img src="<?php bloginfo('template_directory')?>/assets/img/3.svg" alt="" /> 
            </div>
            <div class="elem-text">
                <h1>Hello</h1>
            </div>
            <div class="elem-btn">
                <a href="">zobacz</a>
            </div>
        </div>
        <div class="elem elem-small elem4">
              <div class="elem-text">
                <h1>Hello</h1>
            </div>
            <div class="elem-img">
               <img src="<?php bloginfo('template_directory')?>/assets/img/polecamy.svg" alt="" /> 
            
            </div>
          
         
        </div>
        <div class="elem elem-small elem5">
            <div class="elem-img">
               <img src="<?php bloginfo('template_directory')?>/assets/img/4.svg" alt="" /> 
            </div>
            <div class="elem-text">
                <h1>Hello</h1>
            </div>
            <div class="elem-btn">
                <a href="">zobacz</a>
            </div>
        </div>
         <div class="elem elem-small elem6">
            <div class="elem-img">
               <img src="<?php bloginfo('template_directory')?>/assets/img/5.svg" alt="" /> 
            </div>
            <div class="elem-text">
                <h1>Hello</h1>
            </div>
            <div class="elem-btn">
                <a href="">zobacz</a>
            </div>
        </div>
           <div class="elem elem-small elem7">
            <div class="elem-img">
               <img src="<?php bloginfo('template_directory')?>/assets/img/6.svg" alt="" /> 
            </div>
            <div class="elem-text">
                <h1>Hello</h1>
            </div>
            <div class="elem-btn">
                <a href="">zobacz</a>
            </div>
        </div>

        </div>
      
        
    </section>	
            
     <section class="our-superity-section">
         <div class="our-superity-section-outer">
 <div class="calendar-container">
     <div class="calendar">
         <div class="calendar-inner-container">
             <div class="btn-news">
    <a href="">Newsy</a>
    <div class="hand-container">
        <img src="<?php bloginfo('template_directory')?>/assets/img/hand1.svg"  alt="">
    </div>
</div>
<div class="cal-icon-container">
    <div class="mini-calendar-container">
<img src="<?php bloginfo('template_directory')?>/assets/img/mini-calendar.svg"  alt="">
 <?php dynamic_sidebar( 'calendar-data-event' ); ?>	
    </div>
 <?php dynamic_sidebar( 'calendar_news' ); ?>
</div>
	
<a href="" class="btn">zobacz</a>

         </div>


     </div>
 </div>
 <div class="bear-container">
     <img src="<?php bloginfo('template_directory')?>/assets/img/piwko.svg" alt="">
 </div>
         <div class="info-container">
             <div class="info-container-title">
                 <h1>Dlaczego warto nas odwiedzić?</h1>
                <img src="<?php bloginfo('template_directory')?>/assets/img/beczka.svg" alt="">
             </div>
             <div class="info-container-text">
                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam id architecto commodi perspiciatis similique! Voluptatum, rerum. Voluptates dolore officia, autem voluptatum illum laboriosam cupiditate, repudiandae quisquam quae sit illo soluta?
             </div>
         </div>

         </div>
        

     </section>       

		<section class="menu-divider-section">
            <div class="offer-section-title-container">
    <div class="icon-left"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-wt-left.svg" alt="" /></div>
    <h1>Menu</h1>
    <div class="icon-right"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-wt-right.svg" alt="" /></div>
</div>
            
        </section>

    <section class="dish-offer">
    
        <div class="dish-offer-container">
  
           <div class="image-container">
    <img src= "<?php bloginfo('template_directory')?>/assets/img/food.png" alt="" />
           </div>
           <div class="dish-offer-widget">
              <?php dynamic_sidebar( 'special_offer_menu' ); ?>
            <?php dynamic_sidebar( 'dish_offer' ); ?>

           </div>

        </div>

    </section>
<section class="see-menu">
    <div class="container">
        <div class="btn-news">
    <a href="<?php bloginfo('template_directory')?>/menu">zobać całe menu</a>
    <div class="hand-container">
        <img src="<?php bloginfo('template_directory')?>/assets/img/hand1.svg"  alt="">
    </div>
    </div>
</section>

<section class="wood-bg">
    <div class="inner-container">
        <div class="icon">
            <img src= "<?php bloginfo('template_directory')?>/assets/img/party.png" alt="">
        </div>
        <div class="event-title">

    <div class="icon-left"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-wt-left.svg" alt="" /></div>
    <h1>Menu</h1>
    <div class="icon-right"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-wt-right.svg" alt="" /></div>

        </div>
        <div class="event-btn">

    <a href="<?php bloginfo('template_directory')?>/menu">zobać całe menu</a>
    <div class="hand-container">
        <img src="<?php bloginfo('template_directory')?>/assets/img/hand1.svg"  alt="">
 
        </div>
    </div>
</section>
<section class="image-gallery">
  <div class="offer-section-title-container">
    <div class="icon-left"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-left.svg" alt="" /></div>
    <h1>Galeria zdjęć</h1>
    <div class="icon-right"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-right.svg" alt="" /></div>
</div>  
<div class="gallery">
 <?php dynamic_sidebar( 'main_page_gallery' ); ?>
   
</div>
</section>

  <div class="offer-section-title-container">
    <div class="icon-left"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-left.svg" alt="" /></div>
    <h1>Kontakt</h1>
    <div class="icon-right"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-right.svg" alt="" /></div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
