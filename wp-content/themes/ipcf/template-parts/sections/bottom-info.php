<?php if(is_active_sidebar('bottom-info-widget')): ?>
    <section id="bottom-info">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('bottom-info-widget'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>