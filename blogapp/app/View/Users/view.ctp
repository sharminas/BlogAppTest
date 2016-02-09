<div class="container-fluid">
  <div class="row well">
      <div class="col-sm-3 col-md-3">
        <ul class="nav nav-sidebar profile">
            <li>
               <div class="row placeholders" style="margin-left: .25cm;">
                 <div class="col-xs-6 col-sm-10 placeholder">
                      <span class="glyphicon glyphicon-user" style="font-size: 100px; margin-left: 1cm; color:black;"> </span>
                      <h5 style="margin-left:.25cm; font-size: 20px;">
                         <?php echo AuthComponent::user('firstname')?>
                         <?php echo AuthComponent::user('lastname')?>
                      </h5>  
                     <div style="margin-left:.25cm; font-size: 14px;">               
                      <?php echo AuthComponent::user('email')?>
                      &nbsp;
                     </div>
                  </div>
               </div>
            </li>&nbsp; <hr>
            <li><span class="glyphicon glyphicon-user" style="font-size: 20px; color:#ff471a;"> &nbsp;<?php echo $this->Html->link(__('My Profile'), array('controller'=>'users','action' => 'edit', AuthComponent::user('id')))?></span></li>&nbsp;
            <li><span class="glyphicon glyphicon-cog"style="font-size: 20px; color:#ff471a; text-decoration:none;">
               <?php  echo $this->Html->link(__('Change Password'), array( 'controller' => 'users','action' => 'reset')); ?></span></li>&nbsp;
            <li><span class="glyphicon glyphicon-list-alt" style="font-size: 20px; color:#ff471a;">&nbsp;
             <?php  echo $this->Html->link(__('My Articles'),array( 'controller' => 'users','action' => 'users_article',AuthComponent::user('id'))); ?></span></li>&nbsp;
            <li><span class="glyphicon glyphicon-list" style="font-size: 20px; color:#ff471a;">&nbsp;
             <?php  echo $this->Html->link(__('My Genre'),array( 'controller' => 'users','action' => 'users_category',AuthComponent::user('id'))); ?></span></li>  
             &nbsp;&nbsp;&nbsp;&nbsp; 
         </ul>
      </div>
      <div class="col-sm-9 col-md-9 main">
         <h2><?php echo __('User'); ?></h2>
            <div class="pull-left">
             	<h3> Email Address:<small class="author"><?php echo ($user['User']['email']); ?></small>
               </h3>
               <h3 class="pull-left"> Name:<small class="author"><?php echo ($user['User']['firstname']); ?> &nbsp; <?php echo ($user['User']['lastname']); ?></small></h3>
               <h3 > Address:<small class="author"><?php echo ($user['User']['address']); ?></small></h3>
         
               <h3 > Gender:<small class="author"><?php echo ($user['User']['gender']); ?></small></h3>
            </div>
      </div>
   </div>
</div>
