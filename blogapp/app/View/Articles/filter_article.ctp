<!-- <!-- <!-- <div class="container">
  <div class="row">
    <div class="col-sm-8 blog-main">
    <?php if($articles): ?>
    <?php foreach ($articles as $article): ?>      
        <div class="blog-post">
            <div class="blog-post-title">
                <h2><?php echo $article['Article']['title']?>      
                <?php if(AuthComponent::user('id') == $article['Article']['user_id']) :?>
                    <!-- EDIT -->
                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil" style="font-size: 18px; color:black;"> </span>'),array(  'controller' => 'articles', 'action' => 'edit',$article['Article']['id']),array('escape' => false));?>
                    <!-- DELETE -->
                <?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-trash" style="font-size: 18px; color:red;"> </span>'),array( 'controller' => 'articles','action' => 'delete',$article['Article']['id']),array('escape' => false),array('confirm' =>  __('Are you sure you want to delete this article?', $article['Article']['title']))); ?> &nbsp;         
                <?php endif; ?></h2>
                <?php echo $this->Time->format('F j, Y h:i A',$article['Article']['created']); ?>
                &nbsp; by &nbsp; <?php echo $this->Html->link($article['User']['firstname'],array(
                'controller' => 'users', 'action' => 'view', $article['User']['id']));?>
            </div>      
            <div class="blog-post-meta">
              <?php echo $this->Html->tag('span',$this->Text->truncate($article['Article']['body'],250));?>
            </div>
        </div>
        <div class="blog-post">
             <div class="blog-post-meta">
               <?php echo $this->Html->link(__('Read More ...'),array('controller' => 'articles','action' =>'view',$article['Article']['id'])); ?> &nbsp;
             </div>
        </div>
        <div class="blog-post">
            <div class="blog-post-meta">
              <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-comment" style="
              font-size:22px; color:black;"> </span>'),array('controller' =>  'comments', 'action' => 'add',$article['Article']['id']),array('escape' => false)); ?>&nbsp;&nbsp;&nbsp;&nbsp;
              <button class="glyphicon glyphicon-thumbs-up" style= "font-size:22px; color:black; 
                   background-color: white; border:none;" type="button" id='AddButton' value="+"></button>&nbsp;
                   <input type="text" name="TextBox" id="TextBox" style="background-color: white; width: 15px; border: none;" 
                   value="<?php echo $article['Article']['like_num']; ?>" readonly/>
              <button class="glyphicon glyphicon-thumbs-down" 
                   style= "font-size:22px; color:red; background-color: white; border:none;" type="button" id='AddButton_dis' value="+"></button>&nbsp;
                   <input type="text" name="TextBox" id="TextBox_dis" style="background-color: white; width: 15px; border: none;" value="<?php echo $article['Article']['dislike_num']; ?>" readonly/>
            </div>
        </div>
    <?php endforeach;?>
    <?php endif;?>
    </div>





<!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
               <span class="caret"></span> </a>
            <ul class="dropdown-menu" id="navLogin">
             <li><?php //echo $this->Html->link(__('<span class="glyphicon glyphicon-comment" style="
             // font-size:22px; color:black;"> </span>'),array('controller' =>  'comments', 'action' => 'add',
             // $article['Article']['id']),array('escape' => false)); ?>
              <button class="glyphicon glyphicon-thumbs-up" style= "font-size:22px; color:black; 
                   background-color: white; border:none;" type="button" id='AddButton' value="+"></button>&nbsp;
                   <input type="text" name="TextBox" id="TextBox" style="background-color: white; width: 15px; border: none;" value="<?php //echo $article['Article']['like_num']; ?>" readonly/>
              <button class="glyphicon glyphicon-thumbs-down" 
                   style= "font-size:22px; color:red; background-color: white; border:none;" type="button" id='AddButton_dis' value="+"></button>&nbsp;
                   <input type="text" name="TextBox" id="TextBox_dis" style="background-color: white; width: 15px; border: none;" value="<?php // echo $article['Article']['dislike_num']; ?>" readonly/>
                </li>
          </ul> -->
  
  





 --> --> -->