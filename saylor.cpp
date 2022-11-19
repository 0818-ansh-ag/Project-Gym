#include <iostream>
2  using namespace std;
3  
4  int main()
5  {
6    int n, i;
7    bool isPrime = true;
8    cout << "Enter a positive integer: ";
9    cin >> n;
10  for(i = 2; i <= n / 2; ++i)
11 {
12     if(n % i == 0)
13      {
14          isPrime = false;
15          break;
16     }
17  }
18  if (isPrime)
19      cout << "This is a prime number";
20  else
21      cout << "This is not a prime number";
22  return 0;
23 }