
# ex9_decrescente_ate_1.py

# Leitura do número
num = int(input("Digite um número maior que 20: "))

if num <= 20:
    print("Número inválido! Deve ser maior que 20.")
else:
    print(f"Números entre {num} e 1 em ordem decrescente:")
    for i in range(num - 1, 0, -1):
        print(i)
