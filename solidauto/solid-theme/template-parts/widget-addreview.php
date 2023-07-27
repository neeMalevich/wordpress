<div id="add-review" class="list-single-main-item fl-wrap block_box">
    <div class="list-single-main-item-title fl-wrap">
        <span><?php echo $args['title']; ?></span>
    </div>
    <div class="add-review-box">
        <form class="add-review custom-form">
            <fieldset>
                <div class="list-single-main-item_content fl-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label><i class="fal fa-user"></i></label>
                            <input type="text" required name="author" placeholder="Ваше имя *">
                            <div class="clearfix"></div>
                            <label><i class="fal fa-phone"></i> </label>
                            <input type="tel" autocomplete="on" required name="phone" placeholder="Телефон *">
                            <div class="listsearch-input-item">
                                <select data-placeholder="СТО" required name="rating" class="chosen-select no-search-select nice-select">
                                    <option selected value="5">Превосходно ⭐⭐⭐⭐⭐</option>
                                    <option  value="4">Отлично ⭐⭐⭐⭐</option>
                                    <option  value="3">Нормально ⭐⭐⭐</option>
                                    <option  value="2">Плохо ⭐⭐</option>
                                    <option  value="1">Очень плохо ⭐</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <textarea type="text" name="review" required minlength="20" placeholder="Текст вашего отзыва *"></textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="city" value="<?php echo get_the_terms( get_the_ID(), 'city' )[0]->term_id; ?>">
                    <input type="hidden" name="station" value="<?php echo get_the_ID(); ?>">
                    <input type="hidden" name="station_text" value="<?php echo get_the_title(); ?>">
                    <button type="submit" class="btn  color2-bg  float-btn">Отправить отзыв</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>