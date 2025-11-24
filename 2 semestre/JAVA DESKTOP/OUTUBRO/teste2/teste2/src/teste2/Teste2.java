package teste2;

import java.util.Random;
import javax.swing.JOptionPane;
import java.util.Arrays;
public class Teste2 {
    public static void main(String[] args) {
        
                    Random quina = new Random ();
                                            Random MegaSena = new Random ();
                                                        Random DuplaSena = new Random ();
                                                                    Random DuplaSena2 = new Random ();
                                                                                Random Lotomania = new Random ();
                                                                                
                                                                                
       int[] QuinaVetor = new int[5];
        int[] MegaVetor = new int [6];  
         int[] DuplaVetor1 = new int [6];  
          int[] DuplaVetor2 = new int [6] ;
           int[] LotomaniaVetor = new int [20];  
          
        
        
           JOptionPane.showMessageDialog(null,"CONSULTE O RESULTADO DA MEGACENA.");
  
           
         
         String EscolhaLetter =  JOptionPane.showInputDialog(null, "1 - Quina \n"
                 + " 2 - Mega-Sena \n "
                 + "3 - Dupla Sena \n "
                 + "4 - Lotomania \n"
                 + "5 - Sair da consulta \n", "N DE QUAL JOGO DESEJA CONFERIR",-1 );
         
         int EscolhaNum = Integer.parseInt(EscolhaLetter);
         //quina
         
         
         if (EscolhaNum== 1){ 
    for (int contQ=0; contQ<5; contQ++ ){
          int quinaAle = quina.nextInt(80) + 1;
     QuinaVetor[contQ] = quinaAle;
 
    }
    
        JOptionPane.showMessageDialog(null, "Resultado da Quina :"+ Arrays.toString(QuinaVetor));
  
  
         }
               //Mega
         else if (EscolhaNum== 2){
    for (int contM=0; contM<6; contM++ ){
          int MegaAle = MegaSena.nextInt(60) + 1;
     MegaVetor[contM] = MegaAle;
 
    }
    
        JOptionPane.showMessageDialog(null, "Resultado da Mega :"+ Arrays.toString(MegaVetor));
  
  
         }
         
                        //duplaS
         else if (EscolhaNum== 3){
    for (int contD=0; contD<6; contD++ ){
          int DuplaAle = DuplaSena.nextInt(50) + 1;
          int DuplaAle2 = DuplaSena2.nextInt(50) +1;
     DuplaVetor1[contD] = DuplaAle;
       DuplaVetor2[contD] = DuplaAle2;
 
    }
    
        JOptionPane.showMessageDialog(null, "Resultado da Dupla Sena :"+ Arrays.toString(DuplaVetor1) +" segunda tabela:  " + Arrays.toString(DuplaVetor2));
  
  
         }
         
                       //LotoM
         else if (EscolhaNum== 4){
    for (int contL=0; contL<20; contL++ ){
          int LotoAle = Lotomania.nextInt(100) + 1;
      
     LotomaniaVetor[contL] = LotoAle;

    }
    
        JOptionPane.showMessageDialog(null, "Resultado da Lotomania :"+ Arrays.toString(LotomaniaVetor));
  
  
         }
         
         
         
         
         
         
    }
    
}
