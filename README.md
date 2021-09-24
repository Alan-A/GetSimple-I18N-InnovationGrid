# GetSimple I18N InnovationGrid

The files provided in this repository are intended to provide a starting point for developing a responsive multi-language Web-Site with the [GetSimple CMS](http://get-simple.info). The files require the use of several plugins for GetSimple and include a new theme, InnovationGrid. This theme is based on the default GetSimple [Innovation theme](http://get-simple.info/extend/theme/innovation-theme/104/), using CSS3 techniques.

## Example Web-Site

I use this package as the basis for [my own web-site](http://www.alan-amos.de) with only minor changes to CSS and a number of additional features to meet my own requirements.

## Download Description

This repository contains template, style and component files required for the InnovationGrid theme as well as a number of page files that demonstrate and describe the site.
Users have to install the plugins listed [below](#plugins) before the Web-Site will function fully.

## Why use GetSimple?

There are a number of reasons that I became interested in using GetSimple:
* it is Open Source - so, if necessary I could update the code myself;
* it is free - with a good selection of free themes and plugins;
* it has an active communnity;
* a feature-rich set of plugins is available for creating multi-language sites; 
* it uses flat-file storage instead of a database, simplifying installation and potentially speeding up response times.

In addition, GetSimple provides editors with a very clean and easy-to-use interface.  

## Features

### Theme

The InnovationGrid theme is responsive and uses Grid and Flex CSS3 techniques. (This is instead of the Skeleton CSS used by the [Responsive Innovation](http://get-simple.info/extend/theme/responsive-innovation/615/) theme.)

The theme has four different layouts according to the width of the browser window and the widest has a right-hand sidebar as in the default Innovation theme. 
Two layout - i.e. grid - files are provided, one for two aside elements in the sidebar and one for three. The grid file which is active is specified by commenting in/out the relevant `.css` file in the default `template.php` template file.

A 'burger menu' is active in smaller screens instead of the standard 'fixed' display in an aside element.

The repository also includes a `components.xml` file, which contains a number of page elements such as the search fields and navigation.

### Custom Page Headers 

The i18n Custom Fields plugin is used to provide custom page Text Headers in the Header part of each page, allowing this text to be varied according to the page language. 

### Tag Cloud

All tags in the cloud are searched by the i18n Search Plugin along with page content.

### Language-Specific Search

A search field is included in the page header element. This field uses the i18n Search plugin and both page content and page tags - as shown in the optional tag cloud are searched. 

### Breadcrumbs

A breadcrumb bar is included between the Page Header element and the main part of pages. 

## Installation

Install the [GetSimple CMS](http://get-simple.info/download).

Install and activte the plugins listed [below](#plugins).

This theme is installed in the GetSimple themes folder in the standard manner: 
* Copy the contents of the theme folder of this repository to the theme folder of your CMS installation.
* Overwrite the original `components.xml` file by copying the `components.xml` file in the `.zip` file into the folder:
  * `Site_Installation_Folder\data\other\`
* Copy the page files the `.zip` file into the folder, overwriting the original `index.xml` file:
  * `Site_Installation_Folder\data\pages\`
* Log into the back end of the CMS using your User credentials and select and activate the InnovationGrid theme in the admin Themes tab.
* You should now have a web-site with two languages, the default being English and the second language German. 

### Aside Elements

The default sidebar contains three aside elements. 

If only two aside elements are to be included in the page, open the default template file (template.php) and change the active `innovationgrid_grid_aside-*r.css` file.

### [Plugins](#plugins)
The following GetSimple plugins are used in the theme:
* [DynPages](http://get-simple.info/extend/plugin/dynpages/81/)
* [i18n](http://get-simple.info/extend/plugin/i18n/69/)
* [i18n Custom Fields](http://get-simple.info/extend/plugin/i18n-custom-fields/100/)
* [i18n Search](http://get-simple.info/extend/plugin/i18n-search/82/)

In addition I recommend making life slightly easier by using the GetSimple [PluginInstaller](http://get-simple.info/extend/plugin/gs-plugin-installer/955/) plugin.

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
Seperate TagCloud components are required for each language as GetSimple does not pass variables (hier it would be $lang) to components:
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


