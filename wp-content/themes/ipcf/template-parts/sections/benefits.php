<?php if(is_active_sidebar('benefits-widget')): ?>
    <section id="benefits">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('benefits-widget'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>