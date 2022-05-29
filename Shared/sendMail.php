<?php
        $MailSubject = "ae"/*$_GET("subject")*/;
        $MailContent = "ae"/*$_GET("content")*/;
        $MailContent = wordwrap($MailContent, 100);
        mail("j.kavalir10@gmail.com", $MailSubject, $MailContent, "From: server");
?>