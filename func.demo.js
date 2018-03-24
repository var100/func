// 在数组中指定索引位置插入元素
// arr.splice(index,length,insertVal)
// 例: 在索引0, 'php'前面插入'c'
var arr = ['php','js','python']
arr.splice(0,0,'c');
console.log(arr); // (4) ["c", "php", "js", "python"]

// 说明: splice 有返回值, 返回类型 object 中的数组, 可能是空数组,或者是移出的数组['移出的元素']
// index 索引支持负数参数, 表示倒数




