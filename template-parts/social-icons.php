<ul class="social-icons">
    <?php $facebook = get_field('facebook', 'options'); ?>
    <?php if($facebook){ ?>
        <li>
            <a href="<?php echo $facebook; ?>" target="_blank">
                <?php get_template_part('template-parts/social/facebook'); ?>
            </a>
        </li>
    <?php } ?>
    <?php $instagram = get_field('instagram', 'options'); ?>
    <?php if($instagram){ ?>
        <li>
            <a href="<?php echo $instagram; ?>" target="_blank">
                <?php get_template_part('template-parts/social/instagram'); ?>
            </a>
        </li>
    <?php } ?>
    <?php $linkedin = get_field('linkedin', 'options'); ?>
    <?php if($linkedin){ ?>
        <li>
            <a href="<?php echo $linkedin; ?>" target="_blank">
                <?php get_template_part('template-parts/social/linkedin'); ?>
            </a>
        </li>
    <?php } ?>
    <?php $twitter = get_field('twitter', 'options'); ?>
    <?php if($twitter){ ?>
        <li>
            <a href="<?php echo $twitter; ?>" target="_blank">
                <?php get_template_part('template-parts/social/twitter'); ?>
            </a>
        </li>
    <?php } ?>
    <?php $youtube = get_field('youtube', 'options'); ?>
    <?php if($youtube){ ?>
        <li>
            <a href="<?php echo $youtube; ?>" target="_blank">
                <?php get_template_part('template-parts/social/youtube'); ?>
            </a>
        </li>
    <?php } ?>
    <?php $dribbble = get_field('dribbble', 'options'); ?>
    <?php if($dribbble){ ?>
        <li>
            <a href="<?php echo $dribbble; ?>" target="_blank">
                <?php get_template_part('template-parts/social/dribbble'); ?>
            </a>
        </li>
    <?php } ?>
    <?php $behance = get_field('behance', 'options'); ?>
    <?php if($behance){ ?>
        <li>
            <a href="<?php echo $behance; ?>" target="_blank">
                <?php get_template_part('template-parts/social/behance'); ?>
            </a>
        </li>
    <?php } ?>
    <?php $tiktok = get_field('tiktok', 'options'); ?>
    <?php if($tiktok){ ?>
        <li>
            <a href="<?php echo $tiktok; ?>" target="_blank">
                <?php get_template_part('template-parts/social/tiktok'); ?>
            </a>
        </li>
    <?php } ?>
</ul>