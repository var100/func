// 字母转大写
func strtolower(str string) string {
	var s string
	for _, val := range str {
		if val >= 'a' && val <= 'z' {
			// 如果是小写就转大写
			s += string(val - 32) //rune 转string
		} else {
			// 如果是大写,忽略
			s += string(val) //rune 转string
		}

	}
	return s

}

fmt.Println(strtolower("Hello  GO语言!"))   //HELLO  GO语言!

// 子母转小写
func strtoupper_1(str string) string {
	var s string
	for _, val := range str {
		if val >= 'A' && val <= 'Z' {
			// 如果是大写就转小写
			s += string(val + 32) //rune 转string
		} else {
			// 如果是小写,忽略
			s += string(val) //rune 转string
		}

	}
	return s

}

fmt.Println(strtoupper_1("Hello  GO语言!")) //hello  go语言!

// 子母转小写
func strtoupper_2(str string) string {
	var s string
	for _, val := range str {
		if val >= 'A' && val <= 'Z' {
			// 如果是大写就转小写
			s += string(val | 32) //rune 转string
		} else {
			// 如果是小写,忽略
			s += string(val) //rune 转string
		}

	}
	return s

}

fmt.Println(strtoupper_1("Hello  GO语言!")) //hello  go语言!

// 字母小写转大写 大写转小写
func reval_1(str string) string {
	var s string
	for _, val := range str {
		if val >= 'a' && val <= 'z' {
			s += string(val - 32)
		} else if val >= 'A' && val <= 'Z' {
			s += string(val + 32)
		} else {
			s += string(val)
		}
	}
	return s
}

fmt.Println(reval_1("Hello  GO语言!")) //hELLO  go语言!

// 字母小写转大写 大写转小写
func reval_2(str string) string {
	var s string
	for _, val := range str {
		if (val >= 'a' && val <= 'z') || (val >= 'A' && val <= 'Z') {
			s += string(val ^ 32)
		} else {
			s += string(val)
		}
	}
	return s
}

fmt.Println(reval_1("Hello  GO语言!")) //hELLO  go语言!

// strrev 反转字符串
func strrev(str string) string {
	var s []rune = []rune(str)
	var content string
	for i := len(s) - 1; i > -1; i-- {
		content += string(s[i])
	}
	return content
}
str := strrev("1234中国人")
fmt.Println(str)//人国中4321


