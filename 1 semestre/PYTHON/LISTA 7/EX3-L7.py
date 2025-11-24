# medias_de_cinco_alunos.py

alunos = []

for i in range(5):
    notas = []
    print(f"\nAluno {i+1}:")
    for j in range(4):
        nota = float(input(f"Digite a nota {j+1}: "))
        notas.append(nota)
    media = sum(notas) / 4
    alunos.append((notas, media))

print("\nResumo das notas e médias:")
for idx, (notas, media) in enumerate(alunos, start=1):
    print(f"Aluno {idx} - Notas: {notas} - Média: {media:.2f}")
