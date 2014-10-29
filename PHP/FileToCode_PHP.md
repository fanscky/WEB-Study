# 文件与源码对应表
------------------------------------------------------------------------

## 一、基础教程

------------------------------------------------------------------------

### [1.1. PHP 语法](http://www.w3cschool.cc/php/php-syntax.html)  

------------------------------------------------------------------------

####  1.1.1. 基础 PHP 语法

我的第一张 PHP 页面  
┖[demo_php_syntax.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_syntax.php)
  
####  1.1.2. 注释

PHP 支持三种注释  
┖[demo_php_syntax_comments.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_syntax_comments.php)

####  1.1.3. PHP 大小写敏感

在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。  
┖[demo_php_syntax_case1.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_syntax_case1.php)  

**变量对大小写敏感。**  

在 PHP 中，所有变量都对大小写敏感。  
┖[demo_php_syntax_case2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_syntax_case2.php)  
  
####  1.1.4. PHP 大小写敏感

在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。**所有变量都对大小写敏感。**  
┖[demo_php_syntax_comments.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_syntax_case1.php)  

<br>

------------------------------------------------------------------------

### [1.2. PHP变量](http://www.w3cschool.cc/php/php-variables.html)

------------------------------------------------------------------------

#### 1.2.1. 类似代数

请把变量视为存储数据的容器。  
┖[demo_php_var1.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_var1.php)

#### 1.2.2. 创建 PHP 变量

PHP 没有创建变量的命令。变量会在首次为其赋值时被创建：  
┖[demo_php_var2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_var2.php)

#### 1.2.3. Local 和 Global 作用域

函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。  
┖[demo_php_var_local.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_var_local.php)  

#### 1.2.4. PHP global 关键词

global 关键词用于访问函数内的全局变量。  

要做到这一点，请在（函数内部）变量前面使用 global 关键词：    
┖[demo_php_var_global.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_var_global.php)  

PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。  
┖[demo_php_var_global2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_var_global2.php)  

#### 1.2.5. PHP static 关键词

通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。  

要完成这一点，请在您首次声明变量时使用 static 关键词    
┖[demo_php_var_static.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_var_static.php)  

<br>

------------------------------------------------------------------------

### [1.3. PHP Echo / Print](http://www.w3cschool.cc/php/php-echo-print.html)  

------------------------------------------------------------------------

在 PHP 中，有两种基本的输出方法：**echo** 和 **print**。  

>**_echo 和 print 之间的差异：_**  

>&nbsp;&nbsp;&nbsp;&nbsp;echo - 能够输出一个以上的字符串  

>&nbsp;&nbsp;&nbsp;&nbsp;print - 只能输出一个字符串，并始终返回 1  

>提示：echo 比 print 稍快，因为它不返回任何值。

#### 1.3.1. PHP echo 语句

echo 是一个语言结构，有无括号均可使用：echo 或 echo()。  

**echo显示字符串**  

下面的例子展示如何用 echo 命令来显示不同的字符串（同时请注意字符串中能包含 HTML 标记）：  
┖[demo_php_echo1.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_echo1.php)  

**echo显示变量**  

下面的例子展示如何用 echo 命令来显示字符串和变量：  
┖[demo_php_echo2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_echo2.php)  

#### 1.3.2. PHP print 语句

print 也是语言结构，有无括号均可使用：print 或 print()。  

**print显示字符串**  

下面的例子展示如何用 print 命令来显示不同的字符串（同时请注意字符串中能包含 HTML 标记）：  
┖[demo_php_print.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_print.php)  

**print显示变量**  

下面的例子展示如何用 print 命令来显示字符串和变量：  
┖[demo_php_print2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_print2.php)  

<br>

------------------------------------------------------------------------

### [1.4. PHP 数据类型](http://www.w3cschool.cc/php/php-datatypes.html)

------------------------------------------------------------------------

字符串、整数、浮点数、逻辑、数组、对象、NULL。

#### 1.4.1. PHP 字符串

字符串是字符序列，比如 "Hello world!"。字符串可以是引号内的任何文本。您可以使用单引号或双引号：  
┖[demo_php_datatypes_string.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_datatypes_string.php)

#### 1.4.2. PHP 整数

整数是没有小数的数字。  

>**整数规则：**  
  
>&nbsp;&nbsp;&nbsp;&nbsp;*整数必须有至少一个数字（0-9）*  
  
>&nbsp;&nbsp;&nbsp;&nbsp;*整数不能包含逗号或空格*  
  
>&nbsp;&nbsp;&nbsp;&nbsp;*整数不能有小数点*  
  
>&nbsp;&nbsp;&nbsp;&nbsp;*整数正负均可*  
  
>&nbsp;&nbsp;&nbsp;&nbsp;*可以用三种格式规定整数：十进制、十六进制（前缀是 0x）或八进制（前缀是 0）*  

在下面的例子中，我们将测试不同的数字。PHP var_dump() 会返回变量的数据类型和值：  
┖[demo_php_datatypes_integer.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_datatypes_integer.php)

#### 1.4.3. PHP 浮点数

浮点数是有小数点或指数形式的数字。  

在下面的例子中，我们将测试不同的数字。PHP var_dump() 会返回变量的数据类型和值：  
┖[demo_php_datatypes_float.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_datatypes_float.php)

#### 1.4.4. PHP逻辑

逻辑是 true 或 false。逻辑常用于条件测试。

#### 1.4.5. PHP数组

数组在一个变量中存储多个值。  

在下面的例子中，我们将测试不同的数组。PHP var_dump() 会返回变量的数据类型和值：  
┖[demo_php_datatypes_array.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_datatypes_array.php)

#### 1.4.6. **PHP 对象**  

对象是存储数据和有关如何处理数据的信息的数据类型。  

在 PHP 中，必须明确地声明对象。  

首先我们必须声明对象的类。对此，我们使用 class 关键词。类是包含属性和方法的结构。  

然后我们在对象类中定义数据类型，然后在该类的实例中使用此数据类型：  
┖[demo_php_datatypes_object.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_datatypes_object.php)

#### 1.4.7. PHP NULL 值

特殊的 NULL 值表示变量无值。NULL 是数据类型 NULL 唯一可能的值。  

NULL 值标示变量是否为空。也用于区分空字符串与空值数据库。  

可以通过把值设置为 NULL，将变量清空：  
┖[demo_php_datatypes_null.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_datatypes_null.php)  
<br>

------------------------------------------------------------------------

### [1.5.PHP字符串函数](http://www.w3cschool.cc/php/php-string.html)

------------------------------------------------------------------------

#### 1.5.1. PHP strlen() 函数
strlen() 函数返回字符串的长度，以字符计。  

下例返回字符串 "Hello world!" 的长度：  
┖[demo_php_datatypes_length.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_datatypes_length.php)

#### 1.5.2. PHP strpos() 函数

strpos() 函数用于检索字符串内指定的字符或文本。  

如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回 FALSE。  

下例检索字符串 "Hello world!" 中的文本 "world"：  
┖[demo_php_datatypes_pos.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_datatypes_pos.php)  

<br>

------------------------------------------------------------------------

### [1.6. PHP参量](http://www.w3cschool.cc/php/php-constants.html)

------------------------------------------------------------------------

**设置PHP常量**  

如需设置常量，请使用 define() 函数 - 它使用三个参数：  
  
+ &nbsp;&nbsp;&nbsp;&nbsp;*首个参数定义常量的名称*  
  
+ &nbsp;&nbsp;&nbsp;&nbsp;*第二个参数定义常量的值*  
  
+ &nbsp;&nbsp;&nbsp;&nbsp;*可选的第三个参数规定常量名是否对大小写敏感。默认是 false。*  
  
下例创建了一个对大小写敏感的常量，值为 <font color="green">"Welcome to W3School.com.cn!"：</font>  
┖[demo_php_constant1.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_constant1.php)  
  
下例创建了一个对大小写不敏感的常量，值为 <font color="green">"Welcome to W3School.com.cn!"：</font>  
┖[demo_php_constant2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_constant2.php)  

<br>

------------------------------------------------------------------------

### [1.7. PHP运算符](http://www.w3cschool.cc/php/php-operators.html)

------------------------------------------------------------------------

#### 1.7.1. PHP算数运算符

|运算符  |  名称  |  例子   |  结果       |
|:------ |:-------|:--------|:------------|
|\+      |加法    | $x + $y | $x与$y求和  |
|\-      |减法    | $x - $y | $x与$y的差数|
|\*      |乘法    | $x * $y | $x与$y乘积  |
|/       |除法    | $x / $y | $x与$y商数  |
|%       |模数    | $x % $y | $x与$y余数  |
|-       |取反    | -$x     | $x取反      |

下例展示了使用不同算数运算符的不同结果：  
┖[demo_php_operator_arithmetic.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_arithmetic.php)

#### 1.7.2. PHP赋值运算符

PHP 赋值运算符用于向变量写值。  

PHP 中基础的赋值运算符是 "="。这意味着右侧赋值表达式会为左侧运算数设置值。  

| 赋值   | 等同于    | 描述                          |
|:-------|:----------|:------------------------------|
| x = y  | x = y     | 右侧表达式为左侧运算数设置值。|
| x += y | x = x + y | 加                            |
| x -= y | x = x - y | 减                            |
| x *= y | x = x * y | 乘                            |
| x /= y | x = x / y | 除                            |
| x %= y | x = x % y | 模数                          |

下例展示了使用不同赋值运算符的不同结果：  
┖[demo_php_operator_assignment.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_assignment.php)

#### 1.7.3. PHP字符串运算符

| 运算符 | 名称     | 例子                               | 结果                       |
|:-------|:---------|:-----------------------------------|:---------------------------|
| .      | 串接     | $txt1="Hello" $txt2=$txt1."world!" | 现在$txt2包含“Hello World” |
| .=     | 串接赋值 | $txt1="Hello" $txt1 .="world!"     | 现在$txt1包含“Hello World” |

下例展示了使用字符串运算符的结果：  
┖[demo_php_operator_string.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_string.php)

#### 1.7.4. PHP递增/递减运算符

| 运算符 |名称    | 描述                   |
| :------|:-------|:-----------------------|
| ++$x   | 前递增 | $x加一递增，然后返回$x |
| $x++   | 后递增 | 返回$x,然后$x加一递增  |
| --$x   | 前递减 | $x减一递减，然后返回$x |
| $x--   | 后递减 | 返回$x，然后$x减一递减 |

下例展示了使用不同递增/递减运算符的不同结果：  
┖[demo_php_operator_increment.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_increment.php)

#### 1.7.5. PHP比较运算符

PHP 比较运算符用于比较两个值（数字或字符串）：

| 运算符 | 名称               |例子       | 结果                                            |
|:-------|:-------------------|:----------|:------------------------------------------------|
| ==     | 等于               | $x == $y  | 如果 $x 等于 $y，则返回true                     |
| ===    | 全等于（完全相同） | $x === $y | 如果$x等于$y,且它们类型相同，则返回ture         |
| !=     | 不等于             | $x != $y  | 如果 $x 不等于 $y，则返回true                   |
| <>     | 不等于             | $x <> $y  | 如果$x 不等于 $y，则返回true                    |
| !==    | 不全等（完全不同） | $x !== $y | 如果 $x 不等于 $y，且他们类型不相同，则返回true |
| >      | 大于               | $x > $y   | 如果 $x 大于 $y，则返回true                     |
| <      | 小于               | $x < $y   | 如果 $x 小于 $y，则返回true                     |
| >=     | 大于或等于         | $x >= $y  | 如果 $x 大于或者等于 $y，则返回true             |
| <=     | 小于或等于         | $x <= $y  | 如果 $x 小于或者等于 $y，则返回true             |

下例展示了使用某些比较运算符的不同结果：  
┖[demo_php_operator_comparison.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_comparison.php)

#### 1.7.6. PHP逻辑运算符

| 运算符   |名称  | 例子           | 结果                                         |
|:---------|:-----|:---------------|:---------------------------------------------|
| and      | 与   | $x and $y      | 如果 $x 和 $y 都为true，则返回true           |
| or       | 或   | $x or $y       | 如果 $x 和 $y 至少有一个为true，则返回true   |
| xor      | 异或 | $x xor $y      | 如果 $x 和 $y 有且仅有一个为true，则返回true |
| &&       | 与   | $x && $y       | 如果 $x 和 $y 都为true，则返回true           |
| "双竖线" | 或   | $x "双竖线" $y | 如果 $x 和 $y 至少有一个为true，则返回true   |
| !        | 非   | !$x            | 如果 $x 不为 true，则返回true                |

#### 1.7.7. PHP数组运算符

| 运算符 | 名称   | 例子      | 结果                                                            |
|:-------|:-------|:----------|:----------------------------------------------------------------|
| +      | 联合   | $x + $y   | $x 和 $y 的联合（但不覆盖重复的键）                             |
| ==     | 相等   | $x == $y  | 如果 $x 和 $y 拥有相同的键/值对，则返回true                     |
| ===    | 全等   | $x === $y | 如果 $x 和 $y 拥有相同的键/值对，且顺序相同类型相同，则返回true |
| !=     | 不相等 | $x != $y  | 如果 $x 不等于 $y，则返回true                                   |
| <>     | 不相等 | $x <> $y  | 如果 $x 不等于 $y,则返回true                                    |
| !==    | 不全等 | $x !== $y | 如果 $x 与 $y 完全不同，则返回true                              |

下例展示了使用不同数组运算符的不同结果：  
┖[demo_php_operator_array.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_array.php)  

------------------------------------------------------------------------

### [1.8. PHP If...Else](http://www.w3cschool.cc/php/php-if-else.html)

------------------------------------------------------------------------

条件语用于基于不同条件执行不同的动作

#### 1.8.1. PHP - if语句

if 语句用于**在指定条件为 true 时**执行代码。  

**语法**

    if(条件) {
        当条件为 true 时执行的代码；
    }

下面将输出"Have a good day!"，如果当前时间（HOUR）小于20：  
┖[demo_php_if.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_if.php)  

#### 1.8.2. PHP - if...else

请使用 if....else 语句**在条件为 true 时执行代码，在条件为 false 时执行另一段代码。**

**语法**

    if (条件) {
        条件为 true 时执行的代码；
    } else {
        条件为 false 时执行的代码；
    }

下例将输出 "Have a good day!"，如果当前时间 (HOUR) 小于 20，否则输出 "Have a good night!"：  
┖[demo_php_if_else.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_if_else.php)  

#### 1.8.3. PHP - if...elseif...else

请使用 if....elseif...else 语句来选择若干代码块之一来执行。

**语法**

    if (条件) {
        条件为 true 时执行的代码；
    } elseif (condition) {
        条件为 true 时执行的代码；
    } else {
        条件为 false 时执行的代码；
    }

下例将输出 "Have a good morning!"，如果当前时间 (HOUR) 小于 10，如果当前时间小于 20，则输出 "Have a good day!"。否则将输出 "Have a good night!"：  
┖[demo_php_if_elseif.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_if_elseif.php)

------------------------------------------------------------------------

### [1.9. PHP Switch](http://www.w3cschool.cc/php/php-switch.html)

------------------------------------------------------------------------

switch 语句用于基于不同条件执行不同动作。

#### 1.9.1 Switch 语句
如果您希望有选择地执行若干代码块之一，请使用 Switch 语句。使用 Switch 语句可以避免冗长的 if..elseif..else 代码块。

**工作原理**
> 1. 对表达式（通常是变量）进行一次计算；

> 2. 把表达式的值与结构中 case 的值进行比较；

> 3. 如果存在匹配，则执行与 case 关联的代码；

> 4. 代码执行后，**break语句**阻止代码跳入下一个 case 中继续执行；

> 5. 如果没有 case 为真，则使用default语句。

**实例**  
┖[demo_php_switch.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_switch.php)

------------------------------------------------------------------------

### [1.10. PHP While 循环](http://www.w3cschool.cc/php/php-looping.html)

------------------------------------------------------------------------

在 PHP 中，我们有以下循环语句：

+ while - 只要制定条件为真，则循环代码块；

+ do...while - 先执行一次代码块，然后只要制定条件为真则重复循环

+ for - 循环代码块制定次数

+ foreach - 遍历数组中的每个元素并循环代码块

#### 1.10.1. PHP while循环

只要指定的条件为真，while循环就会执行代码块。

**语句**

    while (条件为真) {
        要执行的代码；
    }

下例首先把变量 $x 设置为 1（$x=1）。然后执行 while 循环，只要 $x 小于或等于 5。循环每运行一次，$x 将递增 1：  
┖[demo_php_loop_while.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_loop_while.php)

#### 1.10.2 PHP do...while循环

do...while 循环首先会执行一次代码块，然后检查条件，如果指定条件为真，则重复循环。

**语法**

    do {
      要执行的代码;
    } while (条件为真);

**实例1**

下面的例子首先把变量 $x 设置为 1（$x=1）。然后，do while 循环输出一段字符串，然后对变量 $x 递增 1。随后对条件进行检查（$x 是否小于或等于 5）。只要 $x 小于或等于 5，循环将会继续运行：  ┖[demo_php_loop_do_while.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_loop_do_while.php)

_请注意，do while 循环只在执行循环内的语句之后才对条件进行测试。这意味着 do while 循环至少会执行一次语句，即使条件测试在第一次就失败了。_

**实例2**

下面的例子把 $x 设置为 6，然后运行循环，随后对条件进行检查：
┖[demo_php_loop_do_while2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_loop_do_while2.php)

------------------------------------------------------------------------

### [1.11. PHP for 循环](http://www.w3cschool.cc/php/php-looping-for.html)

------------------------------------------------------------------------

PHP for 循环执行代码块指定的次数。

#### 1.11.1. PHP for 循环

 如果您已经提前确定脚本运行的次数，可以使用 for 循环。

**语法:**

    for (init counter; test counter; increment counter) {
      code to be executed;
    }

_参数:_

+ init counter: 初始化循环计数器的值

+ test counter:评估每个循环迭代。如果值为TRUE，继续循环。如果它的值为FALSE，循环结束。

+ increment counter:增加循环计数器的值

**实例：**  
┖[demo_php_loop_for.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_loop_for.php)

#### 1.11.1. PHP foreach 循环

foreach 循环只适用于数组，并用于遍历数组中的每个键/值对。

**语法:**

    foreach ($array as $value) {
      code to be executed;
    }

每进行一次循环迭代，当前数组元素的值就会被赋值给 $value 变量，并且数组指针会逐一地移动，直到到达最后一个数组元素。
下面的例子演示的循环将输出给定数组（$colors）的值：

**实例：**  
┖[demo_php_loop_foreach.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_loop_foreach.php)

------------------------------------------------------------------------

### [1.12. PHP函数](http://www.w3cschool.cc/php/php-functions.html)

------------------------------------------------------------------------

<font color="red">**PHP 的真正力量来自它的函数：它拥有超过 1000 个内建的函数。**</font>

#### 1.12.1. PHP 用户定义函数

+ 除了内建的 PHP 函数，我们可以创建我们自己的函数。

+ 函数是可以在程序中重复使用的语句块。

+ 页面加载时函数不会立即执行。

+ 函数只有在被调用时才会执行。

#### 1.12.2 在 PHP 创建用户定义函数

用户定义的函数声明以关键字 “function” 开头：

**语法**：

    function functionName() {
      被执行的代码;
    }
 
_<font color="green">注释：函数名能够以字母或下划线开头（而非数字）。</font>_

_<font color="green">注释：函数名对大小写不敏感。</font>_

**<font color="blue">提示:</font>** 函数名应该能够反映函数所执行的任务

**实例**

在下面的例子中，我们创建名为 "writeMsg()" 的函数。打开的花括号（{）指示函数代码的开始，而关闭的花括号（}）指示函数的结束。此函数输出 "Hello world!"。如需调用该函数，只要使用函数名即可：  
┖[demo_php_function1.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_function1.php)

#### 1.12.3 PHP 函数参数

+ 可以通过参数向函数传递信息。参数类似变量。

+ 参数被定义在函数名之后，括号内部。您可以添加任意多参数，只要用逗号隔开即可。

**实例1：**

下面的例子中的函数有一个参数（$fname）。当调用 familyName() 函数时，我们同时要传递一个名字（例如 Bill），这样会输出不同的名字，但是姓氏相同：  
┖[demo_php_function2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_function2.php)

**实例2：**

下面的例子中的函数有两个参数（$fname 和 $year）：  
┖[demo_php_function3.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_function3.php)

#### 1.12.4 PHP 默认参数值

**实例：**

下面的例子展示了如何使用默认参数。如果我们调用没有参数的 setHeight() 函数，它的参数会取默认值：  
┖[demo_php_function4.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_function4.php)

#### 1.12.5 PHP 函数 - 返回值

如需使函数返回值，请使用 return 语句：

**实例：**  
┖[demo_php_function5.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_function5.php)

------------------------------------------------------------------------

### [1.13 PHP 数组](http://www.w3cschool.cc/php/php-arrays.html)

------------------------------------------------------------------------

**数组能够在单独的变量名中存储一个或多个值**

**实例**

数组在单个变量中存储多个值：  
┖[demo_php_array_num.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_num.php)

#### 1.13.1. 什么是数组？

数组是特殊的变量，它可以同时保存一个以上的值。

如果您有一个项目列表（例如汽车品牌列表），在单个变量中存储这些品牌名称是这样的：

    $cars1="Volvo";
    $cars2="BMW";
    $cars3="SAAB";

不过，假如您希望对变量进行遍历并找出特定的那个值？或者如果您需要存储 300 个汽车品牌，而不是 3 个呢？

解决方法是创建数组！

数组能够在单一变量名中存储许多值，并且您能够通过引用下标号来访问某个值。

#### 1.13.2 在 PHP 中创建数组

在 PHP 中，array()函数用于创建数组：

    array();

在PHP中，有三种数组类型：

+ **索引数组** - 带有数字索引的数组

+ **关联数组** - 带有指定键的数组

+ **多维数组** - 包含一个或多个数组的数组

#### 1.13.3. PHP 索引数组

有两种创建索引数组的方法：

索引是自动分配的（索引从0开始）：

    $cars = array("Volvo", "BMW", "SAAB");

或者也可以手动分配索引：

    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "SAAB";

下面的例子创建名为 $cars 的索引数组，为其分配三个元素，然后输出包含数组值的一段文本：  
┖[demo_php_array_num.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_num.php)

#### 1.13.4. 获得数组的长度 - count() 函数

count() 函数用于返回数组的长度（元素数）：

**实例：**  
┖[demo_php_array_length.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_length.php)

#### 1.13.5. 遍历索引数组

如需遍历并输出索引数组的所有制，您可以使用 for 循环，就像这样：
┖[demo_php_array_num_loop.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_num_loop.php)

#### 1.13.6. PHP 关联数组

关联数组是使用您分配给数组的指定键的数组。

有两种创建关联数组的方法：

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

或者：

    $age['Peter']="35";
    $age['Ben']="37";
    $age['Joe']="43";

随后可以在脚本中使用指定键：

**实例：**  
┖[demo_php_array_assoc.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_assoc.php)

#### 1.13.7. 遍历关联数组

如需遍历并输出关联数组的所有值，您可以使用 foreach 循环，就像这样：

**实例：**  
┖[demo_php_array_assoc_loop.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_assoc_loop.php)

------------------------------------------------------------------------

### [1.14 数组排序](http://www.w3cschool.cc/php/php-arrays-sort.html)

------------------------------------------------------------------------

**数组中的元素能够以字母或数字顺序进行升序或降序排序。**

#### 1.14.1. PHP - 数组的排序函数

在本节中，我们将学习如下 PHP 数组排序函数：

+ sort() - 以升序对数组排序

+ rsort() - 以降序对数组排序

+ asort() - 根据值，以升序对关联数组进行排序

+ ksort() - 根据键，以升序对关联数组进行排序

+ arsort() - 根据值，以降序对关联数组进行排序

+ krsort() - 根据键，以降序对关联数组进行排序

#### 1.14.2. 对数组进行升序排序 - sort()

下面的例子按照字母升序对数组 $cars 中的元素进行排序：  
┖[demo_php_array_sort_alpha.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_sort_alpha.php)

下面的例子按照数字升序对数组 $numbers 中的元素进行排序：  
┖[demo_php_array_sort_num.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_sort_num.php)

#### 1.14.3. 对数组进行降序排序 - rsort()

下面的例子按照字母降序对数组 $cars 中的元素进行排序：  
┖[demo_php_array_rsort_alpha.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_rsort_alpha.php)

下面的例子按照数字降序对数组 $numbers 中的元素进行排序：  
┖[demo_php_array_rsort_num.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_rsort_num.php)

#### 1.14.4. 根据值对数组进行升序排序 - asort()

下面的例子根据值对关联数组进行升序排序：  
┖[demo_php_array_asort.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_asort.php)

#### 1.14.5. 根据键对数组进行升序排序 - ksort()

下面的例子根据键对关联数组进行升序排序：  
┖[demo_php_array_ksort.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_ksort.php)

#### 1.14.6. 根据值对数组进行降序排序 - arsort()

下面的例子根据值对关联数组进行降序排序：  
┖[demo_php_array_arsort.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_arsort.php)

#### 1.14.7. 根据键对数组进行降序排序 - krsort()

下面的例子根据键对关联数组进行降序排序：  
┖[demo_php_array_krsort.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_krsort.php)

------------------------------------------------------------------------

### [1.15 PHP 全局变量 - 超全局变量](http://www.w3cschool.cc/php/php-superglobals.html)

------------------------------------------------------------------------

**超全局变量在 PHP 4.1.0 中引入，是在全部作用域中始终可用的内置变量。**

#### 1.15.1. PHP 全局变量 - 超全局变量

PHP 中许多预定义变量都是“超全局的”，这意味着它们在一个脚本的全部作用域中都可用。在函数或方法中无需执行 global $variable;就可以访问他们。

这些超全局变量是：

+ $GLOBALS

+ $_SERVER

+ $_REQUEST

+ $_POST

+ $_GET

+ $_FILES

+ $_ENV

+ $_COOKIE

+ $_SESSION

本节会介绍一些超全局变量，并会在稍后的章节讲解其他的超全局变量。

#### 1.15.2. $GLOBALS -- 引用全局作用域中可用 的全部变量

$GLOBALS 这种全局变量用于在PHP脚本中的任意位置访问全局变量（从函数或方法中均可）。

PHP 在名为 $GLOBALS[index] 的数组中存储了所有全局变量。变量的名字就是数组的键。

下面的例子展示了如何使用超级全局变量 $GLOBALS:

**实例**  
┖[demo_php_global_global.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_global_global.php)

#### 1.15.3. PHP $_SERVER

$_SERVER 这种超全局变量保存关于包头、路径和脚本位置的信息。

下面的例子展示了如何使用 $_SERVER中的某些元素：  
┖[demo_php_global_server.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_global_server.php)

#### 1.15.4. PHP $_REQUEST

PHP $_REQUEST 用于收集 HTML 表单提交的数据。

下面的例子展示了一个包含输入字段及提交按钮的表单。当用户通过点击提交按钮来提交表单数据时, 表单数据将发送到 <form> 标签的 action 属性中指定的脚本文件。在这个例子中，我们指定文件本身来处理表单数据。如果您需要使用其他的 PHP 文件来处理表单数据，请修改为您选择的文件名即可。然后，我们可以使用超级全局变量 $_REQUEST 来收集 input 字段的值：

**实例：**  
┖[demo_php_global_request.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_global_request.php)

#### 1.15.5. PHP $_POST

PHP $_POST 广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。

$_POST 也常用于传递变量。

下面的例子展示了一个包含输入字段和提交按钮的表单。当用户点击提交按钮来提交数据后，表单数据会发送到 <form> 标签的 action 属性中指定的文件。在本例中，我们指定文件本身来处理表单数据。如果您希望使用另一个 PHP 页面来处理表单数据，请用更改为您选择的文件名。然后，我们可以使用超全局变量 $_POST 来收集输入字段的值：

**实例：**  
┖[demo_php_global_post.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_global_post.php)

#### 1.15.6. PHP $_GET

PHP $_GET 也可用于收集提交 HTML 表单 (method="get") 之后的表单数据。

$_GET 也可以收集 URL 中的发送的数据。

假设我们有一张页面含有带参数的超链接：  
┖[demo_php_global_get.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_global_get.php)

------------------------------------------------------------------------

##二、PHP 表单处理

------------------------------------------------------------------------

###[2.1. PHP 表单处理](http://www.w3cschool.cc/php/php-forms.html)

------------------------------------------------------------------------

PHP 超全局变量 $`_`GET 和 $`_`POST 用于收集表单数据（form-data)。

####2.1.1. PHP - 一个简单的HTML表单

**POST实例：**

下面的例子显示了一个简单的 HTML 表单，它包含两个输入字段和一个提交按钮：  
┖[demo_php_form_post.php](http://192.168.215.116/w3c_web_test/PHP/Form/demo_php_form_post.php)

当用户填写此表单并点击提交按钮后，表单数据会发送到名为 "welcome.php" 的 PHP 文件供处理。表单数据是通过 HTTP POST 方法发送的。

**GET实例：**

使用 HTTP GET 方法也能得到相同的结果：
┖[demo_php_form_get.php](http://192.168.215.116/w3c_web_test/PHP/Form/demo_php_form_get.php)

上面的代码很简单。不过，最重要的内容被漏掉了。您需要对表单数据进行验证，以防止脚本出现漏洞。

<font color="red">**注意：**</font>在处理 PHP 表单时请关注安全！

本页未包含任何表单验证程序，它只向我们展示如何发送并接收表单数据。

#### 2.1.2. GET vs. POST

GET 和 POST 都创建数组（例如，array( key => value, key2 => value2, key3 => value3, ...)）。此数组包含键/值对，其中的键是表单控件的名称，而值是来自用户的输入数据。

GET 和 POST 被视作 $_GET 和 $_POST。它们是超全局变量，这意味着对它们的访问无需考虑作用域 - 无需任何特殊代码，您能够从任何函数、类或文件访问它们。

$_GET 是通过 URL 参数传递到当前脚本的变量数组。

$_POST 是通过 HTTP POST 传递到当前脚本的变量数组。

#### 2.1.3. 何时使用GET？

通过 GET 方法从表单发送的信息 **对任何人都是可见的**（所有变量名和值都显示在 URL 中）。GET 对所发送信息的数量也有限制。限制在大于 2000 个字符。

<font color="blue">不过，由于变量显示在 URL 中，把页面添加到书签中也更为方便。</font>

GET 可用于发送非敏感的数据。

**注释：**绝不能使用 GET 来发送密码或其他敏感信息！

#### 2.1.4. 何时使用POST？

通过 POST 方法从表单发送的信息对 **其他人是不可见的**（所有名称/值会被嵌入 HTTP 请求的主体中），并且对所发送信息的数量也 **无限制。**

此外 POST 支持高阶功能，比如在向服务器上传文件时进行 multi-part 二进制输入。

不过，由于变量未显示在 URL 中，也就无法将页面添加到书签。

**提示：**开发者偏爱 POST 来发送表单数据。

------------------------------------------------------------------------

### [2.2. 表单验证](http://www.w3cschool.cc/php/php-form-validation.html)

------------------------------------------------------------------------

**本节和下一节讲解如何使用 PHP 来验证表单数据。**

#### 2.2.1. PHP 表单验证

<font color="orange">提示：</font>在处理 PHP 表单时请重视安全性！

这些页面将展示如何安全地处理 PHP 表单。对 HTML 表单数据进行适当的验证对于防范黑客和垃圾邮件很重要！

首先，这个表单的纯 HTML 代码：

**文本字段**

name、email 和 website 属于文本输入元素，comment 字段是文本框。HTML 代码是这样的：


    Name: <input type="text" name="name">
    E-mail: <input type="text" name="email">
    Website: <input type="text" name="website">
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>

**单选按键**

gender 字段是单选按钮，HTML 代码是这样的：

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male

**表单元素**

表单的 HTML 代码是这样的：

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

当提交此表单时，通过 method="post" 发送表单数据。

**什么是 $\_SERVER["PHP\_SELF"]变量**

$\_SERVER["PHP\_SELF"] 是一种超全局变量，它返回当前执行脚本的文件名。

因此，$\_SERVER["PHP\_SELF"] 将表单数据发送到页面本身，而不是跳转到另一张页面。这样，用户就能够在表单页面获得错误提示信息。

**什么是 htmlspecialchars() 函数**

htmlspecialchars()函数把特殊字符转换为HTML实体。这意味着 < 和 > 之类的 HTML 字符会被替换为 `&lt;` 和 `&gt;` 。这样可防止攻击者通过在表单中注入 HTML 或 JavaScript 代码（跨站点脚本攻击）对代码进行利用。

**通过 PHP 验证表单数据**

我们要做的第一件事是通过 PHP 的 htmlspecialchars() 函数传递所有变量。

在我们使用 htmlspecialchars() 函数后，如果用户试图在文本字段中提交以下内容：

    <script>location.href('http://www.hacked.com')</script>

代码不会执行，因为会被保存为转义代码，就像这样：

    &lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt; 

现在这条代码显示在页面上或 e-mail 中是安全的。

在用户提交该表单时，我们还要做两件事：

+ （通过 PHP trim() 函数）去除用户输入数据中不必要的字符（多余的空格、制表符、换行）

+ （通过 PHP stripslashes() 函数）删除用户输入数据中的反斜杠（\）

接下来我们创建一个检查函数（相比一遍遍地写代码，这样效率更好）。

我们把函数命名为 test_input()。

现在，我们能够通过 test_input() 函数检查每个 $_POST 变量，脚本是这样的：

    <?php
    // 定义变量并设置为空值
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $website = test_input($_POST["website"]);
      $comment = test_input($_POST["comment"]);
      $gender = test_input($_POST["gender"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

**实例**
┖[demo_php_form_validation_escapechar.php](http://192.168.215.116/w3c_web_test/PHP/Form/demo_php_form_validation_escapechar.php)

请注意在脚本开头，我们检查表单是否使用 $\_SERVER["REQUEST\_METHOD"] 进行提交。如果 REQUEST_METHOD 是 POST，那么表单已被提交 - 并且应该对其进行验证。如果未提交，则跳过验证并显示一个空白表单。

不过，在上面的例子中，所有输入字段都是可选的。即使用户未输入任何数据，脚本也能正常工作。

下一步是制作必填输入字段，并创建需要时使用的错误消息。

------------------------------------------------------------------------

### [2.3. 表单 - 必需字段](http://www.w3cschool.cc/php/php-form-required.html)

------------------------------------------------------------------------

**本节展示如何制作必填输入字段，并创建需要时所用的错误信息。**

**PHP - 必需字段**

在上一章节我们已经介绍了表的验证规则，我们可以看到"Name", "E-mail", 和 "Gender" 字段是必须的，各字段不能为空。

| 字段   | 验证规则                                                |
|:-------|:--------------------------------------------------------|
|Name    | 必需。 + 只能包含字母和空格                             |
|E-mail  | 必需。 + 必需包含一个有效的电子邮件地址（包含"@"和"."） |
|Website | 可选。 如果存在，它必须包含一个有效的URL                |
|Comment | 可选。多行字段（文本域）。                              |
|Gender  | 必需。 Must select one                                  |

如果在前面的章节中，所有输入字段都是可选的。

在以下代码中我们加入了一些新的变量: $nameErr, $emailErr, $genderErr, 和 $websiteErr.。这些错误变量将显示在必须字段上。 我们还为每个$_POST变量增加了一个if else语句。 这些语句将检查 $_POST 变量是 否为空（使用php的 empty() 函数）。如果为空，将显示对应的错误信息。 如果不为空，数据将传递给test_input() 函数：

    <?php
    // 定义变量并默认设为空值
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

      if (empty($_POST["name"]))
        {$nameErr = "Name is required";}
      else
        {$name = test_input($_POST["name"]);}

      if (empty($_POST["email"]))
        {$emailErr = "Email is required";}
      else
        {$email = test_input($_POST["email"]);}

      if (empty($_POST["website"]))
        {$website = "";}
      else
        {$website = test_input($_POST["website"]);}

      if (empty($_POST["comment"]))
        {$comment = "";}
      else
        {$comment = test_input($_POST["comment"]);}

      if (empty($_POST["gender"]))
        {$genderErr = "Gender is required";}
      else
        {$gender = test_input($_POST["gender"]);}
    }
    ?>

**PHP - 显示错误信息**

在以下的HTML实例表单中，我们为每个字段中添加了一些脚本， 各个脚本会在信息输入错误时显示错误信息。(如果用户未填写信息就提交表单则会输出错误信息):
┖[demo_form_validation_required.php](http://192.168.215.116/w3c_web_test/PHP/Form/demo_form_validation_required.php)

------------------------------------------------------------------------

### [2.4. PHP表单 - 验证邮件和URL](http://www.w3cschool.cc/php/php-form-url-email.html)

------------------------------------------------------------------------

#### 2.4.1. PHP - 验证名称

以下代码将通过简单的方式来检测 name 字段是否包含字母和空格，如果 name 字段值不合法，将输出错误信息：

    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
      {
      $nameErr = "只允许字母及空格"; 
      }

    preg_match — 进行正则表达式匹配。
    
    语法：
    int preg_match ( string $pattern , string $subject [, array $matches [, int $flags ]] )
    
    在 subject 字符串中搜索与 pattern 给出的正则表达式相匹配的内容。如果提供了 matches ，则其会被搜索的结果所填充。$matches[0] 将包含与整个模式匹配的文本，$matches[1] 将包含与第一个捕获的括号中的子模式所匹配的文本，以此类推。

#### 2.4.2. PHP - 验证邮件

以下代码将通过简单的方式来检测 e-mail 地址是否合法。如果 e-mail 地址不合法，将输出错误信息：

    $email = test_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
      {
      $emailErr = "非法邮件地址"; 
      }

#### 2.4.3. PHP - 验证URL

以下代码将检测URL地址是否合法 (以下正则表达式运行URL中含有破折号:"-")， 如果 URL 地址不合法，将输出错误信息：

    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
      {
      $websiteErr = "不合法的 URL"; 
      }

#### 2.4.4. PHP - 验证 Name, E-mail, 和 URL
┖[demo_form_validation_special.php](http://192.168.215.116/w3c_web_test/PHP/Form/demo_form_validation_special.php)

------------------------------------------------------------------------

### [2.5. PHP完整表单实例](http://www.w3cschool.cc/php/php-form-complete.html)

------------------------------------------------------------------------

本章节将介绍如何让用户在点击“提交（submit）”按钮提交数据前保证所有字段正确输入。

#### 2.5.1. PHP - 在表单中确保输入值

在用户点击提交按钮后，为确保字段值是否输入正确，我们在HTML的input元素中插添加PHP脚本， 各字段名为: name, email, 和 website。 在评论的 textarea 字段中，我们将脚本放于 <textarea> 和 </textarea> 标签之间。 PHP脚本输出值为： $name, $email, $website, 和 $comment 变量。 

然后，我们同样需要检查被选中的单选按钮， 对于这一点，我们 必须设置好checked属性(不是radio按钮的 value 属性) :

    Name: <input type="text" name="name" value="<?php echo $name;?>">
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    Gender:
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male

#### 2.5.1. PHP - 完整表单实例
┖[demo_form_validation_complete.php](http://192.168.215.116/w3c_web_test/PHP/Form/demo_form_validation_complete.php)

------------------------------------------------------------------------

### [2.4. PHP表单 - $_GET变量](http://www.w3cschool.cc/php/php-get.html)

------------------------------------------------------------------------

在 PHP 中，预定义的 $_GET 变量用于收集来自 method="get" 的表单中的值。

#### 2.4.1. $_GET 变量

预定义的 $_GET 变量用于收集来自 method="get" 的表单中的值。

从带有 GET 方法的表单发送的信息，对任何人都是可见的（会显示在浏览器的地址栏），并且对发送信息的量也有限制。

**实例**

    <form action="welcome.php" method="get">
    Name: <input type="text" name="fname">
    Age: <input type="text" name="age">
    <input type="submit">
    </form>

当用户点击 "Submit" 按钮时，发送到服务器的 URL 如下所示：

    http://www.w3cschool.cc/welcome.php?fname=Peter&age=37

"welcome.php" 文件现在可以通过 $\_GET 变量来收集表单数据了（请注意，表单域的名称会自动成为 $\_GET 数组中的键）：

    Welcome <?php echo $_GET["fname"]; ?>.<br>
    You are <?php echo $_GET["age"]; ?> years old!

#### 2.4.2. 何时使用 method="get"？

在 HTML 表单中使用 method="get" 时，所有的变量名和值都会显示在 URL 中。

**注释：**所以在发送密码或其他敏感信息时，不应该使用这个方法！

然而，正因为变量显示在 URL 中，因此可以在收藏夹中收藏该页面。在某些情况下，这是很有用的。

**注释：**HTTP GET 方法不适合大型的变量值。它的值是不能超过 2000 个字符的。

------------------------------------------------------------------------

### [2.5. PHP表单 - $_POST变量](http://www.w3cschool.cc/php/php-post.html)

------------------------------------------------------------------------

在 PHP 中，预定义的 $_POST 变量用于收集来自 method="post" 的表单中的值。

#### 2.5.1. $_POST 变量

预定义的 $_POST 变量用于收集来自 method="post" 的表单中的值。

从带有 POST 方法的表单发送的信息，对任何人都是不可见的（不会显示在浏览器的地址栏），并且对发送信息的量也没有限制。

**注释：**然而，默认情况下，POST 方法的发送信息的量最大值为 8 MB（可通过设置 php.ini 文件中的 post_max_size 进行更改）。

**实例**

    <form action="welcome.php" method="post">
    Name: <input type="text" name="fname">
    Age: <input type="text" name="age">
    <input type="submit">
    </form>

当用户点击 "Submit" 按钮时，URL 如下所示：

    http://www.w3cschool.cc/welcome.php

"welcome.php" 文件现在可以通过 $\_POST 变量来收集表单数据了（请注意，表单域的名称会自动成为 $\_POST 数组中的键）：

    Welcome <?php echo $_POST["fname"]; ?>!<br>
    You are <?php echo $_POST["age"]; ?> years old.

#### 2.5.2. 何时使用 method="post"？

从带有 POST 方法的表单发送的信息，对任何人都是不可见的，并且对发送信息的量也没有限制。

然而，由于变量不显示在 URL 中，所以无法把页面加入书签。

#### 2.5.3. PHP $_REQUEST 变量

预定义的 $\_REQUEST 变量包含了 $\_GET、$\_POST 和 $\_COOKIE 的内容。

$_REQUEST 变量可用来收集通过 GET 和 POST 方法发送的表单数据。

Welcome <?php echo $_REQUEST["fname"]; ?>!<br>
You are <?php echo $_REQUEST["age"]; ?> years old.

------------------------------------------------------------------------

##三、PHP 高级教程

------------------------------------------------------------------------

### [3.1. PHP 多维数组](http://www.w3cschool.cc/php/php-arrays-multi.html)

------------------------------------------------------------------------


一个数组中的值可以是另一个数组，另一个数组的值也可以是一个数组。依照这种方式，我们可以创建二维或者三维数组：

**实例：**
┖[demo_array_multi.php](http://192.168.215.116/w3c_web_test/PHP/Form/demo_array_multi.php)

多维数组是包含一个或多个数组的数组。

在多维数组中，主数组中的每一个元素也可以是一个数组，子数组中的每一个元素也可以是一个数组。

**实例**

在这个实例中，我们创建了一个自动分配 ID 键的多维数组：

    $families = array
    (
    "Griffin"=>array
    (
    "Peter",
    "Lois",
    "Megan"
    ),
    "Quagmire"=>array
    (
    "Glenn"
    ),
    "Brown"=>array
    (
    "Cleveland",
    "Loretta",
    "Junior"
    )
    );

上面的数组将输出如下：

    Array
    (
    [Griffin] => Array
    (
    [0] => Peter
    [1] => Lois
    [2] => Megan
    )
    [Quagmire] => Array
    (
    [0] => Glenn
    )
    [Brown] => Array
    (
    [0] => Cleveland
    [1] => Loretta
    [2] => Junior
    )
    )

让我们试着显示上面数组中的某个值：

    echo "Is " . $families['Griffin'][2] . 
    " a part of the Griffin family?";

上面的代码将输出：

    Is Megan a part of the Griffin family?

------------------------------------------------------------------------

### [3.2. PHP Date()函数](http://www.w3cschool.cc/php/php-date.html)

------------------------------------------------------------------------

PHP date() 函数用于格式化时间/日期。

#### 3.2.1. PHP Date() 函数

PHP date() 函数可把时间戳格式化为可读性更好的日期和时间。

时间戳是一个字符序列，表示一定的事件发生的日期/时间。

**语法**

    date(format,timestamp)

| 参数      | 描述                                       |
|:----------|:-------------------------------------------|
| format    | 必需。规定时间戳的格式。                   |
| timestamp | 可选。规定时间戳。默认是当期的日期和时间。 |

#### 3.2.2. PHP Date() - 格式化日期

date() 函数的第一个必需参数 format 规定了如何格式化日期/时间。

这里列出了一些可用的字符：

+ d - 代表月中的天（01 - 31）

+ m - 代表月（01 - 12）

+ Y - 代表年（四位数）

可以在字母之间插入其他字符，比如"/"、"." 或者 "-"，这样就可以增加附加格式了：

    <?php
    echo date("Y/m/d") . "<br>";
    echo date("Y.m.d") . "<br>";
    echo date("Y-m-d");
    ?>

上面的代码的输出如下所示：

    2009/05/11
    2009.05.11
    2009-05-11

#### 3.2.3. PHP Date() - 添加时间戳

date() 函数的第二个可选参数 timestamp 规定了一个时间戳。如果您没有提供时间戳，将使用当前的日期和时间。

mktime() 函数可为指定的日期返回 Unix 时间戳。

Unix 时间戳包含了 Unix 纪元（1970-01-01 00:00:00 GMT）和指定时间之间的秒数。

**mktime() 语法**

mktime(hour,minute,second,month,day,year,is_dst)

    <?php
    $tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
    echo "Tomorrow is ".date("Y/m/d", $tomorrow);
    ?>

上面代码的输出如下所示：

    Tomorrow is 2009/05/12

------------------------------------------------------------------------

### [3.3. PHP 包含文件](http://www.w3cschool.cc/php/php-includes.html)

------------------------------------------------------------------------

#### 3.3.1. PHP include 和 require 语句

在 PHP 中，您可以在服务器执行 PHP 文件之前在该文件中插入一个文件的内容。

include 和 require 语句用于在执行流中插入写在其他文件中的有用的代码。

**include 和 require 除了处理错误的方式不同之外，在其他方面都是相同的：**

+ require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。

+ include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。

因此，如果您希望继续执行，并向用户输出结果，即使包含文件已丢失，那么请使用 include。否则，在框架、CMS 或者复杂的 PHP 应用程序编程中，请始终使用 require 向执行流引用关键文件。这有助于提高应用程序的安全性和完整性，在某个关键文件意外丢失的情况下。

包含文件省去了大量的工作。这意味着您可以为所有网页创建标准页头、页脚或者菜单文件。然后，在页头需要更新时，您只需更新这个页头包含文件即可。

**语法**

    include 'filename';

    或者

    require 'filename';

**基础实例**

假设您有一个标准的页头文件，名为 "header.php"。如需在页面中引用这个页头文件，请使用 include/require：

    <html>
    <body>
    
    <?php include 'header.php'; ?>
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    
    </body>
    </html>

**实例2**

假设我们有一个在所有页面中使用的标准菜单文件。

"menu.php":

    echo '<a href="/default.php">Home</a>
    <a href="/tutorials.php">Tutorials</a>
    <a href="/references.php">References</a>
    <a href="/examples.php">Examples</a> 
    <a href="/about.php">About Us</a> 
    <a href="/contact.php">Contact Us</a>';

网站中的所有页面均应引用该菜单文件。以下是具体的做法：

    <html>
    <body>
    
    <div class="leftmenu">
    <?php include 'menu.php'; ?>
    </div>
    
    <h1>Welcome to my home page.</h1>
    <p>Some text.</p>
    
    </body>
    </html>

**实例3**

假设我们有一个定义变量的包含文件（"vars.php"）：

    <?php
    $color='red';
    $car='BMW';
    ?>

这些变量可用在调用文件中：

    <html>
    <body>
    
    <h1>Welcome to my home page.</h1>
    <?php include 'vars.php';
    echo "I have a $color $car"; // I have a red BMW
    ?>
    
    </body>
    </html>


------------------------------------------------------------------------

### [3.4. PHP 文件处理](http://www.w3cschool.cc/php/php-file.html)

------------------------------------------------------------------------

fopen() 函数用于在 PHP 中打开文件。

#### 3.4.1. 打开文件

fopen() 函数用于在 PHP 中打开文件。

此函数的第一个参数含有要打开的文件的名称，第二个参数规定了使用哪种模式来打开文件：

    <html>
    <body>
    
    <?php
    $file=fopen("welcome.txt","r");
    ?>
    
    </body>
    </html>

文件可能通过下列模式来打开：

| 模式  | 描述                                                             |
|:------|:-----------------------------------------------------------------|
| r     | 只读。在文件的开头开始。                                         |
| r+    | 读/写。在文件的开头开始。                                        |
| w     | 只写。打开并清空文件的内容；如果文件不存在，则创建新文件。       |
| w+    | 读/写。打开并清空文件的内容；如果文件不存在，则创建新文件。      |
| a     | 追加。打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。 |
| a+    | 读/追加。通过向文件末尾写内容，来保持文件内容。                  |
| x     | 只写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。      |
| x+    | 读/写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。     |

**注释：**如果 fopen() 函数无法打开指定文件，则返回 0 (false)。

**实例**

如果 fopen() 函数不能打开指定的文件，下面的实例会生成一段消息：

    <html>
    <body>
    
    <?php
    $file=fopen("welcome.txt","r") or exit("Unable to open file!");
    ?>
    
    </body>
    </html>

#### 3.4.2. 关闭文件

fclose() 函数用于关闭打开的文件：

    <?php
    $file = fopen("test.txt","r");
    
    //some code to be executed
    
    fclose($file);
    ?>

#### 3.4.3. 检测 End-of-file

feof() 函数检测是否已到达文件末尾（EOF）。

在循环遍历未知长度的数据时，feof() 函数很有用。

**注释：**在 w 、a 和 x 模式下，您无法读取打开的文件！

    if (feof($file)) echo "End of file";

#### 3.4.4. 逐行读取文件

fgets() 函数用于从文件中逐行读取文件。

**注释：**在调用该函数之后，文件指针会移动到下一行。

**实例**

下面的实例逐行读取文件，直到文件末尾为止：

    <?php
    $file = fopen("welcome.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    while(!feof($file))
    {
    echo fgets($file). "<br>";
    }
    fclose($file);
    ?>

#### 3.4.5. 逐字符读取文件

fgetc() 函数用于从文件中逐字符地读取文件。

**注释：**在调用该函数之后，文件指针会移动到下一个字符。

**实例**

下面的实例逐字符地读取文件，直到文件末尾为止：

    <?php
    $file=fopen("welcome.txt","r") or exit("Unable to open file!");
    while (!feof($file))
    {
    echo fgetc($file);
    }
    fclose($file);
    ?>

------------------------------------------------------------------------

### [3.5. PHP 文件上传](http://www.w3cschool.cc/php/php-file-upload.html)

------------------------------------------------------------------------

通过 PHP ,可以把文件上传到服务器

#### 3.5.1. 创建一个文件上传表单

允许用户从表单上传文件是非常有用的。

请看下面这个供上传文件的 HTML 表单：

    <html>
    <body>
    
    <form action="upload_file.php" method="post"
    enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    
    </body>
    </html>

有关上面的 HTML 表单的一些注意项列举如下：

+ ``<form>`` 标签的 enctype 属性规定了在提交表单时要使用哪种内容类型。在表单需要二进制数据时，比如文件内容，请使用 "multipart/form-data"。

+ ``<input> `` 标签的 type="file" 属性规定了应该把输入作为文件来处理。举例来说，当在浏览器中预览时，会看到输入框旁边有一个浏览按钮。

**注释：**允许用户上传文件是一个巨大的安全风险。请仅仅允许可信的用户执行文件上传操作。

#### 3.5.2. 创建上传脚本

"upload_file.php" 文件含有供上传文件的代码：

    <?php
    if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
    }
    ?>

通过使用 PHP 的全局数组 $_FILES，你可以从客户计算机向远程服务器上传文件。

第一个参数是表单的 input name，第二个下标可以是 "name"、"type"、"size"、"tmp_name" 或 "error"。如下所示：

+ $_FILES["file"]["name"] - 被上传文件的名称

+ $_FILES["file"]["type"] - 被上传文件的类型

+ $_FILES["file"]["size"] - 被上传文件的大小，以**字节**计

+ $_FILES["file"]["tmp_name"] - 存储在服务器的文件的临时副本的名称

+ $_FILES["file"]["error"] - 由文件上传导致的错误代码

这是一种非常简单文件上传方式。基于安全方面的考虑，您应当增加有关允许哪些用户上传文件的限制。

#### 3.5.3. 上传限制

在这个脚本中，我们增加了对文件上传的限制。用户只能上传 .gif 和 .jpeg 文件，文件大小必须小于 20 kB：

    <?php
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 20000)
    && in_array($extension, $allowedExts))
    {
    if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
    }
    }
    else
    {
    echo "Invalid file";
    }
    ?>

#### 3.5.4. 保存被上传的文件

上面的实例在服务器的 PHP 临时文件夹中创建了一个被上传文件的临时副本。

这个临时的副本文件会在脚本结束时消失。要保存被上传的文件，我们需要把它拷贝到另外的位置：

    <?php
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 20000)
    && in_array($extension, $allowedExts))
    {
    if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    
    if (file_exists("upload/" . $_FILES["file"]["name"]))
    {
    echo $_FILES["file"]["name"] . " already exists. ";
    }
    else
    {
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "upload/" . $_FILES["file"]["name"]);
    echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    }
    }
    }
    else
    {
    echo "Invalid file";
    }
    ?>

上面的脚本检测了文件是否已存在，如果不存在，则把文件拷贝到名为 "upload" 的文件夹。

------------------------------------------------------------------------

### [3.6. PHP Cookies](http://www.w3cschool.cc/php/php-cookies.html)

------------------------------------------------------------------------

cookie 常用于识别用户。

#### 3.6.1. Cookies 是什么？

cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。

#### 3.6.2. 如何创建Cookie？

setcookie() 函数用于设置 cookie。

**注释：**<font color="red">setcookie() 函数必须位于 ``<html>`` 标签之前。</font>

**语法**

    setcookie(name, value, expire, path, domain);

**实例1**

在下面的例子中，我们将创建名为 "user" 的 cookie，并为它赋值 "Alex Porter"。我们也规定了此 cookie 在一小时后过期：

    <?php
    setcookie("user", "Alex Porter", time()+3600);
    ?>

    <html>
    .....

**注释：**在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码。（为防止 URL 编码，请使用 setrawcookie() 取而代之。）

**实例2**

您还可以通过另一种方式设置 cookie 的过期时间。这也许比使用秒表示的方式简单。

    <?php
    $expire=time()+60*60*24*30;
    setcookie("user", "Alex Porter", $expire);
    ?>

    <html>
    .....

在上面的实例中，过期时间被设置为一个月（60 秒 * 60 分 * 24 小时 * 30 天）。

#### 3.6.3. 如何取回Cookie的值？

PHP 的 $_COOKIE 变量用于取回 cookie 的值。

在下面的实例中，我们取回了名为 "user" 的 cookie 的值，并把它显示在了页面上：

    <?php
    // Print a cookie
    echo $_COOKIE["user"];
    
    // A way to view all cookies
    print_r($_COOKIE);
    ?>

在下面的实例中，我们使用 isset() 函数来确认是否已设置了 cookie：

    <html>
    <body>
    
    <?php
    if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br>";
    else
    echo "Welcome guest!<br>";
    ?>
    
    </body>
    </html>

#### 3.6.4. 如何删除 Cookie？

当删除 cookie 时，您应当使过期日期变更为过去的时间点。

删除的实例：

    <?php
    // set the expiration date to one hour ago
    setcookie("user", "", time()-3600);
    ?>

#### 3.6.5. 如果浏览器不支持 Cookie 该怎么办？

如果您的应用程序需要与不支持 cookie 的浏览器打交道，那么您不得不使用其他的办法在您的应用程序中的页面之间传递信息。一种方式是通过表单传递数据（有关表单和用户输入的内容，在本教程的前面章节中我们已经介绍过了）。

下面的表单在用户单点击 "Submit" 按钮时，向 "welcome.php" 提交了用户输入：

    <html>
    <body>
    
    <form action="welcome.php" method="post">
    Name: <input type="text" name="name">
    Age: <input type="text" name="age">
    <input type="submit">
    </form>
    
    </body>
    </html>

取回 "welcome.php" 文件中的值，如下所示：

    <html>
    <body>
    
    Welcome <?php echo $_POST["name"]; ?>.<br>
    You are <?php echo $_POST["age"]; ?> years old.
    
    </body>
    </html>

------------------------------------------------------------------------

### [3.7. PHP Sessions](http://www.w3cschool.cc/php/php-sessions.html)

------------------------------------------------------------------------

PHP session 变量用于存储关于用户会话（session）的信息，或者更改用户会话（session）的设置。Session 变量存储单一用户的信息，并且对于应用程序中的所有页面都是可用的。

#### 3.7.1. PHP Session 变量

您在计算机上操作某个应用程序时，您打开它，做些更改，然后关闭它。这很像一次对话（Session）。计算机知道您是谁。它清楚您在何时打开和关闭应用程序。然而，在因特网上问题出现了：由于 HTTP 地址无法保持状态，Web 服务器并不知道您是谁以及您做了什么。

PHP session 解决了这个问题，它通过在服务器上存储用户信息以便随后使用（比如用户名称、购买商品等）。然而，会话信息是临时的，在用户离开网站后将被删除。如果您需要永久存储信息，可以把数据存储在数据库中。

Session 的工作机制是：为每个访客创建一个唯一的 id (UID)，并基于这个 UID 来存储变量。UID 存储在 cookie 中，或者通过 URL 进行传导。

#### 3.7.2. 开始 PHP Session

在您把用户信息存储在 PHP session 中之前，首先必须启动回话。

**注释：**<font color="red">session_start() 函数必须位于 ``<html>`` 标签之前：</font>

    <?php session_start(); ?>
    
    <html>
    <body>
    
    </body>
    </html>

上面的代码会向服务器注册用户的会话，以便您可以开始保存用户信息，同时会为用户会话分配一个 UID。

#### 3.7.3. 存储 Session 变量

存储和取回 session 变量的正确方法是使用 PHP $_SESSION 变量：

    <?php
    session_start();
    // store session data
    $_SESSION['views']=1;
    ?>
    
    <html>
    <body>
    
    <?php
    //retrieve session data
    echo "Pageviews=". $_SESSION['views'];
    ?>
    
    </body>
    </html>

输出：

    Pageviews=1

在下面的实例中，我们创建了一个简单的 page-view 计数器。isset() 函数检测是否已设置 "views" 变量。如果已设置 "views" 变量，我们累加计数器。如果 "views" 不存在，则创建 "views" 变量，并把它设置为 1：

    <?php
    session_start();

    if(isset($_SESSION['views']))
    $_SESSION['views']=$_SESSION['views']+1;
    else
    $_SESSION['views']=1;
    echo "Views=". $_SESSION['views'];
    ?>

#### 3.7.4. 销毁 Session

如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。

unset() 函数用于释放指定的 session 变量：

    <?php
    session_start();
    if(isset($_SESSION['views']))
    unset($_SESSION['views']);
    ?>

您也可以通过调用 session_destroy() 函数彻底销毁 session：

    <?php
    session_destroy();
    ?>

**注释：**session_destroy() 将重置 session，您将失去所有已存储的 session 数据。

------------------------------------------------------------------------

### [3.8. PHP E-mail](http://www.w3cschool.cc/php/php-mail.html)

------------------------------------------------------------------------

PHP 允许您从脚本直接发送电子邮件。

#### 3.8.1. PHP mail()函数

PHP mail() 函数用于从脚本中发送电子邮件。

**语法**

mail(to,subject,message,headers,parameters)

| 参数       | 描述                                                                          |
|:-----------|:------------------------------------------------------------------------------|
| to         | 必需。规定email接收者。                                                       |
| subject    | 必需。规定email的主题。**注释：**该参数不能包含任何新行字符。                 |
| message    | 必需。定义要发送的消息。应使用LF(\n)来分隔各行。每行应该限制在70个字符内。    |
| headers    | 可选。规定附加的标题，比如 From、Cc和Bcc。应当使用CRLF（\r\n）分隔附加的标题。|
| parameters | 可选。对邮件发送程序规定额外的参数。                                          |

**注释：**PHP 需要一个已安装且正在运行的邮件系统，以便使邮件函数可用。所用的程序通过在 php.ini 文件中的配置设置进行定义。

#### 3.8.2. PHP 简易 E-Mail

通过 PHP 发送电子邮件的最简单的方式是发送一份文本email。

在下面的实例中，我们首先声明变量($to, $subject, $message, $from, $headers)，然后我们在 mail() 函数中使用这些变量来发送了一封 e-mail：

    <?php
    $to = "someone@example.com";
    $subject = "Test mail";
    $message = "Hello! This is a simple email message.";
    $from = "someonelse@example.com";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent.";
    ?>

#### 3.8.3. PHP Mail 表单

通过 PHP，您能够在自己的站点制作一个反馈表单。下面的实例向指定的 e-mail 地址发送了一条文本消息：

    <html>
    <body>
    
    <?php
    if (isset($_REQUEST['email']))
    //if "email" is filled out, send email
    {
    //send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("someone@example.com", $subject,
    $message, "From:" . $email);
    echo "Thank you for using our mail form";
    }
    else
    //if "email" is not filled out, display the form
    {
    echo "<form method='post' action='mailform.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
    }
    ?>
    
    </body>
    </html>

实例解释：

+ 首先，检查是否填写了邮件输入框

+ 如果未填写（比如在页面被首次访问时），输出 HTML 表单

+ 如果已填写（在表单被填写后），从表单发送电子邮件

+ 当填写完表单点击提交按钮后，页面重新载入，可以看到邮件输入被重置，同时显示邮件发送成功的消息

------------------------------------------------------------------------

### [3.9. PHP Secure E-mails](http://www.w3cschool.cc/php/php-secure-mail.html)

------------------------------------------------------------------------

在上一节中的 PHP e-mail 脚本中，存在着一个漏洞。

#### 3.8.3. PHP E-mail 注入

首先，请看上一章中的 PHP 代码：

    <html>
    <body>
    
    <?php
    if (isset($_REQUEST['email']))
    //if "email" is filled out, send email
    {
    //send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("someone@example.com", "Subject: $subject",
    $message, "From: $email" );
    echo "Thank you for using our mail form";
    }
    else
    //if "email" is not filled out, display the form
    {
    echo "<form method='post' action='mailform.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
    }
    ?>
    
    </body>
    </html>

以上代码存在的问题是，未经授权的用户可通过输入表单在邮件头部插入数据。

假如用户在表单中的输入框内加入如下文本到电子邮件中，会出现什么情况呢？

    someone@example.com%0ACc:person2@example.com
    %0ABcc:person3@example.com,person3@example.com,
    anotherperson4@example.com,person5@example.com
    %0ABTo:person6@example.com

与往常一样，mail() 函数把上面的文本放入邮件头部，那么现在头部有了额外的 Cc:、Bcc: 和 To: 字段。当用户点击提交按钮时，这封 e-mail 会被发送到上面所有的地址！

#### 3.8.3. PHP 防止 E-mail 注入

防止 e-mail 注入的最好方法是对输入进行验证。

下面的代码与上一章中的类似，不过这里我们已经增加了检测表单中 email 字段的输入验证程序：

    <html>
    <body>
    <?php
    function spamcheck($field)
    {
    //filter_var() sanitizes the e-mail
    //address using FILTER_SANITIZE_EMAIL
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);
    
    //filter_var() validates the e-mail
    //address using FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
    else
    {
    return FALSE;
    }
    }
    
    if (isset($_REQUEST['email']))
    {//if "email" is filled out, proceed
    
    //check if the email address is invalid
    $mailcheck = spamcheck($_REQUEST['email']);
    if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
    else
    {//send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("someone@example.com", "Subject: $subject",
    $message, "From: $email" );
    echo "Thank you for using our mail form";
    }
    }
    else
    {//if "email" is not filled out, display the form
    echo "<form method='post' action='mailform.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
    }
    ?>
    
    </body>
    </html>

在上面的代码中，我们使用了 PHP 过滤器来对输入进行验证：

+ FILTER_SANITIZE_EMAIL 过滤器从字符串中删除电子邮件的非法字符

+ FILTER_VALIDATE_EMAIL 过滤器验证电子邮件地址的值

------------------------------------------------------------------------

### [3.10. PHP 错误处理](http://www.w3cschool.cc/php/php-error.html)

------------------------------------------------------------------------

在 PHP 中，默认的错误处理很简单。一条错误消息会被发送到浏览器，这条消息带有文件名、行号以及描述错误的消息。

#### 3.10.1. PHP 错误处理

在创建脚本和 Web 应用程序时，错误处理是一个重要的部分。如果您的代码缺少错误检测编码，那么程序看上去很不专业，也为安全风险敞开了大门。

以下是不同的错误处理方法：

+ 简单的 "die()" 语句

+ 自定义错误和错误触发器

+ 错误报告

#### 3.10.2. 基本的错误处理：使 用die()函数

第一个实例展示了一个打开文本文件的简单脚本：

    <?php
    $file = fopen("welcome.txt","r");
    ?>

如果文件不存在，会得到类似的错误信息：

    Warning: fopen(welcome.txt) [function.fopen]: failed to open stream:
    No such file or directory in C:webfoldertest.php on line 2

为了避免用户得到类似上面的错误信息，我们在访问文件之前检测该文件是否存在

<?php
if(!file_exists("welcome.txt")) {
    die("File not found");
} else {
    $file=fopen("welcome.txt","r");
}
?>

现在，如果文件不存在，您会得到类似这样的错误消息：

    File not found

相比之前的代码，上面的代码更有效，这是由于它采用了一个简单的错误处理机制在错误之后终止了脚本。

然而，简单地终止脚本并不总是恰当的方式。让我们研究一下用于处理错误的备选的 PHP 函数。

#### 3.10.3. 创建自定义错误处理器

创建一个自定义的错误处理器非常简单。我们很简单地创建了一个专用函数，可以在 PHP 中发生错误时调用该函数。

该函数必须有能力处理至少两个参数 (error level 和 error message)，但是可以接受最多五个参数（可选的：file, line-number 和 error context）：

**语法**

    error_function(error_level,error_message,error_file,error_line,error_context)

| 参数          | 描述                                                                                   |
|:--------------|:---------------------------------------------------------------------------------------|
| error_level   | 必需。为用户定义的错误规定错误报告级别。必须是一个数字。参见下面的表格：错误报告级别。 |
| error_message | 必需。为用户定义的错误规定错误消息。                                                   |
| error_file    | 可选。规定错误发生的文件名。                                                           |
| error_line    | 可选。规定错误发生的行号。                                                             |
| error_context | 可选。规定一个数组，包含了当错误发生时在用的每个变量以及它们的值。                     |

**错误报告级别**

这些错误报告级别是用户自定义的错误处理程序处理的不同类型的错误：

| 值   | 常量                | 描述                                                                                       |
| 2    | E_WARNING           | 非致命的 run-time 错误。不暂停脚本执行。                                                   |
| 8    | E_NOTICE            | run-time 通知。在脚本发现可能有错误时发生，但也可能在脚本正常运行时发生。                  |
| 256  | E_USER_ERROR        | 致命的用户生成的错误。这类似于程序员用 PHP 函数 trigger_error()设置的E_ERROR。             |
| 512  | E_USER_WARNING      | 非致命的用户生成的警告。这类似于程序员使用 PHP 函数trigger_error()设置的E_WARNING。        |
| 1024 | E_USER_NOTICE       | 用户生成的通知。这类似于程序员使用 PHP 函数 trigger_error() 设置的 E_NOTICE。              |
| 4096 | E_RECOVERABLE_ERROR | 可捕获的致命错误。类似 E_ERROR，但可被用户定义的处理程序捕获。（参见 set_error_handler()） |
| 8191 | E_ALL | 所有错误和警告。（在 PHP 5.4 中，E_STRICT 成为 E_ALL 的一部分）                                          |

现在，让我们创建一个处理错误的函数：

    function customError($errno, $errstr)
    {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script";
    die();
    }

上面的代码是一个简单的错误处理函数。当它被触发时，它会取得错误级别和错误消息。然后它会输出错误级别和消息，并终止脚本。

现在，我们已经创建了一个错误处理函数，我们需要确定在何时触发该函数。

**设置错误处理程序**

PHP 的默认错误处理程序是内建的错误处理程序。我们打算把上面的函数改造为脚本运行期间的默认错误处理程序。

**实例**

通过尝试输出不存在的变量，来测试这个错误处理程序：  
┖[demo_set_error.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_set_error.php)

以上代码的输出如下所示：

    Error: [8] Undefined variable: test

#### 3.10.4 触发错误

在脚本中用户输入数据的位置，当用户的输入无效时触发错误是很有用的。在 PHP 中，这个任务由 trigger_error() 函数完成。

**实例**

在本例中，如果“test”变量大于“1”，就会发生错误：  
┖[demo_trigger_error.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_trigger_error.php)

您可以在脚本中任何位置触发错误，通过添加的第二个参数，您能够规定所触发的错误级别。

可能的错误类型：

+ E_USER_ERROR - 致命的用户生成的 run-time 错误。错误无法恢复。脚本执行被中断。

+ E_USER_WARNING - 非致命的用户生成的 run-time 警告。脚本执行不被中断。

+ E_USER_NOTICE - 默认。用户生成的 run-time 通知。在脚本发现可能有错误时发生，但也可能在脚本正常运行时发生。

**实例**

在本例中，如果 "test" 变量大于 "1"，则发生 E_USER_WARNING 错误。如果发生了 E_USER_WARNING，我们将使用我们自定义的错误处理程序并结束脚本：  
┖[demo_trigger_error1.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_trigger_error1.php)

以上代码的输出如下所示：

    Error: [512] Value must be 1 or below
    Ending Script

现在，我们已经学习了如何创建自己的 error，以及如何触发它们，接下来我们研究一下错误记录。

#### 3.10.5 错误记录

在默认的情况下，根据在 php.ini 中的 error_log 配置，PHP 向服务器的记录系统或文件发送错误记录。通过使用 error_log() 函数，您可以向指定的文件或远程目的地发送错误记录。

通过电子邮件向您自己发送错误消息，是一种获得指定错误的通知的好办法。

**通过 E-Mail 发送错误信息**

在下面的例子中，如果特定的错误发生，我们将发送带有错误消息的电子邮件，并结束脚本：  
┖[demo_error_log.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_error_log.php)

以上代码的输出如下所示：

    Error: [512] Value must be 1 or below
    Webmaster has been notified

接收自以上代码的邮件如下所示：

    Error: [512] Value must be 1 or below

这个方法不适合所有的错误。常规错误应当通过使用默认的 PHP 记录系统在服务器上进行记录。

------------------------------------------------------------------------

### [3.11. PHP 异常处理](http://www.w3cschool.cc/php/php-exception.html)

------------------------------------------------------------------------

异常用于在指定的错误发生时改变脚本的正常流程。

#### 3.11.1. 异常是什么

PHP 5 提供了一种新的面向对象的错误处理方法。

异常处理用于在指定的错误（异常）情况发生时改变脚本的正常流程。这种情况称为异常。

当异常被触发时，通常会发生：

+ 当前代码状态被保存

+ 代码执行被切换到预定义（自定义）的异常处理器函数

+ 根据情况，处理器也许会从保存的代码状态重新开始执行代码，终止脚本执行，或从代码中另外的位置继续执行脚本

我们将展示不同的错误处理方法：

+ 异常的基本使用

+ 创建自定义的异常处理器

+ 多个异常

+ 重新抛出异常

+ 设置顶层异常处理器

**注释：**异常应该仅仅在错误情况下使用，而不应该用于在一个指定的点跳转到代码的另一个位置。

#### 3.11.2. 异常的基本使用

当异常被抛出时，其后的代码不会继续执行，PHP 会尝试查找匹配的 "catch" 代码块。

如果异常没有被捕获，而且又没用使用 set_exception_handler() 作相应的处理的话，那么将发生一个严重的错误（致命错误），并且输出 "Uncaught Exception" （未捕获异常）的错误消息。

让我们尝试抛出一个异常，同时不去捕获它：  
┖[demo_exception_base.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_exception_base.php)

上面的代码会得到类似这样的一个错误：

    Fatal error: Uncaught exception 'Exception'
    with message 'Value must be 1 or below' in C:webfoldertest.php:13
    Stack trace: #0 C:webfoldertest.php(12):
    checkNum(28) #1 {main} thrown in C:webfoldertest.php on line 13

#### 3.11.3. Try、throw 和 catch

要避免上面实例中出现的错误，我们需要创建适当的代码来处理异常。

适当的处理异常代码应该包括：

> 1. Try - 使用异常的函数应该位于 "try" 代码块内。如果没有触发异常，则代码将照常继续执行。但是如果异常被触发，会抛出一个异常。
>
> 2. Throw - 规定如何触发异常。每一个 "throw" 必须对应至少一个 "catch"。
>
> 3. Catch - "catch" 代码块会捕获异常，并创建一个包含异常信息的对象。

让我们触发一个异常：  
┖[demo_trigger_exception.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_trigger_exception.php)

上面代码将得到类似这样一个错误：

    Message: Value must be 1 or below

**实例解释：**

上面的代码抛出了一个异常，并捕获了它：

> 1. 创建 checkNum() 函数。它检测数字是否大于 1。如果是，则抛出一个异常。
>
> 2. 在 "try" 代码块中调用 checkNum() 函数。
>
> 3. checkNum() 函数中的异常被抛出。
>
> 4. "catch" 代码块接收到该异常，并创建一个包含异常信息的对象 ($e)。
>
> 5. 通过从这个 exception 对象调用 $e->getMessage()，输出来自该异常的错误消息。

然而，为了遵循 "每个 throw 必须对应一个 catch" 的原则，可以设置一个顶层的异常处理器来处理漏掉的错误。

#### 3.11.4. 创建一个自定义的 Exception 类

创建自定义的异常处理程序非常简单。我们简单地创建了一个专门的类，当 PHP 中发生异常时，可调用其函数。该类必须是 exception 类的一个扩展。

这个自定义的 exception 类继承了 PHP 的 exception 类的所有属性，您可向其添加自定义的函数。

我们开始创建 exception 类：  
┖[demo_diy_exception.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_diy_exception.php)

这个新的类是旧的 exception 类的副本，外加 errorMessage() 函数。正因为它是旧类的副本，因此它从旧类继承了属性和方法，我们可以使用 exception 类的方法，比如 getLine()、getFile() 和 getMessage()。

**实例解释：**

上面的代码抛出了一个异常，并通过一个自定义的 exception 类来捕获它：

> 1. customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧的 exception 类的所有属性和方法。
>
> 2. 创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一条错误消息。
>
> 3. 把 $email 变量设置为不合法的 e-mail 地址字符串。
>
> 4. 执行 "try" 代码块，由于 e-mail 地址不合法，因此抛出一个异常。
>
> 5. "catch" 代码块捕获异常，并显示错误消息。

#### 3.11.5. 多个异常

可以为一段脚本使用多个异常，来检测多种情况。

可以使用多个 if...else 代码块，或一个 switch 代码块，或者嵌套多个异常。这些异常能够使用不同的 exception 类，并返回不同的错误消息：  
┖[demo_many_exception.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_many_exception.php)

**实例解释：**

上面的代码测试了两种条件，如果其中任何一个条件不成立，则抛出一个异常：

> 1. customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧的 exception 类的所有属性和方法。
>
> 2. 创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一个错误消息。
>
> 3. 把 $email 变量设置为一个字符串，该字符串是一个有效的 e-mail 地址，但包含字符串 "example"。
>
> 4. 执行 "try" 代码块，在第一个条件下，不会抛出异常。
>
> 5. 由于 e-mail 含有字符串 "example"，第二个条件会触发异常。
>
> 6. "catch" 代码块会捕获异常，并显示恰当的错误消息。

如果 customException 类抛出了异常，但没有捕获 customException，仅仅捕获了 base exception，则在那里处理异常。

#### 3.11.6. 重新抛出异常

有时，当异常被抛出时，您也许希望以不同于标准的方式对它进行处理。可以在一个 "catch" 代码块中再次抛出异常。

脚本应该对用户隐藏系统错误。对程序员来说，系统错误也许很重要，但是用户对它们并不感兴趣。为了让用户更容易使用，您可以再次抛出带有对用户比较友好的消息的异常：  
┖[demo_throw_exception_again.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_throw_exception_again.php)

**实例解释：**

上面的代码检测在邮件地址中是否含有字符串 "example"。如果有，则再次抛出异常：

> 1. customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧的 exception 类的所有属性和方法。
>
> 2. 创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一个错误消息。
>
> 3. 把 $email 变量设置为一个字符串，该字符串是一个有效的 e-mail 地址，但包含字符串 "example"。
>
> 4. "try" 代码块包含另一个 "try" 代码块，这样就可以再次抛出异常。
>
> 5. 由于 e-mail 包含字符串 "example"，因此触发异常。
>
> 6. "catch" 代码块捕获到该异常，并重新抛出 "customException"。
>
> 7. 捕获到 "customException"，并显示一条错误消息。

如果在当前的 "try" 代码块中异常没有被捕获，则它将在更高层级上查找 catch 代码块。

#### 3.11.7. 设置顶层异常处理器

set_exception_handler() 函数可设置处理所有未捕获异常的用户定义函数。  
┖[demo_exception_handler.php](http://192.168.215.116/w3c_web_test/PHP/Advance/demo_exception_handler.php)

以上代码的输出如下所示：

    Exception: Uncaught Exception occurred

在上面的代码中，不存在 "catch" 代码块，而是触发顶层的异常处理程序。应该使用此函数来捕获所有未被捕获的异常。

#### 3.11.8. 异常的规则

+ 需要进行异常处理的代码应该放入 try 代码块内，以便捕获潜在的异常。

+ 每个 try 或 throw 代码块必须至少拥有一个对应的 catch 代码块。

+ 使用多个 catch 代码块可以捕获不同种类的异常。

+ 可以在 try 代码块内的 catch 代码块中抛出（再次抛出）异常。

简而言之：如果抛出了异常，就必须捕获它。
