# InnovationGrid-Theme

This theme is a reworking of the default [Innovation theme](http://get-simple.info/extend/theme/innovation-theme/104/) for the [GetSimple CMS](http://get-simple.info).

The Theme is responsive and uses Grid and Flex CSS techniques instead of the skeleton CSS used by the [Responsive Innovation](http://get-simple.info/extend/theme/responsive-innovation/615/) theme.

As provided here, the InnovationGrid theme uses several of the GetSimple i18n plugins for developing multi-language sites. 

The theme has four different layouts according to the width of the browser window and the widest has a right-hand sidebar as in the default Innovation theme. Two layout - i.e. grid - files are provided, one for two aside elements in the sidebar and one for three. The grid file which is active is specified by commenting in/out the relevant .css file in the default template.php template file.

A 'burger menu' is active in smaller screens instead of the standard fixed display 

## Installation

This theme is installed in the GetSimple themes folder in the standard manner: upload, unzip, select the Theme in the admin themes tab.

### Aside Elements

The default sidebar contains three aside elements. 

If only two aside elements are to be included in the page, open the Default Template file (template.php) and change the active innovationgrid_grid_aside-*r.css file.

### Plugins
The following GetSimple plugins are used in the theme:
* [DynPages](http://get-simple.info/extend/plugin/dynpages/81/)
* [i18n](http://get-simple.info/extend/plugin/i18n/69/)
* [i18n Search](http://get-simple.info/extend/plugin/i18n-search/82/)
* [i18n Special Pages](http://get-simple.info/extend/plugin/i18n-special-pages/319/)

### Components
The following theme features require GetSimple components:
* BurgerMenu for navigation on devices with narrow screens
  * BurgerIcon
  * BurgerMenu
* Site Search
  * SearchQueryRenderer
  * SearchResultRenderer
* 'TagCloud' aside element  
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


