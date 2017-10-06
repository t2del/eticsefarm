<?php
	if(isset($_POST['submit']) and $_GET['update']=='information')
	{
		$conn->query("update _information set info_details='".$_POST['details_email']."' where info_section='".$_POST['section_email']."'");
		$conn->query("update _information set info_details='".$_POST['details_contact']."' where info_section='".$_POST['section_contact']."'");
		$conn->query("update _information set info_details='".$_POST['details_address']."' where info_section='".$_POST['section_address']."'");
		$conn->query("update _information set info_details='".$_POST['details_map']."' where info_section='".$_POST['section_map']."'");
	}
?>
    	<div class="pricing-box-alt">
            <div class="pricing-heading">
                <h4 id="information"><strong>Edit Information</strong></h4>
            </div>
            <div id="edit_information">
            	<form action="<?php echo $_SERVER['PHP_SELF']."?src=editor&content_page=edit_information&update=information#information"; ?>" method="post" >
                <div class="clearfix">
                    <strong class="clearfix">Email:</strong>
                    <input type="hidden" value="<?php information_section($qry_info. " where info_section='email'"); ?>" name="section_email" id="section_email" />
                    <textarea id="details_email" name="details_email"><?php information_details($qry_info. " where info_section='email'"); ?></textarea>
                </div>
                
                <div class="clearfix">
                    <strong class="clearfix">Phone:</strong>
                    <input type="hidden" value="<?php information_section($qry_info. " where info_section='contact'"); ?>" name="section_contact" id="section_contact" />
                    <textarea id="details_contact" name="details_contact"><?php information_details($qry_info. " where info_section='contact'"); ?></textarea>
                </div>
                
                <div class="clearfix">
                  <strong class="clearfix">Address:</strong>
                  <input type="hidden" value="<?php information_section($qry_info. " where info_section='address'"); ?>" name="section_address" id="section_address" />
                    <textarea rows="3" id="details_address" name="details_address"><?php information_details($qry_info. " where info_section='address'"); ?></textarea>
                </div>
                
                <div class="clearfix">
                  <strong class="clearfix">Map (Google):</strong>
                  <input type="hidden" value="<?php information_section($qry_info. " where info_section='map'"); ?>" name="section_map" id="section_map" />
                  <textarea name="details_map" rows="5" id="details_map"><?php information_details($qry_info. " where info_section='map'"); ?></textarea>
                </div>
                    <fieldset>
						<button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="5"  class="btn btn-theme">Update</button>
					</fieldset>
                </form>
            </div>