<?php if($articles): ?>
	<?php foreach ($articles as $article): ?>
	<p style="color:black;"> 
	   <?php echo $article['Comment']['name']; ?>
	   <?php echo $this->Time->format('F j, Y h:i A',$article['Comment']['created']); ?> 
		&nbsp; says &nbsp;
	   <?php echo ($article['Comment']['comment']); ?>
	 </p>
	<?php endforeach;?>
<?php endif; ?>
	 