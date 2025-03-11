programa
{
	
	funcao inicio()
	{
		inteiro listadeImpares[5]
		inteiro listadePares[5]
		inteiro listaGeral[10]
		inteiro posicao = 0
			
		para(inteiro i=0; i < 5; i++)
		{
			escreva("Insira o ", i + 1, "º número ímpar:\n")
			leia(listadeImpares[i])
			
			se(listadeImpares[i] % 2 == 0)
			{
				escreva("Esse algoritmo só aceita números ímpares, insira novamente. \n")
				i--
			}
		}

			para(inteiro i=0; i < 5; i++)
			{
			escreva("Insira o ", i + 1, "º número par:\n")
			leia(listadePares[i])

			se(listadePares[i] % 2 == 1)
			{
				escreva("Esse algoritmo só aceita números pares, insira novamente. \n")
				i--
			}
			}
	
		para(inteiro i=0; i < 10; i = i + 2)
			{
					
				listaGeral[i] = listadeImpares[posicao]
				listaGeral[i+1] = listadePares[posicao]

				posicao++
			}

			mostra_lista(listaGeral)

	}

	funcao mostra_lista(inteiro listaGeral[])
	{
		para(inteiro i=0; i < 10; i++)
		{
			escreva(listaGeral[i], "\n")
		}
	}
}
