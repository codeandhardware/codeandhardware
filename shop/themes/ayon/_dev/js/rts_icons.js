/* These SVG icons designed by RoyThemes. All rights reserved */

import $ from 'jquery';
import prestashop from 'prestashop';

function regenIcons() {
  $('i.rts').each(function(i){
    var rts_icon = $(this).html(),
        rts_size = $(this).attr('data-size'),
        rts_color = $(this).attr('data-color'),
        rts_align = $(this).attr('data-align');


    if (rts_icon == 'fav1')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M14.05,6.72C8.17.2,2.57,7.54,3.67,11.76,5.56,19,14.05,23.57,14.05,23.57s7.74-4.16,10.39-11.81C25.86,7.64,20.24.13,14.05,6.72Z" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></svg>'
    if (rts_icon == 'fav2')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M14.63,4l3.53,5.67L24.32,11a.89.89,0,0,1,.49,1.33l-4.18,4.92.5,6.48a.89.89,0,0,1-1.16.78l-6-2.59-6,2.59a.89.89,0,0,1-1.16-.79l.57-6.58L3.06,12.33A.89.89,0,0,1,3.52,11L10.1,9.68,13.2,4A.89.89,0,0,1,14.63,4Z" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></svg>'
    if (rts_icon == 'fav3')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M23,6.11C23,4.4,21.29,3,19.19,3H9.81C7.71,3,6,4.4,6,6.11V25.3c0,.77,1.22,1.08,1.75.43L14.5,17.5l6.71,8.18c.54.65,1.79.34,1.79-.44Z" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></svg>'
    if (rts_icon == 'acc1')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M18.53,8.7c0,3.17-2.09,6.78-4.18,6.78s-4.18-3.61-4.18-6.78S12,4,14.35,4,18.53,5.53,18.53,8.7Z" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M8.41,17.17A8.13,8.13,0,0,0,6,23a11.46,11.46,0,0,0,.17,2H22.53a11.46,11.46,0,0,0,.17-2,8.13,8.13,0,0,0-2.41-5.87" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'acc2')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><circle cx="14.5" cy="9.5" r="5.5" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M8.46,17.78C6.88,19.66,7,20.07,7,22.92A12.19,12.19,0,0,0,7.18,25H22.36a12.19,12.19,0,0,0,.18-2.08c0-2.85.12-3.26-1.46-5.13" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'acc3')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><circle cx="14" cy="9" r="5" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M14,18.07c-2.27.53-8.14,1.77-8.14,4.75,0,.75,0,1.48.08,2.18H22.37c0-.71.08-1.43.08-2.18,0-3-6.58-4.22-8.49-4.75" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'acc4')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M23.67,25V22.65A4.67,4.67,0,0,0,19,18H9.67A4.67,4.67,0,0,0,5,22.65V25" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><circle cx="14.33" cy="8.65" r="4.67" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'acc5')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><circle cx="14.16" cy="9.14" r="2.43" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M8.68,19.49a5.48,5.48,0,1,1,11,0" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><circle cx="14" cy="14" r="11" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'acc6')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M13,25h9a1.83,1.83,0,0,0,1.84-1.79q0-.14,0-.28c0-2.83-7.46-4-9.62-4.51" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M14.22,18.42C11.66,18.92,5,20.09,5,22.93q0,.13,0,.25A1.83,1.83,0,0,0,6.83,25H12" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M10.53,13.95c.81,1,1.89,3.32,3.32,3.32,2.44,0,4.42-3.08,4.42-5.53" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M9,17H6.11l1.11-4.42c0-4.88,3.23-8.84,7.22-8.84s7.22,4,7.22,8.84l1,4.42H19" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M10.53,12.84A12.44,12.44,0,0,0,15,7.32s2.21,5.53,4.42,4.42" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'search1')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><circle cx="13.41" cy="12.91" r="9.41" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/><line x1="25.18" y1="23.5" x2="21.65" y2="19.97" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/></svg>'
    if (rts_icon == 'search2')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><circle cx="14.76" cy="12.91" r="9.41" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/><line x1="3" y1="23.5" x2="6.53" y2="19.97" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/></svg>'
    if (rts_icon == 'search3')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><circle cx="12.5" cy="12.25" r="8" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/><line x1="24.5" y1="24.25" x2="21.07" y2="20.82" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/></svg>'
    if (rts_icon == 'search4')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><circle cx="16" cy="12.25" r="8" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/><line x1="4" y1="24.25" x2="7.43" y2="20.82" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/></svg>'
    if (rts_icon == 'qv1')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>'
    if (rts_icon == 'qv2')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>'
    if (rts_icon == 'discover1')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="6" y="14" width="16" height="4" rx="1.6" ry="1.6" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><rect x="2" y="6" width="20" height="4" rx="2" ry="2" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'discover2')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><circle cx="12.02" cy="12" r="10" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><polyline points="10.55 8.94 14.51 11.98 10.55 15.06" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'discover3')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="2" y="2" width="8" height="8" rx="3" ry="3" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><rect x="2" y="14" width="8" height="8" rx="3" ry="3" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><rect x="14" y="2" width="8" height="8" rx="3" ry="3" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><rect x="14" y="14" width="8" height="8" rx="3" ry="3" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'discover4')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.85,20.76l8-8.69L12,4a1.7,1.7,0,0,0-2,0L7.91,6.07a1.19,1.19,0,0,0,0,1.58L13,12.06,8,17a1.81,1.81,0,0,0,0,2l2.39,1.74A1,1,0,0,0,11.85,20.76Z" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.7999999523162842px"/></svg>'
    if (rts_icon == 'discover5')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>'
    if (rts_icon == 'discover6')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="feather feather-fast-forward"><polygon points="13 19 22 12 13 5 13 19"></polygon><polygon points="2 19 11 12 2 5 2 19"></polygon></svg>'
    if (rts_icon == 'plus')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g id="Layer_4" data-name="Layer 4"><path d="M14.1,18.3V14.1h4.2a.7.7,0,0,0,.7-.7V10.6a.7.7,0,0,0-.7-.7H14.1V5.7a.7.7,0,0,0-.7-.7H10.6a.7.7,0,0,0-.7.7V9.9H5.7a.7.7,0,0,0-.7.7v2.8a.7.7,0,0,0,.7.7H9.9v4.2a.7.7,0,0,0,.7.7h2.8A.7.7,0,0,0,14.1,18.3Z" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></g></svg>'
    if (rts_icon == 'cat_grid')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2.2px;}</style></defs><rect class="a" x="2" y="2" width="8" height="8" rx="3" ry="3"/><rect class="a" x="2" y="14" width="8" height="8" rx="3" ry="3"/><rect class="a" x="14" y="2" width="8" height="8" rx="3" ry="3"/><rect class="a" x="14" y="14" width="8" height="8" rx="3" ry="3"/></svg>'
    if (rts_icon == 'cat_list')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2.2px;}</style></defs><rect class="a" x="2" y="2" width="20" height="4" rx="2" ry="2"/><rect class="a" x="2" y="10" width="20" height="4" rx="2" ry="2"/><rect class="a" x="2" y="18" width="20" height="4" rx="2" ry="2"/></svg>'
    if (rts_icon == 'cat_filter')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a,.b{fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;}.a{stroke-width:2px;}.b{stroke-width:2.3px;}</style></defs><circle class="a" cx="4" cy="8" r="3"/><circle class="a" cx="20" cy="9" r="3"/><circle class="a" cx="12" cy="16" r="3"/><line class="b" x1="20" y1="2" x2="20" y2="5"/><line class="b" x1="4" y1="2" x2="4" y2="4"/><line class="b" x1="4" y1="14.29" x2="4" y2="22.21"/><line class="b" x1="12" y1="20.29" x2="12" y2="22.21"/><line class="b" x1="20" y1="15.29" x2="20" y2="22.21"/><line class="b" x1="12" y1="2" x2="12" y2="12"/></svg>'
    if (rts_icon == 'round_plus')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2.5px;}</style></defs><circle class="a" cx="12.02" cy="12" r="10"/><line class="a" x1="8.54" y1="12.08" x2="15.54" y2="12.08"/><line class="a" x1="12.04" y1="15.58" x2="12.04" y2="8.58"/></svg>'
    if (rts_icon == 'cart1')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,21H3a1,1,0,0,1-1-1L3,4A1,1,0,0,1,4,3H19a1,1,0,0,1,1,1l1,16A1,1,0,0,1,20,21Z" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/><path d="M15,6V9a3.28,3.28,0,0,1-3.5,3A3.28,3.28,0,0,1,8,9V6" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/></svg>'
    if (rts_icon == 'cart2')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M21.46,26H6.54C4,26,4,23.86,4,22.46V2H24V22.46C24,23.86,24,26,21.46,26Z" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/><path d="M10,8v.78c0,2.68,1.8,4.88,4,4.88s4-2.19,4-4.88V8" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/></svg>'
    if (rts_icon == 'cart3')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M23,7H19V6a4.57,4.57,0,0,0-6.08-4C10.74,2.61,9,4.1,9,6.36V12h2V9h4V7H11V5.94C11,4.41,12.48,4.22,14,4c1.91-.28,3,.08,3,2.21V12h2V9h2l2,16H5L7,8,5,9,3,27H25Z"/></svg>'
    if (rts_icon == 'cart4')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M23.71,7H19V5.36C19,3.18,17.08,2,14,2S8,3.18,8,5.36V7H4.29A2.29,2.29,0,0,0,2,9.29V22.71A2.29,2.29,0,0,0,4.29,25H23.71A2.29,2.29,0,0,0,26,22.71V9.29A2.29,2.29,0,0,0,23.71,7ZM10,5.36c0-.64,1.4-1.6,3.5-1.6s3.5,1,3.5,1.6V7H10ZM24,23H4V9H8v5h2V9H24Z"/><rect x="16" y="12" width="3" height="2"/></svg>'
    if (rts_icon == 'cart5')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M10,10V6.75c0-2.33,0-3.5,3.5-4.67A2.82,2.82,0,0,1,17,4.42V9" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:1.75px"/><polygon points="3.5 25.05 6.94 7.88 20.68 6.74 22.96 25.05 9.23 26.2 3.5 25.05" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:1.75px"/><line x1="6.94" y1="7.88" x2="9.23" y2="26.2" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:1.75px"/></svg>'
    if (rts_icon == 'cart6')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><polygon points="6.78 7 6.17 18 21.45 18 25.12 7 6.78 7" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:1.8px"/><line x1="2" y1="3" x2="12" y2="3" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/><circle cx="9" cy="23" r="2"/><circle cx="16" cy="23" r="2"/></svg>'
    if (rts_icon == 'cart7')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28"><defs><linearGradient id="a" x1="11.69" y1="24.1" x2="14.19" y2="24.1" gradientTransform="matrix(-1, 0, 0, 1, 30, 0)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1"/></linearGradient><linearGradient id="b" x1="19.18" y1="24.1" x2="21.68" y2="24.1" xlink:href="#a"/></defs><path d="M15.81,22.85c0,2.5.56,2.5,1.25,2.5a1.25,1.25,0,0,0,1.25-1.25" style="stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px;fill:url(#a)"/><path d="M8.32,22.85c0,2.5.56,2.5,1.25,2.5a1.25,1.25,0,0,0,1.25-1.25" style="stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px;fill:url(#b)"/><path d="M26.56,3.4,23,7l-4.8,12H8.56L3.76,9.4C2.56,7,5,7,5,7H17" style="fill:none;stroke:' + rts_color + ';stroke-miterlimit:10;stroke-width:2px"/></svg>'
    if (rts_icon == 'cart8')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M6.67,2,3,6.8V23.6A2.4,2.4,0,0,0,5.4,26H22.6A2.4,2.4,0,0,0,25,23.6V6.8L21.33,2Z" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><line x1="3" y1="7" x2="25" y2="7" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M19,11.61a4.8,4.8,0,1,1-9.59,0" style="fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></svg>'
    if (rts_icon == 'truck')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><circle class="a" cx="7" cy="19" r="3"/><circle class="a" cx="18.06" cy="19" r="3"/><path class="a" d="M18.95,6H15c-1.1,0-1,3.9-1,5v5a2,2,0,0,0,1.29,1.86,3,3,0,0,1,5.59.14h.07a2,2,0,0,0,2-2V11C22.95,9.93,20.17,6.46,18.95,6Z"/><path class="a" d="M14,10H2c-1.1,0-1,1.9-1,3v3a2,2,0,0,0,2,2H4.18a3,3,0,0,1,5.63,0H12a2,2,0,0,0,2-2V10Z"/><rect class="a" x="3" y="6" width="5" height="4"/><rect class="a" x="8" y="7" width="3" height="3"/><line class="a" x1="16.76" y1="11" x2="21.06" y2="11"/></svg>'
    if (rts_icon == 'security')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><line class="a" x1="4" y1="7.13" x2="11" y2="2.83"/><path class="a" d="M4,9s.5,11,7,13"/><line class="a" x1="19" y1="7.13" x2="12" y2="2.83"/><path class="a" d="M19,9s-.5,11-7,13"/><line class="a" x1="8.97" y1="12.68" x2="11.35" y2="14.76"/><line class="a" x1="11.21" y1="14.44" x2="14.69" y2="9.72"/></svg>'
    if (rts_icon == 'return')
      var svg_current = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:' + rts_color + ';stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><rect class="a" x="7" y="12" width="10" height="10" rx="1.87" ry="1.87"/><path class="a" d="M13,8h5.68A2.32,2.32,0,0,1,21,10.32V16"/><line class="a" x1="8.83" y1="11.43" x2="12.86" y2="8.5"/><line class="a" x1="21" y1="17.63" x2="18.17" y2="20.59"/><line class="a" x1="2.74" y1="3.13" x2="19.83" y2="3.13"/><line class="a" x1="18.25" y1="1" x2="22.16" y2="3.13"/><line class="a" x1="21.45" y1="3.13" x2="18.28" y2="5.04"/><line class="a" x1="10" y1="6" x2="4" y2="6"/><line class="a" x1="2.28" y1="6.1" x2="5.45" y2="8.02"/></svg>'


      if (typeof rts_size !== typeof undefined && rts_size !== false) {
        $(this).html(svg_current).css({
           'width' : rts_size,
           'height' : rts_size
        });
        $(this).find('svg').css({
           'width' : rts_size,
           'height' : rts_size
        });
      } else {
        $(this).html(svg_current).css({
           'width' : 24,
           'height' : 24
        });
        $(this).find('svg').css({
           'width' : 24,
           'height' : 24
        });
      }
      if (typeof rts_align !== typeof undefined && rts_align !== false) {
        if (rts_align == 'left')
          $(this).css({
             'float' : 'left',
             'margin-right' : '10px'
          });
        if (rts_align == 'right')
          $(this).css({
             'float' : 'right',
             'margin-left' : '10px'
          });
      }

  });
}
regenIcons();


$(document).ready(function () {
     if(typeof prestashop !== 'undefined') {
         prestashop.on(
           'updatedProduct',
           function (event) {
               regenIcons();
           }
         );
         prestashop.on(
           'updateProductList',
           function (event) {
               regenIcons();
           }
         );
         prestashop.on('updatedCart', () => {
             regenIcons();
           }
         );
     }
  });
