def fizzbuzz(n):
	list = []
	for i in range(1, n+1):
		if i % 15 == 0:
			list.insert(i, 'FizzBuzz') 
		elif i % 5 == 0:
			list.insert(i, 'Buzz') 
		elif i % 3 == 0:
			list.insert(i, 'Fizz') 
		else:
			list.insert(i, i)
	return list

def main():
	print(", ".join(map(str, fizzbuzz(31))))

if __name__ == "__main__":
	main()