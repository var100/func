
/**
 * 根据索引位置的前面给数组插入一个元素, 支持负数, 注意是前插, 不是后插
 * @param array    arr   数组
 * @param int      index 索引位置
 * @param mixed    val   要插入的值
 * @return array   返回输入的数组, 以便链式操作
*/
function insert(arr,index,val)
{
   
   arr.splice(index,0,val);
   return arr;
}

// 添加到Array 原型对象
/**
 * 根据索引位置的前面给数组插入一个元素, 支持负数, 注意是前插, 不是后插
 * @param int      index 索引位置
 * @param mixed    val   要插入的值
 * @return array   当前数组对象,以便链式操作
*/
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

/******************************************************************************/

/**
 * 根据索引位置删除数组的一个元素
 * @param array    arr 数组
 * @param int      index    索引位置
 * @return mixed   删除成功返回删除的值,失败返回false
*/
function del(arr,index)
{
   // 返回删除的元素
   if(arr[index] === undefined && index>-1) return false;
   return arr.splice(index,1).pop();

}

// 添加到数组原型对象上
/**
 * 根据索引位置删除数组的一个元素
 * @param  int  index    索引位置
 * @return mixed   删除成功返回删除的值,失败返回false
*/
Array.prototype.del = function (index)
{
   // 返回删除的元素
   if(this[index] === undefined && index>-1) return false;
   return this.splice(index,1).pop();

}

// 例:删除第一个元素'php'
var lis = ['php','js','py'];
var res = del(lis,0);
console.log(res); // php
console.log(lis); // ['js','py']

// 例:删除第二个元素 'js'
var lis = ['php','js','py'];
var res = del(lis,1);
console.log(res); // js
console.log(lis); // ['php','py']

// 例:删除最后一个元素 'py'
var lis = ['php','js','py'];
var res = del(lis,-1);
console.log(res); // py
console.log(lis); // ['php','js']

// 例:删除一个不存在的元素 返回false
var lis = ['php','js','py'];
var res = del(lis,11);
console.log(res); // false
console.log(lis); // ['php','js','py']

// 删除最后一个元素还可以用 arr.pop()
// 例: 
var lis = ['php','js','py'];
var res = lis.pop();
console.log(res); // py
console.log(lis); // ['php','js']
/*********************************************************************************/

/**
 * 根据值删除数组一个元素
 * @param array    arr   数组
 * @param mixed    val   查找的值
 * @param mixed    dir   查找方向,大于0为从左向右, 小于0为从右向左
 * @return mixed   删除成功, 返回索引,失败(找不到)返回false
*/

function remove(arr,val,dir)
{
  var dir = dir ? dir : 1;// 默认为正向
  var index = arr.indexOf(val);
  if(index == -1) return false;
  if(dir < 0) index = arr.lastIndexOf(val);
  arr.splice(index,1);
  return index;
}

Array.prototype.remove = function(val,dir)
{
   var dir = dir ? dir : 1;// 默认为正向
   var index = this.indexOf(val);
   if(index == -1) return false;
   if(dir < 0) index = this.lastIndexOf(val);
   this.splice(index,1);
   return index;
}

// 例:删除第一个元素"php"
var lis = ["php","python","js","php"];
var index = lis.remove("php");
console.log(index);  // 0
console.log(lis);    // ["python","js","php"]

// 例:删除最后一个元素"php"
var lis = ["php","python","js","php"];
var index = lis.remove("php",-1);
console.log(index);  // 3
console.log(lis);    // ["php",python","js"]

// 删除第二个元素 "python"
var lis = ["php","python","js","php"];
var index = lis.remove("python");
console.log(index);  // 1
console.log(lis);    // ["php",js","php"]

// 引用类型,传值删除不了
var lis = ["php",["a"],"js","php"];
var index = lis.remove(["a"]);
console.log(index);  // false
console.log(lis);    // ["php", Array(1), "js", "php"]

// 引用类型,传引用,可以删除
var lis = ["php",["a"],"js","php"];
var index = lis.remove(lis[1]);
console.log(index);  // 1
console.log(lis);    // ["php", "js", "php"]

/***********************************************************************/
/**
 * 删除数组中所有出现的该元素
 * @param array    arr   数组
 * @param mixed    val   查找的值
 * @return number int    删除的元素个数,如果没有就是0
*/

function removeAll(arr,val)
{
   var index;
   var count = 0;
   while((index=arr.indexOf(val)) != -1)
   {
      arr.splice(index,1);
      count++;
   }
   return count;

}

Array.prototype.removeAll = function(val)
{
   var index;
   var count = 0;
   while((index=this.indexOf(val)) != -1)
   {
      this.splice(index,1);
      count++;
   }
   return count;
}

// 优化后, 提高运行速度
function removeAll(arr,val)
{
   var index;
   var count = 0;
   for(var index=arr.length;index--;)
   {
      if(arr[index]==val) arr.splice(index,1) && ++count;
      
   }
   return count;

}

Array.prototype.removeAll = function(val)
{
   var index;
   var count = 0;
   for(var index=this.length;index--;)
   {
      if(this[index]==val) this.splice(index,1) && ++count;
      
   }
   return count;
}

// 例:删除所有元素"php"
var lis = ["php","python","js","php"];
var index = lis.removeAll("php");
console.log(index);  // 2
console.log(lis);    // ["python","js"]

// 例:删除一个不存的元素
var lis = ["php","python","js","php"];
var index = lis.removeAll("java");
console.log(index);  // 0
console.log(lis);    // ["php","python","js","php"]

/***********************************************************************/
/**
 * 测试函数运行时间    单位:毫秒
 * @param function    测试的函数
 * @return void       直接打印结果
*/
function testFunctionRunTime(fn) {
　　var start = new Date().getTime();
　　if (fn) fn();
　　var end = new Date().getTime();
　　console.log("%c "+(end-start)+"ms","color:red;font-size:14px");
}

// 例: 
testFunctionRunTime(function(){
   for(j=0,i=0;i<99999;i++)
   {
      j++
   }
})

// 结果打印 3ms

// 扩展: 计算图片加载时间
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

/******************************************************************************/
// cookie相关
/**
 * 获取cookie
 * @param string  key 
 * @return mixed  key对应的值
*/
function getCookie(key)
{
	var cookie = document.cookie,
	cookieList = cookie.split('; '),
	index;
	for(var i=0;i<cookieList.length;i++)
	{
		index = cookieList[i].indexOf('=');
		if(cookieList[i].substr(0,index) === key)
			return decodeURIComponent(cookieList[i].substr(index+1));
		
	}
	return null;
}

/**
 * 设置cookie
 * @param string  key 
 * @param mixed   value   
 * @param int     timeSecond   有效期 单位:秒
 * @return void
*/
function setCookie(key,value,timeSecond)
{
	var timeSecond = timeSecond ? timeSecond : 3600*24*365;
	document.cookie = key+'='+encodeURIComponent(value)+'; max-age='+timeSecond+'; path=/';
}

/**
 * 根据key移除cookie中的值
 * @param string  key 
 * @return void  
*/
function removeCookie(key)
{
	document.cookie = key+'=; max-age=-1; path=/';
}

/**
 * 清空所有cookie
 * @return void
*/
function clearCookie()
{
	var cookie = document.cookie,
	cookieList = cookie.split('; '),
	index;
	for(var i =0;i<cookieList.length;i++)
	{
		index = cookieList[i].indexOf('=');
		document.cookie = cookieList[i].substr(0,index) + '=; max-age=-1; path=/';
	}

}

/**
 * 获取所有cookie
 * @return mixed(array/null)  所有cookie
*/
function getAllCookie()
{
	var cookie = decodeURIComponent(document.cookie),
	cookieList = [],
	index;
	cookie = cookie ? cookie.split('; ') : null;
	if(!cookie) 
		return cookie;
	for(var i = 0; i < cookie.length; i++)
	{
		index = cookie[i].indexOf('=');
		cookieList[cookie[i].substr(0,index)] = cookie[i].substr(index+1);
	}
	return cookieList;
}

/******************************************************************************/
/*
需求:
签到奖励 任务描述:   
某网站为了赢取访问量，现推出连续签到送积分活动，赚取积分的规则: 
第一天签到给1积分; 
第二天和第三天签到每天给2积分,
第四天第五天和第六天签到每天给3积分,
第七天，第八天，第九天和第十天签到每天给4......以比类推。 
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15
1 2 2 3 3 3 4 4 4 4  5  5  5  5  5 
*/
/**
 * 1,2,2,3,3,3,4,4,4,4,5,5,5,5,5
 * 根据连续签到天数计算今天登录送多少积分
 * @param  int day
 * @return int 积分
*/
function signinIntegral(day)
{
	return Math.floor(Math.sqrt(2*day)+ 1/2)
}

/**
 * 获取指定日期的上一天
 * @parem string date 日期格式为 "20180423"
 * @return string 上一天 格式为 "20180422"
*/
function getLastDay(date)   
    {   
        // var   today=new   Date()
        var today = new Date(date.substr(0,4) + "-" + date.substr(4,2) + "-" + date.substr(6))
        var   yesterday_milliseconds = today.getTime() - 1000*60*60*24

        var   yesterday = new   Date()   
        yesterday.setTime(yesterday_milliseconds)
        var strYear = yesterday.getFullYear()
        var strDay = yesterday.getDate()
        var strMonth = yesterday.getMonth() + 1

        if(strMonth < 10)      
            strMonth = "0" + strMonth
        if(strDay < 10)
        	strDay = "0" + strDay
        return strYear + strMonth + strDay

    }

// 模拟数据
var lis = [
	"20180422",
	"20180421",
	"20180420",
	"20180418",
]

/**
 * [day 获取今天是连续签到第几天]
 * @param  {[array]} data        [某用户签到列表,按时间desc提前排好序]
 * @param  {[string]} currentDate [当前时间 例:"20180423"]
 * @return {[int]}             [连续签到天数]
 * 补充:数据库设计 id,user_id,add_time
 */
function day(data,currentDate)
{
	var num = 0, lastDate;
	for(var i=0;i<data.length;i++)
	{
		lastDate = data[i]
		if(lastDate != getLastDay(currentDate))
			return num
		num++
		currentDate = lastDate
		
	}
	return num
}


/******************************************************************************/
