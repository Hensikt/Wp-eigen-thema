  <footer>
   <div class="container">
       <nav>
           <?php $argumenten = array('theme_location' => 'footer',); ?>
           <?php wp_nav_menu($argumenten); ?>
       </nav>
    <a href="http://validator.w3.org/check?uri=referer" target="_blank">
        <img src="https://blanken5.home.xs4all.nl/afb/valid-html5-blue.png" alt="Valide HTML5"></a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif" alt="Valide CSS">
    </a>

  <p> &copy; <?php the_author(); ?> - <?php echo date('Y'); ?></p>
   </div>
  </footer>
  <?php wp_footer(); ?>
 </body>
</html>
