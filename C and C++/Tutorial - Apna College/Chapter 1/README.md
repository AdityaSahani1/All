# Variable
`Definition :- Variable is the name of a memory location which Stores some Data.`
*Rules :-*
a. Variables are case sensitive
b. 1st character is alphabet or '_'
c. no comma/blank space
d. No other symbol other than '_'

<!-- Example -->
```c
# include <stdio.h>

int main() {
    // Valid Rules
    // Rule a
    int num = 25;
    int NUM = 19;
    float pi_ = 3.14;
    num 64; // Updating Value in num from 25 to 64
    // Rule b
    char star = "*";
    char _star = "**";
    char 1star = "Error!";
    // Rule c
    char txt, = "Error!";
    char te xt = "Error!";
    // Rule d
    char -hello = "Hello World! Error";
    char greeti*ng = "Good Morning! Error";
    return 0;
}