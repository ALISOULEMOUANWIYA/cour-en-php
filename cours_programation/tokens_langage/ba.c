#include<stdint.h>
#include<stdlib.h>

void usage(){
    print("usage: ba <filename>\n");
    exit(1);
}

int main(int args, char **argv){
    if(args != 2){
        usage();
    }
}