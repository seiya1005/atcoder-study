import java.util.*;
import java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[] points = Arrays.stream(sc.nextLine().split(" "))
                            .mapToInt(Integer::parseInt)
                            .toArray();

        int ans1 = points[0]*points[1];
        
        int ans2 = points[2]*points[3];
        
        if(ans1 < ans2) {
            System.out.println(ans2);
            
        }else{
            System.out.println(ans1);
            
        }

        sc.close(); // スキャナーを閉じる（必要に応じて）
    }
}

