<?php  if (count($errors) > 0) : ?>
    
        <?php foreach ($errors as $error) : ?>
            <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3" role="alert">
                <p><?php echo $error ?></p>
            </div>
        <?php endforeach ?>

<?php  endif ?>