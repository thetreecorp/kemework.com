<?php 
$message_count = Wo_CountMessages(array('new' => true,'user_id' => $wo['chatList']['user_uid']));    
?>
<div class="recipient-chat-user" id="online_<?php echo $wo['chatList']['user_uid'];?>">
	<?php 
		$lastseen = str_replace('<span class="small-last-seen">', '', Wo_UserStatus($wo['chatList']['user_uid'],$wo['chatList']['lastseen']));
		$lastseen = str_replace('</span>', '', $lastseen);
	?>
	<div class="user-info" onclick="Wo_OpenChatTab('<?php echo $wo['chatList']['user_uid'];?>');" <?php if($wo['config']['user_lastseen'] == 1 && $wo['chatList']['showlastseen'] != 0) { ?>title="<?php echo $lastseen?>"<?php } ?>>
		<img src="<?php echo getImageURL($wo['chatList']['avatar']);?>" alt="<?php echo $wo['chatList']['name'];?> Profile Picture" />
		<span class="chat-user-text" id="chat-tab-id"><?php echo $wo['chatList']['name']; ?>
		<?php if (!empty($wo['chatList']['is_open_to_work']) && $wo['config']['website_mode'] == 'linkedin') { ?>
			<span class="wo_open_job_badge" title="open_to_work" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"><path fill="currentColor" d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14Z"></path></svg></span>
		<?php } ?>
		
		</span>
		<div class="wow_chat_list-right">
			<span class="<?php echo ($message_count == 0) ? 'd-none' : ''; ?> new-message-alert"><?php echo $message_count; ?></span>
			<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 24 24" ><path fill="#CDCDCD" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>
			<span class="chat-loading-icon"></span>
		</div>
	</div>
</div>
<div class="clear"></div>