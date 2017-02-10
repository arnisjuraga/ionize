<?php

$lang['module_sfs_title'] = 'Stop Form Spam';
$lang['module_sfs_subtitle'] = 'Protect your forms against Form spam';
$lang['module_sfs_settings'] = 'Settings';
$lang['module_sfs_instructions'] = 'Instructions';
$lang['module_sfs_label_api_key'] = 'API Key';
$lang['module_sfs_track'] = 'Track spammers';
$lang['module_sfs_evidence_input'] = 'Evidence input';
$lang['module_sfs_username_input'] = 'Username input(s)';
$lang['module_sfs_events'] = 'Events';
$lang['module_sfs_test_api'] = 'Test API';
$lang['module_sfs_test'] = 'Test';
$lang['module_sfs_test_help'] = 'This only tests the connexion with the Stop Forum Spam server.<br/>Spammers posting with API key will not be tested.';

$lang['module_sfs_called_url'] = 'Called URL';
$lang['module_sfs_server_response'] = 'Server Response';
$lang['module_sfs_message_success'] = 'Success';
$lang['module_sfs_message_failure'] = 'Failure';

$lang['module_sfs_howto_text_1'] = '<p>Stop Form Spam uses the <a href="http://www.stopforumspam.com" target="_blank">http://www.stopforumspam.com</a> service, a database of known spam emails and IPs.<br/>You can simply use it or use it AND report automatically to the service.</p>';
$lang['module_sfs_howto_text_2'] = 'To setup the Stop Form Spam module :<br/>1. Register here : <a href="http://www.stopforumspam.com/forum/register.php" target="_blank">http://www.stopforumspam.com/forum/register.php</a><br/>2. Get one API key : <a href=" http://www.stopforumspam.com/signup" target="_blank"> http://www.stopforumspam.com/signup</a><br/>3. Fill the Settings Form<br/>4. Add the events you setup to your Form process code';


// Help
$lang['module_sfs_track_help'] = 'If checked, will send the spammer data to the services DB';
$lang['module_sfs_evidence_input_help'] = 'Form field name to use as evidence of spamming (eg. message)';
$lang['module_sfs_username_input_help'] = 'Form field names to use as username (can be more than one, coma separated)';
$lang['module_sfs_events_help'] = 'Events to register on (can be more than one, coma separated)';
$lang['module_sfs_api_key_help'] = 'Only needed if you want to track spammers (submit spam data to used services DB)';

