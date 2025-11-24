package teste;

import javax.swing.JOptionPane;

public class Teste {
    public static void main(String[] args) {
       
       
        

        JOptionPane.showMessageDialog(null,"Bem vindo a calculadora de IMC", "Vamos descobrir se estás saudável", 1);
String AlturaLetra = JOptionPane.showInputDialog(null,"Digite sua altura. nesse modelo :(1.75);");
String PesoLetra = JOptionPane.showInputDialog(null, "Digite seu peso (numero inteiro )" );

//conversão agr :

int PesoNum = Integer.parseInt(PesoLetra);
double AlturaNum = Double.parseDouble(AlturaLetra);


//resultados iniciais.

 double alturaTotal = AlturaNum*2;
 double Resultado = PesoNum / alturaTotal ;

 
 


if (Resultado <=18.5){
   String resultadoFormatado = String.format("%.2f", Resultado);
    JOptionPane.showMessageDialog(null, "Abaixo do peso: " + resultadoFormatado  );
    
}

else if (Resultado >=18.5 || Resultado <=24.99){
   String resultadoFormatado = String.format("%.2f", Resultado);
    JOptionPane.showMessageDialog(null, "Peso Normal: " + resultadoFormatado  );
    
}

else if (Resultado ==25 || Resultado <=30){
   String resultadoFormatado = String.format("%.2f", Resultado);
    JOptionPane.showMessageDialog(null, "A cima do peso: " + resultadoFormatado  );
    
}


else  {
   String resultadoFormatado = String.format("%.2f", Resultado);
    JOptionPane.showMessageDialog(null, "Obeso: " + resultadoFormatado  );
    
}

 

    }
    
}
