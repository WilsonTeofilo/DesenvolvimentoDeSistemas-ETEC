package javaapplication1;

import java.util.Random;
import java.util.Scanner;

public class JavaApplication1 {
    public static void main(String[] args) {
        Scanner scan = new Scanner (System.in);
        Random num = new Random(); 
        
        System.out.println("~~ ADIVINHE O NÚMERO QUE ESTOU PENSANDO, DE 1 - 20");
       int usuario=0;
        int valor = num.nextInt(20-(1-1)) +1;;
   
        while (valor != usuario){
          
          usuario = scan.nextInt();
        
        if (usuario == valor){
            System.out.println("Você acertou o número!!");
            System.out.println("N digitado : " +usuario + " numero que pensei: " +valor);
        }
        
        else if (usuario <valor){
            System.out.println("Seu número está perto, porém ta muito baixo.. tente novamente, mais alto.");
        }
        
        else if (usuario >valor){
            System.out.println("Belo chute, porém você chutou um pouco alto, tente novamente!.");
        }
     }
      }
      
}

