

# Dados do usuário fictício
usu_parmesao = ["wilson", "12345-6", "123", 1000.49]

# Tela de login
print("🟦 Bem-vindo ao Caixa Eletrônico 🟦")

tentativa = 0
logado = False

while tentativa < 3:
    conta_digitada = input("Digite sua conta: ")
    senha_digitada = input("Digite sua senha: ")

    if conta_digitada == usu_parmesao[1] and senha_digitada == usu_parmesao[2]:
        print(f"Olá, {usu_parmesao[0]}! Login realizado com sucesso.")
        logado = True
        break
    else:
        print("Conta ou senha incorretos. Tente novamente.")
        tentativa += 1

if not logado:
    print("Número de tentativas excedido. Tente mais tarde.")
else:
    while True:
        print("\n Menu do Caixa Eletrônico")
        print("1 - Consultar Saldo")
        print("2 - Realizar Saque")
        print("3 - Sair")

        escolha = input("Escolha uma opção: ")

        if escolha == "1":
            print(f" Seu saldo atual é: R$ {usu_parmesao[3]:.2f}")

        elif escolha == "2":
            valor_pedido = float(input("Digite o valor para saque (múltiplo de 10): "))

            if valor_pedido % 10 != 0:
                print("❌ Só trabalhamos com múltiplos de 10, meu truta.")
            elif valor_pedido > 1500:
                print("❌ O limite por saque é R$1500, segura a emoção.")
            elif valor_pedido > usu_parmesao[3]:
                print("❌ sem saldo, tu não tem essa grana toda. Verifique seu saldo.")
            else:
                notas = [100, 50, 20, 10]
                quantidade_notas = [0, 0, 0, 0]
                valor_restante = int(valor_pedido)

                for i in range(4):
                    quantidade_notas[i] = valor_restante // notas[i]
                    valor_restante %= notas[i]

                usu_parmesao[3] -= valor_pedido

                print("✅ Saque realizado com sucesso.")
                print("$ Notas entregues:")
                for i in range(4):
                    if quantidade_notas[i] > 0:
                        print(f"{quantidade_notas[i]} nota(s) de R$ {notas[i]}")

                print(f"Saldo restante: R$ {usu_parmesao[3]:.2f}")

        elif escolha == "3":
            print(" Até logo, volte sempre para torrar mais grana!")
            break
        else:
            print("❌ Opção inválida. Tente de novo.")
