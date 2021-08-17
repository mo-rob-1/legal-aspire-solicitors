<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Legal_Aspire_Solicitors
 */

?>

<section class="about-us-pg" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="about-us-pg__banner-image-background">
		<div class="about-us-pg__banner-content">
			<h1 class="about-us-pg__banner-title"><?php the_title(); ?></h1>
		</div>
	</div>

        <div class="about-us-pg__item-one-wrapper">
            <div class="about-us-pg__col-1">
                <h5 class="about-us-pg__intro-title">Who We Are</h5>
                <h2 class="about-us-pg__col-1-title">Your partner for legal advice</h2>
                <p class="about-us-pg__col-1-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit magni accusamus sapiente in fugiat cum, tempore sunt aspernatur iure necessitatibus ab, 
                cumque numquam obcaecati itaque fugit nostrum, asperiores placeat doloremque facilis ut animi culpa. Esse alias, eius quaerat explicabo corrupti omnis mollitia odit 
                commodi laboriosam maiores quis facere deleniti libero quia voluptate non quam blanditiis ab dignissimos. Esse, minus ullam.</p>
            </div>

            <div class="about-us-pg__col-2">
                <img class="about-us-pg__img" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/07/solicitors-coversation.jpg" alt="Image" />
            </div>
        </div>

        <div class="about-us-pg__item-two-wrapper">
            <div class="about-us-pg__item-two-col-1">
                <h3 class="about-us-pg__item-two-title"><span class="span-number">01</span> Legal Advisors</h3>
                <p class="about-us-pg__item-two-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis aspernatur a consequuntur tenetur. 
                Necessitatibus aliquid totam in distinctio hic deserunt</p>
            </div>
            <div class="about-us-pg__item-two-col-2">
                <h3 class="about-us-pg__item-two-title"><span class="span-number">02</span> Trusted Experience</h3>
                <p class="about-us-pg__item-two-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis aspernatur a consequuntur tenetur. 
                Necessitatibus aliquid totam in distinctio hic deserunt</p>
            </div>
            <div class="about-us-pg__item-two-col-3">
                <h3 class="about-us-pg__item-two-title"><span class="span-number">03</span> Responsiveness</h3>
                <p class="about-us-pg__item-two-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis aspernatur a consequuntur tenetur. 
                Necessitatibus aliquid totam in distinctio hic deserunt</p>
            </div>
        </div>

        <div class="about-us-pg__filter" uk-filter="target: .js-filter">
            <ul class="uk-subnav uk-subnav-pill">
                <li class="uk-active" uk-filter-control="[data-color='white']"><a href="#">Our Mission</a></li>
                <li uk-filter-control="[data-color='blue']"><a href="#">Our Vision</a></li>
                <li uk-filter-control="[data-color='black']"><a href="#">Our Value</a></li>
            </ul>

            <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
                <li data-color="white">
                    <div class="uk-card uk-card-default uk-card-body card-box-shadow-none about-us-pg__item-filter-desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</div>
                </li>
                <li data-color="blue">
                    <div class="uk-card uk-card-body card-box-shadow-none about-us-pg__item-filter-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis aspernatur a consequuntur tenetur. 
                    Necessitatibus aliquid totam in distinctio hic deserunt.</div>
                </li>
                <li data-color="black">
                    <div class="uk-card uk-card-default uk-card-body card-box-shadow-none about-us-pg__item-filter-desc">Ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</div>
                </li>
            </ul>
        </div>

    <div class="timeline-wrapper">  
    <div class="timeline">
        <div class="container left">
            <div class="content">
            <h2 class="about-us-pg__timeline-heading">2017</h2>
            <p class="about-us-pg__timeline-desc">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
            </div>
        </div>
        <div class="container right">
            <div class="content">
            <h2 class="about-us-pg__timeline-heading">2016</h2>
            <p class="about-us-pg__timeline-desc">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
            </div>
        </div>
        <div class="container left">
            <div class="content">
            <h2 class="about-us-pg__timeline-heading">2015</h2>
            <p class="about-us-pg__timeline-desc">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
            </div>
        </div>
        <div class="container right">
            <div class="content">
            <h2 class="about-us-pg__timeline-heading">2012</h2>
            <p class="about-us-pg__timeline-desc">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
            </div>
        </div>
        <div class="container left">
            <div class="content">
            <h2 class="about-us-pg__timeline-heading">2011</h2>
            <p class="about-us-pg__timeline-desc">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
            </div>
        </div>
        <div class="container right">
            <div class="content">
            <h2 class="about-us-pg__timeline-heading">2007</h2>
            <p class="about-us-pg__timeline-desc">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
            </div>
        </div>
    </div>
    </div> 

    <div class="about-us-pg__team">
        <h2 class="about-us-pg__team-title">Meet Our Legal Experts</h2>
        <div class="about-us-pg__team-members-wrapper">
        <?php
            $args = array(
                'post_type' => 'our-team',
                'posts_per_page' => 4
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>
                        <div class="about-us-pg__team-members">
                            <div class="about-us-pg__team-members-img-wrapper"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                                <div class="about-us-pg__team-members-card-text-wrapper">
                                    <h2 class="about-us-pg__team-members-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p class="about-us-pg__team-members-job-title"><?php the_field('job_title'); ?></p>
                                </div>
                        </div>
                    <?php
                        } wp_reset_postdata();
                    }
        ?>
        </div>

        <div class="about-us-pg__team-members-link-wrapper">
            <a class="about-us-pg__team-members-link" href="<?php echo site_url('/our-team') ?>">View All</a>
        </div>

        </div>

        <section class="contact services-pg-contact">
			<div class="contact__container">
				<h2 class="contact__heading">Get a Free Counsultation for Your Case.</h2>
				<div class="contact__link-container">
					<a class="contact__link" href="#">Contact Us</a>
				</div>
			</div>
		</section>
    
 
    </div>
</section><!-- #post-<?php the_ID(); ?> -->
