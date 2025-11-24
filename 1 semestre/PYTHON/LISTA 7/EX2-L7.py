# ordenar_cinco_numeros.py

numeros = []

for i in range(5):
    num = float(input(f"Digite o {i+1}º número: "))
    numeros.append(num)

numeros.sort()

print("\nNúmeros em ordem crescente:")
for num in numeros:
    print(num)
