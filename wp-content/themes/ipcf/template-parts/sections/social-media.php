<?php if(is_active_sidebar('social-media-widget')): ?>
    <section id="social-media">
        <div class="container-fluid">
            <div class="row">
                <?php dynamic_sidebar('social-media-widget'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>