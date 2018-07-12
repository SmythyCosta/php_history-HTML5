<?php 
sleep(1);
?>


<div>
	<p>
		Cocat page
	</p>
</div>


<div>
	<?php
		//cats=1&dog=2
		print_r($_GET);
	?>
</div>


<?php
if (isset($_GET['cats']) && isset($_GET['dog'])) {
	$title = $_GET['dog'] + $_GET['cats'];
}
else{
	$title = 'Cocat Page';
}
?>


<script>

	$("title").text('<?php echo $title; ?>');
	console.log('Cosole page cats OK');
	
</script>