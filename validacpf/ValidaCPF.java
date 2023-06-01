/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package com.mycompany.validacpf;

import java.util.Scanner;

/**
 *
 * @author Rayanne
 */
public class ValidaCPF {

        public static boolean validaCPF(String cpf) { //boolean so retorna verdadeiro ou falso
        cpf = cpf.replaceAll("\\D", ""); //remover todos os não digitos
        
        if (cpf.length() != 11) { 
            return false; //o cpf tem 11 digitos.
        }
        
        boolean allDigitsAreEqual = true; //irá checar se todos os digitos são iguais
        for (int i = 1; i < 11; i++) {
            if (cpf.charAt(i) != cpf.charAt(0)) {
                allDigitsAreEqual = false; //caso não sejam, o for irá parar e continuar com a validação
                break;
            }
        }
        if (allDigitsAreEqual) {
            return false; //caso seja true no for anterior
        }
        
        // calculo do primeiro numero de verificaçao (está multiplicando os 9 primeiros digitos do cpf, respectivamente, por numeros de 10 a 2)
        int sum = 0;
        for (int i = 0; i < 9; i++) {
            sum += (10 - i) * (cpf.charAt(i) - '0');
        }
        int digit1 = 11 - (sum % 11);
        if (digit1 > 9) {
            digit1 = 0;
        }
        
        // calculo do primeiro numero de verificaçao (está multiplicando os 10 primeiros digitos do cpf(incluindo o do calculo anterior), respectivamente, por numeros de 11 a 2)
        sum = 0;
        for (int i = 0; i < 10; i++) {
            sum += (11 - i) * (cpf.charAt(i) - '0');
        }
        int digit2 = 11 - (sum % 11);
        if (digit2 > 9) {
            digit2 = 0;
        }
        
        return (digit1 == cpf.charAt(9) - '0') && (digit2 == cpf.charAt(10) - '0'); //o - 0 define se é igual ou não ao numero fornecido
    }
    
        public static void main(String[] args) {
        Scanner read = new Scanner(System.in);

        System.out.print("Insira seu cpf: ");
        String cpf = read.nextLine(); //vai ler o cpf e rodar a validação

        if (validaCPF(cpf)) { //irá retornar o valor do cpf apos a validação (se true
            System.out.println(cpf + " é um cpf válido");
        } else {
            System.out.println(cpf + " não é um cpf válido"); //se false
        }

        read.close();
    }
}