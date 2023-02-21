<?php  if (count($errors) > 0) : ?>
    <div class="bg-red-100 rounded-lg py-5 px-6 text-sm text-red-700 mb-3" role="alert">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>