<!-- FT Homepage Hero -->
<div class="container">
        <div class="hero-left">
        <?php if($heroHPHeader = get_sub_field('ft_hero_hp_header')) {
            // Echo the hero header
            ?>
            <h1 class="w-icon"><?php echo $heroHPHeader; ?></h1>
            <?php
        } ?>

        <?php if($heroHPSubheader = get_sub_field('ft_hero_hp_subheader')) {
            // Echo the hero header
            ?>
            <div class="ft-subheader"><?php echo $heroHPSubheader; ?></div>
            <?php
        } ?>

        </div>

        <div class="hero-right">
            <?php if($foregroundImg = get_sub_field('ft_hero_hp_frg_img')) {
                ?>
                <img src="<?php echo $foregroundImg['url'] ?>" alt=<?php echo $foregroundImg['alt'] ?> />
                <?php
            } ?>
        </div>
</div>