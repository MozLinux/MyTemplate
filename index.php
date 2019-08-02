<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
      <meta charset="<?php bloginfo('charset') ?>">
        <title><?php wp_title('-', true ,'right') ?></title>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/style.css">
    </head>
    <body>
      <!-- ===========================================[topbar]=========================== -->
      <div id="topbar">
        <div class="midle">
          <div id="startside" class="contact">
            Jul 28,2019 &ensp;&ensp;<a href="#">Cell +258853121511</a> &ensp;&ensp;&ensp; <a href="#">mozlinox@gmail.com</a>
          </div>
          <div id="endside" class="contact">
            <div class="">
              <a href="#"><img style="width:18px; margin-right:5px;"src="<?php bloginfo(template_url) ?>/imagens/facebook.png" alt=""> </a>
              <a href="#"><img style="width:18px; margin-right:5px;"src="<?php bloginfo(template_url) ?>/imagens/facebook.png" alt=""> </a>
              <a href="#"><img style="width:18px; margin-right:5px;"src="<?php bloginfo(template_url) ?>/imagens/facebook.png" alt=""> </a>
              <a href="#"><img style="width:18px; margin-right:5px;"src="<?php bloginfo(template_url) ?>/imagens/facebook.png" alt=""> </a>
            </div>
          </div>
        </div>
      </div>
      <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
      <header>

        <div id="midle_head">
          <div class="baner-logo">
            <div id="logo">
              <a href="#"><img src="<?php bloginfo('template_url') ?>/imagens\logo3.png" alt=""> </a>
            </div>
            <div id="baner">
              <a href="#"><img src="<?php bloginfo('template_url') ?>/imagens\img2.png" alt=""> </a>
            </div>
          </div>

          <nav class="main-menu">
            <div id="home">
              <a id="btn_home"href="#"><img style="width:100%"src="<?php bloginfo('template_url') ?>/imagens\home.png" alt=""> </a>
             <a id="btn_menu1"href="#"><label for="ip"><img style="width:100%"src="<?php bloginfo('template_url') ?>/imagens\menu.png" alt=""></label>  </a>

            </div>
            <input id="ip" type="checkbox" >


            <ul id="menumoblile">
              <a id="btn_menu2"href="#"><label for="ip"><img style="width:100%"src="<?php bloginfo('template_url') ?>/imagens\logout.png" alt=""></label>  </a>

              <li><a href="#">home</a></li>
              <li><a href="#">tecnology</a></li>
              <li><a href="#">opensource</a>
                <ul>
                  <li><a href="#">list pro open</a> </li>
                </ul>
              </li>
              <li><a href="#">android</a>
                <ul>
                  <li><a href="#">prime os</a></li>
                  <li><a href="#">phonix os</a></li>
                  <li><a href="#">nox</a></li>
                  <li><a href="#">bluestacks</a></li>
                </ul>
              </li>
              <li><a href="#">linux</a>
                <ul>
                  <li><a href="#">debian</a></li>
                  <li><a href="#">fedora</a></li>
                  <li><a href="#">duzero os</a></li>
                  <li><a href="#">ubuntu</a></li>
                  <li><a href="#">mint</a></li>
                  <li><a href="#">deepin</a></li>
                  <li><a href="#">kali</a></li>
                </ul>
              </li>
              <li><a href="#">desktop</a></li>
              <li><a href="#">forum</a></li>
              <li><a href="#">dicas</a></li>
              <li><a href="#">extras</a>
                <ul>
                  <li><a href="#">sobre</a> </li>
                </ul>
              </li>
            </ul>
            <div class="pesquisa">
              <a href="#"><img style="width:17px;position:absolute;right:6px;top:10px;"src="<?php bloginfo('template_url') ?>/imagens\pesquisa.png" alt=""> </a>
            </div>
          </nav>
        </div>
      </header>
    </body>
</html>
