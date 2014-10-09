#文件与源码对应表
-----------------
##一、基础教程
###[CSS属性选择器](http://www.w3school.com.cn/css/css_syntax_attribute_selector.asp)  
1. **属性选择器**  
带有 title 属性的所有元素设置  
┖[csse_selector_attribute_att.html](http://192.168.215.116/w3c_php_test/CSS/Base/csse_selector_attribute_att.html)
2.  **属性和值选择器**  
title="W3School" 的所有元素设置样式：  
┣[csse_selector_attribute_value.html](http://192.168.215.116/w3c_php_test/CSS/Base/csse_selector_attribute_value.html)
┖source:(img) \i\w3school_logo_white.gif
3. **属性和值选择器 - 多个值**  
包含指定值的 title 属性的所有元素设置样式。适用于由空格分隔的属性值：  
┖[csse_selector_attribute_valuelist_space.html](http://192.168.215.116/w3c_php_test/CSS/Base/csse_selector_attribute_valuelist_space.html)  
带有包含指定值的 lang 属性的所有元素设置样式。适用于由连字符分隔的属性值：  
┖[csse_selector_attribute_valuelist_hyphen.html](http://192.168.215.116/w3c_php_test/CSS/Base/csse_selector_attribute_valuelist_hyphen.html)
4. **设置表单的样式**  
属性选择器在为不带有 class 或 id 的表单设置样式时特别有用：  
┖[csse_selector_attribute_form.html](http://192.168.215.116/w3c_php_test/CSS/Base/csse_selector_attribute_form.html)  
##二、CSS样式
###[CSS背景](http://www.w3school.com.cn/css/css_background.asp)
1. **背景色**  
可以使用 background-color 属性为元素设置背景色。这个属性接受任何合法的颜色值。  
┖[csse_background-color.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-color.html)
2. **背景图片**  
要把图像放入背景，需要使用 background-image 属性。background-image 属性的默认值是 none，表示背景上没有放置任何图像。  
┖[csse_background-image.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-image.html)  
大多数背景都应用到 body 元素，不过并不仅限于此。
下面例子为一个段落应用了一个背景，而不会对文档的其他部分应用背景：
┖[csse_background-image_2.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-image_2.html)  
如何重复背景图像  
本例演示如何重复背景图像。  
┖[csse_background-repeat.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-repeat.html)  
本例演示如何垂直地重复背景图像。  
┖[csse_background-repeat.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-repeat.html)  
本例演示如何水平地重复背景图像。  
┖[csse_background-repeatx.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-repeatx.html)  
本例演示如何仅显示一次背景图像。  
┖[csse_background-repeat_no-repeat.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-repeat_no-repeat.htmls)  
本例演示如何仅显示一次背景图像。  
┖[csse_background-repeat_no-repeat.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-repeat_no-repeat.htmls)
3. **背景定位**  
本例演示如何在页面上放置背景图像。  
┖[csse_background-position.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-position.html)  
本例演示如何在页面上放置背景图像。  
┖[csse_background-position_pixel.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-position_pixel.html)  
4. **背景关联**  
本例演示如何设置固定的背景图像。图像不会随着页面的其他部分滚动。  
┖[csse_background-attachment.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background-attachment.html)  
5. **所有背景属性在一个声明之中**  
本例演示如何使用简写属性来将所有背景属性设置在一个声明之中。  
┖[csse_background.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_background.html)  
###[CSS文本](http://www.w3school.com.cn/css/css_text.asp)
1. **缩进文本**  
本例演示将段落的第一行缩进1cm：  
┖[csse_text-indent.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_text-indent.html)  
2. **水平对齐**  
本例演示如何对齐文本：  
┖[csse_text-align.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_text-align.html)  
3. **字间隔**  
本例演示如何增加段落中单词间的距离。  
┖[csse_text_word-spacing.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_text_word-spacing.html)  
4. **字符转换**  
本例演示转换不同元素中的文本。  
┖[csse_text-transform.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_text-transform.html)  
5. **文本装饰**  
本例演示如何向文本添加修饰。  
┖[csse_text-decoration.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_text-decoration.html)  
6. **处理空白符**  
white-space: normal  
┖[csse_text-decoration.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_text-decoration.html)   
white-space: pre  
┖[csse_text_white-space_pre.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_text_white-space_pre.html)   
white-space: nowrap  
┖[csse_text_white-space.html](http://192.168.215.116/w3c_php_test/CSS/Style/csse_text_white-space.html)   
