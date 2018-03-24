
// 说明:为Array原型对象添加insert方法
// 使用:arr.insert(index,val);
// index int 要添加元素的索引位置 支持负数,表示倒数, 注意是前插入, 而不是后插入
// val mixed 要添加的元素 

// 函数
function insert(arr,index,val)
{
   
   arr.splice(index,0,val);
   return arr;
}

// 添加到Array 原型对象
Array.prototype.insert = function (index,val)
{
   this.splice(index,0,val);
   return this;
}

// 例: 在js前面插入 'python' 得到数组 ['php','python','js','ruby']
lis = ['php','js','ruby']
lis.insert(1,'python')

// 例: 在ruby 前面插入 'java', 得到数组 ['php','js','java','ruby']
lis = ['php','js','ruby']
lis.insert(-1,'java')

// 上面还可以是 
lis = ['php','js','ruby']
lis.insert(2,'java')

// 如果想在数组最后插入, 请使用 arr.push(val)
// 例:
lis = ['php','js','ruby']
lis.push('last'); // 4
lis // ['php','js','ruby','last']

// 如果想在数组头插入, 请使用arr.unshift(val)
// 例:
lis = ['php','js','ruby']
lis.unshift('first'); //4
lis // ['first','php','js','ruby']

/****************************************************************************************/

说明:为Array原型对象添加del方法
使用:arr.del(index);
index int 要删除元素的索引位置 支持负数,表示倒数

// 函数
function del(arr,index)
{
    
   // 返回删除的元素 
   return arr.splice(index,1).pop();
  
}

// 添加到Array 原型对象
Array.prototype.del = function (index)
{
   return this.splice(index,1);
  
}





