<?php if (!defined('FW')) {
    die('Forbidden');
}
$options = array(

    'title1' => array(
        'type' => 'text',
        'value' => 'Что вы получите',
        'label' => __('Заголовок', '{domain}'),
        'desc' => __('Заголовок', '{domain}'),
    ),

    'list1' => array(
        'type'  => 'addable-option',
        'label' => __('Приемущество', '{domain}'),
        'option' => array( 'type' => 'text' ),
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
    ),
    
);

