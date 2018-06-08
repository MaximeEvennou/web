    </section>
</div>

<?php wp_footer(); ?>
    <footer>
    <div class="d-flex">
        <div class="col-md-6 yellow d-inline-flex">  
        <?php dynamic_sidebar('bas-gauche'); ?>
        </div>
        <div class="col-md-6 orange d-inline-flex justify-content-end align-items-center">
        <?php dynamic_sidebar('bas-droit'); ?>
        </div>
    </div>
    
    </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
</body>
</html>