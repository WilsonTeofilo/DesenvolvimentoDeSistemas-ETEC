n1 = int (input(" digite o primeiro numero, vai ser somado com o segundo"))
n2 = int (input(" digite o segundo numero, vai ser somado com o primeiro"))
n3 = int (input(" digite o terceiro numero, vai ser subtraido com o quarto"))
n4 = int (input(" digite o quarto numero, vai ser subtraido com o terceiro"))
print ("o resultado de n1 + n2 e n3 - n4 vai ser somado")
print (" caso o resultado seja maior que dez exbiir msg e caso menor ou =  10 mema fita")

soma = n1 +n2
sub = n3 - n4
total = soma + sub


if total <= 10:
    print ("resultado menor ou igual a 10")
    print (total)


else:
    print ("resultado maior que 10")
    print (total)

