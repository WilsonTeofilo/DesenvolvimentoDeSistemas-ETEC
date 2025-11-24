oi = int(input("Digite o número: (não pode ser maior que 10) "))
hello = int(input("Digite 0 para dar start: "))

while hello == 0:

    if oi < 10:
        print(oi)
        break
    else:
        print("Número digitado está incorreto, é maior que 10.")
        hello = int(input("Digite 0 para tentar outro número: "))
        oi = int(input("Digite o número: "))
