
<?php
  $files=scandir("uploads");
  for($a=2;$a<count($files);$a++)
  {
    ?>
    <p>
        <?php echo $files[$a];?>
        <a href="uploads/<?php echo $files[$a];?>" download="<?php echo $files[$a];?>">
        Download
        </a>
        
    </p>
    <?php
  }
  ?>