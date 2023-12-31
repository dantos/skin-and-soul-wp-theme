<?php
	$hero = get_field('hero');
	if( $hero ): ?>
    <section class="hm-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hm-hero__body">
                        <h1><?=$hero['title']?></h1>
                        <div class="hm-hero__body-paragraph">
	                        <?=$hero['short_description']?>
                        </div>
	                    <?php if ($hero['link']): ?>
                            <div class="btn-cta">
                                <a href="<?= esc_url( $hero['link']['url'] ) ?>" class="btn-cta" target="<?= esc_html( $hero['link']['target'] ) ?>"><?= esc_html( $hero['link']['title'] ) ?></a>
                            </div>
	                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
	                <?php if ($hero['image']): ?>
                        <div class="hm-hero__image">
                            <img src="<?= esc_url( $hero['image']['url'] ) ?>" alt="<?= esc_attr( $hero['image']['alt'] ) ?>">
                        </div>
	                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
