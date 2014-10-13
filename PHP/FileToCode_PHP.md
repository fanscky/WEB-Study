# 文件与源码对应表
-----

## 一、基础教程

### [1.1. PHP 语法](http://www.w3school.com.cn/php/php_syntax.asp)  

-----------
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

---

### [1.2. PHP变量](http://www.w3school.com.cn/php/php_variables.asp)
-------
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


----------

### [1.3. PHP Echo / Print](http://www.w3school.com.cn/php/php_echo_print.asp)  

-----------

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

----

### [1.4. PHP 数据类型](http://www.w3school.com.cn/php/php_datatypes.asp)

--------------
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

-----

### [1.5.PHP字符串函数](http://www.w3school.com.cn/php/php_string.asp)

---------
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

-----

### [1.6. PHP参量](http://www.w3school.com.cn/php/php_constants.asp)

---------------
  **设置PHP常量**  
  如需设置常量，请使用 define() 函数 - 它使用三个参数：  
  * &nbsp;&nbsp;&nbsp;&nbsp;*首个参数定义常量的名称*  
  * &nbsp;&nbsp;&nbsp;&nbsp;*第二个参数定义常量的值*  
  * &nbsp;&nbsp;&nbsp;&nbsp;*可选的第三个参数规定常量名是否对大小写敏感。默认是 false。*  
  下例创建了一个对大小写敏感的常量，值为 <font color="green">"Welcome to W3School.com.cn!"：</font>  
  ┖[demo_php_constant1.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_constant1.php)  
  下例创建了一个对大小写不敏感的常量，值为 <font color="green">"Welcome to W3School.com.cn!"：</font>  
  ┖[demo_php_constant2.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_constant2.php)  
<br>

-----

### [1.7. PHP运算符](http://www.w3school.com.cn/php/php_operators.asp)

-----

#### 1.7.1. PHP算数运算符

  运算符  |  名称  |  例子  |  结果
  :------ |:------|:------|:-----
  +    |加法    |$x + $y|$x与$y求和
  -     |减法    |$x - $y|$x与$y的差数
  *     |乘法   |$x * $y|$x与$y乘积
  /     |除法   | $x / $y|$x与$y商数
  %   |模数    |$x % $y|$x与$y余数
  下例展示了使用不同算数运算符的不同结果：  
  ┖[demo_php_operator_arithmetic.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_arithmetic.php)

#### 1.7.2. PHP赋值运算符
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
  ┖[demo_php_operator_assignment.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_assignment.php)

#### 1.7.3. PHP字符串运算符

  运算符        |名称           |例子                                |结果     
  :----------|:------------|:-------------------------|:-------
  .              |串接             |$txt1="Hello" $txt2=$txt1."world!"|现在$txt2包含“Hello World”   
  .=            |串接赋值        |$txt1="Hello" $txt1 .="world!" |现在$txt1包含“Hello World”  
  下例展示了使用字符串运算符的结果：  
  ┖[demo_php_operator_string.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_string.php)

#### 1.7.4. PHP递增/递减运算符

  运算符     |名称         |描述         |
  :---------|:---------|:----------
  ++$x      |前递增      |$x加一递增，然后返回$x
  $x++      |后递增      |返回$x,然后$x加一递增  
  --$x        |前递减      |$x减一递减，然后返回$x
  $x--        |后递减      |返回$x，然后$x减一递减

  下例展示了使用不同递增/递减运算符的不同结果：  
  ┖[demo_php_operator_increment.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_increment.php)

#### 1.7.5. PHP比较运算符
  PHP 比较运算符用于比较两个值（数字或字符串）：

  运算符|名称|例子|结果
  :-----|:---|:---|:---
  ==|等于|$x == $y|如果 $x 等于 $y，则返回true
  ===|全等于（完全相同）|$x===$y|如果$x等于$y,且它们类型相同，则返回ture
  !=|不等于|$x != $y|如果 $x 不等于 $y，则返回true
  <>|不等于|$x <> $y|如果$x 不等于 $y，则返回true
  !==|不全等（完全不同）|$x !== $y|如果 $x 不等于 $y，且他们类型不相同，则返回true
  >|大于|$x > $y|如果 $x 大于 $y，则返回true
  <|小于|$x < $y|如果 $x 小于 $y，则返回true
  >=|大于或等于|$x >= $y|如果 $x 大于或者等于 $y，则返回true
  <=|小于或等于|$x <= $y|如果 $x 小于或者等于 $y，则返回true

  下例展示了使用某些比较运算符的不同结果：  
  ┖[demo_php_operator_comparison.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_comparison.php)

#### 1.7.6. PHP逻辑运算符

  运算符|名称|例子|结果
  :-----|:---|:---|:---
  and|与|$x and $y|如果 $x 和 $y 都为true，则返回true
  or|或|$x or $y|如果 $x 和 $y 至少有一个为true，则返回true
  xor|异或|$x xor $y|如果 $x 和 $y 有且仅有一个为true，则返回true
  &&|与|$x && $y|如果 $x 和 $y 都为true，则返回true
  "双竖线"|或|$x "双竖线" $y |如果 $x 和 $y 至少有一个为true，则返回true
  !|非|!$x|如果 $x 不为 true，则返回true

#### 1.7.7. PHP数组运算符

  |运算符|名称|例子|结果|
  |:-----|:---|:---|:---|
  |+|联合| $x + $y | $x 和 $y 的联合（但不覆盖重复的键）|
  |==|相等| $x == $y | 如果 $x 和 $y 拥有相同的键/值对，则返回true|
  |===|全等|$x === $y | 如果 $x 和 $y 拥有相同的键/值对，且顺序相同类型相同，则返回true|
  |!=|不相等| $x != $y|如果 $x 不等于 $y，则返回true|
  |<>|不相等| $x <> $y | 如果 $x 不等于 $y,则返回true|
  |！==|不全等| $x !== $y | 如果 $x 与 $y 完全不同，则返回true|

  下例展示了使用不同数组运算符的不同结果：  
  ┖[demo_php_operator_array.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_operator_array.php)  

-----

### [1.8. PHP If...Else](http://www.w3school.com.cn/php/php_if_else.asp)

-----
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

    if (条件） {
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

-----

### [1.9. PHP Switch](http://www.w3school.com.cn/php/php_switch.asp)

-------

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

-----

### [1.10. PHP While 循环](http://www.w3school.com.cn/php/php_looping.asp)

-----

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

-----

### [1.11. PHP for 循环](http://www.w3school.com.cn/php/php_looping_for.asp)

---------

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

-----

### [1.12. PHP函数](http://www.w3school.com.cn/php/php_functions.asp)

---------------

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
    
*<font color="green">注释：函数名能够以字母或下划线开头（而非数字）。*</font>

*<font color="green">注释：函数名对大小写不敏感。*</font>

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

-----

### [1.13 PHP 数组](http://www.w3school.com.cn/php/php_arrays.asp)

-----------

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

### [1.14 数组排序](http://www.w3school.com.cn/php/php_arrays_sort.asp)

**数组中的元素能够以字母或数字顺序进行升序或降序排序。**

#### 1.14.1. PHP - 数组的排序函数

在本节中，我们将学习如下 PHP 数组排序函数：

+ sort() - 以升序对数组排序
+ rsort() - 以降序对数组排序
+ asort() - 根据值，以升序对关联数组进行排序
+ ksort() - 根据键，以升序对关联数组进行排序
+ arsort() - 根据值，以降序对关联数组进行排序
+ krsort() - 根据键，以降序对关联数组进行排序

#### 1.14.2 对数组进行升序排序 - sort()

下面的例子按照字母升序对数组 $cars 中的元素进行排序：  
┖[demo_php_array_sort_alpha.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_sort_alpha.php)

下面的例子按照数字升序对数组 $numbers 中的元素进行排序：  
┖[demo_php_array_sort_num.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_sort_num.php)

#### 1.14.3 对数组进行降序排序 - rsort()

下面的例子按照字母降序对数组 $cars 中的元素进行排序：  
┖[demo_php_array_rsort_alpha.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_rsort_alpha.php)

下面的例子按照数字降序对数组 $numbers 中的元素进行排序：  
┖[demo_php_array_rsort_num.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_rsort_num.php)

#### 1.14.4 根据值对数组进行升序排序 - asort()

下面的例子根据值对关联数组进行升序排序：  
┖[demo_php_array_asort.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_asort.php)

#### 1.14.5 根据键对数组进行升序排序 - ksort()

下面的例子根据键对关联数组进行升序排序：  
┖[demo_php_array_ksort.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_ksort.php)

#### 1.14.6 根据值对数组进行降序排序 - arsort()

下面的例子根据值对关联数组进行降序排序：  
┖[demo_php_array_arsort.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_arsort.php)

#### 1.14.6 根据键对数组进行降序排序 - krsort()

下面的例子根据键对关联数组进行降序排序：  
┖[demo_php_array_krsort.php](http://192.168.215.116/w3c_web_test/PHP/Base/demo_php_array_krsort.php)
