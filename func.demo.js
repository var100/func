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


/***************************************************************/
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

/***************************************************************/

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

/***************************************************/

