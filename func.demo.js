/**
 * 元素指定索引位置删除指定数量元素,再插入新的元素,注意是前插
 * @param int      index    索引位置,支持负数
 * @param int      len      要删除的元素长度
 * @param mixed    val      要插入的值
 * @return array   删除的元素
*/
Array.prototype.splice = function (index,len,val){};

// 例:删除第一个元素,并插入'py'
var lis = ['js','php','ruby'];
var res = lis.splice(0,1,'py');
console.log(res);// ["js"]
console.log(lis);// ["py", "php", "ruby"]

// 例:删除索引1的'php'
var lis = ['js','php','ruby'];
var res = lis.splice(1,1);
console.log(res);// ["php"]
console.log(lis);// ["js", "ruby"]

// 例:删除'php','ruby'
var lis = ['js','php','ruby'];
var res = lis.splice(1,2);
console.log(res);// ["php","ruby"]
console.log(lis);// ["js"]

// 例:删除最后一个元素, 并插入'last'
var lis = ['js','php','ruby'];
var res = lis.splice(-1,1,'last');
console.log(res);// ["ruby"]
console.log(lis);// ['js','php','last'];

// 例:清空数组
// 1)
var lis = ['js','php','ruby'];
var res = lis.splice(0,lis.length);
console.log(res);// ['js','php','ruby']
console.log(lis);// [];

//2)
var lis = ['js','php','ruby'];
lis = [];
console.log(lis);// [];

// 扩展: 删除最后一个元素,并插入'last'
var lis = ['js','php','ruby'];
var res = lis.pop();
lis.push('last');
console.log(res);// ruby
console.log(lis);// ['js','php','last'];

// 扩展: 删除第一个元素,并插入'first'
var lis = ['js','php','ruby'];
var res = lis.shift();
lis.unshift('first');
console.log(res);// js
console.log(lis);// ['first','php','ruby'];


/***********************************************************************/
/**
 * 计算程序运行时间
 * @param string        打印标题
 * @return void  
*/
// console.time() , console.timeEnd()方法计算图片加载时间
var img = new Image;
document.querySelector('body').appendChild(img);
console.time("图片加载时间")
img.src = "http://www.mm4493.com/d/file/p/2016-01-04/50ef2506f4d3d9beabbc50a18805acb5.jpg";
img.onload = function ()
{
   console.timeEnd("图片加载时间")
}
//  图片加载时间: 1521967136005.865ms
// 统计开始跟结束写上 console.time(label) 和 console.timeEnd(label), 注意label 要一致.

/******************************浏览器调试工具console相关******************************************/

/**
 * 计算运行次数
 * @param mixed (int, string,array 都可以)   label   
 * @return void   
*/
console.count = function (label){}

// 例: 
var num = 3;
while(num--)
{
   console.count('inner');
}
console.count('out');

/* 结果 
inner: 1
inner: 2
inner: 3
out: 1
*/
//////////////////////////////////////////////////////////////////////////
// console.table(object|array)  输出表格形态的数据（在动态绘制的检查时用的较多）
// 例:将数组以表格的形式打印在控制台
console.table(["c","python","php","js"]);

//////////////////////////////////////////////////////////////////////////
/*
console.group(label) 和 console.groupEnd(label) 将 console 结果进行分组（分类及减少输出版面）（group = groupCollapsed 是一样的）
*/
// 例: 
 console.group('root');
 for(var i=3;i--;)
 {
    console.log(i)
 }

 console.groupEnd('root')
 console.log('100')

/*
说明: 循环里面的会在root 分组里 可以折叠,而100会在控制台最左显示,相当于root是第二级,100的是第一级,
 */
///////////////////////////////////////////////////////////////////////////
// console.trace() 检测方法的调用来源，超级赞
// 例:
function fun1()
{
   console.trace()
}

function fun(fn)
{
   if(fn)  fn();
}

/*
VM277:5 console.trace
fun1 @ VM277:5
fun @ VM277:10
(anonymous) @ VM280:1
 */
///////////////////////////////////////////////////////////////////////////
// 浏览器控制台输出内容
console.log(content)
console.info(content) 
console.error(content)// 输出错误信息
console.warn(content) // 输出警告信息
///////////////////////////////////////////////////////////////////////////
// 控制台输出自定义样式的log 
// 语法: console.log("%c要输出的内容","样式")
// 例:
console.log("%cHello","color:red");
///////////////////////////////////////////////////////////////////////////
/*
console.assert() 函数是一个调试中经常使用的断言工具函数
在JavaScript程序的开发和维护过程中，Assert(断言)是一个很好的用于保证程序正确性的特性。在具备调试工具的浏览器上，这一特性可以通过调用console.assert()来实现。比如在以下代码中，console.assert()语句保证cat对象的score变量值长度为3:
 */

function Cat(name,age,score)
{
   this.name = name;
   this.age = age;
   this.score = score;
}

var cat = new Cat('maomi',1,[6,2,5]);
console.assert(cat.score.length == 3,"Cat score must be three lengths");

// 说明:如果cat.score.length 长度不为3, 则会打印, 如果条件为真, 则什么也不打印,
// 例如:
var smallCat = new Cat("small",1,[2,1]);
//则会打印 VM462:9 Assertion failed: Cat score must be three lengths
console.assert(smallCat.score.length == 3,"Cat score must be three lengths");



/***********************************************************************/

