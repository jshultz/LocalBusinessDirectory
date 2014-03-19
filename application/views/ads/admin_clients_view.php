<div class="span-24">


<div class="span-24">
    <h2>Welcome to the Ad Manager!</h2>
       <h3>Clients Directory</h3>
     
     <div class="span-21">
   <div class="span-19" style="margin-top:5em"> 
    <table class="stripeMe">
    
    <tr>
          <th>Client Name</th>
          <th>First Letter</th>
    </tr>
  <?php if(count($clients)) : foreach ($clients->result() as $row): ?>
    
    <tr>
      <?=form_open('ads/updateclient'); ?>
      <td><p><input name="clientname" type="text" value="<?=$row->clientname ?>"/></p></td>
      <td><p><input name="firstletter" type="text" value="<?=$row->firstletter ?>"/></p></td>
      <td>
      
      <input type="hidden" name="id" value="<?=$row->id; ?>" />
      <input type="hidden" name="redirect" value="/ads/clients" /> 
      <?=form_submit('submit','Update'); ?>
      <?=form_close(); ?>
      </td>
      

      <td>
      <?=form_open('ads/deleteclient'); ?>
      <input type="hidden" name="id" value="<?=$row->id; ?>" /> 
      <?=form_submit('submit','Delete'); ?>
      <?=form_close(); ?>
      </td>
    </tr>

    <?php endforeach; ?>
    </table>
    
    <?php else : ?>
    
<td>
    <p>No Businesses Here!</p>
</td>
    
    <?php endif; ?>
  </table class="stripeMe">
         
       <?=form_open_multipart('/ads/createclient'); ?>
       <?=form_hidden('redirect', '/ads/clients'); ?>
       
       <p><?=form_label('Client Name', 'clientname')?>
	   <?=form_input('clientname', 'Enter the Client Name'); ?></p>
       
       <p><?=form_label('First Letter', 'firstletter')?>
	   <?=form_input('firstletter', 'Enter the First Letter'); ?></p>
	   <?=form_submit('submit','Create The Business'); ?>
	   <?=form_fieldset_close(); ?>
	   <?=form_close(); ?>
    
    
    
       <?php echo validation_errors('<p class="error">'); ?>

</div>
</div>