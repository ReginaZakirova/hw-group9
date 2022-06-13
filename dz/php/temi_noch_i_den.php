<?php

function smena_dnya_i_nochi()
{
    $vremya_khasov = date('H'); // записываем в переменную $vremya_khasov количество часов
    $vremya_khasov = $vremya_khasov + 2; // Что бы время было по Магнитогорскому времени ( а не по Москве)
//    echo $vremya_khasov;
    // $vremya_khasov=14;
    if ($vremya_khasov < 19 and $vremya_khasov > 7) {    // дневная тема
//         echo "дневная тема";
        $den_ili_noch = "<style>
        .blok-name,.blok-info, .blok-otziv, .flex-grid, .blok-menu {
        color: #0e0101; /* Цвет символа */
        }   
        .blok_shapka {
            background-color: #f5cf9f;
        }
        .blok-menu {
        background-color: #e8bc81;
        }
        .podblok-grid {
        background-color: #eadbb9;
        }
        a {
        color: #69C;
        }
        .flex-grid {
        background-color: #eadbb9;
        }
        .footer1 {
         background-color: #eadbb9;
        }
        .shablon_osnovnoy_blok_stranits {   /* стиль для всех маинов кроме index */
         background-color: #eadbb9;
                }
        </style>";
    } else {                                          // ночная тема
//         echo "ночная тема";
        $den_ili_noch = "<style>
        .blok-name,.blok-info, .blok-otziv, .flex-grid, .blok-menu {
        color: #fffcfc; /* Цвет символа */
        }   
        .blok_shapka {
            background-color: black;
        }
                .blok-menu {
        background-color: #5e5a59;
        }
                .podblok-grid {
        background-color: #7b7a75;
        }
                a {
        color: #a5caef;
        }
               .flex-grid {
         background-color: #7b7a75;
        }
                .footer1 {
         background-color: #7b7a75;
        }
                .shablon_osnovnoy_blok_stranits {   /* стиль для всех маинов кроме index */
         background-color: #7b7a75;
                }
        </style>";
    }
    return $den_ili_noch;
}