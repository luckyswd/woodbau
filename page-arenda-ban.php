<?php
get_header();

$first_block = get_field('first_block');
$second_block = get_field('second_block');
$third_block = get_field('third_block');
$fourth_block = get_field('fourth_block');
$fifth_block = get_field('fifth_block');
$sixth_block = get_field('sixth_block');

?>
<section class="wood-arenda">
  <?php if (!empty($first_block)) : ?>
      <div class="first-section">
          <div class="container">
              <div class="row">
                  <div class=" col-md-12 col-lg-6 col-xl-6 offset-lg-1">
                      <div class="left-side">
                        <?php if (!empty($first_block['headline'])) : ?>
                            <div class="left-side__title">
                              <?= $first_block['headline'] ?>
                                <span><?= $first_block['subheadline'] ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($first_block['text'])) : ?>
                            <p class="left-side__text">
                              <?= $first_block['text'] ?> </p>
                        <?php endif; ?>
                        <?php if (!empty($first_block['block_attr'])) : ?>
                            <div class="left-side__content">
                                <div class="row">
                                  <?php foreach ($first_block['block_attr'] as $key => $attr) : ?>
                                      <div class="col-12 col-sm-6">
                                          <div class="side-wrapper">
                                            <?php if (!empty($attr['number'])) : ?>
                                                <div class="side-wrapper__left">
                                                    <span>+</span><?= $attr['number'] ?><?php if ($key === 3) : ?><span
                                                            class="proc">%</span><?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($attr['headline'])) : ?>
                                                <div class="side-wrapper__right">
                                                  <?= $attr['headline'] ?>
                                                </div>
                                            <?php endif; ?>
                                          </div>
                                      </div>
                                  <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($first_block['btn'])) : ?>
                            <a href="<?= $first_block['btn']['url'] ?>"
                               class="btn"><?= $first_block['btn']['title'] ?></a>
                        <?php endif; ?>
                      </div>
                  </div>
                  <div class="d-none d-md-none d-sm-none d-lg-block col-5 col-xl-5">
                      <div class="side-right">
                        <?php if (!empty($first_block['image'])) : ?>
                            <img src="<?= $first_block['image']['url'] ?>" alt="venik"/>
                        <?php endif; ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  <?php endif; ?>
  <?php if (!empty($second_block)) : ?>
      <div class="second-section">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-lg-4 order-lg-first dpf">
                      <div class="col no-padding">
                          <div class="peculiarities peculiarities-first">
                            <?php if (!empty($second_block['first_peculiarity']['image'])) : ?>
                                <div class="peculiarities__icon">
                                    <img src="<?= $second_block['first_peculiarity']['image']['url'] ?>"
                                         alt=""/>
                                </div>
                            <?php endif; ?>
                              <div class="peculiarities__content">
                                <?php if (!empty($second_block['first_peculiarity']['headline'])) : ?>
                                    <div class="peculiarities__title"><?= $second_block['first_peculiarity']['headline'] ?></div>
                                <?php endif; ?>
                                <?php if (!empty($second_block['first_peculiarity']['subheadline'])) : ?>
                                    <p><?= $second_block['first_peculiarity']['subheadline'] ?></p>
                                <?php endif; ?>
                              </div>
                          </div>
                      </div>
                      <div class="col no-padding">
                          <div class="peculiarities peculiarities-second">
                            <?php if (!empty($second_block['second_peculiarity']['image'])) : ?>
                                <div class="peculiarities__icon">
                                    <img src="<?= $second_block['second_peculiarity']['image']['url'] ?>"
                                         alt=""/>
                                </div>
                            <?php endif; ?>
                              <div class="peculiarities__content">
                                <?php if (!empty($second_block['second_peculiarity']['headline'])) : ?>
                                    <div class="peculiarities__title"><?= $second_block['second_peculiarity']['headline'] ?></div>
                                <?php endif; ?>
                                <?php if (!empty($second_block['second_peculiarity']['subheadline'])) : ?>
                                    <p><?= $second_block['second_peculiarity']['subheadline'] ?></p>
                                <?php endif; ?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12 col-lg-4 order-first no-padding">
                    <?php if (!empty($second_block['image'])) : ?>
                        <div class="peculiarities-img">
                            <img src="<?= $second_block['image']['url'] ?>" alt="banya"/>
                        </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-6 col-lg-4 dpf">
                      <div class="col no-padding">
                          <div class="peculiarities peculiarities-third">
                            <?php if (!empty($second_block['third_peculiarity']['image'])) : ?>
                                <div class="peculiarities__icon">
                                    <img src="<?= $second_block['third_peculiarity']['image']['url'] ?>"
                                         alt=""/>
                                </div>
                            <?php endif; ?>
                              <div class="peculiarities__content">
                                <?php if (!empty($second_block['third_peculiarity']['headline'])) : ?>
                                    <div class="peculiarities__title"><?= $second_block['third_peculiarity']['headline'] ?></div>
                                <?php endif; ?>
                                <?php if (!empty($second_block['third_peculiarity']['subheadline'])) : ?>
                                    <p><?= $second_block['third_peculiarity']['subheadline'] ?></p>
                                <?php endif; ?>
                              </div>
                          </div>
                      </div>
                      <div class="col no-padding">
                          <div class="peculiarities peculiarities-fourth">
                            <?php if (!empty($second_block['fourth_peculiarity']['image'])) : ?>
                                <div class="peculiarities__icon">
                                    <img src="<?= $second_block['fourth_peculiarity']['image']['url'] ?>"
                                         alt=""/>
                                </div>
                            <?php endif; ?>
                              <div class="peculiarities__content">
                                <?php if (!empty($second_block['fourth_peculiarity']['headline'])) : ?>
                                    <div class="peculiarities__title"><?= $second_block['fourth_peculiarity']['headline'] ?></div>
                                <?php endif; ?>
                                <?php if (!empty($second_block['fourth_peculiarity']['subheadline'])) : ?>
                                    <p><?= $second_block['fourth_peculiarity']['subheadline'] ?></p>
                                <?php endif; ?>
                              </div>
                          </div>
                      </div>
                  </div>
                <?php if (!empty($second_block['btn'])) : ?>
                    <div class="col">
                        <div class="peculiarities-button">
                            <a href="<?= $second_block['btn']['url'] ?>"
                               class="btn"><?= $second_block['btn']['title'] ?></a>
                        </div>
                    </div>
                <?php endif; ?>
              </div>
          </div>
      </div>
  <?php endif; ?>
  <?php if (!empty($third_block)) : ?>
      <div class="third-section">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-12 col-sm-6 col-md-4 col-xl-3 offset-xl-1">
                    <?php if (!empty($third_block['baths_rental_1'])) : ?>
                        <div class="rentals-set">
                          <?php if (!empty($third_block['baths_rental_1']['headline'])) : ?>
                              <div class="rentals-set__title"><?= $third_block['baths_rental_1']['headline'] ?></div>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_1']['subheadline'])) : ?>
                              <p><?= $third_block['baths_rental_1']['subheadline'] ?></p>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_1']['schedule'])) : ?>
                              <div class="rentals-set__day"><?= $third_block['baths_rental_1']['schedule'] ?></div>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_1']['btn'])) : ?>
                              <a href="<?= $third_block['baths_rental_1']['btn']['url'] ?>"
                                 class="btn"><?= $third_block['baths_rental_1']['btn']['title'] ?></a>
                          <?php endif; ?>
                        </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 justify-content-center">
                    <?php if (!empty($third_block['baths_rental_2'])) : ?>
                        <div class="rentals-set">
                          <?php if (!empty($third_block['baths_rental_2']['headline'])) : ?>
                              <div class="rentals-set__title"><?= $third_block['baths_rental_2']['headline'] ?></div>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_2']['subheadline'])) : ?>
                              <p><?= $third_block['baths_rental_2']['subheadline'] ?></p>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_2']['schedule'])) : ?>
                              <div class="rentals-set__day"><?= $third_block['baths_rental_2']['schedule'] ?></div>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_2']['btn'])) : ?>
                              <a href="<?= $third_block['baths_rental_2']['btn']['url'] ?>"
                                 class="btn"><?= $third_block['baths_rental_2']['btn']['title'] ?></a>
                          <?php endif; ?>
                        </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <?php if (!empty($third_block['baths_rental_3'])) : ?>
                        <div class="rentals-set">
                          <?php if (!empty($third_block['baths_rental_3']['headline'])) : ?>
                              <div class="rentals-set__title"><?= $third_block['baths_rental_3']['headline'] ?></div>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_3']['subheadline'])) : ?>
                              <p><?= $third_block['baths_rental_3']['subheadline'] ?></p>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_3']['schedule'])) : ?>
                              <div class="rentals-set__day"><?= $third_block['baths_rental_3']['schedule'] ?></div>
                          <?php endif; ?>
                          <?php if (!empty($third_block['baths_rental_3']['btn'])) : ?>
                              <a href="<?= $third_block['baths_rental_3']['btn']['url'] ?>"
                                 class="btn"><?= $third_block['baths_rental_3']['btn']['title'] ?></a>
                          <?php endif; ?>
                        </div>
                    <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
  <?php endif; ?>
  <?php if (!empty($fourth_block)) : ?>
      <div class="fourth-section">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-lg-10 offset-lg-1">
                      <div class="rental">
                          <div class="rental__left">
                            <?php if (!empty($fourth_block['headline'])) : ?>
                                <div class="rental__title">
                                  <?= $fourth_block['headline'] ?> <?php if (!empty($fourth_block['subheadline'])) : ?>
                                        <span><?= $fourth_block['subheadline'] ?></span>
                                  <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($fourth_block['text'])) : ?>
                                <div class="rental__text"><?= $fourth_block['text'] ?></div>
                            <?php endif; ?>
                            <?php if (!empty($fourth_block['btn'])) : ?>
                                <a href="<?= $fourth_block['btn']['url'] ?>"
                                   class="btn btn-white"><?= $fourth_block['btn']['title'] ?></a>
                            <?php endif; ?>
                          </div>
                          <div class="rental__right">
                            <?php if (!empty($fourth_block['image'])) : ?>
                                <img src="<?= $fourth_block['image']['url'] ?>"
                                     alt=""/>
                            <?php endif; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  <?php endif; ?>
  <?php if (!empty($fifth_block)) : ?>
      <div class="fifth-section">
          <div class="container">
              <div class="row">
                  <div class="col offset-xl-1">
                    <?php if (!empty($fifth_block['headline'])) : ?>
                        <div class="section-title"><?= $fifth_block['headline'] ?></div>
                    <?php endif; ?>
                  </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-6 col-sm-4 col-xl-3 offset-xl-1">
                      <div class="service">
                        <?php if (!empty($fifth_block['delivery']['headline'])) : ?>
                            <div class="service__title"><?= $fifth_block['delivery']['headline'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($fifth_block['delivery']['subheadline'])) : ?>
                            <div class="service__text"><?= $fifth_block['delivery']['subheadline'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($fifth_block['delivery']['info'])) : ?>
                            <div class="service__price"><?= $fifth_block['delivery']['info'] ?></div>
                        <?php endif; ?>
                      </div>
                  </div>
                  <div class="col-6 col-sm-4">
                      <div class="service">
                        <?php if (!empty($fifth_block['сleaning']['headline'])) : ?>
                            <div class="service__title"><?= $fifth_block['сleaning']['headline'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($fifth_block['сleaning']['subheadline'])) : ?>
                            <div class="service__text"><?= $fifth_block['сleaning']['subheadline'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($fifth_block['сleaning']['info'])) : ?>
                            <div class="service__price"><?= $fifth_block['сleaning']['info'] ?></div>
                        <?php endif; ?>
                      </div>
                  </div>
                  <div class="col-6 col-sm-4 col-xl-3">
                      <div class="service">
                        <?php if (!empty($fifth_block['firewood']['headline'])) : ?>
                            <div class="service__title"><?= $fifth_block['firewood']['headline'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($fifth_block['firewood']['subheadline'])) : ?>
                            <div class="service__text"><?= $fifth_block['firewood']['subheadline'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($fifth_block['firewood']['info'])) : ?>
                            <div class="service__price"><?= $fifth_block['firewood']['info'] ?></div>
                        <?php endif; ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  <?php endif; ?>
  <?php if (!empty($sixth_block)) : ?>
      <div class="sixth">
          <div class="container">
              <div class="row">
                  <div class="col offset-xl-1">
                    <?php if (!empty($sixth_block['headline'])) : ?>
                        <div class="section-title"><?=$sixth_block['headline']?></div>
                    <?php endif;?>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 col-xl-11 offset-xl-1">
                    <?php if (!empty($sixth_block['gallery'])) : ?>
                        <div class="grid grid-masonry">
                          <?php foreach ($sixth_block['gallery'] as $image) : ?>
                              <div class="grid-item grid-masonry-item grid-item--width2"><img
                                          src="<?=$image['url']?>" alt="g1">
                              </div>
                          <?php endforeach;?>
                        </div>
                    <?php endif;?>
                  </div>
              </div>
          </div>
      </div>
  <?php endif;?>
  <?php
  get_footer();
  ?>

</section>

