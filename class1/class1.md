#1.环境搭建
xampp安装
#2.工欲善其事必先利其器
sublime
notepad++
vscode
#3.我的第一个php程序
PHP，即“PHP: Hypertext Preprocessor”，是一种被广泛应用的开源通用脚本语言，尤其适用于 Web 开发并可嵌入 HTML 中去。易于学习。该语言的主要目标是允许 web 开发人员快速编写动态生成的 web 页面。
向这个世界打个招呼吧
><?php echo "hello world!";?>
>url输入http://127.0.0.1/webedu/class1/helloworld.php

#4.基础 PHP 语法
PHP 脚本以 <?php 开头，以 ?> 结尾
PHP 语句以分号结尾（;）
在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。
PHP 中的注释
#5.变量
变量视为存储数据的容器
变量即在程序运行过程中它的值是允许改变的量
PHP 变量规则：
变量以 $ 符号开头，其后是变量的名称
变量名称必须以字母或下划线开头
变量名称不能以数字开头
变量名称只能包含字母数字字符和下划线（A-z、0-9 以及 _）
变量名称对大小写敏感（$y 与 $Y 是两个不同的变量）

数据类型
整型 integer
浮点型 float
字符串 string
布尔类型 boolean
数组类型array
预定义变量
$_GET
$_POST
$_COOKIE
常量
define()
运算符
赋值运算符 =
算数运算符 + - * / %
递增递减运算符 i++ ++i
字符串运算符 .
逻辑运算符 ！ and or xor
比较运算符 == ！= === > >= < <=
运算符优先级

php流程控制
ifelse语句
for 循环
while循环
do while循环
三目运算
break
continue
函数 
定义函数
调用函数
函数参数与返回值
传值与传址


PHP 变量作用域
local（局部）
函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
global（全局）
函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
static（静态）