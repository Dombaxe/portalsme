<?php

function smewp_customize_register($wp_customize){
    //rodape
    $wp_customize -> add_section('footer', array(
        'title' => __('rodape', 'SME'),
        'description' => sprintf(__('Opções para o rodapé','SME')),
        'priority' => 20

    ));

    $wp_customize -> add_setting('footer_title', array(
        'default' => _x('Endereço:', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_title',array(
       'label' => __('Titulo do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 1
    ));

    $wp_customize -> add_setting('footer_text', array(
        'default' => _x('R. Amilcar Cabral', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text1', array(
        'default' => _x('Luanda - ANGOLA', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text1',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text2', array(
        'default' => _x('Município de Luanda', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text2',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text3', array(
        'default' => _x('Distrito da Maianga', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text3',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text4', array(
        'default' => _x('SME POR DENTRO', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text4',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text5', array(
        'default' => _x('SME', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text5',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text6', array(
        'default' => _x('Missão', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text6',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text7', array(
        'default' => _x('Histórico', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text7',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text8', array(
        'default' => _x('Organigrama', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text8',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text9', array(
        'default' => _x('Perfil do DG', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text9',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text10', array(
        'default' => _x('Galeria dos DGS', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text10',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text11', array(
        'default' => _x('Consulta de Processos', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text11',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text12', array(
        'default' => _x('Pedido de Visto', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text12',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text13', array(
        'default' => _x('Registo de Hospedes', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text13',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text14', array(
        'default' => _x('Postos de Atendimento', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text14',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text15', array(
        'default' => _x('SERVIÇOS', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text15',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text16', array(
        'default' => _x('COMUNICAÇÃO', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text16',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text17', array(
        'default' => _x('Notícias', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text17',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    
    $wp_customize -> add_setting('footer_text18', array(
        'default' => _x('Publicações', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text18',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    
    $wp_customize -> add_setting('footer_text19', array(
        'default' => _x('Comunicados de Impresa', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text19',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text20', array(
        'default' => _x('Galerias de Fotos', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text20',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));

    $wp_customize -> add_setting('footer_text21', array(
        'default' => _x('SME © 2019 - Todos Direitos Reservados', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text21',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));
    
    $wp_customize -> add_setting('footer_text22', array(
        'default' => _x('Louvores e Reclamações', 'SME'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text22',array(
       'label' => __('Texto do rodape', 'SME'),
       'section' => 'footer',
       'priority' => 2
    ));
 
    
}

add_action('customize_register','smewp_customize_register');

?>