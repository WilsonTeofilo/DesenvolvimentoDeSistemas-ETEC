print ("numero digitado caso seja maior que 10 sera acrescentado + 5")
print ("se o numero digitado for menor ou igual a 10 vou somar 20")
print ("só vai ser mostrado o numero final caso todo o calculo for maior que 25")

n1 = int (input ("digite o 1 numero"))

if n1 > 10:
    n1 = n1 +5

if n1 <= 10:
    n1 = n1 +20

if n1 > 25:
      print (n1)
else:
    print ("resultado menor que 25")
