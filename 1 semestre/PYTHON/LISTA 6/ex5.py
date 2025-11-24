
# mostrar_entre_maiores.py

# Leitura dos três números
n1 = int(input("Digite o primeiro número: "))
n2 = int(input("Digite o segundo número: "))
n3 = int(input("Digite o terceiro número: "))

# Coloca os números em uma lista e ordena
numeros = [n1, n2, n3]
numeros.sort()

# Pega os dois maiores números
menor = numeros[0]
meio = numeros[1]
maior = numeros[2]

# Mostra os números entre os dois maiores
print(f"Números entre {meio} e {maior} (exclusivo):")
for i in range(meio + 1, maior):
    print(i)
