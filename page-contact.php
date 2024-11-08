<?php get_header(); ?>

<div id="ContactBanner-721">
    <div class="cs-container">
        <span class="cs-int-title">Contact Us</span>
    </div>
    <!--Background Image-->
    <picture class="cs-background">
        <!--Mobile Image-->
        <source media="(max-width: 600px)" srcset="https://ik.imagekit.io/azupnt3mqx/preps-academy-contact-us.webp?updatedAt=1730613177132">
        <!--Tablet and above Image-->
        <source media="(min-width: 601px)" srcset="https://ik.imagekit.io/azupnt3mqx/preps-academy-contact-us.webp?updatedAt=1730613177132">
        <img loading="lazy" decoding="async" src="https://ik.imagekit.io/azupnt3mqx/preps-academy-contact-us.webp?updatedAt=1730613177132" alt="Tutor - Preps Academy" width="1280" height="568" aria-hidden="true">
    </picture>
</div>

<!-- ============================================ -->
<!--                   Contact                    -->
<!-- ============================================ -->

<section id="ContactForm-721">
    <div class="cs-container">
        <picture class="cs-picture">
            <source media="(max-width: 600px)" srcset="https://ik.imagekit.io/azupnt3mqx/preps-academy-hero-img.webp?updatedAt=1730580948470">
            <source media="(min-width: 601px)" srcset="https://ik.imagekit.io/azupnt3mqx/preps-academy-hero-img.webp?updatedAt=1730580948470">
            <img decoding="async" src="https://ik.imagekit.io/azupnt3mqx/preps-academy-hero-img.webp?updatedAt=1730580948470" alt="" width="610" height="425" aria-hidden="true">
        </picture>
        <div class="cs-content">
            <span class="cs-topper">Contact Us</span>
            <h2 class="cs-title">Get in Touch</h2>
            <p class="cs-text">
                In consequat tincidunt turpis sit amet imperdiet. Praesent Class officelan nonatoureanor mauris laoreet, iaculis libero quis. 
            </p>
            <!--Form-->
            <form class="cs-form" id="cs-form-718-721" name="Contact Form" method="post">
                <label class="cs-label">
                    Name
                    <input class="cs-input" required type="text" id="name-718-721" name="name" placeholder="Name">
                </label>
                <label class="cs-label cs-email">
                    Email
                    <input class="cs-input" required type="text" id="email-718-721" name="email" placeholder="Email">
                </label>
                <label class="cs-label cs-phone">
                    Phone
                    <input class="cs-input" required type="text" id="phone-718-721" name="phone" placeholder="Phone">
                </label>
                <label class="cs-label">
                    Message
                    <textarea class="cs-input cs-textarea" required name="Message" id="message-718-721" placeholder="Write message..."></textarea>
                </label>
                <button class="cs-button-solid cs-submit" type="submit">Contact Us</button>
            </form>
        </div>
    </div>
</section>
                         
<?php get_footer();?>