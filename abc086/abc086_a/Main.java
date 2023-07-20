import java.util.*;
import java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[] points = Arrays.stream(sc.nextLine().split(" "))
                            .mapToInt(Integer::parseInt)
                            .toArray();

        int ans = points[0]*points[1];
        
        if(ans % 2 == 0) {
        System.out.println("Even");
        
        }else{
        System.out.println("Odd");
        }
        

        sc.close(); // スキャナーを閉じる（必要に応じて）
    }
}

