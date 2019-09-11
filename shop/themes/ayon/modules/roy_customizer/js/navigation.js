$(document).ready(function(){

    function stickynav() {
      $('.tab-pane.active .nav_inside_container').hcSticky({
        stickTo: '.roytc_content',
        top: 140
      });
      $('.nav_inside > li').removeClass('active');
      $('.nav_inside > li:first-child').addClass('active');
    }


    stickynav();


    // INSIDE TABS navigation
    $('.nav_inside > li > a').click(function(event){
        event.preventDefault();//stop browser to take action for clicked anchor

        //get displaying tab content jQuery selector
        var active_tab_selector = $('.nav_inside > li.active > a').attr('href');

        //find actived navigation and remove 'active' css
        // var actived_nav = $('.nav_inside > li.active');
        // actived_nav.removeClass('active');

        //add 'active' css into clicked navigation
        // $(this).parents('li').addClass('active');
        localStorage.setItem('lastTabInside', $(this).attr('href')); // Inside local set here

        //hide displaying tab content
        // $('.tab-content.active').removeClass('active').addClass('hide');

        //show target tab content
        // var target_tab_selector = $(this).attr('href');
        // $(target_tab_selector).removeClass('hide');
        // $(target_tab_selector).addClass('active');

    });

    // for bootstrap 3 use 'shown.bs.tab', for bootstrap 2 use 'shown' in the next line
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // save the latest tab; use cookies if you like 'em better:
        localStorage.setItem('lastTab', $(this).attr('href'));

        stickynav();

        //
        // // show first inside navigation on click on main
        // var first_li_link = $(this).attr('href');
        // var first_li_div = $(first_li_link).find('.nav_inside > li:first-child');
        // var first_li_target_content = $(first_li_link).find('.nav_inside > li:first-child > a').attr('href');
        //
        // $('.tab-content.active').removeClass('active').addClass('hide');
        // $('.nav_inside > li.active').removeClass('active');
        //
        // $(first_li_div).addClass('active');
        // $(first_li_target_content).removeClass('hide').addClass('active');


    });

    // go to the latest tab, if it exists:
    var lastTab = localStorage.getItem('lastTab');
    if (lastTab) {
        $('[href="' + lastTab + '"]').tab('show');
    }
    // var lastTabInside = localStorage.getItem('lastTabInside');
    // if (lastTabInside) {
    //     $('.tab-content').removeClass('active').addClass('hide');
    //     $('[href="' + lastTabInside + '"]').tab('show');
    //     $(lastTabInside).removeClass('hide');
    // }

    // Demo select
    $('.demo_apply').click(function() {

        if ($('#select_demo1').is(':checked')) var demo_number = '1';
        if ($('#select_demo2').is(':checked')) var demo_number = '2';
        if ($('#select_demo3').is(':checked')) var demo_number = '3';
        if ($('#select_demo4').is(':checked')) var demo_number = '4';
        if ($('#select_demo5').is(':checked')) var demo_number = '5';
        if ($('#select_demo6').is(':checked')) var demo_number = '6';
        if ($('#select_demo7').is(':checked')) var demo_number = '7';
        if ($('#select_demo8').is(':checked')) var demo_number = '8';
        if ($('#select_demo9').is(':checked')) var demo_number = '9';

        // Base colors massive
        var demo_settings = {
          'g_lay': ['1','1','1','1','1','1','1','1','1'],
          'g_tp': ['0','0','0','0','0','0','0','0','0'],
          'g_bp': ['0','0','0','0','0','0','0','0','0'],
          'body_box_sw': ['1','1','1','1','1','1','1','1','1'],
          'nc_body_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_body_im_bg_ext': ['','','','','','','','',''],
          'nc_body_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_body_im_bg_position': ['0','0','0','0','0','0','0','0','0'],
          'nc_body_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'gradient_scheme': ['1','1','1','1','1','1','1','1','1'],
          'display_gradient': ['1','1','1','1','1','1','1','1','1'],
          'body_bg_pattern': ['0','0','0','0','0','0','0','0','0'],
          'nc_main_bg': ['1','1','1','1','1','1','1','1','1'],
          'nc_main_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_main_im_bg_ext': ['','','','','','','','',''],
          'nc_main_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_main_im_bg_position': ['0','0','0','0','0','0','0','0','0'],
          'nc_main_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'header_lay': ['2','5','1','2','2','3','1','4','2'],
          'header_w': ['2','2','1','2','2','2','1','1','1'],
          'header_opa': ['1','1','1','1','1','1','1','1','1'],
          'nc_logo_normal': ['png','png','png','png','png','png','png','png','png'],
          'nc_logo_trans': ['png','png','png','png','png','png','png','png','png'],
          'nc_header_trans': ['1','1','1','1','2','2','1','1','1'],
          'nc_header_hide': ['2','2','2','1','1','1','1','1','2'],
          'nc_bw_icons': ['12','22','24','24','24','24','30','22','22'],
          'nc_bw_menu': ['24','22','24','24','24','24','30','32','22'],
          'nc_cl': ['1','1','1','1','1','1','1','1','1'],
          'nc_cll': ['1','1','1','1','1','1','1','1','1'],
          'header_ns': ['2','2','2','2','1','2','2','2','2'],
          'header_nbs': ['1','1','1','1','1','1','1','1','1'],
          'nc_toppanel_lay': ['2','1','2','2','3','3','1','2','3'],
          'click_lay_m': ['1','1','1','1','1','1','1','1','1'],
          'click_lay_s': ['1','1','1','1','1','1','1','1','2'],
          'click_lay_c': ['1','1','1','1','1','1','1','1','2'],
          'click_lay_a': ['1','1','1','1','1','1','1','1','2'],
          'nc_m_layout': ['1','1','1','1','1','1','1','1','1'],
          'nc_m_icon': ['menu2','menu2','menu2','menu2','menu2','menu2','menu1','menu2','menu5'],
          'nc_m_under': ['3','2','1','4','3','2','1','2','3'],
          'nc_m_override': ['2','2','2','2','2','2','2','2','2'],
          'nc_m_br': ['0','0','0','0','0','3','4','0','0'],
          'search_lay': ['1','1','2','1','4','4','1','2','1'],
          'nc_i_search': ['search3','search2','search2','search4','search4','search4','search1','search2','search3'],
          'nc_search_tags': ['dress,black,cotton','black,sand','dress,black,cotton','dress,black,cotton','phone,camera','dress,black,cotton','dress,black,cotton','dress,black,cotton','dress,top'],
          'nc_search_prods': ['1,2,3,4,5,6','1,2,3,4,5,6','1,2,3,4,5,6','1,2,3,4,5,6','1,2,3,4,5,6','1,2,3,4,5,6','1,2,3,4,5,6','1,2,3,4,5,6','1,2,3,4,5,6'],
          'search_br': ['0','0','0','0','0','0','0','0','0'],
          'cart_lay': ['2','1','1','1','1','2','1','1','1'],
          'cart_icon': ['cart8','cart3','cart7','cart5','cart6','cart1','cart3','cart4','cart1'],
          'acc_lay': ['1','1','1','3','1','2','1','1','1'],
          'acc_icon': ['acc3','acc4','acc2','acc6','acc4','acc1','acc3','acc3','acc6'],
          'acc_name': ['2','4','1','1','1','2','1','1','1'],
          'g_link_effect': ['3','2','1','1','1','2','1','2','3'],
          'g_form': ['2','2','2','2','1','1','2','2','1'],
          'con_pos': ['2','1','1','1','3','1','1','1','1'],
          'con_pro': ['2','1','1','1','3','1','1','1','1'],
          'con_bra': ['1','1','1','1','1','1','1','1','1'],
          'con_sale"': ['3','2','2','2','3','2','2','2','2'],
          'nc_b_radius': ['1','0','1','4','4','4','40','1','0'],
          'nc_b_sh': ['0','1','1','1','1','1','1','0','1'],
          'i_b_radius': ['0','0','0','4','4','4','40','0','0'],
          'nc_loader': ['1','1','1','1','1','1','1','1','1'],
          'nc_loader_lay': ['1','1','1','1','1','1','1','1','1'],
          'nc_loader_logo': ['2','2','3','2','2','2','2','3','2'],
          'nc_logo_loader': ['png','png','png','png','png','png','png','png','png'],
          'nc_ht_bg': ['1','3','1','1','1','1','4','4','1'],
          'nc_ht_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_ht_im_bg_ext': ['','jpg','jpg','','','','','',''],
          'nc_ht_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_ht_im_bg_position': ['0','1','0','0','0','0','0','0','0'],
          'nc_ht_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'nc_ht_top': ['0','220','0','0','0','0','200','240','160'],
          'nc_ht_bot': ['0','120','0','0','0','0','0','0','0'],
          'nc_ht_pad': ['2','1','2','2','1','1','1','2','1'],
          'nc_ht_width': ['2','2','2','2','2','2','1','1','1'],
          'nc_hm_pad': ['1','1','1','2','1','2','1','1','1'],
          'nc_hm_width': ['2','1','1','2','2','2','1','1','1'],
          'nc_hm_bg': ['1','4','1','1','1','1','4','4','1'],
          'nc_hm_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_hm_im_bg_ext': ['','','','','','','','',''],
          'nc_hm_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_hm_im_bg_position': ['0','0','0','0','0','0','0','0','0'],
          'nc_hm_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'nc_hm_top': ['80','80','80','80','80','0','80','80','0'],
          'nc_hm_bot': ['0','0','0','0','0','0','0','0','0'],
          'nc_hb_bg': ['1','4','1','1','4','4','4','4','4'],
          'nc_hb_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_hb_im_bg_ext': ['','','','','','','','',''],
          'nc_hb_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_hb_im_bg_position': ['0','0','0','0','0','0','0','0','0'],
          'nc_hb_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'nc_hb_top': ['40','80','40','140','0','0','0','0','0'],
          'nc_hb_bot': ['80','80','80','110','0','0','0','0','0'],
          'ban_spa_top': ['1','1','2','2','2','1','3','1','2'],
          'ban_ts_top': ['0','0','0','0','0','0','0','0','110'],
          'ban_bs_top': ['0','0','0','0','0','0','0','0','40'],
          'ban_w_top': ['2','2','2','2','2','2','1','1','2'],
          'ban_spa_home': ['2','1','2','3','3','3','1','2','3'],
          'ban_ts_home': ['60','110','0','0','0','80','30','0','0'],
          'ban_bs_home': ['30','0','30','0','0','80','0','30','0'],
          'ban_w_home': ['2','1','2','2','2','2','1','2','2'],
          'ban_spa_befoot': ['1','1','1','3','3','3','1','1','3'],
          'ban_ts_befoot': ['30','30','30','0','0','0','30','90','0'],
          'ban_bs_befoot': ['0','0','0','0','0','0','0','90','0'],
          'ban_w_befoot': ['1','1','1','2','2','2','1','1','2'],
          'ban_spa_foot': ['1','1','1','1','1','1','1','1','1'],
          'ban_ts_foot': ['30','30','30','30','30','30','30','30','30'],
          'ban_bs_foot': ['0','0','0','0','0','0','0','0','0'],
          'ban_spa_sidemobilemenu': ['1','1','1','1','1','1','1','1','1'],
          'ban_ts_sidemobilemenu': ['0','0','0','0','0','0','0','0','0'],
          'ban_bs_sidemobilemenu': ['0','0','0','0','0','0','0','0','0'],
          'ban_spa_product': ['1','1','1','1','1','1','1','1','1'],
          'ban_ts_product': ['10','10','10','10','10','10','10','10','10'],
          'ban_bs_product': ['0','0','0','0','0','0','0','0','0'],
          'ban_ts_left': ['0','0','0','0','0','40','0','0','0'],
          'ban_bs_left': ['0','0','0','0','40','0','0','0','40'],
          'ban_ts_right': ['0','0','0','0','0','0','0','0','0'],
          'ban_bs_right': ['0','0','0','0','0','0','0','0','0'],
          'nc_hp_title': ['1','2','1','1','1','1','3','3','1'],
          'nc_hp_align': ['2','2','2','2','1','1','1','2','2'],
          'nc_feat_lay': ['1','1','1','1','2','1','1','1','1'],
          'nc_feat_per': ['4','3','2','5','3','5','4','3','3'],
          'nc_feat_spa': ['1','1','2','1','1','1','1','1','1'],
          'nc_feat_slider': ['1','2','2','2','1','1','1','2','1'],
          'nc_feat_auto': ['true','false','false','false','true','true','true','false','false'],
          'nc_feat_bg': ['3','3','3','3','3','1','3','3','3'],
          'nc_feat_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_feat_width': ['1','1','1','1','1','1','1','1','1'],
          'nc_feat_top': ['0','60','30','0','60','80','40','30','0'],
          'nc_feat_bot': ['0','0','0','0','30','30','0','0','50'],
          'nc_best_lay': ['1','1','1','1','1','1','1','1','1'],
          'nc_best_per': ['5','3','5','5','4','3','4','5','4'],
          'nc_best_spa': ['1','3','3','1','1','1','1','3','3'],
          'nc_best_slider': ['1','1','1','1','1','1','1','1','1'],
          'nc_best_auto': ['true','true','true','false','false','false','true','true','false'],
          'nc_best_bg': ['3','3','3','3','3','1','3','3','3'],
          'nc_best_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_best_width': ['1','1','1','1','1','2','1','1','1'],
          'nc_best_top': ['0','0','0','0','0','80','0','0','0'],
          'nc_best_bot': ['0','0','0','0','0','20','0','0','0'],
          'nc_new_lay': ['1','1','1','1','1','1','1','1','1'],
          'nc_new_per': ['3','3','3','3','3','3','3','3','3'],
          'nc_new_spa': ['1','3','3','3','1','3','3','3','1'],
          'nc_new_slider': ['1','1','1','1','1','1','1','1','1'],
          'nc_new_auto': ['true','true','true','true','true','true','true','true','true'],
          'nc_new_bg': ['3','3','3','3','3','3','3','3','3'],
          'nc_new_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_new_width': ['1','1','1','1','1','1','1','1','1'],
          'nc_new_top': ['0','0','0','0','0','0','0','0','0'],
          'nc_new_bot': ['0','0','0','0','0','0','0','0','0'],
          'nc_sale_lay': ['1','1','1','1','1','1','1','1','1'],
          'nc_sale_per': ['3','3','3','3','3','3','3','3','3'],
          'nc_sale_spa': ['1','3','3','3','1','3','3','3','1'],
          'nc_sale_slider': ['1','1','1','1','1','1','1','1','1'],
          'nc_sale_auto': ['true','true','true','true','true','true','true','true','true'],
          'nc_sale_bg': ['3','3','3','3','3','3','3','3','3'],
          'nc_sale_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_sale_width': ['1','1','1','1','1','1','1','1','1'],
          'nc_sale_top': ['0','0','0','0','0','0','0','0','0'],
          'nc_sale_bot': ['0','0','0','0','0','0','0','0','0'],
          'nc_cc1_lay': ['1','1','1','1','1','1','1','1','1'],
          'nc_cc1_per': ['3','3','3','3','3','3','3','3','3'],
          'nc_cc1_spa': ['1','3','3','3','1','1','3','3','1'],
          'nc_cc1_slider': ['1','1','1','1','1','1','1','1','1'],
          'nc_cc1_auto': ['true','true','true','true','true','true','true','true','true'],
          'nc_cc1_bg': ['3','3','3','3','3','1','3','3','3'],
          'nc_cc1_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_cc1_width': ['1','1','1','1','1','2','1','1','1'],
          'nc_cc1_top': ['0','0','0','0','0','60','0','0','0'],
          'nc_cc1_bot': ['0','0','0','0','0','20','0','0','0'],
          'nc_cc2_lay': ['1','1','1','1','1','1','1','1','1'],
          'nc_cc2_per': ['3','3','3','3','3','3','3','3','3'],
          'nc_cc2_spa': ['1','3','3','3','1','3','3','3','1'],
          'nc_cc2_slider': ['1','1','1','1','1','1','1','1','1'],
          'nc_cc2_auto': ['true','true','true','true','true','true','true','true','true'],
          'nc_cc2_bg': ['3','3','3','3','3','3','3','3','3'],
          'nc_cc2_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_cc2_width': ['1','1','1','1','1','1','1','1','1'],
          'nc_cc2_top': ['0','0','0','0','0','0','0','0','0'],
          'nc_cc2_bot': ['0','0','0','0','0','0','0','0','0'],
          'nc_cc3_lay': ['1','1','1','1','1','1','1','1','1'],
          'nc_cc3_per': ['3','3','3','3','3','3','3','3','3'],
          'nc_cc3_spa': ['1','3','3','3','1','3','3','3','1'],
          'nc_cc3_slider': ['1','1','1','1','1','1','1','1','1'],
          'nc_cc3_auto': ['true','true','true','true','true','true','true','true','true'],
          'nc_cc3_bg': ['3','3','3','3','3','3','3','3','3'],
          'nc_cc3_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_cc3_width': ['1','1','1','1','1','1','1','1','1'],
          'nc_cc3_top': ['0','0','0','0','0','0','0','0','0'],
          'nc_cc3_bot': ['0','0','0','0','0','0','0','0','0'],
          'brand_w': ['1','2','1','1','1','2','1','1','1'],
          'brand_per_row': ['6','6','6','6','6','6','6','6','4'],
          'nc_ot_bg': ['2','4','3','2','1','1','4','4','1'],
          'nc_ot_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_ot_im_bg_ext': ['','','','','','','','',''],
          'nc_ot_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_ot_im_bg_position': ['0','0','0','0','0','0','0','0','0'],
          'nc_ot_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'nc_ot_pad': ['2','1','2','2','1','1','1','2','1'],
          'nc_ot_width': ['2','2','2','2','2','2','2','1','2'],
          'nc_ot_top': ['190','220','190','190','2','2','240','300','220'],
          'nc_ot_bot': ['80','40','80','80','0','0','0','80','0'],
          'nc_om_bg': ['1','4','1','1','1','1','4','4','1'],
          'nc_om_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_om_im_bg_ext': ['','','','','','','','',''],
          'nc_om_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_om_im_bg_position': ['0','0','0','0','0','0','0','0','0'],
          'nc_om_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'nc_om_top': ['80','80','80','80','80','80','80','80','80'],
          'nc_om_bot': ['40','80','40','40','40','40','40','40','40'],
          'nc_ob_bg': ['1','4','1','1','1','1','4','4','4'],
          'nc_ob_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_ob_im_bg_ext': ['','','','','','','','',''],
          'nc_ob_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_ob_im_bg_position': ['0','0','0','0','0','0','0','0','0'],
          'nc_ob_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'nc_ob_top': ['0','80','0','0','0','0','0','0','0'],
          'nc_ob_bot': ['0','80','0','0','0','0','0','0','0'],
          'w_all': ['2','2','2','2','2','2','1','1','1'],
          'w_cat': ['2','2','2','2','2','2','1','1','1'],
          'w_pro': ['2','2','2','2','2','2','1','1','1'],
          'w_con': ['1','2','1','1','1','1','1','1','1'],
          'w_cart': ['1','2','1','2','2','1','1','1','1'],
          'w_acc': ['1','2','1','1','1','1','1','1','1'],
          'w_cms': ['1','1','1','1','1','1','1','1','1'],
          'w_blog': ['1','1','1','1','1','1','1','1','1'],
          'b_layout': ['1','1','4','4','4','4','4','4','4'],
          'b_pos_cat': ['1','2','1','1','1','1','1','1','2'],
          'b_pos_pro': ['2','2','2','2','2','2','1','1','2'],
          'b_top': ['0','0','0','0','40','60','0','0','40'],
          'b_bot': ['40','20','20','20','40','60','20','20','40'],
          'b_w': ['2','2','1','2','2','2','1','1','1'],
          'sidebar_title_margin': ['30','44','30','30','30','40','30','30','30'],
          'sidebar_title_b': ['0','1','0','0','0','40','0','0','1'],
          'sidebar_title_padding': ['30','44','30','30','30','40','30','30','30'],
          'sidebar_title_bwidth': ['3','2','3','3','3','2','2','3','3'],
          'sidebar_margin': ['40','30','40','40','40','40','30','40','40'],
          'sidebar_b': ['1','0','1','1','1','1','0','1','1'],
          'sidebar_padding': ['40','30','40','40','40','40','30','40','40'],
          'sidebar_bwidth': ['2','2','2','2','2','2','2','2','3'],
          'sidebar_bb': ['2','1','2','2','1','2','2','2','2'],
          'sidebar_bw': ['2','2','2','2','2','2','2','2','2'],
          'sidebar_br': ['2','4','2','2','2','2','2','2','2'],
          'nc_subcat': ['1','2','2','1','2','2','2','2','2'],
          'nc_cat_name': ['1','1','1','1','1','1','1','1','2'],
          'nc_cat_img': ['1','2','2','1','2','2','2','2','2'],
          'nc_cat_imglay': ['2','1','2','1','1','1','2','1','2'],
          'nc_cat_desc': ['1','2','1','1','2','2','2','2','2'],
          'nc_product_switch': ['3','3','3','3','4','4','2','2','2'],
          'nc_product_margin': ['1','1','2','1','1','1','1','2','2'],
          'pl_lay': ['1','1','2','1','1','1','1','1','1'],
          'pl_img_bgs': ['2','2','2','2','2','2','2','2','2'],
          'pl_text_bgs': ['2','1','2','2','2','2','2','2','2'],
          'nc_pi_b': ['2','2','2','2','1','1','2','2','2'],
          'nc_pi_bw': ['2','2','2','2','2','2','2','2','2'],
          'nc_pi_br': ['4','4','4','4','4','4','4','4','4'],
          'pl_text_align': ['3','2','1','2','2','1','2','2','1'],
          'pl_hover_lay': ['1','2','1','2','1','1','1','2','1'],
          'pl_hover_trans': ['0','0.52','0','0','0','0','0','0','0'],
          'pl_hover_but_br': ['0','50','0','8','4','4','6','3','0'],
          'nc_second_img': ['1','1','1','1','1','0','1','1','1'],
          'nc_colors': ['0','0','0','0','1','1','1','0','0'],
          'nc_count_days': ['1','1','1','1','1','1','1','1','1'],
          'nc_i_qv': ['search2','search2','qv2','qv1','search4','search1','search1','qv1','search4'],
          'nc_i_discover': ['discover3','discover5','discover1','discover3','discover3','discover2','discover4','discover1','discover5'],
          'nc_i_fav': ['fav2','fav2','fav3','fav1','fav2','fav1','fav1','fav3','fav2'],
          'nc_ai': ['1','1','1','1','1','1','1','1','1'],
          'pp_lay': ['1','2','1','2','1','1','2','1','1'],
          'pp_thumbs': ['2','1','2','2','2','2','2','1','2'],
          'pp_imgb': ['0','0','0','0','0','1','0','0','1'],
          'pp_imgspacing': ['1','1','1','1','1','1','1','1','1'],
          'nc_mobadots': ['1','1','1','1','1','1','1','1','1'],
          'pp_sticky': ['1','1','2','1','1','1','1','2','1'],
          'pp_display_q': ['1','1','1','1','1','1','1','1','1'],
          'pp_display_refer': ['1','1','1','1','1','1','1','1','1'],
          'pp_display_cond': ['0','0','0','1','1','1','0','0','1'],
          'pp_display_brand': ['1','1','1','0','0','1','0','1','0'],
          'nc_access_per': ['5','5','5','5','5','5','5','5','5'],
          'pp_tabs_bg_sw': ['2','1','2','1','2','1','2','2','2'],
          'o_add': ['1','1','1','1','1','2','2','1','1'],
          'bl_w': ['2','1','2','1','1','1','1','1','1'],
          'bl_align': ['2','2','2','2','1','1','3','2','1'],
          'bl_lay': ['1','1','2','1','1','1','1','1','1'],
          'bl_cont': ['2','2','2','2','2','1','1','1','1'],
          'bl_row': ['3','3','2','2','3','3','3','2','3'],
          'bl_meta_sw': ['2','1','2','2','2','2','2','1','1'],
          'footer_lay': ['5','5','3','3','7','7','4','5','2'],
          'nc_footer_w': ['2','1','1','1','2','2','1','1','1'],
          'nc_logo_footer': ['png','png','png','png','png','png','png','png','png'],
          'nc_foot_bg': ['1','3','1','1','1','1','4','1','1'],
          'nc_foot_gg': ['15','15','15','15','15','15','15','15','15'],
          'nc_foot_im_bg_ext': ['','jpg','','','','','','',''],
          'nc_foot_im_bg_repeat': ['0','0','0','0','0','0','0','0','0'],
          'nc_foot_im_bg_position': ['0','0','0','0','0','0','0','0','0'],
          'nc_foot_im_bg_fixed': ['0','0','0','0','0','0','0','0','0'],
          'footer_border_sw': ['1','2','2','2','1','2','2','1','2'],
          'nc_footer_soctitle': ['1','2','1','1','1','1','1','2','1'],
          'nc_footer_linktitle': ['1','2','1','1','1','1','1','2','1'],
          'nc_logo_mobile': ['png','png','png','png','png','png','png','png','png'],
          'nc_mob_hp': ['1','2','1','1','2','2','1','1','2'],
          'nc_mob_cat': ['1','2','1','1','2','2','1','1','2'],
          'f_headings': ['Poppins','Poppins','Poppins','Poppins','Roboto Mono','Josefin Sans','Judson','Lobster Two','Noticia Text'],
          'f_buttons': ['Poppins','Poppins','Poppins','Poppins','Roboto Mono','Josefin Sans','Circe','PT Sans','Noticia Text'],
          'f_text': ['Poppins','Poppins','Poppins','Poppins','Roboto Mono','Josefin Sans','Circe','PT Sans','Noticia Text'],
          'f_price': ['Poppins','Poppins','Poppins','Poppins','Roboto Mono','Josefin Sans','Circe','PT Sans','Noticia Text'],
          'f_menu': ['Poppins','Poppins','Poppins','Poppins','Roboto Mono','Josefin Sans','Circe','PT Sans','Noticia Text'],
          'f_pn': ['Poppins','Poppins','Poppins','Poppins','Roboto Mono','Josefin Sans','Circe','PT Sans','Noticia Text'],
          'latin_ext': ['0','0','0','0','0','0','0','0','0'],
          'cyrillic': ['0','0','0','0','0','0','0','0','0'],
          'fs_text': ['16','16','16','16','16','18','20','18','16'],
          'lh_text': ['32','32','32','32','32','34','32','32','30'],
          'fw_text': ['500','500','500','500','500','500','500','500','600'],
          'ls_text': ['0','0','0','0','0','0','0','0','0.5'],
          'fw_link': ['600','600','600','600','600','600','600','600','600'],
          'fs_btn': ['14','14','14','14','14','15','18','16','18'],
          'fw_btn': ['500','500','500','600','600','600','500','500','500'],
          'ls_btn': ['0','0','0','0','0','0','0','0','1'],
          'up_btn': ['none','none','none','none','none','none','none','none','none'],
          'fs_inp': ['13','14','13','13','13','14','18','14','16'],
          'fw_inp': ['600','500','600','600','600','600','500','500','500'],
          'ls_inp': ['0','0','0','0','0','0','0','0','1'],
          'fs_foot': ['16','16','16','16','16','18','20','18','16'],
          'fw_foot': ['600','500','500','500','500','600','500','500','500'],
          'ls_foot': ['0','0','0','0','0','0','0','0','1'],
          'up_foot': ['none','none','none','none','none','none','none','none','none'],
          'fs_home_tit': ['36','28','24','28','24','24','42','28','30'],
          'fw_home_tit': ['400','400','500','400','400','500','700','500','700'],
          'ls_home_tit': ['0','1','1','-0.6','-0.6','0','0','1','1'],
          'up_home_tit': ['none','uppercase','none','none','none','none','none','none','none'],
          'fs_home_sub': ['16','15','16','16','16','16','22','16','22'],
          'fw_home_sub': ['500','500','500','500','500','500','500','500','700'],
          'ls_home_sub': ['0','1.5','0','0','0','0','0','0','1'],
          'up_home_sub': ['none','none','none','none','none','none','none','none','none'],
          'fs_page_head': ['36','32','24','24','24','24','42','40','30'],
          'fw_page_head': ['500','500','400','400','400','500','700','500','700'],
          'ls_page_head': ['0','0','0','0','0','0','0','0','1'],
          'up_page_head': ['none','none','none','none','none','none','none','none','none'],
          'fs_page_h3': ['22','24','22','22','22','22','28','26','30'],
          'fw_page_h3': ['500','400','500','500','500','500','700','500','700'],
          'ls_page_h3': ['0','0.75','0','0','0','0','0','0','1'],
          'up_page_h3': ['none','none','none','none','none','none','none','none','none'],
          'fs_page_side': ['32','22','24','24','24','24','42','26','30'],
          'fw_page_side': ['500','500','400','400','400','500','700','400','700'],
          'ls_page_side': ['0','0','0','0','0','0','0','0','1'],
          'up_page_side': ['none','uppercase','none','none','none','none','none','none','none'],
          'fs_cat_name': ['22','16','16','16','16','18','20','20','18'],
          'fw_cat_name': ['600','600','500','500','500','500','700','500','400'],
          'ls_cat_name': ['0','0','0','0','0','0','0','0','0.4'],
          'up_cat_name': ['uppercase','none','none','none','none','none','none','none','none'],
          'fs_cat_price': ['16','16','20','14','14','16','20','18','18'],
          'fw_cat_price': ['600','400','600','500','500','500','400','500','400'],
          'ls_cat_price': ['0','0','0','0','0','0','0','0','0.4'],
          'fs_pp_name': ['44','36','44','32','32','32','82','52','38'],
          'fw_pp_name': ['500','500','400','500','500','500','700','400','700'],
          'ls_pp_name': ['-0.6','0','-0.6','-0.6','-0.6','-0.6','0','-0.6','1'],
          'up_pp_name': ['none','none','none','none','none','none','none','none','none'],
          'fs_pp_price': ['32','32','32','32','32','32','40','28','32'],
          'fw_pp_price': ['500','500','500','400','400','500','500','500','700'],
          'ls_pp_price': ['0','0','0','0','0','0','0','0','1'],
          'fs_blog': ['22','22','20','20','20','22','22','24','20'],
          'fw_blog': ['500','500','400','400','400','500','500','400','700'],
          'ls_blog': ['0','0','0','0','0','0','0','0','1'],
          'up_blog': ['none','none','none','none','none','none','none','none','none'],
          'fs_menu': ['15','15','15','15','15','16','18','18','18'],
          'fw_menu': ['500','500','500','500','500','500','500','500','700'],
          'ls_menu': ['0','0','0','0','0','0','0','0','1'],
          'up_menu': ['none','none','none','none','none','none','none','none','none'],
          'nc_css': ['','','','','','','','','']
        }

        var keys = Object.keys(demo_settings);
        for (var i = 0; i < keys.length; i++) {
            var key = keys[i];
            var value = demo_settings[key][demo_number - 1];
            var name = $("[name='" + key + "']");

            $(name).each(function() {
                $(this).val(value)
            });
        }

        $('.demo_apply').html('<i></i>Demo settings changed, click save changes to save it');

    });


    // Color schemes
    $('.colors_apply').click(function() {

        if ($('#select_scheme1').is(':checked')) var scheme_number = '1';
        if ($('#select_scheme2').is(':checked')) var scheme_number = '2';
        if ($('#select_scheme3').is(':checked')) var scheme_number = '3';
        if ($('#select_scheme4').is(':checked')) var scheme_number = '4';
        if ($('#select_scheme5').is(':checked')) var scheme_number = '5';
        if ($('#select_scheme6').is(':checked')) var scheme_number = '6';
        if ($('#select_scheme7').is(':checked')) var scheme_number = '7';
        if ($('#select_scheme8').is(':checked')) var scheme_number = '8';
        if ($('#select_scheme9').is(':checked')) var scheme_number = '9';

        // Base colors massive
        var scheme_colors = {
                  'main_background_color': ['#e5e5e5','#e5e5e5','#e5e5e5','#e5e5e5','#e5e5e5','#e5e5e5','#e5e5e5','#e5e5e5','#e5e5e5'],
                  'nc_body_gs': ['#389290','#389290','#389290','#389290','#389290','#389290','#389290','#389290','#389290'],
                  'nc_body_ge': ['#8480df','#8480df','#8480df','#8480df','#8480df','#8480df','#8480df','#8480df','#8480df'],
                  'nc_main_bc': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'nc_main_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_main_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'h_bg': ['#ffffff','#272727','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#f2f2f2','#337964'],
                  'h_norm_icons': ['#1c1c1c','#ffffff','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#414141','#f7e7ab'],
                  'h_norm_quan': ['#fafafa','#fed049','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#ffffff','#f7e7ab'],
                  'h_norm_quanbg': ['#1c1c1c','transparent','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#414141','#439079'],
                  'h_norm_logged': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#414141','#f7e7ab'],
                  'h_norm_link': ['#1c1c1c','#ffffff','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#414141','#f7e7ab'],
                  'h_norm_linkh': ['#1c1c1c','#d0d0d0','#1c1c1c','#1c1c1c','#2471ff','#1c1c1c','#3d3534','#000000','#ffffff'],
                  'h_norm_effect': ['#f3de00','#ffffff','#aaaaaa','#aaaaaa','#ffd800','#ee3e29','#3d3534','#cb6d4c','#337964'],
                  'h_norm_sborder': ['#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#eeeeee','#1c1c1c','#1c1c1c','#1c1c1c'],
                  'h_trans_icons': ['#373940','#ffffff','#373940','#ffffff','#ffffff','#ffffff','#3d3534','#414141','#f7e7ab'],
                  'h_trans_quan': ['#fafafa','#ffffff','#fafafa','#000000','#000000','#000000','#f1dfdd','#fafafa','#f7e7ab'],
                  'h_trans_quanbg': ['#373940','transparent','#373940','#ffec1d','#ffd800','#ffd800','#3d3534','#414141','#439079'],
                  'h_trans_logged': ['#373940','#fed049','#373940','#ffffff','#ffffff','#ffffff','#3d3534','#414141','#f7e7ab'],
                  'h_trans_link': ['#373940','#ffffff','#373940','#ffffff','#ffffff','#ffffff','#3d3534','#414141','#f7e7ab'],
                  'h_trans_linkh': ['#000000','#d0d0d0','#000000','#ffffff','#ffffff','#ffffff','#3d3534','#000000','#ffffff'],
                  'h_trans_effect': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#3d3534','#cb6d4c','#337964'],
                  'h_trans_sborder': ['#221cff','#1c1c1c','#221cff','#221cff','#221cff','#f2f2f2','#1c1c1c','#221cff','#221cff'],
                  'header_nbg': ['#00289c','#ffffff','#00289c','#00289c','#ffffff','#ffffff','#ffffff','#00289c','#00289c'],
                  'header_nb': ['#f2f2f2','#f2f2f2','#f2f2f2','#221cff','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'header_nt': ['#29ff8e','#bebebe','#29ff8e','#29ff8e','#1c1c1c','#1c1c1c','#bebebe','#29ff8e','#29ff8e'],
                  'header_nl': ['#b83d00','#424242','#b83d00','#b83d00','#1c1c1c','#1c1c1c','#424242','#b83d00','#b83d00'],
                  'header_nlh': ['#ff0594','#fed049','#ff0594','#ff0594','#2471ff','#ee3e29','#00c293','#ff0594','#ff0594'],
                  'm_popup_llink': ['#424242','#ffffff','#424242','#424242','#424242','#424242','#1c1c1c','#424242','#f7e7ab'],
                  'm_popup_llink_hover': ['#ababab','#d0d0d0','#ababab','#ababab','#ababab','#ababab','#137b42','#ababab','#ffffff'],
                  'm_popup_lbg': ['#ffffff','#272727','#ffffff','#ffffff','#ffffff','#ffffff','#f6ebe9','#ffffff','#337964'],
                  'm_popup_lchevron': ['#424242','#cccccc','#424242','#424242','#424242','#424242','#3d3534','#424242','#f7e7ab'],
                  'm_popup_lborder': ['#fafafa','#525252','#fafafa','#fafafa','#fafafa','#fafafa','#d2b2af','#fafafa','#337964'],
                  'g_bg_content': ['#ffffff','#272727','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#f2f2f2','#ffffff'],
                  'g_border': ['#f2f2f2','#525252','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#dec3c0','#f2f2f2','#f7e7ab'],
                  'g_body_text': ['#1c1c1c','#f2f2f2','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#414141','#424242'],
                  'g_body_comment': ['#bbbbbb','#bbbbbb','#bbbbbb','#bbbbbb','#bbbbbb','#bbbbbb','#3d3534','#bbbbbb','#888888'],
                  'g_body_link': ['#000000','#fed049','#000000','#000000','#000000','#000000','#3d3534','#000000','#337964'],
                  'g_body_link_hover': ['#000000','#aaaaaa','#000000','#000000','#000000','#000000','#137b42','#000000','#000000'],
                  'g_link_effectc': ['#f3de00','#fed049','#aaaaaa','#aaaaaa','#2471ff','#ee3e29','#137b42','#cb6d4c','#f7e7ab'],
                  'g_label': ['#1c1c1c','#f2f2f2','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#1c1c1c','#000000'],
                  'g_header': ['#1c1c1c','#f2f2f2','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#414141','#424242'],
                  'g_cc': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#dec3c0','#cccccc','#cccccc'],
                  'g_ch': ['#000000','#fed049','#000000','#000000','#000000','#000000','#3d3534','#000000','#000000'],
                  'g_hb': ['#ffffff','#1c1c1c','#ffffff','#ffffff','#f2f2f2','#f2f2f2','#f6ebe9','#ffffff','#f7e7ab'],
                  'g_hc': ['#000000','#f2f2f2','#000000','#000000','#000000','#000000','#3d3534','#000000','#337964'],
                  'g_normal_border': ['#f2f2f2','#525252','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#dec3c0','#cccccc','#f7e7ab'],
                  'g_extra_border': ['#000000','#828282','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#dec3c0','#cccccc','#f7e7ab'],
                  'g_fancy_nbg': ['#ffffff','#1c1c1c','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#ffffff','#337964'],
                  'g_fancy_nc': ['#1c1c1c','#f2f2f2','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#414141','#f7e7ab'],
                  'b_normal_bg': ['#ffffff','transparent','#ffffff','#ffffff','#ffd800','#ffffff','#f1dfdd','#f2f2f2','#439079'],
                  'b_normal_border': ['#000000','#fed049','#1c1c1c','#1c1c1c','#ffd800','#ee3e29','#dec3c0','#414141','#f7e7ab'],
                  'b_normal_color': ['#000000','#ffffff','#000000','#000000','#000000','#1c1c1c','#3d3534','#000000','#ffffff'],
                  'b_normal_bg_hover': ['#1c1c1c','#fed049','#f2f2f2','#fa6060','#2471ff','#ee3e29','#d2b2af','#cb6d4c','#337964'],
                  'b_normal_border_hover': ['#1c1c1c','#fed049','#f2f2f2','#fa6060','#2471ff','#ee3e29','#d2b2af','#cb6d4c','#337964'],
                  'b_normal_color_hover': ['#ffffff','#272727','#000000','#ffffff','#ffffff','#ffffff','#000000','#ffffff','#ffffff'],
                  'b_ex_bg': ['#1c1c1c','#272727','#ffffff','#ffffff','#1c1c1c','#1c1c1c','#dec3c0','#f2f2f2','#439079'],
                  'b_ex_border': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#dec3c0','#414141','#439079'],
                  'b_ex_color': ['#ffffff','#ffffff','#000000','#000000','#ffffff','#ffffff','#3d3534','#000000','#f7e7ab'],
                  'i_bg': ['#ffffff','#272727','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#f2f2f2','#ffffff'],
                  'i_color': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#1c1c1c','#000000'],
                  'i_b_color': ['#f2f2f2','#777777','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#dec3c0','#414141','#337964'],
                  'i_bg_focus': ['#ffffff','#272727','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#f2f2f2','#ffffff'],
                  'i_color_focus': ['#1c1c1c','#ffffff','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#1c1c1c','#000000'],
                  'i_b_focus': ['#1c1c1c','#f2f2f2','#1c1c1c','#1c1c1c','#2471ff','#ee3e29','#6a605f','#cb6d4c','#337964'],
                  'i_ph': ['#1c1c1c','#f2f2f2','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#6a605f','#1c1c1c','#777777'],
                  'rc_bg_active': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#2471ff','#ee3e29','#3d3534','#cb6d4c','#337964'],
                  'nc_loader_bg': ['#f2f2f2','#1c1c1c','#eeeeee','#f64951','#2471ff','#eeeeee','#f1dfdd','#eeeeee','#337964'],
                  'nc_loader_color': ['#1c1c1c','#fed049','#424242','#ffffff','#ffd800','#ee3e29','#3d3534','#424242','#f7e7ab'],
                  'nc_loader_color2': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ee3e29','#3d3534','#424242','#5fceb3'],
                  'nc_ht_bc': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#ffffff','#ffffff','#ffffff','#f2f2f2','#439079'],
                  'nc_ht_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_ht_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_hm_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#f2f2f2','#ffffff'],
                  'nc_hm_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_hm_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_hb_bc': ['#ffffff','#ffffff','#ffffff','#ffd83a','#ffffff','#ffffff','#ffffff','#f2f2f2','#f2f2f2'],
                  'nc_hb_gs': ['#00a0b0','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_hb_ge': ['#3c00a0','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_feat_bc': ['#008c69','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff'],
                  'nc_feat_gs': ['#000bc0','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_feat_ge': ['#6300a4','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_feat_title': ['#ffffff','#000000','#ffffff','#ffffff','#ffffff','#000000','#000000','#ffffff','#000000'],
                  'nc_feat_text': ['#ffff00','#000000','#ffff00','#ffff00','#ffff00','#000000','#000000','#ffff00','#000000'],
                  'nc_feat_textbg': ['#000000','#f2f2f2','#000000','#000000','#000000','#000000','#f2f2f2','#000000','#000000'],
                  'nc_best_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#f2f2f2','#ffffff','#ffffff','#ffffff'],
                  'nc_best_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_best_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_best_title': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_best_text': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_best_textbg': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'nc_new_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff'],
                  'nc_new_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_new_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_new_title': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_new_text': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_new_textbg': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'nc_sale_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff'],
                  'nc_sale_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_sale_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_sale_title': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_sale_text': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_sale_textbg': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'nc_cc1_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff'],
                  'nc_cc1_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_cc1_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_cc1_title': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_cc1_text': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_cc1_textbg': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'nc_cc2_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff'],
                  'nc_cc2_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_cc2_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_cc2_title': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_cc2_text': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_cc2_textbg': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'nc_cc3_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff'],
                  'nc_cc3_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_cc3_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_cc3_title': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_cc3_text': ['#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000','#000000'],
                  'nc_cc3_textbg': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'brand_name': ['#000000','#000000','#000000','#d6d6d6','#000000','#000000','#3d3534','#000000','#1c1c1c'],
                  'brand_name_hover': ['#cccccc','#fed049','#cccccc','#cccccc','#cccccc','#cccccc','#3d3534','#cccccc','#1c1c1c'],
                  'nc_ot_bc': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#439079'],
                  'nc_ot_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#fb755f','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_ot_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#f93d60','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_om_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff'],
                  'nc_om_gs': ['#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_om_ge': ['#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'nc_ob_bc': ['#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff','#ffffff'],
                  'nc_ob_gs': ['#ffffff','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8','#f8f8f8'],
                  'nc_ob_ge': ['#005fbc','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'b_link': ['#323232','#888888','#323232','#ffffff','#1c1c1c','#1c1c1c','#3d3534','#414141','#f7e7ab'],
                  'b_link_hover': ['#000000','#323232','#000000','#ffffff','#2471ff','#ee3e29','#000000','#000000','#ffffff'],
                  'b_separator': ['#aaaaaa','#dddddd','#aaaaaa','#ffa293','#cccccc','#cccccc','#dec3c0','#aaaaaa','#337964'],
                  'page_bq_q': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#dec3c0','#cccccc','#f7e7ab'],
                  'contact_icon': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#1c1c1c','#ee3e29','#d2b2af','#cb6d4c','#f7e7ab'],
                  'warning_message_color': ['#ffd52a','#fed049','#ffd52a','#ffd52a','#ffd52a','#ffd52a','#d2b2af','#ffd52a','#ffd52a'],
                  'success_message_color': ['#00c293','#00c293','#00c293','#00c293','#00c293','#00c293','#d2b2af','#00c293','#00c293'],
                  'danger_message_color': ['#f05377','#f22e0d','#f05377','#f05377','#f05377','#ee3e29','#d2b2af','#f05377','#f7e7ab'],
                  'sidebar_title_border': ['#000000','#525252','#000000','#000000','#000000','#ee3e29','#d2b2af','#000000','#f7e7ab'],
                  'sidebar_border': ['#f2f2f2','#525252','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f7e7ab'],
                  'sidebar_link': ['#1c1c1c','#ffffff','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#414141','#000000'],
                  'sidebar_ball': ['#f2f2f2','#525252','#f2f2f2','#f2f2f2','#ffd800','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'sidebar_bcat': ['#f2f2f2','#fed049','#f2f2f2','#f2f2f2','#ffd800','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'sidebar_bfilter': ['#f2f2f2','#525252','#f2f2f2','#f2f2f2','#2471ff','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'sidebar_bsale': ['#f2f2f2','#525252','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'pl_number_color': ['#3b3b3b','#f2f2f2','#3b3b3b','#3b3b3b','#3b3b3b','#3b3b3b','#3d3534','#3b3b3b','#f7e7ab'],
                  'pl_number_color_hover': ['#000000','#fed049','#000000','#000000','#2471ff','#ee3e29','#6a605f','#000000','#ffffff'],
                  'pl_img_bg': ['#fafafa','#272727','#fafafa','#fafafa','#fafafa','#fafafa','#f1dfdd','#f2f2f2','#ffffff'],
                  'pl_text_bg': ['#ffd720','#fed049','#fafafa','#fafafa','#fafafa','#fafafa','#ffffff','#f2f2f2','#ffffff'],
                  'nc_pi_c': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2'],
                  'nc_pi_ch': ['#323232','#323232','#323232','#323232','#323232','#323232','#323232','#323232','#323232'],
                  'pl_name': ['#000000','#1c1c1c','#000000','#000000','#000000','#000000','#3d3534','#414141','#1c1c1c'],
                  'pl_price': ['#000000','#1c1c1c','#000000','#000000','#000000','#000000','#3d3534','#414141','#439079'],
                  'pl_hover_g1': ['#f2f2f2','#272727','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f1dfdd','#f2f2f2','#f2f2f2'],
                  'pl_hover_g2': ['#d1d1d1','#272727','#d1d1d1','#d1d1d1','#d1d1d1','#d1d1d1','#f1dfdd','#d1d1d1','#d1d1d1'],
                  'pl_hover_but': ['#000000','#fed049','#000000','#f2f2f2','#000000','#ffffff','#3d3534','#000000','#f7e7ab'],
                  'pl_hover_but_bg': ['#ffffff','#272727','#ffffff','#1c1c1c','#ffd800','#ee3e29','#f1dfdd','#f2f2f2','#439079'],
                  'pl_hover_but_b': ['#000000','#272727','#f2f2f2','#1c1c1c','#ffd800','#ee3e29','#f1dfdd','#f2f2f2','#439079'],
                  'pl_hover_buth': ['#ffffff','#fed049','#ffffff','#ffec1d','#ffd800','#ffffff','#3d3534','#ffffff','#f7e7ab'],
                  'pl_hover_but_bgh': ['#323232','#1c1c1c','#777777','#525252','#2471ff','#000000','#dec3c0','#cb6d4c','#337964'],
                  'pl_hover_but_bh': ['#323232','#1c1c1c','#777777','#525252','#2471ff','#000000','#f1dfdd','#cb6d4c','#337964'],
                  'pl_hover_but_out': ['#000000','#fed049','#000000','#000000','#000000','#000000','#3d3534','#000000','#f7e7ab'],
                  'pl_product_new_bg': ['#ffffff','#323232','#fafafa','#fafafa','#fafafa','#fafafa','#f6ebe9','#fafafa','#439079'],
                  'pl_product_new_border': ['#000000','#323232','#fafafa','#fafafa','#fafafa','#fafafa','#f6ebe9','#fafafa','#439079'],
                  'pl_product_new_color': ['#000000','#f2f2f2','#000000','#000000','#000000','#000000','#3d3534','#000000','#f7e7ab'],
                  'pl_product_sale_bg': ['#ffffff','#1c1c1c','#fafafa','#ffec1d','#ffd800','#ee3e29','#f6ebe9','#fafafa','#439079'],
                  'pl_product_sale_border': ['#ff3953','#1c1c1c','#fafafa','#ffec1d','#ffd800','#ee3e29','#f6ebe9','#fafafa','#439079'],
                  'pl_product_sale_color': ['#ff3953','#f2f2f2','#000000','#000000','#000000','#ffffff','#3d3534','#000000','#f7e7ab'],
                  'pp_reviews_staron': ['#ffdb46','#fed049','#ffdb46','#aaaaaa','#ffd800','#000000','#d2b2af','#cb6d4c','#ffdb46'],
                  'pp_reviews_staroff': ['#ffdb46','#fed049','#ffdb46','#aaaaaa','#ffd800','#000000','#d2b2af','#cb6d4c','#ffdb46'],
                  'nc_count_bg': ['#f2f2f2','#fed049','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#d2b2af','#f2f2f2','#439079'],
                  'nc_count_color': ['#aaaaaa','#888888','#aaaaaa','#aaaaaa','#aaaaaa','#aaaaaa','#d2b2af','#aaaaaa','#439079'],
                  'nc_count_time': ['#000000','#cccccc','#000000','#000000','#000000','#000000','#3d3534','#000000','#337964'],
                  'nc_count_watch': ['#000000','#fed049','#000000','#000000','#000000','#ee3e29','#3d3534','#000000','#337964'],
                  'nc_count_watch_bg': ['#f2f2f2','#424242','#f2f2f2','#f2f2f2','#ffffff','#fafafa','#f6ebe9','#f2f2f2','#ffffff'],
                  'pp_img_border': ['#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#f7e7ab'],
                  'pp_icon_border': ['#f2f2f2','#525252','#ffffff','#ffffff','#ffffff','#ffffff','#f2f2f2','#ffffff','#f7e7ab'],
                  'nc_mobadotsc': ['#525252','#cccccc','#525252','#525252','#525252','#525252','#3d3534','#525252','#f7e7ab'],
                  'pp_price_color': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#1c1c1c','#337964'],
                  'pp_price_dis': ['#ff3953','#eeeeee','#aaaaaa','#aaaaaa','#2471ff','#ee3e29','#3d3534','#cb6d4c','#aaaaaa'],
                  'pp_att_label': ['#1c1c1c','#f2f2f2','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#1c1c1c','#1c1c1c'],
                  'pp_att_color_active': ['#1c1c1c','#525252','#1c1c1c','#1c1c1c','#1c1c1c','#ee3e29','#3d3534','#cb6d4c','#337964'],
                  'pp_info_label': ['#a7a7a7','#c1c1c1','#aaaaaa','#aaaaaa','#aaaaaa','#aaaaaa','#6a605f','#aaaaaa','#aaaaaa'],
                  'pp_info_value': ['#000000','#f2f2f2','#000000','#000000','#2471ff','#ee3e29','#3d3534','#000000','#337964'],
                  'nc_pp_add_bg': ['#1c1c1c','#fed049','#ffffff','#1c1c1c','#ffd800','#ee3e29','#3d3534','#f2f2f2','#439079'],
                  'nc_pp_add_border': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#ffd800','#ee3e29','#3d3534','#1c1c1c','#439079'],
                  'nc_pp_add_color': ['#ffffff','#000000','#1c1c1c','#ffffff','#000000','#ffffff','#f1dfdd','#1c1c1c','#f7e7ab'],
                  'nc_count_pr_title': ['#ff3953','#fed049','#aaaaaa','#aaaaaa','#aaaaaa','#aaaaaa','#6a605f','#aaaaaa','#439079'],
                  'nc_count_pr_bg': ['#fafafa','#525252','#fafafa','#fafafa','#ffffff','#ffffff','#dec3c0','#f2f2f2','#ffffff'],
                  'nc_count_pr_sep': ['#1c1c1c','#fed049','#1c1c1c','#1c1c1c','#ffd800','#ee3e29','#3d3534','#1c1c1c','#337964'],
                  'nc_count_pr_numbers': ['#1c1c1c','#cccccc','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#3d3534','#1c1c1c','#337964'],
                  'nc_count_pr_color': ['#a7a7a7','#888888','#a7a7a7','#a7a7a7','#a7a7a7','#a7a7a7','#6a605f','#a7a7a7','#439079'],
                  'pp_tabs_bg': ['#fafafa','#1c1c1c','#fafafa','#fafafa','#fafafa','#fafafa','#f1dfdd','#fafafa','#fafafa'],
                  'o_option': ['#f2f2f2','#525252','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#dec3c0','#f2f2f2','#cccccc'],
                  'o_option_active': ['#00c37a','#fed049','#fedc60','#fedc60','#2471ff','#ee3e29','#3d3534','#cb6d4c','#439079'],
                  'o_info_text': ['#777777','#777777','#777777','#777777','#777777','#777777','#dec3c0','#777777','#777777'],
                  'lc_c': ['#00c37a','#ffffff','#00c37a','#fedc60','#2471ff','#ee3e29','#6a605f','#cb6d4c','#337964'],
                  'bl_head': ['#000000','#ffffff','#000000','#000000','#000000','#000000','#3d3534','#414141','#cccccc'],
                  'bl_h_title': ['#000000','#f2f2f2','#000000','#000000','#000000','#000000','#3d3534','#414141','#1c1c1c'],
                  'bl_h_title_h': ['#000000','#fed049','#000000','#000000','#000000','#000000','#ee3e29','#3d3534','#000000','#1c1c1c'],
                  'bl_h_meta': ['#777777','#777777','#777777','#777777','#777777','#777777','#6a605f','#777777','#cccccc'],
                  'bl_h_desc': ['#000000','#cccccc','#000000','#000000','#000000','#000000','#6a605f','#414141','#1c1c1c'],
                  'bl_meta': ['#000000','#777777','#000000','#000000','#000000','#000000','#6a605f','#777777','#cccccc'],
                  'nc_foot_bc': ['#ffffff','#fafafa','#f2f2f2','#f2f2f2','#ffffff','#f2f2f2','#fafafa','#f2f2f2','#439079'],
                  'nc_foot_gs': ['#ffffff','#f8f8f8','#ffffff','#ffffff','#ffffff','#ffffff','#f8f8f8','#ffffff','#ffffff'],
                  'nc_foot_ge': ['#005fbc','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6','#d6d6d6'],
                  'footer_border': ['#eeeeee','#000000','#eeeeee','#eeeeee','#eeeeee','#eeeeee','#f1dfdd','#414141','#439079'],
                  'footer_titles': ['#414141','#cccccc','#414141','#414141','#414141','#000000','#3d3534','#414141','#f7e7ab'],
                  'footer_text': ['#414141','#9d9d9d','#414141','#414141','#414141','#414141','#3d3534','#414141','#f7e7ab'],
                  'footer_link': ['#000000','#f2f2f2','#000000','#000000','#000000','#000000','#3d3534','#414141','#f7e7ab'],
                  'footer_link_h': ['#000000','#cccccc','#000000','#000000','#2471ff','#ee3e29','#137b42','#000000','#ffffff'],
                  'footer_news_bg': ['#ffffff','#272727','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#ffffff','#439079'],
                  'footer_news_border': ['#414141','#272727','#414141','#414141','#414141','#414141','#dec3c0','#414141','#f7e7ab'],
                  'footer_news_placeh': ['#000000','#cccccc','#000000','#000000','#000000','#000000','#6a605f','#414141','#f7e7ab'],
                  'footer_news_color': ['#000000','#ffffff','#000000','#000000','#000000','#000000','#3d3534','#000000','#f7e7ab'],
                  'footer_news_button': ['#414141','#fed049','#414141','#414141','#2471ff','#ee3e29','#3d3534','#414141','#ffffff'],
                  'nc_footer_soc': ['#000000','#ffffff','#000000','#000000','#000000','#000000','#3d3534','#414141','#f7e7ab'],
                  'nc_side_btn': ['#f2f2f2','#ffffff','#f2f2f2','#f2f2f2','#f2f2f2','#f2f2f2','#3d3534','#414141','#ffffff'],
                  'nc_side_bg': ['#ffffff','#272727','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#f2f2f2','#337964'],
                  'nc_side_b': ['#1c1c1c','#424242','#1c1c1c','#1c1c1c','#1c1c1c','#1c1c1c','#d2b2af','#cccccc','#337964'],
                  'nc_side_title': ['#000000','#fafafa','#000000','#000000','#000000','#000000','#3d3534','#414141','#f7e7ab'],
                  'nc_side_text': ['#000000','#aaaaaa','#000000','#000000','#000000','#000000','#3d3534','#777777','#f7e7ab'],
                  'nc_side_btnb': ['#000000','#777777','#000000','#000000','#2471ff','#ee3e29','#d2b2af','#414141','#f7e7ab'],
                  'nc_side_btnbg': ['#000000','#272727','#000000','#000000','#2471ff','#ee3e29','#f1dfdd','#f2f2f2','#337964'],
                  'nc_mob_header': ['#ffffff','#272727','#ffffff','#ffffff','#ffffff','#ffffff','#f1dfdd','#f2f2f2','#337964'],
                  'nc_mob_menu': ['#000000','#ffffff','#000000','#000000','#000000','#000000','#3d3534','#414141','#f7e7ab']
        }

        var keys = Object.keys(scheme_colors);
        for (var i = 0; i < keys.length; i++) {
            var key = keys[i];
            var value = scheme_colors[key][scheme_number - 1];
            var name = $("[name='" + key + "']");

            $(name).each(function() {
                $(this).val(value)
            });
        }

        $('.colors_apply').html('<i></i>Color scheme changed, click save changes to save it');

    });


    // reset popup prevent
    $(".reset_container").click(function() {
        $(".reset_popup").css('top','0');
    });

    $(".no-button").click(function() {
        $(".reset_popup").css('top','100px');
    });


    //slider

    $('.font_weight').each( function() {
      var currentinput = $(this).find("input");
      var currentvalue = currentinput.val();
      var sliderdiv = $(this).find('.margin-form > div');
      sliderdiv.slider({
        range: "min", min: 300, max: 700, step: 100, value: currentvalue, slide: function( event, ui ) {
          currentinput.val( ui.value );
        }
      });
    });

    var nc_bw_icons = $( "#nc_bw_icons" ).val()
    $( "#slider_nc_bw_icons" ).slider({
      range: "min", min: 12, max: 42, step: 2, value: nc_bw_icons, slide: function( event, ui ) {
        $( "#nc_bw_icons" ).val( ui.value );
      }
    });
    var nc_bw_menu = $( "#nc_bw_menu" ).val()
    $( "#slider_nc_bw_menu" ).slider({
      range: "min", min: 12, max: 42, step: 2, value: nc_bw_menu, slide: function( event, ui ) {
        $( "#nc_bw_menu" ).val( ui.value );
      }
    });


    //if

    if($('#body_box_sw1').is(':checked')) { $('.if_body_box_bg').slideDown(500); } else { $('.if_body_box_bg').slideUp(500); }
    if($('#body_box_sw2').is(':checked')) { $('.if_body_box_gr').slideDown(500); } else { $('.if_body_box_gr').slideUp(500); }
    if($('#body_box_sw3').is(':checked')) { $('.if_body_box_im').slideDown(500); } else { $('.if_body_box_im').slideUp(500); }
    if($('#body_box_sw4').is(':checked')) { $('.if_body_box_te').slideDown(500); } else { $('.if_body_box_te').slideUp(500); }

    if($('#g_hp1_sw1').is(':checked')) { $('.if_g_hp1_bg').slideDown(500); } else { $('.if_g_hp1_bg').slideUp(500); }
    if($('#g_hp1_sw2').is(':checked')) { $('.if_g_hp1_gr').slideDown(500); } else { $('.if_g_hp1_gr').slideUp(500); }
    if($('#g_hp1_sw3').is(':checked')) { $('.if_g_hp1_im').slideDown(500); } else { $('.if_g_hp1_im').slideUp(500); }
    if($('#g_hp1_sw4').is(':checked')) { $('.if_g_hp1_te').slideDown(500); } else { $('.if_g_hp1_te').slideUp(500); }

    if($('#g_hp2_sw1').is(':checked')) { $('.if_g_hp2_bg').slideDown(500); } else { $('.if_g_hp2_bg').slideUp(500); }
    if($('#g_hp2_sw2').is(':checked')) { $('.if_g_hp2_gr').slideDown(500); } else { $('.if_g_hp2_gr').slideUp(500); }
    if($('#g_hp2_sw3').is(':checked')) { $('.if_g_hp2_im').slideDown(500); } else { $('.if_g_hp2_im').slideUp(500); }
    if($('#g_hp2_sw4').is(':checked')) { $('.if_g_hp2_te').slideDown(500); } else { $('.if_g_hp2_te').slideUp(500); }

    if($('#g_hp3_sw1').is(':checked')) { $('.if_g_hp3_bg').slideDown(500); } else { $('.if_g_hp3_bg').slideUp(500); }
    if($('#g_hp3_sw2').is(':checked')) { $('.if_g_hp3_gr').slideDown(500); } else { $('.if_g_hp3_gr').slideUp(500); }
    if($('#g_hp3_sw3').is(':checked')) { $('.if_g_hp3_im').slideDown(500); } else { $('.if_g_hp3_im').slideUp(500); }
    if($('#g_hp3_sw4').is(':checked')) { $('.if_g_hp3_te').slideDown(500); } else { $('.if_g_hp3_te').slideUp(500); }

    if($('#g_hp4_sw1').is(':checked')) { $('.if_g_hp4_bg').slideDown(500); } else { $('.if_g_hp4_bg').slideUp(500); }
    if($('#g_hp4_sw2').is(':checked')) { $('.if_g_hp4_gr').slideDown(500); } else { $('.if_g_hp4_gr').slideUp(500); }
    if($('#g_hp4_sw3').is(':checked')) { $('.if_g_hp4_im').slideDown(500); } else { $('.if_g_hp4_im').slideUp(500); }
    if($('#g_hp4_sw4').is(':checked')) { $('.if_g_hp4_te').slideDown(500); } else { $('.if_g_hp4_te').slideUp(500); }

    if($('#g_hp5_sw1').is(':checked')) { $('.if_g_hp5_bg').slideDown(500); } else { $('.if_g_hp5_bg').slideUp(500); }
    if($('#g_hp5_sw2').is(':checked')) { $('.if_g_hp5_gr').slideDown(500); } else { $('.if_g_hp5_gr').slideUp(500); }
    if($('#g_hp5_sw3').is(':checked')) { $('.if_g_hp5_im').slideDown(500); } else { $('.if_g_hp5_im').slideUp(500); }
    if($('#g_hp5_sw4').is(':checked')) { $('.if_g_hp5_te').slideDown(500); } else { $('.if_g_hp5_te').slideUp(500); }

    if($('#g_hp6_sw1').is(':checked')) { $('.if_g_hp6_bg').slideDown(500); } else { $('.if_g_hp6_bg').slideUp(500); }
    if($('#g_hp6_sw2').is(':checked')) { $('.if_g_hp6_gr').slideDown(500); } else { $('.if_g_hp6_gr').slideUp(500); }
    if($('#g_hp6_sw3').is(':checked')) { $('.if_g_hp6_im').slideDown(500); } else { $('.if_g_hp6_im').slideUp(500); }
    if($('#g_hp6_sw4').is(':checked')) { $('.if_g_hp6_te').slideDown(500); } else { $('.if_g_hp6_te').slideUp(500); }

    if($('#g_fs1_sw1').is(':checked')) { $('.if_g_fs1_bg').slideDown(500); } else { $('.if_g_fs1_bg').slideUp(500); }
    if($('#g_fs1_sw2').is(':checked')) { $('.if_g_fs1_gr').slideDown(500); } else { $('.if_g_fs1_gr').slideUp(500); }
    if($('#g_fs1_sw3').is(':checked')) { $('.if_g_fs1_im').slideDown(500); } else { $('.if_g_fs1_im').slideUp(500); }
    if($('#g_fs1_sw4').is(':checked')) { $('.if_g_fs1_te').slideDown(500); } else { $('.if_g_fs1_te').slideUp(500); }

    if($('#g_fs2_sw1').is(':checked')) { $('.if_g_fs2_bg').slideDown(500); } else { $('.if_g_fs2_bg').slideUp(500); }
    if($('#g_fs2_sw2').is(':checked')) { $('.if_g_fs2_gr').slideDown(500); } else { $('.if_g_fs2_gr').slideUp(500); }
    if($('#g_fs2_sw3').is(':checked')) { $('.if_g_fs2_im').slideDown(500); } else { $('.if_g_fs2_im').slideUp(500); }
    if($('#g_fs2_sw4').is(':checked')) { $('.if_g_fs2_te').slideDown(500); } else { $('.if_g_fs2_te').slideUp(500); }

    if($('#g_fs3_sw1').is(':checked')) { $('.if_g_fs3_bg').slideDown(500); } else { $('.if_g_fs3_bg').slideUp(500); }
    if($('#g_fs3_sw2').is(':checked')) { $('.if_g_fs3_gr').slideDown(500); } else { $('.if_g_fs3_gr').slideUp(500); }
    if($('#g_fs3_sw3').is(':checked')) { $('.if_g_fs3_im').slideDown(500); } else { $('.if_g_fs3_im').slideUp(500); }
    if($('#g_fs3_sw4').is(':checked')) { $('.if_g_fs3_te').slideDown(500); } else { $('.if_g_fs3_te').slideUp(500); }

    if($('#nc_ot_bg1').is(':checked')) { $('.if_nc_ot_bc').slideDown(500); } else { $('.if_nc_ot_bc').slideUp(500); }
    if($('#nc_ot_bg2').is(':checked')) { $('.if_nc_ot_gr').slideDown(500); } else { $('.if_nc_ot_gr').slideUp(500); }
    if($('#nc_ot_bg3').is(':checked')) { $('.if_nc_ot_im').slideDown(500); } else { $('.if_nc_ot_im').slideUp(500); }
    if($('#nc_ot_bg4').is(':checked')) { $('.if_nc_ot_te').slideDown(500); } else { $('.if_nc_ot_te').slideUp(500); }

    if($('#nc_om_bg1').is(':checked')) { $('.if_nc_om_bc').slideDown(500); } else { $('.if_nc_om_bc').slideUp(500); }
    if($('#nc_om_bg2').is(':checked')) { $('.if_nc_om_gr').slideDown(500); } else { $('.if_nc_om_gr').slideUp(500); }
    if($('#nc_om_bg3').is(':checked')) { $('.if_nc_om_im').slideDown(500); } else { $('.if_nc_om_im').slideUp(500); }
    if($('#nc_om_bg4').is(':checked')) { $('.if_nc_om_te').slideDown(500); } else { $('.if_nc_om_te').slideUp(500); }

    if($('#nc_ob_bg1').is(':checked')) { $('.if_nc_ob_bc').slideDown(500); } else { $('.if_nc_ob_bc').slideUp(500); }
    if($('#nc_ob_bg2').is(':checked')) { $('.if_nc_ob_gr').slideDown(500); } else { $('.if_nc_ob_gr').slideUp(500); }
    if($('#nc_ob_bg3').is(':checked')) { $('.if_nc_ob_im').slideDown(500); } else { $('.if_nc_ob_im').slideUp(500); }
    if($('#nc_ob_bg4').is(':checked')) { $('.if_nc_ob_te').slideDown(500); } else { $('.if_nc_ob_te').slideUp(500); }

    if($('#nc_foot_bg1').is(':checked')) { $('.if_nc_foot_bc').slideDown(500); } else { $('.if_nc_foot_bc').slideUp(500); }
    if($('#nc_foot_bg2').is(':checked')) { $('.if_nc_foot_gr').slideDown(500); } else { $('.if_nc_foot_gr').slideUp(500); }
    if($('#nc_foot_bg3').is(':checked')) { $('.if_nc_foot_im').slideDown(500); } else { $('.if_nc_foot_im').slideUp(500); }
    if($('#nc_foot_bg4').is(':checked')) { $('.if_nc_foot_te').slideDown(500); } else { $('.if_nc_foot_te').slideUp(500); }

    if($('#nc_ht_bg1').is(':checked')) { $('.if_nc_ht_bc').slideDown(500); } else { $('.if_nc_ht_bc').slideUp(500); }
    if($('#nc_ht_bg2').is(':checked')) { $('.if_nc_ht_gr').slideDown(500); } else { $('.if_nc_ht_gr').slideUp(500); }
    if($('#nc_ht_bg3').is(':checked')) { $('.if_nc_ht_im').slideDown(500); } else { $('.if_nc_ht_im').slideUp(500); }
    if($('#nc_ht_bg4').is(':checked')) { $('.if_nc_ht_te').slideDown(500); } else { $('.if_nc_ht_te').slideUp(500); }

    if($('#nc_hm_bg1').is(':checked')) { $('.if_nc_hm_bc').slideDown(500); } else { $('.if_nc_hm_bc').slideUp(500); }
    if($('#nc_hm_bg2').is(':checked')) { $('.if_nc_hm_gr').slideDown(500); } else { $('.if_nc_hm_gr').slideUp(500); }
    if($('#nc_hm_bg3').is(':checked')) { $('.if_nc_hm_im').slideDown(500); } else { $('.if_nc_hm_im').slideUp(500); }
    if($('#nc_hm_bg4').is(':checked')) { $('.if_nc_hm_te').slideDown(500); } else { $('.if_nc_hm_te').slideUp(500); }

    if($('#nc_hb_bg1').is(':checked')) { $('.if_nc_hb_bc').slideDown(500); } else { $('.if_nc_hb_bc').slideUp(500); }
    if($('#nc_hb_bg2').is(':checked')) { $('.if_nc_hb_gr').slideDown(500); } else { $('.if_nc_hb_gr').slideUp(500); }
    if($('#nc_hb_bg3').is(':checked')) { $('.if_nc_hb_im').slideDown(500); } else { $('.if_nc_hb_im').slideUp(500); }
    if($('#nc_hb_bg4').is(':checked')) { $('.if_nc_hb_te').slideDown(500); } else { $('.if_nc_hb_te').slideUp(500); }

    if($('#nc_main_bg1').is(':checked')) { $('.if_nc_main_bc').slideDown(500); } else { $('.if_nc_main_bc').slideUp(500); }
    if($('#nc_main_bg2').is(':checked')) { $('.if_nc_main_gr').slideDown(500); } else { $('.if_nc_main_gr').slideUp(500); }
    if($('#nc_main_bg3').is(':checked')) { $('.if_nc_main_im').slideDown(500); } else { $('.if_nc_main_im').slideUp(500); }
    if($('#nc_main_bg4').is(':checked')) { $('.if_nc_main_te').slideDown(500); } else { $('.if_nc_main_te').slideUp(500); }

    if($('#g_op2_sw1').is(':checked')) { $('.if_g_op2_bg').slideDown(500); } else { $('.if_g_op2_bg').slideUp(500); }
    if($('#g_op2_sw2').is(':checked')) { $('.if_g_op2_gr').slideDown(500); } else { $('.if_g_op2_gr').slideUp(500); }
    if($('#g_op2_sw3').is(':checked')) { $('.if_g_op2_im').slideDown(500); } else { $('.if_g_op2_im').slideUp(500); }
    if($('#g_op2_sw4').is(':checked')) { $('.if_g_op2_te').slideDown(500); } else { $('.if_g_op2_te').slideUp(500); }

    if($('#g_mc_sw1').is(':checked')) { $('.if_g_mc_bg').slideDown(500); } else { $('.if_g_mc_bg').slideUp(500); }
    if($('#g_mc_sw2').is(':checked')) { $('.if_g_mc_gr').slideDown(500); } else { $('.if_g_mc_gr').slideUp(500); }
    if($('#g_mc_sw3').is(':checked')) { $('.if_g_mc_im').slideDown(500); } else { $('.if_g_mc_im').slideUp(500); }
    if($('#g_mc_sw4').is(':checked')) { $('.if_g_mc_te').slideDown(500); } else { $('.if_g_mc_te').slideUp(500); }

    if($('#g_bc_sw1').is(':checked')) { $('.if_g_bc_bg').slideDown(500); } else { $('.if_g_bc_bg').slideUp(500); }
    if($('#g_bc_sw2').is(':checked')) { $('.if_g_bc_gr').slideDown(500); } else { $('.if_g_bc_gr').slideUp(500); }
    if($('#g_bc_sw3').is(':checked')) { $('.if_g_bc_im').slideDown(500); } else { $('.if_g_bc_im').slideUp(500); }
    if($('#g_bc_sw4').is(':checked')) { $('.if_g_bc_te').slideDown(500); } else { $('.if_g_bc_te').slideUp(500); }

    if($('#nc_feat_bg1').is(':checked') || $('#nc_feat_bg2').is(':checked')) { $('.if_nc_feat_bg').slideDown(500); } else { $('.if_nc_feat_bg').slideUp(500); }
    if($('#nc_best_bg1').is(':checked') || $('#nc_best_bg2').is(':checked')) { $('.if_nc_best_bg').slideDown(500); } else { $('.if_nc_best_bg').slideUp(500); }
    if($('#nc_new_bg1').is(':checked') || $('#nc_new_bg2').is(':checked')) { $('.if_nc_new_bg').slideDown(500); } else { $('.if_nc_new_bg').slideUp(500); }
    if($('#nc_sale_bg1').is(':checked') || $('#nc_sale_bg2').is(':checked')) { $('.if_nc_sale_bg').slideDown(500); } else { $('.if_nc_sale_bg').slideUp(500); }
    if($('#nc_cc1_bg1').is(':checked') || $('#nc_cc1_bg2').is(':checked')) { $('.if_nc_cc1_bg').slideDown(500); } else { $('.if_nc_cc1_bg').slideUp(500); }
    if($('#nc_cc2_bg1').is(':checked') || $('#nc_cc2_bg2').is(':checked')) { $('.if_nc_cc2_bg').slideDown(500); } else { $('.if_nc_cc2_bg').slideUp(500); }
    if($('#nc_cc3_bg1').is(':checked') || $('#nc_cc3_bg2').is(':checked')) { $('.if_nc_cc3_bg').slideDown(500); } else { $('.if_nc_cc3_bg').slideUp(500); }


    if($('#g_pro_w2').is(':checked')) { $('.if_pa_pro').slideDown(500); } else { $('.if_pa_pro').slideUp(500); }
    if($('#g_mini_w2').is(':checked')) { $('.if_pa_mini').slideDown(500); } else { $('.if_pa_mini').slideUp(500); }
    if($('#g_info_w2').is(':checked')) { $('.if_pa_info').slideDown(500); } else { $('.if_pa_info').slideUp(500); }
    if($('#g_bra_w2').is(':checked')) { $('.if_pa_bra').slideDown(500); } else { $('.if_pa_bra').slideUp(500); }
    if($('#g_blog_w2').is(':checked')) { $('.if_pa_blog').slideDown(500); } else { $('.if_pa_blog').slideUp(500); }
    if($('#ban_wid_top2').is(':checked')) { $('.if_pa_ban_top').slideDown(500); } else { $('.if_pa_ban_top').slideUp(500); }
    if($('#ban_wid_pro2').is(':checked')) { $('.if_pa_ban_pro').slideDown(500); } else { $('.if_pa_ban_pro').slideUp(500); }
    if($('#ban_wid_mini2').is(':checked')) { $('.if_pa_ban_mini').slideDown(500); } else { $('.if_pa_ban_mini').slideUp(500); }
    if($('#ban_wid_info2').is(':checked')) { $('.if_pa_ban_info').slideDown(500); } else { $('.if_pa_ban_info').slideUp(500); }
    if($('#ban_wid_bra2').is(':checked')) { $('.if_pa_ban_bra').slideDown(500); } else { $('.if_pa_ban_bra').slideUp(500); }
    if($('#ban_wid_home2').is(':checked')) { $('.if_pa_ban_home').slideDown(500); } else { $('.if_pa_ban_home').slideUp(500); }
    if($('#ban_wid_foot2').is(':checked')) { $('.if_pa_ban_foot').slideDown(500); } else { $('.if_pa_ban_foot').slideUp(500); }
    if($('#ban_wid_foott2').is(':checked')) { $('.if_pa_ban_foott').slideDown(500); } else { $('.if_pa_ban_foott').slideUp(500); }
    if($('#ban_wid_footb2').is(':checked')) { $('.if_pa_ban_footb').slideDown(500); } else { $('.if_pa_ban_footb').slideUp(500); }
    if($('#ban_wid_s12').is(':checked')) { $('.if_pa_ban_s1').slideDown(500); } else { $('.if_pa_ban_s1').slideUp(500); }
    if($('#ban_wid_s22').is(':checked')) { $('.if_pa_ban_s2').slideDown(500); } else { $('.if_pa_ban_s2').slideUp(500); }
    if($('#ban_wid_s32').is(':checked')) { $('.if_pa_ban_s3').slideDown(500); } else { $('.if_pa_ban_s3').slideUp(500); }
    if($('#pp_lay1').is(':checked')) { $('.if_pp_thumbs').slideDown(500); } else { $('.if_pp_thumbs').slideUp(500); }


    if($('#nc_pp_image3').is(':checked')) {
        $('.if_pp_image3').slideDown(500);
    } else { $('.if_pp_image3').slideUp(500); }

    if($('#nc_pc_layout2').is(':checked') || $('#nc_pc_layout3').is(':checked')) {
        $('.if_pc_layout23').slideDown(500);
    } else { $('.if_pc_layout23').slideUp(500); }

    if($('#header_lay5').is(':checked') || $('#header_lay6').is(':checked')) {
        $('.if_nav').slideDown(500);
    } else { $('.if_nav').slideUp(500); }

    if($('#pl_filter_b1').is(':checked')) {
        $('.if_pl_filter_b').slideDown(500);
    } else { $('.if_pl_filter_b').slideUp(500); }

    if($('#bl_dd1').is(':checked')) {
        $('.if_bl_dd').slideDown(500);
    } else { $('.if_bl_dd').slideUp(500); }

    if($('#nc_header_trans1').is(':checked')) {
        $('.if_trans').slideDown(500);
    } else { $('.if_trans').slideUp(500); }

    if($('#header_ns1').is(':checked')) {
        $('.if_toppanel').slideDown(500);
    } else { $('.if_toppanel').slideUp(500); }

    if($('#search_lay4').is(':checked')) {
        $('.if_search').slideDown(500);
    } else { $('.if_search').slideUp(500); }

    if($('#cl_popup_b1').is(':checked')) {
        $('.if_cl_popup_b').slideDown(500);
    } else { $('.if_cl_popup_b').slideUp(500); }

    if($('#c_popup_b1').is(':checked')) {
        $('.if_c_popup_b').slideDown(500);
    } else { $('.if_c_popup_b').slideUp(500); }

    if($('#m_popup_b1').is(':checked')) {
        $('.if_m_popup_b').slideDown(500);
    } else { $('.if_m_popup_b').slideUp(500); }

    if($('#m_link_bgs1').is(':checked')) {
        $('.if_m_bg').slideDown(500);
    } else { $('.if_m_bg').slideUp(500); }

    if($('#nc_loader_logo_1').is(':checked')) {
        $('.if_loader_logo').slideDown(500);
    } else { $('.if_loader_logo').slideUp(500); }

    if($('#pl_nav_bot_b0').is(':checked')) {
        $('.if_pl_nav_bot_b').slideUp(500);
    }
    if($('#pl_nav_bot_b1').is(':checked')) {
        $('.if_pl_nav_bot_b').slideDown(500);
    }
    if($('#pl_nav_top_b0').is(':checked')) {
        $('.if_pl_nav_top_b').slideUp(500);
    }
    if($('#pl_nav_top_b1').is(':checked')) {
        $('.if_pl_nav_top_b').slideDown(500);
    }
    if($('#pp_li0').is(':checked')) {
        $('.if_pp_li').slideUp(500);
    }
    if($('#pp_li1').is(':checked')) {
        $('.if_pp_li').slideDown(500);
    }
    if($('#pp_imgb0').is(':checked')) {
        $('.if_pp_imgb').slideUp(500);
    }
    if($('#pp_imgb1').is(':checked')) {
        $('.if_pp_imgb').slideDown(500);
    }
    if($('#footer_map_enbb0').is(':checked')) {
        $('.if_footer_map_enbb').slideUp(500);
    }
    if($('#footer_map_enbb1').is(':checked')) {
        $('.if_footer_map_enbb').slideDown(500);
    }
    if($('#footer_map_en0').is(':checked')) {
        $('.if_footer_map_en').slideUp(500);
    }
    if($('#footer_map_en1').is(':checked')) {
        $('.if_footer_map_en').slideDown(500);
    }
    if($('#sidebar_bb2').is(':checked')) {
        $('.if_sidebar_bb').slideUp(500);
    }
    if($('#sidebar_bb1').is(':checked')) {
        $('.if_sidebar_bb').slideDown(500);
    }
    if($('#nc_pi_b2').is(':checked')) {
        $('.if_nc_pi_b').slideUp(500);
    }
    if($('#nc_pi_b1').is(':checked')) {
        $('.if_nc_pi_b').slideDown(500);
    }
    if($('#sidebar_categories_b0').is(':checked')) {
        $('.if_sidebar_categories_b').slideUp(500);
    }
    if($('#sidebar_categories_b1').is(':checked')) {
        $('.if_sidebar_categories_b').slideDown(500);
    }
    if($('#sidebar_b0').is(':checked')) {
        $('.if_sidebar_content_b').slideUp(500);
    }
    if($('#sidebar_b1').is(':checked')) {
        $('.if_sidebar_content_b').slideDown(500);
    }
    if($('#sidebar_block_content_qbg0').is(':checked')) {
        $('.if_sidebar_qbg').slideUp(500);
    }
    if($('#sidebar_block_content_qbg1').is(':checked')) {
        $('.if_sidebar_qbg').slideDown(500);
    }
    if($('#sidebar_title_b0').is(':checked')) {
        $('.if_sidebar_title_b').slideUp(500);
    }
    if($('#sidebar_title_b1').is(':checked')) {
        $('.if_sidebar_title_b').slideDown(500);
    }
    if($('#sidebar_title0').is(':checked')) {
        $('.if_sidebar_title').slideUp(500);
    }
    if($('#sidebar_title1').is(':checked')) {
        $('.if_sidebar_title').slideDown(500);
    }
    if($('#sidebar_bg0').is(':checked')) {
        $('.if_sidebar_bg').slideUp(500);
    }
    if($('#sidebar_bg1').is(':checked')) {
        $('.if_sidebar_bg').slideDown(500);
    }
    if($('#bl_rm_bg0').is(':checked')) {
        $('.if_rmbg').slideUp(500);
    }
    if($('#bl_rm_bg1').is(':checked')) {
        $('.if_rmbg').slideDown(500);
    }
    if($('#bl_rm_border0').is(':checked')) {
        $('.if_rmborder').slideUp(500);
    }
    if($('#bl_rm_border1').is(':checked')) {
        $('.if_rmborder').slideDown(500);
    }
    if($('#g_lay1').is(':checked')) {
        $('.if_boxed').slideUp(500);
    }
    if($('#g_lay2').is(':checked')) {
        $('.if_boxed').slideDown(500);
    }
    if($('#display_gradient_1').is(':checked')) {
        $('.if_image').slideDown(500);
    }
    if($('#display_gradient_0').is(':checked')) {
        $('.if_image').slideUp(500);
    }

    //if boxed
    $('.nc_m_under').click(function() {
        if($('#nc_m_under0').is(':checked')) {
            $('.if_under').slideUp(500);
        }
        if($('#nc_m_under1').is(':checked')) {
            $('.if_under').slideDown(500);
        }
    });
    //if boxed
    $('.glay').click(function() {
        if($('#g_lay1').is(':checked')) {
            $('.if_boxed').slideUp(500);
        }
        if($('#g_lay2').is(':checked')) {
            $('.if_boxed').slideDown(500);
        }
    });
    //if image
    $('.if_img').click(function() {
        if($('#display_gradient_1').is(':checked')) {
            $('.if_image').slideDown(500);
        }
        if($('#display_gradient_0').is(':checked')) {
            $('.if_image').slideUp(500);
        }
    });
    //if sidebar title border
    $('.sidebar_title_b').click(function() {
        if($('#sidebar_title_b1').is(':checked')) {
            $('.if_sidebar_title_b').slideDown(500);
        }
        if($('#sidebar_title_b0').is(':checked')) {
            $('.if_sidebar_title_b').slideUp(500);
        }
    });
    //if sidebar content border
    $('.nc_pi_b').click(function() {
        if($('#nc_pi_b1').is(':checked')) {
            $('.if_nc_pi_b').slideDown(500);
        }
        if($('#nc_pi_b2').is(':checked')) {
            $('.if_nc_pi_b').slideUp(500);
        }
    });
    //if sidebar content border
    $('.sidebar_b').click(function() {
        if($('#sidebar_b1').is(':checked')) {
            $('.if_sidebar_content_b').slideDown(500);
        }
        if($('#sidebar_b0').is(':checked')) {
            $('.if_sidebar_content_b').slideUp(500);
        }
    });
    //if product image border
    $('.pp_imgb').click(function() {
        if($('#pp_imgb1').is(':checked')) {
            $('.if_pp_imgb').slideDown(500);
        }
        if($('#pp_imgb0').is(':checked')) {
            $('.if_pp_imgb').slideUp(500);
        }
    });
    //if product label icon
    $('.pp_li').click(function() {
        if($('#pp_li1').is(':checked')) {
            $('.if_pp_li').slideDown(500);
        }
        if($('#pp_li0').is(':checked')) {
            $('.if_pp_li').slideUp(500);
        }
    });
    //if top nav b
    $('.pl_nav_top_b').click(function() {
        if($('#pl_nav_top_b1').is(':checked')) {
            $('.if_pl_nav_top_b').slideDown(500);
        }
        if($('#pl_nav_top_b0').is(':checked')) {
            $('.if_pl_nav_top_b').slideUp(500);
        }
    });
    //if bot nav b
    $('.pl_nav_bot_b').click(function() {
        if($('#pl_nav_bot_b1').is(':checked')) {
            $('.if_pl_nav_bot_b').slideDown(500);
        } else { $('.if_pl_nav_bot_b').slideUp(500); }
    });
    //if loader logo
    $('.nc_loader_logo').click(function() {
        if($('#nc_loader_logo_1').is(':checked')) {
            $('.if_loader_logo').slideDown(500);
        } else { $('.if_loader_logo').slideUp(500); }
    });
    //if cl popup border
    $('.cl_popup_b').click(function() {
        if($('#cl_popup_b1').is(':checked')) {
            $('.if_cl_popup_b').slideDown(500);
        } else { $('.if_cl_popup_b').slideUp(500); }
    });
    //if c popup border
    $('.c_popup_b').click(function() {
        if($('#c_popup_b1').is(':checked')) {
            $('.if_c_popup_b').slideDown(500);
        } else { $('.if_c_popup_b').slideUp(500); }
    });
    //if m popup border
    $('.m_popup_b').click(function() {
        if($('#m_popup_b1').is(':checked')) {
            $('.if_m_popup_b').slideDown(500);
        } else { $('.if_m_popup_b').slideUp(500); }
    });
    //if m bg
    $('.m_link_bgs').click(function() {
        if($('#m_link_bgs1').is(':checked')) {
            $('.if_m_bg').slideDown(500);
        } else { $('.if_m_bg').slideUp(500); }
    });
    //if pl_filter_b
    $('.pl_filter_b').click(function() {
        if($('#pl_filter_b1').is(':checked')) {
            $('.if_pl_filter_b').slideDown(500);
        } else { $('.if_pl_filter_b').slideUp(500); }
    });
    //if bl date
    $('.bl_dd').click(function() {
        if($('#bl_dd1').is(':checked')) {
            $('.if_bl_dd').slideDown(500);
        } else { $('.if_bl_dd').slideUp(500); }
    });
    //if trah
    $('.nc_header_trans').click(function() {
        if($('#nc_header_trans1').is(':checked')) {
            $('.if_trans').slideDown(500);
        } else { $('.if_trans').slideUp(500); }
    });
    $('.header_ns').click(function() {
        if($('#header_ns1').is(':checked')) {
            $('.if_toppanel').slideDown(500);
        } else { $('.if_toppanel').slideUp(500); }
    });
    //if trao
    $('.search_lay').click(function() {
        if($('#search_lay4').is(':checked')) {
            $('.if_search').slideDown(500);
        } else { $('.if_search').slideUp(500); }
    });
    //if nav
    $('.header_lay').click(function() {
        if($('#header_lay5').is(':checked') || $('#header_lay6').is(':checked')) {
            $('.if_nav').slideDown(500);
        } else { $('.if_nav').slideUp(500); }
    });
    //if nav
    $('.nc_pc_layout').click(function() {
        if($('#nc_pc_layout2').is(':checked') || $('#nc_pc_layout3').is(':checked')) {
            $('.if_pc_layout23').slideDown(500);
        } else { $('.if_pc_layout23').slideUp(500); }
    });
    //if hover 4
    if($('#nc_p_hover4').is(':checked')) {
        $('.if_hover4').slideDown(500);
    } else {
        $('.if_hover4').slideUp(500);
    }
    $('.nc_p_hover').click(function() {
        setTimeout(function(){
            if($('#nc_p_hover4').is(':checked')) {
                $('.if_hover4').slideDown(500);
            } else {
                $('.if_hover4').slideUp(500);
            }
        }, 200);
    });
    //if container 4 then hover 4
    if($('#nc_pc_layout4').is(':checked')) {
        $('#nc_p_hover4').prop("checked", true);
    }
    $('.nc_pc_layout').click(function() {
        setTimeout(function(){
            if($('#nc_pc_layout4').is(':checked')) {
                $('#nc_p_hover4').prop("checked", true);
                $('.if_hover4').slideDown(500);
            }
        }, 200);
    });
    // sections start
    $('.body_box_sw').click(function() { if($('#body_box_sw1').is(':checked')) { $('.if_body_box_bg').slideDown(500); } else { $('.if_body_box_bg').slideUp(500); } });
    $('.body_box_sw').click(function() { if($('#body_box_sw2').is(':checked')) { $('.if_body_box_gr').slideDown(500); } else { $('.if_body_box_gr').slideUp(500); } });
    $('.body_box_sw').click(function() { if($('#body_box_sw3').is(':checked')) { $('.if_body_box_im').slideDown(500); } else { $('.if_body_box_im').slideUp(500); } });
    $('.body_box_sw').click(function() { if($('#body_box_sw4').is(':checked')) { $('.if_body_box_te').slideDown(500); } else { $('.if_body_box_te').slideUp(500); } });

    $('.g_hp1_sw').click(function() { if($('#g_hp1_sw1').is(':checked')) { $('.if_g_hp1_bg').slideDown(500); } else { $('.if_g_hp1_bg').slideUp(500); } });
    $('.g_hp1_sw').click(function() { if($('#g_hp1_sw2').is(':checked')) { $('.if_g_hp1_gr').slideDown(500); } else { $('.if_g_hp1_gr').slideUp(500); } });
    $('.g_hp1_sw').click(function() { if($('#g_hp1_sw3').is(':checked')) { $('.if_g_hp1_im').slideDown(500); } else { $('.if_g_hp1_im').slideUp(500); } });
    $('.g_hp1_sw').click(function() { if($('#g_hp1_sw4').is(':checked')) { $('.if_g_hp1_te').slideDown(500); } else { $('.if_g_hp1_te').slideUp(500); } });

    $('.g_hp2_sw').click(function() { if($('#g_hp2_sw1').is(':checked')) { $('.if_g_hp2_bg').slideDown(500); } else { $('.if_g_hp2_bg').slideUp(500); } });
    $('.g_hp2_sw').click(function() { if($('#g_hp2_sw2').is(':checked')) { $('.if_g_hp2_gr').slideDown(500); } else { $('.if_g_hp2_gr').slideUp(500); } });
    $('.g_hp2_sw').click(function() { if($('#g_hp2_sw3').is(':checked')) { $('.if_g_hp2_im').slideDown(500); } else { $('.if_g_hp2_im').slideUp(500); } });
    $('.g_hp2_sw').click(function() { if($('#g_hp2_sw4').is(':checked')) { $('.if_g_hp2_te').slideDown(500); } else { $('.if_g_hp2_te').slideUp(500); } });

    $('.g_hp3_sw').click(function() { if($('#g_hp3_sw1').is(':checked')) { $('.if_g_hp3_bg').slideDown(500); } else { $('.if_g_hp3_bg').slideUp(500); } });
    $('.g_hp3_sw').click(function() { if($('#g_hp3_sw2').is(':checked')) { $('.if_g_hp3_gr').slideDown(500); } else { $('.if_g_hp3_gr').slideUp(500); } });
    $('.g_hp3_sw').click(function() { if($('#g_hp3_sw3').is(':checked')) { $('.if_g_hp3_im').slideDown(500); } else { $('.if_g_hp3_im').slideUp(500); } });
    $('.g_hp3_sw').click(function() { if($('#g_hp3_sw4').is(':checked')) { $('.if_g_hp3_te').slideDown(500); } else { $('.if_g_hp3_te').slideUp(500); } });

    $('.g_hp4_sw').click(function() { if($('#g_hp4_sw1').is(':checked')) { $('.if_g_hp4_bg').slideDown(500); } else { $('.if_g_hp4_bg').slideUp(500); } });
    $('.g_hp4_sw').click(function() { if($('#g_hp4_sw2').is(':checked')) { $('.if_g_hp4_gr').slideDown(500); } else { $('.if_g_hp4_gr').slideUp(500); } });
    $('.g_hp4_sw').click(function() { if($('#g_hp4_sw3').is(':checked')) { $('.if_g_hp4_im').slideDown(500); } else { $('.if_g_hp4_im').slideUp(500); } });
    $('.g_hp4_sw').click(function() { if($('#g_hp4_sw4').is(':checked')) { $('.if_g_hp4_te').slideDown(500); } else { $('.if_g_hp4_te').slideUp(500); } });

    $('.g_hp5_sw').click(function() { if($('#g_hp5_sw1').is(':checked')) { $('.if_g_hp5_bg').slideDown(500); } else { $('.if_g_hp5_bg').slideUp(500); } });
    $('.g_hp5_sw').click(function() { if($('#g_hp5_sw2').is(':checked')) { $('.if_g_hp5_gr').slideDown(500); } else { $('.if_g_hp5_gr').slideUp(500); } });
    $('.g_hp5_sw').click(function() { if($('#g_hp5_sw3').is(':checked')) { $('.if_g_hp5_im').slideDown(500); } else { $('.if_g_hp5_im').slideUp(500); } });
    $('.g_hp5_sw').click(function() { if($('#g_hp5_sw4').is(':checked')) { $('.if_g_hp5_te').slideDown(500); } else { $('.if_g_hp5_te').slideUp(500); } });

    $('.g_hp6_sw').click(function() { if($('#g_hp6_sw1').is(':checked')) { $('.if_g_hp6_bg').slideDown(500); } else { $('.if_g_hp6_bg').slideUp(500); } });
    $('.g_hp6_sw').click(function() { if($('#g_hp6_sw2').is(':checked')) { $('.if_g_hp6_gr').slideDown(500); } else { $('.if_g_hp6_gr').slideUp(500); } });
    $('.g_hp6_sw').click(function() { if($('#g_hp6_sw3').is(':checked')) { $('.if_g_hp6_im').slideDown(500); } else { $('.if_g_hp6_im').slideUp(500); } });
    $('.g_hp6_sw').click(function() { if($('#g_hp6_sw4').is(':checked')) { $('.if_g_hp6_te').slideDown(500); } else { $('.if_g_hp6_te').slideUp(500); } });

    $('.g_fs1_sw').click(function() { if($('#g_fs1_sw1').is(':checked')) { $('.if_g_fs1_bg').slideDown(500); } else { $('.if_g_fs1_bg').slideUp(500); } });
    $('.g_fs1_sw').click(function() { if($('#g_fs1_sw2').is(':checked')) { $('.if_g_fs1_gr').slideDown(500); } else { $('.if_g_fs1_gr').slideUp(500); } });
    $('.g_fs1_sw').click(function() { if($('#g_fs1_sw3').is(':checked')) { $('.if_g_fs1_im').slideDown(500); } else { $('.if_g_fs1_im').slideUp(500); } });
    $('.g_fs1_sw').click(function() { if($('#g_fs1_sw4').is(':checked')) { $('.if_g_fs1_te').slideDown(500); } else { $('.if_g_fs1_te').slideUp(500); } });

    $('.g_fs2_sw').click(function() { if($('#g_fs2_sw1').is(':checked')) { $('.if_g_fs2_bg').slideDown(500); } else { $('.if_g_fs2_bg').slideUp(500); } });
    $('.g_fs2_sw').click(function() { if($('#g_fs2_sw2').is(':checked')) { $('.if_g_fs2_gr').slideDown(500); } else { $('.if_g_fs2_gr').slideUp(500); } });
    $('.g_fs2_sw').click(function() { if($('#g_fs2_sw3').is(':checked')) { $('.if_g_fs2_im').slideDown(500); } else { $('.if_g_fs2_im').slideUp(500); } });
    $('.g_fs2_sw').click(function() { if($('#g_fs2_sw4').is(':checked')) { $('.if_g_fs2_te').slideDown(500); } else { $('.if_g_fs2_te').slideUp(500); } });

    $('.g_fs3_sw').click(function() { if($('#g_fs3_sw1').is(':checked')) { $('.if_g_fs3_bg').slideDown(500); } else { $('.if_g_fs3_bg').slideUp(500); } });
    $('.g_fs3_sw').click(function() { if($('#g_fs3_sw2').is(':checked')) { $('.if_g_fs3_gr').slideDown(500); } else { $('.if_g_fs3_gr').slideUp(500); } });
    $('.g_fs3_sw').click(function() { if($('#g_fs3_sw3').is(':checked')) { $('.if_g_fs3_im').slideDown(500); } else { $('.if_g_fs3_im').slideUp(500); } });
    $('.g_fs3_sw').click(function() { if($('#g_fs3_sw4').is(':checked')) { $('.if_g_fs3_te').slideDown(500); } else { $('.if_g_fs3_te').slideUp(500); } });

    $('.nc_ot_bg').click(function() { if($('#nc_ot_bg1').is(':checked')) { $('.if_nc_ot_bc').slideDown(500); } else { $('.if_nc_ot_bc').slideUp(500); } });
    $('.nc_ot_bg').click(function() { if($('#nc_ot_bg2').is(':checked')) { $('.if_nc_ot_gr').slideDown(500); } else { $('.if_nc_ot_gr').slideUp(500); } });
    $('.nc_ot_bg').click(function() { if($('#nc_ot_bg3').is(':checked')) { $('.if_nc_ot_im').slideDown(500); } else { $('.if_nc_ot_im').slideUp(500); } });
    $('.nc_ot_bg').click(function() { if($('#nc_ot_bg4').is(':checked')) { $('.if_nc_ot_te').slideDown(500); } else { $('.if_nc_ot_te').slideUp(500); } });

    $('.nc_om_bg').click(function() { if($('#nc_om_bg1').is(':checked')) { $('.if_nc_om_bc').slideDown(500); } else { $('.if_nc_om_bc').slideUp(500); } });
    $('.nc_om_bg').click(function() { if($('#nc_om_bg2').is(':checked')) { $('.if_nc_om_gr').slideDown(500); } else { $('.if_nc_om_gr').slideUp(500); } });
    $('.nc_om_bg').click(function() { if($('#nc_om_bg3').is(':checked')) { $('.if_nc_om_im').slideDown(500); } else { $('.if_nc_om_im').slideUp(500); } });
    $('.nc_om_bg').click(function() { if($('#nc_om_bg4').is(':checked')) { $('.if_nc_om_te').slideDown(500); } else { $('.if_nc_om_te').slideUp(500); } });

    $('.nc_ob_bg').click(function() { if($('#nc_ob_bg1').is(':checked')) { $('.if_nc_ob_bc').slideDown(500); } else { $('.if_nc_ob_bc').slideUp(500); } });
    $('.nc_ob_bg').click(function() { if($('#nc_ob_bg2').is(':checked')) { $('.if_nc_ob_gr').slideDown(500); } else { $('.if_nc_ob_gr').slideUp(500); } });
    $('.nc_ob_bg').click(function() { if($('#nc_ob_bg3').is(':checked')) { $('.if_nc_ob_im').slideDown(500); } else { $('.if_nc_ob_im').slideUp(500); } });
    $('.nc_ob_bg').click(function() { if($('#nc_ob_bg4').is(':checked')) { $('.if_nc_ob_te').slideDown(500); } else { $('.if_nc_ob_te').slideUp(500); } });

    $('.nc_foot_bg').click(function() { if($('#nc_foot_bg1').is(':checked')) { $('.if_nc_foot_bc').slideDown(500); } else { $('.if_nc_foot_bc').slideUp(500); } });
    $('.nc_foot_bg').click(function() { if($('#nc_foot_bg2').is(':checked')) { $('.if_nc_foot_gr').slideDown(500); } else { $('.if_nc_foot_gr').slideUp(500); } });
    $('.nc_foot_bg').click(function() { if($('#nc_foot_bg3').is(':checked')) { $('.if_nc_foot_im').slideDown(500); } else { $('.if_nc_foot_im').slideUp(500); } });
    $('.nc_foot_bg').click(function() { if($('#nc_foot_bg4').is(':checked')) { $('.if_nc_foot_te').slideDown(500); } else { $('.if_nc_foot_te').slideUp(500); } });

    $('.nc_ht_bg').click(function() { if($('#nc_ht_bg1').is(':checked')) { $('.if_nc_ht_bc').slideDown(500); } else { $('.if_nc_ht_bc').slideUp(500); } });
    $('.nc_ht_bg').click(function() { if($('#nc_ht_bg2').is(':checked')) { $('.if_nc_ht_gr').slideDown(500); } else { $('.if_nc_ht_gr').slideUp(500); } });
    $('.nc_ht_bg').click(function() { if($('#nc_ht_bg3').is(':checked')) { $('.if_nc_ht_im').slideDown(500); } else { $('.if_nc_ht_im').slideUp(500); } });
    $('.nc_ht_bg').click(function() { if($('#nc_ht_bg4').is(':checked')) { $('.if_nc_ht_te').slideDown(500); } else { $('.if_nc_ht_te').slideUp(500); } });

    $('.nc_hm_bg').click(function() { if($('#nc_hm_bg1').is(':checked')) { $('.if_nc_hm_bc').slideDown(500); } else { $('.if_nc_hm_bc').slideUp(500); } });
    $('.nc_hm_bg').click(function() { if($('#nc_hm_bg2').is(':checked')) { $('.if_nc_hm_gr').slideDown(500); } else { $('.if_nc_hm_gr').slideUp(500); } });
    $('.nc_hm_bg').click(function() { if($('#nc_hm_bg3').is(':checked')) { $('.if_nc_hm_im').slideDown(500); } else { $('.if_nc_hm_im').slideUp(500); } });
    $('.nc_hm_bg').click(function() { if($('#nc_hm_bg4').is(':checked')) { $('.if_nc_hm_te').slideDown(500); } else { $('.if_nc_hm_te').slideUp(500); } });

    $('.nc_hb_bg').click(function() { if($('#nc_hb_bg1').is(':checked')) { $('.if_nc_hb_bc').slideDown(500); } else { $('.if_nc_hb_bc').slideUp(500); } });
    $('.nc_hb_bg').click(function() { if($('#nc_hb_bg2').is(':checked')) { $('.if_nc_hb_gr').slideDown(500); } else { $('.if_nc_hb_gr').slideUp(500); } });
    $('.nc_hb_bg').click(function() { if($('#nc_hb_bg3').is(':checked')) { $('.if_nc_hb_im').slideDown(500); } else { $('.if_nc_hb_im').slideUp(500); } });
    $('.nc_hb_bg').click(function() { if($('#nc_hb_bg4').is(':checked')) { $('.if_nc_hb_te').slideDown(500); } else { $('.if_nc_hb_te').slideUp(500); } });

    $('.nc_main_bg').click(function() { if($('#nc_main_bg1').is(':checked')) { $('.if_nc_main_bc').slideDown(500); } else { $('.if_nc_main_bc').slideUp(500); } });
    $('.nc_main_bg').click(function() { if($('#nc_main_bg2').is(':checked')) { $('.if_nc_main_gr').slideDown(500); } else { $('.if_nc_main_gr').slideUp(500); } });
    $('.nc_main_bg').click(function() { if($('#nc_main_bg3').is(':checked')) { $('.if_nc_main_im').slideDown(500); } else { $('.if_nc_main_im').slideUp(500); } });
    $('.nc_main_bg').click(function() { if($('#nc_main_bg4').is(':checked')) { $('.if_nc_main_te').slideDown(500); } else { $('.if_nc_main_te').slideUp(500); } });

    $('.g_op2_sw').click(function() { if($('#g_op2_sw1').is(':checked')) { $('.if_g_op2_bg').slideDown(500); } else { $('.if_g_op2_bg').slideUp(500); } });
    $('.g_op2_sw').click(function() { if($('#g_op2_sw2').is(':checked')) { $('.if_g_op2_gr').slideDown(500); } else { $('.if_g_op2_gr').slideUp(500); } });
    $('.g_op2_sw').click(function() { if($('#g_op2_sw3').is(':checked')) { $('.if_g_op2_im').slideDown(500); } else { $('.if_g_op2_im').slideUp(500); } });
    $('.g_op2_sw').click(function() { if($('#g_op2_sw4').is(':checked')) { $('.if_g_op2_te').slideDown(500); } else { $('.if_g_op2_te').slideUp(500); } });

    $('.g_mc_sw').click(function() { if($('#g_mc_sw1').is(':checked')) { $('.if_g_mc_bg').slideDown(500); } else { $('.if_g_mc_bg').slideUp(500); } });
    $('.g_mc_sw').click(function() { if($('#g_mc_sw2').is(':checked')) { $('.if_g_mc_gr').slideDown(500); } else { $('.if_g_mc_gr').slideUp(500); } });
    $('.g_mc_sw').click(function() { if($('#g_mc_sw3').is(':checked')) { $('.if_g_mc_im').slideDown(500); } else { $('.if_g_mc_im').slideUp(500); } });
    $('.g_mc_sw').click(function() { if($('#g_mc_sw4').is(':checked')) { $('.if_g_mc_te').slideDown(500); } else { $('.if_g_mc_te').slideUp(500); } });

    $('.g_bc_sw').click(function() { if($('#g_bc_sw1').is(':checked')) { $('.if_g_bc_bg').slideDown(500); } else { $('.if_g_bc_bg').slideUp(500); } });
    $('.g_bc_sw').click(function() { if($('#g_bc_sw2').is(':checked')) { $('.if_g_bc_gr').slideDown(500); } else { $('.if_g_bc_gr').slideUp(500); } });
    $('.g_bc_sw').click(function() { if($('#g_bc_sw3').is(':checked')) { $('.if_g_bc_im').slideDown(500); } else { $('.if_g_bc_im').slideUp(500); } });

    $('.nc_feat_bg').click(function() { if($('#nc_feat_bg1').is(':checked') || $('#nc_feat_bg2').is(':checked')) { $('.if_nc_feat_bg').slideDown(500); } else { $('.if_nc_feat_bg').slideUp(500); } });
    $('.nc_best_bg').click(function() { if($('#nc_best_bg1').is(':checked') || $('#nc_best_bg2').is(':checked')) { $('.if_nc_best_bg').slideDown(500); } else { $('.if_nc_best_bg').slideUp(500); } });
    $('.nc_new_bg').click(function() { if($('#nc_new_bg1').is(':checked') || $('#nc_new_bg2').is(':checked')) { $('.if_nc_new_bg').slideDown(500); } else { $('.if_nc_new_bg').slideUp(500); } });
    $('.nc_sale_bg').click(function() { if($('#nc_sale_bg1').is(':checked') || $('#nc_sale_bg2').is(':checked')) { $('.if_nc_sale_bg').slideDown(500); } else { $('.if_nc_sale_bg').slideUp(500); } });
    $('.nc_cc1_bg').click(function() { if($('#nc_cc1_bg1').is(':checked') || $('#nc_cc1_bg2').is(':checked')) { $('.if_nc_cc1_bg').slideDown(500); } else { $('.if_nc_cc1_bg').slideUp(500); } });
    $('.nc_cc2_bg').click(function() { if($('#nc_cc2_bg1').is(':checked') || $('#nc_cc2_bg2').is(':checked')) { $('.if_nc_cc2_bg').slideDown(500); } else { $('.if_nc_cc2_bg').slideUp(500); } });
    $('.nc_cc3_bg').click(function() { if($('#nc_cc3_bg1').is(':checked') || $('#nc_cc3_bg2').is(':checked')) { $('.if_nc_cc3_bg').slideDown(500); } else { $('.if_nc_cc3_bg').slideUp(500); } });

    $('.g_pro_w').click(function() { if($('#g_pro_w2').is(':checked')) { $('.if_pa_pro').slideDown(500); } else { $('.if_pa_pro').slideUp(500); } });
    $('.g_mini_w').click(function() { if($('#g_mini_w2').is(':checked')) { $('.if_pa_mini').slideDown(500); } else { $('.if_pa_mini').slideUp(500); } });
    $('.g_info_w').click(function() { if($('#g_info_w2').is(':checked')) { $('.if_pa_info').slideDown(500); } else { $('.if_pa_info').slideUp(500); } });
    $('.g_bra_w').click(function() { if($('#g_bra_w2').is(':checked')) { $('.if_pa_bra').slideDown(500); } else { $('.if_pa_bra').slideUp(500); } });
    $('.g_blog_w').click(function() { if($('#g_blog_w2').is(':checked')) { $('.if_pa_blog').slideDown(500); } else { $('.if_pa_blog').slideUp(500); } });
    $('.ban_wid_top').click(function() { if($('#ban_wid_top2').is(':checked')) { $('.if_pa_ban_top').slideDown(500); } else { $('.if_pa_ban_top').slideUp(500); } });
    $('.ban_wid_pro').click(function() { if($('#ban_wid_pro2').is(':checked')) { $('.if_pa_ban_pro').slideDown(500); } else { $('.if_pa_ban_pro').slideUp(500); } });
    $('.ban_wid_mini').click(function() { if($('#ban_wid_mini2').is(':checked')) { $('.if_pa_ban_mini').slideDown(500); } else { $('.if_pa_ban_mini').slideUp(500); } });
    $('.ban_wid_info').click(function() { if($('#ban_wid_info2').is(':checked')) { $('.if_pa_ban_info').slideDown(500); } else { $('.if_pa_ban_info').slideUp(500); } });
    $('.ban_wid_bra').click(function() { if($('#ban_wid_bra2').is(':checked')) { $('.if_pa_ban_bra').slideDown(500); } else { $('.if_pa_ban_bra').slideUp(500); } });
    $('.ban_wid_home').click(function() { if($('#ban_wid_home2').is(':checked')) { $('.if_pa_ban_home').slideDown(500); } else { $('.if_pa_ban_home').slideUp(500); } });
    $('.ban_wid_foot').click(function() { if($('#ban_wid_foot2').is(':checked')) { $('.if_pa_ban_foot').slideDown(500); } else { $('.if_pa_ban_foot').slideUp(500); } });
    $('.ban_wid_foott').click(function() { if($('#ban_wid_foott2').is(':checked')) { $('.if_pa_ban_foott').slideDown(500); } else { $('.if_pa_ban_foott').slideUp(500); } });
    $('.ban_wid_footb').click(function() { if($('#ban_wid_footb2').is(':checked')) { $('.if_pa_ban_footb').slideDown(500); } else { $('.if_pa_ban_footb').slideUp(500); } });
    $('.ban_wid_s1').click(function() { if($('#ban_wid_s12').is(':checked')) { $('.if_pa_ban_s1').slideDown(500); } else { $('.if_pa_ban_s1').slideUp(500); } });
    $('.ban_wid_s2').click(function() { if($('#ban_wid_s22').is(':checked')) { $('.if_pa_ban_s2').slideDown(500); } else { $('.if_pa_ban_s2').slideUp(500); } });
    $('.ban_wid_s3').click(function() { if($('#ban_wid_s32').is(':checked')) { $('.if_pa_ban_s3').slideDown(500); } else { $('.if_pa_ban_s3').slideUp(500); } });
    $('.pp_lay').click(function() { if($('#pp_lay1').is(':checked')) { $('.if_pp_thumbs').slideDown(500); } else { $('.if_pp_thumbs').slideUp(500); } });

    $('.nc_m_under').click(function() { if($('#nc_m_under1').is(':checked')) { $('.if_under').slideDown(500); } else { $('.if_under').slideUp(500); } });
    $('.nc_pp_image').click(function() { if($('#nc_pp_image3').is(':checked')) { $('.if_pp_image3').slideDown(500); } else { $('.if_pp_image3').slideUp(500); } });

});
