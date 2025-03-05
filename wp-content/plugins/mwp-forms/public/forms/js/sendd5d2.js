jQuery(document).ready(function($) {
	$('input').keypress(function(e){
		if(e.keyCode==13){
			var idforms = $(this).parent().attr("id").split('-')[1];
			$('#mwp-form-free-button-'+idforms).trigger('click');
		}
	});     
});
function mwpformfreesend(mwpformid,errsize,errtext,errcolor) {	
	var buttid = 'mwpformfreeconfirm-'+mwpformid;	
	var result = 'mwpform-free-result-'+mwpformid;
	var counttextarea = jQuery("#" + buttid +" .textarea").length;
	var countname = jQuery("#" + buttid +" .name").length;
	var countemail = jQuery("#" + buttid +" .email").length;
	var countphone = jQuery("#" + buttid +" .phone").length;
	var errorcontent = '<span style="color:'+errcolor+';font-size:'+errsize+'px;">'+errtext+'</span>';
	var name = jQuery("#" + buttid +" .name").val();
	var email = jQuery("#" + buttid +" .email").val();
	var phone = jQuery("#" + buttid +" .phone").val();	
	var textarea = jQuery("#" + buttid +" .textarea").val();
	jQuery("#" + buttid + " .textarea").removeAttr('style');
	jQuery("#" + buttid + " .name").removeAttr('style');
	jQuery("#" + buttid + " .phone").removeAttr('style');		
	if ( name == '' && countname == 1){		
        jQuery("#" + buttid +" .name").css({"border-color": errcolor});
        jQuery("#" + buttid +" .name").focus();
		jQuery('#'+result).html(errorcontent);	
		return false;		
    } 
	if ( email == '' && countemail == 1){
        jQuery("#" + buttid +" .email").css({"border-color": errcolor});
        jQuery("#" + buttid +" .email").focus();
		jQuery('#'+result).html(errorcontent);
		return false;
	} 
	if ( email != '' && countemail == 1){
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(pattern.test(email)){
			jQuery("#" + buttid + " .email").removeAttr('style');
		} 
		else {
			jQuery("#" + buttid +" .email").css({"border-color": errcolor});
			jQuery("#" + buttid +" .email").focus();
			jQuery('#'+result).html(errorcontent);
			return false;
            }
	}		
	if ( phone == '' && countphone == 1){	
        jQuery("#" + buttid +" .phone").css({"border-color": errcolor});
        jQuery("#" + buttid +" .phone").focus();
		jQuery('#'+result).html(errorcontent);
		return false;
	} 
	if ( textarea == '' && counttextarea == 1){
        jQuery("#" + buttid +" .textarea").css({"border-color": errcolor});
        jQuery("#" + buttid +" .textarea").focus();
		jQuery('#'+result).html(errorcontent);
		return false;		
    }		
	else {		
		jQuery('#'+result).html('');		
		var data = {
			'action': 'send_mwp_form_free',
			textarea:textarea,
			name:name,
			email:email,			
			phone:phone,
			mwpformid:mwpformid			
		};
		jQuery.post(send_mwp_form_free.ajaxurl, data, function(msg) {			
			jQuery('#mwpformfreeconfirm-'+mwpformid).html(msg);
		});
	}
}