<?php
  if (empty($pos)): ?>
    <h1 class="text-center p-3">Prova de conceitos</h1>
  <?php
    else :
    $progress = $pos*20;
  ?>
    <h1 class="text-center p-3">Prova de conceitos</h1>
    <div class="progress">
      <div class="bg-success progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php $progress ?>%"></div>
    </div>
  <?php endif; ?>
