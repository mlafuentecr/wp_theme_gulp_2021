<?php
if(isset($_SERVER['HTTPS'])){
  $server = $_SERVER['HTTPS'];
}else{
  $server = $_SERVER['HTTP_HOST'];
}


?>
<div class="info-bar">

  <a class="mlb icon" href="<?php  $server; ?>/deportes/?League=6&SubLeague=5">mlb </a>
  <a class="nba icon" href="<?php $server; ?>/deportes/?League=3&SubLeague=3">nba </a>
  <a class="nfl icon" href="<?php $server; ?>/deportes/?League=18&SubLeague=609">nfl </a>
  <a class="uefa icon" href="<?php $server; ?>/deportes/?League=7&SubLeague=176">UEFA - LIGA DE
    CAMPEONES </a>
  <a class="uefa icon" href="<?php $server; ?>/deportes/?League=7&SubLeague=176">UEFA - EUROPA LEAGUE
  </a>

</div>
