<style>
form.A {
  max-width: 50%;
  height: 100px;
  margin: 20px 30% 20%;
  padding :center;
  
}
legend{
	text-align: center;
}

</style>



<?php echo form_open('pages/save',['class'=>'A']);  ?>	

  <fieldset>
    <legend >ADD MEDICINE</legend>
	
	<div class="form-group">
      <label for="category">CATEGORY</label>
      <?php  echo form_input(['name'=>'category','class'=>'form-control','placeholder'=>'CATEGORY','value'=>set_value('category')]); ?>
    </div>  

    <div class="form-group">
      <label for="genericName">GENERIC NAME</label>
      <?php  echo form_input(['name'=>'genericName','class'=>'form-control','placeholder'=>'GENERIC NAME','value'=>set_value('genericName')]); ?>
      
    </div>

	<div class="form-group">
      <label for="brandName">BRAND NAME</label>
      <?php  echo form_input(['name'=>'brandName','class'=>'form-control','placeholder'=>'BRAND NAME','value'=>set_value('brandName')]); ?>
    </div>

    <div class="form-group">
      <label for="quantity">QTY:</label>
      <?php  echo form_input(['name'=>'QTY','class'=>'form-control','type'=>'number','min'=>'1','max'=>'100','value'=>set_value('QTY')]); ?>
      <!-- <input type="number" id="quantity" name="quantity" min="1" max="100"> -->
    </div>  

	<div class="form-group">
      <label for="EXP">EXP</label>
      <?php  echo form_input(['name'=>'EXP','class'=>'form-control','type'=>'date','value'=>set_value('EXP')]); ?>
    </div>

	<div class="form-group">
      <label for="MFD">MFD</label>
      <?php  echo form_input(['name'=>'MFD','class'=>'form-control','type'=>'date','value'=>set_value('MFD')]); ?>
    </div>
    
    <?php  echo form_submit(['value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php  echo form_reset(['value'=>'Cancel','class'=>'btn btn-primary']); ?>
   
  </fieldset>
<?php echo form_close();  ?>	


