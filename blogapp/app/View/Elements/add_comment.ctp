<?php if($article['Article']['id'] == $article['Comment']['article_id']) :?>  
  <p style="color:black;"> 
      <?php echo $article['Comment']['name']; ?>
      <?php echo $this->Time->format('F j, Y h:i A',$article['Comment']
      ['created']); ?> 
      &nbsp; says &nbsp;
      <?php echo ($article['Comment']['comment']); ?>
  </p>
<?php else: ?>
	<?php echo 'No Comments '?>
<?php  endif ; ?>