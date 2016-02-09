<div class="container">
    <!-- <h2 class="pull-left"> <?php // echo 'Create your Account' ?> </h2> -->
   <div class="col-sm-offset-8 col-md-9">
      <div class="row">
        <div class=" col-md-5 top well">
              <?php echo $this->Form->create('User', array('novalidate' => true)); 
                    echo $this->Form->input(__('email',true), array('class' => 'form-control','div' => array(
                       'class' => 'form-group'),'label' => ('E-mail <span style=color:red>* </span>')));
                    echo $this->Form->input(__('password',true), array('class' => 'form-control','div' => array(
                       'class' => 'form-group'),'label' => 'Password <span style=color:red>* </span>',
                       'type' => 'password'));
                     echo $this->Form->input(__('password2',true), array('class' => 'form-control','div' => array(
                       'class' => 'form-group'),'label' => ('Confirm Password <span style=color:red>*</span>'),
                       'type' => 'password'));
                ?>
              <?php echo $this->Form->input(__('firstname',true), array('class' => 'form-control','div' => array(
                       'class' => 'form-group'),'label' => ('Firstname <span style=color:red>* </span>'))); 
                    echo $this->Form->input(__('lastname',true), array('class' => 'form-control','div' => array( 
                       'class' => 'form-group'),'label' => ('Lastname <span style=color:red>* </span>'))); 
                    echo $this->Form->input(__('address',true), array('class' => 'form-control','div' => array(
                       'class' => 'form-group'))); 
                    $options=array('M'=>'Male','F'=>'Female');
                    $attributes=array('legend'=>false);
                    echo $this->Form->radio('gender',$options,$attributes, array(
                       'class' => 'form-control','div' => array('class' => 'form-group'),
                       'label' => 'Gender:'));?>
                     <button class="btn btn-sm btn-primary btn-block resize" type="submit"><?php echo __('Sign In')?></button>
              <?php echo $this->Form->end();?>
         </div> 
      </div> 
   </div>              
</div>
<div class="jumbotron" style="background-color:white; border: none; height: 20cm;">
</div>
<div class="footer" id="footer" style="text-align:center;">
     <p> @2060 BlogApp.Inc </p> 
</div>