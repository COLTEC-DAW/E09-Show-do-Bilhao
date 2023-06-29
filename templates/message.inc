<?php if (isset($message)): ?>

    <div class="alert"> 
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <?=$message?>
    </div>

<?php endif; ?>