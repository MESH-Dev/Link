    <table class="form-table">
        <tr class="form-field" valign="top">
			<th><label><?php _e( 'Account SID', 'frmtwlo' ) ?></label></th>
        	<td>
				<input type="text" name="frm_twlo_account_sid" id="frm_twlo_account_sid" value="<?php echo esc_attr( $frm_twlo_settings->settings['account_sid'] ) ?>" class="frm_long_input" />
        	</td>
        </tr>
        <tr class="form-field" valign="top">
			<th><label><?php _e( 'Auth Token', 'frmtwlo' ) ?></label></th>
        	<td>
				<input type="text" name="frm_twlo_auth_token" id="frm_twlo_auth_token" value="<?php echo esc_attr( $frm_twlo_settings->settings['auth_token'] ) ?>" class="frm_long_input" />
        	</td>
        </tr>
    </table>
        
    <br/>
    <h4>To setup text voting:</h4>
    <ol>
        <li>Create your form</li>
        <li>Log into your Twilio account and go the the <a href="https://www.twilio.com/user/account/phone-numbers/incoming">Numbers page</a></li>
        <li>Uncheck the "Voice" box if you do not want to accept phone calls.</li>
        <li>Change the SMS request URL to <?php echo esc_url( admin_url( 'admin-ajax.php?action=frm_twilio_vote&form=' ) ); ?><span style="color:red">5</span> (Change the 5 to the ID of your form)</li>
        <li>Text away. Your users can either text the number position of the choice in your form, or the word itself. <br/>
            For example, if I have a poll for favorite colors and my choices are Red, Green, Pink, and Blue, and my favorite color is pink then I can text any of the following: 3, Pink, pink, PINK. If the field is a data from entries field, only the ID of the linked entry will work. This vote will be applied to all fields in the form, so a text field might be good to add as a catch all.</li>
    </ol>
    <div style="text-align:center">
    <img src="<?php echo esc_url( WP_PLUGIN_URL ) ?>/formidable-twilio/images/number-setup.png" alt="" width="700px" />
    </div>