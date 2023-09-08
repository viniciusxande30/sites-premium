<?php

define('LOGOTIPO', 'rs-web.png');
define('LOGOTIPO_W', 'rs-web_w.png');
define('SITE_NAME', 'RS WEB');
define('WHATSAPP_NUMBER', '(12) 99160-9176');
define('WHATSAPP_LINK', 'https://wa.me/55'. str_replace(['(', ')', ' ', '-'], '', WHATSAPP_NUMBER) .'?text=Olá '. SITE_NAME .', desejo fazer um site profissional para a minha empresa!');
define('EMAIL_TEXT', 'comercial2@rsweb.com.br');
define('EMAIL_LINK', 'mailto:'. EMAIL_TEXT);
define('PHONE_NUMBER', '000-0000');
define('PHONE_LINK', 'tel:'. str_replace(['(', ')', ' ', '-'], '', PHONE_NUMBER));
define('MAP_LINK', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117047.91983564492!2d-46.453501456640616!3d-23.541582599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7a722e7c3edd%3A0x4fd38271ba0c1d50!2sTechLab%20Solu%C3%A7%C3%B5es%20em%20Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1694189740756!5m2!1spt-BR!2sbr');
define('DOMAIN', str_replace('cotacao.', '', $_SERVER['SERVER_NAME']));

define('SERVICES', [
    [
        'image' => '',
        'title' => 'Sites Profissionais para Advogados',
        'text'  => 'Destaque-se na advocacia com um site profissional que reflete a excelência do seu trabalho.'
    ],
    [
        'image' => '',
        'title' => 'Sites Profissionais para Contadores',
        'text'  => 'Na contabilidade, a credibilidade e a precisão são fundamentais. Nossos sites profissionais são projetados para refletir a sua expertise e comprometimento com a exatidão financeira.'
    ],
    [
        'image' => '',
        'title' => 'Sites Profissionais para Dentistas',
        'text'  => 'Sorria para o sucesso com um site profissional que espelhe a qualidade dos seus serviços odontológicos.'
    ],
    [
        'image' => '',
        'title' => 'Sites para Transportadoras',
        'text'  => 'Maximize a eficiência logística da sua transportadora com um site profissional. '
    ],
    [
        'image' => '',
        'title' => 'Sites para Salões de Beleza',
        'text'  => 'Eleve o estilo do seu salão de beleza com um site profissional. '
    ],
    [
        'image' => '',
        'title' => 'Sites para Nichos Personalizados',
        'text'  => 'Entre em Contato com Nossos Melhores Especialistas que Avaliaremos seu Nicho para Indicar os Melhores Layouts de Nosso Portifólio para Você'
    ]
]);
define('FEEDBACKS', [
    [
        'image' => 'feedback1.png',
        'name'  => 'Marcelo Maximo',
        'stars' => '5',
        'text'  => 'Lugar sensacional, serviço de primeira,  profissional experiente e comprometido. Ótimo custo benefício. Vale a pena.',
    ],
    [
        'image' => 'feedback2.png',
        'name'  => 'Marcelo Santana',
        'stars' => '5',
        'text'  => 'Excelentes profissionais e serviço de qualidade.        ',
    ],
    [
        'image' => 'feedback3.png',
        'name'  => 'Eliseu Dias',
        'stars' => '5',
        'text'  => 'Ótimo atendimento e serviço de qualidade...Recomendo!',
    ]
]);
