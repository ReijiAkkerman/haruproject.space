#include <stdio.h>

int main(void) {
    for(int i = 0; i < 5; i++) {
        switch(i) {
            // case 0:
            //     printf("some text\n");
            //     break;
            // case 1:
            //     continue;
            // case 2:
            //     printf("current value of i = %d\n", i);
            //     break;
            // case 3:
            //     continue;
            // case 4:
            //     printf("some text\n");
            //     break;
            // case 0: case 4:
            //     printf("some text\n");
            //     break;
            // case 1: case 3:
            //     continue;
            // case 2:
            //     printf("current value of i = %d\n", i);
            //     break;
            case 1 ... 3:
                printf("some text\n");
                break;
            case 0: case 4:
                continue;
        }
    }
    return 0;
}