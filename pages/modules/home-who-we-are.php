<?php
	$whoWeAre = get_field('who_we_are');
	if( $whoWeAre ): ?>
    <section class="hm-who">
        <div class="container hm-who__top">
            <div class="row">
                <div class="col">
                    <h2><?=$whoWeAre['title']?></h2>
                    <p><?=$whoWeAre['short_description']?></p>
                </div>
            </div>
        </div>
        <div class="container hm-who__middle">
            <?php if( !empty($whoWeAre['beautician_1']) ): ?>
                <div class="row">
                <div class="col-lg-5">
                    <div class="hm-who__middle-image">
                        <img src="<?= esc_url( $whoWeAre['beautician_1']['photo']['url'] ) ?>" alt="<?= esc_attr( $whoWeAre['beautician_1']['photo']['alt'] ) ?>">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hm-who__middle-body">
                        <h3><?=$whoWeAre['beautician_1']['name']?></h3>
                        <p><?=$whoWeAre['beautician_1']['introduction']?></p>
                        <div class="btn-cta">
                            <a href="<?= esc_url( $whoWeAre['beautician_1']['link']['url'] ) ?>" class="btn-cta" target="<?= esc_html( $whoWeAre['beautician_1']['link']['target'] ) ?>"><?= esc_html( $whoWeAre['beautician_1']['link']['title'] ) ?></a>
                        </div>
                    </div>
                </div>
            </div>
			<?php endif; ?>
            <?php if( !empty($whoWeAre['beautician_2']) ): ?>
                <div class="row">
                <div class="col-lg-7">
                    <div class="hm-who__middle-body">
                        <h3><?=$whoWeAre['beautician_2']['name']?></h3>
                        <p><?=$whoWeAre['beautician_2']['introduction']?></p>
                        <div class="btn-cta">
                            <a href="<?= esc_url( $whoWeAre['beautician_2']['link']['url'] ) ?>" class="btn-cta" target="<?= esc_html( $whoWeAre['beautician_2']['link']['target'] ) ?>"><?= esc_html( $whoWeAre['beautician_2']['link']['title'] ) ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hm-who__middle-image">
                        <img src="<?= esc_url( $whoWeAre['beautician_2']['photo']['url'] ) ?>" alt="<?= esc_attr( $whoWeAre['beautician_2']['photo']['alt'] ) ?>">
                    </div>
                </div>
            </div>
			<?php endif; ?>
        </div>
    </section>
<?php endif; ?>