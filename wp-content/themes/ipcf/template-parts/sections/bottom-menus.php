<?php if(is_active_sidebar('bottom-menus-widget')): ?>
    <section id="bottom-menus">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('bottom-menus-widget'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>