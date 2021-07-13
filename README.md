# InnovationGrid-Theme

This theme is a reworking of the default Innovation theme for the [GetSimple CMS](http://get-simple.info).
The Theme is responsive and uses Grid and Flex CSS techniques instead of the skeleton CSS used by the [Responsive Innovation](http://get-simple.info/extend/theme/responsive-innovation/615/) theme.

The theme has four different layouts according to the width of the browser window and the widest has a right-hand sidebar as in the default Innovation theme. Two layout - i.e. grid - files are provided, one for two aside elements in the sidebar and one for three. The grid file which is active is specified by commenting in/out the relevant .css file in the default template.php template file.

Installation
This theme is installed in the GetSimple themes folder in the standard manner: upload, unzip, select the Theme in the admin themes tab.
The default sidebar contains three aside elements. 
If only two aside elements are to be included in the page, open the Default Template in the Theme Editor tab and change the active innovationgrid_grid_aside-*r.css file.