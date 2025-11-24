package com.mycompany.arrei;

import javax.swing.JOptionPane;

public class Arrei {

    public static void main(String[] args) {

        String vendedores[] = {
            "Marcelly", "Wilson", "Victor", "Matheus",
            "Pedro", "Richard", "Isabelle", "Guilherme",
            "Binho", "DaniJorei"
        };

        String produto[] = {
            "Calcinha", "Camiseta", "Touca", "Boné", "Sapatilha",
            "Jaqueta", "Sapato", "Camisa", "Sutiã", "Blazer"
        };

        double valores[] = {
            15, 50, 25.5, 33.5, 55.5,
            100, 100, 50, 90, 12.50
        };

        int vendas[] = new int[10];
        double caixa[] = new double[10];

        while (true) {
            // Mostra menu de escolha
            String opcao = JOptionPane.showInputDialog(
                "O que deseja comprar?\n"
                + "0 - Calcinha\n"
                + "1 - Camiseta\n"
                + "2 - Touca\n"
                + "3 - Boné\n"
                + "4 - Sapatilha\n"
                + "5 - Jaqueta\n"
                + "6 - Sapato\n"
                + "7 - Camisa\n"
                + "8 - Sutiã\n"
                + "9 - Blazer\n"
                + "10 - Sair"
            );

            int opcaoNum = Integer.parseInt(opcao);

            // Encerra se digitar 10
            if (opcaoNum == 10) {
                break;
            }

            // Verifica se o número é válido
            if (opcaoNum < 0 || opcaoNum >= produto.length) {
                JOptionPane.showMessageDialog(null, "Opção inválida!");
                continue;
            }
                vendas[opcaoNum]++;
                caixa [opcaoNum] += valores[opcaoNum];
                
                JOptionPane.showMessageDialog(null, "Vendedor : " +vendedores[opcaoNum] +"\n" + 
               "Total de peças vendidas: " +vendas[opcaoNum] + " Caixa de vendas: " + caixa [opcaoNum] );
                         
                
            
         
        }
        
        String Resumo = "Resumo de vendas \n \n";
        
        for (int cont = 0; cont < vendedores.length; cont++){
            Resumo += " \n Vendedor(a)  " +vendedores[cont] +" \n Total de vendas: " +vendas[cont] + 
                    " \n Valor vendido: " +caixa[cont] ; 
           
        }
         JOptionPane.showMessageDialog(null, Resumo);
    }
}