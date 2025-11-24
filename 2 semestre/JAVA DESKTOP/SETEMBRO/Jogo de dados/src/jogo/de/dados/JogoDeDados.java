package jogo.de.dados;
import java.util.Scanner;
import java.util.Random;

public class JogoDeDados {

    public static void main(String[] args) {
        Scanner scan = new Scanner (System.in);
         Random num = new Random(); 
         
         int jogador1 =0;
         int jogador2 =0;
         int jogadas1 = 1;
         int jogadas2 = 1;
         
         
   
       
       while (jogadas1 <=3 && jogadas2 <=3){
           System.out.println("Jogador 1, digite 1 para jogar o dado!.");
           
           int jogar1 = scan.nextInt();
           
           if (jogar1==1){
                          int dado = num.nextInt(6-(1-1)) +1;;
                          jogador1 += dado;
                          jogadas1++;
            System.out.println("PLAYER1 OBTEVE: " + dado +" PONTOS");
            System.out.println("Pontuação TOTAL Jogador 1: " + jogador1);
           }
           
           System.out.println("Jogador 2, Digite 1 para jogar o dado!");
          int jogar2 = scan.nextInt();
          
           if (jogar2 == 1){
                          int dado = num.nextInt(6-(1-1)) +1;;
                          jogador2 += dado;
                          jogadas2++;
            System.out.println("PLAYER2 OBTEVE: " + dado +" PONTOS");
            System.out.println("Pontuação TOTAL Jogador 2: " + jogador2);
                  
                  }
          
          
       }

    }
    
}
