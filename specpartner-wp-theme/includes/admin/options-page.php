<?php

function sp_theme_opts_page() {
    $theme_opts      =  get_option('sp_opts');
    ?>
    <div class="wrap">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Опции Темы'; ?>
                </h3>
            </div>
            <div class="panel-body">
                <?php
                if(isset($_GET['status']) && $_GET['status'] == 1) {
                    ?>
                    <div class="alert alert-success">Успех!</div>
                    <?php
                }
                ?>
                <form method="post" action="admin-post.php">
                    <input type="hidden" name="action" value="sp_save_options">
                    <?php wp_nonce_field('sp_options_verify'); ?>
                    <h4>Основные Опции</h4>

                    <h5>Опции контактных форм (укажите шорткоды, генерируемые плагином Contact Form 7)</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Шорткод формы калькулятора стоимости</label><br>
                            <input type="text" name="sp_input_calc_form_shortcode"
                                   value="<?php
                                   $calc_form_shortcode = html_entity_decode(htmlentities($theme_opts['calc_form_shortcode']));
                                   echo $calc_form_shortcode;
                                   ?>" style="width: 80%">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Шорткод формы заявки на получение бизнес-плана</label><br>
                            <input type="text" name="sp_input_get_plan_form_shortcode"
                                   value="<?php
                                   $get_plan_form_shortcode = html_entity_decode(htmlentities($theme_opts['get_plan_form_shortcode']));
                                   echo $get_plan_form_shortcode;
                                   ?>" style="width: 80%">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Шорткод формы заказа обратного звонка</label><br>
                            <input type="text" name="sp_input_get_call_form_shortcode"
                                   value="<?php
                                   $get_call_form_shortcode = html_entity_decode(htmlentities($theme_opts['get_call_form_shortcode']));
                                   echo $get_call_form_shortcode;
                                   ?>" style="width: 80%">
                        </div>
                    </div>

                    <h5>Опции хедера</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Контактный телефон, указанный в хедере (со знаком плюс и кодом страны)</label><br>
                            <input type="text" name="sp_input_header_phone"
                                   value="<?php
                                   $header_phone = $theme_opts['header_phone'];
                                   echo $header_phone;
                                   ?>" style="width: 80%">
                        </div>
                    </div>
                    

                    <br><br><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?php echo 'Сохранить'; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}