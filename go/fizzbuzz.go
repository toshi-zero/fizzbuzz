package main

import(
	"fmt"
	"strconv"
	)

func fizzbuzz(num int) string{

	fizz := num % 3
	buzz := num % 5

	if fizz == 0 && buzz == 0 {
	    return "fizzbuzz"
	} else if fizz == 0 {
		return "fizz"
	} else if buzz == 0 {
		return "buzz"
	} else {
		return strconv.Itoa(num)
	}
}

func main() {
	for i := 1; i <= 31; i++ {
		fmt.Println(fizzbuzz(i))
	}

}