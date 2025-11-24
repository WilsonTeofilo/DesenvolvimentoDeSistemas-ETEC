
package com.mycompany.ex3;

import javax.swing.JOptionPane;

public class Ex3 {

    public static void main(String[] args) {
        
        double valores[] = new double [5];
        int codigo [] = new int [5];
                  String Codigo50 = "" ;
                  int Menor50= 0;
                  
                  double  sup100 = 0;
                  int divi100 = 0;
        
        for (int cont = 0; cont <valores.length; cont++){
            
      String CodigoTxt = JOptionPane.showInputDialog(null, "Digite o Código do produto.  ");
       String ValoresTxt = JOptionPane.showInputDialog(null, "Digite o valor do produto \n ex: 57.50 ");
       
      int CodigoNum = Integer.parseInt(CodigoTxt);
       double ValoresNum = Double.parseDouble(ValoresTxt);
       
       valores[cont] = ValoresNum;
       codigo[cont] = CodigoNum;

        }
        
        for(int contP = 0; contP <valores.length; contP++){
            if (valores[contP] <50){
   Menor50++;
            }
            
            else if (valores[contP] >=50 && valores[contP] <=100 ){
                Codigo50 += "\n Codigo de produtos entre 50 - 100 R$:\n" + codigo[contP];
            }
            
            else if (valores[contP] > 100){
                sup100 += valores[contP];
                divi100++;
              
                
            }
              else if (valores[contP] > 100){
                sup100 += valores[contP];
                divi100++;
              
                
            }
            
            
            
            
        }
         double mediaSup = sup100/divi100;
    String Resultado = " Produtos com valores menores que 50 R$: \n  : " + Menor50 + "\n" + Codigo50 + "\n  Média dos preço dos produtos a cima de 100 R$" 
            +mediaSup;
    
    
    
    JOptionPane.showMessageDialog(null, Resultado);
    
        
    }
}
