package teste2;

import java.util.Random;
import javax.swing.JOptionPane;
import java.util.Arrays;
public class Teste2 {
    public static void main(String[] args) {
        
                    Random quina = new Random ();
                                            Random MegaSena = new Random ();
                                                        Random DuplaSena1 = new Random ();
                                                                    Random DuplaSena2 = new Random ();
                                                                                Random Lotomania = new Random ();
                                                                                
                                                                                
       int[] QuinaVetor = new int[5];
        int[] MegaVetor = new int [6];  
         int[] DuplaVetor1 = new int [6];  
          int[] DuplaVetor2 = new int [6] ;
           int[] LotomaniaVetor = new int [50];  
          
        
        
           JOptionPane.showMessageDialog(null,"CONSULTE O RESULTADO DA MEGACENA.");

           
         
         String EscolhaLetter =  JOptionPane.showInputDialog(null, "1 - Quina \n"
                 + " 2 - Mega-Sena \n "
                 + "3 - Dupla Sena \n "
                 + "4 - Lotomania \n"
                 + "5 - Sair da consulta \n", "N DE QUAL JOGO DESEJA CONFERIR",-1 );
         
         int EscolhaNum = Integer.parseInt(EscolhaLetter);
         
         if (EscolhaNum== 1){

  
  
    for (int contQ=0; contQ<5; contQ++ ){
          int quinaAle = quina.nextInt(80) + 1;
     QuinaVetor[contQ] = quinaAle;
 
    }
    
        JOptionPane.showMessageDialog(null, "Resultado da Quina :"+ Arrays.toString(QuinaVetor));
  
  
         }
    }
    
}
