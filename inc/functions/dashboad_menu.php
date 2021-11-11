<?php

/* 6.0 - Add Dashboard menu
-------------------------------------------------------------- */
function marioLafuente_dashboard_widgets()
{

    wp_add_dashboard_widget(
        'quick-menu-access', // Widget slug and css
        'Quick Menu Access', // Title.
        'marioLafuente_dashboard_menu' // Display function.
    );
}
add_action('wp_dashboard_setup', 'marioLafuente_dashboard_widgets');

function marioLafuente_dashboard_menu()
{
    echo '<table style="background-color: white; height: 482px; padding: 1rem; width: 100%;" cellspacing="5" cellpadding="5">
    <thead>
    <tr>
    <th class="text-left" style="width: 100%;" colspan="2">
    <h2 style="text-align: center;">WELCOME</h2>
    <img style="background: #eee; width: 100%;" src="/wp-content/themes/theme_1/inc/images/login-logo.png" alt="logo" />
    <p><span style="color: #999999;">to our<span style="color: #ff9900;"> NEW </span>panel, here you will find more easy way to control your site, Banner and more </span></p>
    </th>
    </tr>
    <tr>
    <th class="text-left" style="width: 100%;" colspan="2"><hr style="padding-top: 30px;" /></th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <tr style="width: 424.933px;">
    <td class="text-left" style="width: 279.953px;">Modificar  Theme Settings<br /><span style="color: #999999;">(manage general theme)<br /> 
    <a class="button" style="margin: 5px;" href="/wp-admin/admin.php?page=theme-general-settings" target="_blank" rel="&gt;er noEdit noopener">Edit &gt;</a></span></td>
    <td class="text-left" style="width: 279.953px;">Modificar  Home Page<br /><span style="color: #999999;">(manage all about index page)<br />
    <a class="button" style="margin: 5px;" href="/wp-admin/post.php?post=1502&action=edit" target="_blank" rel="&gt;er noEdit noopener">Edit &gt;</a></span></td>
 
    </tr>
    <tr>
    <td class="text-left" style="width: 279.953px;">&nbsp;</td>
    <td class="text-left" style="width: 279.953px;">&nbsp;</td>
    </tr>
    <tr>
   
    <td class="text-left" style="width: 279.953px;">Modificar  OTHER Pages<br /><span style="color: #999999;">(manage other pages)</span><br />
    <a class="button" href="/wp-admin/edit.php?post_type=page" target="_blank" rel="&gt;er noEdit noopener">Edit &gt;</a></td>
    <td class="text-left" style="width: 279.953px;">Modificar  News (blog) pages<br /><span style="color: #999999;">(manage blog pages)<br />
    <a class="button" style="margin: 5px;" href="/wp-admin/edit.php" target="_blank" rel="&gt;er noEdit noopener">Edit &gt;</a></span></td>
    </tr>
    <tr>
    <td class="text-left" style="width: 279.953px;">&nbsp;</td>
    <td class="text-left" style="width: 279.953px;">&nbsp;</td>
    </tr>
    <tr>
    <td class="text-left" style="width: 279.953px;">Modificar  Menus<br /><span style="color: #999999;">(manage all Menus)<br /><a class="button" style="margin: 5px;" href="/wp-admin/nav-menus.php" target="_blank" rel="&gt;er noEdit noopener">Edit &gt;</a></span></td>
    <td class="text-left" style="width: 279.953px;">Modificar  menu del footer<br /><span style="color: #999999;">(manage Banners)<br />
<a class="button" style="margin: 5px;" href="/wp-admin/admin.php?page=theme-general-settings" target="_blank" rel="&gt;er noEdit noopener">Edit &gt;</a></span></td>
    
    
    

    </tr>
    <tr>
    <td class="text-left" style="width: 279.953px;">&nbsp;</td>
    <td class="text-left" style="width: 279.953px;">&nbsp;</td>
    </tr>
    <tr>
    <td class="text-left" style="width: 279.953px;">Modificar  Banners<br /><span style="color: #999999;">(manage Banners)<br />
    <a class="button" style="margin: 5px;" href="/wp-admin/admin.php?page=acf-options-banners" target="_blank" rel="&gt;er noEdit noopener">Edit &gt;</a></span></td>
    <td class="text-left" style="width: 279.953px;">Modificar  Slider <br /><span style="color: #999999;">(manage Slide banners)<br />
    <a class="button" style="margin: 5px;" href="/wp-admin/admin.php?page=acf-options-sliders" target="_blank" rel="&gt;er noEdit noopener">Edit &gt;</a></span></td>
    </tr>
    <tr>
    <td class="text-left" style="width: 279.953px; text-align: left;">&nbsp;</td>
    <td class="text-left" style="width: 279.953px; text-align: left;">&nbsp;</td>
    </tr>
    </tbody>
    </table>';
}

/* 6.5 - Add css to Dashboard for my menu
-------------------------------------------------------------- */
add_action('admin_head', 'marioLafuente_menu_dashboar_style');
function marioLafuente_menu_dashboar_style()
{
    echo '<style>
         #quick-menu-access {
           background-color: #3eb0da!important;
       }
       #menu-posts-rematesettings ul {
        display: none;
        color: red;
      }
      
         .table-fill,div.table-title{margin:auto;max-width:600px;padding:5px;width:100%}.table-fill td,.table-fill th{vertical-align:middle;text-align:left}.table-title h3,td{text-shadow:-1px -1px 1px rgba(0,0,0,.1)}.table-fill td,.table-fill th.text-left,th{text-align:left}div.table-title{display:block}.table-title h3{color:#fafafa;font-size:30px;font-weight:400;font-style:normal;font-family:Roboto,helvetica,arial,sans-serif;text-transform:uppercase}.table-fill{background:#fff;border-radius:3px;border-collapse:collapse;height:320px;box-shadow:0 5px 10px rgba(0,0,0,.1);animation:float 5s infinite}.table-fill tr:hover td,.table-fill tr:nth-child(odd):hover td{background:#4E5066}.table-fill th{color:#D5DDE5;background:#1b1e24;border-bottom:4px solid #9ea7af;border-right:1px solid #343a45;font-size:23px;font-weight:100;padding:24px;text-shadow:0 1px 1px rgba(0,0,0,.1)}.table-fill th:first-child{border-top-left-radius:3px}.table-fill th:last-child{border-top-right-radius:3px;border-right:none}.table-fill tr{border-top:1px solid #C1C3D1;border-bottom-:1px solid #C1C3D1;color:#666B85;font-size:16px;font-weight:400;text-shadow:0 1px 1px rgba(256,256,256,.1)}.table-fill tr:hover td{color:#FFF;border-top:1px solid #22262e;border-bottom:1px solid #22262e}.table-fill tr:first-child{border-top:none}.table-fill tr:last-child{border-bottom:none}.table-fill tr:nth-child(odd) td{background:#EBEBEB}.table-fill tr:last-child td:first-child{border-bottom-left-radius:3px}.table-fill tr:last-child td:last-child{border-bottom-right-radius:3px}.table-fill td{background:#FFF;padding:20px;font-weight:300;font-size:18px;border-right:1px solid #C1C3D1}.table-fill td:last-child{border-right:0}.table-fill th.text-center{text-align:center}.table-fill th.text-right{text-align:right}.table-fill td.text-left{text-align:left}.table-fill td.text-center{text-align:center}.table-fill td.text-right{text-align:right}
             }
         </style>';
}
