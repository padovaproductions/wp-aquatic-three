<?php if (function_exists('icl_get_languages')) {
    $site_languages = icl_get_languages('skip_missing=0'); 
    
    if(count($site_languages) > 1){ ?>

        <ul class="language-selector">

            <?php foreach ($site_languages as $key => $l){?>
                <li class="language-selector__item">
                    <a href="<?php echo $l['url']; ?>">
                        <?php echo $l['code']; ?>
                    </a>
                </li>
            <?php } ?>

        </ul>
    
    <?php } ?> 
<?php } ?>