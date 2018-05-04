// 字母转大写
func strtolower(str string) string {
	var s string
	for _, val := range str {
		if val >= 'a' && val <= 'z' {
			// 如果是小写就转大写
			s += string(val - int32(32)) //rune 转string
		} else {
			// 如果是大写,忽略
			s += string(val) //rune 转string
		}

	}
	return s

}

// 子母转小写
func strtoupper(str string) string {
	var s string
	for _, val := range str {
		if val >= 'A' && val <= 'Z' {
			// 如果是大写就转小写
			s += string(val + int32(32)) //rune 转string
		} else {
			// 如果是小写,忽略
			s += string(val) //rune 转string
		}

	}
	return s

}
