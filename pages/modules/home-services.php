<?php
	$ourServices = get_field('our_services');
	if( $ourServices ): ?>
    <section class="hm-services">
        <div class="container hm-services__top">
            <div class="row">
                <div class="col">
                    <h2><?=$ourServices['title']?></h2>
                    <div class="hm-services__top-paragraph">
	                    <?=$ourServices['description']?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container hm-services__middle">
            <div class="row">
                <div class="col">
                    <ul class="hm-services__middle-body">
                    <?php for ($i=1; $i <= 5; $i++):
		            if( !empty($ourServices["service_$i"]['name']) ): ?>
                        <li>
                            <h3><?=$ourServices["service_$i"]['name']?></h3>
			                <?php if ($ourServices["service_$i"]['image']): ?>
                                <div class="service-image">
                                    <?php if( $ourServices["service_$i"]['image'] ):?>
                                        <img src="<?= esc_url( $ourServices["service_$i"]['image']['url'] ) ?>" alt="<?= esc_attr( $ourServices["service_$i"]['image']['alt'] ) ?>">
                                    <?php endif;?>
                                </div>
			                <?php endif;?>
                        </li>
		            <?php endif; endfor;?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>