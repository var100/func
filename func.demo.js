/**
 * 元素指定索引位置删除指定数量元素,再插入新的元素,注意是前插
 * @param int      index    索引位置,支持负数
 * @param int      len      要删除的元素长度
 * @param mixed    val      要插入的值
 * @return array   删除的元素
*/
Array.prototype._splice = function (index,len,val){};

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




