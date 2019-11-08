<?php
/*
Plugin Name: Module 4
Description: Module 4 - Ourstory
Author: Minh Tien
Version: 1.0
Author URI: http://google.com
*/

/* ----------------------------- TẠO SIDEBAR---------------------------*/

function Module_four()
{
    $module_four = array(
        'name' => __('Module 4 Sidebar', 'minhtien'),
        'id' => 'module-4',
        'description' => 'Header sidebar for minhtien theme',
        'class' => 'module-4',
        'before_title' => '<div class="widget_module4">',

        'after_title' => '</div>'
    );
    register_sidebar($module_four);
}
add_action('init', 'Module_four');



/* ----------------------------- Khởi tạo widget item---------------------------*/
add_action('widgets_init', 'create_modulebon_widget');
function create_modulebon_widget()
{
    register_widget('Modulebon_Widget');
}


/*
    Tạo class Fanpge_Widget
    */
class Modulebon_Widget extends WP_Widget
{
    public $instance;

    /*
     * Thiết lập widget: đặt tên, base ID
     */

    public function __construct()
    {
        parent::__construct(
            'module4_widget', // id của widget
            'Module 4 Widget', // tên của widget

            array(
                'description' => 'Module 4 Widget' // mô tả
            )
        );
    }



    /**
     * Tạo form option cho widget
     */
    public function form($instance)
    {
        //Biến tạo các giá trị mặc định trong form
        $formmd4 = array(
            'title' => 'title',
            'p1' => 'p1',
            'p2' => 'p2',
            'p3' => 'p3'
        );

        //Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
        $instance = wp_parse_args($instance, $formmd4);
        // echo "<pre>";
        // var_dump($instance);
        //Tạo biến riêng cho giá trị mặc định trong mảng $default
        // esc_attr : loại bỏ các ký tự đặc biệt khi nhập vào
        $title = esc_attr($instance['title']);
        $p1 = esc_attr($instance['p1']);
        $p2 = esc_attr($instance['p2']);
        $p3 = esc_attr($instance['p3']);

        echo ('Title:<input type="text" class="widefat" name="' . $this->get_field_name('title') . '" value="' . $title . '"  />');
        echo ('p1 :<input type="text" class="widefat"  name="' . $this->get_field_name('p1') . '" value="' . $p1 . '"  />');
        echo ('p2  :<input type="text" class="widefat" name="' . $this->get_field_name('p2') . '" value="' . $p2 . '"  />');
        echo ('p3 :<input type="text" class="widefat" name="' . $this->get_field_name('p3') . '" value="' . $p3 . '"  />');
    }

    /**
     * save widget form
     */

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['p1'] = $new_instance['p1'];
        $instance['p2'] = $new_instance['p2'];
        $instance['p3'] = $new_instance['p3'];

        return $instance;
    }

    /**
     * Show widget
     */

    public function widget($args, $instance)
    {
        extract($args);
        echo '<ul class="module4_ul">';
        echo $before_widget;
        echo '<div class="type-4">
        <div class="container">
            <h3 class="title_ourstory">' . $instance['title'] . '</h3>
            <div class="ourstory_content">
                <p>' . $instance['p1'] . '</p>
                <p>' . $instance['p2'] . '</p>
                <p>' . $instance['p3'] . '</p>
            </div>
        </div>
    </div>'; ?>
    
                <?php

                        echo $after_widget;
                        echo '</ul>';
                    }
                }
