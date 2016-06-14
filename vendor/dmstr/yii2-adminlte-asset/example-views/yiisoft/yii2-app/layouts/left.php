<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">

                <p> <?php if(!Yii::$app->user->isGuest) {

                     echo Yii::$app->user->identity->email_admin;
                     echo '<label>'
                          . Html::beginForm(['/site/logout'], 'post', ['class' => ''])
                          . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->email_admin . ')',
                              ['class' => 'btn-link'])
                          . Html::endForm()
                          . '</label>';

                          /* echo  dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'method' => 'post', 'icon' => '', 'url' => ['/site/logout']],
                    
            ]]); */

                     }
                     else
                     {
                        echo '<label>'
                          . Html::beginForm(['/site/login'], 'post', ['class' => ''])
                          . Html::submitButton(
                            'Login',
                              ['class' => 'btn-link'])
                          . Html::endForm()
                          . '</label>';

                     }
                ?></p>
              
            </div>
        </div>

        <!-- search form 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['/site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Categoria',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/categoria'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/categoria/create'],],                            
                        ],
                    ],
                    [
                        'label' => 'Subcategoria',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/subcategoria'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/subcategoria/create'],],
                        ],
                    ],
                    [
                        'label' => 'Enlace categoria',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/enlace-cat'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/enlace-cat/create'],],
                        ],
                    ],
                    [
                        'label' => 'Empresa',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/empresa'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/empresa/create'],],
                        ],
                    ],
                    [
                        'label' => 'Usuario empresa',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/usuario-empresa'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/usuario-empresa/create'],],
                        ],
                    ],
                    [
                        'label' => 'Convenio',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/convenio'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/convenio/create'],],
                        ],
                    ],
                    [
                        'label' => 'Presupuesto',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/presupuesto'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/presupuesto/create'],],
                        ],
                    ],
                    [
                        'label' => 'Campaña',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/campana'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/campana/create'],],
                        ],
                    ],
                    [
                        'label' => 'Ubicación',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/ubicacion'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/ubicacion/create'],],
                        ],
                    ],
                    [
                        'label' => 'Descuento',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/descuento'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/descuento/create'],],
                        ],
                    ],
                    
                    [
                        'label' => 'Ubicación descuento',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/ubicacion-descuento'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/ubicacion-descuento/create'],],
                        ],
                    ],
                    [
                        'label' => 'Usuarios',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/usuario'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/usuario/create'],],
                        ],
                    ],
                    [
                        'label' => 'Rating descuentos' ,
                        'icon' => 'fa fa-share',
                        'url' => ['/rating'],
                        // 'items' => [
                        //     ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/rating'],],
                        //     ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/rating/create'],],
                        // ],
                    ],

                    [
                        'label' => 'Descuentos favoritos',
                        'icon' => 'fa fa-share',
                        'url' => ['/favorito'],
                    ],

                    [
                        'label' => 'Descuentos compartidos',
                        'icon' => 'fa fa-share',
                        'url' => ['/compartir'],
                    ],

                     [
                        'label' => 'Descuentos recordados',
                        'icon' => 'fa fa-share',
                        'url' => ['/recordar'],                       
                    ],

                    [
                        'label' => 'Usuarios administradores',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lista', 'icon' => 'fa fa-circle-o', 'url' => ['/usuario-admin'],],
                            ['label' => 'Agregar', 'icon' => 'fa fa-circle-o', 'url' => ['/usuario-admin/create'],],
                        ],
                    ],
                    
                ],
            ]
        ) ?>

    </section>

</aside>
