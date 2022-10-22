<?php

  include_once 'webhook_class.php';

  $tg_bot_token = "5724275514:AAGmKGX4aGOznOVw6JI8FB4OMNo8dxuQopk";


  $Telegram_Cli = new Telegram_Cli_Class($tg_bot_token);

  $Webhook = new Webhook_Class();


  $Webhook->Set_Type('telegram');
  $Webhook->Get_Data();
  $Webhook->Parse_Data();
  $Webhook->Parse_Tokens();

  if ($Webhook->is_Out())
  {
    $Telegram_Cli->Send($Webhook->user_id, $Webhook->out_msg);
  }





?>
