
package alunosjoption;

import javax.swing.JOptionPane;

public class AlunosJoption {
    public static void main(String[] args) {

        JOptionPane.showMessageDialog(null, "Calculadora de média de nota de alunos!");
 String x1= JOptionPane.showInputDialog(null, "Digite a primeira nota", "1 NOTA", 1);
        String x2 = JOptionPane.showInputDialog(null, "Digite a Segunda nota", "2 NOTA", 1);
     String x3 =   JOptionPane.showInputDialog(null, "Digite a terceira nota","3 NOTA", 1 );
     
     double z1 = Double.parseDouble(x1);
          double z2 = Double.parseDouble(x2);
          double z3 = Double.parseDouble(x3);
          
      
          JOptionPane.showMessageDialog(null, (z1+z2+z3)/3);
     
     
 
    }
    
}
