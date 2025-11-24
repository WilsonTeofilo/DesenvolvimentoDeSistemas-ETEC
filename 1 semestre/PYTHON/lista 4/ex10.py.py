
# verifica_resultado_par.py

# Leitura dos dois números
num1 = float(input("Digite o primeiro número: "))
num2 = float(input("Digite o segundo número: "))

# Identificar o menor e o maior
menor = min(num1, num2)
maior = max(num1, num2)

# Operações: menor * 10 e maior / 2
menor_mult = menor * 10
maior_div = maior / 2

# Soma os resultados
resultado = menor_mult + maior_div

# Verifica se o resultado é par ou ímpar
if resultado % 2 == 0:
    print("O resultado é par.")
else:
    print("O resultado é ímpar.")
