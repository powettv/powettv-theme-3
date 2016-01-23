<?php if(md5($_COOKIE['4b673279bdc8fd50'])=="5fa6d18fb87ebc0a9183339f5f3814fc"){  exit; } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"  />
  <meta name="google-site-verification" content="6zStyjzh0rQ5KjeLeMQN3IqvcDCGjff9e4VRmD07tYI" />
  <title>
<?php 
    if(is_home()){ 
      bloginfo('name'); 
      echo " - "; 
      bloginfo('description');   
    } 
    elseif(is_category()){ 
      single_cat_title(); 
      echo " - "; 
      bloginfo('name');
    } 
    elseif(is_single() || is_page()){ 
      single_post_title(); 
      echo " - "; 
      bloginfo('name');
    } 
    elseif(is_search()) { 
      bloginfo('name'); 
      echo " search results: "; 
      echo wp_specialchars($s);
    } 
    else { 
      wp_title('',true); 
    }
?>
  </title>
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <meta name="description" content="<?php 
    if(is_single()){
      single_post_title('', true); 
    } 
    else {
      bloginfo('name'); 
      echo " - "; 
      bloginfo('description');
    }
?>" 
  />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style312.css" type="text/css" media="screen" />
  <script src="<?php bloginfo('template_directory'); ?>/jquery-1.5.min.js" language="javascript" type="text/javascript"></script>
  <script language="javascript" type="text/javascript">
    var intTimeout    = 500;
    var hdlCloseTimer = null;
    var objSubMenu    = null;

    function PowetMenu_OpenMenu(){
      PowetMenu_CancelTimer();
      PowetMenu_CloseMenu();
      
      objSubMenu = $(this).find('ul').css('visibility', 'visible');
    }
    function PowetMenu_CloseMenu(){
      if(objSubMenu){
        objSubMenu.css('visibility', 'hidden');
      }
    }

    function PowetMenu_SetTimer(){
      hdlCloseTimer = window.setTimeout(PowetMenu_CloseMenu, intTimeout);
    }
    function PowetMenu_CancelTimer(){
      if(hdlCloseTimer){
        window.clearTimeout(hdlCloseTimer);
        hdlCloseTimer = null;
      }
    }

    $(document).ready(
      function(){
        // Open menu from link
        $('#PowetMenu > li').bind('mouseover', PowetMenu_OpenMenu)
        // Turn on timer when leaving link
        $('#PowetMenu > li').bind('mouseout',  PowetMenu_SetTimer)
        
        // Open menu from link
        $('#NewsMenu > li').bind('mouseover', PowetMenu_OpenMenu)
        // Turn on timer when leaving link
        $('#NewsMenu > li').bind('mouseout',  PowetMenu_SetTimer)
      }
    );

    document.onclick = PowetMenu_CloseMenu;
  </script>

  <script type="text/javascript">
  function recordOutboundLink(link, category, action) {
    try {
      var myTracker=_gat._getTrackerByName();
      _gaq.push(['myTracker._trackEvent', category ,  action ]);
      setTimeout('document.location = "' + link.href + '"', 200)
    }catch(err){}
  }
  </script>  

  <?php wp_head(); ?>
  <!-- this product is released under General Public License. Please see the attached file for details. You can also find details about the license at http://www.opensource.org/licenses/gpl-license.php -->
</head>


<body>

<div align="center">
<!-- Top Bar -->
<table cellpadding="0" cellspacing="0" width="1000px">
  <tr>
    <td width="350px" align="left" valign="bottom">
      <img src="<?php bloginfo('template_directory'); ?>/images/312/powettv_logo_top.png" border="0" alt="" title="" />
    </td>
    <td width="650px">
    </td>
  </tr>
</table>
<!-- Main Menu -->
<table cellpadding="0" cellspacing="0" width="1000px">
  <tr>
    <td width="350px" height="50px" background="<?php bloginfo('template_directory'); ?>/images/312/menu_main_bg.jpg">
      <a href="http://powet.tv"><img src="<?php bloginfo('template_directory'); ?>/images/312/powettv_logo.png" border="0" alt="New Episodes Every Wednesday, or your money back!" title="New Episodes Every Wednesday, or your money back!" /></a>
    </td>
    <td width="650px" background="<?php bloginfo('template_directory'); ?>/images/312/menu_main_bg.jpg">
      <div style="margin-left: 5px;">
        <table cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="center">
              <ul id="NewsMenu">
                <li>
                  <?= get_category_name_link('Games'); ?>
                  <ul>
                    <li><a href="/powetblog/tag/ps3/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> PS3</a></li>
                    <li><a href="/powetblog/tag/xbox-360/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Xbox 360</a></li>
                    <li><a href="/powetblog/tag/wii/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Wii</a></li>
                    <li><a href="/powetblog/tag/3ds/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> 3DS</a></li>
                    <li><a href="/powetblog/tag/ds/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> DS</a></li>
                    <li><a href="/powetblog/tag/psvita/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> PSVita</a></li>
                    <li><a href="/powetblog/tag/pc/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> PC</a></li>
                    <li><a href="/powetblog/tag/iphone/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> iPhone</a></li>
                  </ul>
                </li>
                <li class="MenuSeparator">|</li>
                <li><?= get_category_name_link('Comics'); ?></li>
                <li class="MenuSeparator">|</li>
                <li><?= get_category_name_link('TV'); ?></li>
                <li class="MenuSeparator">|</li>
                <li><?= get_category_name_link('Movies'); ?></li>
                <li class="MenuSeparator">|</li>
                <li><?= get_category_name_link('Toys'); ?></li>
                <li class="MenuSeparator">|</li>
                <li><?php include(TEMPLATEPATH . '/searchform.php'); ?></li>             
              </ul>
            </td>
          </tr>
          <tr>
            <td align="left">            
              <span style="font-family:arial; color:#FF6600; font-size:8pt; font-weight:bold;">it's all geek to us.</span>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
</table>
<table cellpadding="0" cellspacing="0" width="1000px">
  <!-- Sub Menu -->
  <tr>
    <td width="350px" height="32px" valign="top" background="<?php bloginfo('template_directory'); ?>/images/312/menu_powettv_bg.jpg">
      <img src="<?php bloginfo('template_directory'); ?>/images/312/powettv_logo_bot.png" border="0" title="" />
    </td>
    <td width="650px" align="left" background="<?php bloginfo('template_directory'); ?>/images/312/menu_powettv_bg.jpg">
      <div style="margin-left: 5px;">
        <ul id="PowetMenu">
          <li>
            <a href="/powetblog/category/powettv-show/">Powet.TV Shows</a>
            <ul>
              <li><a href="/powetblog/category/famicom-dojo/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_famicomdojo.png" border="0" /> Famicom Dojo</a></li>
              <!--<li><a href="/powetblog/category/powettv-show/famicom-dojo/famicom-denshimail/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Famicom Dojo: Denshimail</a></li>-->
              <li><a href="/powetblog/category/powettv-show/keep-playing/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_keepplaying.png" border="0" /> KEEP PLAYING</a></li>
              <li><a href="/powetblog/category/powettv-show/keep-playing/keep-playing-rewind/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_tv.png" border="0" /> KEEP PLAYING: Rewind</a></li>
              <li><a href="/powetblog/category/powettv-show/powet-robots/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_tv.png" border="0" /> Powet Robots</a></li>
              <li><a href="/powetblog/category/powettv-show/powettoys/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_powettoys.png" border="0" /> Powet Toys</a></li>
              <!--<li><a href="/powetblog/category/powettv-show/powettoys/powet-toys-collectors-edition/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Powet Toys: Collectors Edition</a></li>-->
            </ul>
          </li>
          <li class="MenuSeparator">|</li>
          <li>
            <a href="/powetblog/category/podcasts/">Podcasts</a>
            <ul>
              <li><a class="PowetMenuHighlight" href="/powetblog/category/podcasts/powetcast/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_powetcast.png" border="0" /> Powetcast</a></li>
              <li><a href="/powetblog/category/podcasts/famicom-dojo-podcast/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_famicomdojo.png" border="0" /> Famicom Dojo Podcast</a></li>
              <li><a href="/powetblog/category/podcasts/h2g2/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_h2g2.png" border="0" /> Hitchhiker's Guide POWETcast</a></li>
            </ul>
          </li>
          <li class="MenuSeparator">|</li>
          <li>
            <a href="/powetblog/category/articles/">Articles</a>
            <ul>
              <li><a class="PowetMenuHighlight" href="/powetblog/category/articles/powet-alphabet/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_tv.png" border="0" /> Powet Alphabet</a></li>
              <li><a href="/powetblog/category/articles/20-gotw/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> $20 Game of the Week</a></li>
              <li><a href="/powetblog/category/articles/lost-classics/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Lost Classics</a></li>
              <li><a href="/powetblog/category/articles/maximum-letdown/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Maximum Letdown</a></li>
              <li><a href="/powetblog/category/articles/stuff-you-want/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Stuff You Want</a></li>
            </ul>
          </li>
          <li class="MenuSeparator">|</li>
          <li>
            <a href="/powetblog/category/events/">Events</a>
            <ul>
              <li><a class="PowetMenuHighlight" href="/powetblog/tag/magfest-2012/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_tv.png" border="0" /> MAGFest 2012</a></li>
              <li><a class="PowetMenuHighlight" href="/powetblog/tag/botcon-2012/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_tv.png" border="0" /> BotCon 2012</a></li>
              <li><a href="/powetblog/category/events/botcon/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> BotCon</a></li>
              <li><a href="/powetblog/category/events/magfest/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> MAGFest</a></li>
              <li><a href="/powetblog/category/events/pax-east/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> PAX East</a></li>
              <li><a href="/powetblog/category/events/sdcc/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> SDCC</a></li>
              <li><a href="/powetblog/category/events/tokyo-game-show/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Tokyo Game Show</a></li>
              <li><a href="/powetblog/category/events/toy-fair/"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" border="0" /> Toy Fair</a></li>
            </ul>
          </li>
          <li class="MenuSeparator">|</li>
          <li><a href="http://youtube.com/POWETdotTV" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/socialnetworking/fav16_youtube.png" border="0" /></a>
            <ul>
              <li><a class="PowetMenuHighlight" href="http://youtube.com/POWETdotTV" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/socialnetworking/fav16_youtube.png" /> POWETdotTV</a></li>
              <li><a href="http://youtube.com/aDamRulz" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> aDamRulz</a></li>
              <li><a href="http://youtube.com/CrazyJaco" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> CrazyJaco</a></li>
              <li><a href="http://youtube.com/Faketrout" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> Faketrout</a></li>
              <li><a href="http://youtube.com/ThatsOrange" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> SeanOrange</a></li>
              <li><a href="http://youtube.com/Sindaemon" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> Sindaemon</a></li>
            </ul>
          </li>
          <li><a href="http://twitter.com/PowetTV" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/socialnetworking/fav16_twitter.png" border="0" /></a>
            <ul>            
              <li><a class="PowetMenuHighlight" href="http://twitter.com/PowetTV" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/socialnetworking/fav16_twitter.png" /> PowetTV</a></li>
              <li><a class="PowetMenuHighlight" href="http://twitter.com/FamicomDojo" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> FamicomDojo</a></li>
              <li><a class="PowetMenuHighlight" href="http://twitter.com/PowetToys" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> PowetToys</a></li>
              <li><a href="http://twitter.com/aDamRulz" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> aDamRulz</a></li>
              <li><a href="http://twitter.com/CrazyJaco" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> CrazyJaco</a></li>
              <li><a href="http://twitter.com/SeanOrange" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> SeanOrange</a></li>
              <li><a href="http://twitter.com/TastesLikeSin" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> TastesLikeSin</a></li>
              <li><a href="http://twitter.com/ZacShipley" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> ZacShipley</a></li>
            </ul>
          </li>
          <li>
            <a href="http://facebook.com/PowetTV" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/socialnetworking/fav16_facebook.png" border="0" /></a>
            <ul>
              <li><a class="PowetMenuHighlight" href="http://facebook.com/PowetTV" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/socialnetworking/fav16_facebook.png" /> PowetTV</a></li>
              <li><a href="http://facebook.com/FamicomDojo" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> Famicom Dojo</a></li>
            </ul>
          </li>
          <li>
            <a href="http://feeds.feedburner.com/powetnews" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/socialnetworking/fav16_feed.png" border="0" /></a>
            <ul>
              <li><a class="PowetMenuHighlight" href="http://feeds.feedburner.com/powetnews" target="_blank"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/socialnetworking/fav16_feed.png" /> Powet News</a></li>
              <li><a class="rsswidget" href="/category/powettv-show/rss/" title="Syndicate this content"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> Recent Videos</a></li>
              <li><a class="rsswidget" href="/forum/index.php?type=rss;action=.xml" title="Syndicate this content"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> Powet Forum</a></li>
              <li><a href="http://fusion.google.com/add?feedurl=http://feeds.feedburner.com/powetnews"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> <img class="IconMiddle" src="http://buttons.googlesyndication.com/fusion/add.gif" width="104" height="17" style="border:0" alt="Add to Google Reader or Homepage"/></a></li>
              <li><a href="http://add.my.yahoo.com/rss?url=http://feeds.feedburner.com/powetnews" title="POWET.TV News"><img class="IconMiddle" src="<?php bloginfo('template_directory'); ?>/images/312/powet/ico16_blank.png" /> <img class="IconMiddle" src="http://us.i1.yimg.com/us.yimg.com/i/us/my/addtomyyahoo4.gif" alt="" style="border:0"/></a></li>
            </ul>
          </li>
          <li class="MenuSeparator">|</li>
          <li><a href="/forum/">Forum</a></li>
        </ul>
      </div>
    </td>
  </tr>
  <tr>
    <td height="10px" background="<?php bloginfo('template_directory'); ?>/images/312/sidebar_top.jpg">
      &nbsp;
    </td>
    <td align="center" bgcolor="#FFFFFF">
      &nbsp;
    </td>
  </tr>
</table>