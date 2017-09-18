<div class="language">
  <ul class="list">
      <?php foreach($languages as $key=>$value) {
        echo '<li><a href="javascript://" onclick="change_language(\'',$key,'\')">',$languages[$key],'</a></li>';
    } ?></ul>
  <div class="title"><?php echo $LANG['language'];?></div>
</div>
