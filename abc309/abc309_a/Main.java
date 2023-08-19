import java.util.*;
import java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[] points = Arrays.stream(sc.nextLine().split(" "))
                            .mapToInt(Integer::parseInt)
                            .toArray();

        if(points[1] - points[0] == 1 && points[0]%3 != 0 ) {
            System.out.println("Yes");
            
        }else{
            System.out.println("No");
            
        }

        sc.close(); // スキャナーを閉じる（必要に応じて）
    }
}

