
# ex10_numero_entre_5_e_10.py

# Leitura do número
num = int(input("Digite um número entre 5 e 10: "))

if num < 5 or num > 10:
    print("Número inválido! Deve estar entre 5 e 10.")
else:
    print(f"Você digitou: {num}")
