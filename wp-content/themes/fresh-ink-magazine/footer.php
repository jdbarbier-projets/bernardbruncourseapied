
	<div id="pageextend"></div></div>
				<div class="clear">
 <center><div id="footer"> <a href="<?php echo home_url(); ?>/">

		<?php 
$time = time () ; 
//This line gets the current time off the server

$year= date("Y",$time) . ""; 
//This line formats it to display just the year

echo "&copy; " . $year;
//this line prints out the copyright date range, you need to edit 2002 to be your opening year
?> <?php bloginfo('name');?>
 </a> <br />
 </center>

</div></div></div>
  <?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11599835-1', 'bernardbruncourseapied.fr');
  ga('send', 'pageview');

</script>	

</body>
</html>
