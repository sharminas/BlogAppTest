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
        <li><span class="glyphicon glyphicon-cog" style="font-size: 20px; color:#ff471a; text-decoration:none;">
             <?php  echo $this->Html->link(__('Change Password'), array( 'controller' => 'users','action' => 'reset')); ?></span></li>&nbsp;
         <li><span class="glyphicon glyphicon-list-alt" style="font-size: 20px; color:#ff471a;">&nbsp;
           <?php  echo $this->Html->link(__('My Articles'),array( 'controller' => 'users','action' => 'users_article',AuthComponent::user('id'))); ?></span></li>&nbsp;
        <li><span class="glyphicon glyphicon-list" style="font-size: 20px; color:#ff471a;">&nbsp;
           <?php  echo $this->Html->link(__('My Genre'),array( 'controller' => 'users','action' => 'users_category',AuthComponent::user('id'))); ?></span></li>
        &nbsp;&nbsp;&nbsp;&nbsp; 
    </ul>
  </div>

  <div class="col-sm-9 col-md-8">
    <div id="registration">
      <h5><?php echo ('Hi, this is your information, you can edit or modify your profile.')?></h5>
          <?php echo $this->Form->create('User', array('novalidate' => true)); 
                echo $this->Form->input('id');
                echo $this->Form->input('email', array('class' => 'form-control','div' => array(
                  'class' => 'form-group')));
                echo $this->Form->input('firstname', array('class' => 'form-control','div' => array(
                  'class' => 'form-group')));
                echo $this->Form->input('lastname', array('class' => 'form-control','div' => array(
                  'class' => 'form-group')));
                echo $this->Form->input('address', array('class' => 'form-control','div' => array(
                  'class' => 'form-group')));
                $options=array('M'=>'Male','F'=>'Female');
                $attributes=array('legend'=>false);
                echo $this->Form->radio('gender',$options,$attributes, array('class' => 'form-control',
                  'div' => array('class' => 'form-group'),'label' => 'Gender:'));  
                echo $this->Form->input('about', array('type' => 'text','style' => 'height: 100px',
                  'class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 
                  'About Me:')); 
            ?> 
         <button class="btn btn-sm btn-primary btn-block" type="submit">Update my Profile</button>
   </div>
  </div>
  </div>
</div>
 <div class="jumbotron" style="background-color:black; border: none;">
       <?php echo $this->element('footer_element');?>
  </div>
  <div class="footer" id="footer" style="text-align:center;">
     <p> @2060 BlogApp.Inc </p> 
     <a href="#home" class="paginate"><?php echo __('Back to Top')?></a>
  </div>
 