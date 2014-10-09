#文件与源码对应表
-----------------
##一、基础教程
###[PHP 语法](http://www.w3school.com.cn/php/php_syntax.asp)  
1. **基础 PHP 语法**  
我的第一张 PHP 页面  
┖[demo_php_syntax.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_syntax.php)
2. **注释**  
PHP 支持三种注释  
┖[demo_php_syntax_comments.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_syntax_comments.php)  
3. **PHP 大小写敏感**  
在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。  
┖[demo_php_syntax_case1.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_syntax_case1.php)  
**变量对大小写敏感。**  
在 PHP 中，所有变量都对大小写敏感。  
┖[demo_php_syntax_case2.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_syntax_case2.php)  
4. **PHP 大小写敏感**  
在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。**所有变量都对大小写敏感。**  
┖[demo_php_syntax_comments.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_syntax_case1.php)  
###[PHP变量](http://www.w3school.com.cn/php/php_variables.asp)
1. **类似代数**
请把变量视为存储数据的容器。  
┖[demo_php_var1.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_var1.php)
2. **创建 PHP 变量**
PHP 没有创建变量的命令。变量会在首次为其赋值时被创建：  
┖[demo_php_var2.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_var2.php)
3. **Local 和 Global 作用域**
函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。  
┖[demo_php_var_local.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_var_local.php)  
4. **PHP global 关键词**
global 关键词用于访问函数内的全局变量。  
要做到这一点，请在（函数内部）变量前面使用 global 关键词：    
┖[demo_php_var_global.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_var_global.php)  
PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。  
┖[demo_php_var_global2.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_var_global2.php)  
5. **PHP static 关键词**
通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。  
要完成这一点，请在您首次声明变量时使用 static 关键词    
┖[demo_php_var_static.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_var_static.php)  
###[PHP Echo / Print](http://www.w3school.com.cn/php/php_echo_print.asp)  
在 PHP 中，有两种基本的输出方法：echo 和 print。  
**_echo 和 print 之间的差异：_**  
&nbsp;&nbsp;&nbsp;&nbsp;echo - 能够输出一个以上的字符串  
&nbsp;&nbsp;&nbsp;&nbsp;print - 只能输出一个字符串，并始终返回 1  
提示：echo 比 print 稍快，因为它不返回任何值。  
1. **PHP echo 语句**  
echo 是一个语言结构，有无括号均可使用：echo 或 echo()。  
**echo显示字符串**  
下面的例子展示如何用 echo 命令来显示不同的字符串（同时请注意字符串中能包含 HTML 标记）：  
┖[demo_php_echo1.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_echo1.php)  
**echo显示变量**  
下面的例子展示如何用 echo 命令来显示字符串和变量：  
┖[demo_php_echo2.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_echo2.php)  
2. **PHP print 语句**  
print 也是语言结构，有无括号均可使用：print 或 print()。  
**print显示字符串**  
下面的例子展示如何用 print 命令来显示不同的字符串（同时请注意字符串中能包含 HTML 标记）：  
┖[demo_php_print.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_print.php)  
**print显示变量**  
下面的例子展示如何用 print 命令来显示字符串和变量：  
┖[demo_php_print2.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_print2.php)  
###[PHP 数据类型](http://www.w3school.com.cn/php/php_datatypes.asp)
字符串、整数、浮点数、逻辑、数组、对象、NULL。  
1. **PHP 字符串**  
字符串是字符序列，比如 "Hello world!"。字符串可以是引号内的任何文本。您可以使用单引号或双引号：  
┖[demo_php_datatypes_string.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_datatypes_string.php)  
2. **PHP 整数**  
整数是没有小数的数字。  
**整数规则：**  
&nbsp;&nbsp;&nbsp;&nbsp;*整数必须有至少一个数字（0-9）*  
&nbsp;&nbsp;&nbsp;&nbsp;*整数不能包含逗号或空格*  
&nbsp;&nbsp;&nbsp;&nbsp;*整数不能有小数点*  
&nbsp;&nbsp;&nbsp;&nbsp;*整数正负均可*  
&nbsp;&nbsp;&nbsp;&nbsp;*可以用三种格式规定整数：十进制、十六进制（前缀是 0x）或八进制（前缀是 0）*  
在下面的例子中，我们将测试不同的数字。PHP var_dump() 会返回变量的数据类型和值：  
┖[demo_php_datatypes_integer.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_datatypes_integer.php)  
3. **PHP 浮点数**  
浮点数是有小数点或指数形式的数字。  
在下面的例子中，我们将测试不同的数字。PHP var_dump() 会返回变量的数据类型和值：  
┖[demo_php_datatypes_float.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_datatypes_float.php)  
4. **PHP逻辑**  
逻辑是 true 或 false。逻辑常用于条件测试。  
5. **PHP数组**  
数组在一个变量中存储多个值。  
在下面的例子中，我们将测试不同的数组。PHP var_dump() 会返回变量的数据类型和值：  
┖[demo_php_datatypes_array.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_datatypes_array.php)  
6. **PHP 对象**  
对象是存储数据和有关如何处理数据的信息的数据类型。  
在 PHP 中，必须明确地声明对象。  
首先我们必须声明对象的类。对此，我们使用 class 关键词。类是包含属性和方法的结构。  
然后我们在对象类中定义数据类型，然后在该类的实例中使用此数据类型：  
┖[demo_php_datatypes_object.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_datatypes_object.php)  
7. **PHP NULL 值**  
特殊的 NULL 值表示变量无值。NULL 是数据类型 NULL 唯一可能的值。  
NULL 值标示变量是否为空。也用于区分空字符串与空值数据库。  
可以通过把值设置为 NULL，将变量清空：  
┖[demo_php_datatypes_null.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_datatypes_null.php)  
###[PHP字符串函数](http://www.w3school.com.cn/php/php_string.asp)
1. **PHP strlen() 函数**  
strlen() 函数返回字符串的长度，以字符计。  
下例返回字符串 "Hello world!" 的长度：  
┖[demo_php_datatypes_length.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_datatypes_length.php)  
2. **PHP strpos() 函数**  
strpos() 函数用于检索字符串内指定的字符或文本。  
如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回 FALSE。  
下例检索字符串 "Hello world!" 中的文本 "world"：  
┖[demo_php_datatypes_pos.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_datatypes_pos.php)  
###[PHP参量](http://www.w3school.com.cn/php/php_constants.asp)
**设置PHP常量**  
如需设置常量，请使用 define() 函数 - 它使用三个参数：  
* &nbsp;&nbsp;&nbsp;&nbsp;*首个参数定义常量的名称*  
* &nbsp;&nbsp;&nbsp;&nbsp;*第二个参数定义常量的值*  
* &nbsp;&nbsp;&nbsp;&nbsp;*可选的第三个参数规定常量名是否对大小写敏感。默认是 false。*  
下例创建了一个对大小写敏感的常量，值为 <font color="green">"Welcome to W3School.com.cn!"：</font>  
┖[demo_php_constant1.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_constant1.php)  
下例创建了一个对大小写不敏感的常量，值为 <font color="green">"Welcome to W3School.com.cn!"：</font>  
┖[demo_php_constant2.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_constant2.php)  
###[PHP运算符](http://www.w3school.com.cn/php/php_operators.asp)
1. **PHP算数运算符**

运算符  |  名称  |  例子  |  结果
:------ |:------|:------|:-----
    +    |加法    |$x + $y|$x与$y求和
    -     |减法    |$x - $y|$x与$y的差数
    *     |乘法   |$x * $y|$x与$y乘积
    /     |除法   | $x / $y|$x与$y商数
    %   |模数    |$x % $y|$x与$y余数
下例展示了使用不同算数运算符的不同结果：  
┖[demo_php_operator_arithmetic.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_operator_arithmetic.php)  
2.**PHP赋值运算符**  
PHP 赋值运算符用于向变量写值。  
PHP 中基础的赋值运算符是 "="。这意味着右侧赋值表达式会为左侧运算数设置值。  

赋值         |等同于         |描述         
:----------|:-----------|:----------
x = y         |x = y            |右侧表达式为左侧运算数设置值。
x += y      |x = x + y       |加
x -= y       |x = x - y       |减
x *= y       |x = x * y       |乘
x /= y        |x = x / y       |除
x %= y      |x = x % y      |模数
下例展示了使用不同赋值运算符的不同结果：  
┖[demo_php_operator_arithmetic.php](http://192.168.215.116/w3c_php_test/PHP/Base/demo_php_operator_arithmetic.php)  
3.**PHP字符串运算符**
4.**PHP递增/递减运算符**
5.**PHP比较运算符**
6.**PHP逻辑运算符**
7.**PHP数组运算符**




