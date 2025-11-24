
package com.mycompany.ex2;

import javax.swing.JOptionPane;

public class Ex2 {

    public static void main(String[] args) {
      
        int soma = 0;
           int a[] = {5,4,2,2,1};
           int b [] = {1,5,3,5,7};
 
for (int cont = 0; cont < a.length; cont++){
 soma += a[cont] - b[b.length -1 -cont];
}
        JOptionPane.showMessageDialog(null, "Resultado :" + soma); 
        
  

}
}

