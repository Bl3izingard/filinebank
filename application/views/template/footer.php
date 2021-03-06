<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</main>
 <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<!-- Compiled and minified JavaScript -->
 	<script src="<?php echo base_url("assets/js/materialize.min.js");?>"></script>
 	<script src="<?php echo base_url("assets/js/init.js");?>"></script>
 	
 	<script type="text/javascript">
 	<?php 
 		if(!empty($city_list)):
 	?>
 		$(document).ready(function(){
	$('#city.autocomplete').autocomplete({
    data: {
      <?php
						$i = 0;
						foreach ( $city_list as $value )
						{
							printf ( "%s\n\"%s\": null", (($i > 0) ? ',' : ''), $value );
							
							$i ++;
						}
						?>
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 2, // The minimum length of the input for the autocomplete to start. Default: 1.
  });
 		});
	  <?php 
	   	endif;
	  ?>
</script>
 	
</body>
</html>