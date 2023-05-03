<?php

/**
 * Template Name: IWD Landing Page Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

// 

add_action('wp_head', 'add_this_script');
function add_this_script()
{
    // echo '<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6400da1bc9c3c1001aca89a0&product=inline-share-buttons&source=platform" async="async"></script>';
    echo "<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6406e8efb20f5f00192a0d2d&product=sop' async='async'></script>";
}

get_header( null, [ 'header_var' => 'black' ] );
?>

<div class="padding-y-180 padding-md-top-120 padding-sm-top-180 padding-sm-top-180 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-white bg-image" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/LS_IWD_header_image.jpg">

</div><!-- .widget-hero-intro -->

<div class="padding-x-90 padding-sm-0 padding-sm-x-10 bg-white iwd-title">
    <div class="columns padding-x-100 padding-md-30 padding-sm-0 padding-sm-x-10 is-centered">
        <div class="content" id="iwd-title">
            <div class="column is-full-tablet">
                <h1 class="small-title text-fill charcoal">International Women's Day</h1>
                <h2 class="text-fill lemon">Look beyond the<br>headlines.</h2>
                <p>Shining a light on pay disparity in the legal industry</p>
            </div>
        </div>
    </div>
</div>

<div class="padding-x-90 padding-sm-0 padding-sm-x-10 bg-white">
    <div class="content">
        <div class="columns padding-x-100 padding-md-30 padding-sm-0">
            <div class="columns">
                <div class="column is-2-tablet iwd-border-right">
                    <p>Share this page</p>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>
                <div class="column is-10-tablet">
                    <h3>How can you embrace equality in your organisation?</h3>
                    <p>We invite you to a private, interactive session on April 26th hosted by our CEO, Clare Beresford. Clare is an industry expert and leader who brings vast experience driving equality and visionary leadership to the C-Suite level and for those building teams at the most senior levels of the Legal Industry.</p>
                    <br>
                    <p>This opportunity will be an informal session where we can share the challenges currently faced across companies, even with equal pay bandings, to ensure that equity is being built into the organisation.  Clare will share how those leading and recruiting into senior legal roles can redress the balance at C-Suite and Equity Partner level. Please note that you will be on camera; the session will not be recorded, and Chatham house rules will apply.</p>
                    <br>
                    <p>Spaces are very limited; sign up now to avoid missing out.</p>
                    <br>
                    <a href="https://signup.es-mail.co.uk/Signup/a667ee68f1b4715ec038612a575edb70" class="button is-primary">Sign up for our webinar</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/blocks/price-matrix', 'template'); ?>

<div class="padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-white">
    <div class="columns padding-x-100 padding-md-30 padding-sm-0">
        <div class="content">
            <div class="columns">
                <div class="column is-2-tablet iwd-border-right  is-block-desktop-only">

                </div>
                <div class="column is-10-tablet">
                    <h3 class="padding-y-10">Pay disparity starts early.</h3>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/LS_IWD_Job-Adverts_v2_Landscape3.jpg" alt="IWD" class="iwd-offset">
                    <p>Pay disparity is a recurring theme being raised every International Women’s Day, and yet, it is still a pervasive issue in many industries, including the legal industry. In fact, a recent analysis shows that the median pay gap in the industry of 25.4% has changed very little since reporting on pay was made mandatory in 2017 (Global Legal Post).</p>
                    <br>
                    <p>Encouragingly, a growing number of young women are enrolling in legal courses (nearly 71% of enrolled students are women, according to the Law Society). While this number is inspiring, the reality that these young women face when they do qualify as lawyers is a disparity between their compensation and that of their male peers; on average, 15% less in compensation, according to Bloomberg. This disparity can grow to 50% less salary for female trial lawyers in the UK (Bar Council).</p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-white">
    <div class="columns padding-x-100 padding-md-30 padding-sm-0">
        <div class="content">
            <div class="columns">
                <div class="column is-2-tablet iwd-border-right  is-block-desktop-only">

                </div>
                <div class="column is-10-tablet">
                    <h3 class="padding-y-10">The inequality continues for women as they progress in their legal careers.</h3>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/LS_IWD_Job-Adverts_v2_Landscape4.jpg" alt="IWD" class="iwd-offset">
                    <p>The rate of progress to close the gender pay gap in the legal industry has been frustratingly slow. This slow progression has not gone unnoticed by female professionals in the field; in a recent poll, 84% of UK female lawyers said they did not expect to see gender pay equality during their careers (WorldTrademarkReview).</p>
                    <br>
                    <h3 class="purple-text">"84% of UK female lawyers said they did not expect to see gender pay equality during their careers"</h3>
                    <br>
                    <p>Making Partner is an incredible milestone for any in private practice. In the UK, female representation in all levels of Partnership is only 35%, according to SRA. The unfortunate reality is that those few women who do manage to break the glass ceiling and make Partner at their firm (at any level) are still subjected to pay disparity. According to Bloomberg, compensation on average for women at all levels of Partnership in the legal industry is 44% less than that of their male colleagues.</p>
                    <br>
                    <p>While the inequality is less pronounced when it comes to in-house legal functions, female Corporate Counsel do make less than their male peers. According to Reuters, the average compensation for a women Corporate Counsel is 14% less.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-white">
    <div class="columns padding-x-100 padding-md-30 padding-sm-0">
        <div class="content">
            <div class="columns">
                <div class="column is-2-tablet iwd-border-right  is-block-desktop-only">

                </div>
                <div class="column is-10-tablet">
                    <h3 class="padding-y-10">Pay disparity remains a reality, even at the highest levels.</h3>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/LS_IWD_Job-Adverts_v2_Landscape2.jpg" alt="IWD" class="iwd-offset">
                    <p>When it comes to the senior most level of Partnership, we see these numbers grow. While the data is challenging to uncover, in the United States, where women account for only 22% of Equity Partners, they are still subject to pay inequality making only 78% of what their male colleagues do (Bloomberg). When looking at the disparity for senior in-house Counsel, the gap in real US dollars is $50,000 less for female General Counsel (Barker Gilmore). </p>
                    <br>
                    <p>The unfortunate reality of the pay disparity in the legal industry is that while two-thirds of female lawyers note the gender pay gap as an urgent issue for women’s equality, few feel this urgency is shared. In fact, 62% of those surveyed believed that fixing the problem was not actually a priority for their senior management (WorldTrademarkReview).</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="padding-y-40 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-white">
    <div class="column is-2-tablet">

    </div>
    <div class="column is-10-tablet">
    </div>
</div>
<div class="padding-y-90 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-charcoal newsletter-signup" id="webinar">
    <div class="columns">
        <div class="column">
            <h2 class="lemon-text">Be a part of the change.</h2>
        </div>
    </div>
    <div class="columns">
        <div class="column is-6-tablet">
            <p>The issue of pay inequality is pervasive and requires all of us in the industry to join together, learn from each other and advocate for ourselves and our female colleagues.</p>
            <br>
            <p>On April 26th at 12:30 PM GMT, we are facilitating an exclusive virtual roundtable with our CEO, Clare Beresford. Drawing on her decades of industry experience, Clare will be guiding participants through a conversation about gender pay disparity and how to begin addressing the issue in your own workplace. Our objective is to create a space where we can have unfiltered conversations about gender inequality in the legal industry, answer questions about why this is an ongoing issue and how we can create meaningful change.</p>
        </div>
        <div class="column is-6-tablet">
            <p><b>This unprecedented opportunity is open to all legal professionals, but spaces are extremely limited. Click the sign up button to secure your place</b></p>
            <br>
            <p>Please note that you will be on camera; the session will not be recorded, and Chatham house rules will apply.</p>
            <br>
            <a href="https://signup.es-mail.co.uk/Signup/a667ee68f1b4715ec038612a575edb70" class="button is-primary">Sign up</a>
        </div>
    </div>
</div>
<!-- <p style="text-align: center;"><a class="mx-auto button is-primary" href="#" data-eshot-ref="E60DF2688983CD5D2806F2E3A7E70B0C">Download</a>
<script type="text/JavaScript" async src="https://news.laurencesimonsmail.com/Signup/E60DF2688983CD5D2806F2E3A7E70B0C/Embed?frameOptions=0&width=auto&height=auto"></script></p> -->
<?php get_footer(); ?>