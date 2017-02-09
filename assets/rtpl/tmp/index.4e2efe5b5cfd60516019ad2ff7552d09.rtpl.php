<?php if(!class_exists('raintpl')){exit;}?><!--
 _____
/ ____|
| |  __  ___  _ __ ___   ___ _   _
| | |_ |/ _ \| '_ ` _ \ / _ \ | | |
| |__| | (_) | | | | | |  __/ |_| |
\______|\___/|_| |_| |_|\___|\__, |
                            __/ |
                           |___/
Gomey Corp. Hey skid, want a meme?
-->
<!DOCTYPE html>
<html>
<title>Gomey Corp.</title>
<head>
  <!-- Latest CSS and Google Fonts -->
  <link rel="stylesheet" href="/assets/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_blue.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="/bower_components/material-design-lite/material.min.js"></script>
  <!-- jQuery -->
  <script src="http://localhost/assets/jquery-3.1.1.min.js" type="text/javascript"></script>
  <!-- Logo FadeIn -->
  <script type="text/javascript">
  $(document).ready(function() {
      $('#Logo').delay(1).fadeIn(1500);
      $('#Content').delay(1).fadeIn(2500);
  });
  </script>
</head>
<body>
<center>
<img src="/assets/logo.png" id="Logo" /></br></br>
<div id="Content">
  <h1>Failing Ventures</h1></br></br>
  <form action="http://gomey.tk/forums/">
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      Forums
    </button>
  </form></br>
  <form action="http://gomey.tk/boards/">
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      Boards
    </button>
  </form></br>
  <button id="show-dialog" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored show-modal">
    <i class="material-icons">volume_up</i>
  </button>
</div></br></br></br>

Powered by gCMS 3.0 - Made by Gomey for Gomey

<dialog class="mdl-dialog">
    <div class="mdl-dialog__content">
      <p>
        <div class="cc_player" data-username="gomeyfm">Loading ...</div>
      </p>
    </div>
    <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
      <button type="button" class="mdl-button close">Dismiss</button>
    </div>
  </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showModalButton = document.querySelector('.show-modal');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showModalButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>
</body>
<script language="javascript" type="text/javascript" src="https://sirius.shoutca.st/system/player.js"></script>
</html>
