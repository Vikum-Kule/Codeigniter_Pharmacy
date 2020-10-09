
<div class="container">


<table class="table table-hover">
  <thead>
   	 <tr class="table-active">
        <th>CATEGORY</th>
        <th>GENERIC NAME</th>
        <th>BRAND NAME</th>
        <th>QTY</th>
        <th>EXP</th>
        <th>MFD</th>
        <th>MANAGE</th>
        <th> </th>
    </tr>
    
 </thead>
  <tbody>
  	 <?php if(count((array)$records)): ?>

  	<?php foreach ($records as $record){  ?>	 
      <tr>
        <td scope="col"><?php echo $record->category; ?></td>
        <td scope="col"><?php echo $record->genericName; ?></td>
        <td scope="col"><?php echo $record->brandName; ?></td>
        <td scope="col"><?php echo $record->QTY;?> </td>
        <td scope="col"><?php echo $record->EXP;?></td>
        <td scope="col"><?php echo $record->MFD;?></td>
        <td scope="col"><?php echo anchor("pages/update/{$record->Id}",'Update',['class'=>'btn btn-success ']); ?></td>
        <td scope="col"><?php echo anchor("pages/delete/{$record->Id}",'Delete',['class'=>'btn btn-warning ']); ?></td>
 
 
    </tr>
 	 <?php } ?>
	<?php else: ?>
		<tr>NO RECORDS FOUND!!..</tr>
<?php endif; ?>

   </tbody>
</table> 
</div>