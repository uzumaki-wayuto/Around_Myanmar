<?php if(count($errors) > 0): ?>
  <div class="error">
    <?php foreach($errors as $error): ?>
      <p> <i>x</i><?php echo $error ; ?><i>!</i></p>
    <?php endforeach ?>
  </div>
<?php endif ?>
