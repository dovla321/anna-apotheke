
</div>

<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>

<?php wp_footer() ?>

<script>
   $(window).on('load', function () {
   wow = new WOW({
     boxClass: 'wow',
     animateClass: 'animated',
     offset: 5,
     mobile: false,
     live: true
   })
   wow.init();
   });
</script>
</body>
</html>
