# GetSimple I18N InnovationGrid

The files provided in this repository are intended to provide a quick and easy-to-install starting point for a responsive, multi-language Web-Site. The intention is that users can get a functional and easy to maintain web site up and running in a matter of minutes. 

The files are to be used with the [GetSimple CMS](http://get-simple.info) and include a new version of the default [Innovation theme](http://get-simple.info/extend/theme/innovation-theme/104/). The new theme uses CSS3 Grid techniques, hence the name, InnovationGrid, and allows more flexibility when designing for different screen withs.

Important features such as a language menu and search functions are integrated into the theme files.  
Code which integrates the [Front-End User Login Enhanced](http://get-simple.info/extend/plugin/front-end-user-login-enhanced/809/) plugin is also included. This plugin allows access to content to be restricted to registered users. Examples of such restricted content could be an appointment calender, upload page or a picture gallery.

## Example Web-Site

I use this package as the basis for [my own web-site](http://www.alan-amos.de) with only minor changes to the CSS and a number of additional features to meet my own requirements.

## Why use the GetSimple CMS?

There are a number of reasons that I became interested in using GetSimple:
* it is Open Source - so, if necessary I could update the code myself;
* it is free - with a good selection of free themes and plugins;
* it has an active communnity;
* a feature-rich set of plugins is available for creating multi-language sites; 
* it uses flat-file storage instead of a database, simplifying installation and potentially speeding up response times.

In addition, GetSimple provides editors with a very clean and easy-to-use interface.  This makes it easier for site owners to learn to add their own content, which is a cost-effective aid for small businesses seeking to improve their site ranking and win new custom.  

## Download Description

This download file contains template, style and component files required for the InnovationGrid theme as well as a number of page files that demonstrate and describe the site.
Users have to install the following before the Web-Site will function fully:
* a) the [GetSimple CMS](http://get-simple.info/download), 
* b) the plugins listed [below](#plugins), 
* c) the InnovationGrid theme itself and
* d) copy a small number of files containing the page and component information for the site.
In addition, a small number of configuration changes are required if user authentication and authorization is required. 

## Features

### Theme

The InnovationGrid theme is responsive and uses Grid and Flex CSS3 techniques. (This is instead of the Skeleton CSS used by the [Responsive Innovation](http://get-simple.info/extend/theme/responsive-innovation/615/) theme.)

#### Theme Layout

The theme has four different layouts according to the width of the browser window and the widest has a right-hand sidebar as in the default Innovation theme. 
Two layout - i.e. grid - files are provided, one for two aside elements in the sidebar and one for three. The grid file which is active is specified by commenting in/out the relevant `...2r.css` or `...3r.css` file in the default `template.php` template file.

#### Theme Menus

A 'burger menu' is active in smaller screens instead of the standard 'fixed' menu display in an aside element.

### Functions 

Many of the functions provided by the plugins, such as language-specific menus and search, are integrated into the theme files using components, which are stored in a `components.xml` file. These components then generate a number of page elements such as the search fields and the menus.

#### Custom Page Headers 

The i18n Custom Fields plugin is used to provide custom page Text Headers in the Header part of each page, allowing this text to be varied according to the page language. 

#### Tag Cloud

LAnguage-specific tag clouds provided, which are searched by the i18n Search Plugin along with page content.

#### Language-Specific Search

A search field is included in the page header element. This field uses the i18n Search plugin and both page content and page tags - as shown in the optional tag cloud - are searched. 

#### Breadcrumbs

A breadcrumb bar is included between the Page Header element and the main page section. 

#### User Registration, Authentication and Authorization

The theme contains code for the *Front-End User Login Enhanced* plugin, which provides user registration, authentication and authorization functions. This means that access to pages can be restricted to individual users or user groups.

Included with this theme are optional custom components which integrate the user autorization in the *aside* and *'burger'* menus, so that users are only shown links in the menus to pages which they are authorised to access. 

Code to show the *Front-End User Login Enhanced* plugin is included in the theme files but commented out. Instructions for activating this plugin together with its custom components are included below.

## Installation and Configuration

### Install the CMS

Install the [GetSimple CMS](http://get-simple.info/download).
Instructions are available on the [GetSimple Wiki](http://get-simple.info/wiki/quick_install) site.

(#plugins)
### Install the Plugins 

I recommend making life slightly easier by first installing and [activating](http://get-simple.info/wiki/how_to:plugin_manager) the GetSimple [PluginInstaller](http://get-simple.info/extend/plugin/gs-plugin-installer/955/) plugin instead of manually downloading and installing the plugins individually.

Then install and activate the following plugins:
* [DynPages](http://get-simple.info/extend/plugin/dynpages/81/)
* [i18n](http://get-simple.info/extend/plugin/i18n/69/)
* [i18n Custom Fields](http://get-simple.info/extend/plugin/i18n-custom-fields/100/)
* [i18n Search](http://get-simple.info/extend/plugin/i18n-search/82/)
* [i18n language menu](http://get-simple.info/extend/plugin/i18n-language-menu/366/)
If you want to provide user authentication and authorization, you will also need to install the [Front-End User Login Enhanced](http://get-simple.info/extend/plugin/front-end-user-login-enhanced/809/) plugin.

#### Additional Useful Plugins

I have found the following plugins to be useful and have included CSS style information for them in the theme:
* [Cookies](http://get-simple.info/extend/plugin/cookies-plugin/742/), which places a cookie acceptance message on your site.
* [GSMaintenanceMode](http://get-simple.info/extend/plugin/gsmaintenance/865/), which provides a convenient method of putting your site in "Maintenance Mode".

### Install the Theme

This theme is installed in the GetSimple `Theme` folder: 
* Copy the contents of the theme folder of this download to the *Theme* folder of your CMS installation.
* Overwrite the original `components.xml` file by copying the `data\other\components.xml` file provided in the download into your folder:
  * `Site_Installation_Folder\data\other\`
* Copy the page files provided in the `pages` folder of the download into the following folder of your installation, overwriting the original `index.xml` file:
  * `Site_Installation_Folder\data\pages\`
* Log into the *admin* section of the CMS using the user credentials you set when installing the CMS and select and activate the InnovationGrid theme in the admin *Theme* tab.
* Still in the admin section, select the *Pages* tab and then *Edit Navigation Structure* from the menu on the right and click in the *Save Navigation Structure* button.

You will find more information about Themes in the GetSimple [Themes documentation](http://get-simple.info/wiki/themes:installation).

### Review the Site

You should now have a web-site with two languages, the default being English and the second language German. 

Note that in the navigation menus you will see a "*User Pages*" page listed with three subpages. These pages are included to demonstrate the Front End User Login Extended plugin and come preconfigured with authorization settings for the plugin. At this stage of the installation procedure, they are all visible by default and can be deleted if user authentication and authorization is not required.

### Configuring Your Site

#### Languages

  * You can change the languages used on the site by following the instructions on the *Pages* tab in the site *Admin* section.
  * You can use the *Edit language menu* link in the sidebar menu of the *Pages* tab to update the texts used in language menu. 

#### Aside Elements

The default sidebar contains two aside elements - that is, elements that are only indirectly related to the page's main content. That is the Navigation Menu and the Tag Cloud. When viewed in a browser window of more than approximately 950 pixels wide, these elements will be shown in the sidebar to the right. 

##### Activating User Authentication and Authorization

If you want to include the user authentication and authorization provided by the Front-End User Login Enhanced plugin and have already installed and activated it as described above, open the *Theme* tab in the *Admin* Section and select *Edit Theme*:

 * Now  open the *Default Template* file (`template.php`) and change the active `innovationgrid_grid_aside-*r.css` file from `...aside-2r.css` to `...aside-3r.css` in lines 38 and 39.
  * In the same file, comment in the code in line 98 by removing the two slashes: `<?php //include('aside_feue_userarea.inc.php'); ?>`.
 * Save the file.

 You will now have a third 'User Area' block, which at this stage will be empty apart froom the title.  This block will be positioned in the sidebar if you are using a wide browser window, or just above the page footer, if you are using a smaller device.

 You will, however, still be using the default navigation components for the *Navigation* block, which is shown in wider browser windows and the *Burger-Menu*, which is shown with smaller windoe widths. These components do not take account of user authorization and show all pages. To activate the authorization and only show menu links to pages that the user is authorized to see you need to replace the default navigation components with the custom navigation ones provided with the theme.

**Note** that both the default and custom navigation components can be seen in the site *Admin* section, in the *Theme* tab, by clicking the *Edit components* link in the right hand menu. The default components are the *BurgerIcon*, *BurgerMenu* and *SidebarNav*, and the custom components are  *FEULE_MenuIcon*, *FEULE_MenuMobile* and *FEULE_MenuAside*, and *FEULE_UserArea*).

 Carry out the following steps in the *Admin* section, *Edit Theme* tab, :
  * In the `navigation.inc.php` file, change the active menu component by commenting out the line containing `get_i18n_component('sidebarnav');` and commenting in the line containg `get_i18n_component('feule_menuaside', $language');`. Save the file.
  * In the *Page Header* file (`header.inc.php`), activate the custom *Burger Menu* components by commenting out the lines containing:
    * `get_component('burgericon');` and 
    * `get_component('burgermenu');` 
  * and by commenting in the two lines containing:
    * `get_component('feule_menuicon');`
    * `get_i18n_component('feule_menumobile', $language);` 
  * Save the file.

#### Authorization Check

To be done ....