n1 = int(input("Digite o n1 (maior que 10): "))
n2 = int(input("Digite o n2 (menor que 5): "))

if n1 > 10:
    print("O número n1 é: " + str(n1))
else:
    print("n1 não é maior que 10, tente novamente.")
    while n1 <= 10:
        n1 = int(input("Digite novamente o n1 (maior que 10): "))
        if n1 > 10:
            print("O número n1 é: " + str(n1))
          


if n2 < 5:
    print("O número n2 é: " + str(n2))
else:
    print("n2 não é menor que 5, tente novamente.")
    while n2 >= 5:
        n2 = int(input("Digite novamente o n2 (menor que 5): "))
        if n2 < 5:
            print("O número n2 é: " + str(n2))
            break
