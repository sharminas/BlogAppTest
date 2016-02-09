<div class="container">
  <div class="row">
    <div class="col-sm-10 blog-sidebar adjust">
      <form class="navbar-form navbar-right">
        <div class="form-group">
            <?php echo $this->Form->input('',array('style' => array('width: 200px; height:35px;')));?>
          </div>
          <div class="form-group">
            <?php  echo $this->Html->link(__('<span class="glyphicon glyphicon-search" style="font-size:24px;color:#ff471a; float:right;"> </span>'),array('controller' =>  '#', 'action' => '#'),array('escape' => false));  ?>
            <input type="text" name="TextBox" id="TextBox" style="background-color: white; width: 15px; border: none;" value="" r>
          </div>
      </form>  
    </div>
  </div>
</div>