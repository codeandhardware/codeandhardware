<?php
/*
* RoyThemes Copyright 2019
* This module is an official part of AYON theme.
*/

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

if (!defined('_PS_VERSION_'))
    exit ;

class Roy_Customizer extends Module {

    private $systemFonts = array("Arial", "Georgia", "Tahoma", "Times New Roman", "Verdana");

    private $gfonts = "ABeeZee;Abel;Abril Fatface;Aclonica;Acme;Actor;Adamina;Advent Pro;Aguafina Script;Akronim;Aladin;Aldrich;Alef;Alegreya;Alegreya SC;Alegreya Sans;Alegreya Sans SC;Alex Brush;Alfa Slab One;Alice;Alike;Alike Angular;Allan;Allerta;Allerta Stencil;Allura;Almendra;Almendra Display;Almendra SC;Amarante;Amaranth;Amatic SC;Amethysta;Amiri;Amita;Anaheim;Andada;Andika;Angkor;Annie Use Your Telescope;Anonymous Pro;Antic;Antic Didone;Antic Slab;Anton;Arapey;Arbutus;Arbutus Slab;Architects Daughter;Archivo Black;Archivo Narrow;Arimo;Arizonia;Armata;Artifika;Arvo;Arya;Asap;Asar;Asset;Astloch;Asul;Atomic Age;Aubrey;Audiowide;Autour One;Average;Average Sans;Averia Gruesa Libre;Averia Libre;Averia Sans Libre;Averia Serif Libre;Bad Script;Balthazar;Bangers;Basic;Battambang;Baumans;Bayon;Belgrano;Belleza;BenchNine;Bentham;Berkshire Swash;Bevan;Bigelow Rules;Bigshot One;Bilbo;Bilbo Swash Caps;Biryani;Bitter;Black Ops One;Bokor;Bonbon;Boogaloo;Bowlby One;Bowlby One SC;Brawler;Bree Serif;Bubblegum Sans;Bubbler One;Buda;Buenard;Butcherman;Butterfly Kids;Cabin;Cabin Condensed;Cabin Sketch;Caesar Dressing;Cagliostro;Calligraffitti;Cambay;Cambo;Candal;Cantarell;Cantata One;Cantora One;Capriola;Cardo;Carme;Carrois Gothic;Carrois Gothic SC;Carter One;Catamaran;Caudex;Caveat;Caveat Brush;Cedarville Cursive;Ceviche One;Changa One;Chango;Chau Philomene One;Chela One;Chelsea Market;Chenla;Cherry Cream Soda;Cherry Swash;Chewy;Chicle;Chivo;Chonburi;Cinzel;Cinzel Decorative;Circe;Clicker Script;Coda;Coda Caption;Codystar;Combo;Comfortaa;Coming Soon;Concert One;Condiment;Content;Contrail One;Convergence;Cookie;Copse;Corben;Courgette;Cousine;Coustard;Covered By Your Grace;Crafty Girls;Creepster;Crete Round;Crimson Text;Croissant One;Crushed;Cuprum;Cutive;Cutive Mono;Damion;Dancing Script;Dangrek;Dawning of a New Day;Days One;Dekko;Delius;Delius Swash Caps;Delius Unicase;Della Respira;Denk One;Devonshire;Dhurjati;Didact Gothic;Diplomata;Diplomata SC;Domine;Donegal One;Doppio One;Dorsa;Dosis;Dr Sugiyama;Droid Sans;Droid Sans Mono;Droid Serif;Duru Sans;Dynalight;EB Garamond;Eagle Lake;Eater;Economica;Eczar;Ek Mukta;Electrolize;Elsie;Elsie Swash Caps;Emblema One;Emilys Candy;Engagement;Englebert;Enriqueta;Erica One;Esteban;Euphoria Script;Ewert;Exo;Exo 2;Expletus Sans;Fanwood Text;Fascinate;Fascinate Inline;Faster One;Fasthand;Fauna One;Federant;Federo;Felipa;Fenix;Finger Paint;Fira Mono;Fira Sans;Fjalla One;Fjord One;Flamenco;Flavors;Fondamento;Fontdiner Swanky;Forum;Francois One;Freckle Face;Fredericka the Great;Fredoka One;Freehand;Fresca;Frijole;Fruktur;Fugaz One;GFS Didot;GFS Neohellenic;Gabriela;Gafata;Galdeano;Galindo;Gentium Basic;Gentium Book Basic;Geo;Geostar;Geostar Fill;Germania One;Gidugu;Gilda Display;Give You Glory;Glass Antiqua;Glegoo;Gloria Hallelujah;Goblin One;Gochi Hand;Gorditas;Goudy Bookletter 1911;Graduate;Grand Hotel;Gravitas One;Great Vibes;Griffy;Gruppo;Gudea;Gurajada;Habibi;Halant;Hammersmith One;Hanalei;Hanalei Fill;Handlee;Hanuman;Happy Monkey;Headland One;Henny Penny;Herr Von Muellerhoff;Hind;Hind Siliguri;Hind Vadodara;Holtwood One SC;Homemade Apple;Homenaje;IM Fell DW Pica;IM Fell DW Pica SC;IM Fell Double Pica;IM Fell Double Pica SC;IM Fell English;IM Fell English SC;IM Fell French Canon;IM Fell French Canon SC;IM Fell Great Primer;IM Fell Great Primer SC;Iceberg;Iceland;Imprima;Inconsolata;Inder;Indie Flower;Inika;Inknut Antiqua;Irish Grover;Istok Web;Italiana;Italianno;Itim;Jacques Francois;Jacques Francois Shadow;Jaldi;Jim Nightshade;Jockey One;Jolly Lodger;Josefin Sans;Josefin Slab;Joti One;Judson;Julee;Julius Sans One;Junge;Jura;Just Another Hand;Just Me Again Down Here;Kadwa;Kalam;Kameron;Kantumruy;Karla;Karma;Kaushan Script;Kavoon;Kdam Thmor;Keania One;Kelly Slab;Kenia;Khand;Khmer;Khula;Kite One;Knewave;Kotta One;Koulen;Kranky;Kreon;Kristi;Krona One;Kurale;La Belle Aurore;Laila;Lakki Reddy;Lancelot;Lateef;Lato;League Script;Leckerli One;Ledger;Lekton;Lemon;Libre Baskerville;Life Savers;Lilita One;Lily Script One;Limelight;Linden Hill;Lobster;Lobster Two;Londrina Outline;Londrina Shadow;Londrina Sketch;Londrina Solid;Lora;Love Ya Like A Sister;Loved by the King;Lovers Quarrel;Luckiest Guy;Lusitana;Lustria;Macondo;Macondo Swash Caps;Magra;Maiden Orange;Mako;Mallanna;Mandali;Marcellus;Marcellus SC;Marck Script;Margarine;Marko One;Marmelad;Martel;Martel Sans;Marvel;Mate;Mate SC;Maven Pro;McLaren;Meddon;MedievalSharp;Medula One;Megrim;Meie Script;Merienda;Merienda One;Merriweather;Merriweather Sans;Metal;Metal Mania;Metamorphous;Metrophobic;Michroma;Milonga;Miltonian;Miltonian Tattoo;Miniver;Miss Fajardose;Modak;Modern Antiqua;Molengo;Molle;Monda;Monofett;Monoton;Monsieur La Doulaise;Montaga;Montez;Montserrat;Montserrat Alternates;Montserrat Subrayada;Moul;Moulpali;Mountains of Christmas;Mouse Memoirs;Mr Bedfort;Mr Dafoe;Mr De Haviland;Mrs Saint Delafield;Mrs Sheppards;Muli;Mystery Quest;NTR;Neucha;Neuton;New Rocker;News Cycle;Niconne;Nixie One;Nobile;Nokora;Norican;Nosifer;Nothing You Could Do;Noticia Text;Noto Sans;Noto Serif;Nova Cut;Nova Flat;Nova Mono;Nova Oval;Nova Round;Nova Script;Nova Slim;Nova Square;Numans;Nunito;Odor Mean Chey;Offside;Old Standard TT;Oldenburg;Oleo Script;Oleo Script Swash Caps;Open Sans;Open Sans Condensed;Oranienbaum;Orbitron;Oregano;Orienta;Original Surfer;Oswald;Over the Rainbow;Overlock;Overlock SC;Ovo;Oxygen;Oxygen Mono;PT Mono;PT Sans;PT Sans Caption;PT Sans Narrow;PT Serif;PT Serif Caption;Pacifico;Palanquin;Palanquin Dark;Paprika;Parisienne;Passero One;Passion One;Pathway Gothic One;Patrick Hand;Patrick Hand SC;Patua One;Paytone One;Peddana;Peralta;Permanent Marker;Petit Formal Script;Petrona;Philosopher;Piedra;Pinyon Script;Pirata One;Plaster;Play;Playball;Playfair Display;Playfair Display SC;Podkova;Poiret One;Poller One;Poly;Pompiere;Pontano Sans;Poppins;Port Lligat Sans;Port Lligat Slab;Pragati Narrow;Prata;Preahvihear;Press Start 2P;Princess Sofia;Prociono;Prosto One;Puritan;Purple Purse;Quando;Quantico;Quattrocento;Quattrocento Sans;Questrial;Quicksand;Quintessential;Qwigley;Racing Sans One;Radley;Rajdhani;Raleway;Raleway Dots;Ramabhadra;Ramaraja;Rambla;Rammetto One;Ranchers;Rancho;Ranga;Rationale;Ravi Prakash;Redressed;Reenie Beanie;Revalia;Rhodium Libre;Ribeye;Ribeye Marrow;Righteous;Risque;Roboto;Roboto Condensed;Roboto Mono;Roboto Slab;Rochester;Rock Salt;Rokkitt;Romanesco;Ropa Sans;Rosario;Rosarivo;Rouge Script;Rozha One;Rubik;Rubik Mono One;Rubik One;Ruda;Rufina;Ruge Boogie;Ruluko;Rum Raisin;Ruslan Display;Russo One;Ruthie;Rye;Sacramento;Sahitya;Sail;Salsa;Sanchez;Sancreek;Sansita One;Sarala;Sarina;Sarpanch;Satisfy;Scada;Scheherazade;Schoolbell;Seaweed Script;Sevillana;Seymour One;Shadows Into Light;Shadows Into Light Two;Shanti;Share;Share Tech;Share Tech Mono;Shojumaru;Short Stack;Siemreap;Sigmar One;Signika;Signika Negative;Simonetta;Sintony;Sirin Stencil;Six Caps;Skranji;Slabo 13px;Slabo 27px;Slackey;Smokum;Smythe;Sniglet;Snippet;Snowburst One;Sofadi One;Sofia;Sonsie One;Sorts Mill Goudy;Source Code Pro;Source Sans Pro;Source Serif Pro;Special Elite;Spicy Rice;Spinnaker;Spirax;Squada One;Sree Krushnadevaraya;Stalemate;Stalinist One;Stardos Stencil;Stint Ultra Condensed;Stint Ultra Expanded;Stoke;Strait;Sue Ellen Francisco;Sumana;Sunshiney;Supermercado One;Sura;Suranna;Suravaram;Suwannaphum;Swanky and Moo Moo;Syncopate;Tangerine;Taprom;Tauri;Teko;Telex;Tenali Ramakrishna;Tenor Sans;Text Me One;The Girl Next Door;Tienne;Tillana;Timmana;Tinos;Titan One;Titillium Web;Trade Winds;Trocchi;Trochut;Trykker;Tulpen One;Ubuntu;Ubuntu Condensed;Ubuntu Mono;Ultra;Uncial Antiqua;Underdog;Unica One;UnifrakturCook;UnifrakturMaguntia;Unkempt;Unlock;Unna;VT323;Vampiro One;Varela;Varela Round;Vast Shadow;Vesper Libre;Vibur;Vidaloka;Viga;Voces;Volkhov;Vollkorn;Voltaire;Waiting for the Sunrise;Wallpoet;Walter Turncoat;Warnes;Wellfleet;Wendy One;Wire One;Work Sans;Yanone Kaffeesatz;Yantramanav;Yellowtail;Yeseva One;Yesteryear;Zeyada";


    public function __construct() {
        $this->name = 'roy_customizer';
        $this->tab = 'front_office_features';
        $this->version = '1.2';
        $this->author = 'RoyThemes';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->trans(
    				'Roy Ayon Customizer',
    				array(),
    				'Modules.Roy_Customizer.Admin'
    		);
    		$this->description = $this->trans(
    				'Customize the design of your shop',
    				array(),
    				'Modules.Roy_Customizer.Admin'
    		);

    		$this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);

        $this -> defaults = array(


// Layout and colors
            "g_lay" => "1",

            "g_tp" => "150",
            "g_bp" => "150",

            "body_box_sw" => "1",
            "main_background_color" => "#e5e5e5",
            "nc_body_gs" => "#389290",
            "nc_body_ge" => "#8480df",
            "nc_body_gg" => "15",
            "nc_body_im_bg_ext" => "",
            "nc_body_im_bg_repeat" => 0,
            "nc_body_im_bg_position" => 0,
            "nc_body_im_bg_fixed" => 0,
            "gradient_scheme" => "1",
            "display_gradient" => 1,
            "body_bg_pattern" => 0,

            "nc_main_bg" => "1",
            "nc_main_bc" => "#f2f2f2",
            "nc_main_gs" => "#f8f8f8",
            "nc_main_ge" => "#d6d6d6",
            "nc_main_gg" => "15",
            "nc_main_im_bg_ext" => "",
            "nc_main_im_bg_repeat" => 0,
            "nc_main_im_bg_position" => 0,
            "nc_main_im_bg_fixed" => 0,


// Header options
            "header_lay" => "1",
            "header_w" => "2",
            "header_opa" => "1",
            "nc_logo_normal" => "png",
            "nc_logo_trans" => "png",
            "nc_header_trans" => "1",
            "nc_header_hide" => "2",
            "nc_bw_icons" => "12",
            "nc_bw_menu" => "22",

            "h_bg" => "#ffffff",

            "h_norm_icons" => "#1c1c1c",
            "h_norm_quan" => "#ffffff",
            "h_norm_quanbg" => "#1c1c1c",
            "h_norm_logged" => "#1c1c1c",
            "h_norm_link" => "#1c1c1c",
            "h_norm_linkh" => "#1c1c1c",
            "h_norm_effect" => "#1c1c1c",
            "h_norm_sborder" => "#1c1c1c",
            "h_trans_icons" => "#1c1c1c",
            "h_trans_quan" => "#1c1c1c",
            "h_trans_quanbg" => "#ffffff",
            "h_trans_logged" => "#1c1c1c",
            "h_trans_link" => "#1c1c1c",
            "h_trans_linkh" => "#1c1c1c",
            "h_trans_effect" => "#1c1c1c",
            "h_trans_sborder" => "#1c1c1c",

            "header_nbg" => "#ffffff",
            "header_nb" => "#f2f2f2",
            "header_nt" => "#bebebe",
            "header_nl" => "#424242",
            "header_nlh" => "#00c293",
            "nc_cl" => "2",
            "nc_cll" => "1",
            "header_ns" => "2",
            "header_nbs" => "1",
            "nc_toppanel_lay" => "1",
            "click_lay_m" => "1",
            "click_lay_s" => "1",
            "click_lay_c" => "1",
            "click_lay_a" => "1",

            "nc_m_layout" => "1",
            "nc_m_icon" => "menu1",
            "nc_m_under" => "1",
            "nc_m_override" => "2",

            "m_popup_llink" => "#1c1c1c",
            "m_popup_llink_hover" => "#00bda0",
            "m_popup_lbg" => "#ffffff",
            "m_popup_lchevron" => "#cccccc",
            "m_popup_lborder" => "#ffffff",

            "nc_m_br" => "5px",

            "search_lay" => "1",
            "nc_i_search" => "search1",
            "nc_search_tags" => "dress,black,cotton",
            "nc_search_prods" => "1,2,3,4,5,6",

            "search_br" => "0",

            "cart_lay" => "1",
            "cart_icon" => "cart2",

            "acc_lay" => "1",
            "acc_icon" => "acc1",
            "acc_name" => "1",

// Body design
            "g_bg_content" => "#ffffff",
            "g_border" => "#f2f2f2",
            "g_body_text" => "#777777",
            "g_body_comment" => "#bbbbbb",
            "g_body_link" => "#000000",
            "g_body_link_hover" => "#000000",
            "g_link_effect" => "1",
            "g_link_effectc" => "#f3de00",
            "g_form" => "1",
            "g_label" => "#1c1c1c",
            "g_header" => "#1c1c1c",
            "con_pos" => "1",
            "con_pro" => "1",
            "con_bra" => "1",
            "con_sale" => "1",
            "g_hb" => "#ffffff",
            "g_hc" => "#1c1c1c",
            "g_normal_border" => "#f2f2f2",
            "g_extra_border" => "#000000",
            "g_fancy_nbg" => "#ffffff",
            "g_fancy_nc" => "#1c1c1c",

            "b_normal_bg" => "#5fceb3",
            "b_normal_border" => "#5fceb3",
            "b_normal_color" => "#ffffff",
            "b_normal_bg_hover" => "#1c1c1c",
            "b_normal_border_hover" => "#1c1c1c",
            "b_normal_color_hover" => "#ffffff",
            "b_ex_bg" => "#f05377",
            "b_ex_border" => "#f05377",
            "b_ex_color" => "#ffffff",
            "nc_b_radius" => "4",
            "nc_b_sh" => "1",

            "i_bg" => "#ffffff",
            "i_color" => "#323232",
            "i_b_color" => "#f2f2f2",
            "i_bg_focus" => "#ffffff",
            "i_color_focus" => "#1c1c1c",
            "i_b_focus" => "#5c5c5c",
            "i_b_radius" => "4",
            "i_ph" => "#aaaaaa",
            "rc_bg_active" => "#00c293",

            "nc_loader" => 1,
            "nc_loader_lay" => "1",
            "nc_loader_bg" => "#ffffff",
            "nc_loader_color" => "#5fceb3",
            "nc_loader_color2" => "#5fceb3",
            "nc_loader_logo" => "2",
            "nc_logo_loader" => "png",


// Homepage content
            "nc_ht_bg" => "4",
            "nc_ht_bc" => "#f2f2f2",
            "nc_ht_gs" => "#f8f8f8",
            "nc_ht_ge" => "#d6d6d6",
            "nc_ht_gg" => "15",
            "nc_ht_im_bg_ext" => "",
            "nc_ht_im_bg_repeat" => 0,
            "nc_ht_im_bg_position" => 0,
            "nc_ht_im_bg_fixed" => 0,
            "nc_ht_top" => "0",
            "nc_ht_bot" => "0",
            "nc_ht_pad" => "1",
            "nc_ht_width" => "2",
            "nc_hm_pad" => "1",
            "nc_hm_width" => "2",

            "nc_hm_bg" => "4",
            "nc_hm_bc" => "#ffffff",
            "nc_hm_gs" => "#f8f8f8",
            "nc_hm_ge" => "#d6d6d6",
            "nc_hm_gg" => "15",
            "nc_hm_im_bg_ext" => "",
            "nc_hm_im_bg_repeat" => 0,
            "nc_hm_im_bg_position" => 0,
            "nc_hm_im_bg_fixed" => 0,
            "nc_hm_top" => "80",
            "nc_hm_bot" => "80",

            "nc_hb_bg" => "4",
            "nc_hb_bc" => "#ffffff",
            "nc_hb_gs" => "#f8f8f8",
            "nc_hb_ge" => "#d6d6d6",
            "nc_hb_gg" => "15",
            "nc_hb_im_bg_ext" => "",
            "nc_hb_im_bg_repeat" => 0,
            "nc_hb_im_bg_position" => 0,
            "nc_hb_im_bg_fixed" => 0,
            "nc_hb_top" => "80",
            "nc_hb_bot" => "80",

            "ban_spa_top" => "1",
            "ban_ts_top" => "0",
            "ban_bs_top" => "0",
            "ban_w_top" => "1",
            "ban_spa_home" => "1",
            "ban_ts_home" => "30",
            "ban_bs_home" => "0",
            "ban_w_home" => "1",
            "ban_spa_befoot" => "1",
            "ban_ts_befoot" => "30",
            "ban_bs_befoot" => "0",
            "ban_w_befoot" => "1",
            "ban_spa_foot" => "1",
            "ban_ts_foot" => "30",
            "ban_bs_foot" => "0",
            "ban_spa_sidemobilemenu" => "1",
            "ban_ts_sidemobilemenu" => "0",
            "ban_bs_sidemobilemenu" => "0",
            "ban_spa_product" => "1",
            "ban_ts_product" => "10",
            "ban_bs_product" => "0",
            "ban_ts_left" => "0",
            "ban_bs_left" => "0",
            "ban_ts_right" => "0",
            "ban_bs_right" => "0",


            "nc_hp_title" => "1",
            "nc_hp_align" => "1",
            "nc_feat_lay" => "1",
            "nc_feat_per" => "3",
            "nc_feat_spa" => "2",
            "nc_feat_slider" => "1",
            "nc_feat_auto" => "true",
            "nc_feat_bg" => "3",
            "nc_feat_bc" => "#ffffff",
            "nc_feat_gs" => "#f8f8f8",
            "nc_feat_ge" => "#d6d6d6",
            "nc_feat_gg" => "15",
            "nc_feat_title" => "#000000",
            "nc_feat_text" => "#000000",
            "nc_feat_textbg" => "#f2f2f2",
            "nc_feat_width" => "1",
            "nc_feat_top" => "0",
            "nc_feat_bot" => "0",

            "nc_best_lay" => "1",
            "nc_best_per" => "3",
            "nc_best_spa" => "3",
            "nc_best_slider" => "1",
            "nc_best_auto" => "true",
            "nc_best_bg" => "3",
            "nc_best_bc" => "#ffffff",
            "nc_best_gs" => "#f8f8f8",
            "nc_best_ge" => "#d6d6d6",
            "nc_best_gg" => "15",
            "nc_best_title" => "#000000",
            "nc_best_text" => "#000000",
            "nc_best_textbg" => "#f2f2f2",
            "nc_best_width" => "1",
            "nc_best_top" => "0",
            "nc_best_bot" => "0",

            "nc_new_lay" => "1",
            "nc_new_per" => "3",
            "nc_new_spa" => "3",
            "nc_new_slider" => "1",
            "nc_new_auto" => "true",
            "nc_new_bg" => "3",
            "nc_new_bc" => "#ffffff",
            "nc_new_gs" => "#f8f8f8",
            "nc_new_ge" => "#d6d6d6",
            "nc_new_gg" => "15",
            "nc_new_title" => "#000000",
            "nc_new_text" => "#000000",
            "nc_new_textbg" => "#f2f2f2",
            "nc_new_width" => "1",
            "nc_new_top" => "0",
            "nc_new_bot" => "0",

            "nc_sale_lay" => "1",
            "nc_sale_per" => "3",
            "nc_sale_spa" => "3",
            "nc_sale_slider" => "1",
            "nc_sale_auto" => "true",
            "nc_sale_bg" => "3",
            "nc_sale_bc" => "#ffffff",
            "nc_sale_gs" => "#f8f8f8",
            "nc_sale_ge" => "#d6d6d6",
            "nc_sale_gg" => "15",
            "nc_sale_title" => "#000000",
            "nc_sale_text" => "#000000",
            "nc_sale_textbg" => "#f2f2f2",
            "nc_sale_width" => "1",
            "nc_sale_top" => "0",
            "nc_sale_bot" => "0",

            "nc_cc1_lay" => "1",
            "nc_cc1_per" => "3",
            "nc_cc1_spa" => "3",
            "nc_cc1_slider" => "1",
            "nc_cc1_auto" => "true",
            "nc_cc1_bg" => "3",
            "nc_cc1_bc" => "#ffffff",
            "nc_cc1_gs" => "#f8f8f8",
            "nc_cc1_ge" => "#d6d6d6",
            "nc_cc1_gg" => "15",
            "nc_cc1_title" => "#000000",
            "nc_cc1_text" => "#000000",
            "nc_cc1_textbg" => "#f2f2f2",
            "nc_cc1_width" => "1",
            "nc_cc1_top" => "0",
            "nc_cc1_bot" => "0",

            "nc_cc2_lay" => "1",
            "nc_cc2_per" => "3",
            "nc_cc2_spa" => "3",
            "nc_cc2_slider" => "1",
            "nc_cc2_auto" => "true",
            "nc_cc2_bg" => "3",
            "nc_cc2_bc" => "#ffffff",
            "nc_cc2_gs" => "#f8f8f8",
            "nc_cc2_ge" => "#d6d6d6",
            "nc_cc2_gg" => "15",
            "nc_cc2_title" => "#000000",
            "nc_cc2_text" => "#000000",
            "nc_cc2_textbg" => "#f2f2f2",
            "nc_cc2_width" => "1",
            "nc_cc2_top" => "0",
            "nc_cc2_bot" => "0",

            "nc_cc3_lay" => "1",
            "nc_cc3_per" => "3",
            "nc_cc3_spa" => "3",
            "nc_cc3_slider" => "1",
            "nc_cc3_auto" => "true",
            "nc_cc3_bg" => "3",
            "nc_cc3_bc" => "#ffffff",
            "nc_cc3_gs" => "#f8f8f8",
            "nc_cc3_ge" => "#d6d6d6",
            "nc_cc3_gg" => "15",
            "nc_cc3_title" => "#000000",
            "nc_cc3_text" => "#000000",
            "nc_cc3_textbg" => "#f2f2f2",
            "nc_cc3_width" => "1",
            "nc_cc3_top" => "0",
            "nc_cc3_bot" => "0",

            "brand_w" => "2",
            "brand_per_row" => "6",
            "brand_name" => "#000000",
            "brand_name_hover" => "#00c293",


// Page content
            "nc_ot_bg" => "4",
            "nc_ot_bc" => "#f2f2f2",
            "nc_ot_gs" => "#f8f8f8",
            "nc_ot_ge" => "#d6d6d6",
            "nc_ot_gg" => "15",
            "nc_ot_im_bg_ext" => "",
            "nc_ot_im_bg_repeat" => 0,
            "nc_ot_im_bg_position" => 0,
            "nc_ot_im_bg_fixed" => 0,
            "nc_ot_pad" => "1",
            "nc_ot_width" => "2",
            "nc_ot_top" => "240",
            "nc_ot_bot" => "40",

            "nc_om_bg" => "4",
            "nc_om_bc" => "#ffffff",
            "nc_om_gs" => "#f8f8f8",
            "nc_om_ge" => "#d6d6d6",
            "nc_om_gg" => "15",
            "nc_om_im_bg_ext" => "",
            "nc_om_im_bg_repeat" => 0,
            "nc_om_im_bg_position" => 0,
            "nc_om_im_bg_fixed" => 0,
            "nc_om_top" => "80",
            "nc_om_bot" => "80",

            "nc_ob_bg" => "4",
            "nc_ob_bc" => "#ffffff",
            "nc_ob_gs" => "#f8f8f8",
            "nc_ob_ge" => "#d6d6d6",
            "nc_ob_gg" => "15",
            "nc_ob_im_bg_ext" => "",
            "nc_ob_im_bg_repeat" => 0,
            "nc_ob_im_bg_position" => 0,
            "nc_ob_im_bg_fixed" => 0,
            "nc_ob_top" => "80",
            "nc_ob_bot" => "80",

            "w_all" => "2",
            "w_cat" => "2",
            "w_pro" => "2",
            "w_con" => "2",
            "w_cart" => "2",
            "w_acc" => "2",
            "w_cms" => "2",
            "w_blog" => "2",

            "b_layout" => "1",
            "b_pos_cat" => "1",
            "b_pos_pro" => "2",
            "b_top" => "0",
            "b_bot" => "20",
            "b_w" => "2",
            "b_link" => "#888888",
            "b_link_hover" => "#323232",
            "b_separator" => "#dddddd",

            "page_bq_q" => "#777777",
            "contact_icon" => "#1c1c1c",
            "warning_message_color" => "#e7b918",
            "success_message_color" => "#00c293",
            "danger_message_color" => "#f05377",


// Sidebar and filter
            "sidebar_title_margin" => "30",
            "sidebar_title_b" => "0",
            "sidebar_title_padding" => "30",
            "sidebar_title_bwidth" => "2",
            "sidebar_title_border" => "#f2f2f2",

            "sidebar_margin" => "30",
            "sidebar_b" => "0",
            "sidebar_padding" => "30",
            "sidebar_bwidth" => "2",
            "sidebar_border" => "#f2f2f2",
            "sidebar_link" => "#000000",

            "sidebar_bb" => "0",
            "sidebar_bw" => "2",
            "sidebar_br" => "2",
            "sidebar_ball" => "#f2f2f2",
            "sidebar_bcat" => "#f2f2f2",
            "sidebar_bfilter" => "#f2f2f2",
            "sidebar_bsale" => "#f2f2f2",


// Product list
            "nc_subcat" => "0",
            "nc_cat_name" => "0",
            "nc_cat_img" => "0",
            "nc_cat_imglay" => "2",
            "nc_cat_desc" => "0",
            "pl_number_color" => "#1c1c1c",
            "pl_number_color_hover" => "#00c293",

            "nc_product_switch" => "3",
            "nc_product_margin" => "1",

            "pl_lay" => "1",
            "pl_img_bgs" => "2",
            "pl_text_bgs" => "2",
            "pl_text_align" => "2",
            "pl_img_bg" => "#ffffff",
            "pl_text_bg" => "#f2f2f2",
            "nc_pi_b" => "2",
            "nc_pi_bw" => "2",
            "nc_pi_br" => "4",
            "nc_pi_c" => "#f2f2f2",
            "nc_pi_ch" => "#323232",

            "pl_name" => "#1c1c1c",
            "pl_price" => "#1c1c1c",

            "pl_hover_lay" => "1",
            "pl_hover_g1" => "#ffffff",
            "pl_hover_g2" => "#ffffff",
            "pl_hover_trans" => "0.4",
            "pl_hover_but" => "#1c1c1c",
            "pl_hover_but_bg" => "#ffffff",
            "pl_hover_but_b" => "#ffffff",
            "pl_hover_buth" => "#1c1c1c",
            "pl_hover_but_bgh" => "#ffffff",
            "pl_hover_but_bh" => "#ffffff",
            "pl_hover_but_out" => "#000000",
            "pl_hover_but_br" => "0",
            "nc_second_img" => "1",
            "nc_colors" => "0",
            "nc_qv" => 1,
            "nc_fav" => 1,

            "pl_product_new_bg" => "#ffffff",
            "pl_product_new_border" => "#ffffff",
            "pl_product_new_color" => "#5fceb3",
            "pl_product_sale_bg" => "#1c1c1c",
            "pl_product_sale_border" => "#1c1c1c",
            "pl_product_sale_color" => "#ffffff",

            "pp_reviews_staron" => "#1c1c1c",
            "pp_reviews_staroff" => "#1c1c1c",

            "nc_count_days" => 0,
            "nc_count_bg" => "#ffffff",
            "nc_count_color" => "#888888",
            "nc_count_time" => "#1c1c1c",
            "nc_count_watch" => "#000000",
            "nc_count_watch_bg" => "#fbd4d6",

            "nc_i_qv" => "search1",
            "nc_i_discover" => "discover1",
            "nc_i_fav" => "fav1",
            "nc_ai" => "1",


//  Product page
            "pp_lay" => "1",
            "pp_thumbs" => "2",
            "pp_imgb" => "0",
            "pp_img_border" => "#f2f2f2",
            "pp_icon_border" => "#f2f2f2",
            "pp_imgspacing" => "1",
            "nc_mobadots" => "1",
            "nc_mobadotsc" => "#525252",

            "pp_sticky" => "1",
            "pp_price_color" => "#1c1c1c",
            "pp_price_dis" => "#1c1c1c",
            "pp_att_label" => "#1c1c1c",
            "pp_att_color_active" => "#1c1c1c",
            "pp_info_label" => "#c1c1c1",
            "pp_info_value" => "#1c1c1c",
            "pp_display_q" => 1,
            "pp_display_refer" => 1,
            "pp_display_cond" => 0,
            "pp_display_brand" => 1,
            "nc_access_per" => "5",

            "nc_pp_add_bg" => "#5fceb3",
            "nc_pp_add_border" => "#5fceb3",
            "nc_pp_add_color" => "#ffffff",

            "nc_count_pr_title" => "#1c1c1c",
            "nc_count_pr_bg" => "#ffffff",
            "nc_count_pr_sep" => "#f2f2f2",
            "nc_count_pr_numbers" => "#1c1c1c",
            "nc_count_pr_color" => "#888888",

            "pp_tabs_bg_sw" => "1",
            "pp_tabs_bg" => "#fafafa",


// Cart and order
            "o_add" => "1",
            "o_option" => "#f2f2f2",
            "o_option_active" => "#00bda0",
            "o_info_text" => "#777777",

            "lc_c" => "#ffffff",


// Blog
            "bl_w" => "1",
            "bl_align" => "1",
            "bl_lay" => "1",
            "bl_cont" => "2",
            "bl_row" => "3",
            "bl_meta_sw" => "1",
            "bl_head" => "#000000",
            "bl_h_title" => "#000000",
            "bl_h_title_h" => "#00c293",
            "bl_h_meta" => "#aaaaaa",
            "bl_h_desc" => "#ffffff",
            "bl_meta" => "#777777",


// Footer
            "footer_lay" => "1",
            "nc_footer_w" => "1",
            "nc_logo_footer" => "png",
            "nc_foot_bg" => "4",
            "nc_foot_bc" => "#fafafa",
            "nc_foot_gs" => "#f8f8f8",
            "nc_foot_ge" => "#d6d6d6",
            "nc_foot_gg" => "15",
            "nc_foot_im_bg_ext" => "",
            "nc_foot_im_bg_repeat" => 0,
            "nc_foot_im_bg_position" => 0,
            "nc_foot_im_bg_fixed" => 0,
            "footer_border" => "#eeeeee",
            "footer_border_sw" => "1",
            "footer_titles" => "#cccccc",
            "footer_text" => "#9d9d9d",
            "footer_link" => "#555555",
            "footer_link_h" => "#000000",
            "footer_news_bg" => "#ffffff",
            "footer_news_border" => "#ffffff",
            "footer_news_placeh" => "#a0a0a0",
            "footer_news_color" => "#525252",
            "footer_news_button" => "#ff4653",
            "nc_footer_soc" => "#000000",
            "nc_footer_soctitle" => "1",
            "nc_footer_linktitle" => "1",


//  Mobile
            "nc_side_btn" => "#f2f2f2",
            "nc_side_bg" => "#ffffff",
            "nc_side_b" => "#1c1c1c",
            "nc_side_title" => "#1c1c1c",
            "nc_side_text" => "#aaaaaa",
            "nc_side_btnb" => "#bbbbbb",
            "nc_side_btnbg" => "#f2f2f2",

            "nc_logo_mobile" => "png",
            "nc_mob_header" => "#ffffff",
            "nc_mob_menu" => "#1c1c1c",
            "nc_mob_hp" => "1",
            "nc_mob_cat" => "1",


// Typography
            "f_headings" => "Poppins",
            "f_buttons" => "Poppins",
            "f_text" => "Poppins",
            "f_price" => "Poppins",
            "f_menu" => "Poppins",
            "f_pn" => "Poppins",
            "latin_ext" => 0,
            "cyrillic" => 0,

            "fs_text" => 16,
            "lh_text" => 32,
            "fw_text" => 500,
            "ls_text" => 0,

            "fw_link" => 600,

            "fs_btn" => 14,
            "fw_btn" => 500,
            "ls_btn" => 0,
            "up_btn" => "none",

            "fs_inp" => 14,
            "fw_inp" => 500,
            "ls_inp" => 0,

            "fs_foot" => 16,
            "fw_foot" => 500,
            "ls_foot" => 0,
            "up_foot" => "none",

            "fs_home_tit" => 36,
            "fw_home_tit" => 400,
            "ls_home_tit" => 0,
            "up_home_tit" => "none",

            "fs_home_sub" => 16,
            "fw_home_sub" => 500,
            "ls_home_sub" => 0,
            "up_home_sub" => "none",

            "fs_page_head" => 36,
            "fw_page_head" => 500,
            "ls_page_head" => 0,
            "up_page_head" => "none",

            "fs_page_h3" => 22,
            "fw_page_h3" => 500,
            "ls_page_h3" => 0,
            "up_page_h3" => "none",

            "fs_page_side" => 36,
            "fw_page_side" => 500,
            "ls_page_side" => 0,
            "up_page_side" => "none",

            "fs_cat_name" => 15,
            "fw_cat_name" => 500,
            "ls_cat_name" => 0,
            "up_cat_name" => "none",

            "fs_cat_price" => 16,
            "fw_cat_price" => 500,
            "ls_cat_price" => 0,

            "fs_pp_name" => 36,
            "fw_pp_name" => 500,
            "ls_pp_name" => 0,
            "up_pp_name" => "none",

            "fs_pp_price" => 32,
            "fw_pp_price" => 600,
            "ls_pp_price" => 0,

            "fs_blog" => 22,
            "fw_blog" => 500,
            "ls_blog" => 0,
            "up_blog" => "none",

            "fs_menu" => 15,
            "fw_menu" => 500,
            "ls_menu" => 0,
            "up_menu" => "none",


// Custom CSS
            "nc_css" => "",

            );
      }

      public function install() {

        if (parent::install() AND $this -> registerHook('displayHeader') AND $this -> registerHook('displayAdminHomeQuickLinks') AND $this -> registerHook('displayBackOfficeHeader') AND $this -> registerHook('displaySideSearch')) {

            Configuration::updateValue('RC_G_LAY', $this -> defaults["g_lay"]);
            Configuration::updateValue('RC_G_TP', $this -> defaults["g_tp"]);
            Configuration::updateValue('RC_G_BP', $this -> defaults["g_bp"]);
            Configuration::updateValue('RC_BODY_BOX_SW', $this -> defaults["body_box_sw"]);
            Configuration::updateValue('RC_MAIN_BACKGROUND_COLOR', $this -> defaults["main_background_color"]);
            Configuration::updateValue('NC_BODY_GS', $this -> defaults["nc_body_gs"]);
            Configuration::updateValue('NC_BODY_GE', $this -> defaults["nc_body_ge"]);
            Configuration::updateValue('NC_BODY_GG', $this -> defaults["nc_body_gg"]);
            Configuration::updateValue('NC_BODY_IM_BG_EXT', $this -> defaults["nc_body_im_bg_ext"]);
            Configuration::updateValue('NC_BODY_IM_BG_REPEAT', $this -> defaults["nc_body_im_bg_repeat"]);
            Configuration::updateValue('NC_BODY_IM_BG_POSITION', $this -> defaults["nc_body_im_bg_position"]);
            Configuration::updateValue('NC_BODY_IM_BG_FIXED', $this -> defaults["nc_body_im_bg_fixed"]);
            Configuration::updateValue('RC_GRADIENT_SCHEME', $this -> defaults["gradient_scheme"]);
            Configuration::updateValue('RC_DISPLAY_GRADIENT', $this -> defaults["display_gradient"]);
            Configuration::updateValue('RC_BODY_BG_PATTERN', $this -> defaults["body_bg_pattern"]);
            Configuration::updateValue('NC_MAIN_BGS', $this -> defaults["nc_main_bg"]);
            Configuration::updateValue('NC_MAIN_BC', $this -> defaults["nc_main_bc"]);
            Configuration::updateValue('NC_MAIN_GS', $this -> defaults["nc_main_gs"]);
            Configuration::updateValue('NC_MAIN_GE', $this -> defaults["nc_main_ge"]);
            Configuration::updateValue('NC_MAIN_GG', $this -> defaults["nc_main_gg"]);
            Configuration::updateValue('NC_MAIN_IM_BG_EXT', $this -> defaults["nc_main_im_bg_ext"]);
            Configuration::updateValue('NC_MAIN_IM_BG_REPEAT', $this -> defaults["nc_main_im_bg_repeat"]);
            Configuration::updateValue('NC_MAIN_IM_BG_POSITION', $this -> defaults["nc_main_im_bg_position"]);
            Configuration::updateValue('NC_MAIN_IM_BG_FIXED', $this -> defaults["nc_main_im_bg_fixed"]);

// header
            Configuration::updateValue('RC_HEADER_LAY', $this -> defaults["header_lay"]);
            Configuration::updateValue('RC_HEADER_W', $this -> defaults["header_w"]);
            Configuration::updateValue('RC_HEADER_OPA', $this -> defaults["header_opa"]);
            Configuration::updateValue('NC_LOGO_NORMAL', $this -> defaults["nc_logo_normal"]);
            Configuration::updateValue('NC_LOGO_TRANS', $this -> defaults["nc_logo_trans"]);
            Configuration::updateValue('NC_HEADER_TRANSWITCH', $this -> defaults["nc_header_trans"]);
            Configuration::updateValue('NC_HEADER_HIDES', $this -> defaults["nc_header_hide"]);
            Configuration::updateValue('NC_BW_ICONS', $this -> defaults["nc_bw_icons"]);
            Configuration::updateValue('NC_BW_MENU', $this -> defaults["nc_bw_menu"]);
            Configuration::updateValue('RC_H_BG', $this -> defaults["h_bg"]);
            Configuration::updateValue('RC_NORM_ICONS', $this -> defaults["h_norm_icons"]);
            Configuration::updateValue('RC_NORM_QUAN', $this -> defaults["h_norm_quan"]);
            Configuration::updateValue('RC_NORM_QUANBG', $this -> defaults["h_norm_quanbg"]);
            Configuration::updateValue('RC_NORM_LOGGED', $this -> defaults["h_norm_logged"]);
            Configuration::updateValue('RC_NORM_LINK', $this -> defaults["h_norm_link"]);
            Configuration::updateValue('RC_NORM_LINKH', $this -> defaults["h_norm_linkh"]);
            Configuration::updateValue('RC_NORM_EFFECT', $this -> defaults["h_norm_effect"]);
            Configuration::updateValue('RC_NORM_SBORDER', $this -> defaults["h_norm_sborder"]);
            Configuration::updateValue('RC_TRANS_ICONS', $this -> defaults["h_trans_icons"]);
            Configuration::updateValue('RC_TRANS_QUAN', $this -> defaults["h_trans_quan"]);
            Configuration::updateValue('RC_TRANS_QUANBG', $this -> defaults["h_trans_quanbg"]);
            Configuration::updateValue('RC_TRANS_LOGGED', $this -> defaults["h_trans_logged"]);
            Configuration::updateValue('RC_TRANS_LINK', $this -> defaults["h_trans_link"]);
            Configuration::updateValue('RC_TRANS_LINKH', $this -> defaults["h_trans_linkh"]);
            Configuration::updateValue('RC_TRANS_EFFECT', $this -> defaults["h_trans_effect"]);
            Configuration::updateValue('RC_TRANS_SBORDER', $this -> defaults["h_trans_sborder"]);
            Configuration::updateValue('RC_HEADER_NBG', $this -> defaults["header_nbg"]);
            Configuration::updateValue('RC_HEADER_NB', $this -> defaults["header_nb"]);
            Configuration::updateValue('RC_HEADER_NT', $this -> defaults["header_nt"]);
            Configuration::updateValue('RC_HEADER_NL', $this -> defaults["header_nl"]);
            Configuration::updateValue('RC_HEADER_NLH', $this -> defaults["header_nlh"]);
            Configuration::updateValue('NC_CLS', $this -> defaults["nc_cl"]);
            Configuration::updateValue('NC_CLLS', $this -> defaults["nc_cll"]);
            Configuration::updateValue('RC_HEADER_NS', $this -> defaults["header_ns"]);
            Configuration::updateValue('RC_HEADER_NBS', $this -> defaults["header_nbs"]);
            Configuration::updateValue('NC_TOPPANEL_LAYS', $this -> defaults["nc_toppanel_lay"]);
            Configuration::updateValue('RC_CLICK_LAY_M', $this -> defaults["click_lay_m"]);
            Configuration::updateValue('RC_CLICK_LAY_S', $this -> defaults["click_lay_s"]);
            Configuration::updateValue('RC_CLICK_LAY_C', $this -> defaults["click_lay_c"]);
            Configuration::updateValue('RC_CLICK_LAY_A', $this -> defaults["click_lay_a"]);
            Configuration::updateValue('NC_M_LAYOUT_S', $this -> defaults["nc_m_layout"]);
            Configuration::updateValue('NC_M_ICON', $this -> defaults["nc_m_icon"]);
            Configuration::updateValue('NC_M_UNDER_S', $this -> defaults["nc_m_under"]);
            Configuration::updateValue('NC_M_OVERRIDE_S', $this -> defaults["nc_m_override"]);
            Configuration::updateValue('RC_M_POPUP_LLINK', $this -> defaults["m_popup_llink"]);
            Configuration::updateValue('RC_M_POPUP_LLINK_HOVER', $this -> defaults["m_popup_llink_hover"]);
            Configuration::updateValue('RC_M_POPUP_LBG', $this -> defaults["m_popup_lbg"]);
            Configuration::updateValue('RC_M_POPUP_LCHEVRON', $this -> defaults["m_popup_lchevron"]);
            Configuration::updateValue('RC_M_POPUP_LBORDER', $this -> defaults["m_popup_lborder"]);
            Configuration::updateValue('NC_M_BR_S', $this -> defaults["nc_m_br"]);
            Configuration::updateValue('RC_SEARCH_LAY', $this -> defaults["search_lay"]);
            Configuration::updateValue('NC_I_SEARCHS', $this -> defaults["nc_i_search"]);
            Configuration::updateValue('NC_SEARCH_TAGS', $this -> defaults["nc_search_tags"]);
            Configuration::updateValue('NC_SEARCH_PRODS', $this -> defaults["nc_search_prods"]);
            Configuration::updateValue('RC_SEARCH_BR', $this -> defaults["search_br"]);
            Configuration::updateValue('RC_CART_LAY', $this -> defaults["cart_lay"]);
            Configuration::updateValue('RC_CART_ICON', $this -> defaults["cart_icon"]);
            Configuration::updateValue('RC_ACC_LAY', $this -> defaults["acc_lay"]);
            Configuration::updateValue('RC_ACC_ICON', $this -> defaults["acc_icon"]);
            Configuration::updateValue('RC_ACC_NAME', $this -> defaults["acc_name"]);

// body design
            Configuration::updateValue('RC_G_BG_CONTENT', $this -> defaults["g_bg_content"]);
            Configuration::updateValue('RC_G_BORDER', $this -> defaults["g_border"]);
            Configuration::updateValue('RC_G_BODY_TEXT', $this -> defaults["g_body_text"]);
            Configuration::updateValue('RC_G_BODY_COMMENT', $this -> defaults["g_body_comment"]);
            Configuration::updateValue('RC_G_BODY_LINK', $this -> defaults["g_body_link"]);
            Configuration::updateValue('RC_G_BODY_LINK_HOVER', $this -> defaults["g_body_link_hover"]);
            Configuration::updateValue('RC_G_LINK_EFFECT', $this -> defaults["g_link_effect"]);
            Configuration::updateValue('RC_G_LINK_EFFECTC', $this -> defaults["g_link_effectc"]);
            Configuration::updateValue('RC_G_FORMS', $this -> defaults["g_form"]);
            Configuration::updateValue('RC_LABEL', $this -> defaults["g_label"]);
            Configuration::updateValue('RC_G_HEADER', $this -> defaults["g_header"]);
            Configuration::updateValue('RC_CON_POS', $this -> defaults["con_pos"]);
            Configuration::updateValue('RC_CON_PRO', $this -> defaults["con_pro"]);
            Configuration::updateValue('RC_CON_BRA', $this -> defaults["con_bra"]);
            Configuration::updateValue('RC_CON_SALE', $this -> defaults["con_sale"]);
            Configuration::updateValue('RC_G_HB', $this -> defaults["g_hb"]);
            Configuration::updateValue('RC_G_HC', $this -> defaults["g_hc"]);
            Configuration::updateValue('RC_G_NORMAL_BORDER', $this -> defaults["g_normal_border"]);
            Configuration::updateValue('RC_G_EXTRA_BORDER', $this -> defaults["g_extra_border"]);
            Configuration::updateValue('RC_FANCY_NBG', $this -> defaults["g_fancy_nbg"]);
            Configuration::updateValue('RC_FANCY_NC', $this -> defaults["g_fancy_nc"]);

            Configuration::updateValue('RC_B_NORMAL_BG', $this -> defaults["b_normal_bg"]);
            Configuration::updateValue('RC_B_NORMAL_BORDER', $this -> defaults["b_normal_border"]);
            Configuration::updateValue('RC_B_NORMAL_COLOR', $this -> defaults["b_normal_color"]);
            Configuration::updateValue('RC_B_NORMAL_BG_HOVER', $this -> defaults["b_normal_bg_hover"]);
            Configuration::updateValue('RC_B_NORMAL_BORDER_HOVER', $this -> defaults["b_normal_border_hover"]);
            Configuration::updateValue('RC_B_NORMAL_COLOR_HOVER', $this -> defaults["b_normal_color_hover"]);
            Configuration::updateValue('RC_B_EX_BG', $this -> defaults["b_ex_bg"]);
            Configuration::updateValue('RC_B_EX_BORDER', $this -> defaults["b_ex_border"]);
            Configuration::updateValue('RC_B_EX_COLOR', $this -> defaults["b_ex_color"]);
            Configuration::updateValue('NC_B_RADIUSS', $this -> defaults["nc_b_radius"]);
            Configuration::updateValue('NC_B_SHS', $this -> defaults["nc_b_sh"]);

            Configuration::updateValue('RC_I_BG', $this -> defaults["i_bg"]);
            Configuration::updateValue('RC_I_COLOR', $this -> defaults["i_color"]);
            Configuration::updateValue('RC_I_B_COLOR', $this -> defaults["i_b_color"]);
            Configuration::updateValue('RC_I_BG_FOCUS', $this -> defaults["i_bg_focus"]);
            Configuration::updateValue('RC_I_COLOR_FOCUS', $this -> defaults["i_color_focus"]);
            Configuration::updateValue('RC_I_B_FOCUS', $this -> defaults["i_b_focus"]);
            Configuration::updateValue('RC_I_B_RADIUS', $this -> defaults["i_b_radius"]);
            Configuration::updateValue('RC_I_PH', $this -> defaults["i_ph"]);
            Configuration::updateValue('RC_RC_BG_ACTIVE', $this -> defaults["rc_bg_active"]);

            Configuration::updateValue('NC_LOADERS', $this -> defaults["nc_loader"]);
            Configuration::updateValue('NC_LOADER_LAYS', $this -> defaults["nc_loader_lay"]);
            Configuration::updateValue('NC_LOADER_BG', $this -> defaults["nc_loader_bg"]);
            Configuration::updateValue('NC_LOADER_COLOR', $this -> defaults["nc_loader_color"]);
            Configuration::updateValue('NC_LOADER_COLOR2', $this -> defaults["nc_loader_color2"]);
            Configuration::updateValue('NC_LOADER_LOGOS', $this -> defaults["nc_loader_logo"]);
            Configuration::updateValue('NC_LOGO_LOADER', $this -> defaults["nc_logo_loader"]);

// Homepage content
            Configuration::updateValue('NC_HT_BGS', $this -> defaults["nc_ht_bg"]);
            Configuration::updateValue('NC_HT_BC', $this -> defaults["nc_ht_bc"]);
            Configuration::updateValue('NC_HT_GS', $this -> defaults["nc_ht_gs"]);
            Configuration::updateValue('NC_HT_GE', $this -> defaults["nc_ht_ge"]);
            Configuration::updateValue('NC_HT_GG', $this -> defaults["nc_ht_gg"]);
            Configuration::updateValue('NC_HT_IM_BG_EXT', $this -> defaults["nc_ht_im_bg_ext"]);
            Configuration::updateValue('NC_HT_IM_BG_REPEAT', $this -> defaults["nc_ht_im_bg_repeat"]);
            Configuration::updateValue('NC_HT_IM_BG_POSITION', $this -> defaults["nc_ht_im_bg_position"]);
            Configuration::updateValue('NC_HT_IM_BG_FIXED', $this -> defaults["nc_ht_im_bg_fixed"]);
            Configuration::updateValue('NC_HT_TOPS', $this -> defaults["nc_ht_top"]);
            Configuration::updateValue('NC_HT_BOTS', $this -> defaults["nc_ht_bot"]);
            Configuration::updateValue('NC_HT_PAD', $this -> defaults["nc_ht_pad"]);
            Configuration::updateValue('NC_HT_WIDTH', $this -> defaults["nc_ht_width"]);
            Configuration::updateValue('NC_HM_PAD', $this -> defaults["nc_hm_pad"]);
            Configuration::updateValue('NC_HM_WIDTH', $this -> defaults["nc_hm_width"]);

            Configuration::updateValue('NC_HM_BGS', $this -> defaults["nc_hm_bg"]);
            Configuration::updateValue('NC_HM_BC', $this -> defaults["nc_hm_bc"]);
            Configuration::updateValue('NC_HM_GS', $this -> defaults["nc_hm_gs"]);
            Configuration::updateValue('NC_HM_GE', $this -> defaults["nc_hm_ge"]);
            Configuration::updateValue('NC_HM_GG', $this -> defaults["nc_hm_gg"]);
            Configuration::updateValue('NC_HM_IM_BG_EXT', $this -> defaults["nc_hm_im_bg_ext"]);
            Configuration::updateValue('NC_HM_IM_BG_REPEAT', $this -> defaults["nc_hm_im_bg_repeat"]);
            Configuration::updateValue('NC_HM_IM_BG_POSITION', $this -> defaults["nc_hm_im_bg_position"]);
            Configuration::updateValue('NC_HM_IM_BG_FIXED', $this -> defaults["nc_hm_im_bg_fixed"]);
            Configuration::updateValue('NC_HM_TOPS', $this -> defaults["nc_hm_top"]);
            Configuration::updateValue('NC_HM_BOTS', $this -> defaults["nc_hm_bot"]);

            Configuration::updateValue('NC_HB_BGS', $this -> defaults["nc_hb_bg"]);
            Configuration::updateValue('NC_HB_BC', $this -> defaults["nc_hb_bc"]);
            Configuration::updateValue('NC_HB_GS', $this -> defaults["nc_hb_gs"]);
            Configuration::updateValue('NC_HB_GE', $this -> defaults["nc_hb_ge"]);
            Configuration::updateValue('NC_HB_GG', $this -> defaults["nc_hb_gg"]);
            Configuration::updateValue('NC_HB_IM_BG_EXT', $this -> defaults["nc_hb_im_bg_ext"]);
            Configuration::updateValue('NC_HB_IM_BG_REPEAT', $this -> defaults["nc_hb_im_bg_repeat"]);
            Configuration::updateValue('NC_HB_IM_BG_POSITION', $this -> defaults["nc_hb_im_bg_position"]);
            Configuration::updateValue('NC_HB_IM_BG_FIXED', $this -> defaults["nc_hb_im_bg_fixed"]);
            Configuration::updateValue('NC_HB_TOPS', $this -> defaults["nc_hb_top"]);
            Configuration::updateValue('NC_HB_BOTS', $this -> defaults["nc_hb_bot"]);

            Configuration::updateValue('RC_BAN_SPA_TOPS', $this -> defaults["ban_spa_top"]);
            Configuration::updateValue('RC_BAN_TS_TOPS', $this -> defaults["ban_ts_top"]);
            Configuration::updateValue('RC_BAN_BS_TOPS', $this -> defaults["ban_bs_top"]);
            Configuration::updateValue('RC_BAN_W_TOP', $this -> defaults["ban_w_top"]);
            Configuration::updateValue('RC_BAN_SPA_HOME', $this -> defaults["ban_spa_home"]);
            Configuration::updateValue('RC_BAN_TS_HOME', $this -> defaults["ban_ts_home"]);
            Configuration::updateValue('RC_BAN_BS_HOME', $this -> defaults["ban_bs_home"]);
            Configuration::updateValue('RC_BAN_W_HOME', $this -> defaults["ban_w_home"]);
            Configuration::updateValue('RC_BAN_SPA_BEFOOT', $this -> defaults["ban_spa_befoot"]);
            Configuration::updateValue('RC_BAN_TS_BEFOOT', $this -> defaults["ban_ts_befoot"]);
            Configuration::updateValue('RC_BAN_BS_BEFOOT', $this -> defaults["ban_bs_befoot"]);
            Configuration::updateValue('RC_BAN_W_BEFOOT', $this -> defaults["ban_w_befoot"]);
            Configuration::updateValue('RC_BAN_SPA_FOOT', $this -> defaults["ban_spa_foot"]);
            Configuration::updateValue('RC_BAN_TS_FOOT', $this -> defaults["ban_ts_foot"]);
            Configuration::updateValue('RC_BAN_BS_FOOT', $this -> defaults["ban_bs_foot"]);
            Configuration::updateValue('RC_BAN_SPA_SIDEMOBILEMENU', $this -> defaults["ban_spa_sidemobilemenu"]);
            Configuration::updateValue('RC_BAN_TS_SIDEMOBILEMENU', $this -> defaults["ban_ts_sidemobilemenu"]);
            Configuration::updateValue('RC_BAN_BS_SIDEMOBILEMENU', $this -> defaults["ban_bs_sidemobilemenu"]);
            Configuration::updateValue('RC_BAN_SPA_PRODUCT', $this -> defaults["ban_spa_product"]);
            Configuration::updateValue('RC_BAN_TS_PRODUCT', $this -> defaults["ban_ts_product"]);
            Configuration::updateValue('RC_BAN_BS_PRODUCT', $this -> defaults["ban_bs_product"]);
            Configuration::updateValue('RC_BAN_TS_LEFT', $this -> defaults["ban_ts_left"]);
            Configuration::updateValue('RC_BAN_BS_LEFT', $this -> defaults["ban_bs_left"]);
            Configuration::updateValue('RC_BAN_TS_RIGHT', $this -> defaults["ban_ts_right"]);
            Configuration::updateValue('RC_BAN_BS_RIGHT', $this -> defaults["ban_bs_right"]);
            Configuration::updateValue('NC_HP_TITLE', $this -> defaults["nc_hp_title"]);
            Configuration::updateValue('NC_HP_ALIGN', $this -> defaults["nc_hp_align"]);

            Configuration::updateValue('NC_FEAT_LAYS', $this -> defaults["nc_feat_lay"]);
            Configuration::updateValue('NC_FEAT_PERS', $this -> defaults["nc_feat_per"]);
            Configuration::updateValue('NC_FEAT_SPAS', $this -> defaults["nc_feat_spa"]);
            Configuration::updateValue('NC_FEAT_SLIDERS', $this -> defaults["nc_feat_slider"]);
            Configuration::updateValue('NC_FEAT_AUTOS', $this -> defaults["nc_feat_auto"]);
            Configuration::updateValue('NC_FEAT_BG', $this -> defaults["nc_feat_bg"]);
            Configuration::updateValue('NC_FEAT_BC', $this -> defaults["nc_feat_bc"]);
            Configuration::updateValue('NC_FEAT_GS', $this -> defaults["nc_feat_gs"]);
            Configuration::updateValue('NC_FEAT_GE', $this -> defaults["nc_feat_ge"]);
            Configuration::updateValue('NC_FEAT_GG', $this -> defaults["nc_feat_gg"]);
            Configuration::updateValue('NC_FEAT_TITLE', $this -> defaults["nc_feat_title"]);
            Configuration::updateValue('NC_FEAT_TEXT', $this -> defaults["nc_feat_text"]);
            Configuration::updateValue('NC_FEAT_TEXTBG', $this -> defaults["nc_feat_textbg"]);
            Configuration::updateValue('NC_FEAT_WIDTH', $this -> defaults["nc_feat_width"]);
            Configuration::updateValue('NC_FEAT_TOPS', $this -> defaults["nc_feat_top"]);
            Configuration::updateValue('NC_FEAT_BOTS', $this -> defaults["nc_feat_bot"]);

            Configuration::updateValue('NC_BEST_LAY', $this -> defaults["nc_best_lay"]);
            Configuration::updateValue('NC_BEST_PER', $this -> defaults["nc_best_per"]);
            Configuration::updateValue('NC_BEST_SPA', $this -> defaults["nc_best_spa"]);
            Configuration::updateValue('NC_BEST_SLIDER', $this -> defaults["nc_best_slider"]);
            Configuration::updateValue('NC_BEST_AUTO', $this -> defaults["nc_best_auto"]);
            Configuration::updateValue('NC_BEST_BG', $this -> defaults["nc_best_bg"]);
            Configuration::updateValue('NC_BEST_BC', $this -> defaults["nc_best_bc"]);
            Configuration::updateValue('NC_BEST_GS', $this -> defaults["nc_best_gs"]);
            Configuration::updateValue('NC_BEST_GE', $this -> defaults["nc_best_ge"]);
            Configuration::updateValue('NC_BEST_GG', $this -> defaults["nc_best_gg"]);
            Configuration::updateValue('NC_BEST_TITLE', $this -> defaults["nc_best_title"]);
            Configuration::updateValue('NC_BEST_TEXT', $this -> defaults["nc_best_text"]);
            Configuration::updateValue('NC_BEST_TEXTBG', $this -> defaults["nc_best_textbg"]);
            Configuration::updateValue('NC_BEST_WIDTH', $this -> defaults["nc_best_width"]);
            Configuration::updateValue('NC_BEST_TOPS', $this -> defaults["nc_best_top"]);
            Configuration::updateValue('NC_BEST_BOTS', $this -> defaults["nc_best_bot"]);

            Configuration::updateValue('NC_NEW_LAY', $this -> defaults["nc_new_lay"]);
            Configuration::updateValue('NC_NEW_PER', $this -> defaults["nc_new_per"]);
            Configuration::updateValue('NC_NEW_SPA', $this -> defaults["nc_new_spa"]);
            Configuration::updateValue('NC_NEW_SLIDER', $this -> defaults["nc_new_slider"]);
            Configuration::updateValue('NC_NEW_AUTO', $this -> defaults["nc_new_auto"]);
            Configuration::updateValue('NC_NEW_BG', $this -> defaults["nc_new_bg"]);
            Configuration::updateValue('NC_NEW_BC', $this -> defaults["nc_new_bc"]);
            Configuration::updateValue('NC_NEW_GS', $this -> defaults["nc_new_gs"]);
            Configuration::updateValue('NC_NEW_GE', $this -> defaults["nc_new_ge"]);
            Configuration::updateValue('NC_NEW_GG', $this -> defaults["nc_new_gg"]);
            Configuration::updateValue('NC_NEW_TITLE', $this -> defaults["nc_new_title"]);
            Configuration::updateValue('NC_NEW_TEXT', $this -> defaults["nc_new_text"]);
            Configuration::updateValue('NC_NEW_TEXTBG', $this -> defaults["nc_new_textbg"]);
            Configuration::updateValue('NC_NEW_WIDTH', $this -> defaults["nc_new_width"]);
            Configuration::updateValue('NC_NEW_TOPS', $this -> defaults["nc_new_top"]);
            Configuration::updateValue('NC_NEW_BOTS', $this -> defaults["nc_new_bot"]);

            Configuration::updateValue('NC_SALE_LAY', $this -> defaults["nc_sale_lay"]);
            Configuration::updateValue('NC_SALE_PER', $this -> defaults["nc_sale_per"]);
            Configuration::updateValue('NC_SALE_SPA', $this -> defaults["nc_sale_spa"]);
            Configuration::updateValue('NC_SALE_SLIDER', $this -> defaults["nc_sale_slider"]);
            Configuration::updateValue('NC_SALE_AUTO', $this -> defaults["nc_sale_auto"]);
            Configuration::updateValue('NC_SALE_BG', $this -> defaults["nc_sale_bg"]);
            Configuration::updateValue('NC_SALE_BC', $this -> defaults["nc_sale_bc"]);
            Configuration::updateValue('NC_SALE_GS', $this -> defaults["nc_sale_gs"]);
            Configuration::updateValue('NC_SALE_GE', $this -> defaults["nc_sale_ge"]);
            Configuration::updateValue('NC_SALE_GG', $this -> defaults["nc_sale_gg"]);
            Configuration::updateValue('NC_SALE_TITLE', $this -> defaults["nc_sale_title"]);
            Configuration::updateValue('NC_SALE_TEXT', $this -> defaults["nc_sale_text"]);
            Configuration::updateValue('NC_SALE_TEXTBG', $this -> defaults["nc_sale_textbg"]);
            Configuration::updateValue('NC_SALE_WIDTH', $this -> defaults["nc_sale_width"]);
            Configuration::updateValue('NC_SALE_TOPS', $this -> defaults["nc_sale_top"]);
            Configuration::updateValue('NC_SALE_BOTS', $this -> defaults["nc_sale_bot"]);

            Configuration::updateValue('NC_CC1_LAY', $this -> defaults["nc_cc1_lay"]);
            Configuration::updateValue('NC_CC1_PER', $this -> defaults["nc_cc1_per"]);
            Configuration::updateValue('NC_CC1_SPA', $this -> defaults["nc_cc1_spa"]);
            Configuration::updateValue('NC_CC1_SLIDER', $this -> defaults["nc_cc1_slider"]);
            Configuration::updateValue('NC_CC1_AUTO', $this -> defaults["nc_cc1_auto"]);
            Configuration::updateValue('NC_CC1_BG', $this -> defaults["nc_cc1_bg"]);
            Configuration::updateValue('NC_CC1_BC', $this -> defaults["nc_cc1_bc"]);
            Configuration::updateValue('NC_CC1_GS', $this -> defaults["nc_cc1_gs"]);
            Configuration::updateValue('NC_CC1_GE', $this -> defaults["nc_cc1_ge"]);
            Configuration::updateValue('NC_CC1_GG', $this -> defaults["nc_cc1_gg"]);
            Configuration::updateValue('NC_CC1_TITLE', $this -> defaults["nc_cc1_title"]);
            Configuration::updateValue('NC_CC1_TEXT', $this -> defaults["nc_cc1_text"]);
            Configuration::updateValue('NC_CC1_TEXTBG', $this -> defaults["nc_cc1_textbg"]);
            Configuration::updateValue('NC_CC1_WIDTH', $this -> defaults["nc_cc1_width"]);
            Configuration::updateValue('NC_CC1_TOPS', $this -> defaults["nc_cc1_top"]);
            Configuration::updateValue('NC_CC1_BOTS', $this -> defaults["nc_cc1_bot"]);

            Configuration::updateValue('NC_CC2_LAY', $this -> defaults["nc_cc2_lay"]);
            Configuration::updateValue('NC_CC2_PER', $this -> defaults["nc_cc2_per"]);
            Configuration::updateValue('NC_CC2_SPA', $this -> defaults["nc_cc2_spa"]);
            Configuration::updateValue('NC_CC2_SLIDER', $this -> defaults["nc_cc2_slider"]);
            Configuration::updateValue('NC_CC2_AUTO', $this -> defaults["nc_cc2_auto"]);
            Configuration::updateValue('NC_CC2_BG', $this -> defaults["nc_cc2_bg"]);
            Configuration::updateValue('NC_CC2_BC', $this -> defaults["nc_cc2_bc"]);
            Configuration::updateValue('NC_CC2_GS', $this -> defaults["nc_cc2_gs"]);
            Configuration::updateValue('NC_CC2_GE', $this -> defaults["nc_cc2_ge"]);
            Configuration::updateValue('NC_CC2_GG', $this -> defaults["nc_cc2_gg"]);
            Configuration::updateValue('NC_CC2_TITLE', $this -> defaults["nc_cc2_title"]);
            Configuration::updateValue('NC_CC2_TEXT', $this -> defaults["nc_cc2_text"]);
            Configuration::updateValue('NC_CC2_TEXTBG', $this -> defaults["nc_cc2_textbg"]);
            Configuration::updateValue('NC_CC2_WIDTH', $this -> defaults["nc_cc2_width"]);
            Configuration::updateValue('NC_CC2_TOPS', $this -> defaults["nc_cc2_top"]);
            Configuration::updateValue('NC_CC2_BOTS', $this -> defaults["nc_cc2_bot"]);

            Configuration::updateValue('NC_CC3_LAY', $this -> defaults["nc_cc3_lay"]);
            Configuration::updateValue('NC_CC3_PER', $this -> defaults["nc_cc3_per"]);
            Configuration::updateValue('NC_CC3_SPA', $this -> defaults["nc_cc3_spa"]);
            Configuration::updateValue('NC_CC3_SLIDER', $this -> defaults["nc_cc3_slider"]);
            Configuration::updateValue('NC_CC3_AUTO', $this -> defaults["nc_cc3_auto"]);
            Configuration::updateValue('NC_CC3_BG', $this -> defaults["nc_cc3_bg"]);
            Configuration::updateValue('NC_CC3_BC', $this -> defaults["nc_cc3_bc"]);
            Configuration::updateValue('NC_CC3_GS', $this -> defaults["nc_cc3_gs"]);
            Configuration::updateValue('NC_CC3_GE', $this -> defaults["nc_cc3_ge"]);
            Configuration::updateValue('NC_CC3_GG', $this -> defaults["nc_cc3_gg"]);
            Configuration::updateValue('NC_CC3_TITLE', $this -> defaults["nc_cc3_title"]);
            Configuration::updateValue('NC_CC3_TEXT', $this -> defaults["nc_cc3_text"]);
            Configuration::updateValue('NC_CC3_TEXTBG', $this -> defaults["nc_cc3_textbg"]);
            Configuration::updateValue('NC_CC3_WIDTH', $this -> defaults["nc_cc3_width"]);
            Configuration::updateValue('NC_CC3_TOPS', $this -> defaults["nc_cc3_top"]);
            Configuration::updateValue('NC_CC3_BOTS', $this -> defaults["nc_cc3_bot"]);

            Configuration::updateValue('RC_BRAND_W', $this -> defaults["brand_w"]);
            Configuration::updateValue('RC_BRAND_PER_ROW', $this -> defaults["brand_per_row"]);
            Configuration::updateValue('RC_BRAND_NAME', $this -> defaults["brand_name"]);
            Configuration::updateValue('RC_BRAND_NAME_HOVER', $this -> defaults["brand_name_hover"]);

// page content
            Configuration::updateValue('NC_OT_BGS', $this -> defaults["nc_ot_bg"]);
            Configuration::updateValue('NC_OT_BC', $this -> defaults["nc_ot_bc"]);
            Configuration::updateValue('NC_OT_GS', $this -> defaults["nc_ot_gs"]);
            Configuration::updateValue('NC_OT_GE', $this -> defaults["nc_ot_ge"]);
            Configuration::updateValue('NC_OT_GG', $this -> defaults["nc_ot_gg"]);
            Configuration::updateValue('NC_OT_IM_BG_EXT', $this -> defaults["nc_ot_im_bg_ext"]);
            Configuration::updateValue('NC_OT_IM_BG_REPEAT', $this -> defaults["nc_ot_im_bg_repeat"]);
            Configuration::updateValue('NC_OT_IM_BG_POSITION', $this -> defaults["nc_ot_im_bg_position"]);
            Configuration::updateValue('NC_OT_IM_BG_FIXED', $this -> defaults["nc_ot_im_bg_fixed"]);
            Configuration::updateValue('NC_OT_PAD', $this -> defaults["nc_ot_pad"]);
            Configuration::updateValue('NC_OT_WIDTH', $this -> defaults["nc_ot_width"]);
            Configuration::updateValue('NC_OT_TOPS', $this -> defaults["nc_ot_top"]);
            Configuration::updateValue('NC_OT_BOTS', $this -> defaults["nc_ot_bot"]);

            Configuration::updateValue('NC_OM_BGS', $this -> defaults["nc_om_bg"]);
            Configuration::updateValue('NC_OM_BC', $this -> defaults["nc_om_bc"]);
            Configuration::updateValue('NC_OM_GS', $this -> defaults["nc_om_gs"]);
            Configuration::updateValue('NC_OM_GE', $this -> defaults["nc_om_ge"]);
            Configuration::updateValue('NC_OM_GG', $this -> defaults["nc_om_gg"]);
            Configuration::updateValue('NC_OM_IM_BG_EXT', $this -> defaults["nc_om_im_bg_ext"]);
            Configuration::updateValue('NC_OM_IM_BG_REPEAT', $this -> defaults["nc_om_im_bg_repeat"]);
            Configuration::updateValue('NC_OM_IM_BG_POSITION', $this -> defaults["nc_om_im_bg_position"]);
            Configuration::updateValue('NC_OM_IM_BG_FIXED', $this -> defaults["nc_om_im_bg_fixed"]);
            Configuration::updateValue('NC_OM_TOPS', $this -> defaults["nc_om_top"]);
            Configuration::updateValue('NC_OM_BOTS', $this -> defaults["nc_om_bot"]);

            Configuration::updateValue('NC_OB_BGS', $this -> defaults["nc_ob_bg"]);
            Configuration::updateValue('NC_OB_BC', $this -> defaults["nc_ob_bc"]);
            Configuration::updateValue('NC_OB_GS', $this -> defaults["nc_ob_gs"]);
            Configuration::updateValue('NC_OB_GE', $this -> defaults["nc_ob_ge"]);
            Configuration::updateValue('NC_OB_GG', $this -> defaults["nc_ob_gg"]);
            Configuration::updateValue('NC_OB_IM_BG_EXT', $this -> defaults["nc_ob_im_bg_ext"]);
            Configuration::updateValue('NC_OB_IM_BG_REPEAT', $this -> defaults["nc_ob_im_bg_repeat"]);
            Configuration::updateValue('NC_OB_IM_BG_POSITION', $this -> defaults["nc_ob_im_bg_position"]);
            Configuration::updateValue('NC_OB_IM_BG_FIXED', $this -> defaults["nc_ob_im_bg_fixed"]);
            Configuration::updateValue('NC_OB_TOPS', $this -> defaults["nc_ob_top"]);
            Configuration::updateValue('NC_OB_BOTS', $this -> defaults["nc_ob_bot"]);

            Configuration::updateValue('RC_W_ALL', $this -> defaults["w_all"]);
            Configuration::updateValue('RC_W_CAT', $this -> defaults["w_cat"]);
            Configuration::updateValue('RC_W_PRO', $this -> defaults["w_pro"]);
            Configuration::updateValue('RC_W_CON', $this -> defaults["w_con"]);
            Configuration::updateValue('RC_W_CART', $this -> defaults["w_cart"]);
            Configuration::updateValue('RC_W_ACC', $this -> defaults["w_acc"]);
            Configuration::updateValue('RC_W_CMS', $this -> defaults["w_cms"]);
            Configuration::updateValue('RC_W_BLOG', $this -> defaults["w_blog"]);
            Configuration::updateValue('RC_B_LAYOUT', $this -> defaults["b_layout"]);
            Configuration::updateValue('RC_B_POS_CAT', $this -> defaults["b_pos_cat"]);
            Configuration::updateValue('RC_B_POS_PRO', $this -> defaults["b_pos_pro"]);
            Configuration::updateValue('RC_B_TOPS', $this -> defaults["b_top"]);
            Configuration::updateValue('RC_B_BOTS', $this -> defaults["b_bot"]);
            Configuration::updateValue('RC_B_W', $this -> defaults["b_w"]);
            Configuration::updateValue('RC_B_LINK', $this -> defaults["b_link"]);
            Configuration::updateValue('RC_B_LINK_HOVER', $this -> defaults["b_link_hover"]);
            Configuration::updateValue('RC_B_SEPARATOR', $this -> defaults["b_separator"]);
            Configuration::updateValue('RC_PAGE_BQ_Q', $this -> defaults["page_bq_q"]);
            Configuration::updateValue('RC_CONTACT_ICON', $this -> defaults["contact_icon"]);
            Configuration::updateValue('RC_WARNING_MESSAGE_COLOR', $this -> defaults["warning_message_color"]);
            Configuration::updateValue('RC_SUCCESS_MESSAGE_COLOR', $this -> defaults["success_message_color"]);
            Configuration::updateValue('RC_DANGER_MESSAGE_COLOR', $this -> defaults["danger_message_color"]);

// Sidebar and filter
            Configuration::updateValue('RC_SIDEBAR_TITLE_MARGIN', $this -> defaults["sidebar_title_margin"]);
            Configuration::updateValue('RC_SIDEBAR_TITLE_B', $this -> defaults["sidebar_title_b"]);
            Configuration::updateValue('RC_SIDEBAR_TITLE_PADDING', $this -> defaults["sidebar_title_padding"]);
            Configuration::updateValue('RC_SIDEBAR_TITLE_BWIDTH', $this -> defaults["sidebar_title_bwidth"]);
            Configuration::updateValue('RC_SIDEBAR_TITLE_BORDER', $this -> defaults["sidebar_title_border"]);

            Configuration::updateValue('RC_SIDEBAR_MARGIN', $this -> defaults["sidebar_margin"]);
            Configuration::updateValue('RC_SIDEBAR_B', $this -> defaults["sidebar_b"]);
            Configuration::updateValue('RC_SIDEBAR_PADDING', $this -> defaults["sidebar_padding"]);
            Configuration::updateValue('RC_SIDEBAR_BWIDTH', $this -> defaults["sidebar_bwidth"]);
            Configuration::updateValue('RC_SIDEBAR_BORDER', $this -> defaults["sidebar_border"]);
            Configuration::updateValue('RC_SIDEBAR_LINK', $this -> defaults["sidebar_link"]);
            Configuration::updateValue('RC_SIDEBAR_BB', $this -> defaults["sidebar_bb"]);
            Configuration::updateValue('RC_SIDEBAR_BW', $this -> defaults["sidebar_bw"]);
            Configuration::updateValue('RC_SIDEBAR_BR', $this -> defaults["sidebar_br"]);
            Configuration::updateValue('RC_SIDEBAR_BALL', $this -> defaults["sidebar_ball"]);
            Configuration::updateValue('RC_SIDEBAR_BCAT', $this -> defaults["sidebar_bcat"]);
            Configuration::updateValue('RC_SIDEBAR_BFILTER', $this -> defaults["sidebar_bfilter"]);
            Configuration::updateValue('RC_SIDEBAR_BSALE', $this -> defaults["sidebar_bsale"]);

// Product list
            Configuration::updateValue('NC_SUBCAT_S', $this -> defaults["nc_subcat"]);
            Configuration::updateValue('NC_CAT_NAME_S', $this -> defaults["nc_cat_name"]);
            Configuration::updateValue('NC_CAT_IMG_S', $this -> defaults["nc_cat_img"]);
            Configuration::updateValue('NC_CAT_IMGLAY_S', $this -> defaults["nc_cat_imglay"]);
            Configuration::updateValue('NC_CAT_DESC_S', $this -> defaults["nc_cat_desc"]);
            Configuration::updateValue('RC_PL_NUMBER_COLOR', $this -> defaults["pl_number_color"]);
            Configuration::updateValue('RC_PL_NUMBER_COLOR_HOVER', $this -> defaults["pl_number_color_hover"]);

            Configuration::updateValue('NC_PRODUCT_SWITCH', $this -> defaults["nc_product_switch"]);
            Configuration::updateValue('NC_PRODUCT_MARGIN', $this -> defaults["nc_product_margin"]);

            Configuration::updateValue('RC_PL_LAY', $this -> defaults["pl_lay"]);
            Configuration::updateValue('RC_PL_IMG_BGS', $this -> defaults["pl_img_bgs"]);
            Configuration::updateValue('RC_PL_TEXT_BGS', $this -> defaults["pl_text_bgs"]);
            Configuration::updateValue('RC_PL_TEXT_ALIGN', $this -> defaults["pl_text_align"]);
            Configuration::updateValue('RC_PL_IMG_BG', $this -> defaults["pl_img_bg"]);
            Configuration::updateValue('RC_PL_TEXT_BG', $this -> defaults["pl_text_bg"]);
            Configuration::updateValue('NC_PI_B', $this -> defaults["nc_pi_b"]);
            Configuration::updateValue('NC_PI_BW', $this -> defaults["nc_pi_bw"]);
            Configuration::updateValue('NC_PI_BR', $this -> defaults["nc_pi_br"]);
            Configuration::updateValue('NC_PI_C', $this -> defaults["nc_pi_c"]);
            Configuration::updateValue('NC_PI_CH', $this -> defaults["nc_pi_ch"]);
            Configuration::updateValue('RC_PL_NAME', $this -> defaults["pl_name"]);
            Configuration::updateValue('RC_PL_PRICE', $this -> defaults["pl_price"]);

            Configuration::updateValue('RC_PL_HOVER_LAY', $this -> defaults["pl_hover_lay"]);
            Configuration::updateValue('RC_PL_HOVER_G1', $this -> defaults["pl_hover_g1"]);
            Configuration::updateValue('RC_PL_HOVER_G2', $this -> defaults["pl_hover_g2"]);
            Configuration::updateValue('RC_PL_HOVER_TRANS', $this -> defaults["pl_hover_trans"]);
            Configuration::updateValue('RC_PL_HOVER_BUT', $this -> defaults["pl_hover_but"]);
            Configuration::updateValue('RC_PL_HOVER_BUT_BG', $this -> defaults["pl_hover_but_bg"]);
            Configuration::updateValue('RC_PL_HOVER_BUT_B', $this -> defaults["pl_hover_but_b"]);
            Configuration::updateValue('RC_PL_HOVER_BUTH', $this -> defaults["pl_hover_buth"]);
            Configuration::updateValue('RC_PL_HOVER_BUT_BGH', $this -> defaults["pl_hover_but_bgh"]);
            Configuration::updateValue('RC_PL_HOVER_BUT_BH', $this -> defaults["pl_hover_but_bh"]);
            Configuration::updateValue('RC_PL_HOVER_BUT_OUT', $this -> defaults["pl_hover_but_out"]);
            Configuration::updateValue('RC_PL_HOVER_BUT_BR', $this -> defaults["pl_hover_but_br"]);
            Configuration::updateValue('NC_SECOND_IMG_S', $this -> defaults["nc_second_img"]);
            Configuration::updateValue('NC_COLORS_S', $this -> defaults["nc_colors"]);
            Configuration::updateValue('NC_QVS', $this -> defaults["nc_qv"]);
            Configuration::updateValue('NC_FAVS', $this -> defaults["nc_fav"]);

            Configuration::updateValue('RC_PL_PRODUCT_NEW_BG', $this -> defaults["pl_product_new_bg"]);
            Configuration::updateValue('RC_PL_PRODUCT_NEW_BORDER', $this -> defaults["pl_product_new_border"]);
            Configuration::updateValue('RC_PL_PRODUCT_NEW_COLOR', $this -> defaults["pl_product_new_color"]);
            Configuration::updateValue('RC_PL_PRODUCT_SALE_BG', $this -> defaults["pl_product_sale_bg"]);
            Configuration::updateValue('RC_PL_PRODUCT_SALE_BORDER', $this -> defaults["pl_product_sale_border"]);
            Configuration::updateValue('RC_PL_PRODUCT_SALE_COLOR', $this -> defaults["pl_product_sale_color"]);

            Configuration::updateValue('RC_PP_REVIEWS_STARON', $this -> defaults["pp_reviews_staron"]);
            Configuration::updateValue('RC_PP_REVIEWS_STAROFF', $this -> defaults["pp_reviews_staroff"]);

            Configuration::updateValue('NC_COUNT_DAYS', $this -> defaults["nc_count_days"]);
            Configuration::updateValue('NC_COUNT_BG', $this -> defaults["nc_count_bg"]);
            Configuration::updateValue('NC_COUNT_COLOR', $this -> defaults["nc_count_color"]);
            Configuration::updateValue('NC_COUNT_TIME', $this -> defaults["nc_count_time"]);
            Configuration::updateValue('NC_COUNT_WATCH', $this -> defaults["nc_count_watch"]);
            Configuration::updateValue('NC_COUNT_WATCH_BG', $this -> defaults["nc_count_watch_bg"]);

            Configuration::updateValue('NC_I_QVS', $this -> defaults["nc_i_qv"]);
            Configuration::updateValue('NC_I_DISCOVERS', $this -> defaults["nc_i_discover"]);
            Configuration::updateValue('NC_I_FAVS', $this -> defaults["nc_i_fav"]);
            Configuration::updateValue('NC_AIS', $this -> defaults["nc_ai"]);

//  Product page
            Configuration::updateValue('RC_PP_LAY', $this -> defaults["pp_lay"]);
            Configuration::updateValue('RC_PP_THUMBS', $this -> defaults["pp_thumbs"]);
            Configuration::updateValue('RC_PP_IMGB', $this -> defaults["pp_imgb"]);
            Configuration::updateValue('RC_PP_IMG_BORDER', $this -> defaults["pp_img_border"]);
            Configuration::updateValue('RC_PP_ICON_BORDER', $this -> defaults["pp_icon_border"]);
            Configuration::updateValue('RC_PP_IMGSPACING', $this -> defaults["pp_imgspacing"]);
            Configuration::updateValue('NC_MOBADOTSS', $this -> defaults["nc_mobadots"]);
            Configuration::updateValue('NC_MOBADOTSCS', $this -> defaults["nc_mobadotsc"]);

            Configuration::updateValue('RC_PP_STICKY', $this -> defaults["pp_sticky"]);
            Configuration::updateValue('RC_PP_PRICE_COLOR', $this -> defaults["pp_price_color"]);
            Configuration::updateValue('RC_PP_PRICE_DIS', $this -> defaults["pp_price_dis"]);
            Configuration::updateValue('RC_PP_ATT_LABEL', $this -> defaults["pp_att_label"]);
            Configuration::updateValue('RC_PP_ATT_COLOR_ACTIVE', $this -> defaults["pp_att_color_active"]);
            Configuration::updateValue('RC_PP_INFO_LABEL', $this -> defaults["pp_info_label"]);
            Configuration::updateValue('RC_PP_INFO_VALUE', $this -> defaults["pp_info_value"]);
            Configuration::updateValue('RC_PP_DISPLAY_Q', $this -> defaults["pp_display_q"]);
            Configuration::updateValue('RC_PP_DISPLAY_REFER', $this -> defaults["pp_display_refer"]);
            Configuration::updateValue('RC_PP_DISPLAY_COND', $this -> defaults["pp_display_cond"]);
            Configuration::updateValue('RC_PP_DISPLAY_BRAND', $this -> defaults["pp_display_brand"]);
            Configuration::updateValue('NC_ACCESS_PERS', $this -> defaults["nc_access_per"]);

            Configuration::updateValue('NC_PP_ADD_BG', $this -> defaults["nc_pp_add_bg"]);
            Configuration::updateValue('NC_PP_ADD_BORDER', $this -> defaults["nc_pp_add_border"]);
            Configuration::updateValue('NC_PP_ADD_COLOR', $this -> defaults["nc_pp_add_color"]);

            Configuration::updateValue('NC_COUNT_PR_TITLE', $this -> defaults["nc_count_pr_title"]);
            Configuration::updateValue('NC_COUNT_PR_BG', $this -> defaults["nc_count_pr_bg"]);
            Configuration::updateValue('NC_COUNT_PR_SEP', $this -> defaults["nc_count_pr_sep"]);
            Configuration::updateValue('NC_COUNT_PR_NUMBERS', $this -> defaults["nc_count_pr_numbers"]);
            Configuration::updateValue('NC_COUNT_PR_COLOR', $this -> defaults["nc_count_pr_color"]);

            Configuration::updateValue('RC_PP_TABS_BG_SW', $this -> defaults["pp_tabs_bg_sw"]);
            Configuration::updateValue('RC_PP_TABS_BG', $this -> defaults["pp_tabs_bg"]);


// Cart and order
            Configuration::updateValue('RC_O_ADDS', $this -> defaults["o_add"]);
            Configuration::updateValue('RC_O_OPTION', $this -> defaults["o_option"]);
            Configuration::updateValue('RC_O_OPTION_ACTIVE', $this -> defaults["o_option_active"]);
            Configuration::updateValue('RC_O_INFO_TEXT', $this -> defaults["o_info_text"]);

            Configuration::updateValue('RC_LC_C', $this -> defaults["lc_c"]);

// blog
            Configuration::updateValue('RC_BL_W', $this -> defaults["bl_w"]);
            Configuration::updateValue('RC_BL_ALIGN', $this -> defaults["bl_align"]);
            Configuration::updateValue('RC_BL_LAY', $this -> defaults["bl_lay"]);
            Configuration::updateValue('RC_BL_CONT', $this -> defaults["bl_cont"]);
            Configuration::updateValue('RC_BL_ROW', $this -> defaults["bl_row"]);
            Configuration::updateValue('RC_BL_META_SW', $this -> defaults["bl_meta_sw"]);
            Configuration::updateValue('RC_BL_HEAD', $this -> defaults["bl_head"]);
            Configuration::updateValue('RC_BL_H_TITLE', $this -> defaults["bl_h_title"]);
            Configuration::updateValue('RC_BL_H_TITLE_H', $this -> defaults["bl_h_title_h"]);
            Configuration::updateValue('RC_BL_H_META', $this -> defaults["bl_h_meta"]);
            Configuration::updateValue('RC_BL_H_DESC', $this -> defaults["bl_h_desc"]);
            Configuration::updateValue('RC_BL_META', $this -> defaults["bl_meta"]);

// footer
            Configuration::updateValue('RC_FOOTER_LAY', $this -> defaults["footer_lay"]);
            Configuration::updateValue('NC_FOOTER_W', $this -> defaults["nc_footer_w"]);
            Configuration::updateValue('NC_LOGO_FOOTER', $this -> defaults["nc_logo_footer"]);
            Configuration::updateValue('NC_FOOT_BGS', $this -> defaults["nc_foot_bg"]);
            Configuration::updateValue('NC_FOOT_BC', $this -> defaults["nc_foot_bc"]);
            Configuration::updateValue('NC_FOOT_GS', $this -> defaults["nc_foot_gs"]);
            Configuration::updateValue('NC_FOOT_GE', $this -> defaults["nc_foot_ge"]);
            Configuration::updateValue('NC_FOOT_GG', $this -> defaults["nc_foot_gg"]);
            Configuration::updateValue('NC_FOOT_IM_BG_EXT', $this -> defaults["nc_foot_im_bg_ext"]);
            Configuration::updateValue('NC_FOOT_IM_BG_REPEAT', $this -> defaults["nc_foot_im_bg_repeat"]);
            Configuration::updateValue('NC_FOOT_IM_BG_POSITION', $this -> defaults["nc_foot_im_bg_position"]);
            Configuration::updateValue('NC_FOOT_IM_BG_FIXED', $this -> defaults["nc_foot_im_bg_fixed"]);
            Configuration::updateValue('RC_FOOTER_BORDER', $this -> defaults["footer_border"]);
            Configuration::updateValue('RC_FOOTER_BORDER_SW', $this -> defaults["footer_border_sw"]);
            Configuration::updateValue('RC_FOOTER_TITLES', $this -> defaults["footer_titles"]);
            Configuration::updateValue('RC_FOOTER_TEXT', $this -> defaults["footer_text"]);
            Configuration::updateValue('RC_FOOTER_LINK', $this -> defaults["footer_link"]);
            Configuration::updateValue('RC_FOOTER_LINK_H', $this -> defaults["footer_link_h"]);
            Configuration::updateValue('RC_FOOTER_NEWS_BG', $this -> defaults["footer_news_bg"]);
            Configuration::updateValue('RC_FOOTER_NEWS_BORDER', $this -> defaults["footer_news_border"]);
            Configuration::updateValue('RC_FOOTER_NEWS_PLACEH', $this -> defaults["footer_news_placeh"]);
            Configuration::updateValue('RC_FOOTER_NEWS_COLOR', $this -> defaults["footer_news_color"]);
            Configuration::updateValue('RC_FOOTER_NEWS_BUTTON', $this -> defaults["footer_news_button"]);
            Configuration::updateValue('NC_FOOTER_SOC', $this -> defaults["nc_footer_soc"]);
            Configuration::updateValue('NC_FOOTER_SOCTITLE', $this -> defaults["nc_footer_soctitle"]);
            Configuration::updateValue('NC_FOOTER_LINKTITLE', $this -> defaults["nc_footer_linktitle"]);

// Mobile
            Configuration::updateValue('NC_SIDE_BTN', $this -> defaults["nc_side_btn"]);
            Configuration::updateValue('NC_SIDE_BG', $this -> defaults["nc_side_bg"]);
            Configuration::updateValue('NC_SIDE_B', $this -> defaults["nc_side_b"]);
            Configuration::updateValue('NC_SIDE_TITLE', $this -> defaults["nc_side_title"]);
            Configuration::updateValue('NC_SIDE_TEXT', $this -> defaults["nc_side_text"]);
            Configuration::updateValue('NC_SIDE_BTNB', $this -> defaults["nc_side_btnb"]);
            Configuration::updateValue('NC_SIDE_BTNBG', $this -> defaults["nc_side_btnbg"]);

            Configuration::updateValue('NC_LOGO_MOBILE', $this -> defaults["nc_logo_mobile"]);
            Configuration::updateValue('NC_MOB_HEADER', $this -> defaults["nc_mob_header"]);
            Configuration::updateValue('NC_MOB_MENU', $this -> defaults["nc_mob_menu"]);
            Configuration::updateValue('NC_MOB_HP', $this -> defaults["nc_mob_hp"]);
            Configuration::updateValue('NC_MOB_CAT', $this -> defaults["nc_mob_cat"]);

// typography
            Configuration::updateValue('RC_F_HEADINGS', $this -> defaults["f_headings"]);
            Configuration::updateValue('RC_F_BUTTONS', $this -> defaults["f_buttons"]);
            Configuration::updateValue('RC_F_TEXT', $this -> defaults["f_text"]);
            Configuration::updateValue('RC_F_PRICE', $this -> defaults["f_price"]);
            Configuration::updateValue('RC_F_MENU', $this -> defaults["f_menu"]);
            Configuration::updateValue('RC_F_PN', $this -> defaults["f_pn"]);
            Configuration::updateValue('RC_LATIN_EXT', $this -> defaults["latin_ext"]);
            Configuration::updateValue('RC_CYRILLIC', $this -> defaults["cyrillic"]);

            Configuration::updateValue('RC_FS_TEXT', $this -> defaults["fs_text"]);
            Configuration::updateValue('RC_LH_TEXT', $this -> defaults["lh_text"]);
            Configuration::updateValue('RC_FW_TEXT', $this -> defaults["fw_text"]);
            Configuration::updateValue('RC_LS_TEXT', $this -> defaults["ls_text"]);

            Configuration::updateValue('RC_FW_LINK', $this -> defaults["fw_link"]);

            Configuration::updateValue('RC_FS_BTN', $this -> defaults["fs_btn"]);
            Configuration::updateValue('RC_FW_BTN', $this -> defaults["fw_btn"]);
            Configuration::updateValue('RC_LS_BTN', $this -> defaults["ls_btn"]);
            Configuration::updateValue('RC_UP_BTN', $this -> defaults["up_btn"]);

            Configuration::updateValue('RC_FS_INP', $this -> defaults["fs_inp"]);
            Configuration::updateValue('RC_FW_INP', $this -> defaults["fw_inp"]);
            Configuration::updateValue('RC_LS_INP', $this -> defaults["ls_inp"]);

            Configuration::updateValue('RC_FS_FOOT', $this -> defaults["fs_foot"]);
            Configuration::updateValue('RC_FW_FOOT', $this -> defaults["fw_foot"]);
            Configuration::updateValue('RC_LS_FOOT', $this -> defaults["ls_foot"]);
            Configuration::updateValue('RC_UP_FOOT', $this -> defaults["up_foot"]);

            Configuration::updateValue('RC_FS_HOME_TIT', $this -> defaults["fs_home_tit"]);
            Configuration::updateValue('RC_FW_HOME_TIT', $this -> defaults["fw_home_tit"]);
            Configuration::updateValue('RC_LS_HOME_TIT', $this -> defaults["ls_home_tit"]);
            Configuration::updateValue('RC_UP_HOME_TIT', $this -> defaults["up_home_tit"]);

            Configuration::updateValue('RC_FS_HOME_SUB', $this -> defaults["fs_home_sub"]);
            Configuration::updateValue('RC_FW_HOME_SUB', $this -> defaults["fw_home_sub"]);
            Configuration::updateValue('RC_LS_HOME_SUB', $this -> defaults["ls_home_sub"]);
            Configuration::updateValue('RC_UP_HOME_SUB', $this -> defaults["up_home_sub"]);

            Configuration::updateValue('RC_FS_PAGE_HEAD', $this -> defaults["fs_page_head"]);
            Configuration::updateValue('RC_FW_PAGE_HEAD', $this -> defaults["fw_page_head"]);
            Configuration::updateValue('RC_LS_PAGE_HEAD', $this -> defaults["ls_page_head"]);
            Configuration::updateValue('RC_UP_PAGE_HEAD', $this -> defaults["up_page_head"]);

            Configuration::updateValue('RC_FS_PAGE_H3', $this -> defaults["fs_page_h3"]);
            Configuration::updateValue('RC_FW_PAGE_H3', $this -> defaults["fw_page_h3"]);
            Configuration::updateValue('RC_LS_PAGE_H3', $this -> defaults["ls_page_h3"]);
            Configuration::updateValue('RC_UP_PAGE_H3', $this -> defaults["up_page_h3"]);

            Configuration::updateValue('RC_FS_PAGE_SIDE', $this -> defaults["fs_page_side"]);
            Configuration::updateValue('RC_FW_PAGE_SIDE', $this -> defaults["fw_page_side"]);
            Configuration::updateValue('RC_LS_PAGE_SIDE', $this -> defaults["ls_page_side"]);
            Configuration::updateValue('RC_UP_PAGE_SIDE', $this -> defaults["up_page_side"]);

            Configuration::updateValue('RC_FS_CAT_NAME', $this -> defaults["fs_cat_name"]);
            Configuration::updateValue('RC_FW_CAT_NAME', $this -> defaults["fw_cat_name"]);
            Configuration::updateValue('RC_LS_CAT_NAME', $this -> defaults["ls_cat_name"]);
            Configuration::updateValue('RC_UP_CAT_NAME', $this -> defaults["up_cat_name"]);

            Configuration::updateValue('RC_FS_CAT_PRICE', $this -> defaults["fs_cat_price"]);
            Configuration::updateValue('RC_FW_CAT_PRICE', $this -> defaults["fw_cat_price"]);
            Configuration::updateValue('RC_LS_CAT_PRICE', $this -> defaults["ls_cat_price"]);

            Configuration::updateValue('RC_FS_PP_NAME', $this -> defaults["fs_pp_name"]);
            Configuration::updateValue('RC_FW_PP_NAME', $this -> defaults["fw_pp_name"]);
            Configuration::updateValue('RC_LS_PP_NAME', $this -> defaults["ls_pp_name"]);
            Configuration::updateValue('RC_UP_PP_NAME', $this -> defaults["up_pp_name"]);

            Configuration::updateValue('RC_FS_PP_PRICE', $this -> defaults["fs_pp_price"]);
            Configuration::updateValue('RC_FW_PP_PRICE', $this -> defaults["fw_pp_price"]);
            Configuration::updateValue('RC_LS_PP_PRICE', $this -> defaults["ls_pp_price"]);

            Configuration::updateValue('RC_FS_BLOG', $this -> defaults["fs_blog"]);
            Configuration::updateValue('RC_FW_BLOG', $this -> defaults["fw_blog"]);
            Configuration::updateValue('RC_LS_BLOG', $this -> defaults["ls_blog"]);
            Configuration::updateValue('RC_UP_BLOG', $this -> defaults["up_blog"]);

            Configuration::updateValue('RC_FS_MENU', $this -> defaults["fs_menu"]);
            Configuration::updateValue('RC_FW_MENU', $this -> defaults["fw_menu"]);
            Configuration::updateValue('RC_LS_MENU', $this -> defaults["ls_menu"]);
            Configuration::updateValue('RC_UP_MENU', $this -> defaults["up_menu"]);

// Custom CSS
            Configuration::updateValue('NC_CSS', $this -> defaults["nc_css"]);

            return true;
        } else {
            return false;
        }
    }

    public function uninstall() {
        if (!parent::uninstall() ||

        !Configuration::deleteByName('RC_G_LAY') ||
        !Configuration::deleteByName('RC_G_TP') ||
        !Configuration::deleteByName('RC_G_BP') ||
        !Configuration::deleteByName('RC_BODY_BOX_SW') ||
        !Configuration::deleteByName('RC_MAIN_BACKGROUND_COLOR') ||
        !Configuration::deleteByName('NC_BODY_GS') ||
        !Configuration::deleteByName('NC_BODY_GE') ||
        !Configuration::deleteByName('NC_BODY_GG') ||
        !Configuration::deleteByName('NC_BODY_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_BODY_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_BODY_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_BODY_IM_BG_FIXED') ||
        !Configuration::deleteByName('RC_GRADIENT_SCHEME') ||
        !Configuration::deleteByName('RC_DISPLAY_GRADIENT') ||
        !Configuration::deleteByName('RC_BODY_BG_PATTERN') ||
        !Configuration::deleteByName('NC_MAIN_BGS') ||
        !Configuration::deleteByName('NC_MAIN_BC') ||
        !Configuration::deleteByName('NC_MAIN_GS') ||
        !Configuration::deleteByName('NC_MAIN_GE') ||
        !Configuration::deleteByName('NC_MAIN_GG') ||
        !Configuration::deleteByName('NC_MAIN_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_MAIN_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_MAIN_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_MAIN_IM_BG_FIXED') ||

        // header
        !Configuration::deleteByName('RC_HEADER_LAY') ||
        !Configuration::deleteByName('RC_HEADER_W') ||
        !Configuration::deleteByName('RC_HEADER_OPA') ||
        !Configuration::deleteByName('NC_LOGO_NORMAL') ||
        !Configuration::deleteByName('NC_LOGO_TRANS') ||
        !Configuration::deleteByName('NC_HEADER_TRANSWITCH') ||
        !Configuration::deleteByName('NC_HEADER_HIDES') ||
        !Configuration::deleteByName('NC_BW_ICONS') ||
        !Configuration::deleteByName('NC_BW_MENU') ||
        !Configuration::deleteByName('RC_H_BG') ||
        !Configuration::deleteByName('RC_NORM_ICONS') ||
        !Configuration::deleteByName('RC_NORM_QUAN') ||
        !Configuration::deleteByName('RC_NORM_QUANBG') ||
        !Configuration::deleteByName('RC_NORM_LOGGED') ||
        !Configuration::deleteByName('RC_NORM_LINK') ||
        !Configuration::deleteByName('RC_NORM_LINKH') ||
        !Configuration::deleteByName('RC_NORM_EFFECT') ||
        !Configuration::deleteByName('RC_NORM_SBORDER') ||
        !Configuration::deleteByName('RC_TRANS_ICONS') ||
        !Configuration::deleteByName('RC_TRANS_QUAN') ||
        !Configuration::deleteByName('RC_TRANS_QUANBG') ||
        !Configuration::deleteByName('RC_TRANS_LOGGED') ||
        !Configuration::deleteByName('RC_TRANS_LINK') ||
        !Configuration::deleteByName('RC_TRANS_LINKH') ||
        !Configuration::deleteByName('RC_TRANS_EFFECT') ||
        !Configuration::deleteByName('RC_TRANS_SBORDER') ||
        !Configuration::deleteByName('RC_HEADER_NBG') ||
        !Configuration::deleteByName('RC_HEADER_NB') ||
        !Configuration::deleteByName('RC_HEADER_NT') ||
        !Configuration::deleteByName('RC_HEADER_NL') ||
        !Configuration::deleteByName('RC_HEADER_NLH') ||
        !Configuration::deleteByName('NC_CLS') ||
        !Configuration::deleteByName('NC_CLLS') ||
        !Configuration::deleteByName('RC_HEADER_NS') ||
        !Configuration::deleteByName('RC_HEADER_NBS') ||
        !Configuration::deleteByName('NC_TOPPANEL_LAYS') ||
        !Configuration::deleteByName('RC_CLICK_LAY_M') ||
        !Configuration::deleteByName('RC_CLICK_LAY_S') ||
        !Configuration::deleteByName('RC_CLICK_LAY_C') ||
        !Configuration::deleteByName('RC_CLICK_LAY_A') ||
        !Configuration::deleteByName('NC_M_LAYOUT_S') ||
        !Configuration::deleteByName('NC_M_ICON') ||
        !Configuration::deleteByName('NC_M_UNDER_S') ||
        !Configuration::deleteByName('NC_M_OVERRIDE_S') ||
        !Configuration::deleteByName('RC_M_POPUP_LLINK') ||
        !Configuration::deleteByName('RC_M_POPUP_LLINK_HOVER') ||
        !Configuration::deleteByName('RC_M_POPUP_LBG') ||
        !Configuration::deleteByName('RC_M_POPUP_LCHEVRON') ||
        !Configuration::deleteByName('RC_M_POPUP_LBORDER') ||
        !Configuration::deleteByName('NC_M_BR_S') ||
        !Configuration::deleteByName('RC_SEARCH_LAY') ||
        !Configuration::deleteByName('NC_I_SEARCHS') ||
        !Configuration::deleteByName('NC_SEARCH_TAGS') ||
        !Configuration::deleteByName('NC_SEARCH_PRODS') ||
        !Configuration::deleteByName('RC_SEARCH_BR') ||
        !Configuration::deleteByName('RC_CART_LAY') ||
        !Configuration::deleteByName('RC_CART_ICON') ||
        !Configuration::deleteByName('RC_ACC_LAY') ||
        !Configuration::deleteByName('RC_ACC_ICON') ||
        !Configuration::deleteByName('RC_ACC_NAME') ||

        // body design
        !Configuration::deleteByName('RC_G_BG_CONTENT') ||
        !Configuration::deleteByName('RC_G_BORDER') ||
        !Configuration::deleteByName('RC_G_BODY_TEXT') ||
        !Configuration::deleteByName('RC_G_BODY_COMMENT') ||
        !Configuration::deleteByName('RC_G_BODY_LINK') ||
        !Configuration::deleteByName('RC_G_BODY_LINK_HOVER') ||
        !Configuration::deleteByName('RC_G_LINK_EFFECT') ||
        !Configuration::deleteByName('RC_G_LINK_EFFECTC') ||
        !Configuration::deleteByName('RC_G_FORMS') ||
        !Configuration::deleteByName('RC_LABEL') ||
        !Configuration::deleteByName('RC_G_HEADER') ||
        !Configuration::deleteByName('RC_CON_POS') ||
        !Configuration::deleteByName('RC_CON_PRO') ||
        !Configuration::deleteByName('RC_CON_BRA') ||
        !Configuration::deleteByName('RC_CON_SALE') ||
        !Configuration::deleteByName('RC_G_HB') ||
        !Configuration::deleteByName('RC_G_HC') ||
        !Configuration::deleteByName('RC_G_NORMAL_BORDER') ||
        !Configuration::deleteByName('RC_G_EXTRA_BORDER') ||
        !Configuration::deleteByName('RC_FANCY_NBG') ||
        !Configuration::deleteByName('RC_FANCY_NC') ||

        !Configuration::deleteByName('RC_B_NORMAL_BG') ||
        !Configuration::deleteByName('RC_B_NORMAL_BORDER') ||
        !Configuration::deleteByName('RC_B_NORMAL_COLOR') ||
        !Configuration::deleteByName('RC_B_NORMAL_BG_HOVER') ||
        !Configuration::deleteByName('RC_B_NORMAL_BORDER_HOVER') ||
        !Configuration::deleteByName('RC_B_NORMAL_COLOR_HOVER') ||
        !Configuration::deleteByName('RC_B_EX_BG') ||
        !Configuration::deleteByName('RC_B_EX_BORDER') ||
        !Configuration::deleteByName('RC_B_EX_COLOR') ||
        !Configuration::deleteByName('NC_B_RADIUSS') ||
        !Configuration::deleteByName('NC_B_SHS') ||

        !Configuration::deleteByName('RC_I_BG') ||
        !Configuration::deleteByName('RC_I_COLOR') ||
        !Configuration::deleteByName('RC_I_B_COLOR') ||
        !Configuration::deleteByName('RC_I_BG_FOCUS') ||
        !Configuration::deleteByName('RC_I_COLOR_FOCUS') ||
        !Configuration::deleteByName('RC_I_B_FOCUS') ||
        !Configuration::deleteByName('RC_I_B_RADIUS') ||
        !Configuration::deleteByName('RC_I_PH') ||
        !Configuration::deleteByName('RC_RC_BG_ACTIVE') ||

        !Configuration::deleteByName('NC_LOADERS') ||
        !Configuration::deleteByName('NC_LOADER_LAYS') ||
        !Configuration::deleteByName('NC_LOADER_BG') ||
        !Configuration::deleteByName('NC_LOADER_COLOR') ||
        !Configuration::deleteByName('NC_LOADER_COLOR2') ||
        !Configuration::deleteByName('NC_LOADER_LOGOS') ||
        !Configuration::deleteByName('NC_LOGO_LOADER') ||

        // Homepage content
        !Configuration::deleteByName('NC_HT_BGS') ||
        !Configuration::deleteByName('NC_HT_BC') ||
        !Configuration::deleteByName('NC_HT_GS') ||
        !Configuration::deleteByName('NC_HT_GE') ||
        !Configuration::deleteByName('NC_HT_GG') ||
        !Configuration::deleteByName('NC_HT_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_HT_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_HT_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_HT_IM_BG_FIXED') ||
        !Configuration::deleteByName('NC_HT_TOPS') ||
        !Configuration::deleteByName('NC_HT_BOTS') ||
        !Configuration::deleteByName('NC_HT_PAD') ||
        !Configuration::deleteByName('NC_HT_WIDTH') ||
        !Configuration::deleteByName('NC_HM_PAD') ||
        !Configuration::deleteByName('NC_HM_WIDTH') ||

        !Configuration::deleteByName('NC_HM_BGS') ||
        !Configuration::deleteByName('NC_HM_BC') ||
        !Configuration::deleteByName('NC_HM_GS') ||
        !Configuration::deleteByName('NC_HM_GE') ||
        !Configuration::deleteByName('NC_HM_GG') ||
        !Configuration::deleteByName('NC_HM_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_HM_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_HM_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_HM_IM_BG_FIXED') ||
        !Configuration::deleteByName('NC_HM_TOPS') ||
        !Configuration::deleteByName('NC_HM_BOTS') ||

        !Configuration::deleteByName('NC_HB_BGS') ||
        !Configuration::deleteByName('NC_HB_BC') ||
        !Configuration::deleteByName('NC_HB_GS') ||
        !Configuration::deleteByName('NC_HB_GE') ||
        !Configuration::deleteByName('NC_HB_GG') ||
        !Configuration::deleteByName('NC_HB_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_HB_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_HB_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_HB_IM_BG_FIXED') ||
        !Configuration::deleteByName('NC_HB_TOPS') ||
        !Configuration::deleteByName('NC_HB_BOTS') ||

        !Configuration::deleteByName('RC_BAN_SPA_TOPS') ||
        !Configuration::deleteByName('RC_BAN_TS_TOPS') ||
        !Configuration::deleteByName('RC_BAN_BS_TOPS') ||
        !Configuration::deleteByName('RC_BAN_W_TOP') ||
        !Configuration::deleteByName('RC_BAN_SPA_HOME') ||
        !Configuration::deleteByName('RC_BAN_TS_HOME') ||
        !Configuration::deleteByName('RC_BAN_BS_HOME') ||
        !Configuration::deleteByName('RC_BAN_W_HOME') ||
        !Configuration::deleteByName('RC_BAN_SPA_BEFOOT') ||
        !Configuration::deleteByName('RC_BAN_TS_BEFOOT') ||
        !Configuration::deleteByName('RC_BAN_BS_BEFOOT') ||
        !Configuration::deleteByName('RC_BAN_W_BEFOOT') ||
        !Configuration::deleteByName('RC_BAN_SPA_FOOT') ||
        !Configuration::deleteByName('RC_BAN_TS_FOOT') ||
        !Configuration::deleteByName('RC_BAN_BS_FOOT') ||
        !Configuration::deleteByName('RC_BAN_SPA_SIDEMOBILEMENU') ||
        !Configuration::deleteByName('RC_BAN_TS_SIDEMOBILEMENU') ||
        !Configuration::deleteByName('RC_BAN_BS_SIDEMOBILEMENU') ||
        !Configuration::deleteByName('RC_BAN_SPA_PRODUCT') ||
        !Configuration::deleteByName('RC_BAN_TS_PRODUCT') ||
        !Configuration::deleteByName('RC_BAN_BS_PRODUCT') ||
        !Configuration::deleteByName('RC_BAN_TS_LEFT') ||
        !Configuration::deleteByName('RC_BAN_BS_LEFT') ||
        !Configuration::deleteByName('RC_BAN_TS_RIGHT') ||
        !Configuration::deleteByName('RC_BAN_BS_RIGHT') ||
        !Configuration::deleteByName('NC_HP_TITLE') ||
        !Configuration::deleteByName('NC_HP_ALIGN') ||

        !Configuration::deleteByName('NC_FEAT_LAYS') ||
        !Configuration::deleteByName('NC_FEAT_PERS') ||
        !Configuration::deleteByName('NC_FEAT_SPAS') ||
        !Configuration::deleteByName('NC_FEAT_SLIDERS') ||
        !Configuration::deleteByName('NC_FEAT_AUTOS') ||
        !Configuration::deleteByName('NC_FEAT_BG') ||
        !Configuration::deleteByName('NC_FEAT_BC') ||
        !Configuration::deleteByName('NC_FEAT_GS') ||
        !Configuration::deleteByName('NC_FEAT_GE') ||
        !Configuration::deleteByName('NC_FEAT_GG') ||
        !Configuration::deleteByName('NC_FEAT_TITLE') ||
        !Configuration::deleteByName('NC_FEAT_TEXT') ||
        !Configuration::deleteByName('NC_FEAT_TEXTBG') ||
        !Configuration::deleteByName('NC_FEAT_WIDTH') ||
        !Configuration::deleteByName('NC_FEAT_TOPS') ||
        !Configuration::deleteByName('NC_FEAT_BOTS') ||

        !Configuration::deleteByName('NC_BEST_LAY') ||
        !Configuration::deleteByName('NC_BEST_PER') ||
        !Configuration::deleteByName('NC_BEST_SPA') ||
        !Configuration::deleteByName('NC_BEST_SLIDER') ||
        !Configuration::deleteByName('NC_BEST_AUTO') ||
        !Configuration::deleteByName('NC_BEST_BG') ||
        !Configuration::deleteByName('NC_BEST_BC') ||
        !Configuration::deleteByName('NC_BEST_GS') ||
        !Configuration::deleteByName('NC_BEST_GE') ||
        !Configuration::deleteByName('NC_BEST_GG') ||
        !Configuration::deleteByName('NC_BEST_TITLE') ||
        !Configuration::deleteByName('NC_BEST_TEXT') ||
        !Configuration::deleteByName('NC_BEST_TEXTBG') ||
        !Configuration::deleteByName('NC_BEST_WIDTH') ||
        !Configuration::deleteByName('NC_BEST_TOPS') ||
        !Configuration::deleteByName('NC_BEST_BOTS') ||

        !Configuration::deleteByName('NC_NEW_LAY') ||
        !Configuration::deleteByName('NC_NEW_PER') ||
        !Configuration::deleteByName('NC_NEW_SPA') ||
        !Configuration::deleteByName('NC_NEW_SLIDER') ||
        !Configuration::deleteByName('NC_NEW_AUTO') ||
        !Configuration::deleteByName('NC_NEW_BG') ||
        !Configuration::deleteByName('NC_NEW_BC') ||
        !Configuration::deleteByName('NC_NEW_GS') ||
        !Configuration::deleteByName('NC_NEW_GE') ||
        !Configuration::deleteByName('NC_NEW_GG') ||
        !Configuration::deleteByName('NC_NEW_TITLE') ||
        !Configuration::deleteByName('NC_NEW_TEXT') ||
        !Configuration::deleteByName('NC_NEW_TEXTBG') ||
        !Configuration::deleteByName('NC_NEW_WIDTH') ||
        !Configuration::deleteByName('NC_NEW_TOPS') ||
        !Configuration::deleteByName('NC_NEW_BOTS') ||

        !Configuration::deleteByName('NC_SALE_LAY') ||
        !Configuration::deleteByName('NC_SALE_PER') ||
        !Configuration::deleteByName('NC_SALE_SPA') ||
        !Configuration::deleteByName('NC_SALE_SLIDER') ||
        !Configuration::deleteByName('NC_SALE_AUTO') ||
        !Configuration::deleteByName('NC_SALE_BG') ||
        !Configuration::deleteByName('NC_SALE_BC') ||
        !Configuration::deleteByName('NC_SALE_GS') ||
        !Configuration::deleteByName('NC_SALE_GE') ||
        !Configuration::deleteByName('NC_SALE_GG') ||
        !Configuration::deleteByName('NC_SALE_TITLE') ||
        !Configuration::deleteByName('NC_SALE_TEXT') ||
        !Configuration::deleteByName('NC_SALE_TEXTBG') ||
        !Configuration::deleteByName('NC_SALE_WIDTH') ||
        !Configuration::deleteByName('NC_SALE_TOPS') ||
        !Configuration::deleteByName('NC_SALE_BOTS') ||

        !Configuration::deleteByName('NC_CC1_LAY') ||
        !Configuration::deleteByName('NC_CC1_PER') ||
        !Configuration::deleteByName('NC_CC1_SPA') ||
        !Configuration::deleteByName('NC_CC1_SLIDER') ||
        !Configuration::deleteByName('NC_CC1_AUTO') ||
        !Configuration::deleteByName('NC_CC1_BG') ||
        !Configuration::deleteByName('NC_CC1_BC') ||
        !Configuration::deleteByName('NC_CC1_GS') ||
        !Configuration::deleteByName('NC_CC1_GE') ||
        !Configuration::deleteByName('NC_CC1_GG') ||
        !Configuration::deleteByName('NC_CC1_TITLE') ||
        !Configuration::deleteByName('NC_CC1_TEXT') ||
        !Configuration::deleteByName('NC_CC1_TEXTBG') ||
        !Configuration::deleteByName('NC_CC1_WIDTH') ||
        !Configuration::deleteByName('NC_CC1_TOPS') ||
        !Configuration::deleteByName('NC_CC1_BOTS') ||

        !Configuration::deleteByName('NC_CC2_LAY') ||
        !Configuration::deleteByName('NC_CC2_PER') ||
        !Configuration::deleteByName('NC_CC2_SPA') ||
        !Configuration::deleteByName('NC_CC2_SLIDER') ||
        !Configuration::deleteByName('NC_CC2_AUTO') ||
        !Configuration::deleteByName('NC_CC2_BG') ||
        !Configuration::deleteByName('NC_CC2_BC') ||
        !Configuration::deleteByName('NC_CC2_GS') ||
        !Configuration::deleteByName('NC_CC2_GE') ||
        !Configuration::deleteByName('NC_CC2_GG') ||
        !Configuration::deleteByName('NC_CC2_TITLE') ||
        !Configuration::deleteByName('NC_CC2_TEXT') ||
        !Configuration::deleteByName('NC_CC2_TEXTBG') ||
        !Configuration::deleteByName('NC_CC2_WIDTH') ||
        !Configuration::deleteByName('NC_CC2_TOPS') ||
        !Configuration::deleteByName('NC_CC2_BOTS') ||

        !Configuration::deleteByName('NC_CC3_LAY') ||
        !Configuration::deleteByName('NC_CC3_PER') ||
        !Configuration::deleteByName('NC_CC3_SPA') ||
        !Configuration::deleteByName('NC_CC3_SLIDER') ||
        !Configuration::deleteByName('NC_CC3_AUTO') ||
        !Configuration::deleteByName('NC_CC3_BG') ||
        !Configuration::deleteByName('NC_CC3_BC') ||
        !Configuration::deleteByName('NC_CC3_GS') ||
        !Configuration::deleteByName('NC_CC3_GE') ||
        !Configuration::deleteByName('NC_CC3_GG') ||
        !Configuration::deleteByName('NC_CC3_TITLE') ||
        !Configuration::deleteByName('NC_CC3_TEXT') ||
        !Configuration::deleteByName('NC_CC3_TEXTBG') ||
        !Configuration::deleteByName('NC_CC3_WIDTH') ||
        !Configuration::deleteByName('NC_CC3_TOPS') ||
        !Configuration::deleteByName('NC_CC3_BOTS') ||

        !Configuration::deleteByName('RC_BRAND_W') ||
        !Configuration::deleteByName('RC_BRAND_PER_ROW') ||
        !Configuration::deleteByName('RC_BRAND_NAME') ||
        !Configuration::deleteByName('RC_BRAND_NAME_HOVER') ||

        // page content
        !Configuration::deleteByName('NC_OT_BGS') ||
        !Configuration::deleteByName('NC_OT_BC') ||
        !Configuration::deleteByName('NC_OT_GS') ||
        !Configuration::deleteByName('NC_OT_GE') ||
        !Configuration::deleteByName('NC_OT_GG') ||
        !Configuration::deleteByName('NC_OT_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_OT_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_OT_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_OT_IM_BG_FIXED') ||
        !Configuration::deleteByName('NC_OT_PAD') ||
        !Configuration::deleteByName('NC_OT_WIDTH') ||
        !Configuration::deleteByName('NC_OT_TOPS') ||
        !Configuration::deleteByName('NC_OT_BOTS') ||

        !Configuration::deleteByName('NC_OM_BGS') ||
        !Configuration::deleteByName('NC_OM_BC') ||
        !Configuration::deleteByName('NC_OM_GS') ||
        !Configuration::deleteByName('NC_OM_GE') ||
        !Configuration::deleteByName('NC_OM_GG') ||
        !Configuration::deleteByName('NC_OM_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_OM_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_OM_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_OM_IM_BG_FIXED') ||
        !Configuration::deleteByName('NC_OM_TOPS') ||
        !Configuration::deleteByName('NC_OM_BOTS') ||

        !Configuration::deleteByName('NC_OB_BGS') ||
        !Configuration::deleteByName('NC_OB_BC') ||
        !Configuration::deleteByName('NC_OB_GS') ||
        !Configuration::deleteByName('NC_OB_GE') ||
        !Configuration::deleteByName('NC_OB_GG') ||
        !Configuration::deleteByName('NC_OB_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_OB_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_OB_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_OB_IM_BG_FIXED') ||
        !Configuration::deleteByName('NC_OB_TOPS') ||
        !Configuration::deleteByName('NC_OB_BOTS') ||

        !Configuration::deleteByName('RC_W_ALL') ||
        !Configuration::deleteByName('RC_W_CAT') ||
        !Configuration::deleteByName('RC_W_PRO') ||
        !Configuration::deleteByName('RC_W_CON') ||
        !Configuration::deleteByName('RC_W_CART') ||
        !Configuration::deleteByName('RC_W_ACC') ||
        !Configuration::deleteByName('RC_W_CMS') ||
        !Configuration::deleteByName('RC_W_BLOG') ||
        !Configuration::deleteByName('RC_B_LAYOUT') ||
        !Configuration::deleteByName('RC_B_POS_CAT') ||
        !Configuration::deleteByName('RC_B_POS_PRO') ||
        !Configuration::deleteByName('RC_B_TOPS') ||
        !Configuration::deleteByName('RC_B_BOTS') ||
        !Configuration::deleteByName('RC_B_W') ||
        !Configuration::deleteByName('RC_B_LINK') ||
        !Configuration::deleteByName('RC_B_LINK_HOVER') ||
        !Configuration::deleteByName('RC_B_SEPARATOR') ||
        !Configuration::deleteByName('RC_PAGE_BQ_Q') ||
        !Configuration::deleteByName('RC_CONTACT_ICON') ||
        !Configuration::deleteByName('RC_WARNING_MESSAGE_COLOR') ||
        !Configuration::deleteByName('RC_SUCCESS_MESSAGE_COLOR') ||
        !Configuration::deleteByName('RC_DANGER_MESSAGE_COLOR') ||

        // Sidebar and filter
        !Configuration::deleteByName('RC_SIDEBAR_TITLE_MARGIN') ||
        !Configuration::deleteByName('RC_SIDEBAR_TITLE_B') ||
        !Configuration::deleteByName('RC_SIDEBAR_TITLE_PADDING') ||
        !Configuration::deleteByName('RC_SIDEBAR_TITLE_BWIDTH') ||
        !Configuration::deleteByName('RC_SIDEBAR_TITLE_BORDER') ||

        !Configuration::deleteByName('RC_SIDEBAR_MARGIN') ||
        !Configuration::deleteByName('RC_SIDEBAR_B') ||
        !Configuration::deleteByName('RC_SIDEBAR_PADDING') ||
        !Configuration::deleteByName('RC_SIDEBAR_BWIDTH') ||
        !Configuration::deleteByName('RC_SIDEBAR_BORDER') ||
        !Configuration::deleteByName('RC_SIDEBAR_LINK') ||
        !Configuration::deleteByName('RC_SIDEBAR_BB') ||
        !Configuration::deleteByName('RC_SIDEBAR_BW') ||
        !Configuration::deleteByName('RC_SIDEBAR_BR') ||
        !Configuration::deleteByName('RC_SIDEBAR_BALL') ||
        !Configuration::deleteByName('RC_SIDEBAR_BCAT') ||
        !Configuration::deleteByName('RC_SIDEBAR_BFILTER') ||
        !Configuration::deleteByName('RC_SIDEBAR_BSALE') ||

        // Product list
        !Configuration::deleteByName('NC_SUBCAT_S') ||
        !Configuration::deleteByName('NC_CAT_NAME_S') ||
        !Configuration::deleteByName('NC_CAT_IMG_S') ||
        !Configuration::deleteByName('NC_CAT_IMGLAY_S') ||
        !Configuration::deleteByName('NC_CAT_DESC_S') ||
        !Configuration::deleteByName('RC_PL_NUMBER_COLOR') ||
        !Configuration::deleteByName('RC_PL_NUMBER_COLOR_HOVER') ||

        !Configuration::deleteByName('NC_PRODUCT_SWITCH') ||
        !Configuration::deleteByName('NC_PRODUCT_MARGIN') ||

        !Configuration::deleteByName('RC_PL_LAY') ||
        !Configuration::deleteByName('RC_PL_IMG_BGS') ||
        !Configuration::deleteByName('RC_PL_TEXT_BGS') ||
        !Configuration::deleteByName('NC_PI_B') ||
        !Configuration::deleteByName('NC_PI_BW') ||
        !Configuration::deleteByName('NC_PI_BR') ||
        !Configuration::deleteByName('NC_PI_C') ||
        !Configuration::deleteByName('NC_PI_CH') ||
        !Configuration::deleteByName('RC_PL_TEXT_ALIGN') ||
        !Configuration::deleteByName('RC_PL_IMG_BG') ||
        !Configuration::deleteByName('RC_PL_TEXT_BG') ||
        !Configuration::deleteByName('RC_PL_NAME') ||
        !Configuration::deleteByName('RC_PL_PRICE') ||
        !Configuration::deleteByName('RC_PL_HOVER_LAY') ||
        !Configuration::deleteByName('RC_PL_HOVER_G1') ||
        !Configuration::deleteByName('RC_PL_HOVER_G2') ||
        !Configuration::deleteByName('RC_PL_HOVER_TRANS') ||
        !Configuration::deleteByName('RC_PL_HOVER_BUT') ||
        !Configuration::deleteByName('RC_PL_HOVER_BUT_BG') ||
        !Configuration::deleteByName('RC_PL_HOVER_BUT_B') ||
        !Configuration::deleteByName('RC_PL_HOVER_BUTH') ||
        !Configuration::deleteByName('RC_PL_HOVER_BUT_BGH') ||
        !Configuration::deleteByName('RC_PL_HOVER_BUT_BH') ||
        !Configuration::deleteByName('RC_PL_HOVER_BUT_OUT') ||
        !Configuration::deleteByName('RC_PL_HOVER_BUT_BR') ||
        !Configuration::deleteByName('NC_SECOND_IMG_S') ||
        !Configuration::deleteByName('NC_COLORS_S') ||
        !Configuration::deleteByName('NC_QVS') ||
        !Configuration::deleteByName('NC_FAVS') ||

        !Configuration::deleteByName('RC_PL_PRODUCT_NEW_BG') ||
        !Configuration::deleteByName('RC_PL_PRODUCT_NEW_BORDER') ||
        !Configuration::deleteByName('RC_PL_PRODUCT_NEW_COLOR') ||
        !Configuration::deleteByName('RC_PL_PRODUCT_SALE_BG') ||
        !Configuration::deleteByName('RC_PL_PRODUCT_SALE_BORDER') ||
        !Configuration::deleteByName('RC_PL_PRODUCT_SALE_COLOR') ||

        !Configuration::deleteByName('RC_PP_REVIEWS_STARON') ||
        !Configuration::deleteByName('RC_PP_REVIEWS_STAROFF') ||

        !Configuration::deleteByName('NC_COUNT_DAYS') ||
        !Configuration::deleteByName('NC_COUNT_BG') ||
        !Configuration::deleteByName('NC_COUNT_COLOR') ||
        !Configuration::deleteByName('NC_COUNT_TIME') ||
        !Configuration::deleteByName('NC_COUNT_WATCH') ||
        !Configuration::deleteByName('NC_COUNT_WATCH_BG') ||

        !Configuration::deleteByName('NC_I_QVS') ||
        !Configuration::deleteByName('NC_I_DISCOVERS') ||
        !Configuration::deleteByName('NC_I_FAVS') ||
        !Configuration::deleteByName('NC_AIS') ||

        //  Product page
        !Configuration::deleteByName('RC_PP_LAY') ||
        !Configuration::deleteByName('RC_PP_THUMBS') ||
        !Configuration::deleteByName('RC_PP_IMGB') ||
        !Configuration::deleteByName('RC_PP_IMG_BORDER') ||
        !Configuration::deleteByName('RC_PP_ICON_BORDER') ||
        !Configuration::deleteByName('RC_PP_IMGSPACING') ||
        !Configuration::deleteByName('NC_MOBADOTSS') ||
        !Configuration::deleteByName('NC_MOBADOTSCS') ||

        !Configuration::deleteByName('RC_PP_STICKY') ||
        !Configuration::deleteByName('RC_PP_PRICE_COLOR') ||
        !Configuration::deleteByName('RC_PP_PRICE_DIS') ||
        !Configuration::deleteByName('RC_PP_ATT_LABEL') ||
        !Configuration::deleteByName('RC_PP_ATT_COLOR_ACTIVE') ||
        !Configuration::deleteByName('RC_PP_INFO_LABEL') ||
        !Configuration::deleteByName('RC_PP_INFO_VALUE') ||
        !Configuration::deleteByName('RC_PP_DISPLAY_Q') ||
        !Configuration::deleteByName('RC_PP_DISPLAY_REFER') ||
        !Configuration::deleteByName('RC_PP_DISPLAY_COND') ||
        !Configuration::deleteByName('RC_PP_DISPLAY_BRAND') ||
        !Configuration::deleteByName('NC_ACCESS_PERS') ||

        !Configuration::deleteByName('NC_PP_ADD_BG') ||
        !Configuration::deleteByName('NC_PP_ADD_BORDER') ||
        !Configuration::deleteByName('NC_PP_ADD_COLOR') ||

        !Configuration::deleteByName('NC_COUNT_PR_TITLE') ||
        !Configuration::deleteByName('NC_COUNT_PR_BG') ||
        !Configuration::deleteByName('NC_COUNT_PR_SEP') ||
        !Configuration::deleteByName('NC_COUNT_PR_NUMBERS') ||
        !Configuration::deleteByName('NC_COUNT_PR_COLOR') ||

        !Configuration::deleteByName('RC_PP_TABS_BG_SW') ||
        !Configuration::deleteByName('RC_PP_TABS_BG') ||


        // Cart and order
        !Configuration::deleteByName('RC_O_ADDS') ||
        !Configuration::deleteByName('RC_O_OPTION') ||
        !Configuration::deleteByName('RC_O_OPTION_ACTIVE') ||
        !Configuration::deleteByName('RC_O_INFO_TEXT') ||

        !Configuration::deleteByName('RC_LC_C') ||

        // blog
        !Configuration::deleteByName('RC_BL_W') ||
        !Configuration::deleteByName('RC_BL_ALIGN') ||
        !Configuration::deleteByName('RC_BL_LAY') ||
        !Configuration::deleteByName('RC_BL_CONT') ||
        !Configuration::deleteByName('RC_BL_ROW') ||
        !Configuration::deleteByName('RC_BL_META_SW') ||
        !Configuration::deleteByName('RC_BL_HEAD') ||
        !Configuration::deleteByName('RC_BL_H_TITLE') ||
        !Configuration::deleteByName('RC_BL_H_TITLE_H') ||
        !Configuration::deleteByName('RC_BL_H_META') ||
        !Configuration::deleteByName('RC_BL_H_DESC') ||
        !Configuration::deleteByName('RC_BL_META') ||

        // footer
        !Configuration::deleteByName('RC_FOOTER_LAY') ||
        !Configuration::deleteByName('NC_FOOTER_W') ||
        !Configuration::deleteByName('NC_LOGO_FOOTER') ||
        !Configuration::deleteByName('NC_FOOT_BGS') ||
        !Configuration::deleteByName('NC_FOOT_BC') ||
        !Configuration::deleteByName('NC_FOOT_GS') ||
        !Configuration::deleteByName('NC_FOOT_GE') ||
        !Configuration::deleteByName('NC_FOOT_GG') ||
        !Configuration::deleteByName('NC_FOOT_IM_BG_EXT') ||
        !Configuration::deleteByName('NC_FOOT_IM_BG_REPEAT') ||
        !Configuration::deleteByName('NC_FOOT_IM_BG_POSITION') ||
        !Configuration::deleteByName('NC_FOOT_IM_BG_FIXED') ||
        !Configuration::deleteByName('RC_FOOTER_BORDER') ||
        !Configuration::deleteByName('RC_FOOTER_BORDER_SW') ||
        !Configuration::deleteByName('RC_FOOTER_TITLES') ||
        !Configuration::deleteByName('RC_FOOTER_TEXT') ||
        !Configuration::deleteByName('RC_FOOTER_LINK') ||
        !Configuration::deleteByName('RC_FOOTER_LINK_H') ||
        !Configuration::deleteByName('RC_FOOTER_NEWS_BG') ||
        !Configuration::deleteByName('RC_FOOTER_NEWS_BORDER') ||
        !Configuration::deleteByName('RC_FOOTER_NEWS_PLACEH') ||
        !Configuration::deleteByName('RC_FOOTER_NEWS_COLOR') ||
        !Configuration::deleteByName('RC_FOOTER_NEWS_BUTTON') ||
        !Configuration::deleteByName('NC_FOOTER_SOC') ||
        !Configuration::deleteByName('NC_FOOTER_SOCTITLE') ||
        !Configuration::deleteByName('NC_FOOTER_LINKTITLE') ||

        // Mobile
        !Configuration::deleteByName('NC_SIDE_BTN') ||
        !Configuration::deleteByName('NC_SIDE_BG') ||
        !Configuration::deleteByName('NC_SIDE_B') ||
        !Configuration::deleteByName('NC_SIDE_TITLE') ||
        !Configuration::deleteByName('NC_SIDE_TEXT') ||
        !Configuration::deleteByName('NC_SIDE_BTNB') ||
        !Configuration::deleteByName('NC_SIDE_BTNBG') ||

        !Configuration::deleteByName('NC_LOGO_MOBILE') ||
        !Configuration::deleteByName('NC_MOB_HEADER') ||
        !Configuration::deleteByName('NC_MOB_MENU') ||
        !Configuration::deleteByName('NC_MOB_HP') ||
        !Configuration::deleteByName('NC_MOB_CAT') ||

        // typography
        !Configuration::deleteByName('RC_F_HEADINGS') ||
        !Configuration::deleteByName('RC_F_BUTTONS') ||
        !Configuration::deleteByName('RC_F_TEXT') ||
        !Configuration::deleteByName('RC_F_PRICE') ||
        !Configuration::deleteByName('RC_F_MENU') ||
        !Configuration::deleteByName('RC_F_PN') ||
        !Configuration::deleteByName('RC_LATIN_EXT') ||
        !Configuration::deleteByName('RC_CYRILLIC') ||

        !Configuration::deleteByName('RC_FS_TEXT') ||
        !Configuration::deleteByName('RC_LH_TEXT') ||
        !Configuration::deleteByName('RC_FW_TEXT') ||
        !Configuration::deleteByName('RC_LS_TEXT') ||

        !Configuration::deleteByName('RC_FW_LINK') ||

        !Configuration::deleteByName('RC_FS_BTN') ||
        !Configuration::deleteByName('RC_FW_BTN') ||
        !Configuration::deleteByName('RC_LS_BTN') ||
        !Configuration::deleteByName('RC_UP_BTN') ||

        !Configuration::deleteByName('RC_FS_INP') ||
        !Configuration::deleteByName('RC_FW_INP') ||
        !Configuration::deleteByName('RC_LS_INP') ||

        !Configuration::deleteByName('RC_FS_FOOT') ||
        !Configuration::deleteByName('RC_FW_FOOT') ||
        !Configuration::deleteByName('RC_LS_FOOT') ||
        !Configuration::deleteByName('RC_UP_FOOT') ||

        !Configuration::deleteByName('RC_FS_HOME_TIT') ||
        !Configuration::deleteByName('RC_FW_HOME_TIT') ||
        !Configuration::deleteByName('RC_LS_HOME_TIT') ||
        !Configuration::deleteByName('RC_UP_HOME_TIT') ||

        !Configuration::deleteByName('RC_FS_HOME_SUB') ||
        !Configuration::deleteByName('RC_FW_HOME_SUB') ||
        !Configuration::deleteByName('RC_LS_HOME_SUB') ||
        !Configuration::deleteByName('RC_UP_HOME_SUB') ||

        !Configuration::deleteByName('RC_FS_PAGE_HEAD') ||
        !Configuration::deleteByName('RC_FW_PAGE_HEAD') ||
        !Configuration::deleteByName('RC_LS_PAGE_HEAD') ||
        !Configuration::deleteByName('RC_UP_PAGE_HEAD') ||

        !Configuration::deleteByName('RC_FS_PAGE_H3') ||
        !Configuration::deleteByName('RC_FW_PAGE_H3') ||
        !Configuration::deleteByName('RC_LS_PAGE_H3') ||
        !Configuration::deleteByName('RC_UP_PAGE_H3') ||

        !Configuration::deleteByName('RC_FS_PAGE_SIDE') ||
        !Configuration::deleteByName('RC_FW_PAGE_SIDE') ||
        !Configuration::deleteByName('RC_LS_PAGE_SIDE') ||
        !Configuration::deleteByName('RC_UP_PAGE_SIDE') ||

        !Configuration::deleteByName('RC_FS_CAT_NAME') ||
        !Configuration::deleteByName('RC_FW_CAT_NAME') ||
        !Configuration::deleteByName('RC_LS_CAT_NAME') ||
        !Configuration::deleteByName('RC_UP_CAT_NAME') ||

        !Configuration::deleteByName('RC_FS_CAT_PRICE') ||
        !Configuration::deleteByName('RC_FW_CAT_PRICE') ||
        !Configuration::deleteByName('RC_LS_CAT_PRICE') ||

        !Configuration::deleteByName('RC_FS_PP_NAME') ||
        !Configuration::deleteByName('RC_FW_PP_NAME') ||
        !Configuration::deleteByName('RC_LS_PP_NAME') ||
        !Configuration::deleteByName('RC_UP_PP_NAME') ||

        !Configuration::deleteByName('RC_FS_PP_PRICE') ||
        !Configuration::deleteByName('RC_FW_PP_PRICE') ||
        !Configuration::deleteByName('RC_LS_PP_PRICE') ||

        !Configuration::deleteByName('RC_FS_BLOG') ||
        !Configuration::deleteByName('RC_FW_BLOG') ||
        !Configuration::deleteByName('RC_LS_BLOG') ||
        !Configuration::deleteByName('RC_UP_BLOG') ||

        !Configuration::deleteByName('RC_FS_MENU') ||
        !Configuration::deleteByName('RC_FW_MENU') ||
        !Configuration::deleteByName('RC_LS_MENU') ||
        !Configuration::deleteByName('RC_UP_MENU') ||

        // Custom CSS
        !Configuration::deleteByName('NC_CSS'))

            return false;
        return true;

    }

    public function postProcess() {
    }

    public function updateOriginalValues() {
        foreach($this -> defaults as $key => $v) {
            $find_nc = "nc_";
            if (substr($key, 0, 3) === $find_nc) {
                $target = strtoupper($key);
                if (!Configuration::hasKey($target) || !Configuration::get($target)) {
                    Configuration::updateValue((string)$target, $this -> defaults["$key"]);
                }
            }
        }
    }

    public function getContent() {

      // $this -> context -> controller -> addJS(($this -> _path) . 'js/jquery.colorpicker.js');
        $this -> context -> controller -> addJS(_PS_JS_DIR_ . 'jquery/plugins/jquery.colorpicker.js');
        $this -> context -> controller -> addJS(($this -> _path) . 'js/jquery-ui.min.js');
        $this -> context -> controller -> addJS(($this -> _path) . 'js/hc-sticky.js');
        $this -> context -> controller -> addJS(($this -> _path) . 'js/navbar-fixed.js');
        $this -> context -> controller -> addJS(($this -> _path) . 'js/navigation.js');
        $this -> context -> controller -> addJS(($this -> _path) . 'js/script.js');
        $this -> context -> controller -> addCSS(($this -> _path) . 'css/admin.css');
        $this -> context -> controller -> addCSS(($this -> _path) . 'css/feather.css');
        $this -> context -> controller -> addCSS(($this -> _path) . 'css/ionicons.css');
        $this -> context -> controller -> addJS(($this -> _path) . 'codemirror-4.11/lib/codemirror.js');
        $this -> context -> controller -> addJS(($this -> _path) . 'codemirror-4.11/mode/css/css.js');
        $this -> context -> controller -> addCSS(($this -> _path) . 'codemirror-4.11/lib/codemirror.css');
        $this -> context -> controller -> addCSS(($this -> _path) . 'codemirror-4.11/themes/mbo.css');
        $this -> context -> controller -> addCSS(($this -> _path) . 'codemirror-4.11/themes/zenburn.css');
        $this -> context -> controller -> addCSS(($this -> _path) . 'codemirror-4.11/themes/jquery-ui.min.css');
        $this -> postProcess();

        $output = '<h2 class="roytc_title"><span class="theme_name"></span><div class="mod">Ayon Customizer<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></div><div class="mod_name"><span class="mod_custom">' . $this -> displayName . '</span><span class="mod_license">Proper work of theme, this module, free updates and support are included only in legal version of theme, purchased from <a href="https://themeforest.net/item/ayon-multipurpose-responsive-prestashop-theme/18628985?ref=RoyVelvet" target="_blank">ThemeForest HERE</a></span></div><span class="mod_version"></span></h2>';

        $errors = '';

        if (Tools::isSubmit('export_changes')) {
            $keys = array(
              'RC_G_LAY',
              'RC_G_TP',
              'RC_G_BP',
              'RC_BODY_BOX_SW',
              'RC_MAIN_BACKGROUND_COLOR',
              'NC_BODY_GS',
              'NC_BODY_GE',
              'NC_BODY_GG',
              'NC_BODY_IM_BG_EXT',
              'NC_BODY_IM_BG_REPEAT',
              'NC_BODY_IM_BG_POSITION',
              'NC_BODY_IM_BG_FIXED',
              'RC_GRADIENT_SCHEME',
              'RC_DISPLAY_GRADIENT',
              'RC_BODY_BG_PATTERN',
              'NC_MAIN_BGS',
              'NC_MAIN_BC',
              'NC_MAIN_GS',
              'NC_MAIN_GE',
              'NC_MAIN_GG',
              'NC_MAIN_IM_BG_EXT',
              'NC_MAIN_IM_BG_REPEAT',
              'NC_MAIN_IM_BG_POSITION',
              'NC_MAIN_IM_BG_FIXED',

              'RC_HEADER_LAY',
              'RC_HEADER_W',
              'RC_HEADER_OPA',
              'NC_LOGO_NORMAL',
              'NC_LOGO_TRANS',
              'NC_HEADER_TRANSWITCH',
              'NC_HEADER_HIDES',
              'NC_BW_ICONS',
              'NC_BW_MENU',
              'RC_H_BG',
              'RC_NORM_ICONS',
              'RC_NORM_QUAN',
              'RC_NORM_QUANBG',
              'RC_NORM_LOGGED',
              'RC_NORM_LINK',
              'RC_NORM_LINKH',
              'RC_NORM_EFFECT',
              'RC_NORM_SBORDER',
              'RC_TRANS_ICONS',
              'RC_TRANS_QUAN',
              'RC_TRANS_QUANBG',
              'RC_TRANS_LOGGED',
              'RC_TRANS_LINK',
              'RC_TRANS_LINKH',
              'RC_TRANS_EFFECT',
              'RC_TRANS_SBORDER',
              'RC_HEADER_NBG',
              'RC_HEADER_NB',
              'RC_HEADER_NT',
              'RC_HEADER_NL',
              'RC_HEADER_NLH',
              'NC_CLS',
              'NC_CLLS',
              'RC_HEADER_NS',
              'RC_HEADER_NBS',
              'NC_TOPPANEL_LAYS',
              'RC_CLICK_LAY_M',
              'RC_CLICK_LAY_S',
              'RC_CLICK_LAY_C',
              'RC_CLICK_LAY_A',
              'NC_M_LAYOUT_S',
              'NC_M_ICON',
              'NC_M_UNDER_S',
              'NC_M_OVERRIDE_S',
              'RC_M_POPUP_LLINK',
              'RC_M_POPUP_LLINK_HOVER',
              'RC_M_POPUP_LBG',
              'RC_M_POPUP_LCHEVRON',
              'RC_M_POPUP_LBORDER',
              'NC_M_BR_S',
              'RC_SEARCH_LAY',
              'NC_I_SEARCHS',
              'NC_SEARCH_TAGS',
              'NC_SEARCH_PRODS',
              'RC_SEARCH_BR',
              'RC_CART_LAY',
              'RC_CART_ICON',
              'RC_ACC_LAY',
              'RC_ACC_ICON',
              'RC_ACC_NAME',

              'RC_G_BG_CONTENT',
              'RC_G_BORDER',
              'RC_G_BODY_TEXT',
              'RC_G_BODY_COMMENT',
              'RC_G_BODY_LINK',
              'RC_G_BODY_LINK_HOVER',
              'RC_G_LINK_EFFECT',
              'RC_G_LINK_EFFECTC',
              'RC_G_FORMS',
              'RC_LABEL',
              'RC_G_HEADER',
              'RC_CON_POS',
              'RC_CON_PRO',
              'RC_CON_BRA',
              'RC_CON_SALE',
              'RC_G_HB',
              'RC_G_HC',
              'RC_G_NORMAL_BORDER',
              'RC_G_EXTRA_BORDER',
              'RC_FANCY_NBG',
              'RC_FANCY_NC',
              'RC_B_NORMAL_BG',
              'RC_B_NORMAL_BORDER',
              'RC_B_NORMAL_COLOR',
              'RC_B_NORMAL_BG_HOVER',
              'RC_B_NORMAL_BORDER_HOVER',
              'RC_B_NORMAL_COLOR_HOVER',
              'RC_B_EX_BG',
              'RC_B_EX_BORDER',
              'RC_B_EX_COLOR',
              'NC_B_RADIUSS',
              'NC_B_SHS',
              'RC_I_BG',
              'RC_I_COLOR',
              'RC_I_B_COLOR',
              'RC_I_BG_FOCUS',
              'RC_I_COLOR_FOCUS',
              'RC_I_B_FOCUS',
              'RC_I_B_RADIUS',
              'RC_I_PH',
              'RC_RC_BG_ACTIVE',
              'NC_LOADERS',
              'NC_LOADER_LAYS',
              'NC_LOADER_BG',
              'NC_LOADER_COLOR',
              'NC_LOADER_COLOR2',
              'NC_LOADER_LOGOS',
              'NC_LOGO_LOADER',

              'NC_HT_BGS',
              'NC_HT_BC',
              'NC_HT_GS',
              'NC_HT_GE',
              'NC_HT_GG',
              'NC_HT_IM_BG_EXT',
              'NC_HT_IM_BG_REPEAT',
              'NC_HT_IM_BG_POSITION',
              'NC_HT_IM_BG_FIXED',
              'NC_HT_TOPS',
              'NC_HT_BOTS',
              'NC_HT_PAD',
              'NC_HT_WIDTH',
              'NC_HM_PAD',
              'NC_HM_WIDTH',
              'NC_HM_BGS',
              'NC_HM_BC',
              'NC_HM_GS',
              'NC_HM_GE',
              'NC_HM_GG',
              'NC_HM_IM_BG_EXT',
              'NC_HM_IM_BG_REPEAT',
              'NC_HM_IM_BG_POSITION',
              'NC_HM_IM_BG_FIXED',
              'NC_HM_TOPS',
              'NC_HM_BOTS',
              'NC_HB_BGS',
              'NC_HB_BC',
              'NC_HB_GS',
              'NC_HB_GE',
              'NC_HB_GG',
              'NC_HB_IM_BG_EXT',
              'NC_HB_IM_BG_REPEAT',
              'NC_HB_IM_BG_POSITION',
              'NC_HB_IM_BG_FIXED',
              'NC_HB_TOPS',
              'NC_HB_BOTS',
              'RC_BAN_SPA_TOPS',
              'RC_BAN_TS_TOPS',
              'RC_BAN_BS_TOPS',
              'RC_BAN_W_TOP',
              'RC_BAN_SPA_HOME',
              'RC_BAN_TS_HOME',
              'RC_BAN_BS_HOME',
              'RC_BAN_W_HOME',
              'RC_BAN_SPA_BEFOOT',
              'RC_BAN_TS_BEFOOT',
              'RC_BAN_BS_BEFOOT',
              'RC_BAN_W_BEFOOT',
              'RC_BAN_SPA_FOOT',
              'RC_BAN_TS_FOOT',
              'RC_BAN_BS_FOOT',
              'RC_BAN_SPA_SIDEMOBILEMENU',
              'RC_BAN_TS_SIDEMOBILEMENU',
              'RC_BAN_BS_SIDEMOBILEMENU',
              'RC_BAN_SPA_PRODUCT',
              'RC_BAN_TS_PRODUCT',
              'RC_BAN_BS_PRODUCT',
              'RC_BAN_TS_LEFT',
              'RC_BAN_BS_LEFT',
              'RC_BAN_TS_RIGHT',
              'RC_BAN_BS_RIGHT',
              'NC_HP_TITLE',
              'NC_HP_ALIGN',
              'NC_FEAT_LAYS',
              'NC_FEAT_PERS',
              'NC_FEAT_SPAS',
              'NC_FEAT_SLIDERS',
              'NC_FEAT_AUTOS',
              'NC_FEAT_BG',
              'NC_FEAT_BC',
              'NC_FEAT_GS',
              'NC_FEAT_GE',
              'NC_FEAT_GG',
              'NC_FEAT_TITLE',
              'NC_FEAT_TEXT',
              'NC_FEAT_TEXTBG',
              'NC_FEAT_WIDTH',
              'NC_FEAT_TOPS',
              'NC_FEAT_BOTS',
              'NC_BEST_LAY',
              'NC_BEST_PER',
              'NC_BEST_SPA',
              'NC_BEST_SLIDER',
              'NC_BEST_AUTO',
              'NC_BEST_BG',
              'NC_BEST_BC',
              'NC_BEST_GS',
              'NC_BEST_GE',
              'NC_BEST_GG',
              'NC_BEST_TITLE',
              'NC_BEST_TEXT',
              'NC_BEST_TEXTBG',
              'NC_BEST_WIDTH',
              'NC_BEST_TOPS',
              'NC_BEST_BOTS',
              'NC_NEW_LAY',
              'NC_NEW_PER',
              'NC_NEW_SPA',
              'NC_NEW_SLIDER',
              'NC_NEW_AUTO',
              'NC_NEW_BG',
              'NC_NEW_BC',
              'NC_NEW_GS',
              'NC_NEW_GE',
              'NC_NEW_GG',
              'NC_NEW_TITLE',
              'NC_NEW_TEXT',
              'NC_NEW_TEXTBG',
              'NC_NEW_WIDTH',
              'NC_NEW_TOPS',
              'NC_NEW_BOTS',
              'NC_SALE_LAY',
              'NC_SALE_PER',
              'NC_SALE_SPA',
              'NC_SALE_SLIDER',
              'NC_SALE_AUTO',
              'NC_SALE_BG',
              'NC_SALE_BC',
              'NC_SALE_GS',
              'NC_SALE_GE',
              'NC_SALE_GG',
              'NC_SALE_TITLE',
              'NC_SALE_TEXT',
              'NC_SALE_TEXTBG',
              'NC_SALE_WIDTH',
              'NC_SALE_TOPS',
              'NC_SALE_BOTS',
              'NC_CC1_LAY',
              'NC_CC1_PER',
              'NC_CC1_SPA',
              'NC_CC1_SLIDER',
              'NC_CC1_AUTO',
              'NC_CC1_BG',
              'NC_CC1_BC',
              'NC_CC1_GS',
              'NC_CC1_GE',
              'NC_CC1_GG',
              'NC_CC1_TITLE',
              'NC_CC1_TEXT',
              'NC_CC1_TEXTBG',
              'NC_CC1_WIDTH',
              'NC_CC1_TOPS',
              'NC_CC1_BOTS',
              'NC_CC2_LAY',
              'NC_CC2_PER',
              'NC_CC2_SPA',
              'NC_CC2_SLIDER',
              'NC_CC2_AUTO',
              'NC_CC2_BG',
              'NC_CC2_BC',
              'NC_CC2_GS',
              'NC_CC2_GE',
              'NC_CC2_GG',
              'NC_CC2_TITLE',
              'NC_CC2_TEXT',
              'NC_CC2_TEXTBG',
              'NC_CC2_WIDTH',
              'NC_CC2_TOPS',
              'NC_CC2_BOTS',
              'NC_CC3_LAY',
              'NC_CC3_PER',
              'NC_CC3_SPA',
              'NC_CC3_SLIDER',
              'NC_CC3_AUTO',
              'NC_CC3_BG',
              'NC_CC3_BC',
              'NC_CC3_GS',
              'NC_CC3_GE',
              'NC_CC3_GG',
              'NC_CC3_TITLE',
              'NC_CC3_TEXT',
              'NC_CC3_TEXTBG',
              'NC_CC3_WIDTH',
              'NC_CC3_TOPS',
              'NC_CC3_BOTS',
              'RC_BRAND_W',
              'RC_BRAND_PER_ROW',
              'RC_BRAND_NAME',
              'RC_BRAND_NAME_HOVER',

              'NC_OT_BGS',
              'NC_OT_BC',
              'NC_OT_GS',
              'NC_OT_GE',
              'NC_OT_GG',
              'NC_OT_IM_BG_EXT',
              'NC_OT_IM_BG_REPEAT',
              'NC_OT_IM_BG_POSITION',
              'NC_OT_IM_BG_FIXED',
              'NC_OT_PAD',
              'NC_OT_WIDTH',
              'NC_OT_TOPS',
              'NC_OT_BOTS',
              'NC_OM_BGS',
              'NC_OM_BC',
              'NC_OM_GS',
              'NC_OM_GE',
              'NC_OM_GG',
              'NC_OM_IM_BG_EXT',
              'NC_OM_IM_BG_REPEAT',
              'NC_OM_IM_BG_POSITION',
              'NC_OM_IM_BG_FIXED',
              'NC_OM_TOPS',
              'NC_OM_BOTS',
              'NC_OB_BGS',
              'NC_OB_BC',
              'NC_OB_GS',
              'NC_OB_GE',
              'NC_OB_GG',
              'NC_OB_IM_BG_EXT',
              'NC_OB_IM_BG_REPEAT',
              'NC_OB_IM_BG_POSITION',
              'NC_OB_IM_BG_FIXED',
              'NC_OB_TOPS',
              'NC_OB_BOTS',
              'RC_W_ALL',
              'RC_W_CAT',
              'RC_W_PRO',
              'RC_W_CON',
              'RC_W_CART',
              'RC_W_ACC',
              'RC_W_CMS',
              'RC_W_BLOG',
              'RC_B_LAYOUT',
              'RC_B_POS_CAT',
              'RC_B_POS_PRO',
              'RC_B_TOPS',
              'RC_B_BOTS',
              'RC_B_W',
              'RC_B_LINK',
              'RC_B_LINK_HOVER',
              'RC_B_SEPARATOR',
              'RC_PAGE_BQ_Q',
              'RC_CONTACT_ICON',
              'RC_WARNING_MESSAGE_COLOR',
              'RC_SUCCESS_MESSAGE_COLOR',
              'RC_DANGER_MESSAGE_COLOR',

              'RC_SIDEBAR_TITLE_MARGIN',
              'RC_SIDEBAR_TITLE_B',
              'RC_SIDEBAR_TITLE_PADDING',
              'RC_SIDEBAR_TITLE_BWIDTH',
              'RC_SIDEBAR_TITLE_BORDER',
              'RC_SIDEBAR_MARGIN',
              'RC_SIDEBAR_B',
              'RC_SIDEBAR_PADDING',
              'RC_SIDEBAR_BWIDTH',
              'RC_SIDEBAR_BORDER',
              'RC_SIDEBAR_LINK',
              'RC_SIDEBAR_BB',
              'RC_SIDEBAR_BW',
              'RC_SIDEBAR_BR',
              'RC_SIDEBAR_BCAT',
              'RC_SIDEBAR_BALL',
              'RC_SIDEBAR_BFILTER',
              'RC_SIDEBAR_BSALE',
              'NC_SUBCAT_S',
              'NC_CAT_NAME_S',
              'NC_CAT_IMG_S',
              'NC_CAT_IMGLAY_S',
              'NC_CAT_DESC_S',
              'RC_PL_NUMBER_COLOR',
              'RC_PL_NUMBER_COLOR_HOVER',
              'NC_PRODUCT_SWITCH',
              'NC_PRODUCT_MARGIN',
              'RC_PL_LAY',
              'RC_PL_IMG_BGS',
              'RC_PL_TEXT_BGS',
              'NC_PI_B',
              'NC_PI_BW',
              'NC_PI_BR',
              'NC_PI_C',
              'NC_PI_CH',
              'RC_PL_TEXT_ALIGN',
              'RC_PL_IMG_BG',
              'RC_PL_TEXT_BG',
              'RC_PL_NAME',
              'RC_PL_PRICE',
              'RC_PL_HOVER_LAY',
              'RC_PL_HOVER_G1',
              'RC_PL_HOVER_G2',
              'RC_PL_HOVER_TRANS',
              'RC_PL_HOVER_BUT',
              'RC_PL_HOVER_BUT_BG',
              'RC_PL_HOVER_BUT_B',
              'RC_PL_HOVER_BUTH',
              'RC_PL_HOVER_BUT_BGH',
              'RC_PL_HOVER_BUT_BH',
              'RC_PL_HOVER_BUT_OUT',
              'RC_PL_HOVER_BUT_BR',
              'NC_SECOND_IMG_S',
              'NC_COLORS_S',
              'NC_QVS',
              'NC_FAVS',
              'RC_PL_PRODUCT_NEW_BG',
              'RC_PL_PRODUCT_NEW_BORDER',
              'RC_PL_PRODUCT_NEW_COLOR',
              'RC_PL_PRODUCT_SALE_BG',
              'RC_PL_PRODUCT_SALE_BORDER',
              'RC_PL_PRODUCT_SALE_COLOR',
              'RC_PP_REVIEWS_STARON',
              'RC_PP_REVIEWS_STAROFF',
              'NC_COUNT_DAYS',
              'NC_COUNT_BG',
              'NC_COUNT_COLOR',
              'NC_COUNT_TIME',
              'NC_COUNT_WATCH',
              'NC_COUNT_WATCH_BG',
              'NC_I_QVS',
              'NC_I_DISCOVERS',
              'NC_I_FAVS',
              'NC_AIS',

              'RC_PP_LAY',
              'RC_PP_THUMBS',
              'RC_PP_IMGB',
              'RC_PP_IMG_BORDER',
              'RC_PP_ICON_BORDER',
              'RC_PP_IMGSPACING',
              'NC_MOBADOTSS',
              'NC_MOBADOTSCS',
              'RC_PP_STICKY',
              'RC_PP_PRICE_COLOR',
              'RC_PP_PRICE_DIS',
              'RC_PP_ATT_LABEL',
              'RC_PP_ATT_COLOR_ACTIVE',
              'RC_PP_INFO_LABEL',
              'RC_PP_INFO_VALUE',
              'RC_PP_DISPLAY_Q',
              'RC_PP_DISPLAY_REFER',
              'RC_PP_DISPLAY_COND',
              'RC_PP_DISPLAY_BRAND',
              'NC_ACCESS_PERS',
              'NC_PP_ADD_BG',
              'NC_PP_ADD_BORDER',
              'NC_PP_ADD_COLOR',
              'NC_COUNT_PR_TITLE',
              'NC_COUNT_PR_BG',
              'NC_COUNT_PR_SEP',
              'NC_COUNT_PR_NUMBERS',
              'NC_COUNT_PR_COLOR',
              'RC_PP_TABS_BG_SW',
              'RC_PP_TABS_BG',
              'RC_O_ADDS',
              'RC_O_OPTION',
              'RC_O_OPTION_ACTIVE',
              'RC_O_INFO_TEXT',
              'RC_LC_C',

              'RC_BL_W',
              'RC_BL_ALIGN',
              'RC_BL_LAY',
              'RC_BL_CONT',
              'RC_BL_ROW',
              'RC_BL_META_SW',
              'RC_BL_HEAD',
              'RC_BL_H_TITLE',
              'RC_BL_H_TITLE_H',
              'RC_BL_H_META',
              'RC_BL_H_DESC',
              'RC_BL_META',

              'RC_FOOTER_LAY',
              'NC_FOOTER_W',
              'NC_LOGO_FOOTER',
              'NC_FOOT_BGS',
              'NC_FOOT_BC',
              'NC_FOOT_GS',
              'NC_FOOT_GE',
              'NC_FOOT_GG',
              'NC_FOOT_IM_BG_EXT',
              'NC_FOOT_IM_BG_REPEAT',
              'NC_FOOT_IM_BG_POSITION',
              'NC_FOOT_IM_BG_FIXED',
              'RC_FOOTER_BORDER',
              'RC_FOOTER_BORDER_SW',
              'RC_FOOTER_TITLES',
              'RC_FOOTER_TEXT',
              'RC_FOOTER_LINK',
              'RC_FOOTER_LINK_H',
              'RC_FOOTER_NEWS_BG',
              'RC_FOOTER_NEWS_BORDER',
              'RC_FOOTER_NEWS_PLACEH',
              'RC_FOOTER_NEWS_COLOR',
              'RC_FOOTER_NEWS_BUTTON',
              'NC_FOOTER_SOC',
              'NC_FOOTER_SOCTITLE',
              'NC_FOOTER_LINKTITLE',

              'NC_SIDE_BTN',
              'NC_SIDE_BG',
              'NC_SIDE_B',
              'NC_SIDE_TITLE',
              'NC_SIDE_TEXT',
              'NC_SIDE_BTNB',
              'NC_SIDE_BTNBG',

              'NC_LOGO_MOBILE',
              'NC_MOB_HEADER',
              'NC_MOB_MENU',
              'NC_MOB_HP',
              'NC_MOB_CAT',

              'RC_F_HEADINGS',
              'RC_F_BUTTONS',
              'RC_F_TEXT',
              'RC_F_PRICE',
              'RC_F_MENU',
              'RC_F_PN',
              'RC_LATIN_EXT',
              'RC_CYRILLIC',
              'RC_FS_TEXT',
              'RC_LH_TEXT',
              'RC_FW_TEXT',
              'RC_LS_TEXT',

              'RC_FW_LINK',

              'RC_FS_BTN',
              'RC_FW_BTN',
              'RC_LS_BTN',
              'RC_UP_BTN',

              'RC_FS_INP',
              'RC_FW_INP',
              'RC_LS_INP',

              'RC_FS_FOOT',
              'RC_FW_FOOT',
              'RC_LS_FOOT',
              'RC_UP_FOOT',

              'RC_FS_HOME_TIT',
              'RC_FW_HOME_TIT',
              'RC_LS_HOME_TIT',
              'RC_UP_HOME_TIT',

              'RC_FS_HOME_SUB',
              'RC_FW_HOME_SUB',
              'RC_LS_HOME_SUB',
              'RC_UP_HOME_SUB',

              'RC_FS_PAGE_HEAD',
              'RC_FW_PAGE_HEAD',
              'RC_LS_PAGE_HEAD',
              'RC_UP_PAGE_HEAD',

              'RC_FS_PAGE_H3',
              'RC_FW_PAGE_H3',
              'RC_LS_PAGE_H3',
              'RC_UP_PAGE_H3',

              'RC_FS_PAGE_SIDE',
              'RC_FW_PAGE_SIDE',
              'RC_LS_PAGE_SIDE',
              'RC_UP_PAGE_SIDE',

              'RC_FS_CAT_NAME',
              'RC_FW_CAT_NAME',
              'RC_LS_CAT_NAME',
              'RC_UP_CAT_NAME',

              'RC_FS_CAT_PRICE',
              'RC_FW_CAT_PRICE',
              'RC_LS_CAT_PRICE',

              'RC_FS_PP_NAME',
              'RC_FW_PP_NAME',
              'RC_LS_PP_NAME',
              'RC_UP_PP_NAME',

              'RC_FS_PP_PRICE',
              'RC_FW_PP_PRICE',
              'RC_LS_PP_PRICE',

              'RC_FS_BLOG',
              'RC_FW_BLOG',
              'RC_LS_BLOG',
              'RC_UP_BLOG',

              'RC_FS_MENU',
              'RC_FW_MENU',
              'RC_LS_MENU',
              'RC_UP_MENU',

              'NC_CSS'
                        );
            $export = array();
            foreach ($keys as $value) {
                $export[$value] = Configuration::get($value);
            }
            $json_export = json_encode($export);
            $output .='<a id="ayon_export" download="ayon_export.json" type="text/json"></a>
                       <script>
                       $(document).ready(function(){
                              var data = '.$json_export.';
                              var a = document.getElementById("ayon_export");
                              a.href="data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(data));
                              a.click();
                       });
                       </script>';
        }

        if (Tools::isSubmit('ayon_import_submit')) {
            $data = file_get_contents($_FILES['ayon_import_file']['tmp_name']);
            $arr = json_decode($data);
            foreach ($arr as $key => $value) {
                Configuration::updateValue($key, $value);
            }
        }

        if (Tools::isSubmit('nc_body_im_upload')) {
            if (isset($_FILES['nc_body_im_field']) && isset($_FILES['nc_body_im_field']['tmp_name']) && !empty($_FILES['nc_body_im_field']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['nc_body_im_field'], Tools::convertBytes(ini_get('upload_max_filesize'))))

                    $errors .= $error;

                else {

                    Configuration::updateValue('NC_BODY_IM_BG_EXT', substr($_FILES['nc_body_im_field']['name'], strrpos($_FILES['nc_body_im_field']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'nc_body_im_background'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['nc_body_im_field']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_BODY_IM_BG_EXT')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('nc_body_im_delete')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'nc_body_im_background'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_BODY_IM_BG_EXT')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_BODY_IM_BG_EXT'));
            Configuration::updateValue('NC_BODY_IM_BG_EXT', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }

        if (Tools::isSubmit('nc_main_im_upload')) {
            if (isset($_FILES['nc_main_im_field']) && isset($_FILES['nc_main_im_field']['tmp_name']) && !empty($_FILES['nc_main_im_field']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['nc_main_im_field'], Tools::convertBytes(ini_get('upload_max_filesize'))))

                    $errors .= $error;

                else {

                    Configuration::updateValue('NC_MAIN_IM_BG_EXT', substr($_FILES['nc_main_im_field']['name'], strrpos($_FILES['nc_main_im_field']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'nc_main_im_background'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['nc_main_im_field']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_MAIN_IM_BG_EXT')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('nc_main_im_delete')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'nc_main_im_background'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_MAIN_IM_BG_EXT')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_MAIN_IM_BG_EXT'));
            Configuration::updateValue('NC_MAIN_IM_BG_EXT', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }


        if (Tools::isSubmit('nc_ht_im_upload')) {
            if (isset($_FILES['nc_ht_im_field']) && isset($_FILES['nc_ht_im_field']['tmp_name']) && !empty($_FILES['nc_ht_im_field']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['nc_ht_im_field'], Tools::convertBytes(ini_get('upload_max_filesize'))))

                    $errors .= $error;

                else {

                    Configuration::updateValue('NC_HT_IM_BG_EXT', substr($_FILES['nc_ht_im_field']['name'], strrpos($_FILES['nc_ht_im_field']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'nc_ht_im_background'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['nc_ht_im_field']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_HT_IM_BG_EXT')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('nc_ht_im_delete')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'nc_ht_im_background'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_HT_IM_BG_EXT')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_HT_IM_BG_EXT'));
            Configuration::updateValue('NC_HT_IM_BG_EXT', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }


        if (Tools::isSubmit('nc_ot_im_upload')) {
            if (isset($_FILES['nc_ot_im_field']) && isset($_FILES['nc_ot_im_field']['tmp_name']) && !empty($_FILES['nc_ot_im_field']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['nc_ot_im_field'], Tools::convertBytes(ini_get('upload_max_filesize'))))

                    $errors .= $error;

                else {

                    Configuration::updateValue('NC_OT_IM_BG_EXT', substr($_FILES['nc_ot_im_field']['name'], strrpos($_FILES['nc_ot_im_field']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'nc_ot_im_background'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['nc_ot_im_field']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_OT_IM_BG_EXT')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('nc_ot_im_delete')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'nc_ot_im_background'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_OT_IM_BG_EXT')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_OT_IM_BG_EXT'));
            Configuration::updateValue('NC_OT_IM_BG_EXT', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }


        if (Tools::isSubmit('nc_foot_im_upload')) {
            if (isset($_FILES['nc_foot_im_field']) && isset($_FILES['nc_foot_im_field']['tmp_name']) && !empty($_FILES['nc_foot_im_field']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['nc_foot_im_field'], Tools::convertBytes(ini_get('upload_max_filesize'))))

                    $errors .= $error;

                else {

                    Configuration::updateValue('NC_FOOT_IM_BG_EXT', substr($_FILES['nc_foot_im_field']['name'], strrpos($_FILES['nc_foot_im_field']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'nc_foot_im_background'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['nc_foot_im_field']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_FOOT_IM_BG_EXT')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('nc_foot_im_delete')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'nc_foot_im_background'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_FOOT_IM_BG_EXT')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_FOOT_IM_BG_EXT'));
            Configuration::updateValue('NC_FOOT_IM_BG_EXT', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }


        if (Tools::isSubmit('logo_loader_button2')) {
            if (isset($_FILES['logo_loader_field2']) && isset($_FILES['logo_loader_field2']['tmp_name']) && !empty($_FILES['logo_loader_field2']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['logo_loader_field2'], Tools::convertBytes(ini_get('upload_max_filesize'))))

                    $errors .= $error;

                else {

                    Configuration::updateValue('NC_LOGO_LOADER', substr($_FILES['logo_loader_field2']['name'], strrpos($_FILES['logo_loader_field2']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'logo-loader'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['logo_loader_field2']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_LOGO_LOADER')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('logo_loader_delete2')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'logo-loader'.'-'.(int)$this->context->shop->getContextShopID();


            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_LOADER')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_LOADER'));
            Configuration::updateValue('NC_LOGO_LOADER', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }


        if (Tools::isSubmit('logo_normal_button2')) {
            if (isset($_FILES['logo_normal_field2']) && isset($_FILES['logo_normal_field2']['tmp_name']) && !empty($_FILES['logo_normal_field2']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['logo_normal_field2'], Tools::convertBytes(ini_get('upload_max_filesize'))))
                    $errors .= $error;
                else {
                    Configuration::updateValue('NC_LOGO_NORMAL', substr($_FILES['logo_normal_field2']['name'], strrpos($_FILES['logo_normal_field2']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'logo-normal'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['logo_normal_field2']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_LOGO_NORMAL')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('logo_normal_delete2')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'logo-normal'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_NORMAL')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_NORMAL'));
            Configuration::updateValue('NC_LOGO_NORMAL', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }

        if (Tools::isSubmit('logo_trans_button2')) {
            if (isset($_FILES['logo_trans_field2']) && isset($_FILES['logo_trans_field2']['tmp_name']) && !empty($_FILES['logo_trans_field2']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['logo_trans_field2'], Tools::convertBytes(ini_get('upload_max_filesize'))))
                    $errors .= $error;
                else {
                    Configuration::updateValue('NC_LOGO_TRANS', substr($_FILES['logo_trans_field2']['name'], strrpos($_FILES['logo_trans_field2']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'logo-trans'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['logo_trans_field2']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_LOGO_TRANS')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('logo_trans_delete2')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'logo-trans'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_TRANS')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_TRANS'));
            Configuration::updateValue('NC_LOGO_TRANS', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }

        if (Tools::isSubmit('logo_mobile_button2')) {
            if (isset($_FILES['logo_mobile_field2']) && isset($_FILES['logo_mobile_field2']['tmp_name']) && !empty($_FILES['logo_mobile_field2']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['logo_mobile_field2'], Tools::convertBytes(ini_get('upload_max_filesize'))))
                    $errors .= $error;
                else {
                    Configuration::updateValue('NC_LOGO_MOBILE', substr($_FILES['logo_mobile_field2']['name'], strrpos($_FILES['logo_mobile_field2']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'logo-mobile'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['logo_mobile_field2']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_LOGO_MOBILE')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('logo_mobile_delete2')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'logo-mobile'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_MOBILE')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_MOBILE'));
            Configuration::updateValue('NC_LOGO_MOBILE', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }


        if (Tools::isSubmit('logo_footer_button2')) {
            if (isset($_FILES['logo_footer_field2']) && isset($_FILES['logo_footer_field2']['tmp_name']) && !empty($_FILES['logo_footer_field2']['tmp_name'])) {
                if ($error = ImageManager::validateUpload($_FILES['logo_footer_field2'], Tools::convertBytes(ini_get('upload_max_filesize'))))
                    $errors .= $error;
                else {
                    Configuration::updateValue('NC_LOGO_FOOTER', substr($_FILES['logo_footer_field2']['name'], strrpos($_FILES['logo_footer_field2']['name'], '.') + 1));

                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                        $adv_imgname = 'logo-footer'.'-'.(int)$this->context->shop->getContextShopID();

                    if (!move_uploaded_file($_FILES['logo_footer_field2']['tmp_name'], _PS_MODULE_DIR_ . $this -> name . '/upload/' . $adv_imgname . '.' . Configuration::get('NC_LOGO_FOOTER')))
                        $errors .= $this->l('Error move uploaded file');
                        $output = '<div class="conf confirm">' . $this->l('Image uploaded') . '</div>' . $output;
                }
            }
        }
        if (Tools::isSubmit('logo_footer_delete2')) {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = 'logo-footer'.'-'.(int)$this->context->shop->getContextShopID();

            if (file_exists(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_FOOTER')))
                unlink(_PS_MODULE_DIR_ . $this -> name . '/upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_FOOTER'));
            Configuration::updateValue('NC_LOGO_FOOTER', "");

            $output = '<div class="conf confirm">' . $this->l('Image removed') . '</div>' . $output;
        }

        if (Tools::isSubmit('save_changes')) {

            Configuration::updateValue('RC_G_LAY', (string)(Tools::getValue("g_lay")));
            Configuration::updateValue('RC_G_TP', (string)(Tools::getValue("g_tp")));
            Configuration::updateValue('RC_G_BP', (string)(Tools::getValue("g_bp")));
            Configuration::updateValue('RC_BODY_BOX_SW', (string)(Tools::getValue("body_box_sw")));
            Configuration::updateValue('RC_MAIN_BACKGROUND_COLOR', (string)(Tools::getValue("main_background_color")));
            Configuration::updateValue('NC_BODY_GS', (string)(Tools::getValue("nc_body_gs")));
            Configuration::updateValue('NC_BODY_GE', (string)(Tools::getValue("nc_body_ge")));
            Configuration::updateValue('NC_BODY_GG', (string)(Tools::getValue("nc_body_gg")));
            Configuration::updateValue('NC_BODY_IM_BG_REPEAT', (int)(Tools::getValue("nc_body_im_bg_repeat")));
            Configuration::updateValue('NC_BODY_IM_BG_POSITION', (int)(Tools::getValue("nc_body_im_bg_position")));
            Configuration::updateValue('NC_BODY_IM_BG_FIXED', (int)(Tools::getValue("nc_body_im_bg_fixed")));
            Configuration::updateValue('RC_GRADIENT_SCHEME', (string)(Tools::getValue("gradient_scheme")));
            Configuration::updateValue('RC_DISPLAY_GRADIENT', (string)(Tools::getValue("display_gradient")));
            Configuration::updateValue('RC_BODY_BG_PATTERN', (string)(Tools::getValue("body_bg_pattern")));
            Configuration::updateValue('NC_MAIN_BGS', (string)(Tools::getValue("nc_main_bg")));
            Configuration::updateValue('NC_MAIN_BC', (string)(Tools::getValue("nc_main_bc")));
            Configuration::updateValue('NC_MAIN_GS', (string)(Tools::getValue("nc_main_gs")));
            Configuration::updateValue('NC_MAIN_GE', (string)(Tools::getValue("nc_main_ge")));
            Configuration::updateValue('NC_MAIN_GG', (string)(Tools::getValue("nc_main_gg")));
            Configuration::updateValue('NC_MAIN_IM_BG_REPEAT', (int)(Tools::getValue("nc_main_im_bg_repeat")));
            Configuration::updateValue('NC_MAIN_IM_BG_POSITION', (int)(Tools::getValue("nc_main_im_bg_position")));
            Configuration::updateValue('NC_MAIN_IM_BG_FIXED', (int)(Tools::getValue("nc_main_im_bg_fixed")));

            // header
            Configuration::updateValue('RC_HEADER_LAY', (string)(Tools::getValue("header_lay")));
            Configuration::updateValue('RC_HEADER_W', (string)(Tools::getValue("header_w")));
            Configuration::updateValue('RC_HEADER_OPA', (string)(Tools::getValue("header_opa")));
            Configuration::updateValue('NC_LOGO_NORMAL', (string)(Tools::getValue("nc_logo_normal")));
            Configuration::updateValue('NC_LOGO_TRANS', (string)(Tools::getValue("nc_logo_trans")));
            Configuration::updateValue('NC_HEADER_TRANSWITCH', (string)(Tools::getValue("nc_header_trans")));
            Configuration::updateValue('NC_HEADER_HIDES', (string)(Tools::getValue("nc_header_hide")));
            Configuration::updateValue('NC_BW_ICONS', (string)(Tools::getValue("nc_bw_icons")));
            Configuration::updateValue('NC_BW_MENU', (string)(Tools::getValue("nc_bw_menu")));
            Configuration::updateValue('RC_H_BG', (string)(Tools::getValue("h_bg")));
            Configuration::updateValue('RC_NORM_ICONS', (string)(Tools::getValue("h_norm_icons")));
            Configuration::updateValue('RC_NORM_QUAN', (string)(Tools::getValue("h_norm_quan")));
            Configuration::updateValue('RC_NORM_QUANBG', (string)(Tools::getValue("h_norm_quanbg")));
            Configuration::updateValue('RC_NORM_LOGGED', (string)(Tools::getValue("h_norm_logged")));
            Configuration::updateValue('RC_NORM_LINK', (string)(Tools::getValue("h_norm_link")));
            Configuration::updateValue('RC_NORM_LINKH', (string)(Tools::getValue("h_norm_linkh")));
            Configuration::updateValue('RC_NORM_EFFECT', (string)(Tools::getValue("h_norm_effect")));
            Configuration::updateValue('RC_NORM_SBORDER', (string)(Tools::getValue("h_norm_sborder")));
            Configuration::updateValue('RC_TRANS_ICONS', (string)(Tools::getValue("h_trans_icons")));
            Configuration::updateValue('RC_TRANS_QUAN', (string)(Tools::getValue("h_trans_quan")));
            Configuration::updateValue('RC_TRANS_QUANBG', (string)(Tools::getValue("h_trans_quanbg")));
            Configuration::updateValue('RC_TRANS_LOGGED', (string)(Tools::getValue("h_trans_logged")));
            Configuration::updateValue('RC_TRANS_LINK', (string)(Tools::getValue("h_trans_link")));
            Configuration::updateValue('RC_TRANS_LINKH', (string)(Tools::getValue("h_trans_linkh")));
            Configuration::updateValue('RC_TRANS_EFFECT', (string)(Tools::getValue("h_trans_effect")));
            Configuration::updateValue('RC_TRANS_SBORDER', (string)(Tools::getValue("h_trans_sborder")));
            Configuration::updateValue('RC_HEADER_NBG', (string)(Tools::getValue("header_nbg")));
            Configuration::updateValue('RC_HEADER_NB', (string)(Tools::getValue("header_nb")));
            Configuration::updateValue('RC_HEADER_NT', (string)(Tools::getValue("header_nt")));
            Configuration::updateValue('RC_HEADER_NL', (string)(Tools::getValue("header_nl")));
            Configuration::updateValue('RC_HEADER_NLH', (string)(Tools::getValue("header_nlh")));
            Configuration::updateValue('NC_CLS', (string)(Tools::getValue("nc_cl")));
            Configuration::updateValue('NC_CLLS', (string)(Tools::getValue("nc_cll")));
            Configuration::updateValue('RC_HEADER_NS', (string)(Tools::getValue("header_ns")));
            Configuration::updateValue('RC_HEADER_NBS', (string)(Tools::getValue("header_nbs")));
            Configuration::updateValue('NC_TOPPANEL_LAYS', (string)(Tools::getValue("nc_toppanel_lay")));
            Configuration::updateValue('RC_CLICK_LAY_M', (string)(Tools::getValue("click_lay_m")));
            Configuration::updateValue('RC_CLICK_LAY_S', (string)(Tools::getValue("click_lay_s")));
            Configuration::updateValue('RC_CLICK_LAY_C', (string)(Tools::getValue("click_lay_c")));
            Configuration::updateValue('RC_CLICK_LAY_A', (string)(Tools::getValue("click_lay_a")));
            Configuration::updateValue('NC_M_LAYOUT_S', (string)(Tools::getValue("nc_m_layout")));
            Configuration::updateValue('NC_M_ICON', (string)(Tools::getValue("nc_m_icon")));
            Configuration::updateValue('NC_M_UNDER_S', (string)(Tools::getValue("nc_m_under")));
            Configuration::updateValue('NC_M_OVERRIDE_S', (string)(Tools::getValue("nc_m_override")));
            Configuration::updateValue('RC_M_POPUP_LLINK', (string)(Tools::getValue("m_popup_llink")));
            Configuration::updateValue('RC_M_POPUP_LLINK_HOVER', (string)(Tools::getValue("m_popup_llink_hover")));
            Configuration::updateValue('RC_M_POPUP_LBG', (string)(Tools::getValue("m_popup_lbg")));
            Configuration::updateValue('RC_M_POPUP_LCHEVRON', (string)(Tools::getValue("m_popup_lchevron")));
            Configuration::updateValue('RC_M_POPUP_LBORDER', (string)(Tools::getValue("m_popup_lborder")));
            Configuration::updateValue('NC_M_BR_S', (string)(Tools::getValue("nc_m_br")));
            Configuration::updateValue('RC_SEARCH_LAY', (string)(Tools::getValue("search_lay")));
            Configuration::updateValue('NC_I_SEARCHS', (string)(Tools::getValue("nc_i_search")));
            Configuration::updateValue('NC_SEARCH_TAGS', (string)(Tools::getValue("nc_search_tags")));
            Configuration::updateValue('NC_SEARCH_PRODS', (string)(Tools::getValue("nc_search_prods")));
            Configuration::updateValue('RC_SEARCH_BR', (string)(Tools::getValue("search_br")));
            Configuration::updateValue('RC_CART_LAY', (string)(Tools::getValue("cart_lay")));
            Configuration::updateValue('RC_CART_ICON', (string)(Tools::getValue("cart_icon")));
            Configuration::updateValue('RC_ACC_LAY', (string)(Tools::getValue("acc_lay")));
            Configuration::updateValue('RC_ACC_ICON', (string)(Tools::getValue("acc_icon")));
            Configuration::updateValue('RC_ACC_NAME', (string)(Tools::getValue("acc_name")));

            // body design
            Configuration::updateValue('RC_G_BG_CONTENT', (string)(Tools::getValue("g_bg_content")));
            Configuration::updateValue('RC_G_BORDER', (string)(Tools::getValue("g_border")));
            Configuration::updateValue('RC_G_BODY_TEXT', (string)(Tools::getValue("g_body_text")));
            Configuration::updateValue('RC_G_BODY_COMMENT', (string)(Tools::getValue("g_body_comment")));
            Configuration::updateValue('RC_G_BODY_LINK', (string)(Tools::getValue("g_body_link")));
            Configuration::updateValue('RC_G_BODY_LINK_HOVER', (string)(Tools::getValue("g_body_link_hover")));
            Configuration::updateValue('RC_G_LINK_EFFECT', (string)(Tools::getValue("g_link_effect")));
            Configuration::updateValue('RC_G_LINK_EFFECTC', (string)(Tools::getValue("g_link_effectc")));
            Configuration::updateValue('RC_G_FORMS', (string)(Tools::getValue("g_form")));
            Configuration::updateValue('RC_LABEL', (string)(Tools::getValue("g_label")));
            Configuration::updateValue('RC_G_HEADER', (string)(Tools::getValue("g_header")));
            Configuration::updateValue('RC_CON_POS', (string)(Tools::getValue("con_pos")));
            Configuration::updateValue('RC_CON_PRO', (string)(Tools::getValue("con_pro")));
            Configuration::updateValue('RC_CON_BRA', (string)(Tools::getValue("con_bra")));
            Configuration::updateValue('RC_CON_SALE', (string)(Tools::getValue("con_sale")));
            Configuration::updateValue('RC_G_HB', (string)(Tools::getValue("g_hb")));
            Configuration::updateValue('RC_G_HC', (string)(Tools::getValue("g_hc")));
            Configuration::updateValue('RC_G_NORMAL_BORDER', (string)(Tools::getValue("g_normal_border")));
            Configuration::updateValue('RC_G_EXTRA_BORDER', (string)(Tools::getValue("g_extra_border")));
            Configuration::updateValue('RC_FANCY_NBG', (string)(Tools::getValue("g_fancy_nbg")));
            Configuration::updateValue('RC_FANCY_NC', (string)(Tools::getValue("g_fancy_nc")));

            Configuration::updateValue('RC_B_NORMAL_BG', (string)(Tools::getValue("b_normal_bg")));
            Configuration::updateValue('RC_B_NORMAL_BORDER', (string)(Tools::getValue("b_normal_border")));
            Configuration::updateValue('RC_B_NORMAL_COLOR', (string)(Tools::getValue("b_normal_color")));
            Configuration::updateValue('RC_B_NORMAL_BG_HOVER', (string)(Tools::getValue("b_normal_bg_hover")));
            Configuration::updateValue('RC_B_NORMAL_BORDER_HOVER', (string)(Tools::getValue("b_normal_border_hover")));
            Configuration::updateValue('RC_B_NORMAL_COLOR_HOVER', (string)(Tools::getValue("b_normal_color_hover")));
            Configuration::updateValue('RC_B_EX_BG', (string)(Tools::getValue("b_ex_bg")));
            Configuration::updateValue('RC_B_EX_BORDER', (string)(Tools::getValue("b_ex_border")));
            Configuration::updateValue('RC_B_EX_COLOR', (string)(Tools::getValue("b_ex_color")));
            Configuration::updateValue('NC_B_RADIUSS', (string)(Tools::getValue("nc_b_radius")));
            Configuration::updateValue('NC_B_SHS', (string)(Tools::getValue("nc_b_sh")));

            Configuration::updateValue('RC_I_BG', (string)(Tools::getValue("i_bg")));
            Configuration::updateValue('RC_I_COLOR', (string)(Tools::getValue("i_color")));
            Configuration::updateValue('RC_I_B_COLOR', (string)(Tools::getValue("i_b_color")));
            Configuration::updateValue('RC_I_BG_FOCUS', (string)(Tools::getValue("i_bg_focus")));
            Configuration::updateValue('RC_I_COLOR_FOCUS', (string)(Tools::getValue("i_color_focus")));
            Configuration::updateValue('RC_I_B_FOCUS', (string)(Tools::getValue("i_b_focus")));
            Configuration::updateValue('RC_I_B_RADIUS', (string)(Tools::getValue("i_b_radius")));
            Configuration::updateValue('RC_I_PH', (string)(Tools::getValue("i_ph")));
            Configuration::updateValue('RC_RC_BG_ACTIVE', (string)(Tools::getValue("rc_bg_active")));

            Configuration::updateValue('NC_LOADERS', (string)(Tools::getValue("nc_loader")));
            Configuration::updateValue('NC_LOADER_LAYS', (string)(Tools::getValue("nc_loader_lay")));
            Configuration::updateValue('NC_LOADER_BG', (string)(Tools::getValue("nc_loader_bg")));
            Configuration::updateValue('NC_LOADER_COLOR', (string)(Tools::getValue("nc_loader_color")));
            Configuration::updateValue('NC_LOADER_COLOR2', (string)(Tools::getValue("nc_loader_color2")));
            Configuration::updateValue('NC_LOADER_LOGOS', (string)(Tools::getValue("nc_loader_logo")));
            Configuration::updateValue('NC_LOGO_LOADER', (string)(Tools::getValue("nc_logo_loader")));

            // Homepage content
            Configuration::updateValue('NC_HT_BGS', (string)(Tools::getValue("nc_ht_bg")));
            Configuration::updateValue('NC_HT_BC', (string)(Tools::getValue("nc_ht_bc")));
            Configuration::updateValue('NC_HT_GS', (string)(Tools::getValue("nc_ht_gs")));
            Configuration::updateValue('NC_HT_GE', (string)(Tools::getValue("nc_ht_ge")));
            Configuration::updateValue('NC_HT_GG', (string)(Tools::getValue("nc_ht_gg")));
            Configuration::updateValue('NC_HT_IM_BG_REPEAT', (int)(Tools::getValue("nc_ht_im_bg_repeat")));
            Configuration::updateValue('NC_HT_IM_BG_POSITION', (int)(Tools::getValue("nc_ht_im_bg_position")));
            Configuration::updateValue('NC_HT_IM_BG_FIXED', (int)(Tools::getValue("nc_ht_im_bg_fixed")));
            Configuration::updateValue('NC_HT_TOPS', (int)(Tools::getValue("nc_ht_top")));
            Configuration::updateValue('NC_HT_BOTS', (int)(Tools::getValue("nc_ht_bot")));
            Configuration::updateValue('NC_HT_PAD', (int)(Tools::getValue("nc_ht_pad")));
            Configuration::updateValue('NC_HT_WIDTH', (int)(Tools::getValue("nc_ht_width")));
            Configuration::updateValue('NC_HM_PAD', (int)(Tools::getValue("nc_hm_pad")));
            Configuration::updateValue('NC_HM_WIDTH', (int)(Tools::getValue("nc_hm_width")));

            Configuration::updateValue('NC_HM_BGS', (string)(Tools::getValue("nc_hm_bg")));
            Configuration::updateValue('NC_HM_BC', (string)(Tools::getValue("nc_hm_bc")));
            Configuration::updateValue('NC_HM_GS', (string)(Tools::getValue("nc_hm_gs")));
            Configuration::updateValue('NC_HM_GE', (string)(Tools::getValue("nc_hm_ge")));
            Configuration::updateValue('NC_HM_GG', (string)(Tools::getValue("nc_hm_gg")));
            Configuration::updateValue('NC_HM_IM_BG_REPEAT', (int)(Tools::getValue("nc_hm_im_bg_repeat")));
            Configuration::updateValue('NC_HM_IM_BG_POSITION', (int)(Tools::getValue("nc_hm_im_bg_position")));
            Configuration::updateValue('NC_HM_IM_BG_FIXED', (int)(Tools::getValue("nc_hm_im_bg_fixed")));
            Configuration::updateValue('NC_HM_TOPS', (string)(Tools::getValue("nc_hm_top")));
            Configuration::updateValue('NC_HM_BOTS', (string)(Tools::getValue("nc_hm_bot")));

            Configuration::updateValue('NC_HB_BGS', (string)(Tools::getValue("nc_hb_bg")));
            Configuration::updateValue('NC_HB_BC', (string)(Tools::getValue("nc_hb_bc")));
            Configuration::updateValue('NC_HB_GS', (string)(Tools::getValue("nc_hb_gs")));
            Configuration::updateValue('NC_HB_GE', (string)(Tools::getValue("nc_hb_ge")));
            Configuration::updateValue('NC_HB_GG', (string)(Tools::getValue("nc_hb_gg")));
            Configuration::updateValue('NC_HB_IM_BG_REPEAT', (int)(Tools::getValue("nc_hb_im_bg_repeat")));
            Configuration::updateValue('NC_HB_IM_BG_POSITION', (int)(Tools::getValue("nc_hb_im_bg_position")));
            Configuration::updateValue('NC_HB_IM_BG_FIXED', (int)(Tools::getValue("nc_hb_im_bg_fixed")));
            Configuration::updateValue('NC_HB_TOPS', (int)(Tools::getValue("nc_hb_top")));
            Configuration::updateValue('NC_HB_BOTS', (int)(Tools::getValue("nc_hb_bot")));

            Configuration::updateValue('RC_BAN_SPA_TOPS', (string)(Tools::getValue("ban_spa_top")));
            Configuration::updateValue('RC_BAN_TS_TOPS', (string)(Tools::getValue("ban_ts_top")));
            Configuration::updateValue('RC_BAN_BS_TOPS', (string)(Tools::getValue("ban_bs_top")));
            Configuration::updateValue('RC_BAN_W_TOP', (string)(Tools::getValue("ban_w_top")));
            Configuration::updateValue('RC_BAN_SPA_HOME', (string)(Tools::getValue("ban_spa_home")));
            Configuration::updateValue('RC_BAN_TS_HOME', (string)(Tools::getValue("ban_ts_home")));
            Configuration::updateValue('RC_BAN_BS_HOME', (string)(Tools::getValue("ban_bs_home")));
            Configuration::updateValue('RC_BAN_W_HOME', (string)(Tools::getValue("ban_w_home")));
            Configuration::updateValue('RC_BAN_SPA_BEFOOT', (string)(Tools::getValue("ban_spa_befoot")));
            Configuration::updateValue('RC_BAN_TS_BEFOOT', (string)(Tools::getValue("ban_ts_befoot")));
            Configuration::updateValue('RC_BAN_BS_BEFOOT', (string)(Tools::getValue("ban_bs_befoot")));
            Configuration::updateValue('RC_BAN_W_BEFOOT', (string)(Tools::getValue("ban_w_befoot")));
            Configuration::updateValue('RC_BAN_SPA_FOOT', (string)(Tools::getValue("ban_spa_foot")));
            Configuration::updateValue('RC_BAN_TS_FOOT', (string)(Tools::getValue("ban_ts_foot")));
            Configuration::updateValue('RC_BAN_BS_FOOT', (string)(Tools::getValue("ban_bs_foot")));
            Configuration::updateValue('RC_BAN_SPA_SIDEMOBILEMENU', (string)(Tools::getValue("ban_spa_sidemobilemenu")));
            Configuration::updateValue('RC_BAN_TS_SIDEMOBILEMENU', (string)(Tools::getValue("ban_ts_sidemobilemenu")));
            Configuration::updateValue('RC_BAN_BS_SIDEMOBILEMENU', (string)(Tools::getValue("ban_bs_sidemobilemenu")));
            Configuration::updateValue('RC_BAN_SPA_PRODUCT', (string)(Tools::getValue("ban_spa_product")));
            Configuration::updateValue('RC_BAN_TS_PRODUCT', (string)(Tools::getValue("ban_ts_product")));
            Configuration::updateValue('RC_BAN_BS_PRODUCT', (string)(Tools::getValue("ban_bs_product")));
            Configuration::updateValue('RC_BAN_TS_LEFT', (string)(Tools::getValue("ban_ts_left")));
            Configuration::updateValue('RC_BAN_BS_LEFT', (string)(Tools::getValue("ban_bs_left")));
            Configuration::updateValue('RC_BAN_TS_RIGHT', (string)(Tools::getValue("ban_ts_right")));
            Configuration::updateValue('RC_BAN_BS_RIGHT', (string)(Tools::getValue("ban_bs_right")));
            Configuration::updateValue('NC_HP_TITLE', (string)(Tools::getValue("nc_hp_title")));
            Configuration::updateValue('NC_HP_ALIGN', (string)(Tools::getValue("nc_hp_align")));

            Configuration::updateValue('NC_FEAT_LAYS', (string)(Tools::getValue("nc_feat_lay")));
            Configuration::updateValue('NC_FEAT_PERS', (string)(Tools::getValue("nc_feat_per")));
            Configuration::updateValue('NC_FEAT_SPAS', (string)(Tools::getValue("nc_feat_spa")));
            Configuration::updateValue('NC_FEAT_SLIDERS', (string)(Tools::getValue("nc_feat_slider")));
            Configuration::updateValue('NC_FEAT_AUTOS', (string)(Tools::getValue("nc_feat_auto")));
            Configuration::updateValue('NC_FEAT_BG', (string)(Tools::getValue("nc_feat_bg")));
            Configuration::updateValue('NC_FEAT_BC', (string)(Tools::getValue("nc_feat_bc")));
            Configuration::updateValue('NC_FEAT_GS', (string)(Tools::getValue("nc_feat_gs")));
            Configuration::updateValue('NC_FEAT_GE', (string)(Tools::getValue("nc_feat_ge")));
            Configuration::updateValue('NC_FEAT_GG', (string)(Tools::getValue("nc_feat_gg")));
            Configuration::updateValue('NC_FEAT_TITLE', (string)(Tools::getValue("nc_feat_title")));
            Configuration::updateValue('NC_FEAT_TEXT', (string)(Tools::getValue("nc_feat_text")));
            Configuration::updateValue('NC_FEAT_TEXTBG', (string)(Tools::getValue("nc_feat_textbg")));
            Configuration::updateValue('NC_FEAT_WIDTH', (string)(Tools::getValue("nc_feat_width")));
            Configuration::updateValue('NC_FEAT_TOPS', (string)(Tools::getValue("nc_feat_top")));
            Configuration::updateValue('NC_FEAT_BOTS', (string)(Tools::getValue("nc_feat_bot")));

            Configuration::updateValue('NC_BEST_LAY', (string)(Tools::getValue("nc_best_lay")));
            Configuration::updateValue('NC_BEST_PER', (string)(Tools::getValue("nc_best_per")));
            Configuration::updateValue('NC_BEST_SPA', (string)(Tools::getValue("nc_best_spa")));
            Configuration::updateValue('NC_BEST_SLIDER', (string)(Tools::getValue("nc_best_slider")));
            Configuration::updateValue('NC_BEST_AUTO', (string)(Tools::getValue("nc_best_auto")));
            Configuration::updateValue('NC_BEST_BG', (string)(Tools::getValue("nc_best_bg")));
            Configuration::updateValue('NC_BEST_BC', (string)(Tools::getValue("nc_best_bc")));
            Configuration::updateValue('NC_BEST_GS', (string)(Tools::getValue("nc_best_gs")));
            Configuration::updateValue('NC_BEST_GE', (string)(Tools::getValue("nc_best_ge")));
            Configuration::updateValue('NC_BEST_GG', (string)(Tools::getValue("nc_best_gg")));
            Configuration::updateValue('NC_BEST_TITLE', (string)(Tools::getValue("nc_best_title")));
            Configuration::updateValue('NC_BEST_TEXT', (string)(Tools::getValue("nc_best_text")));
            Configuration::updateValue('NC_BEST_TEXTBG', (string)(Tools::getValue("nc_best_textbg")));
            Configuration::updateValue('NC_BEST_WIDTH', (string)(Tools::getValue("nc_best_width")));
            Configuration::updateValue('NC_BEST_TOPS', (string)(Tools::getValue("nc_best_top")));
            Configuration::updateValue('NC_BEST_BOTS', (string)(Tools::getValue("nc_best_bot")));

            Configuration::updateValue('NC_NEW_LAY', (string)(Tools::getValue("nc_new_lay")));
            Configuration::updateValue('NC_NEW_PER', (string)(Tools::getValue("nc_new_per")));
            Configuration::updateValue('NC_NEW_SPA', (string)(Tools::getValue("nc_new_spa")));
            Configuration::updateValue('NC_NEW_SLIDER', (string)(Tools::getValue("nc_new_slider")));
            Configuration::updateValue('NC_NEW_AUTO', (string)(Tools::getValue("nc_new_auto")));
            Configuration::updateValue('NC_NEW_BG', (string)(Tools::getValue("nc_new_bg")));
            Configuration::updateValue('NC_NEW_BC', (string)(Tools::getValue("nc_new_bc")));
            Configuration::updateValue('NC_NEW_GS', (string)(Tools::getValue("nc_new_gs")));
            Configuration::updateValue('NC_NEW_GE', (string)(Tools::getValue("nc_new_ge")));
            Configuration::updateValue('NC_NEW_GG', (string)(Tools::getValue("nc_new_gg")));
            Configuration::updateValue('NC_NEW_TITLE', (string)(Tools::getValue("nc_new_title")));
            Configuration::updateValue('NC_NEW_TEXT', (string)(Tools::getValue("nc_new_text")));
            Configuration::updateValue('NC_NEW_TEXTBG', (string)(Tools::getValue("nc_new_textbg")));
            Configuration::updateValue('NC_NEW_WIDTH', (string)(Tools::getValue("nc_new_width")));
            Configuration::updateValue('NC_NEW_TOPS', (string)(Tools::getValue("nc_new_top")));
            Configuration::updateValue('NC_NEW_BOTS', (string)(Tools::getValue("nc_new_bot")));

            Configuration::updateValue('NC_SALE_LAY', (string)(Tools::getValue("nc_sale_lay")));
            Configuration::updateValue('NC_SALE_PER', (string)(Tools::getValue("nc_sale_per")));
            Configuration::updateValue('NC_SALE_SPA', (string)(Tools::getValue("nc_sale_spa")));
            Configuration::updateValue('NC_SALE_SLIDER', (string)(Tools::getValue("nc_sale_slider")));
            Configuration::updateValue('NC_SALE_AUTO', (string)(Tools::getValue("nc_sale_auto")));
            Configuration::updateValue('NC_SALE_BG', (string)(Tools::getValue("nc_sale_bg")));
            Configuration::updateValue('NC_SALE_BC', (string)(Tools::getValue("nc_sale_bc")));
            Configuration::updateValue('NC_SALE_GS', (string)(Tools::getValue("nc_sale_gs")));
            Configuration::updateValue('NC_SALE_GE', (string)(Tools::getValue("nc_sale_ge")));
            Configuration::updateValue('NC_SALE_GG', (string)(Tools::getValue("nc_sale_gg")));
            Configuration::updateValue('NC_SALE_TITLE', (string)(Tools::getValue("nc_sale_title")));
            Configuration::updateValue('NC_SALE_TEXT', (string)(Tools::getValue("nc_sale_text")));
            Configuration::updateValue('NC_SALE_TEXTBG', (string)(Tools::getValue("nc_sale_textbg")));
            Configuration::updateValue('NC_SALE_WIDTH', (string)(Tools::getValue("nc_sale_width")));
            Configuration::updateValue('NC_SALE_TOPS', (string)(Tools::getValue("nc_sale_top")));
            Configuration::updateValue('NC_SALE_BOTS', (string)(Tools::getValue("nc_sale_bot")));

            Configuration::updateValue('NC_CC1_LAY', (string)(Tools::getValue("nc_cc1_lay")));
            Configuration::updateValue('NC_CC1_PER', (string)(Tools::getValue("nc_cc1_per")));
            Configuration::updateValue('NC_CC1_SPA', (string)(Tools::getValue("nc_cc1_spa")));
            Configuration::updateValue('NC_CC1_SLIDER', (string)(Tools::getValue("nc_cc1_slider")));
            Configuration::updateValue('NC_CC1_AUTO', (string)(Tools::getValue("nc_cc1_auto")));
            Configuration::updateValue('NC_CC1_BG', (string)(Tools::getValue("nc_cc1_bg")));
            Configuration::updateValue('NC_CC1_BC', (string)(Tools::getValue("nc_cc1_bc")));
            Configuration::updateValue('NC_CC1_GS', (string)(Tools::getValue("nc_cc1_gs")));
            Configuration::updateValue('NC_CC1_GE', (string)(Tools::getValue("nc_cc1_ge")));
            Configuration::updateValue('NC_CC1_GG', (string)(Tools::getValue("nc_cc1_gg")));
            Configuration::updateValue('NC_CC1_TITLE', (string)(Tools::getValue("nc_cc1_title")));
            Configuration::updateValue('NC_CC1_TEXT', (string)(Tools::getValue("nc_cc1_text")));
            Configuration::updateValue('NC_CC1_TEXTBG', (string)(Tools::getValue("nc_cc1_textbg")));
            Configuration::updateValue('NC_CC1_WIDTH', (string)(Tools::getValue("nc_cc1_width")));
            Configuration::updateValue('NC_CC1_TOPS', (string)(Tools::getValue("nc_cc1_top")));
            Configuration::updateValue('NC_CC1_BOTS', (string)(Tools::getValue("nc_cc1_bot")));

            Configuration::updateValue('NC_CC2_LAY', (string)(Tools::getValue("nc_cc2_lay")));
            Configuration::updateValue('NC_CC2_PER', (string)(Tools::getValue("nc_cc2_per")));
            Configuration::updateValue('NC_CC2_SPA', (string)(Tools::getValue("nc_cc2_spa")));
            Configuration::updateValue('NC_CC2_SLIDER', (string)(Tools::getValue("nc_cc2_slider")));
            Configuration::updateValue('NC_CC2_AUTO', (string)(Tools::getValue("nc_cc2_auto")));
            Configuration::updateValue('NC_CC2_BG', (string)(Tools::getValue("nc_cc2_bg")));
            Configuration::updateValue('NC_CC2_BC', (string)(Tools::getValue("nc_cc2_bc")));
            Configuration::updateValue('NC_CC2_GS', (string)(Tools::getValue("nc_cc2_gs")));
            Configuration::updateValue('NC_CC2_GE', (string)(Tools::getValue("nc_cc2_ge")));
            Configuration::updateValue('NC_CC2_GG', (string)(Tools::getValue("nc_cc2_gg")));
            Configuration::updateValue('NC_CC2_TITLE', (string)(Tools::getValue("nc_cc2_title")));
            Configuration::updateValue('NC_CC2_TEXT', (string)(Tools::getValue("nc_cc2_text")));
            Configuration::updateValue('NC_CC2_TEXTBG', (string)(Tools::getValue("nc_cc2_textbg")));
            Configuration::updateValue('NC_CC2_WIDTH', (string)(Tools::getValue("nc_cc2_width")));
            Configuration::updateValue('NC_CC2_TOPS', (string)(Tools::getValue("nc_cc2_top")));
            Configuration::updateValue('NC_CC2_BOTS', (string)(Tools::getValue("nc_cc2_bot")));

            Configuration::updateValue('NC_CC3_LAY', (string)(Tools::getValue("nc_cc3_lay")));
            Configuration::updateValue('NC_CC3_PER', (string)(Tools::getValue("nc_cc3_per")));
            Configuration::updateValue('NC_CC3_SPA', (string)(Tools::getValue("nc_cc3_spa")));
            Configuration::updateValue('NC_CC3_SLIDER', (string)(Tools::getValue("nc_cc3_slider")));
            Configuration::updateValue('NC_CC3_AUTO', (string)(Tools::getValue("nc_cc3_auto")));
            Configuration::updateValue('NC_CC3_BG', (string)(Tools::getValue("nc_cc3_bg")));
            Configuration::updateValue('NC_CC3_BC', (string)(Tools::getValue("nc_cc3_bc")));
            Configuration::updateValue('NC_CC3_GS', (string)(Tools::getValue("nc_cc3_gs")));
            Configuration::updateValue('NC_CC3_GE', (string)(Tools::getValue("nc_cc3_ge")));
            Configuration::updateValue('NC_CC3_GG', (string)(Tools::getValue("nc_cc3_gg")));
            Configuration::updateValue('NC_CC3_TITLE', (string)(Tools::getValue("nc_cc3_title")));
            Configuration::updateValue('NC_CC3_TEXT', (string)(Tools::getValue("nc_cc3_text")));
            Configuration::updateValue('NC_CC3_TEXTBG', (string)(Tools::getValue("nc_cc3_textbg")));
            Configuration::updateValue('NC_CC3_WIDTH', (string)(Tools::getValue("nc_cc3_width")));
            Configuration::updateValue('NC_CC3_TOPS', (string)(Tools::getValue("nc_cc3_top")));
            Configuration::updateValue('NC_CC3_BOTS', (string)(Tools::getValue("nc_cc3_bot")));

            Configuration::updateValue('RC_BRAND_W', (string)(Tools::getValue("brand_w")));
            Configuration::updateValue('RC_BRAND_PER_ROW', (string)(Tools::getValue("brand_per_row")));
            Configuration::updateValue('RC_BRAND_NAME', (string)(Tools::getValue("brand_name")));
            Configuration::updateValue('RC_BRAND_NAME_HOVER', (string)(Tools::getValue("brand_name_hover")));

            // page content
            Configuration::updateValue('NC_OT_BGS', (string)(Tools::getValue("nc_ot_bg")));
            Configuration::updateValue('NC_OT_BC', (string)(Tools::getValue("nc_ot_bc")));
            Configuration::updateValue('NC_OT_GS', (string)(Tools::getValue("nc_ot_gs")));
            Configuration::updateValue('NC_OT_GE', (string)(Tools::getValue("nc_ot_ge")));
            Configuration::updateValue('NC_OT_GG', (string)(Tools::getValue("nc_ot_gg")));
            Configuration::updateValue('NC_OT_IM_BG_REPEAT', (int)(Tools::getValue("nc_ot_im_bg_repeat")));
            Configuration::updateValue('NC_OT_IM_BG_POSITION', (int)(Tools::getValue("nc_ot_im_bg_position")));
            Configuration::updateValue('NC_OT_IM_BG_FIXED', (int)(Tools::getValue("nc_ot_im_bg_fixed")));
            Configuration::updateValue('NC_OT_PAD', (int)(Tools::getValue("nc_ot_pad")));
            Configuration::updateValue('NC_OT_WIDTH', (int)(Tools::getValue("nc_ot_width")));
            Configuration::updateValue('NC_OT_TOPS', (int)(Tools::getValue("nc_ot_top")));
            Configuration::updateValue('NC_OT_BOTS', (int)(Tools::getValue("nc_ot_bot")));

            Configuration::updateValue('NC_OM_BGS', (string)(Tools::getValue("nc_om_bg")));
            Configuration::updateValue('NC_OM_BC', (string)(Tools::getValue("nc_om_bc")));
            Configuration::updateValue('NC_OM_GS', (string)(Tools::getValue("nc_om_gs")));
            Configuration::updateValue('NC_OM_GE', (string)(Tools::getValue("nc_om_ge")));
            Configuration::updateValue('NC_OM_GG', (string)(Tools::getValue("nc_om_gg")));
            Configuration::updateValue('NC_OM_IM_BG_REPEAT', (int)(Tools::getValue("nc_om_im_bg_repeat")));
            Configuration::updateValue('NC_OM_IM_BG_POSITION', (int)(Tools::getValue("nc_om_im_bg_position")));
            Configuration::updateValue('NC_OM_IM_BG_FIXED', (int)(Tools::getValue("nc_om_im_bg_fixed")));
            Configuration::updateValue('NC_OM_TOPS', (int)(Tools::getValue("nc_om_top")));
            Configuration::updateValue('NC_OM_BOTS', (int)(Tools::getValue("nc_om_bot")));

            Configuration::updateValue('NC_OB_BGS', (string)(Tools::getValue("nc_ob_bg")));
            Configuration::updateValue('NC_OB_BC', (string)(Tools::getValue("nc_ob_bc")));
            Configuration::updateValue('NC_OB_GS', (string)(Tools::getValue("nc_ob_gs")));
            Configuration::updateValue('NC_OB_GE', (string)(Tools::getValue("nc_ob_ge")));
            Configuration::updateValue('NC_OB_GG', (string)(Tools::getValue("nc_ob_gg")));
            Configuration::updateValue('NC_OB_IM_BG_REPEAT', (int)(Tools::getValue("nc_ob_im_bg_repeat")));
            Configuration::updateValue('NC_OB_IM_BG_POSITION', (int)(Tools::getValue("nc_ob_im_bg_position")));
            Configuration::updateValue('NC_OB_IM_BG_FIXED', (int)(Tools::getValue("nc_ob_im_bg_fixed")));
            Configuration::updateValue('NC_OB_TOPS', (string)(Tools::getValue("nc_ob_top")));
            Configuration::updateValue('NC_OB_BOTS', (string)(Tools::getValue("nc_ob_bot")));

            Configuration::updateValue('RC_W_ALL', (int)(Tools::getValue("w_all")));
            Configuration::updateValue('RC_W_CAT', (int)(Tools::getValue("w_cat")));
            Configuration::updateValue('RC_W_PRO', (int)(Tools::getValue("w_pro")));
            Configuration::updateValue('RC_W_CON', (int)(Tools::getValue("w_con")));
            Configuration::updateValue('RC_W_CART', (int)(Tools::getValue("w_cart")));
            Configuration::updateValue('RC_W_ACC', (int)(Tools::getValue("w_acc")));
            Configuration::updateValue('RC_W_CMS', (int)(Tools::getValue("w_cms")));
            Configuration::updateValue('RC_W_BLOG', (int)(Tools::getValue("w_blog")));

            // page content
            Configuration::updateValue('RC_B_LAYOUT', (string)(Tools::getValue("b_layout")));
            Configuration::updateValue('RC_B_POS_CAT', (string)(Tools::getValue("b_pos_cat")));
            Configuration::updateValue('RC_B_POS_PRO', (string)(Tools::getValue("b_pos_pro")));
            Configuration::updateValue('RC_B_TOPS', (string)(Tools::getValue("b_top")));
            Configuration::updateValue('RC_B_BOTS', (string)(Tools::getValue("b_bot")));
            Configuration::updateValue('RC_B_W', (string)(Tools::getValue("b_w")));
            Configuration::updateValue('RC_B_LINK', (string)(Tools::getValue("b_link")));
            Configuration::updateValue('RC_B_LINK_HOVER', (string)(Tools::getValue("b_link_hover")));
            Configuration::updateValue('RC_B_SEPARATOR', (string)(Tools::getValue("b_separator")));
            Configuration::updateValue('RC_PAGE_BQ_Q', (string)(Tools::getValue("page_bq_q")));
            Configuration::updateValue('RC_CONTACT_ICON', (string)(Tools::getValue("contact_icon")));
            Configuration::updateValue('RC_WARNING_MESSAGE_COLOR', (string)(Tools::getValue("warning_message_color")));
            Configuration::updateValue('RC_SUCCESS_MESSAGE_COLOR', (string)(Tools::getValue("success_message_color")));
            Configuration::updateValue('RC_DANGER_MESSAGE_COLOR', (string)(Tools::getValue("danger_message_color")));

            // Sidebar and filter
            Configuration::updateValue('RC_SIDEBAR_TITLE_MARGIN', (string)(Tools::getValue("sidebar_title_margin")));
            Configuration::updateValue('RC_SIDEBAR_TITLE_B', (string)(Tools::getValue("sidebar_title_b")));
            Configuration::updateValue('RC_SIDEBAR_TITLE_PADDING', (string)(Tools::getValue("sidebar_title_padding")));
            Configuration::updateValue('RC_SIDEBAR_TITLE_BWIDTH', (string)(Tools::getValue("sidebar_title_bwidth")));
            Configuration::updateValue('RC_SIDEBAR_TITLE_BORDER', (string)(Tools::getValue("sidebar_title_border")));

            Configuration::updateValue('RC_SIDEBAR_MARGIN', (string)(Tools::getValue("sidebar_margin")));
            Configuration::updateValue('RC_SIDEBAR_B', (string)(Tools::getValue("sidebar_b")));
            Configuration::updateValue('RC_SIDEBAR_PADDING', (string)(Tools::getValue("sidebar_padding")));
            Configuration::updateValue('RC_SIDEBAR_BWIDTH', (string)(Tools::getValue("sidebar_bwidth")));
            Configuration::updateValue('RC_SIDEBAR_BORDER', (string)(Tools::getValue("sidebar_border")));
            Configuration::updateValue('RC_SIDEBAR_LINK', (string)(Tools::getValue("sidebar_link")));
            Configuration::updateValue('RC_SIDEBAR_BB', (string)(Tools::getValue("sidebar_bb")));
            Configuration::updateValue('RC_SIDEBAR_BW', (string)(Tools::getValue("sidebar_bw")));
            Configuration::updateValue('RC_SIDEBAR_BR', (string)(Tools::getValue("sidebar_br")));
            Configuration::updateValue('RC_SIDEBAR_BALL', (string)(Tools::getValue("sidebar_ball")));
            Configuration::updateValue('RC_SIDEBAR_BCAT', (string)(Tools::getValue("sidebar_bcat")));
            Configuration::updateValue('RC_SIDEBAR_BFILTER', (string)(Tools::getValue("sidebar_bfilter")));
            Configuration::updateValue('RC_SIDEBAR_BSALE', (string)(Tools::getValue("sidebar_bsale")));

            // Product list
            Configuration::updateValue('NC_SUBCAT_S', (string)(Tools::getValue("nc_subcat")));
            Configuration::updateValue('NC_CAT_NAME_S', (string)(Tools::getValue("nc_cat_name")));
            Configuration::updateValue('NC_CAT_IMG_S', (string)(Tools::getValue("nc_cat_img")));
            Configuration::updateValue('NC_CAT_IMGLAY_S', (string)(Tools::getValue("nc_cat_imglay")));
            Configuration::updateValue('NC_CAT_DESC_S', (string)(Tools::getValue("nc_cat_desc")));
            Configuration::updateValue('RC_PL_NUMBER_COLOR', (string)(Tools::getValue("pl_number_color")));
            Configuration::updateValue('RC_PL_NUMBER_COLOR_HOVER', (string)(Tools::getValue("pl_number_color_hover")));

            Configuration::updateValue('NC_PRODUCT_SWITCH', (string)(Tools::getValue("nc_product_switch")));
            Configuration::updateValue('NC_PRODUCT_MARGIN', (string)(Tools::getValue("nc_product_margin")));

            Configuration::updateValue('RC_PL_LAY', (string)(Tools::getValue("pl_lay")));
            Configuration::updateValue('RC_PL_IMG_BGS', (string)(Tools::getValue("pl_img_bgs")));
            Configuration::updateValue('RC_PL_TEXT_BGS', (string)(Tools::getValue("pl_text_bgs")));
            Configuration::updateValue('NC_PI_B', (string)(Tools::getValue("nc_pi_b")));
            Configuration::updateValue('NC_PI_BW', (string)(Tools::getValue("nc_pi_bw")));
            Configuration::updateValue('NC_PI_BR', (string)(Tools::getValue("nc_pi_br")));
            Configuration::updateValue('NC_PI_C', (string)(Tools::getValue("nc_pi_c")));
            Configuration::updateValue('NC_PI_CH', (string)(Tools::getValue("nc_pi_ch")));
            Configuration::updateValue('RC_PL_TEXT_ALIGN', (string)(Tools::getValue("pl_text_align")));
            Configuration::updateValue('RC_PL_IMG_BG', (string)(Tools::getValue("pl_img_bg")));
            Configuration::updateValue('RC_PL_TEXT_BG', (string)(Tools::getValue("pl_text_bg")));
            Configuration::updateValue('RC_PL_NAME', (string)(Tools::getValue("pl_name")));
            Configuration::updateValue('RC_PL_PRICE', (string)(Tools::getValue("pl_price")));

            Configuration::updateValue('RC_PL_HOVER_LAY', (string)(Tools::getValue("pl_hover_lay")));
            Configuration::updateValue('RC_PL_HOVER_G1', (string)(Tools::getValue("pl_hover_g1")));
            Configuration::updateValue('RC_PL_HOVER_G2', (string)(Tools::getValue("pl_hover_g2")));
            Configuration::updateValue('RC_PL_HOVER_TRANS', (string)(Tools::getValue("pl_hover_trans")));
            Configuration::updateValue('RC_PL_HOVER_BUT', (string)(Tools::getValue("pl_hover_but")));
            Configuration::updateValue('RC_PL_HOVER_BUT_BG', (string)(Tools::getValue("pl_hover_but_bg")));
            Configuration::updateValue('RC_PL_HOVER_BUT_B', (string)(Tools::getValue("pl_hover_but_b")));
            Configuration::updateValue('RC_PL_HOVER_BUTH', (string)(Tools::getValue("pl_hover_buth")));
            Configuration::updateValue('RC_PL_HOVER_BUT_BGH', (string)(Tools::getValue("pl_hover_but_bgh")));
            Configuration::updateValue('RC_PL_HOVER_BUT_BH', (string)(Tools::getValue("pl_hover_but_bh")));
            Configuration::updateValue('RC_PL_HOVER_BUT_OUT', (string)(Tools::getValue("pl_hover_but_out")));
            Configuration::updateValue('RC_PL_HOVER_BUT_BR', (string)(Tools::getValue("pl_hover_but_br")));
            Configuration::updateValue('NC_SECOND_IMG_S', (string)(Tools::getValue("nc_second_img")));
            Configuration::updateValue('NC_COLORS_S', (string)(Tools::getValue("nc_colors")));
            Configuration::updateValue('NC_QVS', (string)(Tools::getValue("nc_qv")));
            Configuration::updateValue('NC_FAVS', (string)(Tools::getValue("nc_fav")));

            Configuration::updateValue('RC_PL_PRODUCT_NEW_BG', (string)(Tools::getValue("pl_product_new_bg")));
            Configuration::updateValue('RC_PL_PRODUCT_NEW_BORDER', (string)(Tools::getValue("pl_product_new_border")));
            Configuration::updateValue('RC_PL_PRODUCT_NEW_COLOR', (string)(Tools::getValue("pl_product_new_color")));
            Configuration::updateValue('RC_PL_PRODUCT_SALE_BG', (string)(Tools::getValue("pl_product_sale_bg")));
            Configuration::updateValue('RC_PL_PRODUCT_SALE_BORDER', (string)(Tools::getValue("pl_product_sale_border")));
            Configuration::updateValue('RC_PL_PRODUCT_SALE_COLOR', (string)(Tools::getValue("pl_product_sale_color")));

            Configuration::updateValue('RC_PP_REVIEWS_STARON', (string)(Tools::getValue("pp_reviews_staron")));
            Configuration::updateValue('RC_PP_REVIEWS_STAROFF', (string)(Tools::getValue("pp_reviews_staroff")));

            Configuration::updateValue('NC_COUNT_DAYS', (string)(Tools::getValue("nc_count_days")));
            Configuration::updateValue('NC_COUNT_BG', (string)(Tools::getValue("nc_count_bg")));
            Configuration::updateValue('NC_COUNT_COLOR', (string)(Tools::getValue("nc_count_color")));
            Configuration::updateValue('NC_COUNT_TIME', (string)(Tools::getValue("nc_count_time")));
            Configuration::updateValue('NC_COUNT_WATCH', (string)(Tools::getValue("nc_count_watch")));
            Configuration::updateValue('NC_COUNT_WATCH_BG', (string)(Tools::getValue("nc_count_watch_bg")));

            Configuration::updateValue('NC_I_QVS', (string)(Tools::getValue("nc_i_qv")));
            Configuration::updateValue('NC_I_DISCOVERS', (string)(Tools::getValue("nc_i_discover")));
            Configuration::updateValue('NC_I_FAVS', (string)(Tools::getValue("nc_i_fav")));
            Configuration::updateValue('NC_AIS', (string)(Tools::getValue("nc_ai")));

            //  Product page
            Configuration::updateValue('RC_PP_LAY', (string)(Tools::getValue("pp_lay")));
            Configuration::updateValue('RC_PP_THUMBS', (string)(Tools::getValue("pp_thumbs")));
            Configuration::updateValue('RC_PP_IMGB', (string)(Tools::getValue("pp_imgb")));
            Configuration::updateValue('RC_PP_IMG_BORDER', (string)(Tools::getValue("pp_img_border")));
            Configuration::updateValue('RC_PP_ICON_BORDER', (string)(Tools::getValue("pp_icon_border")));
            Configuration::updateValue('RC_PP_IMGSPACING', (string)(Tools::getValue("pp_imgspacing")));
            Configuration::updateValue('NC_MOBADOTSS', (string)(Tools::getValue("nc_mobadots")));
            Configuration::updateValue('NC_MOBADOTSCS', (string)(Tools::getValue("nc_mobadotsc")));

            Configuration::updateValue('RC_PP_STICKY', (string)(Tools::getValue("pp_sticky")));
            Configuration::updateValue('RC_PP_PRICE_COLOR', (string)(Tools::getValue("pp_price_color")));
            Configuration::updateValue('RC_PP_PRICE_DIS', (string)(Tools::getValue("pp_price_dis")));
            Configuration::updateValue('RC_PP_ATT_LABEL', (string)(Tools::getValue("pp_att_label")));
            Configuration::updateValue('RC_PP_ATT_COLOR_ACTIVE', (string)(Tools::getValue("pp_att_color_active")));
            Configuration::updateValue('RC_PP_INFO_LABEL', (string)(Tools::getValue("pp_info_label")));
            Configuration::updateValue('RC_PP_INFO_VALUE', (string)(Tools::getValue("pp_info_value")));
            Configuration::updateValue('RC_PP_DISPLAY_Q', (string)(Tools::getValue("pp_display_q")));
            Configuration::updateValue('RC_PP_DISPLAY_REFER', (string)(Tools::getValue("pp_display_refer")));
            Configuration::updateValue('RC_PP_DISPLAY_COND', (string)(Tools::getValue("pp_display_cond")));
            Configuration::updateValue('RC_PP_DISPLAY_BRAND', (string)(Tools::getValue("pp_display_brand")));
            Configuration::updateValue('NC_ACCESS_PERS', (string)(Tools::getValue("nc_access_per")));

            Configuration::updateValue('NC_PP_ADD_BG', (string)(Tools::getValue("nc_pp_add_bg")));
            Configuration::updateValue('NC_PP_ADD_BORDER', (string)(Tools::getValue("nc_pp_add_border")));
            Configuration::updateValue('NC_PP_ADD_COLOR', (string)(Tools::getValue("nc_pp_add_color")));

            Configuration::updateValue('NC_COUNT_PR_TITLE', (string)(Tools::getValue("nc_count_pr_title")));
            Configuration::updateValue('NC_COUNT_PR_BG', (string)(Tools::getValue("nc_count_pr_bg")));
            Configuration::updateValue('NC_COUNT_PR_SEP', (string)(Tools::getValue("nc_count_pr_sep")));
            Configuration::updateValue('NC_COUNT_PR_NUMBERS', (string)(Tools::getValue("nc_count_pr_numbers")));
            Configuration::updateValue('NC_COUNT_PR_COLOR', (string)(Tools::getValue("nc_count_pr_color")));

            Configuration::updateValue('RC_PP_TABS_BG_SW', (string)(Tools::getValue("pp_tabs_bg_sw")));
            Configuration::updateValue('RC_PP_TABS_BG', (string)(Tools::getValue("pp_tabs_bg")));


            // Cart and order
            Configuration::updateValue('RC_O_ADDS', (string)(Tools::getValue("o_add")));
            Configuration::updateValue('RC_O_OPTION', (string)(Tools::getValue("o_option")));
            Configuration::updateValue('RC_O_OPTION_ACTIVE', (string)(Tools::getValue("o_option_active")));
            Configuration::updateValue('RC_O_INFO_TEXT', (string)(Tools::getValue("o_info_text")));

            Configuration::updateValue('RC_LC_C', (string)(Tools::getValue("lc_c")));

            // blog
            Configuration::updateValue('RC_BL_W', (string)(Tools::getValue("bl_w")));
            Configuration::updateValue('RC_BL_ALIGN', (string)(Tools::getValue("bl_align")));
            Configuration::updateValue('RC_BL_LAY', (string)(Tools::getValue("bl_lay")));
            Configuration::updateValue('RC_BL_CONT', (string)(Tools::getValue("bl_cont")));
            Configuration::updateValue('RC_BL_ROW', (string)(Tools::getValue("bl_row")));
            Configuration::updateValue('RC_BL_META_SW', (string)(Tools::getValue("bl_meta_sw")));
            Configuration::updateValue('RC_BL_HEAD', (string)(Tools::getValue("bl_head")));
            Configuration::updateValue('RC_BL_H_TITLE', (string)(Tools::getValue("bl_h_title")));
            Configuration::updateValue('RC_BL_H_TITLE_H', (string)(Tools::getValue("bl_h_title_h")));
            Configuration::updateValue('RC_BL_H_META', (string)(Tools::getValue("bl_h_meta")));
            Configuration::updateValue('RC_BL_H_DESC', (string)(Tools::getValue("bl_h_desc")));
            Configuration::updateValue('RC_BL_META', (string)(Tools::getValue("bl_meta")));

            // footer
            Configuration::updateValue('RC_FOOTER_LAY', (string)(Tools::getValue("footer_lay")));
            Configuration::updateValue('NC_FOOTER_W', (string)(Tools::getValue("nc_footer_w")));
            Configuration::updateValue('NC_LOGO_FOOTER', (string)(Tools::getValue("nc_logo_footer")));
            Configuration::updateValue('NC_FOOT_BGS', (string)(Tools::getValue("nc_foot_bg")));
            Configuration::updateValue('NC_FOOT_BC', (string)(Tools::getValue("nc_foot_bc")));
            Configuration::updateValue('NC_FOOT_GS', (string)(Tools::getValue("nc_foot_gs")));
            Configuration::updateValue('NC_FOOT_GE', (string)(Tools::getValue("nc_foot_ge")));
            Configuration::updateValue('NC_FOOT_GG', (string)(Tools::getValue("nc_foot_gg")));
            Configuration::updateValue('NC_FOOT_IM_BG_REPEAT', (int)(Tools::getValue("nc_foot_im_bg_repeat")));
            Configuration::updateValue('NC_FOOT_IM_BG_POSITION', (int)(Tools::getValue("nc_foot_im_bg_position")));
            Configuration::updateValue('NC_FOOT_IM_BG_FIXED', (int)(Tools::getValue("nc_foot_im_bg_fixed")));
            Configuration::updateValue('RC_FOOTER_BORDER', (string)(Tools::getValue("footer_border")));
            Configuration::updateValue('RC_FOOTER_BORDER_SW', (string)(Tools::getValue("footer_border_sw")));
            Configuration::updateValue('RC_FOOTER_TITLES', (string)(Tools::getValue("footer_titles")));
            Configuration::updateValue('RC_FOOTER_TEXT', (string)(Tools::getValue("footer_text")));
            Configuration::updateValue('RC_FOOTER_LINK', (string)(Tools::getValue("footer_link")));
            Configuration::updateValue('RC_FOOTER_LINK_H', (string)(Tools::getValue("footer_link_h")));
            Configuration::updateValue('RC_FOOTER_NEWS_BG', (string)(Tools::getValue("footer_news_bg")));
            Configuration::updateValue('RC_FOOTER_NEWS_BORDER', (string)(Tools::getValue("footer_news_border")));
            Configuration::updateValue('RC_FOOTER_NEWS_PLACEH', (string)(Tools::getValue("footer_news_placeh")));
            Configuration::updateValue('RC_FOOTER_NEWS_COLOR', (string)(Tools::getValue("footer_news_color")));
            Configuration::updateValue('RC_FOOTER_NEWS_BUTTON', (string)(Tools::getValue("footer_news_button")));
            Configuration::updateValue('NC_FOOTER_SOC', (string)(Tools::getValue("nc_footer_soc")));
            Configuration::updateValue('NC_FOOTER_SOCTITLE', (string)(Tools::getValue("nc_footer_soctitle")));
            Configuration::updateValue('NC_FOOTER_LINKTITLE', (string)(Tools::getValue("nc_footer_linktitle")));

            // Side and Mobile
            Configuration::updateValue('NC_SIDE_BTN', (string)(Tools::getValue("nc_side_btn")));
            Configuration::updateValue('NC_SIDE_BG', (string)(Tools::getValue("nc_side_bg")));
            Configuration::updateValue('NC_SIDE_B', (string)(Tools::getValue("nc_side_b")));
            Configuration::updateValue('NC_SIDE_TITLE', (string)(Tools::getValue("nc_side_title")));
            Configuration::updateValue('NC_SIDE_TEXT', (string)(Tools::getValue("nc_side_text")));
            Configuration::updateValue('NC_SIDE_BTNB', (string)(Tools::getValue("nc_side_btnb")));
            Configuration::updateValue('NC_SIDE_BTNBG', (string)(Tools::getValue("nc_side_btnbg")));

            Configuration::updateValue('NC_LOGO_MOBILE', (string)(Tools::getValue("nc_logo_mobile")));
            Configuration::updateValue('NC_MOB_HEADER', (string)(Tools::getValue("nc_mob_header")));
            Configuration::updateValue('NC_MOB_MENU', (string)(Tools::getValue("nc_mob_menu")));
            Configuration::updateValue('NC_MOB_HP', (string)(Tools::getValue("nc_mob_hp")));
            Configuration::updateValue('NC_MOB_CAT', (string)(Tools::getValue("nc_mob_cat")));

            // typography
            Configuration::updateValue('RC_F_HEADINGS', (string)(Tools::getValue("f_headings")));
            Configuration::updateValue('RC_F_BUTTONS', (string)(Tools::getValue("f_buttons")));
            Configuration::updateValue('RC_F_TEXT', (string)(Tools::getValue("f_text")));
            Configuration::updateValue('RC_F_PRICE', (string)(Tools::getValue("f_price")));
            Configuration::updateValue('RC_F_MENU', (string)(Tools::getValue("f_menu")));
            Configuration::updateValue('RC_F_PN', (string)(Tools::getValue("f_pn")));
            Configuration::updateValue('RC_LATIN_EXT', (int)(Tools::getValue("latin_ext")));
            Configuration::updateValue('RC_CYRILLIC', (int)(Tools::getValue("cyrillic")));

            Configuration::updateValue('RC_FS_TEXT', (int)(Tools::getValue("fs_text")));
            Configuration::updateValue('RC_LH_TEXT', (int)(Tools::getValue("lh_text")));
            Configuration::updateValue('RC_FW_TEXT', (int)(Tools::getValue("fw_text")));
            Configuration::updateValue('RC_LS_TEXT', (string)(Tools::getValue("ls_text")));

            Configuration::updateValue('RC_FW_LINK', (int)(Tools::getValue("fw_link")));

            Configuration::updateValue('RC_FS_BTN', (int)(Tools::getValue("fs_btn")));
            Configuration::updateValue('RC_FW_BTN', (int)(Tools::getValue("fw_btn")));
            Configuration::updateValue('RC_LS_BTN', (string)(Tools::getValue("ls_btn")));
            Configuration::updateValue('RC_UP_BTN', (string)(Tools::getValue("up_btn")));

            Configuration::updateValue('RC_FS_INP', (int)(Tools::getValue("fs_inp")));
            Configuration::updateValue('RC_FW_INP', (int)(Tools::getValue("fw_inp")));
            Configuration::updateValue('RC_LS_INP', (string)(Tools::getValue("ls_inp")));

            Configuration::updateValue('RC_FS_FOOT', (int)(Tools::getValue("fs_foot")));
            Configuration::updateValue('RC_FW_FOOT', (int)(Tools::getValue("fw_foot")));
            Configuration::updateValue('RC_LS_FOOT', (string)(Tools::getValue("ls_foot")));
            Configuration::updateValue('RC_UP_FOOT', (string)(Tools::getValue("up_foot")));

            Configuration::updateValue('RC_FS_HOME_TIT', (int)(Tools::getValue("fs_home_tit")));
            Configuration::updateValue('RC_FW_HOME_TIT', (int)(Tools::getValue("fw_home_tit")));
            Configuration::updateValue('RC_LS_HOME_TIT', (string)(Tools::getValue("ls_home_tit")));
            Configuration::updateValue('RC_UP_HOME_TIT', (string)(Tools::getValue("up_home_tit")));

            Configuration::updateValue('RC_FS_HOME_SUB', (int)(Tools::getValue("fs_home_sub")));
            Configuration::updateValue('RC_FW_HOME_SUB', (int)(Tools::getValue("fw_home_sub")));
            Configuration::updateValue('RC_LS_HOME_SUB', (string)(Tools::getValue("ls_home_sub")));
            Configuration::updateValue('RC_UP_HOME_SUB', (string)(Tools::getValue("up_home_sub")));

            Configuration::updateValue('RC_FS_PAGE_HEAD', (int)(Tools::getValue("fs_page_head")));
            Configuration::updateValue('RC_FW_PAGE_HEAD', (int)(Tools::getValue("fw_page_head")));
            Configuration::updateValue('RC_LS_PAGE_HEAD', (string)(Tools::getValue("ls_page_head")));
            Configuration::updateValue('RC_UP_PAGE_HEAD', (string)(Tools::getValue("up_page_head")));

            Configuration::updateValue('RC_FS_PAGE_H3', (int)(Tools::getValue("fs_page_h3")));
            Configuration::updateValue('RC_FW_PAGE_H3', (int)(Tools::getValue("fw_page_h3")));
            Configuration::updateValue('RC_LS_PAGE_H3', (string)(Tools::getValue("ls_page_h3")));
            Configuration::updateValue('RC_UP_PAGE_H3', (string)(Tools::getValue("up_page_h3")));

            Configuration::updateValue('RC_FS_PAGE_SIDE', (int)(Tools::getValue("fs_page_side")));
            Configuration::updateValue('RC_FW_PAGE_SIDE', (int)(Tools::getValue("fw_page_side")));
            Configuration::updateValue('RC_LS_PAGE_SIDE', (string)(Tools::getValue("ls_page_side")));
            Configuration::updateValue('RC_UP_PAGE_SIDE', (string)(Tools::getValue("up_page_side")));

            Configuration::updateValue('RC_FS_CAT_NAME', (int)(Tools::getValue("fs_cat_name")));
            Configuration::updateValue('RC_FW_CAT_NAME', (int)(Tools::getValue("fw_cat_name")));
            Configuration::updateValue('RC_LS_CAT_NAME', (string)(Tools::getValue("ls_cat_name")));
            Configuration::updateValue('RC_UP_CAT_NAME', (string)(Tools::getValue("up_cat_name")));

            Configuration::updateValue('RC_FS_CAT_PRICE', (int)(Tools::getValue("fs_cat_price")));
            Configuration::updateValue('RC_FW_CAT_PRICE', (int)(Tools::getValue("fw_cat_price")));
            Configuration::updateValue('RC_LS_CAT_PRICE', (string)(Tools::getValue("ls_cat_price")));

            Configuration::updateValue('RC_FS_PP_NAME', (int)(Tools::getValue("fs_pp_name")));
            Configuration::updateValue('RC_FW_PP_NAME', (int)(Tools::getValue("fw_pp_name")));
            Configuration::updateValue('RC_LS_PP_NAME', (string)(Tools::getValue("ls_pp_name")));
            Configuration::updateValue('RC_UP_PP_NAME', (string)(Tools::getValue("up_pp_name")));

            Configuration::updateValue('RC_FS_PP_PRICE', (int)(Tools::getValue("fs_pp_price")));
            Configuration::updateValue('RC_FW_PP_PRICE', (int)(Tools::getValue("fw_pp_price")));
            Configuration::updateValue('RC_LS_PP_PRICE', (string)(Tools::getValue("ls_pp_price")));

            Configuration::updateValue('RC_FS_BLOG', (int)(Tools::getValue("fs_blog")));
            Configuration::updateValue('RC_FW_BLOG', (int)(Tools::getValue("fw_blog")));
            Configuration::updateValue('RC_LS_BLOG', (string)(Tools::getValue("ls_blog")));
            Configuration::updateValue('RC_UP_BLOG', (string)(Tools::getValue("up_blog")));

            Configuration::updateValue('RC_FS_MENU', (int)(Tools::getValue("fs_menu")));
            Configuration::updateValue('RC_FW_MENU', (int)(Tools::getValue("fw_menu")));
            Configuration::updateValue('RC_LS_MENU', (string)(Tools::getValue("ls_menu")));
            Configuration::updateValue('RC_UP_MENU', (string)(Tools::getValue("up_menu")));

            // Custom CSS
            Configuration::updateValue('NC_CSS', (string)(Tools::getValue("nc_css")));


            $this -> generateCss();

        }

        $this -> updateOriginalValues();

        if (Tools::isSubmit('reset_changes')) {

          Configuration::updateValue('RC_G_LAY', $this -> defaults["g_lay"]);
          Configuration::updateValue('RC_G_TP', $this -> defaults["g_tp"]);
          Configuration::updateValue('RC_G_BP', $this -> defaults["g_bp"]);
          Configuration::updateValue('RC_BODY_BOX_SW', $this -> defaults["body_box_sw"]);
          Configuration::updateValue('RC_MAIN_BACKGROUND_COLOR', $this -> defaults["main_background_color"]);
          Configuration::updateValue('NC_BODY_GS', $this -> defaults["nc_body_gs"]);
          Configuration::updateValue('NC_BODY_GE', $this -> defaults["nc_body_ge"]);
          Configuration::updateValue('NC_BODY_GG', $this -> defaults["nc_body_gg"]);
          Configuration::updateValue('NC_BODY_IM_BG_EXT', $this -> defaults["nc_body_im_bg_ext"]);
          Configuration::updateValue('NC_BODY_IM_BG_REPEAT', $this -> defaults["nc_body_im_bg_repeat"]);
          Configuration::updateValue('NC_BODY_IM_BG_POSITION', $this -> defaults["nc_body_im_bg_position"]);
          Configuration::updateValue('NC_BODY_IM_BG_FIXED', $this -> defaults["nc_body_im_bg_fixed"]);
          Configuration::updateValue('RC_GRADIENT_SCHEME', $this -> defaults["gradient_scheme"]);
          Configuration::updateValue('RC_DISPLAY_GRADIENT', $this -> defaults["display_gradient"]);
          Configuration::updateValue('RC_BODY_BG_PATTERN', $this -> defaults["body_bg_pattern"]);
          Configuration::updateValue('NC_MAIN_BGS', $this -> defaults["nc_main_bg"]);
          Configuration::updateValue('NC_MAIN_BC', $this -> defaults["nc_main_bc"]);
          Configuration::updateValue('NC_MAIN_GS', $this -> defaults["nc_main_gs"]);
          Configuration::updateValue('NC_MAIN_GE', $this -> defaults["nc_main_ge"]);
          Configuration::updateValue('NC_MAIN_GG', $this -> defaults["nc_main_gg"]);
          Configuration::updateValue('NC_MAIN_IM_BG_EXT', $this -> defaults["nc_main_im_bg_ext"]);
          Configuration::updateValue('NC_MAIN_IM_BG_REPEAT', $this -> defaults["nc_main_im_bg_repeat"]);
          Configuration::updateValue('NC_MAIN_IM_BG_POSITION', $this -> defaults["nc_main_im_bg_position"]);
          Configuration::updateValue('NC_MAIN_IM_BG_FIXED', $this -> defaults["nc_main_im_bg_fixed"]);

// header
          Configuration::updateValue('RC_HEADER_LAY', $this -> defaults["header_lay"]);
          Configuration::updateValue('RC_HEADER_W', $this -> defaults["header_w"]);
          Configuration::updateValue('RC_HEADER_OPA', $this -> defaults["header_opa"]);
          Configuration::updateValue('NC_LOGO_NORMAL', $this -> defaults["nc_logo_normal"]);
          Configuration::updateValue('NC_LOGO_TRANS', $this -> defaults["nc_logo_trans"]);
          Configuration::updateValue('NC_HEADER_TRANSWITCH', $this -> defaults["nc_header_trans"]);
          Configuration::updateValue('NC_HEADER_HIDES', $this -> defaults["nc_header_hide"]);
          Configuration::updateValue('NC_BW_ICONS', $this -> defaults["nc_bw_icons"]);
          Configuration::updateValue('NC_BW_MENU', $this -> defaults["nc_bw_menu"]);
          Configuration::updateValue('RC_H_BG', $this -> defaults["h_bg"]);
          Configuration::updateValue('RC_NORM_ICONS', $this -> defaults["h_norm_icons"]);
          Configuration::updateValue('RC_NORM_QUAN', $this -> defaults["h_norm_quan"]);
          Configuration::updateValue('RC_NORM_QUANBG', $this -> defaults["h_norm_quanbg"]);
          Configuration::updateValue('RC_NORM_LOGGED', $this -> defaults["h_norm_logged"]);
          Configuration::updateValue('RC_NORM_LINK', $this -> defaults["h_norm_link"]);
          Configuration::updateValue('RC_NORM_LINKH', $this -> defaults["h_norm_linkh"]);
          Configuration::updateValue('RC_NORM_EFFECT', $this -> defaults["h_norm_effect"]);
          Configuration::updateValue('RC_NORM_SBORDER', $this -> defaults["h_norm_sborder"]);
          Configuration::updateValue('RC_TRANS_ICONS', $this -> defaults["h_trans_icons"]);
          Configuration::updateValue('RC_TRANS_QUAN', $this -> defaults["h_trans_quan"]);
          Configuration::updateValue('RC_TRANS_QUANBG', $this -> defaults["h_trans_quanbg"]);
          Configuration::updateValue('RC_TRANS_LOGGED', $this -> defaults["h_trans_logged"]);
          Configuration::updateValue('RC_TRANS_LINK', $this -> defaults["h_trans_link"]);
          Configuration::updateValue('RC_TRANS_LINKH', $this -> defaults["h_trans_linkh"]);
          Configuration::updateValue('RC_TRANS_EFFECT', $this -> defaults["h_trans_effect"]);
          Configuration::updateValue('RC_TRANS_SBORDER', $this -> defaults["h_trans_sborder"]);
          Configuration::updateValue('RC_HEADER_NBG', $this -> defaults["header_nbg"]);
          Configuration::updateValue('RC_HEADER_NB', $this -> defaults["header_nb"]);
          Configuration::updateValue('RC_HEADER_NT', $this -> defaults["header_nt"]);
          Configuration::updateValue('RC_HEADER_NL', $this -> defaults["header_nl"]);
          Configuration::updateValue('RC_HEADER_NLH', $this -> defaults["header_nlh"]);
          Configuration::updateValue('NC_CLS', $this -> defaults["nc_cl"]);
          Configuration::updateValue('NC_CLLS', $this -> defaults["nc_cll"]);
          Configuration::updateValue('RC_HEADER_NS', $this -> defaults["header_ns"]);
          Configuration::updateValue('RC_HEADER_NBS', $this -> defaults["header_nbs"]);
          Configuration::updateValue('NC_TOPPANEL_LAYS', $this -> defaults["nc_toppanel_lay"]);
          Configuration::updateValue('RC_CLICK_LAY_M', $this -> defaults["click_lay_m"]);
          Configuration::updateValue('RC_CLICK_LAY_S', $this -> defaults["click_lay_s"]);
          Configuration::updateValue('RC_CLICK_LAY_C', $this -> defaults["click_lay_c"]);
          Configuration::updateValue('RC_CLICK_LAY_A', $this -> defaults["click_lay_a"]);
          Configuration::updateValue('NC_M_LAYOUT_S', $this -> defaults["nc_m_layout"]);
          Configuration::updateValue('NC_M_ICON', $this -> defaults["nc_m_icon"]);
          Configuration::updateValue('NC_M_UNDER_S', $this -> defaults["nc_m_under"]);
          Configuration::updateValue('NC_M_OVERRIDE_S', $this -> defaults["nc_m_override"]);
          Configuration::updateValue('RC_M_POPUP_LLINK', $this -> defaults["m_popup_llink"]);
          Configuration::updateValue('RC_M_POPUP_LLINK_HOVER', $this -> defaults["m_popup_llink_hover"]);
          Configuration::updateValue('RC_M_POPUP_LBG', $this -> defaults["m_popup_lbg"]);
          Configuration::updateValue('RC_M_POPUP_LCHEVRON', $this -> defaults["m_popup_lchevron"]);
          Configuration::updateValue('RC_M_POPUP_LBORDER', $this -> defaults["m_popup_lborder"]);
          Configuration::updateValue('NC_M_BR_S', $this -> defaults["nc_m_br"]);
          Configuration::updateValue('RC_SEARCH_LAY', $this -> defaults["search_lay"]);
          Configuration::updateValue('NC_I_SEARCHS', $this -> defaults["nc_i_search"]);
          Configuration::updateValue('NC_SEARCH_TAGS', $this -> defaults["nc_search_tags"]);
          Configuration::updateValue('NC_SEARCH_PRODS', $this -> defaults["nc_search_prods"]);
          Configuration::updateValue('RC_SEARCH_BR', $this -> defaults["search_br"]);
          Configuration::updateValue('RC_CART_LAY', $this -> defaults["cart_lay"]);
          Configuration::updateValue('RC_CART_ICON', $this -> defaults["cart_icon"]);
          Configuration::updateValue('RC_ACC_LAY', $this -> defaults["acc_lay"]);
          Configuration::updateValue('RC_ACC_ICON', $this -> defaults["acc_icon"]);
          Configuration::updateValue('RC_ACC_NAME', $this -> defaults["acc_name"]);

// body design
          Configuration::updateValue('RC_G_BG_CONTENT', $this -> defaults["g_bg_content"]);
          Configuration::updateValue('RC_G_BORDER', $this -> defaults["g_border"]);
          Configuration::updateValue('RC_G_BODY_TEXT', $this -> defaults["g_body_text"]);
          Configuration::updateValue('RC_G_BODY_COMMENT', $this -> defaults["g_body_comment"]);
          Configuration::updateValue('RC_G_BODY_LINK', $this -> defaults["g_body_link"]);
          Configuration::updateValue('RC_G_BODY_LINK_HOVER', $this -> defaults["g_body_link_hover"]);
          Configuration::updateValue('RC_G_LINK_EFFECT', $this -> defaults["g_link_effect"]);
          Configuration::updateValue('RC_G_LINK_EFFECTC', $this -> defaults["g_link_effectc"]);
          Configuration::updateValue('RC_G_FORMS', $this -> defaults["g_form"]);
          Configuration::updateValue('RC_LABEL', $this -> defaults["g_label"]);
          Configuration::updateValue('RC_G_HEADER', $this -> defaults["g_header"]);
          Configuration::updateValue('RC_CON_POS', $this -> defaults["con_pos"]);
          Configuration::updateValue('RC_CON_PRO', $this -> defaults["con_pro"]);
          Configuration::updateValue('RC_CON_BRA', $this -> defaults["con_bra"]);
          Configuration::updateValue('RC_CON_SALE', $this -> defaults["con_sale"]);
          Configuration::updateValue('RC_G_HB', $this -> defaults["g_hb"]);
          Configuration::updateValue('RC_G_HC', $this -> defaults["g_hc"]);
          Configuration::updateValue('RC_G_NORMAL_BORDER', $this -> defaults["g_normal_border"]);
          Configuration::updateValue('RC_G_EXTRA_BORDER', $this -> defaults["g_extra_border"]);
          Configuration::updateValue('RC_FANCY_NBG', $this -> defaults["g_fancy_nbg"]);
          Configuration::updateValue('RC_FANCY_NC', $this -> defaults["g_fancy_nc"]);

          Configuration::updateValue('RC_B_NORMAL_BG', $this -> defaults["b_normal_bg"]);
          Configuration::updateValue('RC_B_NORMAL_BORDER', $this -> defaults["b_normal_border"]);
          Configuration::updateValue('RC_B_NORMAL_COLOR', $this -> defaults["b_normal_color"]);
          Configuration::updateValue('RC_B_NORMAL_BG_HOVER', $this -> defaults["b_normal_bg_hover"]);
          Configuration::updateValue('RC_B_NORMAL_BORDER_HOVER', $this -> defaults["b_normal_border_hover"]);
          Configuration::updateValue('RC_B_NORMAL_COLOR_HOVER', $this -> defaults["b_normal_color_hover"]);
          Configuration::updateValue('RC_B_EX_BG', $this -> defaults["b_ex_bg"]);
          Configuration::updateValue('RC_B_EX_BORDER', $this -> defaults["b_ex_border"]);
          Configuration::updateValue('RC_B_EX_COLOR', $this -> defaults["b_ex_color"]);
          Configuration::updateValue('NC_B_RADIUSS', $this -> defaults["nc_b_radius"]);
          Configuration::updateValue('NC_B_SHS', $this -> defaults["nc_b_sh"]);

          Configuration::updateValue('RC_I_BG', $this -> defaults["i_bg"]);
          Configuration::updateValue('RC_I_COLOR', $this -> defaults["i_color"]);
          Configuration::updateValue('RC_I_B_COLOR', $this -> defaults["i_b_color"]);
          Configuration::updateValue('RC_I_BG_FOCUS', $this -> defaults["i_bg_focus"]);
          Configuration::updateValue('RC_I_COLOR_FOCUS', $this -> defaults["i_color_focus"]);
          Configuration::updateValue('RC_I_B_FOCUS', $this -> defaults["i_b_focus"]);
          Configuration::updateValue('RC_I_B_RADIUS', $this -> defaults["i_b_radius"]);
          Configuration::updateValue('RC_I_PH', $this -> defaults["i_ph"]);
          Configuration::updateValue('RC_RC_BG_ACTIVE', $this -> defaults["rc_bg_active"]);

          Configuration::updateValue('NC_LOADERS', $this -> defaults["nc_loader"]);
          Configuration::updateValue('NC_LOADER_LAYS', $this -> defaults["nc_loader_lay"]);
          Configuration::updateValue('NC_LOADER_BG', $this -> defaults["nc_loader_bg"]);
          Configuration::updateValue('NC_LOADER_COLOR', $this -> defaults["nc_loader_color"]);
          Configuration::updateValue('NC_LOADER_COLOR2', $this -> defaults["nc_loader_color2"]);
          Configuration::updateValue('NC_LOADER_LOGOS', $this -> defaults["nc_loader_logo"]);
          Configuration::updateValue('NC_LOGO_LOADER', $this -> defaults["nc_logo_loader"]);

// Homepage content
          Configuration::updateValue('NC_HT_BGS', $this -> defaults["nc_ht_bg"]);
          Configuration::updateValue('NC_HT_BC', $this -> defaults["nc_ht_bc"]);
          Configuration::updateValue('NC_HT_GS', $this -> defaults["nc_ht_gs"]);
          Configuration::updateValue('NC_HT_GE', $this -> defaults["nc_ht_ge"]);
          Configuration::updateValue('NC_HT_GG', $this -> defaults["nc_ht_gg"]);
          Configuration::updateValue('NC_HT_IM_BG_EXT', $this -> defaults["nc_ht_im_bg_ext"]);
          Configuration::updateValue('NC_HT_IM_BG_REPEAT', $this -> defaults["nc_ht_im_bg_repeat"]);
          Configuration::updateValue('NC_HT_IM_BG_POSITION', $this -> defaults["nc_ht_im_bg_position"]);
          Configuration::updateValue('NC_HT_IM_BG_FIXED', $this -> defaults["nc_ht_im_bg_fixed"]);
          Configuration::updateValue('NC_HT_TOPS', $this -> defaults["nc_ht_top"]);
          Configuration::updateValue('NC_HT_BOTS', $this -> defaults["nc_ht_bot"]);
          Configuration::updateValue('NC_HT_PAD', $this -> defaults["nc_ht_pad"]);
          Configuration::updateValue('NC_HT_WIDTH', $this -> defaults["nc_ht_width"]);
          Configuration::updateValue('NC_HM_PAD', $this -> defaults["nc_hm_pad"]);
          Configuration::updateValue('NC_HM_WIDTH', $this -> defaults["nc_hm_width"]);

          Configuration::updateValue('NC_HM_BGS', $this -> defaults["nc_hm_bg"]);
          Configuration::updateValue('NC_HM_BC', $this -> defaults["nc_hm_bc"]);
          Configuration::updateValue('NC_HM_GS', $this -> defaults["nc_hm_gs"]);
          Configuration::updateValue('NC_HM_GE', $this -> defaults["nc_hm_ge"]);
          Configuration::updateValue('NC_HM_GG', $this -> defaults["nc_hm_gg"]);
          Configuration::updateValue('NC_HM_IM_BG_EXT', $this -> defaults["nc_hm_im_bg_ext"]);
          Configuration::updateValue('NC_HM_IM_BG_REPEAT', $this -> defaults["nc_hm_im_bg_repeat"]);
          Configuration::updateValue('NC_HM_IM_BG_POSITION', $this -> defaults["nc_hm_im_bg_position"]);
          Configuration::updateValue('NC_HM_IM_BG_FIXED', $this -> defaults["nc_hm_im_bg_fixed"]);
          Configuration::updateValue('NC_HM_TOPS', $this -> defaults["nc_hm_top"]);
          Configuration::updateValue('NC_HM_BOTS', $this -> defaults["nc_hm_bot"]);

          Configuration::updateValue('NC_HB_BGS', $this -> defaults["nc_hb_bg"]);
          Configuration::updateValue('NC_HB_BC', $this -> defaults["nc_hb_bc"]);
          Configuration::updateValue('NC_HB_GS', $this -> defaults["nc_hb_gs"]);
          Configuration::updateValue('NC_HB_GE', $this -> defaults["nc_hb_ge"]);
          Configuration::updateValue('NC_HB_GG', $this -> defaults["nc_hb_gg"]);
          Configuration::updateValue('NC_HB_IM_BG_EXT', $this -> defaults["nc_hb_im_bg_ext"]);
          Configuration::updateValue('NC_HB_IM_BG_REPEAT', $this -> defaults["nc_hb_im_bg_repeat"]);
          Configuration::updateValue('NC_HB_IM_BG_POSITION', $this -> defaults["nc_hb_im_bg_position"]);
          Configuration::updateValue('NC_HB_IM_BG_FIXED', $this -> defaults["nc_hb_im_bg_fixed"]);
          Configuration::updateValue('NC_HB_TOPS', $this -> defaults["nc_hb_top"]);
          Configuration::updateValue('NC_HB_BOTS', $this -> defaults["nc_hb_bot"]);

          Configuration::updateValue('RC_BAN_SPA_TOPS', $this -> defaults["ban_spa_top"]);
          Configuration::updateValue('RC_BAN_TS_TOPS', $this -> defaults["ban_ts_top"]);
          Configuration::updateValue('RC_BAN_BS_TOPS', $this -> defaults["ban_bs_top"]);
          Configuration::updateValue('RC_BAN_W_TOP', $this -> defaults["ban_w_top"]);
          Configuration::updateValue('RC_BAN_SPA_HOME', $this -> defaults["ban_spa_home"]);
          Configuration::updateValue('RC_BAN_TS_HOME', $this -> defaults["ban_ts_home"]);
          Configuration::updateValue('RC_BAN_BS_HOME', $this -> defaults["ban_bs_home"]);
          Configuration::updateValue('RC_BAN_W_HOME', $this -> defaults["ban_w_home"]);
          Configuration::updateValue('RC_BAN_SPA_BEFOOT', $this -> defaults["ban_spa_befoot"]);
          Configuration::updateValue('RC_BAN_TS_BEFOOT', $this -> defaults["ban_ts_befoot"]);
          Configuration::updateValue('RC_BAN_BS_BEFOOT', $this -> defaults["ban_bs_befoot"]);
          Configuration::updateValue('RC_BAN_W_BEFOOT', $this -> defaults["ban_w_befoot"]);
          Configuration::updateValue('RC_BAN_SPA_FOOT', $this -> defaults["ban_spa_foot"]);
          Configuration::updateValue('RC_BAN_TS_FOOT', $this -> defaults["ban_ts_foot"]);
          Configuration::updateValue('RC_BAN_BS_FOOT', $this -> defaults["ban_bs_foot"]);
          Configuration::updateValue('RC_BAN_SPA_SIDEMOBILEMENU', $this -> defaults["ban_spa_sidemobilemenu"]);
          Configuration::updateValue('RC_BAN_TS_SIDEMOBILEMENU', $this -> defaults["ban_ts_sidemobilemenu"]);
          Configuration::updateValue('RC_BAN_BS_SIDEMOBILEMENU', $this -> defaults["ban_bs_sidemobilemenu"]);
          Configuration::updateValue('RC_BAN_SPA_PRODUCT', $this -> defaults["ban_spa_product"]);
          Configuration::updateValue('RC_BAN_TS_PRODUCT', $this -> defaults["ban_ts_product"]);
          Configuration::updateValue('RC_BAN_BS_PRODUCT', $this -> defaults["ban_bs_product"]);
          Configuration::updateValue('RC_BAN_TS_LEFT', $this -> defaults["ban_ts_left"]);
          Configuration::updateValue('RC_BAN_BS_LEFT', $this -> defaults["ban_bs_left"]);
          Configuration::updateValue('RC_BAN_TS_RIGHT', $this -> defaults["ban_ts_right"]);
          Configuration::updateValue('RC_BAN_BS_RIGHT', $this -> defaults["ban_bs_right"]);
          Configuration::updateValue('NC_HP_TITLE', $this -> defaults["nc_hp_title"]);
          Configuration::updateValue('NC_HP_ALIGN', $this -> defaults["nc_hp_align"]);

          Configuration::updateValue('NC_FEAT_LAYS', $this -> defaults["nc_feat_lay"]);
          Configuration::updateValue('NC_FEAT_PERS', $this -> defaults["nc_feat_per"]);
          Configuration::updateValue('NC_FEAT_SPAS', $this -> defaults["nc_feat_spa"]);
          Configuration::updateValue('NC_FEAT_SLIDERS', $this -> defaults["nc_feat_slider"]);
          Configuration::updateValue('NC_FEAT_AUTOS', $this -> defaults["nc_feat_auto"]);
          Configuration::updateValue('NC_FEAT_BG', $this -> defaults["nc_feat_bg"]);
          Configuration::updateValue('NC_FEAT_BC', $this -> defaults["nc_feat_bc"]);
          Configuration::updateValue('NC_FEAT_GS', $this -> defaults["nc_feat_gs"]);
          Configuration::updateValue('NC_FEAT_GE', $this -> defaults["nc_feat_ge"]);
          Configuration::updateValue('NC_FEAT_GG', $this -> defaults["nc_feat_gg"]);
          Configuration::updateValue('NC_FEAT_TITLE', $this -> defaults["nc_feat_title"]);
          Configuration::updateValue('NC_FEAT_TEXT', $this -> defaults["nc_feat_text"]);
          Configuration::updateValue('NC_FEAT_TEXTBG', $this -> defaults["nc_feat_textbg"]);
          Configuration::updateValue('NC_FEAT_WIDTH', $this -> defaults["nc_feat_width"]);
          Configuration::updateValue('NC_FEAT_TOPS', $this -> defaults["nc_feat_top"]);
          Configuration::updateValue('NC_FEAT_BOTS', $this -> defaults["nc_feat_bot"]);

          Configuration::updateValue('NC_BEST_LAY', $this -> defaults["nc_best_lay"]);
          Configuration::updateValue('NC_BEST_PER', $this -> defaults["nc_best_per"]);
          Configuration::updateValue('NC_BEST_SPA', $this -> defaults["nc_best_spa"]);
          Configuration::updateValue('NC_BEST_SLIDER', $this -> defaults["nc_best_slider"]);
          Configuration::updateValue('NC_BEST_AUTO', $this -> defaults["nc_best_auto"]);
          Configuration::updateValue('NC_BEST_BG', $this -> defaults["nc_best_bg"]);
          Configuration::updateValue('NC_BEST_BC', $this -> defaults["nc_best_bc"]);
          Configuration::updateValue('NC_BEST_GS', $this -> defaults["nc_best_gs"]);
          Configuration::updateValue('NC_BEST_GE', $this -> defaults["nc_best_ge"]);
          Configuration::updateValue('NC_BEST_GG', $this -> defaults["nc_best_gg"]);
          Configuration::updateValue('NC_BEST_TITLE', $this -> defaults["nc_best_title"]);
          Configuration::updateValue('NC_BEST_TEXT', $this -> defaults["nc_best_text"]);
          Configuration::updateValue('NC_BEST_TEXTBG', $this -> defaults["nc_best_textbg"]);
          Configuration::updateValue('NC_BEST_WIDTH', $this -> defaults["nc_best_width"]);
          Configuration::updateValue('NC_BEST_TOPS', $this -> defaults["nc_best_top"]);
          Configuration::updateValue('NC_BEST_BOTS', $this -> defaults["nc_best_bot"]);

          Configuration::updateValue('NC_NEW_LAY', $this -> defaults["nc_new_lay"]);
          Configuration::updateValue('NC_NEW_PER', $this -> defaults["nc_new_per"]);
          Configuration::updateValue('NC_NEW_SPA', $this -> defaults["nc_new_spa"]);
          Configuration::updateValue('NC_NEW_SLIDER', $this -> defaults["nc_new_slider"]);
          Configuration::updateValue('NC_NEW_AUTO', $this -> defaults["nc_new_auto"]);
          Configuration::updateValue('NC_NEW_BG', $this -> defaults["nc_new_bg"]);
          Configuration::updateValue('NC_NEW_BC', $this -> defaults["nc_new_bc"]);
          Configuration::updateValue('NC_NEW_GS', $this -> defaults["nc_new_gs"]);
          Configuration::updateValue('NC_NEW_GE', $this -> defaults["nc_new_ge"]);
          Configuration::updateValue('NC_NEW_GG', $this -> defaults["nc_new_gg"]);
          Configuration::updateValue('NC_NEW_TITLE', $this -> defaults["nc_new_title"]);
          Configuration::updateValue('NC_NEW_TEXT', $this -> defaults["nc_new_text"]);
          Configuration::updateValue('NC_NEW_TEXTBG', $this -> defaults["nc_new_textbg"]);
          Configuration::updateValue('NC_NEW_WIDTH', $this -> defaults["nc_new_width"]);
          Configuration::updateValue('NC_NEW_TOPS', $this -> defaults["nc_new_top"]);
          Configuration::updateValue('NC_NEW_BOTS', $this -> defaults["nc_new_bot"]);

          Configuration::updateValue('NC_SALE_LAY', $this -> defaults["nc_sale_lay"]);
          Configuration::updateValue('NC_SALE_PER', $this -> defaults["nc_sale_per"]);
          Configuration::updateValue('NC_SALE_SPA', $this -> defaults["nc_sale_spa"]);
          Configuration::updateValue('NC_SALE_SLIDER', $this -> defaults["nc_sale_slider"]);
          Configuration::updateValue('NC_SALE_AUTO', $this -> defaults["nc_sale_auto"]);
          Configuration::updateValue('NC_SALE_BG', $this -> defaults["nc_sale_bg"]);
          Configuration::updateValue('NC_SALE_BC', $this -> defaults["nc_sale_bc"]);
          Configuration::updateValue('NC_SALE_GS', $this -> defaults["nc_sale_gs"]);
          Configuration::updateValue('NC_SALE_GE', $this -> defaults["nc_sale_ge"]);
          Configuration::updateValue('NC_SALE_GG', $this -> defaults["nc_sale_gg"]);
          Configuration::updateValue('NC_SALE_TITLE', $this -> defaults["nc_sale_title"]);
          Configuration::updateValue('NC_SALE_TEXT', $this -> defaults["nc_sale_text"]);
          Configuration::updateValue('NC_SALE_TEXTBG', $this -> defaults["nc_sale_textbg"]);
          Configuration::updateValue('NC_SALE_WIDTH', $this -> defaults["nc_sale_width"]);
          Configuration::updateValue('NC_SALE_TOPS', $this -> defaults["nc_sale_top"]);
          Configuration::updateValue('NC_SALE_BOTS', $this -> defaults["nc_sale_bot"]);

          Configuration::updateValue('NC_CC1_LAY', $this -> defaults["nc_cc1_lay"]);
          Configuration::updateValue('NC_CC1_PER', $this -> defaults["nc_cc1_per"]);
          Configuration::updateValue('NC_CC1_SPA', $this -> defaults["nc_cc1_spa"]);
          Configuration::updateValue('NC_CC1_SLIDER', $this -> defaults["nc_cc1_slider"]);
          Configuration::updateValue('NC_CC1_AUTO', $this -> defaults["nc_cc1_auto"]);
          Configuration::updateValue('NC_CC1_BG', $this -> defaults["nc_cc1_bg"]);
          Configuration::updateValue('NC_CC1_BC', $this -> defaults["nc_cc1_bc"]);
          Configuration::updateValue('NC_CC1_GS', $this -> defaults["nc_cc1_gs"]);
          Configuration::updateValue('NC_CC1_GE', $this -> defaults["nc_cc1_ge"]);
          Configuration::updateValue('NC_CC1_GG', $this -> defaults["nc_cc1_gg"]);
          Configuration::updateValue('NC_CC1_TITLE', $this -> defaults["nc_cc1_title"]);
          Configuration::updateValue('NC_CC1_TEXT', $this -> defaults["nc_cc1_text"]);
          Configuration::updateValue('NC_CC1_TEXTBG', $this -> defaults["nc_cc1_textbg"]);
          Configuration::updateValue('NC_CC1_WIDTH', $this -> defaults["nc_cc1_width"]);
          Configuration::updateValue('NC_CC1_TOPS', $this -> defaults["nc_cc1_top"]);
          Configuration::updateValue('NC_CC1_BOTS', $this -> defaults["nc_cc1_bot"]);

          Configuration::updateValue('NC_CC2_LAY', $this -> defaults["nc_cc2_lay"]);
          Configuration::updateValue('NC_CC2_PER', $this -> defaults["nc_cc2_per"]);
          Configuration::updateValue('NC_CC2_SPA', $this -> defaults["nc_cc2_spa"]);
          Configuration::updateValue('NC_CC2_SLIDER', $this -> defaults["nc_cc2_slider"]);
          Configuration::updateValue('NC_CC2_AUTO', $this -> defaults["nc_cc2_auto"]);
          Configuration::updateValue('NC_CC2_BG', $this -> defaults["nc_cc2_bg"]);
          Configuration::updateValue('NC_CC2_BC', $this -> defaults["nc_cc2_bc"]);
          Configuration::updateValue('NC_CC2_GS', $this -> defaults["nc_cc2_gs"]);
          Configuration::updateValue('NC_CC2_GE', $this -> defaults["nc_cc2_ge"]);
          Configuration::updateValue('NC_CC2_GG', $this -> defaults["nc_cc2_gg"]);
          Configuration::updateValue('NC_CC2_TITLE', $this -> defaults["nc_cc2_title"]);
          Configuration::updateValue('NC_CC2_TEXT', $this -> defaults["nc_cc2_text"]);
          Configuration::updateValue('NC_CC2_TEXTBG', $this -> defaults["nc_cc2_textbg"]);
          Configuration::updateValue('NC_CC2_WIDTH', $this -> defaults["nc_cc2_width"]);
          Configuration::updateValue('NC_CC2_TOPS', $this -> defaults["nc_cc2_top"]);
          Configuration::updateValue('NC_CC2_BOTS', $this -> defaults["nc_cc2_bot"]);

          Configuration::updateValue('NC_CC3_LAY', $this -> defaults["nc_cc3_lay"]);
          Configuration::updateValue('NC_CC3_PER', $this -> defaults["nc_cc3_per"]);
          Configuration::updateValue('NC_CC3_SPA', $this -> defaults["nc_cc3_spa"]);
          Configuration::updateValue('NC_CC3_SLIDER', $this -> defaults["nc_cc3_slider"]);
          Configuration::updateValue('NC_CC3_AUTO', $this -> defaults["nc_cc3_auto"]);
          Configuration::updateValue('NC_CC3_BG', $this -> defaults["nc_cc3_bg"]);
          Configuration::updateValue('NC_CC3_BC', $this -> defaults["nc_cc3_bc"]);
          Configuration::updateValue('NC_CC3_GS', $this -> defaults["nc_cc3_gs"]);
          Configuration::updateValue('NC_CC3_GE', $this -> defaults["nc_cc3_ge"]);
          Configuration::updateValue('NC_CC3_GG', $this -> defaults["nc_cc3_gg"]);
          Configuration::updateValue('NC_CC3_TITLE', $this -> defaults["nc_cc3_title"]);
          Configuration::updateValue('NC_CC3_TEXT', $this -> defaults["nc_cc3_text"]);
          Configuration::updateValue('NC_CC3_TEXTBG', $this -> defaults["nc_cc3_textbg"]);
          Configuration::updateValue('NC_CC3_WIDTH', $this -> defaults["nc_cc3_width"]);
          Configuration::updateValue('NC_CC3_TOPS', $this -> defaults["nc_cc3_top"]);
          Configuration::updateValue('NC_CC3_BOTS', $this -> defaults["nc_cc3_bot"]);

          Configuration::updateValue('RC_BRAND_W', $this -> defaults["brand_w"]);
          Configuration::updateValue('RC_BRAND_PER_ROW', $this -> defaults["brand_per_row"]);
          Configuration::updateValue('RC_BRAND_NAME', $this -> defaults["brand_name"]);
          Configuration::updateValue('RC_BRAND_NAME_HOVER', $this -> defaults["brand_name_hover"]);

// page content
          Configuration::updateValue('NC_OT_BGS', $this -> defaults["nc_ot_bg"]);
          Configuration::updateValue('NC_OT_BC', $this -> defaults["nc_ot_bc"]);
          Configuration::updateValue('NC_OT_GS', $this -> defaults["nc_ot_gs"]);
          Configuration::updateValue('NC_OT_GE', $this -> defaults["nc_ot_ge"]);
          Configuration::updateValue('NC_OT_GG', $this -> defaults["nc_ot_gg"]);
          Configuration::updateValue('NC_OT_IM_BG_EXT', $this -> defaults["nc_ot_im_bg_ext"]);
          Configuration::updateValue('NC_OT_IM_BG_REPEAT', $this -> defaults["nc_ot_im_bg_repeat"]);
          Configuration::updateValue('NC_OT_IM_BG_POSITION', $this -> defaults["nc_ot_im_bg_position"]);
          Configuration::updateValue('NC_OT_IM_BG_FIXED', $this -> defaults["nc_ot_im_bg_fixed"]);
          Configuration::updateValue('NC_OT_PAD', $this -> defaults["nc_ot_pad"]);
          Configuration::updateValue('NC_OT_WIDTH', $this -> defaults["nc_ot_width"]);
          Configuration::updateValue('NC_OT_TOPS', $this -> defaults["nc_ot_top"]);
          Configuration::updateValue('NC_OT_BOTS', $this -> defaults["nc_ot_bot"]);

          Configuration::updateValue('NC_OM_BGS', $this -> defaults["nc_om_bg"]);
          Configuration::updateValue('NC_OM_BC', $this -> defaults["nc_om_bc"]);
          Configuration::updateValue('NC_OM_GS', $this -> defaults["nc_om_gs"]);
          Configuration::updateValue('NC_OM_GE', $this -> defaults["nc_om_ge"]);
          Configuration::updateValue('NC_OM_GG', $this -> defaults["nc_om_gg"]);
          Configuration::updateValue('NC_OM_IM_BG_EXT', $this -> defaults["nc_om_im_bg_ext"]);
          Configuration::updateValue('NC_OM_IM_BG_REPEAT', $this -> defaults["nc_om_im_bg_repeat"]);
          Configuration::updateValue('NC_OM_IM_BG_POSITION', $this -> defaults["nc_om_im_bg_position"]);
          Configuration::updateValue('NC_OM_IM_BG_FIXED', $this -> defaults["nc_om_im_bg_fixed"]);
          Configuration::updateValue('NC_OM_TOPS', $this -> defaults["nc_om_top"]);
          Configuration::updateValue('NC_OM_BOTS', $this -> defaults["nc_om_bot"]);

          Configuration::updateValue('NC_OB_BGS', $this -> defaults["nc_ob_bg"]);
          Configuration::updateValue('NC_OB_BC', $this -> defaults["nc_ob_bc"]);
          Configuration::updateValue('NC_OB_GS', $this -> defaults["nc_ob_gs"]);
          Configuration::updateValue('NC_OB_GE', $this -> defaults["nc_ob_ge"]);
          Configuration::updateValue('NC_OB_GG', $this -> defaults["nc_ob_gg"]);
          Configuration::updateValue('NC_OB_IM_BG_EXT', $this -> defaults["nc_ob_im_bg_ext"]);
          Configuration::updateValue('NC_OB_IM_BG_REPEAT', $this -> defaults["nc_ob_im_bg_repeat"]);
          Configuration::updateValue('NC_OB_IM_BG_POSITION', $this -> defaults["nc_ob_im_bg_position"]);
          Configuration::updateValue('NC_OB_IM_BG_FIXED', $this -> defaults["nc_ob_im_bg_fixed"]);
          Configuration::updateValue('NC_OB_TOPS', $this -> defaults["nc_ob_top"]);
          Configuration::updateValue('NC_OB_BOTS', $this -> defaults["nc_ob_bot"]);

          Configuration::updateValue('RC_W_ALL', $this -> defaults["w_all"]);
          Configuration::updateValue('RC_W_CAT', $this -> defaults["w_cat"]);
          Configuration::updateValue('RC_W_PRO', $this -> defaults["w_pro"]);
          Configuration::updateValue('RC_W_CON', $this -> defaults["w_con"]);
          Configuration::updateValue('RC_W_CART', $this -> defaults["w_cart"]);
          Configuration::updateValue('RC_W_ACC', $this -> defaults["w_acc"]);
          Configuration::updateValue('RC_W_CMS', $this -> defaults["w_cms"]);
          Configuration::updateValue('RC_W_BLOG', $this -> defaults["w_blog"]);
          Configuration::updateValue('RC_B_LAYOUT', $this -> defaults["b_layout"]);
          Configuration::updateValue('RC_B_POS_CAT', $this -> defaults["b_pos_cat"]);
          Configuration::updateValue('RC_B_POS_PRO', $this -> defaults["b_pos_pro"]);
          Configuration::updateValue('RC_B_TOPS', $this -> defaults["b_top"]);
          Configuration::updateValue('RC_B_BOTS', $this -> defaults["b_bot"]);
          Configuration::updateValue('RC_B_W', $this -> defaults["b_w"]);
          Configuration::updateValue('RC_B_LINK', $this -> defaults["b_link"]);
          Configuration::updateValue('RC_B_LINK_HOVER', $this -> defaults["b_link_hover"]);
          Configuration::updateValue('RC_B_SEPARATOR', $this -> defaults["b_separator"]);
          Configuration::updateValue('RC_PAGE_BQ_Q', $this -> defaults["page_bq_q"]);
          Configuration::updateValue('RC_CONTACT_ICON', $this -> defaults["contact_icon"]);
          Configuration::updateValue('RC_WARNING_MESSAGE_COLOR', $this -> defaults["warning_message_color"]);
          Configuration::updateValue('RC_SUCCESS_MESSAGE_COLOR', $this -> defaults["success_message_color"]);
          Configuration::updateValue('RC_DANGER_MESSAGE_COLOR', $this -> defaults["danger_message_color"]);

// Sidebar and filter
          Configuration::updateValue('RC_SIDEBAR_TITLE_MARGIN', $this -> defaults["sidebar_title_margin"]);
          Configuration::updateValue('RC_SIDEBAR_TITLE_B', $this -> defaults["sidebar_title_b"]);
          Configuration::updateValue('RC_SIDEBAR_TITLE_PADDING', $this -> defaults["sidebar_title_padding"]);
          Configuration::updateValue('RC_SIDEBAR_TITLE_BWIDTH', $this -> defaults["sidebar_title_bwidth"]);
          Configuration::updateValue('RC_SIDEBAR_TITLE_BORDER', $this -> defaults["sidebar_title_border"]);

          Configuration::updateValue('RC_SIDEBAR_MARGIN', $this -> defaults["sidebar_margin"]);
          Configuration::updateValue('RC_SIDEBAR_B', $this -> defaults["sidebar_b"]);
          Configuration::updateValue('RC_SIDEBAR_PADDING', $this -> defaults["sidebar_padding"]);
          Configuration::updateValue('RC_SIDEBAR_BWIDTH', $this -> defaults["sidebar_bwidth"]);
          Configuration::updateValue('RC_SIDEBAR_BORDER', $this -> defaults["sidebar_border"]);
          Configuration::updateValue('RC_SIDEBAR_LINK', $this -> defaults["sidebar_link"]);
          Configuration::updateValue('RC_SIDEBAR_BB', $this -> defaults["sidebar_bb"]);
          Configuration::updateValue('RC_SIDEBAR_BW', $this -> defaults["sidebar_bw"]);
          Configuration::updateValue('RC_SIDEBAR_BR', $this -> defaults["sidebar_br"]);
          Configuration::updateValue('RC_SIDEBAR_BALL', $this -> defaults["sidebar_ball"]);
          Configuration::updateValue('RC_SIDEBAR_BCAT', $this -> defaults["sidebar_bcat"]);
          Configuration::updateValue('RC_SIDEBAR_BFILTER', $this -> defaults["sidebar_bfilter"]);
          Configuration::updateValue('RC_SIDEBAR_BSALE', $this -> defaults["sidebar_bsale"]);

// Product list
          Configuration::updateValue('NC_SUBCAT_S', $this -> defaults["nc_subcat"]);
          Configuration::updateValue('NC_CAT_NAME_S', $this -> defaults["nc_cat_name"]);
          Configuration::updateValue('NC_CAT_IMG_S', $this -> defaults["nc_cat_img"]);
          Configuration::updateValue('NC_CAT_IMGLAY_S', $this -> defaults["nc_cat_imglay"]);
          Configuration::updateValue('NC_CAT_DESC_S', $this -> defaults["nc_cat_desc"]);
          Configuration::updateValue('RC_PL_NUMBER_COLOR', $this -> defaults["pl_number_color"]);
          Configuration::updateValue('RC_PL_NUMBER_COLOR_HOVER', $this -> defaults["pl_number_color_hover"]);

          Configuration::updateValue('NC_PRODUCT_SWITCH', $this -> defaults["nc_product_switch"]);
          Configuration::updateValue('NC_PRODUCT_MARGIN', $this -> defaults["nc_product_margin"]);

          Configuration::updateValue('RC_PL_LAY', $this -> defaults["pl_lay"]);
          Configuration::updateValue('RC_PL_IMG_BGS', $this -> defaults["pl_img_bgs"]);
          Configuration::updateValue('RC_PL_TEXT_BGS', $this -> defaults["pl_text_bgs"]);
          Configuration::updateValue('NC_PI_B', $this -> defaults["nc_pi_b"]);
          Configuration::updateValue('NC_PI_BW', $this -> defaults["nc_pi_bw"]);
          Configuration::updateValue('NC_PI_BR', $this -> defaults["nc_pi_br"]);
          Configuration::updateValue('NC_PI_C', $this -> defaults["nc_pi_c"]);
          Configuration::updateValue('NC_PI_CH', $this -> defaults["nc_pi_ch"]);
          Configuration::updateValue('RC_PL_TEXT_ALIGN', $this -> defaults["pl_text_align"]);
          Configuration::updateValue('RC_PL_IMG_BG', $this -> defaults["pl_img_bg"]);
          Configuration::updateValue('RC_PL_TEXT_BG', $this -> defaults["pl_text_bg"]);
          Configuration::updateValue('RC_PL_NAME', $this -> defaults["pl_name"]);
          Configuration::updateValue('RC_PL_PRICE', $this -> defaults["pl_price"]);

          Configuration::updateValue('RC_PL_HOVER_LAY', $this -> defaults["pl_hover_lay"]);
          Configuration::updateValue('RC_PL_HOVER_G1', $this -> defaults["pl_hover_g1"]);
          Configuration::updateValue('RC_PL_HOVER_G2', $this -> defaults["pl_hover_g2"]);
          Configuration::updateValue('RC_PL_HOVER_TRANS', $this -> defaults["pl_hover_trans"]);
          Configuration::updateValue('RC_PL_HOVER_BUT', $this -> defaults["pl_hover_but"]);
          Configuration::updateValue('RC_PL_HOVER_BUT_BG', $this -> defaults["pl_hover_but_bg"]);
          Configuration::updateValue('RC_PL_HOVER_BUT_B', $this -> defaults["pl_hover_but_b"]);
          Configuration::updateValue('RC_PL_HOVER_BUTH', $this -> defaults["pl_hover_buth"]);
          Configuration::updateValue('RC_PL_HOVER_BUT_BGH', $this -> defaults["pl_hover_but_bgh"]);
          Configuration::updateValue('RC_PL_HOVER_BUT_BH', $this -> defaults["pl_hover_but_bh"]);
          Configuration::updateValue('RC_PL_HOVER_BUT_OUT', $this -> defaults["pl_hover_but_out"]);
          Configuration::updateValue('RC_PL_HOVER_BUT_BR', $this -> defaults["pl_hover_but_br"]);
          Configuration::updateValue('NC_SECOND_IMG_S', $this -> defaults["nc_second_img"]);
          Configuration::updateValue('NC_COLORS_S', $this -> defaults["nc_colors"]);
          Configuration::updateValue('NC_QVS', $this -> defaults["nc_qv"]);
          Configuration::updateValue('NC_FAVS', $this -> defaults["nc_fav"]);

          Configuration::updateValue('RC_PL_PRODUCT_NEW_BG', $this -> defaults["pl_product_new_bg"]);
          Configuration::updateValue('RC_PL_PRODUCT_NEW_BORDER', $this -> defaults["pl_product_new_border"]);
          Configuration::updateValue('RC_PL_PRODUCT_NEW_COLOR', $this -> defaults["pl_product_new_color"]);
          Configuration::updateValue('RC_PL_PRODUCT_SALE_BG', $this -> defaults["pl_product_sale_bg"]);
          Configuration::updateValue('RC_PL_PRODUCT_SALE_BORDER', $this -> defaults["pl_product_sale_border"]);
          Configuration::updateValue('RC_PL_PRODUCT_SALE_COLOR', $this -> defaults["pl_product_sale_color"]);

          Configuration::updateValue('RC_PP_REVIEWS_STARON', $this -> defaults["pp_reviews_staron"]);
          Configuration::updateValue('RC_PP_REVIEWS_STAROFF', $this -> defaults["pp_reviews_staroff"]);

          Configuration::updateValue('NC_COUNT_DAYS', $this -> defaults["nc_count_days"]);
          Configuration::updateValue('NC_COUNT_BG', $this -> defaults["nc_count_bg"]);
          Configuration::updateValue('NC_COUNT_COLOR', $this -> defaults["nc_count_color"]);
          Configuration::updateValue('NC_COUNT_TIME', $this -> defaults["nc_count_time"]);
          Configuration::updateValue('NC_COUNT_WATCH', $this -> defaults["nc_count_watch"]);
          Configuration::updateValue('NC_COUNT_WATCH_BG', $this -> defaults["nc_count_watch_bg"]);

          Configuration::updateValue('NC_I_QVS', $this -> defaults["nc_i_qv"]);
          Configuration::updateValue('NC_I_DISCOVERS', $this -> defaults["nc_i_discover"]);
          Configuration::updateValue('NC_I_FAVS', $this -> defaults["nc_i_fav"]);
          Configuration::updateValue('NC_AIS', $this -> defaults["nc_ai"]);

//  Product page
          Configuration::updateValue('RC_PP_LAY', $this -> defaults["pp_lay"]);
          Configuration::updateValue('RC_PP_THUMBS', $this -> defaults["pp_thumbs"]);
          Configuration::updateValue('RC_PP_IMGB', $this -> defaults["pp_imgb"]);
          Configuration::updateValue('RC_PP_IMG_BORDER', $this -> defaults["pp_img_border"]);
          Configuration::updateValue('RC_PP_ICON_BORDER', $this -> defaults["pp_icon_border"]);
          Configuration::updateValue('RC_PP_IMGSPACING', $this -> defaults["pp_imgspacing"]);
          Configuration::updateValue('NC_MOBADOTSS', $this -> defaults["nc_mobadots"]);
          Configuration::updateValue('NC_MOBADOTSCS', $this -> defaults["nc_mobadotsc"]);

          Configuration::updateValue('RC_PP_STICKY', $this -> defaults["pp_sticky"]);
          Configuration::updateValue('RC_PP_PRICE_COLOR', $this -> defaults["pp_price_color"]);
          Configuration::updateValue('RC_PP_PRICE_DIS', $this -> defaults["pp_price_dis"]);
          Configuration::updateValue('RC_PP_ATT_LABEL', $this -> defaults["pp_att_label"]);
          Configuration::updateValue('RC_PP_ATT_COLOR_ACTIVE', $this -> defaults["pp_att_color_active"]);
          Configuration::updateValue('RC_PP_INFO_LABEL', $this -> defaults["pp_info_label"]);
          Configuration::updateValue('RC_PP_INFO_VALUE', $this -> defaults["pp_info_value"]);
          Configuration::updateValue('RC_PP_DISPLAY_Q', $this -> defaults["pp_display_q"]);
          Configuration::updateValue('RC_PP_DISPLAY_REFER', $this -> defaults["pp_display_refer"]);
          Configuration::updateValue('RC_PP_DISPLAY_COND', $this -> defaults["pp_display_cond"]);
          Configuration::updateValue('RC_PP_DISPLAY_BRAND', $this -> defaults["pp_display_brand"]);
          Configuration::updateValue('NC_ACCESS_PERS', $this -> defaults["nc_access_per"]);

          Configuration::updateValue('NC_PP_ADD_BG', $this -> defaults["nc_pp_add_bg"]);
          Configuration::updateValue('NC_PP_ADD_BORDER', $this -> defaults["nc_pp_add_border"]);
          Configuration::updateValue('NC_PP_ADD_COLOR', $this -> defaults["nc_pp_add_color"]);

          Configuration::updateValue('NC_COUNT_PR_TITLE', $this -> defaults["nc_count_pr_title"]);
          Configuration::updateValue('NC_COUNT_PR_BG', $this -> defaults["nc_count_pr_bg"]);
          Configuration::updateValue('NC_COUNT_PR_SEP', $this -> defaults["nc_count_pr_sep"]);
          Configuration::updateValue('NC_COUNT_PR_NUMBERS', $this -> defaults["nc_count_pr_numbers"]);
          Configuration::updateValue('NC_COUNT_PR_COLOR', $this -> defaults["nc_count_pr_color"]);

          Configuration::updateValue('RC_PP_TABS_BG_SW', $this -> defaults["pp_tabs_bg_sw"]);
          Configuration::updateValue('RC_PP_TABS_BG', $this -> defaults["pp_tabs_bg"]);


// Cart and order
          Configuration::updateValue('RC_O_ADDS', $this -> defaults["o_add"]);
          Configuration::updateValue('RC_O_OPTION', $this -> defaults["o_option"]);
          Configuration::updateValue('RC_O_OPTION_ACTIVE', $this -> defaults["o_option_active"]);
          Configuration::updateValue('RC_O_INFO_TEXT', $this -> defaults["o_info_text"]);

          Configuration::updateValue('RC_LC_C', $this -> defaults["lc_c"]);

// blog
          Configuration::updateValue('RC_BL_W', $this -> defaults["bl_w"]);
          Configuration::updateValue('RC_BL_ALIGN', $this -> defaults["bl_align"]);
          Configuration::updateValue('RC_BL_LAY', $this -> defaults["bl_lay"]);
          Configuration::updateValue('RC_BL_CONT', $this -> defaults["bl_cont"]);
          Configuration::updateValue('RC_BL_ROW', $this -> defaults["bl_row"]);
          Configuration::updateValue('RC_BL_META_SW', $this -> defaults["bl_meta_sw"]);
          Configuration::updateValue('RC_BL_HEAD', $this -> defaults["bl_head"]);
          Configuration::updateValue('RC_BL_H_TITLE', $this -> defaults["bl_h_title"]);
          Configuration::updateValue('RC_BL_H_TITLE_H', $this -> defaults["bl_h_title_h"]);
          Configuration::updateValue('RC_BL_H_META', $this -> defaults["bl_h_meta"]);
          Configuration::updateValue('RC_BL_H_DESC', $this -> defaults["bl_h_desc"]);
          Configuration::updateValue('RC_BL_META', $this -> defaults["bl_meta"]);

// footer
          Configuration::updateValue('RC_FOOTER_LAY', $this -> defaults["footer_lay"]);
          Configuration::updateValue('NC_FOOTER_W', $this -> defaults["nc_footer_w"]);
          Configuration::updateValue('NC_LOGO_FOOTER', $this -> defaults["nc_logo_footer"]);
          Configuration::updateValue('NC_FOOT_BGS', $this -> defaults["nc_foot_bg"]);
          Configuration::updateValue('NC_FOOT_BC', $this -> defaults["nc_foot_bc"]);
          Configuration::updateValue('NC_FOOT_GS', $this -> defaults["nc_foot_gs"]);
          Configuration::updateValue('NC_FOOT_GE', $this -> defaults["nc_foot_ge"]);
          Configuration::updateValue('NC_FOOT_GG', $this -> defaults["nc_foot_gg"]);
          Configuration::updateValue('NC_FOOT_IM_BG_EXT', $this -> defaults["nc_foot_im_bg_ext"]);
          Configuration::updateValue('NC_FOOT_IM_BG_REPEAT', $this -> defaults["nc_foot_im_bg_repeat"]);
          Configuration::updateValue('NC_FOOT_IM_BG_POSITION', $this -> defaults["nc_foot_im_bg_position"]);
          Configuration::updateValue('NC_FOOT_IM_BG_FIXED', $this -> defaults["nc_foot_im_bg_fixed"]);
          Configuration::updateValue('RC_FOOTER_BORDER', $this -> defaults["footer_border"]);
          Configuration::updateValue('RC_FOOTER_BORDER_SW', $this -> defaults["footer_border_sw"]);
          Configuration::updateValue('RC_FOOTER_TITLES', $this -> defaults["footer_titles"]);
          Configuration::updateValue('RC_FOOTER_TEXT', $this -> defaults["footer_text"]);
          Configuration::updateValue('RC_FOOTER_LINK', $this -> defaults["footer_link"]);
          Configuration::updateValue('RC_FOOTER_LINK_H', $this -> defaults["footer_link_h"]);
          Configuration::updateValue('RC_FOOTER_NEWS_BG', $this -> defaults["footer_news_bg"]);
          Configuration::updateValue('RC_FOOTER_NEWS_BORDER', $this -> defaults["footer_news_border"]);
          Configuration::updateValue('RC_FOOTER_NEWS_PLACEH', $this -> defaults["footer_news_placeh"]);
          Configuration::updateValue('RC_FOOTER_NEWS_COLOR', $this -> defaults["footer_news_color"]);
          Configuration::updateValue('RC_FOOTER_NEWS_BUTTON', $this -> defaults["footer_news_button"]);
          Configuration::updateValue('NC_FOOTER_SOC', $this -> defaults["nc_footer_soc"]);
          Configuration::updateValue('NC_FOOTER_SOCTITLE', $this -> defaults["nc_footer_soctitle"]);
          Configuration::updateValue('NC_FOOTER_LINKTITLE', $this -> defaults["nc_footer_linktitle"]);

// Mobile
          Configuration::updateValue('NC_SIDE_BTN', $this -> defaults["nc_side_btn"]);
          Configuration::updateValue('NC_SIDE_BG', $this -> defaults["nc_side_bg"]);
          Configuration::updateValue('NC_SIDE_B', $this -> defaults["nc_side_b"]);
          Configuration::updateValue('NC_SIDE_TITLE', $this -> defaults["nc_side_title"]);
          Configuration::updateValue('NC_SIDE_TEXT', $this -> defaults["nc_side_text"]);
          Configuration::updateValue('NC_SIDE_BTNB', $this -> defaults["nc_side_btnb"]);
          Configuration::updateValue('NC_SIDE_BTNBG', $this -> defaults["nc_side_btnbg"]);

          Configuration::updateValue('NC_LOGO_MOBILE', $this -> defaults["nc_logo_mobile"]);
          Configuration::updateValue('NC_MOB_HEADER', $this -> defaults["nc_mob_header"]);
          Configuration::updateValue('NC_MOB_MENU', $this -> defaults["nc_mob_menu"]);
          Configuration::updateValue('NC_MOB_HP', $this -> defaults["nc_mob_hp"]);
          Configuration::updateValue('NC_MOB_CAT', $this -> defaults["nc_mob_cat"]);

// typography
          Configuration::updateValue('RC_F_HEADINGS', $this -> defaults["f_headings"]);
          Configuration::updateValue('RC_F_BUTTONS', $this -> defaults["f_buttons"]);
          Configuration::updateValue('RC_F_TEXT', $this -> defaults["f_text"]);
          Configuration::updateValue('RC_F_PRICE', $this -> defaults["f_price"]);
          Configuration::updateValue('RC_F_MENU', $this -> defaults["f_menu"]);
          Configuration::updateValue('RC_F_PN', $this -> defaults["f_pn"]);
          Configuration::updateValue('RC_LATIN_EXT', $this -> defaults["latin_ext"]);
          Configuration::updateValue('RC_CYRILLIC', $this -> defaults["cyrillic"]);

          Configuration::updateValue('RC_FS_TEXT', $this -> defaults["fs_text"]);
          Configuration::updateValue('RC_LH_TEXT', $this -> defaults["lh_text"]);
          Configuration::updateValue('RC_FW_TEXT', $this -> defaults["fw_text"]);
          Configuration::updateValue('RC_LS_TEXT', $this -> defaults["ls_text"]);

          Configuration::updateValue('RC_FW_LINK', $this -> defaults["fw_link"]);

          Configuration::updateValue('RC_FS_BTN', $this -> defaults["fs_btn"]);
          Configuration::updateValue('RC_FW_BTN', $this -> defaults["fw_btn"]);
          Configuration::updateValue('RC_LS_BTN', $this -> defaults["ls_btn"]);
          Configuration::updateValue('RC_UP_BTN', $this -> defaults["up_btn"]);

          Configuration::updateValue('RC_FS_INP', $this -> defaults["fs_inp"]);
          Configuration::updateValue('RC_FW_INP', $this -> defaults["fw_inp"]);
          Configuration::updateValue('RC_LS_INP', $this -> defaults["ls_inp"]);

          Configuration::updateValue('RC_FS_FOOT', $this -> defaults["fs_foot"]);
          Configuration::updateValue('RC_FW_FOOT', $this -> defaults["fw_foot"]);
          Configuration::updateValue('RC_LS_FOOT', $this -> defaults["ls_foot"]);
          Configuration::updateValue('RC_UP_FOOT', $this -> defaults["up_foot"]);

          Configuration::updateValue('RC_FS_HOME_TIT', $this -> defaults["fs_home_tit"]);
          Configuration::updateValue('RC_FW_HOME_TIT', $this -> defaults["fw_home_tit"]);
          Configuration::updateValue('RC_LS_HOME_TIT', $this -> defaults["ls_home_tit"]);
          Configuration::updateValue('RC_UP_HOME_TIT', $this -> defaults["up_home_tit"]);

          Configuration::updateValue('RC_FS_HOME_SUB', $this -> defaults["fs_home_sub"]);
          Configuration::updateValue('RC_FW_HOME_SUB', $this -> defaults["fw_home_sub"]);
          Configuration::updateValue('RC_LS_HOME_SUB', $this -> defaults["ls_home_sub"]);
          Configuration::updateValue('RC_UP_HOME_SUB', $this -> defaults["up_home_sub"]);

          Configuration::updateValue('RC_FS_PAGE_HEAD', $this -> defaults["fs_page_head"]);
          Configuration::updateValue('RC_FW_PAGE_HEAD', $this -> defaults["fw_page_head"]);
          Configuration::updateValue('RC_LS_PAGE_HEAD', $this -> defaults["ls_page_head"]);
          Configuration::updateValue('RC_UP_PAGE_HEAD', $this -> defaults["up_page_head"]);

          Configuration::updateValue('RC_FS_PAGE_H3', $this -> defaults["fs_page_h3"]);
          Configuration::updateValue('RC_FW_PAGE_H3', $this -> defaults["fw_page_h3"]);
          Configuration::updateValue('RC_LS_PAGE_H3', $this -> defaults["ls_page_h3"]);
          Configuration::updateValue('RC_UP_PAGE_H3', $this -> defaults["up_page_h3"]);

          Configuration::updateValue('RC_FS_PAGE_SIDE', $this -> defaults["fs_page_side"]);
          Configuration::updateValue('RC_FW_PAGE_SIDE', $this -> defaults["fw_page_side"]);
          Configuration::updateValue('RC_LS_PAGE_SIDE', $this -> defaults["ls_page_side"]);
          Configuration::updateValue('RC_UP_PAGE_SIDE', $this -> defaults["up_page_side"]);

          Configuration::updateValue('RC_FS_CAT_NAME', $this -> defaults["fs_cat_name"]);
          Configuration::updateValue('RC_FW_CAT_NAME', $this -> defaults["fw_cat_name"]);
          Configuration::updateValue('RC_LS_CAT_NAME', $this -> defaults["ls_cat_name"]);
          Configuration::updateValue('RC_UP_CAT_NAME', $this -> defaults["up_cat_name"]);

          Configuration::updateValue('RC_FS_CAT_PRICE', $this -> defaults["fs_cat_price"]);
          Configuration::updateValue('RC_FW_CAT_PRICE', $this -> defaults["fw_cat_price"]);
          Configuration::updateValue('RC_LS_CAT_PRICE', $this -> defaults["ls_cat_price"]);

          Configuration::updateValue('RC_FS_PP_NAME', $this -> defaults["fs_pp_name"]);
          Configuration::updateValue('RC_FW_PP_NAME', $this -> defaults["fw_pp_name"]);
          Configuration::updateValue('RC_LS_PP_NAME', $this -> defaults["ls_pp_name"]);
          Configuration::updateValue('RC_UP_PP_NAME', $this -> defaults["up_pp_name"]);

          Configuration::updateValue('RC_FS_PP_PRICE', $this -> defaults["fs_pp_price"]);
          Configuration::updateValue('RC_FW_PP_PRICE', $this -> defaults["fw_pp_price"]);
          Configuration::updateValue('RC_LS_PP_PRICE', $this -> defaults["ls_pp_price"]);

          Configuration::updateValue('RC_FS_BLOG', $this -> defaults["fs_blog"]);
          Configuration::updateValue('RC_FW_BLOG', $this -> defaults["fw_blog"]);
          Configuration::updateValue('RC_LS_BLOG', $this -> defaults["ls_blog"]);
          Configuration::updateValue('RC_UP_BLOG', $this -> defaults["up_blog"]);

          Configuration::updateValue('RC_FS_MENU', $this -> defaults["fs_menu"]);
          Configuration::updateValue('RC_FW_MENU', $this -> defaults["fw_menu"]);
          Configuration::updateValue('RC_LS_MENU', $this -> defaults["ls_menu"]);
          Configuration::updateValue('RC_UP_MENU', $this -> defaults["up_menu"]);

// Custom CSS
          Configuration::updateValue('NC_CSS', $this -> defaults["nc_css"]);

            $this -> generateCss();
        }

        if ($errors)
            $output .= $this -> displayError($errors);

        return $output . $this -> displayForm();
    }


    public function displayForm() {
        $defaultLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
        $languages = Language::getLanguages(false);
        $divLangName = 'text¤title';
        $html="";
        $html .= '
		<script type="text/javascript">
			id_language = Number(' . $defaultLanguage . ');
		</script>

		<form action="' . Tools::safeOutput($_SERVER['REQUEST_URI']) . '" method="post" enctype="multipart/form-data" class="roytc_form">
			<fieldset class="roytc_filedset" style="margin-bottom: 20px;">
                <div class="customizer_wrapper">
                    <div class="roytc_navigation">
                        <ul id="#sidenav" class="ulnav">
                            <li class="rtc_menu1 tab" id="tab_menu_1">
                                <a data-toggle="tab" title="Layout and Color scheme" href="#tab-general"><i class="icon-layout"></i><span>1</span>Demo import</a>
                            </li>
                            <li class="rtc_menu2 tab" id="tab_menu_2">
                                <a data-toggle="tab" title="Header Options" href="#tab-header"><i class="icon-credit-card"></i><span>2</span>Header options</a>
                            </li>
                            <li class="rtc_menu1 tab" id="tab_menu_20">
                                <a data-toggle="tab" title="Body and Sections" href="#tab-global" class="upper"><i class="icon-aperture rotate"></i><span>3</span>Body Design</a>
                            </li>
                            <li class="rtc_menu3 tab" id="tab_menu_3">
                                <a data-toggle="tab" title="Homepage Content" href="#tab-homepage" class=""><i class="icon-monitor"></i><span>4</span>Homepage</a>
                            </li>
                            <li class="rtc_menu4 tab" id="tab_menu_4">
                                <a data-toggle="tab" title="Page and sidebar" href="#tab-page" class=""><i class="icon-file-text upper"></i><span>5</span>Shop Pages</a>
                            </li>
                            <li class="rtc_menu4 tab" id="tab_menu_19">
                                <a data-toggle="tab" title="Sidebar blocks and Filter" href="#tab-sidebar" class=""><i class="icon-sidebar"></i><span>6</span>Sidebar blocks</a>
                            </li>
                            <li class="rtc_menu5 tab" id="tab_menu_5">
                                <a data-toggle="tab" title="Products and Categories" href="#tab-productlist" class=""><i class="icon-grid"></i><span>7</span>Product list</a>
                            </li>
                            <li class="rtc_menu6 tab" id="tab_menu_6">
                                <a data-toggle="tab" title="Product page" href="#tab-productpage"><i class="icon-box"></i><span>8</span>Product page</a>
                            </li>
                            <li class="rtc_menu7 tab" id="tab_menu_7">
                                <a data-toggle="tab" title="Cart and order" href="#tab-cart"><i class="icon-shopping-cart upper"></i><span>9</span>Cart and order </a>
                            </li>
                            <li class="rtc_menu9 tab" id="tab_menu_9">
                                <a data-toggle="tab" title="Blog" href="#tab-blog"><i class="icon-image upper"></i><span>10</span>Blog</a>
                            </li>
                            <li class="rtc_menu10 tab" id="tab_menu_10">
                                <a data-toggle="tab" title="Footer" href="#tab-footer"><i class="icon-book"></i><span>11</span>Footer</a>
                            </li>
                            <li class="rtc_menu14 tab" id="tab_menu_14">
                                <a data-toggle="tab" title="Side" href="#tab-side" class=""><i class="icon-smartphone"></i><span>12</span>Mobile layout</a>
                            </li>
                            <li class="rtc_menu11 tab" id="tab_menu_11">
                                <a data-toggle="tab" title="Typography" href="#tab-fonts"><i class="icon-bold"></i><span>13</span>Typography</a>
                            </li>
                            <li class="rtc_menu12 tab" id="tab_menu_12">
                                <a data-toggle="tab" title="Custom CSS" href="#tab-css"><i class="icon-slack"></i><span>14</span>Custom CSS</a>
                            </li>
                            <li class="rtc_menu13 tab" id="tab_menu_13">
                                <a data-toggle="tab" title="Import / Export config" href="#tab-ie" class="tworows"><i class="icon-package upper"></i><span>15</span>Import / Export<br /> config</a>
                            </li>
                        </ul>
                    </div>

                <div class="roytc_content">
                    <div class="tab-pane" id ="tab-general">
                    <h2 class="rtc_title1">' . $this->l('Demo import') . '</h2>


                    <div class="nav_inside_container">
                          <ul class="nav_inside">
                                <li class="inside_tabactive">
                                      <a data-inside="tab" class="active" href="#tab-layout1"><span>1</span>Demo settings</a>
                                </li>
                                <li class="inside_tab">
                                      <a data-inside="tab" href="#tab-layout2"><span>2</span>Demo colors</a>
                                </li>
                                <li class="save_li"><i></i>
                                  <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                                </li>
                          </ul>
                    </div>

                    <div class="section hide" id="tab-layout1">

                        <h3 class="first" style="padding-bottom:50px;">Import DEMO Settings</h3>
                        <div class="roytc_row ds_wrap" style="margin-right:-22px;">
                              <div class="margin-form" style="margin-bottom:0; display:inline-block">
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo1" value="1" ' . ((Configuration::get('NC_SELECT_DEMO') == "1") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo mercury" for="select_demo1"> <span>mercury</span></label>
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo2" value="2" ' . ((Configuration::get('NC_SELECT_DEMO') == "2") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo blackhole" for="select_demo2"> <span>blackhole</span></label>
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo4" value="4" ' . ((Configuration::get('NC_SELECT_DEMO') == "4") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo venus" for="select_demo4"> <span>venus</span></label>
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo3" value="3" ' . ((Configuration::get('NC_SELECT_DEMO') == "3") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo uranus" for="select_demo3"> <span>uranus</span></label>
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo6" value="6" ' . ((Configuration::get('NC_SELECT_DEMO') == "6") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo mars" for="select_demo6"> <span>mars</span></label>
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo5" value="5" ' . ((Configuration::get('NC_SELECT_DEMO') == "5") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo neptune" for="select_demo5"> <span>neptune</span></label>
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo7" value="7" ' . ((Configuration::get('NC_SELECT_DEMO') == "7") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo comet" for="select_demo7"> <span>comet</span></label>
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo9" value="9" ' . ((Configuration::get('NC_SELECT_DEMO') == "9") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo astra" for="select_demo9"> <span>astra</span></label>
                                    <input type="radio" class="regular-radio select_demo" name="select_demo" id="select_demo8" value="8" ' . ((Configuration::get('NC_SELECT_DEMO') == "8") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo jupiter" for="select_demo8"> <span>jupiter</span></label>
                              </div>

                              <div class="margin-form" style="margin-top:0;">
                                    <div class="demo_apply"><span></span>Apply Demo settings</div>

                                    <div style="padding-top:10px; display:inline-block; width:100%">
                                    <p class="clear helpcontent" style="margin-top:16px;">
                                    ' . $this->l('It will change only settings like layouts of elements, spacings, widths, icons, etc, not change colors.') . '<br /><br />
                                    ' . $this->l('This switcher does not import banners and sliders of demo. You should do it according to guide.') . '<br /><br />
                                    ' . $this->l('It will change settings of customizer module and erase your current settings!') . '
                                    </p>
                                    </div>
                              </div>
                        </div>
                        </div>

                        <div class="section hide" id="tab-layout2">
                        <h3 style="padding-bottom:50px;">Import DEMO Color Scheme</h3>
                        <div class="roytc_row ds_wrap" style="margin-right:-22px;">
                              <div class="margin-form" style="display:inline-block">
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme1" value="1" ' . ((Configuration::get('NC_SELECT_SCHEME') == "1") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_mercury" for="select_scheme1"> <span>mercury</span></label>
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme2" value="2" ' . ((Configuration::get('NC_SELECT_SCHEME') == "2") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_blackhole" for="select_scheme2"> <span>blackhole</span></label>
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme4" value="4" ' . ((Configuration::get('NC_SELECT_SCHEME') == "4") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_venus" for="select_scheme4"> <span>venus</span></label>
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme3" value="3" ' . ((Configuration::get('NC_SELECT_SCHEME') == "3") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_uranus" for="select_scheme3"> <span>uranus</span></label>
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme6" value="6" ' . ((Configuration::get('NC_SELECT_SCHEME') == "6") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_mars" for="select_scheme6"> <span>mars</span></label>
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme5" value="5" ' . ((Configuration::get('NC_SELECT_SCHEME') == "5") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_neptune" for="select_scheme5"> <span>neptune</span></label>
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme7" value="7" ' . ((Configuration::get('NC_SELECT_SCHEME') == "7") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_comet" for="select_scheme7"> <span>comet</span></label>
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme9" value="9" ' . ((Configuration::get('NC_SELECT_SCHEME') == "9") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_astra" for="select_scheme9"> <span>astra</span></label>
                                    <input type="radio" class="regular-radio select_scheme" name="select_scheme" id="select_scheme8" value="8" ' . ((Configuration::get('NC_SELECT_SCHEME') == "8") ? 'checked="checked" ' : '') . '/>
                                    <label class="ds_demo s_jupiter" for="select_scheme8"> <span>jupiter</span></label>
                              </div>

                              <div class="margin-form" style="margin-top:0;">
                                    <div class="colors_apply"><span></span>Apply Color scheme</div>
                                    <div style="padding-top:10px; display:inline-block">
                                          <p class="clear helpcontent" style="">' . $this->l('It will change colors of your theme to premade color scheme, according to each demo and more. You can mix it of course.') . '<br /><br />
                                    ' . $this->l('If you want to change design of specific element or type of elements (buttons border for example) – you can set color scheme that you want, then go to tabs and find your element.') . '</p>
                                    </div>
                                    <p class="clear helpcontent">' . $this->l('Don’t forget to export your config after finished design customization.') . '</p>

                              </div>
                        </div>
            </div>
            </div>

            <div class="tab-pane" id ="tab-global">
                    <h2 class="rtc_title20">' . $this->l('Body and sections') . '</h2>
                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-global1 active">
                                    <a data-inside="tab" href="#tab-global1"><span>1</span>Body design</a>
                              </li>
                              <li class="inside_tab tab-global5">
                                    <a data-inside="tab" href="#tab-global5"><span>2</span>Buttons</a>
                              </li>
                              <li class="inside_tab tab-global6">
                                    <a data-inside="tab" href="#tab-global6"><span>3</span>Inputs</a>
                              </li>
                              <li class="inside_tab tab-global4">
                                    <a data-inside="tab" href="#tab-global4"><span>4</span>Loader</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

            <div class="section" id="tab-global1">
            <h3 class="first">Body design</h3>

                <div class="roywrap fw">
                <div class="roytc_row">
                    <label>' . $this->l('Body background') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_bg_content"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_BG_CONTENT') . '" />
                        </div></div>
                <div class="roytc_row">
                    <label>' . $this->l('Titles') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_header"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_HEADER') . '" />
                        </div></div>
                <div class="roytc_row">
                    <label>' . $this->l('Text color') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_body_text"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_BODY_TEXT') . '" />
                        </div></div>
                <div class="roytc_row">
                    <label>' . $this->l('Body link color') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_body_link"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_BODY_LINK') . '" />
                        </div></div>
                <div class="roytc_row">
                    <label>' . $this->l('Body hover link color') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_body_link_hover"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_BODY_LINK_HOVER') . '" />
                        </div></div>
                <div class="roytc_row">
                    <label>' . $this->l('Body label') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_label"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_LABEL') . '" />
                        </div></div>
                <div class="roytc_row">
                    <label>' . $this->l('Body notes / comments') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_body_comment"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_BODY_COMMENT') . '" />
                        </div></div>
                <div class="roytc_row">
                    <label>' . $this->l('Content borders / separators') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_border"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_BORDER') . '" />
                        </div></div>
            </div>

            <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Body link effect on hover') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="g_link_effect" value="1" id="g_link_effect1" ' . ((Configuration::get('RC_G_LINK_EFFECT') == "1") ? 'checked="checked" ' : '') . ' />
                      <label class="ds link_hover1" for="g_link_effect1"> <span>1 . Underline</span></label>
                      <input type="radio" class="regular-radio" name="g_link_effect" value="2" id="g_link_effect2" ' . ((Configuration::get('RC_G_LINK_EFFECT') == "2") ? 'checked="checked" ' : '') . ' />
                      <label class="ds link_hover2" for="g_link_effect2"> <span>2 . Crossline</span></label>
                      <input type="radio" class="regular-radio" name="g_link_effect" value="3" id="g_link_effect3" ' . ((Configuration::get('RC_G_LINK_EFFECT') == "3") ? 'checked="checked" ' : '') . ' />
                      <label class="ds link_hover3" for="g_link_effect3"> <span>3 . Marker</span></label>
                      <input type="radio" class="regular-radio" name="g_link_effect" value="4" id="g_link_effect4" ' . ((Configuration::get('RC_G_LINK_EFFECT') == "4") ? 'checked="checked" ' : '') . ' />
                      <label class="ds link_hover4" for="g_link_effect4"> <span>4 . Opacity</span></label>
            </div></div>
            <div class="roytc_row">
                  <label>' . $this->l('Link effect hover color') . '</label>
                  <div class="margin-form">
                  <input type="color" name="g_link_effectc"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_LINK_EFFECTC') . '" />
            </div></div>

            <h4>Forms</h4>
            <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Forms layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="g_form" value="1" id="g_form1" ' . ((Configuration::get('RC_G_FORMS') == "1") ? 'checked="checked" ' : '') . ' />
                      <label class="ds g_form1" for="g_form1"> <span>1 . Labels</span></label>
                      <input type="radio" class="regular-radio" name="g_form" value="2" id="g_form2" ' . ((Configuration::get('RC_G_FORMS') == "2") ? 'checked="checked" ' : '') . ' />
                      <label class="ds g_form2" for="g_form2"> <span>2 . Placeholders</span></label>
            </div></div>

            <h4>Controls</h4>
            <div class="roytc_row ds_wrap fw">
               <label>' . $this->l('Product sliders controls display') . '</label>
               <div class="margin-form">
                   <input type="radio" class="regular-radio" name="con_pro" value="1" id="con_pro1" ' . ((Configuration::get('RC_CON_PRO') == "1") ? 'checked="checked" ' : '') . ' />
                   <label class="ds bg5" for="con_pro1"> <span>1 . No controls</span></label>
                   <input type="radio" class="regular-radio" name="con_pro" value="2" id="con_pro2" ' . ((Configuration::get('RC_CON_PRO') == "2") ? 'checked="checked" ' : '') . ' />
                   <label class="ds con_lay1" for="con_pro2"> <span>2 . Show on hover</span></label>
                   <input type="radio" class="regular-radio" name="con_pro" value="3" id="con_pro3" ' . ((Configuration::get('RC_CON_PRO') == "3") ? 'checked="checked" ' : '') . ' />
                   <label class="ds con_lay2" for="con_pro3"> <span>3 . Show always</span></label>
           </div></div>
            <div class="roytc_row ds_wrap fw">
               <label>' . $this->l('Product sliders controls position') . '</label>
               <div class="margin-form">
                   <input type="radio" class="regular-radio" name="con_pos" value="1" id="con_pos1" ' . ((Configuration::get('RC_CON_POS') == "1") ? 'checked="checked" ' : '') . ' />
                   <label class="ds con_pos1" for="con_pos1"> <span>1 . Middle</span></label>
                   <input type="radio" class="regular-radio" name="con_pos" value="2" id="con_pos2" ' . ((Configuration::get('RC_CON_POS') == "2") ? 'checked="checked" ' : '') . ' />
                   <label class="ds con_pos2" for="con_pos2"> <span>2 . Top</span></label>
                   <input type="radio" class="regular-radio" name="con_pos" value="3" id="con_pos3" ' . ((Configuration::get('RC_CON_POS') == "3") ? 'checked="checked" ' : '') . ' />
                   <label class="ds con_pos3" for="con_pos3"> <span>3 . Top-Right</span></label>
           </div></div>
           <div class="roytc_row ds_wrap fw">
              <label>' . $this->l('Brands controls display') . '</label>
              <div class="margin-form">
                  <input type="radio" class="regular-radio" name="con_bra" value="1" id="con_bra1" ' . ((Configuration::get('RC_CON_BRA') == "1") ? 'checked="checked" ' : '') . ' />
                  <label class="ds bg5" for="con_bra1"> <span>1 . No controls</span></label>
                  <input type="radio" class="regular-radio" name="con_bra" value="2" id="con_bra2" ' . ((Configuration::get('RC_CON_BRA') == "2") ? 'checked="checked" ' : '') . ' />
                  <label class="ds con_lay1" for="con_bra2"> <span>2 . Show on hover</span></label>
                  <input type="radio" class="regular-radio" name="con_bra" value="3" id="con_bra3" ' . ((Configuration::get('RC_CON_BRA') == "3") ? 'checked="checked" ' : '') . ' />
                  <label class="ds con_lay2" for="con_bra3"> <span>3 . Show always</span></label>
          </div></div>
          <div class="roytc_row ds_wrap fw">
             <label>' . $this->l('Sale side block controls display') . '</label>
             <div class="margin-form">
                 <input type="radio" class="regular-radio" name="con_sale" value="1" id="con_sale1" ' . ((Configuration::get('RC_CON_SALE') == "1") ? 'checked="checked" ' : '') . ' />
                 <label class="ds bg5" for="con_sale1"> <span>1 . No controls</span></label>
                 <input type="radio" class="regular-radio" name="con_sale" value="2" id="con_sale2" ' . ((Configuration::get('RC_CON_SALE') == "2") ? 'checked="checked" ' : '') . ' />
                 <label class="ds con_lay1" for="con_sale2"> <span>2 . Show on hover</span></label>
                 <input type="radio" class="regular-radio" name="con_sale" value="3" id="con_sale3" ' . ((Configuration::get('RC_CON_SALE') == "3") ? 'checked="checked" ' : '') . ' />
                 <label class="ds con_lay2" for="con_sale3"> <span>3 . Show always</span></label>
         </div></div>

            <h4>Tooltip</h4>
            <div class="roywrap ds_wrap fw">
                  <div class="roytc_row">
                     <label>' . $this->l('Background') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_hb"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_HB') . '" />
                  </div></div>
                  <div class="roytc_row">
                     <label>' . $this->l('Color') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_hc"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_HC') . '" />
                  </div></div>
            </div>

            <h4>Tables</h4>
            <div class="roywrap ds_wrap fw">
                <div class="roytc_row">
                    <label>' . $this->l('Border') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_normal_border"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_NORMAL_BORDER') . '" />
                </div></div>
                <div class="roytc_row">
                    <label>' . $this->l('Important border') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_extra_border"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_G_EXTRA_BORDER') . '" />
                </div></div>
            </div>

            <h4>Fancybox</h4>
            <div class="roywrap ds_wrap fw">
                  <div class="roytc_row">
                     <label>' . $this->l('Name background') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_fancy_nbg"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FANCY_NBG') . '" />
                  </div></div>
                  <div class="roytc_row">
                     <label>' . $this->l('Name color') . '</label>
                        <div class="margin-form">
                              <input type="color" name="g_fancy_nc"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FANCY_NC') . '" />
                  </div></div>
              </div>
          </div>

          <div class="section" id="tab-global5">
                     <h3>' . $this->l('Buttons') . '</h3>

                            <div class="roytc_row">
                                  <label>' . $this->l('Buttons border radius') . '</label>
                                  <div class="margin-form">
                                        <input type="text" name="nc_b_radius"  value="' . Configuration::get('NC_B_RADIUSS') . '" />px
                                        <p class="clear helpcontent">Recommendation: 0-10
                                        </p>
                                  </div>
                            </div>
                            <div class="roytc_row">
                              <label>' . $this->l('Buttons shadow') . '</label>
                            <div class="margin-form">
                                <input type="radio" class="regular-radio" name="nc_b_sh" id="nc_b_sh1" value="1" ' . ((Configuration::get('NC_B_SHS') == 1) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_b_sh1"> Yes</label>
                                <input type="radio" class="regular-radio" name="nc_b_sh" id="nc_b_sh0" value="0" ' . ((Configuration::get('NC_B_SHS') == 0) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_b_sh0"> No</label>
                            </div></div>

                <div class="hr"></div>

                <div class="roywrap section">
                		 <div class="roytc_row">
                        <label>' . $this->l('Normal button background') . '</label>
                        <div class="margin-form">
                        <input type="color" name="b_normal_bg"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_B_NORMAL_BG') . '" /></div>
                     </div>
            				 <div class="roytc_row">
                        <label>' . $this->l('Normal button border') . '</label>
                        <div class="margin-form">
                        <input type="color" name="b_normal_border"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_B_NORMAL_BORDER') . '" /></div>
                     </div>
            				 <div class="roytc_row">
                        <label>' . $this->l('Normal button color') . '</label>
                        <div class="margin-form">
                        <input type="color" name="b_normal_color"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_B_NORMAL_COLOR') . '" /></div>
                     </div>
               </div>
                               <div class="hr"></div>

                <div class="roywrap section">
                      <div class="roytc_row">
                        <label>' . $this->l('Extra button background') . '</label>
                        <div class="margin-form">
                        <input type="color" name="b_ex_bg"  class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('RC_B_EX_BG') . '" /></div>
                      </div>
                      <div class="roytc_row">
                        <label>' . $this->l('Extra button border') . '</label>
                        <div class="margin-form">
                        <input type="color" name="b_ex_border"  class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('RC_B_EX_BORDER') . '" /></div>
                      </div>
                      <div class="roytc_row">
                        <label>' . $this->l('Extra button color') . '</label>
                        <div class="margin-form">
                        <input type="color" name="b_ex_color"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_B_EX_COLOR') . '" /></div>
                      </div>
                </div>
                                <div class="hr"></div>

                 <div class="roywrap section">
                        <div class="roytc_row">
                          <label>' . $this->l('Mouse over background') . '</label>
                          <div class="margin-form">
                          <input type="color" name="b_normal_bg_hover"  class="colorpicker cs_sc" data-hex="true" value="' . Configuration::get('RC_B_NORMAL_BG_HOVER') . '" /></div>
                        </div>
                        <div class="roytc_row">
                          <label>' . $this->l('Mouse over border') . '</label>
                          <div class="margin-form">
                          <input type="color" name="b_normal_border_hover"  class="colorpicker cs_sc" data-hex="true" value="' . Configuration::get('RC_B_NORMAL_BORDER_HOVER') . '" /></div>
                        </div>
                        <div class="roytc_row">
                          <label>' . $this->l('Mouse over color') . '</label>
                          <div class="margin-form">
                          <input type="color" name="b_normal_color_hover"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_B_NORMAL_COLOR_HOVER') . '" /></div>
                        </div>
                  </div>

          </div>

          <div class="section" id="tab-global6">
               <h3>' . $this->l('Inputs') . '</h3>

                      <div class="roytc_row">
                            <label>' . $this->l('Inputs border radius') . '</label>
                            <div class="margin-form">
                                  <input type="text" name="i_b_radius"  value="' . Configuration::get('RC_I_B_RADIUS') . '" />px
                                  <p class="clear helpcontent">Recommendation: 0-10
                                  </p>
                            </div>
                      </div>

                <div class="hr"></div>

                <div class="roywrap">
                       <div class="roytc_row">
                        <label>' . $this->l('Inputs background') . '</label>
                        <div class="margin-form">
                        <input type="color" name="i_bg"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_I_BG') . '" /></div>
                     </div>
                             <div class="roytc_row">
                        <label>' . $this->l('Inputs border') . '</label>
                        <div class="margin-form">
                        <input type="color" name="i_b_color"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_I_B_COLOR') . '" /></div>
                     </div>
                             <div class="roytc_row">
                        <label>' . $this->l('Inputs color') . '</label>
                        <div class="margin-form">
                        <input type="color" name="i_color"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_I_COLOR') . '" /></div>
                     </div>
                 </div>

                 <div class="hr"></div>
                 <div class="roywrap">
                             <div class="roytc_row">
                        <label>' . $this->l('Inputs focused background') . '</label>
                        <div class="margin-form">
                        <input type="color" name="i_bg_focus"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_I_BG_FOCUS') . '" /></div>
                     </div>
                             <div class="roytc_row">
                        <label>' . $this->l('Inputs focused border') . '</label>
                        <div class="margin-form">
                        <input type="color" name="i_b_focus"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_I_B_FOCUS') . '" /></div>
                     </div>
                             <div class="roytc_row">
                        <label>' . $this->l('Inputs focused color') . '</label>
                        <div class="margin-form">
                        <input type="color" name="i_color_focus"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_I_COLOR_FOCUS') . '" /></div>
                     </div>
                 </div>

                <div class="hr"></div>

                <div class="roywrap">
                    <div class="roytc_row">
                      <label style="line-height:18px">' . $this->l('Placeholder color') . '</label>
                      <div class="margin-form">
                      <input type="color" name="i_ph"  class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('RC_I_PH') . '" /></div>
                    </div>

                  <div class="roytc_row">
                    <label style="line-height:18px">' . $this->l('Checkbox / radio button') . '</label>
                    <div class="margin-form">
                    <input type="color" name="rc_bg_active"  class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('RC_RC_BG_ACTIVE') . '" /></div>
                  </div>
              </div>

          </div>

          <div class="section" id="tab-global4">
                  <h3 class="first">Loader options</h3>
                  <div class="roytc_row">
                        <label>' . $this->l('Display Loader?') . '</label>
                        <div class="yn">
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="nc_loader" id="nc_loader_1" value="1" ' . ((Configuration::get('NC_LOADERS') == 1) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="nc_loader_1"> Yes</label>
                            <input type="radio" class="regular-radio" name="nc_loader" id="nc_loader_0" value="0" ' . ((Configuration::get('NC_LOADERS') == 0) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="nc_loader_0"> No</label>
                  </div></div></div>

                  <div class="roytc_row ds_wrap">
                        <label>' . $this->l('Loader Layout') . '</label>
                        <div class="margin-form" style="margin-top:0; padding-top:10px;">
                            <input type="radio" class="regular-radio" name="nc_loader_logo" value="1" id="nc_loader_logo1" ' . ((Configuration::get('NC_LOADER_LOGOS') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds nc_loader1" for="nc_loader_logo1"> <span>1 . Loader</span></label>
                            <input type="radio" class="regular-radio" name="nc_loader_logo" value="2" id="nc_loader_logo2" ' . ((Configuration::get('NC_LOADER_LOGOS') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds nc_loader2" for="nc_loader_logo2"> <span>2 . Logo + loader</span></label>
                            <input type="radio" class="regular-radio" name="nc_loader_logo" value="3" id="nc_loader_logo3" ' . ((Configuration::get('NC_LOADER_LOGOS') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds nc_loader3" for="nc_loader_logo3"> <span>3 . Logo only</span></label>
                  </div></div>


                  <div class="roytc_row" style="margin-top:0;">
                        <label>' . $this->l('Loader logo upload') . '</label>
                            <div class="margin-form" style="margin-top:0;">
                                  <div class="file_design"></div>
                                <input id="logo_loader_field2" type="file" name="logo_loader_field2">
                                <input id="logo_loader_button2" type="submit" class="button" name="logo_loader_button2" value="' . $this->l('Upload') . '">
                                <p class="clear helpcontent">' . $this->l('Max width - 480px, max height - 240px. Preffered format - transparent .png') . '</p>
                            </div>';
                    $loader_logo_ext = Configuration::get('NC_LOGO_LOADER');
                    if ($loader_logo_ext != "") {
                        if (Shop::getContext() == Shop::CONTEXT_SHOP)
                            $adv_imgname = 'logo-loader'.'-'.(int)$this->context->shop->getContextShopID();

                        $html .= '<label>' . $this->l('Loader logo') . '</label>
                                                <div class="margin-form">
                                                <img class="imgback" src="' . $this -> _path .'upload/'.$adv_imgname.'.' . $loader_logo_ext . '" /><br /><br />
                                                <input id="logo_loader_delete2" type="submit" class="button" value="' . $this->l('Delete image') . '" name="logo_loader_delete2">
                                                </div>';
                    }

                    $html .= '
                  </div>

                  <div class="hr"></div>

                  <div class="roywrap">
                  <div class="roytc_row">
                        <label>' . $this->l('Loader background') . '</label>
                        <div class="margin-form">
                              <input type="color" name="nc_loader_bg"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_LOADER_BG') . '" />
                  </div></div>
                  <div class="roytc_row">
                        <label>' . $this->l('Loader color') . '</label>
                        <div class="margin-form">
                              <input type="color" name="nc_loader_color"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_LOADER_COLOR') . '" />
                  </div></div></div>
          </div>

            </div>

            <div class="tab-pane" id ="tab-header">
                  <h2 class="rtc_title2">' . $this->l('Header options') . '</h2>
                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-header1 active">
                                    <a data-inside="tab" class="active" href="#tab-header1"><span>1</span>Layout</a>
                              </li>
                              <li class="inside_tab tab-header2">
                                    <a data-inside="tab" href="#tab-header2"><span>2</span>Menu</a>
                              </li>
                              <li class="inside_tab tab-header3">
                                    <a data-inside="tab" href="#tab-header3"><span>3</span>Search</a>
                              </li>
                              <li class="inside_tab tab-header4">
                                    <a data-inside="tab" href="#tab-header4"><span>4</span>Cart</a>
                              </li>
                              <li class="inside_tab tab-header5">
                                    <a data-inside="tab" href="#tab-header5"><span>5</span>Account</a>
                              </li>
                              <li class="inside_tab tab-header6">
                                    <a data-inside="tab" href="#tab-header6"><span>6</span>Colors</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

                  <div class="section hide" id="tab-header1">
                        <h3 class="first">' . $this->l('Layout and design') . '</h3>
                        <div class="roytc_row ds_wrap" style="display:inline-block; margin-top:10px; margin-right:-22px;">
                              <label>' . $this->l('Select your Header') . '</label>
                              <div class="margin-form" style="margin-top:0; padding-top:10px;">
                                  <input type="radio" class="regular-radio header_lay" name="header_lay" value="1" id="header_lay1" ' . ((Configuration::get('RC_HEADER_LAY') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds ds_header header_lay1" for="header_lay1"> <span>1 . Classic</span></label>
                                  <input type="radio" class="regular-radio header_lay" name="header_lay" value="2" id="header_lay2" ' . ((Configuration::get('RC_HEADER_LAY') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds ds_header header_lay2" for="header_lay2"> <span>2 . Right side Menu</span></label>
                                  <input type="radio" class="regular-radio header_lay" name="header_lay" value="3" id="header_lay3" ' . ((Configuration::get('RC_HEADER_LAY') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds ds_header header_lay3" for="header_lay3"> <span>3 . Left side Search</span></label>
                                  <input type="radio" class="regular-radio header_lay" name="header_lay" value="4" id="header_lay4" ' . ((Configuration::get('RC_HEADER_LAY') == "4") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds ds_header header_lay4" for="header_lay4"> <span>4 . Centered</span></label>
                                  <input type="radio" class="regular-radio header_lay" name="header_lay" value="5" id="header_lay5" ' . ((Configuration::get('RC_HEADER_LAY') == "5") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds ds_header header_lay5" for="header_lay5"> <span>5 . Menu Icon</span></label>
                                  <input type="radio" class="regular-radio header_lay" name="header_lay" value="6" id="header_lay6" ' . ((Configuration::get('RC_HEADER_LAY') == "6") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds ds_header header_lay6" for="header_lay6"> <span>6 . Menu Icon Centered</span></label>
                        </div></div>

                        <div class="roytc_row ds_wrap">
                              <label>' . $this->l('Header width') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio" name="header_w" value="1" id="header_w1" ' . ((Configuration::get('RC_HEADER_W') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds width1" for="header_w1"> <span>1 . Container</span></label>
                                  <input type="radio" class="regular-radio" name="header_w" value="2" id="header_w2" ' . ((Configuration::get('RC_HEADER_W') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds width2" for="header_w2"> <span>2 . Full Width</span></label>
                        </div></div>

                        <div class="roywrap">

                         <div class="roytc_row">
                               <label>' . $this->l('Space between menu links') . '</label>
                               <div class="margin-form">
                                     <input type="text" id="nc_bw_menu" name="nc_bw_menu" readonly class="slider_val" value="' . Configuration::get('NC_BW_MENU') . '" />
                                     <div id="slider_nc_bw_menu"></div>
                               </div>
                         </div>
                         <div class="roytc_row">
                                <label>' . $this->l('Space between icons') . '</label>
                                <div class="margin-form">
                                      <input type="text" id="nc_bw_icons" name="nc_bw_icons" readonly class="slider_val" value="' . Configuration::get('NC_BW_ICONS') . '" />
                                      <div id="slider_nc_bw_icons"></div>
                                </div>
                         </div>

                        <div class="roytc_row">
                          <label>' . $this->l('Change icons opacity on hover?') . '</label>
                          <div class="yn">
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="header_opa" id="header_opa1" value="1" ' . ((Configuration::get('RC_HEADER_OPA') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="header_opa1"> Yes</label>
                              <input type="radio" class="regular-radio" name="header_opa" id="header_opa2" value="2" ' . ((Configuration::get('RC_HEADER_OPA') == 2) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="header_opa2"> No</label>
                          </div></div>
                        </div>
                        <div class="roytc_row">
                          <label>' . $this->l('Hide header on scroll down?') . '</label>
                          <div class="yn">
                          <div class="margin-form">
                              <input type="radio" class="regular-radio nc_header_hide" name="nc_header_hide" id="nc_header_hide1" value="1" ' . ((Configuration::get('NC_HEADER_HIDES') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="nc_header_hide1"> Yes</label>
                              <input type="radio" class="regular-radio nc_header_hide" name="nc_header_hide" id="nc_header_hide2" value="2" ' . ((Configuration::get('NC_HEADER_HIDES') == 2) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="nc_header_hide2"> No</label>
                          </div></div>
                        </div>
                        </div>

                        <h3 class="first">' . $this->l('Transparent header?') . '</h3>
                        <div class="roytc_row">
                        <div class="yn">
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_header_trans" name="nc_header_trans" id="nc_header_trans1" value="1" ' . ((Configuration::get('NC_HEADER_TRANSWITCH') == 1) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="nc_header_trans1"> Yes</label>
                            <input type="radio" class="regular-radio nc_header_trans" name="nc_header_trans" id="nc_header_trans2" value="2" ' . ((Configuration::get('NC_HEADER_TRANSWITCH') == 2) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="nc_header_trans2"> No</label>
                        </div></div>
                        </div>



                  <h3>' . $this->l('Logos') . '</h3>

                  <div class="roywrap w50">
                  <div class="roytc_row" style="margin-top:0;">
                        <label>' . $this->l('Normal/Sticky Header Logo upload') . '</label>
                        <div class="margin-form" style="margin-top:0;">
                              <div class="file_design"></div>
                              <input id="logo_normal_field2" type="file" name="logo_normal_field2" class="inputfile-5">
                              <input id="logo_normal_button2" type="submit" class="button" name="logo_normal_button2" value="' . $this->l('Upload') . '">
                              <p class="clear helpcontent">' . $this->l('Max height - 90px. Preffered format - transparent .png') . '</p>
                        </div>';
                        $logo_normal_ext = Configuration::get('NC_LOGO_NORMAL');
                        if ($logo_normal_ext != "") {
                          if (Shop::getContext() == Shop::CONTEXT_SHOP)
                          $adv_imgname = 'logo-normal'.'-'.(int)$this->context->shop->getContextShopID();

                          $html .= '<label>' . $this->l('Uploaded logo') . '</label>
                          <div class="margin-form">
                          <img class="imgback" src="' . $this -> _path .'upload/'.$adv_imgname.'.' . $logo_normal_ext . '" /><br /><br />
                          <input id="logo_normal_delete2" type="submit" class="button" value="' . $this->l('Delete image') . '" name="logo_normal_delete2">
                          </div>';
                        }
                        $html .= '
                  </div>

                <div class="if_trans">

                  <div class="roytc_row" style="margin-top:0;">
                        <label>' . $this->l('Transparent Header Logo upload') . '</label>
                        <div class="margin-form" style="margin-top:0;">
                              <div class="file_design"></div>
                              <input id="logo_trans_field2" type="file" name="logo_trans_field2" class="inputfile-5">
                              <input id="logo_trans_button2" type="submit" class="button" name="logo_trans_button2" value="' . $this->l('Upload') . '">
                              <p class="clear helpcontent">' . $this->l('Max height - 90px. Preffered format - transparent .png') . '</p>
                        </div>';
                        $logo_trans_ext = Configuration::get('NC_LOGO_TRANS');
                        if ($logo_trans_ext != "") {
                          if (Shop::getContext() == Shop::CONTEXT_SHOP)
                          $adv_imgname = 'logo-trans'.'-'.(int)$this->context->shop->getContextShopID();

                          $html .= '<label>' . $this->l('Uploaded logo') . '</label>
                          <div class="margin-form">
                          <img class="imgback" src="' . $this -> _path .'upload/'.$adv_imgname.'.' . $logo_trans_ext . '" /><br /><br />
                          <input id="logo_trans_delete2" type="submit" class="button" value="' . $this->l('Delete image') . '" name="logo_trans_delete2">
                          </div>';
                        }
                        $html .= '
                      </div>
                    </div>


                  </div>


                    <h3>' . $this->l('Currencies / Language') . '</h3>
                    <div class="roywrap w50">
                      <div class="roytc_row ds_wrap">
                            <label>' . $this->l('Position') . '</label>
                            <div class="margin-form">
                                <input type="radio" class="regular-radio nc_cl" name="nc_cl" value="1" id="nc_cl1" ' . ((Configuration::get('NC_CLS') == "1") ? 'checked="checked" ' : '') . ' />
                                <label class="ds nc_cl1" for="nc_cl1"> <span>1 . Inside Account</span></label>
                                <input type="radio" class="regular-radio nc_cl" name="nc_cl" value="2" id="nc_cl2" ' . ((Configuration::get('NC_CLS') == "2") ? 'checked="checked" ' : '') . ' />
                                <label class="ds nc_cl2" for="nc_cl2"> <span>2 . Header Icons</span></label>
                      </div></div>
                      <div class="roytc_row ds_wrap">
                            <label>' . $this->l('Label length') . '</label>
                            <div class="margin-form">
                                <input type="radio" class="regular-radio nc_cll" name="nc_cll" value="1" id="nc_cll1" ' . ((Configuration::get('NC_CLLS') == "1") ? 'checked="checked" ' : '') . ' />
                                <label class="ds cl_length1" for="nc_cll1"> <span>1 . Full</span></label>
                                <input type="radio" class="regular-radio nc_cll" name="nc_cll" value="2" id="nc_cll2" ' . ((Configuration::get('NC_CLLS') == "2") ? 'checked="checked" ' : '') . ' />
                                <label class="ds cl_length2" for="nc_cll2"> <span>2 . Short</span></label>
                      </div></div>
                    </div>

                        <h3>' . $this->l('Top Panel') . '</h3>

                        <div class="roywrap">
                            <div class="roytc_row">
                              <label>' . $this->l('Show top panel above header?') . '</label>
                              <div class="yn">
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio header_ns" name="header_ns" id="header_ns1" value="1" ' . ((Configuration::get('RC_HEADER_NS') == 1) ? 'checked="checked" ' : '') . '/>
                                  <label class="t" for="header_ns1"> Yes</label>
                                  <input type="radio" class="regular-radio header_ns" name="header_ns" id="header_ns2" value="2" ' . ((Configuration::get('RC_HEADER_NS') == 2) ? 'checked="checked" ' : '') . '/>
                                  <label class="t" for="header_ns2"> No</label>
                              </div></div>
                            </div>

                            <div class="if_toppanel">
                              <div class="roytc_row">
                                <label>' . $this->l('Show border for top panel?') . '</label>
                                <div class="yn">
                                <div class="margin-form">
                                    <input type="radio" class="regular-radio" name="header_nbs" id="header_nbs1" value="1" ' . ((Configuration::get('RC_HEADER_NBS') == 1) ? 'checked="checked" ' : '') . '/>
                                    <label class="t" for="header_nbs1"> Yes</label>
                                    <input type="radio" class="regular-radio" name="header_nbs" id="header_nbs2" value="2" ' . ((Configuration::get('RC_HEADER_NBS') == 2) ? 'checked="checked" ' : '') . '/>
                                    <label class="t" for="header_nbs2"> No</label>
                                </div></div>
                              </div>
                            </div>
                          </div>

                          <div class="if_toppanel">
                            <div class="roytc_row ds_wrap fw">
                                  <label>' . $this->l('Top panel layout') . '</label>
                                  <div class="margin-form">
                                      <input type="radio" class="regular-radio nc_toppanel_lay" name="nc_toppanel_lay" value="1" id="nc_toppanel_lay1" ' . ((Configuration::get('NC_TOPPANEL_LAYS') == "1") ? 'checked="checked" ' : '') . ' />
                                      <label class="ds top_lay1" for="nc_toppanel_lay1"> <span>1 . Roy Content Center</span></label>
                                      <input type="radio" class="regular-radio nc_toppanel_lay" name="nc_toppanel_lay" value="2" id="nc_toppanel_lay2" ' . ((Configuration::get('NC_TOPPANEL_LAYS') == "2") ? 'checked="checked" ' : '') . ' />
                                      <label class="ds top_lay2" for="nc_toppanel_lay2"> <span>2 . Cur / Lan + Text</span></label>
                                      <input type="radio" class="regular-radio nc_toppanel_lay" name="nc_toppanel_lay" value="3" id="nc_toppanel_lay3" ' . ((Configuration::get('NC_TOPPANEL_LAYS') == "3") ? 'checked="checked" ' : '') . ' />
                                      <label class="ds top_lay3" for="nc_toppanel_lay3"> <span>3 . Text + Cur / Lan</span></label>
                            </div></div>
                          </div>

            </div>

                  <div class="section hide" id="tab-header2">

                  <h3>' . $this->l('Menu settings') . '</h3>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Menu layout') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_m_layout" name="nc_m_layout" value="1" id="nc_m_layout1" ' . ((Configuration::get('NC_M_LAYOUT_S') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds m_layout1" for="nc_m_layout1"> <span>1 . Icon</span></label>
                            <input type="radio" class="regular-radio nc_m_layout" name="nc_m_layout" value="2" id="nc_m_layout2" ' . ((Configuration::get('NC_M_LAYOUT_S') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds m_layout2" for="nc_m_layout2"> <span>2 . Icon + Text</span></label>
                            <input type="radio" class="regular-radio nc_m_layout" name="nc_m_layout" value="3" id="nc_m_layout3" ' . ((Configuration::get('NC_M_LAYOUT_S') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds m_layout3" for="nc_m_layout3"> <span>3 . Text</span></label>
                  </div></div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Action on click') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio click_lay_m" name="click_lay_m" value="1" id="click_lay_m1" ' . ((Configuration::get('RC_CLICK_LAY_M') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds click_lay1" for="click_lay_m1"> <span>1 . Sidebar</span></label>
                  </div></div>


                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Menu icon') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="nc_m_icon" value="menu1" id="nc_m_icon1" ' . ((Configuration::get('NC_M_ICON') == "menu1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon nc_m_icon1" for="nc_m_icon1"> <span></span></label>
                            <input type="radio" class="regular-radio" name="nc_m_icon" value="menu2" id="nc_m_icon2" ' . ((Configuration::get('NC_M_ICON') == "menu2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon nc_m_icon2" for="nc_m_icon2"> <span></span></label>
                            <input type="radio" class="regular-radio" name="nc_m_icon" value="menu3" id="nc_m_icon3" ' . ((Configuration::get('NC_M_ICON') == "menu3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon nc_m_icon3" for="nc_m_icon3"> <span></span></label>
                            <input type="radio" class="regular-radio" name="nc_m_icon" value="menu4" id="nc_m_icon4" ' . ((Configuration::get('NC_M_ICON') == "menu4") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon nc_m_icon4" for="nc_m_icon4"> <span></span></label>
                            <input type="radio" class="regular-radio" name="nc_m_icon" value="menu5" id="nc_m_icon5" ' . ((Configuration::get('NC_M_ICON') == "menu5") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon nc_m_icon5" for="nc_m_icon5"> <span></span></label>
                  </div></div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Menu link effect on hover') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="nc_m_under" value="1" id="nc_m_under1" ' . ((Configuration::get('NC_M_UNDER_S') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds link_hover1" for="nc_m_under1"> <span>1 . Underline</span></label>
                            <input type="radio" class="regular-radio" name="nc_m_under" value="2" id="nc_m_under2" ' . ((Configuration::get('NC_M_UNDER_S') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds link_hover2" for="nc_m_under2"> <span>2 . Crossline</span></label>
                            <input type="radio" class="regular-radio" name="nc_m_under" value="3" id="nc_m_under3" ' . ((Configuration::get('NC_M_UNDER_S') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds link_hover3" for="nc_m_under3"> <span>3 . Marker</span></label>
                            <input type="radio" class="regular-radio" name="nc_m_under" value="4" id="nc_m_under4" ' . ((Configuration::get('NC_M_UNDER_S') == "4") ? 'checked="checked" ' : '') . ' />
                            <label class="ds link_hover4" for="nc_m_under4"> <span>4 . Opacity</span></label>
                  </div></div>

                  <div class="roytc_row">
                      <label>' . $this->l('Override menu module colors?') . '</label>
                      <div class="yn">
                      <div class="margin-form">
                      <input type="radio" class="regular-radio nc_m_override" name="nc_m_override" id="nc_m_override2" value="2" ' . ((Configuration::get('NC_M_OVERRIDE_S') == "2") ? 'checked="checked" ' : '') . ' style="display:none!important;" />
                      <label class="t" for="nc_m_override2"> Yes</label>
                      <input type="radio" class="regular-radio nc_m_override" name="nc_m_override" id="nc_m_override1" value="1" ' . ((Configuration::get('NC_M_OVERRIDE_S') == "1") ? 'checked="checked" ' : '') . ' style="display:none!important;" />
                      <label class="t" for="nc_m_override1"> No</label>
                  </div></div></div>

                  </div>

                  <div class="section hide" id="tab-header3">
                        <h3>' . $this->l('Search options') . '</h3>
                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('Layout') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio search_lay" name="search_lay" value="1" id="search_lay1" ' . ((Configuration::get('RC_SEARCH_LAY') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds search_lay1" for="search_lay1"> <span>1 . Icon</span></label>
                                  <input type="radio" class="regular-radio search_lay" name="search_lay" value="2" id="search_lay2" ' . ((Configuration::get('RC_SEARCH_LAY') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds search_lay2" for="search_lay2"> <span>2 . Icon + Text</span></label>
                                  <input type="radio" class="regular-radio search_lay" name="search_lay" value="3" id="search_lay3" ' . ((Configuration::get('RC_SEARCH_LAY') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds search_lay3" for="search_lay3"> <span>3 . Text</span></label>
                                  <input type="radio" class="regular-radio search_lay" name="search_lay" value="4" id="search_lay4" ' . ((Configuration::get('RC_SEARCH_LAY') == "4") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds search_lay4" for="search_lay4"> <span>4 . Input</span></label>
                        </div></div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Search icon') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="nc_i_search" value="search1" id="nc_i_search1" ' . ((Configuration::get('NC_I_SEARCHS') == "search1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon i_search1" for="nc_i_search1"> <span></span></label>
                            <input type="radio" class="regular-radio" name="nc_i_search" value="search2" id="nc_i_search2" ' . ((Configuration::get('NC_I_SEARCHS') == "search2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon i_search2" for="nc_i_search2"> <span></span></label>
                            <input type="radio" class="regular-radio" name="nc_i_search" value="search3" id="nc_i_search3" ' . ((Configuration::get('NC_I_SEARCHS') == "search3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon i_search3" for="nc_i_search3"> <span></span></label>
                            <input type="radio" class="regular-radio" name="nc_i_search" value="search4" id="nc_i_search4" ' . ((Configuration::get('NC_I_SEARCHS') == "search4") ? 'checked="checked" ' : '') . ' />
                            <label class="ds_icon i_search4" for="nc_i_search4"> <span></span></label>
                  </div></div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Action on click') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio click_lay_s" name="click_lay_s" value="1" id="click_lay_s1" ' . ((Configuration::get('RC_CLICK_LAY_S') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds click_lay1" for="click_lay_s1"> <span>1 . Sidebar</span></label>
                            <input type="radio" class="regular-radio click_lay_s" name="click_lay_s" value="2" id="click_lay_s2" ' . ((Configuration::get('RC_CLICK_LAY_S') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds click_lay2" for="click_lay_s2"> <span>2 . Full Screen</span></label>
                  </div></div>

              <div class="if_search">
                  <div class="roywrap">
                  <h3>' . $this->l('If search input enabled') . '</h3>
                  <div class="roytc_row">
                        <label>' . $this->l('Input border radius') . '</label>
                        <div class="margin-form">
                              <input type="text" name="search_br"  value="' . Configuration::get('RC_SEARCH_BR') . '" />px
                        </div>
                  </div>
                  </div>
              </div>

                  <div class="roywrap w50">
                  <div class="roytc_row">
                        <label>' . $this->l('Side search Tags') . '</label>
                        <div class="margin-form">
                              <input type="text" name="nc_search_tags" style="width:100%; max-width:100%" value="' . Configuration::get('NC_SEARCH_TAGS') . '" />
                        </div>
                        <p class="helpcontent">
                          Write tags separated with comma.
                        </p>
                  </div>
                  <div class="roytc_row">
                        <label>' . $this->l('Side search Products') . '</label>
                        <div class="margin-form">
                              <input type="text" name="nc_search_prods" style="width:100%; max-width:100%" value="' . Configuration::get('NC_SEARCH_PRODS') . '" />
                        </div>
                        <p class="helpcontent">
                          Write products IDs separated with comma.
                        </p>
                  </div>
                  </div>

                  </div>

                  <div class="section hide" id="tab-header4">
                        <h3>' . $this->l('Cart options') . '</h3>
                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('Layout') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio cart_lay" name="cart_lay" value="1" id="cart_lay1" ' . ((Configuration::get('RC_CART_LAY') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds cart_lay1" for="cart_lay1"> <span>1 . Icon</span></label>
                                  <input type="radio" class="regular-radio cart_lay" name="cart_lay" value="2" id="cart_lay2" ' . ((Configuration::get('RC_CART_LAY') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds cart_lay2" for="cart_lay2"> <span>2 . Icon + Text</span></label>
                                  <input type="radio" class="regular-radio cart_lay" name="cart_lay" value="3" id="cart_lay3" ' . ((Configuration::get('RC_CART_LAY') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds cart_lay3" for="cart_lay3"> <span>3 . Text</span></label>
                        </div></div>

                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('Cart icon') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio" name="cart_icon" value="cart1" id="cart_icon1" ' . ((Configuration::get('RC_CART_ICON') == "cart1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon cart_icon1" for="cart_icon1"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="cart_icon" value="cart2" id="cart_icon2" ' . ((Configuration::get('RC_CART_ICON') == "cart2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon cart_icon2" for="cart_icon2"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="cart_icon" value="cart3" id="cart_icon3" ' . ((Configuration::get('RC_CART_ICON') == "cart3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon cart_icon3" for="cart_icon3"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="cart_icon" value="cart4" id="cart_icon4" ' . ((Configuration::get('RC_CART_ICON') == "cart4") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon cart_icon4" for="cart_icon4"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="cart_icon" value="cart5" id="cart_icon5" ' . ((Configuration::get('RC_CART_ICON') == "cart5") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon cart_icon5" for="cart_icon5"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="cart_icon" value="cart6" id="cart_icon6" ' . ((Configuration::get('RC_CART_ICON') == "cart6") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon cart_icon6" for="cart_icon6"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="cart_icon" value="cart7" id="cart_icon7" ' . ((Configuration::get('RC_CART_ICON') == "cart7") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon cart_icon7" for="cart_icon7"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="cart_icon" value="cart8" id="cart_icon8" ' . ((Configuration::get('RC_CART_ICON') == "cart8") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon cart_icon8" for="cart_icon8"> <span></span></label>
                        </div></div>

                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('Action on click') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio click_lay_c" name="click_lay_c" value="1" id="click_lay_c1" ' . ((Configuration::get('RC_CLICK_LAY_C') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds click_lay1" for="click_lay_c1"> <span>1 . Sidebar</span></label>
                                  <input type="radio" class="regular-radio click_lay_c" name="click_lay_c" value="2" id="click_lay_c2" ' . ((Configuration::get('RC_CLICK_LAY_C') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds click_lay2" for="click_lay_c2"> <span>2 . Full Screen</span></label>
                                  <input type="radio" class="regular-radio click_lay_c" name="click_lay_c" value="3" id="click_lay_c3" ' . ((Configuration::get('RC_CLICK_LAY_C') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds click_lay3" for="click_lay_c3"> <span>3 . Go to Cart page</span></label>
                        </div></div>
                  </div>

                  <div class="section hide" id="tab-header5">
                        <h3>' . $this->l('Account options') . '</h3>
                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('Layout') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio acc_lay" name="acc_lay" value="1" id="acc_lay1" ' . ((Configuration::get('RC_ACC_LAY') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds acc_lay1" for="acc_lay1"> <span>1 . Icon</span></label>
                                  <input type="radio" class="regular-radio acc_lay" name="acc_lay" value="2" id="acc_lay2" ' . ((Configuration::get('RC_ACC_LAY') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds acc_lay2" for="acc_lay2"> <span>2 . Icon + Text</span></label>
                                  <input type="radio" class="regular-radio acc_lay" name="acc_lay" value="3" id="acc_lay3" ' . ((Configuration::get('RC_ACC_LAY') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds acc_lay3" for="acc_lay3"> <span>3 . Text</span></label>
                        </div></div>

                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('Account icon') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio" name="acc_icon" value="acc1" id="acc_icon1" ' . ((Configuration::get('RC_ACC_ICON') == "acc1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon acc_icon1" for="acc_icon1"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="acc_icon" value="acc2" id="acc_icon2" ' . ((Configuration::get('RC_ACC_ICON') == "acc2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon acc_icon2" for="acc_icon2"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="acc_icon" value="acc3" id="acc_icon3" ' . ((Configuration::get('RC_ACC_ICON') == "acc3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon acc_icon3" for="acc_icon3"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="acc_icon" value="acc4" id="acc_icon4" ' . ((Configuration::get('RC_ACC_ICON') == "acc4") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon acc_icon4" for="acc_icon4"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="acc_icon" value="acc5" id="acc_icon5" ' . ((Configuration::get('RC_ACC_ICON') == "acc5") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon acc_icon5" for="acc_icon5"> <span></span></label>
                                  <input type="radio" class="regular-radio" name="acc_icon" value="acc6" id="acc_icon6" ' . ((Configuration::get('RC_ACC_ICON') == "acc6") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds_icon acc_icon6" for="acc_icon6"> <span></span></label>
                        </div></div>

                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('Action on click') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio click_lay_a" name="click_lay_a" value="1" id="click_lay_a1" ' . ((Configuration::get('RC_CLICK_LAY_A') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds click_lay1" for="click_lay_a1"> <span>1 . Sidebar</span></label>
                                  <input type="radio" class="regular-radio click_lay_a" name="click_lay_a" value="2" id="click_lay_a2" ' . ((Configuration::get('RC_CLICK_LAY_A') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds click_lay2" for="click_lay_a2"> <span>2 . Full Screen</span></label>
                                  <input type="radio" class="regular-radio click_lay_a" name="click_lay_a" value="3" id="click_lay_a3" ' . ((Configuration::get('RC_CLICK_LAY_A') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds click_lay3" for="click_lay_a3"> <span>3 . Go to Login page</span></label>
                        </div></div>

                        <h3 class="first">' . $this->l('When customer logged') . '</h3>
                        <div class="roywrap">
                          <div class="roytc_row">
                            <label>' . $this->l('Display Name?') . '</label>
                            <div class="yn">
                            <div class="margin-form">
                                <input type="radio" class="regular-radio" name="acc_name" id="acc_name1" value="1" ' . ((Configuration::get('RC_ACC_NAME') == 1) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="acc_name1"> Yes</label>
                                <input type="radio" class="regular-radio" name="acc_name" id="acc_name2" value="2" ' . ((Configuration::get('RC_ACC_NAME') == 2) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="acc_name2"> No</label>
                            </div></div>
                          </div>
                          </div>
                  </div>

                  <div class="section hide" id="tab-header6">

                        <div class="roytc_row">
                             <label>' . $this->l('Normal / Sticky Header background') . '</label>
                             <div class="margin-form">
                             <input type="color" name="h_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_H_BG') . '" />
                        </div></div>

                        <h3>' . $this->l('Colors of Normal / Sticky Header') . '</h3>

                        <div class="roywrap">
                          <div class="roytc_row">
                               <label>' . $this->l('Icons and text') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_norm_icons" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_NORM_ICONS') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Cart quantity text') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_norm_quan" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_NORM_QUAN') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Cart quantity background') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_norm_quanbg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_NORM_QUANBG') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Account Logged Checkmark') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_norm_logged" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_NORM_LOGGED') . '" />
                          </div></div>
                        <div class="if_search">
                          <div class="roytc_row">
                                <label>' . $this->l('Search input border') . '</label>
                                <div class="margin-form">
                                <input type="color" name="h_norm_sborder"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_NORM_SBORDER') . '" />
                          </div></div>
                        </div>
                      </div>

                      <div class="roywrap">
                          <div class="roytc_row">
                               <label>' . $this->l('Menu Link') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_norm_link" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_NORM_LINK') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Menu Link hover') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_norm_linkh" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_NORM_LINKH') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Menu link hover effect') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_norm_effect" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_NORM_EFFECT') . '" />
                          </div></div>
                        </div>


                        <div class="if_toppanel">
                            <div class="roywrap">
                              <h3>' . $this->l('Top Panel colors') . '</h3>
                              <div class="roytc_row">
                                   <label>' . $this->l('Background') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="header_nbg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_HEADER_NBG') . '" />
                              </div></div>
                              <div class="roytc_row">
                                   <label>' . $this->l('Border') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="header_nb" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_HEADER_NB') . '" />
                              </div></div>

                              <div class="roytc_row">
                                   <label>' . $this->l('Text') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="header_nt" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_HEADER_NT') . '" />
                              </div></div>
                              <div class="roytc_row">
                                   <label>' . $this->l('Link') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="header_nl" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_HEADER_NL') . '" />
                              </div></div>
                              <div class="roytc_row">
                                   <label>' . $this->l('Link hover') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="header_nlh" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_HEADER_NLH') . '" />
                              </div></div>
                          </div>
                      </div>



                    <div class="if_trans">
                        <h3>' . $this->l('Colors of Transparent Header') . '</h3>
                        <div class="roywrap">
                          <div class="roytc_row">
                               <label>' . $this->l('Icons and text') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_trans_icons" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_TRANS_ICONS') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Cart quantity text') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_trans_quan" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_TRANS_QUAN') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Cart quantity background') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_trans_quanbg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_TRANS_QUANBG') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Account Logged Checkmark') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_trans_logged" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_TRANS_LOGGED') . '" />
                          </div></div>
                        <div class="if_search">
                          <div class="roytc_row">
                                <label>' . $this->l('Search input border') . '</label>
                                <div class="margin-form">
                                <input type="color" name="h_trans_sborder"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_TRANS_SBORDER') . '" />
                          </div></div>
                        </div>
                      </div>

                      <div class="roywrap">
                          <div class="roytc_row">
                               <label>' . $this->l('Menu Link') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_trans_link" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_TRANS_LINK') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Menu Link hover') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_trans_linkh" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_TRANS_LINKH') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Menu link hover effect') . '</label>
                               <div class="margin-form">
                               <input type="color" name="h_trans_effect" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_TRANS_EFFECT') . '" />
                          </div></div>
                        </div>
                    </div>



                            <h3>' . $this->l('Submenu popup') . '</h3>
                            <div class="roywrap">
                                  <div class="roytc_row">
                                       <label>' . $this->l('Background') . '</label>
                                       <div class="margin-form">
                                       <input type="color" name="m_popup_lbg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_M_POPUP_LBG') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                       <label>' . $this->l('Separators') . '</label>
                                       <div class="margin-form">
                                       <input type="color" name="m_popup_lborder" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_M_POPUP_LBORDER') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                       <label>' . $this->l('Text') . '</label>
                                       <div class="margin-form">
                                       <input type="color" name="m_popup_lchevron" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_M_POPUP_LCHEVRON') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                       <label>' . $this->l('Link color') . '</label>
                                       <div class="margin-form">
                                       <input type="color" name="m_popup_llink" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_M_POPUP_LLINK') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                       <label>' . $this->l('Link color hover') . '</label>
                                       <div class="margin-form">
                                       <input type="color" name="m_popup_llink_hover" class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('RC_M_POPUP_LLINK_HOVER') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                       <label>' . $this->l('Border radius') . '</label>
                                       <div class="margin-form" style="margin-top:0;">
                                       <input type="text" name="nc_m_br" value="' . Configuration::get('NC_M_BR_S') . '" /> px
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Overall popup content colors for header modules') . '</h3>
                              <p class="helpcontent" style="margin-top:0;margin-bottom:30px;">
                                Here you can configure color for Search/Cart/Account/Menu content available on click.
                              </p>
                                <div class="roywrap">
                                  <div class="roytc_row">
                                        <label>' . $this->l('Background') . '</label>
                                        <div class="margin-form">
                                        <input type="color" name="nc_side_bg"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SIDE_BG') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                        <label>' . $this->l('Separators') . '</label>
                                        <div class="margin-form">
                                        <input type="color" name="nc_side_b"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SIDE_B') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                        <label>' . $this->l('Titles / links') . '</label>
                                        <div class="margin-form">
                                        <input type="color" name="nc_side_title"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SIDE_TITLE') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                        <label>' . $this->l('Text') . '</label>
                                        <div class="margin-form">
                                        <input type="color" name="nc_side_text"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SIDE_TEXT') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                        <label>' . $this->l('Button background') . '</label>
                                        <div class="margin-form">
                                        <input type="color" name="nc_side_btnbg"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SIDE_BTNBG') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                        <label>' . $this->l('Button border') . '</label>
                                        <div class="margin-form">
                                        <input type="color" name="nc_side_btnb"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SIDE_BTNB') . '" />
                                  </div></div>
                                  <div class="roytc_row">
                                        <label>' . $this->l('Button color') . '</label>
                                        <div class="margin-form">
                                        <input type="color" name="nc_side_btn"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SIDE_BTN') . '" />
                                  </div></div>
                              </div>

                  </div>

            </div>

            <div class="tab-pane" id ="tab-side">
                  <h2 class="rtc_title2">' . $this->l('Mobile layout') . '</h2>
                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-side1 active">
                                    <a data-inside="tab" href="#tab-side1"><span>1</span>Mobile layout</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

                  <div class="section" id="tab-side1">
                        <h3 class="first">' . $this->l('Mobile Logo') . '</h3>
                        <div class="roytc_row" style="margin-top:0;">
                              <label>' . $this->l('Logo upload') . '</label>
                              <div class="margin-form" style="margin-top:0;">
                                    <div class="file_design"></div>
                                    <input id="logo_mobile_field2" type="file" name="logo_mobile_field2">
                                    <input id="logo_mobile_button2" type="submit" class="button" name="logo_mobile_button2" value="' . $this->l('Upload') . '">
                                    <p class="clear helpcontent">' . $this->l('Max height - 90px. If you use vertical header - logo can be higher. Preffered format - transparent .png') . '</p>
                              </div>';
                              $logo_mobile_ext = Configuration::get('NC_LOGO_MOBILE');
                              if ($logo_mobile_ext != "") {
                                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                                    $adv_imgname = 'logo-mobile'.'-'.(int)$this->context->shop->getContextShopID();

                                    $html .= '<label>' . $this->l('Uploaded logo') . '</label>
                                                      <div class="margin-form">
                                                      <img class="imgback" src="' . $this -> _path .'upload/'.$adv_imgname.'.' . $logo_mobile_ext . '" /><br /><br />
                                                      <input id="logo_mobile_delete2" type="submit" class="button" value="' . $this->l('Delete image') . '" name="logo_mobile_delete2">
                                                      </div>';
                              }
                              $html .= '
                        </div>
                        <div class="roywrap">
                        <h3>' . $this->l('Mobile header colors') . '</h3>
                        <div class="roytc_row">
                              <label>' . $this->l('Header background') . '</label>
                              <div class="margin-form">
                              <input type="color" name="nc_mob_header"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_MOB_HEADER') . '" />
                        </div></div>
                        <div class="roytc_row">
                              <label>' . $this->l('Header Icons') . '</label>
                              <div class="margin-form">
                              <input type="color" name="nc_mob_menu"  class="colorpicker" data-hex="true" value="' . Configuration::get('NC_MOB_MENU') . '" />
                        </div></div>
                        </div>

                        <h3>' . $this->l('Home product sliders') . '</h3>
                                <div class="roytc_row ds_wrap">
                                    <label>' . $this->l('Products per row?') . '</label>
                                    <div class="margin-form">
                                        <input type="radio" class="regular-radio" name="nc_mob_hp" id="nc_mob_hp1" value="1" ' . ((Configuration::get('NC_MOB_HP') == 1) ? 'checked="checked" ' : '') . '/>
                                        <label class="ds items_onrow1" for="nc_mob_hp1"><span>1</span></label>
                                        <input type="radio" class="regular-radio" name="nc_mob_hp" id="nc_mob_hp2" value="2" ' . ((Configuration::get('NC_MOB_HP') == 2) ? 'checked="checked" ' : '') . '/>
                                        <label class="ds items_onrow2" for="nc_mob_hp2"><span>2</span></label>
                                    </div></div>
                        <h3>' . $this->l('Category product list') . '</h3>
                                <div class="roytc_row ds_wrap">
                                    <label>' . $this->l('Products per row?') . '</label>
                                    <div class="margin-form">
                                        <input type="radio" class="regular-radio" name="nc_mob_cat" id="nc_mob_cat1" value="1" ' . ((Configuration::get('NC_MOB_CAT') == 1) ? 'checked="checked" ' : '') . '/>
                                        <label class="ds items_onrow1" for="nc_mob_cat1"><span>1</span></label>
                                        <input type="radio" class="regular-radio" name="nc_mob_cat" id="nc_mob_cat2" value="2" ' . ((Configuration::get('NC_MOB_CAT') == 2) ? 'checked="checked" ' : '') . '/>
                                        <label class="ds items_onrow2" for="nc_mob_cat2"><span>2</span></label>
                                    </div></div>
                  </div>

            </div>



            <div class="tab-pane" id ="tab-homepage">
                 <h2 class="rtc_title3">' . $this->l('Homepage content') . '</h2>
                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-homepage1 active">
                                    <a data-inside="tab" href="#tab-homepage1"><span>1</span>Sections</a>
                              </li>
                              <li class="inside_tab tab-homepage2 active">
                                    <a data-inside="tab" href="#tab-homepage2"><span>2</span>Content module</a>
                              </li>
                              <li class="inside_tab tab-homepage3">
                                    <a data-inside="tab" href="#tab-homepage3"><span>3</span>Product sliders</a>
                              </li>
                              <li class="inside_tab tab-homepage6">
                                    <a data-inside="tab" href="#tab-homepage6"><span>4</span>Brand slider</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

                  <div class="section" id="tab-homepage1">
                     <h3 class="first">' . $this->l('Top section') . '</h3>
                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('What to use?') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio nc_ht_bg" name="nc_ht_bg" value="1" id="nc_ht_bg1" ' . ((Configuration::get('NC_HT_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds bg1" for="nc_ht_bg1"> <span>1 . Background</span></label>
                                  <input type="radio" class="regular-radio nc_ht_bg" name="nc_ht_bg" value="2" id="nc_ht_bg2" ' . ((Configuration::get('NC_HT_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds bg2" for="nc_ht_bg2"> <span>2 . Gradient</span></label>
                                  <input type="radio" class="regular-radio nc_ht_bg" name="nc_ht_bg" value="3" id="nc_ht_bg3" ' . ((Configuration::get('NC_HT_BGS') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds bg3" for="nc_ht_bg3"> <span>3 . Image</span></label>
                                  <input type="radio" class="regular-radio nc_ht_bg" name="nc_ht_bg" value="4" id="nc_ht_bg4" ' . ((Configuration::get('NC_HT_BGS') == "4") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds bg5" for="nc_ht_bg4"> <span>4 . Transparent</span></label>
                        </div></div>
                        <div class="if_nc_ht_bc">
                              <div class="roytc_row">
                                   <label>' . $this->l('Section Background') . '</label>
                                   <div class="margin-form" style="margin-top:0;">
                                   <input type="color" name="nc_ht_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HT_BC') . '" />
                              </div></div>
                        </div>
                        <div class="if_nc_ht_gr">
                              <div class="roytc_row">
                                   <label>' . $this->l('Gradient start color') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="nc_ht_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HT_GS') . '" />
                              </div></div>
                              <div class="roytc_row">
                                   <label>' . $this->l('Gradient end color') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="nc_ht_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HT_GE') . '" />
                              </div></div>
                              <div class="roytc_row">
                                   <label>' . $this->l('Gradient angle') . '</label>
                                   <div class="margin-form">
                                   <input type="text" name="nc_ht_gg" value="' . Configuration::get('NC_HT_GG') . '" /> degrees
                                   <p class="clear grad_direction"></p>
                              </div></div>
                        </div>
                        <div class="if_nc_ht_im">
                              ';
                              $html .= $this -> backgroundOptions($panel="nc_ht_im", $panelupper="HT_IM");
                              $html .= '
                        </div>

                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('Section Width') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio" name="nc_ht_width" value="1" id="nc_ht_width1" ' . ((Configuration::get('NC_HT_WIDTH') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds width1" for="nc_ht_width1"> <span>1 . Container</span></label>
                                  <input type="radio" class="regular-radio" name="nc_ht_width" value="2" id="nc_ht_width2" ' . ((Configuration::get('NC_HT_WIDTH') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds width2" for="nc_ht_width2"> <span>2 . Full Width</span></label>
                        </div></div>

                        <div class="roytc_row fw">
                				<label>' . $this->l('Left and right padding on top section?') . '</label>
                        <div class="yn">
                				<div class="margin-form">
                					<input type="radio" class="regular-radio" name="nc_ht_pad" id="nc_ht_pad1" value="1" ' . ((Configuration::get('NC_HT_PAD') == "1") ? 'checked="checked" ' : '') . '/>
                					<label class="t" for="nc_ht_pad1"> Yes</label>
                					<input type="radio" class="regular-radio" name="nc_ht_pad" id="nc_ht_pad2" value="2" ' . ((Configuration::get('NC_HT_PAD') == "2") ? 'checked="checked" ' : '') . '/>
                					<label class="t" for="nc_ht_pad2"> No</label>
                				</div>
                        </div>
                        <p class="helpcontent">
                          Turn this off only if you use FULL WIDTH SLIDER ON TOP COLUMN HOOK.
                        </p></div>


                         <div class="roytc_row">
                              <label>' . $this->l('Top spacing') . '</label>
                              <div class="margin-form">
                              <input type="text" name="nc_ht_top" value="' . Configuration::get('NC_HT_TOPS') . '" /> px
                         </div></div>
                         <div class="roytc_row">
                              <label>' . $this->l('Bottom spacing') . '</label>
                              <div class="margin-form">
                              <input type="text" name="nc_ht_bot" value="' . Configuration::get('NC_HT_BOTS') . '" /> px
                         </div></div>

                     <h3>' . $this->l('Middle section') . '</h3>
                        <div class="roytc_row ds_wrap fw">
                              <label>' . $this->l('What to use?') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio nc_hm_bg" name="nc_hm_bg" value="1" id="nc_hm_bg1" ' . ((Configuration::get('NC_HM_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds bg1" for="nc_hm_bg1"> <span>1 . Background</span></label>
                                  <input type="radio" class="regular-radio nc_hm_bg" name="nc_hm_bg" value="2" id="nc_hm_bg2" ' . ((Configuration::get('NC_HM_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds bg2" for="nc_hm_bg2"> <span>2 . Gradient</span></label>
                                  <input type="radio" class="regular-radio nc_hm_bg" name="nc_hm_bg" value="3" id="nc_hm_bg3" ' . ((Configuration::get('NC_HM_BGS') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds bg3" for="nc_hm_bg3"> <span>3 . Image</span></label>
                                  <input type="radio" class="regular-radio nc_hm_bg" name="nc_hm_bg" value="4" id="nc_hm_bg4" ' . ((Configuration::get('NC_HM_BGS') == "4") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds bg5" for="nc_hm_bg4"> <span>4 . Transparent</span></label>
                        </div></div>
                        <div class="if_nc_hm_bc">
                              <div class="roytc_row">
                                   <label>' . $this->l('Section Background') . '</label>
                                   <div class="margin-form" style="margin-top:0;">
                                   <input type="color" name="nc_hm_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HM_BC') . '" />
                              </div></div>
                        </div>
                        <div class="if_nc_hm_gr">
                              <div class="roytc_row">
                                   <label>' . $this->l('Gradient start color') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="nc_hm_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HM_GS') . '" />
                              </div></div>
                              <div class="roytc_row">
                                   <label>' . $this->l('Gradient end color') . '</label>
                                   <div class="margin-form">
                                   <input type="color" name="nc_hm_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HM_GE') . '" />
                              </div></div>
                              <div class="roytc_row">
                                   <label>' . $this->l('Gradient angle') . '</label>
                                   <div class="margin-form">
                                   <input type="text" name="nc_hm_gg" value="' . Configuration::get('NC_HM_GG') . '" /> degrees
                                   <p class="clear grad_direction"></p>
                              </div></div>
                        </div>
                        <div class="if_nc_hm_im">
                              ';
                              $html .= $this -> backgroundOptions($panel="nc_hm_im", $panelupper="HM_IM");
                              $html .= '
                        </div>



                            <div class="roytc_row ds_wrap fw">
                                  <label>' . $this->l('Section Width') . '</label>
                                  <div class="margin-form">
                                      <input type="radio" class="regular-radio" name="nc_hm_width" value="1" id="nc_hm_width1" ' . ((Configuration::get('NC_HM_WIDTH') == "1") ? 'checked="checked" ' : '') . ' />
                                      <label class="ds width1" for="nc_hm_width1"> <span>1 . Container</span></label>
                                      <input type="radio" class="regular-radio" name="nc_hm_width" value="2" id="nc_hm_width2" ' . ((Configuration::get('NC_HM_WIDTH') == "2") ? 'checked="checked" ' : '') . ' />
                                      <label class="ds width2" for="nc_hm_width2"> <span>2 . Full Width</span></label>
                            </div></div>

                            <div class="roytc_row fw">
                    				<label>' . $this->l('Left and right padding on main section?') . '</label>
                            <div class="yn">
                    				<div class="margin-form">
                    					<input type="radio" class="regular-radio" name="nc_hm_pad" id="nc_hm_pad1" value="1" ' . ((Configuration::get('NC_HM_PAD') == "1") ? 'checked="checked" ' : '') . '/>
                    					<label class="t" for="nc_hm_pad1"> Yes</label>
                    					<input type="radio" class="regular-radio" name="nc_hm_pad" id="nc_hm_pad2" value="2" ' . ((Configuration::get('NC_HM_PAD') == "2") ? 'checked="checked" ' : '') . '/>
                    					<label class="t" for="nc_hm_pad2"> No</label>
                    				</div>
                            </div>
                            <p class="helpcontent">
                              Turn this off only if you use half-width product sliders with custom background.
                            </p></div>


                         <div class="roytc_row">
                              <label>' . $this->l('Top spacing') . '</label>
                              <div class="margin-form">
                              <input type="text" name="nc_hm_top" value="' . Configuration::get('NC_HM_TOPS') . '" /> px
                         </div></div>
                         <div class="roytc_row">
                              <label>' . $this->l('Bottom spacing') . '</label>
                              <div class="margin-form">
                              <input type="text" name="nc_hm_bot" value="' . Configuration::get('NC_HM_BOTS') . '" /> px
                         </div></div>


                        <h3>' . $this->l('Bottom section') . '</h3>
                           <div class="roytc_row ds_wrap fw">
                                 <label>' . $this->l('What to use?') . '</label>
                                 <div class="margin-form">
                                     <input type="radio" class="regular-radio nc_hb_bg" name="nc_hb_bg" value="1" id="nc_hb_bg1" ' . ((Configuration::get('NC_OB_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                                     <label class="ds bg1" for="nc_hb_bg1"> <span>1 . Background</span></label>
                                     <input type="radio" class="regular-radio nc_hb_bg" name="nc_hb_bg" value="2" id="nc_hb_bg2" ' . ((Configuration::get('NC_HB_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                                     <label class="ds bg2" for="nc_hb_bg2"> <span>2 . Gradient</span></label>
                                     <input type="radio" class="regular-radio nc_hb_bg" name="nc_hb_bg" value="3" id="nc_hb_bg3" ' . ((Configuration::get('NC_HB_BGS') == "3") ? 'checked="checked" ' : '') . ' />
                                     <label class="ds bg3" for="nc_hb_bg3"> <span>3 . Image</span></label>
                                     <input type="radio" class="regular-radio nc_hb_bg" name="nc_hb_bg" value="4" id="nc_hb_bg4" ' . ((Configuration::get('NC_HB_BGS') == "4") ? 'checked="checked" ' : '') . ' />
                                     <label class="ds bg5" for="nc_hb_bg4"> <span>4 . Transparent</span></label>
                           </div></div>
                           <div class="if_nc_hb_bc">
                                 <div class="roytc_row">
                                      <label>' . $this->l('Section Background') . '</label>
                                      <div class="margin-form" style="margin-top:0;">
                                      <input type="color" name="nc_hb_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HB_BC') . '" />
                                 </div></div>
                           </div>
                           <div class="if_nc_hb_gr">
                                 <div class="roytc_row">
                                      <label>' . $this->l('Gradient start color') . '</label>
                                      <div class="margin-form">
                                      <input type="color" name="nc_hb_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HB_GS') . '" />
                                 </div></div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Gradient end color') . '</label>
                                      <div class="margin-form">
                                      <input type="color" name="nc_hb_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_HB_GE') . '" />
                                 </div></div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Gradient angle') . '</label>
                                      <div class="margin-form">
                                      <input type="text" name="nc_hb_gg" value="' . Configuration::get('NC_HB_GG') . '" /> degrees
                                      <p class="clear grad_direction"></p>
                                 </div></div>
                           </div>
                           <div class="if_nc_hb_im">
                                 ';
                                 $html .= $this -> backgroundOptions($panel="nc_hb_im", $panelupper="HB_IM");
                                 $html .= '
                           </div>

                            <div class="roytc_row">
                                 <label>' . $this->l('Top spacing') . '</label>
                                 <div class="margin-form">
                                 <input type="text" name="nc_hb_top" value="' . Configuration::get('NC_HB_TOPS') . '" /> px
                            </div></div>
                            <div class="roytc_row">
                                 <label>' . $this->l('Bottom spacing') . '</label>
                                 <div class="margin-form">
                                 <input type="text" name="nc_hb_bot" value="' . Configuration::get('NC_HB_BOTS') . '" /> px
                            </div></div>

                         </div>

            <div class="section" id="tab-homepage2">

                  <p class="clear helpcontent">Here you can set settings for banners in each hook. You can set spacing from top and bottom of this group of banners and between them.</p>

              <h3>' . $this->l('Top hook content/banners') . '</h3>

                   <div class="roywrap wauto fw">
                   <div class="roytc_row ds_wrap">
                         <label>' . $this->l('Block Width') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="ban_w_top" value="1" id="ban_w_top1" ' . ((Configuration::get('RC_BAN_W_TOP') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="ban_w_top1"> <span>1 . Container</span></label>
                             <input type="radio" class="regular-radio" name="ban_w_top" value="2" id="ban_w_top2" ' . ((Configuration::get('RC_BAN_W_TOP') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="ban_w_top2"> <span>2 . Full Width</span></label>
                   </div></div>
                   <div class="roytc_row ds_wrap">
                         <label>' . $this->l('Spacing between banners') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="ban_spa_top" value="1" id="ban_spa_top1" ' . ((Configuration::get('RC_BAN_SPA_TOPS') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds ban_spa1" for="ban_spa_top1"> <span>1 . Small</span></label>
                             <input type="radio" class="regular-radio" name="ban_spa_top" value="2" id="ban_spa_top2" ' . ((Configuration::get('RC_BAN_SPA_TOPS') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds ban_spa2" for="ban_spa_top2"> <span>2 . Medium</span></label>
                             <input type="radio" class="regular-radio" name="ban_spa_top" value="3" id="ban_spa_top3" ' . ((Configuration::get('RC_BAN_SPA_TOPS') == "3") ? 'checked="checked" ' : '') . ' />
                             <label class="ds bg5" for="ban_spa_top3"> <span>3 . No spacing</span></label>
                   </div></div></div>

                   <div class="roywrap section">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="ban_ts_top" value="' . Configuration::get('RC_BAN_TS_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="ban_bs_top" value="' . Configuration::get('RC_BAN_BS_TOPS') . '" /> px
                   </div></div></div>


                  <h3>' . $this->l('Home products tab content/banners') . '</h3>

                       <div class="roywrap wauto fw">
                       <div class="roytc_row ds_wrap">
                             <label>' . $this->l('Block Width') . '</label>
                             <div class="margin-form">
                                 <input type="radio" class="regular-radio" name="ban_w_home" value="1" id="ban_w_home1" ' . ((Configuration::get('RC_BAN_W_HOME') == "1") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds width1" for="ban_w_home1"> <span>1 . Container</span></label>
                                 <input type="radio" class="regular-radio" name="ban_w_home" value="2" id="ban_w_home2" ' . ((Configuration::get('RC_BAN_W_HOME') == "2") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds width2" for="ban_w_home2"> <span>2 . Full Width</span></label>
                       </div></div>
                       <div class="roytc_row ds_wrap">
                             <label>' . $this->l('Spacing between banners') . '</label>
                             <div class="margin-form">
                                 <input type="radio" class="regular-radio" name="ban_spa_home" value="1" id="ban_spa_home1" ' . ((Configuration::get('RC_BAN_SPA_HOME') == "1") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa1" for="ban_spa_home1"> <span>1 . Small</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_home" value="2" id="ban_spa_home2" ' . ((Configuration::get('RC_BAN_SPA_HOME') == "2") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa2" for="ban_spa_home2"> <span>2 . Medium</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_home" value="3" id="ban_spa_home3" ' . ((Configuration::get('RC_BAN_SPA_HOME') == "3") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds bg5" for="ban_spa_home3"> <span>3 . No spacing</span></label>
                       </div></div></div>

                       <div class="roywrap section">
                       <div class="roytc_row">
                            <label>' . $this->l('Top spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_ts_home" value="' . Configuration::get('RC_BAN_TS_HOME') . '" /> px
                       </div></div>
                       <div class="roytc_row">
                            <label>' . $this->l('Bottom spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_bs_home" value="' . Configuration::get('RC_BAN_BS_HOME') . '" /> px
                       </div></div></div>


                  <h3>' . $this->l('Before Footer content/banners') . '</h3>

                       <div class="roywrap wauto fw">
                       <div class="roytc_row ds_wrap">
                             <label>' . $this->l('Block Width') . '</label>
                             <div class="margin-form">
                                 <input type="radio" class="regular-radio" name="ban_w_befoot" value="1" id="ban_w_befoot1" ' . ((Configuration::get('RC_BAN_W_BEFOOT') == "1") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds width1" for="ban_w_befoot1"> <span>1 . Container</span></label>
                                 <input type="radio" class="regular-radio" name="ban_w_befoot" value="2" id="ban_w_befoot2" ' . ((Configuration::get('RC_BAN_W_BEFOOT') == "2") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds width2" for="ban_w_befoot2"> <span>2 . Full Width</span></label>
                       </div></div>
                       <div class="roytc_row ds_wrap">
                             <label>' . $this->l('Spacing between banners') . '</label>
                             <div class="margin-form">
                                 <input type="radio" class="regular-radio" name="ban_spa_befoot" value="1" id="ban_spa_befoot1" ' . ((Configuration::get('RC_BAN_SPA_BEFOOT') == "1") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa1" for="ban_spa_befoot1"> <span>1 . Small</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_befoot" value="2" id="ban_spa_befoot2" ' . ((Configuration::get('RC_BAN_SPA_BEFOOT') == "2") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa2" for="ban_spa_befoot2"> <span>2 . Medium</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_befoot" value="3" id="ban_spa_befoot3" ' . ((Configuration::get('RC_BAN_SPA_BEFOOT') == "3") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds bg5" for="ban_spa_befoot3"> <span>3 . No spacing</span></label>
                       </div></div></div>

                       <div class="roywrap section">
                       <div class="roytc_row">
                            <label>' . $this->l('Top spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_ts_befoot" value="' . Configuration::get('RC_BAN_TS_BEFOOT') . '" /> px
                       </div></div>
                       <div class="roytc_row">
                            <label>' . $this->l('Bottom spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_bs_befoot" value="' . Configuration::get('RC_BAN_BS_BEFOOT') . '" /> px
                       </div></div></div>


                  <h3>' . $this->l('Footer hook content/banners') . '</h3>

                       <div class="roywrap wauto fw">
                       <div class="roytc_row ds_wrap">
                             <label>' . $this->l('Spacing between banners') . '</label>
                             <div class="margin-form">
                                 <input type="radio" class="regular-radio" name="ban_spa_foot" value="1" id="ban_spa_foot1" ' . ((Configuration::get('RC_BAN_SPA_FOOT') == "1") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa1" for="ban_spa_foot1"> <span>1 . Small</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_foot" value="2" id="ban_spa_foot2" ' . ((Configuration::get('RC_BAN_SPA_FOOT') == "2") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa2" for="ban_spa_foot2"> <span>2 . Medium</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_foot" value="3" id="ban_spa_foot3" ' . ((Configuration::get('RC_BAN_SPA_FOOT') == "3") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds bg5" for="ban_spa_foot3"> <span>3 . No spacing</span></label>
                       </div></div></div>

                       <div class="roywrap section">
                       <div class="roytc_row">
                            <label>' . $this->l('Top spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_ts_foot" value="' . Configuration::get('RC_BAN_TS_FOOT') . '" /> px
                       </div></div>
                       <div class="roytc_row">
                            <label>' . $this->l('Bottom spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_bs_foot" value="' . Configuration::get('RC_BAN_BS_FOOT') . '" /> px
                       </div></div></div>


                   <h3>' . $this->l('Left column content/banners') . '</h3>

                             <div class="roywrap">
                             <div class="roytc_row">
                                  <label>' . $this->l('Top spacing') . '</label>
                                  <div class="margin-form">
                                  <input type="text" name="ban_ts_left" value="' . Configuration::get('RC_BAN_TS_LEFT') . '" /> px
                             </div></div>

                             <div class="roytc_row">
                                  <label>' . $this->l('Bottom spacing') . '</label>
                                  <div class="margin-form">
                                  <input type="text" name="ban_bs_left" value="' . Configuration::get('RC_BAN_BS_LEFT') . '" /> px
                             </div></div></div>

                       <h3>' . $this->l('Right column content/banners') . '</h3>

                             <div class="roywrap">
                             <div class="roytc_row">
                                  <label>' . $this->l('Top spacing') . '</label>
                                  <div class="margin-form">
                                  <input type="text" name="ban_ts_right" value="' . Configuration::get('RC_BAN_TS_RIGHT') . '" /> px
                             </div></div>

                             <div class="roytc_row">
                                  <label>' . $this->l('Bottom spacing') . '</label>
                                  <div class="margin-form">
                                  <input type="text" name="ban_bs_right" value="' . Configuration::get('RC_BAN_BS_RIGHT') . '" /> px
                             </div></div></div>


                  <h3>' . $this->l('Side mobile menu content/banners') . '</h3>

                       <div class="roywrap wauto fw">
                       <div class="roytc_row ds_wrap">
                             <label>' . $this->l('Spacing between banners') . '</label>
                             <div class="margin-form">
                                 <input type="radio" class="regular-radio" name="ban_spa_sidemobilemenu" value="1" id="ban_spa_sidemobilemenu1" ' . ((Configuration::get('RC_BAN_SPA_SIDEMOBILEMENU') == "1") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa1" for="ban_spa_sidemobilemenu1"> <span>1 . Small</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_sidemobilemenu" value="2" id="ban_spa_sidemobilemenu2" ' . ((Configuration::get('RC_BAN_SPA_SIDEMOBILEMENU') == "2") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa2" for="ban_spa_sidemobilemenu2"> <span>2 . Medium</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_sidemobilemenu" value="3" id="ban_spa_sidemobilemenu3" ' . ((Configuration::get('RC_BAN_SPA_SIDEMOBILEMENU') == "3") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds bg5" for="ban_spa_sidemobilemenu3"> <span>3 . No spacing</span></label>
                       </div></div></div>

                       <div class="roywrap section">
                       <div class="roytc_row">
                            <label>' . $this->l('Top spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_ts_sidemobilemenu" value="' . Configuration::get('RC_BAN_TS_SIDEMOBILEMENU') . '" /> px
                       </div></div>
                       <div class="roytc_row">
                            <label>' . $this->l('Bottom spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_bs_sidemobilemenu" value="' . Configuration::get('RC_BAN_BS_SIDEMOBILEMENU') . '" /> px
                       </div></div></div>


                  <h3>' . $this->l('Product page Before buy content/banners') . '</h3>

                       <div class="roywrap wauto fw">
                       <div class="roytc_row ds_wrap">
                             <label>' . $this->l('Spacing between banners') . '</label>
                             <div class="margin-form">
                                 <input type="radio" class="regular-radio" name="ban_spa_product" value="1" id="ban_spa_product1" ' . ((Configuration::get('RC_BAN_SPA_PRODUCT') == "1") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa1" for="ban_spa_product1"> <span>1 . Small</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_product" value="2" id="ban_spa_product2" ' . ((Configuration::get('RC_BAN_SPA_PRODUCT') == "2") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds ban_spa2" for="ban_spa_product2"> <span>2 . Medium</span></label>
                                 <input type="radio" class="regular-radio" name="ban_spa_product" value="3" id="ban_spa_product3" ' . ((Configuration::get('RC_BAN_SPA_PRODUCT') == "3") ? 'checked="checked" ' : '') . ' />
                                 <label class="ds bg5" for="ban_spa_product3"> <span>3 . No spacing</span></label>
                       </div></div></div>

                       <div class="roywrap section">
                       <div class="roytc_row">
                            <label>' . $this->l('Top spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_ts_product" value="' . Configuration::get('RC_BAN_TS_PRODUCT') . '" /> px
                       </div></div>
                       <div class="roytc_row">
                            <label>' . $this->l('Bottom spacing') . '</label>
                            <div class="margin-form">
                            <input type="text" name="ban_bs_product" value="' . Configuration::get('RC_BAN_BS_PRODUCT') . '" /> px
                       </div></div></div>

            </div>


            <div class="section" id="tab-homepage3">

                  <h3>' . $this->l('Home products Title') . '</h3>

                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Title layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_hp_title" id="nc_hp_title1" value="1" ' . ((Configuration::get('NC_HP_TITLE') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds nc_hp_title1" for="nc_hp_title1"><span>1 . Title only</span></label>
                      <input type="radio" class="regular-radio" name="nc_hp_title" id="nc_hp_title2" value="2" ' . ((Configuration::get('NC_HP_TITLE') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds nc_hp_title2" for="nc_hp_title2"><span>2. Title + Description</span></label>
                      <input type="radio" class="regular-radio" name="nc_hp_title" id="nc_hp_title3" value="3" ' . ((Configuration::get('NC_HP_TITLE') == 3) ? 'checked="checked" ' : '') . '/>
                      <label class="ds bg5" for="nc_hp_title3"><span>3. No title</span></label>
                  </div></div>
                  <div class="roytc_row ds_wrap fw">
                      <label>' . $this->l('Text align') . '</label>
                      <div class="margin-form">
                          <input type="radio" class="regular-radio nc_hp_align" name="nc_hp_align" value="1" id="nc_hp_align1" ' . ((Configuration::get('NC_HP_ALIGN') == "1") ? 'checked="checked" ' : '') . ' />
                          <label class="ds align1" for="nc_hp_align1"> <span>1 . Left</span></label>
                          <input type="radio" class="regular-radio nc_hp_align" name="nc_hp_align" value="2" id="nc_hp_align2" ' . ((Configuration::get('NC_HP_ALIGN') == "2") ? 'checked="checked" ' : '') . ' />
                          <label class="ds align2" for="nc_hp_align2"> <span>2 . Center</span></label>
                          <input type="radio" class="regular-radio nc_hp_align" name="nc_hp_align" value="3" id="nc_hp_align3" ' . ((Configuration::get('NC_HP_ALIGN') == "3") ? 'checked="checked" ' : '') . ' />
                          <label class="ds align3" for="nc_hp_align3"> <span>3 . Right</span></label>
                  </div></div>
                  </div>


                  <h3>' . $this->l('Featured Products slider') . '</h3>
                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Product layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_feat_lay" id="nc_feat_lay1" value="1" ' . ((Configuration::get('NC_FEAT_LAYS') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay1" for="nc_feat_lay1"><span>1 . Classic</span></label>
                      <input type="radio" class="regular-radio" name="nc_feat_lay" id="nc_feat_lay2" value="2" ' . ((Configuration::get('NC_FEAT_LAYS') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay2" for="nc_feat_lay2"><span>2. Mini products</span></label>
                  </div></div>
                  <div class="roytc_row ds_wrap">
                          <label>' . $this->l('Space between products') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio nc_feat_spa" name="nc_feat_spa" value="1" id="nc_feat_spa1" ' . ((Configuration::get('NC_FEAT_SPAS') == 1) ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin1" for="nc_feat_spa1"> <span>1 . Normal</span></label>
                              <input type="radio" class="regular-radio nc_feat_spa" name="nc_feat_spa" value="2" id="nc_feat_spa2" ' . ((Configuration::get('NC_FEAT_SPAS') == 2) ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin2" for="nc_feat_spa2"> <span>2 . Large</span></label>
                  </div></div>
                  </div>

                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Products per row?') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_feat_per" id="nc_feat_per2" value="2" ' . ((Configuration::get('NC_FEAT_PERS') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow2" for="nc_feat_per2"><span>2</span></label>
                      <input type="radio" class="regular-radio" name="nc_feat_per" id="nc_feat_per3" value="3" ' . ((Configuration::get('NC_FEAT_PERS') == 3) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow3" for="nc_feat_per3"><span>3</span></label>
                      <input type="radio" class="regular-radio" name="nc_feat_per" id="nc_feat_per4" value="4" ' . ((Configuration::get('NC_FEAT_PERS') == 4) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow4" for="nc_feat_per4"><span>4</span></label>
                      <input type="radio" class="regular-radio" name="nc_feat_per" id="nc_feat_per5" value="5" ' . ((Configuration::get('NC_FEAT_PERS') == 5) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow5" for="nc_feat_per5"><span>5</span></label>
                  </div></div>

                  <div class="roywrap section">
                  <div class="roytc_row">
          				<label>' . $this->l('Enable slider?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_feat_slider" id="nc_feat_slider_1" value="1" ' . ((Configuration::get('NC_FEAT_SLIDERS') == 1) ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_feat_slider_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_feat_slider" id="nc_feat_slider_2" value="2" ' . ((Configuration::get('NC_FEAT_SLIDERS') == 2) ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_feat_slider_2"> No</label>
          				</div></div></div>
                  <div class="roytc_row">
          				<label>' . $this->l('Enable autoscroll?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_feat_auto" id="nc_feat_auto_1" value="true" ' . ((Configuration::get('NC_FEAT_AUTOS') == "true") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_feat_auto_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_feat_auto" id="nc_feat_auto_0" value="false" ' . ((Configuration::get('NC_FEAT_AUTOS') == "false") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_feat_auto_0"> No</label>
          				</div></div></div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Custom Background for module?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_feat_bg" name="nc_feat_bg" value="1" id="nc_feat_bg1" ' . ((Configuration::get('NC_FEAT_BG') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_feat_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_feat_bg" name="nc_feat_bg" value="2" id="nc_feat_bg2" ' . ((Configuration::get('NC_FEAT_BG') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_feat_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_feat_bg" name="nc_feat_bg" value="3" id="nc_feat_bg3" ' . ((Configuration::get('NC_FEAT_BG') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_feat_bg3"> <span>3 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_feat_bg">
                        <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_feat_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FEAT_BC') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_feat_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FEAT_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_feat_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FEAT_GE') . '" />
                        </div></div>
                        <div class="roytc_row style="width:50%;">
                             <label>' . $this->l('Gradient angle deg.') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_feat_gg" value="' . Configuration::get('NC_OT_GG') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Title') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_feat_title" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FEAT_TITLE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_feat_text" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FEAT_TEXT') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price bg (if exist)') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_feat_textbg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FEAT_TEXTBG') . '" />
                        </div></div>
                        </div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Desktop block width') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_feat_width" id="nc_feat_width1" value="1" ' . ((Configuration::get('NC_FEAT_WIDTH') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width1" for="nc_feat_width1"><span>1 . Full width</span></label>
                      <input type="radio" class="regular-radio" name="nc_feat_width" id="nc_feat_width2" value="2" ' . ((Configuration::get('NC_FEAT_WIDTH') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width2" for="nc_feat_width2"><span>2. Half width</span></label>
                  </div></div>

                   <div class="roywrap fw section">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_feat_top" value="' . Configuration::get('NC_FEAT_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_feat_bot" value="' . Configuration::get('NC_FEAT_BOTS') . '" /> px
                   </div></div></div>




                  <h3>' . $this->l('Best Products slider') . '</h3>
                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Product layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_best_lay" id="nc_best_lay1" value="1" ' . ((Configuration::get('NC_BEST_LAY') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay1" for="nc_best_lay1"><span>1 . Classic</span></label>
                      <input type="radio" class="regular-radio" name="nc_best_lay" id="nc_best_lay2" value="2" ' . ((Configuration::get('NC_BEST_LAY') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay2" for="nc_best_lay2"><span>2. Mini products</span></label>
                  </div></div>
                  <div class="roytc_row ds_wrap">
                          <label>' . $this->l('Space between products') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio nc_best_spa" name="nc_best_spa" value="1" id="nc_best_spa1" ' . ((Configuration::get('NC_BEST_SPA') == "1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin1" for="nc_best_spa1"> <span>1 . Normal</span></label>
                              <input type="radio" class="regular-radio nc_best_spa" name="nc_best_spa" value="2" id="nc_best_spa2" ' . ((Configuration::get('NC_BEST_SPA') == "2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin2" for="nc_best_spa2"> <span>2 . Large</span></label>
                  </div></div>
                  </div>

                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Products per row?') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_best_per" id="nc_best_per2" value="2" ' . ((Configuration::get('NC_BEST_PER') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow2" for="nc_best_per2"><span>2</span></label>
                      <input type="radio" class="regular-radio" name="nc_best_per" id="nc_best_per3" value="3" ' . ((Configuration::get('NC_BEST_PER') == 3) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow3" for="nc_best_per3"><span>3</span></label>
                      <input type="radio" class="regular-radio" name="nc_best_per" id="nc_best_per4" value="4" ' . ((Configuration::get('NC_BEST_PER') == 4) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow4" for="nc_best_per4"><span>4</span></label>
                      <input type="radio" class="regular-radio" name="nc_best_per" id="nc_best_per5" value="5" ' . ((Configuration::get('NC_BEST_PER') == 5) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow5" for="nc_best_per5"><span>5</span></label>
                  </div></div>

                  <div class="roywrap section">
                  <div class="roytc_row">
          				<label>' . $this->l('Enable slider?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_best_slider" id="nc_best_slider_1" value="1" ' . ((Configuration::get('NC_BEST_SLIDER') == "1") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_best_slider_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_best_slider" id="nc_best_slider_2" value="2" ' . ((Configuration::get('NC_BEST_SLIDER') == "2") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_best_slider_2"> No</label>
          				</div></div></div>
                  <div class="roytc_row">
          				<label>' . $this->l('Enable autoscroll?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_best_auto" id="nc_best_auto_1" value="true" ' . ((Configuration::get('NC_BEST_AUTO') == "true") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_best_auto_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_best_auto" id="nc_best_auto_0" value="false" ' . ((Configuration::get('NC_BEST_AUTO') == "false") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_best_auto_0"> No</label>
          				</div></div></div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Custom Background for module?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_best_bg" name="nc_best_bg" value="1" id="nc_best_bg1" ' . ((Configuration::get('NC_BEST_BG') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_best_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_best_bg" name="nc_best_bg" value="2" id="nc_best_bg2" ' . ((Configuration::get('NC_BEST_BG') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_best_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_best_bg" name="nc_best_bg" value="3" id="nc_best_bg3" ' . ((Configuration::get('NC_BEST_BG') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_best_bg3"> <span>3 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_best_bg">
                        <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_best_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_BEST_BC') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_best_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_BEST_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_best_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_BEST_GE') . '" />
                        </div></div>
                        <div class="roytc_row style="width:50%;">
                             <label>' . $this->l('Gradient angle deg.') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_best_gg" value="' . Configuration::get('NC_OT_GG') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Title') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_best_title" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_BEST_TITLE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_best_text" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_BEST_TEXT') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price bg (if exist)') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_best_textbg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_BEST_TEXTBG') . '" />
                        </div></div>
                        </div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Desktop block width') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_best_width" id="nc_best_width1" value="1" ' . ((Configuration::get('NC_BEST_WIDTH') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width1" for="nc_best_width1"><span>1 . Full width</span></label>
                      <input type="radio" class="regular-radio" name="nc_best_width" id="nc_best_width2" value="2" ' . ((Configuration::get('NC_BEST_WIDTH') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width2" for="nc_best_width2"><span>2. Half width</span></label>
                  </div></div>

                   <div class="roywrap fw section">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_best_top" value="' . Configuration::get('NC_BEST_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_best_bot" value="' . Configuration::get('NC_BEST_BOTS') . '" /> px
                   </div></div></div>


                  <h3>' . $this->l('New Products slider') . '</h3>
                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Product layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_new_lay" id="nc_new_lay1" value="1" ' . ((Configuration::get('NC_NEW_LAY') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay1" for="nc_new_lay1"><span>1 . Classic</span></label>
                      <input type="radio" class="regular-radio" name="nc_new_lay" id="nc_new_lay2" value="2" ' . ((Configuration::get('NC_NEW_LAY') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay2" for="nc_new_lay2"><span>2. Mini products</span></label>
                  </div></div>
                  <div class="roytc_row ds_wrap">
                          <label>' . $this->l('Space between products') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio nc_new_spa" name="nc_new_spa" value="1" id="nc_new_spa1" ' . ((Configuration::get('NC_NEW_SPA') == "1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin1" for="nc_new_spa1"> <span>1 . Normal</span></label>
                              <input type="radio" class="regular-radio nc_new_spa" name="nc_new_spa" value="2" id="nc_new_spa2" ' . ((Configuration::get('NC_NEW_SPA') == "2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin2" for="nc_new_spa2"> <span>2 . Large</span></label>
                  </div></div>
                  </div>

                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Products per row?') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_new_per" id="nc_new_per2" value="2" ' . ((Configuration::get('NC_NEW_PER') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow2" for="nc_new_per2"><span>2</span></label>
                      <input type="radio" class="regular-radio" name="nc_new_per" id="nc_new_per3" value="3" ' . ((Configuration::get('NC_NEW_PER') == 3) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow3" for="nc_new_per3"><span>3</span></label>
                      <input type="radio" class="regular-radio" name="nc_new_per" id="nc_new_per4" value="4" ' . ((Configuration::get('NC_NEW_PER') == 4) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow4" for="nc_new_per4"><span>4</span></label>
                      <input type="radio" class="regular-radio" name="nc_new_per" id="nc_new_per5" value="5" ' . ((Configuration::get('NC_NEW_PER') == 5) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow5" for="nc_new_per5"><span>5</span></label>
                  </div></div>

                  <div class="roywrap section">
                  <div class="roytc_row">
          				<label>' . $this->l('Enable slider?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_new_slider" id="nc_new_slider_1" value="1" ' . ((Configuration::get('NC_NEW_SLIDER') == "1") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_new_slider_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_new_slider" id="nc_new_slider_2" value="2" ' . ((Configuration::get('NC_NEW_SLIDER') == "2") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_new_slider_2"> No</label>
          				</div></div></div>
                  <div class="roytc_row">
          				<label>' . $this->l('Enable autoscroll?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_new_auto" id="nc_new_auto_1" value="true" ' . ((Configuration::get('NC_NEW_AUTO') == "true") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_new_auto_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_new_auto" id="nc_new_auto_0" value="false" ' . ((Configuration::get('NC_NEW_AUTO') == "false") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_new_auto_0"> No</label>
          				</div></div></div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Custom Background for module?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_new_bg" name="nc_new_bg" value="1" id="nc_new_bg1" ' . ((Configuration::get('NC_NEW_BG') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_new_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_new_bg" name="nc_new_bg" value="2" id="nc_new_bg2" ' . ((Configuration::get('NC_NEW_BG') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_new_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_new_bg" name="nc_new_bg" value="3" id="nc_new_bg3" ' . ((Configuration::get('NC_NEW_BG') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_new_bg3"> <span>3 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_new_bg">
                        <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_new_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_NEW_BC') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_new_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_NEW_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_new_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_NEW_GE') . '" />
                        </div></div>
                        <div class="roytc_row style="width:50%;">
                             <label>' . $this->l('Gradient angle deg.') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_new_gg" value="' . Configuration::get('NC_OT_GG') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Title') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_new_title" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_NEW_TITLE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_new_text" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_NEW_TEXT') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price bg (if exist)') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_new_textbg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_NEW_TEXTBG') . '" />
                        </div></div>
                        </div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Desktop block width') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_new_width" id="nc_new_width1" value="1" ' . ((Configuration::get('NC_NEW_WIDTH') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width1" for="nc_new_width1"><span>1 . Full width</span></label>
                      <input type="radio" class="regular-radio" name="nc_new_width" id="nc_new_width2" value="2" ' . ((Configuration::get('NC_NEW_WIDTH') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width2" for="nc_new_width2"><span>2. Half width</span></label>
                  </div></div>

                   <div class="roywrap fw section">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_new_top" value="' . Configuration::get('NC_NEW_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_new_bot" value="' . Configuration::get('NC_NEW_BOTS') . '" /> px
                   </div></div></div>


                  <h3>' . $this->l('Specials Products slider') . '</h3>
                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Product layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_sale_lay" id="nc_sale_lay1" value="1" ' . ((Configuration::get('NC_SALE_LAY') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay1" for="nc_sale_lay1"><span>1 . Classic</span></label>
                      <input type="radio" class="regular-radio" name="nc_sale_lay" id="nc_sale_lay2" value="2" ' . ((Configuration::get('NC_SALE_LAY') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay2" for="nc_sale_lay2"><span>2. Mini products</span></label>
                  </div></div>
                  <div class="roytc_row ds_wrap">
                          <label>' . $this->l('Space between products') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio nc_sale_spa" name="nc_sale_spa" value="1" id="nc_sale_spa1" ' . ((Configuration::get('NC_SALE_SPA') == "1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin1" for="nc_sale_spa1"> <span>1 . Normal</span></label>
                              <input type="radio" class="regular-radio nc_sale_spa" name="nc_sale_spa" value="2" id="nc_sale_spa2" ' . ((Configuration::get('NC_SALE_SPA') == "2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin2" for="nc_sale_spa2"> <span>2 . Large</span></label>
                  </div></div>
                  </div>

                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Products per row?') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_sale_per" id="nc_sale_per2" value="2" ' . ((Configuration::get('NC_SALE_PER') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow2" for="nc_sale_per2"><span>2</span></label>
                      <input type="radio" class="regular-radio" name="nc_sale_per" id="nc_sale_per3" value="3" ' . ((Configuration::get('NC_SALE_PER') == 3) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow3" for="nc_sale_per3"><span>3</span></label>
                      <input type="radio" class="regular-radio" name="nc_sale_per" id="nc_sale_per4" value="4" ' . ((Configuration::get('NC_SALE_PER') == 4) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow4" for="nc_sale_per4"><span>4</span></label>
                      <input type="radio" class="regular-radio" name="nc_sale_per" id="nc_sale_per5" value="5" ' . ((Configuration::get('NC_SALE_PER') == 5) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow5" for="nc_sale_per5"><span>5</span></label>
                  </div></div>

                  <div class="roywrap section">
                  <div class="roytc_row">
          				<label>' . $this->l('Enable slider?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_sale_slider" id="nc_sale_slider_1" value="1" ' . ((Configuration::get('NC_SALE_SLIDER') == "1") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_sale_slider_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_sale_slider" id="nc_sale_slider_2" value="2" ' . ((Configuration::get('NC_SALE_SLIDER') == "2") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_sale_slider_2"> No</label>
          				</div></div></div>
                  <div class="roytc_row">
          				<label>' . $this->l('Enable autoscroll?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_sale_auto" id="nc_sale_auto_1" value="true" ' . ((Configuration::get('NC_SALE_AUTO') == "true") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_sale_auto_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_sale_auto" id="nc_sale_auto_0" value="false" ' . ((Configuration::get('NC_SALE_AUTO') == "false") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_sale_auto_0"> No</label>
          				</div></div></div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Custom Background for module?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_sale_bg" name="nc_sale_bg" value="1" id="nc_sale_bg1" ' . ((Configuration::get('NC_SALE_BG') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_sale_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_sale_bg" name="nc_sale_bg" value="2" id="nc_sale_bg2" ' . ((Configuration::get('NC_SALE_BG') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_sale_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_sale_bg" name="nc_sale_bg" value="3" id="nc_sale_bg3" ' . ((Configuration::get('NC_SALE_BG') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_sale_bg3"> <span>3 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_sale_bg">
                        <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_sale_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SALE_BC') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_sale_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SALE_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_sale_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SALE_GE') . '" />
                        </div></div>
                        <div class="roytc_row style="width:50%;">
                             <label>' . $this->l('Gradient angle deg.') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_sale_gg" value="' . Configuration::get('NC_OT_GG') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Title') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_sale_title" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SALE_TITLE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_sale_text" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SALE_TEXT') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price bg (if exist)') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_sale_textbg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_SALE_TEXTBG') . '" />
                        </div></div>
                        </div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Desktop block width') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_sale_width" id="nc_sale_width1" value="1" ' . ((Configuration::get('NC_SALE_WIDTH') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width1" for="nc_sale_width1"><span>1 . Full width</span></label>
                      <input type="radio" class="regular-radio" name="nc_sale_width" id="nc_sale_width2" value="2" ' . ((Configuration::get('NC_SALE_WIDTH') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width2" for="nc_sale_width2"><span>2. Half width</span></label>
                  </div></div>

                   <div class="roywrap fw section">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_sale_top" value="' . Configuration::get('NC_SALE_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_sale_bot" value="' . Configuration::get('NC_SALE_BOTS') . '" /> px
                   </div></div></div>


                  <h3>' . $this->l('Custom category 1 Products slider') . '</h3>
                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Product layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc1_lay" id="nc_cc1_lay1" value="1" ' . ((Configuration::get('NC_CC1_LAY') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay1" for="nc_cc1_lay1"><span>1 . Classic</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc1_lay" id="nc_cc1_lay2" value="2" ' . ((Configuration::get('NC_CC1_LAY') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay2" for="nc_cc1_lay2"><span>2. Mini products</span></label>
                  </div></div>
                  <div class="roytc_row ds_wrap">
                          <label>' . $this->l('Space between products') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio nc_cc1_spa" name="nc_cc1_spa" value="1" id="nc_cc1_spa1" ' . ((Configuration::get('NC_CC1_SPA') == "1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin1" for="nc_cc1_spa1"> <span>1 . Normal</span></label>
                              <input type="radio" class="regular-radio nc_cc1_spa" name="nc_cc1_spa" value="2" id="nc_cc1_spa2" ' . ((Configuration::get('NC_CC1_SPA') == "2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin2" for="nc_cc1_spa2"> <span>2 . Large</span></label>
                  </div></div>
                  </div>

                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Products per row?') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc1_per" id="nc_cc1_per2" value="2" ' . ((Configuration::get('NC_CC1_PER') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow2" for="nc_cc1_per2"><span>2</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc1_per" id="nc_cc1_per3" value="3" ' . ((Configuration::get('NC_CC1_PER') == 3) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow3" for="nc_cc1_per3"><span>3</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc1_per" id="nc_cc1_per4" value="4" ' . ((Configuration::get('NC_CC1_PER') == 4) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow4" for="nc_cc1_per4"><span>4</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc1_per" id="nc_cc1_per5" value="5" ' . ((Configuration::get('NC_CC1_PER') == 5) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow5" for="nc_cc1_per5"><span>5</span></label>
                  </div></div>

                  <div class="roywrap section">
                  <div class="roytc_row">
          				<label>' . $this->l('Enable slider?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_cc1_slider" id="nc_cc1_slider_1" value="1" ' . ((Configuration::get('NC_CC1_SLIDER') == "1") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc1_slider_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_cc1_slider" id="nc_cc1_slider_2" value="2" ' . ((Configuration::get('NC_CC1_SLIDER') == "2") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc1_slider_2"> No</label>
          				</div></div></div>
                  <div class="roytc_row">
          				<label>' . $this->l('Enable autoscroll?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_cc1_auto" id="nc_cc1_auto_1" value="true" ' . ((Configuration::get('NC_CC1_AUTO') == "true") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc1_auto_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_cc1_auto" id="nc_cc1_auto_0" value="false" ' . ((Configuration::get('NC_CC1_AUTO') == "false") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc1_auto_0"> No</label>
          				</div></div></div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Custom Background for module?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_cc1_bg" name="nc_cc1_bg" value="1" id="nc_cc1_bg1" ' . ((Configuration::get('NC_CC1_BG') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_cc1_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_cc1_bg" name="nc_cc1_bg" value="2" id="nc_cc1_bg2" ' . ((Configuration::get('NC_CC1_BG') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_cc1_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_cc1_bg" name="nc_cc1_bg" value="3" id="nc_cc1_bg3" ' . ((Configuration::get('NC_CC1_BG') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_cc1_bg3"> <span>3 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_cc1_bg">
                        <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_cc1_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC1_BC') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc1_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC1_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc1_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC1_GE') . '" />
                        </div></div>
                        <div class="roytc_row style="width:50%;">
                             <label>' . $this->l('Gradient angle deg.') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_cc1_gg" value="' . Configuration::get('NC_OT_GG') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Title') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc1_title" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC1_TITLE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc1_text" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC1_TEXT') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price bg (if exist)') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc1_textbg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC1_TEXTBG') . '" />
                        </div></div>
                        </div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Desktop block width') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc1_width" id="nc_cc1_width1" value="1" ' . ((Configuration::get('NC_CC1_WIDTH') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width1" for="nc_cc1_width1"><span>1 . Full width</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc1_width" id="nc_cc1_width2" value="2" ' . ((Configuration::get('NC_CC1_WIDTH') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width2" for="nc_cc1_width2"><span>2. Half width</span></label>
                  </div></div>

                   <div class="roywrap fw section">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_cc1_top" value="' . Configuration::get('NC_CC1_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_cc1_bot" value="' . Configuration::get('NC_CC1_BOTS') . '" /> px
                   </div></div></div>


                  <h3>' . $this->l('Custom category 2 Products slider') . '</h3>
                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Product layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc2_lay" id="nc_cc2_lay1" value="1" ' . ((Configuration::get('NC_CC2_LAY') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay1" for="nc_cc2_lay1"><span>1 . Classic</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc2_lay" id="nc_cc2_lay2" value="2" ' . ((Configuration::get('NC_CC2_LAY') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay2" for="nc_cc2_lay2"><span>2. Mini products</span></label>
                  </div></div>
                  <div class="roytc_row ds_wrap">
                          <label>' . $this->l('Space between products') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio nc_cc2_spa" name="nc_cc2_spa" value="1" id="nc_cc2_spa1" ' . ((Configuration::get('NC_CC2_SPA') == "1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin1" for="nc_cc2_spa1"> <span>1 . Normal</span></label>
                              <input type="radio" class="regular-radio nc_cc2_spa" name="nc_cc2_spa" value="2" id="nc_cc2_spa2" ' . ((Configuration::get('NC_CC2_SPA') == "2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin2" for="nc_cc2_spa2"> <span>2 . Large</span></label>
                  </div></div>
                  </div>

                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Products per row?') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc2_per" id="nc_cc2_per2" value="2" ' . ((Configuration::get('NC_CC2_PER') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow2" for="nc_cc2_per2"><span>2</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc2_per" id="nc_cc2_per3" value="3" ' . ((Configuration::get('NC_CC2_PER') == 3) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow3" for="nc_cc2_per3"><span>3</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc2_per" id="nc_cc2_per4" value="4" ' . ((Configuration::get('NC_CC2_PER') == 4) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow4" for="nc_cc2_per4"><span>4</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc2_per" id="nc_cc2_per5" value="5" ' . ((Configuration::get('NC_CC2_PER') == 5) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow5" for="nc_cc2_per5"><span>5</span></label>
                  </div></div>

                  <div class="roywrap section">
                  <div class="roytc_row">
          				<label>' . $this->l('Enable slider?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_cc2_slider" id="nc_cc2_slider_1" value="1" ' . ((Configuration::get('NC_CC2_SLIDER') == "1") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc2_slider_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_cc2_slider" id="nc_cc2_slider_2" value="2" ' . ((Configuration::get('NC_CC2_SLIDER') == "2") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc2_slider_2"> No</label>
          				</div></div></div>
                  <div class="roytc_row">
          				<label>' . $this->l('Enable autoscroll?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_cc2_auto" id="nc_cc2_auto_1" value="true" ' . ((Configuration::get('NC_CC2_AUTO') == "true") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc2_auto_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_cc2_auto" id="nc_cc2_auto_0" value="false" ' . ((Configuration::get('NC_CC2_AUTO') == "false") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc2_auto_0"> No</label>
          				</div></div></div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Custom Background for module?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_cc2_bg" name="nc_cc2_bg" value="1" id="nc_cc2_bg1" ' . ((Configuration::get('NC_CC2_BG') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_cc2_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_cc2_bg" name="nc_cc2_bg" value="2" id="nc_cc2_bg2" ' . ((Configuration::get('NC_CC2_BG') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_cc2_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_cc2_bg" name="nc_cc2_bg" value="3" id="nc_cc2_bg3" ' . ((Configuration::get('NC_CC2_BG') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_cc2_bg3"> <span>3 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_cc2_bg">
                        <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_cc2_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC2_BC') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc2_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC2_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc2_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC2_GE') . '" />
                        </div></div>
                        <div class="roytc_row style="width:50%;">
                             <label>' . $this->l('Gradient angle deg.') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_cc2_gg" value="' . Configuration::get('NC_OT_GG') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Title') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc2_title" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC2_TITLE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc2_text" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC2_TEXT') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price bg (if exist)') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc2_textbg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC2_TEXTBG') . '" />
                        </div></div>
                        </div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Desktop block width') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc2_width" id="nc_cc2_width1" value="1" ' . ((Configuration::get('NC_CC2_WIDTH') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width1" for="nc_cc2_width1"><span>1 . Full width</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc2_width" id="nc_cc2_width2" value="2" ' . ((Configuration::get('NC_CC2_WIDTH') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width2" for="nc_cc2_width2"><span>2. Half width</span></label>
                  </div></div>

                   <div class="roywrap fw section">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_cc2_top" value="' . Configuration::get('NC_CC2_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_cc2_bot" value="' . Configuration::get('NC_CC2_BOTS') . '" /> px
                   </div></div></div>


                  <h3>' . $this->l('Custom category 3 Products slider') . '</h3>
                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Product layout') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc3_lay" id="nc_cc3_lay1" value="1" ' . ((Configuration::get('NC_CC3_LAY') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay1" for="nc_cc3_lay1"><span>1 . Classic</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc3_lay" id="nc_cc3_lay2" value="2" ' . ((Configuration::get('NC_CC3_LAY') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_lay2" for="nc_cc3_lay2"><span>2. Mini products</span></label>
                  </div></div>
                  <div class="roytc_row ds_wrap">
                          <label>' . $this->l('Space between products') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio nc_cc3_spa" name="nc_cc3_spa" value="1" id="nc_cc3_spa1" ' . ((Configuration::get('NC_CC3_SPA') == "1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin1" for="nc_cc3_spa1"> <span>1 . Normal</span></label>
                              <input type="radio" class="regular-radio nc_cc3_spa" name="nc_cc3_spa" value="2" id="nc_cc3_spa2" ' . ((Configuration::get('NC_CC3_SPA') == "2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds nc_product_margin2" for="nc_cc3_spa2"> <span>2 . Large</span></label>
                  </div></div>
                  </div>

                  <div class="roytc_row ds_wrap">
                  <label>' . $this->l('Products per row?') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc3_per" id="nc_cc3_per2" value="2" ' . ((Configuration::get('NC_CC3_PER') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow2" for="nc_cc3_per2"><span>2</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc3_per" id="nc_cc3_per3" value="3" ' . ((Configuration::get('NC_CC3_PER') == 3) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow3" for="nc_cc3_per3"><span>3</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc3_per" id="nc_cc3_per4" value="4" ' . ((Configuration::get('NC_CC3_PER') == 4) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow4" for="nc_cc3_per4"><span>4</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc3_per" id="nc_cc3_per5" value="5" ' . ((Configuration::get('NC_CC3_PER') == 5) ? 'checked="checked" ' : '') . '/>
                      <label class="ds items_onrow5" for="nc_cc3_per5"><span>5</span></label>
                  </div></div>

                  <div class="roywrap section">
                  <div class="roytc_row">
          				<label>' . $this->l('Enable slider?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_cc3_slider" id="nc_cc3_slider_1" value="1" ' . ((Configuration::get('NC_CC3_SLIDER') == "1") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc3_slider_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_cc3_slider" id="nc_cc3_slider_2" value="2" ' . ((Configuration::get('NC_CC3_SLIDER') == "2") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc3_slider_2"> No</label>
          				</div></div></div>
                  <div class="roytc_row">
          				<label>' . $this->l('Enable autoscroll?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_cc3_auto" id="nc_cc3_auto_1" value="true" ' . ((Configuration::get('NC_CC3_AUTO') == "true") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc3_auto_1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_cc3_auto" id="nc_cc3_auto_0" value="false" ' . ((Configuration::get('NC_CC3_AUTO') == "false") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_cc3_auto_0"> No</label>
          				</div></div></div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Custom Background for module?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_cc3_bg" name="nc_cc3_bg" value="1" id="nc_cc3_bg1" ' . ((Configuration::get('NC_CC3_BG') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_cc3_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_cc3_bg" name="nc_cc3_bg" value="2" id="nc_cc3_bg2" ' . ((Configuration::get('NC_CC3_BG') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_cc3_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_cc3_bg" name="nc_cc3_bg" value="3" id="nc_cc3_bg3" ' . ((Configuration::get('NC_CC3_BG') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_cc3_bg3"> <span>3 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_cc3_bg">
                        <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_cc3_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC3_BC') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc3_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC3_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc3_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC3_GE') . '" />
                        </div></div>
                        <div class="roytc_row style="width:50%;">
                             <label>' . $this->l('Gradient angle deg.') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_cc3_gg" value="' . Configuration::get('NC_OT_GG') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Title') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc3_title" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC3_TITLE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc3_text" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC3_TEXT') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Custom Name and Price bg (if exist)') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_cc3_textbg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_CC3_TEXTBG') . '" />
                        </div></div>
                        </div>
                  </div>

                  <div class="roytc_row ds_wrap fw">
                  <label>' . $this->l('Desktop block width') . '</label>
                  <div class="margin-form">
                      <input type="radio" class="regular-radio" name="nc_cc3_width" id="nc_cc3_width1" value="1" ' . ((Configuration::get('NC_CC3_WIDTH') == 1) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width1" for="nc_cc3_width1"><span>1 . Full width</span></label>
                      <input type="radio" class="regular-radio" name="nc_cc3_width" id="nc_cc3_width2" value="2" ' . ((Configuration::get('NC_CC3_WIDTH') == 2) ? 'checked="checked" ' : '') . '/>
                      <label class="ds hp_width2" for="nc_cc3_width2"><span>2. Half width</span></label>
                  </div></div>

                   <div class="roywrap fw section">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_cc3_top" value="' . Configuration::get('NC_CC3_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_cc3_bot" value="' . Configuration::get('NC_CC3_BOTS') . '" /> px
                   </div></div></div>





            </div>

            <div class="section" id="tab-homepage6">
                  <h3 class="">' . $this->l('Brand / Manufacturer logo slider') . '</h3>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Brands block width') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="brand_w" value="1" id="brand_w1" ' . ((Configuration::get('RC_BRAND_W') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds width1" for="brand_w1"> <span>1 . Container</span></label>
                            <input type="radio" class="regular-radio" name="brand_w" value="2" id="brand_w2" ' . ((Configuration::get('RC_BRAND_W') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds width2" for="brand_w2"> <span>2 . Full Width</span></label>
                  </div></div>

                  <div class="roytc_row ds_wrap">
                      <label>' . $this->l('Brands per row?') . '</label>
                      <div class="margin-form">
                          <input type="radio" class="regular-radio" name="brand_per_row" id="brand_per_row3" value="3" ' . ((Configuration::get('RC_BRAND_PER_ROW') == 3) ? 'checked="checked" ' : '') . '/>
                          <label class="ds items_onrow3" for="brand_per_row3"><span>3</span></label>
                          <input type="radio" class="regular-radio" name="brand_per_row" id="brand_per_row4" value="4" ' . ((Configuration::get('RC_BRAND_PER_ROW') == 4) ? 'checked="checked" ' : '') . '/>
                          <label class="ds items_onrow4" for="brand_per_row4"><span>4</span></label>
                          <input type="radio" class="regular-radio" name="brand_per_row" id="brand_per_row5" value="5" ' . ((Configuration::get('RC_BRAND_PER_ROW') == 5) ? 'checked="checked" ' : '') . '/>
                          <label class="ds items_onrow5" for="brand_per_row5"><span>5</span></label>
                          <input type="radio" class="regular-radio" name="brand_per_row" id="brand_per_row6" value="6" ' . ((Configuration::get('RC_BRAND_PER_ROW') == 6) ? 'checked="checked" ' : '') . '/>
                          <label class="ds items_onrow6" for="brand_per_row6"><span>6</span></label>
                      </div></div>

                  <h3 class="first">' . $this->l('If name list (not logos) selected') . '</h3>
                  <div class="roywrap">
            			<div class="roytc_row">
                        <label>' . $this->l('Brands name color') . '</label>
                        <div class="margin-form" style="margin-top:0">
                        <input type="color" name="brand_name"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_BRAND_NAME') . '" />
                  </div></div>
                  <div class="roytc_row">
                        <label>' . $this->l('Brands name color hover') . '</label>
                        <div class="margin-form">
                        <input type="color" name="brand_name_hover"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_BRAND_NAME_HOVER') . '" />
                  </div></div>
                  </div>
            </div>
            </div>

            <div class="tab-pane" id="tab-page">
                 <h2 class="rtc_title4">' . $this->l('Shop Pages content') . '</h2>
                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-pages1 active">
                                    <a data-inside="tab" href="#tab-pages1"><span>1</span>Sections</a>
                              </li>
                              <li class="inside_tab tab-pages2">
                                    <a data-inside="tab" href="#tab-pages2"><span>2</span>Pages Width</a>
                              </li>
                              <li class="inside_tab tab-pages3">
                                    <a data-inside="tab" href="#tab-pages3"><span>3</span>Breadcrumb</a>
                              </li>
                              <li class="inside_tab tab-pages4">
                                    <a data-inside="tab" href="#tab-pages4"><span>4</span>CMS Content</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

            <div class="section" id="tab-pages1">
               <h3 class="first">' . $this->l('Top section') . '</h3>
                  <div class="roytc_row ds_wrap">
                        <label>' . $this->l('What to use?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_ot_bg" name="nc_ot_bg" value="1" id="nc_ot_bg1" ' . ((Configuration::get('NC_OT_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_ot_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_ot_bg" name="nc_ot_bg" value="2" id="nc_ot_bg2" ' . ((Configuration::get('NC_OT_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_ot_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_ot_bg" name="nc_ot_bg" value="3" id="nc_ot_bg3" ' . ((Configuration::get('NC_OT_BGS') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg3" for="nc_ot_bg3"> <span>3 . Image</span></label>
                            <input type="radio" class="regular-radio nc_ot_bg" name="nc_ot_bg" value="4" id="nc_ot_bg4" ' . ((Configuration::get('NC_OT_BGS') == "4") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_ot_bg4"> <span>4 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_ot_bc">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_ot_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OT_BC') . '" />
                        </div></div>
                  </div>
                  <div class="if_nc_ot_gr">
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_ot_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OT_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_ot_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OT_GE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient angle') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_ot_gg" value="' . Configuration::get('NC_OT_GG') . '" /> degrees
                             <p class="clear grad_direction"></p>
                        </div></div>
                  </div>
                  <div class="if_nc_ot_im">
                        ';
                        $html .= $this -> backgroundOptions($panel="nc_ot_im", $panelupper="OT_IM");
                        $html .= '
                  </div>


                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Section Width') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="nc_ot_width" value="1" id="nc_ot_width1" ' . ((Configuration::get('NC_OT_WIDTH') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds width1" for="nc_ot_width1"> <span>1 . Container</span></label>
                            <input type="radio" class="regular-radio" name="nc_ot_width" value="2" id="nc_ot_width2" ' . ((Configuration::get('NC_OT_WIDTH') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds width2" for="nc_ot_width2"> <span>2 . Full Width</span></label>
                  </div></div>

                  <div class="roytc_row fw">
          				<label>' . $this->l('Left and right padding on top section?') . '</label>
                  <div class="yn">
          				<div class="margin-form">
          					<input type="radio" class="regular-radio" name="nc_ot_pad" id="nc_ot_pad1" value="1" ' . ((Configuration::get('NC_OT_PAD') == "1") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_ot_pad1"> Yes</label>
          					<input type="radio" class="regular-radio" name="nc_ot_pad" id="nc_ot_pad2" value="2" ' . ((Configuration::get('NC_OT_PAD') == "2") ? 'checked="checked" ' : '') . '/>
          					<label class="t" for="nc_ot_pad2"> No</label>
          				</div>
                  </div>
                  <p class="helpcontent">
                    Turn this off only if you use FULL WIDTH SLIDER ON TOP COLUMN HOOK.
                  </p></div>


                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_ot_top" value="' . Configuration::get('NC_OT_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_ot_bot" value="' . Configuration::get('NC_OT_BOTS') . '" /> px
                   </div></div>

               <h3>' . $this->l('Middle section') . '</h3>
                  <div class="roytc_row ds_wrap">
                        <label>' . $this->l('What to use?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_om_bg" name="nc_om_bg" value="1" id="nc_om_bg1" ' . ((Configuration::get('NC_OM_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_om_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_om_bg" name="nc_om_bg" value="2" id="nc_om_bg2" ' . ((Configuration::get('NC_OM_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_om_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_om_bg" name="nc_om_bg" value="3" id="nc_om_bg3" ' . ((Configuration::get('NC_OM_BGS') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg3" for="nc_om_bg3"> <span>3 . Image</span></label>
                            <input type="radio" class="regular-radio nc_om_bg" name="nc_om_bg" value="4" id="nc_om_bg4" ' . ((Configuration::get('NC_OM_BGS') == "4") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_om_bg4"> <span>4 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_om_bc">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_om_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OM_BC') . '" />
                        </div></div>
                  </div>
                  <div class="if_nc_om_gr">
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_om_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OM_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_om_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OM_GE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient angle') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_om_gg" value="' . Configuration::get('NC_OM_GG') . '" /> degrees
                             <p class="clear grad_direction"></p>
                        </div></div>
                  </div>
                  <div class="if_nc_om_im">
                        ';
                        $html .= $this -> backgroundOptions($panel="nc_om_im", $panelupper="OM_IM");
                        $html .= '
                  </div>

                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_om_top" value="' . Configuration::get('NC_OM_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_om_bot" value="' . Configuration::get('NC_OM_BOTS') . '" /> px
                   </div></div>


                   </div>

                   <div class="section" id="tab-pages2">
                   <h3>' . $this->l('Main Section Pages Width') . '</h3>
               <div class="roywrap w50">
                   <div class="roytc_row ds_wrap fw">
                         <label>' . $this->l('Overall pages') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="w_all" value="1" id="w_all1" ' . ((Configuration::get('RC_W_ALL') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="w_all1"> <span>1 . Container</span></label>
                             <input type="radio" class="regular-radio" name="w_all" value="2" id="w_all2" ' . ((Configuration::get('RC_W_ALL') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="w_all2"> <span>2 . Full Width</span></label>
                   </div></div>
                   <div class="roytc_row ds_wrap fw">
                         <label>' . $this->l('Category') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="w_cat" value="1" id="w_cat1" ' . ((Configuration::get('RC_W_CAT') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="w_cat1"> <span>1 . Container</span></label>
                             <input type="radio" class="regular-radio" name="w_cat" value="2" id="w_cat2" ' . ((Configuration::get('RC_W_CAT') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="w_cat2"> <span>2 . Full Width</span></label>
                   </div></div>
                   <div class="roytc_row ds_wrap fw">
                         <label>' . $this->l('Product') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="w_pro" value="1" id="w_pro1" ' . ((Configuration::get('RC_W_PRO') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="w_pro1"> <span>1 . Container</span></label>
                             <input type="radio" class="regular-radio" name="w_pro" value="2" id="w_pro2" ' . ((Configuration::get('RC_W_PRO') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="w_pro2"> <span>2 . Full Width</span></label>
                   </div></div>
                   <div class="roytc_row ds_wrap fw">
                         <label>' . $this->l('Contact Us') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="w_con" value="1" id="w_con1" ' . ((Configuration::get('RC_W_CON') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="w_con1"> <span>1 . Container</span></label>
                             <input type="radio" class="regular-radio" name="w_con" value="2" id="w_con2" ' . ((Configuration::get('RC_W_CON') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="w_con2"> <span>2 . Full Width</span></label>
                   </div></div>
                   <div class="roytc_row ds_wrap fw">
                         <label>' . $this->l('Cart and Checkout') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="w_cart" value="1" id="w_cart1" ' . ((Configuration::get('RC_W_CART') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="w_cart1"> <span>1 . Container</span></label>
                             <input type="radio" class="regular-radio" name="w_cart" value="2" id="w_cart2" ' . ((Configuration::get('RC_W_CART') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="w_cart2"> <span>2 . Full Width</span></label>
                   </div></div>
                   <div class="roytc_row ds_wrap fw">
                         <label>' . $this->l('My Account') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="w_acc" value="1" id="w_acc1" ' . ((Configuration::get('RC_W_ACC') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="w_acc1"> <span>1 . Container</span></label>
                             <input type="radio" class="regular-radio" name="w_acc" value="2" id="w_acc2" ' . ((Configuration::get('RC_W_ACC') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="w_acc2"> <span>2 . Full Width</span></label>
                   </div></div>
               </div>
                   <div class="roytc_row ds_wrap fw">
                         <label>' . $this->l('CMS Pages') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="w_cms" value="1" id="w_cms1" ' . ((Configuration::get('RC_W_CMS') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width0" for="w_cms1"> <span>1 . Narrow Container</span></label>
                             <input type="radio" class="regular-radio" name="w_cms" value="2" id="w_cms2" ' . ((Configuration::get('RC_W_CMS') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="w_cms2"> <span>2 . Container</span></label>
                             <input type="radio" class="regular-radio" name="w_cms" value="3" id="w_cms3" ' . ((Configuration::get('RC_W_CMS') == "3") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="w_cms3"> <span>3 . Full Width</span></label>
                   </div></div>
                   <div class="roytc_row ds_wrap fw">
                         <label>' . $this->l('Blog') . '</label>
                         <div class="margin-form">
                             <input type="radio" class="regular-radio" name="w_blog" value="1" id="w_blog1" ' . ((Configuration::get('RC_W_BLOG') == "1") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width0" for="w_blog1"> <span>1 . Narrow Container</span></label>
                             <input type="radio" class="regular-radio" name="w_blog" value="2" id="w_blog2" ' . ((Configuration::get('RC_W_BLOG') == "2") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width1" for="w_blog2"> <span>2 . Container</span></label>
                             <input type="radio" class="regular-radio" name="w_blog" value="3" id="w_blog3" ' . ((Configuration::get('RC_W_BLOG') == "3") ? 'checked="checked" ' : '') . ' />
                             <label class="ds width2" for="w_blog3"> <span>3 . Full Width</span></label>
                   </div></div>
                   <p class="helpcontent">
                     Narrow container increase text readability a lot. So it is really good for CMS and Blog pages.
                   </p>


               <h3>' . $this->l('Bottom section') . '</h3>
                  <div class="roytc_row ds_wrap">
                        <label>' . $this->l('What to use?') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_ob_bg" name="nc_ob_bg" value="1" id="nc_ob_bg1" ' . ((Configuration::get('NC_OB_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg1" for="nc_ob_bg1"> <span>1 . Background</span></label>
                            <input type="radio" class="regular-radio nc_ob_bg" name="nc_ob_bg" value="2" id="nc_ob_bg2" ' . ((Configuration::get('NC_OB_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg2" for="nc_ob_bg2"> <span>2 . Gradient</span></label>
                            <input type="radio" class="regular-radio nc_ob_bg" name="nc_ob_bg" value="3" id="nc_ob_bg3" ' . ((Configuration::get('NC_OB_BGS') == "3") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg3" for="nc_ob_bg3"> <span>3 . Image</span></label>
                            <input type="radio" class="regular-radio nc_ob_bg" name="nc_ob_bg" value="4" id="nc_ob_bg4" ' . ((Configuration::get('NC_OB_BGS') == "4") ? 'checked="checked" ' : '') . ' />
                            <label class="ds bg5" for="nc_ob_bg4"> <span>4 . Transparent</span></label>
                  </div></div>
                  <div class="if_nc_ob_bc">
                        <div class="roytc_row">
                             <label>' . $this->l('Section Background') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="nc_ob_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OB_BC') . '" />
                        </div></div>
                  </div>
                  <div class="if_nc_ob_gr">
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient start color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_ob_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OB_GS') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient end color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_ob_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_OB_GE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Gradient angle') . '</label>
                             <div class="margin-form">
                             <input type="text" name="nc_ob_gg" value="' . Configuration::get('NC_OB_GG') . '" /> degrees
                             <p class="clear grad_direction"></p>
                        </div></div>
                  </div>
                  <div class="if_nc_ob_im">
                        ';
                        $html .= $this -> backgroundOptions($panel="nc_ob_im", $panelupper="OB_IM");
                        $html .= '
                  </div>

                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_ob_top" value="' . Configuration::get('NC_OB_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="nc_ob_bot" value="' . Configuration::get('NC_OB_BOTS') . '" /> px
                   </div></div>

            </div>

            <div class="section" id="tab-pages3">
                  <h3>' . $this->l('Breadcrumb') . '</h3>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Breadcrumb block width') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="b_w" value="1" id="b_w1" ' . ((Configuration::get('RC_B_W') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds width1" for="b_w1"> <span>1 . Container</span></label>
                            <input type="radio" class="regular-radio" name="b_w" value="2" id="b_w2" ' . ((Configuration::get('RC_B_W') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds width2" for="b_w2"> <span>2 . Full Width</span></label>
                  </div></div>

                  <div class="roytc_row ds_wrap" style="margin-right:80px;">
                          <label>' . $this->l('Position for Category page') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="b_pos_cat" value="1" id="b_pos_cat1" ' . ((Configuration::get('RC_B_POS_CAT') == "1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds br_pos1" for="b_pos_cat1"> <span>1 . Top</span></label>
                              <input type="radio" class="regular-radio" name="b_pos_cat" value="2" id="b_pos_cat2" ' . ((Configuration::get('RC_B_POS_CAT') == "2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds br_pos2" for="b_pos_cat2"> <span>2 . Inside page</span></label>
                    </div></div>
                    <div class="roytc_row ds_wrap">
                            <label>' . $this->l('Position for Product page') . '</label>
                            <div class="margin-form">
                                <input type="radio" class="regular-radio" name="b_pos_pro" value="1" id="b_pos_pro1" ' . ((Configuration::get('RC_B_POS_PRO') == "1") ? 'checked="checked" ' : '') . ' />
                                <label class="ds br_pos1" for="b_pos_pro1"> <span>1 . Top</span></label>
                                <input type="radio" class="regular-radio" name="b_pos_pro" value="2" id="b_pos_pro2" ' . ((Configuration::get('RC_B_POS_PRO') == "2") ? 'checked="checked" ' : '') . ' />
                                <label class="ds br_pos2" for="b_pos_pro2"> <span>2 . Inside page</span></label>
                    </div></div>

                  <div class="roytc_row ds_wrap">
                          <label>' . $this->l('Breadcrumb Top Layout') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="b_layout" value="1" id="b_layout1" ' . ((Configuration::get('RC_B_LAYOUT') == "1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds br_lay1" for="b_layout1"> <span>1 . Name + Path</span></label>
                              <input type="radio" class="regular-radio" name="b_layout" value="2" id="b_layout2" ' . ((Configuration::get('RC_B_LAYOUT') == "2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds br_lay2" for="b_layout2"> <span>2 . Path</span></label>
                              <input type="radio" class="regular-radio" name="b_layout" value="3" id="b_layout3" ' . ((Configuration::get('RC_B_LAYOUT') == "3") ? 'checked="checked" ' : '') . ' />
                              <label class="ds br_lay3" for="b_layout3"> <span>3 . Path left</span></label>
                              <input type="radio" class="regular-radio" name="b_layout" value="4" id="b_layout4" ' . ((Configuration::get('RC_B_LAYOUT') == "4") ? 'checked="checked" ' : '') . ' />
                              <label class="ds br_lay4" for="b_layout4"> <span>4 . Name + Path side</span></label>
                    </div></div>

                    <div class="roywrap">
                   <div class="roytc_row">
                        <label>' . $this->l('Top spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="b_top" value="' . Configuration::get('RC_B_TOPS') . '" /> px
                   </div></div>
                   <div class="roytc_row">
                        <label>' . $this->l('Bottom spacing') . '</label>
                        <div class="margin-form">
                        <input type="text" name="b_bot" value="' . Configuration::get('RC_B_BOTS') . '" /> px
                   </div></div>
                   </div>

                   <div class="hr"></div>

                   <div class="roywrap">
                    <div class="roytc_row">
                          <label>' . $this->l('Breadcrumb link') . '</label>
              			    	<div class="margin-form">
              					<input type="color" name="b_link"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_B_LINK') . '" />
              			</div></div>
                    <div class="roytc_row">
                          <label>' . $this->l('Breadcrumb link hover') . '</label>
              			    	<div class="margin-form">
              					<input type="color" name="b_link_hover"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_B_LINK_HOVER') . '" />
              			</div></div>
                    <div class="roytc_row">
                          <label>' . $this->l('Breadcrumb slash between links') . '</label>
                          <div class="margin-form">
                                <input type="color" name="b_separator"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_B_SEPARATOR') . '" />
                    </div></div>
                    </div>
              </div>

              <div class="section" id="tab-pages4">
                  <h3>' . $this->l('CMS content') . '</h3>

                        <div class="roytc_row">
                             <label>' . $this->l('Blockquote quotes') . '</label>
                             <div class="margin-form">
                             <input type="color" name="page_bq_q" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PAGE_BQ_Q') . '" />
                        </div></div>

                  <h3>' . $this->l('Alert messages') . '</h3>
                  <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Warning alert color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="warning_message_color" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_WARNING_MESSAGE_COLOR') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Success alert color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="success_message_color" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_SUCCESS_MESSAGE_COLOR') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Error alert color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="danger_message_color" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_DANGER_MESSAGE_COLOR') . '" />
                        </div></div>
                  </div>

                  <h3 class="first">' . $this->l('Contact Us') . '</h3>
                        <div class="roytc_row">
                             <label>' . $this->l('Contact page icons') . '</label>
                             <div class="margin-form">
                             <input type="color" name="contact_icon" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_CONTACT_ICON') . '" />
                        </div></div>
              </div>

            </div>

            <div class="tab-pane" id="tab-sidebar">
                  <h2 class="rtc_title19">' . $this->l('Sidebar blocks and Filter') . '</h2>
                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-sidebar1 active">
                                    <a data-inside="tab" href="#tab-sidebar1"><span>1</span>Sidebar titles</a>
                              </li>
                              <li class="inside_tab tab-sidebar2">
                                    <a data-inside="tab" href="#tab-sidebar2"><span>2</span>Blocks Content</a>
                              </li>
                              <li class="inside_tab tab-sidebar3">
                                    <a data-inside="tab" href="#tab-sidebar3"><span>3</span>Sidebar Blocks Settings</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

                <div class="section" id="tab-sidebar1">

                  <h3 class="first">' . $this->l('Sidebar links') . '</h3>
                  <div class="roytc_row">
                       <label>' . $this->l('Link color') . '</label>
                       <div class="margin-form">
                       <input type="color" name="sidebar_link" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_SIDEBAR_LINK') . '" />
                  </div></div>

                  <h3 class="">' . $this->l('Blocks titles') . '</h3>

                  <div class="roytc_row">
                       <label>' . $this->l('Title Bottom Margin') . '</label>
                       <div class="margin-form" style="margin-top:0;">
                       <input type="text" name="sidebar_title_margin" value="' . Configuration::get('RC_SIDEBAR_TITLE_MARGIN') . '" /> px
                  </div></div>

                  <div class="roytc_row" style="margin-top:0;">
                        <label>' . $this->l('Enable title border?') . '</label>
                        <div class="margin-form" style="margin-top:0;">
                            <input type="radio" class="regular-radio sidebar_title_b" name="sidebar_title_b" id="sidebar_title_b1" value="1" ' . ((Configuration::get('RC_SIDEBAR_TITLE_B') == 1) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="sidebar_title_b1"> Yes</label>
                            <input type="radio" class="regular-radio sidebar_title_b" name="sidebar_title_b" id="sidebar_title_b0" value="0" ' . ((Configuration::get('RC_SIDEBAR_TITLE_B') == 0) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="sidebar_title_b0"> No</label>
                  </div></div>

                  <div class="if_sidebar_title_b">
                    <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Title Bottom Padding') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="text" name="sidebar_title_padding" value="' . Configuration::get('RC_SIDEBAR_TITLE_PADDING') . '" /> px
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Border height') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="text" name="sidebar_title_bwidth" value="' . Configuration::get('RC_SIDEBAR_TITLE_BWIDTH') . '" /> px
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Border color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="sidebar_title_border" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_SIDEBAR_TITLE_BORDER') . '" />
                        </div></div>
                    </div>
                  </div>


                </div>

                <div class="section" id="tab-sidebar2">
                      <h3 class="first">' . $this->l('Sidebar blocks content') . '</h3>

                      <div class="roytc_row">
                           <label>' . $this->l('Blocks Bottom Margin') . '</label>
                           <div class="margin-form" style="margin-top:0;">
                           <input type="text" name="sidebar_margin" value="' . Configuration::get('RC_SIDEBAR_MARGIN') . '" /> px
                      </div></div>

                      <div class="roytc_row" style="margin-top:0;">
                            <label>' . $this->l('Enable blocks bottom border?') . '</label>
                            <div class="margin-form" style="margin-top:0;">
                                <input type="radio" class="regular-radio sidebar_b" name="sidebar_b" id="sidebar_b1" value="1" ' . ((Configuration::get('RC_SIDEBAR_B') == 1) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="sidebar_b1"> Yes</label>
                                <input type="radio" class="regular-radio sidebar_b" name="sidebar_b" id="sidebar_b0" value="0" ' . ((Configuration::get('RC_SIDEBAR_B') == 0) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="sidebar_b0"> No</label>
                      </div></div>

                      <div class="if_sidebar_content_b">
                        <div class="roywrap">
                            <div class="roytc_row">
                                 <label>' . $this->l('Title Bottom Padding') . '</label>
                                 <div class="margin-form" style="margin-top:0;">
                                 <input type="text" name="sidebar_padding" value="' . Configuration::get('RC_SIDEBAR_PADDING') . '" /> px
                            </div></div>
                            <div class="roytc_row">
                                 <label>' . $this->l('Border height') . '</label>
                                 <div class="margin-form" style="margin-top:0;">
                                 <input type="text" name="sidebar_bwidth" value="' . Configuration::get('RC_SIDEBAR_BWIDTH') . '" /> px
                            </div></div>
                            <div class="roytc_row">
                                 <label>' . $this->l('Border color') . '</label>
                                 <div class="margin-form">
                                 <input type="color" name="sidebar_border" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_SIDEBAR_BORDER') . '" />
                            </div></div>
                        </div>
                      </div>
                </div>

                <div class="section" id="tab-sidebar3">
                      <h3 class="first">' . $this->l('Sidebar Blocks Settings') . '</h3>


                      <div class="roytc_row" style="margin-top:0;">
                            <label>' . $this->l('Enable full border?') . '</label>
                            <div class="margin-form" style="margin-top:0;">
                                <input type="radio" class="regular-radio sidebar_bb" name="sidebar_bb" id="sidebar_bb1" value="1" ' . ((Configuration::get('RC_SIDEBAR_BB') == 1) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="sidebar_bb1"> Yes</label>
                                <input type="radio" class="regular-radio sidebar_bb" name="sidebar_bb" id="sidebar_bb2" value="2" ' . ((Configuration::get('RC_SIDEBAR_BB') == 2) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="sidebar_bb2"> No</label>
                      </div></div>

                      <div class="if_sidebar_bb">
                        <div class="roywrap">
                          <div class="roytc_row">
                               <label>' . $this->l('Border width') . '</label>
                               <div class="margin-form" style="margin-top:0;">
                               <input type="text" name="sidebar_bw" value="' . Configuration::get('RC_SIDEBAR_BW') . '" /> px
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Border radius') . '</label>
                               <div class="margin-form" style="margin-top:0;">
                               <input type="text" name="sidebar_br" value="' . Configuration::get('RC_SIDEBAR_BR') . '" /> px
                          </div></div>

                            <div class="roytc_row">
                                 <label>' . $this->l('Overall border color') . '</label>
                                 <div class="margin-form">
                                 <input type="color" name="sidebar_ball" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_SIDEBAR_BALL') . '" />
                            </div></div>
                            <div class="roytc_row">
                                 <label>' . $this->l('Categories block custom color') . '</label>
                                 <div class="margin-form">
                                 <input type="color" name="sidebar_bcat" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_SIDEBAR_BCAT') . '" />
                            </div></div>
                            <div class="roytc_row">
                                 <label>' . $this->l('Filter block custom color') . '</label>
                                 <div class="margin-form">
                                 <input type="color" name="sidebar_bfilter" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_SIDEBAR_BFILTER') . '" />
                            </div></div>
                            <div class="roytc_row">
                                 <label>' . $this->l('Sale block custom color') . '</label>
                                 <div class="margin-form">
                                 <input type="color" name="sidebar_bsale" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_SIDEBAR_BSALE') . '" />
                            </div></div>
                        </div>
                      </div>
                </div>

            </div>


            <div class="tab-pane" id ="tab-productlist">
                    <h2 class="rtc_title5">' . $this->l('Products and Category') . '</h2>
                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-productlist1 active">
                                    <a data-inside="tab" href="#tab-productlist1"><span>1</span>Category page design</a>
                              </li>
                              <li class="inside_tab tab-productlist2 active">
                                    <a data-inside="tab" href="#tab-productlist2"><span>2</span>Product list</a>
                              </li>
                              <li class="inside_tab tab-productlist3">
                                    <a data-inside="tab" href="#tab-productlist3"><span>3</span>Product Item design</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

                <div class="section" id="tab-productlist1">

                        <h3 class="first">' . $this->l('Category page content') . '</h3>
                            <div class="roytc_row">
                            <label>' . $this->l('Display category name?') . '</label>
                            <div class="yn">
                            <div class="margin-form">
                                <input type="radio" class="regular-radio" name="nc_cat_name" id="nc_cat_name_1" value="1" ' . ((Configuration::get('NC_CAT_NAME_S') == 1) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_cat_name_1"> Yes</label>
                                <input type="radio" class="regular-radio" name="nc_cat_name" id="nc_cat_name_2" value="2" ' . ((Configuration::get('NC_CAT_NAME_S') == 2) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_cat_name_2"> No</label>
                            </div></div></div>
                            <div class="roytc_row">
                            <label>' . $this->l('Display category image?') . '</label>
                            <div class="yn">
                            <div class="margin-form">
                                <input type="radio" class="regular-radio" name="nc_cat_img" id="nc_cat_img1" value="1" ' . ((Configuration::get('NC_CAT_IMG_S') == 1) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_cat_img1"> Yes</label>
                                <input type="radio" class="regular-radio" name="nc_cat_img" id="nc_cat_img2" value="2" ' . ((Configuration::get('NC_CAT_IMG_S') == 2) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_cat_img2"> No</label>
                            </div></div></div>
                            <div class="roytc_row ds_wrap fw">
                                  <label>' . $this->l('Category image position') . '</label>
                                  <div class="margin-form">
                                      <input type="radio" class="regular-radio" name="nc_cat_imglay" value="1" id="nc_cat_imglay1" ' . ((Configuration::get('NC_CAT_IMGLAY_S') == "1") ? 'checked="checked" ' : '') . ' />
                                      <label class="ds cat_imglay1" for="nc_cat_imglay1"> <span>1 . Inside page</span></label>
                                      <input type="radio" class="regular-radio" name="nc_cat_imglay" value="2" id="nc_cat_imglay2" ' . ((Configuration::get('NC_CAT_IMGLAY_S') == "2") ? 'checked="checked" ' : '') . ' />
                                      <label class="ds cat_imglay2" for="nc_cat_imglay2"> <span>2 . Top columm bg</span></label>
                            </div></div>

                            <div class="roytc_row">
                            <label>' . $this->l('Display category description?') . '</label>
                            <div class="yn">
                            <div class="margin-form">
                                <input type="radio" class="regular-radio" name="nc_cat_desc" id="nc_cat_desc1" value="1" ' . ((Configuration::get('NC_CAT_DESC_S') == 1) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_cat_desc1"> Yes</label>
                                <input type="radio" class="regular-radio" name="nc_cat_desc" id="nc_cat_desc2" value="2" ' . ((Configuration::get('NC_CAT_DESC_S') == 2) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_cat_desc2"> No</label>
                            </div></div></div>
                            <div class="roytc_row">
                            <label>' . $this->l('Display subcategories thumbnails?') . '</label>
                            <div class="yn">
                            <div class="margin-form">
                                <input type="radio" class="regular-radio" name="nc_subcat" id="nc_subcat_1" value="1" ' . ((Configuration::get('NC_SUBCAT_S') == 1) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_subcat_1"> Yes</label>
                                <input type="radio" class="regular-radio" name="nc_subcat" id="nc_subcat_2" value="2" ' . ((Configuration::get('NC_SUBCAT_S') == 2) ? 'checked="checked" ' : '') . '/>
                                <label class="t" for="nc_subcat_2"> No</label>
                            </div></div></div>


                        <h3>' . $this->l('Pagination') . '</h3>
                        <div class="roywrap">
                            <div class="roytc_row">
                                 <label>' . $this->l('Number color') . '</label>
                                 <div class="margin-form">
                                 <input type="color" name="pl_number_color" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_NUMBER_COLOR') . '" />
                            </div></div>
                            <div class="roytc_row">
                                 <label>' . $this->l('Number color active') . '</label>
                                 <div class="margin-form">
                                 <input type="color" name="pl_number_color_hover" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_NUMBER_COLOR_HOVER') . '" />
                            </div></div>
                        </div>


                </div>

                <div class="section" id="tab-productlist2">

                <h3>' . $this->l('How much products per row you want to show on category page?') . '</h3>
                <div class="roytc_row ds_wrap fw">
                <label>' . $this->l('Products per row?') . '</label>
                <div class="margin-form">
                    <input type="radio" class="regular-radio" name="nc_product_switch" id="nc_product_switch_2" value="2" ' . ((Configuration::get('NC_PRODUCT_SWITCH') == 2) ? 'checked="checked" ' : '') . '/>
                    <label class="ds items_onrow2" for="nc_product_switch_2"><span>2</span></label>
                    <input type="radio" class="regular-radio" name="nc_product_switch" id="nc_product_switch_3" value="3" ' . ((Configuration::get('NC_PRODUCT_SWITCH') == 3) ? 'checked="checked" ' : '') . '/>
                    <label class="ds items_onrow3" for="nc_product_switch_3"><span>3</span></label>
                    <input type="radio" class="regular-radio" name="nc_product_switch" id="nc_product_switch_4" value="4" ' . ((Configuration::get('NC_PRODUCT_SWITCH') == 4) ? 'checked="checked" ' : '') . '/>
                    <label class="ds items_onrow4" for="nc_product_switch_4"><span>4</span></label>
                    <input type="radio" class="regular-radio" name="nc_product_switch" id="nc_product_switch_5" value="5" ' . ((Configuration::get('NC_PRODUCT_SWITCH') == 5) ? 'checked="checked" ' : '') . '/>
                    <label class="ds items_onrow5" for="nc_product_switch_5"><span>5</span></label>
                </div></div>

                <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Space between products') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio nc_product_margin" name="nc_product_margin" value="1" id="nc_product_margin1" ' . ((Configuration::get('NC_PRODUCT_MARGIN') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds nc_product_margin1" for="nc_product_margin1"> <span>1 . Normal</span></label>
                            <input type="radio" class="regular-radio nc_product_margin" name="nc_product_margin" value="2" id="nc_product_margin2" ' . ((Configuration::get('NC_PRODUCT_MARGIN') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds nc_product_margin2" for="nc_product_margin2"> <span>2 . Large</span></label>
                </div></div>

                <h3>' . $this->l('Change Add to cart to Select options if product have combinations?') . '</h3>
                <div class="roytc_row">
                <label>' . $this->l('Select options feature') . '</label>
                <div class="yn">
                <div class="margin-form">
                    <input type="radio" class="regular-radio" name="nc_ai" id="nc_ai1" value="1" ' . ((Configuration::get('NC_AIS') == 1) ? 'checked="checked" ' : '') . '/>
                    <label class="t" for="nc_ai1"> Yes</label>
                    <input type="radio" class="regular-radio" name="nc_ai" id="nc_ai0" value="0" ' . ((Configuration::get('NC_AIS') == 0) ? 'checked="checked" ' : '') . '/>
                    <label class="t" for="nc_ai0"> No</label>
                </div></div></div>


                </div>
                <div class="section" id="tab-productlist3">
                        <h3>' . $this->l('Product item design') . '</h3>
                        <div class="roytc_row ds_wrap fw">
                            <label>' . $this->l('Layout of product container') . '</label>
                            <div class="margin-form">
                                <input type="radio" class="regular-radio pl_lay" name="pl_lay" value="1" id="pl_lay1" ' . ((Configuration::get('RC_PL_LAY') == "1") ? 'checked="checked" ' : '') . ' />
                                <label class="ds pl_lay1" for="pl_lay1"> <span>1 . Classic</span></label>
                                <input type="radio" class="regular-radio pl_lay" name="pl_lay" value="2" id="pl_lay2" ' . ((Configuration::get('RC_PL_LAY') == "2") ? 'checked="checked" ' : '') . ' />
                                <label class="ds pl_lay2" for="pl_lay2"> <span>2 . Text overlap</span></label>
                                <input type="radio" class="regular-radio pl_lay" name="pl_lay" value="3" id="pl_lay3" ' . ((Configuration::get('RC_PL_LAY') == "3") ? 'checked="checked" ' : '') . ' />
                                <label class="ds pl_lay3" for="pl_lay3"> <span>3 . Text stick to cursor</span></label>
                        </div></div>
                        <div class="roytc_row ds_wrap fw">
                            <label>' . $this->l('Product image background') . '</label>
                            <div class="margin-form">
                                <input type="radio" class="regular-radio pl_img_bgs" name="pl_img_bgs" value="1" id="pl_img_bgs1" ' . ((Configuration::get('RC_PL_IMG_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                                <label class="ds bg1" for="pl_img_bgs1"> <span>1 . Use Background</span></label>
                                <input type="radio" class="regular-radio pl_img_bgs" name="pl_img_bgs" value="2" id="pl_img_bgs2" ' . ((Configuration::get('RC_PL_IMG_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                                <label class="ds bg5" for="pl_img_bgs2"> <span>2 . Transparent</span></label>
                        </div></div>
                        <div class="roytc_row ds_wrap fw">
                            <label>' . $this->l('Product text background') . '</label>
                            <div class="margin-form">
                                <input type="radio" class="regular-radio pl_text_bgs" name="pl_text_bgs" value="1" id="pl_text_bgs1" ' . ((Configuration::get('RC_PL_TEXT_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                                <label class="ds bg1" for="pl_text_bgs1"> <span>1 . Use Background</span></label>
                                <input type="radio" class="regular-radio pl_text_bgs" name="pl_text_bgs" value="2" id="pl_text_bgs2" ' . ((Configuration::get('RC_PL_TEXT_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                                <label class="ds bg5" for="pl_text_bgs2"> <span>2 . Transparent</span></label>
                        </div></div>
                        <div class="roytc_row ds_wrap fw">
                            <label>' . $this->l('Text align') . '</label>
                            <div class="margin-form">
                                <input type="radio" class="regular-radio pl_text_align" name="pl_text_align" value="1" id="pl_text_align1" ' . ((Configuration::get('RC_PL_TEXT_ALIGN') == "1") ? 'checked="checked" ' : '') . ' />
                                <label class="ds align1" for="pl_text_align1"> <span>1 . Left</span></label>
                                <input type="radio" class="regular-radio pl_text_align" name="pl_text_align" value="2" id="pl_text_align2" ' . ((Configuration::get('RC_PL_TEXT_ALIGN') == "2") ? 'checked="checked" ' : '') . ' />
                                <label class="ds align2" for="pl_text_align2"> <span>2 . Center</span></label>
                                <input type="radio" class="regular-radio pl_text_align" name="pl_text_align" value="3" id="pl_text_align3" ' . ((Configuration::get('RC_PL_TEXT_ALIGN') == "3") ? 'checked="checked" ' : '') . ' />
                                <label class="ds align3" for="pl_text_align3"> <span>3 . Right</span></label>
                        </div></div>

                      <div class="roywrap">
                       <div class="roytc_row">
                            <label>' . $this->l('Image background') . '</label>
                            <div class="margin-form">
                            <input type="color" name="pl_img_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_IMG_BG') . '" />
                       </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Text background') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pl_text_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_TEXT_BG') . '" />
                        </div></div>
                        </div>

                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Enable Product item Image border?') . '</label>
                        <div class="margin-form" style="margin-top:0;">
                            <input type="radio" class="regular-radio nc_pi_b" name="nc_pi_b" id="nc_pi_b1" value="1" ' . ((Configuration::get('NC_PI_B') == 1) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="nc_pi_b1"> Yes</label>
                            <input type="radio" class="regular-radio nc_pi_b" name="nc_pi_b" id="nc_pi_b2" value="2" ' . ((Configuration::get('NC_PI_B') == 2) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="nc_pi_b2"> No</label>
                  </div></div>

                  <div class="if_nc_pi_b">
                    <div class="roywrap">
                      <div class="roytc_row">
                           <label>' . $this->l('Border width') . '</label>
                           <div class="margin-form" style="margin-top:0;">
                           <input type="text" name="nc_pi_bw" value="' . Configuration::get('RC_SIDEBAR_BW') . '" /> px
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Border radius') . '</label>
                           <div class="margin-form" style="margin-top:0;">
                           <input type="text" name="nc_pi_br" value="' . Configuration::get('RC_SIDEBAR_BR') . '" /> px
                      </div></div>

                        <div class="roytc_row">
                             <label>' . $this->l('Border color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_pi_c" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_PI_C') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Border color on hover') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_pi_ch" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_PI_CH') . '" />
                        </div></div>
                    </div>
                  </div>

                  <div class="hr"></div>

                  <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Product name') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pl_name" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_NAME') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Product price') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pl_price" class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('RC_PL_PRICE') . '" />
                        </div></div>
                    </div>

                    <h3>' . $this->l('Mouse Over effect') . '</h3>

                    <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Hover effect layout') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio pl_hover_lay" name="pl_hover_lay" value="1" id="pl_hover_lay1" ' . ((Configuration::get('RC_PL_HOVER_LAY') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds pl_hover_lay1" for="pl_hover_lay1"> <span>1 . Button</span></label>
                            <input type="radio" class="regular-radio pl_hover_lay" name="pl_hover_lay" value="2" id="pl_hover_lay2" ' . ((Configuration::get('RC_PL_HOVER_LAY') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds pl_hover_lay2" for="pl_hover_lay2"> <span>2 . Icons</span></label>
                    </div></div>

                    <h4>' . $this->l('Gradient on hover') . '</h4>
                    <div class="roywrap fw">
                      <div class="roytc_row">
                           <label>' . $this->l('Gradient start color') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_g1" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_G1') . '" />
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Gradient end color') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_g2" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_G2') . '" />
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Gradient transparency') . '</label>
                           <div class="margin-form">
                           <input type="text" name="pl_hover_trans" value="' . Configuration::get('RC_PL_HOVER_TRANS') . '" />
                      </div></div>
                    </div>

                    <h4>' . $this->l('Buttons / Icons design') . '</h4>
                    <div class="roywrap">
                      <div class="roytc_row">
                           <label>' . $this->l('Icon background') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_but_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_BUT_BG') . '" />
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Icon border') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_but_b" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_BUT_B') . '" />
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Icon color') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_but" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_BUT') . '" />
                      </div></div>
                    </div>
                    <div class="roywrap">
                      <div class="roytc_row">
                           <label>' . $this->l('Icon hover background') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_but_bgh" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_BUT_BGH') . '" />
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Icon hover border') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_but_bh" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_BUT_BH') . '" />
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Icon hover color') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_buth" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_BUTH') . '" />
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Outer button/text') . '</label>
                           <div class="margin-form">
                           <input type="color" name="pl_hover_but_out" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_HOVER_BUT_OUT') . '" />
                      </div></div>
                      <div class="roytc_row">
                           <label>' . $this->l('Border radius') . '</label>
                           <div class="margin-form">
                           <input type="text" name="pl_hover_but_br" value="' . Configuration::get('RC_PL_HOVER_BUT_BR') . '" /> px
                      </div></div>
                    </div>

                    <h3>' . $this->l('Icons') . '</h3>
                    <div class="roytc_row ds_wrap fw">
                          <label>' . $this->l('Quick view') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="nc_i_qv" value="search1" id="nc_i_qv1" ' . ((Configuration::get('NC_I_QVS') == "search1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_qv1" for="nc_i_qv1"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_qv" value="search2" id="nc_i_qv2" ' . ((Configuration::get('NC_I_QVS') == "search2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_qv2" for="nc_i_qv2"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_qv" value="search3" id="nc_i_qv3" ' . ((Configuration::get('NC_I_QVS') == "search3") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_qv3" for="nc_i_qv3"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_qv" value="search4" id="nc_i_qv4" ' . ((Configuration::get('NC_I_QVS') == "search4") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_qv4" for="nc_i_qv4"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_qv" value="qv1" id="nc_i_qv5" ' . ((Configuration::get('NC_I_QVS') == "qv1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_qv5" for="nc_i_qv5"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_qv" value="qv2" id="nc_i_qv6" ' . ((Configuration::get('NC_I_QVS') == "qv2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_qv6" for="nc_i_qv6"> <span></span></label>
                    </div></div>
                    <div class="roytc_row ds_wrap fw">
                          <label>' . $this->l('Select options') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="nc_i_discover" value="discover1" id="nc_i_discover1" ' . ((Configuration::get('NC_I_DISCOVERS') == "discover1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_discover1" for="nc_i_discover1"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_discover" value="discover2" id="nc_i_discover2" ' . ((Configuration::get('NC_I_DISCOVERS') == "discover2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_discover2" for="nc_i_discover2"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_discover" value="discover3" id="nc_i_discover3" ' . ((Configuration::get('NC_I_DISCOVERS') == "discover3") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_discover3" for="nc_i_discover3"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_discover" value="discover4" id="nc_i_discover4" ' . ((Configuration::get('NC_I_DISCOVERS') == "discover4") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_discover4" for="nc_i_discover4"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_discover" value="discover5" id="nc_i_discover5" ' . ((Configuration::get('NC_I_DISCOVERS') == "discover5") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_discover5" for="nc_i_discover5"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_discover" value="discover6" id="nc_i_discover6" ' . ((Configuration::get('NC_I_DISCOVERS') == "discover6") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_discover6" for="nc_i_discover6"> <span></span></label>
                    </div></div>
                    <div class="roytc_row ds_wrap fw">
                          <label>' . $this->l('Favorites') . '</label>
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="nc_i_fav" value="fav1" id="nc_i_fav1" ' . ((Configuration::get('NC_I_FAVS') == "fav1") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_fav1" for="nc_i_fav1"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_fav" value="fav2" id="nc_i_fav2" ' . ((Configuration::get('NC_I_FAVS') == "fav2") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_fav2" for="nc_i_fav2"> <span></span></label>
                              <input type="radio" class="regular-radio" name="nc_i_fav" value="fav3" id="nc_i_fav3" ' . ((Configuration::get('NC_I_FAVS') == "fav3") ? 'checked="checked" ' : '') . ' />
                              <label class="ds_icon nc_i_fav3" for="nc_i_fav3"> <span></span></label>
                    </div></div>

                    <div class="hr">
                    </div>

                    <div class="roytc_row" style="margin-top:40px;">
                    <label>' . $this->l('Enable Second Image on hover?') . '</label>
                    <div class="yn">
                    <div class="margin-form">
                        <input type="radio" class="regular-radio" name="nc_second_img" id="nc_second_img_1" value="1" ' . ((Configuration::get('NC_SECOND_IMG_S') == 1) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="nc_second_img_1"> Yes</label>
                        <input type="radio" class="regular-radio" name="nc_second_img" id="nc_second_img_0" value="0" ' . ((Configuration::get('NC_SECOND_IMG_S') == 0) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="nc_second_img_0"> No</label>
                    </div></div>
                    </div>
                    <div class="roytc_row">
                          <label>' . $this->l('Color Swatches for 1st layout?') . '</label>
                          <div class="yn">
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="nc_colors" id="nc_colors1" value="1" ' . ((Configuration::get('NC_COLORS_S') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="nc_colors1"> Yes</label>
                              <input type="radio" class="regular-radio" name="nc_colors" id="nc_colors0" value="0" ' . ((Configuration::get('NC_COLORS_S') == 0) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="nc_colors0"> No</label>
                    </div></div>
                    </div>
                    <div class="roytc_row">
                          <label>' . $this->l('Show quick view icon in product list?') . '</label>
                          <div class="yn">
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="nc_qv" id="nc_qv1" value="1" ' . ((Configuration::get('NC_QVS') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="nc_qv1"> Yes</label>
                              <input type="radio" class="regular-radio" name="nc_qv" id="nc_qv2" value="2" ' . ((Configuration::get('NC_QVS') == 2) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="nc_qv2"> No</label>
                    </div></div>
                    </div>
                    <div class="roytc_row">
                          <label>' . $this->l('Show favorites icon in product list?') . '</label>
                          <div class="yn">
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="nc_fav" id="nc_fav1" value="1" ' . ((Configuration::get('NC_FAVS') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="nc_fav1"> Yes</label>
                              <input type="radio" class="regular-radio" name="nc_fav" id="nc_fav2" value="2" ' . ((Configuration::get('NC_FAVS') == 2) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="nc_fav2"> No</label>
                    </div></div>
                    </div>


                    <h3>' . $this->l('Product labels') . '</h3>
                    <div class="roywrap">
                          <div class="roytc_row">
                               <label>' . $this->l('New label background') . '</label>
                               <div class="margin-form">
                               <input type="color" name="pl_product_new_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_PRODUCT_NEW_BG') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('New label border') . '</label>
                               <div class="margin-form">
                               <input type="color" name="pl_product_new_border" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_PRODUCT_NEW_BORDER') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('New label color') . '</label>
                               <div class="margin-form">
                               <input type="color" name="pl_product_new_color" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_PRODUCT_NEW_COLOR') . '" />
                          </div></div>

                          <div class="roytc_row">
                               <label>' . $this->l('Sale label background') . '</label>
                               <div class="margin-form">
                               <input type="color" name="pl_product_sale_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_PRODUCT_SALE_BG') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Sale label border') . '</label>
                               <div class="margin-form">
                               <input type="color" name="pl_product_sale_border" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_PRODUCT_SALE_BORDER') . '" />
                          </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Sale label color') . '</label>
                               <div class="margin-form">
                               <input type="color" name="pl_product_sale_color" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PL_PRODUCT_SALE_COLOR') . '" />
                          </div></div>
                    </div>

                    <h3>' . $this->l('Product ratings') . '</h3>
                    <div class="roywrap">
                    <div class="roytc_row">
                    <label>' . $this->l('Reviews star-off color') . '</label>
                         <div class="margin-form">
                         <input type="color" name="pp_reviews_staroff" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_REVIEWS_STAROFF') . '" />
                    </div></div>
                    <div class="roytc_row">
                    <label>' . $this->l('Reviews star-on color') . '</label>
                         <div class="margin-form">
                         <input type="color" name="pp_reviews_staron" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_REVIEWS_STARON') . '" />
                    </div></div>
                    </div>

                        <h3>' . $this->l('Special price countdown') . '</h3>
                        <div class="roywrap">
                        <div class="roytc_row">
                        <label>' . $this->l('Hide days?') . '</label>
                        <div class="yn">
                            <div class="margin-form">
                            <input type="radio" class="regular-radio" name="nc_count_days" id="nc_count_days_1" value="1" ' . ((Configuration::get('NC_COUNT_DAYS') == 1) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="nc_count_days_1"> Yes</label>
                            <input type="radio" class="regular-radio" name="nc_count_days" id="nc_count_days_0" value="0" ' . ((Configuration::get('NC_COUNT_DAYS') == 0) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="nc_count_days_0"> No</label>
                        </div>
                        </div></div>
                         <div class="roytc_row">
                             <label>' . $this->l('Countdown border') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_count_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_BG') . '" />
                        </div></div>
                         <div class="roytc_row">
                             <label>' . $this->l('Countdown time color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_count_time" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_TIME') . '" />
                        </div></div>
                         <div class="roytc_row">
                             <label>' . $this->l('Countdown text color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_count_color" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_COLOR') . '" />
                        </div></div>

                        <div class="roytc_row">
                             <label>' . $this->l('Watch background') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_count_watch_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_WATCH_BG') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Watch color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_count_watch" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_WATCH') . '" />
                        </div></div>

                        </div>
                </div>
            </div>


            <div class="tab-pane" id ="tab-productpage">
                    <h2 class="rtc_title6">' . $this->l('Product page and Quick view') . '</h2>
                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-productpage1 active">
                                    <a data-inside="tab" href="#tab-productpage1"><span>1</span>Layout</a>
                              </li>
                              <li class="inside_tab tab-productpage2">
                                    <a data-inside="tab" href="#tab-productpage2"><span>2</span>Image column</a>
                              </li>
                              <li class="inside_tab tab-productpage3">
                                    <a data-inside="tab" href="#tab-productpage3"><span>3</span>Main column</a>
                              </li>
                              <li class="inside_tab tab-productpage4">
                                    <a data-inside="tab" href="#tab-productpage4"><span>4</span>Tabs</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

                <div class="section" id="tab-productpage1">

                  <h3 class="first">' . $this->l('Product page layout') . '</h3>
                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Layout') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="pp_lay regular-radio" name="pp_lay" value="1" id="pp_lay1" ' . ((Configuration::get('RC_PP_LAY') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds pp_lay1" for="pp_lay1"> <span>1 . Thumbs slider</span></label>
                            <input type="radio" class="pp_lay regular-radio" name="pp_lay" value="2" id="pp_lay2" ' . ((Configuration::get('RC_PP_LAY') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds pp_lay2" for="pp_lay2"> <span>2 . One under one</span></label>
                  </div></div>

                  <div class="if_pp_thumbs">
                  <div class="roytc_row ds_wrap fw">
                        <label>' . $this->l('Thumbnails layout') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="pp_thumbs" value="1" id="pp_thumbs1" ' . ((Configuration::get('RC_PP_THUMBS') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds pp_thumbs1" for="pp_thumbs1"> <span>1 . One layer</span></label>
                            <input type="radio" class="regular-radio" name="pp_thumbs" value="2" id="pp_thumbs2" ' . ((Configuration::get('RC_PP_THUMBS') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds pp_thumbs2" for="pp_thumbs2"> <span>2 . Floating</span></label>
                  </div></div>
                  </div>


                </div>

                <div class="section" id="tab-productpage2">

                  <h3 class="">' . $this->l('Image column design') . '</h3>

                  <div class="roywrap w25">
                        <div class="roytc_row">
                              <label>' . $this->l('Enable border for product image?') . '</label>
                              <div class="yn">
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio pp_imgb" name="pp_imgb" id="pp_imgb1" value="1" ' . ((Configuration::get('RC_PP_IMGB') == 1) ? 'checked="checked" ' : '') . '/>
                                  <label class="t" for="pp_imgb1"> Yes</label>
                                  <input type="radio" class="regular-radio pp_imgb" name="pp_imgb" id="pp_imgb0" value="0" ' . ((Configuration::get('RC_PP_IMGB') == 0) ? 'checked="checked" ' : '') . '/>
                                  <label class="t" for="pp_imgb0"> No</label>
                        </div></div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Product image border') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="color" name="pp_img_border" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_IMG_BORDER') . '" />
                        </div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Thumbnails border') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pp_icon_border" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_ICON_BORDER') . '" />
                        </div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Enable spacing between images for 2 layout') . '</label>
                              <div class="yn">
                             <div class="margin-form">
                                 <input type="radio" class="regular-radio pp_imgspacing" name="pp_imgspacing" id="pp_imgspacing1" value="1" ' . ((Configuration::get('RC_PP_IMGSPACING') == 1) ? 'checked="checked" ' : '') . '/>
                                 <label class="t" for="pp_imgspacing1"> Yes</label>
                                 <input type="radio" class="regular-radio pp_imgspacing" name="pp_imgspacing" id="pp_imgspacing2" value="2" ' . ((Configuration::get('RC_PP_IMGSPACING') == 2) ? 'checked="checked" ' : '') . '/>
                                 <label class="t" for="pp_imgspacing2"> No</label>
                           </div></div></div>
                       </div>
               </div>
              <div class="roywrap w25">
                       <div class="roytc_row">
                                <label>' . $this->l('Show dots on mobile?') . '</label>
                                <div class="yn">
                                <div class="margin-form">
                                    <input type="radio" class="regular-radio" name="nc_mobadots" id="nc_mobadots1" value="1" ' . ((Configuration::get('NC_MOBADOTSS') == 1) ? 'checked="checked" ' : '') . '/>
                                    <label class="t" for="nc_mobadots1"> Yes</label>
                                    <input type="radio" class="regular-radio" name="nc_mobadots" id="nc_mobadots0" value="0" ' . ((Configuration::get('NC_MOBADOTSS') == 0) ? 'checked="checked" ' : '') . '/>
                                    <label class="t" for="nc_mobadots0"> No</label>
                        </div></div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Dots color') . '</label>
                              <div class="margin-form">
                              <input type="color" name="nc_mobadotsc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_MOBADOTSCS') . '" />
                        </div></div>
                </div>

                <div class="section" id="tab-productpage3">

                        <h3 class="">' . $this->l('Main Column') . '</h3>

                      <div class="roywrap">
                       <div class="roytc_row">
                                <label>' . $this->l('Sticky right column?') . '</label>
                                <div class="yn">
                                <div class="margin-form">
                                    <input type="radio" class="regular-radio" name="pp_sticky" id="pp_sticky1" value="1" ' . ((Configuration::get('RC_PP_STICKY') == 1) ? 'checked="checked" ' : '') . '/>
                                    <label class="t" for="pp_sticky1"> Yes</label>
                                    <input type="radio" class="regular-radio" name="pp_sticky" id="pp_sticky2" value="2" ' . ((Configuration::get('RC_PP_STICKY') == 2) ? 'checked="checked" ' : '') . '/>
                                    <label class="t" for="pp_sticky2"> No</label>
                        </div></div></div>

                        <div class="roytc_row">
                        <label>' . $this->l('Price color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pp_price_color" class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('RC_PP_PRICE_COLOR') . '" />
                        </div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Discount color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pp_price_dis" class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('RC_PP_PRICE_DIS') . '" />
                        </div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Product Variants label') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pp_att_label" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_ATT_LABEL') . '" />
                        </div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Selected Variant border') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pp_att_color_active" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_ATT_COLOR_ACTIVE') . '" />
                        </div></div>
                      </div>

                      <h3>' . $this->l('Buy block') . '</h3>
                      <div class="roywrap">
                        <div class="roytc_row">
                        <label>' . $this->l('Add to cart product background') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_pp_add_bg" class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('NC_PP_ADD_BG') . '" />
                        </div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Add to cart product border') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_pp_add_border" class="colorpicker cs_mc" data-hex="true" value="' . Configuration::get('NC_PP_ADD_BORDER') . '" />
                        </div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Add to cart product color') . '</label>
                             <div class="margin-form">
                             <input type="color" name="nc_pp_add_color" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_PP_ADD_COLOR') . '" />
                        </div></div>
                        </div>



                  <h3>' . $this->l('Special price Countdown') . '</h3>
                  <div class="roywrap">
                   <div class="roytc_row">
                   <label>' . $this->l('Title') . '</label>
                        <div class="margin-form">
                        <input type="color" name="nc_count_pr_title" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_PR_TITLE') . '" />
                   </div></div>
                   <div class="roytc_row">
                   <label>' . $this->l('Watch background') . '</label>
                        <div class="margin-form">
                        <input type="color" name="nc_count_pr_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_PR_BG') . '" />
                   </div></div>
                   <div class="roytc_row">
                   <label>' . $this->l('Watch color') . '</label>
                        <div class="margin-form">
                        <input type="color" name="nc_count_pr_sep" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_PR_SEP') . '" />
                   </div></div>
                    <div class="roytc_row">
                    <label>' . $this->l('Numbers') . '</label>
                         <div class="margin-form">
                         <input type="color" name="nc_count_pr_numbers" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_PR_NUMBERS') . '" />
                    </div></div>
                    <div class="roytc_row">
                    <label>' . $this->l('Text') . '</label>
                         <div class="margin-form">
                         <input type="color" name="nc_count_pr_color" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_COUNT_PR_COLOR') . '" />
                    </div></div>
                  </div>
                </div>


                    <h3>' . $this->l('Info blocks') . '</h3>

                    <div class="roywrap">
                    <div class="roytc_row">
                    <label>' . $this->l('Product info label') . '</label>
                         <div class="margin-form">
                         <input type="color" name="pp_info_label" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_INFO_LABEL') . '" />
                    </div></div>
                    <div class="roytc_row">
                    <label>' . $this->l('Product info value') . '</label>
                         <div class="margin-form">
                         <input type="color" name="pp_info_value" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_INFO_VALUE') . '" />
                    </div></div>

                    <div class="roytc_row">
                    <label>' . $this->l('Display Quantity?') . '</label>
                        <div class="margin-form">
                        <div class="yn">
                        <input type="radio" class="regular-radio" name="pp_display_q" id="pp_display_q_1" value="1" ' . ((Configuration::get('RC_PP_DISPLAY_Q') == 1) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="pp_display_q_1"> Yes</label>
                        <input type="radio" class="regular-radio" name="pp_display_q" id="pp_display_q_0" value="0" ' . ((Configuration::get('RC_PP_DISPLAY_Q') == 0) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="pp_display_q_0"> No</label>
                    </div></div></div>
                    <div class="roytc_row">
                    <label>' . $this->l('Display Product code?') . '</label>
                        <div class="margin-form">
                        <div class="yn">
                        <input type="radio" class="regular-radio" name="pp_display_refer" id="pp_display_refer_1" value="1" ' . ((Configuration::get('RC_PP_DISPLAY_REFER') == 1) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="pp_display_refer_1"> Yes</label>
                        <input type="radio" class="regular-radio" name="pp_display_refer" id="pp_display_refer_0" value="0" ' . ((Configuration::get('RC_PP_DISPLAY_REFER') == 0) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="pp_display_refer_0"> No</label>
                    </div></div></div>
                    <div class="roytc_row">
                    <label>' . $this->l('Display Condition?') . '</label>
                        <div class="margin-form">
                        <div class="yn">
                        <input type="radio" class="regular-radio" name="pp_display_cond" id="pp_display_cond_1" value="1" ' . ((Configuration::get('RC_PP_DISPLAY_COND') == 1) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="pp_display_cond_1"> Yes</label>
                        <input type="radio" class="regular-radio" name="pp_display_cond" id="pp_display_cond_0" value="0" ' . ((Configuration::get('RC_PP_DISPLAY_COND') == 0) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="pp_display_cond_0"> No</label>
                    </div></div></div>
                    <div class="roytc_row">
                    <label>' . $this->l('Display Brand?') . '</label>
                        <div class="margin-form">
                        <div class="yn">
                        <input type="radio" class="regular-radio" name="pp_display_brand" id="pp_display_brand_1" value="1" ' . ((Configuration::get('RC_PP_DISPLAY_BRAND') == 1) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="pp_display_brand_1"> Yes</label>
                        <input type="radio" class="regular-radio" name="pp_display_brand" id="pp_display_brand_0" value="0" ' . ((Configuration::get('RC_PP_DISPLAY_BRAND') == 0) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="pp_display_brand_0"> No</label>
                    </div></div></div>
                    </div>



                <div class="section" id="tab-productpage4">

                        <h3 class="">' . $this->l('Tabs') . '</h3>
                        <div class="roywrap w25">
                        <div class="roytc_row">
                        <label>' . $this->l('Use background for Product tabs?') . '</label>
                            <div class="margin-form">
                            <div class="yn">
                            <input type="radio" class="regular-radio" name="pp_tabs_bg_sw" id="pp_tabs_bg_sw1" value="1" ' . ((Configuration::get('RC_PP_TABS_BG_SW') == 1) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="pp_tabs_bg_sw1"> Yes</label>
                            <input type="radio" class="regular-radio" name="pp_tabs_bg_sw" id="pp_tabs_bg_sw2" value="2" ' . ((Configuration::get('RC_PP_TABS_BG_SW') == 2) ? 'checked="checked" ' : '') . '/>
                            <label class="t" for="pp_tabs_bg_sw2"> No</label>
                        </div></div></div>
                        <div class="roytc_row">
                        <label>' . $this->l('Product tabs background') . '</label>
                             <div class="margin-form">
                             <input type="color" name="pp_tabs_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_PP_TABS_BG') . '" />
                        </div></div>
                        </div>

                        <h3>' . $this->l('Same category products and cross-selling products') . '</h3>
                        <div class="roytc_row">
                             <label>' . $this->l('Product per row on desktop') . '</label>
                             <div class="margin-form" style="margin-top:0;">
                             <input type="text" name="nc_access_per" value="' . Configuration::get('NC_ACCESS_PERS') . '" />
                        </div></div>

                </div>

            </div>


            <div class="tab-pane" id ="tab-cart">
                <h2 class="rtc_title7">' . $this->l('Cart and order') . '</h2>


                <div class="nav_inside_container">
                    <ul class="nav_inside">
                          <li class="inside_tab tab-cart1 active">
                                <a data-inside="tab" href="#tab-cart1"><span>1</span>Add to cart</a>
                          </li>
                          <li class="save_li"><i></i>
                            <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                          </li>
                    </ul>
                </div>

              <div class="section" id="tab-cart1">

              <h3 class="first">' . $this->l('Added to cart') . '</h3>

              <div class="roytc_row ds_wrap">
                    <label>' . $this->l('Add to cart action') . '</label>
                    <div class="margin-form">
                          <input type="radio" class="regular-radio o_add" name="o_add" id="o_add1" value="1" ' . ((Configuration::get('RC_O_ADDS') == "1") ? 'checked="checked" ' : '') . '/>
                          <label class="ds o_add1" for="o_add1"> <span>1 . Sidebar animation</span></label>
                          <input type="radio" class="regular-radio o_add" name="o_add" id="o_add2" value="2" ' . ((Configuration::get('RC_O_ADDS') == "2") ? 'checked="checked" ' : '') . '/>
                          <label class="ds o_add2" for="o_add2"> <span>2 . Classic Popup</span></label>
              </div></div>

              <div class="roywrap">
              <div class="roytc_row">
              <label>' . $this->l('Added color') . '</label>
                   <div class="margin-form">
                   <input type="color" name="lc_c" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_LC_C') . '" />
              </div></div>
              </div>


                <h3>' . $this->l('Order options') . '</h3>

                <div class="roywrap">
                <div class="roytc_row">
                     <label>' . $this->l('Order option border') . '</label>
                     <div class="margin-form">
                     <input type="color" name="o_option" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_O_OPTION') . '" />
                </div></div>
                <div class="roytc_row">
                     <label>' . $this->l('Order option selected border') . '</label>
                     <div class="margin-form">
                     <input type="color" name="o_option_active" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_O_OPTION_ACTIVE') . '" />
                </div></div>
                </div>

            <h3>' . $this->l('Block reassurance') . '</h3>
                <div class="roytc_row">
                     <label>' . $this->l('Text') . '</label>
                     <div class="margin-form">
                     <input type="color" name="o_info_text" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_O_INFO_TEXT') . '" />
                </div></div>
            </div>

            </div>


            <div class="tab-pane" id ="tab-footer">
                    <h2 class="rtc_title10">' . $this->l('Footer') . '</h2>

                  <div class="nav_inside_container">
                        <ul class="nav_inside">
                              <li class="inside_tab tab-productpage1 active">
                                    <a data-inside="tab" href="#tab-footer1"><span>1</span>Layout</a>
                              </li>
                              <li class="inside_tab tab-productpage2">
                                    <a data-inside="tab" href="#tab-footer2"><span>2</span>Design</a>
                              </li>
                              <li class="save_li"><i></i>
                                <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                              </li>
                        </ul>
                  </div>

                <div class="section" id="tab-footer1">

                        <h3 class="first">' . $this->l('Footer Layout') . '</h3>
                        <div class="roytc_row ds_wrap">
                              <label>' . $this->l('Select your Footer') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio" name="footer_lay" value="1" id="footer_lay1" ' . ((Configuration::get('RC_FOOTER_LAY') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds footer_lay1" for="footer_lay1"> <span>1 . Links only</span></label>
                                  <input type="radio" class="regular-radio" name="footer_lay" value="2" id="footer_lay2" ' . ((Configuration::get('RC_FOOTER_LAY') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds footer_lay2" for="footer_lay2"> <span>2 . Socials + Newsletter</span></label>
                                  <input type="radio" class="regular-radio" name="footer_lay" value="3" id="footer_lay3" ' . ((Configuration::get('RC_FOOTER_LAY') == "3") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds footer_lay3" for="footer_lay3"> <span>3 . Logo + Text + Socials</span></label>
                                  <input type="radio" class="regular-radio" name="footer_lay" value="4" id="footer_lay4" ' . ((Configuration::get('RC_FOOTER_LAY') == "4") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds footer_lay4" for="footer_lay4"> <span>4 . Classic #1</span></label>
                                  <input type="radio" class="regular-radio" name="footer_lay" value="5" id="footer_lay5" ' . ((Configuration::get('RC_FOOTER_LAY') == "5") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds footer_lay5" for="footer_lay5"> <span>5 . Classic #2</span></label>
                                  <input type="radio" class="regular-radio" name="footer_lay" value="6" id="footer_lay6" ' . ((Configuration::get('RC_FOOTER_LAY') == "6") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds footer_lay6" for="footer_lay6"> <span>6 . All Blocks #1</span></label>
                                  <input type="radio" class="regular-radio" name="footer_lay" value="7" id="footer_lay7" ' . ((Configuration::get('RC_FOOTER_LAY') == "7") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds footer_lay7" for="footer_lay7"> <span>7 . All Blocks #2</span></label>
                                  <input type="radio" class="regular-radio" name="footer_lay" value="8" id="footer_lay8" ' . ((Configuration::get('RC_FOOTER_LAY') == "8") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds footer_lay8" for="footer_lay8"> <span>8 . Double Links</span></label>
                        </div></div>


                        <div class="roytc_row ds_wrap">
                              <label>' . $this->l('Footer Width') . '</label>
                              <div class="margin-form">
                                  <input type="radio" class="regular-radio" name="nc_footer_w" value="1" id="nc_footer_w1" ' . ((Configuration::get('NC_FOOTER_W') == "1") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds width1" for="nc_footer_w1"> <span>1 . Container</span></label>
                                  <input type="radio" class="regular-radio" name="nc_footer_w" value="2" id="nc_footer_w2" ' . ((Configuration::get('NC_FOOTER_W') == "2") ? 'checked="checked" ' : '') . ' />
                                  <label class="ds width2" for="nc_footer_w2"> <span>2 . Full Width</span></label>
                        </div></div>

                        <h3>' . $this->l('Footer logo') . '</h3>
                        <div class="roytc_row" style="margin-top:0;">
                              <label>' . $this->l('Logo upload') . '</label>
                              <div class="margin-form" style="margin-top:0;">
                                    <div class="file_design"></div>
                                    <input id="logo_footer_field2" type="file" name="logo_footer_field2">
                                    <input id="logo_footer_button2" type="submit" class="button" name="logo_footer_button2" value="' . $this->l('Upload') . '">
                                    <p class="clear helpcontent">' . $this->l('There is no max height or max width for footer logo. So you should resize your logo to size you need before upload. It is set this way for cases if you want upload really wide logo for footer with centered logo or high logo with full footer column height. Preffered format - transparent .png') . '</p>
                              </div>';
                              $logo_footer_ext = Configuration::get('NC_LOGO_FOOTER');
                              if ($logo_footer_ext != "") {
                                    if (Shop::getContext() == Shop::CONTEXT_SHOP)
                                    $adv_imgname = 'logo-footer'.'-'.(int)$this->context->shop->getContextShopID();

                                    $html .= '<label>' . $this->l('Uploaded logo') . '</label>
                                                      <div class="margin-form">
                                                      <img class="imgback" src="' . $this -> _path .'upload/'.$adv_imgname.'.' . $logo_footer_ext . '" /><br /><br />
                                                      <input id="logo_footer_delete2" type="submit" class="button" value="' . $this->l('Delete image') . '" name="logo_footer_delete2">
                                                      </div>';
                              }

                              $html .= '
                        </div>

                  </div>
                  <div class="section" id="tab-footer2">

                        <h3>' . $this->l('Footer Design') . '</h3>

                           <div class="roytc_row ds_wrap">
                                 <label>' . $this->l('What to use?') . '</label>
                                 <div class="margin-form">
                                     <input type="radio" class="regular-radio nc_foot_bg" name="nc_foot_bg" value="1" id="nc_foot_bg1" ' . ((Configuration::get('NC_FOOT_BGS') == "1") ? 'checked="checked" ' : '') . ' />
                                     <label class="ds bg1" for="nc_foot_bg1"> <span>1 . Background</span></label>
                                     <input type="radio" class="regular-radio nc_foot_bg" name="nc_foot_bg" value="2" id="nc_foot_bg2" ' . ((Configuration::get('NC_FOOT_BGS') == "2") ? 'checked="checked" ' : '') . ' />
                                     <label class="ds bg2" for="nc_foot_bg2"> <span>2 . Gradient</span></label>
                                     <input type="radio" class="regular-radio nc_foot_bg" name="nc_foot_bg" value="3" id="nc_foot_bg3" ' . ((Configuration::get('NC_FOOT_BGS') == "3") ? 'checked="checked" ' : '') . ' />
                                     <label class="ds bg3" for="nc_foot_bg3"> <span>3 . Image</span></label>
                                     <input type="radio" class="regular-radio nc_foot_bg" name="nc_foot_bg" value="4" id="nc_foot_bg4" ' . ((Configuration::get('NC_FOOT_BGS') == "4") ? 'checked="checked" ' : '') . ' />
                                     <label class="ds bg5" for="nc_foot_bg4"> <span>4 . Transparent</span></label>
                           </div></div>
                           <div class="if_nc_foot_bc">
                                 <div class="roytc_row">
                                      <label>' . $this->l('Section Background') . '</label>
                                      <div class="margin-form" style="margin-top:0;">
                                      <input type="color" name="nc_foot_bc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FOOT_BC') . '" />
                                 </div></div>
                           </div>
                           <div class="if_nc_foot_gr">
                                 <div class="roytc_row">
                                      <label>' . $this->l('Gradient start color') . '</label>
                                      <div class="margin-form">
                                      <input type="color" name="nc_foot_gs" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FOOT_GS') . '" />
                                 </div></div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Gradient end color') . '</label>
                                      <div class="margin-form">
                                      <input type="color" name="nc_foot_ge" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FOOT_GE') . '" />
                                 </div></div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Gradient angle') . '</label>
                                      <div class="margin-form">
                                      <input type="text" name="nc_foot_gg" value="' . Configuration::get('NC_FOOT_GG') . '" /> degrees
                                      <p class="clear grad_direction"></p>
                                 </div></div>
                           </div>
                           <div class="if_nc_foot_im">
                                 ';
                                 $html .= $this -> backgroundOptions($panel="nc_foot_im", $panelupper="FOOT_IM");
                                 $html .= '
                           </div>



                         <div class="roywrap">
                        <div class="roytc_row">
                              <label>' . $this->l('Titles') . '</label>
                              <div class="margin-form">
                               <input type="color" name="footer_titles" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_TITLES') . '" />
                        </div></div>
                        <div class="roytc_row">
                              <label>' . $this->l('Text color') . '</label>
                              <div class="margin-form">
                               <input type="color" name="footer_text" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_TEXT') . '" />
                        </div></div>
                        <div class="roytc_row">
                              <label>' . $this->l('Link color') . '</label>
                              <div class="margin-form">
                               <input type="color" name="footer_link" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_LINK') . '" />
                        </div></div>
                        <div class="roytc_row">
                              <label>' . $this->l('Link hover color') . '</label>
                              <div class="margin-form">
                               <input type="color" name="footer_link_h"  class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_LINK_H') . '" />
                        </div></div>
                      </div>

                      <div class="roywrap">
                        <div class="roytc_row">
                          <label>' . $this->l('Display Footer border?') . '</label>
                          <div class="yn">
                          <div class="margin-form">
                              <input type="radio" class="regular-radio" name="footer_border_sw" id="footer_border_sw1" value="1" ' . ((Configuration::get('RC_FOOTER_BORDER_SW') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="footer_border_sw1"> Yes</label>
                              <input type="radio" class="regular-radio" name="footer_border_sw" id="footer_border_sw2" value="2" ' . ((Configuration::get('RC_FOOTER_BORDER_SW') == 2) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="footer_border_sw2"> No</label>
                          </div></div>
                        </div>
                        <div class="roytc_row">
                             <label>' . $this->l('Footer border') . '</label>
                             <div class="margin-form">
                             <input type="color" name="footer_border" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_BORDER') . '" />
                        </div></div>
                      </div>

                  <h3>' . $this->l('Newsletter block') . '</h3>

                <div class="roywrap">
                  <div class="roytc_row">
                       <label>' . $this->l('Newsletter input background') . '</label>
                       <div class="margin-form">
                       <input type="color" name="footer_news_bg" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_NEWS_BG') . '" />
                  </div></div>
                  <div class="roytc_row">
                       <label>' . $this->l('Newsletter input border') . '</label>
                       <div class="margin-form">
                       <input type="color" name="footer_news_border" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_NEWS_BORDER') . '" />
                  </div></div>
                  <div class="roytc_row">
                       <label>' . $this->l('Newsletter button color') . '</label>
                       <div class="margin-form">
                       <input type="color" name="footer_news_button" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_NEWS_BUTTON') . '" />
                  </div></div>
                  <div class="roytc_row">
                       <label>' . $this->l('Newsletter input default text') . '</label>
                       <div class="margin-form">
                       <input type="color" name="footer_news_placeh" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_NEWS_PLACEH') . '" />
                  </div></div>
                  <div class="roytc_row">
                       <label>' . $this->l('Newsletter input color') . '</label>
                       <div class="margin-form">
                       <input type="color" name="footer_news_color" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_FOOTER_NEWS_COLOR') . '" />
                  </div></div>
                </div>

                <h3>' . $this->l('Socials block') . '</h3>
                  <div class="roytc_row">
                       <label>' . $this->l('Icons color') . '</label>
                       <div class="margin-form">
                       <input type="color" name="nc_footer_soc" class="colorpicker" data-hex="true" value="' . Configuration::get('NC_FOOTER_SOC') . '" />
                  </div></div>
                  <div class="roytc_row">
                    <label>' . $this->l('Display Title?') . '</label>
                    <div class="yn">
                    <div class="margin-form">
                        <input type="radio" class="regular-radio" name="nc_footer_soctitle" id="nc_footer_soctitle1" value="1" ' . ((Configuration::get('NC_FOOTER_SOCTITLE') == 1) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="nc_footer_soctitle1"> Yes</label>
                        <input type="radio" class="regular-radio" name="nc_footer_soctitle" id="nc_footer_soctitle2" value="2" ' . ((Configuration::get('NC_FOOTER_SOCTITLE') == 2) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="nc_footer_soctitle2"> No</label>
                    </div></div>
                  </div>

                <h3>' . $this->l('Links block') . '</h3>
                  <div class="roytc_row">
                    <label>' . $this->l('Display Title?') . '</label>
                    <div class="yn">
                    <div class="margin-form">
                        <input type="radio" class="regular-radio" name="nc_footer_linktitle" id="nc_footer_linktitle1" value="1" ' . ((Configuration::get('NC_FOOTER_LINKTITLE') == 1) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="nc_footer_linktitle1"> Yes</label>
                        <input type="radio" class="regular-radio" name="nc_footer_linktitle" id="nc_footer_linktitle2" value="2" ' . ((Configuration::get('NC_FOOTER_LINKTITLE') == 2) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="nc_footer_linktitle2"> No</label>
                    </div></div>
                  </div>


            </div>

            </div>

            <div class="tab-pane" id ="tab-blog">
                    <h2 class="rtc_title9">' . $this->l('Blog') . '</h2>

                    <div class="nav_inside_container">
                          <ul class="nav_inside">
                                <li class="inside_tab tab-blog1 active">
                                      <a data-inside="tab" href="#tab-blog1"><span>1</span>Home latest posts</a>
                                </li>
                                <li class="inside_tab tab-blog2">
                                      <a data-inside="tab" href="#tab-blog2"><span>2</span>Blog category</a>
                                </li>
                                <li class="save_li"><i></i>
                                  <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                                </li>
                          </ul>
                    </div>


                  <div class="section" id="tab-blog1">
                  <h3 class="first">' . $this->l('Home Latest posts') . '</h3>

                 <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                        <label>' . $this->l('Block Width') . '</label>
                        <div class="margin-form">
                            <input type="radio" class="regular-radio" name="bl_w" value="1" id="bl_w1" ' . ((Configuration::get('RC_BL_W') == "1") ? 'checked="checked" ' : '') . ' />
                            <label class="ds width1" for="bl_w1"> <span>1 . Container</span></label>
                            <input type="radio" class="regular-radio" name="bl_w" value="2" id="bl_w2" ' . ((Configuration::get('RC_BL_W') == "2") ? 'checked="checked" ' : '') . ' />
                            <label class="ds width2" for="bl_w2"> <span>2 . Full Width</span></label>
                  </div></div>
                 <div class="roytc_row ds_wrap fw">
                     <label>' . $this->l('Block Title align') . '</label>
                     <div class="margin-form">
                         <input type="radio" class="regular-radio" name="bl_align" value="1" id="bl_align1" ' . ((Configuration::get('RC_BL_ALIGN') == "1") ? 'checked="checked" ' : '') . ' />
                         <label class="ds align1" for="bl_align1"> <span>1 . Left</span></label>
                         <input type="radio" class="regular-radio" name="bl_align" value="2" id="bl_align2" ' . ((Configuration::get('RC_BL_ALIGN') == "2") ? 'checked="checked" ' : '') . ' />
                         <label class="ds align2" for="bl_align2"> <span>2 . Center</span></label>
                         <input type="radio" class="regular-radio" name="bl_align" value="3" id="bl_align3" ' . ((Configuration::get('RC_BL_ALIGN') == "3") ? 'checked="checked" ' : '') . ' />
                         <label class="ds align3" for="bl_align3"> <span>3 . Right</span></label>
                 </div></div>
                 </div>


                  <div class="roywrap wauto">
                  <div class="roytc_row ds_wrap">
                        <label>' . $this->l('Blog post layout') . '</label>
                        <div class="margin-form">
                              <input type="radio" class="regular-radio bl_lay" name="bl_lay" id="bl_lay_1" value="1" ' . ((Configuration::get('RC_BL_LAY') == "1") ? 'checked="checked" ' : '') . '/>
                              <label class="ds blog_lay1" for="bl_lay_1"> <span>1 . Classic</span></label>
                              <input type="radio" class="regular-radio bl_lay" name="bl_lay" id="bl_lay_2" value="2" ' . ((Configuration::get('RC_BL_LAY') == "2") ? 'checked="checked" ' : '') . '/>
                              <label class="ds blog_lay2" for="bl_lay_2"> <span>2 . Minimal</span></label>
                  </div></div>

                  <div class="roytc_row ds_wrap">
                        <label>' . $this->l('Posts per row?') . '</label>
                        <div class="margin-form">
                              <input type="radio" class="regular-radio bl_row" name="bl_row" id="bl_row2" value="2" ' . ((Configuration::get('RC_BL_ROW') == "2") ? 'checked="checked" ' : '') . '/>
                              <label class="ds items_onrow2" for="bl_row2"> <span>2</span></label>
                              <input type="radio" class="regular-radio bl_row" name="bl_row" id="bl_row3" value="3" ' . ((Configuration::get('RC_BL_ROW') == "3") ? 'checked="checked" ' : '') . '/>
                              <label class="ds items_onrow3" for="bl_row3"> <span>3</span></label>
                              <input type="radio" class="regular-radio bl_row" name="bl_row" id="bl_row4" value="4" ' . ((Configuration::get('RC_BL_ROW') == "4") ? 'checked="checked" ' : '') . '/>
                              <label class="ds items_onrow4" for="bl_row4"> <span>4</span></label>
                  </div></div></div>

                  <div class="roytc_row">
                    <label>' . $this->l('Display post info on homepage?') . '</label>
                    <div class="yn">
                    <div class="margin-form">
                        <input type="radio" class="regular-radio" name="bl_meta_sw" id="bl_meta_sw1" value="1" ' . ((Configuration::get('RC_BL_META_SW') == 1) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="bl_meta_sw1"> Yes</label>
                        <input type="radio" class="regular-radio" name="bl_meta_sw" id="bl_meta_sw2" value="2" ' . ((Configuration::get('RC_BL_META_SW') == 2) ? 'checked="checked" ' : '') . '/>
                        <label class="t" for="bl_meta_sw2"> No</label>
                    </div></div>
                  </div>

                  <div class="roytc_row">
                       <label>' . $this->l('Home latest title') . '</label>
                       <div class="margin-form">
                       <input type="color" name="bl_head" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_BL_HEAD') . '" />
                  </div></div>

                 <h3>' . $this->l('Home latest post design') . '</h3>

                        <div class="roywrap">
                        <div class="roytc_row">
                             <label>' . $this->l('Home post title') . '</label>
                             <div class="margin-form">
                             <input type="color" name="bl_h_title" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_BL_H_TITLE') . '" />
                        </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Home post title hover') . '</label>
                             <div class="margin-form">
                             <input type="color" name="bl_h_title_h" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_BL_H_TITLE_H') . '" />
                        </div></div>
                          <div class="roytc_row">
                               <label>' . $this->l('Home post meta info') . '</label>
                               <div class="margin-form">
                               <input type="color" name="bl_h_meta" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_BL_H_META') . '" />
                          </div></div>
                        <div class="roytc_row">
                             <label>' . $this->l('Home post description') . '</label>
                             <div class="margin-form">
                             <input type="color" name="bl_h_desc" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_BL_H_DESC') . '" />
                        </div></div>
                        </div>
                  </div>


                  <div class="section" id="tab-blog2">
                   <h3>' . $this->l('Blog category') . '</h3>

                        <div class="roytc_row">
                             <label>' . $this->l('Single post Meta info') . '</label>
                             <div class="margin-form">
                             <input type="color" name="bl_meta" class="colorpicker" data-hex="true" value="' . Configuration::get('RC_BL_META') . '" />
                        </div></div>

                    </div>
            </div>



              <div class="tab-pane" id ="tab-fonts">
                      <h2 class="rtc_title11">' . $this->l('Typography') . '</h2>

                              <div class="nav_inside_container">
                                    <ul class="nav_inside">
                                          <li class="inside_tab tab-fonts1 active">
                                                <a data-inside="tab" href="#tab-fonts1"><span>1</span>Font family</a>
                                          </li>
                                          <li class="inside_tab tab-fonts2">
                                                <a data-inside="tab" href="#tab-fonts2"><span>2</span>Elements</a>
                                          </li>
                                          <li class="save_li"><i></i>
                                            <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                                          </li>
                                    </ul>
                              </div>

                        <div class="section" id="tab-fonts1">
                            <h3 class="first">' . $this->l('Font family') . '</h3>
                            <div class="roywrap w50">
                            <div class="roytc_row">
            		        		<label>' . $this->l('Headings font') . '</label>
                                            <div class="margin-form">
                                          ';
                    $html .= $this -> fontOptions($panel="f_headings", $panelupper="RC_F_HEADINGS");
                    $html .= '
                                            <p id="headingexample" class="fontshow" style="text-transform:uppercase;">' . $this->l('Headings font now looks like this ... ( Latin ext: ą, ć, ž, Š ... Cyrillic: я, ж, Щ, Ю )') . '</p>
                                            <p class="clear helpcontent" style="margin-top:0.5em">' . $this->l('Choose font for headings and titles. Default: Poppins') . '</p>
                                            </div>
                                            </div>

                                            <div class="roytc_row">
                                            <label>' . $this->l('Menu font') . '</label>
                                            <div class="margin-form">
                                            ';
                    $html .= $this -> fontOptions($panel="f_menu", $panelupper="RC_F_MENU");
                    $html .= '
                                            <p id="menuexample" class="fontshow">' . $this->l('Text font now looks like this ... ( Latin ext: ą, ć, ž, Š ... Cyrillic: я, ж, Щ, Ю )') . '</p>
                                            <p class="clear helpcontent" style="margin-top:0.5em">' . $this->l('Choose font for body. Default: Poppins') . '</p>
                                            </div>
                                            </div>

                                            <div class="roytc_row">
                                            <label>' . $this->l('Buttons font') . '</label>
                                            <div class="margin-form">
                                            ';
                    $html .= $this -> fontOptions($panel="f_buttons", $panelupper="RC_F_BUTTONS");
                    $html .= '
                                            <p id="buttonsexample" class="fontshow">' . $this->l('Button font now looks like this ... ( Latin ext: ą, ć, ž, Š ... Cyrillic: я, ж, Щ, Ю )') . '</p>
                                            <p class="clear helpcontent" style="margin-top:0.5em">' . $this->l('Choose font for buttons. Default: Poppins') . '</p>
                                            </div>
                                            </div>

                                               <div class="roytc_row">
                                            <label>' . $this->l('Text font') . '</label>
                                            <div class="margin-form">
                                            ';
                    $html .= $this -> fontOptions($panel="f_text", $panelupper="RC_F_TEXT");
                    $html .= '
                                            <p id="textexample" class="fontshow">' . $this->l('Text font now looks like this ... ( Latin ext: ą, ć, ž, Š ... Cyrillic: я, ж, Щ, Ю )') . '</p>
                                            <p class="clear helpcontent" style="margin-top:0.5em">' . $this->l('Choose font for body. Default: Poppins') . '</p>
                                            </div>
                                            </div>

                                               <div class="roytc_row">
                                            <label>' . $this->l('Price font') . '</label>
                                            <div class="margin-form">
                                            ';
                    $html .= $this -> fontOptions($panel="f_price", $panelupper="RC_F_PRICE");
                    $html .= '
                                            <p id="priceexample" class="fontshow">' . $this->l('98$ 134,25€ 786£ 455Руб') . '</p>
                                            <p class="clear helpcontent" style="margin-top:0.5em">' . $this->l('Choose font for price. Default: Poppins') . '</p>
                                            </div>
                                            </div>

                                <div class="roytc_row" style="clear:left;">
                                    <label>' . $this->l('Latin extended support') . '</label>
                                    <div class="yn">
                                    <div class="margin-form">
                                        <input type="radio" class="regular-radio" name="latin_ext" id="latin_ext_1" value="1" ' . ((Configuration::get('RC_LATIN_EXT') == 1) ? 'checked="checked" ' : '') . '/>
                                        <label class="t" for="latin_ext_1"> Yes</label>
                                        <input type="radio" class="regular-radio" name="latin_ext" id="latin_ext_0" value="0" ' . ((Configuration::get('RC_LATIN_EXT') == 0) ? 'checked="checked" ' : '') . '/>
                                        <label class="t" for="latin_ext_0"> No</label>
                                    </div>
                                    </div>
                                    <p class="clear helpcontent">' . $this->l('Include Google fonts with Latin extended support ') . ' <br/ >You can check your selected font whether support Latin ext here: <a href="https://fonts.google.com/" target="_blank">https://fonts.google.com/</a> or on preview</p>

                                </div>
                                <div class="roytc_row">
                                    <label>' . $this->l('Cyrillic support') . '</label>
                                    <div class="yn">
                                    <div class="margin-form">
                                        <input type="radio" class="regular-radio" name="cyrillic" id="cyrillic_1" value="1" ' . ((Configuration::get('RC_CYRILLIC') == 1) ? 'checked="checked" ' : '') . '/>
                                        <label class="t" for="cyrillic_1"> Yes</label>
                                        <input type="radio" class="regular-radio" name="cyrillic" id="cyrillic_0" value="0" ' . ((Configuration::get('RC_CYRILLIC') == 0) ? 'checked="checked" ' : '') . '/>
                                        <label class="t" for="cyrillic_0"> No</label>
                                    </div>
                                    </div>
                                    <p class="clear helpcontent">' . $this->l('Include Google fonts with Cyrillic support. ') . ' <br/ >You can check your selected font whether support Cyrillic here: <a href="https://fonts.google.com/" target="_blank">https://fonts.google.com/</a> or on preview</p>
                                </div>
                                </div>
                  </div>
                  <div class="section" id="tab-fonts2">
                             <h3>' . $this->l('Elements') . '</h3>
                             <p class="clear helpcontent" style="margin-top:0;">Font weights: <span style="font-weight:300">Thin (300)</span>, <span style="font-weight:400">Regular (400)</span>, <span style="font-weight:500">Medium (500)</span>, <span style="font-weight:600">Semibold (600)</span>, <span style="font-weight:700">Bold (700)</span>. <br /><br />If your current font not support selected weight, the closest supported weight will be applied.</p>

                             <h3 class="first">' . $this->l('Body Text / paragraph / links') . '</h3>
                             <div class="roywrap">

                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_text" value="' . Configuration::get('RC_FS_TEXT') . '" /> px
                                     </div>
                                </div>
                                <div class="roytc_row">
                                     <label>' . $this->l('Line height') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="lh_text" value="' . Configuration::get('RC_LH_TEXT') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_text" name="fw_text" readonly class="slider_val" value="' . Configuration::get('RC_FW_TEXT') . '" />
                                         <div id="slider_fw_text"></div>
                                      </div>
                                 </div>
                                  <div class="roytc_row font_weight">
                                       <label>' . $this->l('Link Font weight') . '</label>
                                       <div class="margin-form">
                                          <input type="text" id="fw_link" name="fw_link" readonly class="slider_val" value="' . Configuration::get('RC_FW_LINK') . '" />
                                          <div id="slider_fw_link"></div>
                                       </div>
                                  </div>

                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_text"  value="' . Configuration::get('RC_LS_TEXT') . '" /> px
                                      </div>
                                  </div>

                              </div>


                             <h3>' . $this->l('Buttons') . '</h3>
                             <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_btn" value="' . Configuration::get('RC_FS_BTN') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_btn" name="fw_btn" readonly class="slider_val" value="' . Configuration::get('RC_FW_BTN') . '" />
                                         <div id="slider_fw_btn"></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_btn"  value="' . Configuration::get('RC_LS_BTN') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_btn" value="none" id="up_btn1" ' . ((Configuration::get('RC_UP_BTN') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_btn1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_btn" value="uppercase" id="up_btn2" ' . ((Configuration::get('RC_UP_BTN') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_btn2"> <span></span></label>
                                  </div></div>
                              </div>

                             <h3>' . $this->l('Inputs') . '</h3>
                             <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_inp" value="' . Configuration::get('RC_FS_INP') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_inp" name="fw_inp" readonly class="slider_val" value="' . Configuration::get('RC_FW_INP') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_inp"  value="' . Configuration::get('RC_LS_INP') . '" /> px
                                      </div>
                                  </div>
                              </div>


                              <h3>' . $this->l('Footer titles') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_foot" value="' . Configuration::get('RC_FS_FOOT') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_foot" name="fw_foot" readonly class="slider_val" value="' . Configuration::get('RC_FW_FOOT') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_foot"  value="' . Configuration::get('RC_LS_FOOT') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_foot" value="none" id="up_foot1" ' . ((Configuration::get('RC_UP_FOOT') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_foot1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_foot" value="uppercase" id="up_foot2" ' . ((Configuration::get('RC_UP_FOOT') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_foot2"> <span></span></label>
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Homepage Titles') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_home_tit" value="' . Configuration::get('RC_FS_HOME_TIT') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_home_tit" name="fw_home_tit" readonly class="slider_val" value="' . Configuration::get('RC_FW_HOME_TIT') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_home_tit"  value="' . Configuration::get('RC_LS_HOME_TIT') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_home_tit" value="none" id="up_home_tit1" ' . ((Configuration::get('RC_UP_HOME_TIT') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_home_tit1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_home_tit" value="uppercase" id="up_home_tit2" ' . ((Configuration::get('RC_UP_HOME_TIT') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_home_tit2"> <span></span></label>
                                  </div></div>
                              </div>

                              <h3>' . $this->l('Homepage Subtitles') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_home_sub" value="' . Configuration::get('RC_FS_HOME_SUB') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_home_sub" name="fw_home_sub" readonly class="slider_val" value="' . Configuration::get('RC_FW_HOME_SUB') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_home_sub"  value="' . Configuration::get('RC_LS_HOME_SUB') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_home_sub" value="none" id="up_home_sub1" ' . ((Configuration::get('RC_UP_HOME_SUB') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_home_sub1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_home_sub" value="uppercase" id="up_home_sub2" ' . ((Configuration::get('RC_UP_HOME_SUB') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_home_sub2"> <span></span></label>
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Page Heading') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_page_head" value="' . Configuration::get('RC_FS_PAGE_HEAD') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_page_head" name="fw_page_head" readonly class="slider_val" value="' . Configuration::get('RC_FW_PAGE_HEAD') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_page_head"  value="' . Configuration::get('RC_LS_PAGE_HEAD') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_page_head" value="none" id="up_page_head1" ' . ((Configuration::get('RC_UP_PAGE_HEAD') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_page_head1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_page_head" value="uppercase" id="up_page_head2" ' . ((Configuration::get('RC_UP_PAGE_HEAD') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_page_head2"> <span></span></label>
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Page Title (h3)') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_page_h3" value="' . Configuration::get('RC_FS_PAGE_H3') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_page_h3" name="fw_page_h3" readonly class="slider_val" value="' . Configuration::get('RC_FW_PAGE_H3') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_page_h3"  value="' . Configuration::get('RC_LS_PAGE_H3') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_page_h3" value="none" id="up_page_h31" ' . ((Configuration::get('RC_UP_PAGE_H3') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_page_h31"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_page_h3" value="uppercase" id="up_page_h32" ' . ((Configuration::get('RC_UP_PAGE_H3') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_page_h32"> <span></span></label>
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Sidebar Titles') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_page_side" value="' . Configuration::get('RC_FS_PAGE_SIDE') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_page_side" name="fw_page_side" readonly class="slider_val" value="' . Configuration::get('RC_FW_PAGE_SIDE') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_page_side"  value="' . Configuration::get('RC_LS_PAGE_SIDE') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_page_side" value="none" id="up_page_side1" ' . ((Configuration::get('RC_UP_PAGE_SIDE') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_page_side1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_page_side" value="uppercase" id="up_page_side2" ' . ((Configuration::get('RC_UP_PAGE_SIDE') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_page_side2"> <span></span></label>
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Product list Name') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_cat_name" value="' . Configuration::get('RC_FS_CAT_NAME') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_cat_name" name="fw_cat_name" readonly class="slider_val" value="' . Configuration::get('RC_FW_CAT_NAME') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_cat_name"  value="' . Configuration::get('RC_LS_CAT_NAME') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_cat_name" value="none" id="up_cat_name1" ' . ((Configuration::get('RC_UP_CAT_NAME') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_cat_name1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_cat_name" value="uppercase" id="up_cat_name2" ' . ((Configuration::get('RC_UP_CAT_NAME') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_cat_name2"> <span></span></label>
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Product list Price') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_cat_price" value="' . Configuration::get('RC_FS_CAT_PRICE') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_cat_price" name="fw_cat_price" readonly class="slider_val" value="' . Configuration::get('RC_FW_CAT_PRICE') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_cat_price"  value="' . Configuration::get('RC_LS_CAT_PRICE') . '" /> px
                                      </div>
                                  </div>
                              </div>


                              <h3>' . $this->l('Product page Name') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_pp_name" value="' . Configuration::get('RC_FS_PP_NAME') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_pp_name" name="fw_pp_name" readonly class="slider_val" value="' . Configuration::get('RC_FW_PP_NAME') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_pp_name"  value="' . Configuration::get('RC_LS_PP_NAME') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_pp_name" value="none" id="up_pp_name1" ' . ((Configuration::get('RC_UP_PP_NAME') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_pp_name1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_pp_name" value="uppercase" id="up_pp_name2" ' . ((Configuration::get('RC_UP_PP_NAME') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_pp_name2"> <span></span></label>
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Product page Price') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_pp_price" value="' . Configuration::get('RC_FS_PP_PRICE') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_pp_price" name="fw_pp_price" readonly class="slider_val" value="' . Configuration::get('RC_FW_PP_PRICE') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_pp_price"  value="' . Configuration::get('RC_LS_PP_PRICE') . '" /> px
                                      </div>
                                  </div>
                              </div>


                              <h3>' . $this->l('Blog Post Name') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_blog" value="' . Configuration::get('RC_FS_BLOG') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_blog" name="fw_blog" readonly class="slider_val" value="' . Configuration::get('RC_FW_BLOG') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_blog"  value="' . Configuration::get('RC_LS_BLOG') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_blog" value="none" id="up_blog1" ' . ((Configuration::get('RC_UP_BLOG') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_blog1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_blog" value="uppercase" id="up_blog2" ' . ((Configuration::get('RC_UP_BLOG') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_blog2"> <span></span></label>
                                  </div></div>
                              </div>


                              <h3>' . $this->l('Top Menu elements') . '</h3>
                              <div class="roywrap">
                                <div class="roytc_row">
                                     <label>' . $this->l('Font size') . '</label>
                                     <div class="margin-form">
                                        <input type="text" name="fs_menu" value="' . Configuration::get('RC_FS_MENU') . '" /> px
                                     </div>
                                </div>
                                 <div class="roytc_row font_weight">
                                      <label>' . $this->l('Font weight') . '</label>
                                      <div class="margin-form">
                                         <input type="text" id="fw_menu" name="fw_menu" readonly class="slider_val" value="' . Configuration::get('RC_FW_MENU') . '" />
                                         <div></div>
                                      </div>
                                 </div>
                                 <div class="roytc_row">
                                      <label>' . $this->l('Letter-spacing') . '</label>
                                      <div class="margin-form">
                                          <input type="text" name="ls_menu"  value="' . Configuration::get('RC_LS_MENU') . '" /> px
                                      </div>
                                  </div>
                                  <div class="roytc_row up_wrap">
                                      <label>' . $this->l('UPPERCASE or Normal text?') . '</label>
                                      <div class="margin-form">
                                          <input type="radio" class="regular-radio" name="up_menu" value="none" id="up_menu1" ' . ((Configuration::get('RC_UP_MENU') == "none") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode1" for="up_menu1"> <span></span></label>
                                          <input type="radio" class="regular-radio" name="up_menu" value="uppercase" id="up_menu2" ' . ((Configuration::get('RC_UP_MENU') == "uppercase") ? 'checked="checked" ' : '') . ' />
                                          <label class="ds up upmode2" for="up_menu2"> <span></span></label>
                                  </div></div>
                              </div>

                  </div>


            </div>


            <div class="tab-pane" id ="tab-css">
                    <h2 class="rtc_title12">' . $this->l('Custom CSS') . '</h2>

                          <div class="nav_inside_container">
                                <ul class="nav_inside">
                                      <li class="inside_tab active">
                                            <a data-inside="tab" href="#tab-css1"><span>1</span>Custom CSS</a>
                                      </li>
                                      <li class="save_li"><i></i>
                                        <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                                      </li>
                                </ul>
                          </div>

                        <div class="section" id="tab-css1">

                        <div class="roytc_row">
                             <label>' . $this->l('Put your Custom CSS here') . '</label>
                             <div class="margin-form">
                             <textarea name="nc_css" id="code" cols="70" rows="10">' . Configuration::get('NC_CSS') . '</textarea>
                             <p class="clear helpcontent">Click on area and put your custom CSS code. Then click Save changes to override CSS of theme</p>
                             <p class="clear link">Highlighting CSS editor by <a href="http://codemirror.net/" target="_blank">codemirror</a></p>
                        </div></div>
                        </div>
            </div>

            <div class="tab-pane" id ="tab-ie">
                    <h2 class="rtc_title13">' . $this->l('Import / Export config') . '</h2>

                          <div class="nav_inside_container">
                                <ul class="nav_inside">
                                      <li class="inside_tab active">
                                            <a data-inside="tab" href="#tab-import1"><span>1</span>Import / Export</a>
                                      </li>
                                      <li class="save_li"><i></i>
                                        <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
                                      </li>
                                </ul>
                          </div>

                        <div class="section" id="tab-import1">

                        <div class="roytc_row">
                             <div class="margin-form-ie exp">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                             <label>' . $this->l('Export config') . '</label>
                                 <input id="export_changes" type="submit" class="button save_button" value="' . $this->l('Export config') . '" name="export_changes">
                             </div>
                             <div class="margin-form-ie imp" style="float:right;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                             <label>' . $this->l('Import config') . '</label>
                                 <input id="ayon_import_file" type="file" name="ayon_import_file">
                                 <input id="ayon_import_submit" type="submit" class="button" name="ayon_import_submit" value="' . $this->l('Import config') . '">
                            </div>
                        </div>
                        <p class="clear helpcontent">After you finished to customize your design, you can EXPORT your config and save it on your computer. <br /> Then you can import it and set your design in one click. <br /> It is useful to make backup of your work.</p>
                        <p class="clear helpcontent">Do not forget to Save Changes after Import.</p>
                        <p class="clear helpcontent">Exported config include all your Customizer settings except uploaded images.</p>

                      </div>
                    </div>
                </div>
              </div>
        <div class="roytc_save">
            <div class="reset_container">Reset changes</div>
            <div class="reset_popup"><span>Are you sure?</span><div><input id="reset_changes" type="submit" class="reset_button" value="' . $this->l('Yes') . '" name="reset_changes"><input type="button" class="button no-button" value="No"></div></div>
            <input type="submit" class="save_button save" value="' . $this->l('Save changes') . '" name="save_changes">
	    </div>

			</fieldset>
			</form>
			';

        return $html;
    }

    public function generateCss() {
        $css ='';

// ****************  General Settings styles start

// FONTS BY class

        $fontHeadings = Configuration::get('RC_F_HEADINGS');
        $fontButtons = Configuration::get('RC_F_BUTTONS');
        $fontText = Configuration::get('RC_F_TEXT');
        $fontPrice = Configuration::get('RC_F_PRICE');
        $fontMenu = Configuration::get('RC_F_MENU');

        $ffsupport='';

        if((Configuration::get('RC_LATIN_EXT') ==1) || (Configuration::get('RC_CYRILLIC') ==1)){
            $ffsupport.='&subset=';
        }

        if((Configuration::get('RC_LATIN_EXT')) ==1){
            $ffsupport.='latin,latin-ext';

        }
        if((Configuration::get('RC_LATIN_EXT') ==1) && (Configuration::get('RC_CYRILLIC') ==1)){
            $ffsupport.=',';
        }
        if((Configuration::get('RC_CYRILLIC')) ==1){
            $ffsupport.='cyrillic,cyrillic-ext';
        }

      $font_w=':400,500,600,700';
      $font_include='';

      $arr = array($fontHeadings, $fontButtons, $fontText, $fontPrice, $fontMenu);
      $filtered = array();

      foreach ($arr as $item) {
          if (!in_array($item, $filtered)) {
              $filtered[] = $item;
          }
      }

      $arr = $filtered;
      $sysFonts = $this->systemFonts;
      $arr = array_filter($arr, function($v) use ($sysFonts) { return !in_array($v, $sysFonts); });

      for($i = 0; $i < count($arr); ++$i) {
          $font = $arr[$i];
          $font = str_replace(' ', '+', $font);
          $font_include .="@import url('https://fonts.googleapis.com/css?family=".$font.$ffsupport.$font_w."'); ";
      }

          $css .= $font_include;







// ****************  Some Globals styles start

      if (Configuration::get('NC_LOADERS') == 0) {
      $css .= '.loader-overlay { display:none!important; }
      '; }

      if (Configuration::get('NC_LOADER_LOGOS') == 1) {
      $css .= '
      .logo_loader { display:none!important; }
      '; }
      if (Configuration::get('NC_LOADER_LOGOS') == 2) {
      $css .= '
      .logo_loader {
        position:fixed;
        top:50%;
        left:50%;
        transform: translate(-50%, -100%);
        max-width: 100vw;
       }
       .roy-loader .icon_loader {
         margin-top:40px;
       }
      '; }
      if (Configuration::get('NC_LOADER_LOGOS') == 3) {
      $css .= '
      .logo_loader {
        position:fixed;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        max-width: 100vw;
       }
      '; }

      if (Configuration::get('NC_LOADER_LOGOS') == 1) {
            if (Configuration::get('NC_LOGO_LOADER')) {
                  if (Shop::getContext() == Shop::CONTEXT_SHOP)
                  $adv_imgname = 'logo-loader'.'-'.(int)$this->context->shop->getContextShopID();
                  $css .= '
                  .loader-logo {
                  background-image: url(../upload/'.$adv_imgname.'.' . Configuration::get('NC_LOGO_LOADER') . '); }';
            }
      }
      if (Configuration::get('NC_LOADER_BG')) {
      $css .= '.roy-loader { background-color: ' . Configuration::get('NC_LOADER_BG') . ' }
      '; }
      if (Configuration::get('NC_LOADER_COLOR')) {
      $css .= '
      .roy-loader .icon_loader span {
        border-color: ' . Configuration::get('NC_LOADER_COLOR') . '; }
      '; }


      if (Configuration::get('NC_LOADER_LAYS') == "1") {
            $css .= '

            ';
      }

            $css .= '
              .bordered { border-color: ' . Configuration::get('RC_G_BORDER') . ' }
            ';



// *  HEADER STYLES


      if (Configuration::get('RC_HEADER_LAY') == "2") {
      $css .= '
      @media (min-width: 992px) {
        .mm_menus_ul {
          justify-content: flex-end;
        }
        #header .row.action > div.head_action ul:not(.dropdown-menu) {
          padding-left:30px;
        }
      }
      '; }
      if (Configuration::get('RC_HEADER_LAY') == "3") {
      $css .= '
      @media (min-width: 992px) {
        .mm_menus_ul {
          justify-content: flex-end;
        }
        #header .row.action > div.head_action ul:not(.dropdown-menu) {
          padding-left:30px;
        }
        #header .row.action #_desktop_logo {
          flex-direction:row;
          align-items:center;
        }
        #header .row.action #_desktop_logo > a {
          margin-right:22px;
        }
      }
      '; }
      if (Configuration::get('RC_HEADER_LAY') == "5") {
      $css .= '
        #header .row.action > div.head_action {
          flex-grow:1;
        }
      '; }
      if (Configuration::get('RC_HEADER_LAY') == "4") {
      $css .= '
        #header .row.action {
          position:relative;
          padding-top:70px;
          padding-bottom:70px;
        }
        #header .row.action .head_action {
          width:50%;
        }
        #header .row.action > .head_action:first-of-type {
          align-items:flex-start;
        }
        #header .row.action > .head_action:last-of-type {
          align-items:flex-end;
        }
        #header .row.action #_desktop_logo {
          position: absolute;
          top: 50%;
          left: 50%;
          padding:0;
          -moz-transform: translate3d(-50%, -50%, 0);
          -webkit-transform: translate3d(-50%, -50%, 0);
          transform: translate3d(-50%, -50%, 0);
        }
        .mm_menus_ul {
          justify-content:center;
        }
      '; }
      if (Configuration::get('RC_HEADER_LAY') == "6") {
      $css .= '
        #header .row.action {
          padding-top:70px;
          padding-bottom:70px;
        }
        #header .row.action .head_action {
          width:50%;
        }
        #header .row.action > .head_action:first-of-type {
          align-items:flex-start;
        }
        #header .row.action > .head_action:last-of-type {
          align-items:flex-end;
        }
        #header .row.action #_desktop_logo {
          position: absolute;
          top: 50%;
          left: 50%;
          padding:0;
          -moz-transform: translate3d(-50%, -50%, 0);
          -webkit-transform: translate3d(-50%, -50%, 0);
          transform: translate3d(-50%, -50%, 0);
        }
      '; }


      if ((Configuration::get('RC_HEADER_LAY') == "5" || Configuration::get('RC_HEADER_LAY') == "6") && Configuration::get('RC_CLICK_LAY_M') == "1") {
      $css .= '
        @media(min-width:992px) {
          #side_menu_wrap .mm_menus_li .mm_columns_ul, #side_menu_wrap .menu_list.mm_menus_li:hover .mm_columns_ul {
            padding:0;
          }
          #side_menu_wrap .ets_mm_megamenu.transition_default .mm_menus_li:hover .mm_columns_ul {
            -webkit-transform: translateY(20px);
            transform: translateY(20px);
          }
        }

      '; }



      if (Configuration::get('RC_HEADER_W') == "2") {
      $css .= '
      #header .header-top > .container, #header .header-nav > .container { max-width:100%; width:auto; padding:0 80px; }
      '; }
      if (Configuration::get('RC_HEADER_OPA') == "1") {
      $css .= '
      #header .row.action > div.head_action > ul > li:hover > div:not(.search4):not(.mob-select) { opacity:0.3; }
      #header .row.action > div.head_action > ul > li button.btn-unstyle {
          -webkit-transition: all .22s cubic-bezier(.07,.74,.56,.89);
          transition: all .22s cubic-bezier(.07,.74,.56,.89); }
      #header .row.action > div.head_action > ul > li:hover button.btn-unstyle { opacity:0.3; }
      '; }
      if (Configuration::get('NC_BW_ICONS')) {
      $css .= '
        #header .row.action > div.head_action > ul > li { margin-left:'. Configuration::get('NC_BW_ICONS') . 'px; }
      '; }
      if (Configuration::get('NC_BW_MENU')) {
      $css .= '
        #header .row.action .layout_layout1 .mm_menus_li { padding-left:'. Configuration::get('NC_BW_MENU') . 'px!important; padding-right:'. Configuration::get('NC_BW_MENU') . 'px!important; }
      '; }





      if (Configuration::get('NC_MOB_HEADER') == Configuration::get('NC_MAIN_BC')) {
        $css .= '
          .header-mobile { border-bottom: 2px solid ' . Configuration::get('RC_G_BORDER') . ' }
        ';
      }


            if (Configuration::get('RC_HEADER_LAY') !== "5" && Configuration::get('RC_HEADER_LAY') !== "6") {
            $css .= '
              @media(min-width:992px) and (max-width:1199px) {
                #header .header-top>.container {
                  width:100%;
                }
                #header .container .ets_mm_megamenu .container {
                  width:auto!important;
                }
                #header .row.action .layout_layout1 .mm_menus_li {
                  padding-left:4px!important;
                  padding-right:4px!important;
                }
              }
            '; }



      if (Configuration::get('RC_G_BG_CONTENT')) {
      $css .= 'body { background: ' . Configuration::get('RC_G_BG_CONTENT') . ' }
      '; }
      if (Configuration::get('RC_G_BORDER')) {
      $css .= 'hr, body#checkout section.checkout-step .step-title, #subcategories ul li .subcategory-image a, #blockcart-modal .divide-right, body#checkout section.checkout-step, .active_filters, .active_filters .filter-block, .product-features>dl.data-sheet dd.value, #module-smartblog-details #main .page-content ul.footer_links, .tags_block .block_content a, #tags_blog_block_left .block_content a, .sdstags-update .tags a, .page-my-account #content,  .cart-items .cart-item, .links a span.link-item, .card, .product-features>dl.data-sheet dt.name, .discover_qw, #authentication .logininstead { border-color: ' . Configuration::get('RC_G_BORDER') . ' }
       .product-info:before, .product-add-to-cart:before, #main .page-footer:before { background: ' . Configuration::get('RC_G_BORDER') . ' }
       #product_comments_block_tab button.usefulness_btn, #product_comments_block_tab div.comment {
         border-color: ' . Configuration::get('RC_G_BORDER') . '!important
       }
       @media (max-width: 991px) {
        #category #left-column #search_filters .facet, #category #left-column #search_filters .facet ul li {
            border-color: ' . Configuration::get('RC_G_BORDER') . ';
        } }
      '; }

      if (Configuration::get('RC_G_BODY_TEXT')) {
      $css .= 'body, p, #product_comments_block_tab button.usefulness_btn, .active_filters .filter-block .close, .products-sort-order .select-title, .products-sort-order .dropdown-menu { color: ' . Configuration::get('RC_G_BODY_TEXT') . ' }
      '; }
      if (Configuration::get('RC_G_BODY_COMMENT')) {
      $css .= '.text-muted, body#checkout section.checkout-step .delete-address, body#checkout section.checkout-step .edit-address, body#checkout section.checkout-step .address, .sdsarticleHeader .meta, .product-line-grid-right .cart-line-product-actions .remove-from-cart, .product-line-grid-right .product-price .remove-from-cart, .cart-grid-body .product-line-info.atts *, .sdsarticleHeader span, .sdsarticleHeader span a, .pagination .showing, .form-control-comment, #main .page-footer a i, .col-content-inside .comments_note .star_content .nb-comments, .fl { color: ' . Configuration::get('RC_G_BODY_COMMENT') . ' }
      '; }
      if (Configuration::get('RC_G_BODY_LINK')) {
      $css .= 'a, a:visited, .quickview button.close, .active_filters .filter-block, #main .input-group.bootstrap-touchspin .input-group-btn>.btn, .quickview .input-group.bootstrap-touchspin .input-group-btn>.btn { color: ' . Configuration::get('RC_G_BODY_LINK') . ' }
      body#checkout section.checkout-step .step-edit .edit svg * { stroke: ' . Configuration::get('RC_G_BODY_LINK') . '!important }
      .cart-grid-right .cart-summary a:not(.bright):after { background:' . Configuration::get('RC_G_BODY_LINK') . '}
      .underline {
        text-decoration: none!important;
        position: relative;
      }
      .underline:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -6px;
        margin: 0 auto;
        -webkit-transition: all .4s cubic-bezier(.36,.76,0,.88);
        transition: all .4s cubic-bezier(.36,.76,0,.88);
        width: 100%;
        height: 2px;
        background:' . Configuration::get('RC_G_BODY_LINK') . ';
      }
      '; }
      if (Configuration::get('RC_G_BODY_LINK_HOVER')) {
      $css .= 'a:hover, a:focus, .side-column a:hover, .myacc_left .links a:hover, #main h1:not(.active-filter-title) a i:before, #product .featured-products h2 a i:before, .products-section-title a i:before, h1.page-header a i:before, h2.page-header a i:before, h3.page-header a i:before, h4.page-header a i:before, h5.page-header a i:before, h6.page-header a i:before { color: ' . Configuration::get('RC_G_BODY_LINK_HOVER') . ' }
      .myacc_left .links a:hover i svg *, body#checkout section.checkout-step:hover .step-edit .edit svg * { stroke: ' . Configuration::get('RC_G_BODY_LINK_HOVER') . '!important }
      .cart-grid-right .cart-summary a:not(.bright):hover:after { background:' . Configuration::get('RC_G_BODY_LINK_HOVER') . '}
      .underline:hover:before {
        margin-right: 0;
        width: 0;
      }
      '; }

      if (Configuration::get('RC_LABEL')) {
      $css .= 'label, #blockcart-modal .modal-body p strong { color: ' . Configuration::get('RC_LABEL') . ' }
      '; }
      if (Configuration::get('RC_G_HEADER')) {
      $css .= '.h1, .h2, .h3, .h4, #product .featured-products h2 a, .products-section-title a, #product_comments_block_tab .comment_author_infos strong, h4.title_block, #main h1:not(.active-filter-title), #new_comment_form .product .product_desc .product_name, #new_comment_form .title, #product .tabs .nav-tabs .nav-link, #product .tabs .nav-tabs .nav-link:active, #product .featured-products h2, .products-section-title, h1.page-header, h2.page-header, h3.page-header, h4.page-header, h5.page-header, h6.page-header, #category #left-column #search_filters .facet .navbar-toggler i { color: ' . Configuration::get('RC_G_HEADER') . ' }
      .flickity-button-icon { fill: ' . Configuration::get('RC_G_HEADER') . '!important }
      .page-addresses .address, .page-addresses .address .address-footer, .tabs .nav-tabs .nav-link:hover, .tabs .nav-tabs .nav-link.active, .tabs .tab-pane .product-features .h6, .tabs .tab-pane label { border-color:' . Configuration::get('RC_G_HEADER') . ' }
      '; }


      if (Configuration::get('RC_CON_BRA') == "1") {
      $css .= '
      #roy_brands .flickity-prev-next-button { display:none }
      '; }
      if (Configuration::get('RC_CON_BRA') == "2") {
      $css .= '
      #roy_brands .flickity-prev-next-button { opacity:0; }
      #roy_brands:hover .flickity-prev-next-button { opacity:0.5; }
      #roy_brands:hover .flickity-prev-next-button:hover { opacity:1; }
      '; }

      $css .= '
      #roy_specials_col .flickity-prev-next-button {
        top: -' . Configuration::get('RC_SIDEBAR_TITLE_MARGIN') . 'px;
        transform: translateY(-' . Configuration::get('RC_FS_PAGE_SIDE') . 'px);
        width:32px;
        height:32px;
      }
      #roy_specials_col .flickity-prev-next-button.previous {
        left:auto;
        right:22px;
      }
      #roy_specials_col .flickity-prev-next-button.next {
        right:-10px;
      }
      ';

      if (Configuration::get('RC_SIDEBAR_TITLE_B') == "1") {
        $fulltop = Configuration::get('RC_SIDEBAR_TITLE_MARGIN') + Configuration::get('RC_SIDEBAR_TITLE_PADDING') + Configuration::get('RC_SIDEBAR_TITLE_BWIDTH') + 2;
        $css .= '
        #roy_specials_col .flickity-prev-next-button {
          top: -' . $fulltop . 'px;
        }
      '; }

      if (Configuration::get('RC_CON_SALE') == "1") {
      $css .= '
      #roy_specials_col .flickity-prev-next-button { display:none }
      '; }
      if (Configuration::get('RC_CON_SALE') == "2") {
      $css .= '
      #roy_specials_col .flickity-prev-next-button { opacity:0; }
      #roy_specials_col:hover .flickity-prev-next-button { opacity:0.5; }
      #roy_specials_col:hover .flickity-prev-next-button:hover { opacity:1; }
      '; }


      if (Configuration::get('RC_CON_PRO') == "1") {
      $css .= '
      @media(min-width:992px) {
        .featured-products .flickity-prev-next-button { display:none }
        #phblogrecentposts .flickity-prev-next-button { display:none }
      }
      '; }
      if (Configuration::get('RC_CON_PRO') == "2") {
      $css .= '
      @media(min-width:992px) {
        .featured-products .flickity-prev-next-button { opacity:0; }
        .featured-products:hover .flickity-prev-next-button { opacity:0.5; }
        .featured-products:hover .flickity-prev-next-button:hover { opacity:1; }
        #phblogrecentposts .flickity-prev-next-button { opacity:0; }
        #phblogrecentposts:hover .flickity-prev-next-button { opacity:0.5; }
        #phblogrecentposts:hover .flickity-prev-next-button:hover { opacity:1; }
      }
      '; }


      $css .= '
      .featured-products .flickity-prev-next-button {
        width:32px;
        height:32px;
      }
      @media(max-width:992px) {
        .featured-products .flickity-prev-next-button {
          opacity:1;
          top: -4rem;
          transform: translateY(-' . Configuration::get('RC_FS_HOME_TIT') . 'px);
        }
        .featured-products .flickity-prev-next-button.previous {
          left:18px;
        }
        .featured-products .flickity-prev-next-button.next {
          right:18px;
        }
        #index #main h2.products-section-title, .products-section-title {
          padding-left:30px;
          padding-right:30px;
        }
      }
      ';

      if (Configuration::get('RC_CON_POS') == "3") {
          $css .= '
          @media(min-width:992px) {
            .featured-products .flickity-prev-next-button, #phblogrecentposts .flickity-prev-next-button {
              top: -4rem;
              transform: translateY(-' . Configuration::get('RC_FS_HOME_TIT') . 'px);
            }
            .featured-products .flickity-prev-next-button.previous, #phblogrecentposts .flickity-prev-next-button.previous {
              left:auto;
              right:50px;
            }
            .featured-products .flickity-prev-next-button.next, #phblogrecentposts .flickity-prev-next-button.next {
              right:18px;
            }
          }
          ';
      }

      if (Configuration::get('RC_CON_POS') == "2") {
          $css .= '
          @media(min-width:992px) {
            .featured-products .flickity-prev-next-button {
              top: -4rem;
              transform: translateY(-' . Configuration::get('RC_FS_HOME_TIT') . 'px);
            }
            .featured-products .flickity-prev-next-button.previous {
              left:18px;
            }
            .featured-products .flickity-prev-next-button.next {
              right:18px;
            }
          }
          ';
      }




      if (Configuration::get('RC_G_HB')) {
      $css .= '#ui_tip { background: ' . Configuration::get('RC_G_HB') . ' }
      ' ; }
      if (Configuration::get('RC_G_HC')) {
      $css .= '#ui_tip { color: ' . Configuration::get('RC_G_HC') . ' }'; }

      if (Configuration::get('RC_G_NORMAL_BORDER')) {
      $css .= '
      .table-bordered, .table-bordered th, .table-bordered td { border-color: ' . Configuration::get('RC_G_NORMAL_BORDER') . ' }

      .page-order-detail .box {
        border-bottom:2px solid ' . Configuration::get('RC_G_EXTRA_BORDER') . '
      }
      .page-order-detail .myacc_content > section.box:last-of-type {
        border:none;
      }
      '; }
      if (Configuration::get('RC_G_EXTRA_BORDER')) {
      $css .= '
      #history .table-bordered, #discount .table-bordered, #discount .table-bordered th, #discount .table-bordered td { border-color: ' . Configuration::get('RC_G_EXTRA_BORDER') . ' }
      '; }

      if (Configuration::get('RC_FANCY_NBG')) {
      $css .= '#product-modal .modal-content .modal-body .image-caption { background: ' . Configuration::get('RC_FANCY_NBG') . ' }'; }
      if (Configuration::get('RC_FANCY_NC')) {
      $css .= '#product-modal-name { color: ' . Configuration::get('RC_FANCY_NC') . ' }'; }




      $css .= '
      #main .page-content a:not(.btn):not(.noeffect):not(.color):before, #footer:not(.block-social) a:before {
        background: ' . Configuration::get('RC_G_LINK_EFFECTC') . ';
      } ';

          if (Configuration::get('RC_G_LINK_EFFECT') == "1") {
              $css .= '
              #main .page-content a:not(.btn):not(.noeffect):not(.color):before, #footer div:not(.block-social) a:before {
                left:0;
                height:2px;
                bottom:-4px;
                width: 0;
              }
              #main .page-content a:not(.btn):not(.noeffect):not(.color):hover:before, #footer div:not(.block-social) a:hover:before {
                width: 100%;
                opacity:1;
              }
            '; }
          if (Configuration::get('RC_G_LINK_EFFECT') == "2") {
              $css .= '
              #main .page-content a:not(.btn):not(.noeffect):not(.color):before, #footer div:not(.block-social) a:before {
                left:-5%;
                height:2px;
                top:50%;
                margin-top:-1px;
                width: 0;
              }
              #main .page-content a:not(.btn):not(.noeffect):not(.color):hover:before, #footer div:not(.block-social) a:hover:before {
                width: 110%;
                opacity:1;
              }
            '; }
          if (Configuration::get('RC_G_LINK_EFFECT') == "3") {
              $css .= '
              #main .page-content a:not(.btn):not(.noeffect):not(.color):before, #footer div:not(.block-social) a:before {
                left:-8px;
                height:70%;
                top:40%;
                width: 0;
                z-index:-1;
              }
              #main .page-content a:not(.btn):not(.noeffect):not(.color):hover:before, #footer div:not(.block-social) a:hover:before {
                width: calc(100% + 4px);
                opacity:1;
              }
            '; }
          if (Configuration::get('RC_G_LINK_EFFECT') == "4") {
              $css .= '
              #main .page-content a:not(.btn):not(.noeffect):not(.color):hover, #footer div:not(.block-social) a:hover {
                opacity:0.4;
              }
            '; }


            if (Configuration::get('RC_G_FORMS') == "2") {
              $css .= '
              .form-group.row {
                margin-bottom:30px;
              }
            '; }

// * Header styles


// STICKY header
  $css .= '
    #header.sticky {
      box-shadow: 0 6px 40px 0px rgba(0, 0, 0, 0.1);
    }
    #header.sticky.normal .row.action {
      padding:12px 15px;
    }
    #header.sticky .logo {
      max-height:40px;
    }
    #header.sticky .head_logo {
      height: 40px;
      max-height: 40px;
    }
  ';


  if (Configuration::get('NC_HEADER_TRANSWITCH') == "1") {

      $css .= '
      #header:not(.normal) { background:none }
      #header:not(.normal) .logo-normal { display:none; }

      #header:not(.normal) .row.action > div svg * {
        stroke: ' . Configuration::get('RC_TRANS_ICONS') . '!important;
      }
      #header:not(.normal) .row.action .blockcart a i {
        background-color: ' . Configuration::get('RC_TRANS_ICONS') . ';
      }
      #header:not(.normal) .row.action > div span.text, #header:not(.normal) .row.action > div span.acc_name {
        color: ' . Configuration::get('RC_TRANS_ICONS') . ';
      }

      #header:not(.normal) .row.action .blockcart a span.cart-products-count {
        background:' . Configuration::get('RC_TRANS_QUANBG') . ';
        color:' . Configuration::get('RC_TRANS_QUAN') . ';
      }
      #header:not(.normal) .row.action > div .acc_top span.acc_check svg * {
        stroke: ' . Configuration::get('RC_TRANS_LOGGED') . '!important;
      }

      #header:not(.normal) .layout_layout1:not(.ybc_vertical_menu) .mm_menus_li > a {
        color: ' . Configuration::get('RC_TRANS_LINK') . '!important;
      }
      #header:not(.normal) .layout_layout1 .mm_menus_li:hover > a {
        color: ' . Configuration::get('RC_TRANS_LINKH') . '!important;
      }
      #header:not(.normal) .layout_layout1 .mm_menus_li > a > span:before {
        background: ' . Configuration::get('RC_TRANS_EFFECT') . ';
      }
      ';

      if (Configuration::get('NC_CLLS') == "2") {

        $css .= '
          .language_selector span.expand-more {
            text-transform:uppercase;
          }
        ';

      }



      if (Configuration::get('RC_HEADER_NS') == "1") {

      $css .= '
      #header .header-nav {
        background: none;
        border:none;
        color: ' . Configuration::get('RC_TRANS_LINK') . ';
      }
      #header .header-nav a, #header .header-nav span, #header .header-nav .contact-link span { color: ' . Configuration::get('RC_TRANS_LINK') . ' ; }
      @media (max-width: 991px) {
        #header .header-nav .left-nav .mob-select select {
          color: ' . Configuration::get('RC_TRANS_LINK') . ' ;
      } }
      #header .header-nav a:hover, #header .header-nav span:hover { color: ' . Configuration::get('RC_TRANS_LINKH') . ' ; }

      ';

            if (Configuration::get('RC_HEADER_NBS') == "1") {
                  $css .= '
                    #header .header-nav:before {
                      position:absolute;
                      bottom:0;
                      height:2px;
                      width:calc(100% - 160px);
                      left:80px;
                      content:"";
                      display:block;
                      background: ' . Configuration::get('RC_TRANS_LINK') . ' ;
                      opacity:0.28;
                    }
                  ';
            }
      }



      if (Configuration::get('RC_SEARCH_LAY') == "4") {
        $css .= '
          #header:not(.normal) .header-top .search-widget form input[type="text"] {
            color: ' . Configuration::get('RC_TRANS_ICONS') . ';
            border-color:' . Configuration::get('RC_TRANS_SBORDER') . ';
          }
          #header:not(.normal) .header-top .search-widget form input[type="text"]:focus {
            color: ' . Configuration::get('RC_TRANS_ICONS') . ';
            border-color:' . Configuration::get('RC_TRANS_SBORDER') . '!important;
          }
          #header:not(.normal) .header-top .search-widget form input[type="text"]::-webkit-input-placeholder {
            color: ' . Configuration::get('RC_TRANS_ICONS') . '!important;
            opacity:1;
          }
          #header:not(.normal) .header-top .search-widget form input[type="text"]::-moz-placeholder {
            color: ' . Configuration::get('RC_TRANS_ICONS') . '!important;
            opacity:1;
          }
          #header:not(.normal) .header-top .search-widget form input[type="text"]:-ms-input-placeholder {
            color: ' . Configuration::get('RC_TRANS_ICONS') . '!important;
            opacity:1;
          }
          #header:not(.normal) .header-top .search-widget form input[type="text"]:-moz-placeholder {
            color: ' . Configuration::get('RC_TRANS_ICONS') . '!important;
            opacity:1;
          }
          ';
        }
    }


      $css .= '
      #header.normal { background: ' . Configuration::get('RC_H_BG') . '; }
      #header.normal .logo-trans { display:none; }

      #header.normal .row.action > div svg * {
        stroke: ' . Configuration::get('RC_NORM_ICONS') . '!important;
      }
      #header.normal .row.action .blockcart a i {
        background-color: ' . Configuration::get('RC_NORM_ICONS') . ';
      }
      #header.normal .row.action > div span.text, #header .row.action > div span.acc_name {
        color: ' . Configuration::get('RC_NORM_ICONS') . ';
      }

      #header.normal .row.action .blockcart a span.cart-products-count {
        background:' . Configuration::get('RC_NORM_QUANBG') . ';
        color:' . Configuration::get('RC_NORM_QUAN') . ';
      }
      #header.normal .row.action > div .acc_top span.acc_check svg * {
        stroke: ' . Configuration::get('RC_NORM_LOGGED') . '!important;
      }

      #header.normal .layout_layout1:not(.ybc_vertical_menu) .mm_menus_li > a {
        color: ' . Configuration::get('RC_NORM_LINK') . '!important;
      }
      #header.normal .layout_layout1 .mm_menus_li:hover > a {
        color: ' . Configuration::get('RC_NORM_LINKH') . '!important;
      }
      #header.normal .layout_layout1 .mm_menus_li > a > span:before {
        background: ' . Configuration::get('RC_NORM_EFFECT') . ';
      }
      ';

      if (Configuration::get('RC_SEARCH_LAY') == "4") {
        $css .= '
          #header.normal .header-top .search-widget form input[type="text"] {
            color: ' . Configuration::get('RC_NORM_ICONS') . ';
            border-color:' . Configuration::get('RC_NORM_SBORDER') . ';
          }
          #header.normal .header-top .search-widget form input[type="text"]:focus {
            color: ' . Configuration::get('RC_NORM_ICONS') . ';
            border-color:' . Configuration::get('RC_NORM_SBORDER') . '!important;
          }
          #header.normal .header-top .search-widget form input[type="text"]::-webkit-input-placeholder {
            color: ' . Configuration::get('RC_NORM_ICONS') . '!important;
            opacity:1;
          }
          #header.normal .header-top .search-widget form input[type="text"]::-moz-placeholder {
            color: ' . Configuration::get('RC_NORM_ICONS') . '!important;
            opacity:1;
          }
          #header.normal .header-top .search-widget form input[type="text"]:-ms-input-placeholder {
            color: ' . Configuration::get('RC_NORM_ICONS') . '!important;
            opacity:1;
          }
          #header.normal .header-top .search-widget form input[type="text"]:-moz-placeholder {
            color: ' . Configuration::get('RC_NORM_ICONS') . '!important;
            opacity:1;
          }
          ';
        }

          if (Configuration::get('RC_HEADER_NS') == "1" && Configuration::get('NC_HEADER_TRANSWITCH') == "2") {

            $css .= '
            #header .header-nav {
              background: ' . Configuration::get('RC_HEADER_NBG') . ';
              color: ' . Configuration::get('RC_HEADER_NT') . ';
            }
            #header .header-nav p {
              color: ' . Configuration::get('RC_HEADER_NT') . ';
            }
            #header .header-nav a, #header .header-nav span, #header .header-nav .contact-link span { color: ' . Configuration::get('RC_HEADER_NL') . ' ; }
            @media (max-width: 991px) {
              #header .header-nav .left-nav .mob-select select {
                color: ' . Configuration::get('RC_HEADER_NL') . ' ;
            } }
            #header .header-nav a:hover, #header .header-nav span:hover { color: ' . Configuration::get('RC_HEADER_NLH') . ' ; }
            ';

                    if (Configuration::get('RC_HEADER_NBS') == "1") {
                          $css .= '
                            #header .header-nav:before {
                              position:absolute;
                              bottom:0;
                              height:2px;
                              width:100%;
                              left:0;
                              content:"";
                              display:block;
                              background: ' . Configuration::get('RC_HEADER_NB') . ' ;
                            }
                          ';
                    }
      }


      if (Configuration::get('RC_HEADER_NS') == "1") {

        if (Configuration::get('NC_TOPPANEL_LAYS') == "1") {
        $css .= '
          #header .header-nav .roycontent {
            justify-content:center;
          }
        '; }
        if (Configuration::get('NC_TOPPANEL_LAYS') == "2") {
        $css .= '
          #header .header-nav .curlan {
            justify-content:flex-start;
          }
          #header .header-nav .roycontent {
            justify-content:flex-end;
          }
          #header .header-nav .curlan > * {
            margin-right:24px;
          }
        '; }
        if (Configuration::get('NC_TOPPANEL_LAYS') == "3") {
        $css .= '
          #header .header-nav .curlan {
            justify-content:flex-end;
            float:right;
          }
          #header .header-nav .roycontent {
            justify-content:flex-start;
          }
          #header .header-nav .curlan > * {
            margin-left:24px;
          }
          #header .header-nav .curlan ul.dropdown-menu {
            left:auto;
            right:0;
          }
        '; }

      }



// SEARCH styles

        if (Configuration::get('RC_SEARCH_LAY') == "1") {
            $css .= '
              .header-top .search-widget form input[type=text] { display:none }
              .header-top .search-widget form button[type=submit] {
                display: flex;
                align-items: center;
                padding: 0 4px 0 0;
              }
            ';
        }
        if (Configuration::get('RC_SEARCH_LAY') == "2") {
            $css .= '
              .header-top .search-widget form input[type=text] { display:none }
              .header-top .search-widget form button[type=submit] {
                display: flex;
                align-items: center;
                padding: 0 4px 0 0;
              }
              .header-top .search-widget form button[type=submit] span {
                display:inline-block!important;
                margin-left:9px;
              }
            ';
        }
        if (Configuration::get('RC_SEARCH_LAY') == "3") {
            $css .= '
              .header-top .search-widget form input[type=text], .header-top .search-widget form button[type=submit] i {
                display:none
              }
              .header-top .search-widget form button[type=submit] span {
                display:inline-block!important;
              }
            ';
        }
        if (Configuration::get('RC_SEARCH_LAY') == "4") {
            $css .= '
              .header-top .search-widget form input[type=text] {
                border-width:2px;
                border-style:solid;
                border-radius:' . Configuration::get('RC_SEARCH_BR') . 'px!important;
              }
              .header-top .search-widget form button[type=submit] {
                position:absolute;
                display:flex;
                align-items:center;
                justify-content:center;
                right:10px;
                top:50%;
                transform:translateY(-50%);
              }
            ';
        }



// Cart styles start

        if (Configuration::get('RC_CART_LAY') == "1") {
            $css .= '
            #header .row.action .blockcart a i {
              display:inline-block;
            }
        '; }
        if (Configuration::get('RC_CART_LAY') == "2") {
            $css .= '
            #header .row.action .blockcart a i {
              display:inline-block;
            }
            #header .row.action .blockcart a span.text {
              display:inline-block!important;
              margin-left:9px;
            }
        '; }
        if (Configuration::get('RC_CART_LAY') == "3") {
            $css .= '
            #header .row.action .blockcart a i {
              display:none
            }
            #header .row.action .blockcart a span.text {
              display:inline-block!important;
            }
        '; }
            $css .= '
            #header .row.action .blockcart a span.cart-products-count {
            }
        ';

            // new cart icons
            if (Configuration::get('RC_CART_ICON')) {
              $css .= '
                #header .row.action .blockcart a i, .shopping-cart.empty i {
                  -webkit-mask-image: url(../images/rt_' . Configuration::get('RC_CART_ICON') . '.svg);
                  mask-image: url(../images/rt_' . Configuration::get('RC_CART_ICON') . '.svg);
                  =webkit-mask-size:cover;
                  mask-size:cover;
                } '; }



// ACC styles start

        if (Configuration::get('RC_ACC_LAY') == "1") {
            $css .= '
            #header .row.action .acc_top span.text {
              display:none
            }
        '; }
        if (Configuration::get('RC_ACC_LAY') == "2") {
            $css .= '
            #header .row.action .acc_top i {
              display:inline-block;
              margin-right:9px;
            }
            #header .row.action .acc_top span.text {
              display:inline-block;
            }
        '; }
        if (Configuration::get('RC_ACC_LAY') == "3") {
            $css .= '
            #header .row.action .acc_top i {
              display:none
            }
            #header .row.action .acc_top span.text {
              display:inline-block;
            }
            .acc_check {
              left:auto!important;
              right:-16px;
            }
        '; }



//  MENU styles start

      if (Configuration::get('NC_M_ICON') == "menu1" || Configuration::get('NC_M_ICON') == "menu2" || Configuration::get('NC_M_ICON') == "menu3") {
      $css .= '
        .menu_top i span:not(.text) {
          height:2px;
          border-radius:3px;
        }
      ';
      if (Configuration::get('NC_HEADER_TRANSWITCH') == "1") {
        $css .= '
          .menu_top i span:not(.text) {
            background:' . Configuration::get('RC_TRANS_ICONS') . ';
          }
        ';
      }
      if (Configuration::get('NC_HEADER_TRANSWITCH') == "2") {
        $css .= '
          .menu_top i span:not(.text) {
            background:' . Configuration::get('RC_NORM_ICONS') . ';
          }
        ';
      }
    }
      if (Configuration::get('NC_M_ICON') == "menu4" || Configuration::get('NC_M_ICON') == "menu5") {
      $css .= '
        .menu_top i span:not(.text) {
          height:6px;
          border-width:2px;
          border-style:solid;
          border-radius:6px;
        }
      ';
      if (Configuration::get('NC_HEADER_TRANSWITCH') == "1") {
        $css .= '
          .menu_top i span:not(.text) {
            border-color:' . Configuration::get('RC_TRANS_ICONS') . ';
          }
        ';
      }
      if (Configuration::get('NC_HEADER_TRANSWITCH') == "2") {
        $css .= '
          .menu_top i span:not(.text) {
            border-color:' . Configuration::get('RC_NORM_ICONS') . ';
          }
        ';
      }
    }

      if (Configuration::get('NC_M_ICON') == "menu1") {
        $css .= '
          .menu_top i span:not(.text) {
            left:0;
              width:100%;
          }
          .menu_top i span:nth-child(1) {
            top:0;
          }
          .menu_top i span:nth-child(2) {
            top:7px;
          }
          .menu_top i span:nth-child(3) {
            bottom:0;
          }
          .menu_top i span:nth-child(4) {
            opacity:0;
            top:-7px;
          }

          .menu_top:hover i span:nth-child(1) {
            top:7px;
          }
          .menu_top:hover i span:nth-child(2) {
            top:14px;
            width:90%;
            left:10%;
          }
          .menu_top:hover i span:nth-child(3) {
            bottom:-7px;
            opacity:0;
          }
          .menu_top:hover i span:nth-child(4) {
            opacity:1;
            top:0;
          }
        '; }
        if (Configuration::get('NC_M_ICON') == "menu2") {
          $css .= '
            .menu_top i span:not(.text) {
              right:0;
            }
            .menu_top i span:nth-child(1) {
              width:80%;
              top:0;
            }
            .menu_top i span:nth-child(2) {
              width:90%;
              right:10%;
              top:7px;
            }
            .menu_top i span:nth-child(3) {
              width:50%;
              bottom:0;
            }

            .menu_top:hover i span:nth-child(1) {
              width:45%;
              right:50%;
            }
            .menu_top:hover i span:nth-child(2) {
              width:65%;
              right:-5%;
            }
            .menu_top:hover i span:nth-child(3) {
              width:60%;
              right:35%;
            }
          '; }
      if (Configuration::get('NC_M_ICON') == "menu3") {
        $css .= '
          .menu_top i span:not(.text) {
            left:0;
          }
          .menu_top i span:nth-child(1) {
            width:80%;
            top:0;
          }
          .menu_top i span:nth-child(2) {
            width:90%;
            left:10%;
            top:7px;
          }
          .menu_top i span:nth-child(3) {
            width:50%;
            bottom:0;
          }

          .menu_top:hover i span:nth-child(1) {
            width:45%;
            left:50%;
          }
          .menu_top:hover i span:nth-child(2) {
            width:65%;
            left:-5%;
          }
          .menu_top:hover i span:nth-child(3) {
            width:60%;
            left:35%;
          }
        '; }
      if (Configuration::get('NC_M_ICON') == "menu4") {
        $css .= '
          .menu_top i span:nth-child(1) {
            width:100%;
            top:2px;
            left:0;
          }
          .menu_top i span:nth-child(2) {
            width:80%;
            top:11px;
            right:20%;
          }
          .menu_top:hover i span:nth-child(1) {
            width:25%;
            right:40%;
            top:6px;
          }
          .menu_top:hover i span:nth-child(2) {
            width:25%;
            left:70%;
            top:6px;
          }
        '; }
      if (Configuration::get('NC_M_ICON') == "menu5") {
        $css .= '
          .menu_top i span:nth-child(1) {
            width:100%;
            top:2px;
            right:0;
          }
          .menu_top i span:nth-child(2) {
            width:80%;
            top:11px;
            left:20%;
          }
          .menu_top:hover i span:nth-child(1) {
            width:25%;
            right:40%;
            top:6px;
          }
          .menu_top:hover i span:nth-child(2) {
            width:25%;
            left:70%;
            top:6px;
          }
        '; }

        if (Configuration::get('NC_M_LAYOUT_S') == "1") {
            $css .= '
            #header .row.action .menu_top span.text {
              display:none
            }
            #header .menu_top i {
              margin-right:10px;
            }
        '; }
        if (Configuration::get('NC_M_LAYOUT_S') == "2") {
            $css .= '
            #header .row.action .menu_top i {
              margin-right:10px;
            }
            #header .row.action .menu_top span.text {
              display:inline-block;
              margin-right:3px;
            }
        '; }
        if (Configuration::get('NC_M_LAYOUT_S') == "3") {
            $css .= '
            #header .row.action .menu_top i {
              display:none
            }
            #header .row.action .menu_top span.text {
              display:inline-block;
            }
        '; }


      if (Configuration::get('NC_M_LAYOUT_S') == "1") {
        $css .= '
          .menu_top div {
            height:30px;
          }
          .menu_top div {
            height:30px;
          }
        '; }


    if (Configuration::get('NC_M_UNDER_S') == "1") {
        $css .= '
        #header .layout_layout1 .mm_menus_li > a > span:before {
          left:0;
          height:2px;
          bottom:-4px;
          width: 0;
        }
        #header .layout_layout1 .mm_menus_li > a:hover > span:before {
          width: 100%;
          opacity:1;
        }
      '; }
    if (Configuration::get('NC_M_UNDER_S') == "2") {
        $css .= '
        #header .layout_layout1 .mm_menus_li > a > span:before {
          left:-5%;
          height:2px;
          top:50%;
          width: 0;
        }
        #header .layout_layout1 .mm_menus_li > a:hover > span:before {
          width: 110%;
          opacity:1;
        }
      '; }
    if (Configuration::get('NC_M_UNDER_S') == "3") {
        $css .= '
        #header .layout_layout1 .mm_menus_li > a > span:before {
          left:-8px;
          height:70%;
          top:40%;
          width: 0;
          z-index:-1;
        }
        #header .layout_layout1 .mm_menus_li > a:hover > span:before {
          width: calc(100% + 4px);
          opacity:1;
        }
      '; }
    if (Configuration::get('NC_M_UNDER_S') == "4") {
        $css .= '
        #header .layout_layout1 .mm_menus_li > a:hover {
          opacity:0.6;
        }
      '; }


    if (Configuration::get('NC_M_BR_S')) {
        $css .= '
          .ets_mm_megamenu, .ets_mm_megamenu .mm_columns_ul, .ets_mm_block_content ul li ul { border-radius: ' . Configuration::get('NC_M_BR_S') . 'px!important }
        '; }
    if (Configuration::get('NC_M_BR_S') == "0") {
        $css .= '
          .ets_mm_megamenu, .ets_mm_megamenu .mm_columns_ul, .ets_mm_block_content ul li ul { border-radius: 0px!important }
        '; }


    if (Configuration::get('NC_M_OVERRIDE_S') == "2") {

      // Sub
          $css .= '
          @media(min-width:992px) {
          .layout_layout1.ets_mm_megamenu .mm_columns_ul, .ets_mm_block_content ul li ul, ul.dropdown-menu {
            background: ' . Configuration::get('RC_M_POPUP_LBG') . '!important;
            border-color: ' . Configuration::get('RC_M_POPUP_LBORDER') . '!important; }
            .ets_mm_block_content { color: ' . Configuration::get('RC_M_POPUP_LCHEVRON') . '!important }
            .ets_mm_block > h4 { border-color:' . Configuration::get('RC_M_POPUP_LBORDER') . '!important; }
            #header .layout_layout1 .ets_mm_block_content a, .ets_mm_block > h4, .ets_mm_block > h4 > a { color: ' . Configuration::get('RC_M_POPUP_LLINK') . '!important }
            #header .layout_layout1 .mm_block_type_html .ets_mm_block_content a:hover, #header .layout_layout1 .mm_columns_ul .mm_block_type_product .product-title > a:hover, #header .layout_layout1 li > a:hover { color: ' . Configuration::get('RC_M_POPUP_LLINK_HOVER') . '!important }
          }
          ';
    }


            if (Configuration::get('RC_CLICK_LAY_S') == "1") {
                $css .= '
                .side_menu .search-widget form input[type=text] {
                  font-size:20px;
                }
                    .side_menu .search-widget form button[type=submit] i,
                    .side_menu .search-widget form button[type=submit] svg {
                      width:26px!important;
                      height:26px!important;
                    }
            '; }
            if (Configuration::get('RC_CLICK_LAY_S') == "2") {
                $css .= '
                .side_menu .search_products_roy ul {
                  flex-wrap:nowrap!important;
                }
                .side_menu .search-widget form input[type=text] {
                  font-size:24px;
                  font-weight:500;
                }
                .side_menu .search_tags_roy {
                  margin-top:62px;
                }
                    .side_menu .search-widget form button[type=submit] i,
                    .side_menu .search-widget form button[type=submit] svg {
                      width:30px!important;
                      height:30px!important;
                    }
            '; }

    // ONCLICK content

    $css .= '
    .side_menu {
      background:' . Configuration::get('NC_SIDE_BG') . ';
      color:' . Configuration::get('NC_SIDE_TEXT') . ';
    }
    .side_menu.side_lay1 .ui-widget-content {
      background:' . Configuration::get('NC_SIDE_BG') . '!important;
    }

    .side_menu .search-widget form {
      position:relative;
    }
    .side_menu .search-widget form:before {
      content:"";
      width:100%;
      height:100%;
      position:absolute;
      top:0;
      left:0;
      border-bottom:2px solid ' . Configuration::get('NC_SIDE_TITLE') . ';
      opacity:0.2;
      z-index: -1;
    }
    .side_menu .search-widget form input[type=text] {
      color:' . Configuration::get('NC_SIDE_TITLE') . ';
    }
    .side_menu .search-widget form input[type=text]:focus {
      box-shadow:none!important;
    }

      .side_menu .search-widget form input[type=text]::-webkit-input-placeholder {
        color: ' . Configuration::get('NC_SIDE_TITLE') . '!important;
        opacity:1;
      }
      .side_menu .search-widget form input[type=text]::-moz-placeholder {
        color: ' . Configuration::get('NC_SIDE_TITLE') . '!important;
        opacity:1;
      }
      .side_menu .search-widget form input[type=text]:-moz-placeholder {
        color: ' . Configuration::get('NC_SIDE_TITLE') . '!important;
        opacity:1;
      }
      .side_menu .search-widget form input[type=text]:active::-webkit-input-placeholder{
        color: ' . Configuration::get('NC_SIDE_TITLE') . '!important;
        opacity:1;
      }
      .side_menu .search-widget form input[type=text]:active::-moz-placeholder {
        color: ' . Configuration::get('NC_SIDE_TITLE') . '!important;
        opacity:1;
      }
      .side_menu .search-widget form input[type=text]:active:-moz-placeholder {
        color: ' . Configuration::get('NC_SIDE_TITLE') . '!important;
        opacity:1;
      }

    .side_menu .search-widget button[type=submit] i svg * {
      stroke:' . Configuration::get('NC_SIDE_TITLE') . '!important;
    }


    .side_menu .mob-select button {
      color: ' . Configuration::get('NC_SIDE_TITLE') . ';
      opacity:0.5;
      -webkit-transition: all .22s cubic-bezier(.07,.74,.56,.89);
      transition: all .22s cubic-bezier(.07,.74,.56,.89);
    }
    .side_menu .mob-select:hover button {
      opacity:1;
    }


    .side_menu .cart-prods li .product-quantity, .side_menu .cart-prods li .remove-from-cart {
      background:' . Configuration::get('NC_SIDE_BG') . ';
    }
    .side_menu p, .side_menu #side_acc_wrap .acc_ul li.name a, .side_menu #side_acc_wrap .acc_ul li.logout a {
      color:' . Configuration::get('NC_SIDE_TEXT') . ';
    }
    .side_menu .cart-total *, .side_menu .cart-summary-line .value, .side_menu .cart-prods li .product-atts, .side_menu .cart-prods li .product-price {
      color:' . Configuration::get('NC_SIDE_TITLE') . ';
    }
    .side_menu .cart-total {
      border-top:3px solid ' . Configuration::get('NC_SIDE_B') . ';
    }
    .side_menu .cart-prods li .product-atts > p > span {
      opacity:0.5;
      margin-top: 6px;
      display: inline-block;
    }
    .side_menu .shopping-cart.empty i {
      background-color:' . Configuration::get('NC_SIDE_TITLE') . ';
      opacity:0.2;
    }
    .side_menu .shopping-cart.empty svg * {
      stroke:' . Configuration::get('NC_SIDE_TITLE') . '!important;
    }
    .side_menu .cart-prods li .remove-from-cart i svg * {
      stroke:' . Configuration::get('NC_SIDE_TITLE') . '!important;
    }
    .side_menu .close_cross i svg * {
      stroke:' . Configuration::get('NC_SIDE_TITLE') . '!important;
    }

    .side_menu #side_menu_wrap .menu_selectors .mob-select select, .side_menu a:not(.btn), .side_menu .search_tags_roy ul li a, .side_menu .cart-prods li:hover .product-price, .side_menu .cart-prods li .product-name, .side_menu .side_title, .side_menu form#contactable-contactForm p.contactable-header {
      color:' . Configuration::get('NC_SIDE_TITLE') . ';
    }
    .side_menu #side_acc_wrap .acc_ul>:not(.acc_text_create):not(.acc_text_login) i svg * {
      stroke:' . Configuration::get('NC_SIDE_TITLE') . '!important;
    }


    .side_menu .ets_mm_megamenu li.menu_home a:after {
        background-color: ' . Configuration::get('NC_SIDE_TITLE') . '!important;
    }
    .side_menu .arrow:before {
      border-color:' . Configuration::get('NC_SIDE_TITLE') . '!important;
    }
    .side-menu .ets_mm_block > h4, .side_menu #side_acc_wrap .acc_ul li.name, .side_menu #side_acc_wrap .acc_ul li.logout, .side_menu #side_menu_wrap .menu_selectors {
      border-color:' . Configuration::get('NC_SIDE_B') . '!important;
    }
    .side_menu .layout_layout1 .mm_menus_li, .side_menu .layout_layout1 .mm_menus_li:hover > a, .side_menu .layout_layout1.ets_mm_megamenu .mm_columns_ul, .side_menu .ets_mm_block_content ul li ul {
      background:none!important;
      border:none!important;
    }

    .side_menu #side_acc_wrap .acc_ul > .btn, .side_menu .cart-checkout .btn,
    .side_menu #side_acc_wrap .acc_ul > .btn:hover, .side_menu .cart-checkout .btn:hover,
    .side_menu #side_acc_wrap .acc_ul > .btn:active:hover, .side_menu .cart-checkout .btn:active:hover {
      background:' . Configuration::get('NC_SIDE_BTNBG') . ';
      border-color:' . Configuration::get('NC_SIDE_BTNB') . ';
      color:' . Configuration::get('NC_SIDE_BTN') . ';
    }
    .side_menu #side_acc_wrap .acc_ul > .btn:hover, .side_menu .cart-checkout .btn:hover {
      opacity:0.6;
    }

    ';



// Mobile

      if (Configuration::get('NC_MOB_HEADER')) {
            $css .= '
            .header-mobile { background: ' . Configuration::get('NC_MOB_HEADER') . ' }
            '; }
      if (Configuration::get('NC_MOB_MENU')) {
            $css .= '
            .header-mobile i svg * { stroke: ' . Configuration::get('NC_MOB_MENU') . '!important }
            .header-mobile .menu_top i span:not(.text) { border-color: ' . Configuration::get('NC_MOB_MENU') . '!important }
            .header-mobile .cart-products-count {
              background: ' . Configuration::get('NC_MOB_MENU') . '; color: ' . Configuration::get('NC_MOB_HEADER') . ';
              border-radius:50%;
              height:30px;
              width:30px;
              display:flex;
              align-items:center;
              justify-content:center;
              margin-left:4px;
              line-height: 15px;
            }


            .side-menu .ets_mm_megamenu ul {
              color:' . Configuration::get('NC_SIDE_TEXT') . '!important;
            }
            .side-menu .ets_mm_megamenu a, .side-menu .ets_mm_megamenu h4 {
              color:' . Configuration::get('NC_SIDE_TITLE') . '!important;
            }

            '; }


        if (Configuration::get('NC_MOB_CAT') =="2") {
            $css .= '
                  @media (max-width:574px) {
                    #main #products #js-product-list .product-item {
                        width:50%;
                        /*flex-grow:1;*/
                        padding:0 10px;
                        margin:0;
                    }
                    #main #products #js-product-list .product-item .comments_note,
                    #main #products #js-product-list .product-item .countcontainer {
                        display:none;
                    }
                    #main #products #js-product-list .thumbnail-container .add_to_cart {
                        padding: 9px 10px;
                        font-size: 14px;
                        line-height:14px;
                    }
                  }
            '; }
        if (Configuration::get('NC_MOB_HP') =="1") {
            $css .= '
                  @media (max-width:479px) {
                    #index .featured-products:not(.slider-on) .product-item {
                        margin-bottom:40px;
                  } }
            '; }
        if (Configuration::get('NC_MOB_HP') =="2") {
            $css .= '
                  @media (max-width:479px) {
                    #index .featured-products:not(.slider-on) .product-item {
                        width:50%;
                        flex-grow:1;
                        padding:0 10px;
                        margin-bottom:40px;
                    }
                    #index .featured-products .product-item .comments_note,
                    #index .featured-products .product-item .countcontainer {
                        display:none;
                    }
                    #index .featured-products  .thumbnail-container .add_to_cart {
                        padding: 8px 10px;
                        font-size: 14px;
                        line-height:14px;
                    }
                  }
            '; }

            $css .= '
            @media (max-width:479px) {
            .roycontent ul li img {
              margin-bottom:30px;
            } }
            body.side_open .side_close {
              cursor:url("../images/x.svg"),zoom-out;
            }
            ';



// ****************  Typography styles start


            $pp_oldprice = Configuration::get('RC_FS_PP_PRICE')-8;
            $qv_price = Configuration::get('RC_FS_PP_PRICE')-3;
            $fs_less = Configuration::get('RC_FS_TEXT')-1;
            $fs_less2 = Configuration::get('RC_FS_TEXT')-2;
            $fs_less4 = Configuration::get('RC_FS_TEXT')-4;
            $lh_home_sub = Configuration::get('RC_FS_HOME_SUB')*2;
            $fs_h2 = Configuration::get('RC_FS_PAGE_H3')+4;
            $fs_h4 = Configuration::get('RC_FS_PAGE_H3')-2;
            $fs_h5 = Configuration::get('RC_FS_PAGE_H3')-4;
            $fs_h6 = Configuration::get('RC_FS_PAGE_H3')-6;
            $lh_h3 = Configuration::get('RC_FS_PAGE_H3')+10;
            $lh_plname = Configuration::get('RC_FS_CAT_NAME')+2;

            $css .='
            body, p {
              font-size: ' . Configuration::get('RC_FS_TEXT') . 'px;
              font-weight: ' . Configuration::get('RC_FW_TEXT') . ';
              letter-spacing: ' . Configuration::get('RC_LS_TEXT') . 'px;
            }
            .footer-container, .footer-container li a {
              font-size: ' . $fs_less . 'px;
            }
            .table-bordered th, .table-bordered td {
              font-size: ' . $fs_less2 . 'px;
              line-height: ' . $fs_less . 'px;
              font-weight: ' . Configuration::get('RC_FW_PAGE_H3') . ';
            }
            #main .breadcrumb li, .radio-label {
              font-size: ' . $fs_less . 'px;
            }
            #main .product-info, #main .product-info label, .quickview .product-info label  {
              font-size: ' . $fs_less2 . 'px;
            }
            .prod-buttons span {
              font-size: ' . $fs_less2 . 'px;
              line-height: ' . $fs_less2 . 'px;
            }
            #main .breadcrumb li:after {
              font-size: ' . $fs_less4 . 'px;
              line-height: ' . $fs_less4 . 'px;
              font-weight:600;
            }
            .roycontent p, #main .page-content p, .simpleblog__listing__post p, .product-information, .product-information p, .tabs .tab-pane p {
              font-size: ' . Configuration::get('RC_FS_TEXT') . 'px;
              line-height: ' . Configuration::get('RC_LH_TEXT') . 'px;
              font-weight: ' . Configuration::get('RC_FW_TEXT') . ';
              letter-spacing: ' . Configuration::get('RC_LS_TEXT') . 'px;
            }
            #product .has-discount .discount {
            line-height: ' . Configuration::get('RC_FS_TEXT') . 'px; }

            #block-reassurance li .block-reassurance-item span {
            font-size: ' . $fs_less2 . 'px;
            line-height: ' . Configuration::get('RC_FS_TEXT') . 'px; }

            #main .page-content a, #main .page-content p a, .product-information a:not(.favoritesButton), .tabs .tab-pane p a {
              font-weight: ' . Configuration::get('RC_FW_LINK') . ';
            }

            .btn:not(.btn-touchspin), .btn-primary, .btn-secondary, .btn-tertiary {
              font-size: ' . Configuration::get('RC_FS_BTN') . 'px;
              font-weight: ' . Configuration::get('RC_FW_BTN') . ';
              letter-spacing: ' . Configuration::get('RC_LS_BTN') . 'px;
              text-transform: ' . Configuration::get('RC_UP_BTN') . ';
            }

            input:not(.btn), textarea, textarea.form-control, .products-selection .sort-by, .products-sort-order .select-list, .products-sort-order .select-title, .products-sort-order .dropdown-menu, .form-control-select, body select.form-control:not([size]):not([multiple]) {
              font-size: ' . Configuration::get('RC_FS_INP') . 'px;
              font-weight: ' . Configuration::get('RC_FW_INP') . ';
              letter-spacing: ' . Configuration::get('RC_LS_INP') . 'px;
            }

            .footer-container h3 {
              font-size: ' . Configuration::get('RC_FS_FOOT') . 'px;
              font-weight: ' . Configuration::get('RC_FW_FOOT') . ';
              letter-spacing: ' . Configuration::get('RC_LS_FOOT') . 'px;
              text-transform: ' . Configuration::get('RC_UP_FOOT') . ';
            }

            .products-section-title, .products-section-title a {
              font-size: ' . Configuration::get('RC_FS_HOME_TIT') . 'px;
              font-weight: ' . Configuration::get('RC_FW_HOME_TIT') . ';
              letter-spacing: ' . Configuration::get('RC_LS_HOME_TIT') . 'px;
              text-transform: ' . Configuration::get('RC_UP_HOME_TIT') . ';
            }

            .featured-products .subtitle, .roy_blog .subtitle {
              font-size: ' . Configuration::get('RC_FS_HOME_SUB') . 'px;
              line-height: ' . $lh_home_sub . 'px;
              font-weight: ' . Configuration::get('RC_FW_HOME_SUB') . ';
              letter-spacing: ' . Configuration::get('RC_LS_HOME_SUB') . 'px;
              text-transform: ' . Configuration::get('RC_UP_HOME_SUB') . ';
            }

            h1.page-header, h2.page-header, h2.products-section-title h3.page-header, h4.page-header, h5.page-header, h6.page-header, #main h1:not(.product-title):not(.active-filter-title) {
              font-size: ' . Configuration::get('RC_FS_PAGE_HEAD') . 'px;
              font-weight: ' . Configuration::get('RC_FW_PAGE_HEAD') . ';
              letter-spacing: ' . Configuration::get('RC_LS_PAGE_HEAD') . 'px;
              text-transform: ' . Configuration::get('RC_UP_PAGE_HEAD') . ';
            }
            .side_menu .side_title {
              font-weight: ' . Configuration::get('RC_FW_PAGE_HEAD') . ';
              letter-spacing: ' . Configuration::get('RC_LS_PAGE_HEAD') . 'px;
              text-transform: ' . Configuration::get('RC_UP_PAGE_HEAD') . ';
            }


            h3, .h3, .quickview h1.product-title, #main .page-content h3, .simpleblog__listing__post__wrapper__content h3, #new_comment_form .product .product_desc .product_name, #new_comment_form .title, .tabs .nav-tabs .nav-item .nav-link, #product #main .featured-products .pp_products_wrapper .products-section-title {
              font-size: ' . Configuration::get('RC_FS_PAGE_H3') . 'px;
              font-weight: ' . Configuration::get('RC_FW_PAGE_H3') . ';
              letter-spacing: ' . Configuration::get('RC_LS_PAGE_H3') . 'px;
              text-transform: ' . Configuration::get('RC_UP_PAGE_H3') . ';
              line-height: ' . $lh_h3 . 'px;
            }
            h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, .roycontent .bview.bview-first .mask .content h2.item-title {
              font-weight: ' . Configuration::get('RC_FW_PAGE_H3') . ';
              letter-spacing: ' . Configuration::get('RC_LS_PAGE_H3') . 'px;
              text-transform: ' . Configuration::get('RC_UP_PAGE_H3') . ';
            }

            h2, .h2, #main .page-content h2, .contact-rich .block label {
              font-size: ' . $fs_h2 . 'px;
            }
            h4, .h4, #main .page-content h4, .roycontent .bview.bview-first .mask .content h2.item-title {
              font-size: ' . $fs_h4 . 'px;
            }
            h5, .h5, #main .page-content h5 {
              font-size: ' . $fs_h5 . 'px;
            }
            h6, .h6, #main .page-content h6, #search_filters .h6 {
              font-size: ' . $fs_h6 . 'px;
            }

            .side-column > .sidebar-block .sidebar-title a, .side-column > .sidebar-block .sidebar-title span, .side-column > .links h3, .side-column > * .title.hidden-lg-up .h3 {
              font-size: ' . Configuration::get('RC_FS_PAGE_SIDE') . 'px;
              line-height:1.1;
              font-weight: ' . Configuration::get('RC_FW_PAGE_SIDE') . ';
              letter-spacing: ' . Configuration::get('RC_LS_PAGE_SIDE') . 'px;
              text-transform: ' . Configuration::get('RC_UP_PAGE_SIDE') . ';
            }

            h3.product-title, .h3.product-title, #ui_prod .ui_name, #products .product-title a, .featured-products .product-title a, .product-accessories .product-title a, .product-miniature .product-title a {
              font-size: ' . Configuration::get('RC_FS_CAT_NAME') . 'px;
              line-height: ' . $lh_plname . 'px;
              font-weight: ' . Configuration::get('RC_FW_CAT_NAME') . ';
              letter-spacing: ' . Configuration::get('RC_LS_CAT_NAME') . 'px;
              text-transform: ' . Configuration::get('RC_UP_CAT_NAME') . ';
            }
            .product-flags li {
              font-weight: ' . Configuration::get('RC_FW_CAT_NAME') . ';
            }

            #ui_prod .ui_price, #products .product-price-and-shipping .price, #products .product-price-and-shipping .regular-price, .featured-products .product-price-and-shipping .price, .product-accessories .product-price-and-shipping .price, .product-miniature .product-price-and-shipping .price {
              font-size: ' . Configuration::get('RC_FS_CAT_PRICE') . 'px;
              font-weight: ' . Configuration::get('RC_FW_CAT_PRICE') . ';
              letter-spacing: ' . Configuration::get('RC_LS_CAT_PRICE') . 'px;
            }

            #main h1.product-title {
              font-size: ' . Configuration::get('RC_FS_PP_NAME') . 'px;
              font-weight: ' . Configuration::get('RC_FW_PP_NAME') . ';
              letter-spacing: ' . Configuration::get('RC_LS_PP_NAME') . 'px;
              text-transform: ' . Configuration::get('RC_UP_PP_NAME') . ';
            }
            .quickview h1.product-title {
              text-transform: ' . Configuration::get('RC_UP_PP_NAME') . ';
            }

            .product-prices .product-price > *:not(.discount) {
              font-size: ' . Configuration::get('RC_FS_PP_PRICE') . 'px;
              font-weight: ' . Configuration::get('RC_FW_PP_PRICE') . ';
              letter-spacing: ' . Configuration::get('RC_LS_PP_PRICE') . 'px;
            }
            .product-prices .product-discount .regular-price {
              font-size: ' . $pp_oldprice . 'px;
            }
            .quickview .product-prices .product-price > *:not(.discount) {
              font-size: ' . $qv_price . 'px;
            }

            .sds_post_title_home a {
              font-size: ' . Configuration::get('RC_FS_BLOG') . 'px;
              font-weight: ' . Configuration::get('RC_FW_BLOG') . ';
              letter-spacing: ' . Configuration::get('RC_LS_BLOG') . 'px;
              text-transform: ' . Configuration::get('RC_UP_BLOG') . ';
            }

            .mm_menus_li > a {
              font-size: ' . Configuration::get('RC_FS_MENU') . 'px!important;
              font-weight: ' . Configuration::get('RC_FW_MENU') . ';
              letter-spacing: ' . Configuration::get('RC_LS_MENU') . 'px;
              text-transform: ' . Configuration::get('RC_UP_MENU') . ';
            }

            ';





        $sfontHeadings = Configuration::get('RC_F_HEADINGS');
        $fontHeadings = substr($sfontHeadings, 0, strpos($sfontHeadings, ":"));

        $sfontButtons = Configuration::get('RC_F_BUTTONS');
        $fontButtons = substr($sfontButtons, 0, strpos($sfontButtons, ":"));

        $sfontText = Configuration::get('RC_F_TEXT');
        $fontText = substr($sfontText, 0, strpos($sfontText, ":"));

        $sfontPrice = Configuration::get('RC_F_PRICE');
        $fontPrice = substr($sfontPrice, 0, strpos($sfontPrice, ":"));

        $sfontMenu = Configuration::get('RC_F_MENU');
        $fontMenu = substr($sfontMenu, 0, strpos($sfontMenu, ":"));

        if($fontText == '')
            $fontText = $sfontText;
        if($fontPrice == '')
            $fontPrice = $sfontPrice;
        if($fontButtons  == '')
            $fontButtons  = $sfontButtons;
        if($fontHeadings  == '')
            $fontHeadings  = $sfontHeadings;
        if($fontMenu  == '')
            $fontMenu  = $sfontMenu;
        if(Configuration::get('RC_F_HEADINGS') or Configuration::get('RC_F_BUTTONS') or Configuration::get('RC_F_TEXT') or Configuration::get('RC_F_PRICE'))
        {
            $css .="
            #search_filters h4, .cart-grid-body .card-block h1, #main h1:not(.active-filter-title), #header .row.action .blockcart a span.text, .page-my-account #content .links a span.link-item, #product .featured-products h2, .products-section-title, h1.page-header, h2.page-header, h3.page-header, h4.page-header, h5.page-header, h6.page-header, .block-contact-title, .blockcms-title, .footer-container h3, .myaccount-title, .myaccount-title a, .side-column>* .title.hidden-md-up .h3, .side-column>.links h3, .side-column>.sidebar-block .sidebar-title a, .side-column>.sidebar-block .sidebar-title span, .layout_layout1 .mm_menus_li > a, .has-discount .discount, .tabs .nav-tabs .nav-link, .side_menu .side_title, .side_menu form#contactable-contactForm p.contactable-header, .sds_post_title_home a, .footer-container .links .h3, #main h2
            {
            font-family: '".$fontHeadings."', Oswald, Verdana, sans-serif; }
            ";
            $css .="
            .roycontent h1, .roycontent h2, .roycontent h3, .roycontent h4 {
            font-family: '".$fontHeadings."', Oswald, Verdana, sans-serif; }
            ";
            $css .="
            .layout_layout1 .mm_menus_li > a, .ets_mm_block > h4
            {
            font-family: '".$fontMenu."', Oswald, Verdana, sans-serif!important; }
            ";
            $css .="
            .btn {
            font-family:'".$fontButtons."', Oswald, Verdana, sans-serif; }
            ";
            $css .="
            html, body, .ui-widget, .searchLine {
            font-family:'".$fontText."', Verdana, sans-serif; }
            ";
            $css .="
            #products .product-price-and-shipping .price, .featured-products .product-price-and-shipping .price, .product-accessories .product-price-and-shipping .price, .product-miniature .product-price-and-shipping .price
            {
            font-family:'".$fontPrice."', Oswald, Verdana, sans-serif; }
            ";
        }




        if (Configuration::get('NC_B_RADIUSS')) {
            $css .= '
            .btn, .btn.btn-primary { -webkit-border-radius: ' . Configuration::get('NC_B_RADIUSS') . 'px; -moz-border-radius: ' . Configuration::get('NC_B_RADIUSS') . 'px; border-radius: ' . Configuration::get('NC_B_RADIUSS') . 'px; }
            '; }
        if (Configuration::get('NC_B_SHS') == 0) {
            $css .= '
            .btn, .btn.btn-primary { box-shadow:none!important }
            '; }

        if (Configuration::get('RC_B_NORMAL_BG')) {
            $css .= '
            .btn:not(.btn-touchspin), .btn.btn-primary, a.btn, a.btn.btn-primary { background-color: ' . Configuration::get('RC_B_NORMAL_BG') . ' }
            '; }
        if (Configuration::get('RC_B_NORMAL_BORDER')) {
            $css .= '
            .btn:not(.btn-touchspin), .promo-input, .btn.btn-primary, a.btn, a.btn.btn-primary { border-color: ' . Configuration::get('RC_B_NORMAL_BORDER') . ' }
            '; }
        if (Configuration::get('RC_B_NORMAL_COLOR')) {
            $css .= '
            .btn:not(.btn-touchspin), .btn.btn-primary, a.btn, a.btn.btn-primary { color: ' . Configuration::get('RC_B_NORMAL_COLOR') . ' }
            #category #left-column #search_filter_controls>button svg *, #_mobile_search_filters_clear_all svg * {
              stroke:' . Configuration::get('RC_B_NORMAL_COLOR') . '!important;
            }
            '; }

        if (Configuration::get('RC_B_NORMAL_BG_HOVER')) {
            $css .= '
            .add .btn.add-to-cart:hover, .btn:not(.btn-touchspin):not(.js-search-filters-clear-all):hover, .btn:focus, a.btn:hover, .btn.btn-primary:active, .btn-primary:active:focus, .btn.btn-primary.disabled:hover,
            .btn-primary:active:hover, .btn-primary:active:focus, .btn-primary:active.focus, .btn-primary.active:hover, .btn-primary.active:focus, .btn-primary.active.focus, .open > .btn-primary.dropdown-toggle:hover, .open > .btn-primary.dropdown-toggle:focus, .open > .btn-primary.dropdown-toggle.focus
            { background-color: ' . Configuration::get('RC_B_NORMAL_BG_HOVER') . ' }
            '; }
        if (Configuration::get('RC_B_NORMAL_BORDER_HOVER')) {
            $css .= '
            .add .btn.add-to-cart:hover, .btn:not(.btn-touchspin):not(.js-search-filters-clear-all):hover, .btn:focus, a.btn:hover, .btn.btn-primary:active, .btn-primary:active:focus, .btn.btn-primary.disabled:hover,
            .btn-primary:active:hover, .btn-primary:active:focus, .btn-primary:active.focus, .btn-primary.active:hover, .btn-primary.active:focus, .btn-primary.active.focus, .open > .btn-primary.dropdown-toggle:hover, .open > .btn-primary.dropdown-toggle:focus, .open > .btn-primary.dropdown-toggle.focus
             { border-color: ' . Configuration::get('RC_B_NORMAL_BORDER_HOVER') . ' }
            '; }
        if (Configuration::get('RC_B_NORMAL_COLOR_HOVER')) {
            $css .= '
            .add .btn.add-to-cart:hover, .btn:not(.btn-touchspin):not(.js-search-filters-clear-all):hover, .btn:focus, a.btn:hover, .btn.btn-primary:active, .btn-primary:active:focus, .btn.btn-primary.disabled:hover,
            .btn-primary:active:hover, .btn-primary:active:focus, .btn-primary:active.focus, .btn-primary.active:hover, .btn-primary.active:focus, .btn-primary.active.focus, .open > .btn-primary.dropdown-toggle:hover, .open > .btn-primary.dropdown-toggle:focus, .open > .btn-primary.dropdown-toggle.focus
             { color: ' . Configuration::get('RC_B_NORMAL_COLOR_HOVER') . '; outline:none!important; }
            '; }

        if (Configuration::get('RC_B_EX_BG')) {
            $css .= '
            .btn.bright { background-color: ' . Configuration::get('RC_B_EX_BG') . '; border-color: ' . Configuration::get('RC_B_EX_BORDER') . '; color: ' . Configuration::get('RC_B_EX_COLOR') . ' }
            .btn.bright:hover { opacity:0.7; }
            '; }

        if (Configuration::get('RC_I_BG')) {
            $css .= '.facet-dropdown a.select-title, .bootstrap-touchspin .input-group-btn-vertical>.btn, .form-control, .alert, input, textarea, .form-control:disabled, .form-control[readonly], .form-control-select, body select.form-control:not([size]):not([multiple]), .customizationUploadLine textarea, input.uniform-input, select.uniform-multiselect, textarea.uniform { background-color: ' . Configuration::get('RC_I_BG') . ' } '; }
        if (Configuration::get('RC_I_B_COLOR')) {
            $css .= '.facet-dropdown a.select-title, .custom-radio, .custom-checkbox input[type=checkbox]+span, .bootstrap-touchspin .input-group-btn-vertical>.btn, .form-control, .alert, input, textarea, .form-control-select, body select.form-control:not([size]):not([multiple]), #attributes .attribute_list #color_to_pick_list li, .customizationUploadLine textarea, input.uniform-input, select.uniform-multiselect, textarea.uniform { border-color: ' . Configuration::get('RC_I_B_COLOR') . ' }
            .input-group .input-group-btn>.btn, .input-group .input-group-btn>.btn[data-action=show-password]:before { background:none }
            '; }
        if (Configuration::get('RC_I_COLOR')) {
            $css .= '.facet-dropdown a.select-title, .form-control, .alert, input, textarea, .form-control-select, body select.form-control:not([size]):not([multiple]), div.selector:after, .customizationUploadLine textarea, input.uniform-input, select.uniform-multiselect, textarea.uniform { color: ' . Configuration::get('RC_I_COLOR') . ' }
            '; }
        if (Configuration::get('RC_I_BG_FOCUS')) {
            $css .= '.facet-dropdown.open>a.select-title, .products-sort-order .select-title, .products-sort-order .dropdown-menu, .product-quantity .input-group-btn-vertical .btn:hover, .form-control:focus, input:focus, textarea:focus, .form-control-select:focus, body select.form-control:not([size]):not([multiple]):focus, input.uniform-input:focus, select.uniform-multiselect:focus, textarea.uniform:focus { background-color: ' . Configuration::get('RC_I_BG_FOCUS') . ' } '; }
        if (Configuration::get('RC_I_B_FOCUS')) {
            $css .= '.facet-dropdown.open>a.select-title, .custom-radio:hover, .custom-checkbox input[type=checkbox]:hover+span, .product-quantity .input-group-btn-vertical .btn:hover, .form-control:focus, input:focus, textarea:focus, .form-control-select:focus, body select.form-control:not([size]):not([multiple]):focus, input.uniform-input:focus, select.uniform-multiselect:focus, textarea.uniform:focus { border-color: ' . Configuration::get('RC_I_B_FOCUS') . '!important; z-index:2; } '; }
        if (Configuration::get('RC_I_COLOR_FOCUS')) {
            $css .= '.facet-dropdown.open>a.select-title, .product-quantity .input-group-btn-vertical .btn i, .form-control:focus, input:focus, textarea:focus, .form-control-select:focus, body select.form-control:not([size]):not([multiple]):focus, input.uniform-input:focus, select.uniform-multiselect:focus, textarea.uniform:focus { color: ' . Configuration::get('RC_I_COLOR_FOCUS') . ' }
            .input-group .input-group-btn.group-span-filestyle .buttonText svg *,
            .input-group .input-group-btn>.btn[data-action=show-password] i svg *
            {
                stroke: ' . Configuration::get('RC_I_COLOR_FOCUS') . '!important;
            }
            ' ; }
        if (Configuration::get('RC_I_PH')) {
            $css .= '
              input::-webkit-input-placeholder,
              textarea::-webkit-input-placeholder {
                color: ' . Configuration::get('RC_I_PH') . '!important;
              }
              input::-moz-placeholder,
              textarea::-moz-placeholder {
                color: ' . Configuration::get('RC_I_PH') . '!important;
              }
              input:-ms-input-placeholder,
              textarea:-ms-input-placeholder {
                color: ' . Configuration::get('RC_I_PH') . '!important;
              }
              input:-moz-placeholder,
              textarea:-moz-placeholder {
                color: ' . Configuration::get('RC_I_PH') . '!important;
              }
                input:active::-webkit-input-placeholder,
                textarea:active::-webkit-input-placeholder {
                  color: ' . Configuration::get('RC_I_PH') . '!important;
                }
                input:active::-moz-placeholder,
                textarea:active::-moz-placeholder {
                  color: ' . Configuration::get('RC_I_PH') . '!important;
                }
                input:active:-ms-input-placeholder,
                textarea:active:-ms-input-placeholder {
                  color: ' . Configuration::get('RC_I_PH') . '!important;
                }
                input:active:-moz-placeholder,
                textarea:active:-moz-placeholder {
                  color: ' . Configuration::get('RC_I_PH') . '!important;
                }
            ' ; }

        if (Configuration::get('RC_I_B_RADIUS')) {
            $css .= '.form-control, input:not(.btn), textarea, .form-control-select { -webkit-border-radius: ' . Configuration::get('RC_I_B_RADIUS') . 'px!important; -moz-border-radius: ' . Configuration::get('RC_I_B_RADIUS') . 'px!important; border-radius: ' . Configuration::get('RC_I_B_RADIUS') . 'px!important; } '; }

        if (Configuration::get('RC_RC_BG_ACTIVE')) {
            $css .= '
            .custom-checkbox input[type=checkbox]+span .checkbox-checked { color: ' . Configuration::get('RC_RC_BG_ACTIVE') . ' }
            .custom-radio input[type=radio]:checked+span { background: ' . Configuration::get('RC_RC_BG_ACTIVE') . ' }
            ' ; }


// ****************  HOMEPAGE CONTENT styles start


// Sections
// Top Scetion
      if (Configuration::get('NC_HT_BGS') == "1") {
      $css .= 'body#index #top_column { background-color: ' . Configuration::get('NC_HT_BC') . ' }
      '; }

      if (Configuration::get('NC_HT_BGS') == "2") {
      $css .= 'body#index #top_column {
                  background: -webkit-linear-gradient(' . Configuration::get('NC_HT_GG') . 'deg,' . Configuration::get('NC_HT_GS') . ' 0%,' . Configuration::get('NC_HT_GE') . ' 100%);
                  background: -moz-linear-gradient(' . Configuration::get('NC_HT_GG') . 'deg,' . Configuration::get('NC_HT_GS') . ' 0%,' . Configuration::get('NC_HT_GE') . ' 100%);
                  background: -o-linear-gradient(' . Configuration::get('NC_HT_GG') . 'deg,' . Configuration::get('NC_HT_GS') . ' 0%,' . Configuration::get('NC_HT_GE') . ' 100%);
                  background: linear-gradient(' . Configuration::get('NC_HT_GG') . 'deg,' . Configuration::get('NC_HT_GS') . ' 0%,' . Configuration::get('NC_HT_GE') . ' 100%);
            }
      '; }

      if (Configuration::get('NC_HT_BGS') == "3") {

            if (Configuration::get('NC_HT_IM_BG_EXT')) {
                  if (Shop::getContext() == Shop::CONTEXT_SHOP)
                  $adv_imgname = 'nc_ht_im_background'.'-'.(int)$this->context->shop->getContextShopID();
                  $css .= '
                      body#index #top_column {
                      background-image: url(../upload/'.$adv_imgname.'.' . Configuration::get('NC_HT_IM_BG_EXT') . '); }
                      ';
                  if (Configuration::get('NC_HT_IM_BG_FIXED')) {
                      $css .= 'body#index #top_column { background-attachment:fixed; }
                      ';
                  }
            }
            if (Configuration::get('NC_HT_IM_BG_REPEAT')) {
                  switch(Configuration::get('NC_HT_IM_BG_REPEAT')) {
                      case 1 :
                          $repeat_option = 'repeat-x';
                          break;
                      case 2 :
                          $repeat_option = 'repeat-y';
                          break;
                      case 3 :
                          $repeat_option = 'no-repeat';
                          break;
                      default :
                          $repeat_option = 'repeat';
                  }
                  $css .= 'body#index #top_column { background-repeat: ' . $repeat_option . '; }
                  ';
            }
            if (Configuration::get('NC_HT_IM_BG_POSITION')) {
                  switch(Configuration::get('NC_HT_IM_BG_POSITION')) {
                      case 1 :
                          $position_option = 'center top';
                          break;
                      case 2 :
                          $position_option = 'right top';
                          break;
                      default :
                          $position_option = 'left top';
                  }
                  $css .= 'body#index #top_column { background-position: ' . $position_option . '; }
                  ';
            }
      }
      if (Configuration::get('NC_HT_BGS') == "4") {
        $css .= 'body#index #top_column { background: none; }';
      }


      if (Configuration::get('NC_HT_WIDTH') == "1") {
      $css .= '

      '; }

      if (Configuration::get('NC_HT_WIDTH') == "2") {
      $css .= '
      @media(min-width:992px) {
        body#index #top_column > .container { max-width: 100%; width: auto; padding: 0 80px; }
      }
      ';
          if (Configuration::get('NC_HT_PAD') == "2") {
          $css .= '
          body#index #top_column > .container { padding-left:0; padding-right:0; }
          ';
        }
      }


      $css .= 'body#index #top_column { padding-top:' . Configuration::get('NC_HT_TOPS') . 'px; padding-bottom:' . Configuration::get('NC_HT_BOTS') . 'px; }';




// Middle Scetion

if (Configuration::get('NC_HM_WIDTH') == "1") {
$css .= '

'; }

if (Configuration::get('NC_HM_WIDTH') == "2") {
$css .= '
body#index #main > .container { max-width: 100%; width: auto; padding: 0 80px; }
@media(min-width:992px) {
body#index.layout-left-column #main > .container { padding-left:0; padding-right:0; } }
';
    if (Configuration::get('NC_HM_PAD') == "2") {
    $css .= '
    body#index #main > .container { padding-left:0; padding-right:0; }
    body#index #main .featured-products {
      margin-left:0!important; margin-right:0!important;
    }
    @media(min-width:992px) {
    body#index #main .featured-products {
      padding-left: 80px;
      padding-right: 80px;
    }}
    ';
  }
}


      if (Configuration::get('NC_HM_BGS') == "1") {
      $css .= 'body#index #main { background-color: ' . Configuration::get('NC_HM_BC') . ' }

      .radio-label:before { box-shadow: inset 0 0 0 8px ' . Configuration::get('NC_HM_BC') . ', 0 0 0 3px ' . Configuration::get('NC_HM_BC') . '; }

      .color:hover:before, .custom-checkbox input[type=checkbox]+span.color:hover:before { box-shadow: inset 0 0 0 7px ' . Configuration::get('NC_HM_BC') . ', 0 0 0 0 ' . Configuration::get('RC_I_B_COLOR') . '; }
      .color:before, .custom-checkbox input[type=checkbox]+span.color:before { box-shadow: inset 0 0 0 8px ' . Configuration::get('NC_HM_BC') . ', 0 0 0 3px ' . Configuration::get('NC_HM_BC') . '; }

      '; }

      if (Configuration::get('NC_HM_BGS') == "2") {
      $css .= 'body#index #main {
                  background: -webkit-linear-gradient(' . Configuration::get('NC_HM_GG') . 'deg,' . Configuration::get('NC_HM_GS') . ' 0%,' . Configuration::get('NC_HM_GE') . ' 100%);
                  background: -moz-linear-gradient(' . Configuration::get('NC_HM_GG') . 'deg,' . Configuration::get('NC_HM_GS') . ' 0%,' . Configuration::get('NC_HM_GE') . ' 100%);
                  background: -o-linear-gradient(' . Configuration::get('NC_HM_GG') . 'deg,' . Configuration::get('NC_HM_GS') . ' 0%,' . Configuration::get('NC_HM_GE') . ' 100%);
                  background: linear-gradient(' . Configuration::get('NC_HM_GG') . 'deg,' . Configuration::get('NC_HM_GS') . ' 0%,' . Configuration::get('NC_HM_GE') . ' 100%);
            }
      '; }

      if (Configuration::get('NC_HM_BGS') == "3") {

            if (Configuration::get('NC_HM_IM_BG_EXT')) {
                  if (Shop::getContext() == Shop::CONTEXT_SHOP)
                  $adv_imgname = 'nc_hm_im_background'.'-'.(int)$this->context->shop->getContextShopID();
                  $css .= '
                      body#index #main {
                      background-image: url(../upload/'.$adv_imgname.'.' . Configuration::get('NC_HM_IM_BG_EXT') . '); }
                      ';
                  if (Configuration::get('NC_HM_IM_BG_FIXED')) {
                      $css .= 'body#index #main { background-attachment:fixed; }
                      ';
                  }
            }
            if (Configuration::get('NC_HM_IM_BG_REPEAT')) {
                  switch(Configuration::get('NC_HM_IM_BG_REPEAT')) {
                      case 1 :
                          $repeat_option = 'repeat-x';
                          break;
                      case 2 :
                          $repeat_option = 'repeat-y';
                          break;
                      case 3 :
                          $repeat_option = 'no-repeat';
                          break;
                      default :
                          $repeat_option = 'repeat';
                  }
                  $css .= 'body#index #main { background-repeat: ' . $repeat_option . '; }
                  ';
            }
            if (Configuration::get('NC_HM_IM_BG_POSITION')) {
                  switch(Configuration::get('NC_HM_IM_BG_POSITION')) {
                      case 1 :
                          $position_option = 'center top';
                          break;
                      case 2 :
                          $position_option = 'right top';
                          break;
                      default :
                          $position_option = 'left top';
                  }
                  $css .= 'body#index #main { background-position: ' . $position_option . '; }
                  ';
            }
      }
      if (Configuration::get('NC_HM_BGS') == "4") {
        $css .= 'body#index #main { background: none; }';
      }
      $css .= 'body#index #main { padding-top:' . Configuration::get('NC_HM_TOPS') . 'px; padding-bottom:' . Configuration::get('NC_HM_BOTS') . 'px; }';

      if (Configuration::get('NC_HM_TOPS') > "30") {
            $css .= '@media (max-width:767px) { body#index #main { padding-top:30px!important; } } '; }
      if (Configuration::get('NC_HM_BOTS') > "30") {
            $css .= '@media (max-width:767px) { body#index #main { padding-bottom:30px!important } } '; }

// Bottom Scetion
      if (Configuration::get('NC_HB_BGS') == "1") {
      $css .= 'body#index #bottom_column { background-color: ' . Configuration::get('NC_HB_BC') . ' }
      '; }

      if (Configuration::get('NC_HB_BGS') == "2") {
      $css .= 'body#index #bottom_column {
                  background: -webkit-linear-gradient(' . Configuration::get('NC_HB_GG') . 'deg,' . Configuration::get('NC_HB_GS') . ' 0%,' . Configuration::get('NC_HB_GE') . ' 100%);
                  background: -moz-linear-gradient(' . Configuration::get('NC_HB_GG') . 'deg,' . Configuration::get('NC_HB_GS') . ' 0%,' . Configuration::get('NC_HB_GE') . ' 100%);
                  background: -o-linear-gradient(' . Configuration::get('NC_HB_GG') . 'deg,' . Configuration::get('NC_HB_GS') . ' 0%,' . Configuration::get('NC_HB_GE') . ' 100%);
                  background: linear-gradient(' . Configuration::get('NC_HB_GG') . 'deg,' . Configuration::get('NC_HB_GS') . ' 0%,' . Configuration::get('NC_HB_GE') . ' 100%);
            }
      '; }

      if (Configuration::get('NC_HB_BGS') == "3") {

            if (Configuration::get('NC_HB_IM_BG_EXT')) {
                  if (Shop::getContext() == Shop::CONTEXT_SHOP)
                  $adv_imgname = 'nc_hb_im_background'.'-'.(int)$this->context->shop->getContextShopID();
                  $css .= '
                      body#index #bottom_column {
                      background-image: url(../upload/'.$adv_imgname.'.' . Configuration::get('NC_HB_IM_BG_EXT') . '); }
                      ';
                  if (Configuration::get('NC_HB_IM_BG_FIXED')) {
                      $css .= 'body#index #bottom_column { background-attachment:fixed; }
                      ';
                  }
            }
            if (Configuration::get('NC_HB_IM_BG_REPEAT')) {
                  switch(Configuration::get('NC_HB_IM_BG_REPEAT')) {
                      case 1 :
                          $repeat_option = 'repeat-x';
                          break;
                      case 2 :
                          $repeat_option = 'repeat-y';
                          break;
                      case 3 :
                          $repeat_option = 'no-repeat';
                          break;
                      default :
                          $repeat_option = 'repeat';
                  }
                  $css .= 'body#index #bottom_column { background-repeat: ' . $repeat_option . '; }
                  ';
            }
            if (Configuration::get('NC_HB_IM_BG_POSITION')) {
                  switch(Configuration::get('NC_HB_IM_BG_POSITION')) {
                      case 1 :
                          $position_option = 'center top';
                          break;
                      case 2 :
                          $position_option = 'right top';
                          break;
                      default :
                          $position_option = 'left top';
                  }
                  $css .= 'body#index #bottom_column { background-position: ' . $position_option . '; }
                  ';
            }
      }
      if (Configuration::get('NC_HB_BGS') == "4") {
        $css .= 'body#index #bottom_column { background: none; }';
      }
      $css .= '
      body#index #bottom_column { padding-top:' . Configuration::get('NC_HB_TOPS') . 'px; padding-bottom:' . Configuration::get('NC_HB_BOTS') . 'px; }
      ';
      if (Configuration::get('NC_HB_TOPS') > "30") {
            $css .= '@media (max-width:767px) { body#index #bottom_column { padding-top:30px!important; } } '; }
      if (Configuration::get('NC_HB_BOTS') > "30") {
            $css .= '@media (max-width:767px) { body#index #bottom_column { padding-bottom:30px!important } } '; }


// RoyContent


            $css .= '#roycontent_top {
              margin-top:' . Configuration::get('RC_BAN_TS_TOPS') . 'px;
              margin-bottom:' . Configuration::get('RC_BAN_BS_TOPS') . 'px;
            }';
      if (Configuration::get('RC_BAN_TS_TOPS') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_top { margin-top:30px!important; } } '; }
      if (Configuration::get('RC_BAN_BS_TOPS') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_top { margin-bottom:30px!important } } '; }
      if (Configuration::get('RC_BAN_SPA_TOPS') == "2") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_top .row { margin:0 -30px; }
            #roycontent_top ul li { margin-bottom:60px; padding:0 30px }
            }
            '; }
      if (Configuration::get('RC_BAN_SPA_TOPS') == "3") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_top { overflow:hidden }
            #roycontent_top ul { padding:0 15px!important }
            #roycontent_top ul li { margin:0!important; padding:0!important }
            }
            '; }


            $css .= '#roycontent_home {
              margin-top:' . Configuration::get('RC_BAN_TS_HOME') . 'px;
              margin-bottom:' . Configuration::get('RC_BAN_BS_HOME') . 'px;
            }';
      if (Configuration::get('RC_BAN_TS_HOME') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_home { margin-top:30px!important; } } '; }
      if (Configuration::get('RC_BAN_BS_HOME') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_home { margin-bottom:30px!important } } '; }
      if (Configuration::get('RC_BAN_SPA_HOME') == "2") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_home .row { margin:0 -30px; }
            #roycontent_home ul li { margin-bottom:60px; padding:0 30px }
            }
            '; }
      if (Configuration::get('RC_BAN_SPA_HOME') == "3") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_home { overflow:hidden }
            #roycontent_home ul { padding:0 15px!important }
            #roycontent_home ul li { margin:0!important; padding:0!important }
            }
            '; }


            $css .= '#roycontent_footerbefore {
              margin-top:' . Configuration::get('RC_BAN_TS_BEFOOT') . 'px;
              margin-bottom:' . Configuration::get('RC_BAN_BS_BEFOOT') . 'px;
            }';
      if (Configuration::get('RC_BAN_TS_BEFOOT') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_footerbefore { margin-top:30px!important; } } '; }
      if (Configuration::get('RC_BAN_BS_BEFOOT') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_footerbefore { margin-bottom:30px!important } } '; }
      if (Configuration::get('RC_BAN_SPA_BEFOOT') == "2") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_footerbefore .row { margin:0 -30px; }
            #roycontent_footerbefore ul li { margin-bottom:60px; padding:0 30px }
            }
            '; }
      if (Configuration::get('RC_BAN_SPA_BEFOOT') == "3") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_footerbefore { overflow:hidden }
            #roycontent_footerbefore ul { padding:0 15px!important }
            #roycontent_footerbefore ul li { margin:0!important; padding:0!important }
            }
            '; }


            $css .= '#roycontent_footer {
              margin-top:' . Configuration::get('RC_BAN_TS_FOOT') . 'px;
              margin-bottom:' . Configuration::get('RC_BAN_BS_FOOT') . 'px;
            }';
            if (Configuration::get('RC_BAN_TS_FOOT') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_footer { margin-top:30px!important; } } '; }
            if (Configuration::get('RC_BAN_BS_FOOT') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_footer { margin-bottom:30px!important } } '; }
            if (Configuration::get('RC_BAN_SPA_FOOT') == "2") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_footer .row { margin:0 -30px; }
            #roycontent_footer ul li { margin-bottom:60px; padding:0 30px }
            }
            '; }
            if (Configuration::get('RC_BAN_SPA_FOOT') == "3") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_footer ul { overflow:hidden }
            #roycontent_footer ul { padding:0 15px!important }
            #roycontent_footer ul li { margin:0!important; padding:0!important }
            }
            '; }

            $css .= '#roycontent_sidemobilemenu {
              margin-top:' . Configuration::get('RC_BAN_TS_SIDEMOBILEMENU') . 'px;
              margin-bottom:' . Configuration::get('RC_BAN_BS_SIDEMOBILEMENU') . 'px;
            }';
      if (Configuration::get('RC_BAN_TS_SIDEMOBILEMENU') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_sidemobilemenu { margin-top:30px!important; } } '; }
      if (Configuration::get('RC_BAN_BS_SIDEMOBILEMENU') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_sidemobilemenu { margin-bottom:30px!important } } '; }
      if (Configuration::get('RC_BAN_SPA_SIDEMOBILEMENU') == "2") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_sidemobilemenu .row { margin:0 -30px; }
            #roycontent_sidemobilemenu ul li { margin-bottom:60px; padding:0 30px }
            }
            '; }
      if (Configuration::get('RC_BAN_SPA_SIDEMOBILEMENU') == "3") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_sidemobilemenu { overflow:hidden }
            #roycontent_sidemobilemenu ul { padding:0 15px!important }
            #roycontent_sidemobilemenu ul li { margin:0!important; padding:0!important }
            }
            '; }


            $css .= '#roycontent_productbeforebuy {
              margin-top:' . Configuration::get('RC_BAN_TS_PRODUCT') . 'px;
              margin-bottom:' . Configuration::get('RC_BAN_BS_PRODUCT') . 'px;
            }';
            if (Configuration::get('RC_BAN_TS_PRODUCT') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_productbeforebuy { margin-top:30px!important; } } '; }
            if (Configuration::get('RC_BAN_BS_PRODUCT') > "30") {
            $css .= '@media (max-width:767px) { #roycontent_productbeforebuy { margin-bottom:30px!important } } '; }
            if (Configuration::get('RC_BAN_SPA_PRODUCT') == "2") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_productbeforebuy .row { margin:0 -30px; }
            #roycontent_productbeforebuy ul li { margin-bottom:60px; padding:0 30px }
            }
            '; }
            if (Configuration::get('RC_BAN_SPA_PRODUCT') == "3") {
            $css .= '
            @media (min-width:768px) {
            #roycontent_productbeforebuy { overflow:hidden }
            #roycontent_productbeforebuy ul { padding:0 15px!important }
            #roycontent_productbeforebuy ul li { margin:0!important; padding:0!important }
            }
            '; }


          $css .= '
          #roycontent_left { margin-top:' . Configuration::get('RC_BAN_TS_LEFT') . 'px!important;
            margin-bottom:' . Configuration::get('RC_BAN_BS_LEFT') . 'px!important }
          #roycontent_right { margin-top:' . Configuration::get('RC_BAN_TS_RIGHT') . 'px!important;
            margin-bottom:' . Configuration::get('RC_BAN_BS_RIGHT') . 'px!important }
          @media (max-width:767px) {
          #roycontent_left, #roycontent_right { margin-top:0!important; margin-bottom:0!important; } }
          ';


      // brands slider
        if (Configuration::get('RC_BRAND_PER_ROW') == "3") {
            $css .= '
            #roy_brands ul li { width:33.3333%; } '; }
        if (Configuration::get('RC_BRAND_PER_ROW') == "4") {
            $css .= '
            #roy_brands ul li { width:25%; } '; }
        if (Configuration::get('RC_BRAND_PER_ROW') == "5") {
            $css .= '
            #roy_brands ul li { width:20%; } '; }
        if (Configuration::get('RC_BRAND_PER_ROW') == "6") {
            $css .= '
            #roy_brands ul li { width:16.66667%; } '; }

            $css .= '
            @media(max-width:991px) {
              #roy_brands ul li { width:25%; }
            }
            @media(max-width:479px) {
              #roy_brands ul li { width:50%; }
            }
            #roy_brands {
              overflow:hidden;
            }
            ';



        if (Configuration::get('RC_BRAND_NAME')) {
            $css .= '
            #roy_brands ul.brands_text a { color: ' . Configuration::get('RC_BRAND_NAME') . ' }
            '; }
        if (Configuration::get('RC_BRAND_NAME_HOVER')) {
            $css .= '
            #roy_brands ul.brands_text a:hover { color: ' . Configuration::get('RC_BRAND_NAME_HOVER') . ' }
            '; }


            if (Configuration::get('NC_HP_TITLE') =="2") {
            $css .= '
              #index #main h2.products-section-title {
                  margin-bottom:1.75rem;
              }
            ';}
            if (Configuration::get('NC_HP_ALIGN') =="2") {
            $css .= '
              #index #main h2.products-section-title {
                text-align:center;
              }
              .featured-products .undertitle {
                text-align:center;
              }
            ';}
            if (Configuration::get('NC_HP_ALIGN') =="3") {
            $css .= '
              #index #main h2.products-section-title {
                text-align:right;
              }
              .featured-products .undertitle {
                text-align:right;
              }
            ';}




// Featured

        if (Configuration::get('NC_FEAT_BG') =="1") {
        $css .= '
          .roy_featured.featured-products {
              background:' . Configuration::get('NC_FEAT_BC') . ';
          }
        ';}
        if (Configuration::get('NC_FEAT_BG') == "2") {
        $css .= '
          .roy_featured.featured-products {
              background: -webkit-linear-gradient(' . Configuration::get('NC_FEAT_GG') . 'deg,' . Configuration::get('NC_FEAT_GS') . ' 0%,' . Configuration::get('NC_FEAT_GE') . ' 100%);
              background: -moz-linear-gradient(' . Configuration::get('NC_FEAT_GG') . 'deg,' . Configuration::get('NC_FEAT_GS') . ' 0%,' . Configuration::get('NC_FEAT_GE') . ' 100%);
              background: -o-linear-gradient(' . Configuration::get('NC_FEAT_GG') . 'deg,' . Configuration::get('NC_FEAT_GS') . ' 0%,' . Configuration::get('NC_FEAT_GE') . ' 100%);
              background: linear-gradient(' . Configuration::get('NC_FEAT_GG') . 'deg,' . Configuration::get('NC_FEAT_GS') . ' 0%,' . Configuration::get('NC_FEAT_GE') . ' 100%);
          }
        ';}

        if (Configuration::get('NC_FEAT_BG') == "1" || Configuration::get('NC_FEAT_BG') == "2" ) {
        $css .= '
          @media (min-width:480px) {
          .roy_featured.featured-products {
            margin-left:-80px;
            margin-right:-80px;
            padding-left:80px;
            padding-right:80px;
          } }
          @media (max-width:479px) {
          .roy_featured.featured-products {
            margin-left:-40px;
            margin-right:-40px;
            padding-left:40px;
            padding-right:40px;

          } }

          .roy_featured.featured-products .products-section-title, .roy_featured.featured-products .products-section-title a {
            color:' . Configuration::get('NC_FEAT_TITLE') . ';
          }
          .roy_featured.featured-products .product-title a, .roy_featured.featured-products .product-price-and-shipping .price, .roy_featured.featured-products .product-price-and-shipping .regular-price {
            color:' . Configuration::get('NC_FEAT_TEXT') . ';
          }
          .roy_featured.featured-products .countcontainer .county i svg * {
            stroke:' . Configuration::get('NC_FEAT_TEXT') . '!important;
          }
          .roy_featured.featured-products .county .county-days-wrapper, .roy_featured.featured-products .county .county-hours-wrapper, .roy_featured.featured-products .county .county-minutes-wrapper, .roy_featured.featured-products .county .county-seconds-wrapper, .roy_featured.featured-products .county-label-days, .roy_featured.featured-products .county-label-hours, .roy_featured.featured-products .county-label-minutes, .roy_featured.featured-products .county-label-seconds
          {
            color:' . Configuration::get('NC_FEAT_TEXT') . '!important;
          }
          .roy_featured.featured-products .countcontainer {
            border-color:' . Configuration::get('NC_FEAT_TEXT') . ';
          }
        ';
        if (Configuration::get('RC_PL_TEXT_BGS') == "1") {
              $css .= '
              .roy_featured.featured-products .product-title a, .roy_featured.featured-products .product-price-and-shipping
              {
                box-shadow: -6px 0 0 6px ' . Configuration::get('NC_FEAT_TEXTBG') . ', 6px 0 0 6px ' . Configuration::get('NC_FEAT_TEXTBG') . ';
                background: ' . Configuration::get('NC_FEAT_TEXTBG') . ';
              }
              .roy_featured.featured-products .product-title a > span, .roy_featured.featured-products .product-price-and-shipping > span:not(.sr-only)
              {
                background: ' . Configuration::get('NC_FEAT_TEXTBG') . ';
              }

              ';
          }
      }
        $css .= '
          @media (min-width:480px) {
          .roy_featured.featured-products {
            padding-top:' . Configuration::get('NC_FEAT_TOPS') . 'px;
            padding-bottom:' . Configuration::get('NC_FEAT_BOTS') . 'px;
          } }
          @media (max-width:479px) {
          .roy_featured.featured-products {
            padding-top:40px!important;
            padding-bottom:40px;
          } }
        ';


// Best

        if (Configuration::get('NC_BEST_BG') =="1") {
        $css .= '
          .roy_best.featured-products {
              background:' . Configuration::get('NC_BEST_BC') . ';
          }
        ';}
        if (Configuration::get('NC_BEST_BG') == "2") {
        $css .= '
          .roy_best.featured-products {
              background: -webkit-linear-gradient(' . Configuration::get('NC_BEST_GG') . 'deg,' . Configuration::get('NC_BEST_GS') . ' 0%,' . Configuration::get('NC_BEST_GE') . ' 100%);
              background: -moz-linear-gradient(' . Configuration::get('NC_BEST_GG') . 'deg,' . Configuration::get('NC_BEST_GS') . ' 0%,' . Configuration::get('NC_BEST_GE') . ' 100%);
              background: -o-linear-gradient(' . Configuration::get('NC_BEST_GG') . 'deg,' . Configuration::get('NC_BEST_GS') . ' 0%,' . Configuration::get('NC_BEST_GE') . ' 100%);
              background: linear-gradient(' . Configuration::get('NC_BEST_GG') . 'deg,' . Configuration::get('NC_BEST_GS') . ' 0%,' . Configuration::get('NC_BEST_GE') . ' 100%);
          }
        ';}

        if (Configuration::get('NC_BEST_BG') == "1" || Configuration::get('NC_BEST_BG') == "2" ) {
        $css .= '
          @media (min-width:480px) {
          .roy_best.featured-products {
            margin-left:-80px;
            margin-right:-80px;
            padding-left:80px;
            padding-right:80px;
          } }
          @media (max-width:479px) {
          .roy_best.featured-products {
            margin-left:-40px;
            margin-right:-40px;
            padding-left:40px;
            padding-right:40px;

          } }

          .roy_best.featured-products .products-section-title, .roy_best.featured-products .products-section-title a {
            color:' . Configuration::get('NC_BEST_TITLE') . ';
          }
          .roy_best.featured-products .product-title a, .roy_best.featured-products .product-price-and-shipping .price, .roy_best.featured-products .product-price-and-shipping .regular-price {
            color:' . Configuration::get('NC_BEST_TEXT') . ';
          }
          .roy_best.featured-products .countcontainer .county i svg * {
            stroke:' . Configuration::get('NC_BEST_TEXT') . '!important;
          }
          .roy_best.featured-products .county .county-days-wrapper, .roy_best.featured-products .county .county-hours-wrapper, .roy_best.featured-products .county .county-minutes-wrapper, .roy_best.featured-products .county .county-seconds-wrapper, .roy_best.featured-products .county-label-days, .roy_best.featured-products .county-label-hours, .roy_best.featured-products .county-label-minutes, .roy_best.featured-products .county-label-seconds
          {
            color:' . Configuration::get('NC_BEST_TEXT') . '!important;
          }
          .roy_best.featured-products .countcontainer {
            border-color:' . Configuration::get('NC_BEST_TEXT') . ';
          }
        ';
        if (Configuration::get('RC_PL_TEXT_BGS') == "1") {
              $css .= '
              .roy_best.featured-products .product-title a, .roy_best.featured-products .product-price-and-shipping
              {
                box-shadow: -6px 0 0 6px ' . Configuration::get('NC_BEST_TEXTBG') . ', 6px 0 0 6px ' . Configuration::get('NC_BEST_TEXTBG') . ';
                background: ' . Configuration::get('NC_BEST_TEXTBG') . ';
              }
              .roy_best.featured-products .product-title a > span, .roy_best.featured-products .product-price-and-shipping > span:not(.sr-only)
              {
                background: ' . Configuration::get('NC_BEST_TEXTBG') . ';
              }
              ';
          }
      }
        $css .= '
          @media (min-width:480px) {
          .roy_best.featured-products {
            padding-top:' . Configuration::get('NC_BEST_TOPS') . 'px;
            padding-bottom:' . Configuration::get('NC_BEST_BOTS') . 'px;
          } }
          @media (max-width:479px) {
          .roy_best.featured-products {
            padding-top:40px;
            padding-bottom:40px;
          } }
        ';


// New

        if (Configuration::get('NC_NEW_BG') =="1") {
        $css .= '
          .roy_new.featured-products {
              background:' . Configuration::get('NC_NEW_BC') . ';
          }
        ';}
        if (Configuration::get('NC_NEW_BG') == "2") {
        $css .= '
          .roy_new.featured-products {
              background: -webkit-linear-gradient(' . Configuration::get('NC_NEW_GG') . 'deg,' . Configuration::get('NC_NEW_GS') . ' 0%,' . Configuration::get('NC_NEW_GE') . ' 100%);
              background: -moz-linear-gradient(' . Configuration::get('NC_NEW_GG') . 'deg,' . Configuration::get('NC_NEW_GS') . ' 0%,' . Configuration::get('NC_NEW_GE') . ' 100%);
              background: -o-linear-gradient(' . Configuration::get('NC_NEW_GG') . 'deg,' . Configuration::get('NC_NEW_GS') . ' 0%,' . Configuration::get('NC_NEW_GE') . ' 100%);
              background: linear-gradient(' . Configuration::get('NC_NEW_GG') . 'deg,' . Configuration::get('NC_NEW_GS') . ' 0%,' . Configuration::get('NC_NEW_GE') . ' 100%);
          }
        ';}

        if (Configuration::get('NC_NEW_BG') == "1" || Configuration::get('NC_NEW_BG') == "2" ) {
        $css .= '
          @media (min-width:480px) {
          .roy_new.featured-products {
            margin-left:-80px;
            margin-right:-80px;
            padding-left:80px;
            padding-right:80px;
          } }
          @media (max-width:479px) {
          .roy_new.featured-products {
            margin-left:-40px;
            margin-right:-40px;
            padding-left:40px;
            padding-right:40px;

          } }

          .roy_new.featured-products .products-section-title, .roy_new.featured-products .products-section-title a {
            color:' . Configuration::get('NC_NEW_TITLE') . ';
          }
          .roy_new.featured-products .product-title a, .roy_new.featured-products .product-price-and-shipping .price, .roy_new.featured-products .product-price-and-shipping .regular-price {
            color:' . Configuration::get('NC_NEW_TEXT') . ';
          }
          .roy_new.featured-products .countcontainer .county i svg * {
            stroke:' . Configuration::get('NC_NEW_TEXT') . '!important;
          }
          .roy_new.featured-products .county .county-days-wrapper, .roy_new.featured-products .county .county-hours-wrapper, .roy_new.featured-products .county .county-minutes-wrapper, .roy_new.featured-products .county .county-seconds-wrapper, .roy_new.featured-products .county-label-days, .roy_new.featured-products .county-label-hours, .roy_new.featured-products .county-label-minutes, .roy_new.featured-products .county-label-seconds
          {
            color:' . Configuration::get('NC_NEW_TEXT') . '!important;
          }
          .roy_new.featured-products .countcontainer {
            border-color:' . Configuration::get('NC_NEW_TEXT') . ';
          }
        ';
        if (Configuration::get('RC_PL_TEXT_BGS') == "1") {
              $css .= '
              .roy_new.featured-products .product-title a, .roy_new.featured-products .product-price-and-shipping
              {
                box-shadow: -6px 0 0 6px ' . Configuration::get('NC_NEW_TEXTBG') . ', 6px 0 0 6px ' . Configuration::get('NC_NEW_TEXTBG') . ';
                background: ' . Configuration::get('NC_NEW_TEXTBG') . ';
              }
              .roy_new.featured-products .product-title a > span, .roy_new.featured-products .product-price-and-shipping > span:not(.sr-only)
              {
                background: ' . Configuration::get('NC_NEW_TEXTBG') . ';
              }
              ';
          }
      }
        $css .= '
          @media (min-width:480px) {
          .roy_new.featured-products {
            padding-top:' . Configuration::get('NC_NEW_TOPS') . 'px;
            padding-bottom:' . Configuration::get('NC_NEW_BOTS') . 'px;
          } }
          @media (max-width:479px) {
          .roy_new.featured-products {
            padding-top:40px;
            padding-bottom:40px;
          } }
        ';


// SPECIALS

        if (Configuration::get('NC_SALE_BG') =="1") {
        $css .= '
          .roy_specials.featured-products {
              background:' . Configuration::get('NC_SALE_BC') . ';
          }
        ';}
        if (Configuration::get('NC_SALE_BG') == "2") {
        $css .= '
          .roy_specials.featured-products {
              background: -webkit-linear-gradient(' . Configuration::get('NC_SALE_GG') . 'deg,' . Configuration::get('NC_SALE_GS') . ' 0%,' . Configuration::get('NC_SALE_GE') . ' 100%);
              background: -moz-linear-gradient(' . Configuration::get('NC_SALE_GG') . 'deg,' . Configuration::get('NC_SALE_GS') . ' 0%,' . Configuration::get('NC_SALE_GE') . ' 100%);
              background: -o-linear-gradient(' . Configuration::get('NC_SALE_GG') . 'deg,' . Configuration::get('NC_SALE_GS') . ' 0%,' . Configuration::get('NC_SALE_GE') . ' 100%);
              background: linear-gradient(' . Configuration::get('NC_SALE_GG') . 'deg,' . Configuration::get('NC_SALE_GS') . ' 0%,' . Configuration::get('NC_SALE_GE') . ' 100%);
          }
        ';}

        if (Configuration::get('NC_SALE_BG') == "1" || Configuration::get('NC_SALE_BG') == "2" ) {
        $css .= '
          @media (min-width:480px) {
          .roy_specials.featured-products {
            margin-left:-80px;
            margin-right:-80px;
            padding-left:80px;
            padding-right:80px;
          } }
          @media (max-width:479px) {
          .roy_specials.featured-products {
            margin-left:-40px;
            margin-right:-40px;
            padding-left:40px;
            padding-right:40px;

          } }

          .roy_specials.featured-products .products-section-title, .roy_specials.featured-products .products-section-title a {
            color:' . Configuration::get('NC_SALE_TITLE') . ';
          }
          .roy_specials.featured-products .product-title a, .roy_specials.featured-products .product-price-and-shipping .price, .roy_specials.featured-products .product-price-and-shipping .regular-price {
            color:' . Configuration::get('NC_SALE_TEXT') . ';
          }
          .roy_specials.featured-products .countcontainer .county i svg * {
            stroke:' . Configuration::get('NC_SALE_TEXT') . '!important;
          }
          .roy_specials.featured-products .county .county-days-wrapper, .roy_specials.featured-products .county .county-hours-wrapper, .roy_specials.featured-products .county .county-minutes-wrapper, .roy_specials.featured-products .county .county-seconds-wrapper, .roy_specials.featured-products .county-label-days, .roy_specials.featured-products .county-label-hours, .roy_specials.featured-products .county-label-minutes, .roy_specials.featured-products .county-label-seconds
          {
            color:' . Configuration::get('NC_SALE_TEXT') . '!important;
          }
          .roy_specials.featured-products .countcontainer {
            border-color:' . Configuration::get('NC_SALE_TEXT') . ';
          }
        ';
        if (Configuration::get('RC_PL_TEXT_BGS') == "1") {
              $css .= '
              .roy_specials.featured-products .product-title a, .roy_specials.featured-products .product-price-and-shipping
              {
                box-shadow: -6px 0 0 6px ' . Configuration::get('NC_SALE_TEXTBG') . ', 6px 0 0 6px ' . Configuration::get('NC_SALE_TEXTBG') . ';
                background: ' . Configuration::get('NC_SALE_TEXTBG') . ';
              }
              .roy_specials.featured-products .product-title a > span, .roy_specials.featured-products .product-price-and-shipping > span:not(.sr-only)
              {
                background: ' . Configuration::get('NC_SALE_TEXTBG') . ';
              }
              ';
          }
      }
        $css .= '
          @media (min-width:480px) {
          .roy_specials.featured-products {
            padding-top:' . Configuration::get('NC_SALE_TOPS') . 'px;
            padding-bottom:' . Configuration::get('NC_SALE_BOTS') . 'px;
          } }
          @media (max-width:479px) {
          .roy_specials.featured-products {
            padding-top:40px;
            padding-bottom:40px;
          } }
        ';


// CC1

        if (Configuration::get('NC_CC1_BG') =="1") {
        $css .= '
          .roy_cc1.featured-products {
              background:' . Configuration::get('NC_CC1_BC') . ';
          }
        ';}
        if (Configuration::get('NC_CC1_BG') == "2") {
        $css .= '
          .roy_cc1.featured-products {
              background: -webkit-linear-gradient(' . Configuration::get('NC_CC1_GG') . 'deg,' . Configuration::get('NC_CC1_GS') . ' 0%,' . Configuration::get('NC_CC1_GE') . ' 100%);
              background: -moz-linear-gradient(' . Configuration::get('NC_CC1_GG') . 'deg,' . Configuration::get('NC_CC1_GS') . ' 0%,' . Configuration::get('NC_CC1_GE') . ' 100%);
              background: -o-linear-gradient(' . Configuration::get('NC_CC1_GG') . 'deg,' . Configuration::get('NC_CC1_GS') . ' 0%,' . Configuration::get('NC_CC1_GE') . ' 100%);
              background: linear-gradient(' . Configuration::get('NC_CC1_GG') . 'deg,' . Configuration::get('NC_CC1_GS') . ' 0%,' . Configuration::get('NC_CC1_GE') . ' 100%);
          }
        ';}

        if (Configuration::get('NC_CC1_BG') == "1" || Configuration::get('NC_CC1_BG') == "2" ) {
        $css .= '
          @media (min-width:480px) {
          .roy_cc1.featured-products {
            margin-left:-80px;
            margin-right:-80px;
            padding-left:80px;
            padding-right:80px;
          } }
          @media (max-width:479px) {
          .roy_cc1.featured-products {
            margin-left:-40px;
            margin-right:-40px;
            padding-left:40px;
            padding-right:40px;

          } }

          .roy_cc1.featured-products .products-section-title, .roy_cc1.featured-products .products-section-title a {
            color:' . Configuration::get('NC_CC1_TITLE') . ';
          }
          .roy_cc1.featured-products .product-title a, .roy_cc1.featured-products .product-price-and-shipping .price, .roy_cc1.featured-products .product-price-and-shipping .regular-price {
            color:' . Configuration::get('NC_CC1_TEXT') . ';
          }
          .roy_cc1.featured-products .countcontainer .county i svg * {
            stroke:' . Configuration::get('NC_CC1_TEXT') . '!important;
          }
          .roy_cc1.featured-products .county .county-days-wrapper, .roy_cc1.featured-products .county .county-hours-wrapper, .roy_cc1.featured-products .county .county-minutes-wrapper, .roy_cc1.featured-products .county .county-seconds-wrapper, .roy_cc1.featured-products .county-label-days, .roy_cc1.featured-products .county-label-hours, .roy_cc1.featured-products .county-label-minutes, .roy_cc1.featured-products .county-label-seconds
          {
            color:' . Configuration::get('NC_CC1_TEXT') . '!important;
          }
          .roy_cc1.featured-products .countcontainer {
            border-color:' . Configuration::get('NC_CC1_TEXT') . ';
          }
        ';
        if (Configuration::get('RC_PL_TEXT_BGS') == "1") {
              $css .= '
              .roy_cc1.featured-products .product-title a, .roy_cc1.featured-products .product-price-and-shipping
              {
                box-shadow: -6px 0 0 6px ' . Configuration::get('NC_CC1_TEXTBG') . ', 6px 0 0 6px ' . Configuration::get('NC_CC1_TEXTBG') . ';
                background: ' . Configuration::get('NC_CC1_TEXTBG') . ';
              }
              .roy_cc1.featured-products .product-title a > span, .roy_cc1.featured-products .product-price-and-shipping > span:not(.sr-only)
              {
                background: ' . Configuration::get('NC_CC1_TEXTBG') . ';
              }
              ';
          }
      }
        $css .= '
          @media (min-width:480px) {
          .roy_cc1.featured-products {
            padding-top:' . Configuration::get('NC_CC1_TOPS') . 'px;
            padding-bottom:' . Configuration::get('NC_CC1_BOTS') . 'px;
          } }
          @media (max-width:479px) {
          .roy_cc1.featured-products {
            padding-top:40px;
            padding-bottom:40px;
          } }
        ';


// CC2

        if (Configuration::get('NC_CC2_BG') =="1") {
        $css .= '
          .roy_cc2.featured-products {
              background:' . Configuration::get('NC_CC2_BC') . ';
          }
        ';}
        if (Configuration::get('NC_CC2_BG') == "2") {
        $css .= '
          .roy_cc2.featured-products {
              background: -webkit-linear-gradient(' . Configuration::get('NC_CC2_GG') . 'deg,' . Configuration::get('NC_CC2_GS') . ' 0%,' . Configuration::get('NC_CC2_GE') . ' 100%);
              background: -moz-linear-gradient(' . Configuration::get('NC_CC2_GG') . 'deg,' . Configuration::get('NC_CC2_GS') . ' 0%,' . Configuration::get('NC_CC2_GE') . ' 100%);
              background: -o-linear-gradient(' . Configuration::get('NC_CC2_GG') . 'deg,' . Configuration::get('NC_CC2_GS') . ' 0%,' . Configuration::get('NC_CC2_GE') . ' 100%);
              background: linear-gradient(' . Configuration::get('NC_CC2_GG') . 'deg,' . Configuration::get('NC_CC2_GS') . ' 0%,' . Configuration::get('NC_CC2_GE') . ' 100%);
          }
        ';}

        if (Configuration::get('NC_CC2_BG') == "1" || Configuration::get('NC_CC2_BG') == "2" ) {
        $css .= '
          @media (min-width:480px) {
          .roy_cc2.featured-products {
            margin-left:-80px;
            margin-right:-80px;
            padding-left:80px;
            padding-right:80px;
          } }
          @media (max-width:479px) {
          .roy_cc2.featured-products {
            margin-left:-40px;
            margin-right:-40px;
            padding-left:40px;
            padding-right:40px;

          } }

          .roy_cc2.featured-products .products-section-title, .roy_cc2.featured-products .products-section-title a {
            color:' . Configuration::get('NC_CC2_TITLE') . ';
          }
          .roy_cc2.featured-products .product-title a, .roy_cc2.featured-products .product-price-and-shipping .price, .roy_cc2.featured-products .product-price-and-shipping .regular-price {
            color:' . Configuration::get('NC_CC2_TEXT') . ';
          }
          .roy_cc2.featured-products .countcontainer .county i svg * {
            stroke:' . Configuration::get('NC_CC2_TEXT') . '!important;
          }
          .roy_cc2.featured-products .county .county-days-wrapper, .roy_cc2.featured-products .county .county-hours-wrapper, .roy_cc2.featured-products .county .county-minutes-wrapper, .roy_cc2.featured-products .county .county-seconds-wrapper, .roy_cc2.featured-products .county-label-days, .roy_cc2.featured-products .county-label-hours, .roy_cc2.featured-products .county-label-minutes, .roy_cc2.featured-products .county-label-seconds
          {
            color:' . Configuration::get('NC_CC2_TEXT') . '!important;
          }
          .roy_cc2.featured-products .countcontainer {
            border-color:' . Configuration::get('NC_CC2_TEXT') . ';
          }
        ';
        if (Configuration::get('RC_PL_TEXT_BGS') == "1") {
              $css .= '
              .roy_cc2.featured-products .product-title a, .roy_cc2.featured-products .product-price-and-shipping
              {
                box-shadow: -6px 0 0 6px ' . Configuration::get('NC_CC2_TEXTBG') . ', 6px 0 0 6px ' . Configuration::get('NC_CC2_TEXTBG') . ';
                background: ' . Configuration::get('NC_CC2_TEXTBG') . ';
              }
              .roy_cc2.featured-products .product-title a > span, .roy_cc2.featured-products .product-price-and-shipping > span:not(.sr-only)
              {
                background: ' . Configuration::get('NC_CC2_TEXTBG') . ';
              }
              ';
          }
      }
        $css .= '
          @media (min-width:480px) {
          .roy_cc2.featured-products {
            padding-top:' . Configuration::get('NC_CC2_TOPS') . 'px;
            padding-bottom:' . Configuration::get('NC_CC2_BOTS') . 'px;
          } }
          @media (max-width:479px) {
          .roy_cc2.featured-products {
            padding-top:40px;
            padding-bottom:40px;
          } }
        ';


// CC3

        if (Configuration::get('NC_CC3_BG') =="1") {
        $css .= '
          .roy_cc3.featured-products {
              background:' . Configuration::get('NC_CC3_BC') . ';
          }
        ';}
        if (Configuration::get('NC_CC3_BG') == "2") {
        $css .= '
          .roy_cc3.featured-products {
              background: -webkit-linear-gradient(' . Configuration::get('NC_CC3_GG') . 'deg,' . Configuration::get('NC_CC3_GS') . ' 0%,' . Configuration::get('NC_CC3_GE') . ' 100%);
              background: -moz-linear-gradient(' . Configuration::get('NC_CC3_GG') . 'deg,' . Configuration::get('NC_CC3_GS') . ' 0%,' . Configuration::get('NC_CC3_GE') . ' 100%);
              background: -o-linear-gradient(' . Configuration::get('NC_CC3_GG') . 'deg,' . Configuration::get('NC_CC3_GS') . ' 0%,' . Configuration::get('NC_CC3_GE') . ' 100%);
              background: linear-gradient(' . Configuration::get('NC_CC3_GG') . 'deg,' . Configuration::get('NC_CC3_GS') . ' 0%,' . Configuration::get('NC_CC3_GE') . ' 100%);
          }
        ';}

        if (Configuration::get('NC_CC3_BG') == "1" || Configuration::get('NC_CC3_BG') == "2" ) {
        $css .= '
          @media (min-width:480px) {
          .roy_cc3.featured-products {
            margin-left:-80px;
            margin-right:-80px;
            padding-left:80px;
            padding-right:80px;
          } }
          @media (max-width:479px) {
          .roy_cc3.featured-products {
            margin-left:-40px;
            margin-right:-40px;
            padding-left:40px;
            padding-right:40px;

          } }

          .roy_cc3.featured-products .products-section-title, .roy_cc3.featured-products .products-section-title a {
            color:' . Configuration::get('NC_CC3_TITLE') . ';
          }
          .roy_cc3.featured-products .product-title a, .roy_cc3.featured-products .product-price-and-shipping .price, .roy_cc3.featured-products .product-price-and-shipping .regular-price {
            color:' . Configuration::get('NC_CC3_TEXT') . ';
          }
          .roy_cc3.featured-products .countcontainer .county i svg * {
            stroke:' . Configuration::get('NC_CC3_TEXT') . '!important;
          }
          .roy_cc3.featured-products .county .county-days-wrapper, .roy_cc3.featured-products .county .county-hours-wrapper, .roy_cc3.featured-products .county .county-minutes-wrapper, .roy_cc3.featured-products .county .county-seconds-wrapper, .roy_cc3.featured-products .county-label-days, .roy_cc3.featured-products .county-label-hours, .roy_cc3.featured-products .county-label-minutes, .roy_cc3.featured-products .county-label-seconds
          {
            color:' . Configuration::get('NC_CC3_TEXT') . '!important;
          }
          .roy_cc3.featured-products .countcontainer {
            border-color:' . Configuration::get('NC_CC3_TEXT') . ';
          }
        ';
        if (Configuration::get('RC_PL_TEXT_BGS') == "1") {
              $css .= '
              .roy_cc3.featured-products .product-title a, .roy_cc3.featured-products .product-price-and-shipping
              {
                box-shadow: -6px 0 0 6px ' . Configuration::get('NC_CC3_TEXTBG') . ', 6px 0 0 6px ' . Configuration::get('NC_CC3_TEXTBG') . ';
                background: ' . Configuration::get('NC_CC3_TEXTBG') . ';
              }
              .roy_cc3.featured-products .product-title a > span, .roy_cc3.featured-products .product-price-and-shipping > span:not(.sr-only)
              {
                background: ' . Configuration::get('NC_CC3_TEXTBG') . ';
              }
              ';
          }
      }
        $css .= '
          @media (min-width:480px) {
          .roy_cc3.featured-products {
            padding-top:' . Configuration::get('NC_CC3_TOPS') . 'px;
            padding-bottom:' . Configuration::get('NC_CC3_BOTS') . 'px;
          } }
          @media (max-width:479px) {
          .roy_cc3.featured-products {
            padding-top:40px;
            padding-bottom:40px;
          } }
        ';













// Best
if (Configuration::get('NC_CAROUSEL_BEST') == "2") {
    if (Configuration::get('NC_ITEMS_BEST') =="2") {
        $css .= '
              @media (min-width:480px) {
              .roy_best.featured-products .product-item {
                    width:50%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_BEST') =="4") {
        $css .= '
              @media (min-width:480px) {
              .roy_best.featured-products .product-item {
                    width:25%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_BEST') =="5") {
        $css .= '
              @media (min-width:480px) {
              .roy_best.featured-products .product-item {
                    width:20%;
              } }
        '; }
}

// NEW
if (Configuration::get('NC_CAROUSEL_NEW') == "2") {
    if (Configuration::get('NC_ITEMS_NEW') =="2") {
        $css .= '
              @media (min-width:480px) {
              .roy_new.featured-products .product-item {
                    width:50%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_NEW') =="4") {
        $css .= '
              @media (min-width:480px) {
              .roy_new.featured-products .product-item {
                    width:25%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_NEW') =="5") {
        $css .= '
              @media (min-width:480px) {
              .roy_new.featured-products .product-item {
                    width:20%;
              } }
        '; }
}

// SALE
if (Configuration::get('NC_CAROUSEL_SALE') == "2") {
    if (Configuration::get('NC_ITEMS_SALE') =="2") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:50%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_SALE') =="4") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:25%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_SALE') =="5") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:20%;
              } }
        '; }
}

// CC1
if (Configuration::get('NC_CAROUSEL_CUSTOM1') == "2") {
    if (Configuration::get('NC_ITEMS_CUSTOM1') =="2") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:50%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_CUSTOM1') =="4") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:25%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_CUSTOM1') =="5") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:20%;
              } }
        '; }
}

// CC2
if (Configuration::get('NC_CAROUSEL_CUSTOM2') == "2") {
    if (Configuration::get('NC_ITEMS_CUSTOM2') =="2") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:50%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_CUSTOM2') =="4") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:25%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_CUSTOM2') =="5") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:20%;
              } }
        '; }
}

// CC3
if (Configuration::get('NC_CAROUSEL_CUSTOM3') == "2") {
    if (Configuration::get('NC_ITEMS_CUSTOM3') =="2") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:50%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_CUSTOM3') =="4") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:25%;
              } }
        '; }
    if (Configuration::get('NC_ITEMS_CUSTOM3') =="5") {
        $css .= '
              @media (min-width:480px) {
              .roy_specials.featured-products .product-item {
                    width:20%;
              } }
        '; }
}



// ___ Shop Pages
// Sections
// Top Scetion
      if (Configuration::get('NC_OT_BGS') == "1") {
      $css .= 'body:not(#index) #top_column { background-color: ' . Configuration::get('NC_OT_BC') . ' }
      '; }

      if (Configuration::get('NC_OT_BGS') == "2") {
      $css .= 'body:not(#index) #top_column {
                  background: -webkit-linear-gradient(' . Configuration::get('NC_OT_GG') . 'deg,' . Configuration::get('NC_OT_GS') . ' 0%,' . Configuration::get('NC_OT_GE') . ' 100%);
                  background: -moz-linear-gradient(' . Configuration::get('NC_OT_GG') . 'deg,' . Configuration::get('NC_OT_GS') . ' 0%,' . Configuration::get('NC_OT_GE') . ' 100%);
                  background: -o-linear-gradient(' . Configuration::get('NC_OT_GG') . 'deg,' . Configuration::get('NC_OT_GS') . ' 0%,' . Configuration::get('NC_OT_GE') . ' 100%);
                  background: linear-gradient(' . Configuration::get('NC_OT_GG') . 'deg,' . Configuration::get('NC_OT_GS') . ' 0%,' . Configuration::get('NC_OT_GE') . ' 100%);
            }
      '; }

      if (Configuration::get('NC_OT_BGS') == "3") {

            if (Configuration::get('NC_OT_IM_BG_EXT')) {
                  if (Shop::getContext() == Shop::CONTEXT_SHOP)
                  $adv_imgname = 'nc_ot_im_background'.'-'.(int)$this->context->shop->getContextShopID();
                  $css .= '
                      body:not(#index) #top_column {
                      background-image: url(../upload/'.$adv_imgname.'.' . Configuration::get('NC_OT_IM_BG_EXT') . '); }
                      ';
                  if (Configuration::get('NC_OT_IM_BG_FIXED')) {
                      $css .= 'body:not(#index) #top_column { background-attachment:fixed; }
                      ';
                  }
            }
            if (Configuration::get('NC_OT_IM_BG_REPEAT')) {
                  switch(Configuration::get('NC_OT_IM_BG_REPEAT')) {
                      case 1 :
                          $repeat_option = 'repeat-x';
                          break;
                      case 2 :
                          $repeat_option = 'repeat-y';
                          break;
                      case 3 :
                          $repeat_option = 'no-repeat';
                          break;
                      default :
                          $repeat_option = 'repeat';
                  }
                  $css .= 'body:not(#index) #top_column { background-repeat: ' . $repeat_option . '; }
                  ';
            }
            if (Configuration::get('NC_OT_IM_BG_POSITION')) {
                  switch(Configuration::get('NC_OT_IM_BG_POSITION')) {
                      case 1 :
                          $position_option = 'center top';
                          break;
                      case 2 :
                          $position_option = 'right top';
                          break;
                      default :
                          $position_option = 'left top';
                  }
                  $css .= 'body:not(#index) #top_column { background-position: ' . $position_option . '; }
                  ';
            }
      }
      if (Configuration::get('NC_OT_BGS') == "4") {
        $css .= 'body:not(#index) #top_column { background: none; }';
      }



      if (Configuration::get('NC_OT_WIDTH') == "2") {
      $css .= '

      @media(min-width:992px) {
        body:not(#index) #top_column > .container { max-width: 100%; width: auto; padding: 0 80px; }
      }
      ';
          if (Configuration::get('NC_OT_PAD') == "2") {
          $css .= '
          body:not(#index) #top_column > .container { padding-left:0; padding-right:0; }
          ';
        }
      }


      $css .= '
      body:not(#index) #top_column { padding-top:' . Configuration::get('NC_OT_TOPS') . 'px; padding-bottom:' . Configuration::get('NC_OT_BOTS') . 'px; }
      @media(max-width:992px) {
        body:not(#index) #top_column { padding-top:40px; padding-bottom:40px; }
      }
      ';

// Middle Scetion

      $css .= '
      .radio-label:before { box-shadow: inset 0 0 0 8px ' . Configuration::get('NC_OM_BC') . ', 0 0 0 3px ' . Configuration::get('NC_OM_BC') . '; }

      .color:hover:before, .custom-checkbox input[type=checkbox]+span.color:hover:before { box-shadow: inset 0 0 0 7px ' . Configuration::get('NC_OM_BC') . ', 0 0 0 0 ' . Configuration::get('RC_I_B_COLOR') . '; }
      .color:before, .custom-checkbox input[type=checkbox]+span.color:before { box-shadow: inset 0 0 0 8px ' . Configuration::get('NC_OM_BC') . ', 0 0 0 3px ' . Configuration::get('NC_OM_BC') . '; }

      .modal-content, .fancybox-skin, .fancybox-inner, #new_comment_form {
        background: ' . Configuration::get('RC_G_BG_CONTENT') . '!important;
      }

      .fancybox-wrap .fancybox-close {
        border-radius:50%;
        top: -21px;
        right: -21px;
        width: 42px;
        height: 42px;
        color:#ffffff;
        background: url(../images/x.svg) center center no-repeat #1c1c1c;
        background-size:14px 14px;
      }
      ';

      if (Configuration::get('NC_OM_BGS') == "1") {
      $css .= 'body:not(#index) #main { background-color: ' . Configuration::get('NC_OM_BC') . ' }
      '; }

      if (Configuration::get('NC_OM_BGS') == "2") {
      $css .= 'body:not(#index) #main {
                  background: -webkit-linear-gradient(' . Configuration::get('NC_OM_GG') . 'deg,' . Configuration::get('NC_OM_GS') . ' 0%,' . Configuration::get('NC_OM_GE') . ' 100%);
                  background: -moz-linear-gradient(' . Configuration::get('NC_OM_GG') . 'deg,' . Configuration::get('NC_OM_GS') . ' 0%,' . Configuration::get('NC_OM_GE') . ' 100%);
                  background: -o-linear-gradient(' . Configuration::get('NC_OM_GG') . 'deg,' . Configuration::get('NC_OM_GS') . ' 0%,' . Configuration::get('NC_OM_GE') . ' 100%);
                  background: linear-gradient(' . Configuration::get('NC_OM_GG') . 'deg,' . Configuration::get('NC_OM_GS') . ' 0%,' . Configuration::get('NC_OM_GE') . ' 100%);
            }
      '; }

      if (Configuration::get('NC_OM_BGS') == "3") {

            if (Configuration::get('NC_OM_IM_BG_EXT')) {
                  if (Shop::getContext() == Shop::CONTEXT_SHOP)
                  $adv_imgname = 'nc_om_im_background'.'-'.(int)$this->context->shop->getContextShopID();
                  $css .= '
                      body:not(#index) #main {
                      background-image: url(../upload/'.$adv_imgname.'.' . Configuration::get('NC_OM_IM_BG_EXT') . '); }
                      ';
                  if (Configuration::get('NC_OM_IM_BG_FIXED')) {
                      $css .= 'body:not(#index) #main { background-attachment:fixed; }
                      ';
                  }
            }
            if (Configuration::get('NC_OM_IM_BG_REPEAT')) {
                  switch(Configuration::get('NC_OM_IM_BG_REPEAT')) {
                      case 1 :
                          $repeat_option = 'repeat-x';
                          break;
                      case 2 :
                          $repeat_option = 'repeat-y';
                          break;
                      case 3 :
                          $repeat_option = 'no-repeat';
                          break;
                      default :
                          $repeat_option = 'repeat';
                  }
                  $css .= 'body:not(#index) #main { background-repeat: ' . $repeat_option . '; }
                  ';
            }
            if (Configuration::get('NC_OM_IM_BG_POSITION')) {
                  switch(Configuration::get('NC_OM_IM_BG_POSITION')) {
                      case 1 :
                          $position_option = 'center top';
                          break;
                      case 2 :
                          $position_option = 'right top';
                          break;
                      default :
                          $position_option = 'left top';
                  }
                  $css .= 'body:not(#index) #main { background-position: ' . $position_option . '; }
                  ';
            }
      }
      if (Configuration::get('NC_OM_BGS') == "4") {
        $css .= 'body:not(#index) #main { background: none; }';
      }
      $css .= 'body:not(#index) #main { padding-top:' . Configuration::get('NC_OM_TOPS') . 'px; padding-bottom:' . Configuration::get('NC_OM_BOTS') . 'px; }';

// Bottom Scetion
      if (Configuration::get('NC_OB_BGS') == "1") {
      $css .= 'body:not(#index) #bottom_column { background-color: ' . Configuration::get('NC_OB_BC') . ' }
      '; }

      if (Configuration::get('NC_OB_BGS') == "2") {
      $css .= 'body:not(#index) #bottom_column {
                  background: -webkit-linear-gradient(' . Configuration::get('NC_OB_GG') . 'deg,' . Configuration::get('NC_OB_GS') . ' 0%,' . Configuration::get('NC_OB_GE') . ' 100%);
                  background: -moz-linear-gradient(' . Configuration::get('NC_OB_GG') . 'deg,' . Configuration::get('NC_OB_GS') . ' 0%,' . Configuration::get('NC_OB_GE') . ' 100%);
                  background: -o-linear-gradient(' . Configuration::get('NC_OB_GG') . 'deg,' . Configuration::get('NC_OB_GS') . ' 0%,' . Configuration::get('NC_OB_GE') . ' 100%);
                  background: linear-gradient(' . Configuration::get('NC_OB_GG') . 'deg,' . Configuration::get('NC_OB_GS') . ' 0%,' . Configuration::get('NC_OB_GE') . ' 100%);
            }
      '; }

      if (Configuration::get('NC_OB_BGS') == "3") {

            if (Configuration::get('NC_OB_IM_BG_EXT')) {
                  if (Shop::getContext() == Shop::CONTEXT_SHOP)
                  $adv_imgname = 'nc_ob_im_background'.'-'.(int)$this->context->shop->getContextShopID();
                  $css .= '
                      body:not(#index) #bottom_column {
                      background-image: url(../upload/'.$adv_imgname.'.' . Configuration::get('NC_OB_IM_BG_EXT') . '); }
                      ';
                  if (Configuration::get('NC_OB_IM_BG_FIXED')) {
                      $css .= 'body:not(#index) #bottom_column { background-attachment:fixed; }
                      ';
                  }
            }
            if (Configuration::get('NC_OB_IM_BG_REPEAT')) {
                  switch(Configuration::get('NC_OB_IM_BG_REPEAT')) {
                      case 1 :
                          $repeat_option = 'repeat-x';
                          break;
                      case 2 :
                          $repeat_option = 'repeat-y';
                          break;
                      case 3 :
                          $repeat_option = 'no-repeat';
                          break;
                      default :
                          $repeat_option = 'repeat';
                  }
                  $css .= 'body:not(#index) #bottom_column { background-repeat: ' . $repeat_option . '; }
                  ';
            }
            if (Configuration::get('NC_OB_IM_BG_POSITION')) {
                  switch(Configuration::get('NC_OB_IM_BG_POSITION')) {
                      case 1 :
                          $position_option = 'center top';
                          break;
                      case 2 :
                          $position_option = 'right top';
                          break;
                      default :
                          $position_option = 'left top';
                  }
                  $css .= 'body:not(#index) #bottom_column { background-position: ' . $position_option . '; }
                  ';
            }
      }
      if (Configuration::get('NC_OB_BGS') == "4") {
        $css .= 'body:not(#index) #bottom_column { background: none; }';
      }
      $css .= 'body:not(#index) #bottom_column { padding-top:' . Configuration::get('NC_OB_TOPS') . 'px; padding-bottom:' . Configuration::get('NC_OB_BOTS') . 'px; }';


      $css .= '
      body:not(#index) .bread_wrapper { padding-top:' . Configuration::get('RC_B_TOPS') . 'px; padding-bottom:' . Configuration::get('RC_B_BOTS') . 'px; }
      @media(max-width:992px) {
        body:not(#index) #top_column { padding-top:60px; padding-bottom:60px; }
        body:not(#index) .bread_wrapper { padding:0; }
      }
      ';


          if (Configuration::get('NC_HT_TOPS') > "40") {
            $css .= '
            @media(max-width:991px) { body#index #top_column { padding-top:40px; } }';
          }
          if (Configuration::get('NC_HT_BOTS') > "40") {
            $css .= '
            @media(max-width:991px) { body#index #top_column { padding-bottom:40px; } }';
          }

          if (Configuration::get('NC_HB_TOPS') > "40") {
            $css .= '
            @media(max-width:991px) { body#index #bottom_column { padding-top:40px; } }';
          }
          if (Configuration::get('NC_HB_BOTS') > "40") {
            $css .= '
            @media(max-width:991px) { body#index #bottom_column { padding-bottom:40px; } }';
          }

          if (Configuration::get('NC_OT_TOPS') > "40") {
            $css .= '
            @media(max-width:991px) { body:not(#index) #top_column { padding-top:40px; } }';
          }
          if (Configuration::get('NC_OT_BOTS') > "40") {
            $css .= '
            @media(max-width:991px) { body:not(#index) #top_column { padding-bottom:40px; } }';
          }
          if (Configuration::get('NC_OM_TOPS') > "40") {
            $css .= '
            @media(max-width:991px) { body:not(#index) #main { padding-top:40px; } }';
          }
          if (Configuration::get('NC_OM_BOTS') > "40") {
            $css .= '
            @media(max-width:991px) { body:not(#index) #main { padding-bottom:40px; } }';
          }
          if (Configuration::get('NC_OB_TOPS') > "40") {
            $css .= '
            @media(max-width:991px) { body:not(#index) #bottom_column { padding-top:40px; } }';
          }
          if (Configuration::get('NC_OB_BOTS') > "40") {
            $css .= '
            @media(max-width:991px) { body:not(#index) #bottom_column { padding-bottom:40px; } }';
          }




      if (Configuration::get('RC_B_W') == "2") {
          $css .= '
          .bread_wrapper > .container {
            max-width: 100%;
            width: auto;
            padding: 0 80px;
          }
          @media(max-width:992px) {
            .bread_wrapper > .container { padding:0 40px }
          }
      '; }

      if (Configuration::get('RC_B_LAYOUT') == "1") {
          $css .= '
          #top_column .breadcrumb { flex-direction:column; justify-content:center; }
          #top_column .breadcrumb .bread_name {
            margin-bottom:40px;
            font-size: ' . Configuration::get('RC_FS_PAGE_HEAD') . 'px;
            line-height: 1.1em;
            font-weight: ' . Configuration::get('RC_FW_PAGE_HEAD') . ';
            letter-spacing: ' . Configuration::get('RC_LS_PAGE_HEAD') . 'px;
            text-transform: ' . Configuration::get('RC_UP_PAGE_HEAD') . ';
          }
      '; }
      if (Configuration::get('RC_B_LAYOUT') == "2") {
          $css .= '
          #top_column .breadcrumb .bread_name { display:none }
          #top_column .breadcrumb { justify-content:center }
      '; }
      if (Configuration::get('RC_B_LAYOUT') == "3") {
          $css .= '
          #top_column .breadcrumb .bread_name { display:none }
      '; }
      if (Configuration::get('RC_B_LAYOUT') == "4") {
          $css .= '
          #top_column .breadcrumb { justify-content:space-between }
          #top_column .breadcrumb ol { margin-left:auto }
      '; }

      if (Configuration::get('RC_B_POS_CAT') == "2") {
          $css .= '
          #category #top_column .bread_wrapper { display:none }
      '; }
      if (Configuration::get('RC_B_POS_PRO') == "2") {
          $css .= '
          #product #top_column .bread_wrapper { display:none }
      '; }


      if (Configuration::get('RC_B_LINK')) {
            $css .= '
            #top_column .breadcrumb li a, #top_column .breadcrumb .bread_name { color: ' . Configuration::get('RC_B_LINK') . ' }
            #top_column .breadcrumb li > span { color: ' . Configuration::get('RC_B_LINK') . '; }
      			#top_column .breadcrumb li a:hover { color: ' . Configuration::get('RC_B_LINK_HOVER') . ' }
            #top_column .breadcrumb li:after { color: ' . Configuration::get('RC_B_SEPARATOR') . ' }

            #main .breadcrumb li a, #main .breadcrumb li:after { opacity:0.5 }
      			#main .breadcrumb li a:hover { opacity:1 }
      '; }

        if (Configuration::get('RC_PAGE_BQ_Q')) {
            $css .= '
                #main blockquote:before { color: ' . Configuration::get('RC_PAGE_BQ_Q') . ' }
                #main blockquote:after { background: ' . Configuration::get('RC_PAGE_BQ_Q') . ' }
            '; }

            $css .= '
                  .manufacturer-logo {
                    border:2px solid ' . Configuration::get('RC_G_BORDER') . ';
                  }
                .alert {
                  color: ' . Configuration::get('RC_G_BODY_TEXT') . '!important;
                  border-color: ' . Configuration::get('RC_G_BORDER') . '!important;
                }
                .alert:before {
                  background:none;
                }
                .alert-info:before { border: 5px solid ' . Configuration::get('RC_WARNING_MESSAGE_COLOR') . ' }
                .alert-warning:before { border: 5px solid ' . Configuration::get('RC_WARNING_MESSAGE_COLOR') . ' }
                .alert-success:before, .done:before { border: 5px solid ' . Configuration::get('RC_SUCCESS_MESSAGE_COLOR') . ' }
                .alert-danger:before { border: 5px solid ' . Configuration::get('RC_DANGER_MESSAGE_COLOR') . ' }
            ';


        if (Configuration::get('RC_CONTACT_ICON')) {
            $css .= '
            .contact-rich .block .icon svg * { stroke: ' . Configuration::get('RC_CONTACT_ICON') . '!important }
            '; }



            $css .= '
            @media(max-width:768px) {
              #main > .container, #bottom_column > .container, .layout-left-column #wrapper > .container, .layout-right-column #wrapper > .container {
                padding-left:40px!important;
                padding-right:40px!important;
              }
              .product-thumbs-wrapper {
                max-width:calc(100% - 80px)!important;
              }

            }
            ';

            if (Configuration::get('RC_W_ALL') == "1") {
            $css .= '

            '; }
            if (Configuration::get('RC_W_ALL') == "2") {
            $css .= '
            body:not(#index):not(#category):not(#product):not(#contact):not(#cart):not(#checkout):not(#my-account):not(#module-pk_favorites-account):not(.page-customer-account):not(.page-addresses):not(.page-order-detail):not(#cms):not(#blog):not(#module-ph_simpleblog-single):not(#module-ph_simpleblog-list):not(#module-ph_simpleblog-category) #main > .container { max-width: 100%; width: auto; padding: 0 80px; }

            body:not(#my-account):not(#category):not(.page-customer-account):not(.page-addresses).layout-left-column #wrapper > .container, body:not(#my-account):not(.page-customer-account).layout-right-column #wrapper > .container {
                max-width: 100%;
                width: auto;
                padding: 0 80px;
            }


            '; }
            if (Configuration::get('RC_W_CAT') == "2") {
            $css .= '
            #category #main > .container { max-width: 100%; width: auto; padding: 0 80px; }
            #category.layout-left-column #wrapper > .container, #category.layout-right-column #wrapper > .container { max-width: 100%; width: auto; padding: 0 80px; }
            '; }
            if (Configuration::get('RC_W_PRO') == "2") {
            $css .= '
            #product #main > .container { max-width: 100%; width: auto; padding: 0 80px; }
            '; }
            if (Configuration::get('RC_W_CON') == "2") {
            $css .= '
            #contact #main > .container { max-width: 100%; width: auto; padding: 0 80px; }
            '; }
            if (Configuration::get('RC_W_CART') == "1") {
            $css .= '
            .cart-grid-body .cart-container { padding-left: 0!important; }
            '; }
            if (Configuration::get('RC_W_CART') == "2") {
            $css .= '
            #cart #main > .container, #checkout #main > .container { max-width: 100%; width: auto; padding: 0 80px; }
            '; }
            if (Configuration::get('RC_W_ACC') == "2") {
            $css .= '
            #my-account #main > .container { max-width: 100%; width: auto; padding: 0 80px; }
            '; }
            if (Configuration::get('RC_W_CMS') == "1") {
            $css .= '
            @media (min-width: 992px) {
              #cms #main > .container { width: 760px; }
            }
            '; }
            if (Configuration::get('RC_W_CMS') == "3") {
            $css .= '
            #cms #main > .container { max-width: 100%; width: auto; padding: 0 80px; }
            '; }
            if (Configuration::get('RC_W_BLOG') == "1") {
            $css .= '
            @media (min-width: 992px) {
              #module-ph_simpleblog-single #main > .container, #module-ph_simpleblog-category #main > .container, #module-ph_simpleblog-list #main > .container { width: 760px; }
            }
            '; }
            if (Configuration::get('RC_W_BLOG') == "3") {
            $css .= '
              #module-ph_simpleblog-single #main > .container, #module-ph_simpleblog-category #main > .container, #module-ph_simpleblog-list #main > .container { max-width: 100%; width: auto; padding: 0 80px; }
            '; }






// ****************  SIDEBAR styles start

        $css .= '

          .products-selection, .pagination .page-list { border-top: 3px solid ' . Configuration::get('RC_G_EXTRA_BORDER') . ' }

          .active_filters { border-bottom: 3px solid ' . Configuration::get('RC_G_EXTRA_BORDER') . ' }
          .active_filters .filter-block { border-color: ' . Configuration::get('RC_G_NORMAL_BORDER') . ' }

          .products-sort-order .select-title, .products-sort-order .dropdown-menu { border: 2px solid ' . Configuration::get('RC_G_EXTRA_BORDER') . ' }
          .products-selection .sort-by {
            border-width: 2px 0 2px 2px;
            border-style: solid;
            border-color: ' . Configuration::get('RC_G_NORMAL_BORDER') . ' ;
          }
        ';

        if (Configuration::get('RC_SIDEBAR_TITLE_MARGIN')) {
            $css .= '
            .side-column>* .title.hidden-md-up, .side-column>.links h3, .side-column>.sidebar-block .sidebar-title { margin-bottom: ' . Configuration::get('RC_SIDEBAR_TITLE_MARGIN') . 'px; }
            '; }
        if (Configuration::get('RC_SIDEBAR_TITLE_B') == "1") {
            $css .= '
            .side-column>* .title.hidden-md-up, .side-column>.links h3, .side-column>.sidebar-block .sidebar-title {
              padding-bottom: ' . Configuration::get('RC_SIDEBAR_TITLE_PADDING') . 'px;
              border-bottom: ' . Configuration::get('RC_SIDEBAR_TITLE_BWIDTH') . 'px solid ' . Configuration::get('RC_SIDEBAR_TITLE_BORDER') . ';
            }
            '; }

        if (Configuration::get('RC_SIDEBAR_LINK')) {
            $css .= '
            .side-column a, .myacc_left .links a { color: ' . Configuration::get('RC_SIDEBAR_LINK') . '; }
            .myacc_left .links a i svg * { stroke:' . Configuration::get('RC_SIDEBAR_LINK') . '!important; }
            #roy_specials_col .flickity-button-icon { fill:' . Configuration::get('RC_SIDEBAR_LINK') . '!important; }
            '; }
        if (Configuration::get('RC_SIDEBAR_MARGIN')) {
            $css .= '
            .side-column>*, .side-column>.sidebar-block { margin-bottom: ' . Configuration::get('RC_SIDEBAR_MARGIN') . 'px; }
            '; }
        if (Configuration::get('RC_SIDEBAR_B') == "1") {
            $css .= '
            .side-column>*:not(:last-child), .side-column>.sidebar-block:not(:last-child) {
              padding-bottom: ' . Configuration::get('RC_SIDEBAR_PADDING') . 'px;
              border-bottom: ' . Configuration::get('RC_SIDEBAR_BWIDTH') . 'px solid ' . Configuration::get('RC_SIDEBAR_BORDER') . ';
            }
            '; }
        if (Configuration::get('RC_SIDEBAR_B') == "1" && Configuration::get('RC_SIDEBAR_BB') !== "1" ) {
            $css .= '
            #search_filters_wrapper {
              padding-bottom:0;
              border:none;
            }
            #search_filters_wrapper #search_filters > section:last-child {
              padding-bottom: ' . Configuration::get('RC_SIDEBAR_PADDING') . 'px;
              border-bottom: ' . Configuration::get('RC_SIDEBAR_BWIDTH') . 'px solid ' . Configuration::get('RC_SIDEBAR_BORDER') . ';
            }
            '; }

        if (Configuration::get('RC_SIDEBAR_BB') == "1") {
            $css .= '
            .side-column>*:not(.roycontent), .side-column>.sidebar-block {
              border: ' . Configuration::get('RC_SIDEBAR_BW') . 'px solid ' . Configuration::get('RC_SIDEBAR_BALL') . ';
              border-radius: ' . Configuration::get('RC_SIDEBAR_BR') . 'px;
              padding:32px;
            }
            .side-column>.sidebar-block.block-categories {
              border-color:' . Configuration::get('RC_SIDEBAR_BCAT') . ';
            }
            .side-column>#search_filters_wrapper {
              border-color:' . Configuration::get('RC_SIDEBAR_BFILTER') . ';
            }
            .side-column>#roy_specials_col {
              border-color:' . Configuration::get('RC_SIDEBAR_BSALE') . ';
            }
            '; }




// PRODUCTS AND CATEGORIES styles start
// Category

        if (Configuration::get('NC_CAT_NAME_S') == "2") {
            $css .= '
            .block-category h1 { display:none }
        ';}
        if (Configuration::get('NC_CAT_DESC_S') == "2") {
            $css .= '
            .block-category #category-description { display:none }
        ';}
        if (Configuration::get('NC_CAT_IMG_S') == "2") {
            $css .= '
            .block-category .category-cover { display:none }
        ';}
        if (Configuration::get('NC_CAT_IMGLAY_S') == "2") {
            $css .= '
            #category #top_column {
              background-size: cover;
              background-position: center;
            }

        ';}
        if (Configuration::get('NC_SUBCAT_S') == "2") {
            $css .= '
            #subcategories { display:none }
			  ';}

        if (
          Configuration::get('NC_CAT_NAME_S') == "2" &&
          Configuration::get('NC_CAT_IMG_S') == "2" &&
          Configuration::get('NC_CAT_DESC_S') == "2" &&
          Configuration::get('NC_SUBCAT_S') == "2" &&
          Configuration::get('RC_B_POS_CAT') == "1"
        ) {
          $css .= '
          .products-selection { padding-top:0; margin-top:0; border-top:none; }
          .block-category { margin:0; }
          ';
        }

          if (Configuration::get('RC_PL_NUMBER_COLOR')) {
              $css .= '.pagination .current a { color: ' . Configuration::get('RC_PL_NUMBER_COLOR') . ' }
  			'; }
          if (Configuration::get('RC_PL_NUMBER_COLOR_HOVER')) {
              $css .= '.pagination a { color: ' . Configuration::get('RC_PL_NUMBER_COLOR_HOVER') . ' }
  			'; }

// Product list

        if (Configuration::get('NC_PRODUCT_SWITCH') =="2") {
            $css .= '
                  @media (min-width:992px) {
                  #products #js-product-list .product-item {
                        width:50%;
                  } }
            '; }
        if (Configuration::get('NC_PRODUCT_SWITCH') =="3") {
            $css .= '
            '; }
        if (Configuration::get('NC_PRODUCT_SWITCH') =="4") {
            $css .= '
                  @media (min-width:992px) {
                  #products #js-product-list .product-item {
                        width:25%;
                  } }
            '; }
        if (Configuration::get('NC_PRODUCT_SWITCH') =="5") {
            $css .= '
                  @media (min-width:992px) {
                  #products #js-product-list .product-item {
                        width:20%;
                  } }
            '; }

        if (Configuration::get('NC_PRODUCT_MARGIN') =="2") {
            $css .= '
                  @media (min-width:992px) {
                  #products #js-product-list .product-item {
                        padding-left:60px;
                        padding-right:60px;
                  }
                  #products #js-product-list .products {
                    margin:0 -60px;
                  }
                  }
            ';
          }


            if (Configuration::get('NC_PRODUCT_MARGIN') =="1") {
            $css .= '
              #products .thumbnail-container {
                margin-bottom:60px;
              }
            ';

              if (Configuration::get('RC_PL_LAY') == "1") {
                $css .= '
                  #products .thumbnail-container {
                    margin-bottom:40px;
                  }
                ';
              }
          }

            if (Configuration::get('NC_PRODUCT_MARGIN') =="2") {
            $css .= '
              #products .thumbnail-container {
                margin-bottom:120px;
              }
            '; }



// Product item design

          if (Configuration::get('RC_PL_LAY') == "1") {
                $css .= '
                #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                  min-height:70px;
                }

                .side-column > #roy_specials_col .product-item {
                  padding:0;
                }
                ';
          }

          $css .= '
            #ui_prod .ui_name, #products .product-title a, .featured-products .product-title a, .product-accessories .product-title a, .product-miniature .product-title a { color: ' . Configuration::get('RC_PL_NAME') . ' }
            #ui_prod .ui_price, #products .product-price-and-shipping .price, .featured-products .product-price-and-shipping .price, .product-accessories .product-price-and-shipping .price, .product-miniature .product-price-and-shipping .price { color: ' . Configuration::get('RC_PL_PRICE') . ' }
            .product-price-and-shipping .regular-price { color: ' . Configuration::get('RC_PL_PRICE') . '; opacity:0.7 }
            #ui_prod .ui_price .regular-price { color: ' . Configuration::get('RC_PL_PRICE') . '; opacity:0.7; text-decoration: line-through; }
          ';

          if (Configuration::get('RC_PL_TEXT_BGS') == "2") {
                $css .= '
                #ui_prod { padding:6px 12px }

          '; }


          if (Configuration::get('NC_PI_B') == "1") {
                $css .= '
                .thumbnail-container .product-image {
                  border: ' . Configuration::get('NC_PI_BW') . 'px solid ' . Configuration::get('NC_PI_C') . ';
                  border-radius: ' . Configuration::get('NC_PI_BR') . 'px;
                  -webkit-transition: all .4s cubic-bezier(.36,.76,0,.88);
                  transition: all .4s cubic-bezier(.36,.76,0,.88);
                }
                .thumbnail-container:hover .product-image {
                  border-color: ' . Configuration::get('NC_PI_CH') . ';
                }
          '; }

          if (Configuration::get('RC_PL_TEXT_BGS') == "1") {
                $css .= '
                #ui_prod { padding:14px 20px }
                .product-title a, .product-price-and-shipping, #ui_prod .ui_name, #ui_prod .ui_price
                {
                  box-shadow: -6px 0 0 6px ' . Configuration::get('RC_PL_TEXT_BG') . ', 6px 0 0 6px ' . Configuration::get('RC_PL_TEXT_BG') . ';
                  background: ' . Configuration::get('RC_PL_TEXT_BG') . ';
                }
                .product-title a > span, .product-price-and-shipping > span:not(.sr-only), #ui_prod .ui_name > span, #ui_prod .ui_price > span:not(.sr-only)
                {
                  position:relative;
                  background: ' . Configuration::get('RC_PL_TEXT_BG') . ';
                }
                .product-price-and-shipping
                {
                  z-index:2;
                  display:inline-block;
                  transform:translateY(-9px);
                }
                #ui_prod .ui_price
                {
                  z-index:2;
                  display:inline-block;
                }
                #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                  padding:0 12px;
                }

                @media(max-width:767px) {
                  .product-description .comments_note {
                      margin-top:0!important;
                      margin-bottom:14px!important;
                  }
                  #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                    margin-top:20px!important;
                  }
                }

                ';
          }

          if (Configuration::get('RC_PL_TEXT_ALIGN') == "1") {
                $css .= '
                #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                  align-items:flex-start;
                }
                ';
                if (Configuration::get('RC_PL_TEXT_BGS') == "2" && Configuration::get('RC_PL_LAY') == "1") {
                  $css .= '
                  #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                    padding-left:14px;
                  }
                  ';
                }
                if (Configuration::get('RC_PL_TEXT_BGS') == "1" && Configuration::get('RC_PL_LAY') !== "3") {
                  $css .= '
                  .product-description .comments_note {
                      margin: 12px 0 24px -12px;
                  }
                  .countcontainer {
                    margin-left:-12px;
                  }
                  ';
                }
          }
          if (Configuration::get('RC_PL_TEXT_ALIGN') == "2") {
                $css .= '
                #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                  align-items:center;
                }
                #products .product-title, .featured-products .product-title, .product-accessories .product-title, .product-miniature .product-title {
                  text-align:center;
                }
                ';
                if (Configuration::get('RC_PL_TEXT_BGS') == "2" && Configuration::get('RC_PL_LAY') == "1") {
                  $css .= '
                  #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                    padding:0 14px;
                  }
                  ';
                }
                if (Configuration::get('RC_PL_TEXT_BGS') == "1" && Configuration::get('RC_PL_LAY') !== "3") {
                  $css .= '
                  .product-description .comments_note {
                      margin: 12px 0 24px;
                  }
                  ';
                }
          }
          if (Configuration::get('RC_PL_TEXT_ALIGN') == "3") {
                $css .= '
                #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                  align-items:flex-end;
                }
                #products .product-title, .featured-products .product-title, .product-accessories .product-title, .product-miniature .product-title {
                  text-align:right;
                }
                ';
                if (Configuration::get('RC_PL_TEXT_BGS') == "2" && Configuration::get('RC_PL_LAY') == "1") {
                  $css .= '
                  #products .product-description, .featured-products .product-description, .product-accessories .product-description, .product-miniature .product-description {
                    padding-right:14px;
                  }
                  ';
                }
                if (Configuration::get('RC_PL_TEXT_BGS') == "1" && Configuration::get('RC_PL_LAY') !== "3") {
                  $css .= '
                  .product-description .comments_note {
                      margin: 12px -12px 24px 0;
                  }
                  .countcontainer {
                    margin-right:-12px;
                  }
                  ';
                }
          }

          if (Configuration::get('RC_PL_IMG_BGS') == "1") {
                $css .= '
                #products .product-image, .featured-products .product-image, .product-accessories .product-image, .product-miniature .product-image
                {
                  background: ' . Configuration::get('RC_PL_IMG_BG') . ';
                }
                ';
          }

          if (Configuration::get('RC_PL_LAY') == "2") {
                $css .= '
                @media(min-width:991px) {
                  .thumbnail-container .product-description .countcontainer { display:none }
                  .thumbnail-container .product-description {
                    position:absolute;
                    bottom:22px;
                  }
                  .thumbnail-container:hover .product-description {
                    opacity:0;
                    transform:translateY(22px);
                  }
                }

                  .side-column > #roy_specials_col .sidebar-content .products {
                    margin:0 -16px;
                  }
                  .side-column > #roy_specials_col .product-item {
                    padding:0 16px;
                  }
                ';

                if (Configuration::get('RC_PL_TEXT_BGS') == "2") {
                  $css .= '
                  .product-description .comments_note {
                    margin:0 0 12px;
                  }
                  ';
                }
                if (Configuration::get('RC_PL_TEXT_ALIGN') == "1") {
                  $css .= '
                    .thumbnail-container .product-description {
                      left:-16px;
                    }
                  ';
                }
                if (Configuration::get('RC_PL_TEXT_ALIGN') == "2") {
                  $css .= '
                    .thumbnail-container .product-description {
                      left:18px;
                      width:calc(100% - 36px);
                    }
                  ';
                }
                if (Configuration::get('RC_PL_TEXT_ALIGN') == "3") {
                  $css .= '
                    .thumbnail-container .product-description {
                      left:auto;
                      right:-16px;
                    }
                  ';
                }
          }


          if (Configuration::get('RC_PL_LAY') == "3") {
                $css .= '
                @media(min-width:991px) {
                  .thumbnail-container .product-description {
                    display:none!important;
                  }
                }

                  .side-column > #roy_specials_col .product-item {
                    padding:0;
                  }
                ';

                if (Configuration::get('RC_PL_TEXT_ALIGN') == "1") {
                  $css .= '
                    .thumbnail-container .product-description {
                      left:-16px;
                    }
                  ';
                }
                if (Configuration::get('RC_PL_TEXT_ALIGN') == "2") {
                  $css .= '
                    .thumbnail-container .product-description {
                      left:18px;
                      width:calc(100% - 36px);
                    }
                  ';
                }
                if (Configuration::get('RC_PL_TEXT_ALIGN') == "3") {
                  $css .= '
                    .thumbnail-container .product-description {
                      left:auto;
                      right:-16px;
                    }
                  ';
                }

          }



// Hover

          $css .= '
          .thumbnail-container .product-image:before {
              content: " ";
              z-index: 2;
              pointer-events: none;
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: ' . Configuration::get('RC_PL_HOVER_G1') . ';
              background: linear-gradient(165deg, ' . Configuration::get('RC_PL_HOVER_G1') . ' 0%, ' . Configuration::get('RC_PL_HOVER_G2') . ' 100%);
              opacity: 0;
              -webkit-transition: all .22s cubic-bezier(.07,.74,.56,.89);
              transition: all .22s cubic-bezier(.07,.74,.56,.89);
          }
          .thumbnail-container:hover .product-image:before {
              opacity: ' . Configuration::get('RC_PL_HOVER_TRANS') . ';
          }
          ';

          if (Configuration::get('RC_PL_HOVER_G1') == Configuration::get('RC_PL_HOVER_G2')) {
            $css .= '
            .thumbnail-container .product-image:before {
                background: ' . Configuration::get('RC_PL_HOVER_G1') . ';
            }
            ';
          }


          if (Configuration::get('RC_PL_HOVER_LAY') == "1") {
          $css .= '

            .thumbnail-container:hover .count_icon {
              transform: scale(0.72) translateY(calc(100% + 12px)) translateX(1px);
            }

            .product-image .favoritesButton svg * { stroke:' . Configuration::get('RC_PL_HOVER_BUT_OUT') . '!important; }
            .product-image .favoritesButton.icon_checked svg * { fill:' . Configuration::get('RC_PL_HOVER_BUT_OUT') . '!important; }

            #products .action-block, .featured-products .action-block, .product-accessories .action-block, .product-miniature .action-block {
              bottom:30px;
            }
            #products .action-block .action-btn, .featured-products .action-block .action-btn, .product-accessories .action-block .action-btn, .product-miniature .action-block .action-btn {
              width: auto;
              padding: 0 22px;
              font-size:' . Configuration::get('RC_FS_BTN') . 'px;
            }
            @media(min-width:992px) {
              .subaction {
                display: flex;
                align-items: center;
                justify-content: center;
                pointer-events: none;
                position: absolute;
                opacity:0;
                z-index: 3;
                top:30px;
                right:30px;
                transform: translateY(-1.25rem);
                -webkit-transition: all .44s cubic-bezier(.36,.76,0,.88);
                transition: all .44s cubic-bezier(.36,.76,0,.88);
              }
              .thumbnail-container:hover .subaction {
                transform: translateY(0);
                opacity:1;
              }

              .subaction > * {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left:14px;
              }
              .subaction * {
                pointer-events:auto;
              }
              .subaction a * {
                pointer-events:none!important;
              }

              .subaction a {
                -webkit-transition: all .22s cubic-bezier(.07,.74,.56,.89);
                transition: all .22s cubic-bezier(.07,.74,.56,.89);
              }
              .subaction a:hover {
                opacity:0.5;
              }

              .product-image .quick-view svg * { stroke:' . Configuration::get('RC_PL_HOVER_BUT_OUT') . '!important; }
            }
            @media(max-width:991px) {
              .subaction, .action-block {
                display:none;
              }
            }
          '; }


          if (Configuration::get('RC_PL_HOVER_LAY') == "2") {
          $css .= '

            .thumbnail-container:hover .count_icon {
              transform: scale(0.82);
            }

            #products .action-block, .featured-products .action-block, .product-accessories .action-block, .product-miniature .action-block {
              bottom:calc(50% - 40px);
            }
            #products .action-block .action-btn, .featured-products .action-block .action-btn, .product-accessories .action-block .action-btn, .product-miniature .action-block .action-btn {
              width: 60px;
              margin:0 2px;
            }
          '; }

          $css .= '

          #products .action-block .action-btn, .featured-products .action-block .action-btn, .product-accessories .action-block .action-btn, .product-miniature .action-block .action-btn {
            background-color: ' . Configuration::get('RC_PL_HOVER_BUT_BG') . ';
            border:2px solid ' . Configuration::get('RC_PL_HOVER_BUT_B') . ';
            color:' . Configuration::get('RC_PL_HOVER_BUT') . ';
            border-radius:' . Configuration::get('RC_PL_HOVER_BUT_BR') . 'px;
          }
          .action-block .action-btn i svg * { stroke:' . Configuration::get('RC_PL_HOVER_BUT') . '!important }

          #products .action-block .action-btn:hover, .featured-products .action-block .action-btn:hover, .product-accessories .action-block .action-btn:hover, .product-miniature .action-block .action-btn:hover {
            background-color: ' . Configuration::get('RC_PL_HOVER_BUT_BGH') . ';
            border:2px solid ' . Configuration::get('RC_PL_HOVER_BUT_BH') . ';
            color:' . Configuration::get('RC_PL_HOVER_BUTH') . ';
          }
          .action-block .action-btn:hover i svg * { stroke:' . Configuration::get('RC_PL_HOVER_BUTH') . '!important }
          .product-image .favoritesButton.icon_checked.action-btn  i svg * { fill:' . Configuration::get('RC_PL_HOVER_BUT') . '!important; }
          .product-image .favoritesButton.icon_checked.action-btn:hover  i svg * { fill:' . Configuration::get('RC_PL_HOVER_BUTH') . '!important; }

          ';

          if (Configuration::get('RC_CART_ICON') == "cart3" || Configuration::get('RC_CART_ICON') == "cart4") {
            $css .= '
              .action-block .action-btn.add_to_cart i svg * { stroke:none!important; fill:' . Configuration::get('RC_PL_HOVER_BUT') . '!important }
              .action-block .action-btn.add_to_cart:hover i svg * { stroke:none!important; fill:' . Configuration::get('RC_PL_HOVER_BUTH') . '!important }
              .header-mobile i.box-cart svg * { stroke:none!important; fill:' . Configuration::get('NC_MOB_MENU') . '!important }
            ';
          }



          if (Configuration::get('RC_PL_PRODUCT_NEW_BG')) {
          $css .= '
          .simpleblog__listing__post__wrapper__footer__block.date, .col-image .discount-amount, .col-image .discount-percentage, .col-image .on-sale, .product-miniature .product-flag, .col-image .online-only, .col-image .pack, .col-image .product-flags .new, .product-miniature .discount-amount, .product-miniature .discount-percentage, .product-miniature .on-sale, .product-miniature .online-only, .product-miniature .pack, .product-miniature .product-flags .new {
            background-color: ' . Configuration::get('RC_PL_PRODUCT_NEW_BG') . ' ;
            border: 2px solid ' . Configuration::get('RC_PL_PRODUCT_NEW_BORDER') . ';
            color: ' . Configuration::get('RC_PL_PRODUCT_NEW_COLOR') . ';
          }
          ';}
          if (Configuration::get('RC_PL_PRODUCT_SALE_BG')) {
          $css .= '
          .col-image .discount-amount.discount-amount, .col-image .discount-amount.discount-percentage, .col-image .discount-amount.on-sale, .col-image .discount-percentage.discount-amount, .col-image .discount-percentage.discount-percentage, .col-image .discount-percentage.on-sale, .col-image .on-sale.discount-amount, .col-image .on-sale.discount-percentage, .col-image .on-sale.on-sale, .col-image .online-only.discount-amount, .col-image .online-only.discount-percentage, .col-image .online-only.on-sale, .product-miniature .product-flag, .col-image .pack.discount-amount, .col-image .pack.discount-percentage, .col-image .pack.on-sale, .col-image .product-flags .new.discount-amount, .col-image .product-flags .new.discount-percentage, .col-image .product-flags .new.on-sale, .product-miniature .discount-amount.discount-amount, .product-miniature .discount-amount.discount-percentage, .product-miniature .discount-amount.on-sale, .product-miniature .discount-percentage.discount-amount, .product-miniature .discount-percentage.discount-percentage, .product-miniature .discount-percentage.on-sale, .product-miniature .on-sale.discount-amount, .product-miniature .on-sale.discount-percentage, .product-miniature .on-sale.on-sale, .product-miniature .online-only.discount-amount, .product-miniature .online-only.discount-percentage, .product-miniature .online-only.on-sale, .product-miniature .pack.discount-amount, .product-miniature .pack.discount-percentage, .product-miniature .pack.on-sale, .product-miniature .product-flags .new.discount-amount, .product-miniature .product-flags .new.discount-percentage, .product-miniature .product-flags .new.on-sale {
            background-color: ' . Configuration::get('RC_PL_PRODUCT_SALE_BG') . ' ;
            border-color: ' . Configuration::get('RC_PL_PRODUCT_SALE_BORDER') . ';
            color: ' . Configuration::get('RC_PL_PRODUCT_SALE_COLOR') . '
          }
          ';}

          if (Configuration::get('NC_SECOND_IMG_S') == "1") {
            $css .= '
            .roy_secondimg {
              display: block; width: 100%; height: 100%; position: absolute; overflow: hidden; top: 0; left: 0; opacity: 0;
              -webkit-transition: opacity .44s cubic-bezier(.36,.76,0,.88), transform 1.12s cubic-bezier(.36,.76,0,.88);
              transition: opacity .44s cubic-bezier(.36,.76,0,.88), transform 1.12s cubic-bezier(.36,.76,0,.88);
              transform: translateY(14px);
              background: ' . Configuration::get('RC_PL_IMG_BG') . ';
            }
            .thumbnail-container:hover .roy_secondimg {
              opacity:1;
              transform: translateY(0) scale(1.08);
            }
            '; }

          if (Configuration::get('NC_QVS') == "2") {
            $css .= '
            .thumbnail-container a.quick-view {
              display:none!important; }
          '; }
          if (Configuration::get('NC_FAVS') == "2") {
            $css .= '
            .thumbnail-container a.favoritesButton {
              display:none!important; }
          '; }


          if (Configuration::get('NC_COLORS_S') == "1" && Configuration::get('RC_PL_LAY') == "1") {
            $css .= '
            #products .variant-links, .featured-products .variant-links, .product-accessories .variant-links, .product-miniature .variant-links {
              display:block; }
          '; }
          if (Configuration::get('NC_COLORS_S') == "0" || Configuration::get('RC_PL_LAY') !== "1") {
            $css .= '
            #products .variant-links, .featured-products .variant-links, .product-accessories .variant-links, .product-miniature .variant-links {
              display:none; }
          '; }

          $css .= '
          .variant-links .color:before, .custom-checkbox input[type=checkbox]+span.color:before {
            opacity:0; box-shadow: 0 0 0 2px ' . Configuration::get('RC_RC_BG_ACTIVE') . '; }
          .variant-links .color:hover:before, .custom-checkbox input[type=checkbox]+span.color:hover:before {
            opacity:1; box-shadow: 0 0 0 2px ' . Configuration::get('RC_RC_BG_ACTIVE') . ';
          }

          .side-column .variant-links .color:before, .custom-checkbox input[type=checkbox]+span.color:before { box-shadow: inset 0 0 0 8px ' . Configuration::get('RC_SIDEBAR_BLOCK_CONTENT_BG') . ', 0 0 0 3px ' . Configuration::get('RC_SIDEBAR_BLOCK_CONTENT_BG') . '; }
          .side-column .variant-links .color:hover:before, .custom-checkbox input[type=checkbox]+span.color:hover:before {
              box-shadow: inset 0 0 0 7px ' . Configuration::get('RC_SIDEBAR_BLOCK_CONTENT_BG') . ', 0 0 0 0 ' . Configuration::get('RC_I_B_FOCUS') . ';
          }

          #search_filters .ui-slider-horizontal {
            padding:0;
            width:auto!important;
            background: ' . Configuration::get('RC_I_B_COLOR') . ';
            box-shadow:none;
          }
          #search_filters .ui-widget-header {
            background: ' . Configuration::get('RC_RC_BG_ACTIVE') . ';
          }
          #search_filters .ui-slider .ui-slider-handle {
            width:1.2em;
            border: 2px solid ' . Configuration::get('RC_RC_BG_ACTIVE') . ';
            box-shadow: 0 10px 14px 0 rgba(0,0,0,0.14), 0 0 1px 3px ' . Configuration::get('RC_G_BG_CONTENT') . ';
            background: ' . Configuration::get('RC_G_BG_CONTENT') . ';
            border-radius:50%;
          }
          #search_filters .ui-slider > .ui-slider-handle:last-of-type {
            transform: translateX(-1.1em);
          }
          ';


          if (Configuration::get('RC_PP_REVIEWS_STAROFF')) {
          $css .= '
          .comments_note div.star, #productCommentsBlock div.star {
            background-color: ' . Configuration::get('RC_PP_REVIEWS_STAROFF') . ';
          }
          ';}
          if (Configuration::get('RC_PP_REVIEWS_STARON')) {
          $css .= '
          .comments_note div.star.star_on, #productCommentsBlock div.star_hover, #productCommentsBlock div.star.star_on, #new_comment_form div.star_hover, #new_comment_form div.star_on {
            background-color: ' . Configuration::get('RC_PP_REVIEWS_STARON') . ';
          }
          ';}


          if (Configuration::get('NC_COUNT_DAYS') == 1) {
              $css .= '
              .countcontainer .county .county-days-wrapper { display:none!important }
              .countcontainer .county .county-hours-wrapper:before { display:none!important }
              .countcontainer .county .county-label-days { display:none!important }
              .countcontainer .county > span { width: 33.3% !important }
              .countcontainer .county .titles > span { width: 33.3% !important }
    			'; }
          if (Configuration::get('NC_COUNT_BG')) {
              $css .= '
        			.countcontainer { border-top: 2px solid ' . Configuration::get('NC_COUNT_BG') . ' }
              .countcontainer .county i svg * { stroke: ' . Configuration::get('NC_COUNT_TIME') . '!important }
              .county-label-days, .county-label-hours, .county-label-minutes, .county-label-seconds { color: ' . Configuration::get('NC_COUNT_COLOR') . '!important }
        			@media(min-width:480px) { .roycountoff { color: ' . Configuration::get('NC_COUNT_COLOR') . '!important } }
    			'; }
          if (Configuration::get('NC_COUNT_TIME')) {
              $css .= '.county .county-days-wrapper, .county .county-hours-wrapper, .county .county-minutes-wrapper, .county .county-seconds-wrapper { color: ' . Configuration::get('NC_COUNT_TIME') . '!important }
              @media(max-width:479px) { .roycountoff { color: ' . Configuration::get('NC_COUNT_TIME') . '!important } }
              .thumbnail-container .count_icon svg * { fill: ' . Configuration::get('NC_COUNT_WATCH') . '!important; stroke: ' . Configuration::get('NC_COUNT_WATCH') . '!important }
              .thumbnail-container .count_icon { background: ' . Configuration::get('NC_COUNT_WATCH_BG') . ' }
    			';}



// ****************  PRODUCT PAGE styles start


        $css .= '
        .product-discount .regular-price:before { border-bottom:2px solid ' . Configuration::get('RC_PP_PRICE_COLOR') . ' }
        .has-discount .discount { color:' . Configuration::get('RC_PP_PRICE_DIS') . '; border:2px solid ' . Configuration::get('RC_PP_PRICE_DIS') . '; }


        ';


        if (Configuration::get('RC_PP_LAY') == "1") {


          if (Configuration::get('RC_PP_IMGB') == "1") {
              $css .= '.images-container .product-images li.thumb-container { border:2px solid ' . Configuration::get('RC_PP_IMG_BORDER') . ' }'; }

          if (Configuration::get('RC_PP_THUMBS') == "1") {
              $css .= ''; }

          if (Configuration::get('RC_PP_THUMBS') == "2") {
              $css .= '
              .product-thumbs-wrapper {
                  max-width: 64%;
                  transform: translateY(-50%);
                  background:' . Configuration::get('RC_PP_ICON_BORDER') . ';
                  border:4px solid ' . Configuration::get('RC_PP_ICON_BORDER') . ';
                  box-shadow:0 24px 90px rgba(0,0,0,0.09);
              }
              .product-thumbs-wrapper.w33 {
                  max-width: 56%;
              }
              .product-thumbs-wrapper.w50 {
                  max-width: 44%;
              }
              ';

            }

          }


        if (Configuration::get('RC_PP_LAY') == "2") {
          $css .= '
          @media(min-width:768px) {
            #main .images-container .product-thumbs-wrapper { display:none }
          }';

          if (Configuration::get('RC_PP_IMGSPACING') == "1") {
              $css .= '@media(min-width:768px) { .images-container .product-images li.thumb-container { margin-bottom:60px } .images-container .product-images li.thumb-container:last-of-type { margin-bottom:0 } }'; }

          if (Configuration::get('RC_PP_IMGB') == "1") {
              $css .= '.images-container .product-images li.thumb-container { border:2px solid ' . Configuration::get('RC_PP_IMG_BORDER') . ' }'; }

        }


        if (Configuration::get('RC_PP_LAY') == "3") {
          $css .= '
          @media(min-width:768px) {
            #main .images-container .product-thumbs-wrapper { display:none }
          }';

              $css .= '
              @media(min-width:768px) {
              .images-container .product-images li.thumb-container {
                width:50%; } }
              ';
          if (Configuration::get('RC_PP_IMGSPACING') == "1") {
              $css .= '
              @media(min-width:768px) {
                .images-container .product-images {
                margin:0 -30px;
              }
              .images-container .product-images li.thumb-container {
                padding:0 15px 30px;
              } }
              '; }

          if (Configuration::get('RC_PP_IMGB') == "1") {
              $css .= '
              .images-container .product-images li.thumb-container .thumb { border:2px solid ' . Configuration::get('RC_PP_IMG_BORDER') . ' }
              '; }

        }


        if (Configuration::get('NC_MOBADOTSCS')) {
            $css .= '.product-images .owl-dots .owl-dot span { background: ' . Configuration::get('NC_MOBADOTSCS') . ' } '; }


        if (Configuration::get('RC_PP_PRICE_COLOR')) {
            $css .= '.product-price { color: ' . Configuration::get('RC_PP_PRICE_COLOR') . ' } ' ; }

        if (Configuration::get('NC_PP_ADD_BG')) {
            $css .= ' .add .btn.add-to-cart { background-color: ' . Configuration::get('NC_PP_ADD_BG') . '; border-color: ' . Configuration::get('NC_PP_ADD_BORDER') . '; color: ' . Configuration::get('NC_PP_ADD_COLOR') . ' }'; }

        if (Configuration::get('RC_PP_ATT_LABEL')) {
            $css .= '
            .product-actions .product-variants-item .control-label:before, .product-actions .product-variants-item.hover .control-label:before { background: ' . Configuration::get('RC_PP_ATT_LABEL') . ' }
            .product-actions .product-variants-item.hover .control-label { color: ' . Configuration::get('RC_PP_ATT_LABEL') . ' }

            .radio-label:before { box-shadow: 0 0 0 2px ' . Configuration::get('RC_PP_ATT_COLOR_ACTIVE') . '; }
            '; }


          if (Configuration::get('RC_PP_INFO_LABEL')) {
              $css .= '.product-info label, .social-sharing .share_text span, .prod-buttons .favoritesButton span { color: ' . Configuration::get('RC_PP_INFO_LABEL') . ' }'; }
          if (Configuration::get('RC_PP_INFO_VALUE')) {
              $css .= '
              .product-info a, .product-info span, .social-sharing .share_text:hover span, .prod-buttons .favoritesButton:hover span { color: ' . Configuration::get('RC_PP_INFO_VALUE') . ' }
              .social-sharing .share_text svg * { stroke: ' . Configuration::get('RC_PP_INFO_VALUE') . '!important }

              .social-sharing ul li { background-color: ' . Configuration::get('RC_PP_INFO_VALUE') . ' }

              .prod-buttons .favoritesButton svg * { stroke:' . Configuration::get('RC_PP_INFO_VALUE') . '!important; }
              .prod-buttons .favoritesButton.icon_checked svg * { fill:' . Configuration::get('RC_PP_INFO_VALUE') . '!important; }
              '; }


        if (Configuration::get('NC_COUNT_PR_TITLE')) {
            $css .= '
      			.product_count_block .countcontainer .roycounttitle, .product_count_block .countcontainer .roycountoff { color: ' . Configuration::get('NC_COUNT_PR_TITLE') . '!important }
      			.product_count_block .county .county-days-wrapper, .product_count_block .county .county-hours-wrapper, .product_count_block .county .county-minutes-wrapper, .product_count_block .county .county-seconds-wrapper { color: ' . Configuration::get('NC_COUNT_PR_NUMBERS') . '!important }

            .product_count_block .countcontainer .count_icon svg * { fill: ' . Configuration::get('NC_COUNT_PR_SEP') . '!important; stroke: ' . Configuration::get('NC_COUNT_PR_SEP') . '!important }
            .product_count_block .countcontainer .count_icon { background: ' . Configuration::get('NC_COUNT_PR_BG') . ' }

            .product_count_block .county-label-days, .product_count_block .county-label-hours, .product_count_block .county-label-minutes, .product_count_block .county-label-seconds { color: ' . Configuration::get('NC_COUNT_PR_COLOR') . '!important }

			'; }


        if (Configuration::get('RC_PP_TABS_BG_SW') == "1") {
            $css .= '
            #product .tabs { background: ' . Configuration::get('RC_PP_TABS_BG') . '; padding-top:6rem; padding-bottom:6rem; margin-bottom:60px; }
            @media (max-width: 767px) {
              .tabs>.container {
                padding-left: 40px;
                padding-right: 40px;
              }
              #product .tabs {
                margin-left:-40px;
                margin-right:-40px;
                margin-top:40px;
              }
            }
			'; }

        if (Configuration::get('NC_ACCESS_PERS')) {
            $nc_access_pers = 100/(Configuration::get('NC_ACCESS_PERS'));
            $css .= '
            @media (min-width: 992px) {
              #product .featured-products .product-item {
                width:' . $nc_access_pers . '%;
              }
            }';
            if (Configuration::get('NC_ACCESS_PERS') > 6) {
              $css .= '
              @media (min-width: 992px) {
                #product .featured-products .product-item {
                  padding-left:15px;
                  padding-right:15px;
                }
              }';
            }
        }




// ****************  ORDER styles start

        if (Configuration::get('RC_O_ADDS') == "1") {
            $css .= '
            ';
        }

        if (Configuration::get('RC_O_OPTION')) {
            $css .= '
      			.login-tabs li a, body#checkout section.checkout-step .delivery-option, body#checkout section.checkout-step .address-item { border-color: ' . Configuration::get('RC_O_OPTION') . ' }
			'; }
        if (Configuration::get('RC_O_OPTION_ACTIVE')) {
            $css .= '
      			.login-tabs li a.active, body#checkout section.checkout-step .delivery-option.active, body#checkout section.checkout-step .address-item.selected { border-color: ' . Configuration::get('RC_O_OPTION_ACTIVE') . ' }
			'; }
        if (Configuration::get('RC_O_INFO_TEXT')) {
            $css .= '
      			#checkout #block-reassurance li .block-reassurance-item span { color: ' . Configuration::get('RC_O_INFO_TEXT') . ' }
			'; }

        if (Configuration::get('RC_LC_C')) {
            $css .= '
      			#blockcart-modal .modal-title, #blockcart-modal close { color: ' . Configuration::get('RC_LC_C') . ' }
			'; }



// ****************  FOOTER styles start


        if (Configuration::get('RC_FOOTER_LAY') == "1") {
            $css .= '
              #footer .footer-container {
                padding-top:70px;
                padding-bottom:70px;
              }
              #footer .footer-container li {
                margin-bottom: 0;
              }
              .footer-container > .container > .row {
                display:flex;
                align-items:center;
                justify-content: center;
              }
              #roycontent_footer {
                margin:0!important;
                text-align:center;
              }
              .footer-container .links h3 {
                display:none;
              }
              .footer-container .links .row > .wrapper:not(:first-child) {
                display:none;
              }
              .footer-container .links .row > .wrapper:first-child {
                width:100%;
                padding:0;
              }
              .footer-container .links ul {
                text-align:center;
                margin-bottom:0;
              }
              .footer-container .links ul li {
                display:inline-block;
                padding-left:15px;
              }
              .footer-container .links ul li a {
                margin-left:15px;
              }

              .footer-container .links ul li:first-child {
                padding-left:0;
              }
              .footer-container .links ul li:first-child:before {
                display:none;
              }

              @media(max-width:767px) {
                .footer-container .links .title {
                  display:none;
                }
                .footer-container .links ul {
                  display:block;
                }
                .footer-container .links ul > li {
                  padding: 0.5rem 0;
                  display:block;
                }
                .footer-container .links ul > li a {
                  margin:0;
                }
              }
            ';
        }
        if (Configuration::get('RC_FOOTER_LAY') == "2") {
            $css .= '
              #footer .footer-container {
                padding-top:60px;
                padding-bottom:60px;
              }
              #footer .footer-container li {
                margin-bottom: 0;
              }
              @media(min-width:768px) {
                .footer-container > .container > .row {
                  display:flex;
                  align-items:center;
                }
                .footer-container .block_newsletter h3 {
                  margin:0 30px 0 0;
                  float:left;
                }
                .foot-mail {
                  text-align:right;
                }
              }
              .footer-container .block-social h3 {
                display:none;
              }
              #footer .block_newsletter form input[type=text] {
                min-width:240px;
                max-width:360px;
              }
              .footer-container .block_newsletter > .row {
                display: flex;
                align-items: center;
                justify-content: flex-end;
              }

              @media(max-width:767px) {
                .block-social li {
                  float:none!important;
                }
                .block-social ul > li:last-child {
                  margin-right:0;
                }
                .footer-container .block_newsletter > .row {
                  flex-direction:column;
                }
                #footer {
                  padding-bottom: 0;
                }
              }
            ';
        }
        if (Configuration::get('RC_FOOTER_LAY') == "3") {
            $css .= '
              #footer .footer-container {
                padding-top:60px;
                padding-bottom:60px;
              }
              #footer .footer-container li {
                margin-bottom: 0;
              }
              .footer-container > .container > .row {
                display:flex;
                align-items:center;
              }
              #roycontent_footer {
                margin:0!important;
                text-align:center;
              }
              #roycontent_footer > ul > li, #roycontent_footer > ul > li p {
                margin:0;
              }
              .footer-container .block-social h3 {
                display:none;
              }

              @media(max-width:767px) {
                .block-social li {
                  float:none!important;
                }
                .block-social ul > li:last-child {
                  margin-right:0;
                }
                .footer-container > .container > .row {
                  flex-direction:column;
                }
                .footer-container > .container > .row > div {
                  margin-bottom:30px;
                }
                .footer-container > .container > .row > div:last-child {
                  margin-bottom:0;
                }
              }
            ';
        }



        if (Configuration::get('RC_FOOTER_LAY') == "4") {
            $css .= '
            #roycontent_footer {
              margin:0!important;
            }
            #roycontent_footer > ul > li, #roycontent_footer > ul > li p {
              margin:0;
            }
            .footer-container .links .row > .wrapper:not(:first-child) {
              display:none;
            }
            .footer-container .links .row > .wrapper:first-child {
              width:100%;
              padding:0;
            }
            @media(min-width:768px) {
              .footer-container .foot-social, .footer-container .foot-logo, .footer-container .block-social {
                text-align:right;
              }
              .footer-container .block-social ul {
                float:right;
              }
            }
            .footer-container .block-social ul li:last-child {
              margin-right:0;
            }
            .footer-container .links h3, .footer-container .block-social h3 {
              display:none;
            }
            .footer-container .links ul li {
              display:inline-block;
              padding-left:15px;
            }
            .footer-container .links ul li a {
              margin-left:15px;
            }
            .footer-container .links ul li a:first-child {
              margin-left:0;
            }

            .footer-container .links ul li:first-child {
              padding-left:0;
            }
            .footer-container .links ul li:first-child:before {
              display:none;
            }

            .footer-container .row.top {
              padding-bottom:40px;
            }
            .footer-container .row.bottom {
              padding-top:40px;
              display:flex;
            }
            .footer-container .row.bottom .foot-text {
              align-self: flex-end;
            }

            @media(max-width:767px) {
              .block-social li {
                float:none!important;
              }
              .block-social ul > li:last-child {
                margin-right:0;
              }
              .footer-container .row.bottom {
                flex-direction:column;
                text-align: center;
              }
              .footer-container > .container > .row > div {
                margin-bottom:30px;
              }
              .footer-container > .container > .row > div:last-child {
                margin-bottom:0;
              }
              .foot-logo {
                display:none;
              }
              .footer-container .row.top {
                padding-bottom:0;
              }
              .footer-container .row.bottom {
                padding-top:0;
              }
              .footer-container .links ul > li {
                padding: 0.5rem 0;
                display:block;
                text-align:center;
              }
              .footer-container .links ul > li a {
                margin:0;
              }

                .footer-container .links .title {
                  display:none;
                }
                .footer-container .links ul {
                  display:block;
                }
            }

            ';
        }
        if (Configuration::get('RC_FOOTER_LAY') == "5") {
            $css .= '
            #roycontent_footer {
              margin:0!important;
            }
            #roycontent_footer > ul > li, #roycontent_footer > ul > li p {
              margin:0;
            }
            .footer-container .links .row > .wrapper:not(:first-child) {
              display:none;
            }
            .footer-container .links .row > .wrapper:first-child {
              width:100%;
              padding:0;
            }

            @media(min-width:768px) {
            .footer-container .foot-links, .footer-container .foot-logo {
              text-align:right;
            }
            .footer-container .links h3 {
              display:none;
            } }
            .footer-container .links ul li {
              display:inline-block;
              padding-left:15px;
            }
            .footer-container .links ul li a {
              margin-left:15px;
            }

            .footer-container .links ul li:first-child {
              padding-left:0;
            }
            .footer-container .links ul li:first-child:before {
              display:none;
            }

            .footer-container .row.top {
              padding-bottom:40px;
            }
            .footer-container .row.bottom {
              padding-top:40px;
              display:flex;
            }
            .footer-container .row.bottom .foot-text {
              align-self: flex-end;
            }

            @media(max-width:767px) {
              .block-social li {
                float:none!important;
              }
              .block-social ul > li:last-child {
                margin-right:0;
              }
              .footer-container .row.bottom {
                flex-direction:column;
                text-align: center;
              }
              .footer-container > .container > .row > div {
                margin-bottom:30px;
              }
              .foot-logo {
                display:none;
              }
              .footer-container .row.top {
                padding-bottom:0;
              }
              .footer-container .row.bottom {
                padding-top:0;
              }
              .footer-container .links ul > li {
                padding: 0.5rem 0;
                display:block;
                text-align:center;
              }
              .footer-container .links ul > li a {
                margin:0;
              }

                .footer-container .links .title {
                  display:none;
                }
                .footer-container .links ul {
                  display:block;
                }
            }
            ';
        }
        if (Configuration::get('RC_FOOTER_LAY') == "6") {
            $css .= '
            #roycontent_footer {
              margin-top:50px;
            }
            .footer-container .links .row > .wrapper:not(:first-child) {
              display:none;
            }
            .footer-container .links .row > .wrapper:first-child {
              width:100%;
            }

            .footer-container .block_newsletter h3, .footer-container .block-social h3 {
              margin-bottom:14px;
            }
            .footer-container .block_newsletter {
              margin-bottom:32px;
            }

            @media(max-width:767px) {
              .block-social li {
                float:none!important;
              }
              .block-social ul > li:last-child {
                margin-right:0;
              }
              .footer-container > .container > .row > div {
                margin-bottom:30px;
                text-align:center;
              }
              .footer-container > .container > .row > div:last-child {
                margin-bottom:0;
              }
              .foot-logo {
                display:none;
              }
              .footer-container .links ul > li {
                padding: 0.5rem 0;
                display:block;
                text-align:center;
              }
              .footer-container .links ul > li a {
                margin:0;
              }

              .footer-container .links .title {
                display:none;
              }
              .footer-container .links ul {
                display:block;
              }
            }
            ';
        }
        if (Configuration::get('RC_FOOTER_LAY') == "7") {
            $css .= '
            #roycontent_footer {
              margin-top:50px;
            }
            .footer-container .links .row > .wrapper:not(:first-child) {
              display:none;
            }
            .footer-container .links .row > .wrapper:first-child {
              width:100%;
            }

            @media(max-width:767px) {
              .block-social li {
                float:none!important;
              }
              .block-social ul > li:last-child {
                margin-right:0;
              }
              .footer-container > .container > .row > div {
                margin-bottom:30px;
                text-align:center;
              }
              .footer-container > .container > .row > div:last-child {
                margin-bottom:0;
              }
              .foot-logo {
                display:none;
              }
              .footer-container .links ul > li {
                padding: 0.5rem 0;
                display:block;
                text-align:center;
              }
              .footer-container .links ul > li a {
                margin:0;
              }

              .footer-container .links .title {
                display:none;
              }
              .footer-container .links ul {
                display:block;
              }
            }
            ';
        }
        if (Configuration::get('RC_FOOTER_LAY') == "8") {
            $css .= '
            #roycontent_footer {
              margin-top:50px;
            }

            @media(max-width:767px) {
              .block-social li {
                float:none!important;
              }
              .block-social ul > li:last-child {
                margin-right:0;
              }
              .footer-container > .container > .row > div {
                margin-bottom:30px;
                text-align:center;
              }
              .footer-container > .container > .row > div:last-child {
                margin-bottom:0;
              }
              .foot-logo {
                display:none;
              }
              .footer-container .links ul > li {
                padding: 0.5rem 0;
                display:block;
                text-align:center;
              }
              .footer-container .links ul > li a {
                margin:0;
              }
            }
            ';
        }

        if (Configuration::get('NC_FOOTER_W') == "2") {
            $css .= '
              .footer-container > .container {
                width:100%;
                padding-left:80px;
                padding-right:80px;
              }
            ';
        }


              $css .= '.footer-container { background-size: cover }
              ';
              if (Configuration::get('NC_FOOT_BGS') == "1") {
              $css .= '.footer-container { background-color: ' . Configuration::get('NC_FOOT_BC') . ' }
              '; }

              if (Configuration::get('NC_FOOT_BGS') == "2") {
              $css .= '.footer-container {
                          background: -webkit-linear-gradient(' . Configuration::get('NC_FOOT_GG') . 'deg,' . Configuration::get('NC_FOOT_GS') . ' 0%,' . Configuration::get('NC_FOOT_GE') . ' 100%);
                          background: -moz-linear-gradient(' . Configuration::get('NC_FOOT_GG') . 'deg,' . Configuration::get('NC_FOOT_GS') . ' 0%,' . Configuration::get('NC_FOOT_GE') . ' 100%);
                          background: -o-linear-gradient(' . Configuration::get('NC_FOOT_GG') . 'deg,' . Configuration::get('NC_FOOT_GS') . ' 0%,' . Configuration::get('NC_FOOT_GE') . ' 100%);
                          background: linear-gradient(' . Configuration::get('NC_FOOT_GG') . 'deg,' . Configuration::get('NC_FOOT_GS') . ' 0%,' . Configuration::get('NC_FOOT_GE') . ' 100%);
                    }
              '; }

              if (Configuration::get('NC_FOOT_BGS') == "3") {

                    if (Configuration::get('NC_FOOT_IM_BG_EXT')) {
                          if (Shop::getContext() == Shop::CONTEXT_SHOP)
                          $adv_imgname = 'nc_foot_im_background'.'-'.(int)$this->context->shop->getContextShopID();
                          $css .= '
                              .footer-container {
                              background-image: url(../upload/'.$adv_imgname.'.' . Configuration::get('NC_FOOT_IM_BG_EXT') . '); }
                              ';
                          if (Configuration::get('NC_FOOT_IM_BG_FIXED')) {
                              $css .= '.footer-container { background-attachment:fixed; }
                              ';
                          }
                    }
                    if (Configuration::get('NC_FOOT_IM_BG_REPEAT')) {
                          switch(Configuration::get('NC_FOOT_IM_BG_REPEAT')) {
                              case 1 :
                                  $repeat_option = 'repeat-x';
                                  break;
                              case 2 :
                                  $repeat_option = 'repeat-y';
                                  break;
                              case 3 :
                                  $repeat_option = 'no-repeat';
                                  break;
                              default :
                                  $repeat_option = 'repeat';
                          }
                          $css .= '.footer-container { background-repeat: ' . $repeat_option . '; }
                          ';
                    }
                    if (Configuration::get('NC_FOOT_IM_BG_POSITION')) {
                          switch(Configuration::get('NC_FOOT_IM_BG_POSITION')) {
                              case 1 :
                                  $position_option = 'center top';
                                  break;
                              case 2 :
                                  $position_option = 'right top';
                                  break;
                              default :
                                  $position_option = 'left top';
                          }
                          $css .= '.footer-container { background-position: ' . $position_option . '; }
                          ';
                    }
              }
              if (Configuration::get('NC_FOOT_BGS') == "4") {
                $css .= '.footer-container { background: none; }';
              }

        if (Configuration::get('RC_FOOTER_BORDER_SW') == "1") {
            $css .= '.footer-container { border-top: 2px solid ' . Configuration::get('RC_FOOTER_BORDER') . '}
      	'; }
        if (Configuration::get('RC_FOOTER_TITLES')) {
          $css .= '.blockcms-title, .myaccount-title, .myaccount-title a, .myaccount-title a:visited, .footer-container h3, .block-contact-title { color: ' . Configuration::get('RC_FOOTER_TITLES') . '}
          @media (max-width: 767px) {
          .footer-container .links .h3 { color: ' . Configuration::get('RC_FOOTER_TITLES') . '} }
        '; }
        if (Configuration::get('RC_FOOTER_TEXT')) {
            $css .= '
      			.footer-container, .footer-container p { color: ' . Configuration::get('RC_FOOTER_TEXT') . ' }
        '; }
        if (Configuration::get('RC_FOOTER_LINK')) {
            $css .= '
      			.footer-container li a, .block-contact a, .block-contact span { color: ' . Configuration::get('RC_FOOTER_LINK') . ' }
        '; }
        if (Configuration::get('RC_FOOTER_LINK_H')) {
            $css .= '
            .footer-container li a:hover, .block-contact a:hover { color: ' . Configuration::get('RC_FOOTER_LINK_H') . ' }
        '; }

        if (Configuration::get('RC_FOOTER_NEWS_BG')) {
            $css .= '
            #footer .block_newsletter form input[type=text] { background: ' . Configuration::get('RC_FOOTER_NEWS_BG') . '}
  			'; }
        if (Configuration::get('RC_FOOTER_NEWS_BORDER')) {
            $css .= '
            #footer .block_newsletter form input[type=text] { border: 2px solid ' . Configuration::get('RC_FOOTER_NEWS_BORDER') . ' }
        '; }
        if (Configuration::get('RC_FOOTER_NEWS_COLOR')) {
            $css .= '
            #footer .block_newsletter form input[type=text] { color: ' . Configuration::get('RC_FOOTER_NEWS_COLOR') . '}
        '; }
        if (Configuration::get('RC_FOOTER_NEWS_PLACEH')) {
            $css .= '

                #footer .block_newsletter form input[type=text]::-webkit-input-placeholder {
                  color: ' . Configuration::get('RC_FOOTER_NEWS_PLACEH') . '!important;
                  opacity:1;
                }
                #footer .block_newsletter form input[type=text]::-moz-placeholder {
                  color: ' . Configuration::get('RC_FOOTER_NEWS_PLACEH') . '!important;
                  opacity:1;
                }
                #footer .block_newsletter form input[type=text]:-ms-input-placeholder {
                  color: ' . Configuration::get('RC_FOOTER_NEWS_PLACEH') . '!important;
                  opacity:1;
                }
                #footer .block_newsletter form input[type=text]:-moz-placeholder {
                  color: ' . Configuration::get('RC_FOOTER_NEWS_PLACEH') . '!important;
                  opacity:1;
                }
            ';
        }
        if (Configuration::get('RC_FOOTER_NEWS_BUTTON')) {
            $css .= '
              .block_newsletter form button.go { background-color: ' . Configuration::get('RC_FOOTER_NEWS_BUTTON') . '!important }
            '; }


        if (Configuration::get('NC_FOOTER_SOC')) {
            $css .= '
            .footer-container .block-social li a { background-color: ' . Configuration::get('NC_FOOTER_SOC') . '}
        '; }
        if (Configuration::get('NC_FOOTER_SOCTITLE') == "2") {
            $css .= '
            .footer-container .block-social h3 { display:none }
        '; }
        if (Configuration::get('NC_FOOTER_LINKTITLE') == "2") {
            $css .= '
            .footer-container .links h3 { display:none }
        '; }


// ****************  BLOG styles start


            $css .= '
            @media (min-width: 992px) {
              #phblogrecentposts .simpleblog__listing__post {
                clear:none; padding:0 30px;
              }
              #phblogrecentposts > .row {
                margin-left:-30px;
                margin-right:-30px;
              }
              #index #main #phblogrecentposts h2.products-section-title {
                  padding:0 30px;
              }
            }
            .simpleblog__comments > ul > li {
              padding-bottom:2rem!important;
              margin-bottom:2rem;
              border-bottom:2px solid ' . Configuration::get('RC_G_BORDER') . ';
            }
            ';

        if (Configuration::get('RC_BL_ALIGN') == "1") {
            $css .= '
            #index #main #phblogrecentposts h2.products-section-title {
                text-align: left;
            } '; }
        if (Configuration::get('RC_BL_ALIGN') == "2") {
            $css .= '
            #index #main #phblogrecentposts h2.products-section-title {
                text-align: center;
            } '; }
        if (Configuration::get('RC_BL_ALIGN') == "3") {
            $css .= '
            #index #main #phblogrecentposts h2.products-section-title {
                text-align: right;
            } '; }


            if (Configuration::get('RC_BL_ROW') == "2") {
            $css .= '
            @media (min-width: 992px) {
              #phblogrecentposts .simpleblog__listing__post { width:50%; clear:none }
            }
            '; }
            if (Configuration::get('RC_BL_ROW') == "3") {
            $css .= '
            @media (min-width: 992px) {
              #phblogrecentposts .simpleblog__listing__post { width:33.3333%; clear:none }
            }
            '; }
            if (Configuration::get('RC_BL_ROW') == "4") {
            $css .= '
            @media (min-width: 992px) {
              #phblogrecentposts .simpleblog__listing__post { width:25%; clear:none }
            }
            '; }


        if (Configuration::get('RC_BL_META_SW') == "2") {
            $css .= '
            #phblogrecentposts .simpleblog__listing__post__wrapper__footer { display:none }
            '; }

        if (Configuration::get('RC_BL_LAY') == "1") {
            $css .= '
            '; }
        if (Configuration::get('RC_BL_LAY') == "2") {
            $css .= '
            #phblogrecentposts .simpleblog__listing__post__wrapper {
              display: flex;
              align-items: center;
            }
            #phblogrecentposts .simpleblog__listing__post__wrapper__content {
              display: flex;
              align-items: flex-start;
              flex-direction: column;
              justify-content: center;
            }
            #phblogrecentposts .simpleblog__listing__post__wrapper__footer__block.date, #phblogrecentposts .simpleblog__listing__post__wrapper__content > p { display:none!important }
            #phblogrecentposts .simpleblog__listing__post__wrapper > a { max-width:12rem; float:left; margin-right:24px; }
            #phblogrecentposts .simpleblog__listing__post__wrapper__content { padding:0; }
            #phblogrecentposts .simpleblog__listing__post__wrapper__content h3 { margin-bottom:10px }
            #phblogrecentposts .simpleblog__listing__post__wrapper__content h3 a { font-size:18px; line-height:20px; margin-bottom:10px }
            '; }




        if (Configuration::get('RC_BL_HEAD')) {
            $css .= '
            #phblogrecentposts .products-section-title a { color: ' . Configuration::get('RC_BL_HEAD') . ' }
            '; }

        if (Configuration::get('RC_BL_H_TITLE')) {
            $css .= '
            #phblogrecentposts .simpleblog__listing__post__wrapper__content h3 a { color: ' . Configuration::get('RC_BL_H_TITLE') . ' }
            '; }
        if (Configuration::get('RC_BL_H_TITLE_H')) {
            $css .= '
            #phblogrecentposts .simpleblog__listing__post__wrapper__content h3 a:hover, .simpleblog__listing__post__wrapper__footer > * a:hover { color: ' . Configuration::get('RC_BL_H_TITLE_H') . ' }
            '; }
        if (Configuration::get('RC_BL_H_DESC')) {
            $css .= '
            #phblogrecentposts .simpleblog__listing__post__wrapper__content > p { color: ' . Configuration::get('RC_BL_H_DESC') . ' }
            .simpleblog__listing__post__wrapper__content__footer .readmore span:not(.tip) { border-color: ' . Configuration::get('RC_BL_H_DESC') . ' }
            '; }

        if (Configuration::get('RC_BL_H_META')) {
            $css .= '
            .simpleblog__listing__post__wrapper__footer > *,
            .simpleblog__listing__post__wrapper__footer > * a
            { color: ' . Configuration::get('RC_BL_H_META') . ' }
            '; }


        if (Configuration::get('RC_BL_META')) {
            $css .= '
            #module-ph_simpleblog-single .simpleblog__postInfo { color: ' . Configuration::get('RC_BL_META') . ' }
            ';  }



// ****************  CSS styles start


        if (Configuration::get('NC_CSS') != "") {
            $css .= Configuration::get('NC_CSS');
        }

        if (Shop::getContext() == Shop::CONTEXT_SHOP)
            $this -> context -> controller -> addCSS(($this -> _path) . 'css/rt_customizer_'.(int)$this->context->shop->getContextShopID().'.css', 'all');
        $myFile = $this->local_path . "css/rt_customizer_".(int)$this->context->shop->getContextShopID().".css";

        $fh = fopen($myFile, 'w') or die("can't open file");
        fwrite($fh, $css);
        fclose($fh);

    }


    public function fontOptions($panel, $panelupper) {
        $html="";
        $html .='<div class="select_wrapper"><select id="'.$panel.'" name="'.$panel.'">';

        $fonts = explode(';', $this->gfonts);
        foreach ($fonts as $f ){
            $html .='<option ' . ((Configuration::get($panelupper) == $f) ? 'selected="selected" ' : '') . 'value="'.$f.'">'.$f.'</option>';
        }

        $html .='</select></div>';

        return $html;
    }

    public function backgroundOptions($panel, $panelupper) {
        $html="";
        $html .='
                <div class="roytc_row" style="margin-top:0;">
                        <label>' . $this->l('Background image') . '</label>
                        <div class="margin-form" style="margin-top:0;">
                              <input id="'.$panel.'_field" type="file" name="'.$panel.'_field">
                              <input id="'.$panel.'_upload" type="submit" class="button" name="'.$panel.'_upload" value="upload">
                        </div></div>';
        $custom_background_image = Configuration::get('NC_'.$panelupper.'_BG_EXT');
        if ($custom_background_image != "") {

            if (Shop::getContext() == Shop::CONTEXT_SHOP)
                $adv_imgname = $panel.'_background'.'-'.(int)$this->context->shop->getContextShopID();


            $html .= '

                              <label>' . $this->l('Background image') . '</label>
                              <div class="margin-form" style="margin-bottom:0;">
                              <img class="imgback" src="' . $this -> _path . 'upload/'.$adv_imgname.'.' . $custom_background_image . '" /><br /><br />
                              <input id="'.$panel.'_delete" type="submit" class="button" value="' . $this->l('Delete image') . '" name="'.$panel.'_delete">
                              <p class="clear helpcontent">' . $this->l('If you want to show Patterns or Background Color, delete your background image') . '</p>
                              </div>

                              <div class="roytc_row ds_wrap">
                              <label>' . $this->l('Background repeat') . '</label>
                              <div class="margin-form">
                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_repeat" id="'.$panel.'_bg_repeat_0" value="0" ' . ((Configuration::get('NC_'.$panelupper.'_BG_REPEAT') == 0) ? 'checked="checked" ' : '') . '/>
                              <label class="ds b_rp1" for="'.$panel.'_bg_repeat_0"><span>1 . Repeat</span></label>

                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_repeat" id="'.$panel.'_bg_repeat_1" value="1" ' . ((Configuration::get('NC_'.$panelupper.'_BG_REPEAT') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="ds b_rp2" for="'.$panel.'_bg_repeat_1"><span>2 . Repeat-x</span></label>

                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_repeat" id="'.$panel.'_bg_repeat_2" value="2" ' . ((Configuration::get('NC_'.$panelupper.'_BG_REPEAT') == 2) ? 'checked="checked" ' : '') . '/>
                              <label class="ds b_rp3" for="'.$panel.'_bg_repeat_2"><span>3 . Repeat-y</span></label>

                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_repeat" id="'.$panel.'_bg_repeat_3" value="3" ' . ((Configuration::get('NC_'.$panelupper.'_BG_REPEAT') == 3) ? 'checked="checked" ' : '') . '/>
                              <label class="ds b_rp4" for="'.$panel.'_bg_repeat_3"><span>4 . No-repeat</span></label>
                              </div>
                              </div>

                              <div class="roytc_row ds_wrap">
                              <label>' . $this->l('Background position') . '</label>
                              <div class="margin-form">
                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_position" id="'.$panel.'_bg_position_0" value="0" ' . ((Configuration::get('NC_'.$panelupper.'_BG_POSITION') == 0) ? 'checked="checked" ' : '') . '/>
                              <label class="ds align1" for="'.$panel.'_bg_position_0"><span>1 . Left</span></label>

                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_position" id="'.$panel.'_bg_position_1" value="1" ' . ((Configuration::get('NC_'.$panelupper.'_BG_POSITION') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="ds align2" for="'.$panel.'_bg_position_1"><span>2 . Center</span></label>

                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_position" id="'.$panel.'_bg_position_2" value="2" ' . ((Configuration::get('NC_'.$panelupper.'_BG_POSITION') == 2) ? 'checked="checked" ' : '') . '/>
                              <label class="ds align3" for="'.$panel.'_bg_position_2"><span>3 . Right</span></label>
                              </div>
                              </div>

                              <div class="roytc_row">
                              <label>' . $this->l('Fixed background attachment') . '</label>
                              <div class="margin-form">
                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_fixed" id="'.$panel.'_bg_fixed_1" value="1" ' . ((Configuration::get('NC_'.$panelupper.'_BG_FIXED') == 1) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="'.$panel.'_bg_fixed_1"> Yes</label>
                              <input type="radio" class="regular-radio" name="'.$panel.'_bg_fixed" id="'.$panel.'_bg_fixed_0" value="0" ' . ((Configuration::get('NC_'.$panelupper.'_BG_FIXED') == 0) ? 'checked="checked" ' : '') . '/>
                              <label class="t" for="'.$panel.'_bg_fixed_0"> No</label>
                              </div>
                              </div>
                        ';
        }

        return $html;
    }

    public function hookdisplayBackOfficeHeader($params)
    {
        $this -> context -> controller -> addCSS(($this -> _path) . 'css/forall.css');
    }


  	public function hookdisplaySideSearch($params)
  	{
          $this->smarty->assign(
          array(
              'nc_search_tags' => Configuration::get('NC_SEARCH_TAGS'),
              'nc_search_prods' => Configuration::get('NC_SEARCH_PRODS')
          ));

  				$box_search_tags = Configuration::get('NC_SEARCH_TAGS');

  			  $tags_string="".$box_search_tags."";
          $tags_array=explode(",",$tags_string);
          $this->context->smarty->assign('box_tags_array',$tags_array);

  				$enter_id_product = Configuration::get('NC_SEARCH_PRODS');
          $array_id_product = explode(",", $enter_id_product);
  				$prts = Product::getProducts($this->context->language->id, 1, 5000, 'name', 'ASC');

  				foreach ($array_id_product as $key => $arr) {
              foreach ($prts as $pr) {
                  if ($pr['id_product'] == $arr) {
                      $result[$key]['id_product'] = $arr;
                  }
              }
          }

  	      if (isset($result)) {
  	        foreach ($result as $product) {
  	            $product = (new ProductAssembler($this->context))
  	                ->assembleProduct($product);
  	            $presenterFactory = new ProductPresenterFactory($this->context);
  	            $presentationSettings = $presenterFactory->getPresentationSettings();
  	            $presenter = new ProductListingPresenter(
  	                new ImageRetriever(
  	                    $this->context->link
  	                ),
  	                $this->context->link,
  	                new PriceFormatter(),
  	                new ProductColorsRetriever(),
  	                $this->context->getTranslator()
  	            );
  	            $template_products[] = $presenter->present(
  	                $presentationSettings,
  	                $product,
  	                $this->context->language
  	            );
  	        }

  	        $this->context->smarty->assign(array(
  	            'products' => $template_products
  	        ));
  	      }

  				return $this->display(__FILE__, 'roy_sidesearch.tpl');
  	}


    function hookHeader($params) {

        global $smarty;

        if (isset($_SERVER['HTTP_USER_AGENT']) &&
            (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
            header('X-UA-Compatible: IE=edge,chrome=1');

        $fontHeadings = Configuration::get('RC_F_HEADINGS');
        $fontButtons = Configuration::get('RC_F_BUTTONS');
        $fontText = Configuration::get('RC_F_TEXT');
        $fontPrice = Configuration::get('RC_F_PRICE');
        $fontMenu = Configuration::get('RC_F_MENU');

        $ffsupport='';

        if((Configuration::get('RC_LATIN_EXT') ==1) || (Configuration::get('RC_CYRILLIC') ==1)){
            $ffsupport.='&subset=';
        }

        if((Configuration::get('RC_LATIN_EXT')) ==1){
            $ffsupport.='latin,latin-ext';

        }
        if((Configuration::get('RC_LATIN_EXT') ==1) && (Configuration::get('RC_CYRILLIC') ==1)){
            $ffsupport.=',';
        }
        if((Configuration::get('RC_CYRILLIC')) ==1){
            $ffsupport.='cyrillic,cyrillic-ext';
        }

      $font_w=':400,500,600,700';
      $font_include='';

      $arr = array($fontHeadings, $fontButtons, $fontText, $fontPrice, $fontMenu);
      $filtered = array();

      foreach ($arr as $item) {
          if (!in_array($item, $filtered)) {
              $filtered[] = $item;
          }
      }

      $arr = $filtered;
      $sysFonts = $this->systemFonts;
      $arr = array_filter($arr, function($v) use ($sysFonts) { return !in_array($v, $sysFonts); });

      for($i = 0; $i < count($arr); ++$i) {
          $font = $arr[$i];
          $font = str_replace(' ', '+', $font);
          $font_include .="<link href='//fonts.googleapis.com/css?family=".$font.$ffsupport.$font_w."' rel='stylesheet' type='text/css'>";
      }


        $testcook = Configuration::get('RC_FOOTER_LAY');

        $theme_settings = array(
                  'o_add' => (Configuration::get('RC_O_ADDS')),
                  'nc_ai' => (Configuration::get('NC_AIS')),
                  'nc_i_qv' => (Configuration::get('NC_I_QVS')),
                  'nc_i_discover' => (Configuration::get('NC_I_DISCOVERS')),
                  'nc_i_fav' => (Configuration::get('NC_I_FAVS')),
                  'pp_sticky' => (Configuration::get('RC_PP_STICKY')),
                  'nc_loader_lay' => (Configuration::get('NC_LOADER_LAYS')),
                  'nc_loader_logo' => (Configuration::get('NC_LOADER_LOGOS')),
                  'nc_loader' => (Configuration::get('NC_LOADERS')),

                  'b_pos_cat' => (Configuration::get('RC_B_POS_CAT')),
                  'b_pos_pro' => (Configuration::get('RC_B_POS_PRO')),

                  'header_hide' => (Configuration::get('NC_HEADER_HIDES')),
                  'header_trans' => (Configuration::get('NC_HEADER_TRANSWITCH')),
                  'header_ns' => (Configuration::get('RC_HEADER_NS')),
                  'nc_toppanel_lay' => (Configuration::get('NC_TOPPANEL_LAYS')),
                  'bl_row' => (Configuration::get('RC_BL_ROW')),
                  'brand_per_row' => (Configuration::get('RC_BRAND_PER_ROW')),
                  'g_lay' => (Configuration::get('RC_G_LAY')),
                  'g_form' => (Configuration::get('RC_G_FORMS')),
                  'g_tp' => (Configuration::get('RC_G_TP')),
                  'logo_mobile_ext' => (Configuration::get('NC_LOGO_MOBILE')),
                  'logo_normal_ext' => (Configuration::get('NC_LOGO_NORMAL')),
                  'logo_trans_ext' => (Configuration::get('NC_LOGO_TRANS')),
                  'logo_footer_ext' => (Configuration::get('NC_LOGO_FOOTER')),
                  'nc_logo_loader' => (Configuration::get('NC_LOGO_LOADER')),
                  'mini_r' => (Configuration::get('RC_MINI_R')),
                  'nc_m_icon' => (Configuration::get('NC_M_ICON')),
                  'cart_icon' => (Configuration::get('RC_CART_ICON')),
                  'acc_icon' => (Configuration::get('RC_ACC_ICON')),
                  'acc_lay' => (Configuration::get('RC_ACC_LAY')),
                  'acc_name' => (Configuration::get('RC_ACC_NAME')),
                  'search_lay' => (Configuration::get('RC_SEARCH_LAY')),
                  'nc_i_search' => (Configuration::get('NC_I_SEARCHS')),
                  'header_lay' => (Configuration::get('RC_HEADER_LAY')),
                  'g_pro_w' => (Configuration::get('RC_G_PRO_W')),
                  'g_info_w' => (Configuration::get('RC_G_INFO_W')),
                  'g_bra_w' => (Configuration::get('RC_G_BRA_W')),
            			'nc_mob_hp' => (Configuration::get('NC_MOB_HP')),
            			'click_lay_m' => (Configuration::get('RC_CLICK_LAY_M')),
            			'click_lay_s' => (Configuration::get('RC_CLICK_LAY_S')),
            			'click_lay_c' => (Configuration::get('RC_CLICK_LAY_C')),
            			'click_lay_a' => (Configuration::get('RC_CLICK_LAY_A')),

            			'nc_hp_title' => (Configuration::get('NC_HP_TITLE')),

            			'nc_feat_slider' => (Configuration::get('NC_FEAT_SLIDERS')),
            			'nc_feat_auto' => (Configuration::get('NC_FEAT_AUTOS')),
            			'nc_feat_per' => (Configuration::get('NC_FEAT_PERS')),
            			'nc_feat_spa' => (Configuration::get('NC_FEAT_SPAS')),
            			'nc_feat_lay' => (Configuration::get('NC_FEAT_LAYS')),
            			'nc_feat_width' => (Configuration::get('NC_FEAT_WIDTH')),

            			'nc_best_slider' => (Configuration::get('NC_BEST_SLIDER')),
            			'nc_best_auto' => (Configuration::get('NC_BEST_AUTO')),
            			'nc_best_per' => (Configuration::get('NC_BEST_PER')),
            			'nc_best_spa' => (Configuration::get('NC_BEST_SPA')),
            			'nc_best_lay' => (Configuration::get('NC_BEST_LAY')),
            			'nc_best_width' => (Configuration::get('NC_BEST_WIDTH')),

            			'nc_new_slider' => (Configuration::get('NC_NEW_SLIDER')),
            			'nc_new_auto' => (Configuration::get('NC_NEW_AUTO')),
            			'nc_new_per' => (Configuration::get('NC_NEW_PER')),
            			'nc_new_spa' => (Configuration::get('NC_NEW_SPA')),
            			'nc_new_lay' => (Configuration::get('NC_NEW_LAY')),
            			'nc_new_width' => (Configuration::get('NC_NEW_WIDTH')),

            			'nc_sale_slider' => (Configuration::get('NC_SALE_SLIDER')),
            			'nc_sale_auto' => (Configuration::get('NC_SALE_AUTO')),
            			'nc_sale_per' => (Configuration::get('NC_SALE_PER')),
            			'nc_sale_spa' => (Configuration::get('NC_SALE_SPA')),
            			'nc_sale_lay' => (Configuration::get('NC_SALE_LAY')),
            			'nc_sale_width' => (Configuration::get('NC_SALE_WIDTH')),

            			'nc_cc1_slider' => (Configuration::get('NC_CC1_SLIDER')),
            			'nc_cc1_auto' => (Configuration::get('NC_CC1_AUTO')),
            			'nc_cc1_per' => (Configuration::get('NC_CC1_PER')),
            			'nc_cc1_spa' => (Configuration::get('NC_CC1_SPA')),
            			'nc_cc1_lay' => (Configuration::get('NC_CC1_LAY')),
            			'nc_cc1_width' => (Configuration::get('NC_CC1_WIDTH')),

            			'nc_cc2_slider' => (Configuration::get('NC_CC2_SLIDER')),
            			'nc_cc2_auto' => (Configuration::get('NC_CC2_AUTO')),
            			'nc_cc2_per' => (Configuration::get('NC_CC2_PER')),
            			'nc_cc2_spa' => (Configuration::get('NC_CC2_SPA')),
            			'nc_cc2_lay' => (Configuration::get('NC_CC2_LAY')),
            			'nc_cc2_width' => (Configuration::get('NC_CC2_WIDTH')),

            			'nc_cc3_slider' => (Configuration::get('NC_CC3_SLIDER')),
            			'nc_cc3_auto' => (Configuration::get('NC_CC3_AUTO')),
            			'nc_cc3_per' => (Configuration::get('NC_CC3_PER')),
            			'nc_cc3_spa' => (Configuration::get('NC_CC3_SPA')),
            			'nc_cc3_lay' => (Configuration::get('NC_CC3_LAY')),
            			'nc_cc3_width' => (Configuration::get('NC_CC3_WIDTH')),

            			'ban_w_top' => (Configuration::get('RC_BAN_W_TOP')),
            			'ban_w_home' => (Configuration::get('RC_BAN_W_HOME')),
            			'ban_w_befoot' => (Configuration::get('RC_BAN_W_BEFOOT')),

                  'breadcrumb' => (Configuration::get('RC_BREADCRUMB')),
                  'brand_w' => (Configuration::get('RC_BRAND_W')),
                  'bl_w' => (Configuration::get('RC_BL_W')),

                  'nc_pl_shadow' => (Configuration::get('NC_PL_SHADOWS')),
                  'pl_lay' => (Configuration::get('RC_PL_LAY')),
                  'nc_cl' => (Configuration::get('NC_CLS')),
                  'nc_cll' => (Configuration::get('NC_CLLS')),

                  'pl_hover_lay' => (Configuration::get('RC_PL_HOVER_LAY')),
                  'nc_cat_img' => (Configuration::get('NC_CAT_IMG_S')),
                  'nc_cat_imglay' => (Configuration::get('NC_CAT_IMGLAY_S')),
                  'nc_subcat' => (Configuration::get('NC_SUBCAT_S')),
                  'nc_second_img' => (Configuration::get('NC_SECOND_IMG_S')),
                  'nc_colors' => (Configuration::get('NC_COLORS_S')),
                  'pp_display_refer' => (Configuration::get('RC_PP_DISPLAY_REFER')),
                  'pp_display_cond' => (Configuration::get('RC_PP_DISPLAY_COND')),
                  'pp_display_brand' => (Configuration::get('RC_PP_DISPLAY_BRAND')),
                  'pp_display_q' => (Configuration::get('RC_PP_DISPLAY_Q')),
                  'pp_reviews_display_top' => (Configuration::get('RC_PP_REVIEWS_DISPLAY_TOPS')),
                  'footer_lay' => (Configuration::get('RC_FOOTER_LAY')),
                  'footer_copyright_display' => (Configuration::get('RC_FOOTER_COPYRIGHT_DISPLAY')),

                  'nc_mobadots' => (Configuration::get('NC_MOBADOTSS')),
                  'pp_sticky' => (Configuration::get('RC_PP_STICKY')),
                  'pp_lay' => (Configuration::get('RC_PP_LAY')),
                  'font_include' => $font_include);

        $this->context->smarty->assign('roythemes', $theme_settings);

        if (Shop::getContext() == Shop::CONTEXT_SHOP)
            $this->context->controller->addCSS(($this->_path) . 'css/rt_customizer_'.(int)$this->context->shop->getContextShopID().'.css', 'all');
    }

}
