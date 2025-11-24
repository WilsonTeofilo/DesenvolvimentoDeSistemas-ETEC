# exemplo09_com_um_loop.py

notas = []
media = 0

for i in range(4):
    nota = float(input(f"Digite a nota {i+1}: "))
    notas.append(nota)
    media += nota

media /= 4

print("\nMédia:", media)
print("Notas:")
for nota in notas:
    print(nota)
