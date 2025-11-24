
# ex8_mostrar_pares_ate_20.py

# Leitura do número
num = int(input("Digite um número menor que 5: "))

if num >= 5:
    print("Número inválido! Deve ser menor que 5.")
else:
    print(f"Números pares entre {num} e 20:")
    for i in range(num + 1, 21):
        if i % 2 == 0:
            print(i)
