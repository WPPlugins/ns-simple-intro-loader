<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php // PUT YOUR settings_fields name and your input // ?>
<?php settings_fields('ns_simple_loader_options_group'); ?>
<div class="genRowNssdc">
	<?php $ns_disp_dim_load =  get_option('ns_simple_loader_dimension', ''); ?>
<table class="form-table adjTblNs">
	<tr>
		<th><label for="ns_display_loader">Display loader</label></th>
		<td>
			<select name="ns_simple_loader_dimension" id="ns_simple_loader_dimension">
				<option value="0"<?php if($ns_disp_dim_load != '' && $ns_disp_dim_load == 0){ echo ' selected';}?>>Small</option>
				<option value="1"<?php if($ns_disp_dim_load != '' && $ns_disp_dim_load == 1){ echo ' selected';}?>>Big</option>
			</select>
			<p class="description">Choose to display a small or big icon when page is loading.</p>
	</tr>	
</table>	
 
</div>


