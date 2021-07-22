# GEtSimple I18N InnovationGrid


This repository contains a set of files for developing a responsive multi-language Web-Site with the [GetSimple CMS](http://get-simple.info). The files require the use of several of the i18n series of multi-language plugins for GetSimple and are based on an updated version the default GetSimple [Innovation theme](http://get-simple.info/extend/theme/innovation-theme/104/), which I have named InnovationGrid.

The InnovationGrid theme is responsive and uses Grid and Flex CSS3 techniques. (This is instead of the Skeleton CSS used by the [Responsive Innovation](http://get-simple.info/extend/theme/responsive-innovation/615/) theme.)

The theme has four different layouts according to the width of the browser window and the widest has a right-hand sidebar as in the default Innovation theme. Two layout - i.e. grid - files are provided, one for two aside elements in the sidebar and one for three. The grid file which is active is specified by commenting in/out the relevant .css file in the default template.php template file.

A 'burger menu' is active in smaller screens instead of the standard fixed display.

The repository also includes a components.xml file, which us used to a number of page elements such as the search fields and navigation.

## Installation

This theme is installed in the GetSimple themes folder in the standard manner: upload, unzip, select the theme in the admin themes tab.

In addition the components.xlm file has to be copied into the folder:
* Site_Installation_Folder\data\other\

### Aside Elements

The default sidebar contains three aside elements. 

If only two aside elements are to be included in the page, open the default template file (template.php) and change the active `innovationgrid_grid_aside-*r.css` file.

### Plugins
The following GetSimple plugins are used in the theme:
* [DynPages](http://get-simple.info/extend/plugin/dynpages/81/)
* [i18n](http://get-simple.info/extend/plugin/i18n/69/)
* [i18n Search](http://get-simple.info/extend/plugin/i18n-search/82/)
* [i18n Special Pages](http://get-simple.info/extend/plugin/i18n-special-pages/319/)

### Components
The following theme features require GetSimple components, which are saved here in the components.xml file:
* BurgerMenu for navigation on devices with narrow screens
  * BurgerIcon
    ```php
<!-- Called in pageheader.inc.php -->
<script>
    function myFunction(x) {
        x.classList.toggle("show-menu");
        document.querySelector(".mobile-nav").classList.toggle("hide-mobile-nav");
        document.querySelector(".mobile-nav-menu").classList.toggle("hide-menu");
    }
</script>

<div class="mobile-nav-icon" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</div>
    ```
* BurgerMenu
```php
<!-- Called in pageheader.inc.php -->
<div  class="mobile-nav hide-mobile-nav" >
    <nav class="mobile-nav-menu hide-menu" >
        <ul>
<?php get_i18n_navigation('index',0,99,I18N_SHOW_MENU); ?><!-- Only show pages in menu, not all pages -->
        </ul>
    </nav>
</div>
```

* Site Search
  * SearchQueryRenderer
```php
<?php if (@$_REQUEST['words']) {?>
<p><?php  echo htmlspecialchars('Ihre Anfrage:');  ?></p>
<ul><li><?php  echo htmlspecialchars($_REQUEST['words']); ?>
<?php  } ?></li></ul>
``` 
  * SearchResultRenderer
```php
<h3 class="search-entry-title">
  <?php if ($showLanguage) { ?>
  <span class="search-entry-language">
    <?php echo htmlspecialchars($item->language, ENT_NOQUOTES); ?>
  </span>
  <?php } ?>
  <a href="<?php echo $item->link; ?>">
    <?php echo htmlspecialchars($item->title, ENT_NOQUOTES); ?>
  </a>
</h3>
<?php if ($showDate) { ?>
<div class="search-entry-date">
  <?php echo strftime($dateFormat, $item->pubDate); ?>
</div>
<?php } ?>
<div class="search-entry-excerpt">
  <?php echo $item->getExcerpt($item->content, $numWords); ?>
</div>
```
* 'SidebarNav' Navigation Menu
```php
<!-- Called in sidebar.inc.php -->
<h2>Navigation</h2>
<ul>
<!-- Only show pages in menu, not all pages -->
<?php get_i18n_navigation('index',0,99,I18N_SHOW_MENU); ?>
</ul>
```
* 'TagCloud' aside elements  
Seperate TagCloud components are required for each language as GetSimple does not pass variables (hier it would be $lang) to components.
  * TagCloud_de
    ```
    <h2>Tags</h2>
    <?php get_i18n_tags(array('lang'=>'de', 'slug'=>'suchergebnisse')); ?>
    ``` 
  * TagCloud_en
    ```
    <h2>Tags</h2>
    <?php get_i18n_tags(array('lang'=>'en', 'slug'=>'suchergebnisse')); ?>
    ```


