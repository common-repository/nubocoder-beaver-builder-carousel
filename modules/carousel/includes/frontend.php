<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example: 
 */

?>
<div class="nubocodeer-bb-carousel__wrapper">
    <div class="nubocodeer-bb-carousel">
        <?php
        
        if( $settings->items_type === 'shortcode' ){
            echo do_shortcode( $settings->shortcode );
        }
        
        
        if( $settings->items_type === 'default' && count( $settings->items ) > 0){
            foreach( $settings->items as $item ){
                
                if( !is_array( $item->link_options ) ){
                    $item->link_options = [];
                }
                
                if( $item->type === "custom_html" ){
                    echo "<div class='nubocodeer-bb-carousel__item'>";
                    echo wp_kses($item->html, wp_kses_allowed_html( 'post' ) );
                    echo "</div>";
                }
                else if( $item->type === "shortcode" ){
                    echo "<div class='nubocodeer-bb-carousel__item'>";
                    echo do_shortcode( $item->shortcode );
                    echo "</div>";
                }
                else{
                
                    if( $item->with_link && in_array( 'link_item', $item->link_options )  ){
                    ?>
                    <a href="<?php echo esc_attr($item->link); ?>" class='nubocodeer-bb-carousel__item' target="<?php echo esc_attr($item->link_target); ?>">
                    <?php
                    }else{
                    ?>
                    <div class='nubocodeer-bb-carousel__item'>
                    <?php    
                    }
                    ?>
                    
                        <?php
                        if( $item->label ){
                        ?>
                        <h3 class='nubocodeer-bb-carousel__item__title'>
                        <?php
                            if( $item->with_link && in_array('link_title', $item->link_options) && 
                                !in_array('link_item', $item->link_options) ){    
                        ?>
                                <a href="<?php echo esc_attr($item->link); ?>" target="<?php echo esc_attr($item->link_target); ?>"><?php echo esc_html($item->label); ?></a>
                        <?php
                            }else{
                                echo esc_html($item->label);
                            }
                        } 
                        ?>
                        </h3>
                       
                        <?php
                        if( $item->image ){
                        ?>
                        <div class="nubocodeer-bb-carousel__item__image">
                            <?php
                                if( $item->with_link && in_array('link_image', $item->link_options) && 
                                    !in_array('link_item', $item->link_options) ){    
                            ?>
                                    <a href="<?php echo esc_attr($item->link); ?>" target="<?php echo esc_attr($item->link_target); ?>"><?php echo wp_get_attachment_image( $item->image, $item->image_size ); ?></a>
                            <?php
                                }else{
                                    echo wp_get_attachment_image( $item->image, $item->image_size );
                                }
                            ?>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="nubocodeer-bb-carousel__item__content">
                            <?php
                                echo wp_kses_post($item->content);
                            ?>
                        </div>
                        
                        <?php
                        if( $item->with_link && in_array( 'link_add_text', $item->link_options ) &&
                            !in_array( 'link_item', $item->link_options ) && $item->link_text ){
                        ?>
                        <a href="<?php echo esc_attr($item->link); ?>" target="<?php echo esc_attr($item->link_target); ?>" class="nubocodeer-bb-carousel__item__more"><?php echo esc_html($item->link_text); ?></a>
                        <?php
                        }
                        ?>
                    
                    <?php
                    if( $item->with_link && in_array( 'link_item', $item->link_options )  ){
                    ?>
                    </a>
                    <?php
                    }else{
                    ?>
                    </div>
                    <?php    
                    }
                }
            }
        }
        ?>
    </div>
</div>